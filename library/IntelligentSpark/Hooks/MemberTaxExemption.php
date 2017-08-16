<?php

/**
 * Isotope eCommerce for Contao Open Source CMS
 *
 * Copyright (C) 2009-2014 terminal42 gmbh & Isotope eCommerce Workgroup
 *
 * @package    Isotope
 * @link       http://isotopeecommerce.org
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */

namespace IntelligentSpark\Hooks;

use Isotope\Isotope;

class MemberTaxExemption {


    public function getTaxExemption($objCollection) {

        if(\FrontendUser::getInstance()->iso_tax_exempt=='1')
        {
            return false;
        }

        return true;
    }

}