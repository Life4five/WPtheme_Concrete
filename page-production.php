<?php
get_header();
?>
    <div class="header-path">
        <div class="main">
            <?php breadcrumbs(); ?>
        </div>
    </div>
    <div class="production">
            <h1 class="production-title title"><span><?php the_field('production-title'); ?></span></h1>
            <div class="production-table-container">
                <?php
                $j=1;
                            while (have_rows('prod', 8)) { the_row();
                                $i=0;
                                echo '<div id=table'.$j++.'>';
                                echo '<div class="main">';
                                echo '<h3 class="production-table-title subtitle">'.get_sub_field('prod-title').'</h3>';
                                echo '<div class="table">';
                                while (have_rows('prod-table')) { the_row();
                                    echo '<div class="table-row">';
                                    echo '<div class="table-d">'.get_sub_field('prod-table-name').'</div>';
                                    echo '<div class="table-d">'.get_sub_field('prod-table-weight').'</div>';
                                    echo '<div class="table-d">'.get_sub_field('prod-table-price');
                                    if ($i==0) {echo '</div>';} else {echo '&#8381;'.'</div>';}
                                    echo '</div>';
                                    $i=1;
                                }
                                echo '</div>';
                                echo '<div class="btn table-btn">'.get_sub_field("prod-btn").'</div>';
                                echo '</div>';
                                echo '</div>';
                            }
                        ?>
            </div>
    </div>
    <?show_slabs();?>

    <!-- <div class="slabs">
        <div class="main">
            <h2 class="slabs-title title">Плиты перекрытия</h2>
            <div class="slabs-container">
                <div class="slabs-text"></div>
                <div class="slabs-btns">
                    <div class="slabs-offer btn-inv">Сделать заказ</div>
                    <div class="slabs-price-list btn"><a target="_blank" rel="noopener noreferrer" href=""></a></div>
                </div>
            </div>
        </div>
    </div> -->

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