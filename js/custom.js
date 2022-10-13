jQuery(document).ready(function($){
  // Swiper silider
  var swiper = new Swiper(".swiper", {
    autoplay: {
      delay: 3000,
    },
    loop: true,
    parallax: true,
    speed: 1000,
  });
});

"use strict";
// Function to reveal sections
function reveal() {
  var reveals = document.querySelectorAll("#home-sections");
  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 250;
    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}
window.addEventListener("scroll", reveal);

// Creating tab advices

const tabs = document.querySelectorAll('.btn-advices');
const tabsContainer = document.querySelector('.btn-container');
const tabsContent = document.querySelectorAll('.tab-content');

tabsContainer.addEventListener('click', function(e) {
  const clicked = e.target.closest('.btn-advices');
  console.log(clicked);
  if(!clicked) return;
  tabs.forEach(t => t.classList.remove('active-tab'));
  tabsContent.forEach(c => c.classList.remove('tab-content-active'))
  clicked.classList.add('active-tab');

  document.querySelector(`.tab-${clicked.dataset.tab}`).classList.add('tab-content-active');
});