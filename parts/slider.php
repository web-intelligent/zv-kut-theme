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
                    <!-- <div class="slide">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <img src="<?php bloginfo('template_url');?>/images/zv-kut.jpg" alt="">
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <h2>Lorem iosum #2</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi iure obcaecati ut excepturi perferendis. Laboriosam ut id, eveniet pariatur eos doloremque dicta corporis adipisci rerum obcaecati explicabo voluptates! Temporibus, amet.</p>
                                <a href="#" class="more-info">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <img src="<?php bloginfo('template_url');?>/images/zv-kut.jpg" alt="">
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <h2>Lorem iosum #3</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi iure obcaecati ut excepturi perferendis. Laboriosam ut id, eveniet pariatur eos doloremque dicta corporis adipisci rerum obcaecati explicabo voluptates! Temporibus, amet.</p>
                                <a href="#" class="more-info">Подробнее</a>
                            </div>
                        </div>
                    </div> -->
</div>