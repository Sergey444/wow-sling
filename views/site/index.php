<?php include ROOT.'/views/layouts/header.php' ?>

        <section  class="slider  slider-main" id="slider">
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
                                        <?php foreach ($latestProducts as $latestProduct): ?>
					<li class="goods__item">
						<a class="goods__img" data-title="Подробнее" href="/catalog/backpack/<?php echo $latestProduct['id']; ?>">
							<img src="<?php echo '/template/'.$latestProduct['img']; ?>" width="200" height="300" alt="Слинг">
							<h4><?php echo $latestProduct['name']; ?></h4>
						</a>
						<p><?php echo $latestProduct['description'];?></p>

						<div class="goods__buttons">
                                                    <a class="btn  baskin" data-id = "<?php echo $latestProduct['id']; ?>" href="/cart/add/<?php echo $latestProduct['id'];?>">Корзина</a>
                                                    <a class="btn"  href="#">Купить</a>
						</div>
					</li>

                                        <?php endforeach;?>
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

        <script src="/template/js/new-goods.js"></script>
        <script src="/template/js/slider.js"></script>
        <script src="/template/js/advantages-slider.js"></script>

<?php include ROOT.'/views/layouts/footer.php' ?>
