<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script>
        /**
         * Fades images in on load to prevent curtain load
         *
         * @param   target    References the element / img tag self
         *
         * @return  void
         */
        function loadImageonLoad ( target ) {
            target.style.animationPlayState = "running";
            console.log(target);
        }
    </script>

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

    <header class="header primary">
    
        <a href="<?php echo get_site_url(); ?>" class="logo"><img src="<?php echo get_template_directory_uri() . '/assets/khwurtz-logo-white.svg'; ?>" alt="KHWurtz Logo"></a>
    
        <p class="description"><?php bloginfo( 'description' ); ?></p>

        <?php get_template_part( 'template-parts/nav', 'primary' ); ?>
    </header>

    <button class="nav-toggle" id="nav-toggle">Menu</button>

    <main id="featured-slider" class="main">