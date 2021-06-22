<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{mix('css/style.css')}}">
    <title>@yield('title')</title>
    
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <nav class="header__navigation">
                    <div class="header__logo">
                        <img src="/img/logo.png" alt="">
                    </div>

                        <ul class="header__menu">
                            <li class="header__item header__item--active"><a href="{{URL::route('home')}}" class="header__link">Главная</a></li>
                            <li class="header__item"><a href="{{URL::route('lenta')}}" class="header__link">О нас</a></li>
                            <li class="header__item"><a href="" class="header__link">Регистрация</a></li>
                            <li class="header__item x"><a href="" class="header__link">Логин</a></li>
                        </ul>
                    
                </nav>
            </div>
        </header>

        @yield('content')

        <footer class="footer container">
            <div class="whole">
            <img src="/img/logo.png" alt="">
            <div class="foot-info">
                <ul>
                    <li><a href="" class="footer__link">Новости</a></li>
                    <li><a href="" class="footer__link">О нас</a></li>
                    <li><a href="" class="footer__link">Поддержка</a></li>
                </ul>
                <ul>
                    <li><a href="" class="footer__link">Контакты</a></li>
                    <li><a href="" class="footer__link">Телефон: 8705 995 38 64</a></li>
                    <li><a href="" class="footer__link">Email: bakosh21345@gmail.com</a></li>
                </ul>
                <ul>
                    <li><a href="" class="footer__link">Другие сервисы</a></li>
                    <li><a href="" class="footer__link">Usyn</a></li>
                    <li><a href="" class="footer__link">Jasa</a></li>
                </ul>
            </div>
        </div>
        </footer>
    </div>
</body>
</html>