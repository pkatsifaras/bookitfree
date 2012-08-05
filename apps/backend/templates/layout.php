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

    <?php if ($sf_user->isAuthenticated()): ?>
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <a class="brand" href="<?php echo url_for('homepage') ?>">Book it Free</a>
            <div class="nav-collapse">
              <ul class="nav">
                <li class="">
                  <?php echo link_to('Books', 'bookit_book') ?>
                </li>
                <li class="">
                  <?php echo link_to('Categories', 'bookit_category') ?>
                </li>
                <li class="">
                <li class="">
                  <?php echo link_to('Users', 'sf_guard_user') ?>
                </li>
                <li class="">
                  <?php echo link_to('Logout', 'sf_guard_signout') ?>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    <?php endif ?>

    <div class="container">

      <div id="content">
        <?php echo $sf_content ?>
      </div>
      <div id="footer">
        Powered by <a href="http://www.symfony-project.org/">
          <img src="/images/symfony.gif" alt="symfony framework" /></a>
      </div>
    </div>
  </body>
</html>
