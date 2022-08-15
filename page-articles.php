<?php
get_header();
?>
    <div class="header-path">
        <div class="main">
            <?php breadcrumbs(); ?>
        </div>
    </div>
    <div class="articles-list">
        <div class="main">
            <div class="articles-list-title title"><span>СТАТЬИ</span></div>
            <div class='articles-row'>
                <div class='articles-block'>
                    <a class='articles-block-href' href=''>
                        <img loading="lazy" src="../img/articleimg0.png" alt=''>
                        <div class='articles-block-date'>DATE</div>
                        <div class='articles-block-text'>Дорожка из бетона своими руками</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php
include 'footer-offer.php';
get_footer();
?>