<?php

/**
 * Inquiry actions.
 *
 * @package    ./
 * @subpackage Inquiry
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class InquiryActions extends sfActions
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

  public function executeNew(sfWebRequest $request)
  {
    $form = new InquiryForm();
    if ($request->isMethod(sfRequest::POST)) {
      $form->bind($request->getParameter($form->getName()));

      if ($form->isValid()) {
        $form->send($this->context, 'wrsdu1715@gmail.com', 'Symfony楽団ホームページからの問合せ');
        $this->getUser()->setAttribute('inquiry_send', ture);
        $this->redirect('Inquiry/Complete');
      }
    }
    $this->form = $form;
  }

  public function executeComplete(sfWebRequest $request)
  {
    $user = $this->getUser();
    $this->redirectUnless($user->getAttribute('inquiry_send'), 'Inquiry/New');
    $user->setAttribute('inquiry_send', null);
  }

  public function send(sfContext $contect, $to, $subject){
    $action = $context->getActionStack()->getLastEntry()->getActionInstance();

    $body = $action->getPartial('InquiryBody', $this->getValues());
    $form = $this->getValue('email');

    if (isset($to) && isset($body) && isset($form)) {
      $mailer = $context->getMailer();
      $mailer->composeAndSend($form, $to, $subject, $body);
    }
  }
}
