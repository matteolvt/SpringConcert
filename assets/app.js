import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/app.css';

console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');

// Nouvelle date de fin du compte à rebours (27 avril 2024 à 20h00)
const newEndDate = new Date('2024-04-27T21:00:00').getTime();

// Mettre à jour le compte à rebours toutes les secondes
const interval = setInterval(function() {
    // Date actuelle
    const now = new Date().getTime();

    // Calculer le temps restant en millisecondes
    const distance = newEndDate - now;

    // Calculer les jours, heures, minutes et secondes restantes
    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Fonction pour formater les chiffres avec un zéro devant si nécessaire
    function formatNumber(number) {
        return (number < 10 ? '0' : '') + number;
    }

    // Afficher le compte à rebours dans un élément HTML avec l'id "countdown"
    document.getElementById('countdown').innerHTML =  days + ' : ' + formatNumber(hours) + '  : ' + formatNumber(minutes) + '  : ' + formatNumber(seconds);

    // Si le compte à rebours est terminé, afficher un message
    if (distance < 0) {
        clearInterval(interval);
        document.getElementById('countdown').innerHTML = 'Le compte à rebours est terminé !';
    }
}, 1000); // Répéter toutes les secondes (1000 millisecondes)



const imageWrapper = document.querySelector('.image-wrapper')
const imageItems = document.querySelectorAll('.image-wrapper > *')
const imageLength = imageItems.length
const perView = 3
let totalScroll = 0
const delay = 5000

imageWrapper.style.setProperty('--per-view', perView)
for(let i = 0; i < perView; i++) {
  imageWrapper.insertAdjacentHTML('beforeend', imageItems[i].outerHTML)
}

let autoScroll = setInterval(scrolling, delay)

function scrolling() {
  totalScroll++
  if(totalScroll == imageLength + 1) {
    clearInterval(autoScroll)
    totalScroll = 1
    imageWrapper.style.transition = '0s'
    imageWrapper.style.left = '0'
    autoScroll = setInterval(scrolling, delay)
  }
  const widthEl = document.querySelector('.image-wrapper > :first-child').offsetWidth + 24
  imageWrapper.style.left = `-${totalScroll * widthEl}px`
  imageWrapper.style.transition = '.3s'
}

document.addEventListener('DOMContentLoaded', function() {
  var longText = document.getElementById('long-text');
  var showMoreBtn = document.getElementById('show-more-btn');
  
  // Vérifie si le texte est coupé
  if (longText.offsetHeight < longText.scrollHeight) {
      showMoreBtn.style.display = 'block'; // Affiche le bouton si le texte est coupé
  }
  
  // Ajoute un écouteur d'événements au clic sur le bouton
  showMoreBtn.addEventListener('click', function() {
      longText.parentNode.classList.add('expanded'); // Ajoute la classe pour étendre le texte
      showMoreBtn.style.display = 'none'; // Cache le bouton
  });
});


document.addEventListener('DOMContentLoaded', function() {
  var longText = document.getElementById('long-text');
  var brElements = longText.querySelectorAll('br');
  var lastBrElement = brElements[brElements.length - 1]; // Sélectionne le dernier élément <br>

  // Masque le dernier élément <br> si c'est la version téléphone
  if (window.innerWidth <= 768) {
      lastBrElement.style.display = 'none';
  }
});

// document.addEventListener('DOMContentLoaded', function() {
//   var navToggle = document.querySelector('.nav-toggle');
//   var navLinks = document.querySelector('.nav_links');

//   // Ajoute un écouteur d'événements au clic sur le menu hamburger
//   navToggle.addEventListener('click', function() {
//       navLinks.classList.toggle('show'); // Affiche/cache les liens de navigation
//   });
// });

