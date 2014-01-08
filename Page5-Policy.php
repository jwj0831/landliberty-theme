<?php 
/**
 * Template Name: Page5 Policy Page
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
					<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 자료실 > <span>정책자료</span>
				</p>
			</div>
			<div class="subpage">
				<div class="sub-title-bar">
					<span class="subpage-title">정책자료</span><span class="subpage-title-detail"></span>
					<img class="sub-title-icon" src='<?php bloginfo('template_url'); ?>/images/sub/sub_t_img.gif' >
				</div>
				
				<div class="content">
					
					<div class="cat-bar">
						<ul>
							<li id="cat-total">
								<a href="?cat=default"><span>전체</span></a>
								(<?php 
									$category = get_category_by_slug( 'molit' ); 
									$tot =  $category->count; 
									$category = get_category_by_slug( 'mosf' ); 
									$tot +=  $category->count; 
									$category = get_category_by_slug( 'mou' ); 
									$tot +=  $category->count; 
									$category = get_category_by_slug( 'statistics' ); 
									$tot +=  $category->count;
									$category = get_category_by_slug( 'etc3' ); 
									$tot +=  $category->count; 
									echo $tot;
								?>)
							|</li>
							<li id="cat-1">
								<a href="?cat=molit">국토교통부</a> 
								(<?php $category = get_category_by_slug( 'molit' ); echo $category->count; ?>)
							|</li>
							<li id="cat-2">
								<a href="?cat=mosf">기획재정부</a> 
								(<?php $category = get_category_by_slug( 'mosf' ); echo $category->count; ?>)
							|</li>
							<li id="cat-3">
								<a href="?cat=mou">통일부</a> 
								(<?php $category = get_category_by_slug( 'mou' ); echo $category->count; ?>)
							|</li>
							<li id="cat-4">
								<a href="?cat=statistics">통계자료</a> 
								(<?php $category = get_category_by_slug( 'statistics' ); echo $category->count; ?>)
							|</li>
							<li id="cat-5">
								<a href="?cat=etc3">기타</a> 
								(<?php $category = get_category_by_slug( 'etc3' ); echo $category->count; ?>)
							</li>
						</ul>
					</div>
					<div class="cat-board">
						<div class="board-meta-bar">
							<span class="cat">분류</span>
							<span class="title">제목</span>
							<span class="writer">글쓴이</span>
							<span class="count">조회수</span>
							<span class="date">날짜</span>
						</div>
						<?php
						if ( get_query_var('paged') ) {
	                        $paged = get_query_var('paged');
		                } elseif ( get_query_var('page') ) {
		                        $paged = get_query_var('page');
		                } else {
		                        $paged = 1;
		                }
						
						$cat = 'default';
						$cat = htmlspecialchars($_GET["cat"]);
						
						if( $cat ==  'molit' ) {
							query_posts(array(
								'cat' => getMOLITCategoryNum(),
								'posts_per_page' => 10,
								'paged' => $paged
								)					
							);
						}
						else if( $cat ==  'mosf' ) {
							query_posts(array(
								'cat' => getMOSFCategoryNum(),
								'posts_per_page' => 10,
								'paged' => $paged
								)					
							);
						}
						else if( $cat ==  'mou' ) {
							query_posts(array(
								'cat' => getMOUCategoryNum(),
								'posts_per_page' => 10,
								'paged' => $paged
								)					
							);
						}
						else if( $cat ==  'statistics' ) {
							query_posts(array(
								'cat' => getStatisticsCategoryNum(),
								'posts_per_page' => 10,
								'paged' => $paged
								)					
							);
						}
						else if( $cat ==  'etc3' ) {
							query_posts(array(
								'cat' => getEtc3CategoryNum(),
								'posts_per_page' => 10,
								'paged' => $paged
								)					
							);
						}
						else {
							query_posts(array(
								'cat' => getPolicyCategoryNum(),
								'posts_per_page' => 10,
								'paged' => $paged
								)					
							);
						}
						
						$posts = new WP_Query($args);
						while( have_posts()) : 
							the_post();
							$id = get_the_ID();
						?>
						<div class="list-row">
							<div class="cat">
								<?php
									$category = get_the_category(); 
									echo $category[0]->cat_name;
								?>
							</div>
							<div class="title">
								<a href="<?php echo get_permalink($id) ?>" title="<?php the_title(); ?>" >
									<?php 
										$title = get_the_title();
										$len = mb_strlen($title, "UTF-8");
										if($len > 28) {
											echo mb_substr($title, 0, 28, "UTF-8");
											echo "...";
										} 
										else
											echo $title;
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
						
						<div class="board_nav">
							<?php wp_pagenavi(); ?>
						</div>
						
						<?php wp_reset_query(); ?>
					</div><!--close board-->
					
				</div> <!--close content-->
			</div><!--close subpage-->
		</div><!--close content-panel-->
		<div class="clear"></div>
	</div><!--close subpage_fixed-->
</div><!--close subpage_stretched-->
<div class="clear"></div>
	
<?php get_footer(); ?>