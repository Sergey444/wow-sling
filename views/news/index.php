<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width = device-width, inicial-scale = 1">

        <link href="/template/css/normalize.css" rel="stylesheet">
        <link href="/template/css/style.css" rel="stylesheet">

		<title>Wow Sling</title>
	</head>
	<body onload="go()">
        <header class="page-header">
            <h1 class="visually-hidden">Слинги</h1>

            <nav class="main-nav  main-nav--closed  main-nav--nojs">
                <button class="main-nav__toggle" type="button">Открыть меню</button>

                <div class="main-nav__wrapper">

					<a class="main-nav__logo" href="index.html" title="Логотип">Wow Sling</a>

                    <ul class="main-nav__items">
                        <li class="main-nav__item  main-nav__item--active"><a class="main-nav__link" href="#">Рюкзаки</a></li>
                        <li class="main-nav__item  main-nav__item--active"><a class="main-nav__link" href="#">Май-слинги</a></li>
                        <li class="main-nav__item  main-nav__item--active"><a class="main-nav__link" href="#">О нас</a></li>
                        <li class="main-nav__item  main-nav__item--active"><a class="main-nav__link" href="#">Вопросы и ответы</a></li>
                    </ul>


					<span class="main-nav__text">Добро пожаловать в наш магазин</span>
					<span class="main-nav__phone">Телефон для связи: 89220099900</span>
                    <ul class="main-nav__tools">
                        <li class="main-nav__tools-item"><a class="main-nav__link  main-nav__link--bascet" href="" title="Корзина">Корзина: <span id="goods">пока пуста</span></a></li>
                    </ul>

                </div>
            </nav>
        </header>


        <section class="slider  slider-main" id="slider">
			<!--<div class="slider-main__overlay"></div>-->
		</section>

		<section class="advantages slider slider--nojs">

			<div class="advantages__wrapper">
				<h2 class="advantages__title  visually-hidden">Преимущества наших слингов</h2>
				<input class="slider__input" type="radio" name="advantages" value="0" id="advantages-input-1" checked>
				<input class="slider__input" type="radio" name="advantages" value="1" id="advantages-input-2">
				<input class="slider__input" type="radio" name="advantages" value="2" id="advantages-input-3">

				<ul class="advantages__items">
					<li class="advantages__item  advantages__item--quality  slider__item">
						<h3 class="advantages__item-title">Гарантия качества</h3>
						<p>ТМ Слингуля. Собственное производство с 2009г. Более 10000 довольных покупателей.</p>
					</li>

					<li class="advantages__item  advantages__item--design  ">
						<h3 class="advantages__item-title">Индивидуальный дизайн</h3>
						<p>Вы можете заказать слинг по индивидуальному дизайну! Свяжитесь с нами: slingostudio@gmail.com</p>
					</li>

					<li class="advantages__item  advantages__item--help ">
						<h3 class="advantages__item-title">Помощь</h3>
						<p>Бесплатная помощь слингоконсультанта до и после покупки</p>
					</li>
				</ul>

				<div class="advantages__toggles  slider__toggles">
					<label class="slider__toggle" for="advantages-input-1">1</label>
					<label class="slider__toggle" for="advantages-input-2">2</label>
					<label class="slider__toggle" for="advantages-input-3">3</label>
				</div>
			</div>

		</section>

		<section class="goods  goods--nojs">
			<div class="goods__wrapper">
				<h3 class="goods__title">Новинки / Уже в продаже</h3>
				<ul class="goods__items">
                                        
                                        <!--<?php foreach ($newsList as $newsItem): ?>
					
                                        <li class="goods__item">
						<a class="goods__img" data-title="Подробнее" href="/news/<?php echo $newsItem['id']; ?>">
							<img src="<?php echo '/template/'.$newsItem['img']; ?>" width="200" height="300" alt="Слинг">
							<h4><?php echo $newsItem['name']; ?></h4>
						</a>
						<p><?php echo $newsItem['description'];?></p>
						<div class="goods__buttons">
							<button class="btn  baskin" type="button" value="В корзину">Корзина</button>
							<button class="btn" type="submit" value="Купить">Купить</button>
						</div>
					</li>
                                        
					<?php endforeach; ?>-->

				</ul>
				<button class="goods__prev" type="button">Предыдущий товар</button>
				<button class="goods__next" type="button">Слевующий товар</button>
			</div>
		</section>

		<section class="about-shop">
			<div class="about-shop__wrapper">
				<h4 class="about-shop__title">Интернет магазин слингов</h4>
				<p class="about-shop__content">
					 это крупнейший интернет-магазин слингов, одежды и аксессуаров для мам, работающий уже более 8 лет. У нас - только самые качественные и красивые товары, с консультацией, быстрой доставкой, примеркой и возможностью возврата. Все позиции - в наличии на нашем складе!  Наши преимущества
					Слинги для детей появились в России сравнительно недавно, однако большинство матерей и отцов быстро оценили все преимущества этих вещей. И это совсем не удивительно, ведь простая вещь позволяет обеспечить комфорт родителей и ребенка. Слинг для ребенка обеспечивает максимально естественное положение тела, в непосредственной близости от родителя. Это дает возможность детям почувствовать тепло родительского тела, спокойствие и уверенность.
					Продажа слингов постепенно набирает обороты, ведь этот аксессуар стал незаменим для многих родителей во время прогулок, походов по магазинам, что благодаря удобству и компактности позволяет избавиться от громоздких и неудобных колясок.
					Сегодня и вы можете оценить по достоинству все преимущества удобного и стильного аксессуара.
					Где купить слинг – конечно в интернет-магазине
					Мы готовы оказать всестороннюю помощь по подбору различных аксессуаров для мам и пап, моделей для новорожденных и детей постарше.
					Хотите купить слинг в Москве - интернет магазин всегда к вашим услугам.
				</p>
			</div>
		</section>

        <!--<div class="block-mock"></div>-->
    	<footer class="page-footer">
            <div class="page-footer__wrapper">
                <div class="page-footer__social">
                    <a href="#" class="social-link  social-link--vk">Мы в контакте</a>
                    <a href="#" class="social-link  social-link--inst">Мы в инстаграмм</a>
					<a class="visually-hidden" href="https://ru.icons8.com/icon/48597/ВКонтакте">Вконтакте иконка в оригинале</a>
					<a class="visually-hidden" href="https://ru.icons8.com/icon/47872/Instagram">Instagram иконка в оригинале</a>
                </div>

				<ul class="page-footer__info">
                    <li><a href="#">Производство</a></li>
                    <li><a href="#">Наши документы</a></li>
					<li><a href="#">Обпатная связь</a></li>
                    <li><a href="#">Контакты</a></li>
                    <li><a href="#">Реквизиты</a></li>
				</ul>

				<ul class="page-footer__info">
                    <li><a href="#">Обучение</a></li>
                    <li><a href="#">Условия оплаты</a></li>
                    <li><a href="#">Условия возврата</a></li>
                    <li><a href="#">Условия доставки</a></li>
                    <li><a href="#">Политика конфиденициальности</a></li>
                </ul>

				<span>WowSling © 2013-2017</span>
            </div>

        </footer>


		<script src="/template/js/new-goods.js"></script>
                <script src="/template/js/slider.js"></script>
		<script src="/template/js/main-open.js"></script>
		<script src="/template/js/advantages-slider.js"></script>
		<script src="/template/js/baskin.js"></script>
    </body>
</html>


