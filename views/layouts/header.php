<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width = device-width, inicial-scale = 1">

        <link href="/template/css/normalize.css" rel="stylesheet">
        <link href="/template/css/style.css" rel="stylesheet">

		<title>Wow Sling</title>

		<!-- <script type="text/javascript" src="//vk.com/js/api/openapi.js?150"></script>  Для виджета вконтакте-->
	</head>
	 <body>
        <header class="page-header">
            <h1 class="visually-hidden">Слинги</h1>

            <nav class="main-nav  main-nav--closed  main-nav--nojs">
                <button class="main-nav__toggle" type="button">Открыть меню</button>

                <div class="main-nav__wrapper">

					<a class="main-nav__logo" href="/" title="Логотип">Wow Sling</a>

                    <ul class="main-nav__items">
                        <li class="main-nav__item  main-nav__item--active"><a class="main-nav__link" href="/catalog/backpack/">Рюкзаки</a></li>
                        <li class="main-nav__item  main-nav__item--active"><a class="main-nav__link" href="/catalog/mysling/">Май-слинги</a></li>
                        <li class="main-nav__item  main-nav__item--active"><a class="main-nav__link" href="/about/">О нас</a></li>
                        <li class="main-nav__item  main-nav__item--active"><a class="main-nav__link" href="/answers/">Вопросы и ответы</a></li>
                    </ul>


					<span class="main-nav__text">Добро пожаловать в наш магазин</span>
					<span class="main-nav__phone">Телефон для связи: 89220099900</span>

					<ul class="main-nav__tools">
						<li class="main-nav__tools-item">
							<a class="main-nav__link  main-nav__link--bascet" href="/cart/" title="Корзина"><span id="goods">

										<?php echo Cart::countItems();?>

									</span>
							</a>
						</li>

					</ul>

                </div>

            </nav>
        </header>
