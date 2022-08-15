<?php
get_header();
?>
    <div class="intro">
        <div class="main">
                <h1 class="intro-text"><?php the_field('intro-title'); ?></h1>
                <div class="intro-btns">
                    <div class="btn-inv">СДЕЛАТЬ ЗАКАЗ</div>
                    <div class="btn"><a target="_blank" rel="noopener noreferrer" href="<?php the_field('price-list-file'); ?>"><?php the_field('price-list'); ?></a></div>
                </div>
                    <div class="intro-car"><img loading="lazy" src="<?php echo get_template_directory_uri();?>/img/carnew.png" alt=""></div>
        </div>
    </div>
    <div class="why">
            <h2 class="why-title title"><span><?php the_field('why-title'); ?></span></h2>
            <div class="why-container">
                <?php
                $i = 1;
                while (have_rows('why-repeater')) { the_row();
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
    <div class="production">

            <h2 class="production-title title"><span><?php the_field('production-title'); ?></span></h2>
            <div class="production-table-container">
                        <?php
                            while (have_rows('prod')) { the_row();
                                $i=0;
                                echo '<div>';
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
    <div id="prices" class="prices">
        <div class="pricesbg"><img loading="lazy" src="<?php echo get_template_directory_uri();?>/img/pricesbg.png" alt="" ></div>
        <div class="main">
                <h2 class="prices-title title"><span><?php the_field('prices-title'); ?></span></h2>
                <div class="prices-container">
                    <div class="prices-form-container">
                        <select name="product1" id="product1">
                            <option value="" disabled selected>Выберите продукт</option>
                            <?php
                            $i=1;
                            while (have_rows('prod')) { the_row();
                                    echo '<option value="' . get_sub_field("prod-title") . '" data-id="marka'.$i++.'">';
                                    echo get_sub_field('prod-title');
                                    echo '</option>';
                            }
                            ?>
                        </select>
                        <div class="marka-selects">
                            <?php
                            $i = 1;
                            while (have_rows('prod')) { the_row();
                                echo '<select class="marka-select" id="marka'.$i++.'" style="display:block" disabled>';

                                while (have_rows('prod-table')) { the_row();
                                    echo '<option data-price="'.get_sub_field('prod-table-price').'" value="'.get_sub_field('prod-table-name').'">'.get_sub_field('prod-table-name').'</option>';
                                }
                                echo '</select>';
                            }
                            ?>
                        </div>
                        <input id="calc-amount" name="Amount" type="number" placeholder="Введите объем в м3">

                        <div class="prices-counter">01</div>
                    </div>
                    <div class="prices-calc">
                        <?php echo do_shortcode('[contact-form-7 id="424" title="Форма калькулятора"]'); ?>
                    </div>
                </div>
        </div>
    </div>
    <div class="about">
        <div class="main">
            <h2 class="about-title title"><span><?php the_field('about-title'); ?></span></h2>
            <div id="about-container1" class="about-container">
                <div id="about1">
                    <div><?php the_field('about-text1'); ?></div>
                </div>
                <div id="about2">
                    <img loading="lazy" id="about-img1" src="<?php the_field('about-image1'); ?>" alt="">
                </div>
            </div>
            <div id="about-container2" class="about-container">
                <div id="about3"><img loading="lazy" id="about-img2" src="<?php the_field('about-image2'); ?>" alt=""></div>
                <div id="about4">
                    <div><?php the_field('about-text2'); ?></div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="gallery">
        <div class="main">
            <?php
            while (have_rows('gallery')) { the_row();
                echo '<div><img src="'.get_sub_field('gallery-image').'" alt=""></div>';
            }
            ?>
        </div>
    </div> -->
    <div class="reviews">
        <div class="main">
            <h2 class="reviews-title title"><span><?php the_field('reviews-title'); ?></span></h2>
            <div class="reviewsbg"></div>
            <div class="reviews-container">
                <div class="reviews-slider">
                    <section class="regular slider" style="height:320px">
                        <?php
                        while (have_rows('reviews-slide')) { the_row();
                            echo '
                                <div>
                                    <div class="reviews-card">
                                        <div class="reviews-card-title">'.get_sub_field('reviews-slide-name').'</div>
                                        <div class="reviews-card-subtitle">'.get_sub_field('reviews-slide-post').'</div>
                                        <div class="reviews-card-text">
                                            <span>'.get_sub_field('reviews-slide-text').'</span>
                                        </div>
                                    </div>
                                </div>
                            ';
                        }
                        ?>

                    </section>
                </div>
                <div class="btn-inv reviews-btn">ОСТАВИТЬ ОТЗЫВ</div>
            </div>
        </div>
    </div>
    <div class="reminder">
        <div class="main">
            <div class="reminder-container">
                <h2 class="reminder-title"><span>Памятка покупателю перед покупкой</span></h2>
                <div class="reminder-img"><img loading="lazy" src="<?php echo get_template_directory_uri();?>/img/reminder-img.png" alt=""></div>
                <div class="reminder-btn btn-inv btn-butt"><a target="_blank" rel="noopener noreferrer" href="<?php the_field('reminder-file'); ?>">Ознакомиться</a></div>
            </div>
        </div>
    </div>
    <!-- <div class="articles">
        <div class="main">
            <div class="articles-title title"><span><?php the_field('articles-title'); ?></span></div>
            <div id="articles-container1" class="articles-container">
                <div id="article1"><img id="articles-img1" src="<?php echo get_template_directory_uri();?>/img/article1.png" width="100%" alt=""></div>
                <div id="article2">
                    <span>
                    Бетон-партнер - кампания по производству бетона
                    наивысшего качества. Благодаря наличию собственной
                    лаборатории, клиент, решивший купить бетон, может
                    быть уверен в соответствии качества ГОСТу.  Бетон-
                    партнер - кампания по производству бетона наивысшего
                    качества. Благодаря наличию собственной лаборатории,
                    клиент, решивший купить бетон, может быть уверен в
                    соответствии качества ГОСТу. Наши специалисты охотно
                    помогут при выборе марки бетона и проконсультируют
                    по техническим аспектам. Более подробную
                    информацию можно получить у оператора. Более
                    подробную информацию можно получить у оператора.
                    </span>
                </div>
            </div>
            <div id="articles-container2" class="articles-container">
                <div id="article3">
                    <span>
                    Бетон-партнер - кампания по производству бетона
                    наивысшего качества. Благодаря наличию собственной
                    лаборатории, клиент, решивший купить бетон, может
                    быть уверен в соответствии качества ГОСТу.  Бетон-
                    партнер - кампания по производству бетона наивысшего
                    качества. Благодаря наличию собственной лаборатории,
                    клиент, решивший купить бетон, может быть уверен в
                    соответствии качества ГОСТу. Наши специалисты охотно
                    помогут при выборе марки бетона и проконсультируют
                    по техническим аспектам. Более подробную
                    информацию можно получить у оператора. Более
                    подробную информацию можно получить у оператора.
                    </span>
                </div>
                <div id="article4"><img id="articles-img2" src="<?php echo get_template_directory_uri();?>/img/article2.png" width="100%" alt=""></div>
            </div>
            <div class="btn articles-btn"><a href="<?php echo 'category/articles'; ?>">ВСЕ СТАТЬИ</a></div>
        </div>
    </div> -->
        <div class="location">
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
get_footer();