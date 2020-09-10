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
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <div class="post">
                                    <?php the_post_thumbnail(); ?>
                                    <h2><a href="#"><?php the_title();?></a></h2>
                                    <p><?php the_excerpt();?></p>
                                    <div class="meta-info">
                                        <div class="posted-date-time">
                                            <i class="far fa-calendar-alt"></i> 08.09.2020 <i class="far fa-clock"></i> 15:22
                                        </div>
                                        <div class="author">
                                            <i class="fas fa-user"></i> <?php echo the_author_firstname(  );?>
                                        </div>
                                    </div>
                                    <a href="#" class="more-info">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
<?php get_template_part('parts/ads'); ?>
<?php get_footer(); ?>