<?php

/**
 * Page components.
 *
 * @package    symfony-band
 * @subpackage Page
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PageComponents extends sfComponents
{

  public function executeListLatestNews()
  {
    $this->pageList = PageTable::getInstance()->createQuery('p')
      ->where('p.category = ?', 'news')
      ->limit(5)
      ->execute();
  }
}
