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
// last created on 2020-12-25 09:19:27 by saving form ""



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
			'fields'                  => array('date', 'form', 'alias', 'be_notes' , 'Artikel', 'Preis1', 'Preis2', 'Preis3', 'Preis4', 'Preis5', 'Preis6', 'Kategorie', 'Subkategorie', 'Beschreibung', 'logo', 'galeriename', 'vorname', 'name', 'strasse', 'hausnummer', 'plz', 'ort', 'url', 'email', 'bemerkung', 'LFNR', 'AUSSTELUNGSJAHR', 'VON', 'BIS', 'AUSTELLUNGSORT', 'VERANSTALTER', 'AUSTELLUNGSTITEL', 'WEBSEITE', 'VEROEFFENTLICHT', 'PRESSE', 'HERAUSGEBER', 'INFO', 'VERWEIS', 'kategorieSubkategorie', 'artikelname'),
			/*
			'format'                  => '<div class="fd_wrap">
	<div class="fd_head">%s<span>[%s]</span></div>
	<div class="limit_height' . (!$GLOBALS['TL_CONFIG']['doNotCollapse'] ? ' h64' : '') . ' block">	<div class="fd_notes">%s</div>
	<div class="fd_row field_Artikel"><div class="fd_label">Artikel: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_Preis1"><div class="fd_label">Stückpreis: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_Preis2"><div class="fd_label">Paarpreis: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_Preis3"><div class="fd_label">Stückpreis2.3: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_Preis4"><div class="fd_label">Paarpreis2.3: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_Preis5"><div class="fd_label">StückpreisEK: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_Preis6"><div class="fd_label">PaarpreisEK: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_Kategorie"><div class="fd_label">Kategorie: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_Subkategorie"><div class="fd_label">Subkategorie: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_Beschreibung"><div class="fd_label">Beschreibung: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_logo"><div class="fd_label">logo: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_galeriename"><div class="fd_label">galerie name: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_vorname"><div class="fd_label">vorname: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_name"><div class="fd_label">name: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_strasse"><div class="fd_label">straße: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_hausnummer"><div class="fd_label">hausnummer: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_plz"><div class="fd_label">plz: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_ort"><div class="fd_label">ort: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_url"><div class="fd_label">www-adresse: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_email"><div class="fd_label">email: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_bemerkung"><div class="fd_label">Bemerkung: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_LFNR"><div class="fd_label">laufende nummer: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_AUSSTELUNGSJAHR"><div class="fd_label">im jahr: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_VON"><div class="fd_label">von: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_BIS"><div class="fd_label">bis: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_AUSTELLUNGSORT"><div class="fd_label">ort: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_VERANSTALTER"><div class="fd_label">veranstalter: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_AUSTELLUNGSTITEL"><div class="fd_label">ausstellung: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_WEBSEITE"><div class="fd_label">webseite: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_VEROEFFENTLICHT"><div class="fd_label">veröffentlicht: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_PRESSE"><div class="fd_label">presse: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_HERAUSGEBER"><div class="fd_label">herausgeber: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_INFO"><div class="fd_label">info: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_VERWEIS"><div class="fd_label">artikel: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_kategorieSubkategorie"><div class="fd_label">kategorieSubkategorie: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_artikelname"><div class="fd_label">artikelname: </div><div class="fd_value">%s </div></div>
		</div></div>',
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
		'default'                     => 'form,alias,date,ip,published,sorting;{confirmation_legend},confirmationSent,confirmationDate;{fdNotes_legend:hide},be_notes;{fdOwner_legend:hide},fd_member,fd_user,fd_member_group,fd_user_group;{fdDetails_legend},Artikel,Preis1,Preis2,Preis3,Preis4,Preis5,Preis6,Kategorie,Subkategorie,Beschreibung,logo,galeriename,vorname,name,strasse,hausnummer,plz,ort,url,email,bemerkung,LFNR,AUSSTELUNGSJAHR,VON,BIS,AUSTELLUNGSORT,VERANSTALTER,AUSTELLUNGSTITEL,WEBSEITE,VEROEFFENTLICHT,PRESSE,HERAUSGEBER,INFO,VERWEIS,kategorieSubkategorie,artikelname'
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
		'detailFields'               => array('Artikel','Preis1','Preis2','Preis3','Preis4','Preis5','Preis6','Kategorie','Subkategorie','Beschreibung','logo','galeriename','vorname','name','strasse','hausnummer','plz','ort','url','email','bemerkung','LFNR','AUSSTELUNGSJAHR','VON','BIS','AUSTELLUNGSORT','VERANSTALTER','AUSTELLUNGSTITEL','WEBSEITE','VEROEFFENTLICHT','PRESSE','HERAUSGEBER','INFO','VERWEIS','kategorieSubkategorie','artikelname'),
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
$GLOBALS['TL_DCA']['tl_formdata']['fields']['LFNR']['ff_id'] = 66;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['LFNR']['f_id'] = 8;
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
// 'VEROEFFENTLICHT'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VEROEFFENTLICHT']['label'] = array('veröffentlicht', '[VEROEFFENTLICHT] veröffentlicht');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VEROEFFENTLICHT']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VEROEFFENTLICHT']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VEROEFFENTLICHT']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VEROEFFENTLICHT']['search'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VEROEFFENTLICHT']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VEROEFFENTLICHT']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VEROEFFENTLICHT']['eval']['mandatory'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VEROEFFENTLICHT']['eval']['rgxp'] = 'date';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VEROEFFENTLICHT']['flag'] = 5;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VEROEFFENTLICHT']['eval']['maxlength'] = 20;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VEROEFFENTLICHT']['eval']['datepicker'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VEROEFFENTLICHT']['eval']['tl_class'] = 'wizard';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VEROEFFENTLICHT']['ff_id'] = 61;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VEROEFFENTLICHT']['f_id'] = 8;
// 'PRESSE'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['PRESSE']['label'] = array('presse', '[PRESSE] presse');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['PRESSE']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['PRESSE']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['PRESSE']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['PRESSE']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['PRESSE']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['PRESSE']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['PRESSE']['ff_id'] = 62;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['PRESSE']['f_id'] = 8;
// 'HERAUSGEBER'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['HERAUSGEBER']['label'] = array('herausgeber', '[HERAUSGEBER] herausgeber');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['HERAUSGEBER']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['HERAUSGEBER']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['HERAUSGEBER']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['HERAUSGEBER']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['HERAUSGEBER']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['HERAUSGEBER']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['HERAUSGEBER']['ff_id'] = 63;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['HERAUSGEBER']['f_id'] = 8;
// 'INFO'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['INFO']['label'] = array('info', '[INFO] info');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['INFO']['inputType'] = 'textarea';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['INFO']['formfieldType'] = 'textarea';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['INFO']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['INFO']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['INFO']['sorting'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['INFO']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['INFO']['eval']['cols'] = 40;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['INFO']['eval']['rows'] = 4;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['INFO']['ff_id'] = 64;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['INFO']['f_id'] = 8;
// 'VERWEIS'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VERWEIS']['label'] = array('artikel', '[VERWEIS] artikel');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VERWEIS']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VERWEIS']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VERWEIS']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VERWEIS']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VERWEIS']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VERWEIS']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VERWEIS']['eval']['rgxp'] = 'url';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VERWEIS']['ff_id'] = 65;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['VERWEIS']['f_id'] = 8;
// 'kategorieSubkategorie'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['kategorieSubkategorie']['label'] = array('kategorieSubkategorie', '[kategorieSubkategorie] kategorieSubkategorie');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['kategorieSubkategorie']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['kategorieSubkategorie']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['kategorieSubkategorie']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['kategorieSubkategorie']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['kategorieSubkategorie']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['kategorieSubkategorie']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['kategorieSubkategorie']['eval']['mandatory'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['kategorieSubkategorie']['ff_id'] = 67;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['kategorieSubkategorie']['f_id'] = 9;
// 'artikelname'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['artikelname']['label'] = array('artikelname', '[artikelname] artikelname');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['artikelname']['inputType'] = 'efgLookupSelect';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['artikelname']['formfieldType'] = 'efgLookupSelect';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['artikelname']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['artikelname']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['artikelname']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['artikelname']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['artikelname']['efgLookupOptions']['lookup_field'] = 'tl_article.alias';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['artikelname']['efgLookupOptions']['lookup_sort'] = '';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['artikelname']['efgLookupOptions']['lookup_val_field'] = 'tl_article.alias';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['artikelname']['efgLookupOptions']['lookup_where'] = 'alias like \'%popup%\'';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['artikelname']['eval']['mandatory'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['artikelname']['eval']['chosen'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['artikelname']['ff_id'] = 68;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['artikelname']['f_id'] = 9;

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
		$strRowLabel .= '<div class="limit_height' . (!$GLOBALS['TL_CONFIG']['doNotCollapse'] ? ' h64' : '') . ' block">';
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
		if (strlen($arrRow['VEROEFFENTLICHT']))
		{
			$strRowLabel .= '<div class="fd_row field_VEROEFFENTLICHT">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['VEROEFFENTLICHT']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['VEROEFFENTLICHT'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['PRESSE']))
		{
			$strRowLabel .= '<div class="fd_row field_PRESSE">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['PRESSE']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['PRESSE'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['HERAUSGEBER']))
		{
			$strRowLabel .= '<div class="fd_row field_HERAUSGEBER">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['HERAUSGEBER']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['HERAUSGEBER'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['INFO']))
		{
			$strRowLabel .= '<div class="fd_row field_INFO">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['INFO']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['INFO'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['VERWEIS']))
		{
			$strRowLabel .= '<div class="fd_row field_VERWEIS">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['VERWEIS']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['VERWEIS'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['kategorieSubkategorie']))
		{
			$strRowLabel .= '<div class="fd_row field_kategorieSubkategorie">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['kategorieSubkategorie']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['kategorieSubkategorie'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['artikelname']))
		{
			$strRowLabel .= '<div class="fd_row field_artikelname">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['artikelname']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['artikelname'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		$strRowLabel .= '</div>';
		$strRowLabel .= '</div></div>';

		return $strRowLabel;

	}

}
} 

