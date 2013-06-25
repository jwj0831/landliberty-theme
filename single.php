<?php get_header(); ?> 
<div class="subpage_stretched">
<?php include (TEMPLATEPATH . '/nav.php'); ?> 
	<div class="subpage_fixed">
		<?php include (TEMPLATEPATH . '/sidebar.php'); ?> 
		
		<?php $category = getParentCatID(); ?>
		
		<div id="content-panel">
			<div class="breadcrumb">
				<p>
					<?php 
					if( $category == getNoticeCategoryNum() or $category == getNoticeFixCategoryNum() ) { ?>
						<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 토지+자유연구소 > <span>공지사항</span>
					<?php } 
					else if( $category == getResearchCategoryNum() ) { ?>
						<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 연구활동 > <span>토지+자유 연구</span>
					<?php } 
					else if( $category == getReportCategoryNum() ) { ?>
						<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 연구활동 > <span>토지+자유 리포트</span>
					<?php } 
					else if( $category == getReviewCategoryNum() ) { ?>
						<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 연구활동 > <span>토지+자유 비평</span>
					<?php } 
					else if( $category == getMagazineCategoryNum() ) { ?>
						<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 매거진 > <span>칼럼</span>
					<?php } 
					else if( $category == getColumnCategoryNum() ) { ?>
						<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 매거진 > <span>칼럼</span>
					<?php } 
					else if( $category == getStoryCategoryNum() ) { ?>
						<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 매거진 > <span>연구소 이야기</span>
					<?php } 
					else if( $category == getNewsCategoryNum() ) { ?>
						<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 매거진 > <span>연구소 소식</span>
					<?php } 
					else if( $category == getResearchNewsCategoryNum() ) { ?>
						<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 연구소뉴스 > <span>언론보도</span>
					<?php } 
					else if( $category == getPressCategoryNum() or $category == getPressFixCategoryNum() ) { ?>
						<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 연구소뉴스 > <span>언론보도</span>
					<?php } 
					else if( $category == getEventCategoryNum() ) { ?>
						<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 연구소뉴스 > <span>연구소 행사</span>
					<?php } 
					else if( $category == getActivitiesCategoryNum() ) { ?>
						<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 연구소뉴스 > <span>대외활동</span>
					<?php } 
					else if( $category == getReferenceCategoryNum() ) { ?>
						<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 자료실 > <span>연구자료</span>
					<?php } 
					else if( $category == getDataCategoryNum() ) { ?>
						<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 자료실 > <span>연구자료</span>
					<?php } 
					else if( $category == getPolicyCategoryNum() ) { ?>
						<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 자료실 > <span>정책자료</span>
					<?php } 
					else if( $category == getPicCategoryNum() ) { ?>
						<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 자료실 > <span>사진자료</span>
					<?php } 
					else if( $category == getMovieCategoryNum() ) { ?>
						<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 자료실 > <span>영상자료</span>
					<?php } 
					else if( $category == getBookCategoryNum() ) { ?>
						<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 자료실 > <span>도서안내</span>
					<?php }
					else if( in_category( array(25, 'finance') ) or $category == getFinanceFixCategoryNum() ) { ?>
						<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 후원 > <span>재정보고</span>
					<?php } ?>
				</p>
			</div>
			<div class="subpage">
				<div class="sub-title-bar">
					<?php 
					if( $category == getNoticeCategoryNum() or $category == getNoticeFixCategoryNum() )  { ?>
						<span class="subpage-title">공지사항</span><span class="subpage-title-detail">공지사항 자세하게...</span>
					<?php } 
					else if( $category == getResearchCategoryNum() ) { ?>
						<span class="subpage-title">토지+자유 연구</span><span class="subpage-title-detail">토지+자유 연구 자세하게...</span>
					<?php } 
					else if( $category == getReportCategoryNum() ) { ?>
						<span class="subpage-title">토지+자유 리포트</span><span class="subpage-title-detail">토지+자유 리포트 자세하게...</span>
					<?php } 
					else if( $category == getReviewCategoryNum() ) { ?>
						<span class="subpage-title">토지+자유 비평</span><span class="subpage-title-detail">토지+자유 비평 자세하게...</span>
					<?php }
					else if( $category == getMagazineCategoryNum() ) { ?>
						<span class="subpage-title">칼럼</span><span class="subpage-title-detail">칼럼 자세하게...</span>
					<?php } 
					else if( $category == getColumnCategoryNum() ) { ?>
						<span class="subpage-title">칼럼</span><span class="subpage-title-detail">칼럼 자세하게...</span>
					<?php } 
					else if( $category == getStoryCategoryNum() ) { ?>
						<span class="subpage-title">연구소 이야기</span><span class="subpage-title-detail">연구소 이야기 자세하게...</span>
					<?php } 
					else if( $category == getNewsCategoryNum() ) { ?>
						<span class="subpage-title">연구소 소식</span><span class="subpage-title-detail">연구소 소식 자세하게...</span>	
					<?php }
					else if( $category == getResearchNewsCategoryNum() ) { ?>
						<span class="subpage-title">언론보도</span><span class="subpage-title-detail">언론보도 자세하게...</span>
					<?php } 
					else if( $category == getPressCategoryNum() or $category == getPressFixCategoryNum() ) { ?>
						<span class="subpage-title">언론보도</span><span class="subpage-title-detail">언론보도 자세하게...</span>
					<?php } 
					else if( $category == getEventCategoryNum() ) { ?>
						<span class="subpage-title">연구소 행사</span><span class="subpage-title-detail">연구소 행사 자세하게...</span>
					<?php } 
					else if( $category == getActivitiesCategoryNum() ) { ?>
						<span class="subpage-title">대외활동</span><span class="subpage-title-detail">대외활동 자세하게...</span>
					<?php } 
					else if( $category == getReferenceCategoryNum() ) { ?>
						<span class="subpage-title">연구자료</span><span class="subpage-title-detail">연구자료 자세하게...</span>
					<?php } 
					else if( $category == getDataCategoryNum() ) { ?>
						<span class="subpage-title">연구자료</span><span class="subpage-title-detail">연구자료 자세하게...</span>	
					<?php }
					else if( $category == getPolicyCategoryNum() ) { ?>
						<span class="subpage-title">정책자료</span><span class="subpage-title-detail">정책자료 자세하게...</span>
					<?php } 
					else if( $category == getPicCategoryNum() ) { ?>
						<span class="subpage-title">사진자료</span><span class="subpage-title-detail">사진자료 자세하게...</span>
					<?php } 
					else if( $category == getMovieCategoryNum() ) { ?>
						<span class="subpage-title">영상자료</span><span class="subpage-title-detail">영상자료 자세하게...</span>
					<?php } 
					else if( $category == getBookCategoryNum() ) { ?>
						<span class="subpage-title">도서안내</span><span class="subpage-title-detail">도서안내 자세하게...</span>
					<?php } 
					else if( in_category( array(25, 'finance') ) or $category == getFinanceFixCategoryNum() ) { ?>
						<span class="subpage-title">재정보고</span><span class="subpage-title-detail">재정보고 자세하게...</span>
					<?php } ?>
					
					<img class="sub-title-icon" src='<?php bloginfo('template_url'); ?>/images/sub/sub_t_img.gif' >
				</div>
	  
	  
		  		<div id="content">
				    <?php the_post(); ?>       
				    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				    	<div class="post-main">			    	
					        <div class="post-title">
				        		<h2><?php the_title(); ?></h2>
					        </div>
					        
					        <div class="post-meta-data">
					        	<b>글쓴이: <?php the_author()?></b> | 작성일: <?php the_time('F j, Y') ?> | 조회수: <?php the_views(); ?>
					        </div>
					        
					        <section>
					        	<div class="post-content">
					          		<?php the_content( ); ?>
					         	</div>
					        </section> <!-- close article section -->  
				       </div>
				    </article>
				
				<?php comment_form(); ?>
		  		</div><!--close content-->
		  	</div><!--close subpage-->
  		</div><!--close content-panel-->
	  	<div class="clear"></div>
  	</div><!--close subpage_fixed-->
</div><!--close subpage_stretched-->
<div class="clear"></div>



<?php get_footer(); ?>