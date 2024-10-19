<?php
/**
 * Service starter content.
 */
return array(
	'post_type'    => 'page',
	'post_title'   => _x( 'Service', 'Theme starter content', 'construction-light' ),
	// 'thumbnail'    => '{{featured-image-home}}',
	'construction_light_page_layouts' => 'no',
	'template' => 'template-pagebuilder.php',
	'post_content' => '
    
    <!-- wp:spacer -->
    <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->


	<!-- wp:pattern {"slug":"construction-light/service"} /-->

	<!-- wp:pattern {"slug":"construction-light/service-two"} /-->

	<!-- wp:pattern {"slug":"construction-light/planning"} /-->
	
    
    
    <!-- wp:pattern {"slug":"construction-light/service-three"} /-->


    <!-- wp:spacer -->
    <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    ',
);