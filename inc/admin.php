<?php

function wpwand_settings_page() {
    $activate_text = WPWAND_OPENAI_KEY ? 'Active' : 'Not active <a href="https://platform.openai.com/account/api-keys">Get your free OpenAI API key</a>';

    ?>
<div class="wrap">
    <div class="wpwand-setting-page-wrap">

        <div class="wpwand-logo-full"><svg width="114" height="26" viewBox="0 0 114 26" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M9.9793 0.744536C11.9634 0.255497 14.0366 0.255497 16.0207 0.744536C18.0048 1.23358 19.8405 2.19703 21.3701 3.55211C22.8997 4.9072 24.0774 6.61339 24.802 8.52409C25.5266 10.4348 25.7765 12.4929 25.5302 14.5214C25.2839 16.55 24.5487 18.4885 23.3879 20.1703C22.2271 21.852 20.6753 23.2268 18.8658 24.1764C17.0564 25.1261 15.0435 25.6222 13 25.6222C10.9565 25.6222 8.94357 25.1261 7.13415 24.1764C5.32473 23.2268 3.77293 21.852 2.6121 20.1703C1.45126 18.4885 0.716102 16.55 0.469787 14.5214C0.223471 12.4929 0.473365 10.4348 1.198 8.52409C1.92263 6.61339 3.10033 4.9072 4.6299 3.55211C6.15948 2.19703 7.99519 1.23358 9.9793 0.744536Z"
                    fill="#3767FB" />
                <g clip-path="url(#clip0_6066_844)">
                    <path
                        d="M18.2963 10.5918L17.3397 11.5484L15.4138 9.62245L16.3704 8.66591C16.64 8.39628 16.9867 8.26788 17.3333 8.26788C17.68 8.26788 18.0267 8.39628 18.2963 8.66591C18.8291 9.19875 18.8291 10.059 18.2963 10.5918Z"
                        fill="white" />
                    <path
                        d="M16.8901 12.0044L9.95031 18.9377C9.41747 19.4706 8.55723 19.4706 8.02439 18.9377C7.49155 18.4049 7.49155 17.5447 8.02439 17.0118L14.9642 10.0785L16.8901 12.0044Z"
                        fill="white" />
                    <path
                        d="M12.1658 8.02495L12.429 7.13261C12.4547 7.04915 12.429 6.95927 12.3713 6.89507C12.3135 6.83088 12.2108 6.8052 12.1273 6.83088L11.235 7.09409L10.3426 6.83088C10.2592 6.8052 10.1693 6.83088 10.1051 6.88865C10.0409 6.95285 10.0216 7.04273 10.0473 7.12619L10.3041 8.02495L10.0409 8.9173C10.0152 9.00075 10.0409 9.09063 10.0987 9.15483C10.1629 9.21903 10.2528 9.23828 10.3362 9.21261L11.235 8.95582L12.1273 9.21903C12.153 9.22545 12.1723 9.23186 12.1979 9.23186C12.2621 9.23186 12.3199 9.20619 12.3713 9.16125C12.4355 9.09705 12.4547 9.00717 12.429 8.92372L12.1658 8.02495Z"
                        fill="white" />
                    <path
                        d="M9.59797 11.8768L9.86118 10.9845C9.88685 10.901 9.86118 10.8111 9.8034 10.7469C9.7392 10.6827 9.64932 10.6635 9.56587 10.6892L8.6671 10.946L7.77475 10.6827C7.69129 10.6571 7.60142 10.6827 7.53723 10.7405C7.47303 10.8047 7.45377 10.8946 7.47945 10.9781L7.73624 11.8768L7.47303 12.7692C7.44735 12.8526 7.47303 12.9425 7.53081 13.0067C7.595 13.0709 7.68487 13.0901 7.76833 13.0645L8.66068 12.8013L9.55303 13.0645C9.57229 13.0709 9.59797 13.0709 9.62364 13.0709C9.68784 13.0709 9.74562 13.0452 9.79698 13.0003C9.86118 12.9361 9.88044 12.8462 9.85476 12.7627L9.59797 11.8768Z"
                        fill="white" />
                    <path
                        d="M19.227 15.0864L19.4903 14.194C19.5159 14.1106 19.4903 14.0207 19.4325 13.9565C19.3683 13.8923 19.2784 13.873 19.1949 13.8987L18.3026 14.1619L17.4103 13.8987C17.3268 13.873 17.2369 13.8987 17.1727 13.9565C17.1085 14.0207 17.0893 14.1106 17.1149 14.194L17.3782 15.0864L17.1149 15.9787C17.0893 16.0622 17.1149 16.152 17.1727 16.2162C17.2369 16.2804 17.3268 16.2997 17.4103 16.274L18.3026 16.0108L19.1949 16.274C19.2142 16.2804 19.2399 16.2804 19.2656 16.2804C19.3298 16.2804 19.3875 16.2548 19.4389 16.2098C19.5031 16.1456 19.5224 16.0557 19.4967 15.9723L19.227 15.0864Z"
                        fill="white" />
                </g>
                <path
                    d="M33.3156 19L30.4063 8.30909H33.4061L35.0627 15.492H35.1601L36.8862 8.30909H39.8304L41.5844 15.4503H41.6749L43.3036 8.30909H46.2965L43.3941 19H40.255L38.4175 12.2764H38.2853L36.4478 19H33.3156ZM47.4862 23.0091V8.30909H50.4095V10.1048H50.5417C50.6716 9.81714 50.8596 9.52481 51.1055 9.22784C51.3561 8.92623 51.6809 8.67566 52.0799 8.47614C52.4836 8.27197 52.9848 8.16989 53.5833 8.16989C54.3629 8.16989 55.0821 8.37405 55.741 8.78239C56.3999 9.18608 56.9266 9.79626 57.321 10.6129C57.7154 11.425 57.9126 12.4435 57.9126 13.6685C57.9126 14.861 57.72 15.8679 57.3349 16.6892C56.9544 17.5059 56.4347 18.1253 55.7758 18.5476C55.1216 18.9652 54.3884 19.174 53.5764 19.174C53.001 19.174 52.5115 19.0789 52.1078 18.8886C51.7087 18.6984 51.3816 18.4594 51.1264 18.1717C50.8712 17.8794 50.6763 17.5848 50.5417 17.2878H50.4512V23.0091H47.4862ZM50.3886 13.6545C50.3886 14.2902 50.4768 14.8447 50.6531 15.318C50.8294 15.7913 51.0846 16.1602 51.4187 16.4247C51.7528 16.6846 52.1588 16.8145 52.6368 16.8145C53.1193 16.8145 53.5277 16.6822 53.8618 16.4178C54.1958 16.1486 54.4487 15.7774 54.6204 15.3041C54.7967 14.8262 54.8849 14.2763 54.8849 13.6545C54.8849 13.0374 54.7991 12.4945 54.6274 12.0259C54.4557 11.5572 54.2028 11.1906 53.8687 10.9261C53.5346 10.6616 53.124 10.5294 52.6368 10.5294C52.1542 10.5294 51.7458 10.657 51.4118 10.9122C51.0823 11.1674 50.8294 11.5294 50.6531 11.998C50.4768 12.4667 50.3886 13.0188 50.3886 13.6545ZM65.7506 19L62.8412 8.30909H65.8411L67.4976 15.492H67.595L69.3212 8.30909H72.2654L74.0193 15.4503H74.1098L75.7385 8.30909H78.7314L75.829 19H72.6899L70.8524 12.2764H70.7202L68.8827 19H65.7506ZM82.9697 19.2018C82.2876 19.2018 81.6797 19.0835 81.1461 18.8469C80.6125 18.6056 80.1902 18.2506 79.8794 17.782C79.5731 17.3087 79.42 16.7194 79.42 16.0141C79.42 15.4201 79.529 14.9213 79.7471 14.5176C79.9652 14.1139 80.2622 13.7891 80.638 13.5432C81.0139 13.2973 81.4408 13.1116 81.9187 12.9864C82.4013 12.8611 82.9071 12.7729 83.436 12.7219C84.0578 12.6569 84.559 12.5966 84.9394 12.5409C85.3199 12.4806 85.596 12.3924 85.7677 12.2764C85.9394 12.1604 86.0252 11.9887 86.0252 11.7614V11.7196C86.0252 11.2788 85.886 10.9377 85.6076 10.6964C85.3339 10.4552 84.9441 10.3345 84.4383 10.3345C83.9047 10.3345 83.4801 10.4528 83.1646 10.6895C82.8491 10.9215 82.6402 11.2138 82.5382 11.5665L79.7958 11.3437C79.935 10.6941 80.2088 10.1327 80.6171 9.65937C81.0255 9.18144 81.5521 8.81487 82.1971 8.55966C82.8467 8.29981 83.5984 8.16989 84.4522 8.16989C85.0462 8.16989 85.6146 8.23949 86.1575 8.37869C86.705 8.5179 87.1899 8.73366 87.6122 9.02599C88.0391 9.31832 88.3755 9.69418 88.6214 10.1536C88.8673 10.6083 88.9903 11.1535 88.9903 11.7892V19H86.1784V17.5175H86.0948C85.9232 17.8516 85.6935 18.1462 85.4058 18.4014C85.1181 18.652 84.7724 18.8492 84.3687 18.993C83.965 19.1322 83.4987 19.2018 82.9697 19.2018ZM83.8188 17.1555C84.255 17.1555 84.6402 17.0697 84.9742 16.898C85.3083 16.7217 85.5705 16.485 85.7608 16.1881C85.951 15.8911 86.0461 15.5547 86.0461 15.1788V14.0443C85.9533 14.1046 85.8257 14.1603 85.6633 14.2114C85.5055 14.2578 85.3269 14.3018 85.1274 14.3436C84.9278 14.3807 84.7283 14.4155 84.5288 14.448C84.3293 14.4759 84.1483 14.5014 83.9859 14.5246C83.6379 14.5756 83.334 14.6568 83.0741 14.7682C82.8143 14.8795 82.6124 15.0304 82.4686 15.2206C82.3247 15.4062 82.2528 15.6382 82.2528 15.9166C82.2528 16.3203 82.399 16.6289 82.6913 16.8423C82.9883 17.0511 83.3641 17.1555 83.8188 17.1555ZM93.8637 12.8193V19H90.8987V8.30909H93.7245V10.1953H93.8498C94.0864 9.57353 94.4832 9.08168 95.04 8.71974C95.5968 8.35317 96.2719 8.16989 97.0654 8.16989C97.8078 8.16989 98.4551 8.33229 99.0073 8.6571C99.5595 8.98191 99.9887 9.44593 100.295 10.0491C100.601 10.6477 100.754 11.3623 100.754 12.1929V19H97.7893V12.7219C97.7939 12.0676 97.6269 11.5572 97.2881 11.1906C96.9494 10.8194 96.4831 10.6338 95.8891 10.6338C95.4901 10.6338 95.1374 10.7196 94.8312 10.8913C94.5296 11.063 94.2929 11.3136 94.1212 11.643C93.9542 11.9679 93.8683 12.3599 93.8637 12.8193ZM106.639 19.174C105.827 19.174 105.091 18.9652 104.432 18.5476C103.778 18.1253 103.258 17.5059 102.873 16.6892C102.493 15.8679 102.302 14.861 102.302 13.6685C102.302 12.4435 102.5 11.425 102.894 10.6129C103.289 9.79626 103.813 9.18608 104.467 8.78239C105.126 8.37405 105.848 8.16989 106.632 8.16989C107.23 8.16989 107.729 8.27197 108.128 8.47614C108.532 8.67566 108.857 8.92623 109.103 9.22784C109.353 9.52481 109.543 9.81714 109.673 10.1048H109.764V4.74545H112.722V19H109.799V17.2878H109.673C109.534 17.5848 109.337 17.8794 109.082 18.1717C108.831 18.4594 108.504 18.6984 108.1 18.8886C107.701 19.0789 107.214 19.174 106.639 19.174ZM107.578 16.8145C108.056 16.8145 108.46 16.6846 108.789 16.4247C109.124 16.1602 109.379 15.7913 109.555 15.318C109.736 14.8447 109.827 14.2902 109.827 13.6545C109.827 13.0188 109.738 12.4667 109.562 11.998C109.386 11.5294 109.13 11.1674 108.796 10.9122C108.462 10.657 108.056 10.5294 107.578 10.5294C107.091 10.5294 106.68 10.6616 106.346 10.9261C106.012 11.1906 105.759 11.5572 105.588 12.0259C105.416 12.4945 105.33 13.0374 105.33 13.6545C105.33 14.2763 105.416 14.8262 105.588 15.3041C105.764 15.7774 106.017 16.1486 106.346 16.4178C106.68 16.6822 107.091 16.8145 107.578 16.8145Z"
                    fill="#271D5B" />
                <defs>
                    <clipPath id="clip0_6066_844">
                        <rect width="13.4815" height="13.4815" fill="white" transform="translate(6.74078 6.74066)" />
                    </clipPath>
                </defs>
            </svg>
        </div>
        <div class="wpwand-settings">
            <?php settings_errors();?>

            <h2 class="nav-tab-wrapper">
                <a href="#general" class="nav-tab nav-tab-active"><?php esc_html_e( 'General', 'wpwand' );?></a>
                <?php do_action( 'wpwand_add_tab_link' )?>
            </h2>
            <a href="" class="wpwand-get-pro-button">Get Pro Version</a>
            <form method="post" action="options.php">
                <?php settings_fields( 'wpwand_settings_group' );?>
                <?php do_settings_sections( 'wpwand_settings_group' );?>
                <div id="general" class="tab-panel">
                    <table class="form-table">
                        <tr valign="top">
                            <th scope="row">
                                <label for="wpwand_api_key">
                                    <?php esc_html_e( 'OpenAI API Key', 'wpwand' );?>
                                    <span class="wpwand-field-desc">Add your OpenAI API key to activate WP Wand</span>
                                </label>
                            </th>
                            <td class="wpwand-field">
                                <input type="text" id="wpwand_api_key" name="wpwand_api_key" class="regular-text"
                                    value="<?php echo esc_attr( wpwand_get_option( 'wpwand_api_key' ) ); ?>" />
                                <div class="wpwand_api_key_status">

                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M8 16C12.4183 16 16 12.4183 16 8C16 3.58172 12.4183 0 8 0C3.58172 0 0 3.58172 0 8C0 12.4183 3.58172 16 8 16ZM11.7071 6.70711C12.0976 6.31658 12.0976 5.68342 11.7071 5.29289C11.3166 4.90237 10.6834 4.90237 10.2929 5.29289L7 8.58579L5.70711 7.29289C5.31658 6.90237 4.68342 6.90237 4.29289 7.29289C3.90237 7.68342 3.90237 8.31658 4.29289 8.70711L6.29289 10.7071C6.68342 11.0976 7.31658 11.0976 7.70711 10.7071L11.7071 6.70711Z"
                                            fill="<?php echo WPWAND_OPENAI_KEY ? '#3BCB38' : '#D1D6DB' ?>" />
                                    </svg>

                                    <span><?php printf( $activate_text )?></span>
                                </div>
                            </td>
                        </tr>

                        <?php if ( WPWAND_OPENAI_KEY ): ?>
                        <tr>
                            <th scope="row">
                                <label for="wpwand_model"><?php esc_html_e( 'Model', 'wpwand' );?>
                                    <span class="wpwand-field-desc">Add your OpenAI API key to activate WP Wand</span>
                                </label>
                            </th>
                            <td>
                                <select id="wpwand_model" name="wpwand_model">
                                    <option value="text-davinci-003"
                                        <?php selected( wpwand_get_option( 'wpwand_model', 'gpt-3.5-turbo' ), 'text-davinci-003' );?>>
                                        <?php esc_html_e( 'text-davinci-003', 'wpwand' );?></option>
                                    <option value="gpt-3.5-turbo"
                                        <?php selected( wpwand_get_option( 'wpwand_model', 'gpt-3.5-turbo' ), 'gpt-3.5-turbo' );?>>
                                        <?php esc_html_e( 'gpt-3.5-turbo', 'wpwand' );?></option>
                                    <option value="text-curie-001"
                                        <?php selected( wpwand_get_option( 'wpwand_model', 'gpt-3.5-turbo' ), 'text-curie-001' );?>>
                                        <?php esc_html_e( 'text-curie-001', 'wpwand' );?></option>
                                    <option value="text-babbage-001"
                                        <?php selected( wpwand_get_option( 'wpwand_model', 'gpt-3.5-turbo' ), 'text-babbage-001' );?>>
                                        <?php esc_html_e( 'text-babbage-001', 'wpwand' );?></option>
                                    <option value="text-ada-001"
                                        <?php selected( wpwand_get_option( 'wpwand_model', 'gpt-3.5-turbo' ), 'text-ada-001' );?>>
                                        <?php esc_html_e( 'text-ada-001', 'wpwand' );?></option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <label for="wpwand_language"><?php esc_html_e( 'Language', 'wpwand' );?>
                                    <span class="wpwand-field-desc">Select your language</span>
                                </label>
                            </th>
                            <td>
                                <select id="wpwand_language" name="wpwand_language">
                                             <?php
                                            if(is_array(wpwand_language_array())){
                                                $default_language = wpwand_get_option('wpwand_language', 'en');
                                                foreach(wpwand_language_array() as $key => $value){
                                                    echo '<option value="' . $key . '" '.selected( $default_language, $key ).' >'.$key.'</option>';
                                                }
                                            }
                                        ?>
                                </select>
                            </td>
                        </tr>
                        <tr valign="top">
                            <th scope="row">
                                <label for="wpwand_temperature"><?php esc_html_e( 'Temperature', 'wpwand' );?>
                                    <span class="wpwand-field-desc">Controls randomness: If you lower the number, the
                                        result will be repetitive & the output quality might gets lower.</span>
                                </label>
                            </th>
                            <td>

                                <div class="wpwand-slider-input-wrap">
                                    <input type="number" id="wpwand_temperature" name="wpwand_temperature"
                                        class="wpwand_slider_input small-text" min="0" max="1" step="0.1"
                                        value="<?php echo wpwand_get_option( 'wpwand_temperature', 0.5 ); ?>" />
                                </div>
                            </td>
                        </tr>
                        <tr valign="top">
                            <th scope="row">
                                <label for="wpwand_max_tokens"><?php esc_html_e( 'Max Token', 'wpwand' );?>
                                    <span class="wpwand-field-desc">The maximum number of tokens to generate. One token
                                        is roughly 4 characters for normal English text.</span>
                                </label>
                            </th>
                            <td>
                                <div class="wpwand-slider-input-wrap">
                                    <input type="number" id="wpwand_max_tokens" name="wpwand_max_tokens" min="0"
                                        max="10000" step="1" class="wpwand_slider_input small-text"
                                        value="<?php echo wpwand_get_option( 'wpwand_max_tokens', 1000 ); ?>" />
                                </div>
                            </td>
                        </tr>
                        <tr valign="top">
                            <th scope="row">
                                <label for="wpwand_presence_penalty"><?php esc_html_e( 'Presence Penalty', 'wpwand' );?>
                                    <span class="wpwand-field-desc"></span>
                                </label>
                            </th>
                            <td>
                                <div class="wpwand-slider-input-wrap">
                                    <input type="number" id="wpwand_presence_penalty" name="wpwand_presence_penalty"
                                        min="0" max="2" step="0.1" class="wpwand_slider_input small-text"
                                        value="<?php echo wpwand_get_option( 'wpwand_presence_penalty', 0 ); ?>" />
                                </div>
                            </td>
                        </tr>
                        <tr valign="top">
                            <th scope="row">
                                <label for="wpwand_frequency"><?php esc_html_e( 'Frequency', 'wpwand' );?>
                                    <span class="wpwand-field-desc"></span>
                                </label>
                            </th>
                            <td>
                                <div class="wpwand-slider-input-wrap">
                                    <input type="number" id="wpwand_frequency" name="wpwand_frequency" min="0" max="2"
                                        step="0.1" class="wpwand_slider_input small-text"
                                        value="<?php echo wpwand_get_option( 'wpwand_frequency', 0 ); ?>" />
                                </div>
                            </td>
                        </tr>
                        <?php endif;?>

                    </table>
                    <?php wpwand_model_details_card()?>

                </div>
                <?php do_action( 'wpwand_add_tab_content' )?>
                <?php submit_button( esc_html__( 'Update', 'wpwand' ) );?>

            </form>



        </div>

    </div>
</div>
<?php
}

