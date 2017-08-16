<?php

/**
 * Isotope eCommerce for Contao Open Source CMS
 *
 * Copyright (C) 2016 Intelligent Spark
 *
 * @package Isotope Custom Step "Delivery Date"
 * @link       http://isotopeecommerce.org
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */


$GLOBALS['ISO_HOOKS']['useTaxRate'][] = array('IntelligentSpark\Hooks\MemberTaxExemption','getTaxExemption');
