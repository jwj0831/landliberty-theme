<?php get_header() ?>
	<div class="clear"></div>	
	<div id="main">
		<?php include (TEMPLATEPATH . '/nav.php'); ?> 
		<div id="main_top">
			<div id="top_col1">
				<div id="slide">
					<?php dynamic_sidebar('slider'); ?>
				</div>
			</div>
			<div id="top_col2">
				<div id="column">
					<div class="column-title-box">
						<div class="title">
							<img src='<?php bloginfo('template_url'); ?>/images/icon_column.gif' alt='칼럼'>
							<span id="column-label">칼럼</span>
							<span class="more">+</span>
						</div>
					</div>
					<div id="column-content">
						<?php
						$args = array(
								'cat' => getColumnCategoryNum(),
								'posts_per_page' => 1,
								);
						
						$custom_query = new WP_Query($args);
						while($custom_query->have_posts()) : $custom_query->the_post();
							$id = get_the_ID();
						?>
						<div class="column-img">
								<a href="<?php echo get_permalink($id) ?>" title="<?php the_title(); ?>" >
									<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'excerpt-thumbnail');
										$url = $thumb['0'];
									?>		
									<img width=80 height=80 src=<?= $url ?>>
								</a>
						</div>
						
						<div class="column-title">
							<a href="<?php echo get_permalink($id) ?>" title="<?php the_title(); ?>" >
								<?php 
									$len = mb_strlen(get_the_title(), "UTF-8");
									if($len > 16) {
										echo mb_substr(get_the_title(), 0, 16, 'UTF-8');
										echo "...";
									} 
									else
										echo get_the_title();
								?>
							</a>
						</div>
						<div class="column-text">
								<a href="<?php echo get_permalink($id) ?>" title="<?php the_title(); ?>" >
									<?php echo mb_substr(get_the_excerpt(), 0, 100, 'UTF-8'); ?> ...				
								</a>
						</div>
						<?php endwhile; 
						wp_reset_query(); ?>
					</div>
				</div>
				<div id="support_ban">
					<a id= href="<?php echo home_url() ?>">
						<img src='<?php bloginfo('template_url'); ?>/images/main_support.gif' alt='연구소 후원'>
					</a>
				</div>
			</div>
		</div><!--close main_top-->
		
		<div id="main_middle">
			<div id="research_col" class="middle-col">
				<div id="col1" class="title-box">
					<div class="title">
						<h3>토지+자유 연구</h3>
						<span class="more">+</span>
					</div>
				</div>
				<div class="front-col-content">
					<?php
					$args = array(
							'cat' => getResearchCategoryNum(),
							'posts_per_page' => 2,
							);
					
					$custom_query = new WP_Query($args);
					while($custom_query->have_posts()) : $custom_query->the_post();
						$id = get_the_ID();
					?>
					<div class="news_row">
						<h3>
							<a href="<?php echo get_permalink($id) ?>" title="<?php the_title(); ?>" >
								<?php 
									$len = mb_strlen(get_the_title(), "UTF-8");
									if($len > 24) {
										echo mb_substr(get_the_title(), 0, 24, 'UTF-8');
										echo "...";
									} 
									else
										echo get_the_title();
								?>
							</a>
						</h3>
						<div class="news_img">
							<a href="<?php echo get_permalink($id) ?>" title="<?php the_title(); ?>" >
								<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'excerpt-thumbnail');
									$url = $thumb['0'];
								?>		
								<img width=76 height=60 src=<?= $url ?>>
							</a>
						</div>
						<div class="news_date">
							<?php the_time('Y. j. d') ?>
						</div>
						
						<div class="news_text">
							<a href="<?php echo get_permalink($id) ?>" title="<?php the_title(); ?>" >
								<?php echo mb_substr(get_the_excerpt(), 0, 50, 'UTF-8'); ?> ...				
							</a>
						</div>
					</div>
					
					<?php endwhile; 
					wp_reset_query(); ?>
					
				</div><!--close front_col-content-->
			</div><!--close research_col-->
			<div id="report_col" class="middle-col">
				<div id="col2" class="title-box">
					<div class="title">
						<h3>토지+자유 리포트</h3>
						<span class="more">+</span>
					</div>
				</div>
				<div class="front-col-content">
					<?php
					$args = array(
							'cat' => getReportCategoryNum(),
							'posts_per_page' => 2,
							);
					
					$custom_query = new WP_Query($args);
					while($custom_query->have_posts()) : $custom_query->the_post();
						$id = get_the_ID();
					?>
					<div class="news_row">
						<h3>
							<a href="<?php echo get_permalink($id) ?>" title="<?php the_title(); ?>" >
								<?php 
									$len = mb_strlen(get_the_title(), "UTF-8");
									if($len > 24) {
										echo mb_substr(get_the_title(), 0, 24, 'UTF-8');
										echo "...";
									} 
									else
										echo get_the_title();
								?>
							</a>
						</h3>
						<div class="news_img">
							<a href="<?php echo get_permalink($id) ?>" title="<?php the_title(); ?>" >
								<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'excerpt-thumbnail');
									$url = $thumb['0'];
								?>		
								<img width=76 height=60 src=<?= $url ?>>
							</a>
						</div>
						<div class="news_date">
							<?php the_time('Y. j. d') ?>
						</div>
						
						<div class="news_text">
							<a href="<?php echo get_permalink($id) ?>" title="<?php the_title(); ?>" >
								<?php echo mb_substr(get_the_excerpt(), 0, 50, 'UTF-8'); ?> ...				
							</a>
						</div>
					</div>
					<?php endwhile; 
					wp_reset_query(); ?>
				</div><!--close front_col-content-->
			</div><!--close resport_col-->
			<div id="review_col" class="middle-col">
				<div id="col3"class="title-box">
					<div class="title">
						<h3>토지+자유 비평</h3>
						<span class="more">+</span>
					</div>
				</div>
				<div class="front-col-content">
					<?php
					$args = array(
							'cat' => getReviewCategoryNum(),
							'posts_per_page' => 2,
							);
					
					$custom_query = new WP_Query($args);
					while($custom_query->have_posts()) : $custom_query->the_post();
						$id = get_the_ID();
					?>
					<div class="news_row">
						<h3>
							<a href="<?php echo get_permalink($id) ?>" title="<?php the_title(); ?>" >
								<?php 
									$len = mb_strlen(get_the_title(), "UTF-8");
									if($len > 24) {
										echo mb_substr(get_the_title(), 0, 24, 'UTF-8');
										echo "...";
									} 
									else
										echo get_the_title();
								?>
							</a>
						</h3>
						<div class="news_img">
							<a href="<?php echo get_permalink($id) ?>" title="<?php the_title(); ?>" >
								<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'excerpt-thumbnail');
									$url = $thumb['0'];
								?>		
								<img width=76 height=60 src=<?= $url ?>>
							</a>
						</div>
						<div class="news_date">
							<?php the_time('Y. j. d') ?>
						</div>
						
						<div class="news_text">
							<a href="<?php echo get_permalink($id) ?>" title="<?php the_title(); ?>" >
								<?php echo mb_substr(get_the_excerpt(), 0, 50, 'UTF-8'); ?> ...				
							</a>
						</div>
					</div>
					<?php endwhile; 
					wp_reset_query(); ?>
				</div><!--close front_col-content-->
			</div><!--close review_col-->
		</div><!--close main_middle-->
		<div class="clear"></div>	
		<div id="main_low">
			<div id="low_col1">
				<div id="mailing">
					<div id="mail-title">
						<span id="reg">등록하시면, </span><span id="detail">연구소 소식을 메일로 보내드립니다</span>
					</div>
					<div id="mail-form">
						<?php dynamic_sidebar('mailing'); ?>
					</div>
				</div>
				<div id="book">
					<?php do_action('slideshow_deploy', '19'); ?>
				</div>
			</div>
			<div id="low_col2">
				<div id="notice">
					<div class="title-box">
						<div class="title">
							<h3>공지사항</h3><span class="more">+</span>
						</div>
					</div>
					<div class="post-title-list">
						<?php
						$args = array(
								'cat' => getNoticeCategoryNum(),
								'posts_per_page' => 4,
								);
						$custom_query = new WP_Query($args);
						while($custom_query->have_posts()) : $custom_query->the_post();
							$id = get_the_ID();
						?>
						<div class="title_row"> 
							<div class="post-title"> 
								<h3>∙ 
									<a href="<?php echo get_permalink($id) ?>" title="<?php the_title(); ?>" >
										<?php 
											$len = mb_strlen(get_the_title(), "UTF-8");
											if($len > 16) {
												echo mb_substr(get_the_title(), 0, 16, 'UTF-8');
												echo "...";
											} 
											else
												echo get_the_title();
										?>
									</a>
								</h3>
							</div>
							<div class="date">
								<?php the_time('Y/m/d') ?>
							</div>
						</div>
						
						<?php endwhile; 
						wp_reset_query(); ?>
					</div>
				</div>
				<div id="news">
					<div class="title-box">
						<div class="title">
							<h3>연구소 뉴스</h3><span class="more">+</span>
						</div>
					</div>
					
					<div class="post-title-list">
						<?php
						$args = array(
								'cat' => getNewsCategoryNum(),
								'posts_per_page' => 4,
								);
						$custom_query = new WP_Query($args);
						while($custom_query->have_posts()) : $custom_query->the_post();
							$id = get_the_ID();
						?>
						<div class="title_row"> 
							<div class="post-title"> 
								∙ 
								<a href="<?php echo get_permalink($id) ?>" title="<?php the_title(); ?>" >
									<?php 
										$len = mb_strlen(get_the_title(), "UTF-8");
										if($len > 16) {
											echo mb_substr(get_the_title(), 0, 16, 'UTF-8');
											echo "...";
										} 
										else
											echo get_the_title();
									?>
								</a>
							</div>
							<div class="date">
								<?php the_time('Y/m/d') ?>
							</div>
						</div>
						
						<?php endwhile; 
						wp_reset_query(); ?>
					</div>
					
				</div>
			</div>
			<div id="low_col3">
				<div class="fb-like-box" data-href="https://www.facebook.com/landliberty" data-width="332" data-height="370" data-show-faces="false" data-stream="true" data-show-border="false" data-header="true"></div>
			</div>
		</div><!--close main_low-->
		
		<div id="family">
			<div id="family-label">
				<span>관련단체</span>
			</div>
			<div class="family-ban">
				<a href="http://www.landliberty.org" target="_blank"><img src='<?php bloginfo('template_url'); ?>/images/family1.gif' alt='희년함께'></a>
			</div>
			<div class="family-ban">
				<a href="http://www.lincolninst.edu" target="_blank"><img src='<?php bloginfo('template_url'); ?>/images/family2.gif' alt='링컨토지정책연구소'></a>
			</div>
			<div class="family-ban">
				<a href="http://www.landjustice.or.kr" target="_blank"><img src='<?php bloginfo('template_url'); ?>/images/family3.gif' alt='토지정의시민연대'></a>
			</div>
			<div class="family-ban">
				<a href="http://www.hananuri.org" target="_blank"><img src='<?php bloginfo('template_url'); ?>/images/family4.gif' alt='하나누리'></a>
			</div>
		</div>
		
	</div><!--close main-->
<?php get_footer() ?>							