function wpwand_register_menu() {
    add_menu_page( 'WP Wand', 'WP Wand', 'manage_options', 'wpwand', '' );
    add_submenu_page( 'wpwand', 'WP Wand', 'Settings', 'manage_options', 'wpwand', 'wpwand_settings_page' );
}

add_action( 'admin_menu', 'wpwand_register_menu' );
add_action( 'admin_init', 'wpwand_register_settings' );
// Register WP Wand settings
function wpwand_register_settings() {
    register_setting( 'wpwand_settings_group', 'wpwand_api_key', array(
        'type'              => 'string',
        'description'       => esc_html__( 'OpenAI API Key', 'wpwand' ),
        'sanitize_callback' => 'sanitize_text_field',
        'validate_callback' => 'wpwand_validate_api_key',
    ) );

    register_setting( 'wpwand_settings_group', 'wpwand_model', array(
        'type'              => 'string',
        'description'       => esc_html__( 'Model', 'wpwand' ),
        'sanitize_callback' => 'sanitize_text_field',
        'validate_callback' => 'wpwand_validate_model',
    ) );

    register_setting( 'wpwand_settings_group', 'wpwand_language', array(
        'type'              => 'string',
        'description'       => esc_html__( 'Language', 'wpwand' ),
        'sanitize_callback' => 'sanitize_text_field',
        'validate_callback' => 'wpwand_validate_model',
    ) );

    register_setting( 'wpwand_settings_group', 'wpwand_temperature', array(
        'type'              => 'string',
        'description'       => esc_html__( 'Temperature', 'wpwand' ),
        'sanitize_callback' => 'sanitize_text_field',
        'validate_callback' => 'wpwand_validate_input_field',
    ) );
    register_setting( 'wpwand_settings_group', 'wpwand_frequency', array(
        'type'              => 'string',
        'description'       => esc_html__( 'Frequency', 'wpwand' ),
        'sanitize_callback' => 'sanitize_text_field',
        'validate_callback' => 'wpwand_validate_input_field',
    ) );
    register_setting( 'wpwand_settings_group', 'wpwand_max_tokens', array(
        'type'              => 'string',
        'sanitize_callback' => 'sanitize_text_field',
        'validate_callback' => 'wpwand_validate_input_field',
    ) );
    register_setting( 'wpwand_settings_group', 'wpwand_presence_penalty', array(
        'type'              => 'string',
        'sanitize_callback' => 'sanitize_text_field',
        'validate_callback' => 'wpwand_validate_input_field',
    ) );

    do_action( 'wpwand_register_settings' );

}

