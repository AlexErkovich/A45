<?php include('menu.php'); ?>
<link rel="stylesheet" href="css/about.css">

<body>
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
    <button onclick="openPageAboutProject()">Other my project</button>
  </section>
  
  <script>
    let menuBtn = document.querySelector('.menu-btn');
    let menu = document.querySelector('.mobile-menu');
    menuBtn.addEventListener('click', function() {
      menu.classList.toggle('active');
    })

    function openPageAboutProject() {
      // Указываете URL страницы, которую хотите открыть
      var url = 'project-page.php'; // Замените на нужный URL

      // Открывает новое окно или вкладку браузера с указанным URL
      window.open(url, '_blank');
    }
  </script>

</body>

</html>