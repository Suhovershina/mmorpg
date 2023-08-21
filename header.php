<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)die();
IncludeTemplateLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/templates/".SITE_TEMPLATE_ID."/header.php");
$wizTemplateId = COption::GetOptionString("main", "wizard_template_id", "bejetstore_purple_white", SITE_ID);
CUtil::InitJSCore();
CJSCore::Init(array("fx"));
$curPage = $APPLICATION->GetCurPage(true);
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/brands.css", true); include('bxProlog.php');
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>" xmlns:og="http://ogp.me/ns#">
<head itemscope itemtype="http://schema.org/WPHeader">
	<?
		$THEME_TUNER_SHOW = COption::GetOptionString("twinpx.bejetstore", "THEME_TUNER_SHOW_".SITE_ID);
		if ($THEME_TUNER_SHOW == 'Y') {
			$APPLICATION->IncludeComponent("bejetstore:tuner", "empty", array(), false );
		}
		$THEME_NEW_SEASON_SHOW = '';
		if (COption::GetOptionString("twinpx.bejetstore", "THEME_NEW_SEASON_SHOW_".SITE_ID) == 'Y') {
			$THEME_NEW_SEASON_SHOW = 'hidden-new-season-show ';
		}
		$cur_page = $APPLICATION->GetCurPage();
		$curPageUrl = (CMain::IsHTTPS()) ? "https://" : "http://";
		$curPageUrl .= $_SERVER["HTTP_HOST"].$cur_page;
	?>

	<link rel="stylesheet" href="/bitrix/templates/bejet_seller-1.6.0/css/swiper.min.css">
	<script src="/bitrix/templates/bejet_seller-1.6.0/js/swiper.min.js"></script>

	<title itemprop="headline"><?$APPLICATION->ShowTitle()?></title>

	<meta property="og:title" content="<?$APPLICATION->ShowTitle()?>" />
	<meta property="og:type" content="website" />
	<meta property="og:description" content="<?$APPLICATION->ShowProperty("description");?>" />
	<meta property="og:url" content="<?=$curPageUrl;?>" />
	<meta property="og:image" content="https://volnastore.com/include/volnastore_logo_header.svg"/>
	
    <meta itemprop="description" content="<?$APPLICATION->ShowProperty("description");?>" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="initial-scale=1.0, width=device-width">

	<link rel="icon" href="/favicon.svg" type="image/svg+xml" />
	<?/*<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_DIR?>favicon.ico" />*/?>

	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/banners/style.css", TRUE);?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/components/bitrix/advertising.banner/index/style.css", TRUE);?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/css/banners/script.js", TRUE);?>

	<?
	$APPLICATION->AddHeadString('<script src="'.SITE_TEMPLATE_PATH.'/js/jquery-1.11.1.min.js" data-skip-moving="true"></script>', false, AFTER_JS_KERNEL); //Подключаем на вверх…

	//fotorama
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/fotorama.css");
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/fotorama.js");

	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/materialize.min.js");
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery-ui.min.js");

	if($_COOKIE["mobile"] != "mobile")
	{
		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/bootstrap.min.css");
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/bootstrap.min.js");
	}
	else
	{
		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/bootstrap-mobile.css");
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/bootstrap-mobile.js");
	}
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/materialize.min.css");
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/bootstrap-theme.min.css");
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/jquery-ui.min.css");
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/jquery-ui.structure.min.css");
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/jquery-ui.theme.min.css");
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/plugins.css");

	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/plugins.js");
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/script.js", TRUE);
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/custom.js", TRUE);
	?>
    <!---TEST--->
	<?$APPLICATION->ShowHead();?>
    <!---TEST END--->
	<?clearstatcache()?>
	<?
	// custom style from tuner
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/themes/color_".SITE_ID.".css", TRUE);
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/themes/font_".SITE_ID.".css", TRUE);
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/themes/font_size_".SITE_ID.".css", TRUE);
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/themes/screen_width_".SITE_ID.".css", TRUE);
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/custom.css", TRUE);
	?>
