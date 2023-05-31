var selectedCard = [[], [], []]

function toggleDropdown() {
    var dropdownMenu = document.getElementById("dropdownMenu");
    dropdownMenu.style.display = (dropdownMenu.style.display === "block") ? "none" : "block";
}
  
 

function showError(message) {
  var errorContainer = document.createElement('div');
  errorContainer.classList.add('error-message');
  errorContainer.textContent = message;
  document.body.appendChild(errorContainer);

  setTimeout(function() {
    errorContainer.remove();
  }, 3000);
}

function checkUniqueElements(arr) {
    var obj = {};
    for (var i = 0; i < arr.length; i++) {
      var key = arr[i][0]; // Отримуємо перший параметр поточного масиву
      if (obj[key]) {
        return false;
      } else {
        obj[key] = true;
      }
    }
    return true;
  }

function getAnswer() {
    if (!checkUniqueElements(selectedCard)){
        showError("Розсклад може містити лише унікальні карти");
        return;
    } 

    const questionText = document.getElementById("question").value
    if (questionText.length > 100) {
      showError("Пробачте, але ваше питання задовге. Перефразуйте його, щоб зробити коротшим.");
      return;
    } 

    showError("Не лякайтесь. Генерація відповіді може зайняти до 20 секунд");
    var textContainer = document.getElementById("answer-container");

    // Отримання токену CSRF з мета-тегу
    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    // Створюємо об'єкт XMLHttpRequest
    var xhr = new XMLHttpRequest();

    // Налаштовуємо запит
    xhr.open("POST", "/get-answer", true);
    xhr.setRequestHeader("Content-Type", "application/json");

    // Додавання токену CSRF як заголовка
    xhr.setRequestHeader("X-CSRF-TOKEN", csrfToken);

    // Встановлюємо обробник події для зміни стану запиту
    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          // Отримання відповіді в форматі JSON
          var response = JSON.parse(xhr.responseText);
          var generatedText = response.text;
        
          // Вставлення згенерованого тексту у контейнер
          textContainer.innerText = generatedText;
        } else {
          // Обробка помилки
          showError("Помилка при отриманні відповіді. Повідомте розробника про помилку");
        }
      }
    };

    // Відправляємо AJAX-запит з відповідними даними
    xhr.send(JSON.stringify({ selectedCards: selectedCard, questionText: questionText }));
    
  }

const buttonOn1 = document.getElementById('myButtonOn1');
const buttonOn2 = document.getElementById('myButtonOn2');
const buttonOn3 = document.getElementById('myButtonOn3');
const buttonOn4 = document.getElementById('myButtonOn4');
const buttonOn5 = document.getElementById('myButtonOn5');
const buttonOn6 = document.getElementById('myButtonOn6');

let isHight1 = 1;
let isReversed1 = 0;
let isReversed2 = 0;
let isReversed3 = 0;
let scr1 = "/";
let scr2 = "/";
let scr3 = "/";
let card1, card2, card3;

const HightCards = [
    "0 - Дурень (The Fool)",
    "I - Маг (The Magician)",
    "II - Верховна Жриця (The High Priestess)",
    "III - Імператриця (The Empress)",
    "IV - Імператор (The Emperor)",
    "V - Ієрофант (The Hierophant)",
    "VI - Закохані (The Lovers)",
    "VII - Колісниця (The Chariot)",
    "VIII - Сила (Strength)",
    "IX - Відлюдник (The Hermit)",
    "X - Колесо Фортуни (Wheel of Fortune)",
    "XI - Справедливість (Justice)",
    "XII - Повішаний (The Hanged Man)",
    "XIII - Смерть (Death)",
    "XIV - Помірність (Temperance)",
    "XV - Диявол (The Devil)",
    "XVI - Башта (The Tower)",
    "XVII - Зірка (The Star)",
    "XVIII - Місяць (The Moon)",
    "XIX - Сонце (The Sun)",
    "XX - Суд (Judgement)",
    "XXI - Світ (The World)"
];

const ValueCards = [
    "Туз",
    "I",
    "II",
    "III",
    "IV",
    "V",
    "VI",
    "VII",
    "VIII",
    "IX",
    "X",
    "Лицар",
    "Королева",
    "Король",
    "Паж"
];

const SuitCard = [
    "Жезли",
    "Кубки",
    "Мечі",
    "Пентаклі"
]

function updateCards(){
    let src1;
    if (isHight1){
        src1 = "Старші аркани/" + card1 + ".jpg";
    } else {
        src1 = "Молодші аркани/";
    }
    if (isReversed1){
        document.getElementById("img1").style.transform = 'rotate(180deg)';
    } else {
        document.getElementById("img1").style.transform = 'rotate(0deg)';
    }
    document.getElementById("img1").src = "/storage/images/карти таро/" + src1;
    console.log(src1);
    document.getElementById("img2").src = "/storage/images/карти таро/" + src2;
    document.getElementById("img3").src = "/storage/images/карти таро/" + src3;

    selectedCard[0] = [src1, isReversed1];
    selectedCard[1] = [src2, isReversed2];
    selectedCard[2] = [src3, isReversed3];
}

