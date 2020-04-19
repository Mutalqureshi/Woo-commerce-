<?php
global $fdata;
?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <head >
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    
    <?php if( $fdata['favicon-logo']) {echo '<link rel="shortcut icon" href="'.$fdata['favicon-logo']['url'].'" />';}?>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Roboto:400,500,700,900&display=swap" rel="stylesheet">

    <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
  <?php echo wp_head(); ?>
  

<!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148388307-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());  gtag('config', 'UA-148388307-1');
  </script>
  </head>


  <body <?php body_class(); ?>>
    <!--top-head-->
    
    <header>
      <div class="top-bar">
            <div class="container">
               <div class="row">
                <div class="col-md-5">
                  <div class="topbar_details">
                    <ul>
                      <li><i class="fas fa-envelope"></i><a href="mailto:<?php echo do_shortcode('[email]'); ?>"><?php echo do_shortcode('[email]'); ?></a></li>
                      <li>|</li>
                      <li><i class="fas fa-phone fa-flip-horizontal"></i><a href="tel:<?php echo do_shortcode('[phone]'); ?>" ><?php echo do_shortcode('[phone]'); ?></a></li>
                    </ul>
                  </div>
                </div><!-- col md 6 -->

                <div class="col-md-7">
                    <div class="social-icon">
                       <ul class="first_s_ul">
                         
                          <?php if ( is_user_logged_in() ) {
            $current_user = wp_get_current_user();
            $name_label = ($current_user->user_firstname == "" ? /*$current_user->user_email*/'' : $current_user->user_firstname);
                          ?>
                         
                      <li>
                        <ul class="sepraterLi">
                       <li>  <?php echo ($name_label ? '<i class="fa fa-user fa-fw"></i> Hello, ' . $name_label . '!' : ''); ?> </li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>my-account/">Corporate Account</a></li>
                            <li>|</li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>my-account/customer-logout/">Log Out</a></li>
                        </ul>
                    </li>
                    <?php }else { ?>
                    <li>
                        <ul class="sepraterLi">
                        <li><i class="fa fa-key fa-fw"></i> <a href="<?php echo esc_url( home_url( '/' ) ); ?>my-account/">Register</a></li>
                            <li>|</li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>my-account/">Login</a></li>
                        </ul>
                      </li>
                    <?php } ?>
                       </ul>
                       <ul>
  <?php if( $fdata['linkedin']) {?><li><a target="_blank" href="<?php echo $fdata['linkedin']; ?>"><i class="fab fa-linkedin-in"></i>&nbsp;</a></li><?php } ?>

  <?php if( $fdata['facebook']) {?><li><a target="_blank" href="<?php echo $fdata['facebook']; ?>"><i class="fab fa-facebook-f"></i>&nbsp;</a></li><?php } ?>

  <?php if( $fdata['twitter']) {?><li><a target="_blank" href="<?php echo $fdata['twitter']; ?>"><i class="fab fa-twitter"></i>&nbsp;</a></li><?php } ?>

  <?php if( $fdata['google-plus']) {?><li><a target="_blank" href="<?php echo $fdata['google-plus']; ?>"><i class="fab fa-google-plus"></i>&nbsp;</a></li><?php } ?>

  <?php if( $fdata['youtube']) {?><li><a target="_blank" href="<?php echo $fdata['youtube']; ?>"><i class="fa fa-youtube"></i>&nbsp;</a></li><?php } ?>

  <?php if( $fdata['instagram']) {?><li><a target="_blank" href="<?php echo $fdata['instagram']; ?>"><i class="fab fa-instagram"></i>&nbsp;</a></li><?php } ?>
                        </ul>
                        
                    </div><!-- social icon-->
                </div><!--col-->
              </div><!--row-->

            </div><!-- container-->
      </div><!--top bar -->
      <div class="main_header">
        <div class="container">
          <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-9 pd_c9">
                  <div class="logo">
                      <?php if($fdata['site-logo']['url']){
                      $logo = $fdata['site-logo']['id'];
                        $image_alt = get_post_meta($logo, '_wp_attachment_image_alt', TRUE);
                      echo '<a href="'.get_site_url().'" class="header-logo"><img src="'.$fdata['site-logo']['url'].'" alt="'.$image_alt.'"></a>';
                        }
                      ?>  
                  </div>
                </div><!-- col-lg-3 col-md-6 col-sm-6 col-9-->
                <div class="col-lg-9 col-md-6 col-sm-6 col-3 header_nav_i">
                     
        
                      <div class="nav-wrapper">
                      <?php 
                        if ( has_nav_menu( 'menu-1' )){
                          wp_nav_menu(array( 
                          'container' => false,
                          'depth'             => 3,
                          'menu_class'=> 'main-menu',
                          'menu_id'=> '',
                          'theme_location' => 'menu-1'
                          )); 
                        } 
                        else{
                          echo "<p>Assign Any Menu To Header Main Menu</p>";
                        }
                      ?>  
                     
                      </div>
        
                      <div class="cart_bar">
                        <ul>
                          <li class="md_t">
                              <div class="but_side_panel">
                                  <a class="btn-open">
                                    <div class="" onclick="myFunction(this)">
                                      <div class="bar1"></div>
                                      <div class="bar2"></div>
                                      <div class="bar3"></div>
                                      <div class="bar4"></div>
                                    </div>
                                    <!-- <i class="fas fa-bars"></i> -->
                                  </a>
                              </div>
                          </li>
                          <!-- <li class="md_t"><img src="<?php //echo get_template_directory_uri()?>/img/bars.jpg" alt=""></li> -->
                          <li>

            <a class="new" href="<?php echo wc_get_cart_url(); ?>">           
                        <img src="<?php echo get_template_directory_uri()?>/img/cart.jpg" alt="">
                        <span class="cart_quantity new"><?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></span>
            </a>

           
           <?php 
           /*   <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a>

             */ ?>

                          </li>
                        </ul>
                      </div>

                      <div class="res-menu">  
                         <?php echo do_shortcode( '[responsive_menu]' ); ?>
                      </div>
                </div><!--col-md-9-->
              </div><!-- row -->
        </div><!-- container-->
      </div><!-- main header-->
    </header>


<div class="cus_overlay">
  <div class="container">
    <div class="overlay_nav">
                      <?php 
                        if ( has_nav_menu( 'menu-3' )){
                          wp_nav_menu(array( 
                          'container' => false,
                          'depth'             => 3,
                          'menu_class'=> 'main-menu',
                          'menu_id'=> '',
                          'theme_location' => 'menu-3'
                          )); 
                        } 
                        else{
                          echo "<p>Assign Any Menu To Header Main Menu</p>";
                        }
                      ?>  
                     
    </div>
  </div>
</div>
