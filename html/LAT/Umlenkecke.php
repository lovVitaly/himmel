<?
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Поворотные устройства для стекольной промышленности</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="icon" href="/img/2018_himmel_logo (1).svg">
    <link rel="stylesheet" href="/dist/css/lightbox.css">
</head>

<body>
    <?php
    require "../header.php";
    ?>
    <div class="container text-justify ">
        <img src="/img/Lat/Umlenkecke/csm_IMG_5953_4f6c05445a.jpg" class="img-fluid mt-3  " alt="gear">
        <div class="row mt-2">
            <div class="col-lg-8">
                <h2 class="text-left">
                    Поворотные устройства для стекольной промышленности
                </h2>
                <p>
                    HIMMEL®-Umlenkecke UE 853 - M был специально разработан для транспортировки стеклянной тары в производстве полого стекла.
                    При производстве он служит для отвода стеклянных изделий с конвейерной ленты формовочной машины на леровую ленту.
                    Эти полосы обычно расположены под углом 90 ° друг к другу. Прочная цепная конструкция уголка дефлектора
                    рассчитана на низкие и средние скорости производства.
                </p>
                <div class="embed-responsive embed-responsive-16by9 mb-3">
                    <iframe class="embed-responsive-item" src="/video/IMG_5274.mp4" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-4  ">
                <?php
                require "../contact-box.php";
                ?>
                <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel" data-interval="3500" data-keyboard="true" data-pause="hover" data-touch="true">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/img/Lat/Umlenkecke-carousel/1.png" class="d-block w-100 img-fluid" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/img/Lat/Umlenkecke-carousel/2.jpg" class="d-block w-100 img-fluid" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <nav>
            <div class="nav nav-tabs text-center" id="nav-tab" role="tablist">
                <a class="nav-link text-left mx-auto" id="nav-advantages-tab" data-toggle="tab" href="#nav-advantages" role="tab" aria-controls="advantages" aria-selected="false">Преимущества и область применения</a>
                <a class="nav-link active text-center mx-auto " id="techical-tab" data-toggle="tab" href="#techical" role="tab" aria-controls="techical" aria-selected="true">Технические данные и особенности </a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active cliked " id="techical" role="tabpanel" aria-labelledby="techical-tab">
                <h4>
                    Характеристики толкателя
                </h4>
                <ul>
                    <li>Количество звеньев цепи: 120;</li>
                    <li>Расстояние между звеньями: 3/4 дюйма;</li>
                    <li>Возможное деление пальцев: 12, 15, 20, 24;</li>
                    <li>Размеры: 980 мм x 1180 мм;</li>
                    <li>Вес: 98кг.</li>
                </ul>
            </div>
            <div class="tab-pane fade text-left" id="nav-advantages" role="tabpanel" aria-labelledby="nav-advantages-tab">
                <div class="row">
                    <div class="col-lg-6">
                        <h4>
                            Преимущества
                        </h4>
                        <ul>
                            <li>
                                Быстрая смена держателей бутылок ;</li>
                            <li>Защита от перегрузки через фрикционную муфту;</li>
                            <li>Регулируемое распределение смазочного масла;</li>
                            <li>Совместим со многими существующими приводными системами;</li>
                            <li>Легкая регулировка натяжения цепи.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <h4>
                            Область применения
                        </h4>
                        <ul>
                            <li>
                                Производство полого стекла;</li>
                            <li>Производство бутылок;</li>
                            <li>Фармацевтическое стекло.</li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <?php
    require "../footer.php"
    ?>
</body>

</html>