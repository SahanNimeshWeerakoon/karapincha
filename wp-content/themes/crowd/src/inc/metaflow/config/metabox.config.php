<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();

/*===================================
=            Casestudies            =
===================================*/

$options[]    = array(
  'id'        => 'casestudy_startup',
  'title'     => 'Startup Details',
  'post_type' => 'casestudies',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'author',
      'fields' => array(

        array(
          'id'          => 'startup_name',
          'type'        => 'text',
          'title'       => 'Startup Name',
        ),

        array(
          'id'            => 'startup_logo',
          'type'          => 'upload',
          'title'         => 'Startup Logo',
          // 'default'       => 'image_select.png',
          'settings'      => array(
           // 'upload_type'  => 'png, svg',
           'button_title' => 'Upload',
           'frame_title'  => 'Select a logo',
           'insert_title' => 'Use this logo',
          ),
          'after' => '<p><i class="fa fa-compress"></i> Image size (80x80) | <i class="fa fa-file-image-o"></i> Type (PNG or JPG)</p>'
        ),

        array(
          'id'            => 'startup_banner',
          'type'          => 'upload',
          'title'         => 'Startup Banner',
          // 'default'       => 'image_select.png',
          'settings'      => array(
           // 'upload_type'  => 'png, svg',
           'button_title' => 'Upload',
           'frame_title'  => 'Select a banner',
           'insert_title' => 'Use this banner',
          ),
          'after' => '<p><i class="fa fa-compress"></i> Recommended Image size (1920x570) | <i class="fa fa-file-image-o"></i> Type (PNG or JPG)</p>'
        ),
      ),
    ),

  ),
);

$options[]    = array(
  'id'        => 'casestudy_author',
  'title'     => 'Author Details',
  'post_type' => 'casestudies',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'author',
      'fields' => array(

        array(
          'id'          => 'author_name',
          'type'        => 'text',
          'title'       => 'Name',
          'default'     => 'John Doe',
        ),

        array(
          'id'          => 'author_title',
          'type'        => 'text',
          'title'       => 'Title',
          'default'     => 'Secretary',
        ),

        array(
          'id'            => 'author_picture',
          'type'          => 'upload',
          'title'         => 'Author Picture',
          'default'       => THEME_IMAGES.'/user-sample.png',
          // 'default'       => 'image_select.png',
          'settings'      => array(
           // 'upload_type'  => 'png, svg',
           'button_title' => 'Upload',
           'frame_title'  => 'Select picture',
           'insert_title' => 'Use this picture',
          ),
        ),
      ),
    ),

  ),
);

/*=====  End of Casestudies  ======*/


/*=================================
=            Campaigns            =
=================================*/

