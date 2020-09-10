<?php get_header();?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-3">
                <?php get_sidebar();?>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-9">
                <?get_template_part('parts/run_string');?>
                <section class="news">
                    <div class="posts single">
                        <?php if( have_posts() ){while( have_posts() ){the_post();?>
                            <div class="post">
                                <?php the_post_thumbnail(); ?>
                                <h1><?php the_title();?></h1>
                                <p><?php the_content();?></p>
                                <div class="meta-info">
                                    <div class="posted-date-time">
                                        <i class="far fa-calendar-alt"></i> <?php echo get_the_date('d.m.Y'); ?> <i class="far fa-clock"></i> <?php the_time('G:i'); ?>
                                    </div>
                                    <div class="author">
                                        <i class="fas fa-user"></i> <?php the_author()?>
                                    </div>
                                    <?php echo the_category();?>
                                </div>
                            </div>
                        
                            <?php }
                                } else {
                                echo "<h2>Записей нет.</h2>";
                            }?>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
<?php get_template_part('parts/ads'); ?>
<?php get_footer(); ?>