var players = [
  {
    name: 'Lionel Messi',
    image: 'css/images/Messi-Card.png',
    link: 'index.php'
  },
  {
    name: 'Neymar',
    image: 'css/images/Neymar-Card.png',
    link: 'worldCup.php'
  },
  {
    name: 'CR7',
    image: 'css/images/CR7-Card.png',
    link: 'worldCup.php'
  }
  ,
  {
    name: 'Mbappe',
    image: 'css/images/Mbappe-Card.png',
    link: 'worldCup.php'
  }
  ,
  {
    name: 'Griezmann',
    image: 'css/images/Griezmann-Card.png',
    link: 'worldCup.php'
  }
  ,
  {
    name: 'Ramos',
    image: 'css/images/Ramos-Card.png',
    link: 'worldCup.php'
  }
  ,
  {
    name: 'Ibrahimovic',
    image: 'css/images/Ibrahimovic-Card.png',
    link: 'worldCup.php'
  }
  ,
  {
    name: 'Suarez',
    image: 'css/images/Suarez-Card.png',
    link: 'worldCup.php'
  }
  ,
  {
    name: 'Pique',
    image: 'css/images/Pique-Card.png',
    link: 'worldCup.php'
  }
];

var currentPlayerIndex = 0;
var previousCard = document.getElementById('previous-card');
var currentCard = document.getElementById('current-card');
var nextCard = document.getElementById('next-card');

function previousPlayer() {
  currentPlayerIndex--;
  if (currentPlayerIndex < 0) {
    currentPlayerIndex = players.length - 1;
  }
  updatePlayerCards();
}

function nextPlayer() {
  currentPlayerIndex++;
  if (currentPlayerIndex >= players.length) {
    currentPlayerIndex = 0;
  }
  updatePlayerCards();
}

function updatePlayerCards() {
  var previousPlayerIndex = currentPlayerIndex - 1;
  var nextPlayerIndex = currentPlayerIndex + 1;

  if (previousPlayerIndex < 0) {
    previousPlayerIndex = players.length - 1;
  }
  if (nextPlayerIndex >= players.length) {
    nextPlayerIndex = 0;
  }

  previousCard.src = players[previousPlayerIndex].image;
  previousCard.parentElement.href = players[previousPlayerIndex].link;

  currentCard.src = players[currentPlayerIndex].image;
  currentCard.parentElement.href = players[currentPlayerIndex].link;

  nextCard.src = players[nextPlayerIndex].image;
  nextCard.parentElement.href = players[nextPlayerIndex].link;

  updateCardClasses();
}

function updateCardClasses() {
  var cardContainers = document.getElementsByClassName('card-container');

  for (var i = 0; i < cardContainers.length; i++) {
    var cardContainer = cardContainers[i];
    cardContainer.classList.remove('previous');
    cardContainer.classList.remove('current');
    cardContainer.classList.remove('next');
  }

  cardContainers[previousCard.parentElement === cardContainers[0] ? 2 : 0].classList.add('previous');
  cardContainers[1].classList.add('current');
  cardContainers[nextCard.parentElement === cardContainers[2] ? 0 : 2].classList.add('next');
}

updatePlayerCards();
