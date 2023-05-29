const menu = document.getElementById("myMenu");
const button = document.getElementById("myButton");
let isMenuVisible = false; // Початково меню приховано

// Додавання обробника події для кліку на кнопку
button.addEventListener("click", function() {
  // Перевірка видимості меню
  if (isMenuVisible) {
    // Якщо меню видиме, приховуємо його
    menu.style.display = "none";
    isMenuVisible = false;
  } else {
    // Якщо меню приховане, показуємо його
    menu.style.display = "block";
    isMenuVisible = true;
  }
});
