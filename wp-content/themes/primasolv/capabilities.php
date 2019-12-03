<?php
/*
template Name: Capabilities
*/
 get_header(); ?>




<!-- Breadcrumbs -->
<div class="b-crumbs-wrap">
        <div class="container b-crumbs">
            <ul>
                <li>
                    <a href="<?php echo site_url(''); ?>">PrimaSolv</a>
                </li>
                <li>
                    <span>Capabilities</span>
                </li>
            </ul>
        </div>
    </div>

<!-- Main Content - start -->
<main>
    <div class="container maincont">

               <!-- What Makes Us Special Start -->
    <section class="bg-sky-blue pb-0 capabilities">
            
              <div class="row">
                <!-- Heading Main -->
                <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                  <h1 class="heading-main mt-4 mb-5">
                    <span>What We Offer</span>
                    Our Capabilities
                  </h1>
                </div>
                         <!-- Heading Main -->
      <?php
          $loop = new WP_Query( array(
              'post_type' => 'capabilities',
              'posts_per_page' => -1
            )
          );
          ?>
           <?php $i=0; while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="col-md-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.1s">            
                  <!-- Icon Box 2 -->
                  <a href="#">
                    <div class="icon-box-4 h-100">
                    <?php echo get_field('icon'); ?>
                      <h4 class="h4-md mb-3"><?php the_title(); ?></h4>
                     <?php the_content(); ?>
                    </div> 
                  </a>
                  <!-- Icon Box -->
                </div>
      <?php $i++; endwhile; wp_reset_query(); ?>          
         

                    <div class="clearfix"></div>
      
                <div class="text-center btn-center mx-auto clearfix">
                  <a href="#" class="btn-theme bg-navy-blue">Request Quote <i class="icofont-rounded-right"></i></a>
                </div>
      
              </div>
              
          </section>
          <!-- What Makes Us Special End -->

        </div>      



</main>
<!-- Main Content - end -->


<?php get_footer(); ?>