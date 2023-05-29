const menu = document.getElementById("myMenu");
const button = document.getElementById("myButton");

// Додавання обробника події для кліку на кнопку
button.addEventListener("click", function(event) {
  // Перевірка видимості меню
  if (menu.style.display === "none") {
    // Якщо меню приховане, показуємо його
    menu.style.display = "block";
  } else {
    // Якщо меню видиме, приховуємо його
    menu.style.display = "none";
  }
});
