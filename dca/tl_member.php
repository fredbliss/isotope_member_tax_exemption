<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * @copyright  Intelligent Spark 2017
 * @author     Fred Bliss <fred.bliss@intelligentspark.com>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */


/**
 * Table tl_iso_payment_modules
 */
$GLOBALS['TL_DCA']['tl_member']['palettes']['default'] .= ';{tax_legend},iso_tax_exempt';

$GLOBALS['TL_DCA']['tl_member']['fields']['iso_tax_exempt'] = array
(
    'label'		=> &$GLOBALS['TL_LANG']['tl_member']['iso_tax_exempt'],
    'inputType'	=> 'checkbox',
    'eval'		=> array(),
    'sql'       => "char(1) NOT NULL default ''"
);