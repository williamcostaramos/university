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
                <p>Por:
                    <?php the_author(); ?> em <b>
                        <?php echo the_time('d/m/Y H:i'); ?>h
                    </b>
                </p>
            </div>
        </div>
    </div>
    <div class="container container--narrow page-section">
        <div class="metabox metabox--position-up metabox--with-home-link">
            <p><a class="metabox__blog-home-link" href="<?php echo site_url('/blog') ?>"><i class="fa fa-home"
                        aria-hidden="true"></i> Voltar &raquo Blog </a> <span class="metabox__main">Por:
                    <?php the_author_posts_link(); ?> em <b>
                        <?php echo the_time('d/m/Y H:i'); ?>h
                    </b> na categoria
                    <?php echo get_the_category_list(', '); ?>
                </span>
        </div>
        <div class="generic-content">
            <?php the_content() ?>
        </div>

    </div>
<?php endwhile;
get_footer()
    ?>