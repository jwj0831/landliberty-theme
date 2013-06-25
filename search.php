<?php
/**
 * The template for displaying Search Results pages.
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
						<div class="subpage">
				<div class="sub-title-bar">
					<span class="subpage-title">자료검색 결과</span><span class="subpage-title-detail">자료 검색 결과입니다.</span>
					<img class="sub-title-icon" src='<?php bloginfo('template_url'); ?>/images/sub/sub_t_img.gif' >
				</div>
				
				<div class="content">


            <?php if ( have_posts() ) : ?>

                <header class="page-header">
                    <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                </header><!-- .page-header -->


                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : 
                	the_post(); 
					$id= get_the_ID(); 
				?>
					
					<div class="news_row">
						<div class="news_img">
							<a href="<?php echo get_permalink($id) ?>" title="<?php the_title(); ?>" >
								<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'excerpt-thumbnail');
									$url = $thumb['0'];
								?>		
								<img width=160 height=110 src=<?= $url ?>>
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


            <?php else : ?>

                <?php get_template_part( 'no-results', 'search' ); ?>

            <?php endif; ?>

				</div>
			</div><!--close subpage-->
		</div><!--close content-panel-->
	</div><!--close subpage_fixed-->
</div><!--close subpage_stretched-->
<div class="clear"></div>
	
<?php get_footer(); ?>