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

        console.log(wpwand_glb.welecome_url);


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
}(jQuery))