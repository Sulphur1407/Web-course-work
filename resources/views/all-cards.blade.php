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
    <link rel="stylesheet" href="{{ asset('css/all-cards.css') }}">
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
            <h1>Значення карт Таро:</h1>
            <p>Перші 22 карти в колоді карт Таро мають назву «Старші Аркани», і є головними, найбільш вагомими, найбільш значущими картами колоди. У ворожіннях і розкладів Таро вони відображають найбільш важливі і яскраві події, вказують на ті моменти, обставини або прояви, які мають або будуть мати вирішальне значення в житті ворожбита. Крім того, вони розкривають глибинну підґрунтя подій, показуючи їх справжні причини і наслідки.</p>
            <div class="cards">
                <a href="{{ url('/all-cards/fool') }}">
                    <img src="/storage/images/карти таро/Старші аркани/Дурень.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/magician') }}">
                    <img src="/storage/images/карти таро/Старші аркани/Чаклун.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/high-priestess') }}">
                    <img src="/storage/images/карти таро/Старші аркани/Верховна Жриця.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/empress') }}">
                    <img src="/storage/images/карти таро/Старші аркани/Імператриця.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/emperor') }}">
                    <img src="/storage/images/карти таро/Старші аркани/Імператор.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/hierophant') }}">
                    <img src="/storage/images/карти таро/Старші аркани/Ієрофант.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/lovers') }}">
                    <img src="/storage/images/карти таро/Старші аркани/Закохані.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/chariot') }}">
                    <img src="/storage/images/карти таро/Старші аркани/Колісниця.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/strength') }}">
                    <img src="/storage/images/карти таро/Старші аркани/Сила.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/hermit') }}">
                    <img src="/storage/images/карти таро/Старші аркани/Відлюдник.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/wheel-of-fortune') }}">
                    <img src="/storage/images/карти таро/Старші аркани/Колесо Фортуни.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/justice') }}">
                    <img src="/storage/images/карти таро/Старші аркани/Справедливість.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/hangedman') }}">
                    <img src="/storage/images/карти таро/Старші аркани/Повішаний.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/death') }}">
                    <img src="/storage/images/карти таро/Старші аркани/Смерть.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/temperance') }}">
                    <img src="/storage/images/карти таро/Старші аркани/Помірність.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/devil') }}">
                    <img src="/storage/images/карти таро/Старші аркани/Диявол.jpg" alt=""> 
                </a>
                <a href="{{ url('/all-cards/tower') }}">
                    <img src="/storage/images/карти таро/Старші аркани/Вежа.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/star') }}">
                    <img src="/storage/images/карти таро/Старші аркани/Зірка.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/moon') }}">
                    <img src="/storage/images/карти таро/Старші аркани/Місяць.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/sun') }}">
                    <img src="/storage/images/карти таро/Старші аркани/Сонце.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/judgement') }}">
                    <img src="/storage/images/карти таро/Старші аркани/Суд.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/world') }}">
                    <img src="/storage/images/карти таро/Старші аркани/Світ.jpg" alt="">
                </a>
            </div>

            <h1>Молодші Аркани</h1>
            <p>Жезли (Палиці, Скіпетри) — ця масть в колоді карт Таро, астрологічно пов’язана з елементом Вогонь і Знаками Зодіаку Овен, Лев і Стрілець. У ворожіннях, прогнозах і розкладах Жезли зазвичай символізують сферу, пов’язану зі справами, зобов’язаннями і обов’язками людини, бізнесом і фінансами, роботою і кар’єрою того кому гадають. Вони описують плани і шляхи їх реалізації, перешкоди в досягненні цілей, тенденції загального просування справ і захисту інтересів.</p>
            <div class="cards">
                <a href="{{ url('/all-cards/ace-of-wands') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Жезли/Туз жезлів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/II-of-wands') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Жезли/II жезлів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/III-of-wands') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Жезли/III Жезлів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/IV-of-wands') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Жезли/IV Жезлів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/V-of-wands') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Жезли/V Жезлів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/VI-of-wands') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Жезли/VI жезлів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/VII-of-wands') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Жезли/VII жезлів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/VIII-of-wands') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Жезли/VIII Жезлів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/IX-of-wands') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Жезли/IX Жезлів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/X-of-wands') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Жезли/X Жезлів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/king-of-wands') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Жезли/Король Жезлів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/queen-of-wands') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Жезли/Королева Жезлів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/knight-of-wands') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Жезли/Лицар Жезлів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/page-of-wands') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Жезли/Паж Жезлів.jpg" alt="">
                </a>
            </div>
            <p>Кубки (Чаші) – це друга масть в колоді карт Таро, астрологічно пов’язана з елементом Вода, підвищеною чутливістю і Знаками Зодіаку Риби, Рак і Скорпіон. Символом масті є Золотий кубок, наповнений нектаром. У ворожіннях, розкладах і прогнозах Кубки символізують сферу емоцій, почуттів і переживань людини. Карти масті кубків, будучи символами любові і щастя, описують в цілому сприятливі ситуації або, принаймні, говорять про поліпшення нещасливих обставин. Розкриваючи хід подій, Чаші демонструють аспекти, які будуть працювати на користь ворожбитів.</p>
            <div class="cards">
            <a href="{{ url('/all-cards/ace-of-cups') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Кубки/Туз Кубків.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/II-of-cups') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Кубки/II Кубків.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/III-of-cups') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Кубки/III Кубків.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/IV-of-cups') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Кубки/IV Кубків.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/V-of-cups') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Кубки/V Кубків.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/VI-of-cups') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Кубки/VI Кубків.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/VII-of-cups') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Кубки/VII Кубків.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/VIII-of-cups') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Кубки/VIII Кубків.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/IX-of-cups') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Кубки/IX Кубків.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/X-of-cups') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Кубки/X Кубків.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/king-of-cups') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Кубки/Король Кубків.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/queen-of-cups') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Кубки/Королева Кубків.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/knight-of-cups') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Кубки/Лицар Кубків.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/page-of-cups') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Кубки/Паж Кубків.jpg" alt="">
                </a>
            </div>

            <p>Мечі – масть астрологічно пов’язана з елементом Повітря і Знаками Зодіаку Близнюки, Терези, Водолій. Символом масті є меч, який, як правило, зображується у вигляді клинка, бойової шаблі або важкого дворучного меча. У ворожіннях, розкладах і прогнозах Мечі символізують сторону життя, яка пов’язана з мисленням; сферу протистоянь, подолання перешкод, боротьби, прагнення до лідерства і перемоги.</p>
            <div class="cards">
                <a href="{{ url('/all-cards/ace-of-swords') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Мечі/Туз мечів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/II-of-swords') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Мечі/II мечів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/III-of-swords') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Мечі/III мечів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/IV-of-swords') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Мечі/IV мечів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/V-of-swords') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Мечі/V мечів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/VI-of-swords') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Мечі/VI мечів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/VII-of-swords') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Мечі/VII мечів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/VIII-of-swords') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Мечі/VIII мечів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/IX-of-swords') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Мечі/IX мечів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/X-of-swords') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Мечі/X мечів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/king-of-swords') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Мечі/Король мечів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/queen-of-swords') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Мечі/Королева мечів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/knight-of-swords') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Мечі/Лицар мечів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/page-of-swords') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Мечі/Паж мечів.jpg" alt="">
                </a>
            </div>
            
            <p>Пентаклі (Денарії, Монети, Диски) – ця масть в колоді карт Таро, астрологічно пов’язана з елементом Земля, раціональної логікою і Знаками Зодіаку Козеріг, Діва і Телець. Символом масті є монета із зображенням п’ятикутної зірки Соломона. У ворожіннях, розкладах і прогнозах Пентаклі символізують сферу, пов’язану з грошима, заробітком, власністю, соціальним статусом, безпекою і політичним впливом людини. Карти масті Монет описують ситуації і обставини, що включають в себе питання матеріального добробуту, комерційні інтереси, гроші і грошові сфери. Розкриваючи хід подій, Диски демонструють фінансові та соціальні аспекти.</p>
            <div class="cards">
                <a href="{{ url('/all-cards/ace-of-pentacles') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Пентаклі/Туз пентаклів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/II-of-pentacles') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Пентаклі/II пентаклів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/III-of-pentacles') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Пентаклі/III пентаклів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/IV-of-pentacles') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Пентаклі/IV пентаклів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/V-of-pentacles') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Пентаклі/V пентаклів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/VI-of-pentacles') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Пентаклі/VI пентаклів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/VII-of-pentacles') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Пентаклі/VII пентаклів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/VIII-of-pentacles') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Пентаклі/VIII пентаклів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/IX-of-pentacles') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Пентаклі/IX пентаклів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/X-of-pentacles') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Пентаклі/X пентаклів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/king-of-pentacles') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Пентаклі/Король пентаклів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/queen-of-pentacles') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Пентаклі/Королева пентаклів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/knight-of-pentacles') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Пентаклі/Лицар пентаклів.jpg" alt="">
                </a>
                <a href="{{ url('/all-cards/page-of-pentacles') }}">
                    <img src="/storage/images/карти таро/Молодші аркани/Пентаклі/Паж пентаклів.jpg" alt="">
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
    <script src="{{ asset('js/menu.js') }}"></script>

</body>
</html>