<?php get_header() ?>
	<div class="clear"></div>	
	<div id="main">
		<?php include (TEMPLATEPATH . '/nav.php'); ?> 
		<div id="main_top">
			<div id="top_col1">
				<div id="slide">
				</div>
			</div>
			<div id="top_col2">
				<div id="column">
					<div class="column-title-box">
						<div class="title">
							<img src='<?php bloginfo('template_url'); ?>/images/icon_column.gif' alt='칼럼'> 칼럼
							<span class="more">+</span>
						</div>
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
			<div id="research_col">
				<div id="col1" class="title-box">
					<div class="title">
						<h3>토지+자유 연구</h3>
						<span class="more">+</span>
					</div>
				</div>
			</div>
			<div id="report_col">
				<div id="col2" class="title-box">
					<div class="title">
						<h3>토지+자유 리포트</h3>
						<span class="more">+</span>
					</div>
				</div>
			</div>
			<div id="review_col">
				<div id="col3"class="title-box">
					<div class="title">
						<h3>토지+자유 비평</h3>
						<span class="more">+</span>
					</div>
				</div>
			</div>
		</div><!--close main_middle-->
		<div id="main_low">
			<div id="low_col1">
				<div id="mailing">
					<div id="mail-title">
						
					</div>
					<div id="mail-form">
						
					</div>
				</div>
				<div id="book">
					
				</div>
			</div>
			<div id="low_col2">
				<div id="notice">
					<div class="title-box">
						<div class="title">
							<h3>공지사항</h3><span class="more">+</span>
						</div>
					</div>
				</div>
				<div id="news">
					<div class="title-box">
						<div class="title">
							<h3>연구소 뉴스</h3><span class="more">+</span>
						</div>
					</div>
				</div>
			</div>
			<div id="low_col3">
				<div class="fb-like-box" data-href="https://www.facebook.com/landliberty" data-width="332" data-height="400" data-show-faces="false" data-stream="true" data-show-border="true" data-header="true"></div>
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