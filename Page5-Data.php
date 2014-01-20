<?php 
/**
 * Template Name: Page5 Data Page
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
					<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 자료실 > <span>연구자료</span>
				</p>
			</div>
			<div class="subpage">
				<div class="sub-title-bar">
					<span class="subpage-title">연구자료</span><span class="subpage-title-detail"></span>
					<img class="sub-title-icon" src='<?php bloginfo('template_url'); ?>/images/sub/sub_t_img.gif' >
				</div>
				
				<div class="content">
					
					<div class="cat-bar">
						<ul>
							<li class="board-category-li" id="cat-total">
								<a href="?cat=default"><span>전체</span></a>
								(<?php 
									$category = get_category_by_slug( 'tax' ); 
									$tot =  $category->count; 
									$category = get_category_by_slug( 'city' ); 
									$tot +=  $category->count; 
									$category = get_category_by_slug( 'north' ); 
									$tot +=  $category->count; 
									$category = get_category_by_slug( 'alternative' ); 
									$tot +=  $category->count;
									$category = get_category_by_slug( 'justice' ); 
									$tot +=  $category->count;
									$category = get_category_by_slug( 'etc2' ); 
									$tot +=  $category->count; 
									echo $tot;
								?>)
							|</li>
							<li class="board-category-li" id="cat-tax">
								<a href="?cat=tax"><span>조세재정</span></a>
								(<?php $category = get_category_by_slug( 'tax' ); echo $category->count; ?>)
							|</li>
							<li class="board-category-li" id="cat-city">
								<a href="?cat=city"><span>도시재생</span></a>
								(<?php $category = get_category_by_slug( 'city' ); echo $category->count; ?>)	
							|</li>
							<li class="board-category-li" id="cat-north">
								<a href="?cat=north"><span>통일북한</span></a>
								(<?php $category = get_category_by_slug( 'north' ); echo $category->count; ?>)
							|</li>
							<li class="board-category-li" id="cat-alter">
								<a href="?cat=alternative"><span>대안체제</span></a>
								(<?php $category = get_category_by_slug( 'alternative' ); echo $category->count; ?>)
							|</li>
							<li class="board-category-li" id="cat-justice">
								<a href="?cat=justice"><span>사회정의론</span></a>
								(<?php $category = get_category_by_slug( 'justice' ); echo $category->count; ?>)
							|</li>
							<li class="board-category-li" id="cat-etc">
								<a href="?cat=etc2"><span>기타</span></a>
								(<?php $category = get_category_by_slug( 'etc2' ); echo $category->count; ?>)
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
						
						if( $cat ==  'tax' ) {
							query_posts(array(
								'cat' => getTaxCategoryNum(),
								'posts_per_page' => 10,
								'paged' => $paged
								)					
							);
						}
						else if( $cat ==  'city' ) {
							query_posts(array(
								'cat' => getCityCategoryNum(),
								'posts_per_page' => 10,
								'paged' => $paged
								)					
							);
						}
						else if( $cat ==  'north' ) {
							query_posts(array(
								'cat' => getNorthCategoryNum(),
								'posts_per_page' => 10,
								'paged' => $paged
								)					
							);
						}
						else if( $cat ==  'alternative' ) {
							query_posts(array(
								'cat' => getAlternativeCategoryNum(),
								'posts_per_page' => 10,
								'paged' => $paged
								)					
							);
						}
						else if( $cat ==  'justice' ) {
							query_posts(array(
								'cat' => getJusticeCategoryNum(),
								'posts_per_page' => 10,
								'paged' => $paged
								)					
							);
						}
						else if( $cat ==  'etc2' ) {
							query_posts(array(
								'cat' => getEtc2CategoryNum(),
								'posts_per_page' => 10,
								'paged' => $paged
								)					
							);
						}
						else {
							query_posts(array(
								'cat' => getDataCategoryNum(),
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
							<div class="cat ellipsis">
								<?php
									$category = get_the_category(); 
									echo $category[0]->cat_name;
								?>
							</div>
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