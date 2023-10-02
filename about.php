<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/menu.css">
  <link rel="stylesheet" href="css/about.css">
  <link rel="stylesheet" href="css/root.css">
  <title>About</title>
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



  <section id="layer2" class="content__about">
    <div class="content__about__title">
      <h1>About me</h1>
      <img src="img/alex_erkovich.png" width="88px" height="88px">
    </div>

    <p>I have been designing user experience since July 2019. During this time, he helped startups create applications
      from scratch, prepared the product MVP, organized and conducted audience research before and after prototyping,
      redesigned existing functionality, organized a UI library of components, conducted competitive analysis, created
      project presentations. I am convinced that a good product begins with well-organized work and communication in a
      team.</p>

  </section>
  <script>
    let menuBtn = document.querySelector('.menu-btn');
    let menu = document.querySelector('.mobile-menu');
    menuBtn.addEventListener('click', function () {
      menu.classList.toggle('active');
    })
  </script>

</body>

</html>