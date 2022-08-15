<?php
get_header();
?>
    <div class="header-path">
        <div class="main">
            <?php breadcrumbs(); ?>
        </div>
    </div>
    <div class="delivery">
        <div class="main">
            <h1 class="delivery-title title"><span><?php the_field('delivery-title'); ?></span></h1>
            <div class="delivery-content">
                <div class="delivery-text">
                    <div class="del-p"><?php the_field('delivery-text'); ?></div>
                    <p class="del-cubes del-p">От <span>2</span> до <span>12</span> кубов</p>
                    
                    <p class="delivery-return del-p">
                        <span class="delivery-return">*Доставка на объект в день обращения</span>
                    </p>
                    <div class="payment del-p">
                        <div class="payment-title" style="font-weight:bold">Оплата</div>
                        <div class="payment-text">Вы можете оплатить заказ наличными или по карте при доставке</div>
                    </div>
                </div>
                <div class="delivery-img"><img loading="lazy" src="<?php the_field('delivery-img'); ?>" alt=""></div>
            </div>
        </div>
    </div>
    <div class="why">
            <h2 class="why-title title"><span><?php the_field('why-title',8); ?></span></h2>
            <div class="why-container">
                <?php
                $i = 1;
                while (have_rows('why-repeater', 8)) { the_row();
                    echo '<div class="why-card">
                    <div class="why-card-container">
                        <div class="why-card-img"><img loading="lazy" src="'.get_sub_field('why-repeater-image').'" alt=""></div>
                        <div class="why-card-text">'.get_sub_field('why-repeater-text').'</div>
                        <div class="why-counter">'. str_pad($i++, 2, "0", STR_PAD_LEFT).'</div>
                    </div>
                </div>';
                }
                ?>
            </div>
    </div>
    <div class="laboratory">
        <div class="main">
            <h2 class="laboratory-title title"><span><?php the_field('labs-title'); ?></span></h2>
            <div class="laboratory-content">
                <?php the_field('labs-text'); ?>
            </div>
        </div>
    </div>
    <h2 class="certificates-title title"><span>НАШИ СЕРТИФИКАТЫ</span></h2>
    <div class="certificates">
        <?php
        while (have_rows('certificates2')) { the_row();
            echo '<div><img loading="lazy" src="'.get_sub_field('certificates2-image').'" alt=""></div>';
        }
        ?>
    </div>
<?php
include 'footer-offer.php';
get_footer();
?>