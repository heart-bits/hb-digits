<?php

/**
 * Contao Open Source CMS
 *
 * @copyright  Sascha Wustmann 2014
 * @package    AnimateElements
 * @license    GNU/LGPL
 * @filesource
 */

/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['digits'] = '{type_legend},type,digit;';

$GLOBALS['TL_DCA']['tl_content']['fields']['digit'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fields']['digit'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('1', '2', '3', '4', '5', '6', '7', '8', '9'),
	'eval'                    => array('includeBlankOption'=>true, 'tl_class'=>'w50 clr'),
	'sql'                     => "varchar(2) NOT NULL default ''"
);
