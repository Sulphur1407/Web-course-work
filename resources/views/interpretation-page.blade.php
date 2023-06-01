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
    <link rel="stylesheet" href="css/interpretation-page.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
        <button id="myButton">
            <img src="/storage/images/icons/menu 1.svg" alt="" class="menu-img">
        </button>
        <div id="myMenu">
            <img src="/storage/images/icons/eye.svg" alt="" class="eye-menu">
            <a href="{{ url('/about-deck') }}" class="menu-element">
                <img src="/storage/images/icons/menu1.svg" alt="">
                <p>Про колоду Райдера-Уейта</p>
            </a>
            <a href="{{ url('/all-cards/all') }}" class="menu-element">
                <img src="/storage/images/icons/menu2.svg" alt="">
                <p>Значення кожної карти</p>
            </a>
            <a href="{{ url('/diviation') }}" class="menu-element">
                <img src="/storage/images/icons/menu3.svg" alt="">
                <p>Зробити розклад онлайн</p>
            </a>
            <a href="{{ url('/interpretation') }}" class="menu-element">
                <img src="/storage/images/icons/menu4.svg" alt="">
                <p>Значення власного розкладу</p>
            </a>

        </div>
    </header>

    <div class="main-content">
        <div class="box">
            <h1>Гадання трьома картами:</h1>
            <input type="text" id="question" class="question-input" placeholder="Введіть своє питання">

            <div class="card-choose">
                <img id="img1" src="/storage/images/back of card.png" onerror="this.src='/storage/images/back of card.png'" class="card">
                <div class="options">
                    <div class="cheak-boxes">
                        <div class="cheak-box">
                            <div id="myButton1" class="big-box-choose"><div class="small-box-choose" id="myButtonOn1"></div></div>
                            <p>Старша аркана</p>
                        </div>
                        <div class="cheak-box">
                            <div id="myButton2" class="big-box-choose"><div class="small-box-choose" id="myButtonOn2"></div></div>
                            <p>Молодша аркана</p>
                        </div>
                    </div>

                    <div class="list" id="listItem1">
                      <p>Зробіть вибір</p>
                      <img src="/storage/images/icons/arrow.svg" alt="">
                    </div>
                    <div class="dropdown-menu hidden" id="dropdownMenu1"></div>

                    <div class="list" id="listItem1Add">
                        <p class="invisible-text">1</p>
                        <img src="/storage/images/icons/arrow.svg" alt="">
                    </div>
                    <div class="dropdown-menu hidden" id="dropdownMenu2"></div>
                    <div class="cheak-box">
                        <div id="CheakBox1" class="big-box-choose"><div class="small-box-choose hidden visible" id="CheakBoxOn1"></div></div>
                        <p>Перевернута</p>
                    </div>
                </div>
            </div>

            <div class="card-choose">
                <img id="img2" src="/storage/images/back of card.png" onerror="this.src='/storage/images/back of card.png'" class="card">
                <div class="options">
                    <div class="cheak-boxes">
                        <div class="cheak-box">
                            <div id="myButton3" class="big-box-choose"><div class="small-box-choose" id="myButtonOn3"></div></div>
                            <p>Старша аркана</p>
                        </div>
                        <div class="cheak-box">
                            <div id="myButton4" class="big-box-choose"><div class="small-box-choose" id="myButtonOn4"></div></div>
                            <p>Молодша аркана</p>
                        </div>
                    </div>

                    <div class="list" id="listItem2">
                      <p>Зробіть вибір</p>
                      <img src="/storage/images/icons/arrow.svg" alt="">
                    </div>
                    <div class="dropdown-menu hidden" id="dropdownMenu3"></div>

                    <div class="list" id="listItem2Add">
                        <p class="invisible-text">3</p>
                        <img src="/storage/images/icons/arrow.svg" alt="">
                    </div>
                    <div class="dropdown-menu hidden" id="dropdownMenu4"></div>
                    <div class="cheak-box">
                        <div id="CheakBox2" class="big-box-choose"><div class="small-box-choose hidden visible" id="CheakBoxOn2"></div></div>
                        <p>Перевернута</p>
                    </div>
                </div>
            </div>

            <div class="card-choose">
                <img id="img3" src="/storage/images/back of card.png" onerror="this.src='/storage/images/back of card.png'" class="card">
                <div class="options">
                    <div class="cheak-boxes">
                        <div class="cheak-box">
                            <div id="myButton5" class="big-box-choose"><div class="small-box-choose" id="myButtonOn5"></div></div>
                            <p>Старша аркана</p>
                        </div>
                        <div class="cheak-box">
                            <div id="myButton6" class="big-box-choose"><div class="small-box-choose" id="myButtonOn6"></div></div>
                            <p>Молодша аркана</p>
                        </div>
                    </div>
            
                    <div class="list" id="listItem5">
                        <p>Зробіть вибір</p>
                        <img src="/storage/images/icons/arrow.svg" alt="">
                    </div>
                    <div class="dropdown-menu hidden" id="dropdownMenu5"></div>
            
                    <div class="list" id="listItem5Add">
                        <p class="invisible-text">5</p>
                        <img src="/storage/images/icons/arrow.svg" alt="">
                    </div>
                    <div class="dropdown-menu hidden" id="dropdownMenu6"></div>
                    <div class="cheak-box">
                        <div id="CheakBox3" class="big-box-choose"><div class="small-box-choose hidden visible" id="CheakBoxOn3"></div></div>
                        <p>Перевернута</p>
                    </div>
                </div>
            </div>


            <button type="submit" class="big-button" onclick="getAnswer()">Отримати відповідь</button>

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
    <script src="{{ asset('js/menu.js') }}"></script>
    <script src="{{ asset('js/interpretation.js') }}"></script>

</body>
</html>