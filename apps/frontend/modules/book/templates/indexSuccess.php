<?php foreach ($categories as $category): ?>
  <div class="row well category_<?php echo $category->getName() ?>">
    <div class="feed">
      <a class="btn" href="">RSS Feed</a>
    </div>
    <h1>
      <?php echo link_to($category, 'category', $category) ?>
    </h1>
    <?php foreach ($category->getActiveBooks(sfConfig::get('app_max_books_on_homepage')) as $book): ?>
      <div class="span3">  
        <a href="<?php echo url_for('book_show_user', $book) ?>">
          <img style="width: 150px; height: 200px;" src="<?php echo image_path('/uploads/books/' . $book->getLogo()) ?>"/></a><br/>
        <a href="<?php echo url_for('book_show_user', $book) ?>">
          <?php echo $book->getTitle(); ?>
        </a><br/>
        <?php echo 'Author: ' . $book->getAuthor() . '<br/>'; ?>
      </div>
    <?php endforeach; ?>
      <?php if (($count = $category->countActiveBooks() - sfConfig::get('app_max_books_on_homepage')) > 0): ?>
        <div class="">
          and <?php echo link_to($count, 'category', $category) ?>
          more...
        </div>
      <?php endif; ?>
  </div>
<?php endforeach; ?>

