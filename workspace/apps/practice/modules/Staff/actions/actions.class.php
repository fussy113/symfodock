<?php

/**
 * staff actions.
 *
 * @package    ./
 * @subpackage staff
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class staffActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
  }

  public function executeList(sfWebRequest $request)
  {
    //$this->list = StaffTable::getInstance()->createQuery('s')
      //->execute();
    $this->list = sgStaff::$List;

  }

  public function executeDetail(sfWebRequest $request)
  {
    $id = $request->getParameter('staffId');
    //$this->staff = StaffTable::getInstance()->createQuery('s')
      //->where('s.id= ?', $id)
      //->limit(1)
      //->fetchOne();
    $this->staffData = sgStaff::$List[$id];
    $this->id = $id;
  }
}
