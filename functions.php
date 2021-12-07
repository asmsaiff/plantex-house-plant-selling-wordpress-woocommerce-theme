<?php
    get_template_part('/inc/plantex-plugins');
    get_template_part('/inc/woo');
    get_template_part('/inc/plantex-options/codestar-config');

    function plantex_theme_setup() {
        load_theme_textdomain('plantex');

        add_theme_support( 'title-tag' );
        add_theme_support( 'description' );
        add_theme_support( 'widgets' );
        add_theme_support( 'custom-header' );
        add_theme_support( 'custom-background' );
        add_theme_support( 'custom-logo' );
        add_theme_support( 'post-thumbnails' );

        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'html5' );
        add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
        add_theme_support( 'customize-selective-refresh-widgets' );

        add_theme_support( 'woocommerce' );
        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );

        register_nav_menus(array(
            'primary-menu'          =>  __('Primary Menu', 'plantex'),
        ));
    }
    add_action('after_setup_theme', 'plantex_theme_setup');

    function plantex_assets_enqueue() {
        // Style Enqueue
        wp_enqueue_style('remixIcon-css', 'https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css');
        wp_enqueue_style('main-css', get_template_directory_uri().'/assets/css/styles.css');
        wp_enqueue_style('theme-css', get_stylesheet_uri());

        // Script Enqueue
        wp_enqueue_script('scrollreveal-js', get_template_directory_uri().'/assets/js/scrollreveal.min.js', null, time(), true);
        wp_enqueue_script('main-js', get_template_directory_uri().'/assets/js/main.js', null, time(), true);
    }
    add_action( 'wp_enqueue_scripts', 'plantex_assets_enqueue' );

    // Codestar Data Transmission
    if ( ! function_exists( 'plantex_get_option' ) ) {
        function plantex_get_option( $option = '', $default = null ) {
          $options = get_option( 'plantex_options' );
          return ( isset( $options[$option] ) ) ? $options[$option] : $default;
        }
    }

    // Remove Span Tag From Contact Form 7 Form
    add_filter('wpcf7_form_elements', function( $content ) {
        $dom = new DOMDocument();
        $dom->preserveWhiteSpace = false;
        $dom->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        
        $xpath = new DomXPath($dom);
        $spans = $xpath->query("//span[contains(@class, 'wpcf7-form-control-wrap')]" );
        
        foreach ( $spans as $span ) :
            $children = $span->firstChild;
            $span->parentNode->replaceChild( $children, $span );
        endforeach;
        
        return $dom->saveHTML();
    });

    function plantex_css() {
        ?>
        <style>
            .page_section {
                background-image: url(<?php echo header_image(); ?>);
            }
        </style>
        <?php
    }
    add_action( 'wp_head', 'plantex_css' );