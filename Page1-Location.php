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
						<div style="border-bottom:1px #dddddd dotted;padding:8px 0;font-size:13px;color:#919191;padding-left:40px">서울시 용산구 원효로 1가 48-10 헨리조지센터</div>
						<div style="border-bottom:1px #dddddd dotted;padding:8px 0;font-size:13px;color:#919191;padding-left:40px">02) 736-4906</div>
						<div style="border-bottom:1px #dddddd dotted;padding:8px 0;font-size:13px;color:#919191;padding-left:40px">land-liberty@hanmail.net</div>
					</div>
					
					<div style="clear:both"></div>

					<div class="map">
						<iframe width="720" height="550" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=ko&amp;geocode=&amp;q=%EC%84%9C%EC%9A%B8%EC%8B%9C+%EC%9A%A9%EC%82%B0%EA%B5%AC+%EC%9B%90%ED%9A%A8%EB%A1%9C+1%EA%B0%80+48-10&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=57.553742,79.013672&amp;ie=UTF8&amp;hq=&amp;hnear=%EB%8C%80%ED%95%9C%EB%AF%BC%EA%B5%AD+%EC%84%9C%EC%9A%B8%ED%8A%B9%EB%B3%84%EC%8B%9C+%EC%9A%A9%EC%82%B0%EA%B5%AC+%EC%9B%90%ED%9A%A8%EB%A1%9C1%EA%B0%80+48-10&amp;t=m&amp;ll=37.540426,126.967621&amp;spn=0.037295,0.061712&amp;z=14&amp;output=embed"></iframe>
					</div>
				</div>
			</div><!--close subpage-->
		</div><!--close content-panel-->
		<div class="clear"></div>
	</div><!--close subpage_fixed-->
</div><!--close subpage_stretched-->
<div class="clear"></div>
	
<?php get_footer(); ?>