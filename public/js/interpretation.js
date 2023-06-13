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

  function checkUndefinedWord(array) {
    for (let i = 0; i < array.length; i++) {
      const innerArray = array[i];
      if (innerArray[0].includes("undefined")) {
        return true;
      }
    }
    return false;
  }

function getAnswer() {
    var textContainer = document.getElementById("answer-container");
    if (textContainer.innerText){
        // Якщо відповідь вже була, ще раз не генеруємо
        return;
      }

    if (checkUndefinedWord(selectedCard)){
        showError("Спочатку заповніть всі карти");
        return;
    }

    if (!checkUniqueElements(selectedCard)){
        showError("Розсклад може містити лише унікальні карти");
        return;
    } 
   
    const questionText = document.getElementById("question").value
    if (questionText.length > 100) {
      showError("Пробачте, але ваше питання задовге. Перефразуйте його, щоб зробити коротшим.");
      return;
    } 

    showError("Генерація відповіді може зайняти до хвилини. Це залежить від завантаженості сервера");
    

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
let isHight2 = 1;
let isHight3 = 1;
let isReversed1 = 0;
let isReversed2 = 0;
let isReversed3 = 0;
let scr1 = "/";
let scr2 = "/";
let scr3 = "/";
let card1, card2, card3;
let suit1, suit2, suit3;

const HightCards = [
    "0 - Дурень (The Fool)",
    "I - Чаклун (The Magician)",
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
    "XVI - Вежа (The Tower)",
    "XVII - Зірка (The Star)",
    "XVIII - Місяць (The Moon)",
    "XIX - Сонце (The Sun)",
    "XX - Суд (Judgement)",
    "XXI - Світ (The World)"
];

const ValueCards = [
    "Туз",
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
    let src1, suitCard1, src2, suitCard2, src3, suitCard3;

    switch (suit1) {
        case "Жезли":
            suitCard1 = "Жезлів";
            break;
        case "Кубки":
            suitCard1 = "Кубків";
            break;
        case "Мечі":
            suitCard1 = "Мечів"
            break;
        case "Пентаклі":
            suitCard1 = "Пентаклів"
            break;                         
    } 

    switch (suit2) {
        case "Жезли":
            suitCard2 = "Жезлів";
            break;
        case "Кубки":
            suitCard2 = "Кубків";
            break;
        case "Мечі":
            suitCard2 = "Мечів"
            break;
        case "Пентаклі":
            suitCard2 = "Пентаклів"
            break;                         
    } 

    switch (suit3) {
        case "Жезли":
            suitCard3 = "Жезлів";
            break;
        case "Кубки":
            suitCard3 = "Кубків";
            break;
        case "Мечі":
            suitCard3 = "Мечів"
            break;
        case "Пентаклі":
            suitCard3 = "Пентаклів"
            break;                         
    } 

    if (isHight1){
        src1 = "Старші аркани/" + card1 + ".jpg";
    } else {
        src1 = "Молодші аркани/" + suit1 + "/" + card1 + " " + suitCard1+ ".jpg";
    }
    if (isReversed1){
        document.getElementById("img1").style.transform = 'rotate(180deg)';
    } else {
        document.getElementById("img1").style.transform = 'rotate(0deg)';
    }

    if (isHight2) {
        src2 = "Старші аркани/" + card2 + ".jpg";
    } else {
        src2 = "Молодші аркани/" + suit2 + "/" + card2 + " " + suitCard2 + ".jpg";
    }
    if (isReversed2) {
        document.getElementById("img2").style.transform = 'rotate(180deg)';
    } else {
        document.getElementById("img2").style.transform = 'rotate(0deg)';
    }
    
    if (isHight3) {
        src3 = "Старші аркани/" + card3 + ".jpg";
    } else {
        src3 = "Молодші аркани/" + suit3 + "/" + card3 + " " + suitCard3 + ".jpg";
    }
    if (isReversed3) {
        document.getElementById("img3").style.transform = 'rotate(180deg)';
    } else {
        document.getElementById("img3").style.transform = 'rotate(0deg)';
    }
    
    if (!src1.includes("undefined")){
        document.getElementById("img1").src = "/storage/images/карти таро/" + src1;
    }
    if (!src2.includes("undefined")){
        document.getElementById("img2").src = "/storage/images/карти таро/" + src2;
    }
    if (!src3.includes("undefined")){
        document.getElementById("img3").src = "/storage/images/карти таро/" + src3;
    }
    
    

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
    isHight2 = 1;
    updateCards();
});

document.getElementById('myButton4').addEventListener('click', function(){
    buttonOn3.style.visibility = "hidden";
    buttonOn4.style.visibility = "visible";
    isHight2 = 0;
    updateCards();
});

document.getElementById('myButton5').addEventListener('click', function(){
    buttonOn5.style.visibility = "visible";
    buttonOn6.style.visibility = "hidden";
    isHight3 = 1;
    updateCards();
});

document.getElementById('myButton6').addEventListener('click', function(){
    buttonOn5.style.visibility = "hidden";
    buttonOn6.style.visibility = "visible";
    isHight3 = 0;
    updateCards();
});

const cheakBoxOn1 = document.getElementById('CheakBoxOn1');
const cheakBoxOn2 = document.getElementById('CheakBoxOn2');
const cheakBoxOn3 = document.getElementById('CheakBoxOn3');

document.getElementById('CheakBox1').addEventListener("click", function(){
    cheakBoxOn1.classList.toggle('hidden');
    isReversed1 = cheakBoxOn1.classList.contains('hidden') ? 0 : 1;
    updateCards();
});
  

document.getElementById('CheakBox2').addEventListener("click", function(){
    cheakBoxOn2.classList.toggle('hidden');
    isReversed2 = cheakBoxOn2.classList.contains('hidden') ? 0 : 1;
    updateCards();
});

