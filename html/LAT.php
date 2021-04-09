<?
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Оборудование LAT</title>
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
    <div class="container ">
        <section id="header">
            <div class="container text-justify">
                <div class="row">
                    <div class="col-lg-8 col-md-7 left-text pl-0">
                        <h2>
                            LAT Maschinen- und Antriebstechnik GmbH & Co.KG
                        </h2>
                        <p>
                            Основным направлением деятельности компании, основанной в 1943 году, является барабанный двигатель,
                            который десятилетиями использовался во многих областях конвейерной техники с постоянно растущим успехом. Мы производим изделия диаметром
                            от 60 до 800 мм как серийно, так и на заказ. Благодаря компактной конструкции
                            и хорошей адаптации к индивидуальным условиям на объекте, он всегда находит новые и дополнительные области применения.
                        </p>
                        <p>

                            Это сделало LAT одной из ведущих компаний в области машиностроения и приводной техники.
                            Имея множество компетентных партнеров и агентств в стране и за рубежом,
                            мы предлагаем продукты и услуги для клиентов по всему миру.
                        </p>
                        <p>

                            LAT также производит нашу всемирно известную сервогидравлическую высокоскоростную пластину ELC852.
                            Это узкоспециализированный нишевый продукт для индустрии полого стекла для транспортировки чувствительных стеклянных бутылок.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-5 pr-0">
                        <img src="/img/companiesLogo/himmelmaschinen.svg" class="img-fluid mr-t15 " alt="">
                        <?php
                        require "../html/contact-box.php";
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <section id="motors ">
            <div class="row text-left">
                <div class="col-lg-4 col-md-6">
                    <div class="item ">
                        <div href="" class="itemLinks ">
                            <img src="/img/motors/Trommelmotoren.png" class="img-fluid" alt="">
                            <h4>
                                Барабанные двигатели
                            </h4>
                            <div class="bgout ">
                                <div class="bgcolor ml-5" style="background-color:#CE121E">
                                </div>
                            </div>
                            <a href="/html/Antriebstechnik-Motors/Trommelmotoren.php" class="BUTTON_ANK">Узнать больше</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  ">
                    <div class="item ">
                        <div class="itemLinks">
                            <img src="/img/Lat/csm_Einschieber.png" class="img-fluid" alt="">
                            <h4>
                                Укладчики для стекольной промышленности
                            </h4>
                            <div class="bgout ">
                                <div class="bgcolor ml-5" style="background-color:#CE121E">
                                </div>
                            </div>
                            <a href="/html/LAT/Einschieber.php" class="BUTTON_ANK">Узнать больше</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="item ">
                        <div href="" class="itemLinks ">
                            <img src="/img/Lat/csm_Umlenkecke_.png" class="img-fluid" alt="">
                            <h4>
                                Поворотные устройства
                            </h4>
                            <div class="bgout ">
                                <div class="bgcolor ml-5" style="background-color:#CE121E">
                                </div>
                            </div>
                            <a href="/html/LAT/Umlenkecke.php" class="BUTTON_ANK">Узнать больше</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <?php
    require "../html/footer.php"
    ?>
</body>

</html>