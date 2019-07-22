<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="cmsmagazine" content="cb95ec316d1e98b0ce587af79ab5c354" />
    <link rel="icon" type="image/x-icon" sizes="48x48" href="favicon/favicon_48.ico">
    <link rel="icon" type="image/x-icon" sizes="32x32" href="favicon/favicon_32.ico">
    <link rel="icon" type="image/x-icon" sizes="16x16" href="favicon/favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" href="favicon/favicon.ico">
    <title>Авторский энерджи-тур в Мексику</title>
    <style>
        [v-cloak] {
            display: none !important;
        }
    </style>
    <link rel="stylesheet" href="css/styles.css?v=4cf6bb">
</head>

<body>
    <div id="app">
        <header-component @nav-show="fixBody" @nav-close="fixBody(false)" :screen-width="screenWidth" inline-template>
            <header :class="{'js-scrolling': isScrolling }" class="header">
                <div class="container">
                    <nav class="header__nav nav">
                        <a href="#top" class="nav__logo logo" data-smooth>
                            <svg class="icon logo__img">
                                <use xlink:href="img/icons.svg#logo-colored"></use>
                            </svg>
                        </a>
                        <div class="nav__toggle" v-cloak v-if="screenWidth < 1024">
                            <button :class="{ 'js-active': isNavVisible }" class="toggle toggle--nav" @click="showNav">
                                <span class="toggle__item"></span>
                                <span class="toggle__item"></span>
                            </button>
                        </div>
                        <transition name="fade">
                            <div :class="{ 'js-active': isNavVisible }" class="nav__mobile" v-cloak v-show="isNavVisible || screenWidth >= 1024">
                                <ul class="nav__menu menu">
                                    <li class="menu__item">
                                        <a href="#program" class="menu__link" data-smooth>Программа</a>
                                    </li>
                                    <li class="menu__item">
                                        <a href="#team" class="menu__link" data-smooth>Команда</a>
                                    </li>
                                    <li class="menu__item">
                                        <a href="#pricing" class="menu__link" data-smooth>Цены и даты</a>
                                    </li>
                                    <li class="menu__item">
                                        <a href="#feedback" class="menu__link" data-smooth>Отзывы</a>
                                    </li>
                                    <li class="menu__item">
                                        <a href="#faq" class="menu__link" data-smooth>FAQ</a>
                                    </li>
                                    <li class="menu__item">
                                        <a href="#contacts" class="menu__link" data-smooth>Контакты</a>
                                    </li>
                                </ul>
                                <div class="nav__socials socials" v-if="screenWidth < 1024">
                                    <ul class="socials__list">
                                        <li class="socials__item">
                                            <a href="https://vk.com/energytravelpro" class="socials__link" rel="noreferrer,nofollow" target="_blank" title="ВКонтакте" aria-label="ВКонтакте">
                                                <svg class="icon socials__icon">
                                                    <use xlink:href="img/icons.svg#vk"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="socials__item">
                                            <a href="http://www.instagram.com/energytravelpro" class="socials__link" rel="noreferrer,nofollow" target="_blank" title="Instagram" aria-label="Instagram">
                                                <svg class="icon socials__icon">
                                                    <use xlink:href="img/icons.svg#instagram"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </transition>
                    </nav>
                </div>
            </header>
        </header-component <main class="main">
        <main class="main">
            <section class="cover" id="top">
                <div class="container">
                    <div class="cover__bg">
                        <div class="cover__bg-wrap" v-if="screenWidth >= 768">
                            <picture>
                                <source media="(max-width: 56em)" srcset="img/illustrations/illustration1@1x.webp 1x, img/illustrations/illustration1@2x.webp 2x" type="image/webp">
                                <source media="(max-width: 56em)" srcset="img/illustrations/illustration1@1x.png 1x, img/illustrations/illustration1@2x.png 2x">
                                <source srcset="img/illustrations/illustration1@1.5x.webp 1x, img/illustrations/illustration1@3x.webp 2x" type="image/webp">
                                <img class="cover__bg-img" src="img/illustrations/illustration1@1.5x.png" srcset="img/illustrations/illustration1@3x.png 2x" alt="Авторский энерджи-тур в Мексику">
                            </picture>
                        </div>
                    </div>
                    <div class="cover__content">
                        <div class="cover__time">
                            <span class="label label--uppercase">НОЯБРЬ 2019</span>
                            <span class="label label--uppercase">ЯНВАРЬ 2020</span>
                        </div>
                        <h1 class="cover__heading heading heading--h1">Авторский энерджи-тур в Мексику</h1>
                        <div class="cover__desc"> Повысь жизненный тонус на <span class="label label--bold">110%</span> за <span class="label label--bold">14 дней</span> в улетном путешествии </div>
                        <div class="cover__video">
                            <button class="toggle toggle--video" aria-label="Посмотреть видео" @click="toggleModal('video')">
                                <div class="toggle__img-wrap">
                                    <svg class="icon toggle__icon">
                                        <use xlink:href="img/icons.svg#play"></use>
                                    </svg>
                                    <picture>
                                        <source media="(max-width: 56em)" srcset="img/cover/play-btn@1x.webp 1x, img/cover/play-btn@2x.webp 2x" type="image/webp">
                                        <source media="(max-width: 56em)" srcset="img/cover/play-btn@1x.jpg 1x, img/cover/play-btn@2x.jpg 2x">
                                        <source srcset="img/cover/play-btn@1.5x.webp 1x, img/cover/play-btn@3x.webp 2x" type="image/webp">
                                        <img class="toggle__img" src="img/cover/play-btn@1.5x.jpg" srcset="img/cover/play-btn@3x.jpg 2x" alt="Видео">
                                    </picture>
                                </div>
                                <span class="toggle__label">Короткое видео-приглашение<br /> от основателей компании</span>
                            </button>
                        </div>
                        <button type="button" class="cover__button button button--primary button--uppercase button--bold" @click="toggleModal('form')"> Как возобновить энергию </button>
                    </div>
                    <div class="cover__features panel panel--padding-sm">
                        <div class="feature">
                            <div class="feature__img">
                                <svg class="icon feature__icon">
                                    <use xlink:href="img/icons.svg#bolt"></use>
                                </svg>
                            </div>
                            <p class="feature__text"> Энергетические практики </p>
                        </div>
                        <div class="feature">
                            <div class="feature__img">
                                <svg class="icon feature__icon">
                                    <use xlink:href="img/icons.svg#map"></use>
                                </svg>
                            </div>
                            <p class="feature__text"> Сюрреалистический маршрут </p>
                        </div>
                        <div class="feature">
                            <div class="feature__img">
                                <svg class="icon feature__icon">
                                    <use xlink:href="img/icons.svg#smile"></use>
                                </svg>
                            </div>
                            <p class="feature__text"> Живой нетворкинг </p>
                        </div>
                    </div>
                    <div class="cover__text-block text-block">
                        <div class="text-block__pic">
                            <svg class="icon text-block__pic-icon">
                                <use xlink:href="img/icons.svg#directions"></use>
                            </svg>
                        </div>
                        <p class="text-block__text" id="energy">Если не отдыхать, то организм будет использоваться на износ.</p>
                        <p class="text-block__text">Если за короткий отдых подвергнуть себя резкому удару солнечных лучей, разлагающих напитков или сбить режим сна, то эффект также будет губительным.</p>
                        <p class="text-block__text">Однако, если же учесть законы восстанавливающего путешествия и поднять уровень эндорфинов и серотонина, то за 14 дней можно получить мощный заряд сил на целых полгода.</p>
                    </div>
                </div>
            </section>
            <section class="section recreation" id="recreation">
                <div class="container">
                    <h2 class="section__heading heading heading--h3 heading--uppercase heading--text-center"> Как будем восполнять твои запасы жизненных сил? </h2>
                    <div class="recreation__methods methods">
                        <div class="media">
                            <svg class="icon media__icon">
                                <use xlink:href="img/icons.svg#smile"></use>
                            </svg>
                            <p class="media__title heading heading--h5">Эмоции</p>
                            <p class="media__desc">Пещеры, каньоны, каскады водопадов, карстовые провалы, замки и древние пирамиды, затерянные в джунглях, долина кактусов и... только один шокирующий музей</p>
                        </div>
                        <div class="media">
                            <svg class="icon media__icon">
                                <use xlink:href="img/icons.svg#directions"></use>
                            </svg>
                            <p class="media__title heading heading--h5">Движение</p>
                            <p class="media__desc">Трекинг к вулкану, рафтинг по горной реке, ночной паддлбординг, прыжки в водопады, купание в природных источниках, подземных реках и лазурном Карибском море</p>
                        </div>
                        <div class="media">
                            <svg class="icon media__icon">
                                <use xlink:href="img/icons.svg#spa"></use>
                            </svg>
                            <p class="media__title heading heading--h5">Практики восполнения энергии</p>
                            <p class="media__desc">Телесно-дыхательный комплекс от рекордсмена Книги рекордов Гиннесса с элементами тибетских методик ежедневно, медитации силы на вершине пирамид, индейская баня, шаманский ритуал</p>
                        </div>
                        <div class="media">
                            <svg class="icon media__icon">
                                <use xlink:href="img/icons.svg#water"></use>
                            </svg>
                            <p class="media__title heading heading--h5">Водный баланс</p>
                            <p class="media__desc">2 литра воды в день</p>
                        </div>
                        <div class="media">
                            <svg class="icon media__icon">
                                <use xlink:href="img/icons.svg#bolt-circle"></use>
                            </svg>
                            <p class="media__title heading heading--h5">Энергетический рацион</p>
                            <p class="media__desc">Плотный завтрак, полноценный обед, легкий ужин по энергетической диете, солнечные фрукты, овощи, мясо на огне, морепродукты, настоящий шоколад, а для самых смелых кузнечики и муравьиные яйца... мексиканская кухня охраняется ЮНЕСКО</p>
                        </div>
                        <div class="media">
                            <svg class="icon media__icon">
                                <use xlink:href="img/icons.svg#moon"></use>
                            </svg>
                            <p class="media__title heading heading--h5">Восстанавливающий сон</p>
                            <p class="media__desc">Телесно-дыхательная настройка на расслабляющий сон + много кислорода, ведь даже Мехико обладает наградой за качество воздуха</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section call-to-action">
                <div class="section__cover">
                    <picture>
                        <source media="(max-width: 56em)" srcset="img/illustrations/illustration2@1x.webp 1x, img/illustrations/illustration2@2x.webp 2x" type="image/webp">
                        <source media="(max-width: 56em)" srcset="img/illustrations/illustration2@1x.png 1x, img/illustrations/illustration2@2x.png 2x">
                        <source srcset="img/illustrations/illustration2@1.5x.webp 1x, img/illustrations/illustration2@3x.webp 2x" type="image/webp">
                        <img class="section__cover-img" src="img/illustrations/illustration2@1.5x.png" srcset="img/illustrations/illustration2@3x.png 2x" alt="Иллюстрация">
                    </picture>
                </div>
                <div class="container">
                    <p class="call-to-action__text"> Только представь, сколько времени, денег и сил<br> ушло бы на подготовку такого путешествия?<br> Мы это сделали за тебя! </p>
                    <h2 class="call-to-action__slogan heading heading--h3 heading--uppercase heading--text-center"> Оставь смартфон, зарядись в путешествиях! </h2>
                </div>
            </section>
            <section class="section program" id="program">
                <div class="container">
                    <h2 class="section__heading heading heading--h3 heading--uppercase heading--text-center heading--has-action"> Итак, наша сюрреалистическая программа <div class="section__action">
                            <a href="#" class="section__action-link" @click.prevent="toggleModal('form', 'program')">
                                <svg class="icon section__action-icon">
                                    <use xlink:href="img/icons.svg#cloud-download"></use>
                                </svg>
                                <span>Скачать полную программу тура по дням</span>
                            </a>
                        </div>
                    </h2>
                    <tabs-component :swiper-options="swiperOptions" inline-template>
                        <div class="program__tabs tabs">
                            <div class="tabs__nav tabs-nav">
                                <ul class="tabs-nav__list">
                                    <li class="tabs-nav__item">
                                        <a href="#see" class="tabs-nav__link" :class="{ 'js-active': tabPaneActive == 1 }" @click="showPane(1, $event)">Мы увидим</a>
                                    </li>
                                    <li class="tabs-nav__item">
                                        <a href="#feel" class="tabs-nav__link" :class="{ 'js-active': tabPaneActive == 2 }" @click="showPane(2, $event)">Мы испытаем</a>
                                    </li>
                                    <li class="tabs-nav__item">
                                        <a href="#surprize" class="tabs-nav__link" :class="{ 'js-active': tabPaneActive == 3 }" @click="showPane(3, $event)">Нас удивит</a>
                                    </li>
                                    <li class="tabs-nav__item">
                                        <a href="#restore" class="tabs-nav__link" :class="{ 'js-active': tabPaneActive == 4 }" @click="showPane(4, $event)">Восстановит наши силы</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tabs__content">
                                <div class="tab-pane" key="see" id="see" v-if="tabPaneActive == 1">
                                    <swiper :options="swiperOptions">
                                        <button class="swiper-button-prev" slot="button-prev">
                                            <svg class="icon swiper-button__icon">
                                                <use xlink:href="img/icons.svg#prev"></use>
                                            </svg>
                                        </button>
                                        <div class="swiper-pagination" slot="pagination"></div>
                                        <button class="swiper-button-next" slot="button-next">
                                            <svg class="icon swiper-button__icon">
                                                <use xlink:href="img/icons.svg#next"></use>
                                            </svg>
                                        </button>
                                        <swiper-slide>
                                            <div class="tab-pane__inner panel">
                                                <div class="tab-pane__pictures tab-pane__pictures--lg">
                                                    <div class="tab-pane__picture-wrap">
                                                        <picture>
                                                            <source media="(max-width: 56em)" srcset="img/program/mexico@1x.webp 1x, img/program/mexico@2x.webp 2x" type="image/webp">
                                                            <source media="(max-width: 56em)" srcset="img/program/mexico@1x.jpg 1x, img/program/mexico@2x.jpg 2x">
                                                            <source srcset="img/program/mexico@1.5x.webp 1x, img/program/mexico@3x.webp 2x" type="image/webp">
                                                            <img class="tab-pane__img" src="img/program/mexico@1.5x.jpg" srcset="img/program/mexico@3x.jpg 2x" alt="Мехико">
                                                        </picture>
                                                    </div>
                                                </div>
                                                <div class="tab-pane__content">
                                                    <h4 class="heading heading--h4">Мехико</h4>
                                                    <p> Горячее сердце Мексики! Бывшая столица кровожадных ацтеков, превращенная испанцами в католическую колониальную мекку Нового Света. Более 25 миллионов жителей, горные пейзажи, небоскребы, старинные здания и древние руины… Огромный, кипучий, поражающий разнообразием архитектуры и наполненный сумасшедшей энергетикой Mexico City представляет собой микс эпох, культур и народов.<br /> Это стоит пережить! </p>
                                                </div>
                                            </div>
                                        </swiper-slide>
                                        <swiper-slide>
                                            <div class="tab-pane__inner panel">
                                                <div class="tab-pane__pictures tab-pane__pictures--lg">
                                                    <div class="tab-pane__picture-wrap">
                                                        <picture>
                                                            <source media="(max-width: 56em)" srcset="img/program/sotano-de-las-golondrinas@1x.webp 1x, img/program/sotano-de-las-golondrinas@2x.webp 2x" type="image/webp">
                                                            <source media="(max-width: 56em)" srcset="img/program/sotano-de-las-golondrinas@1x.jpg 1x, img/program/sotano-de-las-golondrinas@2x.jpg 2x">
                                                            <source srcset="img/program/sotano-de-las-golondrinas@1.5x.webp 1x, img/program/sotano-de-las-golondrinas@3x.webp 2x" type="image/webp">
                                                            <img class="tab-pane__img" src="img/program/sotano-de-las-golondrinas@1.5x.jpg" srcset="img/program/sotano-de-las-golondrinas@3x.jpg 2x" alt="El Sotano de las Golondrinas">
                                                        </picture>
                                                    </div>
                                                </div>
                                                <div class="tab-pane__content">
                                                    <h4 class="heading heading--h4">Пещера ласточек (El Sotano de las Golondrinas)</h4>
                                                    <p> Помните завораживающий фильм Джеймса Камерона «Санктум»? Только без печальных дайв-приключений и с красивым хеппи-эндом в нашем случае! Посетим крупнейший карстовый провал в мире, где снималась одна из сцен многомиллионного триллера! Без экстремальных прыжков, но с более комфортным спуском в пещеру глубиной несколько сотен метров! И… самое прекрасное… увидим спиральный полет стай стрижей и попугаев (хотя местные окрестили их ласточками☺) , возвращающихся с дневной охоты.<br /> Стоит увидеть хотя бы раз в жизни! </p>
                                                </div>
                                            </div>
                                        </swiper-slide>
                                        <swiper-slide>
                                            <div class="tab-pane__inner panel">
                                                <div class="tab-pane__pictures tab-pane__pictures--lg">
                                                    <div class="tab-pane__picture-wrap">
                                                        <picture>
                                                            <source media="(max-width: 56em)" srcset="img/program/popocatepetl@1x.webp 1x, img/program/popocatepetl@2x.webp 2x" type="image/webp">
                                                            <source media="(max-width: 56em)" srcset="img/program/popocatepetl@1x.jpg 1x, img/program/popocatepetl@2x.jpg 2x">
                                                            <source srcset="img/program/popocatepetl@1.5x.webp 1x, img/program/popocatepetl@3x.webp 2x" type="image/webp">
                                                            <img class="tab-pane__img" src="img/program/popocatepetl@1.5x.jpg" srcset="img/program/popocatepetl@3x.jpg 2x" alt="Iztaccihuatl and Popocatepetl National Park">
                                                        </picture>
                                                    </div>
                                                </div>
                                                <div class="tab-pane__content">
                                                    <h4 class="heading heading--h4">Прогулка-трекинг к вулканам (Iztaccihuatl and Popocatepetl National Park)</h4>
                                                    <p> На протяжении веков величественные вулканы вызывают гордость и, одновременно, глубочайшие опасения мексиканцев. Вторая и третья по величине вершины Мексики – Курящая гора и Белая женщина производят неизгладимое впечатление. Особенно, если учесть, что один из вулканов еще «дышит» и с регулярной частотой изрыгает из себя величественные клубы белого дыма. Прогулка-трекинг в национальном парке добавит необходимый штрих к полной картине центрально-мексиканских ландшафтов.<br /> Немного подзарядки энергией Матери Земли – то, что нам необходимо! </p>
                                                </div>
                                            </div>
                                        </swiper-slide>
                                        <swiper-slide>
                                            <div class="tab-pane__inner panel">
                                                <div class="tab-pane__pictures tab-pane__pictures--lg">
                                                    <div class="tab-pane__picture-wrap">
                                                        <picture>
                                                            <source media="(max-width: 56em)" srcset="img/program/tehuacan-cuicatlan_biosphere_reserve@1x.webp 1x, img/program/tehuacan-cuicatlan_biosphere_reserve@2x.webp 2x" type="image/webp">
                                                            <source media="(max-width: 56em)" srcset="img/program/tehuacan-cuicatlan_biosphere_reserve@1x.jpg 1x, img/program/tehuacan-cuicatlan_biosphere_reserve@2x.jpg 2x">
                                                            <source srcset="img/program/tehuacan-cuicatlan_biosphere_reserve@1.5x.webp 1x, img/program/tehuacan-cuicatlan_biosphere_reserve@3x.webp 2x" type="image/webp">
                                                            <img class="tab-pane__img" src="img/program/tehuacan-cuicatlan_biosphere_reserve@1.5x.jpg" srcset="img/program/tehuacan-cuicatlan_biosphere_reserve@3x.jpg 2x" alt="Tehuacán-Cuicatlán Biosphere Reserve">
                                                        </picture>
                                                    </div>
                                                </div>
                                                <div class="tab-pane__content">
                                                    <h4 class="heading heading--h4">Долина кактусов (Tehuacán-Cuicatlán Biosphere Reserve)</h4>
                                                    <p> Величественные символы мексиканских долин – кактусы, кактусы и снова кактусы! Обязательное фото и наслаждение классическим мексиканским пейзажем. <br /> Живописные виды и очень аутентичные имиджи на память! </p>
                                                </div>
                                            </div>
                                        </swiper-slide>
                                        <swiper-slide>
                                            <div class="tab-pane__inner panel">
                                                <div class="tab-pane__pictures tab-pane__pictures--lg">
                                                    <div class="tab-pane__picture-wrap">
                                                        <picture>
                                                            <source media="(max-width: 56em)" srcset="img/program/peterfied_waterfall@1x.webp 1x, img/program/peterfied_waterfall@2x.webp 2x" type="image/webp">
                                                            <source media="(max-width: 56em)" srcset="img/program/peterfied_waterfall@1x.jpg 1x, img/program/peterfied_waterfall@2x.jpg 2x">
                                                            <source srcset="img/program/peterfied_waterfall@1.5x.webp 1x, img/program/peterfied_waterfall@3x.webp 2x" type="image/webp">
                                                            <img class="tab-pane__img" src="img/program/peterfied_waterfall@1.5x.jpg" srcset="img/program/peterfied_waterfall@3x.jpg 2x" alt="Hierve El Agua">
                                                        </picture>
                                                    </div>
                                                </div>
                                                <div class="tab-pane__content">
                                                    <h4 class="heading heading--h4">Каменный водопад из минеральной воды (Hierve El Agua)</h4>
                                                    <p> «Кипящая вода» - так прозвали этот странный, ни на что не похожий водопад испанские колонизаторы. Наблюдая его издалека кажется, что массы белой пенистой воды скатываются вниз по стенам водопада. При приближении же раскрывается удивительный обман зрения – лишь небольшие струйки воды спускаются по окаменелому известняковому руслу, словно в миг застывшему по повелению древнего мага. На вершине горы обустроен милейший сульфатный бассейн, мы насладимся не только видом лечебной подземной воды, но и ее волшебными энергетическими свойствами. </p>
                                                </div>
                                            </div>
                                        </swiper-slide>
                                        <swiper-slide>
                                            <div class="tab-pane__inner panel">
                                                <div class="tab-pane__pictures tab-pane__pictures--lg">
                                                    <div class="tab-pane__picture-wrap">
                                                        <picture>
                                                            <source media="(max-width: 56em)" srcset="img/program/canyon_del_sumidero@1x.webp 1x, img/program/canyon_del_sumidero@2x.webp 2x" type="image/webp">
                                                            <source media="(max-width: 56em)" srcset="img/program/canyon_del_sumidero@1x.jpg 1x, img/program/canyon_del_sumidero@2x.jpg 2x">
                                                            <source srcset="img/program/canyon_del_sumidero@1.5x.webp 1x, img/program/canyon_del_sumidero@3x.webp 2x" type="image/webp">
                                                            <img class="tab-pane__img" src="img/program/canyon_del_sumidero@1.5x.jpg" srcset="img/program/canyon_del_sumidero@3x.jpg 2x" alt="Cañón del Sumidero">
                                                        </picture>
                                                    </div>
                                                </div>
                                                <div class="tab-pane__content">
                                                    <h4 class="heading heading--h4">На лодке по Каньону Сумидеро (Cañón del Sumidero)</h4>
                                                    <p> Классика жанра, которой не устаешь любоваться - река в обрамлении высоченных гор. Национальный парк Каньон дель Сумидеро - самая известная природная достопримечательность штата Чьяпас. Прокатимся на лодке меж нависающих величественных стен гор – восхитительно красиво и захватывающе! Особенно, если есть шанс встретить стайку обезьян, грифов и крокодилов </p>
                                                </div>
                                            </div>
                                        </swiper-slide>
                                        <swiper-slide>
                                            <div class="tab-pane__inner panel">
                                                <div class="tab-pane__pictures tab-pane__pictures--lg">
                                                    <div class="tab-pane__picture-wrap">
                                                        <picture>
                                                            <source media="(max-width: 56em)" srcset="img/program/san_migel_de_allende@1x.webp 1x, img/program/san_migel_de_allende@2x.webp 2x" type="image/webp">
                                                            <source media="(max-width: 56em)" srcset="img/program/san_migel_de_allende@1x.jpg 1x, img/program/san_migel_de_allende@2x.jpg 2x">
                                                            <source srcset="img/program/san_migel_de_allende@1.5x.webp 1x, img/program/san_migel_de_allende@3x.webp 2x" type="image/webp">
                                                            <img class="tab-pane__img" src="img/program/san_migel_de_allende@1.5x.jpg" srcset="img/program/san_migel_de_allende@3x.jpg 2x" alt="Сан-Мигель-де-Альенде">
                                                        </picture>
                                                    </div>
                                                </div>
                                                <div class="tab-pane__content">
                                                    <h4 class="heading heading--h4">Романтика колониальных городов</h4>
                                                    <p> Свое очарование нам откроют тихие, но яркие города, усыпанные разноцветными домиками прошлых веков. Они сочетают кипучую энергетику современности с очарованием Старой Европы. Многочисленные церквушки в стиле мексиканского барокко притягивают необъяснимым обаянием: камерностью и пестрым контрастом колониальной архитектуры и колоритных индейских персонажей. </p>
                                                </div>
                                            </div>
                                        </swiper-slide>
                                    </swiper>
                                </div>
                                <div class="tab-pane" v-cloak key="feel" id="feel" v-if="tabPaneActive == 2">
                                    <swiper :options="swiperOptions">
                                        <button class="swiper-button-prev" slot="button-prev">
                                            <svg class="icon swiper-button__icon">
                                                <use xlink:href="img/icons.svg#prev"></use>
                                            </svg>
                                        </button>
                                        <div class="swiper-pagination" slot="pagination"></div>
                                        <button class="swiper-button-next" slot="button-next">
                                            <svg class="icon swiper-button__icon">
                                                <use xlink:href="img/icons.svg#next"></use>
                                            </svg>
                                        </button>
                                        <swiper-slide>
                                            <div class="tab-pane__inner panel">
                                                <div class="tab-pane__pictures tab-pane__pictures--lg">
                                                    <div class="tab-pane__picture-wrap">
                                                        <picture>
                                                            <source media="(max-width: 56em)" srcset="img/program/nightpaddle@1x.webp 1x, img/program/nightpaddle@2x.webp 2x" type="image/webp">
                                                            <source media="(max-width: 56em)" srcset="img/program/nightpaddle@1x.jpg 1x, img/program/nightpaddle@2x.jpg 2x">
                                                            <source srcset="img/program/nightpaddle@1.5x.webp 1x, img/program/nightpaddle@3x.webp 2x" type="image/webp">
                                                            <img class="tab-pane__img" src="img/program/nightpaddle@1.5x.jpg" srcset="img/program/nightpaddle@3x.jpg 2x" alt="Ночной Stand-Up Paddle Board">
                                                        </picture>
                                                    </div>
                                                </div>
                                                <div class="tab-pane__content">
                                                    <h4 class="heading heading--h4">Ночной Stand-Up Paddle Board</h4>
                                                    <p> Мистическая красота природного региона Уастека Потосина еще более притягательна ночью. Особенно если вы находитесь на доске посреди горной реки с ночной подсветкой, создающей феерическую игру света и тени, в окружении бесподобной природной декорации.<br /> Фантастических снов на планете Пандора! </p>
                                                </div>
                                            </div>
                                        </swiper-slide>
                                        <swiper-slide>
                                            <div class="tab-pane__inner panel">
                                                <div class="tab-pane__pictures tab-pane__pictures--lg">
                                                    <div class="tab-pane__picture-wrap">
                                                        <picture>
                                                            <source media="(max-width: 56em)" srcset="img/program/rio_tampaon@1x.webp 1x, img/program/rio_tampaon@2x.webp 2x" type="image/webp">
                                                            <source media="(max-width: 56em)" srcset="img/program/rio_tampaon@1x.jpg 1x, img/program/rio_tampaon@2x.jpg 2x">
                                                            <source srcset="img/program/rio_tampaon@1.5x.webp 1x, img/program/rio_tampaon@3x.webp 2x" type="image/webp">
                                                            <img class="tab-pane__img" src="img/program/rio_tampaon@1.5x.jpg" srcset="img/program/rio_tampaon@3x.jpg 2x" alt="Rio Tampaon">
                                                        </picture>
                                                    </div>
                                                </div>
                                                <div class="tab-pane__content">
                                                    <h4 class="heading heading--h4">Рафтинг в Рио Тампаон (Rio Tampaon)</h4>
                                                    <p> Рафтинг по кристально чистым водам в тропических джунглях мексиканского штата Сан-Луис-Потоси производит удивительное впечатление - бирюзовый цвет речной воды сочетается с белым известняком и зеленью деревьев, растущих по берегам. Река Тампаон знаменита своими порогами, красивыми каменными садами и каскадами, поэтому здесь мы сможем попрыгать в один из многочисленных горных водопадов.<br /> Бешеная энергетика, завораживающая красота и море адреналина обеспечены! </p>
                                                </div>
                                            </div>
                                        </swiper-slide>
                                        <swiper-slide>
                                            <div class="tab-pane__inner panel">
                                                <div class="tab-pane__pictures tab-pane__pictures--lg">
                                                    <div class="tab-pane__picture-wrap">
                                                        <picture>
                                                            <source media="(max-width: 56em)" srcset="img/program/aqua_azul@1x.webp 1x, img/program/aqua_azul@2x.webp 2x" type="image/webp">
                                                            <source media="(max-width: 56em)" srcset="img/program/aqua_azul@1x.jpg 1x, img/program/aqua_azul@2x.jpg 2x">
                                                            <source srcset="img/program/aqua_azul@1.5x.webp 1x, img/program/aqua_azul@3x.webp 2x" type="image/webp">
                                                            <img class="tab-pane__img" src="img/program/aqua_azul@1.5x.jpg" srcset="img/program/aqua_azul@3x.jpg 2x" alt="Agua Azul">
                                                        </picture>
                                                    </div>
                                                </div>
                                                <div class="tab-pane__content">
                                                    <h4 class="heading heading--h4">Купание в каскадах водопада (Agua Azul)</h4>
                                                    <p> Голубые воды каскадов создают неповторимый яркий пейзаж. Огромные пороги воды кипуче перекатываются из одного в другой, воплощая гигантскую лестницу горной реки. Поднимемся на смотровую площадку, окунемся в священную бирюзу вод и, конечно, сделаем потрясающие селфи на память! </p>
                                                </div>
                                            </div>
                                        </swiper-slide>
                                        <swiper-slide>
                                            <div class="tab-pane__inner panel">
                                                <div class="tab-pane__pictures tab-pane__pictures--lg">
                                                    <div class="tab-pane__picture-wrap">
                                                        <picture>
                                                            <source media="(max-width: 56em)" srcset="img/program/sac_actun@1x.webp 1x, img/program/sac_actun@2x.webp 2x" type="image/webp">
                                                            <source media="(max-width: 56em)" srcset="img/program/sac_actun@1x.jpg 1x, img/program/sac_actun@2x.jpg 2x">
                                                            <source srcset="img/program/sac_actun@1.5x.webp 1x, img/program/sac_actun@3x.webp 2x" type="image/webp">
                                                            <img class="tab-pane__img" src="img/program/sac_actun@1.5x.jpg" srcset="img/program/sac_actun@3x.jpg 2x" alt="Sac Actun">
                                                        </picture>
                                                    </div>
                                                </div>
                                                <div class="tab-pane__content">
                                                    <h4 class="heading heading--h4">Подземная пещерная река (Sac Actun)</h4>
                                                    <p> Словно в пещерах горного короля, в подземных лабиринтах Сак-Актуна кроются мистические тайны природы. Неземная, даже несколько пугающая красота одной из самых длинных пещерных систем мира не оставит равнодушным! Заполненные кристально-прозрачной чистейшей и пресной водой каналы в обрамлении гигантских сталактитов создают целое подземное царство в духе фантастической саги Толкина.<br /> Нас ждет редчайшее Чудо Природы и неповторимый экспириенс! </p>
                                                </div>
                                            </div>
                                        </swiper-slide>
                                    </swiper>
                                </div>
                                <div class="tab-pane" v-cloak key="surprize" id="surprize" v-if="tabPaneActive == 3">
                                    <swiper :options="swiperOptions">
                                        <button class="swiper-button-prev" slot="button-prev">
                                            <svg class="icon swiper-button__icon">
                                                <use xlink:href="img/icons.svg#prev"></use>
                                            </svg>
                                        </button>
                                        <div class="swiper-pagination" slot="pagination"></div>
                                        <button class="swiper-button-next" slot="button-next">
                                            <svg class="icon swiper-button__icon">
                                                <use xlink:href="img/icons.svg#next"></use>
                                            </svg>
                                        </button>
                                        <swiper-slide>
                                            <div class="tab-pane__inner panel">
                                                <div class="tab-pane__pictures tab-pane__pictures--lg">
                                                    <div class="tab-pane__picture-wrap">
                                                        <picture>
                                                            <source media="(max-width: 56em)" srcset="img/program/mummy@1x.webp 1x, img/program/mummy@2x.webp 2x" type="image/webp">
                                                            <source media="(max-width: 56em)" srcset="img/program/mummy@1x.jpg 1x, img/program/mummy@2x.jpg 2x">
                                                            <source srcset="img/program/mummy@1.5x.webp 1x, img/program/mummy@3x.webp 2x" type="image/webp">
                                                            <img class="tab-pane__img" src="img/program/mummy@1.5x.jpg" srcset="img/program/mummy@3x.jpg 2x" alt="Museo de las Momias de Guanajuato">
                                                        </picture>
                                                    </div>
                                                </div>
                                                <div class="tab-pane__content">
                                                    <h4 class="heading heading--h4">Музей мумий (Museo de las Momias de Guanajuato)</h4>
                                                    <p> Музей мумий (Museo de las Momias de Guanajuato) - один из самых шокирующих музеев мира.<br /> Чем пугают мексиканских малышей в случае непослушания? Аналог местной Бабы Яги – мрачные и ужасно привлекательные мумии из Гуанахуато к вашему обозрению! Более 100 естественным образом сохранившихся тел жителей города, умерших в 19 веке и изначально похороненных на местном кладбище, но за неуплату налога вытащенных из каменных гробниц. <br /> Интереснее, чем Древний Египет! А страшно – аж жуть! </p>
                                                </div>
                                            </div>
                                        </swiper-slide>
                                        <swiper-slide>
                                            <div class="tab-pane__inner panel">
                                                <div class="tab-pane__pictures tab-pane__pictures--lg">
                                                    <div class="tab-pane__picture-wrap">
                                                        <picture>
                                                            <source media="(max-width: 56em)" srcset="img/program/teotihuacan@1x.webp 1x, img/program/teotihuacan@2x.webp 2x" type="image/webp">
                                                            <source media="(max-width: 56em)" srcset="img/program/teotihuacan@1x.jpg 1x, img/program/teotihuacan@2x.jpg 2x">
                                                            <source srcset="img/program/teotihuacan@1.5x.webp 1x, img/program/teotihuacan@3x.webp 2x" type="image/webp">
                                                            <img class="tab-pane__img" src="img/program/teotihuacan@1.5x.jpg" srcset="img/program/teotihuacan@3x.jpg 2x" alt="Teotihuacan">
                                                        </picture>
                                                    </div>
                                                </div>
                                                <div class="tab-pane__content">
                                                    <h4 class="heading heading--h4">Нечеловеческий Теотиуакан (Teotihuacan)</h4>
                                                    <p> Если есть на земле место, где можно заподозрить следы присутствия неземных цивилизаций - это однозначно «Город Богов» Теотиуакан! Древние народы Центральной Мексики считали, что его построили боги. Современные индейские старейшины сходятся на том, что здесь родился Белый Ягуар - символ эпохи Пятого Солнца. И, наконец, официальная наука просто разводит руками: до сих пор нет точных данных о времени создания Теотиуакана, равно как ни о народе, его сотворившем. Научные свидетельства расходятся и дают погрешность в тысячелетия! Точно известно одно - Теотиуакан не похож ни на один другой индейский город. Его нечеловеческие масштабы, равно как и космологические совпадения в конструкциях построек и геометрическая стройность архитектуры свидетельствуют об участии в его создании могущественных и неизвестных цивилизаций! Пройтись по Аллее Мертвых, подняться на Пирамиду Солнца и заглянуть в пасть жуткому змею Кетцалькоатлю – скучно не будет! </p>
                                                </div>
                                            </div>
                                        </swiper-slide>
                                        <swiper-slide>
                                            <div class="tab-pane__inner panel">
                                                <div class="tab-pane__pictures tab-pane__pictures--lg">
                                                    <div class="tab-pane__picture-wrap">
                                                        <picture>
                                                            <source media="(max-width: 56em)" srcset="img/program/las_pozas@1x.webp 1x, img/program/las_pozas@2x.webp 2x" type="image/webp">
                                                            <source media="(max-width: 56em)" srcset="img/program/las_pozas@1x.jpg 1x, img/program/las_pozas@2x.jpg 2x">
                                                            <source srcset="img/program/las_pozas@1.5x.webp 1x, img/program/las_pozas@3x.webp 2x" type="image/webp">
                                                            <img class="tab-pane__img" src="img/program/las_pozas@1.5x.jpg" srcset="img/program/las_pozas@3x.jpg 2x" alt="Las Pozas">
                                                        </picture>
                                                    </div>
                                                </div>
                                                <div class="tab-pane__content">
                                                    <h4 class="heading heading--h4">Сюрреалистический Замок Эдварда Джеймса (Las Pozas)</h4>
                                                    <p> Разрывающий шаблоны сознания сюрреалистический сад эксцентричного английского миллионера, поэта и мецената Эдварда Джеймса надолго останется в памяти! Симбиоз творения рук человеческих и природы - джунгли, украшенные странными каменными инсталляциями. Las Pozas в переводе с испанского означает «источники». Между извилистых лиан и еще более витиеватых строений падают струи бирюзовых горных вод… Удивительным образом время объединило современные конструкции и экзотический природный ландшафт в один неповторимый симбиотический пейзаж. На ум приходят творения бессмертного Гауди и эксцентричные миры Сальвадора Дали… <br /> То, чего меньше всего ожидаешь от Мексики! </p>
                                                </div>
                                            </div>
                                        </swiper-slide>
                                        <swiper-slide>
                                            <div class="tab-pane__inner panel">
                                                <div class="tab-pane__pictures tab-pane__pictures--lg">
                                                    <div class="tab-pane__picture-wrap">
                                                        <picture>
                                                            <source media="(max-width: 56em)" srcset="img/program/san_juan_chamula@1x.webp 1x, img/program/san_juan_chamula@2x.webp 2x" type="image/webp">
                                                            <source media="(max-width: 56em)" srcset="img/program/san_juan_chamula@1x.jpg 1x, img/program/san_juan_chamula@2x.jpg 2x">
                                                            <source srcset="img/program/san_juan_chamula@1.5x.webp 1x, img/program/san_juan_chamula@3x.webp 2x" type="image/webp">
                                                            <img class="tab-pane__img" src="img/program/san_juan_chamula@1.5x.jpg" srcset="img/program/san_juan_chamula@3x.jpg 2x" alt="San Juan Chamula">
                                                        </picture>
                                                    </div>
                                                </div>
                                                <div class="tab-pane__content">
                                                    <h4 class="heading heading--h4">Леденящий кровь языческий обряд (San Juan Chamula)</h4>
                                                    <p> Сан Хуан Чамула – очень странное поселение индейского народа цоциль в центре горных хребтов Чьапаса. Такое нельзя пропустить!<br /> Дичайший синкретизм католической и языческой культур поражает воображение. Полудикие взгляды местных женщин, облаченных в черные меховые юбки… Странные обряды древних народов с отголосками жертвоприношений до сих пор имеют место быть в церкви, которая на первый взгляд кажется христианской, но под крышей которой до сих пор молятся языческим духам. Другой мир!<br /> Окунуться на минутку, и скорее назад! <b>Фотографировать строго запрещено!</b>
                                                    </p>
                                                </div>
                                            </div>
                                        </swiper-slide>
                                    </swiper>
                                </div>
                                <div class="tab-pane" v-cloak key="restore" id="restore" v-if="tabPaneActive == 4">
                                    <swiper :options="swiperOptions">
                                        <button class="swiper-button-prev" slot="button-prev">
                                            <svg class="icon swiper-button__icon">
                                                <use xlink:href="img/icons.svg#prev"></use>
                                            </svg>
                                        </button>
                                        <div class="swiper-pagination" slot="pagination"></div>
                                        <button class="swiper-button-next" slot="button-next">
                                            <svg class="icon swiper-button__icon">
                                                <use xlink:href="img/icons.svg#next"></use>
                                            </svg>
                                        </button>
                                        <swiper-slide>
                                            <div class="tab-pane__inner panel">
                                                <div class="tab-pane__pictures tab-pane__pictures--lg">
                                                    <div class="tab-pane__picture-wrap">
                                                        <picture>
                                                            <source media="(max-width: 56em)" srcset="img/program/shaman1@1x.webp 1x, img/program/shaman1@2x.webp 2x" type="image/webp">
                                                            <source media="(max-width: 56em)" srcset="img/program/shaman1@1x.jpg 1x, img/program/shaman1@2x.jpg 2x">
                                                            <source srcset="img/program/shaman1@1.5x.webp 1x, img/program/shaman1@3x.webp 2x" type="image/webp">
                                                            <img class="tab-pane__img" src="img/program/shaman1@1.5x.jpg" srcset="img/program/shaman1@3x.jpg 2x" alt="Шаман">
                                                        </picture>
                                                    </div>
                                                    <div class="tab-pane__picture-wrap">
                                                        <picture>
                                                            <source media="(max-width: 56em)" srcset="img/program/temazcal@1x.webp 1x, img/program/temazcal@2x.webp 2x" type="image/webp">
                                                            <source media="(max-width: 56em)" srcset="img/program/temazcal@1x.jpg 1x, img/program/temazcal@2x.jpg 2x">
                                                            <source srcset="img/program/temazcal@1.5x.webp 1x, img/program/temazcal@3x.webp 2x" type="image/webp">
                                                            <img class="tab-pane__img" src="img/program/temazcal@1.5x.jpg" srcset="img/program/temazcal@3x.jpg 2x" alt="Temazcal">
                                                        </picture>
                                                    </div>
                                                </div>
                                                <div class="tab-pane__content">
                                                    <h4 class="heading heading--h4">Обряд очищения в индейской бане Темаскаль</h4>
                                                    <p> Мы предлагаем окунуться в удивительный мир эзотерики. Посмотреть на себя изнутри, найти ответы на вопросы, которые давно тебя волнуют, а также открыть в себе новые возможности и прийти к гармонии с собой и окружающим миром. Тысячелетия назад индейцы Центральной Америки начали практиковать обряд физического и духовного очищения: чтобы продлить жизнь племени, чтобы набраться мудрости у Вселенной, чтобы расширить энергетические каналы и добиться воплощения в жизнь запланированных целей. </p>
                                                    <p> Традиция очищения горячим паром, ароматерапией, медитативной темнотой и мистической первобытной музыкой сохранилась до наших времен и проводится в той же форме, что и несколько веков назад. Все начинается с огромного костра, где нагреваются камни вулканического происхождения, добытые в горах Центральной Мексики. Камни играют главную роль в таинстве обряда — они создают волшебный целительный пар, за счет которого шаман и участники церемонии достигают энергетического очищения и просветления. В процессе Темаскаля используются разнообразные индейские травы и снадобья, каждое из которых имеет свое мистическое воздействие на организм человека. В завершение — обязательная релаксация в гамаках и легкий фруктовый ужин. </p>
                                                </div>
                                            </div>
                                        </swiper-slide>
                                        <swiper-slide>
                                            <div class="tab-pane__inner panel">
                                                <div class="tab-pane__pictures tab-pane__pictures--lg">
                                                    <div class="tab-pane__picture-wrap">
                                                        <picture>
                                                            <source media="(max-width: 56em)" srcset="img/program/shaman2@1x.webp 1x, img/program/shaman2@2x.webp 2x" type="image/webp">
                                                            <source media="(max-width: 56em)" srcset="img/program/shaman2@1x.jpg 1x, img/program/shaman2@2x.jpg 2x">
                                                            <source srcset="img/program/shaman2@1.5x.webp 1x, img/program/shaman2@3x.webp 2x" type="image/webp">
                                                            <img class="tab-pane__img" src="img/program/shaman2@1.5x.jpg" srcset="img/program/shaman2@3x.jpg 2x" alt="Шаман">
                                                        </picture>
                                                    </div>
                                                </div>
                                                <div class="tab-pane__content">
                                                    <h4 class="heading heading--h4">Ночная церемония с кактусом Пейот и настоящим шаманом Маракаме</h4>
                                                    <p> А уже с наступлением глубокой ночи наш очищенный дух в не менее чистом теле перенесется в другие измерения под руководством шамана Маракаме из племени индейцев Уичоли, только они имеют право на проведение церемонии. Трансцендентальное погружение внутрь Себя и полное слияние с Природой и Вселенной поможет пережить волшебный кактус Пейот – древнейший союзник всех шаманских ритуалов в индейской Мексике. По окончании обряда можно с удобством расположиться на мягких подстилках на оборудованной террасе, либо в гамаках и с глубочайшим спокойствием и негой раствориться в атмосфере диких тропических джунглей. </p>
                                                    <p> Над головой звездное небо, а в душе покой и ясность жизненного пути...<br /> Это настоящая Мексика! </p>
                                                </div>
                                            </div>
                                        </swiper-slide>
                                    </swiper>
                                </div>
                            </div>
                        </div>
                    </tabs-component>
                </div>
            </section>
            <section class="section live">
                <div class="container">
                    <h2 class="section__heading heading heading--h3 heading--uppercase heading--text-center heading--has-action"> Жить будем в кайф </h2>
                    <tabs-component :swiper-options="swiperOptions" inline-template>
                        <div class="live__tabs tabs">
                            <div class="tabs__nav tabs-nav">
                                <ul class="tabs-nav__list">
                                    <li class="tabs-nav__item">
                                        <a href="#live" class="tabs-nav__link" :class="{ 'js-active': tabPaneActive == 1 }" @click="showPane(1, $event)">Где будем жить</a>
                                    </li>
                                    <li class="tabs-nav__item">
                                        <a href="#food" class="tabs-nav__link" :class="{ 'js-active': tabPaneActive == 2 }" @click="showPane(2, $event)">Что будем есть</a>
                                    </li>
                                    <li class="tabs-nav__item">
                                        <a href="#drink" class="tabs-nav__link" :class="{ 'js-active': tabPaneActive == 3 }" @click="showPane(3, $event)">Что будем пить</a>
                                    </li>
                                    <li class="tabs-nav__item">
                                        <a href="#souvenirs" class="tabs-nav__link" :class="{ 'js-active': tabPaneActive == 4 }" @click="showPane(4, $event)">Что привезем домой</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tabs__content">
                                <div class="tab-pane" id="live" v-if="tabPaneActive == 1">
                                    <div class="tab-pane__inner panel">
                                        <div class="tab-pane__pictures tab-pane__pictures">
                                            <div class="tab-pane__picture-wrap">
                                                <picture>
                                                    <source media="(max-width: 56em)" srcset="img/live/hotel@1x.webp 1x, img/live/hotel@2x.webp 2x" type="image/webp">
                                                    <source media="(max-width: 56em)" srcset="img/live/hotel@1x.jpg 1x, img/live/hotel@2x.jpg 2x">
                                                    <source srcset="img/live/hotel@1.5x.webp 1x, img/live/hotel@3x.webp 2x" type="image/webp">
                                                    <img class="tab-pane__img" src="img/live/hotel@1.5x.jpg" srcset="img/live/hotel@3x.jpg 2x" alt="The Reef Playacar на Карибском море">
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="tab-pane__content">
                                            <p> Аутентичные отели с завтраками на всем маршруте (3-5*) и роскошный отель "все включено" The Reef Playacar на Карибском море (4*) </p>
                                            <div class="tab-pane__advice media">
                                                <span class="media__label label label--bold">Совет</span>
                                                <h6 class="media__title heading heading--h6"> Рекомендуем не засиживаться допоздна за просмотром мексиканских сериалов, чтобы не пропустить вкусный завтрак.</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="food" v-if="tabPaneActive == 2">
                                    <swiper :options="swiperOptions">
                                        <button class="swiper-button-prev" slot="button-prev">
                                            <svg class="icon swiper-button__icon">
                                                <use xlink:href="img/icons.svg#prev"></use>
                                            </svg>
                                        </button>
                                        <div class="swiper-pagination" slot="pagination"></div>
                                        <button class="swiper-button-next" slot="button-next">
                                            <svg class="icon swiper-button__icon">
                                                <use xlink:href="img/icons.svg#next"></use>
                                            </svg>
                                        </button>
                                        <swiper-slide>
                                            <div class="tab-pane__inner panel">
                                                <div class="tab-pane__pictures tab-pane__pictures">
                                                    <div class="tab-pane__picture-wrap">
                                                        <picture>
                                                            <source media="(max-width: 56em)" srcset="img/live/food2@1x.webp 1x, img/live/food2@2x.webp 2x" type="image/webp">
                                                            <source media="(max-width: 56em)" srcset="img/live/food2@1x.jpg 1x, img/live/food2@2x.jpg 2x">
                                                            <source srcset="img/live/food2@1.5x.webp 1x, img/live/food2@3x.webp 2x" type="image/webp">
                                                            <img class="tab-pane__img" src="img/live/food2@1.5x.jpg" srcset="img/live/food2@3x.jpg 2x" alt="Гуакамоле">
                                                        </picture>
                                                    </div>
                                                </div>
                                                <div class="tab-pane__content">
                                                    <p> Первое, что необходимо нам выучить при заказе еды – это «no picanto», основная часть всех мексиканских блюд готовится с перцем чили. </p>
                                                    <p> В период всего путешествия мы будем останавливаться в аутентичных ресторанчиках, где будем пробовать национальные блюда, закажем фирменный кукурузный суп с мясом позоле (Pozole) и энчиладу (Enchiladas) - вариация лазаньи под соусом. На десерт - пудинг Arroz con Leche. </p>
                                                    <p> Пробуем фирменное блюдо - Chiles en nogada. Это перец чили, фаршированный мясом, фруктами и специями. Всё это полито специальным сырным соусом и украшено гранатом. </p>
                                                    <p> Будем останавливаться возле лавок с фруктами и овощами. Пробуем боул со свежими ягодами, фруктами, гранолой и орешками и запиваем смузи из манго, миндаля и натурального йогурта. </p>
                                                </div>
                                            </div>
                                        </swiper-slide>
                                        <swiper-slide>
                                            <div class="tab-pane__inner panel">
                                                <div class="tab-pane__pictures tab-pane__pictures">
                                                    <div class="tab-pane__picture-wrap">
                                                        <picture>
                                                            <source media="(max-width: 56em)" srcset="img/live/food1@1x.webp 1x, img/live/food1@2x.webp 2x" type="image/webp">
                                                            <source media="(max-width: 56em)" srcset="img/live/food1@1x.jpg 1x, img/live/food1@2x.jpg 2x">
                                                            <source srcset="img/live/food1@1.5x.webp 1x, img/live/food1@3x.webp 2x" type="image/webp">
                                                            <img class="tab-pane__img" src="img/live/food1@1.5x.jpg" srcset="img/live/food1@3x.jpg 2x" alt="Жаркое из свинины">
                                                        </picture>
                                                    </div>
                                                    <div class="tab-pane__picture-wrap">
                                                        <picture>
                                                            <source media="(max-width: 56em)" srcset="img/live/food3@1x.webp 1x, img/live/food3@2x.webp 2x" type="image/webp">
                                                            <source media="(max-width: 56em)" srcset="img/live/food3@1x.jpg 1x, img/live/food3@2x.jpg 2x">
                                                            <source srcset="img/live/food3@1.5x.webp 1x, img/live/food3@3x.webp 2x" type="image/webp">
                                                            <img class="tab-pane__img" src="img/live/food3@1.5x.jpg" srcset="img/live/food3@3x.jpg 2x" alt="Арачеро">
                                                        </picture>
                                                    </div>
                                                </div>
                                                <div class="tab-pane__content">
                                                    <p> Кстати! Фрукты здесь вкуснейшие - их экспортируют в Америку. Также мы попробуем блюда национальной кухни: </p>
                                                    <p>
                                                        <b>Такос</b> – кукурузная лепешка, на которую сверху кладется мелко порезанное мясо, лук, кинза и все что угодно еще, сверху поливается острым соусом на основе чили абанеро. </p>
                                                    <p>
                                                        <b>Гуакамоле</b> – пюре из авокадо с помидорами, луком и чили абанеро </p>
                                                    <p>
                                                        <b>Мясо с соусом моле</b> – любые виды мяса в сложнейшем шоколадно-пряном соусе </p>
                                                    <p>
                                                        <b>Севиче</b> – коктейль из морепродуктов с лимонной заправкой </p>
                                                    <p>
                                                        <b>Тамаль</b> – пирожок из маисовой массы, завернутый в кукурузный початок и тушеный </p>
                                                    <p>
                                                        <b>Аррачера стейки</b> – специально маринованная очень мягкая часть говядины </p>
                                                    <p>
                                                        <b> Для самых смелых: съедобные кузнечики и экскамолеc - блюдо из муравьиных яиц </b>
                                                    </p>
                                                    <div class="tab-pane__advice media">
                                                        <span class="media__label label label--bold">Совет</span>
                                                        <h6 class="media__title heading heading--h6">Если ты не любишь лук, то сразу скажи об этом, поскольку в мексиканской кухне лук имеется почти везде.</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </swiper-slide>
                                    </swiper>
                                </div>
                                <div class="tab-pane" id="drink" v-if="tabPaneActive == 3">
                                    <div class="tab-pane__inner panel">
                                        <div class="tab-pane__pictures tab-pane__pictures">
                                            <div class="tab-pane__picture-wrap">
                                                <picture>
                                                    <source media="(max-width: 56em)" srcset="img/live/orchata@1x.webp 1x, img/live/orchata@2x.webp 2x" type="image/webp">
                                                    <source media="(max-width: 56em)" srcset="img/live/orchata@1x.jpg 1x, img/live/orchata@2x.jpg 2x">
                                                    <source srcset="img/live/orchata@1.5x.webp 1x, img/live/orchata@3x.webp 2x" type="image/webp">
                                                    <img class="tab-pane__img" src="img/live/orchata@1.5x.jpg" srcset="img/live/orchata@3x.jpg 2x" alt="Орчата">
                                                </picture>
                                            </div>
                                            <div class="tab-pane__picture-wrap">
                                                <picture>
                                                    <source media="(max-width: 56em)" srcset="img/live/tequila@1x.webp 1x, img/live/tequila@2x.webp 2x" type="image/webp">
                                                    <source media="(max-width: 56em)" srcset="img/live/tequila@1x.jpg 1x, img/live/tequila@2x.jpg 2x">
                                                    <source srcset="img/live/tequila@1.5x.webp 1x, img/live/tequila@3x.webp 2x" type="image/webp">
                                                    <img class="tab-pane__img" src="img/live/tequila@1.5x.jpg" srcset="img/live/tequila@3x.jpg 2x" alt="Текила">
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="tab-pane__content">
                                            <p> Мы будем дегустировать традиционные напитки Мексики — текилу, мескаль и пульке. На протяжении маршрута будем пить бутылочную воду, останавливаясь в ресторанчиках будем заказывать другие напитки: </p>
                                            <p>
                                                <b>Орчата</b> – сладкое рисовое молоко </p>
                                            <p>
                                                <b>Хамайка</b> – холодный сладкий каркадэ </p>
                                            <b>Агва де фрутас</b> – фруктовые воды, сок разбавленный водой с сахаром <p>
                                                <b>Мичелада</b> — пивной напиток с соком лайма и специями. </p>
                                            <div class="tab-pane__advice media">
                                                <span class="media__label label label--bold">Совет</span>
                                                <h6 class="media__title heading heading--h6">Как правильно пить текилу:</h6>
                                                <p class="media__desc"> Строгих правил не существует, но обычно текилу Gold пьют с цитрусом и с корицей, а Añejo вообще без всего для особого послевкусия, Grand añejo можно пить со льдом. Есть версия, согласно которой текилу надо пить, внюхивая соль через нос, а сок лайма выжимать прямо в глаз. Не пытайтесь повторить, трюк выполняется профессионалами! =))) </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="souvenirs" v-if="tabPaneActive == 4">
                                    <div class="tab-pane__inner panel">
                                        <div class="tab-pane__pictures tab-pane__pictures">
                                            <div class="tab-pane__picture-wrap">
                                                <picture>
                                                    <source media="(max-width: 56em)" srcset="img/live/stones_teotihuacan@1x.webp 1x, img/live/stones_teotihuacan@2x.webp 2x" type="image/webp">
                                                    <source media="(max-width: 56em)" srcset="img/live/stones_teotihuacan@1x.jpg 1x, img/live/stones_teotihuacan@2x.jpg 2x">
                                                    <source srcset="img/live/stones_teotihuacan@1.5x.webp 1x, img/live/stones_teotihuacan@3x.webp 2x" type="image/webp">
                                                    <img class="tab-pane__img" src="img/live/stones_teotihuacan@1.5x.jpg" srcset="img/live/stones_teotihuacan@3x.jpg 2x" alt="Камни">
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="tab-pane__content">
                                            <p> Самое главное, что мы привезем с собой – это наши впечатления, для родных и близких рекомендуем приобрести памятные сувениры. Каждый штат знаменит чем-то особенным: </p>
                                            <p>
                                                <b>Теотиуакан</b> – камни, обсидиан, серебро </p>
                                            <p>
                                                <b>Пуэбла</b> – керамика талавера </p>
                                            <b>Оахака</b> – текстиль и мескаль <p>
                                                <b>Чиапас</b> — шоколад, кофе, поделки из фетра, попоны, янтарь </p>
                                            <p>
                                                <b>Кампече</b> — шляпы из соломы Хипихапа </p>
                                            <div class="tab-pane__advice media">
                                                <span class="media__label label label--bold">Совет</span>
                                                <h6 class="media__title heading heading--h6">В Россию рaзpeшeнo бecпoшлиннo ввoзить нe бoлee 3-x литpoв любыx aлкoгoльныx нaпиткoв нa чeлoвeкa, пpи этoм кpeпocть нe имeeт знaчeния.</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tabs-component>
                </div>
            </section>
            <section class="section team" id="team">
                <div class="container">
                    <h2 class="section__heading heading heading--h3 heading--uppercase heading--text-center heading--has-action"> Наша команда </h2>
                    <div class="team__row">
                        <article-component inline-template>
                            <article class="article">
                                <div class="article__img-wrap">
                                    <picture>
                                        <source media="(max-width: 56em)" srcset="img/team/alina_strelec_de_castro@1x.webp 1x, img/team/alina_strelec_de_castro@2x.webp 2x" type="image/webp">
                                        <source media="(max-width: 56em)" srcset="img/team/alina_strelec_de_castro@1x.jpg 1x, img/team/alina_strelec_de_castro@2x.jpg 2x">
                                        <source srcset="img/team/alina_strelec_de_castro@1.5x.webp 1x, img/team/alina_strelec_de_castro@3x.webp 2x" type="image/webp">
                                        <img class="article__img" src="img/team/alina_strelec_de_castro@1.5x.jpg" srcset="img/team/alina_strelec_de_castro@3x.jpg 2x" alt="Алина Стрелец де Кастро">
                                    </picture>
                                </div>
                                <div class="article__header">
                                    <p class="article__heading">Алина Стрелец де Кастро*</p>
                                    <p class="article__subheading">Лицензированный гид Мексики, лингвист</p>
                                </div>
                                <div class="article__content" ref="collapse">
                                    <div class="article__content-inner" :class="{ 'js-active': isCollapsed }"> Я живу и работаю в Мексике 9 лет.  За это время у меня появился не только опыт организации бессчетного количества уникальных исторических, экологических и развлекательных туров, но и мексиканская семья :) что помогло еще более тесному соприкосновению с «настоящей Мексикой». С момента приезда сюда я вдруг стала чувствовать, что жизнь — это бесконечный праздник, где, чтобы ты ни делал, тебе все в удовольствие. Ни разу у меня не возникало ощущения, что я нахожусь «на работе».<br> Именно так создавался данный тур, в него мы вложили лучшее!<br> Получился очень насыщенный, РЕДКИЙ и ЭКСКЛЮЗИВНЫЙ маршрут, много активностей, разнообразие пейзажей и эзотерика!<br> Мы получим «взгляд изнутри» на жизнь местного населения, его традиции, быт, мировоззрение, прочувствуем истинный Дух страны!<br>
                                        <br> Три хорошие вещи, которые нужно знать про Мексику: потрясающая природа, древние традиции, похожий на русский менталитет.<br> И три плохие: ацтеки были каннибалами, мексиканцы лучше русских играют в футбол, и, если мексиканец говорит ahorita («сейчас, минуточку») — это значит «никогда».<br>
                                        <br> *автор текстов для сайта energytravel.pro </div>
                                </div>
                                <button class="article__button button button--inline" @click="collapseBlock">{{ isCollapsed ? 'Скрыть' : 'Подробнее' }}</button>
                            </article>
                        </article-component>
                        <article-component inline-template>
                            <article class="article">
                                <div class="article__img-wrap">
                                    <picture>
                                        <source media="(max-width: 56em)" srcset="img/team/nataly_nechaeva@1x.webp 1x, img/team/nataly_nechaeva@2x.webp 2x" type="image/webp">
                                        <source media="(max-width: 56em)" srcset="img/team/nataly_nechaeva@1x.jpg 1x, img/team/nataly_nechaeva@2x.jpg 2x">
                                        <source srcset="img/team/nataly_nechaeva@1.5x.webp 1x, img/team/nataly_nechaeva@3x.webp 2x" type="image/webp">
                                        <img class="article__img" src="img/team/nataly_nechaeva@1.5x.jpg" srcset="img/team/nataly_nechaeva@3x.jpg 2x" alt="Наталья Нечаева">
                                    </picture>
                                </div>
                                <div class="article__header">
                                    <p class="article__heading">Наталья Нечаева</p>
                                    <p class="article__subheading">Основатель компании Energy TRAVEL, сертифицированный организатор авторских туров, эколог</p>
                                </div>
                                <div class="article__content" ref="collapse">
                                    <div class="article__content-inner" :class="{ 'js-active': isCollapsed }"> Я - бесконечный путешественник. За 18 лет активного изучения мира я посетила более 40 стран. Туристические агентства никогда не могли создать для меня идеальное путешествие. Я люблю созерцать природные чудеса света, пускаться в здоровые авантюры, но вечером посещать театры и концерты классической музыки, поэтому я стала создавать авторские маршруты для себя и своих друзей по Европе, Азии и Америке. На сегодня их более 50.<br>
                                        <br> В Мексику я влюбилась 5 лет назад, за то, что здесь все настоящее, ничто не бывает половинным. Тогда и зародилась идея этого авторского тура, в котором мы увидим Мексику удивленными глазами. Мы разрабатывали его 6 месяцев!<br>
                                        <br> Минимум музеев, максимум будоражащих активностей.<br> Такого вы еще не испытывали, обещаем! </p>
                                    </div>
                                </div>
                                <button class="article__button button button--inline" @click="collapseBlock">{{ isCollapsed ? 'Скрыть' : 'Подробнее' }}</button>
                            </article>
                        </article-component>
                        <article-component inline-template>
                            <article class="article">
                                <div class="article__img-wrap">
                                    <picture>
                                        <source media="(max-width: 56em)" srcset="img/team/milena_leonenko@1x.webp 1x, img/team/milena_leonenko@2x.webp 2x" type="image/webp">
                                        <source media="(max-width: 56em)" srcset="img/team/milena_leonenko@1x.jpg 1x, img/team/milena_leonenko@2x.jpg 2x">
                                        <source srcset="img/team/milena_leonenko@1.5x.webp 1x, img/team/milena_leonenko@3x.webp 2x" type="image/webp">
                                        <img class="article__img" src="img/team/milena_leonenko@1.5x.jpg" srcset="img/team/milena_leonenko@3x.jpg 2x" alt="Милена Леоненко">
                                    </picture>
                                </div>
                                <div class="article__header">
                                    <p class="article__heading">Милена Леоненко</p>
                                    <p class="article__subheading">Основатель компании Energy TRAVEL, бизнес-архитектор</p>
                                </div>
                                <div class="article__content" ref="collapse">
                                    <div class="article__content-inner" :class="{ 'js-active': isCollapsed }"> Наше знакомство с Натальей произошло на одном из мероприятий, посвящённом развитию бизнес-проектов в Санкт-Петербурге. Некоторое время спустя наши дороги вновь сошлись, на этот раз - на одной из энергетических практик, после решили поужинать в тихом и уютном месте. В этот удивительный вечер, мы долго говорили. Основной темой разговора выступала - энергия. Ее источники, методы и способы восстановления.<br>
                                        <br> Наталья с упоением и энтузиазмом рассказывала о турах, которые она создавала и побывала вместе с туристами. Во время её рассказа, я внимательно слушала и мысленно выстраивала бизнес-процессы в голове. Мы настолько вдохновились идеей создания авторских туров, направленных на восстановление энергетического запаса каждого человека, что, недолго думая, написали на салфетке: «Energy TRAVEL». Это название отражает суть нашей деятельности, то ради чего мы просыпаемся по утрам, придумываем новые маршруты, как пазл собираем туристическую программу, ядром всего этого выступают предпочтения наших клиентов. Так родился авторский тур в Мексику - страну тропических джунглей, край забытых цивилизаций и жгучей текилы.<br>
                                        <br> Путешествия - прекрасный способ восполнения потраченной энергии и сил. Это не только - положительные эмоции, знакомства с новыми людьми и расширение кругозора - это ещё великолепная возможность почувствовать себя счастливым человеком.<br> Как говорил Альберт Эйнштейн: «Все в мире является энергией. Энергия лежит в основе всего». </div>
                                </div>
                                <button class="article__button button button--inline" @click="collapseBlock">{{ isCollapsed ? 'Скрыть' : 'Подробнее' }}</button>
                            </article>
                        </article-component>
                    </div>
                </div>
            </section>
            <section class="section pricing" id="pricing">
                <div class="container">
                    <h2 class="section__heading heading heading--h3 heading--uppercase heading--text-center heading--has-action"> Стоимость энерджи-тура </h2>
                    <div class="pricing__grid">
                        <div class="pricing__form panel">
                            <form-pricing inline-template @form-submit="handlePricingForm">
                                <form action="/" class="form form--pricing">
                                    <div class="form__group">
                                        <label class="control control--select">
                                            <span class="control__label control__label--bold">Выберете дату</span>
                                            <div class="control__wrap">
                                                <svg class="icon control__icon">
                                                    <use xlink:href="img/icons.svg#calendar"></use>
                                                </svg>
                                                <select class="control__input" name="tours" id="tours" @change="checkSeats" v-model="selected">
                                                    <option v-for="tour in tours" :value="tour.id">
                                                        {{ tour.date }}
                                                    </option>
                                                </select>
                                                <svg class="icon control__arrow">
                                                    <use xlink:href="img/icons.svg#arrow-bottom"></use>
                                                </svg>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="form__group form__group--border-b">
                                        <span class="form__param">{{ selectedTour.seatsAvailable }}/{{ selectedTour.seatsTotal }} мест осталось</span>
                                        <span class="form__param">{{ tourDuration }}</span>
                                    </div>
                                    <div class="form__group form__group--border-b">
                                        <div class="price">
                                            <strong class="price__current">$ {{ selectedTour.priceCurrent }}</strong>
                                            <del class="price__prev">${{ selectedTour.pricePrev }}</del>
                                        </div>
                                    </div>
                                    <div class="form__group form__group--padding-lg">
                                        <label for="seats" class="control control--numeric">
                                            <span class="control__label">Кол-во мест:</span>
                                            <div class="control__wrap">
                                                <button type="button" class="control__btn control__btn--minus" @click="subtractSeats" aria-label="Уменьшить"> - </button>
                                                <input class="control__input" type="number" name="seats" id="seats" readonly :value="seats">
                                                <button type="button" class="control__btn control__btn--plus" @click="addSeats" aria-label="Увеличить"> + </button>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="form__group">
                                        <p class="form__notice"> Для бронирования тура достаточно 2000$ </p>
                                    </div>
                                    <div class="form__group">
                                        <button class="button button--primary button--uppercase button--bold button--block" @click.prevent="formSubmit"> Хочу в Мексику </button>
                                    </div>
                                </form>
                            </form-pricing>
                        </div>
                        <tabs-component inline-template>
                            <div class="pricing__tabs tabs">
                                <div class="tabs__nav tabs-nav">
                                    <ul class="tabs-nav__list">
                                        <li class="tabs-nav__item">
                                            <a href="#included" class="tabs-nav__link" :class="{ 'js-active': tabPaneActive == 1 }" @click="showPane(1, $event)">Что входит</a>
                                        </li>
                                        <li class="tabs-nav__item">
                                            <a href="#notincluded" class="tabs-nav__link" :class="{ 'js-active': tabPaneActive == 2 }" @click="showPane(2, $event)">Что не входит</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tabs__content">
                                    <div class="tab-pane" key="included" id="included" v-if="tabPaneActive == 1">
                                        <div class="tab-pane__content">
                                            <ul class="list list--ul">
                                                <li>трансфер аэропорт-отель-аэропорт</li>
                                                <li>размещение в отелях 3-5* по маршруту, 4* на море</li>
                                                <li>питание: завтраки + все включено на море</li>
                                                <li>вода 2 л/день</li>
                                                <li>все активности по программе</li>
                                                <li>профессиональный гид</li>
                                                <li>комфортабельный транспорт с профессиональным водителем:<br> Mercedes-Benz/Volkswagen</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane" key="notincluded" id="notincluded" v-if="tabPaneActive == 2">
                                        <div class="tab-pane__content">
                                            <ul class="list list--ul">
                                                <li>авиаперелет</li>
                                                <li>виза</li>
                                                <li>страховка</li>
                                                <li>обеды/ужины по маршруту</li>
                                                <li>личные расходы</li>
                                                <li>одноместное проживание + 850$</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tabs-component>
                        <div class="pricing__widget widget widget--aviasales" ref="aviasales"></div>
                    </div>
                </div>
            </section>
            <section class="section feedback" id="feedback">
                <div class="container">
                    <h2 class="section__heading heading heading--h3 heading--uppercase heading--text-center heading--has-action"> Отзывы </h2>
                    <div class="feedback__row">
                        <article-component inline-template>
                            <article class="article">
                                <div class="article__img-wrap">
                                    <picture>
                                        <source media="(max-width: 56em)" srcset="img/feedback/bondarenko_nataly@1x.webp 1x, img/feedback/bondarenko_nataly@2x.webp 2x" type="image/webp">
                                        <source media="(max-width: 56em)" srcset="img/feedback/bondarenko_nataly@1x.jpg 1x, img/feedback/bondarenko_nataly@2x.jpg 2x">
                                        <source srcset="img/feedback/bondarenko_nataly@1.5x.webp 1x, img/feedback/bondarenko_nataly@3x.webp 2x" type="image/webp">
                                        <img class="article__img" src="img/feedback/bondarenko_nataly@1.5x.jpg" srcset="img/feedback/bondarenko_nataly@3x.jpg 2x" alt="Bondarenko Nataly">
                                    </picture>
                                </div>
                                <div class="article__header">
                                    <p class="article__heading">Bondarenko Nataly</p>
                                </div>
                                <div class="article__content" ref="collapse">
                                    <div class="article__content-inner" :class="{ 'js-active': isCollapsed }"> В июле планировали 5-ти дневный тур по Юкатану семьей. Гидов на выбор было несколько, но так случилось, что остановились на Алине - изначально привлекла стоимость тура. И, признаюсь, немного волновались... Но что могу сказать - ни разу не пожалели о выборе! Алина большая умница! Отработала все 5 дней на полную катушку! Интересный, знающий, начитанный гид. Пять дней пути и 2600 км дороги, при том что с нами был 9-ти летний ребенок... Однако! В очередной раз убедилась, как же много зависит от гида! За эти долгие часы пути и непрерывного общения, нам удалось так много поговорить о стране, ее истории, культуре, характере, обычаях, загадках, и много о чем еще, чего не прочтешь ни в одном общедоступном путеводителе и источнике, что непременно захотелось вернуться, но только теперь уже не на Юкатан, конечно, а в центральную часть Мексики, и в несколько ином формате)). И непременно с этим гидом! Алиночка, приогромное спасибо вам! И до новых встреч!) </div>
                                </div>
                                <button class="article__button button button--inline" @click="collapseBlock">{{ isCollapsed ? 'Скрыть' : 'Подробнее' }}</button>
                            </article>
                        </article-component>
                        <article-component inline-template>
                            <article class="article">
                                <div class="article__img-wrap">
                                    <picture>
                                        <source media="(max-width: 56em)" srcset="img/feedback/ushakov_artem@1x.webp 1x, img/feedback/ushakov_artem@2x.webp 2x" type="image/webp">
                                        <source media="(max-width: 56em)" srcset="img/feedback/ushakov_artem@1x.jpg 1x, img/feedback/ushakov_artem@2x.jpg 2x">
                                        <source srcset="img/feedback/ushakov_artem@1.5x.webp 1x, img/feedback/ushakov_artem@3x.webp 2x" type="image/webp">
                                        <img class="article__img" src="img/feedback/ushakov_artem@1.5x.jpg" srcset="img/feedback/ushakov_artem@3x.jpg 2x" alt="Ushakov Artem">
                                    </picture>
                                </div>
                                <div class="article__header">
                                    <p class="article__heading">Ushakov Artem</p>
                                </div>
                                <div class="article__content" ref="collapse">
                                    <div class="article__content-inner" :class="{ 'js-active': isCollapsed }"> Алина, огромное спасибо за те несколько дней, что мы провели с Вами в путешествии по удивительной Мексике. К выбору гида всегда подхожу с особой трепетностью и тщательностью (ведь во многом именно от него как от проводника в культуру, быт страны зависит и впечатление о путешествии). Поэтому, "перелопатив" огромное количество предложений в Интернете, выбрал Алину как человека, который, как показалось, наиболее полно и, что немаловажно, интересно может донести информацию о тех местах, где мы планировали побывать. И жалеть об этом не пришлось ни разу.<br>
                                        <br> Все дни мы передвигались на комфортабельном внедорожнике. Весь путь Алина как кладезь знаний с упоением рассказывала нам о многих аспектах Мексики. Что поразило, знания не были однобокими (как это часто бывает, когда человек увлекается каким-то определённым направлением в изучаемом предмете), а были синтезом из множества разных сфер: истории, философии, теологии, эзотерики. При этом она отлично владеет несколькими языками (так что если беспокоитесь насчёт того, как будете объясняться с местными - не переживайте). За несколько дней мы посетили: Эк-Балам, Чичен-Ицу, красивейший сенот, аутентичные мексиканские городки Мериду и Кампече (в которых у нас было полно времени, чтобы погулять, сделать покупки, отведать местной кухни), Ушмаль, райский уголок Селестун (заповедник фламинго, он настолько красив, что оказываешься буквально в раю - птицы там себя чувствуют комфортно (и далеко не только фламинго), летают и гнездятся прямо рядом с тобой, что ты буквально можешь прикоснуться ко всей этой красоте, которая словно сошла с картинки и оказалась у тебя перед глазами; в более чем часовом индивидуальном путешествии на лодке мы также смогли наблюдать крокодилов (которых попалось аж три особи), симпатичные мангровые заросли), две испанские асьенды (в которых сохранились предметы быта, искусства, промышленности колониальных времён) и многое другое. <br /> Такое путешествие запомнится надолго.<br>
                                        <br /> Отдельное спасибо хочу выразить Давиду (который был водителем на всём протяжении нашего пути). Ни одной аварийной ситуации, отличное знание местности и дорог, а также особо чуткое отношение к нам как к туристам (всегда беспокоился, чтобы нам было удобно, комфортно). David, muchas gracias por esa actitud devote! (надеюсь, правильно написал)<br /> Организация тура - высший класс. Так что рекомендую. Поверьте, есть с чем сравнивать, и на этом туре был действительно высокий уровень планирования и тайминга маршрута, информации о стране, интересная её подача (очень живо, эмоционально, что буквально заряжаешься любовью к Мексике), а также пунктуальность и забота как о членах своей семьи! <br /> Очень надеюсь, что мы ещё вернёмся и отправимся в следующее приключение с вами, Алина и Давид! :-) </div>
                                </div>
                                <button class="article__button button button--inline" @click="collapseBlock">{{ isCollapsed ? 'Скрыть' : 'Подробнее' }}</button>
                            </article>
                        </article-component>
                        <article-component inline-template>
                            <article class="article">
                                <div class="article__img-wrap">
                                    <picture>
                                        <source media="(max-width: 56em)" srcset="img/feedback/kovaleva_julia@1x.webp 1x, img/feedback/kovaleva_julia@2x.webp 2x" type="image/webp">
                                        <source media="(max-width: 56em)" srcset="img/feedback/kovaleva_julia@1x.jpg 1x, img/feedback/kovaleva_julia@2x.jpg 2x">
                                        <source srcset="img/feedback/kovaleva_julia@1.5x.webp 1x, img/feedback/kovaleva_julia@3x.webp 2x" type="image/webp">
                                        <img class="article__img" src="img/feedback/kovaleva_julia@1.5x.jpg" srcset="img/feedback/kovaleva_julia@3x.jpg 2x" alt="Kovaleva Julia">
                                    </picture>
                                </div>
                                <div class="article__header">
                                    <p class="article__heading">Kovaleva Julia</p>
                                </div>
                                <div class="article__content" ref="collapse">
                                    <div class="article__content-inner" :class="{ 'js-active': isCollapsed }"> Мы с мужем ездили на 2 индивидуальные экскурсии с Алиной. Первая наша поездка была, скорее, телесно и духовно ориентированная, в Темаскаль - индейскую сауну. Здесь с помощью Алины мы окунулись в глубокую и эзотерическую традицию древних индейцев, которые воспринимают обряд сауны как перерождение и очищение. Это был очень интересный опыт и знакомство с настоящими шаманами, где Алина выступала, как гид и переводчик.<br>
                                        <br /> Вторая была культурно-историческая, на пирамиды, с заездом подземные озёра - сеноты, где можно было поплавать и освежиться после жаркого дня. Экскурсия была очень насыщенная как впечатлениями, так и новой интереснейшей информацией. За время нашей поездки, Алина успела нам рассказать всю историю Мексики со времён Майя, конкистадоров до сегодняшних дней. С первых минут нам стало ясно, что Алина очень глубоко разбирается в истории и культуре Мексики, с лёгкостью и улыбкой отвечает на самые сложные и каверзные вопросы и у неё, определённо, огромный талант рассказчика и гида! Спасибо большое! </p>
                                    </div>
                                </div>
                                <button class="article__button button button--inline" @click="collapseBlock">{{ isCollapsed ? 'Скрыть' : 'Подробнее' }}</button>
                            </article>
                        </article-component>
                    </div>
                </div>
            </section>
            <section class="section faq">
                <div class="section__cover">
                    <picture>
                        <source media="(max-width: 56em)" srcset="img/illustrations/illustration3@1x.webp 1x, img/illustrations/illustration3@2x.webp 2x" type="image/webp">
                        <source media="(max-width: 56em)" srcset="img/illustrations/illustration3@1x.png 1x, img/illustrations/illustration3@2x.png 2x">
                        <source srcset="img/illustrations/illustration3@1.5x.webp 1x, img/illustrations/illustration3@3x.webp 2x" type="image/webp">
                        <img class="section__cover-img" src="img/illustrations/illustration3@1.5x.png" srcset="img/illustrations/illustration3@3x.png 2x" alt="Иллюстрация">
                    </picture>
                </div>
                <div class="container" id="faq">
                    <h2 class="section__heading heading heading--h3 heading--uppercase heading--text-center"> Часто задаваемые вопросы </h2>
                    <ul class="faq__list">
                        <li class="faq__item">
                            <accordion-component inline-template>
                                <div class="accordion" :class="{ 'js-active': isCollapsed }">
                                    <button class="accordion__heading heading heading--h5" :class="{ 'js-active': isCollapsed }" @click="collapseBlock"> Что нужно знать о Мексике </button>
                                    <div class="accordion__content" ref="collapse">
                                        <div class="accordion__content-inner">
                                            <ul class="list-block">
                                                <li class="list-block__item">
                                                    <div class="media">
                                                        <svg class="icon media__icon">
                                                            <use xlink:href="img/icons.svg#flag-alt"></use>
                                                        </svg>
                                                        <p class="media__title heading heading--h5">Язык</p>
                                                        <p class="media__desc">Основной язык – Испанский. Но также среди местного населения присутствует множество индейских диалектов. </p>
                                                    </div>
                                                </li>
                                                <li class="list-block__item">
                                                    <div class="media">
                                                        <svg class="icon media__icon">
                                                            <use xlink:href="img/icons.svg#institution"></use>
                                                        </svg>
                                                        <p class="media__title heading heading--h5">Религия</p>
                                                        <p class="media__desc">В Мексике нет официальной государственной религии, страна открыта в религиозном плане. Но наиболее распространенная религия – католицизм.</p>
                                                    </div>
                                                </li>
                                                <li class="list-block__item">
                                                    <div class="media">
                                                        <svg class="icon media__icon">
                                                            <use xlink:href="img/icons.svg#money"></use>
                                                        </svg>
                                                        <p class="media__title heading heading--h5">Валюта</p>
                                                        <p class="media__desc">Мексиканский песо. Во многих туристических зонах принимается к оплате также Американский доллар. Курс доллара на данный момент равен прибл. 18 песо за 1 доллар. В Мехико сити рекомендуется менять доллары в аэропорту. В Канкуне и на Ривьере Майя, наоборот, рекомендуется менять валюту в городе в обменных пунктах (в аэропорту курс выше всегда). </p>
                                                    </div>
                                                </li>
                                                <li class="list-block__item">
                                                    <div class="media">
                                                        <svg class="icon media__icon">
                                                            <use xlink:href="img/icons.svg#thermometer"></use>
                                                        </svg>
                                                        <p class="media__title heading heading--h5">Климат</p>
                                                        <p class="media__desc">Тропический на юге и субтропический на севере. Температура зависит от региона. Климат приятный. Высокий пляжный сезон на побережье приходится на период с декабря по апрель. На Карибском побережье сезон длится круглый год, море теплое всегда. С сентября по начало ноября – сезон небольших ветров и дождя. В ноябре температура по нашему маршруту от 22°С до 28°С, в январе от 21°С до 26°С, ночью в Мехико может упасть до +7°С.</p>
                                                    </div>
                                                </li>
                                                <li class="list-block__item">
                                                    <div class="media">
                                                        <svg class="icon media__icon">
                                                            <use xlink:href="img/icons.svg#bus"></use>
                                                        </svg>
                                                        <p class="media__title heading heading--h5">Транспорт</p>
                                                        <p class="media__desc">В Мексике действует большая разветвленная сеть внутренних недорогих авиаперевозчиков. Хорошо развито междугороднее автобусное сообщение. Автобусы чистые, комфортные и ходят по расписанию. Железнодорожное сообщение не развито в стране.</p>
                                                    </div>
                                                </li>
                                                <li class="list-block__item">
                                                    <div class="media">
                                                        <svg class="icon media__icon">
                                                            <use xlink:href="img/icons.svg#dish"></use>
                                                        </svg>
                                                        <p class="media__title heading heading--h5">Кухня</p>
                                                        <p class="media__desc">Очень часто в блюдах присутствуют три компонента - острый перец чили, тортильяс (кукурузные лепешки) и фасоль или рис. Много мясных блюд (говядина, свинина, курица, баранина) и острых овощных, рыбы, морепродуктов, бобовых, специй. В Мексике много фруктов и овощей в течение всего года. Многие блюда готовятся на основе разного вида соусов как острых, так и не острых.</p>
                                                    </div>
                                                </li>
                                                <li class="list-block__item">
                                                    <div class="media">
                                                        <svg class="icon media__icon">
                                                            <use xlink:href="img/icons.svg#water"></use>
                                                        </svg>
                                                        <p class="media__title heading heading--h5">Вода</p>
                                                        <p class="media__desc">В Мексике не пьют воду из-под крана, но она пригодна для купания и чистки зубов. Питьевая вода покупается в магазинах.</p>
                                                    </div>
                                                </li>
                                                <li class="list-block__item">
                                                    <div class="media">
                                                        <svg class="icon media__icon">
                                                            <use xlink:href="img/icons.svg#wallet"></use>
                                                        </svg>
                                                        <p class="media__title heading heading--h5">Чаевые</p>
                                                        <p class="media__desc">Общепринятая норма – оставлять 10-15% от стоимости заказа. Чаевые принято оставлять всему обслуживающему персоналу, в том числе гиду и водителю. Это не обязательно, но всегда приветствуется (дело в том, что в Мексике очень низкие зарплаты в сфере обслуживания и люди этой занятности, в основном, живут на заработанные чаевые).</p>
                                                    </div>
                                                </li>
                                                <li class="list-block__item">
                                                    <div class="media">
                                                        <svg class="icon media__icon">
                                                            <use xlink:href="img/icons.svg#bolt"></use>
                                                        </svg>
                                                        <p class="media__title heading heading--h5">Электричество</p>
                                                        <p class="media__desc">Напряжение электросети в Мексике составляет 110 Вольт. Розетки «американского» стиля. Обязательно берите с собой адапторы для телефонов, видео камер и т.п.</p>
                                                    </div>
                                                </li>
                                                <li class="list-block__item">
                                                    <div class="media">
                                                        <svg class="icon media__icon">
                                                            <use xlink:href="img/icons.svg#error-circle"></use>
                                                        </svg>
                                                        <p class="media__title heading heading--h5">Таможня</p>
                                                        <p class="media__desc">Запрещен ввоз фруктов, овощей, мясных, молочных и рыбных изделий, растений, черенков и семян растений, цветов; медикаментов, которыми не пользуется пассажир; психотропных веществ; порнографических изданий.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <p class="media__title">
                                                            <span class="label label--bold">Важно</span>
                                                        </p>
                                                        <p class="media__desc">Разрешено ввозить только 20 пачек сигарет на человек, при обнаружении большего количества полагается штраф.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </accordion-component>
                        </li>
                        <li class="faq__item">
                            <accordion-component inline-template>
                                <div class="accordion" :class="{ 'js-active': isCollapsed }">
                                    <button class="accordion__heading heading heading--h5" :class="{ 'js-active': isCollapsed }" @click="collapseBlock"> Про безопасность </button>
                                    <div class="accordion__content" ref="collapse">
                                        <div class="accordion__content-inner">
                                            <p> В крупных городах Мексики и во всех курортных зонах безопасность туристов обеспечивается на высоком уровне. Мы можем спокойно перемещаться по отельной и туристической зоне. <p>
                                                    <p> Сумки с ценностями, деньгами и документами обязательно держать при себе и всегда на виду, прижимать сумки крепко к себе. Распространены случаи банальных карманных краж среди туристов. </p>
                                                    <p> Не рекомендуется выезжать в незнакомые районы без сопровождения и также не рекомендуется находиться в темное время суток в безлюдных местах. </p>
                                                    <p> Такси рекомендуется брать только с официальных стоянок («sitios»). Рекомендуется заказывать такси по телефону, получив все данные о машине и водителе от диспетчера. </p>
                                                    <p> Ездить лучше по платным («cuota») дорогам - они более безопасны. Туристам рекомендуется совершать поездки на автомобиле, автобусе и поездах в дневное время суток, что мы и будем делать. </p>
                                        </div>
                                    </div>
                                </div>
                            </accordion-component>
                        </li>
                        <li class="faq__item">
                            <accordion-component inline-template>
                                <div class="accordion" :class="{ 'js-active': isCollapsed }">
                                    <button class="accordion__heading heading heading--h5" :class="{ 'js-active': isCollapsed }" @click="collapseBlock"> Как получить визу </button>
                                    <div class="accordion__content" ref="collapse">
                                        <div class="accordion__content-inner">
                                            <p> В 2019 году для граждан РФ получение мексиканской визы не требуется, требуется оформить электронное разрешение (SAE – Sistema de Autorización Electrónica), по которому можно однократно въехать в Мексику в течение 30 дней после его выдачи и срок пребывания не должен превышать 180 дней. Получаем его бесплатно из любой точки планеты максимум в течение 30 мин. Таким образом для тура с 09 ноября 2019 необходимо подавать заявку на разрешение с 14 октября 2019, для тура с 28 декабря 2019 разрешение получаем после 02 декабря 2019. Для оформления достаточно заполнить анкету <a href="https://embamex.sre.gob.mx/rusia/index.php/ru/component/content/article/183" target="_blank" rel="nofollow">на сайте</a> Посольства Мексики в Москве, распечатать и взять с собой полученное разрешение. </p>
                                            <p> Для помощи в заполнении анкеты, а также для индивидуальной проработки визового вопроса, пожалуйста, свяжитесь <a href="#contacts" data-smooth>с нами</a>. </p>
                                        </div>
                                    </div>
                                </div>
                            </accordion-component>
                        </li>
                        <li class="faq__item">
                            <accordion-component inline-template>
                                <div class="accordion" :class="{ 'js-active': isCollapsed }">
                                    <button class="accordion__heading heading heading--h5" :class="{ 'js-active': isCollapsed }" @click="collapseBlock"> Зачем нужна страховка </button>
                                    <div class="accordion__content" ref="collapse">
                                        <div class="accordion__content-inner">
                                            <p> Медицинская страховка для поездки в Мексику не является обязательной. Не обязательно покупать полис, чтобы получить разрешение на въезд. Это необходимо сделать для того, чтобы обеспечить свою безопасность при непредвиденных ситуациях. Покупка страхового полиса позволит тебе сохранить свои нервы, драгоценное время и вовремя получить медицинскую помощь, при этом ты не несешь больших материальных затрат. </p>
                                            <p> При покупке страхового полиса обязательно обрати внимание на следующие крайне важные нюансы: </p>
                                            <ul class="list list--ul">
                                                <li>Срок полиса;</li>
                                                <li>Лимит страхового покрытия;</li>
                                                <li>Размер выплат при возникновении страхового случая.</li>
                                            </ul>
                                            <p> По возможности, включи в страховой полис такие риски, как кража багажа, утрата документов и необходимость в услугах квалифицированного юриста. </p>
                                            <h5 class="heading heading--h5"> Сколько стоит страховка для путешественника? </h5>
                                            <p> Стоимость страхового полиса (ВЗР) зависит от страны пребывания, срока страхования, перечня медицинских услуг, необходимости включения дополнительных опций, к примеру стоматологии. </p>
                                            <h5 class="heading heading--h5"> Где можно купить страховку? </h5>
                                            <p> При помощи нашего партнера Aviasales ты можешь: </p>
                                            <ol class="list list--ol">
                                                <li>Самостоятельно подобрать для себя подходящий полис ВЗР: по стоимости, набору страховых рисков </li>
                                                <li>Выбрать страховую компанию из широкого перечня: Ренессанс, Росгосстрах, Согласие, ВСК, Сбербанк Страхование, УралСиб Страхование и др.</li>
                                                <li>Включить в страховку дополнительные услуги по страхованию: потеря багажа, стоматологические услуги, гражданская ответственность, отмена поездки и др.</li>
                                                <li>Оформление страхового полоса ВЗР делается в течение 20-ти минут</li>
                                            </ol>
                                            <h5 class="heading heading--h5"> Можно ли обойтись без оформления страховки? </h5>
                                            <p> Если ты не желаешь оформлять полис страхования, то будешь обязан предоставить выписку банковского счета о наличии нужной суммы денег, которая может тебе потребоваться при необходимости лечения. </p>
                                            <p> Оформление полиса ВЗР - это возможность наслаждаться отдыхом, и не думать о непредвиденных расходах в случае форс-мажора со здоровьем. </p>
                                        </div>
                                    </div>
                                </div>
                            </accordion-component>
                        </li>
                        <li class="faq__item">
                            <accordion-component inline-template>
                                <div class="accordion" :class="{ 'js-active': isCollapsed }">
                                    <button class="accordion__heading heading heading--h5" :class="{ 'js-active': isCollapsed }" @click="collapseBlock"> Как подготовиться к поездке </button>
                                    <div class="accordion__content" ref="collapse">
                                        <div class="accordion__content-inner">
                                            <p>Взять с собой:</p>
                                            <ul class="list list--ul">
                                                <li>Крем от загара с защитой минимум 50 SPF</li>
                                                <li>Шляпы с полями, кепки, косынки</li>
                                                <li>Легкую одежду из натуральных тканей для дневной температуры от 22°С до 28°С</li>
                                                <li>Теплую одежду для ночной температуры в районе Мехико +7°С</li>
                                                <li>Кроссовки, либо другую удобную закрытую обувь</li>
                                                <li>Аптечку с минимальными необходимыми лекарствами (антибиотики в Мексике можно приобрести только по рецепту врача, лучше запастись необходимым заранее)</li>
                                                <li>Адаптеры для зарядки телефонов, фотокамер, планшетов и т.п.</li>
                                                <li>Деньги в $ для обмена на карманные песо</li>
                                                <li>Сумку (рюкзак) для минимально необходимых вещей на экскурсиях</li>
                                            </ul>
                                            <div class="media">
                                                <p class="media__title">
                                                    <span class="label label--bold">Важно</span>
                                                </p>
                                                <p class="media__desc">Связь на протяжении маршрута может быть не стабильной или вовсе отсутствовать, но во всех отелях будет бесплатный wi-fi, а также банкоматы для снятия наличных в песо</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </accordion-component>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="section steps">
                <div class="container">
                    <h2 class="section__heading heading heading--h3 heading--uppercase heading--text-center"> Этапы участия в туре </h2>
                    <ul class="steps__list">
                        <li class="steps__item">
                            <div class="media media--center media--square-icon">
                                <svg class="icon media__icon">
                                    <use xlink:href="img/icons.svg#phone"></use>
                                </svg>
                                <p class="media__desc"> Получаем твою заявку с сайта, связываемся в течение рабочего дня, обговариваем детали </p>
                            </div>
                        </li>
                        <li class="steps__item">
                            <div class="media media--center media--square-icon">
                                <svg class="icon media__icon">
                                    <use xlink:href="img/icons.svg#file-doc"></use>
                                </svg>
                                <p class="media__desc"> Получаем твою копию паспорта, готовим договор </p>
                            </div>
                        </li>
                        <li class="steps__item">
                            <div class="media media--center media--square-icon">
                                <svg class="icon media__icon">
                                    <use xlink:href="img/icons.svg#money"></use>
                                </svg>
                                <p class="media__desc"> Получаем от тебя предоплату 50% для бронирования места </p>
                            </div>
                        </li>
                        <li class="steps__item">
                            <div class="media media--center media--square-icon">
                                <svg class="icon media__icon">
                                    <use xlink:href="img/icons.svg#chat"></use>
                                </svg>
                                <p class="media__desc"> Включаем тебя в чат для онлайн информирования 24/7 </p>
                            </div>
                        </li>
                        <li class="steps__item">
                            <div class="media media--center media--square-icon">
                                <svg class="icon media__icon">
                                    <use xlink:href="img/icons.svg#bus"></use>
                                </svg>
                                <p class="media__desc"> Встречаем тебя в Мехико в назначенный день </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </main>
        </main>
        <transition name="fade">
            <div v-if="modals.video" class="modal modal--video" v-cloak @click.self="toggleModal('video')" role="dialog">
                <div class="modal__inner">
                    <button class="modal__close" @click="toggleModal('video')">
                        <svg class="icon modal__close-icon">
                            <use xlink:href="img/icons.svg#cross"></use>
                        </svg>
                    </button>
                    <div class="modal__content">
                        <div class="widget widget--video">
                            <video src="files/video.mp4" ref="video" @pause="videoStatus = 'paused'" @play="videoStatus = 'playing'"></video>
                            <transition name="fade">
                                <button v-show="videoStatus === 'paused'" class="widget__button" @click="playVideo()">
                                    <svg class="icon toggle__icon">
                                        <use xlink:href="img/icons.svg#play"></use>
                                    </svg>
                                </button>
                            </transition>
                        </div>
                    </div>
                </div>
            </div>
        </transition>
        <transition name="fade">
            <div v-if="modals.form" class="modal modal--form" v-cloak @click.self="toggleModal('form')" role="dialog">
                <div class="modal__inner">
                    <button class="modal__close" @click="toggleModal('form')">
                        <svg class="icon modal__close-icon">
                            <use xlink:href="img/icons.svg#cross"></use>
                        </svg>
                    </button>
                    <div class="modal__content">
                        <form-request :selected-tour="selectedTour" :referrer="referrer" inline-template>
                            <form action="/mail.php" class="form form--request" ref="form">
                                <h3 v-if="!success && !error" class="modal__heading heading heading--h4 heading--text-center" v-html="formTitle">
                                </h3>
                                <div class="form__main" v-if="!success && !error">
                                    <div class="form__group">
                                        <label class="control" :class="{ 'js-error': validation.name === false }">
                                            <input type="text" class="control__input" name="name" @blur="validate($event)" v-model="name" required>
                                            <transition name="fade">
                                                <div class="control__label control__label--floating" v-show="!name">Имя</div>
                                            </transition>
                                        </label>
                                    </div>
                                    <div class="form__group">
                                        <label class="control" :class="{ 'js-error': validation.phone === false }">
                                            <input type="tel" class="control__input" name="phone" @blur="validate($event)" v-model="phone" ref="phone" required>
                                            <transition name="fade">
                                                <div class="control__label control__label--floating" v-show="!phone">Телефон/WhatsApp</div>
                                            </transition>
                                        </label>
                                    </div>
                                    <div class="form__group">
                                        <label class="control" :class="{ 'js-error': validation.contact === false }">
                                            <input type="text" class="control__input" name="contact" @blur="validate($event)" v-model="contact" required>
                                            <transition name="fade">
                                                <div class="control__label control__label--floating" v-show="!contact">E-mail или ID в соц. сетях</div>
                                            </transition>
                                        </label>
                                    </div>
                                    <div class="form__group">
                                        <label class="control" :class="{ 'js-error': validation.city === false }">
                                            <input type="text" class="control__input" name="city" @blur="validate($event)" v-model="city" required>
                                            <transition name="fade">
                                                <div class="control__label control__label--floating" v-show="!city">Город</div>
                                            </transition>
                                        </label>
                                    </div>
                                    <div class="form__group form__group--agree">
                                        <label class="control control--checkbox" :class="{ 'js-error': validation.agree === false }">
                                            <input type="checkbox" name="agree" class="control__input" @change="validate($event)" value="true" v-model="agree" checked required>
                                            <span class="control__check">
                                                <svg class="icon control__check-icon">
                                                    <use xlink:href="img/icons.svg#checked"></use>
                                                </svg>
                                            </span>
                                            <span class="control__label">Я даю свое согласие на обработку персональных данных и соглашаюсь с <a href="files/privacy.pdf" target="_blank">условиями и политикой конфиденциальности</a></span>
                                        </label>
                                    </div>
                                    <div class="form__group">
                                        <button class="button button--primary button--uppercase button--bold button--block" type="submit" @click.prevent="submitForm">Прислать программу</button>
                                    </div>
                                </div>
                                <div class="form__success" v-if="success">
                                    <div class="form__group">
                                        <p class="heading heading--h5 heading--text-center text-success">Ваша заявка успешно отправлена!</p>
                                        <p>Вы получите презентацию в ближайшее время.<br /> Не забудьте проверить почту!</p>
                                    </div>
                                    <div class="form__group">
                                        <button class="button button--primary button--uppercase button--bold button--block" type="submit" @click.prevent="success = false">Заполнить еще раз</button>
                                    </div>
                                </div>
                                <div class="form__danger" v-if="error">
                                    <div class="form__group">
                                        <p class="heading heading--h5 heading--text-center text-danger">Во время отправки произошла ошибка!</p>
                                        <p>Повторите попытку позже.</p>
                                    </div>
                                    <div class="form__group">
                                        <button class="button button--primary button--uppercase button--bold button--block" type="submit" @click.prevent="error = false">Попробовать еще раз!</button>
                                    </div>
                                </div>
                            </form>
                        </form-request>
                    </div>
                </div>
            </div>
        </transition>
        <footer class="footer" role="contentinfo" id="contacts">
            <div class="container">
                <div class="footer__inner">
                    <div class="footer__row">
                        <div class="footer__item">
                            <div class="footer__logo" v-cloak v-if="screenWidth < 768">
                                <a href="#top" class="logo" data-smooth>
                                    <svg class="icon logo__img">
                                        <use xlink:href="img/icons.svg#logo"></use>
                                    </svg>
                                </a>
                            </div>
                            <div class="footer__legals legals">
                                <p class="legals__item">ООО «Энерджи тревел»</p>
                                <p class="legals__item">ОГРН 1147847137448</p>
                                <p class="legals__item">ИНН/КПП 7842517956/784201001</p>
                            </div>
                            <div class="footer__contacts contacts">
                                <div class="contacts__item">
                                    <div class="contacts__label">Telephone | WhatsApp | Viber | Telegram</div>
                                    <a href="tel:+79650660013" class="contacts__value">+7 965 066-00-13</a>
                                </div>
                                <div class="contacts__item">
                                    <div class="contacts__label">Telephone | Telegram</div>
                                    <a href="tel:+79219596028" class="contacts__value">+7 921 959-60-28</a>
                                </div>
                                <div class="contacts__item">
                                </div>
                                <div class="contacts__item">
                                    <div class="footer__socials socials">
                                        <ul class="socials__list">
                                            <li class="socials__item">
                                                <a href="https://vk.com/energytravelpro" class="socials__link" rel="noreferrer,nofollow" target="_blank" title="ВКонтакте" aria-label="ВКонтакте">
                                                    <svg class="icon socials__icon">
                                                        <use xlink:href="img/icons.svg#vk"></use>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="socials__item">
                                                <a href="http://www.instagram.com/energytravelpro" class="socials__link" rel="noreferrer,nofollow" target="_blank" title="Instagram" aria-label="Instagram">
                                                    <svg class="icon socials__icon">
                                                        <use xlink:href="img/icons.svg#instagram"></use>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="socials__item">
                                                <div class="email">
                                                    <a class="email__link" href="mailto:info@energytravel.pro" title="Перейти в приложение электронной почты" aria-label="Перейти в приложение электронной почты">
                                                        <svg class="icon email__icon">
                                                            <use xlink:href="img/icons.svg#mail"></use>
                                                        </svg>
                                                        <span class="email__label">info@energytravel.pro</span>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer__item">
                            <div class="footer__logo" v-cloak v-if="screenWidth >= 768">
                                <a href="#top" class="logo" data-smooth>
                                    <svg class="icon logo__img">
                                        <use xlink:href="img/icons.svg#logo"></use>
                                    </svg>
                                </a>
                            </div>
                            <a href="files/privacy.pdf" class="footer__privacy" target="_blank"> Политика конфиденциальности </a>
                            <div class="footer__copyright"> Все права защищены © 2019 Energy TRAVEL - авторские туры <br /> Обращаем Ваше внимание на то, что данный интернет-сайт носит исключительно информационный характер и ни при каких условиях информационные материалы и цены, размещенные на сайте, не являются публичной офертой, определяемой положениями Статьи 437 Гражданского кодекса РФ </div>
                            <div class="footer__developer developer"> Сайт разработчика: <a href="https://at-develop.ru" target="_blank" class="developer__link" aria-label="ООО «Прикладные Технологии»" title="Перейти на сайт Apptech">
                                    <svg class="icon developer__logo">
                                        <use xlink:href="img/icons.svg#apptech"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- VK Widget -->
    <div id="vk_community_messages"></div>
    <script>
        <?php 
        $tours = file_get_contents("./config/tours.json");
        $tours = json_decode($tours, true);
        if (!$tours) {
        ?>
            const TOURS = []
        <?php } else {     
            $tours = json_encode($tours)
        ?>
            const TOURS = <?php echo $tours; ?>
        <?php }; ?>

        function vkInit() {
            VK.Widgets.CommunityMessages("vk_community_messages", 75797052, {
                expanded: "0",
                tooltipButtonText: "Есть вопрос?",
                buttonType: 'blue_circle'
            });
        }
    </script>
    <script defer src="js/vendor.js"></script>
    <script defer src="js/bundle.js"></script>
    <script defer type="text/javascript" src="https://vk.com/js/api/openapi.js?161" onload="vkInit()"></script>
    <!-- Yandex.Metrika counter -->
    <script async type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
    
        ym(54434125, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/54434125" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143824454-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
    
        gtag('config', 'UA-143824454-1');
    </script>
</body>

</html>