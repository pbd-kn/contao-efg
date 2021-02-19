<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package ModuleEfg_InsertTag
 * @copyright  P.Broghammer 
 * @author     P.Broghammer 
 * @package    ModuleEfg_InsertTag 
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */
/*
 * fügt eine Wert aus einem Efg Formular ein. Die daten müssen in tl_form gespeichert werden
 * Auswahlfeld ist das efgaliasfeld, das im Formulat angegeben ist 
 * Parameter
 * Liste: Aliasname des formulars (input)
 * value: Wert den das Alias Feldes aben soll (input)
 * column: Feldname der eingesetzt werden soll (value von column = result)
 * format: optional wenn vorhanden wir der gefundene Wert damit formatiert
 */    
namespace PBDKN\Efgco4\Resources\contao\classes;
   
class EfgInsertTag extends \Contao\Frontend
{
    /**
     * InsertTags für Efg Modul
     * {{efg_insert::Liste::value::column(::format)}}     insert Wert aus formular
     * {{efg_insertd::Liste::value::column(::format)}}    insert Wert aus formular (debugversion))
     */  
     /* database doku
      * https://de.contaowiki.org/Datenbank_Klasse_verwenden
      */                      
    public function Efg_InsertTags( $strTag )
    {
        $debug = false;
        $this->Date = new \Date(date('Ymd'),'Ymd');
        $heute = $this->Date->dayBegin;     // Tagesbeginn HEUTE
        $resstr = "";
        $arrTag = explode( '::', $strTag );
        
        if( $arrTag[0] !== 'efg_insert' ) {
          if ($arrTag[0] == 'efg_insertd' ) {
            $debug = true;
          } else {
            return false;
          }
        }
        if ($debug) $resstr .= $strTag . "<br>";
        $objForm = $this->Database->execute( "SELECT id,title,alias,efgAliasField FROM tl_form where alias='$arrTag[1]'");
        if($objForm->numRows == 0 ) {
          if($debug)$resstr .= "EFG Formular $arrTag[1] existiert nicht.";
          else $resstr="";
          return $resstr;
        }
        $tableID = $objForm->id;
        $tableTitle = $objForm->title;
        $tablealias = $objForm->alias;
        $tableEfgAliasField = $objForm->efgAliasField;
        if ($debug) {
          // 1. Datensatz ausgeben
          $resstr .= "numRows " . count($objForm) . " tableID $tableID<br>"; 
          $resstr .= "Title $tableTitle<br>"; 
          $resstr .= "tablealias $tablealias<br>"; 
          $resstr .= "tableEfgAliasField $tableEfgAliasField<br>"; 
          // alle weiteren ausgeben
          while($objForm->next())
          {
            $resstr .= "------id " .  $result->title . "<br";
          }
        }
        // besorge Spaltenname
        $objSpalte = @$this->Database->execute( "SELECT name FROM tl_form_field where label='" . $arrTag[3] . "'");
        if( $objSpalte->numRows == 0 ) {
          if($debug)$resstr .= "Label $arrTag[3] existiert nicht in tl_form_field.";
          else $resstr="";
          return $resstr;
        }
        $Spalte = $objSpalte->name;
        // besorge pid aus dem aliasfeld
        $objPid = @$this->Database->execute( "SELECT pid FROM tl_formdata_details where ff_name='$tableEfgAliasField' AND value='$arrTag[2]'");
        if( $objPid->numRows == 0 ) {
          if($debug)$resstr .= "Alias $arrTag[2] existiert nicht in Formular $arrTag[1].";
          else $resstr="";
          return $resstr;
        }
        $pid = $objPid->pid;
        if ($debug) $resstr .= "numRows Article " . count($objPid) . " pid $pid<br>"; 
        $objVal = @$this->Database->execute( "SELECT value FROM tl_formdata_details where ff_name='$Spalte' AND pid='$pid'");
        $val = $objVal->value;
        if ($debug)$resstr .= "$Spalte ($arrTag[3])  val $val<br>"; 
        if (count($arrTag) > 4) {
            $resstr .= sprintf($arrTag[4],$val);
        } else {
            $resstr .= $val;
        }  
        return "$resstr";
    }
}   
