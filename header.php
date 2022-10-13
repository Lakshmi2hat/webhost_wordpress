<?php
/**
 * Header file for the Webhost WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Webhost
 * @since Webhost 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

  <meta charset="<?php bloginfo("charset");?>">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" >

  <?php wp_head(); ?>
  
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" />

  <title><?php bloginfo('name') ?></title>
  
</head>
<body>
<main class="page-wrap">
    <header>
      <nav>
        <div class="navbar">
          <div class="container">
            <div class="nav-items w-100 align-items-center justify-content-between">
              <?php $logoimg = get_header_image(); ?>
              <div class="brand-name">
                <a href="<?php echo site_url(); ?>" class="brand-logo">
                <img src="<?php echo $logoimg; ?>" alt="Logo" width="91" height="60">
                </a>

              </div>
              <div class="menu-btn" id="menu">
                <span class="icons icon-menu-icon"></span>
                <span class="icons icon-close-icon"></span>

              </div>
              <div class="nav-menu justify-content-between w-100 align-items-center">
                <?php
                  wp_nav_menu(array(
                    'menu_class' => 'menu-items menu-left',
                    'theme_location' => 'header_left_menu',
                    'menu_id' => 'header_left_menu',
                    'container' => 'span'
                  ))
                ?>
                <?php
                  wp_nav_menu(array(
                    'theme_location' => 'header_center_menu',
                    'menu_id' => 'header_center_menu',
                    'items_wrap' => '<ul class="menu-items menu-center justify-content-between">%3$s</ul>',
                    'container' => ''
                  ))
                ?>
                <?php
                  wp_nav_menu(array(
                    'theme_location' => 'header_right_menu',
                    'menu_id' => 'header_right_menu',
                    'items_wrap' => '<ul class="menu-items menu-right justify-content-between mb-0">%3$s</ul>',
                    'container' => ''
                  ))
                ?>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>