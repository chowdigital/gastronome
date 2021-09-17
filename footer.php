<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wordpress-bootstrap-starter-theme
 */

?>

<div class="container mt-5 mb-5">
<div class=" text-center">
      <h1>Great British Pubs</h1>

    </div>
  </div>

<!-- Footer -->
<footer class="page-footer font-small dark-background  pt-4">

<div class="row col-4 offset-4 col-lg-2 offset-lg-5">
      <img id="full-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/gastronome_full_light.svg" alt="Gastronome Logo">
    </div>

 <!-- Cloudsdale -->
     <div class="mt-5 text-center py-3 black-background"> 
    <a href="https://cloudsdale.co.uk/">   <img src="https://cloudsdale.co.uk/wp-content/themes/Cloudsdale_2.0/assets/img/cloudsdale_logo.svg" alt="Cloudsdale" style="height:20px">
  </div></a>
</footer>



<?php wp_footer(); ?>

</body>
</html>
