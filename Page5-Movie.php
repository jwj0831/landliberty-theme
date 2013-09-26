<?php 
/**
 * Template Name: Page5 Movie Page
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
					<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 자료실 > <span>영상자료</span>
				</p>
			</div>
			<div class="subpage">
				<div class="sub-title-bar">
					<span class="subpage-title">영상자료</span><span class="subpage-title-detail">영상자료 상세하게</span>
					<img class="sub-title-icon" src='<?php bloginfo('template_url'); ?>/images/sub/sub_t_img.gif' >
				</div>
				
				<div class="content">
					<div id="pic_board">
						<?php
						if ( get_query_var('paged') ) {
	                        $paged = get_query_var('paged');
		                } elseif ( get_query_var('page') ) {
		                        $paged = get_query_var('page');
		                } else {
		                        $paged = 1;
		                }
						
						query_posts(array(
							'cat' => getMovieCategoryNum(),
							'posts_per_page' => 9,
							'paged' => $paged
							)					
						);
						$posts = new WP_Query($args);
						while( have_posts()) : 
							the_post();
							$id = get_the_ID();
						?>
						<div class="pic_box">
							<div class="picture">
								<a href="<?php echo get_permalink($id) ?>" title="<?php the_title(); ?>" >
									<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'excerpt-thumbnail');
										$url = $thumb['0'];
									?>		
									<img width=200 height=150 src=<?= $url ?>>
								</a>
							</div>
							<div class="pic_title">
								<a href="<?php echo get_permalink($id) ?>" title="<?php the_title(); ?>" >
								<?php 
								/*
									$len = mb_strlen(get_the_title(), "UTF-8");
									if($len > 10) {
										echo mb_substr(get_the_title(), 0, 10, 'UTF-8');
										echo "...";
									} 
									else*/
										echo get_the_title();
								?>
							</a>
							</div>
						</div>
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
						<div class="clear"></div>
						<div class="news_nav">
							<?php wp_pagenavi(); ?>
						</div>
					</div><!--close pic-board-->
				</div> <!--close content-->
			</div><!--close subpage-->
		</div><!--close content-panel-->
		<div class="clear"></div>
	</div><!--close subpage_fixed-->
</div><!--close subpage_stretched-->
<div class="clear"></div>
	
<?php get_footer(); ?>
