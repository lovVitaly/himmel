<?
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Моторы Himmel Antriebstechnik</title>
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
                            HIMMEL Antriebstechnik GmbH & Co.KG
                        </h2>
                        <p>
                            HIMMEL Antriebstechnik - специалист в области производства двигателей, конструкции редукторов и автоматизации.
                            Сфера приводных технологий представляет собой одно из основных направлений деятельности компании и является важным звеном внутри группы компаний HIMMEL.
                            Плоские двигатели мощностью до 123 кВт и редукторы с крутящим моментом до 28 000 Н/м подтверждают наши особые характеристики.
                            Еще одна область деятельности нашей компании, сертифицированной по стандарту DIN EN ISO 9001,
                            - это автоматизация. Наш опыт в области электротехники и управления позволяет нам разрабатывать и производить наиболее экономичное решение для ваших систем управления и регулирования. С нашим инженерным отделом мы планируем, контролируем и реализуем малые и большие проекты с учетом индивидуальных требований наших национальных и международных клиентов.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-5 pr-0">
                        <img src="/img/companiesLogo/himmelantrieblogo.svg" class="img-fluid mr-t15 " alt="">
                        <?php
                        require "../html/contact-box.php";
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <section id="motors ">
            <div class="row text-left">
                <div class="col-lg-4 col-md-6  ">
                    <div class="item ">
                        <div class="itemLinks">
                            <img src="/img/motors/Getriebemotoren.png" class="img-fluid" alt="">
                            <h4>
                                Мотор-редукторы общего назначения
                            </h4>
                            <div class="bgout ">
                                <div class="bgcolor ml-5" style="background-color:#FEDE43">
                                </div>
                            </div>
                            <a href="/html/Antriebstechnik-Motors/motors.php" class="BUTTON_ANK">Узнать больше</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item ">
                        <div href="" class="itemLinks ">
                            <img src="/img/motors/Trommelmotoren.png" class="img-fluid" alt="">
                            <h4>
                                Барабанные двигатели
                            </h4>
                            <div class="bgout ">
                                <div class="bgcolor ml-5" style="background-color:#FEDE43">
                                </div>
                            </div>
                            <a href="/html/Antriebstechnik-Motors/Trommelmotoren.php" class="BUTTON_ANK">Узнать больше</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item ">
                        <div href="" class="itemLinks ">
                            <img src="/img/motors/Flachmotoren.png" class="img-fluid" alt="">
                            <h4>
                                Плоские двигатели
                            </h4>
                            <div class="bgout ">
                                <div class="bgcolor ml-5" style="background-color:#FEDE43">
                                </div>
                            </div>
                            <a href="/html/Antriebstechnik-Motors/Flachmotoren.php" class="BUTTON_ANK">Узнать больше</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item ">
                        <div href="" class="itemLinks ">
                            <img src="/img/motors/Stirnradgetriebmotoren.png" class="img-fluid" alt="">
                            <h4>
                                Цилиндрические мотор-редукторы
                            </h4>
                            <div class="bgout ">
                                <div class="bgcolor ml-5" style="background-color:#FEDE43">
                                </div>
                            </div>
                            <a href="/html/Antriebstechnik-Motors/Stirnradgetriebemotoren.php" class="BUTTON_ANK">Узнать больше</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item ">
                        <div href="" class="itemLinks ">
                            <img src="/img/motors/Schneckengetriebemotoren.png" class="img-fluid" alt="">
                            <h4>
                                Червячные мотор-редукторы
                            </h4>
                            <div class="bgout ">
                                <div class="bgcolor ml-5" style="background-color:#FEDE43">
                                </div>
                            </div>
                            <a href="/html/Antriebstechnik-Motors/Schneckengetriebemotoren.php" class="BUTTON_ANK">Узнать больше</a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item ">
                        <div href="" class="itemLinks ">
                            <img src="/img/motors/Flachgetriebemotoren.png" class="img-fluid" alt="">
                            <h4>
                                Мотор-редукторы со смещением
                            </h4>
                            <div class="bgout ">
                                <div class="bgcolor ml-5" style="background-color:#FEDE43">
                                </div>
                            </div>
                            <a href="/html/Antriebstechnik-Motors/Flachgetriebemotoren.php" class="BUTTON_ANK">Узнать больше</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item ">
                        <div href="" class="itemLinks ">
                            <img src="/img/motors/Kegelradgetriebemotoren.png" class="img-fluid" alt="">
                            <h4>
                                Конические мотор-редукторы
                            </h4>
                            <div class="bgout ">
                                <div class="bgcolor ml-5" style="background-color:#FEDE43">
                                </div>
                            </div>
                            <a href="/html/Antriebstechnik-Motors/Kegelradgetriebemotoren.php" class="BUTTON_ANK">Узнать больше</a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="item ">
                        <div href="" class="itemLinks ">
                            <img src="/img/motors/Elektrohängebahn-Getriebemotoren.png" class="img-fluid" alt="">
                            <h4>
                                Мотор-редукторы для монорельсовых систем
                            </h4>
                            <div class="bgout ">
                                <div class="bgcolor ml-5" style="background-color:#FEDE43">
                                </div>
                            </div>
                            <a href="/html/Antriebstechnik-Motors/Elektrohangebahn.php" class="BUTTON_ANK">Узнать больше</a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item ">
                        <div href="" class="itemLinks ">
                            <img src="/img/motors/Kühlturmgetriebemotoren.png" class="img-fluid" alt="">
                            <h4>
                                Мотор-редукторы для градирен
                            </h4>
                            <div class="bgout ">
                                <div class="bgcolor ml-5" style="background-color:#FEDE43">
                                </div>
                            </div>
                            <a href="/html/Antriebstechnik-Motors/Kuhlturmgetriebe.php" class="BUTTON_ANK">Узнать больше</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item ">
                        <div href="" class="itemLinks ">
                            <img src="/img/motors/Rührwerksgetriebemotoren.png" class="img-fluid" alt="">
                            <h4>
                                Мотор-редукторы для оснащения мешалок
                            </h4>
                            <div class="bgout ">
                                <div class="bgcolor ml-5" style="background-color:#FEDE43">
                                </div>
                            </div>
                            <a href="/html/Antriebstechnik-Motors/Ruhrwerksgetriebe.php" class="BUTTON_ANK">Узнать больше</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item ">
                        <div href="" class="itemLinks ">
                            <img src="/img/motors/Steuerungs-und Automatisierungstechnik.png" class="img-fluid" alt="">
                            <h4>
                                Управление и автоматизация
                            </h4>
                            <div class="bgout ">
                                <div class="bgcolor ml-5" style="background-color:#FEDE43">
                                </div>
                            </div>
                            <a href="/html/Antriebstechnik-Motors/Automatisierungstechnik.php" class="BUTTON_ANK">Узнать больше</a>
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