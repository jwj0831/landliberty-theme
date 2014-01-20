<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta property="og:image" content="<?php bloginfo('template_url'); ?>/images/thumbnail.jpg" />
				
		<?php $image = get_post_meta($post->ID, 'facebookimage', true);
		if ($image) {
		echo "<link rel=\"image_src\" href=\"" . $image . "\">";
		} ?>
				
		
			<title><?php
				/*
				 * Print the <title> tag based on what is being viewed.
				 */
				global $page, $paged;
			
				wp_title( '|', true, 'right' );
			
				// Add the blog name.
				bloginfo( 'name' );
			
				// Add the blog description for the home/front page.
				$site_description = get_bloginfo( 'description', 'display' );
				if ( $site_description && ( is_home() || is_front_page() ) )
					echo " | $site_description";
			
				// Add a page number if necessary:
				if ( $paged >= 2 || $page >= 2 )
					echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
			
				?>
			</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#menu').hover(
	        	function () {
	           		$('#submenu').show();
	         	},
	         	function () {
	           		$('#submenu').css({"display":"none"});
	         	}
	     	);
	     	
	     	$("#smooth_slider_1").css('background-image', 'url("http://landliberty13.cafe24.com/eocjsejr/wp-content/themes/landliberty_v1/images/slide_text_bg.gif")' );
		 	$("#smooth_slider_1").css('background-repeat', 'none');
			$("#smooth_slider_1").css('background-position', 'right top');
		});
		$("#cat-total").click(function() {
			alert("hello");
			$(".board-category-li").children("a").children("span").css('font-weight','normal');
		});

   </script>
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<!--<link rel="stylesheet" media="only screen and (max-device-width: 1024px)" href="ipad.css" type="text/css" />-->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		
	<!-- Pulled from http://code.google.com/p/html5shiv/ -->
	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-30468978-2', 'landliberty.or.kr');
  ga('send', 'pageview');

</script>

		
<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
?>
	 
<?php wp_head(); ?>
	</head>
                    
	<body <?php body_class(); ?>>
		<?php if ( is_front_page() ) {	?>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/ko_KR/all.js#xfbml=1&appId=228710550558869";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<?php }	?>
		<div id="wrapper">
			<div id="head-container">
				<header>
					<div id="top-bar">
						<div id="login">
							<?php
								echo '<a id="';
								if( is_user_logged_in() ) {
									echo 'header_logged_in" href="' . wp_logout_url( current_page_url() ) . '">LOGOUT</a>';
								}
								else {
									echo 'header_logged_out" href="' . wp_login_url( current_page_url() ) . '">LOGIN</a>';
								}
							?>
						</div>
						<div id="search">
							<?php get_search_form( $echo ); ?>
						</div>
					</div><!--close top-bar-->
				</header>
				<div id="menu">
					<nav>
						<div id="logo">
						<h1>
							<a id="logo" title="<?php echo get_bloginfo('name'); ?>" href="<?php echo home_url() ?>">
								<img src='<?php bloginfo('template_directory'); ?>/images/top_logo.gif' alt='토지자유연구소'>
							</a>
						</h1>
					</div>
						<ul>
							<li><a class="menu_item" href="<?php echo home_url()?>/landliberty">토지+자유연구소</a></li>
							<li><a class="menu_item" href="<?php echo home_url()?>/researches">연구활동</a></li>
							<li><a class="menu_item" href="<?php echo home_url()?>/magazine">매거진</a></li>	
							<li><a class="menu_item" href="<?php echo home_url()?>/research-news">연구소 뉴스</a></li>
							<li><a class="menu_item" href="<?php echo home_url()?>/reference">자료실</a>	</li>
							<li><a class="menu_item" href="<?php echo home_url()?>/support">후원</a></li>
						</ul>	
					</nav>
					<div id="submenu">
						<div id="submenu_fixed">
							<img src='<?php bloginfo('template_directory'); ?>/images/top_sub_logo.png' alt='토지자유연구소'>
							<div id="sub1" class="submenu-class">
								<ul id="submenu1">
									<li><a id="header_menu1_sub1" href="<?php echo home_url()?>/landliberty/intro"><span>연구소 소개</span></a></li>
									<li><a id="header_menu1_sub2" href="<?php echo home_url()?>/landliberty/history"><span>연구소 발자취</span></a></li>
									<li><a id="header_menu1_sub3" href="<?php echo home_url()?>/landliberty/people"><span>연구소 사람들</span></a></li>
									<li><a id="header_menu1_sub4" href="<?php echo home_url()?>/landliberty/location"><span>오시는 길</span></a></li>
									<li><a id="header_menu1_sub5" href="<?php echo home_url()?>/landliberty/notice"><span>공지사항</span></a></li>
								</ul>
							</div>
							<div id="sub2" class="submenu-class">
								<ul id="submenu2">
									<li><a id="header_menu2_sub1" href="<?php echo home_url()?>/researches/study"><span>토지+자유 연구</span></a></li>
									<li><a id="header_menu2_sub2" href="<?php echo home_url()?>/researches/report"><span>토지+자유 리포트</span></a></li>
									<li><a id="header_menu2_sub3" href="<?php echo home_url()?>/researches/review"><span>토지+자유 비평</span></a></li>
									<li><a id="header_menu2_sub4" href="<?php echo home_url()?>/researches/column"><span>토지+자유 칼럼</span></a></li>
								</ul>
							</div>
							<div id="sub3" class="submenu-class">
								<ul id="submenu3">
									<li><a id="header_menu3_sub1" href="<?php echo home_url()?>/magazine/press"><span>언론기고</span></a></li>
									<li><a id="header_menu3_sub2" href="<?php echo home_url()?>/magazine/story"><span>연구소 이야기</span></a></li>
									<li><a id="header_menu3_sub3" href="<?php echo home_url()?>/magazine/news"><span>연구소 소식</span></a></li>
								</ul>
							</div>
							<div id="sub4" class="submenu-class">
								<ul id="submenu4">
									<li><a id="header_menu4_sub1" href="<?php echo home_url()?>/research-news/press"><span>언론보도</span></a></li>
									<li><a id="header_menu4_sub2" href="<?php echo home_url()?>/research-news/event"><span>연구소 행사</span></a></li>
									<li><a id="header_menu4_sub3" href="<?php echo home_url()?>/research-news/activities"><span>대외활동</span></a></li>
								</ul>
							</div>
							<div id="sub5" class="submenu-class">
								<ul id="submenu5">
									<li><a id="header_menu5_sub1" href="<?php echo home_url()?>/reference/data"><span>연구자료</span></a></li>
									<li><a id="header_menu5_sub2" href="<?php echo home_url()?>/reference/policy"><span>정책자료</span></a></li>
									<li><a id="header_menu5_sub3" href="<?php echo home_url()?>/reference/picture"><span>사진자료</span></a></li>
									<li><a id="header_menu5_sub4" href="<?php echo home_url()?>/reference/movie"><span>영상자료</span></a></li>
									<li><a id="header_menu5_sub5" href="<?php echo home_url()?>/reference/book"><span>도서안내</span></a></li>
								</ul>
							</div>
							<div id="sub6" class="submenu-class">
								<ul id="submenu6">
									<li><a id="header_menu6_sub1" href="<?php echo home_url()?>/support/guide"><span>후원안내</span></a></li>
									<li><a id="header_menu6_sub2" href="<?php echo home_url()?>/support/finance"><span>재정보고</span></a></li>
								</ul>
							</div>
						</div>
					</div><!--close submenu-->
				</div><!--close menu-->
			</div><!--close head-container-->