<?php

/**
 * BookitCategoryTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class BookitCategoryTable extends Doctrine_Table
{

  /**
   * Returns an instance of this class.
   *
   * @return object BookitCategoryTable
   */
  public static function getInstance()
  {
    return Doctrine_Core::getTable('BookitCategory');
  }

  public function getWithBooks()
  {
    $q = $this->createQuery('c')
            ->leftJoin('c.BookitBooks j')
            ->where('j.expires_at > ?', date('Y-m-d H:i:s', time()));

    return $q->execute();
  }

}