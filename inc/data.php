<?php

if ( !defined( 'ABSPATH' ) ) {
    exit( 'You are not allowed' );
}

function wpwand_templates() {
    $all_prompts = [
        [
            'title'       => 'Headline Generation',
            'is_pro'      => false,
            'fields'      => 'Topic, Tone',
            'description' => 'Create attention-grabbing headlines for website or blog post with a specific topic.',
            'prompt'      => "Write {tone} Headline for '{topic}'.",
        ],
        [
            'title'       => 'Paragraph Related to Headline',
            'is_pro'      => false,
            'fields'      => 'Topic, Tone, Word Count',
            'description' => 'Quickly generate compelling content for your headlines.',
            'prompt'      => "Write {tone} paragraph based on '{topic}'. Keep it short and the word limit should not exceed {word count} words.",
        ],

        [
            'title'       => 'Full Blog Post',
            'is_pro'      => false,
            'fields'      => 'Topic, Keywords, Tone, Word Count',
            'description' => 'Generate complete blog posts that engage your readers.',
            'prompt'      => "I need {tone} blog post on '{topic}'. Use the best practices to make it SEO friendly. Keywords to include in the first paragraph and body: {keywords}. The word limit should not exceed {word count} words.",
        ],

        [
            'title'       => 'Blog Title',
            'is_pro'      => false,
            'fields'      => 'Topic, Tone',
            'description' => 'Generate titles that grab attention and increase clicks.',
            'prompt'      => "Write {tone} Blog title for {topic}.",
        ],

        [
            'title'       => 'Blog Outline',
            'is_pro'      => false,
            'fields'      => 'Topic, Tone',
            'description' => 'Create detailed outlines that make writing blog posts a breeze.',
            'prompt'      => "Write {tone} blog outline for '{topic}'.",
        ],

        [
            'title'       => 'Blog Intro',
            'is_pro'      => false,
            'fields'      => 'Topic, Tone, Keywords',
            'description' => 'Quickly write captivating introductions for your blog posts.',
            'prompt'      => "Write {tone} blog intro for '{topic}'. Keywords to include: {keywords}.",
        ],

        [
            'title'       => 'Blog Paragraph',
            'is_pro'      => false,
            'fields'      => 'Topic, Tone, Keywords',
            'description' => 'Generate high-quality paragraphs for your blog posts.',
            'prompt'      => "Write {tone} blog intro for '{topic}'. Keywords to include: {keywords}.",
        ],

        [
            'title'       => 'Job Post',
            'is_pro'      => false,
            'fields'      => 'Topic, Description, Tone',
            'description' => 'Create job descriptions that attract top talent.',
            'prompt'      => "Write {tone} Job post for '{topic}'. {description}. Include Responsibilities, Requirements, Benefits inside this job post.",
        ],

        [
            'title'       => 'Product Description',
            'is_pro'      => false,
            'fields'      => 'Name, Description, Tone',
            'description' => 'Generate compelling product descriptions for your online store.',
            'prompt'      => "Write {tone} product description for '{name}'. {description}. Include features, benefits inside the description with paragraph & bullet points.",
        ],

        [
            'title'       => 'Meta Title',
            'is_pro'      => false,
            'fields'      => 'Name, Description',
            'description' => 'Optimize your content for search engines with effective meta titles.',
            'prompt'      => "Write SEO friendly meta title for '{description}'. The title should be concise, accurate, and attention-grabbing, while also incorporating relevant keywords to improve search engine optimization. The website\'s brand name is '{name}'.",
        ],

        [
            'title'       => 'Meta Description',
            'is_pro'      => false,
            'fields'      => 'Name, Description',
            'description' => 'Create meta descriptions that increase click-through rates.',
            'prompt'      => "Write SEO friendly meta description for '{description}'. The description should be concise, accurate, and attention-grabbing, while also incorporating relevant keywords to improve search engine optimization. The website\'s brand name is '{name}'.",
        ],

        [
            'title'       => 'Meta Keywords',
            'is_pro'      => false,
            'fields'      => 'Name, Description',
            'description' => 'Generate relevant keywords to improve SEO.',
            'prompt'      => "Write SEO friendly meta keywords for '{description}'. The keywords should be concise, accurate, and attention-grabbing to improve search engine optimization results. The website\'s brand name is '{name}'.",
        ],

        [
            'title'       => 'Sales Page Headlines',
            'is_pro'      => false,
            'fields'      => 'Description, Tone',
            'description' => 'Create effective headlines for your sales pages.',
            'prompt'      => "Write {tone} Sales Page Headline for '{description}'. The headline should be very persuasive and engaging so that readers feel urgency to take action or scroll the page.",
        ],
        [
            'title'       => 'Sentence Expander',
            'is_pro'      => false,
            'fields'      => 'Content, Tone, Word Count',
            'description' => 'Expand short sentences into detailed paragraphs.',
            'prompt'      => "Expand this content with more details: '{content}'. Generate with {tone} tone. Use better grammar and human friendly text so that it's easy to read and understand. The word limit should not exceed {word count} words.",
        ],
        [
            'title'       => 'Button Call to Action Text',
            'is_pro'      => false,
            'fields'      => 'Description',
            'description' => 'Generate effective call-to-action text for your buttons.',
            'prompt'      => "Write Call to action button text for '{description}'. The CTA should be very persuasive and engaging so that readers feel urgency to take action immediately. Keep the text short with max 4/5 words.",
        ],

    ];

    $new_prompts = apply_filters( 'wpwand_all_prompts', $all_prompts );

    return array_merge( $all_prompts, $new_prompts );
}

