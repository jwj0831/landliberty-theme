<?php 
/**
 * Template Name: Page4 Press Page
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
					<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 연구소뉴스 > <span>언론보도</span>
				</p>
			</div>
			<div class="subpage">
				<div class="sub-title-bar">
					<span class="subpage-title">언론보도</span><span class="subpage-title-detail"></span>
					<img class="sub-title-icon" src='<?php bloginfo('template_url'); ?>/images/sub/sub_t_img.gif' >
				</div>
				
				<div class="content">
					<div class="board">
						<div class="board-meta-bar">
							<span class="title">제목</span>
							<span class="writer">글쓴이</span>
							<span class="count">조회수</span>
							<span class="date">날짜</span>
						</div>
						
						<!--For upper fixed posts -->
						<?php
						query_posts(array(
							'cat' => getPressFixCategoryNum(),
							'posts_per_page' => 3,
							)					
						);
						$posts = new WP_Query($args);
						while( have_posts()) : 
							the_post();
							$id = get_the_ID();
						?>
						<div class="list-row">
							<div class="title title-fix ellipsis">
								<a href="<?php echo get_permalink($id) ?>" title="<?php the_title(); ?>" >
									<?php echo get_the_title(); ?>
								</a>
							</div>
							<div class="writer">
								<?php the_author()?>
							</div>
							<div class="count">
								<?php the_views(); ?>
							</div>
							<div class="date">
								<?php the_time('Y/m/d') ?>
							</div>
						</div><!--close board-list-row-->
						
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
					
					
						<?php
						if ( get_query_var('paged') ) {
	                        $paged = get_query_var('paged');
		                } elseif ( get_query_var('page') ) {
		                        $paged = get_query_var('page');
		                } else {
		                        $paged = 1;
		                }
						
						query_posts(array(
							'cat' => getPressCategoryNum(),
							'posts_per_page' => 10,
							'paged' => $paged
							)					
						);
						$posts = new WP_Query($args);
						while( have_posts()) : 
							the_post();
							$id = get_the_ID();
						?>
					
						<div class="list-row">
							<div class="title ellipsis">
								<a href="<?php echo get_permalink($id) ?>" title="<?php the_title(); ?>" >
									<?php echo get_the_title(); ?>
								</a>
							</div>
							<div class="writer">
								<?php the_author()?>
							</div>
							<div class="count">
								<?php the_views(); ?>
							</div>
							<div class="date">
								<?php the_time('Y/m/d') ?>
							</div>
						</div><!--close board-list-row-->
						
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
						
						<div class="news_nav">
							<?php wp_pagenavi(); ?>
						</div>
						
					</div><!--close board-->
				</div> <!--close content-->
			</div><!--close subpage-->
		</div><!--close content-panel-->
		<div class="clear"></div>
	</div><!--close subpage_fixed-->
</div><!--close subpage_stretched-->
<div class="clear"></div>
	
<?php get_footer(); ?>