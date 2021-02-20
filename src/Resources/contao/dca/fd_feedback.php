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
// last created on 2021-02-20 15:31:27 by saving form ""



/**
 * Table tl_formdata defined by form ""
 */
$GLOBALS['TL_DCA']['tl_formdata'] = array
(
	// Config
	'config' => array
	(
		'dataContainer'               => 'Formdata',
		'ctable'                      => array('tl_formdata_details'),
		'closed'                      => true,
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
			'fields'                  => array('date', 'form', 'alias', 'be_notes' , 'MYNAME', 'MYWERT', 'TNAME', 'TWERT'),
			/*
			'format'                  => '<div class="fd_wrap">
	<div class="fd_head">%s<span>[%s]</span></div>
		<div class="fd_notes">%s</div>
	<div class="fd_row field_MYNAME"><div class="fd_label">MyName: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_MYWERT"><div class="fd_label">MyWert: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_TNAME"><div class="fd_label">tname: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_TWERT"><div class="fd_label">twert: </div><div class="fd_value">%s </div></div>
		</div>',
			*/
			'label_callback'          => array('tl_fd_feedback','getRowLabel')
		),
		'global_operations' => array
		(
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
		'default'                     => 'form,alias,date,ip,published,sorting;{confirmation_legend},confirmationSent,confirmationDate;{fdNotes_legend:hide},be_notes;{fdOwner_legend:hide},fd_member,fd_user,fd_member_group,fd_user_group;{fdDetails_legend},MYNAME,MYWERT,TNAME,TWERT'
	),

	// Base fields in table tl_formdata
	'fields' => array
	(
		'form' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_formdata']['form'],
			'inputType'               => 'select',
			'exclude'                 => false,
			'search'                  => true,
			'filter'                  => true,
			'sorting'                 => true,
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
		'detailFields'               => array('MYNAME','MYWERT','TNAME','TWERT'),
	)
);

// Detail fields in table tl_formdata_details
// 'MYNAME'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['MYNAME']['label'] = array('MyName', '[MYNAME] MyName');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['MYNAME']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['MYNAME']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['MYNAME']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['MYNAME']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['MYNAME']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['MYNAME']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['MYNAME']['ff_id'] = 7;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['MYNAME']['f_id'] = 9;
// 'MYWERT'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['MYWERT']['label'] = array('MyWert', '[MYWERT] MyWert');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['MYWERT']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['MYWERT']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['MYWERT']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['MYWERT']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['MYWERT']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['MYWERT']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['MYWERT']['ff_id'] = 8;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['MYWERT']['f_id'] = 9;
// 'TNAME'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['TNAME']['label'] = array('tname', '[TNAME] tname');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['TNAME']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['TNAME']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['TNAME']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['TNAME']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['TNAME']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['TNAME']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['TNAME']['ff_id'] = 9;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['TNAME']['f_id'] = 10;
// 'TWERT'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['TWERT']['label'] = array('twert', '[TWERT] twert');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['TWERT']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['TWERT']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['TWERT']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['TWERT']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['TWERT']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['TWERT']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['TWERT']['ff_id'] = 10;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['TWERT']['f_id'] = 10;

/**
 * Class tl_fd_
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
if (!class_exists('tl_fd_feedback', false)) {
class tl_fd_feedback extends \Backend
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
		if (strlen($arrRow['MYNAME']))
		{
			$strRowLabel .= '<div class="fd_row field_MYNAME">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['MYNAME']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['MYNAME'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['MYWERT']))
		{
			$strRowLabel .= '<div class="fd_row field_MYWERT">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['MYWERT']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['MYWERT'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['TNAME']))
		{
			$strRowLabel .= '<div class="fd_row field_TNAME">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['TNAME']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['TNAME'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['TWERT']))
		{
			$strRowLabel .= '<div class="fd_row field_TWERT">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['TWERT']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['TWERT'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		$strRowLabel .= '</div></div>';

		return $strRowLabel;

	}

}
} 

