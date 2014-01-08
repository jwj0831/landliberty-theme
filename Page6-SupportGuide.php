<?php 
/**
 * Template Name: Page6 Support Guide Page
 *
 * A custom page template with sidebar.
 * 
 * @package WordPress
 * @subpackage LandLiberty
 * @author NFM (jwj0831@gmail.com)
 * @since LandLiberty 1.0
 */
get_header(); ?>

<div class="subpage_stretched">
	<?php include (TEMPLATEPATH . '/nav.php'); ?> 
	<div class="subpage_fixed">
		<?php include (TEMPLATEPATH . '/sidebar.php'); ?> 
		<div id="content-panel">
			<div class="breadcrumb">
				<p>
					<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 후원 > <span>후원 안내</span>
				</p>
			</div>
			<div class="subpage">
				<div class="sub-title-bar">
					<span class="subpage-title">후원 안내</span><span class="subpage-title-detail"></span>
					<img class="sub-title-icon" src='<?php bloginfo('template_url'); ?>/images/sub/sub_t_img.gif' >
				</div>
				
				<div class="content">

					<div id="support-label">
						<span id="sum-span-1">토지+</span><span id="sum-span-2">자유연구소</span>를 후원해주세요!
					</div>
					<div>
						<img id="support-img" src="<?php bloginfo('template_url'); ?>/images/sub/support_tree.gif">
					</div>
					<div class="support-para">
						지금 우리 사회는 갑과 을의 갈등이 심화되면서 이웃의 절망과 탄식 소리가 더욱 깊어지고 있습니다. 
						그런데 그 절망과 탄식의 원인을 파고 들어가면 결국 토지문제와 만나게 됩니다. 
						하지만 우리 사회에서 대기업의 이익을 대변하는 기업연구소, 정권의 이익에 복무할 수밖에 없는 국책연구소, 토지투기를 부추기는 부동산 관련 연구소가 큰 목소리를 내고 있을 뿐, 토지문제의 진정한 해결책을 제시하는 연구소는 찾아보기 힘듭니다. 
						이것은 다가오는 통일까지 생각했을 때 너무나 위험한 상황입니다. 
						북한에 토지투기가 일어나면 통일은 축복이 아니라 재앙이 될 것이기 때문입니다.
					</div>
					<div class="support-para">
						토지+자유연구소는 토지문제를 해결할 수 있는 구체적이고 실제적인 대안을 제시하려고 합니다. 
						현안에 대한 깊이 있는 분석과 대안을 담은 양질의 페이퍼, 그리고 우리 사회에 적용할 수 있는 정책패키지들을 개발하고 더 나아가서 통일한국에 대비한 새로운 경제체제를 제시할 것입니다. 
						이렇게 공평과 정의의 관점으로 우리 사회를 건강하게 개혁할 수 있는 이론과 정책을 연구하기 위해서는 많은 시민들의 후원이 절실합니다. 
						거대한 특권의 이익, 막강한 권력의 힘을 넘어설 수 있는 유일한 원천은 바로 ‘결집된 시민의 힘’이라고 생각하기 때문입니다. 
						토지+자유연구소가 성실하고 겸손하게, 하지만 집요하게 정진해 나갈 수 있도록 시민여러분의 많은 후원을 요청 드립니다. 
					</div>
					<div style="clear:both"></div> 
					
					<div id="support-detail-info-box">
						<div class="detail-row">
							▶ 안정적 재정 관리와 후원자분들의 편리한 연말소득공제를 위해 CMS 체제로 후원금 관리를 하고 있습니다.
						</div>
						<div class="detail-row">
							▶ 후원 상황과 회계보고는 홈페이지와 이메일로 전해드리는 ‘토지+자유 소식’을 통해 매달 투명하게 공개하고 있습니다.
						</div>
						<div class="detail-row">
							▶ 약정 후 후원 정보를 수정하시거나 해지하시고 싶으신 경우에는 <span class="support-strong-span">메일(land-liberty@hanmail.net)이나 전화(02-736-4906)</span>로 연락 바랍니다.
						</div>
						<div class="detail-row">
							▶ 토지+자유연구소는 (사)하나누리의 부설 연구소입니다. 따라서 통장 출금 란에 ‘하나누리’로 기록이 될 것이니 착오 없으시기 바랍니다.
						</div>
						<div class="detail-row">
							▶ 정기후원이 아닌 일시후원, 혹은 CMS로 후원을 원치 않으시는 경우에는 <span class="support-strong-span">‘국민은행,  9002-736-4906, 예금주: 하나누리 (토지자유연구소)’</span>로 입금을 해주시면 감사하겠습니다.
						</div>
					</div>
					<!--<div><img id="support-btn" src="<?php bloginfo('template_url'); ?>/images/sub/support_btn.gif"></div>-->
					
					<iframe src="https://docs.google.com/spreadsheet/embeddedform?formkey=dG45TnZuenJmZVRIZE1FSUNFck4xbnc6MQ" width="680" height="1640" frameborder="0" marginheight="0" marginwidth="0" style="border:1px #dddddd solid;padding:20px;">로드 중...</iframe>
				</div>
			</div><!--close subpage-->
		</div><!--close content-panel-->
		<div class="clear"></div>
	</div><!--close subpage_fixed-->
</div><!--close subpage_stretched-->
	<div class="clear"></div>
	
<?php get_footer(); ?>