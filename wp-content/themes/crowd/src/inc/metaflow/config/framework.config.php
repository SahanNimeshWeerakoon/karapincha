<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'MetaFlow',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'metaflow',
  'ajax_save'       => true,
  'show_reset_all'  => true,
  'framework_title' => 'MetaFlow <small>by Amplifyn</small>',
  'menu_parent'     => '',
  'menu_capability' => 'manage_options',
  'menu_icon'       => THEME_ICONS.'/amplifyn-logo.svg',
  'menu_position'   => null,
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

/*================================
=            Overview            =
================================*/

// $options[]      = array(
//   'name'        => 'overwiew',
//   'title'       => 'Overview',
//   'icon'        => 'fa fa-star',

//   // begin: fields
//   'fields'      => array(
//       array(
//           'type'    => 'content',
//           'content' => $html,
//         ),
//   ), // end: fields
// );

/*=====  End of Overview  ======*/


/*========================================
=            General settings            =
========================================*/

$options[]   = array(
  'name'     => 'general_section',
  'title'    => 'Website',
  // 'icon'     => 'fa fa-bars',
  'sections' => array(
    // sub section 1
    array(
      'name'     => 'general',
      'title'    => 'General',
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        array(
          'type'    => 'heading',
          'content' => 'Website General Settings',
        ),

        array(
          'id'          => 'logo',
          'type'        => 'upload',
          'title'       => 'Logo',
          'settings'       => array(
            'button_title' => 'Upload Logo',
            'frame_title'  => 'Choose a image',
            'insert_title' => 'Use this image',
          ),
          'after' => '<p><i class="fa fa-compress"></i> Image size (145x50) | <i class="fa fa-file-image-o"></i> Type (SVG or PNG)</p>'
        ),

        array(
          'id'          => 'favicon',
          'type'        => 'upload',
          'title'       => 'Favicon',
          'settings'       => array(
            'button_title' => 'Upload a Favicon',
            'frame_title'  => 'Choose an icon',
            'insert_title' => 'Use this icon',
          ),
          'after' => '<p><i class="fa fa-compress"></i> Image size (16x16) | <i class="fa fa-file-image-o"></i> Type (ICO or PNG)</p>'
        ),

        // array(
        //   'id'    => 'website_title',
        //   'type'  => 'text',
        //   'title' => 'Website Title',
        // ),

        // array(
        //   'id'    => 'website_description',
        //   'type'  => 'textarea',
        //   'title' => 'Website Description',
        // ),

        // array(
        //   'id'    => 'website_keywords',
        //   'type'  => 'text',
        //   'title' => 'SEO Keywords',
        // ),

        // array(
        //   'id'         => 'https_setting',
        //   'type'       => 'switcher',
        //   'title'      => 'HTTPS',
        //   // 'label'      => 'You you want to it ?',
        // ),

      )
    ),
    // sub section 2
    array(
      'name'     => 'social_media',
      'title'    => 'Social Media',
      'icon'     => 'fa fa-minus',
      'fields'   => array(
        array(
          'type'    => 'heading',
          'content' => 'Social Media Links',
        ),
        array(
          'id'              => 'social_menu',
          'type'            => 'group',
          'title'           => false,
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Field',
          'fields'          => array(

            array(
              'id'          => 'icon',
              'type'        => 'icon',
              'title'       => 'Link Icon',
            ),

            array(
              'id'          => 'link',
              'type'        => 'text',
              'title'       => 'Link URL',
            ),

          ),
          'default'                     => array(
            array(
              'icon'     => 'fa fa-facebook-official',
              'link'     => '',
            ),
            array(
              'icon'     => 'fa fa-linkedin',
              'link'     => '',
            ),
            array(
              'icon'     => 'fa fa-twitter',
              'link'     => '',
            ),
            array(
              'icon'     => 'fa fa-medium',
              'link'     => '',
            ),
          )
        ),
      )
    ),
  ),
);

/*=====  End of General settings  ======*/


/*========================================
=            Content Sections            =
========================================*/

