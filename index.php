<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php do_action('get_header'); ?>

    <div id="app">
      <!-- single.php用于单个文章页面，page.php用于单个页面 -->
      <?php echo '当前模版名称：' . view(app('sage.view'), app('sage.data'))->getName(); ?>

      <!-- sage.view = index 视图模板文件，sage.data = array[0] 传递给该视图的数据 -->
      <?php echo view(app('sage.view'), app('sage.data'))->render(); ?>
    </div>

    <?php do_action('get_footer'); ?>
    <?php wp_footer(); ?>
  </body>
</html>
