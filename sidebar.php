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
		is_page( getHistoryPageNum() ) or is_page( getPeoplePageNum() ) or 
		is_page( getLocationPageNum() ) or is_page( getNoticePageNum() ) or 
		in_category( array( getNoticeCategoryNum(), getNoticeFixCategoryNum() ) ) 
	){
		if( is_page( getLandLibertyPageNum() ) or is_page( getIntroductionPageNum() ) )
			echo '<aside id="intro">';
		else if( is_page( getHistoryPageNum() ) )
			echo '<aside id="history">';
		else if( is_page( getPeoplePageNum() ) )
			echo '<aside id="people">';
		else if( is_page( getLocationPageNum() ) )
			echo '<aside id="location">';
		else if( is_page( getNoticePageNum() ) or in_category( array( getNoticeCategoryNum(), getNoticeFixCategoryNum() ) ) )
			echo '<aside id="notice">';
?>
	<div class="side-title">
		<span class="side-title-span">토지+자유</span><span class="side-sub-title-span">Land Liberty</span>
	</div>
	<ul>
		<li><a id="left1_1" href="<?php echo home_url() ?>/landliberty/intro"><span>연구소 소개</span></a></li>
		<li><a id="left1_2" href="<?php echo home_url() ?>/landliberty/history"><span>연구소 발자취</span></a></li>
		<li><a id="left1_3" href="<?php echo home_url() ?>/landliberty/people"><span>연구소 사람들</span></a></li>
		<li><a id="left1_4" href="<?php echo home_url() ?>/landliberty/location"><span>오시는 길</span></a></li>
		<li><a id="left1_5" href="<?php echo home_url() ?>/landliberty/notice"><span>공지사항</span></a></li>
	</ul>
	
<?php 
	}
	else if( is_page( getResearchActivityPageNum() ) or is_page( getStudyPageNum() ) or 
		is_page( getReportPageNum() ) or is_page( getReviewPageNum() ) or 
		is_page( getColumnPageNum() ) or is_page( getIssuePageNum() ) or 
		in_category( array( getResearchActivityCategoryNum(), getStudyCategoryNum(), 
							getReportCategoryNum(), getReviewCategoryNum(), 
							getColumnCategoryNum(), getIssueCategoryNum() 
						) )
	){
		
		if( is_page( getResearchActivityPageNum() ) or is_page( getStudyPageNum() ) or in_category( array( getStudyCategoryNum() ) ) )
			echo '<aside id="research">';
		else if( is_page( getReportPageNum() ) or in_category( array( getReportCategoryNum() ) ) )
			echo '<aside id="report">';
		else if( is_page( getReviewPageNum() ) or in_category( array( getReviewCategoryNum() ) ) )
			echo '<aside id="review">';
		else if( is_page( getColumnPageNum() ) or in_category( array( getColumnCategoryNum() ) ) )
			echo '<aside id="column">';
		else if( is_page( getIssuePageNum() ) or in_category( array( getIssueCategoryNum() ) ) )
			echo '<aside id="issue">';
		
?>
	<div class="side-title">
		<span class="side-title-span">연구활동</span><span class="side-sub-title-span">Research Activities</span>
	</div>
	<ul>
		<li><a id="left2_1" href="<?php echo home_url() ?>/researches/study"><span>토지+자유 연구</span></a></li>
		<li><a id="left2_2" href="<?php echo home_url() ?>/researches/report"><span>토지+자유 리포트</span></a></li>
		<li><a id="left2_3" href="<?php echo home_url() ?>/researches/review"><span>토지+자유 비평</span></a></li>
		<li><a id="left2_4" href="<?php echo home_url() ?>/researches/column"><span>토지+자유 칼럼</span></a></li>
		<li><a id="left2_5" href="<?php echo home_url() ?>/researches/korean-issue"><span>한반도 현안 톺아보기</span></a></li>
	</ul>
	
<?php 
	}
	else if( is_page( getMagazinePageNum() ) or is_page( getPressContPageNum() ) or 
		is_page( getNewsPageNum() ) or is_page( getStoryPageNum() ) or
		in_category( array( 
			getMagazineCategoryNum(), getPressContCategoryNum(), 
			getStoryCategoryNum(), getNewsCategoryNum() ) )
	){
		if( is_page( getMagazinePageNum() ) or is_page( getPressContPageNum() ) or in_category( array( getPressContCategoryNum() ) ) )
			echo '<aside id="press-contribution">';
		else if( is_page( getStoryPageNum() ) or in_category( array( getStoryCategoryNum() ) ) )
			echo '<aside id="story">';
		else if( is_page( getNewsPageNum() ) or in_category( array( getNewsCategoryNum() ) ) )
			echo '<aside id="news">';
?>
	<div class="side-title">
		<span class="side-title-span">매거진</span><span class="side-sub-title-span">Magazine</span>
	</div>
	<ul>
		<li><a id="left3_1" href="<?php echo home_url() ?>/magazine/press"><span>언론기고</span></a></li>
		<li><a id="left3_2" href="<?php echo home_url() ?>/magazine/story"><span>연구소 이야기</span></a></li>
		<li><a id="left3_3" href="<?php echo home_url() ?>/magazine/news"><span>연구소 소식</span></a></li>
	</ul>
	
<?php 
	}
	else if( is_page( getResearchNewsPageNum() ) or is_page( getPressPageNum() ) or 
		is_page( getEventPageNum() ) or is_page( getActivitiesPageNum() ) or
		in_category( 
			array( getResearchNewsCategoryNum(), getPressCategoryNum(), 
					getEventCategoryNum(), getActivitiesCategoryNum(), 
					getPressFixCategoryNum(), getScholarCategoryNum(),
					getFieldCategoryNum(), getDiscussCategoryNum(),
					getInterviewCategoryNum(), getLectureCategoryNum(),
					getEtcCategoryNum() ) 
		) 
	){
		if( is_page( getResearchNewsPageNum() ) or is_page( getPressPageNum() ) or in_category( array( getPressCategoryNum(), getPressFixCategoryNum() ) ) ) 
			echo '<aside id="press">';
		else if( is_page( getEventPageNum() ) or in_category( array( getEventCategoryNum() ) ) )
			echo '<aside id="event">';
		else if( is_page( getActivitiesPageNum() ) or in_category( 
					array( getActivitiesCategoryNum(), getPressFixCategoryNum(), getScholarCategoryNum(),
						getFieldCategoryNum(), getDiscussCategoryNum(),
						getInterviewCategoryNum(), getLectureCategoryNum(),
						getEtcCategoryNum() 
						) ) 
		)
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
		is_page( getMoviePageNum() ) or is_page( getBookPageNum() ) or
		in_category( array( getReferenceCategoryNum(), getDataCategoryNum(), 
					getPolicyCategoryNum(), getPicCategoryNum(), 
					getMovieCategoryNum(), getBookCategoryNum(),
					getTaxCategoryNum(), getCityCategoryNum(),
					getNorthCategoryNum(), getAlternativeCategoryNum(),
					getJusticeCategoryNum(), getEtc2CategoryNum(),
					getMOLITCategoryNum(), getMOSFCategoryNum(),
					getMOUCategoryNum(), getStatisticsCategoryNum(),
					getEtc3CategoryNum(),
					) ) 
	){
		if( is_page( getReferencePageNum() ) or is_page( getDataPageNum() ) or 
			in_category( array( 
				getDataCategoryNum(), getTaxCategoryNum(), 
				getCityCategoryNum(), getNorthCategoryNum(), 
				getAlternativeCategoryNum(), getJusticeCategoryNum(), getEtc2CategoryNum()
			) ) 
		)
			echo '<aside id="data">';
		else if( is_page( getPolicyPageNum() ) or in_category( array( getPolicyCategoryNum(),
														getMOLITCategoryNum(), getMOSFCategoryNum(),
														getMOUCategoryNum(), getStatisticsCategoryNum(),
														getEtc3CategoryNum(),) ) 
		)
			echo '<aside id="policy">';
		else if( is_page( getPicturePageNum() ) or in_category( array( getPicCategoryNum() ) ) )
			echo '<aside id="picture">';
		else if( is_page( getMoviePageNum() ) or in_category( array( getMovieCategoryNum() ) ) )
			echo '<aside id="movie">';
		else if( is_page( getBookPageNum() ) or in_category( array( getBookCategoryNum() ) ) )
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
		is_page( getFinancePageNum() ) or in_category( array( getFinanceCategoryNum(), getFinanceFixCategoryNum() ) ) 
	){
		if( is_page( getSupportPageNum() ) or is_page( getGuidePageNum() ) )
			echo '<aside id="guide">';
		else if( is_page( getFinancePageNum() ) or in_category( array( getFinanceCategoryNum(), getFinanceFixCategoryNum() ) ) )
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
	else {
		echo "Page Error";
	}
?>
	<img class="left_bottom" src='<?php bloginfo('template_url'); ?>/images/left/left_bottom.gif' >
	<img class="left_spt_ban" src='<?php bloginfo('template_url'); ?>/images/left/left_support.gif' usemap="#support">
	<map name="support">
		<area shape="rect" coords="15,120,180,162" href="<?php echo getDonationPageURL() ?>" alt='후원하기 링크'>
	</map>
	<img class="left_phone_ban" src='<?php bloginfo('template_url'); ?>/images/left/left_t_phone.gif'>
</aside>
