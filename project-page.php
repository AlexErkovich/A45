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
    <div class="content__main__project__tab">
            <?php
            $servername = "localhost";
            $username = "Alex";
            $password = "12345";
            $dbname = "a45";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Ошибка подключения: " . $conn->connect_error);
            }

            function displayTab($conn)
            {
                $sql = "SHOW TABLES";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '
                    <div class="tab">
                        <span class="table-span">' . $row['Tables_in_a45'] . '</span>
                    </div>';
                    }
                } else {
                    echo "0 результатов для таблицы";
                }
            }

            displayTab($conn);

            $conn->close();
            ?>
        </div>

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

        function displayTable($conn, $table_name)
        {
            $sql = "SELECT * FROM $table_name";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $imageData = $row["img"] ? base64_encode($row["img"]) : '';
                    echo '<div class="content__project ' . $table_name . '">
                            <div class="content__project__block" onclick="openDetailsPage(' . $row["id"] . ',\'' . $table_name . '\')">
                                <img src="data:image/jpeg;base64,' . $imageData . '" style="width: 220px; height: fit-content; border-radius:16px;" alt="Изображение">
                                <div class="content__project__block__text">
                                    <h2>' . $row["title"] . '</h2>
                                    <p>' . $row["description"] . '</p>
                                </div>
                                <span class="table-span">' . $table_name . '</span> <!-- Выводим название таблицы -->
                            </div>
                        </div>';
                }
            } else {
                echo "0 результатов для таблицы $table_name";
            }
        }

        $table_names = array("art", "tech" , "pedagogy" , "photo");  // Добавьте сюда другие названия таблиц
        foreach ($table_names as $table_name) {
            displayTable($conn, $table_name);
        }

        $conn->close();
        ?>
    </section>

    <script>
        let menuBtn = document.querySelector('.menu-btn');
        let menu = document.querySelector('.mobile-menu');
        menuBtn.addEventListener('click', function() {
            menu.classList.toggle('active');
        });

        const tableSpans = document.querySelectorAll('.table-span');

        function showTableContent(table_name) {
            const allProjects = document.querySelectorAll('.content__project');
            allProjects.forEach(project => {
                project.style.display = 'none';
            });
            const selectedProjects = document.querySelectorAll('.' + table_name);
            selectedProjects.forEach(project => {
                project.style.display = 'block';
            });
        }

        tableSpans.forEach(span => {
            span.addEventListener('click', function() {
                const tableName = span.innerText;
                showTableContent(tableName);
            });
        });

        function openDetailsPage(cardId, tableName) {
            window.location.href = 'details.php?id=' + cardId + '&table=' + tableName;
        }
    </script>
</body>

</html>