$options[]   = array(
  'name'     => 'content_sections',
  'title'    => 'Content Sections',
  // 'icon'     => 'fa fa-home',
  'sections' => array(

    // Banner general content
    array(
      'name'     => 'homepage_banner',
      'title'    => 'Main Banner',
      'fields'   => array(

        array(
          'type'    => 'heading',
          'content' => 'Main banner',
        ),

        array(
          'type'    => 'subheading',
          'content' => 'Title',
        ),

        // Banner Main text
        array(
          'id'      => 'homepage_banner_text',
          'type'    => 'text',
          'title'   => 'Banner Title',
          'desc'    => 'Main banner text',
          'default' => 'We help promising startups become investor ready and connect them with strategic investors.',
        ),

        array(
          'id'            => 'homepage_banner_img',
          'type'          => 'upload',
          'title'         => 'Banner Image',
          'default'       => THEME_IMAGES.'/header-banner.jpg',
          'settings'      => array(
           // 'upload_type'  => 'png, svg',
           'button_title' => 'Select a Banner',
           'frame_title'  => 'Select a Banner',
           'insert_title' => 'Use this image',
          ),
          'after' => '<p><i class="fa fa-compress"></i> Image size (1920x720) | <i class="fa fa-file-image-o"></i> Type (JPG)</p>'
        ),

        array(
          'type'    => 'subheading',
          'content' => 'Call to actions',
        ),

        // Call to actions
        array(
          'id'              => 'homepage_banner_cta_buttons',
          'type'            => 'group',
          'title'           => 'CTA Buttons',
          'button_title'    => 'Add New Button',
          'accordion_title' => 'Add New Button',
          'desc'            => 'Call to action buttons',
          'fields'          => array(

            array(
              'id'          => 'label',
              'type'        => 'text',
              'title'       => 'Label',
            ),

            array(
              'id'          => 'link',
              'type'        => 'text',
              'title'       => 'Link',
            ),
          ),

          'default'                     => array(
            array(
              'label'     => 'Raise',
              'link'     => '',
            ),
            array(
              'label'     => 'Invest',
              'link'     => '',
            )
          )
        ),

        array(
          'type'    => 'subheading',
          'content' => 'Counters',
        ),

        // Counters
        array(
          'id'      => 'homepage_banner_counter_supported',
          'type'    => 'number',
          'title'   => 'Startups Supported',
          'default' => '28',
        ),

        array(
          'id'      => 'homepage_banner_counter_raised',
          'type'    => 'text',
          'title'   => 'Funds Raised',
          'default' => '73000000',
        ),
      )
    ),


    // About us
    array(
      'name'     => 'about_us',
      'title'    => 'About Us',
      'fields'   => array(

        array(
          'type'    => 'heading',
          'content' => 'About Us',
        ),

        array(
          'type'    => 'subheading',
          'content' => 'Main Description',
        ),

        array(
          'id'       => 'about_us_description',
          'type'     => 'wysiwyg',
          'title'    => false,
          'settings' => array(
            'textarea_rows' => 5,
            'tinymce'       => true,
            'media_buttons' => false,
          ),
          'default' => '<p>The startup movement in Sri Lanka came to life with the end of the civil war in 2009. Since then, the country has been experiencing an entrepreneurial renaissance. Sri Lanka is currently home to 300-500 active startups and has the highest growth index in the region according to GSER 2017.</p>',
        ),

        array(
          'type'    => 'subheading',
          'content' => 'Content blocks',
        ),

        // Widgets
        array(
          'id'              => 'about_us_content_blocks',
          'type'            => 'group',
          'title'           => false,
          'button_title'    => 'Add New Block',
          'accordion_title' => 'Add New Block',
          'limit'           => '3',
          // 'desc'            => 'Call to action buttons',
          'fields'          => array(

            array(
              'id'          => 'title',
              'type'        => 'text',
              'title'       => 'Title',
            ),

            array(
              'id'          => 'description',
              'type'        => 'textarea',
              'title'       => 'Description',
            ),
          ),

          'default' => array(
            array(
              'title'       => 'Why we are doing this',
              'description'       => '<p>We are a consortium of experienced founders, investors, corporate professionals and startup evangelists. Collectively, we have supported more than 100 early- stage startups to date. We felt the need for a better mechanism that could identify and curate startups in the country. Furthermore, we saw the need for a platform that wasn\'t defined by an industry or geography.</p>',
            ),
            array(
              'title'       => 'Why we focus on early-stage tech startups',
              'description'       => '<p>On average, we meet 20-30 founders a month. All whom have amazing experiences and ideas! We are drawn to the excitement and chaos that surrounds early-stage startups. This also helps us to feed potential startups to accelerators both local and global.</p>',
            )
          )
        ),
      )
    ),

    // Our Team
    array(
      'name'     => 'our_team',
      'title'    => 'Our Team',
      'fields'   => array(

        array(
          'type'    => 'heading',
          'content' => 'Our Team',
        ),

        array(
          'type'    => 'subheading',
          'content' => 'Section Title & Description',
        ),

        array(
          'id'      => 'our_team_title',
          'type'    => 'text',
          'title'   => 'Title',
          'default' => 'Our Team',
        ),

        array(
          'id'      => 'our_team_subtitle',
          'type'    => 'text',
          'title'   => 'Subtitle',
          'default' => 'RESILIENT . INTEGRITY . COMMITMENT . HONEST',
        ),

        array(
          'id'       => 'our_team_description',
          'type'     => 'wysiwyg',
          'title'    => 'Description',
          'settings' => array(
            'textarea_rows' => 5,
            'tinymce'       => true,
            'media_buttons' => false,
          ),
          'default' => '<p>The hardest part of starting a startup is building something people want to buy. The second hardest part is raising money. These are some of the most promising startups in Sri Lanka right now!</p>',
        ),

        array(
          'type'    => 'subheading',
          'content' => 'Team Members',
        ),

        // Widgets
        array(
          'id'              => 'our_team_members',
          'type'            => 'group',
          'title'           => false,
          'button_title'    => 'Add New Member',
          'accordion_title' => 'Add New Member',
          'limit'           => '4',
          // 'desc'            => 'Call to action buttons',
          'fields'          => array(

            array(
              'id'          => 'name',
              'type'        => 'text',
              'title'       => 'Name',
            ),

            array(
              'id'          => 'title',
              'type'        => 'text',
              'title'       => 'Title',
            ),

            array(
              'id'            => 'image',
              'type'          => 'upload',
              'title'         => 'Image',
              // 'default'       => 'image_select.png',
              'settings'      => array(
               // 'upload_type'  => 'png, svg',
               'button_title' => 'Upload',
               'frame_title'  => 'Select an image',
               'insert_title' => 'Use this image',
              ),
              'after' => '<p><i class="fa fa-compress"></i> Image size (200x200) | <i class="fa fa-file-image-o"></i> Type (JPG or PNG)</p>'
            ),

            array(
              'id'          => 'description',
              'type'        => 'textarea',
              'title'       => 'Description',
              'attributes'    => array(
                'rows'        => 5,
              ),
            ),

            array(
              'id'         => 'network',
              'type'       => 'select',
              'title'      => 'Network',
              'options'    => array(
                'linkedin'      => 'LinkedIn',
                'facebook' => 'Facebook',
                'twitter'     => 'Twitter',
                'other'  => 'Website'
              )
            ),
            array(
              'id'    => 'profile_link',
              'type'  => 'text',
              'title' => 'Profile Link',
            ),
          ),

          'default' => array(
            array(
              'name'       => 'York Street Partners',
              'title'       => 'Director',
              'image'        => THEME_IMAGES.'/ysp3-200x200.png',
              'description' => 'York Street Partners is a boutique financial advisory and investment-banking firm based in Colombo, Sri Lanka. With over 50 years of international experience between the founding partners, YSP strives to provide creative and transformative solutions to clients’ needs.',
            ),
            array(
              'name'       => 'Jeevan Gnanam',
              'title'       => 'Director',
              'image'        => THEME_IMAGES.'/jeevan-gnanam-200x200.png',
              'description' => 'Jeevan is the visionary behind Sri Lanka’s first operational IT park – Orion City, which houses some of the leading global IT firms. Today the park houses 3,500 employees and since its inception in 2008, Orion City has been growing at a steady pace with a goal to reach 3,000,000 sq ft by 2020.',
            ),
            array(
              'name'       => 'Nathan Sivaganathan',
              'title'       => 'Director',
              'image'        => THEME_IMAGES.'/nathan-sivaganathan-200x200.png',
              'description' => 'Nathan is the Chief Growth Office of MAS Holdings (Sri Lanka’s largest commercial organization, with revenues of $1.5 billion. MAS are the largest supplier of apparel to Victoria’s Secret, Nike and Lululemon, and supplies many other global brands.)',
            ),
            array(
              'name'       => 'Chalinda Abeykoon',
              'title'       => 'Director',
              'image'        => THEME_IMAGES.'/chalinda-abeykoon-200x200.png',
              'description' => 'Chalinda is an experienced startup evangelist and an incubator strategist who has managed more than 50 early stage startups to date. He acted as one of the key executioners in launching Sri Lanka’s first government-funded incubator and the country’s first industry-focused accelerator.',
            ),
          ),
        ),
      )
    ),

    // Our Mantra
    array(
      'name'     => 'our_mantra',
      'title'    => 'Our Mantra',
      'fields'   => array(

        array(
          'type'    => 'heading',
          'content' => 'Our Mantra',
        ),

        array(
          'type'    => 'subheading',
          'content' => 'Section Title & Description',
        ),

        array(
          'id'      => 'our_mantra_title',
          'type'    => 'text',
          'title'   => 'Title',
          'default' => 'Our Mantra',
        ),

        array(
          'id'      => 'our_mantra_subtitle',
          'type'    => 'text',
          'title'   => 'Subtitle',
          'default' => 'FUEL THE FUTURE',
        ),

        array(
          'id'       => 'our_mantra_description',
          'type'     => 'wysiwyg',
          'title'    => 'Description',
          'settings' => array(
            'textarea_rows' => 5,
            'tinymce'       => true,
            'media_buttons' => false,
          ),
          'default' => '<p>We believe in the passion and persistence of our entrepreneurial generation. Our aim is to reduce the risks and increase the likelihood of startup success. We intend to make fundraising more accessible, strategic and less painful.</p>

          <p>We work with tech startups that has gone through idea validation.</p>',
        ),

        array(
          'type'    => 'subheading',
          'content' => 'Widgets',
        ),

        // Widgets
        array(
          'id'              => 'our_mantra_widgets',
          'type'            => 'group',
          'title'           => 'Block',
          'button_title'    => 'Add New Block',
          'accordion_title' => 'Add New Block',
          'limit'           => '3',
          // 'desc'            => 'Call to action buttons',
          'fields'          => array(

            array(
              'id'          => 'title',
              'type'        => 'text',
              'title'       => 'Title',
            ),

            array(
              'id'            => 'icon',
              'type'          => 'upload',
              'title'         => 'Icon',
              // 'default'       => 'image_select.png',
              'settings'      => array(
               // 'upload_type'  => 'png, svg',
               'button_title' => 'Upload',
               'frame_title'  => 'Select an icon',
               'insert_title' => 'Use this icon',
              ),
              'after' => '<p><i class="fa fa-compress"></i> Image size (64x64) | <i class="fa fa-file-image-o"></i> Type (SVG or PNG</p>'
            ),

            array(
              'id'          => 'description',
              'type'        => 'textarea',
              'title'       => 'Description',
              'attributes'    => array(
                'rows'        => 5,
              ),
            ),
          ),

          'default' => array(
            array(
              'title'       => 'Prototype',
              'icon'        => THEME_ICONS.'/prototype-white.svg',
              'description' => 'We believe in the passion and persistence of our entrepreneurial generation. Our aim is to reduce the risks and increase the likelihood.',
            ),
            array(
              'title'       => 'Traction',
              'icon'        => THEME_ICONS.'/prototype-white.svg',
              'description' => 'We believe in the passion and persistence of our entrepreneurial generation. Our aim is to reduce the risks and increase the likelihood.',
            ),
            array(
              'title'       => 'Growth',
              'icon'        => THEME_ICONS.'/prototype-white.svg',
              'description'  => 'We believe in the passion and persistence of our entrepreneurial generation. Our aim is to reduce the risks and increase the likelihood.',
            )
          )
        ),
      )
    ),

    // Our Startups
    array(
      'name'     => 'our_startups',
      'title'    => 'Our Startups',
      'fields'   => array(

        array(
          'type'    => 'heading',
          'content' => 'Our Startups',
        ),

        array(
          'type'    => 'subheading',
          'content' => 'Section Title & Description',
        ),

        array(
          'id'      => 'our_startups_title',
          'type'    => 'text',
          'title'   => 'Title',
          'default' => 'Our Startups',
        ),

        array(
          'id'      => 'our_startups_subtitle',
          'type'    => 'text',
          'title'   => 'Subtitle',
          'default' => 'RESILIENT . INTEGRITY . COMMITMENT . HONEST',
        ),

        array(
          'id'       => 'our_startups_description',
          'type'     => 'wysiwyg',
          'title'    => 'Description',
          'settings' => array(
            'textarea_rows' => 5,
            'tinymce'       => true,
            'media_buttons' => false,
          ),
          'default' => '<p>The hardest part of starting a startup is building something people want to buy. The second hardest part is raising money. These are some of the most promising startups in Sri Lanka right now!</p>',
        ),
      )
    ),

    // Success Stories
    array(
      'name'     => 'success_stories',
      'title'    => 'Testimonials',
      'fields'   => array(

        array(
          'type'    => 'heading',
          'content' => 'Testimonials',
        ),

        array(
          'type'    => 'subheading',
          'content' => 'Section Title',
        ),

        array(
          'id'      => 'success_stories_title',
          'type'    => 'text',
          'title'   => 'Title',
          'default' => 'Testimonials',
        ),

        // Widgets
        array(
          'id'              => 'success_stories_list',
          'type'            => 'group',
          'title'           => 'Testimonials list',
          'button_title'    => 'Add New Testimonial',
          'accordion_title' => 'Add New Testimonial',
          // 'limit'           => '3',
          // 'desc'            => 'Call to action buttons',
          'fields'          => array(

            array(
              'id'          => 'author',
              'type'        => 'text',
              'title'       => 'Author',
            ),

            array(
              'id'          => 'title',
              'type'        => 'text',
              'title'       => 'Job Title',
            ),

            array(
              'id'            => 'picture',
              'type'          => 'upload',
              'title'         => 'Author Picture',
              // 'default'       => 'image_select.png',
              'settings'      => array(
               // 'upload_type'  => 'png, svg',
               'button_title' => 'Upload',
               'frame_title'  => 'Select picture',
               'insert_title' => 'Use this picture',
              ),
              'after' => '<p><i class="fa fa-compress"></i> Image size (125x125) | <i class="fa fa-file-image-o"></i> Type (PNG or JPG)</p>'
            ),

            array(
              'id'          => 'description',
              'type'        => 'textarea',
              'title'       => 'Description',
              'attributes'    => array(
                'rows'        => 3,
              ),
            ),

            array(
              'id'            => 'logo',
              'type'          => 'upload',
              'title'         => 'Company Logo',
              // 'default'       => 'image_select.png',
              'settings'      => array(
               // 'upload_type'  => 'png, svg',
               'button_title' => 'Upload',
               'frame_title'  => 'Select logo',
               'insert_title' => 'Use this image',
              ),
              'after' => '<p><i class="fa fa-compress"></i> Image size (130x35) | <i class="fa fa-file-image-o"></i> Type (SVG or PNG) | <i class="fa fa-info-circle"></i> Transparent background</p>'
            ),
          ),

          'default' => array(
            array(
              'author'        => 'John Doe',
              'title'         => 'CEO/Founder, Google',
              'picture'       => THEME_IMAGES.'/testimony.png',
              'description'   => 'Crowdisland has been a massive help to me as a founder in terms of connecting me with investors, strategic partners as well as potential customers.',
              'logo'          => THEME_ICONS.'/zipline.png',
            ),
          )
        ),
      )
    ),

    // News & Blog
    array(
      'name'     => 'news_and_blog',
      'title'    => 'News & Blog',
      'fields'   => array(

        array(
          'type'    => 'heading',
          'content' => 'News & Blog',
        ),

        array(
          'type'    => 'subheading',
          'content' => 'Section Title',
        ),

        array(
          'id'      => 'news_and_blog_title',
          'type'    => 'text',
          'title'   => 'Title',
          'default' => 'News & Blog',
        ),

        array(
          'type'    => 'heading',
          'content' => 'Articles',
        ),

        array(
          'id'              => 'news',
          'type'            => 'group',
          'title'           => false,
          'button_title'    => 'Add New Post',
          'accordion_title' => 'Add New Post',
          'fields'          => array(
            // array(
            //   'id'    => 'title',
            //   'type'  => 'text',
            //   'title' => 'Title',
            // ),
            // array(
            //   'id'    => 'picture',
            //   'type'  => 'upload',
            //   'title' => 'Picture',
            //   'after' => '<p><i class="fa fa-compress"></i> Image size (1280x960) | <i class="fa fa-file-image-o"></i> Type (PNG or JPG)</p>'
            // ),
            // array(
            //   'id'    => 'date',
            //   'type'  => 'text',
            //   'title' => 'Date',
            // ),
            // array(
            //   'id'    => 'summary',
            //   'type'  => 'textarea',
            //   'title' => 'Summary',
            //   'after' => '<p><i class="fa fa-info-circle"></i> 90 Characters</p>'
            // ),
            array(
              'id'    => 'link',
              'type'  => 'text',
              'title' => 'Post Link',
            ),
            array(
              'id'    => 'author',
              'type'  => 'text',
              'title' => 'Author Name',
            ),
            array(
              'id'    => 'date',
              'type'  => 'text',
              'title' => 'Date',
            ),
          ),
        ),

        // array(
        //   'id'             => 'sorter_2',
        //   'type'           => 'sorter',
        //   'title'          => false,
        //   'default'        => array(
        //     'enabled'      => array(
        //       'blue'       => 'Blue',
        //       'green'      => 'Green',
        //       'red'        => 'Red',
        //       'yellow'     => 'Yellow',
        //       'orange'     => 'Orange',
        //       'ocean'      => 'Ocean',
        //     ),
        //     'disabled'     => array(
        //       'black'      => 'Black',
        //       'white'      => 'White',
        //     ),
        //   ),
        //   'enabled_title'  => 'Active Colors',
        //   'disabled_title' => 'Deactive Colors',
        // ),
      )
    ),

    // Featured Blocks
    array(
      'name'     => 'featured_blocks',
      'title'    => 'CTA Blocks',
      'fields'   => array(

        array(
          'type'    => 'heading',
          'content' => 'Homepage blocks',
        ),

        // Raise Block
        array(
          'id'        => 'raise_block',
          'type'      => 'fieldset',
          // 'debug'      => true,
          'title'     => 'Raise Block',
          'fields'    => array(

            array(
              'id'      => 'title',
              'type'    => 'text',
              'title'   => 'Title',
            ),

            array(
              'id'      => 'description',
              'type'    => 'textarea',
              'title'   => 'Description',
            ),

            array(
              'id'      => 'btn_text',
              'type'    => 'text',
              'title'   => 'Button Text',
            ),

            array(
              'id'      => 'btn_link',
              'type'    => 'text',
              'title'   => 'Button Link',
            ),

            array(
              'id'      => 'note',
              'type'    => 'text',
              'title'   => 'Note',
            ),

          ),
          'default'   => array(
            'title'     => 'Start Raising, Today!',
            'description' => 'With crowdisland, you don’t have to <br />delay your startup journey.',
            'btn_text'     => 'How to Raise',
            'btn_link'     => '',
            'note'     => 'Crowdisland is an equity crowdfunding platform  <br />I.E. Those providing money are actually buying a stake in your startup',
          )
        ),

        // Invest Block
        array(
          'id'        => 'invest_block',
          'type'      => 'fieldset',
          // 'debug'      => true,
          'title'     => 'Invest Block',
          'fields'    => array(

            array(
              'id'      => 'title',
              'type'    => 'text',
              'title'   => 'Title',
            ),

            array(
              'id'      => 'description',
              'type'    => 'textarea',
              'title'   => 'Description',
            ),

            array(
              'id'      => 'btn_text',
              'type'    => 'text',
              'title'   => 'Button Text',
            ),

            array(
              'id'      => 'btn_link',
              'type'    => 'text',
              'title'   => 'Button Link',
            ),

            array(
              'id'      => 'note',
              'type'    => 'text',
              'title'   => 'Note',
            ),
          ),
          
          'default'   => array(
            'title'     => 'Start Investing, Today!',
            'description' => 'Grow together, with the country’s fastest <br />growing companies.',
            'btn_text'     => 'How to Invest',
            'btn_link'     => '',
            'note'     => 'Crowdisland is for sophisticated investors <br />who understand the risks of startup funding',
          )
        ),

        array(
          'type'    => 'heading',
          'content' => 'Startup page',
        ),

        // Raise Block
        array(
          'id'        => 'page_raise_block',
          'type'      => 'fieldset',
          // 'debug'      => true,
          'title'     => 'Startup page block',
          'fields'    => array(

            array(
              'id'      => 'title',
              'type'    => 'text',
              'title'   => 'Title',
            ),

            array(
              'id'      => 'description',
              'type'    => 'textarea',
              'title'   => 'Description',
            ),

            array(
              'id'      => 'btn_text',
              'type'    => 'text',
              'title'   => 'Button Text',
            ),

            array(
              'id'      => 'btn_link',
              'type'    => 'text',
              'title'   => 'Button Link',
            ),

            array(
              'id'      => 'note',
              'type'    => 'text',
              'title'   => 'Note',
            ),

          ),
          'default'   => array(
            'title'     => 'Get funded!',
            'description' => 'With crowdisland, you don’t have to <br />delay your startup journey.',
            'btn_text'     => 'How to Raise',
            'btn_link'     => '',
            'note'     => 'Crowdisland is an equity crowdfunding platform  <br />I.E. Those providing money are actually buying a stake in your startup',
          )
        ),

        array(
          'type'    => 'heading',
          'content' => 'Investor page',
        ),

        // Invest Block
        array(
          'id'        => 'page_invest_block',
          'type'      => 'fieldset',
          // 'debug'      => true,
          'title'     => 'Investor page block',
          'fields'    => array(

            array(
              'id'      => 'title',
              'type'    => 'text',
              'title'   => 'Title',
            ),

            array(
              'id'      => 'description',
              'type'    => 'textarea',
              'title'   => 'Description',
            ),

            array(
              'id'      => 'btn_text',
              'type'    => 'text',
              'title'   => 'Button Text',
            ),

            array(
              'id'      => 'btn_link',
              'type'    => 'text',
              'title'   => 'Button Link',
            ),

            array(
              'id'      => 'note',
              'type'    => 'text',
              'title'   => 'Note',
            ),

          ),
          'default'   => array(
            'title'     => 'Fund Startups!',
            'description' => 'Grow together, with the country’s fastest <br />growing companies.',
            'btn_text'     => 'Fund Now',
            'btn_link'     => '',
            'note'     => 'Crowdisland is for sophisticated investors <br />who understand the risks of startup funding',
          )
        ),
      ),        
    ),

    // What we look for [Investor]
    array(
      'name'     => 'what_we_look_for_investor',
      'title'    => 'What we look for (Investors)',
      'fields'   => array(

        array(
          'type'    => 'heading',
          'content' => 'What we look for (Investors)',
        ),

        array(
          'type'    => 'subheading',
          'content' => 'Section Title & Description',
        ),

        array(
          'id'      => 'what_we_look_for_investor_title',
          'type'    => 'text',
          'title'   => 'Title',
          'default' => 'What we look for',
        ),

        // array(
        //   'id'      => 'what_we_look_for_subtitle',
        //   'type'    => 'text',
        //   'title'   => 'Subtitle',
        //   'default' => '',
        // ),

        array(
          'id'       => 'what_we_look_for_investor_description',
          'type'     => 'wysiwyg',
          'title'    => 'Description',
          'settings' => array(
            'textarea_rows' => 5,
            'tinymce'       => true,
            'media_buttons' => false,
          ),
          'default' => "<p>Being a founder changes your life. Your cause become greater than yourself. Your startup will consume more than 60% of your life, for the next 10 years. So we look for founders that are both passionate and committed in solving problems. The one's who are ready to walk a mile in their customers' shoes.</p>",
        ),

        array(
          'type'    => 'subheading',
          'content' => 'Widgets',
        ),

        // Widgets
        array(
          'id'              => 'what_we_look_for_investor_widgets',
          'type'            => 'group',
          'title'           => 'Block',
          'button_title'    => 'Add New Block',
          'accordion_title' => 'Add New Block',
          'limit'           => '3',
          // 'desc'            => 'Call to action buttons',
          'fields'          => array(

            array(
              'id'          => 'title',
              'type'        => 'text',
              'title'       => 'Title',
            ),

            array(
              'id'            => 'icon',
              'type'          => 'upload',
              'title'         => 'Icon',
              // 'default'       => 'image_select.png',
              'settings'      => array(
               // 'upload_type'  => 'png, svg',
               'button_title' => 'Upload',
               'frame_title'  => 'Select an icon',
               'insert_title' => 'Use this icon',
              ),
              'after' => '<p><i class="fa fa-compress"></i> Image size (64x64) | <i class="fa fa-file-image-o"></i> Type (SVG or PNG)</p>'
            ),

            array(
              'id'          => 'description',
              'type'        => 'textarea',
              'title'       => 'Description',
              'attributes'    => array(
                'rows'        => 5,
              ),
            ),
          ),

          'default' => array(
            array(
              'title'       => 'Team',
              'icon'        => THEME_ICONS.'/growth-white.svg',
              'description' => 'We believe in the passion and persistence of our entrepreneurial generation. Our aim is to reduce the risks and increase the likelihood.',
            ),
            array(
              'title'       => 'Market',
              'icon'        => THEME_ICONS.'/traction-white.svg',
              'description' => 'We believe in the passion and persistence of our entrepreneurial generation. Our aim is to reduce the risks and increase the likelihood.',
            ),
            array(
              'title'       => 'Idea & Product',
              'icon'        => THEME_ICONS.'/growth-white.svg',
              'description'  => 'We believe in the passion and persistence of our entrepreneurial generation. Our aim is to reduce the risks and increase the likelihood.',
            ),
            array(
              'title'       => 'Expertise',
              'icon'        => THEME_ICONS.'/traction-white.svg',
              'description'  => 'We believe in the passion and persistence of our entrepreneurial generation. Our aim is to reduce the risks and increase the likelihood.',
            )
          )
        ),
      )
    ),

    // How we curate startups
    array(
      'name'     => 'how_we_curate',
      'title'    => 'How we curate startups',
      'fields'   => array(

        array(
          'type'    => 'heading',
          'content' => 'How we curate startups',
        ),

        array(
          'type'    => 'subheading',
          'content' => 'Section Title & Description',
        ),

        array(
          'id'      => 'how_we_curate_title',
          'type'    => 'text',
          'title'   => 'Title',
          'default' => 'How we curate startups',
        ),

        // array(
        //   'id'      => 'how_we_curate_subtitle',
        //   'type'    => 'text',
        //   'title'   => 'Subtitle',
        //   'default' => '',
        // ),

        array(
          'id'       => 'how_we_curate_description',
          'type'     => 'wysiwyg',
          'title'    => 'Description',
          'settings' => array(
            'textarea_rows' => 5,
            'tinymce'       => true,
            'media_buttons' => false,
          ),
          'default' => "<p>Through a network of channels, we meet early stage startups from across country. We spend time getting to know the founders to gage their integrity, resilience & commitment. Our hands-on approach churns less than 1% of the startups that we meet, but they have a 100% survival rate thus far.</p>",
        ),

        array(
          'type'    => 'subheading',
          'content' => 'Widgets',
        ),

        // Widgets
        array(
          'id'              => 'how_we_curate_widgets',
          'type'            => 'group',
          'title'           => 'Block',
          'button_title'    => 'Add New Block',
          'accordion_title' => 'Add New Block',
          'limit'           => '3',
          // 'desc'            => 'Call to action buttons',
          'fields'          => array(

            array(
              'id'          => 'title',
              'type'        => 'text',
              'title'       => 'Title',
            ),

            array(
              'id'            => 'icon',
              'type'          => 'upload',
              'title'         => 'Image',
              // 'default'       => 'image_select.png',
              'settings'      => array(
               // 'upload_type'  => 'png, svg',
               'button_title' => 'Upload',
               'frame_title'  => 'Select an icon',
               'insert_title' => 'Use this icon',
              ),
              'after' => '<p><i class="fa fa-compress"></i> Image size (195x125) | <i class="fa fa-file-image-o"></i> Type (SVG or PNG)</p>'
            ),

            array(
              'id'          => 'description',
              'type'        => 'textarea',
              'title'       => 'Description',
              'attributes'    => array(
                'rows'        => 5,
              ),
            ),
          ),

          'default' => array(
            array(
              'title'       => 'Purpose',
              'icon'        => THEME_IMAGES.'/curate-block-img-01.svg',
              'description' => 'Why is this problem so important to you? What makes you the best team to solve this problem',
            ),
            array(
              'title'       => 'Structure',
              'icon'        => THEME_IMAGES.'/curate-block-img-01.svg',
              'description' => 'Why is this problem so important to you? What makes you the best team to solve this problem',
            ),
            array(
              'title'       => 'Announce',
              'icon'        => THEME_IMAGES.'/curate-block-img-01.svg',
              'description'  => 'Why is this problem so important to you? What makes you the best team to solve this problem',
            )
          )
        ),
      )
    ),

    // What we look for [Startups]
    array(
      'name'     => 'what_we_look_for_startups',
      'title'    => 'What we look for (Startups)',
      'fields'   => array(

        array(
          'type'    => 'heading',
          'content' => 'What we look for (Startups)',
        ),

        array(
          'type'    => 'subheading',
          'content' => 'Section Title & Description',
        ),

        array(
          'id'      => 'what_we_look_for_startups_title',
          'type'    => 'text',
          'title'   => 'Title',
          'default' => 'What we look for',
        ),

        // array(
        //   'id'      => 'what_we_look_for_subtitle',
        //   'type'    => 'text',
        //   'title'   => 'Subtitle',
        //   'default' => '',
        // ),

        array(
          'id'       => 'what_we_look_for_startups_description',
          'type'     => 'wysiwyg',
          'title'    => 'Description',
          'settings' => array(
            'textarea_rows' => 5,
            'tinymce'       => true,
            'media_buttons' => false,
          ),
          'default' => "<p>Being a founder changes your life. Your cause become greater than yourself. Your startup will consume more than 60% of your life, for the next 10 years. So we look for founders that are both passionate and committed in solving problems. The one's who are ready to walk a mile in their customers' shoes.</p>",
        ),

        array(
          'type'    => 'subheading',
          'content' => 'Widgets',
        ),

        // Widgets
        array(
          'id'              => 'what_we_look_for_startups_widgets',
          'type'            => 'group',
          'title'           => 'Block',
          'button_title'    => 'Add New Block',
          'accordion_title' => 'Add New Block',
          'limit'           => '3',
          // 'desc'            => 'Call to action buttons',
          'fields'          => array(

            array(
              'id'          => 'title',
              'type'        => 'text',
              'title'       => 'Title',
            ),

            array(
              'id'            => 'icon',
              'type'          => 'upload',
              'title'         => 'Icon',
              // 'default'       => 'image_select.png',
              'settings'      => array(
               // 'upload_type'  => 'png, svg',
               'button_title' => 'Upload',
               'frame_title'  => 'Select an icon',
               'insert_title' => 'Use this icon',
              ),
              'after' => '<p><i class="fa fa-compress"></i> Image size (64x64) | <i class="fa fa-file-image-o"></i> Type (SVG or PNG)</p>'
            ),

            array(
              'id'          => 'description',
              'type'        => 'textarea',
              'title'       => 'Description',
              'attributes'    => array(
                'rows'        => 5,
              ),
            ),
          ),

          'default' => array(
            array(
              'title'       => 'Team',
              'icon'        => THEME_ICONS.'/growth-white.svg',
              'description' => 'We believe in the passion and persistence of our entrepreneurial generation. Our aim is to reduce the risks and increase the likelihood.',
            ),
            array(
              'title'       => 'Market',
              'icon'        => THEME_ICONS.'/traction-white.svg',
              'description' => 'We believe in the passion and persistence of our entrepreneurial generation. Our aim is to reduce the risks and increase the likelihood.',
            ),
            array(
              'title'       => 'Idea & Product',
              'icon'        => THEME_ICONS.'/growth-white.svg',
              'description'  => 'We believe in the passion and persistence of our entrepreneurial generation. Our aim is to reduce the risks and increase the likelihood.',
            ),
            array(
              'title'       => 'Expertise',
              'icon'        => THEME_ICONS.'/traction-white.svg',
              'description'  => 'We believe in the passion and persistence of our entrepreneurial generation. Our aim is to reduce the risks and increase the likelihood.',
            )
          )
        ),
      )
    ),

    // How we Help
    array(
      'name'     => 'how_we_help',
      'title'    => 'How we help',
      'fields'   => array(

        array(
          'type'    => 'heading',
          'content' => 'How we help',
        ),

        array(
          'type'    => 'subheading',
          'content' => 'Section Title & Description',
        ),

        array(
          'id'      => 'how_we_help_title',
          'type'    => 'text',
          'title'   => 'Title',
          'default' => 'How we help',
        ),

        // array(
        //   'id'      => 'how_we_curate_subtitle',
        //   'type'    => 'text',
        //   'title'   => 'Subtitle',
        //   'default' => '',
        // ),

        array(
          'id'       => 'how_we_help_description',
          'type'     => 'wysiwyg',
          'title'    => 'Description',
          'settings' => array(
            'textarea_rows' => 5,
            'tinymce'       => true,
            'media_buttons' => false,
          ),
          'default' => "<p>Lack of funds shouldn’t deter you from turning an idea into reality. Accessing funds at the right time from the right people is crucial as a startup. Our mission is to make fundraising simple and painless.</p>",
        ),

        array(
          'type'    => 'subheading',
          'content' => 'Widgets',
        ),

        // Widgets
        array(
          'id'              => 'how_we_help_widgets',
          'type'            => 'group',
          'title'           => 'Block',
          'button_title'    => 'Add New Block',
          'accordion_title' => 'Add New Block',
          'limit'           => '3',
          // 'desc'            => 'Call to action buttons',
          'fields'          => array(

            array(
              'id'          => 'title',
              'type'        => 'text',
              'title'       => 'Title',
            ),

            array(
              'id'            => 'icon',
              'type'          => 'upload',
              'title'         => 'Image',
              // 'default'       => 'image_select.png',
              'settings'      => array(
               // 'upload_type'  => 'png, svg',
               'button_title' => 'Upload',
               'frame_title'  => 'Select an icon',
               'insert_title' => 'Use this icon',
              ),
              'after' => '<p><i class="fa fa-compress"></i> Image size (195x125) | <i class="fa fa-file-image-o"></i> Type (SVG or PNG)</p>'
            ),

            array(
              'id'          => 'description',
              'type'        => 'textarea',
              'title'       => 'Description',
              'attributes'    => array(
                'rows'        => 5,
              ),
            ),
          ),

          'default' => array(
            array(
              'title'       => 'Scope',
              'icon'        => THEME_IMAGES.'/curate-block-img-01.svg',
              'description' => 'Why is this problem so important to you? What makes you the best team to solve this problem',
            ),
            array(
              'title'       => 'Strategy',
              'icon'        => THEME_IMAGES.'/curate-block-img-01.svg',
              'description' => 'Why is this problem so important to you? What makes you the best team to solve this problem',
            ),
            array(
              'title'       => 'Execution',
              'icon'        => THEME_IMAGES.'/curate-block-img-01.svg',
              'description'  => 'Why is this problem so important to you? What makes you the best team to solve this problem',
            )
          )
        ),
      )
    ),

    // Why Invest with us
    // array(
    //   'name'     => 'why_us',
    //   'title'    => 'Why invest with us?',
    //   'fields'   => array(

    //     array(
    //       'type'    => 'heading',
    //       'content' => 'Why invest with us?',
    //     ),

    //     array(
    //       'type'    => 'subheading',
    //       'content' => 'Section Title & Description',
    //     ),

    //     array(
    //       'id'      => 'why_us_title',
    //       'type'    => 'text',
    //       'title'   => 'Title',
    //       'default' => 'Why you should invest with us',
    //     ),

    //     array(
    //       'id'       => 'why_us_description',
    //       'type'     => 'wysiwyg',
    //       'title'    => 'Description',
    //       'settings' => array(
    //         'textarea_rows' => 5,
    //         'tinymce'       => true,
    //         'media_buttons' => false,
    //       ),
    //       'default' => "<p>The hardest part of starting a startup is building something people want to buy. The second hardest part is raising money. Before you raise funds, we would like to take you through a journey to help you become investor ready.</p>",
    //     ),

    //     array(
    //       'type'    => 'subheading',
    //       'content' => 'Widgets',
    //     ),

    //     // Widgets
    //     array(
    //       'id'              => 'why_us_widgets',
    //       'type'            => 'group',
    //       'title'           => 'Block',
    //       'button_title'    => 'Add New Block',
    //       'accordion_title' => 'Add New Block',
    //       // 'limit'           => '3',
    //       // 'desc'            => 'Call to action buttons',
    //       'fields'          => array(

    //         array(
    //           'id'          => 'title',
    //           'type'        => 'text',
    //           'title'       => 'Title',
    //         ),

    //         array(
    //           'id'            => 'icon',
    //           'type'          => 'upload',
    //           'title'         => 'Image',
    //           // 'default'       => 'image_select.png',
    //           'settings'      => array(
    //            // 'upload_type'  => 'png, svg',
    //            'button_title' => 'Upload',
    //            'frame_title'  => 'Select an icon',
    //            'insert_title' => 'Use this icon',
    //           ),
    //           'after' => '<p><i class="fa fa-compress"></i> Image size (64x64) | <i class="fa fa-file-image-o"></i> Type (SVG or PNG) | <i class="fa fa-info-circle"></i> In white color</p>'
    //         ),

    //         array(
    //           'id'          => 'description',
    //           'type'        => 'textarea',
    //           'title'       => 'Description',
    //           'attributes'    => array(
    //             'rows'        => 5,
    //           ),
    //         ),
    //       ),

    //       'default' => array(
    //         array(
    //           'title'       => 'Startup Curation',
    //           'icon'        => THEME_ICONS.'/prototype-white.svg',
    //           'description' => 'We aim for quality over quantity. Each startup goes through a series of reviews to ensure their...',
    //         ),
    //         array(
    //           'title'       => 'Co Invest',
    //           'icon'        => THEME_ICONS.'/prototype-white.svg',
    //           'description' => 'Learn best practices in startup investments by investing alongside seasoned investors.',
    //         ),
    //         array(
    //           'title'       => 'Ongoing Relations',
    //           'icon'        => THEME_ICONS.'/prototype-white.svg',
    //           'description'  => 'We help build and manage founder/investor relationships throughout the investment cycle.',
    //         ),
    //         array(
    //           'title'       => 'Legal Support',
    //           'icon'        => THEME_ICONS.'/prototype-white.svg',
    //           'description'  => 'Our team will handle all legal documents as well as follow up with payments.',
    //         )
    //       )
    //     ),
    //   )
    // ),

    // Our Partners
    array(
      'name'     => 'our_partners',
      'title'    => 'Our Partners',
      'fields'   => array(

        array(
          'type'    => 'heading',
          'content' => 'Our Partners',
        ),

        array(
          'id'      => 'our_partners_title',
          'type'    => 'text',
          'title'   => 'Title',
          'default' => 'Our Partners',
        ),

        // Logos
        array(
          'id'              => 'our_partners_widgets',
          'type'            => 'group',
          'title'           => 'Logos',
          'button_title'    => 'Add New Partner',
          'accordion_title' => 'Add New Partner',
          // 'limit'           => '3',
          // 'desc'            => 'Call to action buttons',
          'fields'          => array(

            array(
              'id'          => 'title',
              'type'        => 'text',
              'title'       => 'Title',
            ),

            array(
              'id'            => 'icon',
              'type'          => 'upload',
              'title'         => 'Image',
              // 'default'       => 'image_select.png',
              'settings'      => array(
               // 'upload_type'  => 'png, svg',
               'button_title' => 'Upload',
               'frame_title'  => 'Select a logo',
               'insert_title' => 'Use this logo',
              ),
              'after' => '<p><i class="fa fa-compress"></i> Image size (150x35) | <i class="fa fa-file-image-o"></i> Type (SVG or PNG)</p>'
            ),
          ),

          'default' => array(
            array(
              'title'       => 'AWS Activate',
              'icon'        => THEME_IMAGES.'/activatelogo.png',
            ),
            array(
              'title'       => 'AWS Activate',
              'icon'        => THEME_IMAGES.'/activatelogo.png',
            ),
            array(
              'title'       => 'AWS Activate',
              'icon'        => THEME_IMAGES.'/activatelogo.png',
            ),
            array(
              'title'       => 'AWS Activate',
              'icon'        => THEME_IMAGES.'/activatelogo.png',
            ),
            array(
              'title'       => 'AWS Activate',
              'icon'        => THEME_IMAGES.'/activatelogo.png',
            ),
          )
        ),
      )
    ),

  ),
);

