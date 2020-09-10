<?php get_header();?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-3">
                <?php get_sidebar();?>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-9">
                <?get_template_part('parts/run_string');?>
                <?php get_template_part('parts/slider');?>
                <section class="news">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading">Новости МБОУ "Звонаревокутская СОШ"</div>
                        </div>
                    </div>
                    <div class="posts">
                        <div class="row">
                        <?php if( have_posts() ){while( have_posts() ){the_post();?>
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <div class="post">
                                    <?php the_post_thumbnail(); ?>
                                    <h2><a href="<?php the_permalink()?>"><?php the_title();?></a></h2>
                                    <p><?php the_excerpt();?></p>
                                    <div class="meta-info">
                                        <div class="posted-date-time">
                                            <i class="far fa-calendar-alt"></i> <?php the_date('d.m.Y'); ?> <i class="far fa-clock"></i> <?php the_time('G:i'); ?>
                                        </div>
                                        <div class="author">
                                            <i class="fas fa-user"></i> <?php the_author()?>
                                        </div>
                                    </div>
                                    <a href="<?php the_permalink( );?> " class="more-info">Подробнее</a>
                                </div>
                            </div>
                            <?php }?>

                            <div class="navigation">
                                <div class="next-posts"><?php next_posts_link(); ?></div>
                                <div class="prev-posts"><?php previous_posts_link(); ?></div>
                            </div>

                            <?php } else {
                                echo "<h2>Записей нет.</h2>";
                            }?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
<?php get_template_part('parts/ads'); ?>
<?php get_footer(); ?>