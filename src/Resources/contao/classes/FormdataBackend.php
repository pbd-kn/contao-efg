<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package   Efg
 * @author    Thomas Kuhn <mail@th-kuhn.de>
 * @license   http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 * @copyright Thomas Kuhn 2007-2014
 */


/**
 * Namespace
 */
/*
 * PBD
 * unter contao 4 ist die Neuerstellung des Caches nicht möglich. Muss evtl separat nachgeholt werden
 */
namespace PBDKN\Efgco4\Resources\contao\classes;



/**
 * Class FormdataBackend
 *
 * @copyright  Thomas Kuhn 2007-2014
 * @author     Thomas Kuhn <mail@th-kuhn.de>
 * @package    Efg
 */
class FormdataBackend extends \Backend
{

	/**
	 * Data container object
	 * @var object
	 */
	protected $objDc;

	/**
	 * Current record
	 * @var array
	 */
	protected $arrData = array();

	// Types of form fields with storable data
	protected $arrFFstorable = array();

	// Mapping of frontend form fields to backend widgets
	protected $arrMapTL_FFL = array();

	public function __construct()
	{

		parent::__construct();
$this->log("PBD FormdataBackend construct", __METHOD__, TL_GENERAL);

		$this->loadDataContainer('tl_form_field');
		$this->import('Formdata');

		// Types of form fields with storable data
		$this->arrFFstorable = $this->Formdata->arrFFstorable;

		// Mapping of frontend form fields to backend widgets
		$this->arrMapTL_FFL = $this->Formdata->arrMapTL_FFL;
	}

	public function generate()
	{
$this->log("PBD FormdataBackend generate input do " . \Input::get('do') , __METHOD__, TL_GENERAL);
		if (\Input::get('do') && \Input::get('do') != 'feedback')
		{
			if ($this->Formdata->arrStoringForms[\Input::get('do')])
			{
				$session = $this->Session->getData();
				$session['filter']['tl_feedback']['form'] = $this->Formdata->arrStoringForms[\Input::get('do')]['title'];

				$this->Session->setData($session);
			}
		}

		if (\Input::get('act') == '')
		{
			return $this->objDc->showAll();
		}
		else
		{
			$act = \Input::get('act');
			return $this->objDc->$act();
		}
	}

	/**
	 * Create DCA files
	 */
	public function createFormdataDca(\DataContainer $dc)
	{

		$this->intFormId = $dc->id;
		$arrForm = \Database::getInstance()->prepare("SELECT * FROM tl_form WHERE id=?")
			->execute($this->intFormId)
			->fetchAssoc();

		$strFormKey = (!empty($arrForm['alias'])) ? $arrForm['alias'] : str_replace('-', '_', standardize($arrForm['title']));
$this->log("PBD FormdataBackend createFormdataDca strFormKey $strFormKey formid " . $this->intFormId . " alias " . $arrForm['alias'], __METHOD__, TL_GENERAL);
		$this->updateConfig(array($strFormKey => $arrForm));
	}

	/**
	 * Callback edit button
	 * @return string
	 */
	public function callbackEditButton($row, $href, $label, $title, $icon, $attributes, $strTable, $arrRootIds, $arrChildRecordIds, $blnCircularReference, $strPrevious, $strNext)
	{
$this->log("PBD FormdataBackend callbackEditButton title $title", __METHOD__, TL_GENERAL);
		$return = '';

		$strDcaKey = array_search($row['form'], $this->Formdata->arrFormsDcaKey);
		if ($strDcaKey)
		{
			$return .= '<a href="' . \Backend::addToUrl($href . '&amp;do=fd_' . $strDcaKey . '&amp;id=' . $row['id']) . '" title="' . specialchars($title) . '"' . $attributes.'>' . \Image::getHtml($icon, $label) . '</a> ';
		}

		return $return;
	}

