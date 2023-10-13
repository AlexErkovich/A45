<?php include('menu.php'); ?>
<link rel="stylesheet" href="css/price.css">

  <section class="price__block">
    <div id="ux" class="price__block__row">
      <p>UX / UI</p>
      <p>per hour</p>
    </div>
    <div id="web" class="price__block__row">
      <p>Web - design</p>
      <p> per hour</p>
    </div>
    <div id="combo" class="price__block__row">
      <p>Web - design + Frontend</p>
      <p>per hour</p>
    </div>
  </section>

  <script>
    function copyEmail() {
      navigator.clipboard.writeText
        ("a89005632281@yandex.ru");
    }

    function copyTelegram() {
      navigator.clipboard.writeText
        ("@A45");
    }

  </script>
  <script>
    let menuBtn = document.querySelector('.menu-btn');
    let menu = document.querySelector('.mobile-menu');
    menuBtn.addEventListener('click', function () {
      menu.classList.toggle('active');
    })
  </script>
</body>

</html>