// Validate WP Wand API key
function wpwand_validate_api_key( $input ) {
    $error = false;

    // Check if the input is empty
    if ( empty( $input ) ) {
        add_settings_error( 'wpwand_api_key', 'wpwand_api_key_empty', esc_html__( 'Please enter an OpenAI API key.', 'wpwand' ) );
        $error = true;
    } else {
        // Check if the input matches the expected format of an OpenAI secret key
        if ( !preg_match( '/^sk-\w+$/', $input ) ) {
            add_settings_error( 'wpwand_api_key', 'wpwand_api_key_invalid', esc_html__( 'Invalid OpenAI API key format.', 'wpwand' ) );
            $error = true;
        }
    }

    // If there is an error, return the old value
    if ( $error ) {
        return wpwand_get_option( 'wpwand_api_key' );
    }

    return $input;
}

// Validate WP Wand AI character
function wpwand_validate_input_field( $input ) {
    // Perform any additional validation here
    return $input;
}

function wpwand_validate_model( $input ) {
    $allowed_models = array( 'davinci', 'curie', 'babbage' );

    if ( !in_array( $input, $allowed_models ) ) {
        add_settings_error( 'wpwand_model', 'wpwand_model_invalid', esc_html__( 'Invalid model selected.', 'wpwand' ) );
        return wpwand_get_option( 'wpwand_model' );
    }

    return $input;
}