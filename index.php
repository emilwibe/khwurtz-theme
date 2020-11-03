<?php get_header(); ?>

    <?php if( have_posts() ) : ?>

        <article class="block m-1-3">
            <div class="inner">
                <div class="content">
                <?php the_title( '<h1>', '</h1>' ); ?>

                <?php the_excerpt(); ?>
                </div><!--/.content-->
            </div><!--/.inner-->

        </article>
        <?php while( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'template-parts/flexible', 'layout' ); ?>
        <?php endwhile; //LOOP ?>

        <article class="block m-1-3">
            <div class="inner">
                <div class="content">
                    <img src="<?php echo get_template_directory_uri() . '/assets/khwurtz-logo-white.svg'; ?>" alt="K. H. Würtz Logo" class="in-page-logo">   
                </div><!--/.content-->
            </div><!--/.inner-->
        </article><!--/.block-->

    <?php endif; //LOOP ?>
<?php get_footer(); ?>