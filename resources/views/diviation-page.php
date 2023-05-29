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
    <link rel="stylesheet" href="css/footer and heading.css">
    <link rel="stylesheet" href="css/diviation-page.css">
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
            <h1>Гадання трьома картами:</h1>
            <div id="question-form">
                <input type="text" id="question" class="question-input" placeholder="Введіть своє питання">

                <div class="cards">
                    <img src="/storage/images/back of card.png" alt="">
                    <img src="/storage/images/карти таро/Старші аркани/Відлюдник.jpg" alt="">
                    <img src="/storage/images/back of card.png" alt="">
                    <img src="/storage/images/back of card.png" alt="">
                    <img src="/storage/images/карти таро/Молодші аркани/Мечі/4 мечів.jpg" alt="">
                    <img src="/storage/images/карти таро/Молодші аркани/Кубки/Лицар Кубків.jpg" alt="" class="revers">
                    <img src="/storage/images/back of card.png" alt="">
                </div>

                <button type="submit" class="big-button">Отримати відповідь</button>
            </div>
            <div class="answer" id="answer-container"></div>
            


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