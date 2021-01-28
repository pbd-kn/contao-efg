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

// This file is created when saving a form in form generator
// last created on 2020-12-25 09:19:27 by saving form "Artikelliste"



/**
 * Table tl_formdata defined by form "Artikelliste"
 */
$GLOBALS['TL_DCA']['tl_formdata'] = array
(
	// Config
	'config' => array
	(
		'dataContainer'               => 'FormdataPBD',
		'ctable'                      => array('tl_formdata_details'),
		'closed'                      => false,
		'notEditable'                 => false,
		'enableVersioning'            => false,
		'doNotCopyRecords'            => true,
		'doNotDeleteRecords'          => true,
		'switchToEdit'                => true
	),
	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 2,
			'fields'                  => array('date DESC'),
			'flag'                    => 8,
			'panelLayout'             => 'filter;search,sort,limit',
		),
		'label' => array
		(
			'fields'                  => array('date', 'form', 'alias', 'be_notes' , 'Artikel', 'Preis1', 'Preis2', 'Preis3', 'Preis4', 'Preis5', 'Preis6', 'Kategorie', 'Subkategorie', 'Beschreibung'),
			'format'                  => '<div class="fd_wrap">
	<div class="fd_head">%s<span>[%s]</span><span>%s</span></div>
		<div class="fd_notes">%s</div>
	<div class="fd_row field_Artikel"><div class="fd_label">Artikel: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_Preis1"><div class="fd_label">Stückpreis: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_Preis2"><div class="fd_label">Paarpreis: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_Preis3"><div class="fd_label">Stückpreis2.3: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_Preis4"><div class="fd_label">Paarpreis2.3: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_Preis5"><div class="fd_label">StückpreisEK: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_Preis6"><div class="fd_label">PaarpreisEK: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_Kategorie"><div class="fd_label">Kategorie: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_Subkategorie"><div class="fd_label">Subkategorie: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_Beschreibung"><div class="fd_label">Beschreibung: </div><div class="fd_value">%s </div></div>
		</div>',
			/*
			'label_callback'          => array('tl_fd_artikelliste','getRowLabel')
			*/
		),
		'global_operations' => array
		(
			'import' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_formdata']['import'],
				'href'                => 'key=import',
				'class'               => 'header_csv_import',
				'attributes'          => 'onclick="Backend.getScrollOffset();"'
			),
			'export' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_formdata']['export'],
				'href'                => 'act=export',
				'class'               => 'header_csv_export',
				'attributes'          => 'onclick="Backend.getScrollOffset();"'
			),
			'exportxls' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_formdata']['exportxls'],
				'href'                => 'act=exportxls',
				'class'               => 'header_xls_export',
				'attributes'          => 'onclick="Backend.getScrollOffset();"'
			),
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset();"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_formdata']['edit'],
				'href'                => 'act=edit',
				'button_callback'     => array('PBDKN\Efgco4\Resources\contao\classes\FormdataBackend', 'callbackEditButton'),
				'icon'                => 'edit.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_formdata']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_formdata']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),
	// Palettes
	'palettes' => array
	(
		'default'                     => 'form,alias,date,ip,published,sorting;{confirmation_legend},confirmationSent,confirmationDate;{fdNotes_legend:hide},be_notes;{fdOwner_legend:hide},fd_member,fd_user,fd_member_group,fd_user_group;{fdDetails_legend},Artikel,Preis1,Preis2,Preis3,Preis4,Preis5,Preis6,Kategorie,Subkategorie,Beschreibung'
	),

	// Base fields in table tl_formdata
	'fields' => array
	(
		'form' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_formdata']['form'],
			'inputType'               => 'select',
			'exclude'                 => true,
			'search'                  => false,
			'filter'                  => false,
			'sorting'                 => false,
			'options_callback'        => array('tl_formdata', 'getFormsSelect'),
			'eval'                    => array('chosen' => true, 'tl_class'=> 'w50')
		),
		'date' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_formdata']['date'],
			'inputType'               => 'text',
			'exclude'                 => true,
			'search'                  => true,
			'sorting'                 => true,
			'filter'                  => true,
			'flag'                    => 8,
			'eval'                    => array('rgxp' => 'datim', 'datepicker' => true, 'tl_class' => 'w50 wizard'),
		),
		'ip' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_formdata']['ip'],
			'inputType'               => 'text',
			'exclude'                 => true,
			'search'                  => true,
			'sorting'                 => false,
			'filter'                  => false,
			'eval'                    => array('tl_class'=>'w50'),
		),
		'fd_member' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_formdata']['fd_member'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'eval'                    => array('chosen' => true, 'mandatory' => false, 'includeBlankOption' => true, 'tl_class'=>'w50'),
			'options_callback'        => array('tl_formdata', 'getMembersSelect'),
		),
		'fd_user' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_formdata']['fd_user'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'eval'                    => array('chosen' => true, 'mandatory' => false, 'includeBlankOption' => true, 'tl_class'=>'w50'),
			'options_callback'        => array('tl_formdata', 'getUsersSelect'),
		),
		'fd_member_group' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_formdata']['fd_member_group'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'eval'                    => array('chosen' => true, 'mandatory' => false, 'includeBlankOption' => true, 'tl_class'=>'w50'),
			'options_callback'        => array('tl_formdata', 'getMemberGroupsSelect'),
		),
		'fd_user_group' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_formdata']['fd_user_group'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'eval'                    => array('chosen' => true, 'mandatory' => false, 'includeBlankOption' => true, 'tl_class'=>'w50'),
			'options_callback'        => array('tl_formdata', 'getUserGroupsSelect'),
		),
		'published' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_formdata']['published'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12 cbx clr'),
			// 'default'                 => '1'
		),
		'sorting' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_formdata']['sorting'],
			'exclude'                 => true,
			'filter'                  => false,
			'inputType'               => 'text',
			'eval'                    => array('rgxp' => 'digit', 'maxlength' => 10, 'tl_class'=>'w50')
		),
		'alias' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_formdata']['alias'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'alnum', 'unique'=>true, 'spaceToUnderscore'=>true, 'maxlength'=>64, 'tl_class'=>'w50'),
			'save_callback' => array
			(
				array('tl_formdata', 'generateAlias')
			)
		),
		'confirmationSent' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_formdata']['confirmationSent'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50', 'doNotCopy'=>true, 'isBoolean'=>true)
		),
		'confirmationDate' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_formdata']['confirmationDate'],
			'exclude'                 => true,
			'filter'                  => true,
			'flag'                    => 8,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'datim', 'datepicker' => true, 'tl_class'=>'w50 wizard')
		),
		'be_notes' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_formdata']['be_notes'],
			'inputType'               => 'textarea',
			'exclude'                 => true,
			'search'                  => true,
			'sorting'                 => false,
			'filter'                  => false,
			'eval'                    => array('rte' => 'tinyMCE', 'cols' => 80,'rows' => 5, 'style' => 'height: 80px'),
		),
		'import_source' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_formdata']['import_source'],
			'eval'                    => array('fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true, 'extensions'=>'csv', 'class'=>'mandatory')
		)
	),
	'tl_formdata' => array
	(
		'baseFields'                 => array('id','sorting','tstamp','form','ip','date','fd_member','fd_user','fd_member_group','fd_user_group','published','alias','be_notes','confirmationSent','confirmationDate'),
		'detailFields'               => array('Artikel','Preis1','Preis2','Preis3','Preis4','Preis5','Preis6','Kategorie','Subkategorie','Beschreibung'),
		'formFilterKey'              => 'form',
		'formFilterValue'            => 'Artikelliste'
	)
);

