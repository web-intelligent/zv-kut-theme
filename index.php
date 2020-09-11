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
                        <?php
                            $custom_query_args = array(
                                'cat'=> -3
                            );
                            $custom_query_args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
                            $custom_query = new WP_Query( $custom_query_args );
                            // Pagination fix
                            $temp_query = $wp_query;
                            $wp_query   = NULL;
                            $wp_query   = $custom_query;

                            if ( $custom_query->have_posts() ) :
                            while ( $custom_query->have_posts() ) :
                                $custom_query->the_post();
                        
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
                            endwhile;
                            endif;
                            // Reset postdata
                            wp_reset_postdata();

                            // Custom query loop pagination
                            previous_posts_link( 'Предыдущая страница' );
                            next_posts_link( 'Следующая страница', $custom_query->max_num_pages );

                            // Reset main query object
                            $wp_query = NULL;
                            $wp_query = $temp_query;
                            
                            ?>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
<?php get_template_part('parts/ads'); ?>
<?php get_footer(); ?>