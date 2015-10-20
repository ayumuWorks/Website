<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Sydney
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- uikit -->
<link rel="stylesheet" href="wp-content/themes/sydney/css/uikit/uikit.css" media="all">
<script src="wp-content/themes/sydney/js/uikit/uikit.min.js"></script>

<?php if ( get_theme_mod('site_favicon') ) : ?>
	<link rel="shortcut icon" href="<?php echo esc_url(get_theme_mod('site_favicon')); ?>" />
<?php endif; ?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<section id="concept-02" class="com-panel-01 com-concept-01">
    <h3 class="tit-balloon">
        <img src="cmscp/wp-content/themes/mymall/img/concept/concept/02_01.png" alt="コンセプト">
    </h3>
    <div class="uk-container uk-container-center">
        <div class="uk-grid uk-grid-width-1-2" data-uk-grid-margin>
            <section>
                <img class="uk-visible-large" src="cmscp/wp-content/themes/mymall/img/concept/concept/02_02.jpg" alt="コンセプト">
                <img class="uk-hidden-large" src="cmscp/wp-content/themes/mymall/img/concept/concept/02_02_m.jpg" alt="コンセプト">
                <h4 class="com-tit-02 mblarge">想いを共有しましょう。</h4>
                <img class="uk-visible-medium chara" src="cmscp/wp-content/themes/mymall/img/concept/concept/02_04.jpg" alt="太陽リズム">
                <p class="mb1em">例えば「ナチュラルモダン」という一つのキーワードからイメージする風景は、仲の良い夫婦の間でも完全に一致することは難しいでしょう。ましてやお客様と設計者ともなれば、お互いのイメージを一致させるのに手間がかかるのは当然です。</p>
                <img class="uk-visible-large chara" src="cmscp/wp-content/themes/mymall/img/concept/concept/02_04.jpg" alt="太陽リズム">
                <p>でも私たちはその手間を大切にしています。それはお客様の”夢”と”こだわり”を実現するために、お客様とイメージを一致させる必要があるからです。</p>
                <p>たくさんの写真を見たり、素材にふれたり、見学会に参加してもらったり、時には趣味の話で盛り上がったり…。いろいろな方法で、お客様の想いを共有します。</p>
            </section>
            <section>
                <img class="uk-visible-large" src="cmscp/wp-content/themes/mymall/img/concept/concept/02_03.jpg" alt="コンセプト">
                <img class="uk-hidden-large" src="cmscp/wp-content/themes/mymall/img/concept/concept/02_03_m.jpg" alt="コンセプト">
                <h4 class="com-tit-02 mblarge">見て、触れて、イメージして下さい。</h4>
                <p class="mb">家づくりはすべて想像の中から形にしていかなければなりません。でも大切な家を頭の中だけで形作っていくことは難しいですよね。</p>
                <p>安心して家づくりを進めて行くために定期的に開催する「完成見学会」や「構造見学会」に是非ご参加ください。そこで実際に目で見て、手で触れ、イメージすることで家づくりの過程で生まれる「不安」を「安心」に変えて欲しいのです。そして納得いくまで打ち合わせを繰り返し愛情を注げる夢や想いの詰まった家を一緒に建てていきましょう。</p>
                <a href="modelhouse.html"><div class="com-panel-02">モデルハウスを見る</div></a>
            </section>
        </div>
    </div>      
</section><!-- /#concept-02 -->

<div class="preloader">
    <div class="spinner">
        <div class="pre-bounce1"></div>
        <div class="pre-bounce2"></div>
    </div>
</div>	
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'sydney' ); ?></a>

	<?php sydney_slider_template(); ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-wrap">
            <div class="container">
                <div class="row">
				<div class="col-md-4 col-sm-8 col-xs-12">
		        
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><img class="site-logo" src="<?php echo esc_url(get_theme_mod('site_logo')); ?>" alt="<?php bloginfo('name'); ?>" /></a>
		        <?php else : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>	        
		        <?php endif; ?>
				</div>
				<div class="col-md-8 col-sm-4 col-xs-12">
					<div class="btn-menu"></div>
					<nav id="mainnav" class="mainnav" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'fallback_cb' => 'sydney_menu_fallback' ) ); ?>
					</nav><!-- #site-navigation -->
				</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
	<div class="header-image"><?php sydney_header_overlay(); ?></div>


	<div id="content" class="page-wrap">
		<div class="container content-wrapper">
			<div class="row">	