// Detail fields in table tl_formdata_details
// 'Artikel'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Artikel']['label'] = array('Artikel', '[Artikel] Artikel');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Artikel']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Artikel']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Artikel']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Artikel']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Artikel']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Artikel']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Artikel']['eval']['mandatory'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Artikel']['ff_id'] = 15;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Artikel']['f_id'] = 4;
// 'Preis1'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis1']['label'] = array('Stückpreis', '[Preis1] Stückpreis');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis1']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis1']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis1']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis1']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis1']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis1']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis1']['eval']['rgxp'] = 'extnd';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis1']['ff_id'] = 16;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis1']['f_id'] = 4;
// 'Preis2'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis2']['label'] = array('Paarpreis', '[Preis2] Paarpreis');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis2']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis2']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis2']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis2']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis2']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis2']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis2']['eval']['rgxp'] = 'extnd';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis2']['ff_id'] = 17;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis2']['f_id'] = 4;
// 'Preis3'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis3']['label'] = array('Stückpreis2.3', '[Preis3] Stückpreis2.3');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis3']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis3']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis3']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis3']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis3']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis3']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis3']['eval']['rgxp'] = 'extnd';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis3']['ff_id'] = 21;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis3']['f_id'] = 4;
// 'Preis4'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis4']['label'] = array('Paarpreis2.3', '[Preis4] Paarpreis2.3');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis4']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis4']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis4']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis4']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis4']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis4']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis4']['eval']['rgxp'] = 'extnd';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis4']['ff_id'] = 22;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis4']['f_id'] = 4;
// 'Preis5'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis5']['label'] = array('StückpreisEK', '[Preis5] StückpreisEK');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis5']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis5']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis5']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis5']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis5']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis5']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis5']['eval']['rgxp'] = 'extnd';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis5']['ff_id'] = 69;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis5']['f_id'] = 4;
// 'Preis6'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis6']['label'] = array('PaarpreisEK', '[Preis6] PaarpreisEK');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis6']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis6']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis6']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis6']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis6']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis6']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis6']['eval']['rgxp'] = 'extnd';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis6']['ff_id'] = 70;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis6']['f_id'] = 4;
// 'Kategorie'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Kategorie']['label'] = array('Kategorie', '[Kategorie] Kategorie');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Kategorie']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Kategorie']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Kategorie']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Kategorie']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Kategorie']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Kategorie']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Kategorie']['ff_id'] = 18;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Kategorie']['f_id'] = 4;
// 'Subkategorie'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Subkategorie']['label'] = array('Subkategorie', '[Subkategorie] Subkategorie');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Subkategorie']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Subkategorie']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Subkategorie']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Subkategorie']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Subkategorie']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Subkategorie']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Subkategorie']['eval']['rgxp'] = 'alnum';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Subkategorie']['ff_id'] = 19;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Subkategorie']['f_id'] = 4;
// 'Beschreibung'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Beschreibung']['label'] = array('Beschreibung', '[Beschreibung] Beschreibung');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Beschreibung']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Beschreibung']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Beschreibung']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Beschreibung']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Beschreibung']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Beschreibung']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Beschreibung']['ff_id'] = 20;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Beschreibung']['f_id'] = 4;

