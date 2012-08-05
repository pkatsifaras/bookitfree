<?php

/**
 * book actions.
 *
 * @package    bookitfree
 * @subpackage book
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class bookActions extends sfActions
{

  public function executeSearch(sfWebRequest $request)
  {
    $this->forwardUnless($query = $request->getParameter('query'), 'book', 'index');

    $this->books = Doctrine_Core::getTable('BookitBook')->getForLuceneQuery($query);
  }

  public function executeIndex(sfWebRequest $request)
  {
    $this->categories = Doctrine_Core::getTable('BookitCategory')->getWithBooks();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->bookit_book = Doctrine_Core::getTable('BookitBook')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->bookit_book);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new BookitBookForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new BookitBookForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($bookit_book = Doctrine_Core::getTable('BookitBook')->find(array($request->getParameter('id'))), sprintf('Object bookit_book does not exist (%s).', $request->getParameter('id')));
    $this->form = new BookitBookForm($bookit_book);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($bookit_book = Doctrine_Core::getTable('BookitBook')->find(array($request->getParameter('id'))), sprintf('Object bookit_book does not exist (%s).', $request->getParameter('id')));
    $this->form = new BookitBookForm($bookit_book);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($bookit_book = Doctrine_Core::getTable('BookitBook')->find(array($request->getParameter('id'))), sprintf('Object bookit_book does not exist (%s).', $request->getParameter('id')));
    $bookit_book->delete();

    $this->redirect('book/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind(
            $request->getParameter($form->getName()), $request->getFiles($form->getName())
    );

    if ($form->isValid()) {
      $bookit_book = $form->save();

      $this->redirect('book_show_user', $book);
    }
  }

}
