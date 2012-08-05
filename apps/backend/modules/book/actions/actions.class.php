<?php

require_once dirname(__FILE__) . '/../lib/bookGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/bookGeneratorHelper.class.php';

/**
 * book actions.
 *
 * @package    bookitfree
 * @subpackage book
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class bookActions extends autoBookActions
{

  public function executeListDeleteNeverActivated(sfWebRequest $request)
  {
    $nb = Doctrine_Core::getTable('BookitBook')->cleanup(60);

    if ($nb) {
      $this->getUser()->setFlash('notice', sprintf('%d never activated books have been deleted successfully.', $nb));
    } else {
      $this->getUser()->setFlash('notice', 'No book to delete.');
    }

    $this->redirect('bookit_book');
  }

  public function executeListExtend(sfWebRequest $request)
  {
    $book = $this->getRoute()->getObject();
    $book->extend(true);

    $this->getUser()->setFlash('notice', 'The selected books have been extended successfully.');

    $this->redirect('bookit_book');
  }

  public function executeBatchExtend(sfWebRequest $request)
  {
    $ids = $request->getParameter('ids');

    $q = Doctrine_Query::create()
            ->from('BookitBook j')
            ->whereIn('j.id', $ids);

    foreach ($q->execute() as $book) {
      $book->extend(true);
    }

    $this->getUser()->setFlash('notice', 'The selected books have been extended successfully.');

    $this->redirect('bookit_book');
  }

}
