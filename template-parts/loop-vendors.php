<?php
require_once( plugins_url() . '/ew-geo-class/geoplugin.class.php' );

$geoInfo = unserialize( file_get_contents( 'http://www.geoplugin.net/php.gp?ip=' . $_SERVER['REMOTE_ADDR'] ) );
$clientGeoLat = $geoInfo["geoplugin_latitude"];
$clientGeoLong = $geoInfo["geoplugin_longitude"];


/**
 * The Loop used on vendor page
 */

$args = [
    'post_type'         =>  'khwurtz_vendor',
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
    ?>

    <article class="block m-1-3">
        <div class="background" style="background-image:url(<?php echo $featuredImages[0]; ?>)"></div><!--/.background-->
        <div class="inner">
            <div class="overlay"></div>
            
            <div class="content">
                <h2><a href="<?php echo get_field( 'link_to_vendor' ); ?>" target="_blank"><?php the_title(); ?></a></h2>
                <p><a href="<?php echo get_field( 'link_to_vendor' ); ?>" target="_blank"><?php echo get_the_excerpt(); ?></a></p>
            </div><!--/.content-->
            
        </div><!--/.inner-->
    </article><!--/.block-->

    <?php endwhile; ?>
<?php endif; ?>