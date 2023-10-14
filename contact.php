<?php include('menu.php'); ?>
<link rel="stylesheet" href="css/contact.css">

<section class="contact">
  <!--Button Email-->
  <div class="contact__block">
    <div class="contact__block__name-service">
      <img style="width: 32px; height: 32px; border-radius: 16px;" src="img/yandex.png">
      <p> a89005632281@yandex.ru</p>
    </div>
    <div class="send">
      <button onclick="copyEmail()" class="btn__primary">Copy email</button>
      <button onclick="sendEmail()" class="btn__secondary">To write</button>
    </div>
  </div>
  <!--Button Email end-->
  <!--Button Email-->
  <div class="contact__block">
    <div class="contact__block__name-service">
      <img style="width: 32px; height: 32px; " src="img/telegram.png">
      <p>@I_A45_I</p>
    </div>
    <div class="send">
      <button onclick="copyTelegram()" class="btn__primary">Copy ID</button>
      <button onclick="goToTelegram()" class="btn__secondary">To write</button>
    </div>
  </div>
  <!--Button Email end-->

  <!--Button Bechance-->
  <div class="contact__block">
    <div class="contact__block__name-service">
      <img style="width: 32px; height: 32px;" src="img/behance.png">
      <p>Bechance</p>
    </div>
    <div class="send">
      <button onclick="goToBehance()" class="btn__primary">Look profile</button>
    </div>
  </div>
  <!--Button Bechance end-->

  <!--Button Github-->
  <div class="contact__block">
    <div class="contact__block__name-service">
      <img style="width: 32px; height: 32px;" src="img/github.png">
      <p>Github</p>
    </div>
    <div class="send">
      <button onclick="goToGithub()" class="btn__primary">Look profile</button>
    </div>
  </div>
  <!--Button Github end-->
</section>

<script>
  function copyEmail() {
    navigator.clipboard.writeText("a89005632281@yandex.ru");
    alert('Адрес моей почты a89005632281@yandex.ru скопирован');
  }
  // Вызываем функцию для открытия почтового клиента
  function sendEmail() {
    window.location.href = 'mailto:a89005632281@yandex.ru';
  }



  function copyTelegram() {
    navigator.clipboard.writeText("@lA_45l");
    alert('ID моего телеграм lA_45l скопирован');
  }

  function goToBehance() {
    window.open('https://www.behance.net/IA45I', '_blank');
  }

  function goToBehance() {
    window.open('https://www.behance.net/IA45I', '_blank');
  }

  function goToTelegram() {
    window.open('https://t.me/lA_45l', '_blank');
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