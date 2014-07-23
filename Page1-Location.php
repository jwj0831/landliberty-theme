<?php 
/**
 * Template Name: Page1 Location Page
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
					<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 토지+자유연구소 > <span>오시는 길</span>
				</p>
			</div>
			<div class="subpage">
				<div class="sub-title-bar-noborder">
					<span class="subpage-title">오시는 길</span><span class="subpage-title-detail"></span>
					<img class="sub-title-icon" src='<?php bloginfo('template_url'); ?>/images/sub/sub_t_img.gif' >
				</div>
				
				<div class="content">
					<div style="float:left;font-size:30px;font-weight:bold">INFO</div>
					<div style="float:left;margin-left:130px">
						<div style="border-bottom:2px #222222 solid"></div>
						<div style="border-bottom:1px #dddddd dotted;padding:8px 0;font-size:13px;font-weight:bold;color:#222222">ADDRESS</div>
						<div style="border-bottom:1px #dddddd dotted;padding:8px 0;font-size:13px;font-weight:bold;color:#222222">TEL</div>
						<div style="border-bottom:1px #dddddd dotted;padding:8px 0;font-size:13px;font-weight:bold;color:#222222">E-mail</div>
					</div>
					<div style="float:left;width:400px">
						<div style="border-bottom:2px #222222 solid;"></div>
						<div style="border-bottom:1px #dddddd dotted;padding:8px 0;font-size:13px;color:#919191;padding-left:40px">서울시 서대문구 신촌로 1 59 (창천동 영산빌라) 201</div>
						<div style="border-bottom:1px #dddddd dotted;padding:8px 0;font-size:13px;color:#919191;padding-left:40px">02) 736-4906</div>
						<div style="border-bottom:1px #dddddd dotted;padding:8px 0;font-size:13px;color:#919191;padding-left:40px">land-liberty@hanmail.net</div>
					</div>
					
					<div style="clear:both"></div>

					<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.7846153174846!2d126.9284722!3d37.56013799999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357c98ebc038ab8f%3A0xa94c9e8e7dc53be7!2z7ISc7Jq47Yq567OE7IucIOyEnOuMgOusuOq1rCDsi6DstIzroZwx6ri4IDU5!5e0!3m2!1sko!2skr!4v1406084695894" width="720" height="550" frameborder="0" style="border:0"></iframe>
					</div>
				</div>
			</div><!--close subpage-->
		</div><!--close content-panel-->
		<div class="clear"></div>
	</div><!--close subpage_fixed-->
</div><!--close subpage_stretched-->
<div class="clear"></div>
	
<?php get_footer(); ?>