document.getElementById('CheakBox3').addEventListener("click", function(){
    cheakBoxOn3.classList.toggle('hidden');
    isReversed3 = cheakBoxOn3.classList.contains('hidden') ? 0 : 1;
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
        dropdownMenu1.classList.toggle('hidden');
        if (isHight1){
            var startIndex = card.indexOf('-') + 1; // Знаходимо початковий індекс після "-"
            var endIndex = card.indexOf('(') - 1; // Знаходимо кінцевий індекс перед "("
            var result = card.substring(startIndex, endIndex).trim(); // Витягуємо потрібну частину та видаляємо зайві пробіли
            card1 = result;
            listItem1Add.textContent = "Вже вибрано Старшу аркану";
        } else {
            suit1 = card;
            listItem1Add.textContent = "Виберіть значення карти";
        }
        updateCards();
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
            dropdownMenu2.classList.toggle('hidden');
            card1 = card;
            listItem1Add.textContent = card;
            updateCards();
        //Додавання карти
      });

      cardList.appendChild(cardItem);
    });

    // Очищення контейнера перед додаванням списку карт
    dropdownMenu2.innerHTML = '';

    // Додавання списку карт в контейнер
    dropdownMenu2.appendChild(cardList);
});

const listItem2 = document.getElementById('listItem2');
const listItem2Add = document.getElementById('listItem2Add');
const dropdownMenu3 = document.getElementById('dropdownMenu3');
const dropdownMenu4 = document.getElementById('dropdownMenu4');

listItem2.addEventListener('click', function() {

    dropdownMenu3.classList.toggle('hidden');

    // Створення списку карт
    const cardList = document.createElement('ul');
    cardList.classList.add('card-list');

    let cardsData;
  
    // Приклад вхідних даних з параметрами карт
    if (isHight2) {
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
            listItem2.textContent = card;
            dropdownMenu3.classList.toggle('hidden');
            if (isHight2){
                var startIndex = card.indexOf('-') + 1; // Знаходимо початковий індекс після "-"
                var endIndex = card.indexOf('(') - 1; // Знаходимо кінцевий індекс перед "("
                var result = card.substring(startIndex, endIndex).trim(); // Витягуємо потрібну частину та видаляємо зайві пробіли
                card2 = result;
                listItem2Add.textContent = "Вже вибрано Старшу аркану";
            } else {
                suit2 = card;
            }
            updateCards();
        });
  
        cardList.appendChild(cardItem);
    });
  
    // Очищення контейнера перед додаванням списку карт
    dropdownMenu3.innerHTML = '';
  
    // Додавання списку карт в контейнер
    dropdownMenu3.appendChild(cardList);
    updateCards();
});

listItem2Add.addEventListener('click', function() {
    if (isHight2){
        return;
    }
    dropdownMenu4.classList.toggle('hidden');

    // Створення списку карт
    const cardList = document.createElement('ul');
    cardList.classList.add('card-list');

    let cardsData;
  
    // Приклад вхідних даних з параметрами карт
    if (!isHight2) {
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
            dropdownMenu4.classList.toggle('hidden');
            card2 = card;
            listItem2Add.textContent = card;
            //Додавання карти
            updateCards();
        });

        cardList.appendChild(cardItem);
    });

    // Очищення контейнера перед додаванням списку карт
    dropdownMenu4.innerHTML = '';

    // Додавання списку карт в контейнер
    dropdownMenu4.appendChild(cardList);
    updateCards();
});


const listItem3 = document.getElementById('listItem5');
const listItem3Add = document.getElementById('listItem5Add');
const dropdownMenu5 = document.getElementById('dropdownMenu5');
const dropdownMenu6 = document.getElementById('dropdownMenu6');

listItem5.addEventListener('click', function() {

    dropdownMenu5.classList.toggle('hidden');

    // Створення списку карт
    const cardList = document.createElement('ul');
    cardList.classList.add('card-list');

    let cardsData;
  
    // Приклад вхідних даних з параметрами карт
    if (isHight3) {
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
            dropdownMenu5.classList.toggle('hidden');
            listItem3.textContent = card;
            if (isHight3){
                var startIndex = card.indexOf('-') + 1; // Знаходимо початковий індекс після "-"
                var endIndex = card.indexOf('(') - 1; // Знаходимо кінцевий індекс перед "("
                var result = card.substring(startIndex, endIndex).trim(); // Витягуємо потрібну частину та видаляємо зайві пробіли
                card3 = result;
                listItem3Add.textContent = "Вже вибрано Старшу аркану";
            } else {
                suit3 = card;
            }
            updateCards();
        });
  
        cardList.appendChild(cardItem);
    });
  
    // Очищення контейнера перед додаванням списку карт
    dropdownMenu5.innerHTML = '';
  
    // Додавання списку карт в контейнер
    dropdownMenu5.appendChild(cardList);
    updateCards();
});

listItem3Add.addEventListener('click', function() {
    if (isHight3){
        return;
    }
    dropdownMenu6.classList.toggle('hidden');

    // Створення списку карт
    const cardList = document.createElement('ul');
    cardList.classList.add('card-list');

    let cardsData;
  
    // Приклад вхідних даних з параметрами карт
    if (!isHight3) {
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
            dropdownMenu6.classList.toggle('hidden');
            card3 = card;
            listItem3Add.textContent = card;
            updateCards();
            //Додавання карти
        });

        cardList.appendChild(cardItem);
    });

    // Очищення контейнера перед додаванням списку карт
    dropdownMenu6.innerHTML = '';

    // Додавання списку карт в контейнер
    dropdownMenu6.appendChild(cardList);
    updateCards();
});