$options[]    = array(
  'id'        => 'campaign_data',
  'title'     => 'Campaign Details',
  'post_type' => 'campaigns',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    // Gallery
    array(
      'name'   => 'campaign_images',
      'title' => 'Gallery',
      'icon'  => 'fa fa-file-image-o',
      'fields' => array(

        array(
          'id'    => 'gallery',
          'type'  => 'gallery',
          'title' => false,
          'after' => '<p><i class="fa fa-compress"></i> Image size (1024x768) | <i class="fa fa-file-image-o"></i> Type (PNG or JPG)</p>'
        ),
      ),
    ),

    // Startup
    array(
      'name'   => 'startup',
      'title' => 'Startup Details',
      'icon'  => 'fa fa-cog',
      'fields' => array(

        array(
          'id'          => 'startup_name',
          'type'        => 'text',
          'title'       => 'Startup Name',
        ),

        array(
          'id'            => 'startup_logo',
          'type'          => 'upload',
          'title'         => 'Startup Logo',
          // 'default'       => 'image_select.png',
          'settings'      => array(
           // 'upload_type'  => 'png, svg',
           'button_title' => 'Upload',
           'frame_title'  => 'Select a logo',
           'insert_title' => 'Use this logo',
          ),
          'after' => '<p><i class="fa fa-compress"></i> Image size (2560×1440) | <i class="fa fa-file-image-o"></i> Type (PNG or JPG)</p>'
        ),

        array(
          'id'         => 'startup_verify',
          'type'       => 'radio',
          'title'      => 'Verified',
          'options'    => array(
            'yes'    => 'Yes',
            'no'     => 'No',
          ),
          'default'    => 'no'
        ),
      ),
    ),

    // Investment
    array(
      'name'   => 'investment',
      'title' => 'Investment',
      'icon'  => 'fa fa-cog',
      'fields' => array(

        // array(
        //   'id'         => 'campaign_status',
        //   'type'       => 'select',
        //   'title'      => 'Status',
        //   'options'    => array(
        //     'pledge'      => 'Pledge',
        //     'funded' => 'Funded',
        //   )
        // ),
        array(
          'type'    => 'notice',
          'class'   => 'warning',
          'content' => '<b>If the campaign has reached it\'s Investment Sought and is Funded, Campaign blocks will be <i>Un-clickable</i> from Homepage and the other pages, unless accessed directly from the url</b>',
        ),

        array(
          'id'          => 'investment_sought',
          'type'        => 'text',
          'title'       => 'Investment Sought',
          'desc'    => '<i class="fa fa-warning"></i> Do not add commas.',
          // 'help'    => 'Write something',
          'addon'         => 'LKR',
        ),

        // array(
        //   'id'          => 'business_valuation',
        //   'type'        => 'text',
        //   'title'       => 'Business Valuation',
        //   'desc'    => '<i class="fa fa-warning"></i> Do not add commas.',
        //   'addon'         => 'LKR',
        // ),

        array(
          'id'          => 'equity_on_offer',
          'type'        => 'text',
          'title'       => 'Equity On Offer',
          'addon'         => '%',
        ),

        array(
          'id'          => 'investment_received',
          'type'        => 'text',
          'title'       => 'Investment Received',
          'desc'    => '<i class="fa fa-warning"></i> Do not add commas.',
          'addon'         => 'LKR',
        ),

        array(
          'id'          => 'minimum_investment',
          'type'        => 'text',
          'title'       => 'Minimum Investment',
          'desc'    => '<i class="fa fa-warning"></i> Do not add commas.',
          'addon'         => 'LKR',
        ),
      ),
    ),

    // Team
    array(
      'name'   => 'team',
      'title' => 'Team',
      'icon'  => 'fa fa-cog',
      'fields' => array(

        array(
          'id'              => 'team',
          'type'            => 'group',
          'title'           => 'Team Members',
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Member',
          'fields'          => array(
            array(
              'id'    => 'name',
              'type'  => 'text',
              'title' => 'Name',
            ),
            array(
              'id'    => 'picture',
              'type'  => 'upload',
              'title' => 'Picture',
              'after' => '<p><i class="fa fa-compress"></i> Image size (100x100) | <i class="fa fa-file-image-o"></i> Type (PNG or JPG)</p>'
            ),
            array(
              'id'    => 'title',
              'type'  => 'text',
              'title' => 'Title',
            ),
            array(
              'id'    => 'education',
              'type'  => 'text',
              'title' => 'Education',
            ),
            array(
              'id'         => 'network',
              'type'       => 'select',
              'title'      => 'Network',
              'options'    => array(
                'linkedin'      => 'LinkedIn',
                'facebook' => 'Facebook',
                'twitter'     => 'Twitter',
                'other'  => 'Other'
              )
            ),
            array(
              'id'    => 'profile_link',
              'type'  => 'text',
              'title' => 'Network Link',
            ),
          ),
        ),
      ),
    ),

    // Updates
    array(
      'name'   => 'updates',
      'title' => 'Updates',
      'icon'  => 'fa fa-cog',
      'fields' => array(

        array(
          'id'              => 'update',
          'type'            => 'group',
          'title'           => 'Updates',
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Update',
          'fields'          => array(
            array(
              'id'    => 'date',
              'type'  => 'text',
              'title' => 'Date',
            ),
            array(
              'id'    => 'title',
              'type'  => 'text',
              'title' => 'Title',
            ),
            array(
              'id'    => 'description',
              'type'  => 'textarea',
              'title' => 'Description',
            ),
          ),
        ),
      ),
    ),
  ),
);

/*=====  End of Campaigns  ======*/


/*============================
=            News            =
============================*/

