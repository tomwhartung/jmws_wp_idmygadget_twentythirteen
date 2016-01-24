<?php
/**
 * Class to contain a generic (theme-independent) check for the module being installed and activated.
 *
 * @package Jmws
 * @subpackage idmygadget_twentythirteen
 * @since idmygadget_twentythirteen 1.0
 */

class JmwsIdMyGadgetTwentyThirteen
{
	/**
	 * Note that you do not need to instantiate this class unless you need to call a non-static method.
	 */
	public function __construct()
	{
	}

	/**
	 * Use the $logoTitleDescription to generate the html for the header
	 */
	public static function getHeaderHtml()
	{
		global $jmwsIdMyGadget;
		$logoTitleDescription = '';
	
		if ( $jmwsIdMyGadget->isInstalled() && $jmwsIdMyGadget->isEnabled() )
		{
			$logoTitleDescription = $jmwsIdMyGadget->getLogoTitleDescriptionHtml();
		}
		else
		{
			$logoTitleDescription = $this->getLogoTitleDescriptionHtml();
		}
	
		$headerHtml  = '';
		$headerHtml .= '<header id="masthead" class="site-header" role="banner" ';
		$headerHtml .= $jmwsIdMyGadget->jqmDataRole['header'] . ' ';
		$headerHtml .= $jmwsIdMyGadget->jqmDataThemeAttribute . '>';
		$headerHtml .= '<div class="site-branding">';
		$headerHtml .= $logoTitleDescription;
		$headerHtml .= '</div><!-- .site-branding -->';
		$headerHtml .= '</header><!-- .site-header -->';
		return $headerHtml;
	}
	/**
	 * If the idMyGadget module is not available we will use this,
	 * which is the original twentythirteen code (as of Sept. 2015).
	 */
	protected static function getLogoTitleDescriptionHtml()
	{
		$logoTitleDescription = '';
		if ( is_front_page() && is_home() )
		{
			$logoTitleDescription = '<h1 class="site-title">Exploding!' .
					'<a href="' . esc_url( home_url('/') ) . '" rel="home">' . $site_name . '</a></h1>';
		}
		else
		{
			$logoTitleDescription = '<p class="site-title">' .
					'<a href="' . esc_url( home_url('/') ) . '" rel="home">' . $site_name . '</a></p>';
		}
		$description = get_bloginfo( 'description', 'display' );
		if ( $description || is_customize_preview() )
		{
			$logoTitleDescription .= '<p class="site-description">' . $description . '</p>';
		}
		// $logoTitleDescription .= '<button class="secondary-toggle">' . _e( 'Menu and widgets', 'twentythirteen' ) . '</button>';
		$logoTitleDescription .= '<button class="secondary-toggle">Menu and widgets</button>';
	
		return $logoTitleDescription;
	}
}
