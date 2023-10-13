<?php include('menu.php'); ?>
<link rel="stylesheet" href="css/contact.css">

<section class="contact">

  <!--Button Email-->
  <div class="contact__block">
    <p> <i></i>a89005632281@yandex.ru</p>
    <div class="send">
      <button onclick="copyEmail()" class="btn__left">Copy</button>
      <a href="mailto:a89005632281@yandex.ru"><button class="btn__right">To write</button></a>
    </div>
  </div>
  <!--Button Email end-->

  <!--Button telegram-->
  <div class="contact__block">
    <p>@I_A45_I</p>
    <div class="send">
      <button onclick="copyTelegram()" class="btn__left">Copy</button>
      <a target="_blank" href="https://t.me/lA_45l"><button class="btn__right">To write</button></a>
    </div>
  </div>
  <!--Button telegram end-->

  <!--Button Bechance-->
  <div class="contact__block">
    <p>Bechance</p>
    <div class="send">
      <button onclick="goToBehance()" class="btn__left">Look</button>
    </div>
  </div>
  <!--Button Bechance end-->

  <!--Button Github-->
  <div class="contact__block">
    <p>Github</p>
    <div class="send">
      <button onclick="goToGithub()" class="btn__left">Look</button>
    </div>
  </div>
  <!--Button Github end-->
</section>

<script>
  function copyEmail() {
    navigator.clipboard.writeText("a89005632281@yandex.ru");
    alert('Адрес моей почты скопирован');
  }

  function copyTelegram() {
    navigator.clipboard.writeText("@lA_45l");
    alert('ID моего телеграм скопирован');
  }

  function goToBehance() {
    window.open  ('https://www.behance.net/IA45I' , '_blank');
  }
  function goToGithub() {
    window.open ('https://github.com/AlexErkovich' , '_blank');
  }
</script>
<script>
  let menuBtn = document.querySelector('.menu-btn');
  let menu = document.querySelector('.mobile-menu');
  menuBtn.addEventListener('click', function() {
    menu.classList.toggle('active');
  })
</script>
</body>

</html>