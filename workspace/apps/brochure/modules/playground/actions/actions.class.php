<?php
  class playgroundActions extends sfActions
  {
    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request)
    {
      // $this->forward('default', 'module');
      $this->testArr = TravelInfo::$banquet;
    }
  }
