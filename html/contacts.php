<?
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="icon" href="/img/2018_himmel_logo (1).svg">
    <link rel="stylesheet" href="/dist/css/lightbox.css">
</head>

<body style="background:url(../img/bg-part-0.png); background-repeat: no-repeat;
    background-size: cover;">
    <?php
    require "../html/header.php";
    ?>
    <div class="container">
        <section id="contacts">
            <div class="text-left">
                <h2>
                    Контакты
                </h2>
                 <strong> Телефон:</strong> <a href="tel:+74957065489"> +7(495)706-54-89</a> <br>
                <strong>E-mail:</strong><a href="mailto:lesinfo@lovel.ru"> lesinfo@lovel.ru</a> <br>
                <p>Адрес: 109431, Россия, г. Москва, ул. Привольная д.70, стр.1</p>
            </div>
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A563e4077d12089da11bb917429dc89e5922797ee638ddbe7f84cf696ae1ce721&amp;source=constructor" width="100%" height="652" frameborder="0">
            </iframe>
        </section>
    </div>

    <?php
    require "../html/footer.php"
    ?>
</body>

</html>