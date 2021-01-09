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
// last created on 2020-12-14 16:02:36 by saving form "Galerieliste"



/**
 * Table tl_formdata defined by form "Galerieliste"
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
			'fields'                  => array('date', 'form', 'alias', 'be_notes' , 'logo', 'galeriename', 'vorname', 'name', 'strasse', 'hausnummer', 'plz', 'ort', 'url', 'email', 'bemerkung'),
			'format'                  => '<div class="fd_wrap">
	<div class="fd_head">%s<span>[%s]</span><span>%s</span></div>
	<div class="limit_height' . (!$GLOBALS['TL_CONFIG']['doNotCollapse'] ? ' h64' : '') . ' block">	<div class="fd_notes">%s</div>
	<div class="fd_row field_logo"><div class="fd_label">logo: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_galeriename"><div class="fd_label">galerie name: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_vorname"><div class="fd_label">vorname: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_name"><div class="fd_label">name: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_strasse"><div class="fd_label">straße: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_hausnummer"><div class="fd_label">hausnummer: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_plz"><div class="fd_label">plz: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_ort"><div class="fd_label">ort: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_url"><div class="fd_label">www-adresse: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_email"><div class="fd_label">email: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_bemerkung"><div class="fd_label">Bemerkung: </div><div class="fd_value">%s </div></div>
		</div></div>',
			/*
			'label_callback'          => array('tl_fd_galerieliste','getRowLabel')
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
		'default'                     => 'form,alias,date,ip,published,sorting;{confirmation_legend},confirmationSent,confirmationDate;{fdNotes_legend:hide},be_notes;{fdOwner_legend:hide},fd_member,fd_user,fd_member_group,fd_user_group;{fdDetails_legend},logo,galeriename,vorname,name,strasse,hausnummer,plz,ort,url,email,bemerkung'
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
		'detailFields'               => array('logo','galeriename','vorname','name','strasse','hausnummer','plz','ort','url','email','bemerkung'),
		'formFilterKey'              => 'form',
		'formFilterValue'            => 'Galerieliste'
	)
);

// Detail fields in table tl_formdata_details
// 'logo'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['logo']['label'] = array('logo', '[logo] logo');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['logo']['inputType'] = 'fileTree';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['logo']['formfieldType'] = 'upload';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['logo']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['logo']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['logo']['sorting'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['logo']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['logo']['storeFile'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['logo']['eval']['files'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['logo']['eval']['filesOnly'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['logo']['eval']['extensions'] = 'jpg,jpeg,gif,png,pdf,doc,xls,ppt';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['logo']['eval']['fieldType'] = 'radio';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['logo']['ff_id'] = 38;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['logo']['f_id'] = 5;
// 'galeriename'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['galeriename']['label'] = array('galerie name', '[galeriename] galerie name');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['galeriename']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['galeriename']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['galeriename']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['galeriename']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['galeriename']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['galeriename']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['galeriename']['eval']['mandatory'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['galeriename']['eval']['rgxp'] = 'extnd';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['galeriename']['ff_id'] = 27;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['galeriename']['f_id'] = 5;
// 'vorname'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['vorname']['label'] = array('vorname', '[vorname] vorname');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['vorname']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['vorname']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['vorname']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['vorname']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['vorname']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['vorname']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['vorname']['eval']['rgxp'] = 'extnd';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['vorname']['ff_id'] = 28;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['vorname']['f_id'] = 5;
// 'name'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['name']['label'] = array('name', '[name] name');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['name']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['name']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['name']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['name']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['name']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['name']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['name']['eval']['rgxp'] = 'extnd';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['name']['ff_id'] = 29;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['name']['f_id'] = 5;
// 'strasse'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['strasse']['label'] = array('straße', '[strasse] straße');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['strasse']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['strasse']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['strasse']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['strasse']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['strasse']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['strasse']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['strasse']['eval']['rgxp'] = 'extnd';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['strasse']['ff_id'] = 30;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['strasse']['f_id'] = 5;
// 'hausnummer'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['hausnummer']['label'] = array('hausnummer', '[hausnummer] hausnummer');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['hausnummer']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['hausnummer']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['hausnummer']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['hausnummer']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['hausnummer']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['hausnummer']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['hausnummer']['eval']['rgxp'] = 'extnd';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['hausnummer']['ff_id'] = 31;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['hausnummer']['f_id'] = 5;
// 'plz'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['plz']['label'] = array('plz', '[plz] plz');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['plz']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['plz']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['plz']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['plz']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['plz']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['plz']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['plz']['eval']['minlength'] = 4;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['plz']['eval']['maxlength'] = 5;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['plz']['eval']['rgxp'] = 'digit';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['plz']['ff_id'] = 32;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['plz']['f_id'] = 5;
// 'ort'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['ort']['label'] = array('ort', '[ort] ort');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['ort']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['ort']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['ort']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['ort']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['ort']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['ort']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['ort']['eval']['rgxp'] = 'alnum';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['ort']['ff_id'] = 33;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['ort']['f_id'] = 5;
// 'url'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['url']['label'] = array('www-adresse', '[url] www-adresse');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['url']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['url']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['url']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['url']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['url']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['url']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['url']['eval']['rgxp'] = 'url';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['url']['ff_id'] = 34;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['url']['f_id'] = 5;
// 'email'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['email']['label'] = array('email', '[email] email');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['email']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['email']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['email']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['email']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['email']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['email']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['email']['eval']['rgxp'] = 'email';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['email']['ff_id'] = 35;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['email']['f_id'] = 5;
// 'bemerkung'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['bemerkung']['label'] = array('Bemerkung', '[bemerkung] Bemerkung');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['bemerkung']['inputType'] = 'textarea';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['bemerkung']['formfieldType'] = 'textarea';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['bemerkung']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['bemerkung']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['bemerkung']['sorting'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['bemerkung']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['bemerkung']['eval']['rgxp'] = 'extnd';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['bemerkung']['eval']['cols'] = 60;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['bemerkung']['eval']['rows'] = 8;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['bemerkung']['ff_id'] = 36;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['bemerkung']['f_id'] = 5;

/**
 * Class tl_fd_galerieliste
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
if (!class_exists('tl_fd_galerieliste', false)) {
class tl_fd_galerieliste extends \Backend
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
		$strRowLabel .= '<div class="limit_height' . (!$GLOBALS['TL_CONFIG']['doNotCollapse'] ? ' h64' : '') . ' block">';
		$strRowLabel .= '<div class="fd_notes">' . $arrRow['be_notes'] . '</div>';
		$strRowLabel .= '<div class="mark_links">';
		if (strlen($arrRow['logo']))
		{
			$strRowLabel .= '<div class="fd_row field_logo">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['logo']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['logo'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['galeriename']))
		{
			$strRowLabel .= '<div class="fd_row field_galeriename">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['galeriename']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['galeriename'] . ' </div>';
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
		if (strlen($arrRow['strasse']))
		{
			$strRowLabel .= '<div class="fd_row field_strasse">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['strasse']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['strasse'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['hausnummer']))
		{
			$strRowLabel .= '<div class="fd_row field_hausnummer">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['hausnummer']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['hausnummer'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['plz']))
		{
			$strRowLabel .= '<div class="fd_row field_plz">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['plz']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['plz'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['ort']))
		{
			$strRowLabel .= '<div class="fd_row field_ort">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['ort']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['ort'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['url']))
		{
			$strRowLabel .= '<div class="fd_row field_url">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['url']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['url'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['email']))
		{
			$strRowLabel .= '<div class="fd_row field_email">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['email']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['email'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['bemerkung']))
		{
			$strRowLabel .= '<div class="fd_row field_bemerkung">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['bemerkung']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['bemerkung'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		$strRowLabel .= '</div>';
		$strRowLabel .= '</div></div>';

		return $strRowLabel;

	}

}
} 

