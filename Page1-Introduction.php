<?php 
/**
 * Template Name: Page1 Introduction Page
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
					<img src='<?php bloginfo('template_url'); ?>/images/sub/icon_home.gif'> 홈 > 토지+자유연구소 > <span>연구소 소개</span>
				</p>
			</div>
			<div class="subpage">
				<div class="sub-title-bar-noborder">
					<span class="subpage-title">연구소 소개</span><span class="subpage-title-detail">연구소 소개 자세하게...</span>
					<img class="sub-title-icon" src='<?php bloginfo('template_url'); ?>/images/sub/sub_t_img.gif' >
				</div>
				
				<div class="content">
					<div id="intro-summary">
						<div id="intro-logo">
							<img class=""src='<?php bloginfo('template_url');?>/images/sub/page1/Introduction_logo.gif'>
						</div>
						<div id="intro-content">
							<br><br>
							<div style="font-size:35px;">
								평등한 <span id="sum-span-1">토지권</span>, 
								참다운 <span id="sum-span-2">자유</span>
							</div>
							<br>
							<div style="font-weight:bold;font-size:14px;margin-bottom:5px">토지+자유연구소에 오신것을 환영합니다</div>
							<div style="width:380px;font-size:12px;color:#959595;line-height:18px">
							어느 사회나 평등한 토지권이 잘 적용된 사회일수록 안전했고, 경제가 발전했으며, 건강한 문화가 꽃피웠습니다. 반면 이 사상에서 멀어지면 멀어질수록 사회는 불안해졌고, 빈부격차는 심해졌으며, 문화는 병들어갔습니다. 이 사실은 오늘날에도 마찬가지입니다. 우리를 끊임없이 괴롭히는 주거 불안, 일자리 불안, 금융 불안, 노후 불안을 해소하고 참다운 자유를 누리기 위해서는 평등한 토지권이 회복돼야 합니다. 
							</div>
						</div>
					</div>
					<div id="vision">
						<span id="vision-label">비전</span>
						
						<div id="vision-content1">
							토지특권을 근본적으로 차단하는<br> <b>‘지공주의(Geoism)’</b><br> 구현
						</div>
						<div id="vision-content2">
							공평과 정의를 기반으로 하는<br><b>‘공정국가(fair state)’</b><br> 모델 수립
						</div>
						<div id="vision-content3">
							남과 북이 하나로<br> 통합될 수 있는 <b>통일한국의<br> 대안적 경제체제</b> 연구
						</div>
					</div>
					<div id="object">
						<div id="research-object-label">연구과제</div>
						<div class="clear"></div>
						<div class="object-area">
							<span class="object-goal">실행 가능한 부동산 세제 디자인</span>
							<span class="object-content">토지불로소득 사유화 문제를 해결하기 위한 핵심 방안은 보유세를 통해 지대를 환수하는 것입니다. 토지+자유연구소는 토지보유세의 이론적·현실적 정책인 ‘지대이자차액세제’에 기초하여 ‘실행 가능한 부동산 세제’를 디자인합니다.</span>
						</div>	
						<div class="object-area">
							<span class="object-goal">자유로운 사회의 토대, ‘지대기본소득제’</span>
							<span class="object-content">남녀노소를 불문하고 모든 국민에게 일정한 금액을 무조건적으로 지급하는 것을 ‘기본소득’이라고 부릅니다. 기본소득 지급은 비자발적 노동 동기 감소, 기업에 대한 노동의 힘 강화, 일자리 나누기에 큰 도움이 됩니다. 연구소는 ‘토지특권 이익’과 ‘운에 의한 특권이익’, 즉 ‘경제지대’를 기본소득의 재원으로 하는 ‘지대기본소득제’를 실행 가능한 대안으로 제시하려고 합니다.</span>
						</div>	
						<div class="object-area">
							<span class="object-goal">토지정의에 기반한 도시재생 방안</span>
							<span class="object-content">기존 도시의 노후화가 진행되고 있는 상황에서 재개발･재건축 등을 포괄하는 도시재생은 꼭 필요한 일입니다. 그런데 올바른 방법으로 도시재생을 추진해야만 기존 거주자들의 주거권을 보호할 수 있고 각종 사회 갈등도 예방할 수 있습니다. 이를 위해 토지+자유연구소는 토지정의에 기반한 도시재생 방안을 연구합니다.</span>
						</div>	
						<div class="object-area">
							<span class="object-goal">북한 공공토지임대제 실시 방안</span>
							<span class="object-content">지공주의(공정국가)에 기초한 통일한국의 또 다른 중요한 축은 북한 토지제도 개혁입니다. 이를 위해서 그동안 베일에 가려진 북한 부동산시장의 현황을 살펴보고, 부동산정책의 흐름을 정리하는 기초연구를 진행합니다. 이러한 기초 위에서 공공소유 토지에서 사용권만 개인에게 양도하여 시장메커니즘을 결합시키는 공공토지임대제 실시 방안을 연구합니다.</span>
						</div>	
						<div class="object-area last-area">
							<span class="object-goal">새로운 경제학 원론(原論) 저술</span>
							<span class="object-content">오늘날 주류경제학이 희망을 주지 못하는 이유는 ‘정의(justice)’를 버렸기 때문입니다. 경제학도 사회과학의 한 분야인 까닭에, 사회의 운영원리 중에서 가장 중요한 요소인 ‘정의’가 경제학 전체에 반드시 스며들어야 합니다. 토지+자유연구소는 훌륭한 연구자들과 함께 정의와 경제이론을 융합한 새로운 경제학 원론을 집필할 계획을 가지고 있습니다.</span>
						</div>	
					</div>
				</div><!--close content-->
			</div><!--close subpage-->
		</div><!--close content-panel-->
		<div class="clear"></div>
	</div><!--close subpage_fixed-->
</div><!--close subpage_stretched-->
	<div class="clear"></div>
	
<?php get_footer(); ?>