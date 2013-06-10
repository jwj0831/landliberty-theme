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
		
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="stylesheet" media="only screen and (max-device-width: 1024px)" href="ipad.css" type="text/css" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		
	<!-- Pulled from http://code.google.com/p/html5shiv/ -->
	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
		
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
						<div id="bar">|</div> 
						<div id="join">
							<a>JOIN</a>
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
							<li><a class="menu_item" href="' . home_url() . '/about">토지+자유연구소</a>
								<ul id="submenu1">
									<li><a id="header_menu1_sub1" href="<?php echo home_url()?>/about/introduction"><span>연구소 소개</span></a></li>
									<li><a id="header_menu1_sub2" href="<?php echo home_url()?>/about/history"><span>연구소 사람들</span></a></li>
									<li><a id="header_menu1_sub3" href="<?php echo home_url()?>/about/organization"><span>오시는 길</span></a></li>
									<li><a id="header_menu1_sub4" href="<?php echo home_url()?>/about/location"><span>공지사항</span></a></li>
								</ul></li>
							<li><a class="menu_item" href="' . home_url() . '/activities">연구활동</a>
								<ul id="submenu2">
									<li><a id="header_menu2_sub1" href="<?php echo home_url()?>/activities/northbiz"><span>토지+자유 연구</span></a></li>
									<li><a id="header_menu2_sub2" href="<?php echo home_url()?>/activities/overseas"><span>토지+자유 리포트</span></a></li>
									<li><a id="header_menu2_sub3" href="<?php echo home_url()?>/activities/overseas"><span>토지+자유 비평</span></a></li>
								</ul></li>
							<li><a class="menu_item" href="' . home_url() . '/domestic">매거진</a>
								<ul id="submenu3">
									<li><a id="header_menu3_sub1" href="<?php echo home_url()?>/domestic/transformation"><span>칼럼</span></a></li>
									<li><a id="header_menu3_sub2" href="<?php echo home_url()?>/domestic/education"><span>토지+자유 이야기</span></a></li>
									<li><a id="header_menu3_sub3" href="<?php echo home_url()?>/domestic/landliberty"><span>토지+자유 소식</span></a></li>
								</ul></li>	
							<li><a class="menu_item" href="' . home_url() . '/magazine">연구소뉴스</a>
								<ul id="submenu4">
									<li><a id="header_menu4_sub1" href="<?php echo home_url()?>/magazine/peninsula-m"><span>언론보도</span></a></li>
									<li><a id="header_menu4_sub2" href="<?php echo home_url()?>/magazine/story"><span>연구소 행사</span></a></li>
									<li><a id="header_menu4_sub3" href="<?php echo home_url()?>/magazine/northstory"><span>대외활동</span></a></li>
								</ul></li>
							<li><a class="menu_item" href="' . home_url() . '/support">자료실</a>
								<ul id="submenu5">
									<li><a id="header_menu5_sub1" href="<?php echo home_url()?>/magazine/peninsula-m"><span>연구자료</span></a></li>
									<li><a id="header_menu5_sub2" href="<?php echo home_url()?>/magazine/story"><span>정책자료</span></a></li>
									<li><a id="header_menu5_sub3" href="<?php echo home_url()?>/magazine/northstory"><span>사진자료</span></a></li>
									<li><a id="header_menu5_sub4" href="<?php echo home_url()?>/magazine/northstory"><span>영상자료</span></a></li>
									<li><a id="header_menu5_sub5" href="<?php echo home_url()?>/magazine/northstory"><span>도서안내</span></a></li>
								</ul></li>
							<li><a class="menu_item" href="' . home_url() . '/support">후원</a>
								<ul id="submenu6">
									<li><a id="header_menu6_sub1" href="<?php echo home_url()?>/magazine/peninsula-m"><span>후원안내</span></a></li>
									<li><a id="header_menu6_sub2" href="<?php echo home_url()?>/magazine/story"><span>재정보고</span></a></li>
								</ul></li>
						</ul>	
					</nav>
				</div>
			</div><!--close head-container-->