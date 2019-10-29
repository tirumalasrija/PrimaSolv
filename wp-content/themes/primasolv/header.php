
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage PrimaSolv
 * @since 1.0.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />	
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic,300italic,300&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap/bootstrap.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles1.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="header">
    <nav class="navbar navbar-expand-lg navbar-dark p-0 align-items-stretch">
        <a class="navbar-brand p-0 mr-5" href="<?php echo site_url(''); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_header.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        	 <?php
            $defaults = array(
                'theme_location'  => 'top',
                'menu'            => '',
                'container'       => false,
                'container_class' => '',
                'container_id'    => '',            
              
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
    'items_wrap'      => '<ul class="navbar-nav mr-auto align-items-center ">%3$s</ul>',
                'depth'           => 1,
                'walker'          => new Description_Walker
                );
            wp_nav_menu( $defaults );
            ?>
          <!-- <ul class="navbar-nav mr-auto align-items-center">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="capabilities.html">Capabilities</a>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="#">DevOps</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Solutions</a>
              </li>
          
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
          </ul> -->

          <a href="#" class="btn btn-primary request-demo mr-5 pr-4 pl-4">Request a Demo</a>
        </div>
        
      </nav>
</div>