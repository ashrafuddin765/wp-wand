<?php

if ( !defined( 'ABSPATH' ) ) {
    exit( 'You are not allowed' );
}

function wpwand_templates() {
   
    $all_prompts = get_option('wpwand_data');

    if(isset($all_prompts['free']) && isset($all_prompts['pro'])){

        return array_merge( $all_prompts['free'], $all_prompts['pro'] );
    }
    return [];
}

function randomize_array( $array ) {
    shuffle( $array ); // shuffle the outer array

    foreach ( $array as $inner_array ) {
        shuffle( $inner_array ); // shuffle each inner array
    }

    return $array;
}


// language set
function wpwand_language_array() {
    return [
        'English'    => 'en',
        'Afrikaans'  => 'af',
        'Arabic'     => 'ar',
        'Armenian'   => 'an',
        'Bosnian'    => 'bs',
        'Bulgarian'  => 'bg',
        'Chinese'    => 'zh',
        'Croatian'   => 'hr',
        'Czech'      => 'cs',
        'Danish'     => 'da',
        'Dutch'      => 'nl',
        'Estonian'   => 'et',
        'Filipino'   => 'fil',
        'Finnish'    => 'fi',
        'French'     => 'fr',
        'German'     => 'de',
        'Greek'      => 'el',
        'Hebrew'     => 'he',
        'Hindi'      => 'hi',
        'Hungarian'  => 'hu',
        'Indonesian' => 'id',
        'Italian'    => 'it',
        'Japanese'   => 'ja',
        'Korean'     => 'ko',
        'Latvian'    => 'lv',
        'Lithuanian' => 'lt',
        'Malay'      => 'ms',
        'Norwegian'  => 'no',
        'Persian'    => 'fa',
        'Polish'     => 'pl',
        'Portuguese' => 'pt',
        'Romanian'   => 'ro',
        'Russian'    => 'ru',
        'Serbian'    => 'sr',
        'Slovak'     => 'sk',
        'Slovenian'  => 'sl',
        'Spanish'    => 'es',
        'Swedish'    => 'sv',
        'Thai'       => 'th',
        'Turkish'    => 'tr',
        'Ukrainian'  => 'uk',
        'Urdu'       => 'ur',
        'Vietnamese' => 'vi',
    ];

}