	/**  PBD
	 * Update efg/config/config.php, dca and language files
	 * Parameter null alle form die kennzeichnung store data in form
	 * sonst key der Form => Satz aus tl-Form
	 */
	public function updateConfig($arrForms = null)
	{
    /*
    * PBD
    * Get all forms marked to store data in tl_formdata (Formdata.php)
    				$this->arrStoringForms[$strFormKey] = $objForms->row(); id,title,alias,formID,useFormValues,useFieldNames
				$this->arrFormsDcaKey[$strFormKey] = $objForms->title;
    */
$this->log("PBD FormdataBackend updateConfig ", __METHOD__, TL_GENERAL);
		$arrStoringForms = $this->Formdata->arrStoringForms;  
foreach ($arrStoringForms as $k=>$v) {
$this->log("PBD a FormdataBackend updateConfig arrStoringForms[$k] " . implode(",", $v), __METHOD__, TL_GENERAL);
}
        

		if ($arrForms == null)
		{
$this->log("PBD FormdataBackend updateConfig arrForms  null", __METHOD__, TL_GENERAL);
			$arrForms = $arrStoringForms;
		} else {
foreach ($arrForms as $k=>$v) {
$this->log("PBD FormdataBackend updateConfig arrForms[$k] " . implode(", ", $v), __METHOD__, TL_GENERAL);
}        
        }
    //APP_ENV environment variable can contain either prod or dev
    $env =  $_ENV["APP_ENV"];
//$this->log("PBD FormdataBackend updateConfig env $env " . TL_ROOT . "/var/cache/$env/contao/", __METHOD__, TL_GENERAL);
    $cp = realpath(TL_ROOT . "/var/cache/$env/contao/");
$this->log("PBD FormdataBackend updateConfig realpath cache $cp ", __METHOD__, TL_GENERAL);
//$c=\Config::get('adminEmail');
//$this->log("PBD FormdataBackend updateConfig config get $c ", __METHOD__, TL_GENERAL);
//foreach ($GLOBALS['TL_CONFIG'] as $k=>$v){
//  $this->log("PBD FormdataBackend updateConfig TL_CONFIG[$k]: $v ", __METHOD__, TL_GENERAL);
//}


    if (TRUE === $cp)  {      // cache vorhanden
      $cachepath =  $cp . "dca/";
		  // Remove unused dca files
$this->log("PBD FormdataBackend updateConfig cachepath DCA $cachepath ", __METHOD__, TL_GENERAL);
		  $arrFiles = scan(TL_ROOT . $cachepath, true);          // im Kernel scandir mit cache

		  foreach ($arrFiles as $strFile)
		  {
  			if (substr($strFile, 0, 3) == 'fd_')
	  		{
		  		if (empty($arrStoringForms) || !in_array(str_replace('.php', '', substr($strFile, 3)) , array_keys($arrStoringForms)))
			  	{
  					$objFile = new \File($cachepath . '/' . $strFile);
	  				$objFile->delete();
		  		}
			  }
  		}
  
  		// Remove cached dca files
	  	if (is_dir(TL_ROOT . $cachepath))
		  {
  			$arrFiles = scan(TL_ROOT . $cachepath , true);

	  		foreach ($arrFiles as $strFile)
		  	{
  				if (substr($strFile, 0, 3) == 'fd_' || $strFile == 'tl_formdata.php' || $strFile == 'tl_formdata_details.php')
	  			{
$this->log("PBD FormdataBackend updateConfig remove cached File " . $cachepath . "/" . $strFile, __METHOD__, TL_GENERAL);
		  			$objFile = new \File($cachepath . "/" . $strFile);
			  		$objFile->delete();
				  }
  			}
	  	}
    }
	// config/config.php
	$tplConfig = $this->newTemplate('efg_internal_config');
	$tplConfig->arrStoringForms = $arrStoringForms;
foreach ($arrStoringForms as $k=>$v) {
  foreach ($v as $k1=>$v1) {
$this->log("PBD b FormdataBackend updateConfig arrStoringForms[$k][$k1]$v1 ", __METHOD__, TL_GENERAL); 
  }  
}

	$objConfig = new \File('vendor/pbd-kn/contao-efg-bundle/src/Resources/contao/config/config.php');

	$objConfig->write($tplConfig->parse());   // PBD config.php neu erzeugen muss cache neu erzeugt werden??
	$objConfig->close();

$this->log("PBD efg_co4 rewrite vendor/pbd-kn/contao-efg-bundle/src/Resources/contao/config/config.php", __METHOD__, TL_GENERAL);    // PBD

	if (empty($arrStoringForms)) {  
		return; // keine Formulare vorhanden deren Daten gespeichert werden sollen
	}

	// languages/modules.php
    $arrModLangs = scan(TL_ROOT . '/vendor/pbd-kn/contao-efg-bundle/src/Resources/contao/languages');
	$arrLanguages = $this->getLanguages();
$cachepathlang = "/var/cache/$env/contao/languages/";
      $cachepath =  $cp . "dca/";
	foreach ($arrModLangs as $strModLang)
	{

		// Remove cached language files
		if (is_file(TL_ROOT . $cachepathlang . $strModLang .'/modules.php'))
		{
			$objFile = new \File($cachepathlang . $strModLang . '/modules.php');
			$objFile->delete();
$this->log("PBD FormdataBackend updateConfig remove cached Language File " . $cachepathlang . $strModLang . '/modules.php' , __METHOD__, TL_GENERAL);
		}
		if (is_file(TL_ROOT . $cachepathlang . $strModLang .'/tl_formdata.php'))
		{
			$objFile = new \File($cachepathlang . $strModLang . '/tl_formdata.php');
			$objFile->delete();
$this->log("PBD FormdataBackend updateConfig remove cached Language File " . $cachepathlang . $strModLang . '/tl_formdata.php', __METHOD__, TL_GENERAL);
		}

		// Create language files
		if (array_key_exists($strModLang, $arrLanguages))
		{
			$strFile = sprintf('%s/vendor/pbd-kn/contao-efg-bundle/src/Resources/contao/languages/%s/%s.php', TL_ROOT,  $strModLang, 'tl_efg_modules');
$this->log("PBD FormdataBackend languageFile " . $strFile, __METHOD__, TL_GENERAL);
			if (file_exists($strFile))
			{
				include($strFile);
$this->log("PBD FormdataBackend include " . $strFile, __METHOD__, TL_GENERAL);
	    	}

		  $tplMod = $this->newTemplate('efg_internal_modules');
		  $tplMod->arrStoringForms = $arrStoringForms;
		  $objMod = new \File('vendor/pbd-kn/contao-efg-bundle/src/Resources/contao/languages/'.$strModLang.'/modules.php');
		  $objMod->write($tplMod->parse());
		  $objMod->close();
$this->log("PBD FormdataBackend neu erzeugt " . 'vendor/pbd-kn/contao-efg-bundle/src/Resources/contao/languages/'.$strModLang.'/modules.php', __METHOD__, TL_GENERAL);
	   }
    }

	// dca/fd_FORMKEY.php
	if (is_array($arrForms) && !empty($arrForms))
	{
		foreach ($arrForms as $arrForm)
		{
			if (!empty($arrForm))
			{
				$arrForm = \Database::getInstance()->prepare("SELECT * FROM tl_form WHERE id=?")
					->execute($arrForm['id'])
					->fetchAssoc();

				$arrFields = array();
				$arrFieldNamesById = array();

				$arrSelectors = array();
				$arrPalettes = array();
				$strCurrentPalette = '';
				$strPreviousPalette = '';
$this->log("PBD FormdataBackend a) bearbeite FORM id:  " . $arrForm['id'] . " title: " . $arrForm['title'], __METHOD__, TL_GENERAL);
				// Get all form fields of this form
				$arrFormFields = $this->Formdata->getFormFieldsAsArray($arrForm['id']);

				if (!empty($arrFormFields))
				{
					foreach ($arrFormFields as $strFieldKey => $arrField)
					{

						// Ignore not storable fields and some special fields like checkbox CC, fields of type password ...
						if (!in_array($arrField['type'], $this->arrFFstorable)
							|| ($arrField['type'] == 'checkbox' && $strFieldKey == 'cc'))
						{
							continue;
						}

						// Set current palette name (for 'conditionalforms' and 'cm_alternativeforms')
						if (($arrField['formfieldType'] == 'condition' && $arrField['conditionType'] == 'start')
							|| ($arrField['formfieldType'] == 'cm_alternative' && $arrField['cm_alternativeType'] == 'cm_start')
							|| ($arrField['formfieldType'] == 'cm_alternative' && $arrField['cm_alternativeType'] == 'cm_else'))
						{
							$arrSelectors[] = $arrField['name'];

							if ($arrField['formfieldType'] == 'cm_alternative' && $arrField['cm_alternativeType'] == 'cm_start')
							{
								if ($strCurrentPalette != '')
								{
									$strPreviousPalette = $strCurrentPalette;
								}
								$strCurrentPalette = $arrField['name'].'_0';

								$arrField['options'] = array(array('value' => '', 'label' => '-'), array('value' => '0', 'label' => $arrField['cm_alternativelabel']), array('value' => '1', 'label' => $arrField['cm_alternativelabelelse']));
								$arrField['value'] = $arrField['cm_alternativelabel'];

								// Add field to palette if we are inside a palette
								if ($strPreviousPalette != '')
								{
									$arrPalettes[$strPreviousPalette][] = $arrField['name'];
								}
							}
							elseif ($arrField['formfieldType'] == 'cm_alternative' && $arrField['cm_alternativeType'] == 'cm_else')
							{
								if ($strCurrentPalette != '')
								{
									if ($strCurrentPalette != $arrField['name'].'_0')
									{
										$strPreviousPalette = $strCurrentPalette;
									}
								}
								$strCurrentPalette = $arrField['name'].'_1';
							}
							else
							{
								if ($strCurrentPalette != '')
								{
									$strPreviousPalette = $strCurrentPalette;
								}
								$strCurrentPalette = $arrField['name'];
								// Add field to palette if we are inside a palette
								if ($strPreviousPalette != '')
								{
									$arrPalettes[$strPreviousPalette][] = $arrField['name'];
								}
							}
						}
						// Ignore conditionalforms conditionType 'stop' and cm_alternativeforms cm_alternativeType 'cm_stop', reset palette name
						if (($arrField['formfieldType'] == 'condition' && $arrField['conditionType'] == 'stop')
							|| ($arrField['formfieldType'] == 'cm_alternative' && $arrField['cm_alternativeType'] == 'cm_stop'))
						{
							if ($strPreviousPalette != '')
							{
								$strCurrentPalette = $strPreviousPalette;
								$strPreviousPalette = '';
							}
							else
							{
								$strCurrentPalette = '';
							}
							continue;
						}
						if (!in_array($strFieldKey, array_keys($arrFields))
							&& !($arrField['formfieldType'] == 'cm_alternative' && $arrField['cm_alternativeType'] == 'cm_else'))
						{
							$arrFields[$strFieldKey] = $arrField;
							$arrFieldNamesById[$arrField['id']] = $strFieldKey;
						}
						// Add field to palette
						if ($strCurrentPalette != '')
						{
							if (!($arrField['formfieldType'] == 'condition' && $arrField['conditionType'] == 'start')
								&& !($arrField['formfieldType'] == 'cm_alternative' && in_array($arrField['cm_alternativeType'], array('cm_start', 'cm_else', 'cm_stop'))))
							{
								$arrPalettes[$strCurrentPalette][] = $arrField['name'];
							}
						}
					}
				}
				if (!empty($arrSelectors))
				{
					$arrSelectors = array_unique($arrSelectors);
				}
				$strFormKey = (!empty($arrForm['alias'])) ? $arrForm['alias'] : str_replace('-', '_', standardize($arrForm['title']));
$this->log("PBD FormdataBackend felder vor newTemplate bearbeitet: $strFormKey ", __METHOD__, TL_GENERAL);
				$tplDca = $this->newTemplate('efg_internal_dca_formdata');
				$tplDca->strFormKey = $strFormKey;
				$tplDca->arrForm = $arrForm;
				$tplDca->arrStoringForms = $arrStoringForms;
				$tplDca->arrFields = $arrFields;
				$tplDca->arrFieldNamesById = $arrFieldNamesById;
				$tplDca->arrSelectors = $arrSelectors;
				$tplDca->arrPalettes = $arrPalettes;
				// Enable backend confirmation mail
				$blnBackendMail = false;
				if ($arrForm['sendConfirmationMail'] || strlen($arrForm['confirmationMailText']))
				{
					$blnBackendMail = true;
				}
				$tplDca->blnBackendMail = $blnBackendMail;
				$objDca = new \File('vendor/pbd-kn/contao-efg-bundle/src/Resources/contao/dca/fd_' . $strFormKey . '.php');
				$objDca->write($tplDca->parse());
				$objDca->close();
$this->log("efg_co4 dca rewrite " . 'vendor/pbd-kn/contao-efg-bundle/src/Resources/contao/dca/fd_' . $strFormKey . '.php', __METHOD__, TL_GENERAL);  // PBD
			}
		}
	}
	// overall dca/fd_feedback.php
	// Get all form fields of all storing forms
	if (!empty($arrStoringForms))
	{
		$arrAllFields = array();
		$arrFieldNamesById = array();
		foreach ($arrStoringForms as $strFormKey => $arrForm)
		{
			// Get all form fields of this form
$this->log("PBD FormdataBackend b) bearbeite FORM id:  " . $arrForm['id'] . " title: " . $arrForm['title'], __METHOD__, TL_GENERAL);

			$arrFormFields = $this->Formdata->getFormFieldsAsArray($arrForm['id']);
			if (!empty($arrFormFields))
			{
$this->log("PBD FormdataBackend b) arrFormFields da FORM id:  " . $arrForm['id'] . " title: " . $arrForm['title'], __METHOD__, TL_GENERAL);
				foreach ($arrFormFields as $strFieldKey => $arrField)
				{
$this->log("PBD FormdataBackend b) arrFormFields da $strFieldKey type " . $arrField['formfieldType'], __METHOD__, TL_GENERAL);
					// Ignore not storable fields and some special fields like checkbox CC, fields of type password ...
					if (!in_array($arrField['formfieldType'], $this->arrFFstorable)
						|| ($arrField['formfieldType'] == 'checkbox' && $strFieldKey == 'cc')
						|| ($arrField['formfieldType'] == 'condition' && $arrField['conditionType'] == 'stop')
						|| ($arrField['formfieldType'] == 'cm_alternative' && in_array($arrField['cm_alternativeType'], array('cm_else', 'cm_stop'))))
					{
$this->log("PBD FormdataBackend b) arrFormFields da $strFieldKey type ignored" . $arrField['formfieldType'], __METHOD__, TL_GENERAL);
						continue;
					}
					$arrAllFields[$strFieldKey] = $arrField;
					$arrFieldNamesById[$arrField['id']] = $strFieldKey;
				}
			}
		}

		$strFormKey = 'feedback';
		$tplDca = $this->newTemplate('efg_internal_dca_formdata');
		$tplDca->arrForm = array('key' => 'feedback', 'title'=> $this->arrForm['title']);
		$tplDca->arrStoringForms = $arrStoringForms;
		$tplDca->arrFields = $arrAllFields;
		$tplDca->arrFieldNamesById = $arrFieldNamesById;

		$objDca = new \File('vendor/pbd-kn/contao-efg-bundle/src/Resources/contao/dca/fd_' . $strFormKey . '.php');
		$objDca->write($tplDca->parse());
		$objDca->close();
$this->log("efg_co4 dca rewrite " . 'vendor/pbd-kn/contao-efg-bundle/src/Resources/contao/dca/fd_' . $strFormKey . '.php', __METHOD__, TL_GENERAL);  // PBD
	}
$this->log("PBD FormdataBackend vor rebuild internal cache ", __METHOD__, TL_GENERAL);
	// Rebuild internal cache
	if (!$GLOBALS['TL_CONFIG']['bypassCache'])
	{
		$this->import('Automator');        // PBD korrektur im Automator existieren die Routinen nicht mehr

//      PBD   das gibts in contao4 nicht mehr 
//			$this->Automator->generateConfigCache();
//			$this->Automator->generateDcaCache();
//			$this->Automator->generateDcaExtracts();
        //$this->Automator->purgeInternalCache(); // löscht den internen cache
        //$this->Automator->generateInternalCache(); // Dauert u.U etwas
$this->log("PBD FormdataBackend updateConfig Bitte Cache neu aufbauen", __METHOD__, TL_GENERAL);
        \Message::addInfo('Cache gel&ouml;scht. Bitte neu erzeugen');

	}

}

