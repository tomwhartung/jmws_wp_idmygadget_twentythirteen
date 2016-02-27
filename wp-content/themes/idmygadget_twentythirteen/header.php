<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<?php
//
// check idMyGadget install:
//   If the device detection object has NOT been created,
//     Create an object that can keep the app from whitescreening with a null pointer etc. and
//     Display an appropriate error message (markup for that is at the end of this file)
// If we do have the object,
//   Call its fcn to get the html we need for the header
//
global $jmwsIdMyGadget;
global $jmwsIdMyGadgetTwentyThirteenHelper;
$site_title_or_name = $jmwsIdMyGadget->getSiteTitleOrName();
?>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
	<link rel="alternate" href="<?php echo esc_url( home_url('/') ); ?>" hreflang="en-us" />
	<title><?php echo $site_title_or_name; ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site" <?php echo $jmwsIdMyGadget->jqmDataRole['page'] ?>
		  data-title="<?php echo $site_title_or_name; ?>">
		<header id="masthead" class="site-header" role="banner"
			<?php echo $jmwsIdMyGadget->jqmDataRole['header'] . ' ' . $jmwsIdMyGadget->jqmDataThemeAttribute; ?> >
			<?php if( $jmwsIdMyGadgetTwentyThirteenHelper->phoneHeaderNavInTwentyThirteenPage ) : ?>
				<nav data-role="navbar">
					<?php wp_nav_menu( array('theme_location' => 'phone-header-nav', 'container' => false) ); ?>
				</nav>
			<?php endif; ?>
			<?php echo JmwsIdMyGadgetTwentyThirteenHtml::getHeaderHtml() ?>
			<?php if( ! $jmwsIdMyGadgetTwentyThirteenHelper->phoneHeaderNavInTwentyThirteenPage ) : ?>
				<div id="navbar" class="navbar">
					<nav id="site-navigation" class="navigation main-navigation" role="navigation">
						<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
						<?php get_search_form(); ?>
					</nav><!-- #site-navigation -->
				</div><!-- #navbar -->
			<?php endif; ?>
		</header><!-- #masthead -->

		<div id="main" class="site-main" <?php echo $jmwsIdMyGadget->jqmDataRole['content'] ?>>
			<?php
				if (isset($jmwsIdMyGadget->errorMessage) )
				{
					echo $jmwsIdMyGadget->errorMessage;
				}
			else
			{
				if ( $jmwsIdMyGadget->hamburgerIconLeftOnThisDevice )
				{
					wp_nav_menu( array( 'theme_location' => 'hamburger-menu-left', 'container' => false) );
				}
				if ( $jmwsIdMyGadget->hamburgerIconRightOnThisDevice )
				{
					wp_nav_menu( array( 'theme_location' => 'hamburger-menu-right', 'container' => false) );
				}
			}
			?>
			<div class="debug">
				<?php // print $jmwsIdMyGadget->getSanityCheckString(); ?>
			</div> <!-- .debug -->
