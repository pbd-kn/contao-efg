<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Efg
 * @link    http://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

class_alias(PBDKN\Efgco4\Resources\contao\drivers\DC_Formdata::class, 'DC_Formdata');
class_alias(PBDKN\Efgco4\Resources\contao\classes\Formdata::class, 'Formdata');
class_alias(PBDKN\Efgco4\Resources\contao\classes\FormdataBackend::class, 'FormdataBackend');

/**
 * Register the namespaces

ClassLoader::addNamespaces(array
(
	'PBDKN\Efgco4'
));
 */

/**
 * Register the classes
 * wird hofentlich von composer erledigt
 *
ClassLoader::addClasses(array
(
	// Classes
	'Efg\Formdata'                => 'system/modules/efg_co4/classes/Formdata.php',
	'Efg\FormdataBackend'         => 'system/modules/efg_co4/classes/FormdataBackend.php',
	'Efg\FormdataComments'        => 'system/modules/efg_co4/classes/FormdataComments.php',
	'Efg\FormdataProcessor'       => 'system/modules/efg_co4/classes/FormdataProcessor.php',

	// Drivers
	'Efg\DC_Formdata'             => 'system/modules/efg_co4/drivers/DC_Formdata.php',

	// Forms
	'Efg\EfgFormGallery'          => 'system/modules/efg_co4/forms/EfgFormGallery.php',
	'Efg\EfgFormImageSelect'      => 'system/modules/efg_co4/forms/EfgFormImageSelect.php',
	'Efg\EfgFormLookupCheckbox'   => 'system/modules/efg_co4/forms/EfgFormLookupCheckbox.php',
	'Efg\EfgFormLookupRadio'      => 'system/modules/efg_co4/forms/EfgFormLookupRadio.php',
	'Efg\EfgFormLookupSelectMenu' => 'system/modules/efg_co4/forms/EfgFormLookupSelectMenu.php',
	'Efg\EfgFormPaginator'        => 'system/modules/efg_co4/forms/EfgFormPaginator.php',
	'Efg\ExtendedForm'            => 'system/modules/efg_co4/forms/ExtendedForm.php',

	// Modules
	'Efg\ModuleFormdataListing'   => 'system/modules/efg_co4/modules/ModuleFormdataListing.php',

	// Widgets
	'Efg\EfgLookupOptionWizard'   => 'system/modules/efg_co4/widgets/EfgLookupOptionWizard.php',
));

 */

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'efg_internal_config'       => 'PBDKN/Efgco4/Resources/contao/templates/internal',
	'efg_internal_dca_formdata' => 'system/modules/efg_co4/templates/internal',
	'efg_internal_modules'      => 'system/modules/efg_co4/templates/internal',
	'edit_fd_default'           => 'system/modules/efg_co4/templates/forms',
	'form_efg_imageselect'      => 'system/modules/efg_co4/templates/forms',
	'form_paginator'            => 'system/modules/efg_co4/templates/forms',
	'info_fd_simple_default'    => 'system/modules/efg_co4/templates/listing/info',
	'info_fd_table_default'     => 'system/modules/efg_co4/templates/listing/info',
	'list_fd_simple_default'    => 'system/modules/efg_co4/templates/listing/list',
	'list_fd_table_default'     => 'system/modules/efg_co4/templates/listing/list',
));