</head>
<?
	$shopping_page = '';
	if ($APPLICATION->getcurpage(false) == '/personal-shopping/') {
		$shopping_page = 'shopping-page ';
	}
?>
<body id="top" class="<?= $shopping_page . $THEME_NEW_SEASON_SHOW ?>">
<div class="volna--noty"><b>
Уважаемые клиенты, у нас действует акция - <u><a href="/about/company/promotion/">узнать подробности</a></u></b></div>
<svg display="none" width="0" height="0" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
		<symbol id="icon-slider-arrow" viewBox="0 0 478 478">
			<path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
			c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z
			"/>
        </symbol>
    </defs>
</svg>

<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<?
if($USER->IsAuthorized()){
	$rsUser = CUser::GetByID($USER->getId());
	$arUser = $rsUser->Fetch();
}
?>
<?
$USER_FONT_LINK = COption::GetOptionString("twinpx.bejetstore", "THEME_USER_FONT_LINK_".SITE_ID);
if ($USER_FONT_LINK) {
    echo $USER_FONT_LINK;
}
else {
    $THEME_FONT    = COption::GetOptionString("twinpx.bejetstore", "THEME_FONT_".SITE_ID);
    $fontsListFile = $_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/twinpx.bejetstore/fonts.json';
    if (file_exists($fontsListFile)) {
        $fontsList = json_decode(file_get_contents($fontsListFile), true);
        echo $fontsList[$THEME_FONT];
    }
}
?>
<?
if(isset($_SESSION['THEME_HEADER']) && $_SESSION['PREVIEW_MOD']){
	$THEME_HEADER = $_SESSION['THEME_HEADER'];
	if($THEME_HEADER && file_exists($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH.'/themes/header/'.$THEME_HEADER.'/header.php')){
		include('themes/header/'.$THEME_HEADER.'/header.php');
	}
	else
	{
		include('themes/header/default/header.php');
	}
}
else
{
	$THEME_HEADER = COption::GetOptionString("twinpx.bejetstore", "THEME_HEADER_".SITE_ID);
	if($THEME_HEADER !== '' && file_exists($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH.'/themes/header/'.$THEME_HEADER.'/header.php')){
		include('themes/header/'.$THEME_HEADER.'/header.php');
	}
	else
	{
		include('themes/header/default/header.php');
	}
}
?>

