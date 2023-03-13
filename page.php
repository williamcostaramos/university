<?php
get_header();
while (have_posts()):
  the_post();
  ?>
  <div class="page-banner">
    <div class="page-banner__bg-image"
      style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title">
        <?php the_title(); ?>
      </h1>
      <div class="page-banner__intro">
        <p>DONT FORGET TO REPLACE ME LATER</p>
      </div>
    </div>
  </div>
  <div class="container container--narrow page-section">

    <?php
    $page_parent = wp_get_post_parent_id(get_the_ID());

    if ($page_parent): ?>

      <div class="metabox metabox--position-up metabox--with-home-link">
        <p><a class="metabox__blog-home-link" href="<?php echo get_the_permalink($page_parent); ?>"><i class="fa fa-home"
              aria-hidden="true"></i> Voltar &raquo
            <?php echo get_the_title($page_parent); ?>
          </a> <span class="metabox__main">
            <?php the_title() ?>
          </span></p>
      </div>

      <div class="page-links">
        <h2 class="page-links__title"><a href="<?php echo get_the_permalink($page_parent); ?>"><?php echo get_the_title($page_parent); ?></a></h2>
        <ul class="min-list">
          <?php  wp_list_pages( array('title_li' => null, 'child_of' => $page_parent) )?>
        </ul>
      </div>

    <?php endif; ?>

    <!--

-->

    <div class="generic-content">
      <?php the_content(); ?>
    </div>

  </div>
<?php endwhile;
get_footer();
?>