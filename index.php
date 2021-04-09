<?
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Компания Ловел - официальный представитель группы компаний Himmel на территории России и странах СНГ.">
    <title>Himmel Russia</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="icon" href="/img/2018_himmel_logo (1).svg">
    <link rel="stylesheet" href="/dist/css/lightbox.css">
</head>

<body>
    <?php
    require "./html/header.php";
    ?>
    <!-- <div class="container"> -->
    <!-- Carousel section -->
    <section id="carousel">
        <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel" data-interval="3000" data-keyboard="true" data-pause="hover" data-touch="true">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/img-carousel/sky.jpg" class="d-block d-block1 w-100 " alt="...">
                    <div class="carousel-caption d-block d-block1">
                        <h5>
                            Himmel <sup>®</sup> Technologies
                        </h5>
                        <h1>
                            Стремление к успеху
                        </h1>
                        <p>Компания Himmel <sup>®</sup> Technologies сочитает в себе многолетний опыт, передовые технологии и безупречное качество. </p>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="/img/img-carousel/adjustment.jpg" class="d-block d-block1 w-100" alt="...">
                    <div class="carousel-caption d-block d-block1">
                        <h5>
                            Himmel <sup>®</sup> Technologies
                        </h5>
                        <h1>Высокое качество</h1>
                        <p>В производстве задействованы компетентные инженеры и современные производственные технологии.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/img/img-carousel/production.jpg" class="d-block d-block1 w-100" alt="...">
                    <div class="carousel-caption  d-block d-block1 ">
                        <h5>Himmel <sup>®</sup> Technologies</h5>
                        <h1>Эффективность</h1>
                        <p>Высокая конкуренция способствует развитию и качествую выпускаемой продукции.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/img/img-carousel/welding.jpg" class="d-block d-block1 w-100" alt="...">
                    <div class="carousel-caption d-block d-block1 ">
                        <h5>Himmel <sup>®</sup> Technologies</h5>
                        <h1>Гибкость</h1>
                        <p>Широкий спектр компетенций и клиентоориентированность.</p>
                    </div>
                </div>
                <!-- <div class="carousel-item">
                    <img src="/img/img-carousel/wires.jpg" class="d-block d-block1 w-100" alt="...">
                    <div class="carousel-caption  d-block d-block1">
                    <h5>Himmel <sup>®</sup> Technologies</h5>
                        <h1>Гибкость</h1>
                        <p>Широкий спектр компетенций и клиентоориентированность.</p>
                    </div>
                </div> -->
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
    </section>
    <!-- about himmel section -->
    <section id="about-company">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="header-about-company">
                        <h2 class="m-0">
                            Группа компаний Himmel Technologies
                        </h2>
                        <div class="about-company-text">
                            <p>Группа компаний Himmel - семейная компания с давними традициями. Последовательность - один из важнейших принципов.
                                Холдинг растет самостоятельно и остается экономически независимыми. </p>
                            <p>
                                Компании холдинга HIMMEL® technologies живут и работают по схожим принципам.
                                Это также вневременность, традиции и ремесло.</p>
                            <p>HIMMEL® technologies полагается на устойчивый успех, характеризующийся обширным
                                ноу-хау и высокой квалификацией сотрудников всех компаний холдинга,
                                Группа компаний HIMMEL® technologies также ценит и поддерживает личные отношения с клиентами.</p>
                            <p>Пути принятия решений в компаниях намеренно сокращены, чтобы предложить клиентам максимальную гибкость.
                                Подход, ориентированный на клиента и обслуживание,
                                также находит свое внутреннее отражение. Во всем, что мы делаем, мы руководствуемся справедливостью,
                                умеренностью и доверием.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img class=" img-mr-t15 img-fluid" src="/img/factory.jpg" alt="himmel-factory">
                </div>
            </div>
        </div>
    </section>
    <section id="lovel">
        <div class="container pb-3">
            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <a href="https://lovel.ru/tag/himmel/" target="_blank" rel="noopener noreferrer"> <img class="lovel-img" src="/img/lovel_vector.svg" alt="lovel"></a>
                    <h3>Официальный представитель <br> Himmel Technologies</h3>
                    <a href="/img/Sertificate Himmel.jpg" data-lightbox="test"><img class="img-fluid" src="/img/Sertificate Himmel.jpg" alt="" srcset=""></a>

                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="header-about-company">
                        <h2>
                            ООО "Интер-Ловел"
                        </h2>
                        <div class="about-company-text">
                            <p>Интер-Ловел работает на Российском рынке и рынках стран Евразийского Экономического Союза с 2007 года, представляя немецкую фирму <a class="green-text" href="http://www.hartmannhandelsgesellschaft.de" _blank target="_blank"> «Hartmann Handelsgesellschaft mbH»</a>,
                                которая занимается поставками промышленного оборудования, являясь официальным представителем и партнером HIMMEL Technologies Group.
                                Начиная с 2018 года, ООО "Интер-Ловел" является экслюзивным представителем немецкой компании и HIMMEL Technologies Group на территории России и стран Евразийского экономического союза. </p>
                            <strong>Основные преимущества сотрудничества с нами:</strong>
                            <ul style="text-align: justify;">
                                <li>Гарантия «чистоты» сделок с соблюдением законодательства Российской Федерации, с предоставлением необходимого пакета документов;</li>
                                <li>Оперативность поставок из Европы в минимальные сроки;</li>
                                <li>Квалифицированный подбор оборудования, запасных частей и расходных материалов высокого качества по оптимально низким ценам нашими ведущими специалистами, позволит снизить затраты в отделе снабжения вашего предприятия;</li>
                                <li>Отсутствие ограничений по минимальному объёму и стоимости заказа;</li>
                                <li>Наличие на складе в России широкого ассортимента запасных частей и расходных материалов;</li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- companies -->
    <section id="companies">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h3>
                        HIMMEL <sup>®</sup> TECHNOLOGIES - Состав компаний, представленных в России
                    </h3>
                    <p>
                        На сегодняшний день, из 8 компаний холдинга HIMMEL <sup>®</sup> TECHNOLOGIES, официально в Российской Федерации с странах СНГ представлены 2 фирмы: Antriebstechnik и LAT Maschinen- und Antriebstechnik.
                    </p>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <a href="/html/ANTRIEBSTECHNIK.php" class="itemLinks">
                            <img src="/img/companiesLogo/himmelantrieblogo.svg" class="img-fluid" alt="">
                            <h4 class="name">
                                HIMMEL ANTRIEBSTECHNIK<br>
                                GMBH &amp; CO. KG<br> <br> <br>
                            </h4>
                            <div class="bgout">
                                <div class="bgcolor" style="background-color:#FEDE43">
                                </div>
                            </div>
                            <p>
                                HIMMEL Antriebstechnik специализируется в области производства двигателей, конструкции редукторов и автоматизации.
                            </p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item ">
                        <a href="/html/LAT.php" class="itemLinks">
                            <img src="/img/companiesLogo/himmelmaschinen.svg" class="img-fluid" alt="">
                            <h4 class="name">
                                LAT MASCHINEN- <br> UND ANTRIEBSTECHNIK <br>
                                GMBH &amp; CO. KG<br><br>
                            </h4>
                            <div class="bgout">
                                <div class="bgcolor" style="background-color:#CE121E">
                                </div>
                            </div>
                            <p>
                            LAT Maschinen- und Antriebstechnik специализируется на разработке и производстве барабанных двигателей, а также на оборудовании для производства стеклотары.
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Service -->
    <section id="service" style="background-color: rgb(0, 43, 85);">
        <div class="container-fluid pl-0">
            <div class="row">
                <div class="col-lg-5 col-md-5 pr-0 " style="background-color: rgb(0, 43, 85);">
                    <img src="/img/service.jpg" class="img-fluid">
                </div>
                <div class=" col-lg-7 col-md-7 text-left " style=" background-color: rgb(0, 43, 85);">

                    <h2 class="my-5">
                        Сервисное обслуживание <br> двигателей Himmel
                    </h2>
                    <div class="text-service  ">
                        <p class="text-white text-justify py-4">
                            В дополнение к продуктам компании, Himmel Technologies предоставляет сервис и постгарантийное обслуживание, что является еще одним важным элементом всей группы компаний Himmel Technologies.
                            Совместно со специалистами российского представительства компании Ловел, клиент получает немецкое качество обслуживания в кратчайшие сроки. Если у вас есть какие-либо вопросы о продуктах Himmel моторного оборудования других производителей,
                            компания Ловел совместно с компанией Himmel сделают все возможное для обеспечения бесперебойной работы вашего производства.

                        </p>
                    </div>
                    <div class="row py-3">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6 p-2">
                            <img src="/img/service/Information.svg" class="d-block service-img" alt="">
                            <span class="description">
                                Консультации
                            </span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6 p-2">
                            <img src="/img/service/Demontage.svg" class="d-block service-img" alt="">
                            <span class="description">
                                Монтаж и демонтаж
                            </span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6 p-2">
                            <img src="/img/service/Anschluss.svg" class="d-block service-img" alt="">
                            <span class="description mb-3">
                                Ввод в эксплуатацию
                            </span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6 p-2">
                            <img src="/img/service/Ersatzteile.svg" class="d-block service-img" alt="">
                            <span class="description mb-3">
                                Быстрая поставка <br> запасных частей
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Information of events -->
    <section id="information">
        <div class="container">
            <h2 class="text-left">
                Актуальная информация
            </h2>
            <p class="text-left">
                Здесь вы найдете актуальную информацию о совместных участиях Himmel и Ловел в предстоящих выставках и семинарах.
            </p>
            <div class="col-lg-6">

                <div class="item mt-3">
                    <a href="https://www.lesdrevmash-expo.ru/" target="_blank" rel="noopener noreferrer">
                        <!-- <a href="" class="itemLinks"> -->
                        <div class="firstEvent">
                            <div class="row">
                                <div class="col-4 ">
                                    <img src="/img/lesdrevmash.png" width="80px" class="pr-0" alt="">
                                </div>
                                <div class="col-8 ">
                                    <h4 class="name ">
                                        Лесдревмаш-2020
                                        <h5 class="nameDate text-center">
                                            19-22 октября
                                        </h5>
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <p>
                            Компания Ловел, совместно с Himmel и другими немецкими партнерами собирается принять участие в выставке Лесдревмаш-2020. <br>
                            Будем рады видеть Вас на стенде нашей компании.
                        </p>
                    </a> <!-- </a> -->
                </div>
            </div>
        </div>
    </section>
    <!-- </div> -->
    <?php
    require "./html/footer.php"
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/js/js.js"></script>


</body>

</html>