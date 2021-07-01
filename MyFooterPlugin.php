<?php
if (!defined('ABSPATH')) {
  exit;
}
?>

<?php


/*
Plugin Name: MyFooter
 
Plugin URI: https://github.com/MohssineElAttari
 
Description: Customize Your Own Footer .
 
Version: 1.0.0
 
Author: Mohssine Elattari
 
Author URI: https://github.com/MohssineElAttari
 
License: GPLv2 or later
 
Text Domain: myFooter 
 
*/

?>

<?php
add_action('admin_menu', 'my_admin_menu');

function my_admin_menu()
{

  // add_menu_page('Footer', 'MyCustomFooter', 'manage_options','footer_setting_page','myFooter_edit','dashicons-chart-area', 56);   
  
  // add_submenu_page(
  //     'footer_setting_page',               // parent slug
  //     'Footer',                      // page title
  //     'Footer',                      // menu title
  //     'manage_options',                   // capability
  //     'footer_setting_page',               // slug
  //     'myFooter_edit' // callback
  // ); 

  add_menu_page('Footer', 'MyCustomFooter', 'manage_options', 'footer_setting_page', 'myFooter_edit', 'dashicons-index-card', 100);
  //  add_submenu_page( 'footer_setting_page', 'Page title', 'Sub-menu title', 'manage_options', 'child-submenu-handle', 'my_magic_function'); 
}


function myFooter_edit()
{
  // echo '<h1> please fill all the fields</h1>';
  require_once 'custom-footer.php';
}

add_action('wp_footer', 'footer_text_admin_page');

function footer_text_admin_page()
{
  echo "
    <footer class='bg-light text-center text-white'>
  <!-- Grid container -->
  <div class='container p-4 pb-0'>
    <!-- Section: Social media -->
    <section class='mb-4'>
      <!-- Facebook -->
      <a
        class='btn btn-primary btn-floating m-1'
        style='background-color: #3b5998;'
        href='" . get_option('facebook-icon') . "'
        role='button'
        ><i class='fab fa-facebook-f'></i
      ></a>

      <!-- Twitter -->
      <a
        class='btn btn-primary btn-floating m-1'
        style='background-color: #55acee;'
        href='" . get_option('twitter-icon') . "'
        role='button'
        ><i class='fab fa-twitter'></i
      ></a>

      <!-- Google -->
      <a
        class='btn btn-primary btn-floating m-1'
        style='background-color: #dd4b39;'
        href='" . get_option('google-icon') . "'
        role='button'
        ><i class='fab fa-google'></i
      ></a>

      <!-- Instagram -->
      <a
        class='btn btn-primary btn-floating m-1'
        style='background-color: #ac2bac;'
        href='" . get_option('instagram-icon') . "'
        role='button'
        ><i class='fab fa-instagram'></i
      ></a>

      <!-- Linkedin -->
      <a
        class='btn btn-primary btn-floating m-1'
        style='background-color: #0082ca;'
        href='" . get_option('linkedin-icon') . "'
        role='button'
        ><i class='fab fa-linkedin-in'></i
      ></a>
      <!-- Github -->
      <a
        class='btn btn-primary btn-floating m-1'
        style='background-color: #333333;'
        href='" . get_option('github-icon') . "'
        role='button'
        ><i class='fab fa-github'></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class='text-center p-3' style='background-color: rgba(0, 0, 0, 0.2);'>
    © 2021 Copyright : 
    <a class='text-white' href='" . get_option('copyright-link') . "'>".get_bloginfo('name')."</a>
  </div>
  <!-- Copyright -->
</footer>
    ";
}
//Add CSS to the top bar
add_action('wp_print_styles', 'tb_css');

function tb_css()
{
  echo "
        <style>
       
 }
        </style>
    ";
}

?>