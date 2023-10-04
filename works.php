<?php include('menu.php'); ?>
<link rel="stylesheet" href="css/works.css">
  <section class="section__works__content">
    <h2> Designe and Frontend</h2>
    <!--work rvn-->
    <a style="text-decoration: none; color: #FFF; font: 20px/1.5 Helvetica, sans-serif;" href="rvn.html">
      <div id="layer1" class="section__works__content__block">
        <img width="240" height="162" src="img/rvn/rvn_prev.png" style="border-radius: 16px;">
        <p>RVN — support service / Design, frontend</p>
        <a href="rvn.html"><button class="btn__right">Look</button></a>
      </div>
    </a>
    <!--work rvn end-->
     <!--work rvn-->
     <a style="text-decoration: none; color: #FFF; font: 20px/1.5 Helvetica, sans-serif;" href="index.html">
      <div id="layer1" class="section__works__content__block">
        <img width="240" height="162" src="img/Chery_brand.png" style="border-radius: 16px;">
        <p>Chery brand — personal site / Design, frontend</p>
        <a  href="index.html"><button  class="btn__right">Look</button></a>
      </div>
    </a>
    <!--work rvn end-->
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