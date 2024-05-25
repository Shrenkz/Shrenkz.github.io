document.addEventListener("DOMContentLoaded", function () {
  var loginBtns = document.querySelectorAll(".login-btn");
  var loginLinks = document.querySelectorAll(".login-link");
  var modal = document.getElementById("myModal");
  var closeBtn = document.getElementsByClassName("close")[0];

  function openModal() {
    modal.style.display = "block";
  }

  function closeModal() {
    modal.style.display = "none";
  }

  loginBtns.forEach(function (loginBtn) {
    loginBtn.addEventListener("click", openModal);
  });

  loginLinks.forEach(function (loginLink) {
    loginLink.addEventListener("click", openModal);
  });
  
  closeBtn.addEventListener("click", closeModal);
  
  window.addEventListener("click", function (event) {
    if (event.target == modal) {
      closeModal();
    }
  });
});