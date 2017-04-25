<?php
/**
 * Template Name:gallery
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<style>
    .ai-responsive-gallery .topbar{
        display: none;
    }
</style>
<section class="inner_banner">
          <div class="container">
    <div class="col-md-12 text-center inner_head">
            <?php while ( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>  
           <?php endwhile; ?>
        </div>
    </div>      
</section> 

 <section>
    <div class="container title ptop20">
           <?php echo do_shortcode('[Album]'); ?> 
              
              <div class="clearfix"></div>
            </div>
        

          </section>  

<?php
get_footer();?>
