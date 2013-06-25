<?php 
/**
 * Template Name: Page5 Book Page
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
					<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 자료실 > <span>도서안내</span>
				</p>
			</div>
			<div class="subpage">
				<div class="sub-title-bar">
					<span class="subpage-title">도서안내</span><span class="subpage-title-detail">도서안내 상세하게</span>
					<img class="sub-title-icon" src='<?php bloginfo('template_url'); ?>/images/sub/sub_t_img.gif' >
				</div>
				
				<div class="content">
					<?php
					if ( get_query_var('paged') ) {
                        $paged = get_query_var('paged');
	                } elseif ( get_query_var('page') ) {
	                        $paged = get_query_var('page');
	                } else {
	                        $paged = 1;
	                }
					
					query_posts(array(
						'cat' => getBookCategoryNum(),
						'posts_per_page' => 5,
						'paged' => $paged
						)					
					);
					$posts = new WP_Query($args);
					while( have_posts()) : 
						the_post();
						$id = get_the_ID();
					?>
					<div id="book_row" class="news_row">
						<div class="news_img">
							<a href="<?php echo get_permalink($id) ?>" title="<?php the_title(); ?>" >
								<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'excerpt-thumbnail');
									$url = $thumb['0'];
								?>		
								<img width=160 height=200 src=<?php echo catch_that_image()?>>
							</a>
						</div>
						<h3>
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
						</h3>
						<div class="news_author">
							<b><?php the_author()?></b> | <?php the_time('F j, Y') ?>
						</div>
						
						<div class="news_text">
							<a href="<?php echo get_permalink($id) ?>" title="<?php the_title(); ?>" >
								<?php echo mb_substr(get_the_excerpt(), 0, 150, 'UTF-8'); ?> ...				
							</a>
						</div>
					</div>
					
					<?php endwhile; ?>
					
					<div class="news_nav">
						<?php wp_pagenavi(); ?>
					</div>
					
					<?php wp_reset_query(); ?>
					
				</div> <!--close content-->
			</div><!--close subpage-->
		</div><!--close content-panel-->
		<div class="clear"></div>
	</div><!--close subpage_fixed-->
</div><!--close subpage_stretched-->
<div class="clear"></div>
	
<?php get_footer(); ?>