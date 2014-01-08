<?php

/*
 * 관리자에게만 상단바 보여주기 
 * 
 */
 /*
function fn_admin_bar() {
  return (current_user_can("manage_options"))? true : false;
}
add_filter('show_admin_bar', 'fn_admin_bar');
*/

function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches[1][0];

  if(empty($first_img)) {
    $first_img = "none";
  }
  return $first_img;
}

function current_page_url() {
	$pageURL = 'http';
	if( isset($_SERVER["HTTPS"]) ) {
		if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	}
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
	return $pageURL;
}

function getParentCatID() {
	$category = get_the_category();
	
	if( $category[2]->cat_ID != null)
		return $category[2]->cat_ID;
	else if( $category[1]->cat_ID != null )
		return $category[1]->cat_ID;
	else
		return $category[0]->cat_ID;
}

function getColumnPageURL() {
	return "http://landliberty.or.kr/magazine/column";
}

function getDonationPageURL() {
	return "http://landliberty.or.kr/support/guide";
}

function getStudyPageURL(){
	return "http://landliberty.or.kr/research/study";
}

function getReportPageURL(){
	return "http://landliberty.or.kr/research/report";
}

function getReviewPageURL(){
	return "http://landliberty.or.kr/research/review";
}

function getNoticePageURL(){
	return "http://landliberty.or.kr/landliberty/notice";
}

function getNewsPageURL(){
	return "http://landliberty.or.kr/magazine/news";
}


/*
function my_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
    <div><label class="screen-reader-text" for="s">' . __( 'Search for:' ) . '</label>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" />
    <input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
    </div>
    </form>';

    return $form;
}

add_filter( 'get_search_form', 'my_search_form' );
*/

/*
 * User Define Value Return Function for Land Liberty Theme
 */
 
// Page Value
function getLandLibertyPageNum() {return 2;}
	function getIntroductionPageNum() {return 7;}
	function getHistoryPageNum() {return 839;}
	function getPeoplePageNum() {return 9;}
	function getLocationPageNum() {return 11;}
	function getNoticePageNum() {return 13;}

function getResearchActivityPageNum() {return 15;}
	function getStudyPageNum() {return 17;}
	function getReportPageNum() {return 19;}
	function getReviewPageNum() {return 21;}
	
function getMagazinePageNum() {return 23;}
	function getColumnPageNum() {return 25;}
	function getStoryPageNum() {return 27;}
	function getNewsPageNum() {return 29;}
	
function getResearchNewsPageNum() {return 31;}
	function getPressPageNum() {return 33;}
	function getEventPageNum() {return 35;}
	function getActivitiesPageNum() {return 37;}

function getReferencePageNum() {return 39;}
	function getDataPageNum() {return 41;}
	function getPolicyPageNum() {return 43;}
	function getPicturePageNum() {return 45;}
	function getMoviePageNum() {return 47;}
	function getBookPageNum() {return 49;}
	
function getSupportPageNum() {return 51;}
	function getGuidePageNum() {return 53;}
	function getFinancePageNum() {return 55;}

// Category Value
function getNoticeCategoryNum() {return 1;}
	function getNoticeFixCategoryNum() {return 2;}

function getResearchActivityCategoryNum() {return 3;}
	function getStudyCategoryNum() {return 4;}
	function getReportCategoryNum() {return 5;}
	function getReviewCategoryNum() {return 6;}

function getMagazineCategoryNum() {return 7;}
	function getColumnCategoryNum() {return 8;}
	function getStoryCategoryNum() {return 9;}
	function getNewsCategoryNum() {return 10;}

function getResearchNewsCategoryNum() {return 11;}
	function getPressCategoryNum() {return 12;}
		function getPressFixCategoryNum() {return 25;}
	function getEventCategoryNum() {return 13;}
	function getActivitiesCategoryNum() {return 14;}
		function getScholarCategoryNum() {return 15;}
		function getFieldCategoryNum() {return 16;}
		function getDiscussCategoryNum() {return 17;}
		function getInterviewCategoryNum() {return 18;}
		function getLectureCategoryNum() {return 29;}
		function getEtcCategoryNum() {return 30;}

function getReferenceCategoryNum() {return 19;}
	function getDataCategoryNum() {return 20;}
		function getTaxCategoryNum() {return 31;}
		function getCityCategoryNum() {return 32;}
		function getNorthCategoryNum() {return 33;}
		function getAlternativeCategoryNum() {return 34;}
		function getJusticeCategoryNum() {return 35;}
		function getEtc2CategoryNum() {return 36;}
	function getPolicyCategoryNum() {return 21;}
		function getMOLITCategoryNum() {return 37;}
		function getMOSFCategoryNum() {return 38;}
		function getMOUCategoryNum() {return 39;}
		function getStatisticsCategoryNum() {return 40;}
		function getEtc3CategoryNum() {return 41;}
	function getPicCategoryNum() {return 22;}
	function getMovieCategoryNum() {return 23;}
	function getBookCategoryNum() {return 24;}

function getSupportCategoryNum() {return 26;}
	function getFinanceCategoryNum() {return 27;}
		function getFinanceFixCategoryNum() {return 28;}


function getMainNoticeCategoryNum() {return 42;}
function getMainNewsCategoryNum() {return 43;}

// Changing excerpt length
function new_excerpt_length($length) {
	return 10000;
}
add_filter('excerpt_length', 'new_excerpt_length');

// Changing excerpt more
function new_excerpt_more($more) {
	global $post;
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


add_theme_support( 'post-thumbnails' ); 
add_image_size('excerpt-thumbnail', 180, 140, true);

function landliberty_widgets_init() {
	register_sidebar(array(
		'name' => 'Sidebar Widget',
		'id' => 'sidebar-widget',
		'description' => 'Sidebar', 
		'before_widget' => '<aside id="%1$s" class="event-widgets %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
		
	register_sidebar(array(
		'name' => 'mailing',
		'before_widget' => '<div id="mailing-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
	
	register_sidebar(array(
		'name' => 'slider',
		'before_widget' => '<div id="slider-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
	
		
}

add_action( 'widgets_init', 'landliberty_widgets_init' );
?>
