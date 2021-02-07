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
// last created on 2020-12-14 16:02:52 by saving form "Kontaktformular allgemein"



/**
 * Table tl_formdata defined by form "Kontaktformular allgemein"
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
			'fields'                  => array('date', 'form', 'alias', 'be_notes' , 'anrede', 'vorname', 'name', 'email', 'message', 'DATENSCHUTZ'),
			'format'                  => '<div class="fd_wrap">
	<div class="fd_head">%s<span>[%s]</span><span>%s</span></div>
		<div class="fd_notes">%s</div>
	<div class="fd_row field_anrede"><div class="fd_label">anrede: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_vorname"><div class="fd_label">ihr vorname: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_name"><div class="fd_label">ihr name: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_email"><div class="fd_label">email: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_message"><div class="fd_label">text: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_DATENSCHUTZ"><div class="fd_label">DATENSCHUTZ: </div><div class="fd_value">%s </div></div>
		</div>',
			/*
			'label_callback'          => array('tl_fd_kontaktformular_allgemein','getRowLabel')
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
				'button_callback'     => array('FormdataBackend', 'callbackEditButton'),
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
		'default'                     => 'form,alias,date,ip,published,sorting;{confirmation_legend},confirmationSent,confirmationDate;{fdNotes_legend:hide},be_notes;{fdOwner_legend:hide},fd_member,fd_user,fd_member_group,fd_user_group;{fdDetails_legend},anrede,vorname,name,email,message,DATENSCHUTZ'
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
		'detailFields'               => array('anrede','vorname','name','email','message','DATENSCHUTZ'),
		'formFilterKey'              => 'form',
		'formFilterValue'            => 'Kontaktformular allgemein'
	)
);

// Detail fields in table tl_formdata_details
// 'anrede'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['anrede']['label'] = array('anrede', '[anrede] anrede');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['anrede']['inputType'] = 'select';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['anrede']['formfieldType'] = 'select';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['anrede']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['anrede']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['anrede']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['anrede']['filter'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['anrede']['options']['herr'] = 'herr';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['anrede']['options']['frau'] = 'frau';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['anrede']['default'][] = 'herr';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['anrede']['eval']['chosen'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['anrede']['ff_id'] = 23;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['anrede']['f_id'] = 1;
// 'vorname'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['vorname']['label'] = array('ihr vorname', '[vorname] ihr vorname');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['vorname']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['vorname']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['vorname']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['vorname']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['vorname']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['vorname']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['vorname']['eval']['rgxp'] = 'extnd';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['vorname']['ff_id'] = 24;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['vorname']['f_id'] = 1;
// 'name'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['name']['label'] = array('ihr name', '[name] ihr name');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['name']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['name']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['name']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['name']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['name']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['name']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['name']['eval']['mandatory'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['name']['eval']['rgxp'] = 'extnd';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['name']['ff_id'] = 1;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['name']['f_id'] = 1;
// 'email'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['email']['label'] = array('email', '[email] email');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['email']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['email']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['email']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['email']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['email']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['email']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['email']['eval']['mandatory'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['email']['eval']['rgxp'] = 'email';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['email']['ff_id'] = 2;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['email']['f_id'] = 1;
// 'message'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['message']['label'] = array('text', '[message] text');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['message']['inputType'] = 'textarea';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['message']['formfieldType'] = 'textarea';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['message']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['message']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['message']['sorting'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['message']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['message']['default'] = 'guten tag frau besslich\n\nbitte senden sie mir informationen \nzum artikel\n{{get::name}}\nich habe folgende fragen:\n\n\nbitte nehmen sie kontakt mit mir auf.';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['message']['eval']['mandatory'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['message']['eval']['rgxp'] = 'extnd';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['message']['eval']['cols'] = 80;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['message']['eval']['rows'] = 10;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['message']['ff_id'] = 3;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['message']['f_id'] = 1;
// 'DATENSCHUTZ'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['DATENSCHUTZ']['label'] = array('DATENSCHUTZ', '[DATENSCHUTZ] ');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['DATENSCHUTZ']['inputType'] = 'radio';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['DATENSCHUTZ']['formfieldType'] = 'radio';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['DATENSCHUTZ']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['DATENSCHUTZ']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['DATENSCHUTZ']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['DATENSCHUTZ']['filter'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['DATENSCHUTZ']['options']['1'] = 'datenschutz akzeptiert';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['DATENSCHUTZ']['eval']['mandatory'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['DATENSCHUTZ']['ff_id'] = 41;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['DATENSCHUTZ']['f_id'] = 1;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['DATENSCHUTZ']['ff_class'] = 'datenschutz';

/**
 * Class tl_fd_kontaktformular_allgemein
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
if (!class_exists('tl_fd_kontaktformular_allgemein', false)) {
class tl_fd_kontaktformular_allgemein extends \Backend
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
		if (strlen($arrRow['anrede']))
		{
			$strRowLabel .= '<div class="fd_row field_anrede">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['anrede']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['anrede'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['vorname']))
		{
			$strRowLabel .= '<div class="fd_row field_vorname">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['vorname']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['vorname'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['name']))
		{
			$strRowLabel .= '<div class="fd_row field_name">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['name']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['name'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['email']))
		{
			$strRowLabel .= '<div class="fd_row field_email">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['email']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['email'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['message']))
		{
			$strRowLabel .= '<div class="fd_row field_message">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['message']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['message'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['DATENSCHUTZ']))
		{
			$strRowLabel .= '<div class="fd_row field_DATENSCHUTZ">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['DATENSCHUTZ']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['DATENSCHUTZ'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		$strRowLabel .= '</div></div>';

		return $strRowLabel;

	}

}
} 

