var sidenav=document.querySelector(".sidenavbar")

function shownavbar()
{
    sidenav.style.left="0"
}
function closenavbar()
{
    sidenav.style.left="-60%"
}
// Select all service cards
const serviceCards = document.querySelectorAll('.newarrivalcontainer');

// Create an Intersection Observer
const observer = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('show'); // Add animation class
      observer.unobserve(entry.target);   // Run animation only once
    }
  });
}, { threshold: 0.2 }); // 20% of the card is visible

// Observe each service card
serviceCards.forEach(card => observer.observe(card));