/**
 * Class tl_fd_artikelliste
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @copyright  Thomas Kuhn 2007-2014
 * @author     Thomas Kuhn <mail@th-kuhn.de>
 * @package    Efg
 */
/**
 * erweitert fuer contao 4
 * PBD verhinderung der doppeldefinition der class bei delete eines Eintrags aus der Tabelle
 */
if (!class_exists('tl_fd_artikelliste', false)) {
class tl_fd_artikelliste extends \Backend
{

	/**
	 * Database result
	 * @var array
	 */
	protected $arrData = null;

	public function __construct()
	{
		parent::__construct();
	}


	/*
	* Create list label for formdata item
	* This can be used to customize the backend list view for formdata
	*/
	public function getRowLabel($arrRow)
	{
		$strRowLabel = '';

		$strKey = 'unpublished';

		$strRowLabel .= '<div class="fd_wrap">';
		$strRowLabel .= '<div class="fd_head">' . date($GLOBALS['TL_CONFIG']['datimFormat'], $arrRow['date']) . '<span>[' . $arrRow['form'] . ']</span><span>' . $arrRow['alias'] . '</span></div>';
		$strRowLabel .= '<div class="fd_notes">' . $arrRow['be_notes'] . '</div>';
		$strRowLabel .= '<div class="mark_links">';
		if (strlen($arrRow['Artikel']))
		{
			$strRowLabel .= '<div class="fd_row field_Artikel">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['Artikel']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['Artikel'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['Preis1']))
		{
			$strRowLabel .= '<div class="fd_row field_Preis1">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis1']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['Preis1'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['Preis2']))
		{
			$strRowLabel .= '<div class="fd_row field_Preis2">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis2']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['Preis2'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['Preis3']))
		{
			$strRowLabel .= '<div class="fd_row field_Preis3">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis3']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['Preis3'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['Preis4']))
		{
			$strRowLabel .= '<div class="fd_row field_Preis4">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis4']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['Preis4'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['Preis5']))
		{
			$strRowLabel .= '<div class="fd_row field_Preis5">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis5']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['Preis5'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['Preis6']))
		{
			$strRowLabel .= '<div class="fd_row field_Preis6">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['Preis6']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['Preis6'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['Kategorie']))
		{
			$strRowLabel .= '<div class="fd_row field_Kategorie">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['Kategorie']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['Kategorie'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['Subkategorie']))
		{
			$strRowLabel .= '<div class="fd_row field_Subkategorie">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['Subkategorie']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['Subkategorie'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['Beschreibung']))
		{
			$strRowLabel .= '<div class="fd_row field_Beschreibung">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['Beschreibung']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['Beschreibung'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		$strRowLabel .= '</div></div>';

		return $strRowLabel;

	}

}
} 

