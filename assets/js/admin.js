(function ($) {

    jQuery(document).ready(function ($) {
        $('.nav-tab-wrapper a').click(function (e) {
            e.preventDefault();
            var tab = $(this).attr('href');
            $('.nav-tab-wrapper a').removeClass('nav-tab-active');
            $(this).addClass('nav-tab-active');
            $('.tab-panel').hide();
            $(tab).show();


            if ('#advanced' == tab) {
                $('.wpwand-settings p.submit').hide();
            } else {
                $('.wpwand-settings p.submit').show();

            }
        });



        let wpwand_frequency_input = $(".wpwand_slider_input");

        wpwand_frequency_input.each(function () {
            let $this = $(this);
            $this.parent('.wpwand-slider-input-wrap').prepend('<div class="wpwand_slider_range regular-text"></div>');
            let wpwand_slider = $this.siblings('div.wpwand_slider_range');

            let min = parseFloat($this.attr("min"))
            let max = parseFloat($this.attr("max"))
            let step = parseFloat($this.attr("step"));

            let old_value = Number($this.val())


            wpwand_slider.slider({
                range: "max",
                min: min,
                max: max,
                step: step,
                value: old_value,
                slide: function (event, ui) {
                    $this.val(parseFloat(ui.value));
                    // console.log("value: " + ui.value);
                }
            });

            $this.on("input", function () {
                wpwand_slider.slider("value", parseFloat(this.value));
            });
        })




        $('.wpwand-api-missing-form').on('submit', function (e) {
            e.preventDefault();

            const $this = $(this);
            const api_key = $this.find('#wpwand-api-key').val();

            $this.find('.wpwand-submit-button').html('Submitting...').css('background-color', 'gray')

            // Use $.post instead of $.ajax for simpler code
            $.post({
                url: wpwand_glb.ajax_url,
                data: {
                    action: 'wpwand_api_set',
                    api_key

                },
                success: function (response) {

                    if (response == 'success') {

                        $this.find('.wpwand-submit-button').html('Success!!').css(
                            'background-color', '#77C155')
                        // reload current page
                        window.location = wpwand_glb.setting_url;
                    } else {
                        $this.find('.wpwand-submit-button').html('Connect again').css(
                            'background-color', '#77C155')
                        $this.find('.wpwand-error').html(
                            '<span style="color:red">' + response.data + '</span>');
                    }

                }
            });
        });




        wpwand_ajax();


    });

    $(window).on('elementor:init', function () {

        var wpwandRunning = false; // Variable to track if wpwand_ajax is running
        var wpwandTimeout = null; // Variable to store the timeout reference

        elementor.hooks.addAction('panel/open_editor/widget', function (panel, model, view, event) {
            // removePreviousHandlers(); // Remove previous event handlers

            $('.wpwand-trigger:not(.wpwand-close-button)').remove();
            runWpwandAjax();

            panel.on('childview:render:collection', function (event) {
                $('.wpwand-trigger:not(.wpwand-close-button)').remove();
                runWpwandAjax();
            });

            panel.on('set:page', function (event) {
                $('.wpwand-trigger:not(.wpwand-close-button)').remove();
                runWpwandAjax();
            });
        });

        function runWpwandAjax() {
            if (wpwandTimeout) {
                clearTimeout(wpwandTimeout); // Clear any previous timeout
            }

            wpwandTimeout = setTimeout(function () {
                // This code will run only after the specified delay (e.g., 500 milliseconds)
                wpwand_ajax();
                wpwandTimeout = null; // Reset the timeout reference
            }, 500); // Adjust the delay as needed
        }



    });


    jQuery(window).on('load', function () {
        $('#wpwand_model').change(function () {
            wpwand_model_card($(this).val());
        });

        // call the function on page load with the initial value of #wpwand_model
        wpwand_model_card($('#wpwand_model').val());
    })

    function wpwand_model_card(selectedValue) {
        switch (selectedValue) {
            case 'text-davinci-003':
                $('#wpwand-text-davinci-003').show();
                $('#wpwand-text-davinci-003').siblings().hide()
                break;
            case 'gpt-3.5-turbo':
                $('#wpwand-gpt-3-5').show();
                $('#wpwand-gpt-3-5').siblings().hide()
                break;
            case 'text-curie-001':
                $('#wpwand-text-curie-001').show();
                $('#wpwand-text-curie-001').siblings().hide()
                break;
            case 'text-babbage-001':
                $('#wpwand-text-babbage-001').show();
                $('#wpwand-text-babbage-001').siblings().hide()
                break;
            case 'text-text-ada-001':
                $('#wpwand-text-text-ada-001').show();
                $('#wpwand-text-text-ada-001').siblings().hide()
                break;

                // add more cases as needed
            default:
                // handle other cases
                $('#wpwand-gpt-3-5').show();
                $('#wpwand-gpt-3-5').siblings().hide()
                break;
        }
    }



    function wpwand_ajax() {
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

            console.log('ok');
            $(this).next('.wpwand-prompt-form-wrap').addClass('active');
        });

        $('.wpwand-back-button').on('click', function (e) {
            e.preventDefault();

            $('.wpwand-prompt-form-wrap').removeClass('active');
        });

        $('.wpwand-prompt-form-wrap').on('submit', function (e) {
            e.preventDefault();
            // console.log('ok');


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
            const subject = $this.find('#wpwand-subject').val();
            const comment = $this.find('#wpwand-comment').val();
            const question = $this.find('#wpwand-question').val();
            const is_elementor = $this.closest('.wpwand-floating').hasClass('in-elementor');
            const is_gutenberg = $this.closest('body').hasClass('block-editor-page');
            const elementor_control_id = $this.closest('.wpwand-floating').data('elementor-id');
            const elementor_control_type = $this.closest('.wpwand-floating').data('type');

            // console.log(is_elementor);
            $this.find('.wpwand-result-box').show();
            $this.find('.wpwand-content-wrap').html(
                '<div class="wpwand-content skeleton"><div class="skeleton-left"><div class="line"></div><div class="line w50"></div><div class="line w75"></div></div></div>'
            );

            // Use $.post instead of $.ajax for simpler codew
            $.post({
                url: wpwand_glb.ajax_url,
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
                    language,
                    subject,
                    comment,
                    question,
                    is_elementor,
                    is_gutenberg
                },
                success: function (response) {

                    $this.find('.wpwand-content-wrap').html(response);

                    var markdownContent = $this.find('.wpwand-ai-response');
                    var converter = new showdown.Converter();
                    var htmlContent = converter.makeHtml(markdownContent.text());
                    markdownContent.html(htmlContent)
                    // Use event delegation instead of attaching the click handler multiple times
                    $this.on('click', '.wpwand-copy-button', function (e) {
                        e.preventDefault();

                        const text = $(this).siblings('.wpwand-ai-response').html();
                        const $copyButton = $(this);

                        navigator.clipboard.writeText(text)
                            .then(function () {
                                $copyButton.text('copied');
                            })
                            .catch(function () {
                                alert('Unable to copy text to clipboard!');
                            });
                    });

                    if (is_elementor) {
                        $this.on('click', '.wpwand-insert-to-widget', function () {
                            var textToAdd = $(this).siblings('.wpwand-ai-response').html(); // Replace with the text you want to add

                            if ('wysiwyg' == elementor_control_type) {
                                var editorId = elementor_control_id; // Replace with the ID of your TinyMCE editor

                                var editor = tinymce.get(elementor_control_id);
                                console.log(editor)
                                if (editor) {
                                    editor.setContent(textToAdd);
                                    editor.fire('change');

                                }
                            } else {
                                $('#' + elementor_control_id).val(textToAdd).trigger('input')
                            }
                            $(this).text('Inserted')
                        })
                    }

                    if (is_gutenberg) {
                        $this.on('click', '.wpwand-insert-to-gutenberg', function () {
                            var textToAdd = $(this).siblings('.wpwand-ai-response').html(); // Replace with the text you want to add

                            let t = wp.blocks.createBlock("core/paragraph", {
                                content: textToAdd
                            });
                            wp.data.dispatch("core/block-editor").insertBlock(t)

                            $(this).text('Inserted')
                        })
                    }

                },
                error: function (xhr) {
                    // Handle AJAX errors
                    $this.find('.wpwand-content-wrap').html('Error: ' + xhr.statusText);
                }
            });
        });




        // Use arrow function instead of function declaration for simpler code
        $('body').on('click', '.wpwand-trigger', (event) => {
            //  event.stopPropagation();
            $('.wpwand-trigger').toggleClass('active');
            $('.wpwand-floating').toggleClass('active');


        });


        $('#wpwand-search-input').on('input', function () {
            var searchTerm = $(this).val().toLowerCase();
            $('.wpwand-tiemplate-item').each(function () {
                var listItemText = $(this).find('h4').text().toLowerCase();
                if (listItemText.indexOf(searchTerm) === -1) {
                    $(this).hide();
                } else {
                    $(this).show();
                }
            });
        });


    }
}(jQuery))