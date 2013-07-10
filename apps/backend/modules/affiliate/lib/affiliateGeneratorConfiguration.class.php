<?php

/**
 * affiliate module configuration.
 *
 * @package    hanssymfony
 * @subpackage affiliate
 * @author     Hans Lieberich
 * @version    SVN: $Id: configuration.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
// apps/backend/modules/affiliate/lib/affiliateGeneratorConfiguration.class.php
class affiliateGeneratorConfiguration extends BaseAffiliateGeneratorConfiguration
{
  public function getFilterDefaults()
  {
    return array('is_active' => '0');
  }
}
