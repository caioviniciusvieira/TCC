
   document.addEventListener("DOMContentLoaded", function () {
      const userBtn = document.getElementById("user-btn");
      const dropdownContainer = userBtn.closest(".user-dropdown-container");

      userBtn.addEventListener("click", function (e) {
         e.stopPropagation(); // Impede o clique de fechar imediatamente
         dropdownContainer.classList.toggle("active");
      });

      // Fecha o menu se clicar fora
      document.addEventListener("click", function () {
         dropdownContainer.classList.remove("active");
      });
   });

