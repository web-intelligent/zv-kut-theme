<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1a3f8aa39e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/responsive.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/animation.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/slick/slick.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/slick/slick-theme.css">
    <title>МБОУ "Звонаревокутская СОШ"</title>
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
                <div class="search-form">
                    <input type="text" class="search-field" placeholder="Поиск по сайту...">
                    <input type="button" class="search-btn" value="Поиск">
                </div>
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
                    <ul class="menu">
                        <li><a href="#"><i class="fas fa-home"></i> Главная</a></li>
                        <li><a href="#"> <i class="fas fa-address-card"></i> Контакты</a></li>
                        <li><a href="#"><i class="fas fa-question-circle"></i> Задать вопрос</a></li>
                        <li><a class="ads" href="#ads"><i class="fas fa-book-reader"></i> Объявления</a></li>
                        <li><a class="bad-see" href="#"><i class="fas fa-eye"></i> Версия для слабовидящих</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mobile-menu">
            <div class="col-sm-12 col-md-12 col-lg-3">
               <div class="open-menu"><span></span></div>
               <ul class="secondary-mobile-menu">
                   <li><a href="#">Сведения об ОУ</a>
                        <ul class="sub-menu">
                            <li><a href="#">Point 1</a></li>
                            <li><a href="#">Point 2</a></li>
                            <li><a href="#">Point 3</a></li>
                            <li><a href="#">Point 4</a></li>
                            <li><a href="#">Point 5</a></li>
                        </ul>
                   </li>
                   <li><a href="#">Учительская</a>
                        <ul class="sub-menu">
                            <li><a href="#">Point 1</a></li>
                            <li><a href="#">Point 2</a></li>
                            <li><a href="#">Point 3</a></li>
                            <li><a href="#">Point 4</a></li>
                            <li><a href="#">Point 5</a></li>
                        </ul>
                    </li>
                   <li><a href="#">Ученикам</a>
                        <ul class="sub-menu">
                            <li><a href="#">Point 1</a></li>
                            <li><a href="#">Point 2</a></li>
                            <li><a href="#">Point 3</a></li>
                            <li><a href="#">Point 4</a></li>
                            <li><a href="#">Point 5</a></li>
                        </ul>
                   </li>
                   <li><a href="#">Родителя</a></li>
                   <li><a href="#">Творчество</a></li>
                   <li><a href="#">Дошкольники</a></li>
               </ul>

            </div>
            <div class="col-sm-12 col-md-12 col-lg-9">
                <div class="primary-menu">
                    <ul class="menu">
                        <li><a href="#"><i class="fas fa-home"></i> Главная</a></li>
                        <li><a href="#"><i class="fas fa-address-card"></i> Контакты</a></li>
                        <li><a href="#"><i class="fas fa-question-circle"></i> Задать вопрос</a></li>
                        <li><a class="ads" href="#ads"><i class="fas fa-book-reader"></i> Объявления</a></li>
                        <li><a class="bad-see" href="#"><i class="fas fa-eye"></i> Версия для слабовидящих</a></li>
                    </ul>
                </div>
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