<!DOCTYPE html>

<html lang="ru">
    <head>
        <link rel="stylesheet" href="css1.css" />
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width" />
        <link
            rel="stylesheet"
            href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
        />

        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    </head>

    <body>
        <div class="text__bloc">
            <div class="container">
                <h5>ПРОЙДИ БЕСПЛАТНУЮ ДИАГНОСТИКУ</h5>
                <form class="forma" action="send.php" method="post">
                    <input placeholder="Введите ваш эл.адрес" type="email" name="email" />
                    <input
                        placeholder="Введите ваше имя и фамилию"
                        type="text"  name="fio"
                    />
                    <input placeholder="Введите ваш телефон" name="numer" type="text" />
                    <button type="submit" value="Отправить" class="buttonzav">
                        Записаться
                    </button>
                </form>
            </div>
        </div>
    </body>
</html>
