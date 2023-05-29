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
    <link rel="stylesheet" href="{{ asset('css/about-card.css') }}">
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
                <div class="text">
                    <h1>Значення карти:</h1>
                    <b>Основні значення (прямі):</b>
                    <p>{{ $card["main_meaning_dir"] }}</p>
                    <b>Основні значення (перевернуті):</b>
                    <p>{{ $card["main_meaning_rev"] }}</p>
                </div>
                <div class="card">
                    <h1>{{$card["card_name"]}}</h1>
                    <img src="{{ asset('/storage/images/карти таро/' . $card['img_name']) }}" alt="">
                </div>
            </div>

            <div class="block-2">
                <h1>Опис карти таро {{$card["card_name"]}}</h1>
                <p>{{ $card["describe"] }}</p>
            </div>

            <div class="block-3">
                <div class="box1">
                    <h2>Значення карти {{$card["card_name"]}} у прямому положенні</h2>
                    <p>{{ $card["meaning_dir"] }}</p>
                </div>
                <div class="box2">
                    <h2>Значення карти {{$card["card_name"]}} у перевернутому положенні</h2>
                    <p>{{ $card["meaning_rev"] }}</p>
                </div>
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
                <a href="https://openai.com/">
                    <img src="/storage/images/Open AI logo.svg" alt=""/>
                </a>
            </div>
        </div>
    </footer>

</body>
</html>