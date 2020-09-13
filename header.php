<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1a3f8aa39e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/responsive.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/animation.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/slick/slick.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/slick/slick-theme.css">
    <title><?php 
        
        if(is_home()) {
            bloginfo('name');
        } else {
            the_title('', ' - ') . bloginfo('name');
        }
        if(is_404()) {
            echo '404 - Ничего не найдено';
        }
        
        ?></title>
    <?php wp_head(); ?>
</head>
<body>


<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-3">
                <div class="logo">
                    <a href="/"><img src="<?php bloginfo('template_url');?>/images/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <form class="search-form" action="<?php echo home_url('/'); ?>" method="">
                    <input name="s" type="text" class="search-field" placeholder="Поиск по сайту...">
                    <input type="submit" class="search-btn" value="Поиск">
                </form>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-3 d-flex position-relative">
                <div class="phone">
                    <i class="fas fa-phone"></i> +7 (381) 413-55-21
                </div>
                <div class="social jumpVk">
                    <a href="#"><i class="fab fa-vk"></i></a>
                </div>
            </div>
        </div>
        <div class="row main-menu">
            <div class="col-sm-12 col-md-12 col-lg-3">
                <div class="menu-heading">
                    <i class="fas fa-bars"></i> МЕНЮ
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-9">
            <div class="primary-menu">
            </div>
                <div class="primary-menu">
                    <ul class="menu">
                        <li><a href="#"><i class="fas fa-home"></i> Главная</a></li>
                        <li><a href="#"> <i class="fas fa-address-card"></i> Контакты</a></li>
                        <li><a href="#"><i class="fas fa-question-circle"></i> Задать вопрос</a></li>
                        <li><a class="ads" href="#ads"><i class="fas fa-book-reader"></i> Объявления</a></li>
                        <li><?php echo do_shortcode( '[bvi text="Версия для слабовидящих"]' ); ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mobile-menu">
            <div class="col-sm-12 col-md-12 col-lg-3">
               <?php get_template_part('parts/mobile_menu')?>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-9">
                <?php get_template_part('header_menu')?>
            </div>
        </div>
    </div>
    <div class="ask-question ask-form-closed">
        <i class="fas fa-times close-ask-form"></i>
        <div class="ask-form">
            <h4>Задать вопрос</h4>
            <form action="" method="" class="form-asking">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Имя *">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Почтовый ящик *">
                </div>
                <div class="form-group">
                    <textarea class="form-control" cols="30" rows="10" placeholder="Сообщение *"></textarea>
                </div>
                <div class="form-group">
                    <input type="button" class="btn btn-success" value="Отправить">
                </div>
            </form>
        </div>
    </div>
</header>