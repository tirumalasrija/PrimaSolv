<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage PrimaSolv
 * @since 1.0.0
 */

?>

<!-- Footer - start -->
<footer class="footer">
	<div class="container footer-top">
        <div class="row">
            <div class="footer-menu col">
                <p>About</p>
                <ul>
                    <li><a href="#">Vision</a></li>
                    <li><a href="#">Mission</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Careers</a></li>
                </ul>
            </div>
            <div class="footer-menu col">
                <p>Services</p>
                <ul>
                    <li><a href="#">vehicle diagnostics </a></li>
                    <li><a href="#">AWS cloud</a></li>
                    <li><a href="#">data analytics</a></li>
                    <li><a href="#">staffing</a></li>
                </ul>
            </div>
            <div class="footer-menu col">
                <p>Servieces</p>
                <ul>
                    <li><a href="#">mobile applications</a></li>
                    <li><a href="#">services offshore and onshore</a></li>
                    <li><a href="#">dev apps sess apps and security</a></li>
                    <li><a href="#">data analytics</a></li>
                </ul>
            </div>
            <div class="footer-info col-4">
                <p class="footer-msg">Share Us</p>
                <ul class="footer-social">
                    <li>
                        <a rel="nofollow" target="_blank" href="<?php echo get_field('facebook',5); ?>">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a rel="nofollow" target="_blank" href="<?php echo get_field('youtube',5); ?>">
                            <i class="fa fa-youtube-play"></i>
                        </a>
                    </li>

                    <li>
                        <a rel="nofollow" target="_blank" href="<?php echo get_field('twitter',5); ?>">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a rel="nofollow" target="_blank" href="<?php echo get_field('google',5); ?>">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
		
		
		

		

	</div>
	<div class="copyright">
		<p class="text-light">© 2019 PrimaSolv All Right Received. Design by <a href="http://www.webmobilez.com" target="_blank">WebMobilez.com</a></p>
	</div>
</footer>
<!-- Footer - end -->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
  
        
        <div class="modal-body">
  
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>        
          <!-- 16:9 aspect ratio -->
  <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/A-twOC3W558" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
  </div>
          
          
        </div>
  
      </div>
    </div>
  </div> 



<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.12.3.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap/bootstrap.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.accordion.js"></script>

<script>
$(document).ready(function() {

// Gets the video src from the data-src on each button

var $videoSrc;  
$('.video-btn').click(function() {
    $videoSrc = $(this).data( "src" );
});
console.log($videoSrc);

// when the modal is opened autoplay it  
$('#myModal').on('shown.bs.modal', function (e) {
    
// set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
$("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
})

// stop playing the youtube video when I close the modal
$('#myModal').on('hide.bs.modal', function (e) {
    // a poor man's stop video
    $("#video").attr('src',$videoSrc); 
}) 

// document ready  
});
</script>

<script>    
    $("#accordion").awsAccordion({
      type:"horizontal",
      cssAttrsHor:{
          ulWidth:"responsive",
          liHeight:380,
        	liWidth:100
      },
      startSlide:3,
      openCloseHelper:{
          openIcon:"plus",
          closeIcon:"minus"
      },
      openOnebyOne:true,
      classTab:"small",
      slideOn:"click",
      autoPlay:false,
      autoPlaySpeed:2000
    })
    </script>


<?php wp_footer(); ?>

</body>
</html>
