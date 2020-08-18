<?php
    session_start();
?>
<html lang="ru">
<head>
    <title>NightHost</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/normalize.css">        
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark text-light" style="background-color: #000000;">
        <a class="navbar-brand" href="/">
            <b>NightHost</b>
        </a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="/services/hosting/">Хостинг сайтов</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/services/vds/">Хостинг VDS/VPS на KVM</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/services/minecraft/">Minecraft сервера</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <?php
            if(isset($_SESSION['user'])) {
                echo '<b>Привет, '.$_SESSION['user'].'</b>';
                echo '<a class="btn btn-outline-light my-2 my-sm-0" href="/logout.php">Выйти</a>';      
            }
            else {
                echo '<a class="btn btn-outline-light my-2 my-sm-0" href="/login.html">Войти</a>';
            }
            ?>
        </form>
    </nav>
    <section id="start" class="text-center">
        <div class="central">
            <h1 class="text-light"><b>NightHost</b></h1>
            <h4 class="text-light"><b>Пока вы спите, мы работаем!</b></h4>
        </div>
    </section>
    <section id="advantages">
        <div class="central">
            <div class="container text-light">
                <div class="row">
                    <div class="col">
                        <h2 class="text-light"><b>https:// по умолчанию</b></h2>
                        <p>Мы не считаем что за безопасность нужно доплачивать, поэтому на любом тарифе в подарок мы даём https сертификат от Let's Encrypt</p>
                    </div>
                    <div class="col img">
                        <img width="120" src="images/https.svg">
                    </div>
                 </div>
                 <div class="row">
                    <div class="col img">
                        <img width="120" src="images/help.svg">
                    </div>
                    <div class="col">
                        <h2 class="text-light"><b>Быстрая поддержка</b></h2>
                        <p>В любой момент, хоть поздно ночью, хоть посреди дня, мы поможем разрешить все возникающие проблемы как можно скорее, у нас нет приоретизации на тех кто выбрал тариф дороже</p>
                    </div>
                 </div>
                <div class="row">
                    <div class="col">
                        <h2 class="text-light"><b>Сотни (единицы (один (1) ) ) довольных клиентов</b></h2>
                        <p>Где они? Мы не знаем</p>
                    </div>
                    <div class="col img">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="footer">
        <div class="container text-light">
            <div class="row">
                <div class="col" id="contacts">
                    <h5><b>Контакты:</b></h5>
                    <ul>
                        <li><b>support@nighthost.ru</b></li>
                        <li><b>VK @nighthost</b></li>
                        <li><b>8(800)555-35-35</b></li>
                    </ul>
                </div>
                <div class="col" id>
                    <h5><b>Ссылки:</b></h5>
                    <ul>
                        <li><b><a class="text-light" href="#">FAQ</a></b></li>
                        <li><b><a class="text-light" href="/LICENSE">CopyLeft лицензия и права на использование исходного кода</a></b></li>
                        <li><b><a class="text-light" href="https://github.com/Anton2319/nighthost-site">Исходный код на GitHub</a></b></li>
                    </ul>
                </div>
                <div class="col img">
                    <img src="/images/logo.svg" width="100">
                    <h5 style="margin: auto;">🄯NightHost 2020</h5>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
