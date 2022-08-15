<?php
get_header();
?>
        <div class="header-path">
            <div class="main">
                <?php breadcrumbs(); ?>
            </div>
        </div>
        <div class="about">
            <div class="main">
                <h2 class="about-title title"><span><?php the_field('about-title', 8); ?></span></h2>
                <div id="about-container1" class="about-container">
                    <div id="about1">
                        <div><?php the_field('about-text1', 8); ?></div>
                    </div>
                    <div id="about2">
                        <img loading="lazy" id="about-img1" src="<?php the_field('about-image1', 8); ?>" alt="">
                    </div>
                </div>
                <div id="about-container2" class="about-container">
                    <div id="about3"><img loading="lazy" id="about-img2" src="<?php the_field('about-image2', 8); ?>" alt=""></div>
                    <div id="about4">
                        <div><?php the_field('about-text2', 8); ?></div>
                    </div>
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
        <h2 class="certificates-title title"><span><?php the_field('certificates2-title'); ?></span></h2>
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