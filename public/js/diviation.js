let selectedCards = 0;

const cards = document.querySelectorAll('.card');
cards.forEach(card => {
    card.addEventListener('click', () => {
        if (selectedCards < 3) {
            card.classList.toggle('selected');
            selectedCards++;
            
        } else {
            alert('Ви можете вибрати лише 3 карти');
        }
    });
});

/*
const answerButton = document.querySelector('#answer-button');
answerButton.addEventListener('click', () => {
    const selectedCards = document.querySelectorAll('.card.selected');
    const cardIds = [];
    selectedCards.forEach(card => {
        cardIds.push(card.dataset.id);
    });

    const question = document.querySelector('#question').value;

    fetch('/get-answer', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            question: question,
            cards: cardIds
        })
    })
    .then(response => response.text())
    .then(answer => {
        document.querySelector('#answer').textContent = answer;
    });
});*/
