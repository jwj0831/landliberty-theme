<div id="issue_col" class="middle-col middle-col-right">
	<div id="main-middle-col3" class="title-box">
		<div class="title">
			<h3>한반도 현안 톺아보기</h3>
			<a href="<?php echo getIssuePageURL() ?>" ><span class="more">+</span></a>
		</div>
	</div>
	<div class="front-col-content">
		<?php
		$args = array(
				'cat' => getIssueCategoryNum(),
				'posts_per_page' => 2,
				);
		
		$custom_query = new WP_Query($args);
		while($custom_query->have_posts()) : $custom_query->the_post();
			$id = get_the_ID();
		?>
		<div class="news_row">
			<h3>
				<a class="ellipsis" href="<?php echo get_permalink($id) ?>" title="<?php the_title(); ?>" >
					<?php echo get_the_title(); ?>
				</a>
			</h3>
			<div class="news_img">
				<a href="<?php echo get_permalink($id) ?>" title="<?php the_title(); ?>" >
					<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'excerpt-thumbnail');
						$thumb_img_url = $thumb['0'];
						$first_img_url = catch_that_image();
						if($thumb_img_url == "none")
							$url = $first_img_url;
						else 
							$url = $thumb_img_url;
					?>		
					<img class="news-featured-img" src=<?php echo $url; ?>>
				</a>
			</div>
			<div class="news_date">
				<?php the_time('Y/m/d') ?>
			</div>
			
			<div class="news_text">
				<a href="<?php echo get_permalink($id) ?>" title="<?php the_title(); ?>" >
					<?php echo mb_substr(get_the_excerpt(), 0, 	$news_text_str_num, 'UTF-8'); ?> ...				
				</a>
			</div>
		</div>
		<?php endwhile; 
		wp_reset_query(); ?>
	</div><!--close front_col-content-->
</div><!--close issue_col-->