<?php get_header(); ?> 
<div class="subpage_stretched">
<?php include (TEMPLATEPATH . '/nav.php'); ?> 
	<div class="subpage_fixed">
		<?php include (TEMPLATEPATH . '/sidebar.php'); ?> 
		
		<div id="content-panel">
			<div class="breadcrumb">
				<p>
					<?php 
					if( in_category( array( getNoticeCategoryNum(), getNoticeFixCategoryNum() ) ) )  { ?>
						<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 토지+자유연구소 > <span>공지사항</span>
					<?php } 
					else if( in_category( array( getStudyCategoryNum() ) ) ) { ?>
						<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 연구활동 > <span>토지+자유 연구</span>
					<?php } 
					else if( in_category( array( getReportCategoryNum() ) ) ) { ?>
						<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 연구활동 > <span>토지+자유 리포트</span>
					<?php } 
					else if( in_category( array( getReviewCategoryNum() ) ) ) { ?>
						<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 연구활동 > <span>토지+자유 비평</span>
					<?php } 
					else if( in_category( array( getColumnCategoryNum() ) ) ) { ?>
						<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 연구활동 > <span>칼럼</span>
					<?php } 
					else if( in_category( array( getIssueCategoryNum() ) ) ) { ?>
						<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 연구활동 > <span>한반도 현안 톺아보기</span>
					<?php } 
					else if( in_category( array( getStoryCategoryNum() ) ) ) { ?>
						<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 매거진 > <span>연구소 이야기</span>
					<?php } 
					else if( in_category( array( getNewsCategoryNum() ) ) ) { ?>
						<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 매거진 > <span>연구소 소식</span>
					<?php } 
					else if( in_category( array( getPressCategoryNum(), getPressFixCategoryNum() ) ) ) { ?>
						<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 연구소뉴스 > <span>언론보도</span>
					<?php } 
					else if( in_category( array( getEventCategoryNum() ) ) ) { ?>
						<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 연구소뉴스 > <span>연구소 행사</span>
					<?php } 
					else if( in_category( array( getActivitiesCategoryNum(), getPressFixCategoryNum(), 
												getScholarCategoryNum(), getFieldCategoryNum(), 
												getDiscussCategoryNum(), getInterviewCategoryNum(), 
												getLectureCategoryNum(), getEtcCategoryNum() ) ) 
					) { ?>
						<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 연구소뉴스 > <span>대외활동</span>
					<?php } 
					else if( in_category( array( getDataCategoryNum(), getTaxCategoryNum(), 
												getCityCategoryNum(), getNorthCategoryNum(), 
												getAlternativeCategoryNum(), getJusticeCategoryNum(), getEtc2CategoryNum() ) ) 
					) { ?>
						<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 자료실 > <span>연구자료</span>
					<?php } 
					else if( in_category( array( getPolicyCategoryNum(),getMOLITCategoryNum(), 
												getMOSFCategoryNum(), getMOUCategoryNum(), 
												getStatisticsCategoryNum(),	getEtc3CategoryNum() ) ) 
					) { ?>
						<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 자료실 > <span>정책자료</span>
					<?php } 
					else if( in_category( array( getPicCategoryNum() ) ) ) { ?>
						<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 자료실 > <span>사진자료</span>
					<?php } 
					else if( in_category( array( getMovieCategoryNum() ) ) ) { ?>
						<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 자료실 > <span>영상자료</span>
					<?php } 
					else if( in_category( array( getBookCategoryNum() ) ) ) { ?>
						<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 자료실 > <span>도서안내</span>
					<?php }
					else if( in_category( array( getFinanceCategoryNum(), getFinanceFixCategoryNum() ) ) ) { ?>
						<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 후원 > <span>재정보고</span>
					<?php } ?>
				</p>
			</div>
			<div class="subpage">
				<div class="sub-title-bar">
					<?php 
					if( in_category( array( getNoticeCategoryNum(), getNoticeFixCategoryNum() ) ) )  { ?>
						<span class="subpage-title">공지사항</span><span class="subpage-title-detail"></span>
					<?php } 
					else if( in_category( array( getStudyCategoryNum() ) ) ) { ?>
						<span class="subpage-title">토지+자유 연구</span><span class="subpage-title-detail">Land and Liberty Studies</span>
					<?php } 
					else if( in_category( array( getReportCategoryNum() ) ) ) { ?>
						<span class="subpage-title">토지+자유 리포트</span><span class="subpage-title-detail">Land and Liberty Report</span>
					<?php } 
					else if( in_category( array( getReviewCategoryNum() ) ) ) { ?>
						<span class="subpage-title">토지+자유 비평</span><span class="subpage-title-detail">Land and Liberty Review</span>
					<?php }
					else if( in_category( array( getColumnCategoryNum() ) ) ) { ?>
						<span class="subpage-title">토지+자유 칼럼</span><span class="subpage-title-detail">Land and Liberty Column</span>
					<?php }
					else if( in_category( array( getIssueCategoryNum() ) ) ) { ?>
						<span class="subpage-title">한반도 현안 톺아보기</span><span class="subpage-title-detail">Analysis of the Korean Peninsula issues</span>
					<?php } 
					else if( in_category( array( getStoryCategoryNum() ) ) ) { ?>
						<span class="subpage-title">토지+자유 이야기</span><span class="subpage-title-detail"></span>
					<?php } 
					else if( in_category( array( getNewsCategoryNum() ) ) ) { ?>
						<span class="subpage-title">토지+자유 소식</span><span class="subpage-title-detail"></span>	
					<?php }
					else if( in_category( array( getPressCategoryNum(), getPressFixCategoryNum() ) ) ) { ?>
						<span class="subpage-title">언론보도</span><span class="subpage-title-detail"></span>
					<?php } 
					else if( in_category( array( getEventCategoryNum() ) ) ) { ?>
						<span class="subpage-title">연구소 행사</span><span class="subpage-title-detail"></span>
					<?php } 
					else if( in_category( array( getActivitiesCategoryNum(), getPressFixCategoryNum(), 
												getScholarCategoryNum(), getFieldCategoryNum(), 
												getDiscussCategoryNum(), getInterviewCategoryNum(), 
												getLectureCategoryNum(), getEtcCategoryNum() ) ) 
					) { ?>
						<span class="subpage-title">대외활동</span><span class="subpage-title-detail"></span>
					<?php } 
					else if( in_category( array( getDataCategoryNum(), getTaxCategoryNum(), 
												getCityCategoryNum(), getNorthCategoryNum(), 
												getAlternativeCategoryNum(), getJusticeCategoryNum(), getEtc2CategoryNum() ) ) 
					) { ?>
						<span class="subpage-title">연구자료</span><span class="subpage-title-detail"></span>	
					<?php }
					else if( in_category( array( getPolicyCategoryNum(),getMOLITCategoryNum(), 
												getMOSFCategoryNum(), getMOUCategoryNum(), 
												getStatisticsCategoryNum(),	getEtc3CategoryNum() ) ) 
					) { ?>
						<span class="subpage-title">정책자료</span><span class="subpage-title-detail"></span>
					<?php } 
					else if( in_category( array( getPicCategoryNum() ) ) ) { ?>
						<span class="subpage-title">사진자료</span><span class="subpage-title-detail"></span>
					<?php } 
					else if( in_category( array( getMovieCategoryNum() ) ) ) { ?>
						<span class="subpage-title">영상자료</span><span class="subpage-title-detail"></span>
					<?php } 
					else if( in_category( array( getBookCategoryNum() ) ) ) { ?>
						<span class="subpage-title">도서안내</span><span class="subpage-title-detail"></span>
					<?php } 
					else if( in_category( array( getFinanceCategoryNum(), getFinanceFixCategoryNum() ) ) ) { ?>
						<span class="subpage-title">재정보고</span><span class="subpage-title-detail">재정보고 자세하게...</span>
					<?php } ?>
					
					<img class="sub-title-icon" src='<?php bloginfo('template_url'); ?>/images/sub/sub_t_img.gif' >
				</div>
	  
	  
		  		<div id="content">
				    <?php the_post(); ?>       
				    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				    	<div class="post-main">
					        <div class="single-post-title">
				        		<?php the_title(); ?>
					        </div>
					        
					        <div class="post-meta-data">
					        	<b>글쓴이: <?php the_author()?></b> | 작성일: <?php the_time('F j, Y') ?> | 조회수: <?php the_views(); ?>
					        	<div class="post-list">
					        		<?php 
									if( in_category( array( getNoticeCategoryNum(), getNoticeFixCategoryNum() ) ) )  { ?>
										<a href="<?php echo home_url() ?>/landliberty/notice">
									<?php } 
									else if( in_category( array( getStudyCategoryNum() ) ) ) { ?>
										<a href="<?php echo home_url() ?>/researches/study">
									<?php } 
									else if( in_category( array( getReportCategoryNum() ) ) ) { ?>
										<a href="<?php echo home_url() ?>/researches/report">
									<?php } 
									else if( in_category( array( getReviewCategoryNum() ) ) ) { ?>
										<a href="<?php echo home_url() ?>/researches/review">
									<?php } 
									else if( in_category( array( getColumnCategoryNum() ) ) ) { ?>
										<a href="<?php echo home_url() ?>/researches/column">
									<?php } 
									else if( in_category( array( getIssueCategoryNum() ) ) ) { ?>
										<a href="<?php echo home_url() ?>/researches/korean-issue">
									<?php } 
									else if( in_category( array( getStoryCategoryNum() ) ) ) { ?>
										<a href="<?php echo home_url() ?>/magazine/story">
									<?php } 
									else if( in_category( array( getNewsCategoryNum() ) ) ) { ?>
										<a href="<?php echo home_url() ?>/magazine/news">
									<?php } 
									else if( in_category( array( getPressCategoryNum(), getPressFixCategoryNum() ) ) ) { ?>
										<a href="<?php echo home_url() ?>/research-news/press">
									<?php } 
									else if( in_category( array( getEventCategoryNum() ) ) ) { ?>
										<a href="<?php echo home_url() ?>/research-news/event">
									<?php } 
									else if( in_category( array( getActivitiesCategoryNum(), getPressFixCategoryNum(), 
																getScholarCategoryNum(), getFieldCategoryNum(), 
																getDiscussCategoryNum(), getInterviewCategoryNum(), 
																getLectureCategoryNum(), getEtcCategoryNum() ) )
									) { ?>
										<a href="<?php echo home_url() ?>/research-news/activities"> 
									<?php } 
									else if( in_category( array( getDataCategoryNum(), getTaxCategoryNum(), 
																getCityCategoryNum(), getNorthCategoryNum(), 
																getAlternativeCategoryNum(), getJusticeCategoryNum(), getEtc2CategoryNum() ) ) 
									) { ?>
										<a href="<?php echo home_url() ?>/reference/data"> 
									<?php } 
									else if( in_category( array( getPolicyCategoryNum(),getMOLITCategoryNum(), 
																getMOSFCategoryNum(), getMOUCategoryNum(), 
																getStatisticsCategoryNum(),	getEtc3CategoryNum() ) ) 
									) { ?>
										<a href="<?php echo home_url() ?>/reference/policy">
									<?php } 
									else if( in_category( array( getPicCategoryNum() ) ) ) { ?>
										<a href="<?php echo home_url() ?>/reference/picture">
									<?php } 
									else if( in_category( array( getMovieCategoryNum() ) ) ) { ?>
										<a href="<?php echo home_url() ?>/reference/movie">
									<?php } 
									else if( in_category( array( getBookCategoryNum() ) ) ) { ?>
										<a href="<?php echo home_url() ?>/reference/book">
									<?php }
									else if( in_category( array( getFinanceCategoryNum(), getFinanceFixCategoryNum() ) ) ) { ?>
										<a href="<?php echo home_url() ?>/support/finance">
									<?php } ?>
				    				<img src='<?php bloginfo('template_url'); ?>/images/post-lists.gif'></a> 
				    			</div>
					        </div>
					        <section>
					        	<div class="post-content">
					          		<?php the_content( ); ?>
					         	</div>
					        </section> <!-- close article section -->  
				       </div>
				    </article>
				    <div id="reply">
				    	<?php comments_template('', true); ?>
				    </div>
		  		</div><!--close content-->
		  	</div><!--close subpage-->
  		</div><!--close content-panel-->
	  	<div class="clear"></div>
  	</div><!--close subpage_fixed-->
</div><!--close subpage_stretched-->
<div class="clear"></div>



<?php get_footer(); ?>