<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'egzpo'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    get_template_part('templates/header');
  ?>

  <div class="content" role="document">
    <?php if (egzpo_display_sidebar()) : ?>
      <main class="main" role="main">
        <?php include egzpo_template_path(); ?>
      </main><!-- /.main -->
      <aside class="sidebar" role="complementary">
        <?php include egzpo_sidebar_path(); ?>
      </aside><!-- /.sidebar -->
    <?php else : ?>
      <main class="main" role="main">
        <?php include egzpo_template_path(); ?>
      </main><!-- /.main -->
    <?php endif; ?>
  </div><!-- /.content -->

  <?php get_template_part('templates/footer'); ?>
  <!-- browserSync -->
</body>
</html>
