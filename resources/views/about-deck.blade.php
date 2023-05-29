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
    <link rel="stylesheet" href="{{ asset('css/tarot-deck.css') }}">
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
            <h1 class="heading">
                Колода Таро Райдера-Уейта 
            </h1>
            <div class="text-and-images">
                <div class="author-text">
                    <p class="tarot-deck-text-1">
                        Колода Таро Райдера-Уейта є найпоширенішою в світі, а також однією з найстаріших. Вона була створена Артуром Едвардом Уейтом та ілюстратором Памелою Колман Сміт в 1909 році на запитання В. Б. Сіммонса, видавця і книгаря з Лондона.
                        Артур Едвард Уейт був британським тарологом, містиком та окультистом, який здійснив дослідження та аналіз різних колод Таро, щоб створити нову колоду, яка була б менш заплутаною та більш зрозумілою для широкої аудиторії. Уейт був також засновником "Hermetic Order of the Golden Dawn", організації, яка вивчала оккультизм та магію.
                    </p>
                    <div class="author-surname">
                        <div class="author">
                            <img src="/storage/images/Uet.png" alt=""/>
                            <h3 class="author-name">Артур Едвард Уейт</h3>
                        </div>
                    </div>
                    
                </div>

                <div class="deck-text">
                    <p class="tarot-deck-text-2">
                        Колода Райдера-Уейта містить 78 карт, з яких 22 є картами Большої Аркани, а 56 - картами Малої Аркани. Картинки на картках Райдера-Уейта мають дуже виразну символіку, яка дозволяє розглядати їх як джерело інформації про те, що сталося, що відбувається та що може статися в майбутньому.
                        В цілому, колода Таро Райдера-Уейта залишається найбільш популярною та важливою колодою в світі Таро. Її символіка та картинки є дуже виразними та розумними для більшості людей, що дозволяє використовувати їх для проведення тарологічних сесій, пророкування та самопізнання. Зважаючи на її значення в історії Таро, колода Райдера-Уейта заслуговує на почесне місце в колекції кожного, хто цікавиться цією темою.
                    </p>
                    <div class="deck-text-img"><img src="/storage/images/deck.png" alt=""/></div>
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