$options[]    = array(
  'id'        => 'news_data',
  'title'     => 'News Details',
  'post_type' => 'news',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    // Startup
    // array(
    //   'name'   => 'startup',
    //   'title' => 'Startup Details',
    //   'icon'  => 'fa fa-cog',
    //   'fields' => array(

    //     array(
    //       'id'          => 'startup_name',
    //       'type'        => 'text',
    //       'title'       => 'Startup Name',
    //     ),

    //     array(
    //       'id'            => 'startup_logo',
    //       'type'          => 'upload',
    //       'title'         => 'Startup Logo',
    //       // 'default'       => 'image_select.png',
    //       'settings'      => array(
    //        // 'upload_type'  => 'png, svg',
    //        'button_title' => 'Upload',
    //        'frame_title'  => 'Select a logo',
    //        'insert_title' => 'Use this logo',
    //       ),
    //     ),

    //     array(
    //       'id'         => 'startup_verify',
    //       'type'       => 'radio',
    //       'title'      => 'Verified',
    //       'options'    => array(
    //         'yes'    => 'Yes',
    //         'no'     => 'No',
    //       ),
    //       'default'    => 'no'
    //     ),
    //   ),
    // ),

    // // Investment
    // array(
    //   'name'   => 'investment',
    //   'title' => 'Investment',
    //   'icon'  => 'fa fa-cog',
    //   'fields' => array(

    //     // array(
    //     //   'id'         => 'campaign_status',
    //     //   'type'       => 'select',
    //     //   'title'      => 'Status',
    //     //   'options'    => array(
    //     //     'pledge'      => 'Pledge',
    //     //     'funded' => 'Funded',
    //     //   )
    //     // ),

    //     array(
    //       'id'          => 'investment_sought',
    //       'type'        => 'text',
    //       'title'       => 'Investment Sought',
    //       'desc'    => '<i class="fa fa-warning"></i> Do not add commas.',
    //       // 'help'    => 'Write something',
    //       'addon'         => 'LKR',
    //     ),

    //     array(
    //       'id'          => 'business_valuation',
    //       'type'        => 'text',
    //       'title'       => 'Business Valuation',
    //       'desc'    => '<i class="fa fa-warning"></i> Do not add commas.',
    //       'addon'         => 'LKR',
    //     ),

    //     array(
    //       'id'          => 'equity_on_offer',
    //       'type'        => 'text',
    //       'title'       => 'Equity On Offer',
    //       'addon'         => '%',
    //     ),

    //     array(
    //       'id'          => 'investment_received',
    //       'type'        => 'text',
    //       'title'       => 'Investment Received',
    //       'desc'    => '<i class="fa fa-warning"></i> Do not add commas.',
    //       'addon'         => 'LKR',
    //     ),

    //     array(
    //       'id'          => 'minimum_investment',
    //       'type'        => 'text',
    //       'title'       => 'Minimum Investment',
    //       'desc'    => '<i class="fa fa-warning"></i> Do not add commas.',
    //       'addon'         => 'LKR',
    //     ),
    //   ),
    // ),

    // // Team
    // array(
    //   'name'   => 'team',
    //   'title' => 'Team',
    //   'icon'  => 'fa fa-cog',
    //   'fields' => array(

    //     array(
    //       'id'              => 'team',
    //       'type'            => 'group',
    //       'title'           => 'Team Members',
    //       'button_title'    => 'Add New',
    //       'accordion_title' => 'Add New Member',
    //       'fields'          => array(
    //         array(
    //           'id'    => 'name',
    //           'type'  => 'text',
    //           'title' => 'Name',
    //         ),
    //         array(
    //           'id'    => 'picture',
    //           'type'  => 'upload',
    //           'title' => 'Picture',
    //         ),
    //         array(
    //           'id'    => 'title',
    //           'type'  => 'text',
    //           'title' => 'Title',
    //         ),
    //         array(
    //           'id'    => 'education',
    //           'type'  => 'text',
    //           'title' => 'Education',
    //         ),
    //         array(
    //           'id'    => 'profile_link',
    //           'type'  => 'text',
    //           'title' => 'Profile Link',
    //         ),
    //       ),
    //     ),
    //   ),
    // ),

    // // Updates
    // array(
    //   'name'   => 'updates',
    //   'title' => 'Updates',
    //   'icon'  => 'fa fa-cog',
    //   'fields' => array(

    //     array(
    //       'id'              => 'update',
    //       'type'            => 'group',
    //       'title'           => 'Updates',
    //       'button_title'    => 'Add New',
    //       'accordion_title' => 'Add New Update',
    //       'fields'          => array(
    //         array(
    //           'id'    => 'date',
    //           'type'  => 'text',
    //           'title' => 'Date',
    //         ),
    //         array(
    //           'id'    => 'title',
    //           'type'  => 'text',
    //           'title' => 'Title',
    //         ),
    //         array(
    //           'id'    => 'description',
    //           'type'  => 'textarea',
    //           'title' => 'Description',
    //         ),
    //       ),
    //     ),
    //   ),
    // ),
  ),
);

/*=====  End of News  ======*/


CSFramework_Metabox::instance( $options );
