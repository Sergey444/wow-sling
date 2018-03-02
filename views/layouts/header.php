<!DOCTYPE html>
<html lang="ru">
	<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111712996-1"></script>
		<script type="text/javascript">
			  window.dataLayer = window.dataLayer || [];
			  function gtag(){dataLayer.push(arguments);}
			  gtag('js', new Date());

			  gtag('config', 'UA-111712996-1');
		</script>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="yandex-verification" content="c00418aafb243250" />
		<meta name="msvalidate.01" content="7E5B8E537A781D0D017613D6C2D69105" />
		<meta name="google-site-verification" content="S-4OeLynAZ0CFrSwWuhzYCfCTj1z6UpUvDfld30HzYQ" />

		<title><?= Seo::setTitle(); ?></title>
		<meta name="description" content="<?= Seo::setDescription(); ?>">
		<meta name="robots" content="index, follow" />

        <link href="/template/css/normalize.css" rel="stylesheet">
        <!-- <link href="/template/css/style.min.css" rel="stylesheet"> -->
		<link href="/template/css/style.css" rel="stylesheet">

		<link rel="stylesheet" href="/template/css/owl/owl.carousel.min.css">
		<!-- <link rel="stylesheet" href="/template/css/owl/owl.theme.default.min.css"> -->

		<script src="/template/js/jquery/jquery-3.2.1.min.js"></script>
		<script src="/template/js/jquery/owl.carousel.min.js"></script>
		<!-- <script type="text/javascript" src="/template/js/jquery/flux-slider.js"> -->
		<!-- </script> -->

		<!-- <script src="/template/js/check-menu.js"></script> -->

 		<script type="text/javascript" src="//vk.com/js/api/openapi.js?150"></script> 		<!--Для виджета вконтакте -->
	</head>
	 <body class="body">
        <header class="page-header">

            <nav class="main-nav  main-nav--closed  main-nav--nojs">
                <button class="main-nav__toggle" type="button">Открыть меню</button>

                <div class="main-nav__wrapper">

					<a class="main-nav__logo" href="/" title="Логотип">Wow Sling</a>

                    <ul class="main-nav__items">
					    <li class="main-nav__item  main-nav__item--catalog">
							<a class="main-nav__link  main-nav__link--catalog">Каталог</a>

							<ul class="main-nav__sub-menu">
		                        <li class="main-nav__item  "><a class="main-nav__link" href="/catalog/ergorukzak/" alt="Эргорюкзаки" title="Эргорюкзаки">Эргорюкзаки</a></li>
		                        <li class="main-nav__item  "><a class="main-nav__link" href="/catalog/mysling/" alt="Май-слинги" title="Май-слинги">Май-слинги</a></li>
								<li class="main-nav__item  "><a class="main-nav__link" href="/catalog/bantik/" alt="Банты" title="Бантики">Бантики</a></li>
								<!-- <li class="main-nav__item  "><a class="main-nav__link" href="/catalog/cocon/" alt="Коконы" title="Коконы">Коконы</a></li> -->
							</ul>
						</li>

                        <li class="main-nav__item  "><a class="main-nav__link" href="/content/aboutus/" title="О нас">О нас</a></li>
                        <li class="main-nav__item "><a class="main-nav__link" href="/content/answers/" title="Вопросы и ответы">Вопросы и ответы</a></li>
                    </ul>


					<span class="main-nav__text">Добро пожаловать в наш магазин</span>
					<div class="main-nav__phone">
						<img title="Телефон" src="/template/img/phone.png" width="20" height="20">
						<img title="WhatsApp" src="/template/img/whatsapp.png" width="20" height="20">
						<img title="Viber" src="/template/img/viber.png" width="20" height="20">
						<a href="tel:+79220700090">89220700090</a>
					</div>
					<ul class="main-nav__tools">
						<li class="main-nav__item">
							<a class="main-nav__link  main-nav__link--bascet" href="/cart/" title="Корзина"><span id="goods">

										<?php echo Cart::countItems();?>

									</span>
							</a>
						</li>
					</ul>
                </div>
            </nav>
        </header>
