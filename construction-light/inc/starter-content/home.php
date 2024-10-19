<?php
/**
 * Home starter content.
 */
$default_home_content = '
<!-- wp:pattern {"slug":"construction-light/service"} /-->
<!-- wp:pattern {"slug":"construction-light/service-with-icon"} /-->
<!-- wp:pattern {"slug":"construction-light/about-us"} /-->

<!-- wp:pattern {"slug":"construction-light/call-to-action-video"} /-->


<!-- wp:pattern {"slug":"construction-light/pricing"} /-->
<!-- wp:pattern {"slug":"construction-light/portfolio"} /-->

<!-- wp:pattern {"slug":"construction-light/counter"} /-->

<!-- wp:pattern {"slug":"construction-light/latest-news"} /-->

<!-- wp:pattern {"slug":"construction-light/testimonials"} /-->

<!-- wp:pattern {"slug":"construction-light/team"} /-->
<!-- wp:pattern {"slug":"construction-light/quality-service"} /-->

<!-- wp:pattern {"slug":"construction-light/contact"} /-->
';

return array(
	'post_type'    => 'page',
	'post_title'   => _x( 'Home FSE', 'Theme starter content', 'construction-light' ),
	'template' => 'template-pagebuilder.php',
	'post_content' => $default_home_content,
);
