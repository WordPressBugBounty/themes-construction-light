<?php
/**
 * Dynamic css
*/
function construction_light_css_strip_whitespace($css) {
    $replace = array(
        "#/\*.*?\*/#s" => "", // Strip C style comments.
        "#\s\s+#" => " ", // Strip excess whitespace.
    );
    $search = array_keys($replace);
    
    $css = $css ? preg_replace($search, $replace, $css) : '';

    //$value = $value ? str_replace( "[", "{", $value ) : '';

    $replace = array(
        ": " => ":",
        "; " => ";",
        " {" => "{",
        " }" => "}",
        ", " => ",",
        "{ " => "{",
        ";}" => "}", // Strip optional semicolons.
        ",\n" => ",", // Don't wrap multiple selectors.
        "\n}" => "}", // Don't wrap closing braces.
        "} " => "}\n", // Put each rule on it's own line.
    );
    $search = array_keys($replace);
    $css = str_replace($search, $replace, $css);

    return trim($css);
}

if (! function_exists('construction_light_dynamic_css')){

	function construction_light_dynamic_css(){

        $primary_color    = get_theme_mod('construction_light_primary_color', apply_filters('construction_light_primary_color', '#ffc107' ) );
        $px = 70;

		$construction_light_dynamic = $construction_light_dynamic_tablet = $construction_light_dynamic_mobile = '';

        // Theme Primary Background Colors.
        $construction_light_dynamic .= "
            .cl-bg-primary,
            .about_us_front h3.ui-accordion-header:before,
            .cl-recommended.pricing-item h3, .cl-recommended.pricing-item .pricing-icon,
            .heading-default .badge::after,
            .top-bar-menu ul.sp_socialicon li a:hover .fab, 
            .top-bar-menu ul.sp_socialicon li a:hover .fas,
            .nav-classic .nav-menu .box-header-nav,
            .box-header-nav .main-menu .children>.page_item:hover>a, 
            .box-header-nav .main-menu .children>.page_item.focus>a, 
            .box-header-nav .main-menu .sub-menu>.menu-item:hover>a, 
            .box-header-nav .main-menu .sub-menu>.menu-item.focus>a,

            .box-header-nav .main-menu .children>.page_item.current_page_item>a, 
            .box-header-nav .main-menu .sub-menu>.menu-item.current-menu-item>a,
            .conslight-search-container .search-submit,
            .conslight-search-close,

            .headertwo .nav-classic,
            .nav-classic .header-nav-toggle div,

            .btn-primary,
            .btn-border:hover,
            .cons_light_feature .feature-list .icon-box,
            .cons_light_feature .feature-list .box h3 a:after,
            .section-title:before,
            .cons_light_portfolio-cat-name:hover, 
            .cons_light_portfolio-cat-name.active,
            .video_calltoaction_wrap .box-shadow-ripples,
            .articlesListing .article .info div:after,
            .cons_light_counter:before,
            .cons_light_counter:after,
            .owl-theme .owl-dots .owl-dot.active,
            .owl-theme .owl-dots .owl-dot:hover,
            .owl-carousel .owl-nav button.owl-next:hover, 
            .owl-carousel .owl-nav button.owl-prev:hover,
            .cons_light_team_layout_two ul.sp_socialicon li a i,
            .cons_light_team_layout_two ul.sp_socialicon li a i:hover,
            .cons_light_client_logo_layout_two .owl-theme .owl-dots .owl-dot.active,
            .post-format-media-quote,
            .widget_product_search a.button, 
            .widget_product_search button, 
            .widget_product_search input[type='submit'], 
            .widget_search .search-submit,
            .page-numbers,
            .reply .comment-reply-link,
            a.button, button, input[type='submit'],
            .wpcf7 input[type='submit'], 
            .wpcf7 input[type='button'],
            .calendar_wrap caption,
            .cons-register-now-form .title::before,
            .cl-service-section.layout_three .cl-service-icon,
            .arrow-top-line{
            
            background-color: $primary_color;
            
        }\n";

        $construction_light_dynamic .= "
            .cons_light_portfolio-caption{
            
            background-color: $primary_color$px;
            
        }\n";


        // Theme Primary Font Colors.
        $construction_light_dynamic .= "
            .top-bar-menu ul li a:hover, 
            .top-bar-menu ul li.current_page_item a,
            .top-bar-menu ul li .fa, .top-bar-menu ul li .fas, 
            .top-bar-menu ul li a .fa, 
            .top-bar-menu ul li a .fas, 
            .top-bar-menu ul li a .fab,
            .nav-classic .header-middle-inner .contact-info .quickcontact .get-tuch i,
            .cons_light_feature .feature-list .box h3 a:hover,
            .about_us_front .achivement-items .timer::after,
            .cons_light_portfolio-cat-name,
            .cons_light_portfolio-caption a,
            .cons_light_counter-icon,
            .cons_light_testimonial .client-text h4,
            .cons_light_team_layout_two .box span,
            .cons_light_team_layout_two .box h4 a:hover,
            .cons_light_feature.layout_two .feature-list .bottom-content a.btn-primary:hover,
            .sub_footer ul.sp_socialicon li a i:hover,
            .widget-area .widget a:hover, 
            .widget-area .widget a:hover::before, 
            .widget-area .widget li:hover::before,
            .page-numbers.current,
            .page-numbers:hover,
            .breadcrumb h2,
            .breadcrumb ul li a,
            .breadcrumb ul li a:after,
            .entry-content a,
            .prevNextArticle a:hover,
            .comment-author .fn .url:hover,
            .logged-in-as a,
            .wpcf7 input[type='submit']:hover, 
            .wpcf7 input[type='button']:hover,

            .seprate-with-span span,
            .site-footer .widget a:hover, 
            .site-footer .widget a:hover::before, 
            .site-footer .widget li:hover::before,
            .site-footer .textwidget ul li a,
            .cons_light_copyright a, 
            .cons_light_copyright a.privacy-policy-link:hover,
            a:hover, a:focus, a:active,
            .primary-color,
            .arrow-top{

            color: $primary_color;
            
        }\n";

        // Theme Primary Border Colors.
        $construction_light_dynamic .= "
            .btn-primary,
            .cl-recommended.pricing-item .pricing-rate, 
            .cl-recommended.pricing-item a.btn.btn-primary, 
            .cl-recommended.pricing-item:hover .pricing-icon::after, 
            .cl-recommended.pricing-item:focus-within .pricing-icon::after,
            .pricing-item .pricing-icon::after,
            .btn-border:hover,
            .cons_light_feature .feature-list .icon-box,
            .cons_light_portfolio-cat-name:hover, 
            .cons_light_portfolio-cat-name.active,
            .cons_light_counter,
            .cons_light_testimonial .client-img,
            .cons_light_team_layout_two.layout_two .box figure,
            .cons_light_team_layout_two ul.sp_socialicon li a i:hover,
            .site-footer .widget h2.widget-title:before,
            .sub_footer ul.sp_socialicon li a i:hover,

            .cross-sells h2:before, .cart_totals h2:before, 
            .up-sells h2:before, .related h2:before, 
            .woocommerce-billing-fields h3:before, 
            .woocommerce-shipping-fields h3:before, 
            .woocommerce-additional-fields h3:before, 
            #order_review_heading:before, 
            .woocommerce-order-details h2:before, 
            .woocommerce-column--billing-address h2:before,
            .woocommerce-column--shipping-address h2:before, 
            .woocommerce-Address-title h3:before, 
            .woocommerce-MyAccount-content h3:before, 
            .wishlist-title h2:before, 
            .woocommerce-account .woocommerce h2:before, 
            .widget-area .widget .widget-title:before, 
            .widget-area .widget .wp-block-heading::before,
            .comments-area .comments-title:before,
            .page-numbers,
            .page-numbers:hover,
            .headerthree .nav-classic .header-middle-inner .contact-info .quickcontact .get-tuch i,
            .features-slider-1.banner-slider.owl-carousel .owl-nav button.owl-next, .features-slider-1.banner-slider.owl-carousel .owl-nav button.owl-prev,
            .prevNextArticle .hoverExtend.active span,
            .wpcf7 input[type='submit'], 
            .wpcf7 input[type='button'],
            .wpcf7 input[type='submit']:hover, 
            .wpcf7 input[type='button']:hover{

            border-color: $primary_color;
            
        }\n";


        $construction_light_dynamic .= "@media (max-width: 992px){
            .box-header-nav .main-menu .children>.page_item:hover>a, .box-header-nav .main-menu .sub-menu>.menu-item:hover>a {

                color: $primary_color !important;
            }
        }\n";


        $construction_light_dynamic .= "
            #back-to-top svg.progress-circle path{

                stroke: $primary_color;
        }\n";


        /**
         * WooCommerce
        */
        
        $construction_light_dynamic .= ".woocommerce ul.products li.product .woocommerce-loop-category__title, .woocommerce ul.products li.product .woocommerce-loop-product__title,
        .woocommerce a.added_to_cart, .woocommerce a.button.add_to_cart_button, .woocommerce a.button.product_type_grouped, .woocommerce a.button.product_type_external, .woocommerce a.button.product_type_variable,
        .woocommerce a.added_to_cart:before, .woocommerce a.button.add_to_cart_button:before, .woocommerce a.button.product_type_grouped:before, .woocommerce a.button.product_type_external:before, .woocommerce a.button.product_type_variable:before,
        .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current,
        .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,
        .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,
        .woocommerce .widget_price_filter .price_slider_wrapper .ui-widget-content,
        .woocommerce #respond input#submit.alt.disabled, .woocommerce #respond input#submit.alt.disabled:hover, .woocommerce #respond input#submit.alt:disabled, .woocommerce #respond input#submit.alt:disabled:hover, .woocommerce #respond input#submit.alt:disabled[disabled], .woocommerce #respond input#submit.alt:disabled[disabled]:hover, .woocommerce a.button.alt.disabled, .woocommerce a.button.alt.disabled:hover, .woocommerce a.button.alt:disabled, .woocommerce a.button.alt:disabled:hover, .woocommerce a.button.alt:disabled[disabled], .woocommerce a.button.alt:disabled[disabled]:hover, .woocommerce button.button.alt.disabled, .woocommerce button.button.alt.disabled:hover, .woocommerce button.button.alt:disabled, .woocommerce button.button.alt:disabled:hover, .woocommerce button.button.alt:disabled[disabled], .woocommerce button.button.alt:disabled[disabled]:hover, .woocommerce input.button.alt.disabled, .woocommerce input.button.alt.disabled:hover, .woocommerce input.button.alt:disabled, .woocommerce input.button.alt:disabled:hover, .woocommerce input.button.alt:disabled[disabled], .woocommerce input.button.alt:disabled[disabled]:hover,
        .single-product div.product .entry-summary .flash .construction_light_sale_label,
        .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,
        .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,
        .woocommerce-MyAccount-navigation ul li a,
        .woocommerce-MyAccount-navigation ul li a:hover,
        
        .cons_light_feature.promo_light_feature .feature-list .box,
        ul.services-tab li.active,
        .banner-slider.owl-carousel .owl-nav button.owl-next, 
        .banner-slider.owl-carousel .owl-nav button.owl-prev{

                background-color: $primary_color;

        }\n";

        $construction_light_dynamic .= ".woocommerce a.added_to_cart, .woocommerce a.button.add_to_cart_button, .woocommerce a.button.product_type_grouped, .woocommerce a.button.product_type_external, .woocommerce a.button.product_type_variable,
        .woocommerce nav.woocommerce-pagination ul li,
        .woocommerce div.product .woocommerce-tabs ul.tabs li.active,
        .woocommerce-message, .woocommerce-info,
        .woocommerce-MyAccount-navigation ul li a:hover{

                border-color: $primary_color;

        }\n";

        $construction_light_dynamic .= ".woocommerce a.added_to_cart:hover, .woocommerce a.button.add_to_cart_button:hover, .woocommerce a.button.product_type_grouped:hover, .woocommerce a.button.product_type_external:hover, .woocommerce a.button.product_type_variable:hover,
        .construction_light_products_item_details h3 a:hover,
        .woocommerce ul.products li.product .price, .construction_light_products_item_details .price, .woocommerce div.product p.price, .woocommerce div.product span.price,
        .woocommerce nav.woocommerce-pagination ul li .page-numbers,
        .woocommerce .product_list_widget .woocommerce-Price-amount,
        .comment-form-rating p.stars a,
        .woocommerce .star-rating span, .woocommerce-page .star-rating span,
        .woocommerce-message::before, .woocommerce-info::before,

        .banner-slider.owl-carousel .owl-nav [class*='owl-']:hover{

                color: $primary_color;

        }\n";

        $construction_light_aboutus_text_color = get_theme_mod('construction_light_aboutus_text_color');
        $construction_light_aboutus_bg_color = get_theme_mod('construction_light_aboutus_bg_color');
        $construction_light_dynamic .= "
            .about_us_front{ 
                color: $construction_light_aboutus_text_color; 
                background-color: $construction_light_aboutus_bg_color;
            }
            .about_us_front h3{
                color: $construction_light_aboutus_text_color;
            }
        ";


        $construction_light_dynamic .= "@media (max-width: 992px) {
            .headerthree .nav-classic,
            .headerthree .nav-classic .nav-menu .box-header-nav{
                background-color: $primary_color;
            } 
            .headerthree .toggle-inner{
                color:#ffffff;
            }
        }\n";

        //body typography
        $construction_body_typo_css         = '';
        $construction_body_typo_tablet_css  = '';
        $construction_body_typo_desktop_css = '';

        
        $copyright_typography = get_theme_mod( 'body-typography' );
        $copyright_typography = json_decode( $copyright_typography, true );

        $copyright_font_family = construction_light_font_family( $copyright_typography );
        
        if ( $copyright_font_family ) {
            $construction_body_typo_css .= 'font-family:' . $copyright_font_family . ';';
            $copyright_font_weight = construction_light_font_weight( $copyright_typography );
            if ( $copyright_font_weight ) {
                $construction_body_typo_css .= 'font-weight:' . $copyright_font_weight . ';';
            }
            $copyright_font_style = construction_light_isset( $copyright_typography['font-style'] );
            if ( $copyright_font_style ) {
                $construction_body_typo_css .= 'font-style:' . $copyright_font_style . ';';
            }
            $copyright_text_decoration = construction_light_isset( $copyright_typography['text-decoration'] );
            if ( $copyright_text_decoration ) {
                $construction_body_typo_css .= 'text-decoration:' . $copyright_text_decoration . ';';
            }
            $copyright_text_transform = construction_light_isset( $copyright_typography['text-transform'] );
            if ( $copyright_text_transform ) {
                $construction_body_typo_css .= 'text-transform:' . $copyright_text_transform . ';';
            }

            /* copyright desktop css */
            $copyright_desktop_font_size = construction_light_isset( $copyright_typography['font-size']['desktop'] );
            if ( $copyright_desktop_font_size ) {
                $construction_body_typo_css .= 'font-size:' . $copyright_desktop_font_size . 'px;';
            }
            $copyright_desktop_line_height = construction_light_isset( $copyright_typography['line-height']['desktop'] );
            if ( $copyright_desktop_line_height ) {
                $construction_body_typo_css .= 'line-height:' . $copyright_desktop_line_height . 'px;';
            }
            $copyright_desktop_letter_spacing = construction_light_isset( $copyright_typography['letter-spacing']['desktop'] );
            if ( $copyright_desktop_letter_spacing ) {
                $construction_body_typo_css .= 'letter-spacing:' . $copyright_desktop_letter_spacing . 'px;';
            }

            /* copyright tablet css */
            $copyright_tablet_font_size = construction_light_isset( $copyright_typography['font-size']['tablet'] );
            if ( $copyright_tablet_font_size ) {
                $construction_body_typo_tablet_css .= 'font-size:' . $copyright_tablet_font_size . 'px;';
            }
            $copyright_tablet_line_height = construction_light_isset( $copyright_typography['line-height']['tablet'] );
            if ( $copyright_tablet_line_height ) {
                $construction_body_typo_tablet_css .= 'line-height:' . $copyright_tablet_line_height . 'px;';
            }
            $copyright_tablet_letter_spacing = construction_light_isset( $copyright_typography['letter-spacing']['tablet'] );
            if ( $copyright_tablet_letter_spacing ) {
                $construction_body_typo_tablet_css .= 'letter-spacing:' . $copyright_tablet_letter_spacing . 'px;';
            }

            /* mobile css */
            $construction_body_typo_mobile_css = '';
            $copyright_font_size = construction_light_isset( $copyright_typography['font-size']['mobile'] );
            if ( $copyright_font_size ) {
                $construction_body_typo_mobile_css .= 'font-size:' . $copyright_font_size . 'px;';
            }
            $copyright_line_height = construction_light_isset( $copyright_typography['line-height']['mobile'] );
            if ( $copyright_line_height ) {
                $construction_body_typo_mobile_css .= 'line-height:' . $copyright_line_height . 'px;';
            }
            $copyright_letter_spacing = construction_light_isset( $copyright_typography['letter-spacing']['mobile'] );
            if ( $copyright_letter_spacing ) {
                $construction_body_typo_mobile_css .= 'letter-spacing:' . $copyright_letter_spacing . 'px;';
            }

            /* desktop css  */
            if ( ! empty( $construction_body_typo_css ) ) {
                $construction_light_dynamic       .= 'body{
                    ' .$construction_body_typo_css .'
                }';
            }

            
            /* tablet css */
            if ( ! empty( $construction_body_typo_tablet_css ) ) {
                $construction_light_dynamic_tablet .= 'body{
                    ' . $construction_body_typo_tablet_css . '
                }';
            }

            /* mobile css */
            if ( ! empty( $construction_body_typo_mobile_css ) ) {
                $construction_light_dynamic_mobile = 'body{
                    ' . $construction_body_typo_mobile_css . '
                }';
            }
        }

        if( !empty( $construction_light_dynamic_tablet )){
            $construction_light_dynamic .= "
                @media (max-width: 768px) {
                    ". $construction_light_dynamic_tablet ."
                }
            ";
        }

        if( !empty( $construction_light_dynamic_mobile )){
            $construction_light_dynamic .= "
                @media (max-width: 600px) {
                    ". $construction_light_dynamic_mobile ."
                }
            ";
        }


        $construction_light_dynamic = apply_filters( 'construction-light-dynamic-css', $construction_light_dynamic );

        wp_add_inline_style( 'construction-light-style', construction_light_css_strip_whitespace( $construction_light_dynamic ) );
        wp_add_inline_style( 'agencybell-style', construction_light_css_strip_whitespace( $construction_light_dynamic ) );
        wp_add_inline_style( 'constructionbell-style', construction_light_css_strip_whitespace( $construction_light_dynamic ) );
        wp_add_inline_style( 'construction-choice-style', construction_light_css_strip_whitespace ($construction_light_dynamic ) );
	}
}
add_action( 'wp_enqueue_scripts', 'construction_light_dynamic_css', 99 );