<?php

/**
 * gourmet actions.
 *
 * @package    ./
 * @subpackage gourmet
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class GourmetActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('default', 'module');
  }
  public function executeList(sfWebRequest $request)
  {
    $this->list = sgShop::$List;
  }
  public function executeDinnerShop(sfWebRequest $request)
  {
    $this->list = sgShop::$List;
  }
  public function executeDetail(sfWebRequest $request)
  {
    $id = $request->getParameter('shopId');
    $this->shopDetail = sgShop::$shopDetail[$id];
    $this->id = $id;
  }
}
