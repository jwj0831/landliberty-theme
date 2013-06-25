<?php $category = getParentCatID(); ?>

<?php 
	if( is_search() ) {
		echo '<aside id="search">';
?>
	<div class="side-title">
		<span class="side-title-span">검색</span><span class="side-sub-title-span">Search</span>
	</div>

<?php 
	}
	else if( is_page( getLandLibertyPageNum() ) or is_page( getIntroductionPageNum() ) or 
		is_page( getPeoplePageNum() ) or is_page( getLocationPageNum() ) or 
		is_page( getNoticePageNum() ) or $category == getNoticeCategoryNum() or
		$category == getNoticeFixCategoryNum()
	){
		if( is_page( getLandLibertyPageNum() ) or is_page( getIntroductionPageNum() ) )
			echo '<aside id="intro">';
		else if( is_page( getPeoplePageNum() ) )
			echo '<aside id="people">';
		else if( is_page( getLocationPageNum() ) )
			echo '<aside id="location">';
		else if( is_page( getNoticePageNum() ) or $category == getNoticeCategoryNum() or $category == getNoticeFixCategoryNum() )
			echo '<aside id="notice">';
?>
	<div class="side-title">
		<span class="side-title-span">토지+자유</span><span class="side-sub-title-span">Land Liberty</span>
	</div>
	<ul>
		<li><a id="left1_1" href="<?php echo home_url() ?>/landliberty/intro"><span>연구소 소개</span></a></li>
		<li><a id="left1_2" href="<?php echo home_url() ?>/landliberty/people"><span>연구소 사람들</span></a></li>
		<li><a id="left1_3" href="<?php echo home_url() ?>/landliberty/location"><span>오시는 길</span></a></li>
		<li><a id="left1_4" href="<?php echo home_url() ?>/landliberty/notice"><span>공지사항</span></a></li>
	</ul>
	
<?php 
	}
	else if( is_page( getResearchPageNum() ) or is_page( getStudyPageNum() ) or 
		is_page( getReportPageNum() ) or is_page( getReviewPageNum() ) or
		$category == getResearchCategoryNum() or $category == getReportCategoryNum() or $category == getReviewCategoryNum()
	){
		if( is_page( getResearchPageNum() ) or is_page( getStudyPageNum() ) or $category == getResearchCategoryNum() )
			echo '<aside id="research">';
		else if( is_page( getReportPageNum() ) or $category == getReportCategoryNum() )
			echo '<aside id="report">';
		else if( is_page( getReviewPageNum() ) or $category == getReviewCategoryNum() )
			echo '<aside id="review">';
?>
	<div class="side-title">
		<span class="side-title-span">연구활동</span><span class="side-sub-title-span">Research Activities</span>
	</div>
	<ul>
		<li><a id="left2_1" href="<?php echo home_url() ?>/study/research"><span>토지+자유 연구</span></a></li>
		<li><a id="left2_2" href="<?php echo home_url() ?>/study/report"><span>토지+자유 리포트</span></a></li>
		<li><a id="left2_3" href="<?php echo home_url() ?>/study/review"><span>토지+자유 비평</span></a></li>
	</ul>
	
<?php 
	}
	else if( is_page( getMagazinePageNum() ) or is_page( getColumnPageNum() ) or 
		is_page( getNewsPageNum() ) or is_page( getStoryPageNum() ) or
		$category == getMagazineCategoryNum() or $category == getColumnCategoryNum() or
		$category == getStoryCategoryNum() or $category == getNewsCategoryNum()
	){
		if( is_page( getMagazinePageNum() ) or is_page( getColumnPageNum() ) or 
		$category == getMagazineCategoryNum() or $category == getColumnCategoryNum() )
			echo '<aside id="column">';
		else if( is_page( getStoryPageNum() ) or $category == getStoryCategoryNum() )
			echo '<aside id="story">';
		else if( is_page( getNewsPageNum() ) or $category == getNewsCategoryNum() )
			echo '<aside id="news">';
?>
	<div class="side-title">
		<span class="side-title-span">매거진</span><span class="side-sub-title-span">Magazine</span>
	</div>
	<ul>
		<li><a id="left3_1" href="<?php echo home_url() ?>/magazine/column"><span>칼럼</span></a></li>
		<li><a id="left3_2" href="<?php echo home_url() ?>/magazine/story"><span>연구소 이야기</span></a></li>
		<li><a id="left3_3" href="<?php echo home_url() ?>/magazine/news"><span>연구소 소식</span></a></li>
	</ul>
	
<?php 
	}
	else if( is_page( getResearchNewsPageNum() ) or is_page( getPressPageNum() ) or 
		is_page( getEventPageNum() ) or is_page( getActivitiesPageNum() ) or 
		$category == getResearchNewsCategoryNum() or $category == getPressCategoryNum() or
		$category == getEventCategoryNum() or $category == getActivitiesCategoryNum() or
		$category == getPressFixCategoryNum()
	){
		if( is_page( getResearchNewsPageNum() ) or is_page( getPressPageNum() ) or 
		$category == getResearchNewsCategoryNum() or $category == getPressCategoryNum() or
		$category == getPressFixCategoryNum() )
			echo '<aside id="press">';
		else if( is_page( getEventPageNum() ) or $category == getEventCategoryNum() )
			echo '<aside id="event">';
		else if( is_page( getActivitiesPageNum() ) or $category == getActivitiesCategoryNum() )
			echo '<aside id="activities">';
?>
	<div class="side-title">
		<span class="side-title-span">연구소 뉴스</span><span class="side-sub-title-span">Research News</span>
	</div>
	<ul>
		<li><a id="left4_1" href="<?php echo home_url() ?>/research-news/press"><span>언론보도</span></a></li>
		<li><a id="left4_2" href="<?php echo home_url() ?>/research-news/event"><span>연구소 행사</span></a></li>
		<li><a id="left4_3" href="<?php echo home_url() ?>/research-news/activities"><span>대외활동</span></a></li>
	</ul>
	
<?php 
	}
	else if( is_page( getReferencePageNum() ) or is_page( getDataPageNum() ) or 
		is_page( getPolicyPageNum() ) or is_page( getPicturePageNum() ) or
		is_page( getMoviePageNum() ) or is_page( getBookPageNum() )or 
		$category == getReferenceCategoryNum() or $category == getDataCategoryNum() or
		$category == getPolicyCategoryNum() or $category == getPicCategoryNum() or 
		$category == getMovieCategoryNum() or $category == getBookCategoryNum()
	){
		if( is_page( getReferencePageNum() ) or is_page( getDataPageNum() ) or 
		$category == getReferenceCategoryNum() or $category == getDataCategoryNum() )
			echo '<aside id="data">';
		else if( is_page( getPolicyPageNum() ) or $category == getPolicyCategoryNum() )
			echo '<aside id="policy">';
		else if( is_page( getPicturePageNum() ) or $category == getPicCategoryNum() )
			echo '<aside id="picture">';
		else if( is_page( getMoviePageNum() ) or $category == getMovieCategoryNum() )
			echo '<aside id="movie">';
		else if( is_page( getBookPageNum() ) or $category == getBookCategoryNum() )
			echo '<aside id="book">';
?>
	<div class="side-title">
		<span class="side-title-span">자료실</span><span class="side-sub-title-span">Reference</span>
	</div>
	<ul>
		<li><a id="left5_1" href="<?php echo home_url() ?>/reference/data"><span>연구자료</span></a></li>
		<li><a id="left5_2" href="<?php echo home_url() ?>/reference/policy"><span>정책자료</span></a></li>
		<li><a id="left5_3" href="<?php echo home_url() ?>/reference/picture"><span>사진자료</span></a></li>
		<li><a id="left5_4" href="<?php echo home_url() ?>/reference/movie"><span>영상자료</span></a></li>
		<li><a id="left5_5" href="<?php echo home_url() ?>/reference/book"><span>도서안내</span></a></li>
	</ul>

<?php 
	}
	else if( is_page( getSupportPageNum() ) or is_page( getGuidePageNum() ) or 
		is_page( getFinancePageNum() ) or $category == getFinanceCategoryNum() or
		$category == getFinanceFixCategoryNum()
	){
		if( is_page( getSupportPageNum() ) or is_page( getGuidePageNum() ) )
			echo '<aside id="guide">';
		else if( is_page( getFinancePageNum() ) or $category == getFinanceCategoryNum() or
		$category == getFinanceFixCategoryNum() )
			echo '<aside id="finance">';
?>
	<div class="side-title">
		<span class="side-title-span">후원</span><span class="side-sub-title-span">Support</span>
	</div>
	<ul>
		<li><a id="left6_1" href="<?php echo home_url() ?>/support/guide"><span>후원안내</span></a></li>
		<li><a id="left6_2" href="<?php echo home_url() ?>/support/finance"><span>재정보고</span></a></li>
	</ul>

<?php
	}
?>
	<img class="left_bottom" src='<?php bloginfo('template_url'); ?>/images/left/left_bottom.gif' >
	<img class="left_spt_ban" src='<?php bloginfo('template_url'); ?>/images/left/left_support.gif' usemap="#support">
	<map name="support">
		<area shape="rect" coords="15,120,180,162" href="<?php echo getDonationPageURL() ?>" alt='후원하기 링크'>
	</map>
	<img class="left_phone_ban" src='<?php bloginfo('template_url'); ?>/images/left/left_t_phone.gif'>
</aside>
