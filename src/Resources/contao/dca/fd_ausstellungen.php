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
// last created on 2020-12-15 16:46:07 by saving form "Ausstellungen"



/**
 * Table tl_formdata defined by form "Ausstellungen"
 */
$GLOBALS['TL_DCA']['tl_formdata'] = array
(
	// Config
	'config' => array
	(
		'dataContainer'               => 'Formdata',
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
			'fields'                  => array('date', 'form', 'alias', 'be_notes' , 'LFNR', 'AUSSTELUNGSJAHR', 'VON', 'BIS', 'AUSTELLUNGSORT', 'VERANSTALTER', 'AUSTELLUNGSTITEL', 'WEBSEITE'),
			'format'                  => '<div class="fd_wrap">
	<div class="fd_head">%s<span>[%s]</span><span>%s</span></div>
		<div class="fd_notes">%s</div>
	<div class="fd_row field_LFNR"><div class="fd_label">laufende nummer: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_AUSSTELUNGSJAHR"><div class="fd_label">im jahr: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_VON"><div class="fd_label">von: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_BIS"><div class="fd_label">bis: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_AUSTELLUNGSORT"><div class="fd_label">ort: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_VERANSTALTER"><div class="fd_label">veranstalter: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_AUSTELLUNGSTITEL"><div class="fd_label">ausstellung: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_WEBSEITE"><div class="fd_label">webseite: </div><div class="fd_value">%s </div></div>
		</div>',
			/*
			'label_callback'          => array('tl_fd_ausstellungen','getRowLabel')
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
		'default'                     => 'form,alias,date,ip,published,sorting;{confirmation_legend},confirmationSent,confirmationDate;{fdNotes_legend:hide},be_notes;{fdOwner_legend:hide},fd_member,fd_user,fd_member_group,fd_user_group;{fdDetails_legend},LFNR,AUSSTELUNGSJAHR,VON,BIS,AUSTELLUNGSORT,VERANSTALTER,AUSTELLUNGSTITEL,WEBSEITE'
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
		'detailFields'               => array('LFNR','AUSSTELUNGSJAHR','VON','BIS','AUSTELLUNGSORT','VERANSTALTER','AUSTELLUNGSTITEL','WEBSEITE'),
		'formFilterKey'              => 'form',
		'formFilterValue'            => 'Ausstellungen'
	)
);

// Detail fields in table tl_formdata_details
// 'LFNR'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['LFNR']['label'] = array('laufende nummer', '[LFNR] laufende nummer');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['LFNR']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['LFNR']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['LFNR']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['LFNR']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['LFNR']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['LFNR']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['LFNR']['eval']['mandatory'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['LFNR']['eval']['minlength'] = 4;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['LFNR']['eval']['maxlength'] = 4;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['LFNR']['eval']['rgxp'] = 'digit';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['LFNR']['ff_id'] = 48;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['LFNR']['f_id'] = 7;
// 'AUSSTELUNGSJAHR'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['AUSSTELUNGSJAHR']['label'] = array('im jahr', '[AUSSTELUNGSJAHR] im jahr');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['AUSSTELUNGSJAHR']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['AUSSTELUNGSJAHR']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['AUSSTELUNGSJAHR']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['AUSSTELUNGSJAHR']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['AUSSTELUNGSJAHR']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['AUSSTELUNGSJAHR']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['AUSSTELUNGSJAHR']['eval']['mandatory'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['AUSSTELUNGSJAHR']['eval']['minlength'] = 4;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['AUSSTELUNGSJAHR']['eval']['maxlength'] = 4;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['AUSSTELUNGSJAHR']['eval']['rgxp'] = 'digit';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['AUSSTELUNGSJAHR']['ff_id'] = 42;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['AUSSTELUNGSJAHR']['f_id'] = 7;
// 'VON'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VON']['label'] = array('von', '[VON] von');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VON']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VON']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VON']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VON']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VON']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VON']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VON']['ff_id'] = 46;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VON']['f_id'] = 7;
// 'BIS'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['BIS']['label'] = array('bis', '[BIS] bis');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['BIS']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['BIS']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['BIS']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['BIS']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['BIS']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['BIS']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['BIS']['ff_id'] = 47;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['BIS']['f_id'] = 7;
// 'AUSTELLUNGSORT'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['AUSTELLUNGSORT']['label'] = array('ort', '[AUSTELLUNGSORT] ort');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['AUSTELLUNGSORT']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['AUSTELLUNGSORT']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['AUSTELLUNGSORT']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['AUSTELLUNGSORT']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['AUSTELLUNGSORT']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['AUSTELLUNGSORT']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['AUSTELLUNGSORT']['ff_id'] = 43;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['AUSTELLUNGSORT']['f_id'] = 7;
// 'VERANSTALTER'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VERANSTALTER']['label'] = array('veranstalter', '[VERANSTALTER] veranstalter');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VERANSTALTER']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VERANSTALTER']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VERANSTALTER']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VERANSTALTER']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VERANSTALTER']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VERANSTALTER']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VERANSTALTER']['ff_id'] = 49;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VERANSTALTER']['f_id'] = 7;
// 'AUSTELLUNGSTITEL'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['AUSTELLUNGSTITEL']['label'] = array('ausstellung', '[AUSTELLUNGSTITEL] ausstellung');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['AUSTELLUNGSTITEL']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['AUSTELLUNGSTITEL']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['AUSTELLUNGSTITEL']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['AUSTELLUNGSTITEL']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['AUSTELLUNGSTITEL']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['AUSTELLUNGSTITEL']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['AUSTELLUNGSTITEL']['ff_id'] = 44;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['AUSTELLUNGSTITEL']['f_id'] = 7;
// 'WEBSEITE'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['WEBSEITE']['label'] = array('webseite', '[WEBSEITE] webseite');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['WEBSEITE']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['WEBSEITE']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['WEBSEITE']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['WEBSEITE']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['WEBSEITE']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['WEBSEITE']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['WEBSEITE']['eval']['rgxp'] = 'url';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['WEBSEITE']['ff_id'] = 51;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['WEBSEITE']['f_id'] = 7;

/**
 * Class tl_fd_ausstellungen
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @copyright  Thomas Kuhn 2007-2014
 * @author     Thomas Kuhn <mail@th-kuhn.de>
 * @package    Efg
 */
/**
 * erweitert fuer contao 4
 * pbd verhinderung der doppeldefinition der class bei delete eines Eintrags aus der Tabelle
 */
if (!class_exists('tl_fd_ausstellungen', false)) {
class tl_fd_ausstellungen extends \Backend
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
		if (strlen($arrRow['LFNR']))
		{
			$strRowLabel .= '<div class="fd_row field_LFNR">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['LFNR']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['LFNR'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['AUSSTELUNGSJAHR']))
		{
			$strRowLabel .= '<div class="fd_row field_AUSSTELUNGSJAHR">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['AUSSTELUNGSJAHR']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['AUSSTELUNGSJAHR'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['VON']))
		{
			$strRowLabel .= '<div class="fd_row field_VON">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['VON']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['VON'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['BIS']))
		{
			$strRowLabel .= '<div class="fd_row field_BIS">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['BIS']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['BIS'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['AUSTELLUNGSORT']))
		{
			$strRowLabel .= '<div class="fd_row field_AUSTELLUNGSORT">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['AUSTELLUNGSORT']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['AUSTELLUNGSORT'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['VERANSTALTER']))
		{
			$strRowLabel .= '<div class="fd_row field_VERANSTALTER">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['VERANSTALTER']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['VERANSTALTER'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['AUSTELLUNGSTITEL']))
		{
			$strRowLabel .= '<div class="fd_row field_AUSTELLUNGSTITEL">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['AUSTELLUNGSTITEL']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['AUSTELLUNGSTITEL'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['WEBSEITE']))
		{
			$strRowLabel .= '<div class="fd_row field_WEBSEITE">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['WEBSEITE']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['WEBSEITE'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		$strRowLabel .= '</div></div>';

		return $strRowLabel;

	}

}

} 

