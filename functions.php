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
    $first_img = "/path/to/default.png";
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

function getDonationPageURL() {
	return "http://www.hananuri.org/support/periodic_support";
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
function getLandLibertyPageNum() {return 5;}
function getIntroductionPageNum() {return 14;}
function getPeoplePageNum() {return 11;}
function getLocationPageNum() {return 9;}
function getNoticePageNum() {return 2;}
function getResearchPageNum() {return 30;}
function getStudyPageNum() {return 36;}
function getReportPageNum() {return 34;}
function getReviewPageNum() {return 32;}
function getMagazinePageNum() {return 69;}
function getColumnPageNum() {return 71;}
function getNewsPageNum() {return 75;}
function getStoryPageNum() {return 73;}
function getResearchNewsPageNum() {return 82;}
function getPressPageNum() {return 85;}
function getEventPageNum() {return 87;}
function getActivitiesPageNum() {return 89;}
function getReferencePageNum() {return 92;}
function getDataPageNum() {return 94;}
function getPolicyPageNum() {return 97;}
function getPicturePageNum() {return 99;}
function getMoviePageNum() {return 101;}
function getBookPageNum() {return 103;}
function getSupportPageNum() {return 105;}
function getGuidePageNum() {return 107;}
function getFinancePageNum() {return 109;}

// Category Value
function getNoticeCategoryNum() {return 1;}
function getMagazineCategoryNum() {return 6;}
function getColumnCategoryNum() {return 7;}
function getNewsCategoryNum() {return 9;}
function getStoryCategoryNum() {return 8;}
function getResearchNewsCategoryNum() {return 10;}
function getPressCategoryNum() {return 11;}
function getEventCategoryNum() {return 12;}
function getActivitiesCategoryNum() {return 13;}
function getStudyCategoryNum() {return 2;}
function getReportCategoryNum() {return 4;}
function getReviewCategoryNum() {return 5;}
function getResearchCategoryNum() {return 3;}
function getReferenceCategoryNum() {return 14;}
function getBookCategoryNum() {return 19;}
function getPicCategoryNum() {return 17;}
function getDataCategoryNum() {return 16;}
function getMovieCategoryNum() {return 18;}
function getPolicyCategoryNum() {return 15;}

function getScholarCategoryNum() {return 20;}
function getFieldCategoryNum() {return 21;}
function getDiscussCategoryNum() {return 22;}
function getInterviewCategoryNum() {return 23;}
function getFinanceCategoryNum() {return 25;}
function getNoticeFixCategoryNum() {return 26;}
function getPressFixCategoryNum() {return 27;}
function getFinanceFixCategoryNum() {return 28;}

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
