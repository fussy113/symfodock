<?php

/**
 * Page actions.
 *
 * @package    sf14
 * @subpackage Page
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PageActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $page = PageTable::getInstance()->findOneBySlug('top');
      $pageList = PageTable::getInstance()->createQuery('page')
                    ->select('page.title,page.body')
                    ->execute();
      $this->page = $page;
      $this->pageList = $pageList;
  }

  // showアクション,paramで:slugを渡し、pageテーブルから取得する
  public function executeShow(sfWebRequest $request){
    $slug = $request->getParameter('slug');
    $this->page = PageTable::getInstance()->findOneBySlug($slug);
  }

  // カテゴリがニュースのレコードを取得する
  public function executeNewsList(sfWebRequest $request){
    $this->pageList = PageTable::getInstance()->findByCategory('news');
  }

  // showアクション,paramで:slugを渡し、pageテーブルから取得する
  public function executeNewsShow(sfWebRequest $request){
    $slug = $request->getParameter('slug');
    $this->page = PageTable::getInstance()->findOneBySlug($slug);
  }

}
