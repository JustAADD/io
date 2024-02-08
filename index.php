<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- ===== CSS ===== -->
  <link rel="stylesheet" href="../assets/css/main.css">

  <title>Menu responsive</title>

</head>

<body>
  <header class="header">
    <a href="#" class="header__logo">ADRIAN</a>

    <ion-icon name="menu-outline" class="header__toggle" id="nav-toggle"></ion-icon>

    <nav class="nav" id="nav-menu">
      <div class="nav__content bd-grid">

        <ion-icon name="close-outline" class="nav__close" id="nav-close"></ion-icon>

        <div class="nav__perfil">
          <div>
            <a href="#" class="nav__name"><img src="../assets/image/AD.png" alt="" style="height:40px; width: 90px;"></a>
            <!-- <span class="nav__profesion">Web designer</span> -->
          </div>
        </div>

        <div class="nav__menu">
          <ul class="nav__list">


            <div class="nav__social">
              <a href="https://www.linkedin.com/in/adrian-makiling-74477928b/" class="nav__social-icon"><ion-icon name="logo-linkedin"></ion-icon></a>
              <a href="https://github.com/JustAADD" class="nav__social-icon"><ion-icon name="logo-github"></ion-icon></a>
              <a href="mailto:makilingadrian19@gmail.com" class="nav__social-icon"><ion-icon name="mail"></ion-icon></a>
            </div>
          </ul>
        </div>


      </div>
    </nav>
  </header>


  <div class="ediwap">
    <?php

    include('content.php');

    ?>
  </div>







  <script>
    document.addEventListener("DOMContentLoaded", function() {
      let carousel = document.querySelector(".carousel");
      let items = carousel.querySelectorAll(".item");
      let dotsContainer = document.querySelector(".dots");

      // Insert dots into the DOM
      items.forEach((_, index) => {
        let dot = document.createElement("span");
        dot.classList.add("dot");
        if (index === 0) dot.classList.add("active");
        dot.dataset.index = index;
        dotsContainer.appendChild(dot);
      });

      let dots = document.querySelectorAll(".dot");

      // Function to show a specific item
      function showItem(index) {
        items.forEach((item, idx) => {
          item.classList.remove("active");
          dots[idx].classList.remove("active");
          if (idx === index) {
            item.classList.add("active");
            dots[idx].classList.add("active");
          }
        });
      }

      // Event listeners for buttons
      document.querySelector(".prev").addEventListener("click", () => {
        let index = [...items].findIndex((item) =>
          item.classList.contains("active")
        );
        showItem((index - 1 + items.length) % items.length);
      });

      document.querySelector(".next").addEventListener("click", () => {
        let index = [...items].findIndex((item) =>
          item.classList.contains("active")
        );
        showItem((index + 1) % items.length);
      });

      // Event listeners for dots
      dots.forEach((dot) => {
        dot.addEventListener("click", () => {
          let index = parseInt(dot.dataset.index);
          showItem(index);
        });
      });
    });
  </script>

  <script src="../assets/js/script.js"></script>


  <!-- <div class="cv">
      <div class="row">
        <div class="col">
          <p class="lethembe">Hi there! I am currently on the Lookout for an internship opportunity or a company where I can contribute
            and learn. With a passion for IT Field industry, I am Eager to take the next step in my professional journey. </p>
          <button class="btn">Download CV</button>
        </div>
      </div>
    </div>

    <div class="margin" style="padding: 5%;"></div>
    <p><span><img src="../assets/image/copyright.png"> &nbsp;</span> I also made this website
    <p> -->
  <!-- ===== IONICONS ===== -->
  <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
  <!--===== MAIN JS =====-->
  <script src="../assets/js/main.js"></script>
</body>

</html>