/*=====  End of Content Sections  ======*/


/*==============================
=            Footer            =
==============================*/

$options[]   = array(
  'name'     => 'footer_section',
  'title'    => 'Footer',
  // 'icon'     => 'fa fa-bars',
  'sections' => array(
    // sub section 1
    array(
      'name'     => 'footer_general',
      'title'    => 'General',
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        array(
          'type'    => 'heading',
          'content' => 'Footer General Info',
        ),

        array(
          'id'          => 'footer_logo',
          'type'        => 'upload',
          'title'       => 'Footer Logo',
          'settings'       => array(
            'button_title' => 'Upload Logo',
            'frame_title'  => 'Choose a image',
            'insert_title' => 'Use this image',
          ),
          'default' => THEME_IMAGES.'/cl-logo-footer.svg',
          'after' => '<p><i class="fa fa-compress"></i> Image size (192x45) | <i class="fa fa-file-image-o"></i> Type (SVG or PNG)</p>'
        ),

        array(
          'id'    => 'footer_address',
          'type'  => 'textarea',
          'title' => 'Footer Address',
          'default' => '116 Havelock Road  <br />Colombo 05. Sri Lanka',
        ),

        array(
          'id'    => 'footer_email',
          'type'  => 'text',
          'title' => 'Info Email Address',
          'default' => 'info@crowdisland.lk',
        ),

        array(
          'id'    => 'footer_note',
          'type'  => 'textarea',
          'title' => 'Footer Note',
          'default' => '<strong>Risk Warning:</strong> Investing in early stage businesses involves risks, including illiquidity, lack of dividends, loss of investment and dilution, and it should be done only as part of a diversified portfolio. CrowdIsland is targeted exclusively at sophisticated investors who understand these risks and make their own investment decisions.',
        ),

        array(
          'id'    => 'footer_copyrights',
          'type'  => 'text',
          'title' => 'Copyrights Text',
          'default' => '© CrowdIsland (Pvt) Ltd. All Rights Reserved.',
        ),

      )
    ),
  ),
);

