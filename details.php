<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/root.css">
    <link rel="stylesheet" href="css/project-page.css">
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
    <title>About</title>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            for (var j = 0; j < document.scripts.length; j++) {
                if (document.scripts[j].src === r) {
                    return;
                }
            }
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
                    <a href="works.html" class="links">Работы</a>
                </li>
                <li class="nav_list">
                    <a href="price.html" class="links">Цены</a>
                </li>
                <li class="nav_list">
                    <a href="contact.html" class="links">Контакты</a>
                </li>
                <li class="nav_list">
                    <a href="about.html" class="links">О нас</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Мобильное меню которое появляется-->
    <ul id="layer2" class="mobile-menu">
        <li class="mobile-menu__nav__links">
            <a href="works.html" class="links">Работы</a>
        </li>
        <li class="mobile-menu__nav__links">
            <a href="price.html" class="links">Цены</a>
        </li>
        <li class="mobile-menu__nav__links">
            <a href="contact.html" class="links">Контакты</a>
        </li>
        <li class="mobile-menu__nav__links">
            <a href="about.html" class="links">О нас</a>
        </li>
    </ul>
    <!-- Мобильное меню которое появляется конец-->

    <section id="layer2" class="content__main__project">
        <?php
        $servername = "localhost";
        $username = "Alex";
        $password = "12345";
        $dbname = "a45";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Ошибка подключения: " . $conn->connect_error);
        }

        if (isset($_GET['table'])) {
            $tableName = $_GET['table'];
        } else {
            echo '<h1></h1>';
        }

        if (isset($_GET['id']) && is_numeric($_GET['id']) && isset($_GET['table'])) {
            $cardId = $_GET['id'];
            $tableName = $_GET['table'];

            $sql = "SELECT * FROM $tableName WHERE id = $cardId";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                echo '<div class="card__details">';
                echo ' <img src="data:image/jpeg;base64,' . base64_encode($row["img"]) . '" style="width: 100%; height: fit-content; border-radius:16px;" alt="Изображение">';
                echo '<h2>' . $row["title"] . '</h2>';
                echo '<p>' . $row["content"] . '</p>';
                echo ' <img src="data:image/jpeg;base64,' . base64_encode($row["img_img"]) . '" style="width: 100%; height: fit-content; border-radius:16px;" alt="Изображение">';
                echo '</div>';
            } else {
                echo "Информация о выбранной карте не найдена.";
            }
        } else {
            echo "Неверный идентификатор карты или название таблицы.";
        }

        $conn->close();
        ?>
    </section>

    <script>
        let menuBtn = document.querySelector('.menu-btn');
        let menu = document.querySelector('.mobile-menu');
        menuBtn.addEventListener('click', function() {
            menu.classList.toggle('active');
        })
    </script>
</body>

</html>
