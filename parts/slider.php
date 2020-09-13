<div class="slider">
    <?php
        $slider_posts = new WP_Query('cat=3&order=ASC&posts_per_page=3');
            if($slider_posts->have_posts()) {
                while ($slider_posts->have_posts()) {
            $slider_posts->the_post();
    ?>
    <div class="slide">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="col-sm-12 col-md-6">
                <h2><?php the_title()?></h2>
                <p><?php the_excerpt();?></p>
                <a href="<?php the_permalink()?>" class="more-info">Подробнее</a>
            </div>
        </div>
    </div>
    <?php
             }
             wp_reset_postdata();
        }
    ?>
</div>