<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package concrete2022
 */

?>

<div class="footer">
    <div class="main">
        <div class="footer-container">
            <div class="footer-logo">
                <a href="/">
                    <img loading="lazy" src="<?php echo get_template_directory_uri();?>/img/logo.svg" width="160" alt="">
                </a>
            </div>
            <div class="footer-lists">
                <div class="contacts">
                    <div class="contacts-title"><a href="tel:74732124337"><?php the_field('footer-phone', 8); ?></a></div>
                    <div><?php the_field('footer-address', 8); ?></div>
                    <div><a href="mailto:beton.partner36@gmail.com"><?php the_field('footer-mail', 8); ?></a></div>
                    <div>По поводу оформления заказов,<br>
                        сотрудничества и вакансий.</div>
                </div>
                <div class="footer-list">
                    <div class="footer-list-title">Услуги</div>
                    <ul class="footer-list-ul">
                        <li><a href="/production/">Продукция</a></li>
                        <li><a href="/production/#table1">Товарный бетон</a></li>
                        <li><a href="/production/#table2">Блоки ФБС</a></li>
                        <li><a href="/production/#table3">Цементная смесь</a></li>
                    </ul>
                </div>
                <div class="footer-list">
                    <div class="footer-list-title">Информация</div>
                    <ul class="footer-list-ul">
                        <li><a href="/about/">О компании</a></li>
                        <li><a href="/contacts/">Контакты</a></li>
                        <li><a href="/delivery/">Доставка и оплата</a></li>
                    </ul>
                </div>
                <div class="online-help">
                    <div class="online-help-title">
                        Онлайн помощь <br>
                        с 8:00 до 22:00
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div>© 2008—2022 | Все права защищены</div>
                <div class="copyright-link"><a href="<?php echo get_privacy_policy_url();?>">Политика конфиденциальности</a></div>
            </div>
        </div>
    </div>
</div>

<!--JavaScript-->
<script src="<?php echo get_template_directory_uri();?>/js/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri();?>/slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo get_template_directory_uri();?>/js/script.js?v=1.2"></script>
<?php wp_footer(); ?>
</body>


</html>
