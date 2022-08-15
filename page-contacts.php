<?php
get_header();
?>
    <div class="header-path">
        <div class="main">
            <?php breadcrumbs(); ?>
        </div>
    </div>
    <div class="contact">
        <div class="main">
            <h1 class="contact-title title"><span>КОНТАКТЫ</span></h1>
            <div class="contact-intro">
                <div class="contact-intro-container1"><img loading="lazy" src="<?php echo get_template_directory_uri();?>/img/contact-img.png" alt=""></div>
                <div class="contact-intro-container2">
                    <div class="main">
                        <div class="contact-intro-container2-title"><span>Бетон-Партнер</span></div>
                    <div class="contact-intro-container2-text">
                        Адрес производства: г. Воронеж, Ростовская 45/3
                    </div>
                    <a class="openMap" href="https://yandex.ru/maps/193/voronezh/?ll=39.254489%2C51.598036&z=18.64">Открыть адрес в Яндекс Картах</a>
                    <a class="openMap" href="https://www.google.com/maps/place/Ulitsa+Chebysheva,+5,+Voronez,+Voronezhskaya+oblast',+394084/@51.5979555,39.2535005,17.54z/data=!4m5!3m4!1s0x413b322732d9f739:0x74a589b248ded45a!8m2!3d51.5970208!4d39.2523322">Открыть адрес в Google Maps</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="contact-detail">
        <div class="main">
            <div class="contact-details">
                <h2 class="contact-details-title title"><span>Контактные данные</span></h2>
                <div class="contact-details-content">
                    <p class="requests">
                        <?php the_field('contact-detail-1'); ?>
                    </p>
                </div>
                <div class="contact-details-counter">01</div>
            </div>
            <div class="contact-details">
                <h2 class="contact-details-title title"><span>Реквизиты</span></h2>
                <div class="contact-details-content">
                    <p class="requests">
                        <?php the_field('contact-detail-2'); ?>
                    </p>
                </div>
                <div class="contact-details-counter">02</div>
            </div>
        </div>
    </div>
   <div class="location2">
        <div class="yamap" id="map" style="position:relative;overflow:hidden;">
            <!--<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A7e42e72c174efd62b44aeb427f049f45457fd55abbed20a11ac7d6ab68069e5c&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=false"></script>-->
             <script>
                 var map_loaded = false;
                 function loadScript() {
                  if (!map_loaded) {
                   var script = document.createElement('script');
                   script.src = "https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A7e42e72c174efd62b44aeb427f049f45457fd55abbed20a11ac7d6ab68069e5c&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=false";
                   script.async = true;
                   var map = document.getElementById('map');
                   map.append(script);
                   map_loaded = true;
                  }
                 }
                 document.addEventListener("scroll", loadScript, {once: true});
                 document.addEventListener("mousemove", loadScript, {once: true});
        </script>
    </div>
</div>
   
<?php
include 'footer-offer.php';
get_footer();
?>