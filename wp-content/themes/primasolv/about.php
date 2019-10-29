<?php
/*
template Name: About
*/
 get_header(); ?>




<!-- Breadcrumbs -->
<div class="b-crumbs-wrap">
        <div class="container b-crumbs">
            <ul>
                <li>
                    <a href="index.html">PrimaSolv</a>
                </li>
                <li>
                    <span>About</span>
                </li>
            </ul>
        </div>
    </div>

<!-- Main Content - start -->
<main>

        <div class="container maincont">

                <span class="maincont-line1 maincont-line12"></span>
                <span class="maincont-line2 maincont-line22"></span>

            <!-- What Makes Us Special Start -->
    <section class="wide-tb-80 pagecont p-5">
            <div class="container pos-rel">
              <div class="row align-items-center ">
                    
                <div class="col-md-6 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s">            
                        <h1 class="mb-3">About <span class="text-main">PrimaSolv</span></h1>
      
                  <?php echo get_field("about_primasolve"); ?>
                </div>
      
      
                <div class="col-md-6 wow fadeInRight" data-wow-duration="0" data-wow-delay="0s">            
                  <img src="<?php echo get_field('about_primasolv_image'); ?>" alt="">
                </div>
      
              </div>
              
            </div>
          </section>
          <!-- What Makes Us Special End -->

        </div>

          <!-- What Makes Us Special Start -->
    <section class="bg-white wide-tb-100">
            <div class="container pos-rel">
              <div class="row">
                <div class="img-business-man">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/courier-man.png" alt="">
                </div>
                <!-- Heading Main -->
                <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                  <h1 class="heading-main">
                    <span>Our Goodness</span>
                    What Makes Us Special
                  </h1>
                </div>
                <!-- Heading Main -->
                <div class="col-md-6 ml-auto">
                    <div class="row">
                      <!-- Icon Box 2 -->
                      <div class="col-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0s">              
                        <div class="icon-box-3 mb-5 bg-sky-blue">
                          <div class="media">
                              <div class="service-icon mr-5">
                                <i class="fa fa-check"></i>
                              </div>
                              <div class="service-inner-content media-body">
                                  <h4 class="h4-md">Packaging and Storage</h4>
                                  <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Praesent pellentesque diam vitae nibh aliquam faucibus.</p>
                              </div>
                          </div>
                        </div>              
                      </div>
                      <!-- Icon Box -->
      
                      <!-- Icon Box 2 -->
                      <div class="col-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s">              
                        <div class="icon-box-3 mb-5 bg-sky-blue">
                          <div class="media">
                              <div class="service-icon mr-5">
                                <i class="fa fa-check"></i>
                              </div>
                              <div class="service-inner-content media-body">
                                  <h4 class="h4-md">Safety & Quality</h4>
                                  <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Praesent pellentesque diam vitae nibh aliquam faucibus.</p>
                              </div>
                          </div>
                        </div>              
                      </div>
                      <!-- Icon Box -->
      
                      <!-- Icon Box 2 -->
                      <div class="col-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.4s">              
                        <div class="icon-box-3 bg-sky-blue">
                          <div class="media">
                              <div class="service-icon mr-5">
                                  <i class="fa fa-check"></i>
                              </div>
                              <div class="service-inner-content media-body">
                                  <h4 class="h4-md">Care for Environment</h4>
                                  <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Praesent pellentesque diam vitae nibh aliquam faucibus.</p>
                              </div>
                          </div>
                        </div>              
                      </div>
                      <!-- Icon Box -->
                    </div>
                </div>
              </div>
              
            </div>
          </section>
          <!-- What Makes Us Special End -->

        <!-- Tracking Your Freight Start -->
    <section class="pos-rel bg-sky-blue">
            <div class="container-fluid">
              <div class="row align-items-center">       
                  <div class="col-lg-5 col-12 p-0"> 
                    <img src="<?php echo get_field('why_choose_primasolv_left_side_image'); ?>" class="w-100" alt="">
                  </div>
                  <div class="col-lg-6 col-12">
      
                    <div class="p-5 about-whoose">
                      <!-- Heading Main -->
                      <h1 class="heading-inner text-left mb-4">
                        <span>Why Choose</span>
                        PrimaSolv
                      </h1>
                      <!-- Heading Main -->
                      
                      <!-- Tracking Form -->                    
                        <?php echo get_field('why_choose_primasolv'); ?>                    
                      <!-- Tracking Form -->
                    </div>
      
                  </div>              
              </div>
            </div>        
          </section>
          <!-- Tracking Your Freight End -->
            
            


</main>
<!-- Main Content - end -->

<?php get_footer(); ?>