function randomize_array( $array ) {
    shuffle( $array ); // shuffle the outer array

    foreach ( $array as $inner_array ) {
        shuffle( $inner_array ); // shuffle each inner array
    }

    return $array;
}

function wpwand_pro_locked_prompt() {
    $new_prompts = [
        [
            'title'       => 'Review Blog Post',
            'is_pro'      => true,
            'fields'      => 'Name, Description, Keywords, Tone, Word Count',
            'description' => 'Create informative and engaging reviews of products or services.',
            'prompt'      => "",

        ],
        [
            'title'       => 'Comparison Blog Post Between 2 Products',
            'is_pro'      => true,
            'fields'      => 'Compare two products and create an informative blog post.',
            'description' => 'Generate a complete blog post based on a given topic or keywords',
            'prompt'      => "",

        ], [
            'title'       => 'Meta Title',
            'is_pro'      => true,
            'fields'      => 'Name, Description, Tone',
            'description' => 'Optimize your content for search engines with effective meta titles.',
            'prompt'      => "",

        ], [
            'title'       => 'Amazon Product Review',
            'is_pro'      => true,
            'fields'      => 'Name, Description',
            'description' => 'Create engaging reviews for Amazon products.',
            'prompt'      => "",

        ],

        // Newly addded prompts
        [
            'title'       => 'Email Subject Line',
            'is_pro'      => true,
            'fields'      => 'Topic, Tone',
            'description' => 'Create subject lines that increase email open rates.',
            'prompt'      => '',
        ],
        [
            'title'       => 'Email Content',
            'is_pro'      => true,
            'fields'      => 'Subject, Description, Tone',
            'description' => 'Generate compelling email content that drives engagement.',
            'prompt'      => '',
        ],
        [
            'title'       => 'FAQs Writer',
            'is_pro'      => true,
            'fields'      => 'Topic, Tone',
            'description' => 'Quickly create informative FAQs for your website or product.',
            'prompt'      => '',
        ],
        [
            'title'       => 'Grammar Correction',
            'is_pro'      => true,
            'fields'      => 'Content, Tone',
            'description' => 'Ensure your content is error-free with Grammar Correction.',
            'prompt'      => '',
        ],
        [
            'title'       => 'Features to Benefits',
            'is_pro'      => true,
            'fields'      => 'Description',
            'description' => 'Highlight the benefits of your products or services.',
            'prompt'      => '',
        ],
        [
            'title'       => 'HSO Copywriting Formula',
            'is_pro'      => true,
            'fields'      => 'Topic, Tone',
            'description' => 'Use the Headline, Story, Offer formula to create effective copy',
            'prompt'      => '',
        ],
        [
            'title'       => 'AIDA Copywriting Formula',
            'is_pro'      => true,
            'fields'      => 'Topic, Tone',
            'description' => 'Use the Attention, Interest, Desire, Action formula to write persuasive copy.',
            'prompt'      => '',
        ],
        [
            'title'       => 'PAS Copywriting Formula',
            'is_pro'      => true,
            'fields'      => 'Topic, Tone',
            'description' => 'Use the Problem, Agitate, Solve formula to write compelling copy.',
            'prompt'      => '',
        ],
        [
            'title'       => 'Offer Ideas',
            'is_pro'      => true,
            'fields'      => 'Topic',
            'description' => 'Generate new ideas for offers and promotions.',
            'prompt'      => '',
        ],
        [
            'title'       => 'Press Release',
            'is_pro'      => true,
            'fields'      => 'Topic, Tone',
            'description' => 'Write effective press releases that get your message out.',
            'prompt'      => '',

        ],
        [
            'title'       => 'Social Media Post Ideas',
            'is_pro'      => true,
            'fields'      => 'Topic',
            'description' => 'Generate ideas for engaging social media posts.',
            'prompt'      => '',
        ],
        [
            'title'       => 'Website Tagline',
            'is_pro'      => true,
            'fields'      => 'Topic',
            'description' => 'Create memorable taglines for your website.',
            'prompt'      => '',
        ],
        [
            'title'       => 'Website About Us',
            'is_pro'      => true,
            'fields'      => 'Topic',
            'description' => 'Quickly create compelling About Us pages.',
            'prompt'      => '',
        ],
        [
            'title'       => 'Quora Answers',
            'is_pro'      => true,
            'fields'      => 'Question',
            'description' => 'Generate informative answers to common questions on Quora.',
            'prompt'      => '',
        ],
        [
            'title'       => 'Comment Reply',
            'is_pro'      => true,
            'fields'      => 'Comment, Tone',
            'description' => 'Quickly respond to comments on your blog or social media.',
            'prompt'      => '',
        ],
        [
            'title'       => 'Feature List',
            'is_pro'      => true,
            'fields'      => 'Topic',
            'description' => 'Generate comprehensive lists of product or service features.',
            'prompt'      => '',
        ],
        [
            'title'       => 'Course Name',
            'is_pro'      => true,
            'fields'      => 'Topic',
            'description' => 'Generate catchy names for your online courses.',
            'prompt'      => '',
        ],
        [
            'title'       => 'Course Description',
            'is_pro'      => true,
            'fields'      => 'Name, Description, Tone',
            'description' => 'Create compelling descriptions for your online courses.',
            'prompt'      => '',
        ],
        [
            'title'       => 'Feature Details',
            'is_pro'      => true,
            'fields'      => 'Topic, Tone',
            'description' => 'Quickly describe the features of your products or services.',
            'prompt'      => '',
        ],
        [
            'title'       => 'Keyword Generator',
            'is_pro'      => true,
            'fields'      => 'Topic',
            'description' => 'Generate relevant keywords to improve SEO.',
            'prompt'      => '',
        ],
        [
            'title'       => 'Social Media Post',
            'is_pro'      => true,
            'fields'      => 'Topic',
            'description' => 'Generate social media posts',
            'prompt'      => '',
        ],
        [
            'title'       => 'Content Rewriter',
            'is_pro'      => true,
            'fields'      => 'Content Text Area',
            'description' => 'Quickly rewrite existing content to improve readability and SEO.',
            'prompt'      => "",
        ],

        [
            'title'       => 'Magic Headlines ',
            'is_pro'      => true,
            'fields'      => 'Topic',
            'description' => 'Generate hundreds of headline ideas in seconds.',
            'prompt'      => "",
        ],
    ];

    return $new_prompts;
}

add_filter( 'wpwand_all_prompts', 'wpwand_pro_locked_prompt' );

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