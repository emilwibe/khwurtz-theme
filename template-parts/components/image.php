<article class="block image">
    <div class="inner">
        <div class="content">
            <?php
                $image = get_sub_field( 'image_component' );
            ?>

<img loading="lazy" alt="<?php echo $image['alt']; ?>" src="<?php echo $image['sizes']['medium']; ?>" onload="loadImageonLoad(this)" class="load-on-load"
            srcset="<?php echo $image['sizes']['medium']; ?> 320w, <?php echo $image['sizes']['size-600']; ?> 600w, <?php echo $image['sizes']['size-800']; ?> 800w, <?php echo $image['sizes']['size-1200']; ?> 1200w,  <?php echo $image['sizes']['size-1800']; ?> 1800w"  />

        </div><!--/.content-->
    </div><!--/.inner-->
</article>