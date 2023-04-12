<?php
/**
 * Plugin Name: Generate Unlimited Quality Content using OpenAI GPT-3 and GPT-4 | AI Content Generator | WP Wand
 * Plugin URI: https://wpgrids.net/
 * Description: An AI content generator plugin.
 * Version: 1.0.0
 * Author: WP Grids
 * Author URI: https://profiles.wordpress.org/wpgrids/
 * Text Domain: wpwand
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Define constants
define( 'WPWAND_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'WPWAND_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
if ( !defined( 'WPWAND_OPENAI_KEY' ) ) {
    define( 'WPWAND_OPENAI_KEY', get_option( 'wpwand_api_key', false ) );
}
define( 'WPWAND_AI_CHARACTER', get_option( 'wpwand_ai_character', esc_html( 'Ignore all previous instructions. You are an expert in SEO copywriting and specialising in WordPress related content creation.' ) ) );

function wpwand_init() {
    // Vendor Autoload
    if ( !class_exists( 'Orhanerday\OpenAi\OpenAi' ) ) {
        require __DIR__ . '/vendor/orhanerday/open-ai/src/Url.php';
        require __DIR__ . '/vendor/orhanerday/open-ai/src/OpenAi.php';
    }
// Include required files
    require_once WPWAND_PLUGIN_DIR . 'inc/admin.php';
    require_once WPWAND_PLUGIN_DIR . 'inc/data.php';
    require_once WPWAND_PLUGIN_DIR . 'inc/helper-functions.php';
    require_once WPWAND_PLUGIN_DIR . 'inc/frontend.php';
    require_once WPWAND_PLUGIN_DIR . 'inc/api.php';
}

add_action( 'init', 'wpwand_init', 10 );

/**
 * Load plugin textdomain.
 */
function wpwand_load_plugin_textdomain() {
    load_plugin_textdomain( 'wpwand', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'wpwand_load_plugin_textdomain' );
