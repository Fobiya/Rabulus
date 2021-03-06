<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv='refresh' content='15; url=/'>
    <title>Сообщение отправлено</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Owl Carousel -->
    <link href="/css/main.css" rel="stylesheet" media="screen">
    <link href="/css/jquery.simplyscroll.css" rel="stylesheet" media="screen">
    <link href="/css/counts.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="/css/jquery.countdown.css" />
    <link href="/css/animate.min.css" rel="stylesheet" media="screen">
    <link href="/css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="/css/owl.theme.css" rel="stylesheet" media="screen">
    <link href="/style.css" rel="stylesheet" media="screen">
    <link href="/css/style.css" rel="stylesheet" media="screen">
    <!-- Delete if need Google page speed 'GREEN'-->
    <!-- <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,700,700italic,500italic,400italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>	-->

    <!-- place for Google analytics -->
</head>
<body>

<?php
/* Проверяем существуют ли переменные, которые передала форма обратной связи.
   Если не существуют, то мы их создаем.
   Если форма передала пустые значения мы их удаляем */
if (isset($_POST['fio'])) {$fio = $_POST['fio']; if ($fio == '') {unset($fio);}}
if (isset($_POST['ask'])) {$ask = $_POST['ask']; if ($ask == '') {unset($ask);}}
if (isset($_POST['area'])) {$area = $_POST['area']; if ($area == '') {unset($area);}}
if (isset($_POST['phone'])) {$phone = $_POST['phone']; if ($phone == '') {unset($phone);}}
if (isset($_POST['email'])) {$email = $_POST['email']; if ($email == '') {unset($email);}}
/* Проверяем заполнены ли все поля */
if (isset($fio) &&  isset($phone))
{
    /* Убираем все лишние пробелы, а также преобразуем все теги HTML в символы*/
    $fio = htmlspecialchars(trim($fio));
    $email = htmlspecialchars(trim($email));
    $phone = htmlspecialchars(trim($phone));
    $ask = htmlspecialchars(trim($ask));
    $area = htmlspecialchars(trim($area));
    $date = htmlspecialchars(trim($date));
    /* Проверяем правильность ввода капчи */
    if ($captcha == $pr)
    {
        /* Формируем сообщение */
        $address = "pimkin.timur@gmail.com";
        $from = "Berlock\n";
        $sub = "Сообщение с сайта Berlock";
        $mes = "От: $fio \nНомер телефона: $phone\nEmail: $email";
        /* Отправка сообщения */
        $verify = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:Berlock");
        if ($verify == 'true')
        {
            echo "";
        }
        else
        {
            echo "";
        }
    }
    else
    {
        echo "";
    }
}
else
{
    echo "";
}
?>
<div class="block-1">
    <div class="container">
        <div class="header">
            <div class="logo"></div>
            <div class="button">
                <a href="#">
                    обратный звонок
                </a>
            </div>
        </div>
        <div class="content">
            <div class="left">
                <div class="top-text">
                    Авторская методика исцеления и настройки любой сферы жизни от Елены Гришанович
                </div>
                <div class="main-text">
                    Исцеление для всех
                </div>
                <div class="bot-text">
                    Узнайте и устраните глубинные причины ваших неудач, которые всегда было трудно заметить.
                </div>
            </div>
            <div class="right">
                <div class="block-1-form">
                    <form action="/options.php" method="post">
                        <span class="field">
                             <input  type="text" placeholder="Ваше Имя" required name="fio" title="Ваше имя">
                        </span>
                         <span class="field">
                            <input  type="tel" placeholder="Ваш телефон" required name="phone">
                         </span>
                         <span class="field">
                            <input  type="email" placeholder="Ваш email" required name="email" title="test@test.ru">
                        </span>
                        <button type="submit" name="send">принять участие</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="container">
        <ul>
            <li><a href="#" role="button" data-toggle="modal" data-target="#myModal2">Согласие с рассылкой</a></li>
            <li><a href="#" role="button" data-toggle="modal" data-target="#myModal3">Политика конфиденциальности</a></li>
            <li><a href="#" role="button" data-toggle="modal" data-target="#myModal5">Отказ от ответственности</a></li>
        </ul>
        <div class="gm-logo"><a href="http://geniusstudio.me/marketing/" target="_blank"></a></div>
        <div class="clearfix"></div>
        <div class="security">Все права защищены (c) 2016</div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>