<?php

if ( !defined( 'ABSPATH' ) ) {
    exit( 'You are not allowed' );
}

function wpwand_frontend_callback() {
    ob_start();?>

<!-- <button><?php esc_html_e( 'Generate content', 'wpwand' )?></button> -->

<button class="wpwand-trigger wpwand-open">
    <svg width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M23.4071 8.81326L21.3469 10.8735L17.1987 6.72536L19.259 4.66511C19.8397 4.08437 20.5864 3.80783 21.3331 3.80783C22.0797 3.80783 22.8264 4.08437 23.4071 4.66511C24.5548 5.81277 24.5548 7.66561 23.4071 8.81326Z"
            fill="white" />
        <path
            d="M20.3786 11.8557L5.43138 26.789C4.28372 27.9366 2.43088 27.9366 1.28323 26.789C0.135572 25.6413 0.135572 23.7885 1.28323 22.6408L16.2305 7.70752L20.3786 11.8557Z"
            fill="white" />
        <path
            d="M10.2032 3.28461L10.7701 1.36263C10.8254 1.18288 10.7701 0.989297 10.6457 0.851026C10.5212 0.712754 10.3 0.657445 10.1202 0.712754L8.19827 1.27967L6.2763 0.712754C6.09654 0.657445 5.90296 0.712754 5.76469 0.837198C5.62642 0.97547 5.58494 1.16905 5.64025 1.3488L6.19333 3.28461L5.62642 5.20658C5.57111 5.38632 5.62642 5.57992 5.75086 5.71819C5.88914 5.85646 6.08272 5.89794 6.26247 5.84263L8.19827 5.28955L10.1202 5.85646C10.1756 5.87029 10.217 5.88411 10.2723 5.88411C10.4106 5.88411 10.535 5.8288 10.6457 5.73201C10.7839 5.59374 10.8254 5.40016 10.7701 5.22041L10.2032 3.28461Z"
            fill="white" />
        <path
            d="M4.67233 11.5809L5.23924 9.65891C5.29455 9.47916 5.23924 9.28559 5.1148 9.14732C4.97652 9.00905 4.78294 8.96757 4.60319 9.02288L2.66739 9.57596L0.745399 9.00905C0.565646 8.95374 0.372079 9.00905 0.233807 9.13349C0.0955358 9.27177 0.0540545 9.46534 0.109363 9.6451L0.662449 11.5809L0.095536 13.5029C0.0402273 13.6826 0.0955359 13.8762 0.21998 14.0145C0.358252 14.1527 0.551819 14.1942 0.731572 14.1389L2.65355 13.572L4.57554 14.1389C4.61702 14.1527 4.67233 14.1527 4.72762 14.1527C4.86589 14.1527 4.99035 14.0974 5.10097 14.0006C5.23924 13.8624 5.28072 13.6688 5.22541 13.489L4.67233 11.5809Z"
            fill="white" />
        <path
            d="M25.412 18.4938L25.9789 16.5718C26.0342 16.392 25.9789 16.1985 25.8544 16.0602C25.7161 15.9219 25.5226 15.8804 25.3428 15.9358L23.4208 16.5027L21.4989 15.9358C21.3191 15.8804 21.1255 15.9358 20.9873 16.0602C20.849 16.1985 20.8075 16.392 20.8628 16.5718L21.4297 18.4938L20.8628 20.4158C20.8075 20.5955 20.8628 20.7891 20.9873 20.9274C21.1255 21.0656 21.3191 21.1071 21.4989 21.0518L23.4208 20.4849L25.3428 21.0518C25.3843 21.0656 25.4396 21.0656 25.4949 21.0656C25.6332 21.0656 25.7576 21.0103 25.8682 20.9135C26.0065 20.7753 26.048 20.5817 25.9927 20.4019L25.412 18.4938Z"
            fill="white" /></svg>
</button>
<div class="wpwand-floating">
    <div class="wpwand-floating-wraper">
        <div class="wpwand-floating-header">
            <h4> <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M6.52493 0.486812C7.82223 0.167055 9.17777 0.167055 10.4751 0.486812C11.7724 0.806568 12.9726 1.43652 13.9728 2.32254C14.9729 3.20855 15.7429 4.32414 16.2167 5.57344C16.6905 6.82275 16.8539 8.1684 16.6928 9.49479C16.5318 10.8212 16.0511 12.0886 15.2921 13.1882C14.5331 14.2879 13.5184 15.1867 12.3354 15.8077C11.1523 16.4286 9.83613 16.753 8.5 16.753C7.16387 16.753 5.84772 16.4286 4.66464 15.8077C3.48155 15.1867 2.46692 14.2879 1.70791 13.1882C0.948902 12.0886 0.468221 10.8212 0.307168 9.49479C0.146116 8.1684 0.309508 6.82275 0.783306 5.57344C1.2571 4.32414 2.02714 3.20855 3.02725 2.32254C4.02735 1.43652 5.22762 0.806568 6.52493 0.486812Z"
                        fill="white" />
                    <g clip-path="url(#clip0_6009_593)">
                        <path
                            d="M11.9628 6.92545L11.3374 7.55088L10.0781 6.29162L10.7036 5.66619C10.8799 5.4899 11.1065 5.40594 11.3332 5.40594C11.5599 5.40594 11.7865 5.4899 11.9628 5.66619C12.3112 6.01459 12.3112 6.57706 11.9628 6.92545Z"
                            fill="#5943CF" />
                        <path
                            d="M11.0434 7.84904L6.50589 12.3824C6.15749 12.7308 5.59502 12.7308 5.24663 12.3824C4.89823 12.034 4.89823 11.4715 5.24663 11.1231L9.78418 6.58978L11.0434 7.84904Z"
                            fill="#5943CF" />
                        <path
                            d="M7.95448 5.24712L8.12658 4.66366C8.14337 4.60909 8.12658 4.55033 8.0888 4.50835C8.05102 4.46638 7.98386 4.44959 7.9293 4.46638L7.34584 4.63848L6.76238 4.46638C6.70781 4.44959 6.64905 4.46638 6.60707 4.50416C6.5651 4.54613 6.55251 4.6049 6.5693 4.65946L6.7372 5.24712L6.5651 5.83058C6.54831 5.88514 6.5651 5.94391 6.60288 5.98588C6.64485 6.02786 6.70362 6.04045 6.75818 6.02366L7.34584 5.85576L7.9293 6.02786C7.94609 6.03206 7.95868 6.03625 7.97546 6.03625C8.01744 6.03625 8.05522 6.01946 8.0888 5.99008C8.13077 5.94811 8.14337 5.88934 8.12658 5.83477L7.95448 5.24712Z"
                            fill="#5943CF" />
                        <path
                            d="M6.27547 7.76564L6.44757 7.18218C6.46436 7.12761 6.44757 7.06885 6.40979 7.02688C6.36781 6.9849 6.30905 6.97231 6.25448 6.9891L5.66683 7.157L5.08337 6.9849C5.0288 6.96811 4.97004 6.9849 4.92806 7.02268C4.88609 7.06466 4.87349 7.12342 4.89028 7.17799L5.05818 7.76564L4.88609 8.3491C4.8693 8.40366 4.88609 8.46243 4.92386 8.5044C4.96584 8.54638 5.0246 8.55897 5.07917 8.54218L5.66263 8.37008L6.24609 8.54218C6.25868 8.54638 6.27547 8.54638 6.29225 8.54638C6.33423 8.54638 6.37201 8.52959 6.40559 8.50021C6.44757 8.45823 6.46016 8.39947 6.44337 8.3449L6.27547 7.76564Z"
                            fill="#5943CF" />
                        <path
                            d="M12.5714 9.86418L12.7435 9.28073C12.7603 9.22616 12.7435 9.16739 12.7057 9.12542C12.6638 9.08344 12.605 9.07085 12.5504 9.08764L11.967 9.25974L11.3835 9.08764C11.329 9.07085 11.2702 9.08764 11.2282 9.12542C11.1862 9.16739 11.1736 9.22616 11.1904 9.28073L11.3625 9.86418L11.1904 10.4476C11.1736 10.5022 11.1904 10.561 11.2282 10.6029C11.2702 10.6449 11.329 10.6575 11.3835 10.6407L11.967 10.4686L12.5504 10.6407C12.563 10.6449 12.5798 10.6449 12.5966 10.6449C12.6386 10.6449 12.6764 10.6281 12.7099 10.5988C12.7519 10.5568 12.7645 10.498 12.7477 10.4434L12.5714 9.86418Z"
                            fill="#5943CF" />
                    </g>
                    <defs>
                        <clipPath id="clip0_6009_593">
                            <rect width="8.81481" height="8.81481" fill="white"
                                transform="translate(4.40735 4.40741)" />
                        </clipPath>
                    </defs>
                </svg> WP Wand - Your Personal Content Creator</h4>
        </div>


        <?php if ( !WPWAND_OPENAI_KEY ): ?>
        <!-- wp wand api missing notice  -->

        <div class="wpwand-api-missing-notice-wrap">
            <div class="wpwand-api-missing-notice">
                <span><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.21895 5.78105C7.17755 4.73965 5.48911 4.73965 4.44772 5.78105L1.78105 8.44772C0.73965 9.48911 0.73965 11.1776 1.78105 12.219C2.82245 13.2603 4.51089 13.2603 5.55228 12.219L6.28666 11.4846M5.78105 8.21895C6.82245 9.26035 8.51089 9.26035 9.55228 8.21895L12.219 5.55228C13.2603 4.51089 13.2603 2.82245 12.219 1.78105C11.1776 0.73965 9.48911 0.73965 8.44772 1.78105L7.71464 2.51412"
                            stroke="#EE2626" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /></svg>
                    Your API is not connected. Connect now to generate awesome contents.</span>
            </div>

            <div class="wpwand-api-missing-form-wrap">
                <form action="" class="wpwand-api-missing-form">
                    <div class="wpwand-form-group">
                        <div class="wpwand-form-field">
                            <label for="wpwand-api-key">OpenAI API Key</label>
                            <input type="text" id="wpwand-api-key" name="wpwand-api-key"
                                placeholder="Paste API key here" required>
                            <a href="https://platform.openai.com/account/api-keys">Get your free OpenAI API key</a>
                        </div>
                    </div>

                    <div class="wpwand-form-submit">
                        <button class="wpwand-submit-button">Connect API</button>
                    </div>
                </form>
            </div>
        </div>

        <?php else: ?>



        <div class="wpwand-prompts-tabs">
            <button class="wpwand-tab-item " data-prompt-id="templates">All Templates</button>
            <!-- <button class="wpwand-tab-item" data-prompt-id="prompt-poem">Saved</button> -->
        </div>

        <div class="wpwand-prompt-from-wrap">
            <button class="wpwand-trigger wpwand-close-button"><svg width="12" height="12" viewBox="0 0 12 12"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.5 10.5L10.5 1.5M1.5 1.5L10.5 10.5" stroke="white" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" /></svg></button>



            <div class="wpwand-prompt-item" id="templates">
                <div class="wpwand-total-templates-count"><span>Total
                        <?php echo esc_html( count( wpwand_templates() ) ) ?> templates</span></div>
                <div class="wpwand-template-list">
                    <?php if ( is_array( wpwand_templates() ) ):
        foreach ( wpwand_templates() as $template ):
            $fields = explode( ', ', $template['fields'] );
            ?>
                    <div class="wpwand-tiemplate-item">
                        <h4>
                            <?php echo esc_html($template['title']) ?>
                            <?php if ( true == $template['is_pro'] ): ?>
                            <span class="wpwand-pro-tag">PRO</span>
                            <?php endif;?>
                        </h4>
                        <p><?php echo esc_html($template['description']) ?></p>

                        <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.5 0.75L14.75 6M14.75 6L9.5 11.25M14.75 6L1.25 6" stroke="#7C838A"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>

                    <div class="wpwand-prompt-form-wrap">
                        <span class="wpwand-back-button"><svg width="12" height="10" viewBox="0 0 12 10" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.83333 9.08332L0.75 4.99999M0.75 4.99999L4.83333 0.916656M0.75 4.99999L11.25 4.99999"
                                    stroke="#7C838A" stroke-linecap="round" stroke-linejoin="round" /></svg> Back to
                            all templates</span>

                        <div class="wpwand-template-details">
                            <h4><?php echo esc_html($template['title']) ?></h4>
                            <p><?php echo esc_html($template['description']) ?></p>
                        </div>
                        <form action="" class="wpwand-prompt-form">
                            <input type="hidden" id="wpwand-prompt" name="wpwand-prompt"
                                value="<?PHP echo esc_html($template['prompt']) ?>">

                            <?php if ( in_array( 'Topic', $fields ) ): ?>
                            <div class="wpwand-form-group">
                                <div class="wpwand-form-field">
                                    <label for="wpwand-topic">Topic</label>
                                    <input type="text" id="wpwand-topic" name="wpwand-topic"
                                        placeholder="Write in detail about your topic">
                                </div>
                            </div>
                            <?php endif;?>

                            <!-- Product Name -->
                            <?php if ( in_array( 'Name', $fields ) ): ?>
                            <div class="wpwand-form-group">
                                <div class="wpwand-form-field">
                                    <label for="wpwand-product-name">Product Name</label>
                                    <input type="text" id="wpwand-product-name" name="wpwand-product-name"
                                        placeholder="Write your product name">
                                </div>
                            </div>
                            <?php endif;?>

                            <!-- Product 1 -->
                            <?php if ( in_array( 'Product 1', $fields ) ): ?>
                            <div class="wpwand-form-group">
                                <div class="wpwand-form-field">
                                    <label for="wpwand-product-1">Product 1</label>
                                    <input type="text" id="wpwand-product-1" name="wpwand-product-1"
                                        placeholder="Product 1">
                                </div>
                            </div>
                            <?php endif;?>
                            <!-- Product 2 -->
                            <?php if ( in_array( 'Product 2', $fields ) ): ?>
                            <div class="wpwand-form-group">
                                <div class="wpwand-form-field">
                                    <label for="wpwand-product-2">Product 2</label>
                                    <input type="text" id="wpwand-product-2" name="wpwand-product-2"
                                        placeholder="Product 2">
                                </div>
                            </div>
                            <?php endif;?>
                            <!-- description -->
                            <?php if ( in_array( 'Description', $fields ) ): ?>
                            <div class="wpwand-form-group">
                                <div class="wpwand-form-field">
                                    <label for="wpwand-description">Description</label>
                                    <input type="text" id="wpwand-description" name="wpwand-description"
                                        placeholder="Write a meaningful description to generate better result.">
                                </div>
                            </div>
                            <?php endif;?>

                            <!-- description 1 -->
                            <?php if ( in_array( 'Product 1 Description', $fields ) ): ?>
                            <div class="wpwand-form-group">
                                <div class="wpwand-form-field">
                                    <label for="wpwand-description-1">Product 1 Description</label>
                                    <input type="text" id="wpwand-description-1" name="wpwand-description-1"
                                        placeholder="Write a meaningful description to generate better result.">
                                </div>
                            </div>
                            <?php endif;?>
                            <!-- description 2 -->
                            <?php if ( in_array( 'Product 2 Description', $fields ) ): ?>
                            <div class="wpwand-form-group">
                                <div class="wpwand-form-field">
                                    <label for="wpwand-description-2">Product 2 Description</label>
                                    <input type="text" id="wpwand-description-2" name="wpwand-description-2"
                                        placeholder="Write a meaningful description to generate better result.">
                                </div>
                            </div>
                            <?php endif;?>


                            <!-- Content -->
                            <?php if ( in_array( 'Content', $fields ) ): ?>
                            <div class="wpwand-form-group">
                                <div class="wpwand-form-field">
                                    <label for="wpwand-content">Content</label>
                                    <input name="wpwand-content" id="wpwand-content" placeholder="Write your content" />
                                </div>
                            </div>
                            <?php endif;?>


                            <!-- Content Text Area -->
                            <?php if ( in_array( 'Content Text Area', $fields ) ): ?>
                            <div class="wpwand-form-group">
                                <div class="wpwand-form-field">
                                    <label for="wpwand-content-textarea">Content</label>
                                    <textarea name="wpwand-content-textarea" id="wpwand-content-textarea" cols="30"
                                        rows="10" placeholder="Write your content"></textarea>
                                </div>
                            </div>
                            <?php endif;?>
                            <?php if ( in_array( 'Keywords', $fields ) ): ?>
                            <div class="wpwand-form-group">
                                <div class="wpwand-form-field">
                                    <label for="wpwand-keyword">Keyword to Include <span
                                            class="wpwand-optional">(Optional)</span></label>
                                    <input type="text" id="wpwand-keyword" name="wpwand-keyword"
                                        placeholder="Write keyword and separate using comma">
                                </div>
                            </div>

                            <?php endif;?>
                            <div class="wpwand-form-group wpwand-col-2">

                                <?php //if ( true == $template['fields']['result_number'] ): ?>
                                <div class="wpwand-form-field">
                                    <label for="wpwand-result-number">Number of Results</label>
                                    <input type="number" id="wpwand-result-number" name="wpwand-result-number"
                                        value="1">
                                </div>
                                <?php //endif;?>

                                <?php if ( in_array( 'Tone', $fields ) ): ?>
                                <div class="wpwand-form-field">
                                    <label for="wpwand-tone">Tone</label>
                                    <select name="wpwand-tone" id="wpwand-tone">
                                        <option value="friendly"> Friendly</option>
                                        <option value="helpful"> Helpful</option>
                                        <option value="informative"> Informative</option>
                                        <option value="aggressive"> Aggressive</option>
                                        <option value="professional"> Professional</option>
                                        <option value="witty"> Witty</option>
                                    </select>
                                </div>
                                <?php endif;?>
                            </div>


                            <?php if ( in_array( 'Word Count', $fields ) ): ?>
                            <div class="wpwand-form-group">
                                <div class="wpwand-form-field">
                                    <label for="wpwand-word-limit">Maximum Word Limit</label>
                                    <input type="number" id="wpwand-word-limit" name="wpwand-word-limit" value="100">
                                </div>
                            </div>
                            <?php endif;?>


                            <!-- Language option  -->
                            <div class="wpwand-form-group">
                                <div class="wpwand-form-field">
                                    <label for="wpwand-Language">Language</label>
                                    <select name="wpwand-Language" id="wpwand-Language">
                                        <?php
                                                 if(is_array(wpwand_language_array())){
                                                    $default_language = wpwand_get_option('wpwand_language', 'en');
                                                    foreach(wpwand_language_array() as $key => $value){
                                                        printf( '<option value="%s" %s >%s</option>', $key, selected( $default_language, $key ), $key );
                                                    }
                                                }
                                        ?>
                                    </select>
                                </div>
                            </div>


                            <div class="wpwand-form-submit">
                                <?php if ( $template['is_pro'] ): ?>
                                <a href="" class="wpwand-submit-pro"><svg width="14" height="16" viewBox="0 0 14 16"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7 10.25V11.75M2.5 14.75H11.5C12.3284 14.75 13 14.0784 13 13.25V8.75C13 7.92157 12.3284 7.25 11.5 7.25H2.5C1.67157 7.25 1 7.92157 1 8.75V13.25C1 14.0784 1.67157 14.75 2.5 14.75ZM10 7.25V4.25C10 2.59315 8.65685 1.25 7 1.25C5.34315 1.25 4 2.59315 4 4.25V7.25H10Z"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                    Get Pro to Use This Template</a>
                                <?php else: ?>
                                <button class="wpwand-submit-button">Generate Content</button>
                                <?php endif;?>
                            </div>
                        </form>

                        <div class="wpwand-result-box" style="display:none">
                            <h4>AI Generated Content</h4>
                            <div class="wpwand-content-wrap"></div>

                        </div>
                    </div>
                    <?php endforeach;endif;?>
                </div>

            </div>

        </div>
        <?php endif;?>

    </div>
</div>

<script>
    jQuery(document).ready(function ($) {
        // Use const and let instead of var
        const $wpwandPromptsTabs = $('.wpwand-prompts-tabs');
        const $promptItems = $('.prompt-item');

        $promptItems.hide();

        $wpwandPromptsTabs.on('click', '.wpwand-tab-item', function (e) {
            e.preventDefault();

            const $this = $(this);
            const promptID = $this.data('prompt-id');

            $('#' + promptID).show();
            $promptItems.not('#' + promptID).hide();
        });

        $('.wpwand-tiemplate-item').on('click', function (e) {
            e.preventDefault();

            $(this).next('.wpwand-prompt-form-wrap').addClass('active');
        });

        $('.wpwand-back-button').on('click', function (e) {
            e.preventDefault();

            $('.wpwand-prompt-form-wrap').removeClass('active');
        });

        $('.wpwand-prompt-form-wrap').on('submit', function (e) {
            e.preventDefault();

            const $this = $(this);
            const prompt = $this.find('#wpwand-prompt').val();
            const topic = $this.find('#wpwand-topic').val();
            const keyword = $this.find('#wpwand-keyword').val();
            const result_number = $this.find('#wpwand-result-number').val();
            const tone = $this.find('#wpwand-tone').val();
            const word_limit = $this.find('#wpwand-word-limit').val();
            const product_name = $this.find('#wpwand-product-name').val();
            const content = $this.find('#wpwand-content').val();
            const description = $this.find('#wpwand-description').val();
            const content_textarea = $this.find('#wpwand-content-textarea').val();
            const product_1 = $this.find('#wpwand-product-1').val();
            const product_2 = $this.find('#wpwand-product-2').val();
            const description_1 = $this.find('#wpwand-description-1').val();
            const description_2 = $this.find('#wpwand-description-2').val();
            const language = $this.find('#wpwand-Language').val();

            $this.find('.wpwand-result-box').show();
            $this.find('.wpwand-content-wrap').html(
                '<div class="wpwand-content skeleton"><div class="skeleton-left"><div class="line"></div><div class="line w50"></div><div class="line w75"></div></div></div>'
            );

            // Use $.post instead of $.ajax for simpler codew
            $.post({
                url: '<?php echo  esc_url( admin_url( 'admin-ajax.php' )); ?>',
                data: {
                    action: 'wpwand_request',
                    prompt,
                    topic,
                    keyword,
                    result_number,
                    tone,
                    word_limit,
                    description,
                    product_name,
                    content_textarea,
                    product_1,
                    product_2,
                    description_1,
                    description_2,
                    language
                },
                success: function (response) {
                    console.log(response);
                    $this.find('.wpwand-content-wrap').html(response);

                    // Use event delegation instead of attaching the click handler multiple times
                    $this.on('click', '.wpwand-copy-button', function (e) {
                        e.preventDefault();

                        const text = $(this).data('copy-text');
                        const $copyButton = $(this);

                        navigator.clipboard.writeText(text)
                            .then(function () {
                                $copyButton.text('copied');
                            })
                            .catch(function () {
                                alert('Unable to copy text to clipboard!');
                            });
                    });
                },
                error: function (xhr) {
                    // Handle AJAX errors
                    $this.find('.wpwand-content-wrap').html('Error: ' + xhr.statusText);
                }
            });
        });



        $('.wpwand-api-missing-form').on('submit', function (e) {
            e.preventDefault();

            const $this = $(this);
            const api_key = $this.find('#wpwand-api-key').val();

            $this.find('.wpwand-submit-button').html('Submitting...').css('background-color', 'gray')

            // Use $.post instead of $.ajax for simpler code
            $.post({
                url: '<?php echo esc_url(admin_url( 'admin-ajax.php' )); ?>',
                data: {
                    action: 'wpwand_api_set',
                    api_key

                },
                success: function (response) {

                    if (response == 'success') {

                        $this.find('.wpwand-submit-button').html('Success!!').css(
                            'background-color', '#77C155')
                        // reload current page
                        window.location.reload();
                    } else {
                        $this.find('.wpwand-submit-button').html('Connect again').css(
                            'background-color', '#77C155')
                        $this.find('.wpwand-form-submit').append(
                            '<span style="color:red">' + response.data + '</span>');
                    }

                }
            });
        });

        // Use arrow function instead of function declaration for simpler code
        $('.wpwand-trigger').on('click', () => {
            $('.wpwand-trigger').toggleClass('active');
            $('.wpwand-floating').toggleClass('active');
        });
    });
</script>
<?php printf( ob_get_clean());

}

add_action( 'admin_footer', 'wpwand_frontend_callback' );
add_action( 'wp_footer', 'wpwand_frontend_callback' );