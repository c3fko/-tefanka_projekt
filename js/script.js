// THANK YOU PAGE //
(function () {
  const form = document.getElementById('contactForm');
  if (form) { // iba ak existuje
    form.addEventListener('submit', function (event) {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      } else {
        event.preventDefault();
        window.location.href = "thankyoupage.html";
      }
      form.classList.add('was-validated');
    }, false);
  }
})();

// kreatívny bod //

// COOKIE POPUP //
document.addEventListener("DOMContentLoaded", function () {
  const popup = document.getElementById("cookie-popup");
  const acceptBtn = document.getElementById("accept-cookies");
  const rejectBtn = document.getElementById("reject-cookies");

  if (!localStorage.getItem("cookiesDecision")) {
    popup.style.display = "block";
  }

  acceptBtn.addEventListener("click", function () {
    localStorage.setItem("cookiesDecision", "accepted");
    popup.style.display = "none";
  });

  rejectBtn.addEventListener("click", function () {
    localStorage.setItem("cookiesDecision", "rejected");
    popup.style.display = "none";
  });
});


