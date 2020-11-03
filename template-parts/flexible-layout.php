<?php
if( have_rows( 'story_components_kh' ) ) {
    while( have_rows( 'story_components_kh' ) ) {
        the_row();

        if( get_row_layout() == 'text_component_group' ) {

            // TEXT COMPONENT
            get_template_part( 'template-parts/components/text' );

        } elseif ( get_row_layout() == 'image_component_group' ) {

            get_template_part( 'template-parts/components/image' );

        }
    }
}
