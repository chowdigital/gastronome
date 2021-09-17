<?php /* Template Name: Book */ get_header(); ?>
<!-- Full Page Intro -->

<div class="view full-page-intro z-depth-3">

<video playsinline autoplay muted loop id="myVideo" class="view full-page-intro">
  		<source src="<?php echo get_template_directory_uri(); ?>/assets/img/video/blackbook_1.0.mp4" type="video/mp4">
  			<source src="<?php echo get_template_directory_uri(); ?>/assets/img/video/blackbook_1.0.webm" type="video/webm">
  				<source src="<?php echo get_template_directory_uri(); ?>/assets/img/video/blackbook_1.0.ogg" type="video/ogg">
		 </video>
<!-- Mask & flexbox options-->

<div class="mask d-flex justify-content-center align-items-center">

  <!-- Content -->
  <div class="container">

    <!--Grid row-->
    <div class="row wow fadeIn">
      <div class="white-content-box text-center">
      <header class="entry-header">
	          	<?php the_title( '<h1>', '</h1>' ); ?>
	    </header><!-- .entry-header -->
         

      <div class="mt-2 mb-2">
      <script type='text/javascript' src='//www.opentable.co.uk/widget/reservation/loader?rid=199293&type=standard&theme=standard&iframe=true&domain=couk&lang=en-GB&newtab=false&ot_source=Restaurant%20website'></script>
      </div>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
          the_content();
          endwhile; else: ?>
          <p>Sorry, no posts matched your criteria.</p>
          <?php endif; ?>
      

      </div>
      
    </div>
    <!--Grid row-->

  </div>
  <!-- Content -->

  

</div>
<!-- Mask & flexbox options-->

</div>
<!-- Full Page Intro --> 







<?php get_footer(); ?>