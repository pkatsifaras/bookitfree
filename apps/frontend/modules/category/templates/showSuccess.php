<div class="row well category_<?php echo $category->getName() ?>">
  <div class="feed">
    <a class="btn" href="">RSS Feed</a>
  </div>
  <h1><?php echo $category ?></h1>
  <?php foreach ($category->getActiveBooks() as $book): ?>
    <div class="span3">  
      <a href="<?php echo url_for('book/show?id=' . $book->getId()) ?>">
        <img style="width: 150px; height: 200px;" src="/uploads/books/<?php echo $book->getLogo(); ?>"/></a><br/>
      <a href="<?php echo url_for('book/show?id=' . $book->getId()) ?>">
        <?php echo $book->getTitle(); ?>
      </a><br/>
      <?php echo 'Author: ' . $book->getAuthor() . '<br/>'; ?>
    </div>
  <?php endforeach; ?>
  <?php if ($pager->haveToPaginate()): ?>
    <div class="pagination">
      <a href="<?php echo url_for('category', $category) ?>?page=1">
        <img src="/images/first.png" alt="First page" title="First page" />
      </a>

      <a href="<?php echo url_for('category', $category) ?>?page=<?php echo $pager->getPreviousPage() ?>">
        <img src="/images/previous.png" alt="Previous page" title="Previous page" />
      </a>

      <?php foreach ($pager->getLinks() as $page): ?>
        <?php if ($page == $pager->getPage()): ?>
          <?php echo $page ?>
        <?php else: ?>
          <a href="<?php echo url_for('category', $category) ?>?page=<?php echo $page ?>"><?php echo $page ?></a>
        <?php endif; ?>
      <?php endforeach; ?>

      <a href="<?php echo url_for('category', $category) ?>?page=<?php echo $pager->getNextPage() ?>">
        <img src="/images/next.png" alt="Next page" title="Next page" />
      </a>

      <a href="<?php echo url_for('category', $category) ?>?page=<?php echo $pager->getLastPage() ?>">
        <img src="/images/last.png" alt="Last page" title="Last page" />
      </a>
    </div>
  <?php endif; ?>

  <div class="pagination_desc">
    <strong><?php echo count($pager) ?></strong> books in this category

    <?php if ($pager->haveToPaginate()): ?>
      - page <strong><?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?></strong>
    <?php endif; ?>
  </div>