/*=====  End of Footer  ======*/


// ------------------------------
// a option section with tabs   -
// ------------------------------
// $options[]   = array(
//   'name'     => 'options',
//   'title'    => 'Options',
//   'icon'     => 'fa fa-plus-circle',
//   'sections' => array(
//     // -----------------------------
//     // begin: text options         -
//     // -----------------------------
//     array(
//       'name'      => 'text_options',
//       'title'     => 'Text',
//       'icon'      => 'fa fa-check',
//       // begin: fields
//       'fields'    => array(
//         // begin: a field
//         array(
//           'id'    => 'unique_text_1',
//           'type'  => 'text',
//           'title' => 'Text Field',
//         ),
//         // end: a field
//         array(
//           'id'    => 'unique_text_2',
//           'type'  => 'text',
//           'title' => 'Text Field with Description',
//           'desc'  => 'Lets write some description for this text field.',
//         ),
//         array(
//           'id'    => 'unique_text_3',
//           'type'  => 'text',
//           'title' => 'Text Field with Help',
//           'help'  => 'I am a Tooltip helper. This field important for something.',
//         ),
//         array(
//           'id'      => 'unique_text_4',
//           'type'    => 'text',
//           'title'   => 'Text Field with Default',
//           'default' => 'some default value bla bla bla',
//         ),
//         array(
//           'id'            => 'unique_text_5',
//           'type'          => 'text',
//           'title'         => 'Text Field with Placeholder',
//           'attributes'    => array(
//             'placeholder' => 'do stuff...'
//           )
//         ),
//         array(
//           'id'    => 'unique_text_6',
//           'type'  => 'text',
//           'title' => 'Text Field with After-text',
//           'after' => ' <i class="cs-text-muted">( this option is optional )</i>',
//         ),
//         array(
//           'id'     => 'unique_text_7',
//           'type'   => 'text',
//           'title'  => 'Text Field with Before-text',
//           'before' => '<i class="cs-text-muted">( important )</i> ',
//         ),
//         array(
//           'id'    => 'unique_text_8',
//           'type'  => 'text',
//           'title' => 'Text Field with After-block-text',
//           'after' => '<p class="cs-text-info">Information: There is some description for option.</p> ',
//         ),
//         array(
//           'id'         => 'unique_text_9',
//           'type'       => 'text',
//           'title'      => 'Text Field with Ready-Only',
//           'attributes' => array(
//             'readonly' => 'only-key'
//           ),
//           'default'    => 'info@domain.com'
//         ),
//         array(
//           'id'          => 'unique_text_10',
//           'type'        => 'text',
//           'title'       => 'Text Field with Maxlength (5)',
//           'attributes'  => array(
//             'maxlength' => '5'
//           ),
//           'default'     => 'Hello',
//         ),
//         array(
//           'id'         => 'unique_text_11',
//           'type'       => 'text',
//           'title'      => 'Text Field with Custom Style',
//           'attributes' => array(
//             'style'    => 'width: 175px; height: 40px; border-color: #93C054;'
//           ),
//           'after'      => '<p class="cs-text-muted">There is custom css <strong>style="width: 175px; height: 40px; border-color: #93C054;"</strong></p>',
//         ),
//         array(
//           'id'         => 'unique_text_12',
//           'type'       => 'text',
//           'title'      => 'Text Field with Custom Style',
//           'attributes' => array(
//             'style'    => 'width: 100%;'
//           ),
//           'after'      => '<p class="cs-text-muted">There is custom css <strong>style="width: 100%;"</strong></p>'
//         ),
//         array(
//           'id'     => 'unique_text_13',
//           'type'   => 'text',
//           'before' => '<h4>Text Field without left title</h4>',
//           'after'  => '<p class="cs-text-muted">This Text Field do not using left title, just using before text here. also you can remove it.</h4>',
//         ),
//       ), // end: fields
//     ), // end: text options
//     // -----------------------------
//     // begin: textarea options     -
//     // -----------------------------
//     array(
//       'name'      => 'textarea_options',
//       'title'     => 'Textarea',
//       'icon'      => 'fa fa-check',
//       'fields'    => array(
//         array(
//           'id'    => 'unique_textarea_1',
//           'type'  => 'textarea',
//           'title' => 'Simple Textarea',
//         ),
//         array(
//           'id'        => 'unique_textarea_1_1',
//           'type'      => 'textarea',
//           'title'     => 'Textarea with Shortcoder',
//           'shortcode' => true,
//         ),
//         array(
//           'id'    => 'unique_textarea_2',
//           'type'  => 'textarea',
//           'title' => 'Textarea Field with Description',
//           'desc'  => 'Lets write some description for this textarea field.',
//         ),
//         array(
//           'id'    => 'unique_textarea_3',
//           'type'  => 'textarea',
//           'title' => 'Textarea Field with Help',
//           'help'  => 'I am a Tooltip helper. This field important for something.',
//         ),
//         array(
//           'id'      => 'unique_textarea_4',
//           'type'    => 'textarea',
//           'title'   => 'Textarea Field with Default',
//           'default' => 'some default value bla bla bla',
//         ),
//         array(
//           'id'            => 'unique_textarea_5',
//           'type'          => 'textarea',
//           'title'         => 'Textarea Field with Placeholder',
//           'attributes'    => array(
//             'placeholder' => 'do stuff...'
//           )
//         ),
//         array(
//           'id'    => 'unique_textarea_6',
//           'type'  => 'textarea',
//           'title' => 'Textarea Field with After-text',
//           'after' => '<p class="cs-text-muted">Information: There is some description for option.</p> ',
//         ),
//         array(
//           'id'     => 'unique_textarea_7',
//           'type'   => 'textarea',
//           'title'  => 'Textarea Field with Before-text',
//           'before' => '<p class="cs-text-muted">Information: There is some description for option.</p> ',
//         ),
//         array(
//           'id'         => 'unique_textarea_8',
//           'type'       => 'textarea',
//           'title'      => 'Textarea Field with Before-text',
//           'attributes' => array(
//             'rows'     => 10,
//           ),
//           'after'      => '<p class="cs-text-muted">custom textarea attribute rows=10</p> ',
//         ),
//         array(
//           'id'     => 'unique_textarea_13',
//           'type'   => 'textarea',
//           'before' => '<h4>Textarea Field without left title</h4>',
//           'after'  => '<p class="cs-text-muted">This Textarea Field do not using left title, just using before text here. also you can remove it.</h4>',
//         ),
//       ),
//     ), // end: textarea options
//     // -----------------------------
//     // begin: checkbox options     -
//     // -----------------------------
//     array(
//       'name'      => 'checkbox_options',
//       'title'     => 'Checkbox',
//       'icon'      => 'fa fa-check',
//       'fields'    => array(
//         array(
//           'id'    => 'unique_checkbox_1',
//           'type'  => 'checkbox',
//           'title' => 'Checkbox',
//           'label' => 'Yes, Please.',
//         ),
//         array(
//           'id'      => 'unique_checkbox_2',
//           'type'    => 'checkbox',
//           'title'   => 'Checkbox with Default Value',
//           'label'   => 'Would you like something ?',
//           'default' => true,
//         ),
//         array(
//           'id'    => 'unique_checkbox_3',
//           'type'  => 'checkbox',
//           'title' => 'Checkbox Field with Help',
//           'label' => 'I am an checkbox',
//           'help'  => 'I am a Tooltip helper. This field important for something.',
//         ),
//         array(
//           'id'       => 'unique_checkbox_4',
//           'type'     => 'checkbox',
//           'title'    => 'Checkbox Field with Options',
//           'options'  => array(
//             'blue'   => 'Blue',
//             'green'  => 'Green',
//             'yellow' => 'Yellow',
//           ),
//         ),
//         array(
//           'id'         => 'unique_checkbox_5',
//           'type'       => 'checkbox',
//           'title'      => 'Checkbox Field with Options and Default',
//           'options'    => array(
//             'bmw'      => 'BMW',
//             'mercedes' => 'Mercedes',
//             'jaguar'   => 'Jaguar',
//           ),
//           'default'    => 'bmw'
//         ),
//         array(
//           'id'         => 'unique_checkbox_6',
//           'type'       => 'checkbox',
//           'title'      => 'Checkbox Field with Options Horizontal',
//           'class'      => 'horizontal',
//           'options'    => array(
//             'blue'     => 'Blue',
//             'green'    => 'Green',
//             'yellow'   => 'Yellow',
//             'red'      => 'Red',
//             'black'    => 'Black',
//           ),
//           'default'    => array( 'green', 'yellow', 'red' )
//         ),
//         array(
//           'id'         => 'unique_checkbox_7',
//           'type'       => 'checkbox',
//           'title'      => 'Checkbox Field with Pages',
//           'options'    => 'pages',
//         ),
//         array(
//           'id'         => 'unique_checkbox_8',
//           'type'       => 'checkbox',
//           'title'      => 'Checkbox Field with Posts',
//           'options'    => 'posts',
//         ),
//         array(
//           'id'         => 'unique_checkbox_9',
//           'type'       => 'checkbox',
//           'title'      => 'Checkbox Field with Categories',
//           'options'    => 'categories',
//         ),
//         array(
//           'id'         => 'unique_checkbox_10',
//           'type'       => 'checkbox',
//           'title'      => 'Checkbox Field with Tags',
//           'options'    => 'tags',
//         ),
//         array(
//           'id'            => 'unique_checkbox_11',
//           'type'          => 'checkbox',
//           'title'         => 'Checkbox Field with Pages',
//           'options'       => 'pages',
//           'query_args'    => array(
//             'sort_order'  => 'desc',
//             'sort_column' => 'post_title',
//           ),
//           'after'         => '<p class="cs-text-muted"><strong>query_args:</strong> sort_order=desc, sort_column=post_title</p>',
//         ),
//         array(
//           'id'          => 'unique_checkbox_12',
//           'type'        => 'checkbox',
//           'title'       => 'Checkbox Field with CPT Posts',
//           'options'     => 'posts',
//           'query_args'  => array(
//             'post_type' => 'your_post_type_name',
//           ),
//           'after'       => '<div class="cs-text-muted"><strong>query_args:</strong> post_type=your_post_type_name</div>',
//         ),
//         array(
//           'id'          => 'unique_checkbox_13',
//           'type'        => 'checkbox',
//           'title'       => 'Checkbox Field with CPT Categories',
//           'options'     => 'categories',
//           'query_args'  => array(
//             'type'      => 'your_post_type_name',
//             'taxonomy'  => 'your_taxonomy_name',
//           ),
//           'after'       => '<div class="cs-text-muted"><strong>query_args:</strong> post_type=your_post_type_name, taxonomy=your_taxonomy_name</div>',
//         ),
//         array(
//           'id'           => 'unique_checkbox_14',
//           'type'         => 'checkbox',
//           'title'        => 'Checkbox Field with CPT Tags',
//           'options'      => 'tags',
//           'query_args'   => array(
//             'taxonomies' => 'your_taxonomy_name',
//             'order'      => 'asc',
//             'orderby'    => 'name',
//           ),
//           'after'        => '<div class="cs-text-muted"><strong>query_args:</strong> taxonomies=your_taxonomy_name, order=asc, orderby=name</div>',
//         ),
//       ),
//     ), // end: checkbox options
//     // -----------------------------
//     // begin. radio options        -
//     // -----------------------------
//     array(
//       'name'      => 'radio_options',
//       'title'     => 'Radio',
//       'icon'      => 'fa fa-check',
//       'fields'    => array(
//         array(
//           'id'      => 'unique_radio_1',
//           'type'    => 'radio',
//           'title'   => 'Radio Field',
//           'options' => array(
//             'yes'   => 'Yes, Please.',
//             'no'    => 'No, Thank you.',
//           ),
//         ),
//         array(
//           'id'        => 'unique_radio_2',
//           'type'      => 'radio',
//           'title'     => 'Radio with Default Value',
//           'options'   => array(
//             'yes'     => 'Yes, Please.',
//             'no'      => 'No, Thank you.',
//             'nothing' => 'I am not sure, yet!',
//           ),
//           'default'   => 'nothing',
//           'help'      => 'Reference site about Lorem Ipsum, a random Lipsum generator.',
//         ),
//         array(
//           'id'      => 'unique_radio_3',
//           'type'    => 'radio',
//           'title'   => 'Radio Field',
//           'class'   => 'horizontal',
//           'options' => array(
//             'yes'   => 'Yes, Please.',
//             'no'    => 'No, Thank you.',
//           ),
//           'after'   => '<div class="cs-text-muted">Reference site about Lorem Ipsum, a random Lipsum generator.</div>',
//         ),
//         array(
//           'id'         => 'unique_radio_4',
//           'type'       => 'radio',
//           'title'      => 'Radio Field with Pages',
//           'options'    => 'pages',
//         ),
//         array(
//           'id'         => 'unique_radio_5',
//           'type'       => 'radio',
//           'title'      => 'Radio Field with Posts',
//           'options'    => 'posts',
//         ),
//         array(
//           'id'         => 'unique_radio_6',
//           'type'       => 'radio',
//           'title'      => 'Radio Field with Categories',
//           'options'    => 'categories',
//         ),
//         array(
//           'id'         => 'unique_radio_7',
//           'type'       => 'radio',
//           'title'      => 'Radio Field with Tags',
//           'options'    => 'tags',
//         ),
//         array(
//           'id'            => 'unique_radio_8',
//           'type'          => 'radio',
//           'title'         => 'Radio Field with Pages',
//           'options'       => 'pages',
//           'query_args'    => array(
//             'sort_order'  => 'desc',
//             'sort_column' => 'post_title',
//           ),
//           'after'         => '<p class="cs-text-muted"><strong>query_args:</strong> sort_order=desc, sort_column=post_title</p>',
//         ),
//         array(
//           'id'          => 'unique_radio_9',
//           'type'        => 'radio',
//           'title'       => 'Radio Field with CPT Posts',
//           'options'     => 'posts',
//           'query_args'  => array(
//             'post_type' => 'your_post_type_name',
//           ),
//           'after'       => '<div class="cs-text-muted"><strong>query_args:</strong> post_type=your_post_type_name</div>',
//         ),
//         array(
//           'id'          => 'unique_radio_10',
//           'type'        => 'radio',
//           'title'       => 'Radio Field with CPT Categories',
//           'options'     => 'categories',
//           'query_args'  => array(
//             'type'      => 'your_post_type_name',
//             'taxonomy'  => 'your_taxonomy_name',
//           ),
//           'after'       => '<div class="cs-text-muted"><strong>query_args:</strong> post_type=your_post_type_name, taxonomy=your_taxonomy_name</div>',
//         ),
//         array(
//           'id'         => 'unique_radio_11',
//           'type'       => 'radio',
//           'title'      => 'Radio Field',
//           'options'    => array(
//             'yes'      => 'Yes, Please.',
//             'no'       => 'No, Thank you.',
//             'nothing'  => 'Nothing.',
//           ),
//         ),
//       ),
//     ), // end: radio options
//     // -----------------------------
//     // begin: select options       -
//     // -----------------------------
//     array(
//       'name'      => 'select_options',
//       'title'     => 'Select',
//       'icon'      => 'fa fa-check',
//       'fields'    => array(
//         array(
//           'id'      => 'unique_select_1',
//           'type'    => 'select',
//           'title'   => 'Select',
//           'options' => array(
//             'yes'   => 'Yes, Please.',
//             'no'    => 'No, Thank you.'
//           )
//         ),
//         array(
//           'id'             => 'unique_select_2',
//           'type'           => 'select',
//           'title'          => 'Select with First Empty Value',
//           'options'        => array(
//             'yes'          => 'Yes, Please.',
//             'no'           => 'No, Thank you.'
//           ),
//           'default_option' => 'Select an option',
//           'help'           => 'I am a Tooltip helper. This field important for something.',
//         ),
//         array(
//           'id'             => 'unique_select_3',
//           'type'           => 'select',
//           'title'          => 'Select with Help',
//           'options'        => array(
//             'green'        => 'Green',
//             'red'          => 'Red',
//             'blue'         => 'Blue',
//             'yellow'       => 'Yellow',
//             'black'        => 'Black',
//           ),
//           'default_option' => 'Select a color',
//           'info'           => 'Choose your favorite skin.',
//         ),
//         array(
//           'id'             => 'unique_select_4',
//           'type'           => 'select',
//           'title'          => 'Select with Default Value',
//           'options'        => array(
//             'primary'      => 'Primary Option',
//             'secondary'    => 'Secondry Option',
//             'tertiary'     => 'Tertiary Option',
//           ),
//           'default'        => 'tertiary',
//           'default_option' => 'Select an option',
//         ),
//         array(
//           'id'         => 'unique_select_6',
//           'type'       => 'select',
//           'title'      => 'Select Field with Multi-select',
//           'options'    => array(
//             'bmw'      => 'BMW',
//             'mercedes' => 'Mercedes',
//             'jaguar'   => 'Jaguar',
//             'opel'     => 'Opel',
//             'golf'     => 'Golf',
//             'ferrari'  => 'Ferrari',
//             'subaru'   => 'Subaru',
//             'seat'     => 'Seat',
//           ),
//           'attributes' => array(
//             'multiple' => 'only-key',
//             'style'    => 'width: 150px; height: 125px;'
//           )
//         ),
//         array(
//           'id'         => 'unique_select_7',
//           'type'       => 'select',
//           'title'      => 'Select Field with Multi-default',
//           'options'    => array(
//             'bmw'      => 'BMW',
//             'mercedes' => 'Mercedes',
//             'jaguar'   => 'Jaguar',
//             'opel'     => 'Opel',
//             'golf'     => 'Golf',
//             'ferrari'  => 'Ferrari',
//             'subaru'   => 'Subaru',
//             'seat'     => 'Seat',
//           ),
//           'attributes' => array(
//             'multiple' => 'only-key',
//             'style'    => 'width: 150px; height: 125px;'
//           ),
//           'default'    => array( 'bmw', 'mercedes', 'opel' ),
//           'info'       => 'Choose your favorite cars.',
//         ),
//         array(
//           'id'             => 'unique_select_8',
//           'type'           => 'select',
//           'title'          => 'Select with Pages',
//           'options'        => 'pages',
//           'default_option' => 'Select a page'
//         ),
//         array(
//           'id'             => 'unique_select_9',
//           'type'           => 'select',
//           'title'          => 'Select with Posts',
//           'options'        => 'posts',
//           'default_option' => 'Select a post'
//         ),
//         array(
//           'id'             => 'unique_select_10',
//           'type'           => 'select',
//           'title'          => 'Select with Categories',
//           'options'        => 'categories',
//           'default_option' => 'Select a tag'
//         ),
//         array(
//           'id'             => 'unique_select_10_1',
//           'type'           => 'select',
//           'title'          => 'Select with Menus',
//           'options'        => 'menus',
//           'default_option' => 'Select a menu'
//         ),
//         array(
//           'id'         => 'unique_select_11',
//           'type'       => 'select',
//           'title'      => 'Select with Pages with Multi-Select',
//           'options'    => 'pages',
//           'attributes' => array(
//             'multiple' => 'only-key',
//             'style'    => 'width: 150px; height: 125px;'
//           )
//         ),
//         array(
//           'id'                 => 'unique_select_12',
//           'type'               => 'select',
//           'title'              => 'Select with Chosen',
//           'options'            => array(
//             'bmw'              => 'BMW',
//             'mercedes'         => 'Mercedes',
//             'jaguar'           => 'Jaguar',
//             'opel'             => 'Opel',
//             'golf'             => 'Golf',
//             'ferrari'          => 'Ferrari',
//             'subaru'           => 'Subaru',
//             'seat'             => 'Seat',
//           ),
//           'class'              => 'chosen',
//           'default_option'     => 'Select your car',
//         ),
//         array(
//           'id'                 => 'unique_select_13',
//           'type'               => 'select',
//           'title'              => 'Select with Chosen Multi-Select',
//           'options'            => array(
//             'bmw'              => 'BMW',
//             'mercedes'         => 'Mercedes',
//             'jaguar'           => 'Jaguar',
//             'opel'             => 'Opel',
//             'golf'             => 'Golf',
//             'ferrari'          => 'Ferrari',
//             'subaru'           => 'Subaru',
//             'seat'             => 'Seat',
//           ),
//           'class'              => 'chosen',
//           'attributes'         => array(
//             'data-placeholder' => 'Select your favrorite cars',
//             'multiple'         => 'only-key',
//             'style'            => 'width: 200px;'
//           ),
//         ),
//         array(
//           'id'             => 'unique_select_14',
//           'type'           => 'select',
//           'title'          => 'Select with Chosen with Pages',
//           'options'        => 'pages',
//           'class'          => 'chosen',
//           'default_option' => 'Select a page'
//         ),
//         array(
//           'id'                 => 'unique_select_15',
//           'type'               => 'select',
//           'title'              => 'Select with Chosen with Posts Multi-Select',
//           'options'            => 'posts',
//           'class'              => 'chosen',
//           'attributes'         => array(
//             'data-placeholder' => 'Select your favrorite posts',
//             'multiple'         => 'only-key',
//             'style'            => 'width: 200px;'
//           ),
//           'info'               => 'and much more select options for you!',
//         ),
//       ),
//     ), // end: select options
//     // -----------------------------
//     // begin: switcher options     -
//     // -----------------------------
//     array(
//       'name'      => 'switcher_options',
//       'title'     => 'Switcher',
//       'icon'      => 'fa fa-toggle-on',
//       'fields'    => array(
//         array(
//           'id'    => 'unique_switcher_1',
//           'type'  => 'switcher',
//           'title' => 'Simple Switcher',
//         ),
//         array(
//           'id'    => 'unique_switcher_2',
//           'type'  => 'switcher',
//           'title' => 'Switcher Field with Label',
//           'label' => 'Yes, Please do it.',
//         ),
//         array(
//           'id'    => 'unique_switcher_3',
//           'type'  => 'switcher',
//           'title' => 'Switcher Field with Help',
//           'help'  => 'I am a Tooltip helper. This field important for something.',
//         ),
//         array(
//           'id'      => 'unique_switcher_4',
//           'type'    => 'switcher',
//           'title'   => 'Switcher Field with Default',
//           'default' => true,
//         ),
//       ),
//     ), // end: switcher options
//     // -----------------------------
//     // begin: number options       -
//     // -----------------------------
//     array(
//       'name'        => 'number_options',
//       'title'       => 'Number',
//       'icon'        => 'fa fa-check',
//       'fields'      => array(
//         array(
//           'id'      => 'unique_number_1',
//           'type'    => 'number',
//           'title'   => 'Simple Number',
//         ),
//         array(
//           'id'      => 'unique_number_2',
//           'type'    => 'number',
//           'title'   => 'Number Field with Description',
//           'desc'    => 'Lets write some description for this number field.',
//         ),
//         array(
//           'id'      => 'unique_number_3',
//           'type'    => 'number',
//           'title'   => 'Number Field with Help',
//           'help'    => 'I am a Tooltip helper. This field important for something.',
//         ),
//         array(
//           'id'      => 'unique_number_4',
//           'type'    => 'number',
//           'title'   => 'Number Field with Default',
//           'default' => '10',
//         ),
//         array(
//           'id'            => 'unique_number_5',
//           'type'          => 'number',
//           'title'         => 'Number Field with Placeholder',
//           'attributes'    => array(
//             'placeholder' => '25'
//           )
//         ),
//         array(
//           'id'      => 'unique_number_6',
//           'type'    => 'number',
//           'title'   => 'Number Field with After-text',
//           'after'   => ' <i class="cs-text-muted">(px)</i>',
//         ),
//       ),
//     ), // end: number options
//     // -----------------------------
//     // begin: icon options       -
//     // -----------------------------
//     array(
//       'name'        => 'icon_options',
//       'title'       => 'Icons',
//       'icon'        => 'fa fa-check',
//       'fields'      => array(
//         array(
//           'id'      => 'unique_icon_1',
//           'type'    => 'icon',
//           'title'   => 'Simple Icon',
//         ),
//         array(
//           'id'      => 'unique_icon_2',
//           'type'    => 'icon',
//           'title'   => 'Icon Field with Description',
//           'desc'    => 'Lets write some description for this icon field.',
//         ),
//         array(
//           'id'      => 'unique_icon_3',
//           'type'    => 'icon',
//           'title'   => 'Icon Field with Help',
//           'help'    => 'I am a Tooltip helper. This field important for something.',
//         ),
//         array(
//           'id'      => 'unique_icon_4',
//           'type'    => 'icon',
//           'title'   => 'Icon Field with Default',
//           'default' => 'fa fa-check',
//         ),
//         array(
//           'id'      => 'unique_icon_5',
//           'type'    => 'icon',
//           'title'   => 'Icon Field with After-text',
//           'after'   => '<p class="cs-text-muted">Lets write some description for this icon field.</i>',
//         ),
//       ),
//     ), // end: icon options
//     // -----------------------------
//     // begin: group options        -
//     // -----------------------------
//     array(
//       'name'      => 'group_options',
//       'title'     => 'Group',
//       'icon'      => 'fa fa-check',
//       'fields'    => array(
//         array(
//           'id'              => 'unique_group_1',
//           'type'            => 'group',
//           'title'           => 'Group Field',
//           'button_title'    => 'Add New',
//           'accordion_title' => 'Add New Field',
//           'fields'          => array(
//             array(
//               'id'          => 'unique_group_1_text',
//               'type'        => 'text',
//               'title'       => 'Text Field',
//             ),
//             array(
//               'id'          => 'unique_group_1_switcher',
//               'type'        => 'switcher',
//               'title'       => 'Switcher Field',
//             ),
//             array(
//               'id'          => 'unique_group_1_textarea',
//               'type'        => 'textarea',
//               'title'       => 'Upload Field',
//             ),
//           )
//         ),
//         array(
//           'id'              => 'unique_group_2',
//           'type'            => 'group',
//           'title'           => 'Group Field with Default',
//           'button_title'    => 'Add New',
//           'accordion_title' => 'Add New Field',
//           'fields'          => array(
//             array(
//               'id'          => 'unique_group_2_text',
//               'type'        => 'text',
//               'title'       => 'Text Field',
//             ),
//             array(
//               'id'          => 'unique_group_2_switcher',
//               'type'        => 'switcher',
//               'title'       => 'Switcher Field',
//             ),
//             array(
//               'id'          => 'unique_group_2_textarea',
//               'type'        => 'textarea',
//               'title'       => 'Upload Field',
//             ),
//           ),
//           'default'                     => array(
//             array(
//               'unique_group_2_text'     => 'Some text',
//               'unique_group_2_switcher' => true,
//               'unique_group_2_textarea' => 'Some content',
//             ),
//             array(
//               'unique_group_2_text'     => 'Some text 2',
//               'unique_group_2_switcher' => true,
//               'unique_group_2_textarea' => 'Some content 2',
//             ),
//           )
//         ),
//         array(
//           'id'              => 'unique_group_3',
//           'type'            => 'group',
//           'title'           => 'Group Field',
//           'info'            => 'You can use any option field on group',
//           'button_title'    => 'Add New Something',
//           'accordion_title' => 'Adding New Thing',
//           'fields'          => array(
//             array(
//               'id'          => 'unique_group_3_text',
//               'type'        => 'upload',
//               'title'       => 'Text Field',
//             ),
//           )
//         ),
//         array(
//           'id'              => 'unique_group_4',
//           'type'            => 'group',
//           'title'           => 'Group Field',
//           'desc'            => 'Accordion title using the ID of the field, for eg. "Text Field 2" using as accordion title here.',
//           'button_title'    => 'Add New',
//           'accordion_title' => 'unique_group_4_text_2',
//           'fields'          => array(
//             array(
//               'id'          => 'unique_group_4_text_1',
//               'type'        => 'text',
//               'title'       => 'Text Field 1',
//             ),
//             array(
//               'id'          => 'unique_group_4_text_2',
//               'type'        => 'text',
//               'title'       => 'Text Field 2',
//             ),
//             array(
//               'id'          => 'unique_group_4_text_3',
//               'type'        => 'text',
//               'title'       => 'Text Field 3',
//             ),
//           )
//         ),
//       ),
//     ), // end: group options
//     // -----------------------------
//     // begin: upload options       -
//     // -----------------------------
//     array(
//       'name'      => 'upload_options',
//       'title'     => 'Upload',
//       'icon'      => 'fa fa-check',
//       'fields'    => array(
//         array(
//           'id'      => 'unique_upload_1',
//           'type'    => 'upload',
//           'title'   => 'Simple Upload',
//         ),
//         array(
//           'id'      => 'unique_upload_2',
//           'type'    => 'upload',
//           'title'   => 'Upload Field with Description',
//           'desc'    => 'Lets write some description for this upload field.',
//         ),
//         array(
//           'id'      => 'unique_upload_3',
//           'type'    => 'upload',
//           'title'   => 'Upload Field with Help',
//           'help'    => 'I am a Tooltip helper. This field important for something.',
//         ),
//         array(
//           'id'      => 'unique_upload_4',
//           'type'    => 'upload',
//           'title'   => 'Upload Field with Default',
//           'default' => 'screenshot-1.png',
//         ),
//         array(
//           'id'      => 'unique_upload_5',
//           'type'    => 'upload',
//           'title'   => 'Upload Field with After-text',
//           'after'   => '<p class="cs-text-muted">You can use default value <strong>get_template_directory_uri()</strong>."/images/screenshot-1.png"</p>',
//         ),
//         array(
//           'id'            => 'unique_upload_6',
//           'type'          => 'upload',
//           'title'         => 'Upload Field with Placeholder',
//           'attributes'    => array(
//             'placeholder' => 'http://'
//           ),
//         ),
//         array(
//           'id'             => 'unique_upload_7',
//           'type'           => 'upload',
//           'title'          => 'Upload Field with Custom Title',
//           'settings'       => array(
//             'button_title' => 'Upload Logo',
//             'frame_title'  => 'Choose a image',
//             'insert_title' => 'Use this image',
//           ),
//         ),
//         array(
//           'id'             => 'unique_upload_8',
//           'type'           => 'upload',
//           'title'          => 'Upload Field with Video',
//           'settings'       => array(
//             'upload_type'  => 'video',
//             'button_title' => 'Upload Video',
//             'frame_title'  => 'Choose a Video',
//             'insert_title' => 'Use This Video',
//           ),
//         ),
//       ),
//     ), // end: upload options
//     // -----------------------------
//     // begin: background options   -
//     // -----------------------------
//     array(
//       'name'      => 'background_options',
//       'title'     => 'Background',
//       'icon'      => 'fa fa-check',
//       'fields'    => array(
//         array(
//           'id'    => 'unique_background_1',
//           'type'  => 'background',
//           'title' => 'Background',
//         ),
//         array(
//           'id'    => 'unique_background_2',
//           'type'  => 'background',
//           'title' => 'Background Field with Description',
//           'desc'  => 'Lets write some description for this background field.',
//           'help'  => 'I am a Tooltip helper. This field important for something.',
//         ),
//         array(
//           'id'           => 'unique_background_3',
//           'type'         => 'background',
//           'title'        => 'Background Field with Default',
//           'default'      => array(
//             'image'      => 'something.png',
//             'repeat'     => 'repeat-x',
//             'position'   => 'center center',
//             'attachment' => 'fixed',
//             'color'      => '#ffbc00',
//           ),
//         ),
//         array(
//           'id'      => 'unique_background_4',
//           'type'    => 'background',
//           'title'   => 'Background Field with Description',
//           'after'   => '<p class="cs-text-muted">Information: There is some description for option.</p> ',
//           'default' => array(
//             'color' => '#222',
//           ),
//         ),
//       ),
//     ), // end: background options
//     // -----------------------------
//     // begin: color picker options -
//     // -----------------------------
//     array(
//       'name'      => 'color_picker_options',
//       'title'     => 'Color Picker',
//       'icon'      => 'fa fa-check',
//       'fields'    => array(
//         array(
//           'id'      => 'unique_color_picker_1',
//           'type'    => 'color_picker',
//           'title'   => 'Color Picker',
//           'default' => '#dd3333',
//         ),
//         array(
//           'id'      => 'unique_color_picker_2',
//           'type'    => 'color_picker',
//           'title'   => 'Color Picker RGBA disabled',
//           'rgba'    => false,
//         ),
//         array(
//           'id'      => 'unique_color_picker_3',
//           'type'    => 'color_picker',
//           'title'   => 'Color Picker Field with Description',
//           'desc'    => 'Lets write some description for this color picker field.',
//         ),
//         array(
//           'id'      => 'unique_color_picker_4',
//           'type'    => 'color_picker',
//           'title'   => 'Color Picker Field with Help',
//           'help'    => 'I am a Tooltip helper. This field important for something.',
//         ),
//         array(
//           'id'      => 'unique_color_picker_5',
//           'type'    => 'color_picker',
//           'title'   => 'Color Picker Field with Default',
//           'default' => 'rgba(0, 0, 255, 0.25)',
//         ),
//         array(
//           'id'      => 'unique_color_picker_6',
//           'type'    => 'color_picker',
//           'title'   => 'Color Picker Field with Default',
//           'after'   => '<p class="cs-text-muted">Information: There is some description for option.</p> ',
//           'default' => 'rgba(0, 255, 0, 0.75)',
//         ),
//       ),
//     ), // end: color picker options
//     // -----------------------------
//     // begin: image select options -
//     // -----------------------------
//     array(
//       'name'      => 'image_select_options',
//       'title'     => 'Image Select',
//       'icon'      => 'fa fa-check',
//       'fields'    => array(
//         array(
//           'id'           => 'unique_image_select_1',
//           'type'         => 'image_select',
//           'title'        => 'Image Select (Checkbox)',
//           'options'      => array(
//             'value-1'    => 'http://codestarframework.com/assets/images/placeholder/150x125-2ecc71.gif',
//             'value-2'    => 'http://codestarframework.com/assets/images/placeholder/150x125-e74c3c.gif',
//             'value-3'    => 'http://codestarframework.com/assets/images/placeholder/150x125-ffbc00.gif',
//             'value-4'    => 'http://codestarframework.com/assets/images/placeholder/150x125-3498db.gif',
//           ),
//         ),
//         array(
//           'id'           => 'unique_image_select_2',
//           'type'         => 'image_select',
//           'title'        => 'Image Select (Checkbox) with Default',
//           'options'      => array(
//             'value-1'    => 'http://codestarframework.com/assets/images/placeholder/150x125-ffbc00.gif',
//             'value-2'    => 'http://codestarframework.com/assets/images/placeholder/150x125-3498db.gif',
//             'value-3'    => 'http://codestarframework.com/assets/images/placeholder/150x125-e74c3c.gif',
//             'value-4'    => 'http://codestarframework.com/assets/images/placeholder/150x125-2ecc71.gif',
//             'value-5'    => 'http://codestarframework.com/assets/images/placeholder/150x125-555555.gif',
//           ),
//           'default'      => 'value-2'
//         ),
//         array(
//           'id'           => 'unique_image_select_3',
//           'type'         => 'image_select',
//           'title'        => 'Image Select (Radio) with Default',
//           'options'      => array(
//             'value-1'    => 'http://codestarframework.com/assets/images/placeholder/150x125-2ecc71.gif',
//             'value-2'    => 'http://codestarframework.com/assets/images/placeholder/150x125-e74c3c.gif',
//             'value-3'    => 'http://codestarframework.com/assets/images/placeholder/150x125-ffbc00.gif',
//             'value-4'    => 'http://codestarframework.com/assets/images/placeholder/150x125-3498db.gif',
//           ),
//           'radio'        => true,
//           'default'      => 'value-3'
//         ),
//         array(
//           'id'           => 'unique_image_select_4',
//           'type'         => 'image_select',
//           'title'        => 'Image Select (Radio) with Default',
//           'options'      => array(
//             'value-1'    => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
//             'value-2'    => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
//             'value-3'    => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
//             'value-4'    => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
//             'value-5'    => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
//             'value-6'    => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
//             'value-7'    => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
//             'value-8'    => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
//           ),
//           'radio'        => true,
//           'default'      => 'value-2'
//         ),
//         array(
//           'id'           => 'unique_image_select_5',
//           'type'         => 'image_select',
//           'title'        => 'Image Select with Multi Select',
//           'options'      => array(
//             'value-1'    => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
//             'value-2'    => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
//             'value-3'    => 'http://codestarframework.com/assets/images/placeholder/80x80-e74c3c.gif',
//             'value-4'    => 'http://codestarframework.com/assets/images/placeholder/80x80-ffbc00.gif',
//             'value-5'    => 'http://codestarframework.com/assets/images/placeholder/80x80-3498db.gif',
//             'value-6'    => 'http://codestarframework.com/assets/images/placeholder/80x80-2ecc71.gif',
//             'value-7'    => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
//             'value-8'    => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
//           ),
//           'multi_select' => true,
//           'default'      => array( 'value-3', 'value-4', 'value-5', 'value-6' )
//         ),
//       ),
//     ), // end: image select options
//     // -----------------------------
//     // begin: typography options   -
//     // -----------------------------
//     array(
//       'name'          => 'typography_options',
//       'title'         => 'Typography',
//       'icon'          => 'fa fa-check',
//       'fields'        => array(
//         array(
//           'id'        => 'unique_typography_1',
//           'type'      => 'typography',
//           'title'     => 'Typography with Default',
//           'default'   => array(
//             'family'  => 'Open Sans',
//             'font'    => 'google', // this is helper for output ( google, websafe, custom )
//             'variant' => '800',
//           ),
//         ),
//         array(
//           'id'        => 'unique_typography_2',
//           'type'      => 'typography',
//           'title'     => 'Typography without Chosen',
//           'default'   => array(
//             'family'  => 'Ubuntu',
//             'font'    => 'google',
//           ),
//           'chosen'    => false,
//         ),
//         array(
//           'id'        => 'unique_typography_3',
//           'type'      => 'typography',
//           'title'     => 'Typography without Chosen/Variant',
//           'default'   => array(
//             'family'  => 'Arial',
//             'font'    => 'websafe',
//           ),
//           'variant'   => false,
//           'chosen'    => false,
//         ),
//       ),
//     ), // end: typography options
//     // -----------------------------
//     // begin: new fields options   -
//     // -----------------------------
//     array(
//       'name'         => 'wysiwyg_options',
//       'title'        => 'Wysiwyg',
//       'icon'         => 'fa fa-check',
//       'fields'       => array(
//         array(
//           'id'       => 'wysiwyg_1',
//           'type'     => 'wysiwyg',
//           'title'    => 'Wysiwyg',
//         ),
//         array(
//           'id'       => 'wysiwyg_2',
//           'type'     => 'wysiwyg',
//           'title'    => 'Wysiwyg with Custom Settings',
//           'settings' => array(
//             'textarea_rows' => 5,
//             'tinymce'       => false,
//             'media_buttons' => false,
//           )
//         ),
//       ),
//     ), // end: new fields options
//     // -----------------------------
//     // begin: image options        -
//     // -----------------------------
//     array(
//       'name'          => 'image_options',
//       'title'         => 'Image',
//       'icon'          => 'fa fa-check',
//       'fields'        => array(
//         array(
//           'id'        => 'image_1',
//           'type'      => 'image',
//           'title'     => 'Image',
//         ),
//         array(
//           'id'        => 'image_2',
//           'type'      => 'image',
//           'title'     => 'Image with After Text',
//           'desc'      => 'Lets write some description for this image field.',
//           'help'      => 'This option field is useful. You will love it!',
//         ),
//         array(
//           'id'        => 'image_3',
//           'type'      => 'image',
//           'title'     => 'Image with Custom Title',
//           'add_title' => 'Add Logo',
//         ),
//       ),
//     ), // end: image options
//     // -----------------------------
//     // begin: gallery options      -
//     // -----------------------------
//     array(
//       'name'            => 'gallery_options',
//       'title'           => 'Gallery',
//       'icon'            => 'fa fa-check',
//       'fields'          => array(
//         array(
//           'id'          => 'gallery_1',
//           'type'        => 'gallery',
//           'title'       => 'Gallery',
//         ),
//         array(
//           'id'          => 'gallery_2',
//           'type'        => 'gallery',
//           'title'       => 'Gallery with Custom Title',
//           'add_title'   => 'Add Images',
//           'edit_title'  => 'Edit Images',
//           'clear_title' => 'Remove Images',
//         ),
//         array(
//           'id'          => 'gallery_3',
//           'type'        => 'gallery',
//           'title'       => 'Gallery with Custom Title',
//           'desc'        => 'Lets write some description for this image field.',
//           'help'        => 'This option field is useful. You will love it!',
//           'add_title'   => 'Add Image(s)',
//           'edit_title'  => 'Edit Image(s)',
//           'clear_title' => 'Clear Image(s)',
//         ),
//       ),
//     ), // end: gallery options
//     // -----------------------------
//     // begin: sorter options       -
//     // -----------------------------
//     array(
//       'name'     => 'sorter_options',
//       'title'    => 'Sorter',
//       'icon'     => 'fa fa-check',
//       'fields'   => array(
//         array(
//           'id'             => 'sorter_1',
//           'type'           => 'sorter',
//           'title'          => 'Sorter',
//           'default'        => array(
//             'enabled'      => array(
//               'bmw'        => 'BMW',
//               'mercedes'   => 'Mercedes',
//               'volkswagen' => 'Volkswagen',
//             ),
//             'disabled'     => array(
//               'ferrari'    => 'Ferrari',
//               'mustang'    => 'Mustang',
//             ),
//           ),
//         ),
//         array(
//           'id'             => 'sorter_2',
//           'type'           => 'sorter',
//           'title'          => 'Sorter',
//           'default'        => array(
//             'enabled'      => array(
//               'blue'       => 'Blue',
//               'green'      => 'Green',
//               'red'        => 'Red',
//               'yellow'     => 'Yellow',
//               'orange'     => 'Orange',
//               'ocean'      => 'Ocean',
//             ),
//             'disabled'     => array(
//               'black'      => 'Black',
//               'white'      => 'White',
//             ),
//           ),
//           'enabled_title'  => 'Active Colors',
//           'disabled_title' => 'Deactive Colors',
//         ),
//       ),
//     ), // end: sorter options
//     // -----------------------------
//     // begin: sorter options       -
//     // -----------------------------
//     array(
//       'name'     => 'fieldset_options',
//       'title'    => 'Fieldset',
//       'icon'     => 'fa fa-check',
//       'fields'   => array(
//         array(
//           'id'        => 'fieldset_1',
//           'type'      => 'fieldset',
//           'title'     => 'Fieldset Field',
//           'fields'    => array(
//             array(
//               'id'    => 'fieldset_1_text',
//               'type'  => 'text',
//               'title' => 'Text Field',
//             ),
//             array(
//               'id'    => 'fieldset_1_upload',
//               'type'  => 'upload',
//               'title' => 'Upload Field',
//             ),
//             array(
//               'id'    => 'fieldset_1_textarea',
//               'type'  => 'textarea',
//               'title' => 'Textarea Field',
//             ),
//           ),
//         ),
//         array(
//           'id'        => 'fieldset_2',
//           'type'      => 'fieldset',
//           'title'     => 'Fieldset Field with Default',
//           'fields'    => array(
//             array(
//               'type'    => 'subheading',
//               'content' => 'Title of Fieldset',
//             ),
//             array(
//               'id'      => 'fieldset_2_text',
//               'type'    => 'text',
//               'title'   => 'Text Field',
//             ),
//             array(
//               'id'      => 'fieldset_2_checkbox',
//               'type'    => 'checkbox',
//               'title'   => 'Checkbox Field',
//               'label'   => 'Are you sure?',
//             ),
//             array(
//               'id'      => 'fieldset_2_textarea',
//               'type'    => 'textarea',
//               'title'   => 'Upload Field',
//             ),
//           ),
//           'default'   => array(
//             'fieldset_2_text'     => 'Hello',
//             'fieldset_2_checkbox' => true,
//             'fieldset_2_textarea' => 'Do stuff',
//           )
//         ),
//       ),
//     ), // end: sorter options
//     // -----------------------------
//     // begin: others options       -
//     // -----------------------------
//     array(
//       'name'        => 'others_options',
//       'title'       => 'Others',
//       'icon'        => 'fa fa-check',
//       'fields'      => array(
//         array(
//           'type'    => 'heading',
//           'content' => 'Heading',
//         ),
//         array(
//           'id'      => 'unique_others_text_1',
//           'type'    => 'text',
//           'title'   => 'Others Text Field 1',
//         ),
//         array(
//           'id'      => 'unique_others_text_2',
//           'type'    => 'text',
//           'title'   => 'Others Text Field 2',
//         ),
//         array(
//           'type'    => 'subheading',
//           'content' => 'Sub Heading',
//         ),
//         array(
//           'id'      => 'unique_others_text_3',
//           'type'    => 'text',
//           'title'   => 'Others Text Field 3',
//         ),
//         array(
//           'type'    => 'notice',
//           'class'   => 'success',
//           'content' => 'Notice Success: Lorem Ipsum, a random Lipsum generator.',
//         ),
//         array(
//           'id'      => 'unique_others_text_4',
//           'type'    => 'text',
//           'title'   => 'Others Text Field 4',
//         ),
//         array(
//           'type'    => 'notice',
//           'class'   => 'info',
//           'content' => 'Notice Info: Lorem Ipsum, a random Lipsum generator.',
//         ),
//         array(
//           'id'      => 'unique_others_text_5',
//           'type'    => 'text',
//           'title'   => 'Others Text Field 5',
//         ),
//         array(
//           'type'    => 'notice',
//           'class'   => 'warning',
//           'content' => 'Notice Warning: Lorem Ipsum, a random Lipsum generator.',
//         ),
//         array(
//           'id'      => 'unique_others_text_6',
//           'type'    => 'text',
//           'title'   => 'Others Text Field 6',
//         ),
//         array(
//           'type'    => 'notice',
//           'class'   => 'danger',
//           'content' => 'Notice Danger: Lorem Ipsum, a random Lipsum generator.',
//         ),
//         array(
//           'id'      => 'unique_others_text_7',
//           'type'    => 'text',
//           'title'   => 'Others Text Field 7',
//         ),
//         array(
//           'id'      => 'unique_others_text_8',
//           'type'    => 'text',
//           'title'   => 'Others Text Field 8',
//         ),
//         array(
//           'type'    => 'content',
//           'content' => 'Content Field: It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
//         ),
//         array(
//           'id'      => 'unique_others_text_9',
//           'type'    => 'text',
//           'title'   => 'Others Text Field 9',
//           'after'   => '<p class="cs-text-warning">This field using debug=true</p>',
//           'debug'   => true,
//         ),
//       ),
//     ), // end: other options
//   )
// );

// ------------------------------
// license                      -
// ------------------------------
// $options[]   = array(
//   'name'     => 'license_section',
//   'title'    => 'License',
//   'icon'     => 'fa fa-info-circle',
//   'fields'   => array()
// );

CSFramework::instance( $settings, $options );
