<?php // foreach ($category->getActiveBooks(sfConfig::get('app_max_books_on_category')) as $book): ?>
<!--  <div class="span3">  
    <a href="<?php // echo url_for('book_show_user', $book) ?>">
      <img style="width: 150px; height: 200px;" src="/uploads/books/<?php // echo $book->getLogo(); ?>"/></a><br/>
    <a href="<?php // echo url_for('book/show?id=' . $book->getId()) ?>">
      <?php // echo $book->getTitle(); ?>
    </a><br/>
    <?php // echo 'Author: ' . $book->getAuthor() . '<br/>'; ?>
  </div>-->
<?php // endforeach; ?>



  <?php foreach ($books as $i => $book): ?>
   <?php echo $book->getTitle() ?>
    <?php echo $book->getBookitCategory()->getName() ?>
  <?php endforeach; ?>