	/**
	 * Return a new template object
	 * @param string
	 * @return object
	 */
	private function newTemplate($strTemplate)
	{
        $deb=\Config::get('debugMode');        // im Debugmodus wird der Text TEMPLATE START und TEMPLATE ENDE eingefügt
                                               // das führt bei den internen php templates zu Fehlern
        \Config::set('debugMode',false); 
		$objTemplate = new \BackendTemplate($strTemplate);
		$objTemplate->folder = 'efg_co4';
        \Config::set('debugMode',$deb); 
		return $objTemplate;
	}


	/**
	 * Import Form data from CSV file
	 * @param object Datacontainer
	 * @return string CSV imort form
	 */
	public function importCsv($dc)
	{
//$this->log("PBD FormdataBackend importCsv key " . \Input::get('key'), __METHOD__, TL_GENERAL);
		if (\Input::get('key') != 'import')
		{
			return '';
		}
//$this->log("PBD FormdataBackend importCsv key ok " . \Input::get('key'), __METHOD__, TL_GENERAL);
//$this->log("PBD FormdataBackend importCsv table " . $dc->table . " id " . $dc->id, __METHOD__, TL_GENERAL);
//$s= $dc->importFile();
//$this->log("PBD FormdataBackend importCsv retval $s ", __METHOD__, TL_GENERAL);
		return $dc->importFile();   // PBD baut File die selection auf
	}

}
