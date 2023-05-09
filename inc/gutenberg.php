<?php 
use Orhanerday\OpenAi\OpenAi;

add_action( 'enqueue_block_editor_assets', 'wpwand_block_editor', 9 );
function wpwand_block_editor() {
    $wpwand_editor_button_menus  = [
        [ 
            'name' => 'Write a paragraph', 
            'prompt' => ' Write a paragraph: [text]',
            'is_pro' => false,
        ],
        [ 
            'name' => 'Summarize', 
            'prompt' => 'Summarize this: [text]',
            'is_pro' => false,
        ],
        [ 
            'name' => 'Expand', 
            'prompt' => 'Expand this: [text]',
            'is_pro' => false,
        ],


        // this will be pro 
        [ 
            'name' => 'Rewrite', 
            'prompt' => 'Rewrite this: [text]',
            'is_pro' => true,
        ],
        [ 
            'name' => 'Generate ideas', 
            'prompt' => 'Generate ideas: [text]',
            'is_pro' => true,
        ],
        [ 
            'name' => 'Make a bullet list', 
            'prompt' => 'Make a bulleted list: [text]',
            'is_pro' => true,
        ],
        [ 
            'name' => 'Paraphrase', 
            'prompt' => 'Paraphrase this: [text]',
            'is_pro' => true,
        ],
        [ 
            'name' => 'Generate a call to action', 
            'prompt' => 'Generate a call to action: [text]',
            'is_pro' => true,
        ],
        [ 
            'name' => 'Correct grammar', 
            'prompt' => 'Correct grammar in this: [text]',
            'is_pro' => true,
        ],
        [ 
            'name' => 'Generate a question', 
            'prompt' => 'Generate a question: [text]',
            'is_pro' => true,
        ],
        [ 
            'name' => 'Suggest a title', 
            'prompt' => 'Suggest a title for this: [text]',
            'is_pro' => true,
        ],
        [ 
            'name' => 'Convert to passive voice', 
            'prompt' => 'Convert this to passive voice: [text]',
            'is_pro' => true,
        ],
        [ 
            'name' => 'Convert to active voice', 
            'prompt' => 'Convert this to active voice: [text]',
            'is_pro' => true,
        ],
        [ 
            'name' => 'Write a conclusion', 
            'prompt' => 'Write a conclusion for this: [text]',
            'is_pro' => true,
        ],
        [ 
            'name' => 'Provide a counterargument', 
            'prompt' => 'Provide a counterargument for this: [text]',
            'is_pro' => true,
        ],
        [ 
            'name' => 'Generate a quote', 
            'prompt' => 'Generate a quote related to this: [text]',
            'is_pro' => true,
        ],
    ];
        if ( is_admin() && current_user_can( 'manage_options' ) ) {
        wp_enqueue_script(
            'wpwand-gutenberg-custom-button',
            WPWAND_PLUGIN_URL . 'assets/js/wpwand-gutenberg.js',
            ['wp-editor', 'wp-i18n', 'wp-element', 'wp-compose', 'wp-components'],
            '1.0.0',
            true
        );


        wp_localize_script( 'wpwand-gutenberg-custom-button', 'wpwand_gutenberg_editor', array(
            'plugin_url'      => WPWAND_PLUGIN_URL,
            'editor_ajax_url' => admin_url( 'admin-ajax.php' ),
            'editor_menus'    => $wpwand_editor_button_menus,
            'change_action'   => 'below',
        ) );
    }
}





function wpwand_editor_request() {
    $wpaicg_result = array( 'status' => 'error', 'msg' => 'Missing request parameters' );
    // if ( !wp_verify_nonce( $_POST['nonce'], 'wpaicg-ajax-nonce' ) ) {
    //     $wpaicg_result['status'] = 'error';
    //     $wpaicg_result['msg']    = WPAICG_NONCE_ERROR;
    //     wp_send_json( $wpaicg_result );
    // }
    if ( isset( $_POST['prompt'] ) && !empty( $_POST['prompt'] ) ) {
        $command           = $_POST['prompt'];
        $selected_model    = get_option( 'wpwand_model', 'gpt-3.5-turbo' );
        $busines_details   = get_option( 'wpwand_busines_details' );
        $targated_customer = get_option( 'wpwand_targated_customer' );
        $language          = wpwand_get_option( 'wpwand_language', 'English' );

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
                        'role'    => 'system',
                        'content' => "Your language is: $language. you must write in the following language",
                    ],
                    [
                        'role'    => 'user',
                        'content' => $command,
                    ],
                ],
                'n'                 => (int) 1,
                'temperature'       => (int) get_option( 'wpwand_temperature', 1.0 ),
                'max_tokens'        => (int) get_option( 'wpwand_max_tokens', 1000 ),
                'frequency_penalty' => (int) get_option( 'wpwand_frequency', 0 ),
                'presence_penalty'  => (int) get_option( 'wpwand_presence_penalty', 0 ),
            ] );
        } else {
            $complete = $openAI->completion( [
                'model'             => $selected_model,
                'prompt'            => WPWAND_AI_CHARACTER . "Your language is: $language. you must write in the following language . Your business details is: $busines_details . Your Targated customer is: $targated_customer. $command",
                'n'                 => (int) 1,
                'temperature'       => (int) get_option( 'wpwand_temperature', 1.0 ),
                'max_tokens'        => (int) get_option( 'wpwand_max_tokens', 1000 ),
                'frequency_penalty' => (int) get_option( 'wpwand_frequency', 0 ),
                'presence_penalty'  => (int) get_option( 'wpwand_presence_penalty', 0 ),
            ] );

        }

        $content = json_decode( $complete );

        if ( !$content->choices ) {

            $wpaicg_result['msg'] = 'Something went wrong';
        } else {
            foreach ( $content->choices as $choice ) {

                $cnt                     = isset( $choice->message ) ? $choice->message->content : $choice->text;
                $wpaicg_result['status'] = 'success';
                $wpaicg_result['data']   = str_replace( "\n", '<br>', $cnt );
            }
        }
    }
    wp_send_json( $wpaicg_result );
}

add_action( 'wp_ajax_wpwand_editor_request', 'wpwand_editor_request' );
add_action( 'wp_ajax_nopriv_wpwand_editor_request', 'wpwand_editor_request' );