<ul id="sideNavPanel" class="side-nav fixSideNav">
	<li>
		<div class="slideMenu">
			<?$APPLICATION->IncludeComponent(
				"bitrix:catalog.section.list",
				"slideMenu",
				Array(
					"ADD_SECTIONS_CHAIN" => "N",
					"CACHE_FILTER" => "N",
					"CACHE_GROUPS" => "N",
					"CACHE_TIME" => "36000000",
					"CACHE_TYPE" => "A",
					"COMPONENT_TEMPLATE" => "tree",
					"COMPOSITE_FRAME_MODE" => "A",
					"COMPOSITE_FRAME_TYPE" => "AUTO",
					"COUNT_ELEMENTS" => "Y",
					"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
					"FILTER_NAME" => "slideMenuFilter",
					"IBLOCK_ID" => "31",
					"IBLOCK_TYPE" => "1c_catalog",
					"SECTION_CODE" => "",
					"SECTION_FIELDS" => array(0=>"",1=>"",),
					"SECTION_ID" => "",
					"SECTION_URL" => "",
					"SECTION_USER_FIELDS" => array(0=>"",1=>"",),
					"SHOW_PARENT_NAME" => "N",
					"TOP_DEPTH" => "3",
					"VIEW_MODE" => "LINE"
				)
			);?>
			<div class="slideMenu__footer">
				<?
				if($USER->IsAuthorized()):?>
				<?
				$print_name = $arUser['NAME'].' '.$arUser['LAST_NAME'];
				if(!trim($print_name))$print_name = $arUser['LOGIN'];
				?>
					<a href="/personal/"><?=$print_name?></a>
					<a href="/?logout=yes"><?=GetMessage("OUT")?></a>
				<?
				else:?>
					<a href="/auth/" class="active">Вход</a>
					<a href="/auth/?register=yes">Регистрация</a>
				<?endif?>
			</div>

			<div class="mobile-menu-cont">
				<div class="footer__contact">
					<div class="footer__title">Связаться с нами</div>
					<div class="footer__phone">
						<a href="tel:88002508141">
							<span class="footer__phone-tel">8 (800) 250-81-41</span>
							<span class="footer__phone-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
									<path id="Icon_feather-phone" data-name="Icon feather-phone" d="M21.167,16.476v2.71a1.809,1.809,0,0,1-1.973,1.806,17.933,17.933,0,0,1-7.81-2.773A17.631,17.631,0,0,1,5.954,12.8,17.852,17.852,0,0,1,3.175,4.969,1.808,1.808,0,0,1,4.976,3H7.691A1.809,1.809,0,0,1,9.5,4.554a11.579,11.579,0,0,0,.634,2.538A1.8,1.8,0,0,1,9.728,9L8.578,10.145a14.466,14.466,0,0,0,5.43,5.419l1.149-1.147a1.813,1.813,0,0,1,1.91-.406,11.639,11.639,0,0,0,2.543.632,1.808,1.808,0,0,1,1.557,1.834Z" transform="translate(-3.168 -3)" fill="#99A0AD"></path>
								</svg>
							</span>
						</a>
						<span class="footer__phone-desc">Бесплатный звонок</span>
					</div>
					<?/*<div class="footer__socials">
						<a href="https://www.instagram.com/td_volna/" target="_blank">
						<img src="/images/instagram.png" alt="Instagram">
						</a>
						<a href="https://www.facebook.com/td.volna/" target="_blank">
							<img src="/images/facebook.png" alt="Facebook">
						</a>
					</div>*/?>
				</div>
			</div>
			<div class="mobile-menu-logo">
				<a href="/"><img width="300" src="/include/volnastore_logo_header.svg" height="60" alt="" title=""></a>
			</div>
		</div>
	</li>
	<?/*<li class="logo">
		<?
		if($curPage == SITE_DIR."index.php"):?>
		<span class="bj-logo">
			<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW"=> "file","PATH"          => SITE_DIR."include/company_logo.php"), false);?>
		</span>
		<?
		else:?>
		<a href="<?=SITE_DIR?>" class="bj-logo">
			<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW"=> "file","PATH"          => SITE_DIR."include/company_logo.php"), false);?>
		</a>
		<?endif;?>
	</li>

	<li class="no-padding">
		<div class="media">
			<div class="media-body">
				<?
				if($USER->IsAuthorized()):?>
				<?
				$print_name = $arUser['NAME'].' '.$arUser['LAST_NAME'];
				if(!trim($print_name))$print_name = $arUser['LOGIN'];
				?>
				<ul>
					<li>
						<a href="/personal/"><?=$print_name?></a>
					</li>
					<li>
						<a href="/?logout=yes"><?=GetMessage("OUT")?></a>
					</li>
				</ul>
				<?
				else:?>
				<ul>
					<li>
						<a href="/auth/"><?=GetMessage("IN")?></a>
					</li>
					<li>
						<a href="/auth/?register=yes"><?=GetMessage("REG")?></a>
					</li>
				</ul>
				<?endif?>
			</div>
			<?
			if($USER->IsAuthorized()):?>
			<div class="media-right">
				<?
				if($arUser["PERSONAL_PHOTO"]):?>
					<?$file = CFile::ResizeImageGet($arUser["PERSONAL_PHOTO"], array('width' =>64,'height'=>64), BX_RESIZE_IMAGE_PROPORTIONAL, true);
					$img = '<img src="'.$file['src'].'" width="'.$file['width'].'" height="'.$file['height'].'" />';
					?>
					<a href="/personal/"><?=$img?></a>
				<?
				else:?>
					<a href="/personal/">
						<img src="/upload/userpic.png" alt="">
					</a>
				<?endif?>
			</div>
			<?endif?>
		</div>
	</li>

	<?
	if($USER->IsAuthorized()):?>
	<li class="no-padding">
		<ul>
			<li>
				<a href="/personal/cart/">
					<?=GetMessage("CART")?>
					<span class="badge">
						<?
						$APPLICATION->IncludeComponent("bitrix:sale.basket.basket.line", "top-left", array(
								"PATH_TO_BASKET"    => SITE_DIR."personal/cart/",
								"PATH_TO_PERSONAL"  => SITE_DIR."personal/",
								"SHOW_PERSONAL_LINK"=> "N"
							),
							false,
							Array('')
						);
						?>
					</span>
				</a>
			</li>
			<li>
				<a href="/personal/index.php?SECTION=orders"><?=GetMessage("ORDERS")?></a>
			</li>
		</ul>
	</li>
	<?endif?>

	<li class="no-padding">
		<?$APPLICATION->IncludeComponent("bitrix:menu", "top_left", array(
				"ROOT_MENU_TYPE"       => "sidenav_shopmenu",
				"MENU_CACHE_TYPE"      => "N",
				"MENU_CACHE_TIME"      => "36000000",
				"MENU_CACHE_USE_GROUPS"=> "Y",
				"MENU_CACHE_GET_VARS"   => array(
				),
				"MAX_LEVEL"            => "1",
				"CHILD_MENU_TYPE"      => "sidenav_shopmenu",
				"USE_EXT"              => "Y",
				"DELAY"                => "N",
				"ALLOW_MULTI_SELECT"   => "N"
			),
			false
		);?>
	</li>*/?>
