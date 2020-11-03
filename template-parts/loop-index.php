<?php
/**
 * The Loop used on front page
 */

$args = [
    'post_type'         =>  'post',
    'posts_per_page'    =>  -1,
    'orderby'           =>  'rand'
];

$theQuery = new WP_Query( $args );
?>

<?php if( $theQuery->have_posts() ) : ?>
    <?php while( $theQuery->have_posts() ) : $theQuery->the_post(); ?>
    <?php
        /**
         * array for random images on front page
         */
        $featuredImages = array();
        if ( has_post_thumbnail() ) {
            array_push( $featuredImages, get_the_post_thumbnail_url( get_the_ID(), 'size-800' ) );
        }

        if ( get_field( 'additional_image_1_post_thumbnail' ) ){
			$additionalImage_1 = wp_get_attachment_image_src( get_field( 'additional_image_1_post_thumbnail' ), 'size-800' );
			
            array_push( $featuredImages, $additionalImage_1[0] );
			unset( $additionalImage_1 );
        }

        if ( get_field( 'additional_image_2_post_thumbnail' ) ){
			$additionalImage_2 = wp_get_attachment_image_src( get_field( 'additional_image_2_post_thumbnail' ), 'size-800' );
			
            array_push( $featuredImages, $additionalImage_2[0] );
			unset( $additionalImage_2 );
        }

        if ( get_field( 'additional_image_3_post_thumbnail' ) ){
			$additionalImage_3 = wp_get_attachment_image_src( get_field( 'additional_image_3_post_thumbnail' ), 'size-800' );
			
			array_push( $featuredImages, $additionalImage_3[0] );
			unset( $additionalImage_3);
        }
        shuffle( $featuredImages );
    ?>

    <article class="block <?php the_field( 'display_size_story' ); ?>">
        <div class="background" style="background-image:url(<?php echo $featuredImages[0]; ?>)"></div><!--/.background-->
        <div class="inner">
            <div class="overlay"></div>
            
            <div class="content">
                <h2><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_excerpt(); ?></a></p>
            </div><!--/.content-->
            
        </div><!--/.inner-->
    </article><!--/.block-->

    <?php endwhile; ?>
<?php endif; ?>