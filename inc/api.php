<?php
// restrict direct access

use Orhanerday\OpenAi\OpenAi;

if ( !defined( 'ABSPATH' ) ) {
    exit( 'You are not allowed' );
}

function wpwand_request() {

    // Check if prompt parameter exists
    if ( empty( $_POST['prompt'] ) ) {
        wp_send_json_error( 'error' );
    }

    $selected_model    = '';
    $busines_details   = '';
    $targated_customer = '';

    // Sanitize and validate input fields
    $fields = array(
        'topic'            => sanitize_text_field( $_POST['topic'] ?? '' ),
        'keywords'         => sanitize_text_field( $_POST['keyword'] ?? '' ),
        'no_of_results'    => absint( $_POST['result_number'] ?? 1 ),
        'tone'             => sanitize_text_field( $_POST['tone'] ?? '' ),
        'word_count'       => absint( $_POST['word_limit'] ?? '' ),
        'product_name'     => sanitize_text_field( $_POST['product_name'] ?? '' ),
        'description'      => sanitize_text_field( $_POST['description'] ?? '' ),
        'content'          => wp_kses_post( $_POST['content'] ?? '' ),
        'content_textarea' => wp_kses_post( $_POST['content_textarea'] ?? '' ),
        'product_1'        => wp_kses_post( $_POST['product_1'] ?? '' ),
        'product_2'        => wp_kses_post( $_POST['product_2'] ?? '' ),
        'description_1'    => wp_kses_post( $_POST['description_1'] ?? '' ),
        'description_2'    => wp_kses_post( $_POST['description_2'] ?? '' ),
    );

    // Replace fields in prompt with values
    $command = preg_replace_callback(
        '/\{([^}]+)\}/',
        function ( $matches ) use ( $fields ) {
            $key = trim( $matches[1] );
            return isset( $fields[$key] ) ? $fields[$key] : '';
        },
        sanitize_text_field( $_POST['prompt'] )
    );

    // Call OpenAI API to generate content
    // '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'
    $openAI = new OpenAi( WPWAND_OPENAI_KEY );

    if ( 'gpt-3.5-turbo' == $selected_model ) {

        $complete = $openAI->chat( [
            'model'             => 'gpt-3.5-turbo',
            'messages'          => [
                [
                    'role'    => 'system',
                    'content' => WPWAND_AI_CHARACTER,
                ],
                [
                    'role'    => 'system',
                    'content' => "Your business details is: $busines_details ",
                ],
                [
                    'role'    => 'system',
                    'content' => "Your targated customer is: $targated_customer ",
                ],
                [
                    'role'    => 'user',
                    'content' => $command,
                ],
            ],
            'n'                 => (int) $fields['no_of_results'],
            'temperature'       => (int) get_option( 'wpwand_temperature', 1.0 ),
            'max_tokens'        => (int) get_option( 'wpwand_max_tokens', 1000 ),
            'frequency_penalty' => (int) get_option( 'wpwand_frequency', 0 ),
            'presence_penalty'  => (int) get_option( 'wpwand_presence_penalty', 0 ),
        ] );
    } else {
        $complete = $openAI->completion( [
            'model'             => $selected_model,
            'prompt'            => WPWAND_AI_CHARACTER . " Your business details is: $busines_details . Your Targated customer is: $targated_customer. $command",
            'n'                 => (int) $fields['no_of_results'],
            'temperature'       => (int) get_option( 'wpwand_temperature', 1.0 ),
            'max_tokens'        => (int) get_option( 'wpwand_max_tokens', 1000 ),
            'frequency_penalty' => (int) get_option( 'wpwand_frequency', 0 ),
            'presence_penalty'  => (int) get_option( 'wpwand_presence_penalty', 0 ),
        ] );

    }

    $content = json_decode( $complete );

    $text = '';

    // wp_send_json( $content );
    // Build HTML content from OpenAI API response
    foreach ( $content->choices as $choice ) {
        $text .= '<div class="wpwand-content">

            <button class="wpwand-copy-button" data-copy-text=\' ' . esc_attr( $choice->message->content ) . ' \'>
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.66659 3.08333V7.75C3.66659 8.39433 4.18892 8.91667 4.83325 8.91667H8.33325M3.66659 3.08333V1.91667C3.66659 1.27233 4.18892 0.75 4.83325 0.75H7.50829C7.663 0.75 7.81138 0.811458 7.92077 0.920854L10.4957 3.49581C10.6051 3.60521 10.6666 3.75358 10.6666 3.90829V7.75C10.6666 8.39433 10.1443 8.91667 9.49992 8.91667H8.33325M3.66659 3.08333H3.33325C2.22868 3.08333 1.33325 3.97876 1.33325 5.08333V10.0833C1.33325 10.7277 1.85559 11.25 2.49992 11.25H6.33325C7.43782 11.25 8.33325 10.3546 8.33325 9.25V8.91667" stroke="white" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Copy to Clipboard
            </button>
            ' . wpautop( esc_html( isset( $choice->message ) ) ? $choice->message->content : $choice->text ) . '
            </div>';

    }
    wp_send_json( $text );
}
add_action( 'wpwand_ajax_api', 'wpwand_request' );

function wpwand_request_hook() {
    do_action( 'wpwand_ajax_api' );
}

// Register AJAX action for logged-in and non-logged-in users
add_action( 'wp_ajax_wpwand_request', 'wpwand_request_hook' );
add_action( 'wp_ajax_nopriv_wpwand_request', 'wpwand_request_hook' );

function wpwand_api_set() {

    // Check if prompt parameter exists
    if ( empty( $_POST['api_key'] ) ) {
        wp_send_json_error( 'Please enter your api key' );
    }

    // Sanitize and validate input fields
    $api_key = sanitize_text_field( $_POST['api_key'] ?? '' );

    $set_api_key = update_option( 'wpwand_api_key', $api_key );

    if ( $set_api_key ) {
        wp_send_json( 'success' );
    }

    wp_send_json_error( 'Something went wrong.' );

}

// Register AJAX action for logged-in and non-logged-in users
add_action( 'wp_ajax_wpwand_api_set', 'wpwand_api_set' );
add_action( 'wp_ajax_nopriv_wpwand_api_set', 'wpwand_api_set' );
