<?php
/*
template Name: Contact
*/
 get_header(); ?>



<style type="text/css">
  .contacts-form form input[type=email] {
  border: 1px solid #e0e4f6;
    border-radius: 3px;
    background: #f4f5fb;
    font-size: 15px;
    color: #9fa4bb;
    transition: all 0.2s;
    display: block;
    width: 100%;
    height: 34px;
    padding: 0 15px 0 15px;
    margin: 0 0 26px;
}
 .contacts-form form input[type=tel] {
  border: 1px solid #e0e4f6;
    border-radius: 3px;
    background: #f4f5fb;
    font-size: 15px;
    color: #9fa4bb;
    transition: all 0.2s;
    display: block;
    width: 100%;
    height: 34px;
    padding: 0 15px 0 15px;
    margin: 0 0 26px;
}
.wpcf7-not-valid-tip{
  display: none !important;
}
input.wpcf7-form-control.wpcf7-text.wpcf7-validates-as-required.wpcf7-not-valid {
   
    border: 1px solid red !important;
}
</style>
<!-- Breadcrumbs -->
<div class="b-crumbs-wrap">
        <div class="container b-crumbs">
            <ul>
                <li>
                    <a href="index.html">PrimaSolv</a>
                </li>
                <li>
                    <span>Contact</span>
                </li>
            </ul>
        </div>
    </div>

<!-- Main Content - start -->
<main>

        <div class="container maincont">

                <h1><span>Contact</span></h1>
                <span class="maincont-line1 maincont-line12"></span>
                <span class="maincont-line2 maincont-line22"></span>
            
                <!-- Contacts - start -->
                <div class="pagecont contacts">
                    <ul class="contacts-col1">
                        <li>
                            <p><b>Information</b></p>
                         <?php echo get_field('contact_information'); ?>
                        </li>
                        <li>
                            <p><b>Address</b></p>
                          <?php echo get_field('address'); ?>
                        </li>
                        <li>
                            <p><b>Email</b></p>
                            <p><a href="mailto:<?php echo get_field('email'); ?>">  <?php echo get_field('email'); ?></a></p>
                        </li>
                    </ul>
                    <ul class="contacts-col2">
                        <li>
                            <p><b>Phone</b></p>
                            <p><?php echo get_field('phone'); ?></p>
                        </li>
                        <li>
                            <p><b>Business Hours</b></p>
                          <?php echo get_field('business_hours'); ?>
                        </li>
                    </ul>
                    <div class="contacts-form">
                        <h3>Send us a message</h3>
                       <?php echo do_shortcode('[contact-form-7 id="133" title="Contact form 1"]'); ?>
                    </div>
                </div>
                <!-- Contacts - end -->
            
            </div>

            <!-- Map -->
<div class="contacts-map" id="contacts-map"></div>

</main>
<!-- Main Content - end -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
"use strict";
function initialize() {
  var mapOptions = {
    zoom: 15,
    scrollwheel: false,
    center: new google.maps.LatLng(40.440128, -79.974326)
  };
  var map = new google.maps.Map(document.getElementById('contacts-map'),
    mapOptions);
  var marker = new google.maps.Marker({
    position: map.getCenter(),
    icon: 'img/marker.png',
    map: map
  });
}
google.maps.event.addDomListener(window, 'load', initialize);
</script> 

<?php get_footer(); ?>