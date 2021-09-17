<?php /* Template Name: Cav Home*/ get_header(); ?>




<div class="page-img-header d-flex z-depth-3" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">

<div class="mask gradient-custom" style="width: 100%; height: 100%;">

  </div>
</div>
<main id="primary" class="site-main container  pt-6 pb-6">
  <div class="z-depth-3">
  <div class="menu-content-box">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );
			

			

        endwhile; // End of the loop.
        
        ?>
         <div class="more-box text-center">
    <a href="https://bbot.menu/thecavendishdeliveryorpickup/"><button type="button" class="btn btn-primary">Order The Cavendish @ Home</button></a>
    </div>
</div>


	</div>



    <div class="container pt-5 pb-5">
    <div class="row col-4 offset-4 col-lg-2 offset-lg-5">
      <img id="full-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/AtHome.png" alt="Cavendish Logo">
    </div>
  </div>


    <div  class="container pb-6">
<section class="z-depth-3">
  <div class="menu-content-box col-12">
  <h1 class="entry-title">The Cavendish at Home</h1>
 
  <!--Grid row-->
  <div class="row wow fadeIn">
    <?php
    // The Query
    $the_query = new WP_Query( 'cat=6&posts_per_page=3' );
    //posts_per_page=5'


    // The Loop
        if ( $the_query->have_posts() ) {
          while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $category = get_the_category(); 
            ?>		


        <!--Grid column-->
        <div class="col-lg-4 col-md-4 col-sm-12 mb-4 d-flex flex-column">
     

            <!--Featured image-->
            <div class="view overlay hm-white-slight rounded z-depth-2 mb-4 thumb-wrapper">

              <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'img-fluid')); ?>
          
                <a href="<?php echo get_permalink() ?>">
                    <div class="mask"></div>
                </a>
            </div>

            <div>
            <h4 class="mb-3 font-weight-bold">
                <strong><?php the_title(); ?></strong>
            </h4>
          
          
            <p class="grey-text"><?php the_excerpt(); ?></p>
            </div>
            <div class="mt-auto">
            <a href="<?php echo get_permalink() ?>"><button type="button" class="btn btn-light">Find out More </button></a>
            </div>
        </div>
        <!--Grid column-->

      <?php
      
      $counter++;
      } // end while
      } // end if
      wp_reset_postdata(); 
      ?>
     </div>
    <!--Grid row-->
    <div class="more-box text-center">
    <a href="https://bbot.menu/thecavendishdeliveryorpickup/"><button type="button" class="btn btn-primary">Order The Cavendish @ Home</button></a>
    </div>
    </div>
    </section>


    </div><!-- #main -->
	<?php get_template_part( 'template-parts/banner', 'page' ); ?>





<?php get_footer(); ?>