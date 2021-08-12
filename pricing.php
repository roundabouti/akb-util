<?php /* Template Name: pricing */ ?>

<?php get_header(); ?>

<title>Цены, по которым покупаем бу аккумуляторы. Калькулятор цен. - ООО Стандарт</title>
<meta name="keywords" content="аккумулятор, акб, стандарт, калькулятор, утилизация, цена" />
<meta name="description" content="Узнайте, сколько вы получите за акб и свинцовый лом.  Ниже с помощью калькулятора можно узнать наши ориентировочные закупочные цены" />

 <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Цена"         
      }]
    }
    </script>

</head>
<body onload='calculateKgPrice()'>


<div class="container bg-primary-custom p-0">

    <div class="container h-100 py-0">
        <div class="row">
            <div class="col-xl-5  justify-content-center align-self-center">
                <div class="row py-2">
                    <div class="col-sm-2 d-flex align-items-center">
                        <a href="https://akb-util.ru/">
                            <img class="mx-auto d-none d-sm-block"  src="/images/standart-ooo-logo.svg" width="45"
                                 height="45">
                        </a>
                    </div>
                    <div class="col-xl-10 col-lg-5 col-sm-10 align-items-left">
                        <div class="row pt-0 align-items-center justify-content-center">
                            <div class="col-xl-12 font-weight-bold d-none d-sm-block">ООО Стандарт</div>
                            <div class="col-xl-12 small m-0 d-none d-sm-block"> Прием и утилизация аккумуляторов и
                                свинцового лома
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block d-xl-none text-center">
                        <div class="row pt-2 align-items-center justify-content-center">
                            <div class="col-12 font-weight-bold">
                                <div class="font-weight-bold mb-0 mt-2"><a href="tel:74951910793" class="roistatphone">+7 (495) 191-07-93</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 py-2 d-none d-xl-block justify-content-center align-self-center text-center">
                <div class="font-weight-bold">Москва и МО</div>
            </div>
            <div class="col-xl-2 py-2 d-none d-xl-block justify-content-center align-self-center text-center">
                <div class="text-danger-custom"><u>5 пунктов приема</u></div>
            </div>
            <div class="col-xl-3 d-none d-xl-block justify-content-center align-self-center text-center">
                <div class="row">
                    <div class="col-2 align-items-center pl-3 pr-0">
                        <img class="mx-auto img-fluid rounded-circle "  src="/images/phone-logo.svg">
                    </div>
                    <div class="col-xl-10 d-none d-xl-block justify-content-center align-self-center pl-2">
                          <div class="font-weight-bold"><a href="tel:74951910793" class="roistatphone">+7 (495) 191-07-93</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<header class="sticky-top">
    <nav class="">
        <div class="container bg-primary-custom  p-0 ">

            <div class="navbar navbar-expand-lg navbar-dark bg-dark-custom rounded border m-0">

                <a class="navbar-brand d-block d-sm-none" href="/">

                    <img class="mx-auto "  src="/images/standart-ooo-logo.svg" width="40" height="40"> &nbsp;ООО Стандарт
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse align-items-center justify-content-center" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                            <a class="nav-link uline" href="https://akb-util.ru/">ГЛАВНАЯ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link uline" href="/retail">ЧАСТНЫМ&nbsp;ЛИЦАМ</a>
                        </li>
                      <li class="nav-item dropdown">
                            	
                            	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ОРГАНИЗАЦИЯМ
        </a>
                       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                   <a class="dropdown-item" href="https://akb-util.ru/business/">Наши преимущества</a>     	
          <a class="dropdown-item" href="https://akb-util.ru/services/">Услуги</a>
    <a class="dropdown-item" href="https://akb-util.ru/info/">Юридическая информация</a>
    <a class="dropdown-item" href="https://akb-util.ru/faq/">Вопросы и ответы</a>
    
    
        </div>     	

</li>
                        <li class="nav-item ">
                            <a class="nav-link uline" href="/posrednikam">ПОСРЕДНИКАМ</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link uline">ЦЕНА<span
                                class="sr-only">(текущая страница)</span></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link uline" href="/risks">РИСКИ</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link uline" href="/contacts">КОНТАКТЫ</a>
                        </li>

                    </ul>
                </div>


            </div>
        </div>
    </nav>
