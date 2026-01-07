(function () {
  "use strict";

  let forms = document.querySelectorAll(".php-email-form");

  forms.forEach(function (form) {
    form.addEventListener("submit", function (event) {
      // Cek apakah action kosong atau tidak
      let action = form.getAttribute("action") || "";

      // Biarkan form dikirimkan jika action kosong
      if (action.trim() === "") {
        console.log("Action kosong, form dikirimkan secara normal.");
        return; // Biarkan form mengirimkan data secara normal
      }
    });
  });
})();
