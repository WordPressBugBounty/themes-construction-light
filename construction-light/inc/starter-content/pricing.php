<?php
/**
 * Service starter content.
 */
return array(
	'post_type'    => 'page',
	'post_title'   => _x( 'Pricing', 'Theme starter content', 'construction-light' ),
	'construction_light_page_layouts' => 'no',
	'template' => 'template-pagebuilder.php',
	'post_content' => '
    
    <!-- wp:spacer -->
    <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->


	<!-- wp:pattern {"slug":"construction-light/pricing"} /-->


    <!-- wp:spacer -->
    <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

	<!-- wp:pattern {"slug":"construction-light/service-two"} /-->


    <!-- wp:spacer -->
    <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    ',
);