<?php
/**
 * Contact starter content.
 */
return array(
	'post_type'    => 'page',
	'post_title'   => _x( 'About', 'Theme starter content', 'construction-light' ),
	// 'thumbnail'    => '{{featured-image-home}}',
	'template' => 'template-pagebuilder.php',
	'construction_light_page_layouts' => 'no',
	'post_content' => '
	
	<!-- wp:spacer {"height":61} -->
	<div style="height:61px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:pattern {"slug":"construction-light/about-us"} /-->

	<!-- wp:spacer {"height":61} -->
	<div style="height:61px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:pattern {"slug":"construction-light/team"} /-->

	<!-- wp:pattern {"slug":"construction-light/planning"} /-->




	<!-- wp:spacer {"height":61} -->
	<div style="height:61px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	

	<!-- wp:pattern {"slug":"construction-light/service-two"} /-->


	

	
	<!-- wp:spacer {"height":61} -->
	<div style="height:61px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->',
);