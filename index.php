<?php

// carregando a header
   get_header();
?>
 <div class="page-banner">
    <div class="page-banner__bg-image"
      style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title">Bem vindo ao Nosso Blog</h1>
      <div class="page-banner__intro">
        <p>Fique atualizado com as Últimas Notícias</p>
      </div>
    </div>
  </div>

  <div class="container container--narrow page-section">
    <?php while(have_posts()): the_post(); ?>
      <div class="post-item">
        <h2 class="headline headline--medium headline--post-title"> <a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
        <div class="metabox">
          <p>Por: <?php the_author_posts_link(); ?> em <b><?php echo the_time('d/m/Y H:i');?>h</b> na categoria <?php echo get_the_category_list(', ');?></p>
        </div>
        <div class="generic-content">
          <?php the_excerpt();?>
          <p><a href="<?php the_permalink();?>" class="btn btn--blue bt--small">Continue Lendo</a></p>
        </div>
      </div>
    <?php endwhile;?>
  </div>

<?php get_footer();?>
