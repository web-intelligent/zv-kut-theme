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
                            <div class="heading">Такой страницы не существует</div>
                        </div>
                    </div>
                    <div class="posts single">
                        <div class="post">
                            <p>Уважаемый посетитель, страницы по этому адресу не существует. Это могло произойти по следующим причинам:<br>
                                1) Страница сменила адрес;<br>
                                2) Страницы по этому адресу никогда не существовало.
                            </p>
                            <img class="not-found" src="<?php bloginfo('template_url')?>/images/not-found.jpg" alt="">
                            <h4>Попробуйте поискать еще</h4>
                            <form class="search-form" action="<?php echo home_url('/'); ?>" method="">
                                <input name="s" type="text" class="search-field" placeholder="Поиск по сайту...">
                                <input type="submit" class="search-btn" value="Поиск">
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
<?php get_template_part('parts/ads'); ?>
<?php get_footer(); ?>