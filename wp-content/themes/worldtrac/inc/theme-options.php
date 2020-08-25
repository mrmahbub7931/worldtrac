<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.\


// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $prefix = 'techmix';
  
    //
    // Create options
    CSF::createOptions( $prefix, array(
        'menu_title'      => 'Theme Panel',
        'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
        'menu_slug'       => 'tm-panel',
        'ajax_save'       => false,
        'show_reset_all'  => false,
        'framework_title' => 'theme panel <small>by techmix</small>',
    ) );
  
    //
    // Create a section
    CSF::createSection( $prefix, array(
      'title'  => 'Header option',
      'fields' => array(
        array(
            'id'          => 'tobar-menu-left',
            'type'        => 'select',
            'title'       => 'Select menu',
            'chosen'      => true,
            'multiple'    => true,
            'placeholder' => 'Select a Menu',
            'options'     =>'menus',
        ),
        array(
            'id'        => '_want_logo',
            'type'      => 'switcher',
            'default'   => false,
            'title' => esc_html__('Do you want to show logo?','tm'),
        ),
        array(
            'id'    => 'logo',
            'type'  => 'upload',
            'title' => esc_html__('Upload Logo','tm'),
            'dependency'   => array( '_want_logo', '==', true ),
        ),
        array(
            'id'    => 'logo_text',
            'type'  => 'text',
            'title' => esc_html__('Enter your logo text','tm'),
            'dependency'   => array( '_want_logo', '!=', true ),
        ),
        // A Heading
        array(
            'type'    => 'heading',
            'content' => 'Start Header Right Position Field',
        ),
        array(
            'id'          => 'header-page',
            'type'        => 'select',
            'title'       => 'Select with Page',
            'placeholder' => 'Select a Page',
            'options'     => 'pages',
        ),
        array(
            'id'              => 'top_social_link',
            'type'            => 'group',
            'title'           => esc_html__('Social Network','tm'),
            'button_title'    => esc_html__('Add Social Item','tm'),
            'accordion_title' => esc_html__('Add New Social Network','tm'),
            'fields'          => array(
                array(
                    'id'    => 'link',
                    'type'  => 'text',
                    'title' => esc_html__( "Social Link", "tm" ),
                ),
                array(
                    'id'    => 'icon',
                    'type'  => 'icon',
                    'title' => 'Choose your social icon',
                ),
                
            ),
        )
      )
    ) );
  
    //
    // Create a section
    CSF::createSection( $prefix, array(
      'title'  => 'Home page',
      'fields' => array(
  
        // A textarea field
        array(
            'id'     => 'home-slide',
            'type'   => 'repeater',
            'title'  => 'Hero Slide',
            'fields' => array(
          
              array(
                'id'    => 'bg-image',
                'type'  => 'upload',
                'title' => 'Slide Image'
              ),
              array(
                'id'      =>  'slide-heading',
                'type'    =>  'text',
                'title'   =>    'Slide Headline'
            ),
            array(
                'id'      =>  'slide-btn',
                'type'    =>  'text',
                'title'   =>    'Slide Button Text'
            ),
            
            array(
                'id'        =>  'slide-control-text',
                'type'      =>  'text',
                'title'     =>  'Slide Control Button Text',
                'default'   =>  'Intro'
            ),

          
            ),
          ),
          array(
            'id'          => 'query_category_one',
            'type'        => 'select',
            'title'       => 'Select with categories',
            'placeholder' => 'Select a category',
            'options'     => 'categories',
          ),
      )
    ) );
    
    // Create a section
    CSF::createSection( $prefix, array(
      'title'  => 'Blog page',
      'fields' => array(
  
        // A textarea field
        array(
            'id'          => 'blog-featured-cat',
            'type'        => 'select',
            'chosen'      => true,
            'multiple'    => true,
            'title'       => 'Select with categories for Blog Featured',
            'placeholder' => 'Select category',
            'options'     => 'categories',
          ),
        
        array(
            'id'          => 'blog-three-cat',
            'type'        => 'select',
            'chosen'      => true,
            'multiple'    => true,
            'title'       => 'Select with categories Display Three posts',
            'placeholder' => 'Select category',
            'options'     => 'categories',
          ),
        array(
            'id'          => 'blog-two-cat',
            'type'        => 'select',
            'chosen'      => true,
            'multiple'    => true,
            'title'       => 'Select with categories Display Two posts',
            'placeholder' => 'Select category',
            'options'     => 'categories',
          ),


        
      )
    ) );
    
    // Create a section
    CSF::createSection( $prefix, array(
        'title'  => 'Footer option',
        'fields' => array(
            // A Heading
            array(
                'type'    => 'heading',
                'content' => 'Start Footer Top Field',
            ),
            
            array(
                'id'    => 'footer-text',
                'type'  => 'textarea',
                'title' => 'Footer Text',
            ),
            array(
                'type'    => 'heading',
                'content' => 'Start Footer Middle Field',
            ),
            array(
                'id'    => 'footer-logo',
                'type'  => 'upload',
                'title' => 'Footer Logo',
            ),
            array(
                'id'              => 'bottom_social_link',
                'type'            => 'group',
                'title'           => esc_html__('Social Network','tm'),
                'button_title'    => esc_html__('Add Social Item','tm'),
                'accordion_title' => esc_html__('Add New Social Network','tm'),
                'fields'          => array(
                        array(
                            'id'    => 'link',
                            'type'  => 'text',
                            'title' => esc_html__( "Social Link", "tm" ),
                        ),
                        array(
                            'id'    => 'icon',
                            'type'  => 'icon',
                            'title' => 'Choose your social icon',
                        ),
                    ),
                ),
                
                array(
                    'type'    => 'heading',
                    'content' => 'Start Footer Bottom Field',
                ),
                array(
                    'id'          => 'footer_menu',
                    'type'        => 'select',
                    'title'       => 'Select menu',
                    'chosen'      => true,
                    'multiple'    => true,
                    'placeholder' => 'Select a Menu',
                    'options'     =>'menus',
                ),
        )
      ) );
  
  }
  


