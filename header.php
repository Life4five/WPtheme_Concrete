<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package concrete2022
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta name="yandex-verification" content="cc1f7b02459fd112" />

	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="yandex-verification" content="056099dc1a9c942e" />
    <meta name="google-site-verification" content="bml1LgVRr63Mie9TCTue5YViXilgav6AdB9ZxI7cN-g" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/slick/slick-theme.css">

	<?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/responsive.css?v=2">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(88177667, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true
        });
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/88177667" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

    <div class="header">
        <div class="main">
            <div class="header-logo-mobile">
                <a href="/"><img loading="lazy" src="<?php echo get_template_directory_uri();?>/img/logo.svg" alt=""></a>
            </div>
            <div class="header-btns-mobile">

				<div class="wapp_btn"> <a href="https://wa.me/79038506322"></a></div>
				<div class="phone">
					<a href="tel:74732124337">
						<img loading="lazy" src="<?php echo get_template_directory_uri();?>/img/phone.svg" alt="">
					</a>
				</div>
				<div class="nav-menu">
					<div id="show-nav-menu">
						<svg width="32" height="19" viewBox="0 0 32 19" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M32 3H0V0H32V3ZM32 11H0V8H32V11ZM0 19H32V16H0V19Z" fill="#93BDFF"/>
						</svg>
					</div>
				</div>
            </div>

            <div class="nav-title">
                <div id="nav-title-left">
                    <div class="logo"><a href="/"><img loading="lazy" src="<?php echo get_template_directory_uri();?>/img/logo.svg"  alt=""></a></div><div class="address"><?php the_field('header-address', 8); ?></div>
                </div>
                <div id="nav-title-right">
                    <div class="nav-title-cont nav-tgram-cont"> <a href="https://t.me/ivann1kov">Перейти в Telegram</a></div>
                    <div class="nav-title-cont nav-tel-cont">
                        <span>
                            <a href="tel:74732124337"><?php the_field('header-phone', 8); ?></a>
                        Обратная связь</span>
                    </div>
                    <div class="nav-title-cont nav-btn-cont"><a class="btn header-btn">ЗАКАЗАТЬ БЕТОН</a></div>
                </div>
            </div>
            <div class="nav-window">
                <div id="nav-close">
                    <img loading="lazy" src="<?php echo get_template_directory_uri();?>/img/nav-close.svg" alt="">
                </div>
                <div class="nav-list">
                    <div class="nav-list-title">Услуги</div>
                    <ul class="nav-list-ul">
                        <li class="ul-ss"><a href="/production/">Продукция</a></li>
                        <li class="ul-ss"><a href="/production/#table1">Товарный бетон</a></li>
                        <li class="ul-ss"><a href="/production/#table2">Блоки ФБС</a></li>
                        <li class="ul-ss"><a href="/production/#table3">Цементная смесь</a></li>
                    </ul>
                </div>
                <div class="nav-list">
                    <div class="nav-list-title">Информация</div>
                    <ul class="nav-list-ul">
                        <li class="ul-ss"><a href="/about/">О компании</a></li>
                        <li class="ul-ss"><a href="/contacts/">Контакты</a></li>
                        <li class="ul-ss"><a href="/delivery/">Доставка и оплата</a></li>
                    </ul>
				</div>
                <div class="nav-title-cont nav-wapp-cont"> <a href="https://wa.me/79038506322">Перейти в Whatsapp</a></div>
                <div class="header-copyright">
                    <div><a href="<?php echo get_privacy_policy_url();?>">Политика конфиденциальности</a></div>
                </div>
                <div class="header-phone">
                    <span><a href="tel:74732124337">+7 (473) 212-43-37</a></span>
                </div>
            </div>
            <div class="popup-offer">
                <div class="popup-offer-container">
                    <div class="popup-offer-title title"><span>ЗАПОЛНИТЕ ФОРМУ И МЫ СВЯЖЕМСЯ С ВАМИ</span></div>
                    <div class="popup-offer-form"><?php echo do_shortcode('[contact-form-7 id="482" title="pop-up форма"]'); ?></div>
                </div>
            </div>
            <div class="popup-review">
                <div class="popup-offer-container">
                    <div class="popup-offer-title title"><span>ОСТАВЬТЕ ОТЗЫВ</span></div>
                    <div class="popup-offer-form"><?php echo do_shortcode('[contact-form-7 id="488" title="pop-up отзыв"]'); ?></div>
                </div>
            </div>
        </div>
        <div <?php if (is_front_page()) {echo 'class="front-page-menu"';} ?>>

            <?php wp_nav_menu( array(
                'menu' => 'Menu1',
                'container' => 'ul',
                'menu_class' => 'nav-bar',
            )); ?>
        </div>
        <div class="popup-blackout"></div>
    </div>