</header>


<main role="main">
    <div class="container bg-primary-custom p-0 scroll">


        <div class="row px-2">
            <div class="col-12 ">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-3 my-0">
                        <li class="breadcrumb-item"><a href="https://akb-util.ru/">Главная</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Цена</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div data-aos="zoom-in-down" data-aos-duration="300">
            <div class="row w-100 ml-0 item">
                <div class="col-lg-12 pt-0 px-4 pb-0 pt-0 ">

                    <div class="row h-100 justify-content-center bg-white shadow panel p-0 m-0">
                        <div class="col-12">
                            <div class="row pb-0 align-items-center ">

                                <div class="col-xl-6 p-2 text-left">
                                    <h1 class="text-danger-custom p-3 mb-0">ЦЕНА ПРИЁМА И УТИЛИЗАЦИИ АККУМУЛЯТОРОВ</h1>
                                    <hr class="ml-3 my-0 p-0"/>
                                </div>
                                <div class="col-xl-6">

                                </div>
                            </div>
                            <div class="row pb-0 align-items-center ">

                                <div class="col-xl-5 px-4 pb-lg-3">
                                    <div class="row">
                                        <div class="col-xl-12"><b>ОТ ЧЕГО ЗАВИСИТ <br>СТОИМОСТЬ ПРИЕМА ЛОМА</b></div>

                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <hr class="red"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <p class="small pt-2">
                                                Для частных лиц приведены ориентировочные цены закупок на БУ
                                                аккумуляторы, в зависимости от ёмкости батареи, цены и типа вашего
                                                свинцового лома:
                                            </p>
                                        </div>


                                    </div>
                                    <div class="row   font-weight-bold">
                                        <div class="col">
                                            <div class="pl-0 pr-1">
                                                <ul class="red">
                                                    <li>от 45 до 75 Ач - 700 рублей</li>
                                                    <li>от 75 до 90 Ач - 850 рублей</li>
                                                    <li>от 90 до 180 Ач - 1100 рублей</li>
                                                    <li>от 180 до 225 Ач - 2300 рублей</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-12">
                                            <p class="small pt-2">
                                                Мы ценим наших постоянных клиентов и стараемся выстроить с ними
                                                долговременные отношения. Ниже с помощью <a href="#calculator">калькулятора</a> можно узнать наши ориентировочные закупочные цены
                                            </p>
                                        </div>


                                    </div>
                                    <div class="row   font-weight-bold">
                                        <div class="col">
                                            <div class="pl-0 pr-1">
                                               <!-- <ul class="red">
                                                    <li>до 399 кг - 48 руб/кг</li>
                                                    <li>от 400 кг - 49 руб/кг</li>
                                                    <li>от 1000 кг - 50 руб/кг</li>
                                                    <li>от 10000 кг - 51 руб/кг</li>
                                                </ul> -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <p class="small">
                                                Вывоз нашим транспортом производим от веса в 100 кг Наш автотранспорт
                                                выезжает каждый день.
                                            </p>
                                            <p class="small">
                                                В случае большого объема погрузочно-разгрузочных работ мы можем
                                                предоставить своих грузчиков, машину с манипулятором или автокран.
                                            </p>
                                            <p class="small">
                                                Все водители граждане РФ.
                                            </p>
                                        </div>


                                    </div>


                                </div>

                                <div class="col-xl-7 p-3 mb-auto">

                                    <div class="shape-outer-red sign-down m-auto align-items-center">
                                        <div class="text-white w-100 p-2">
                                            <p class="text-center mb-0"><b>СТОИМОСТЬ ЛОМА</b></p>

                                            <p class="text-center mb-0"><b>может существенно отличатся</b></p>

                                            <p class="text-center pb-2"><b>и зависит от многих факторов:</b></p>


                                        </div>
                                    </div>


                                    <div class="container ">
                                        <div class="row pt-lg-2 mx-sm-auto">
                                            <div class="col-lg-2  px-2"></div>

                                            <div class="col-lg-4 col-md-6 p-2 ">


                                                <div class="h-100 mx-auto embed-border border-gradient box-shadow-custom">


                                                    <div class="row h-100">
                                                        <div class="col-12 my-auto  text-center ">
                                                            <b>ВЕС ЛОМА</b>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>


                                            <div class="col-lg-4 col-md-6  p-2">
                                                <div class="h-100 mx-auto embed-border border-gradient box-shadow-custom">
                                                    <span class="align-middle"> </span>

                                                    <div class="row h-100">
                                                        <div class="col-12 my-auto  text-center">
                                                            <b>ТИП ЛОМА</b>
                                                            <p class="small mb-0"> (аккумулятор, ИБП,<br> кабельная
                                                                оболочка,<br> свинцовые грузики и т.д.)</p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>


                                            <div class="col-lg-2  p-0"></div>


                                        </div>
                                    </div>


                                    <div class="container">
                                        <div class="row pt-lg-2 mx-sm-auto">
                                            <div class="col-lg-4  col-md-6 p-2">

                                                <div class="h-100 mx-auto embed-border border-gradient box-shadow-custom">
                                                    <span class="align-middle"> </span>

                                                    <div class="row h-100">
                                                        <div class="col-12 my-auto  text-center">
                                                            <b>ТИП ДОСТАВКИ</b>
                                                            <p class="small mb-0"> ваша доставка<br> или забор
                                                                нашими<br> силами</p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>


                                            <div class="col-lg-4  col-md-6 p-2">
                                                <div class="h-100 mx-auto embed-border border-gradient box-shadow-custom">
                                                    <span class="align-middle"> </span>

                                                    <div class="row h-100">
                                                        <div class="col-12 my-auto  text-center">
                                                            <b>СПОСОБЫ ОПЛАТЫ</b>
                                                            <p class="small mb-0"> наличный,<br> безналичный
                                                                расчет,<br> с НДС
                                                                или без НДС</p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col-lg-4  col-md-6 p-2">
                                                <div class="h-100 mx-auto embed-border border-gradient box-shadow-custom">
                                                    <span class="align-middle"> </span>

                                                    <div class="row h-100">
                                                        <div class="col-12 my-auto  text-center">
                                                            <b>СТОИМОСТЬ</b>
                                                            <p class="small mb-0">утилизации</p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div data-aos="zoom-in-down" data-aos-duration="300">
            <div class="row w-100 ml-0 item">
                <div class="col-lg-12 p-4 pt-0 ">

                    <div class="row h-100 justify-content-center bg-white shadow panel p-0 m-0">
                        <div class="col-12">
                            <div class="row pb-0 align-items-center ">

                                <div class="col-xl-7 p-2 text-left">
                                    <p class="text-danger-custom p-3 mb-0" id="calculator">Калькулятор цен</p>
                                     <hr class="mx-3 my-0 p-0"/>
                                    <h2 class="text-danger-custom p-3 mb-0">Узнайте, сколько вы получите за акб и свинцовый лом</h2>
                                    <hr class="mx-3 my-0 p-0"/>
                                </div>
                                <div class="col-xl-5">

                                </div>
                            </div>

                            <div class="row pb-0 align-items-center ">
                                
                                <div class="col-xl-5 px-4 pb-lg-3">
                                    <div class="row">
                                        <div class="col-xl-12"><b>ПЛАТИМ ДО 105 руб/кг ЗА СВИНЦОВЫЙ ЛОМ <br>И ДО 61
                                            руб/кг ЗА АККУМУЛЯТОРЫ</b></div>

                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <hr class="red"/>
                                        </div>
                                    </div>


                                </div>


                                <div class="col-xl-7 p-3 mb-auto">


                                </div>

                            </div>


                            <div class="row pb-0 align-items-center ">

                                <div class="col-xl-1"></div>
                                <div class="col-xl-10">
                                    <form action="" id="usedBatteryPrice" onsubmit="return false;">
                                        <fieldset>


                                            <div class="row ">

                                                <div class="col-xl-3">

                                                    <div class="row">

                                                        <div class="col-12 p-2 text-center text-xl-right ">
                                                            <label class="font-weight-bold">МАТЕРИАЛ</label>

                                                        </div>
                                                    </div>


                                                </div>

                                                <div class="col-xl-9">
                                                    <div class="row px-0">


                                                        <div id="material" onchange="calculateKgPrice()"
                                                             class="col-md-12 my-auto text-center d-flex align-content-around flex-wrap justify-content-center justify-content-xl-start">

                                                            <div class="select-weight">
                                                                <input type="radio" name="material" id="full"
                                                                       value="full"
                                                                       onclick="calculateKgPrice()" checked="checked"/>
                                                                <label for="full">Автомобильные АКБ<br>с
                                                                    электролитом</label>
                                                            </div>

                                                            <div class="select-weight">
                                                                <input type="radio" name="material" id="empty"
                                                                       value="empty"
                                                                       onclick="calculateKgPrice()"/>
                                                                <label for="empty">Автомобильные АКБ<br>без
                                                                    электролита</label>
                                                            </div>

                                                            <div class="select-weight">
                                                                <input type="radio" name="material" id="cableCoating"
                                                                       value="cableCoating"
                                                                       onclick="calculateKgPrice()"/>
                                                                <label for="cableCoating">Свинцовая кабельная оболочка
                                                                    чистая
                                                                    (без битума)</label>
                                                            </div>

                                                            <div class="select-weight">

                                                                <input type="radio" name="material" id="dirtyCoating"
                                                                       value="dirtyCoating"
                                                                       onclick="calculateKgPrice()"/>
                                                                <label for="dirtyCoating">Свинцовая кабельная оболочка
                                                                    грязная</label>
                                                            </div>
                                                        </div>


                                                        <hr class="p-0"/>


                                                    </div>

                                                </div>


                                            </div>
                                            <hr class=" p-0"/>


                                            <div class="row ">

                                                <div class="col-xl-3">

                                                    <div class="row">

                                                        <div class="col-12 p-2 text-center text-xl-right ">
                                                            <label class="font-weight-bold">ВЕС ЛОМА</label>

                                                        </div>
                                                    </div>


                                                </div>

                                                <div class="col-xl-9">
                                                    <div class="row px-0">


                                                        <div id="weightClass" onchange="calculateKgPrice()"
                                                             class="col-md-12 my-auto text-center d-flex align-content-around flex-wrap justify-content-center justify-content-xl-start">

                                                            <div class="select-weight">
                                                                <input type="radio" name="weightClass" id="less399"
                                                                       value="less399"
                                                                       onclick="calculateKgPrice()" checked="checked"/>
                                                                <label for="less399">до 399 кг.</label>
                                                            </div>

                                                            <div class="select-weight">
                                                                <input type="radio" name="weightClass" id="more400"
                                                                       value="more400"
                                                                       onclick="calculateKgPrice()"/>
                                                                <label for="more400">от 400 кг.</label>
                                                            </div>


                                                            <div class="select-weight">
                                                                <input type="radio" name="weightClass" id="more1000"
                                                                       value="more1000"
                                                                       onclick="calculateKgPrice()"/>
                                                                <label for="more1000">от 1 тонны</label>
                                                            </div>

                                                            <div class="select-weight">

                                                                <input type="radio" name="weightClass" id="more10000"
                                                                       value="more10000" onclick="calculateKgPrice()"/>
                                                                <label for="more10000">от 10 тонн</label>
                                                            </div>
                                                        </div>


                                                        <hr class=" p-0"/>


                                                    </div>

                                                </div>


                                            </div>

                                            <hr class=" p-0"/>

                                            <div class="row ">
                                                <div class="col-xl-3">
                                                    <div class="row">
                                                        <div class="col-12 p-2 text-center text-xl-right ">
                                                            <label class="font-weight-bold">ДОСТАВКА</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-9">
                                                    <div class="row px-0">
                                                        <div id="delivery" onchange="calculateKgPrice()"
                                                             class="col-md-12 my-auto text-center d-flex align-content-around flex-wrap justify-content-center justify-content-xl-start">
                                                            <div class="select-weight">
                                                                <input type="radio" name="delivery" id="ourdelivery"
                                                                       value="ourdelivery"
                                                                       onclick="calculateKgPrice()" checked="checked"/>
                                                                <label for="ourdelivery">Наша доставка</label>
                                                            </div>

                                                            <div class="select-weight">
                                                                <input type="radio" name="delivery"
                                                                       id="customerdelivery" value="customerdelivery"
                                                                       onclick="calculateKgPrice()"/>
                                                                <label for="customerdelivery">Ваша доставка на наш
                                                                    склад</label>
                                                            </div>
                                                        </div>
                                                        <hr class=" p-0"/>
                                                    </div>
                                                </div>
                                            </div>


                                            <hr class=" p-0"/>


                                            <div class="row ">
                                                <div class="col-xl-3">
                                                    <div class="row">
                                                        <div class="col-12 p-2 text-center text-xl-right ">
                                                            <label class="font-weight-bold">ОПЛАТА</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-9">
                                                    <div class="row px-0">


                                                        <div id="payment" onchange="calculateKgPrice()"
                                                             class="col-md-12 my-auto text-center d-flex align-content-around flex-wrap justify-content-center justify-content-xl-start">

                                                            <div class="select-weight">
                                                                <input type="radio" name="payment" id="cash"
                                                                       value="cash"
                                                                       onclick="calculateKgPrice()" checked="checked"/>
                                                                <label for="cash">Наличными</label>
                                                            </div>

                                                            <div class="select-weight">
                                                                <input type="radio" name="payment" id="bank"
                                                                       value="bank"
                                                                       onclick="calculateKgPrice()"/>
                                                                <label for="bank">Безнал</label>
                                                            </div>

                                                        </div>


                                                        <hr class=" p-0"/>


                                                    </div>

                                                </div>


                                            </div>

                                            <hr class=" p-0"/>

                                            <div class="row ">
                                                <div class="col-xl-3">
                                                    <div class="row">
                                                        <div class="col-12 p-2 text-center text-xl-right ">
                                                            <label class="font-weight-bold">ЦЕНА <sup>*</sup></label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-9">
                                                    <div class="p-2  text-center font-weight-bold">

                                                            <div id="divkgPrice"></div>

                                                    </div>
                                                </div>
                                            </div>

                                            <hr class=" p-0"/>

                                    <div class="text-left text-secondary px-3"><small>* Цены договорные и зависят от качества материала и его подготовленности к сдаче. Особое внимание уделяется сортировке, объему и составлению документов на сдаваемый материал, что существенно влияет на цену. При большом объеме есть спецпредоожение</small>

                                        </fieldset>
                                    </form>
                                </div>
                                <div class="col-xl-1"></div>
                            </div>


                            <div class="container m-0 p-0">
  <form action="/send.php" method="post">
                                <div class="row w-100">
                                    <div class="col-xl-1 col-lg-2"></div>
                                    <div class="col-xl-10 col-lg-8">
                                        <div class="row">
                                            <div class="col-xl-4 p-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <img  src="/images/staff.svg" height="20">
                                                        </div>
                                                    </div>
                                                    <input type="hidden" id="comment" name="comment" value="">
                                                    <input id="name" name="name" placeholder="Ваше имя" type="text" maxlength="24"
                                                           class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-4 p-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <img  src="/images/phone-logo.svg" height="20">
                                                        </div>
                                                    </div>
                                                    
                                                      <input id="phone" class="form-control" name="phone" placeholder="Номер телефона" type="tel" pattern="\d*" maxlength="12"
                                                       size="12"  
                                                       oninput="validity.valid||(value='');">
                                                    
                                                </div>
                                            </div>
                                            
                                            <input type="hidden" id="btnClickedValue" name="btnClickedValue" value="" />
                                            
                                            <div class="col-xl-4 p-3">
                                                <button name="submit" type="submit" class="btn btn-primary-custom">
                                                    Заказать звонок
                                                </button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-xl-1 col-lg-2"></div>
                                </div>
                                <div class="row py-3">
                                    <div class="col-xl-1"></div>
                                    <div class="col-xl-10 pl-0">
                                        <div class="text-left text-secondary px-3">
                                        	<small><sup>**</sup>Нажимая на кнопку "Заказать звонок", вы даете согласие на <a href="https://akb-util.ru/info/privacy/">обработку своих персональных данных</a></small></small>
                                        	</small></div>
                                    </div>
                                    <div class="col-xl-1"></div>
                                </div>
                                
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</main>

<?php get_footer(); ?>
