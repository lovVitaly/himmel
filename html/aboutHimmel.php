<?
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О компании Himmel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="icon" href="/img/2018_himmel_logo (1).svg">
    <link rel="stylesheet" href="/dist/css/lightbox.css">
</head>

<body>
    <?php
    require "../html/header.php";
    ?>
    <div class="container">
        <section id="commonInfo">
            <h2 class="text-left">Himmel Technologies </h2>
            <p class="text-justify">
                Группа компаний <a href="https://www.himmelinfo.de/" class="text-primary" target="_blank" rel="noopener noreferrer"> Himmel Technologies</a> была основана более полувека назад, в далеком 1947 году и является
                семейной компанией в 3-м поколении. Холдинг Himmel является активно развивающимся предприятием, который активно выходит на новые рынки по всему миру.
                Группа компаний Himmel Technologies состоит из 8 фирм из области машиностроения и приводной техники, технологий управления и регулирования, строительства заводов, перекачки сточных вод, технологического проектирования и переработки.
                На сегодняшний день, компания Ловел является представителем двух фирм холдинга Himmel Technologies: <a href="/html/ANTRIEBSTECHNIK.php" class="text-primary"  rel="noopener noreferrer">HIMMEL ANTRIEBSTECHNIK
                    GMBH &amp; CO. KG </a> и <a href="/html/LAT.php" class="text-primary"  rel="noopener noreferrer">LAT MASCHINEN UND ANTRIEBSTECHNIK
                    GMBH &amp; CO. KG</a>.
            </p>
        </section>
        <section id="contacts">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="text-left">
                        Контакты
                    </h2>
                    <div class="text-left">
                        <strong> Телефон:</strong> <a href="tel:+74957065489"> +49 (0) 2542 910 0</a> <br>
                        <strong>E-mail:</strong><a href="mailto:lesinfo@lovel.ru"> info@himmelinfo.de</a> <br>
                        <p>Адрес: HIMMEL Antriebstechnik GmbH & Co. KG <br>
                            Venneweg 28 <br>
                            48712 Gescher <br>
                            Deutschland</p>

                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="/img/contacts.jpg" class="img-fluid rounded mx-auto img-mr-t15" style="height: 450px;" alt="">
                </div>
            </div>
            <br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2459.3570474743688!2d7.009770916132198!3d51.945680179709534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b85c8c832cffad%3A0x741b84681a9c3ed1!2sHIMMEL%20Antriebstechnik%20GmbH%20%26%20Co.KG!5e0!3m2!1sru!2sru!4v1599734387084!5m2!1sru!2sru" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
            </iframe>
    </div>
    </section>
    <?php
    require "../html/footer.php"
    ?>
</body>

</html>