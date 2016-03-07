<?php
/**
 * The sidebar containing the secondary widget area
 *
 * Displays on posts and pages.
 *
 * If no active widgets are in this sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
global $jmwsIdMyGadget;
$jmwsIdMyGadget->setIncludeSidebarVariables('sidebar-2');

// if ( is_active_sidebar( 'sidebar-2' ) ) :
if ( $jmwsIdMyGadget->includeSidebar ) : ?>
	<div id="tertiary" class="sidebar-container" role="complementary">
		<div class="sidebar-inner">
			<div class="widget-area">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
				<?php if ( $jmwsIdMyGadget->includeSidebarPhones ) : ?>
					<div id="sidebar-phones">
						<?php dynamic_sidebar( 'sidebar-phones' ); ?>
					</div>
				<?php elseif ( $jmwsIdMyGadget->includeSidebarTablets ) : ?>
					<div id="sidebar-tablets">
						<?php dynamic_sidebar( 'sidebar-tablets' ); ?>
					</div>
				<?php elseif ( $jmwsIdMyGadget->includeSidebarDesktops ) : ?>
					<div id="sidebar-desktops">
						<?php dynamic_sidebar( 'sidebar-desktops' ); ?>
					</div>
				<?php endif; ?>
			</div><!-- .widget-area -->
		</div><!-- .sidebar-inner -->
	</div><!-- #tertiary -->
<?php endif; ?>