</ul>

<?
if($THEME_TUNER_SHOW == 'Y'):?>
<?$APPLICATION->IncludeComponent(
	"bejetstore:tuner",
	".default",
	array(
		"COMPONENT_TEMPLATE"  => ".default",
		"TOKEN"               => "",
		"COUNT"               => "",
		"H2"                  => "",
		"TEXT_BLOCK"          => "",
		"COMPOSITE_FRAME_MODE"=> "A",
		"COMPOSITE_FRAME_TYPE"=> "AUTO",
		"CACHE_TYPE"          => "N",
		"CACHE_TIME"          => "3600",
		"CACHE_GROUPS"        => "Y",
		"LINK_URL"            => "",
		"LINK_TEXT"           => ""
	),
	false
);?>
<?endif;?>
<div class="app">
<div class="bj-page-content container-fluid">
	<div class="loadAjax">
<?if($APPLICATION->GetCurPage(false) !== '/' && $APPLICATION->GetCurPage(false) !== '/men/'){?>
	<div class="bj-top-decoration"></div>
	<?
	if($APPLICATION->GetCurDir() != SITE_DIR):?>
		<div class="hidden-xs">
			<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "", array(
					"START_FROM"=> "0",
					"PATH"      => "",
					"SITE_ID"   => "-"
				),
				false,
				Array('HIDE_ICONS'=> 'Y')
			);?>
		</div>
	<?endif;?>

	<? if($curPage != SITE_DIR."index.php"):?>
		<? if(strpos($APPLICATION->GetCurDir(),"/catalog/") !== false):?>
			<div class="row b-catalog-detail">
				<div class="col-sm-8">
					<hr class="visible-xs-block">
					<h1>
						<?=$APPLICATION->ShowTitle(false);?>
					</h1>
				</div>
				<div class="col-sm-4">
					<div class="b-catalog-tags">
						<?$APPLICATION->ShowViewContent("section_tags_position");?>
					</div>
				</div>
			</div>
		<? else: ?>
			<hr class="visible-xs-block">
			<h1><?=$APPLICATION->ShowTitle(false);?></h1>
		<?endif;?>
	<?endif?>
<?}?>