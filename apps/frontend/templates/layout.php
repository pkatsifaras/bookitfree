<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/images/book-favicon.png" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="<?php echo url_for('homepage') ?>">Book it Free</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="">
                <a href="">Looking for books</a>
              </li>
              <li class="">
                <a href="<?php echo url_for('book/new') ?>">Post a Book</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <?php if ($sf_user->hasFlash('notice')): ?>
      <div class="flash_notice"><?php echo $sf_user->getFlash('notice') ?></div>
    <?php endif ?>

    <?php if ($sf_user->hasFlash('error')): ?>
      <div class="flash_error"><?php echo $sf_user->getFlash('error') ?></div>
    <?php endif ?>

    <div class="container">
      <!--search area-->
      <div class="search">
        <h2>Ask for a book</h2>
        <form class="well" action="<?php echo url_for('book_search') ?>" method="get">
          <input type="text" name="query" value="<?php echo $sf_request->getParameter('query') ?>"
                 id="search_keywords" />
          <input type="submit" value="search" />
          <div class="help">
            Enter some keywords (title, author, position, ...)
          </div>
        </form>
      </div>
      <!--end of search area-->
      <?php if ($sf_user->hasFlash('notice')): ?>
        <div class="flash_notice">
          <?php echo $sf_user->getFlash('notice') ?>
        </div>
      <?php endif ?>

      <?php if ($sf_user->hasFlash('error')): ?>
        <div class="flash_error">
          <?php echo $sf_user->getFlash('error') ?>
        </div>
      <?php endif ?>

      <div class="content">
        <?php echo $sf_content ?>
      </div>

      <div class="footer">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>Powered by <a href="http://www.symfony-project.org/" target="_blank">Symfony <img src="/images/symfony.gif" alt="symfony framework" /></a></p>
        <p><a href="">About BookitFree</a></p>
        <p><a href="">Full feed</a></p>
        <p>Designed and built with all the love in the world <a href="http://twitter.com/twitter" target="_blank">@twitter</a> by <a href="http://twitter.com/mdo" target="_blank">@mdo</a> and <a href="http://twitter.com/fat" target="_blank">@fat</a>.</p>
        <p>Code licensed under the <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License v2.0</a>. Documentation licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
        <p>Icons from <a href="http://glyphicons.com">Glyphicons Free</a>, licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
      </div>
    </div>
  </body>
</html>
