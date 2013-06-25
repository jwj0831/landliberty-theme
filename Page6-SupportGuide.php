<?php 
/**
 * Template Name: Page6 Support Guide Page
 *
 * A custom page template with sidebar.
 * 
 * @package WordPress
 * @subpackage LandLiberty
 * @author NFM (jwj0831@gmail.com)
 * @since LandLiberty 1.0
 */
get_header(); ?>

<div class="subpage_stretched">
	<?php include (TEMPLATEPATH . '/nav.php'); ?> 
	<div class="subpage_fixed">
		<?php include (TEMPLATEPATH . '/sidebar.php'); ?> 
		<div id="content-panel">
			<div class="breadcrumb">
				<p>
					<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 후원 > <span>후원 안내</span>
				</p>
			</div>
			<div class="subpage">
				<div class="sub-title-bar">
					<span class="subpage-title">후원 안내</span><span class="subpage-title-detail">후원 안내 자세하게...</span>
					<img class="sub-title-icon" src='<?php bloginfo('template_url'); ?>/images/sub/sub_t_img.gif' >
				</div>
				
				<div class="content">

					후원 안내 상세

				</div>
			</div><!--close subpage-->
		</div><!--close content-panel-->
		<div class="clear"></div>
	</div><!--close subpage_fixed-->
</div><!--close subpage_stretched-->
	<div class="clear"></div>
	
<?php get_footer(); ?>