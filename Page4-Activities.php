<?php 
/**
 * Template Name: Page4 Activities Page
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
					<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 연구소뉴스 > <span>대외활동</span>
				</p>
			</div>
			<div class="subpage">
				<div class="sub-title-bar">
					<span class="subpage-title">대외활동</span><span class="subpage-title-detail"></span>
					<img class="sub-title-icon" src='<?php bloginfo('template_url'); ?>/images/sub/sub_t_img.gif' >
				</div>
				
				<div class="content">
					<div class="cat-bar">
						<ul>
							<li id="cat-total">
								<a href="?cat=default"><span>전체</span></a>
								(<?php 
									$category = get_category_by_slug( 'scholar' ); 
									$tot =  $category->count; 
									$category = get_category_by_slug( 'field' ); 
									$tot +=  $category->count; 
									$category = get_category_by_slug( 'discuss' ); 
									$tot +=  $category->count; 
									$category = get_category_by_slug( 'interview' ); 
									$tot +=  $category->count;
									$category = get_category_by_slug( 'lecture' ); 
									$tot +=  $category->count;
									$category = get_category_by_slug( 'etc' ); 
									$tot +=  $category->count; 
									echo $tot;
								?>)
							|</li>
							<li id="cat-1">
								<a href="?cat=scholar">학술활동</a>
								(<?php $category = get_category_by_slug( 'scholar' ); echo $category->count; ?>)
							|</li>
							<li id="cat-2">
								<a href="?cat=field">현장활동</a>
								(<?php $category = get_category_by_slug( 'field' ); echo $category->count; ?>)	
							|</li>
							<li id="cat-3">
								<a href="?cat=discuss">토론회</a>
								(<? $category = get_category_by_slug( 'discuss' ); echo $category->count; ?>)
							|</li>
							<li id="cat-4">
								<a href="?cat=interview">인터뷰</a>
								(<? $category = get_category_by_slug( 'interview' ); echo $category->count; ?>)
							|</li>
							<li id="cat-5">
								<a href="?cat=lecture">강의</a>
								(<? $category = get_category_by_slug( 'lecture' ); echo $category->count; ?>)
							|</li>
							<li id="cat-6">
								<a href="?cat=etc">기타</a>
								(<? $category = get_category_by_slug( 'etc' ); echo $category->count; ?>)
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
						
						if( $cat ==  'scholar' ) {
							query_posts(array(
								'cat' => getScholarCategoryNum(),
								'posts_per_page' => 10,
								'paged' => $paged
								)					
							);
						}
						else if( $cat ==  'field' ) {
							query_posts(array(
								'cat' => getFieldCategoryNum(),
								'posts_per_page' => 10,
								'paged' => $paged
								)					
							);
						}
						else if( $cat ==  'discuss' ) {
							query_posts(array(
								'cat' => getDiscussCategoryNum(),
								'posts_per_page' => 10,
								'paged' => $paged
								)					
							);
						}
						else if( $cat ==  'interview' ) {
							query_posts(array(
								'cat' => getInterviewCategoryNum(),
								'posts_per_page' => 10,
								'paged' => $paged
								)					
							);
						}
						else if( $cat ==  'lecture' ) {
							query_posts(array(
								'cat' => getLectureCategoryNum(),
								'posts_per_page' => 10,
								'paged' => $paged
								)					
							);
						}
						else if( $cat ==  'etc' ) {
							query_posts(array(
								'cat' => getEtcCategoryNum(),
								'posts_per_page' => 10,
								'paged' => $paged
								)					
							);
						}
						else {
							query_posts(array(
								'cat' => getActivitiesCategoryNum(),
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
									if($category[1]->cat_ID != null){
										if($category[1]->cat_ID < 31)
											echo $category[1]->cat_name;
										else
											echo $category[0]->cat_name;
									}
									else										
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
					
				</div><!--close content-->
			</div><!--close subpage-->
		</div><!--close content-panel-->
		<div class="clear"></div>
	</div><!--close subpage_fixed-->
</div><!--close subpage_stretched-->
<div class="clear"></div>
	
<?php get_footer(); ?>