<?php
/**
 * Html functions added to the default WordPress theme twentythirteen.
 * This code has been added specifically to support device detction.
 *
 * @author Tom W. Hartung, using the default WordPress theme twentyfifteen as a starting point
 * @package Jmws
 * @subpackage idmygadget_twentythirteen
 * @since idmygadget_twentythirteen 1.0
 */

class JmwsIdMyGadgetTwentyThirteenHtml
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
			$logoTitleDescription = self::getLogoTitleDescriptionHtml();
		}
	
		return $logoTitleDescription;
	}
	/**
	 * If the idMyGadget module is not available we will use this,
	 * which is the original twentythirteen code (as of Feb. 2016).
	 */
	protected static function getLogoTitleDescriptionHtml()
	{
		$logoTitleDescription = '';
		$logoTitleDescription .= '<a class="home-link" href="' . esc_url( home_url( '/' ) ) .
			'title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . 'rel="home">';
		$logoTitleDescription .= '<h1 class="site-title">' . bloginfo( 'name' ) . '</h1>';
		$logoTitleDescription .= '<h2 class="site-description">' . bloginfo( 'description' ) . '</h2>';
		$logoTitleDescription .=  '</a>';
		return $logoTitleDescription;
	}
}
