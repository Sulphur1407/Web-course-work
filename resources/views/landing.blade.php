<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/footer and heading.css') }}">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
</head>
<body>
    <header>
        <a href="{{ url('/') }}">
            <div class="logo">
                <div class="logo-up-part">
                    <img src="/storage/images/logo.svg" alt="" class="logo-img">
                    <div class="logo-big-text">Tarot hub</div>
                </div>
                <div class="logo-small-text">найбільший портал тарології в укрнеті</div>
            </div>
        </a>
        <img src="/storage/images/icons/menu 1.svg" alt="" class="menu-img">
    </header>

    <div class="main-content">
        <div class="box">
            <div class="block-1">
                <div class="landing-main-text">
                    <h1>Карти таро</h1>
                    <p>Завжди цікавило, що приховує майбутнє? Хочете знати, що чекає вас завтра, чи які перешкоди та можливості зустрінуться на вашому шляху? Гадання на картах Таро - це відповідь на ваші запитання.</p>
                    <div class="small-button">
                        <a href="{{ url('/diviation') }}" class="small-button-box">
                            <p class="small-button-text">Задати питання</p>
                        </a>
                    </div>
                </div>
                <div class="img1-landing"><img src="/storage/images/landing1.png" alt=""></div>    
            </div>

            <div class="block-2">
                <h1>Ми пропонуємо:</h1>
                <div class="bl2-images">
                    <a href="{{ url('/all-cards/all') }}">
                        <div class="bl2-bl1">
                            <img src="/storage/images/landing2.png" alt="">
                            <h2>Трактування колоди Райдера-Уейта</h2>
                        </div>
                    </a>

                    <a href="{{ url('/interpretation') }}">
                        <div class="bl2-bl2">
                            <img src="/storage/images/landing3.png" alt="">
                            <h2>Читання вашого розкладу</h2>
                            </div>
                    </a>

                    <a href="{{ url('/diviation') }}">
                        <div class="bl2-bl4">
                            <img src="/storage/images/landing4.png" alt="">
                            <h2>Швидкий розклад онлайн</h2>
                        </div>
                    </a>
                </div>
            </div>

            <div class="block-3">
                <h1>Вперше чуєте?:</h1>
                <p>Таро Райдера-Уейта - це система пророцтва, яка використовує набір з 78 карт. Колода поділяється на дві групи: 22 Великі та 56 Малих Аркан. Кожна карта має власне символічне зображення та тлумачення, які можуть бути використані для передбачення майбутніх подій, або для отримання порад та допомоги при вирішенні проблем.</p>
                <a href="{{ url('/about-deck') }}" class="big-button">
                    <p>Дізнатись більше</p>
                </a>
            </div>
            
            
        </div>
    </div>

    <footer class="wrapper">
        <div class="footer">
            <div class="footer-contacts">
                <h3 class="contact-heading">Контакти розробника</h3>
                <p class="contacts">
                Солоничний Віталій <br>
                email: solonychnui.vitaliy@lll.kpi.ua <br>
                telegram: <br>
                @Sulphur14
                </p>
            </div>
            
            <div class="powered-by">
                <h3 class="powered-by-heading">Powered by</h3>
                <img src="/storage/images/Open AI logo.svg" alt=""/>
            </div>
        </div>
    </footer>

</body>
</html>