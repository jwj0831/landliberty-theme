<?php /**
 * Template Name: Page1 History Page
 *
 * A custom page template with sidebar.
 *
 * @package WordPress
 * @subpackage LandLiberty
 * @author NFM (jwj0831@gmail.com)
 * @since LandLiberty 1.0
 */
get_header();
?>

<div class="subpage_stretched">
	<?php
	include (TEMPLATEPATH . '/nav.php');
	?>
	<div class="subpage_fixed">
		<?php
		include (TEMPLATEPATH . '/sidebar.php');
		?>
		<div id="content-panel">
			<div class="breadcrumb">
				<p>
					<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 토지+자유연구소 > <span>연구소 발자취</span>
				</p>
			</div>
			<div class="subpage">
				<div class="sub-title-bar-noborder">
					<span class="subpage-title">연구소 발자취</span><span class="subpage-title-detail">History of Land and liberty</span>
					<img class="sub-title-icon" src='<?php bloginfo('template_url'); ?>/images/sub/sub_t_img.gif' >
				</div>

				<div class="content">

					<div style="float:left;font-size:23px;width:480px;padding-top:25px">
						토지+자유연구소는 <b>평등한 토지권</b>이 회복되고, <b>진정한 자유</b>를 누리는 사회를 만들기 위해 힘써 달려가고 있습니다
					</div>
					<div style="float:left;margin-left:10px;"><img src='<?php bloginfo('template_url'); ?>/images/sub/history_img.gif'>
					</div>
					<div style="clear:both"></div>
					<div id="histories">

						<?php
						$cat = 'default';
						$cat = htmlspecialchars($_GET["cat"]);
						
						if ($cat == 'present') {
						?>
						<div class="history-selection marked">
							<a href="?cat=present">2011~2013</a>
						</div>
						<div class="history-selection">
							<a href="?cat=past">2007~2010</a>
						</div>
						<?php }	else if ($cat == 'past') { ?>
						<div class="history-selection">
							<a href="?cat=present">2011~2013</a>
						</div>
						<div class="history-selection marked">
							<a href="?cat=past">2007~2010</a>
						</div>
						<?php }	else { ?>
						<div class="history-selection marked">
							<a href="?cat=present">2011~2013</a>
						</div>
						<div class="history-selection">
							<a href="?cat=past">2007~2010</a>
						</div>
						<?php } ?>
					</div>

					<div style="border-top:3px #3c3c3c solid;"></div>

					<?php
					if ($cat == 'present') {
						include (TEMPLATEPATH . '/present.php');
					} else if ($cat == 'past') {
						include (TEMPLATEPATH . '/past.php');
					} else {
						include (TEMPLATEPATH . '/present.php');
					}
					?>
				</div><!--close content-->
			</div><!--close subpage-->
		</div><!--close content-panel-->
		<div class="clear"></div>
	</div><!--close subpage_fixed-->
</div><!--close subpage_stretched-->
<div class="clear"></div>

<?php get_footer(); ?>