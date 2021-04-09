<?
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Управление и автоматизация</title>
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
        <img src="/img/Automatisierungstechnik/csm_Himmel-43_596f42190b.jpg" class="img-fluid mt-3  " alt="gear">
        <div class="row mt-2">
            <div class="col-lg-8">
                <h2 class="text-left">
                    Управление и автоматизация
                </h2>
                <p>
                    Наше распределительное устройство и услуги изготавливаются индивидуально.
                    Как поставщик технических услуг,
                    мы проектируем решения автоматизации для ваших систем именно так, как они вам нужны.
                </p>
                <p>
                    Опыт наших специалистов в области технологий автоматизации гарантирует оптимальный процесс планирования. С учетом ваших
                    требований и наших технических знаний мы разработаем ваш индивидуальный проект
                    и сопровождаем его от планирования проекта до ввода в эксплуатацию и далее.
                </p>
                <p>Основываясь на своих специальных знаниях и многолетнем опыте, наши дизайнеры целенаправленно разрабатывают подходящее аппаратное решение.
                    Конечно, мы учитываем действующие стандарты (IEC, VDE), это создает надежную основу для вашего распределительного устройства.
                </p>
                <p>Реализуем ваш проект от небольших панелей управления до сложных распределительных устройств. Независимо от того, идет ли речь
                    об элементах управления насосами, шкафах управления из нержавеющей стали
                    для пищевой промышленности или системах шкафов управления для металлургических заводов.</p>
                <p>Кроме того, вы извлекаете выгоду из нашего опыта
                    в реализации интеллектуально управляемых системных процессов и оптимальных процессов с использованием эффективных решений автоматизации. </p>
                <p>Кроме того, мы обладаем обширными знаниями в области параметризации различных контроллеров приводов. Независимо от того, применяются ли
                    простые преобразователи частоты или сложные сервоприводы. Здесь мы особенно полагаемся на таких производителей, как Siemens, SEW или Danfoss.</p>
                <p>Конечно, мы используем общие системы шин (Profinet, Ethernet IP, Profibus) для сетевых систем. Мы достигаем структурированного
                    обзора системы с четкими элементами управления и возможностями диагностики за счет использования различных систем визуализации.</p>

            </div>
            <div class="col-lg-4">
                <?php
                require "../contact-box.php";
                ?>
                <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel" data-interval="3500" data-keyboard="true" data-pause="hover" data-touch="true">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/img/Automatisierungstechnik-carousel/1.jpg" class="d-block w-100 img-fluid" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/img/Automatisierungstechnik-carousel/2.jpg" class="d-block w-100 img-fluid" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/img/Automatisierungstechnik-carousel/3.jpg" class="d-block w-100 img-fluid" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/img/Automatisierungstechnik-carousel/4.jpg" class="d-block w-100 img-fluid" alt="...">
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
                <a class="nav-link active text-center mx-auto " id="techical-tab" data-toggle="tab" href="#techical" role="tab" aria-controls="techical" aria-selected="true">Технические характеристики и особенности </a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active cliked" id="techical" role="tabpanel" aria-labelledby="techical-tab">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h4>
                            Разработка:
                        </h4>
                        <ul>
                            <li>
                                Индивидуальное планирование концепций автоматизации;</li>
                            <li>
                                Создание принципиальных схем с помощью Eplan P8;
                            </li>
                            <li>
                                Рассмотрение технических условий заказчика.
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h4>Автоматизация:</h4>
                        <ul>
                            <li>Единичное и серийное производство в области низкого напряжения;</li>
                            <li>Высочайшее качество благодаря поддержке нашего полностью автоматического обрабатывающего центра.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h4>Программирование и визуализация управления системой:</h4>
                        <ul>
                            <li>
                                Подбор средств автоматизации исходя из ваших требований;
                            </li>
                            <li>
                                Детальное согласование интерфейсов;

                            </li>
                            <li>
                                Программирование элементов управления Siemens S7 на портале TIA;
                            </li>
                            <li>
                                Конфигурация панельных визуализаций (TIA) или решений на базе ПК (WinCC);
                            </li>
                            <li>Настройка параметров удаленной связи для поддержки и диагностики системы;</li>
                            <li>
                                Ввод в эксплуатацию системы управления.
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h4>
                            Электро монтаж и ввод в эксплуатацию:</h4>
                        <h5>
                            Полный комплекс услуг также включает электромонтаж,
                            Пусконаладочные работы и итоговое обучение ваших сотрудников.
                        </h5>
                        <ul>
                            <li>
                                Расширение кабельных трасс;</li>
                            <li>Монтаж распределительного устройства;</li>
                            <li>Прокладка и подключение приводных и управляющих линий, а также линий передачи данных;</li>
                            <li>Предварительная проверка датчиков и исполнительных механизмов;</li>
                            <li>Окончательный ввод в эксплуатацию системы управления.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade text-left" id="nav-advantages" role="tabpanel" aria-labelledby="nav-advantages-tab">
                <div class="row">
                    <div class="col-lg-6">
                        <h4>
                            Преимущества
                        </h4>
                        <ul>
                            <li>
                                Прочная конструкция;</li>
                            <li>Компактный дизайн;</li>
                            <li>Высокая эффективность;</li>
                            <li>Высокая точность и плавность хода;</li>
                            <li>Низкий уровень шума;</li>
                            <li>Низкие затраты на обслуживание;</li>
                            <li>Высокая точность и плавность хода;</li>
                            <li>Высокие крутящие моменты, а также осевые и радиальные силы;</li>
                            <li>Модульная система;</li>
                            <li>Внедрение специальных решений под клиента;</li>
                            <li>Быстрые сроки доставки.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <h4>
                            Область применения
                        </h4>
                        <ul>
                            <li>Кондиционеры;</li>
                            <li>Охлаждение технической воды;</li>
                            <li>Вентиляторы.</li>
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