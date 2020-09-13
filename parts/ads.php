<section class="ads" id="ads">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="heading">Объявления</div>
            </div>
        </div>
        <div class="row">
        <?php $ads = new WP_Query(array('post_type' => 'ads', 'posts_per_page' => -1, 'order' => 'ASC')); ?>
        <?php if ( $ads->have_posts() ) : ?>
            <?php while ( $ads->have_posts() ) : $ads->the_post(); ?>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="ad">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="ad-thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <div class="ad-description">
                                <h5><?php the_title()?></h5>
                                <p><?php the_excerpt()?></p>
                                <a href="<?php the_permalink()?>" class="more-info">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>