document.getElementById('myButton1').addEventListener('click', function(){
    buttonOn1.style.visibility = "visible";
    buttonOn2.style.visibility = "hidden";
    isHight1 = 1;
    updateCards();
});

document.getElementById('myButton2').addEventListener('click', function(){
    buttonOn1.style.visibility = "hidden";
    buttonOn2.style.visibility = "visible";
    isHight1 = 0;
    updateCards();
});

document.getElementById('myButton3').addEventListener('click', function(){
    buttonOn3.style.visibility = "visible";
    buttonOn4.style.visibility = "hidden";
});

document.getElementById('myButton4').addEventListener('click', function(){
    buttonOn3.style.visibility = "hidden";
    buttonOn4.style.visibility = "visible";
});

document.getElementById('myButton5').addEventListener('click', function(){
    buttonOn5.style.visibility = "visible";
    buttonOn6.style.visibility = "hidden";
});

document.getElementById('myButton6').addEventListener('click', function(){
    buttonOn5.style.visibility = "hidden";
    buttonOn6.style.visibility = "visible";
});

const cheakBoxOn1 = document.getElementById('CheakBoxOn1');
const cheakBoxOn2 = document.getElementById('CheakBoxOn2');
const cheakBoxOn3 = document.getElementById('CheakBoxOn3');

document.getElementById('CheakBox1').addEventListener("click", function(){
      if (cheakBoxOn1.style.visibility == "hidden"){
          cheakBoxOn1.style.visibility = "visible"
          isReversed1 = 1;
      } else {
          cheakBoxOn1.style.visibility = "hidden"
          isReversed1 = 0;
      }
      updateCards();
});

document.getElementById('CheakBox2').addEventListener("click", function(){
    if (cheakBoxOn2.style.visibility == "hidden"){
        cheakBoxOn2.style.visibility = "visible"
    } else {
        cheakBoxOn2.style.visibility = "hidden"
    }
    updateCards();
});

document.getElementById('CheakBox3').addEventListener("click", function(){
    if (cheakBoxOn3.style.visibility == "hidden"){
        cheakBoxOn3.style.visibility = "visible"
    } else {
        cheakBoxOn3.style.visibility = "hidden"
    }
    updateCards();
});

const listItem1 = document.getElementById('listItem1');
const listItem1Add = document.getElementById('listItem1Add');
const dropdownMenu1 = document.getElementById('dropdownMenu1');
const dropdownMenu2 = document.getElementById('dropdownMenu2');

listItem1.addEventListener('click', function() {

    dropdownMenu1.classList.toggle('hidden');

    // Створення списку карт
    const cardList = document.createElement('ul');
    cardList.classList.add('card-list');

    let cardsData;
  
    // Приклад вхідних даних з параметрами карт
    if (isHight1) {
        cardsData = HightCards;
    } else {
        cardsData = SuitCard;
    }
  
    // Створення елементів списку карт
    cardsData.forEach(card => {
      const cardItem = document.createElement('li');
      cardItem.textContent = card;
  
      // Додавання обробника події для вибору карти
      cardItem.addEventListener('click', function() {
        listItem1.textContent = card;
        var startIndex = card.indexOf('-') + 1; // Знаходимо початковий індекс після "-"
        var endIndex = card.indexOf('(') - 1; // Знаходимо кінцевий індекс перед "("
        var result = card.substring(startIndex, endIndex).trim(); // Витягуємо потрібну частину та видаляємо зайві пробіли
        card1 = result;
      });
  
      cardList.appendChild(cardItem);
    });
  
    // Очищення контейнера перед додаванням списку карт
    dropdownMenu1.innerHTML = '';
  
    // Додавання списку карт в контейнер
    dropdownMenu1.appendChild(cardList);
    updateCards();
});

listItem1Add.addEventListener('click', function() {
    if (isHight1){
        return;
    }
    dropdownMenu2.classList.toggle('hidden');

    // Створення списку карт
    const cardList = document.createElement('ul');
    cardList.classList.add('card-list');

    let cardsData;
  
    // Приклад вхідних даних з параметрами карт
    if (!isHight1) {
        cardsData = ValueCards;
    } else {
        cardData ="Виберіть спочатку старший чи молодший аркан"
    }

      // Створення елементів списку карт
      cardsData.forEach(card => {
      const cardItem = document.createElement('li');
      cardItem.textContent = card;

      // Додавання обробника події для вибору карти
      cardItem.addEventListener('click', function() {
          listItem1Add.textContent = card;
        //Додавання карти
      });

      cardList.appendChild(cardItem);
    });

    // Очищення контейнера перед додаванням списку карт
    dropdownMenu2.innerHTML = '';

    // Додавання списку карт в контейнер
    dropdownMenu2.appendChild(cardList);
    updateCards();
});