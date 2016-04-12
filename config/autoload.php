<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package Contacts
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Modules
	'Contao\digits'    				 => 'system/modules/hb-digits/elements/digits.php'
));


/**
 * Register the templates
 */
 TemplateLoader::addFiles(array
 (
 	'ce_digits' => 'system/modules/hb-digits/templates',
 ));
