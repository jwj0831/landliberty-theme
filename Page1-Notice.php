<?php 
/**
 * Template Name: Page1 Notice Page
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
					<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 토지+자유연구소 > <span>공지사항</span>
				</p>
			</div>
			<div class="subpage">
				<div class="sub-title-bar-noborder">
					<span class="subpage-title">공지사항</span><span class="subpage-title-detail">공지사항 자세하게...</span>
					<img class="sub-title-icon" src='<?php bloginfo('template_url'); ?>/images/sub/sub_t_img.gif' >
				</div>
				
				<div class="content">
					
					<div class="board">
						<div class="board-meta-bar">
							<span class="num">번호</span>
							<span class="title">제목</span>
							<span class="writer">글쓴이</span>
							<span class="count">조회수</span>
							<span class="date">날짜</span>
						</div>
						
						<!--For upper fixed posts -->
						<?php
						query_posts(array(
							'cat' => getNoticeFixCategoryNum(),
							'posts_per_page' => 3,
							)					
						);
						$posts = new WP_Query($args);
						while( have_posts()) : 
							the_post();
							$id = get_the_ID();
						?>
						<div class="list-row">
							<div class="num">
								공지
							</div>
							<div class="title">
								<a href="<?php echo get_permalink($id) ?>" title="<?php the_title(); ?>" >
									<?php 
										$len = mb_strlen(get_the_title(), "UTF-8");
										if($len > 50) {
											echo mb_substr(get_the_title(), 0, 50, 'UTF-8');
											echo "...";
										} 
										else
											echo get_the_title();
									?>
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
							'cat' => getNoticeCategoryNum(),
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
							<div class="num">
								<?php echo $id; ?>
							</div>
							<div class="title">
								<a href="<?php echo get_permalink($id) ?>" title="<?php the_title(); ?>" >
									<?php 
										$len = mb_strlen(get_the_title(), "UTF-8");
										if($len > 50) {
											echo mb_substr(get_the_title(), 0, 50, 'UTF-8');
											echo "...";
										} 
										else
											echo get_the_title();
									?>
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
						
							
						<div class="board_nav">
							<?php wp_pagenavi(); ?>
						</div>
							
					</div><!--close board-->
					
				</div><!--close content-->
			</div><!--close subpage-->
		</div><!--close content-panel-->
		<div class="clear"></div>
	</div><!--close subpage_fixed-->
</div><!--close subpage_stretched-->
<div class="clear"></div>
	
<?php get_footer(); ?>