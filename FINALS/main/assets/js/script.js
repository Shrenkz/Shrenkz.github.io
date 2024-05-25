'use strict';

const overlay = document.querySelector("[data-overlay]");
const navOpenBtn = document.querySelector("[data-nav-open-btn]");
const navbar = document.querySelector("[data-navbar]");
const navCloseBtn = document.querySelector("[data-nav-close-btn]");
const navLinks = document.querySelectorAll("[data-nav-link]");

const navElemArr = [navOpenBtn, navCloseBtn, overlay];

const navToggleEvent = function (elem) {
  for (let i = 0; i < elem.length; i++) {
    elem[i].addEventListener("click", function () {
      navbar.classList.toggle("active");
      overlay.classList.toggle("active");
    });
  }
}

navToggleEvent(navElemArr);
navToggleEvent(navLinks);

const header = document.querySelector("[data-header]");
const goTopBtn = document.querySelector("[data-go-top]");

window.addEventListener("scroll", function () {

  if (window.scrollY >= 200) {
    header.classList.add("active");
    goTopBtn.classList.add("active");
  } else {
    header.classList.remove("active");
    goTopBtn.classList.remove("active");
  }

});

function confirmLogout() {
  var confirmLogout = confirm("Are you sure you want to logout?");
  if (confirmLogout) {
      window.location.href = "logout.php";
  } else {
      return false;
  }
}

document.getElementById('learnMoreBtn').addEventListener('click', function() {
  alert('Learn more about our services!');
});

document.getElementById('bookNowBtn').addEventListener('click', function() {
  alert('Proceed to booking!');
});

document.getElementById('bookNowBtn1').addEventListener('click', function() {
  alert('Proceed to booking!');
});

document.getElementById('bookNowBtn2').addEventListener('click', function() {
  alert('Proceed to booking!');
});

document.getElementById('bookNowBtn3').addEventListener('click', function() {
  alert('Proceed to booking!');
});

document.getElementById('bookNowBtn4').addEventListener('click', function() {
  alert('Proceed to booking!');
});

document.getElementById('contactus').addEventListener('click', function() {
  alert('Contact us now!');
});

