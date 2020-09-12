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
                    <div class="row">
                        <div class="col-12">
                            <div class="heading">Результат поиска по запросу "<?php echo get_search_query(); ?>"</div>
                        </div>
                    </div>
                    <div class="posts single">
                        <?php

                           if(have_posts()) {
                               while(have_posts()) {
                                   the_post();
                        ?>
                            <div class="post">
                                <?php the_post_thumbnail(); ?>
                                <h2><a href="<?php the_permalink()?>"><?php the_title();?></a></h2>
                                <p><?php the_excerpt();?></p>
                                <div class="meta-info">
                                    <div class="posted-date-time">
                                        <i class="far fa-calendar-alt"></i> <?php echo get_the_date('d.m.Y'); ?> <i class="far fa-clock"></i> <?php the_time('G:i'); ?>
                                    </div>
                                    <div class="author">
                                        <i class="fas fa-user"></i> <?php the_author()?>
                                    </div>
                                </div>
                               <div class="post-footer">
                               <a href="<?php the_permalink( );?>" class="more-info">Подробнее</a>
                               <?php echo the_category();?>
                               </div>
                            </div>
                        
                            <?php 
                                }
                            ?>
                            <div class="pagination">
                            <?php
                            // Custom query loop pagination
                            previous_posts_link( '<i class="fas fa-chevron-left"></i> Предыдущая страница' );
                            next_posts_link( 'Следующая страница <i class="fas fa-chevron-right"></i>', $custom_query->max_num_pages );
                            ?>
                            </div>
                            <?php
                            } else {
                                echo "Ничего не найдено";
                                ?>
                                <img class="not-found" src="<?php bloginfo('template_url')?>/images/not-found.jpg" alt="">
                            <?php    
                            }
                            
                            ?>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
<?php get_template_part('parts/ads'); ?>
<?php get_footer(); ?>