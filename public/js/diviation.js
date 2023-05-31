var selectedCard = []

function showError(message) {
  var errorContainer = document.createElement('div');
  errorContainer.classList.add('error-message');
  errorContainer.textContent = message;
  document.body.appendChild(errorContainer);

  setTimeout(function() {
    errorContainer.remove();
  }, 3000);
}

function flipCard(card, cardImage, cardReverse) {
  var isNewCard = !selectedCard.some(function(card) {
    return card[0] === cardImage && card[1] === cardReverse;
  }); 

  if (isNewCard){
    if (selectedCard.length < 3) {
    selectedCard.push([cardImage, cardReverse]);
    card.src = '/storage/images/карти таро' + cardImage;
    if (cardReverse) {
        card.style.transform = 'rotate(180deg)';
    }
    } else {
      // Повідомлення, що багато карт вибрано
      showError('Ви вибрали вже 3 карти');
  }
  }    
}

function getAnswer() {
  if (selectedCard.length !== 3) {
    showError("Потрібно вибрати 3 карти");
    return;
  } 
    const questionText = document.getElementById("question").value;

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

