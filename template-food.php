<?php /* Template Name: Food*/ get_header(); ?>

<div class="page-img-header d-flex z-depth-3" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">

<div class="mask gradient-custom" style="width: 100%; height: 100%;">

  </div>
</div>





<!--Grid row-->

<?php
// The Query
$the_query = new WP_Query( 'cat=4&posts_per_page=24' );
//posts_per_page=5'


// The Loop
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				$category = get_the_category(); 
				?>		


    <!--Grid column-->
  
        <!--Featured image-->
   
        <section class="container-fluid">
        <a href="<?php echo get_permalink() ?>" class="">
  <div class="container pt-6 pb-6">
    <div class="row z-depth-3">
        <div class="menu-image-box col-12 col-lg-6 z-depth-3" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
    
      </div>
       
      <div class="menu-content-box col-12 col-lg-6 d-flex align-items-center">
	<header class="entry-header" style="width:100%;">

  <h2 class="mb-3 text-center">
          <?php the_title(); ?>
        </h2>
        
	</header><!-- .entry-header -->




      




      </div>
     
      </div>
  <!--Grid row-->
  </div>
    <!--Grid column-->

  <?php
  
  $counter++;
  } // end while
  } // end if
  ?>

</a>
</section><!-- #main -->
<?php get_template_part( 'template-parts/banner', 'page' ); ?>
<?php get_footer(); ?>