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
// last created on 2020-12-25 09:19:27
/*
 * you can set the swiftmail transport set in efg_internal_config.html
 * example define('SENDMAILCOMMAND', ini_get ('sendmail_path') . ' -t')
*/

define('SENDMAILCOMMAND', ini_get ('sendmail_path') . ' -t');    // set mailtransport for Swiftmailer


/**
* to fix height of style class w50 in backend
*/
if (TL_MODE == 'BE')
{
	$GLOBALS['TL_CSS'][] = 'PBDKN\Efgco4\Resources\contao\assests\w50_fix.css';
}


/**
 * Use class ExtendedForm     

 */
$GLOBALS['FE_MOD']['application']['form'] = 'PBDKN\Efgco4\Resources\contao\forms\ExtendedForm';
$GLOBALS['TL_CTE']['includes']['form'] = 'PBDKN\Efgco4\Resources\contao\forms\ExtendedForm';


/**
 * -------------------------------------------------------------------------
 * BACK END MODULES
 * -------------------------------------------------------------------------
 */

array_insert($GLOBALS['BE_MOD'], 1, array('formdata' => array()));

// this is used for the form independent "Feedback" module
$GLOBALS['BE_MOD']['formdata']['feedback'] = array
(
	'tables'     => array('tl_formdata', 'tl_formdata_details'),
	'icon'       => 'system/modules/efg_co4/assets/formdata_all.gif',
	'stylesheet' => 'system/modules/efg_co4/assets/style.css'
);

// following are used for the form dependent modules
$GLOBALS['BE_MOD']['formdata']['fd_artikelliste'] = array
(
	'tables'     => array('tl_formdata', 'tl_formdata_details'),
	'import'     => array('PBDKN\Efgco4\Resources\contao\classes\FormdataBackend', 'importCsv'),
	'icon'       => 'system/modules/efg_co4/assets/formdata.gif',
	'stylesheet' => 'system/modules/efg_co4/assets/style.css'
);
$GLOBALS['BE_MOD']['formdata']['fd_galerieliste'] = array
(
	'tables'     => array('tl_formdata', 'tl_formdata_details'),
	'import'     => array('PBDKN\Efgco4\Resources\contao\classes\FormdataBackend', 'importCsv'),
	'icon'       => 'system/modules/efg_co4/assets/formdata.gif',
	'stylesheet' => 'system/modules/efg_co4/assets/style.css'
);
$GLOBALS['BE_MOD']['formdata']['fd_ausstellungen'] = array
(
	'tables'     => array('tl_formdata', 'tl_formdata_details'),
	'import'     => array('PBDKN\Efgco4\Resources\contao\classes\FormdataBackend', 'importCsv'),
	'icon'       => 'system/modules/efg_co4/assets/formdata.gif',
	'stylesheet' => 'system/modules/efg_co4/assets/style.css'
);
$GLOBALS['BE_MOD']['formdata']['fd_presse'] = array
(
	'tables'     => array('tl_formdata', 'tl_formdata_details'),
	'import'     => array('PBDKN\Efgco4\Resources\contao\classes\FormdataBackend', 'importCsv'),
	'icon'       => 'system/modules/efg_co4/assets/formdata.gif',
	'stylesheet' => 'system/modules/efg_co4/assets/style.css'
);
$GLOBALS['BE_MOD']['formdata']['fd_popup-artikel'] = array
(
	'tables'     => array('tl_formdata', 'tl_formdata_details'),
	'import'     => array('PBDKN\Efgco4\Resources\contao\classes\FormdataBackend', 'importCsv'),
	'icon'       => 'system/modules/efg_co4/assets/formdata.gif',
	'stylesheet' => 'system/modules/efg_co4/assets/style.css'
);


/**
 * -------------------------------------------------------------------------
 * FRONT END MODULES
 * -------------------------------------------------------------------------
 */

array_insert($GLOBALS['FE_MOD']['application'], count($GLOBALS['FE_MOD']['application']), array
(
	'formdatalisting' => 'PBDKN\Efgco4\Resources\contao\modules\ModuleFormdataListing'
));


/**
 * -------------------------------------------------------------------------
 * HOOKS
 * -------------------------------------------------------------------------
 */

$GLOBALS['TL_HOOKS']['processFormData'][] =        array('PBDKN\Efgco4\Resources\contao\classes\FormdataProcessor', 'processSubmittedData');
$GLOBALS['TL_HOOKS']['outputFrontendTemplate'][] = array('PBDKN\Efgco4\Resources\contao\classes\FormdataProcessor', 'processConfirmationContent');
$GLOBALS['TL_HOOKS']['listComments'][] =           array('PBDKN\Efgco4\Resources\contao\classes\FormdataComments', 'listComments');
$GLOBALS['TL_HOOKS']['getSearchablePages'][] =     array('PBDKN\Efgco4\Resources\contao\classes\Formdata', 'getSearchablePages');
$GLOBALS['TL_HOOKS']['executePostActions'][] =     array('PBDKN\Efgco4\Resources\contao\classes\Formdata', 'executePostActions');
