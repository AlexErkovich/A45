<?php include('menu.php'); ?>
<link rel="stylesheet" href="css/project-page.css">

<body>
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
        // Переменные для запроса к базе данных
        $servername = "localhost";
        $username = "Alex";
        $password = "12345";
        $dbname = "a45";

        // Переменные для запроса к базе данных
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
        // Добавьте сюда другие названия таблиц
        $table_names = array("art", "tech", "pedagogy", "photo");
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