<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/menu.css">
  <link rel="stylesheet" href="css/contact.css">
  <title>Contact</title>
  <!-- Yandex.Metrika counter -->
  <script type="text/javascript">
    (function (m, e, t, r, i, k, a) {
      m[i] = m[i] || function () { (m[i].a = m[i].a || []).push(arguments) };
      m[i].l = 1 * new Date();
      for (var j = 0; j < document.scripts.length; j++) { if (document.scripts[j].src === r) { return; } }
      k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
      (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(94733749, "init", {
      clickmap: true,
      trackLinks: true,
      accurateTrackBounce: true,
      webvisor: true
    });
  </script>
  <noscript>
    <div><img src="https://mc.yandex.ru/watch/94733749" style="position:absolute; left:-9999px;" alt="" /></div>
  </noscript>
  <!-- /Yandex.Metrika counter -->
</head>

<body>
  <header class="header">
    <nav class="menu">
      <a href="index.html">
        <div class="logo menu__logo"><img src="img/logo.svg" alt="logo"></div>
      </a>
      <div id="layer2" class="menu-btn">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <!-- Десктопное меню -->
      <ul class="nav">
        <li class="nav__links">
          <a href="works.html" class="links">Works</a>
        </li>
        <li class="nav_list">
          <a href="price.html" class="links">Price</a>
        </li>
        <li class="nav_list">
          <a href="contact.html" class="links">Contact</a>
        </li>
        <li class="nav_list">
          <a href="about.html" class="links">About</a>
        </li>
      </ul>
      
    </nav>
    </div>
  </header>

  
  <!-- Мобильное меню которое появляется-->
  <ul id="layer2" class="mobile-menu">
    <li class="mobile-menu__nav__links">
      <a href="works.html" class="links">Works</a>
    </li>
    <li class="mobile-menu__nav__links">
      <a href="price.html" class="links">Price</a>
    </li>
    <li class="mobile-menu__nav__links">
      <a href="contact.html" class="links">Contact</a>
    </li>
    <li class="mobile-menu__nav__links">
      <a href="about.html" class="links">About</a>
    </li>
  </ul>
  <!-- Мобильное меню которое появляется конец-->


  <section class="contact__block">

    <!--Button Email-->
    <div class="contact__block__email">
      <p> <i></i>a89005632281@yandex.ru</p>
      <div class="send">
        <button onclick="copyEmail()" class="btn__left">Copy</button>
        <a href="mailto:a89005632281@yandex.ru"><button class="btn__right">To write</button></a>
      </div>
    </div>
    <!--Button Email end-->

    <!--Button telegram-->
    <div class="contact__block__telegram">
      <p>@I_A45_I</p>
      <div class="send">
        <button onclick="copyTelegram()" class="btn__left">Copy</button>
        <a target="_blank" href="https://t.me/lA_45l"><button class="btn__right">To write</button></a>
      </div>
    </div>
    <!--Button telegram end-->
  </section>

  <script>
    function copyEmail() {
      navigator.clipboard.writeText
        ("a89005632281@yandex.ru");
        alert('Text copied!');
    }

    function copyTelegram() {
      navigator.clipboard.writeText
        ("@lA_45l");
        alert('Text copied!');
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