<?php include ROOT.'/views/layouts/header.php' ?>
    
        <section  class="slider  slider-main" id="slider">
			<!-- <div class="slider-main__overlay"></div> -->
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
						<p>Вы можете заказать слинг по индивидуальному дизайну! </p>
                                                <a class="btn" href="">Свяжитесь с нами</a>
					</li>

					<li class="advantages__item  advantages__item--help ">
						<h3 class="advantages__item-title">Помощь</h3>
						<p>Бесплатная помощь слингоконсультанта до и после покупки в нашем магазине</p>

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
						<a class="goods__img" data-title="Подробнее" href="/catalog/<?php echo $latestProduct['category_id']; ?>/<?php echo $latestProduct['id']; ?>">
							<img src="<?php echo Product::getImage($latestProduct['id']); ?>" width="200" height="300" alt="Слинг">
							<h4><?php echo $latestProduct['name']; ?></h4>
						</a>
						

						<div class="goods__buttons <?php if ($latestProduct['availability'] > 0) { echo 'goods__buttons--this'; } ?>">
                                <p class="catalog__price"><i><b>Цена: <?php echo $latestProduct['price'];?> &#8381</b></i></p>
                                <a class="btn  goods__buttons--is baskin" data-id = "<?php echo $latestProduct['id']; ?>" href="/cart/add/<?php echo $latestProduct['id'];?>">В корзину</a>
                                <a class="btn  goods__buttons--is"  href="/cart/chooseone/<?php echo $latestProduct['id'];?>/buy">Купить</a>
                                <a class="btn  goods__buttons--isnt  goods__buttons--availability">Нет в наличии</a>
                                <a class="btn  goods__buttons--isnt" href="/catalog/<?php echo $latestProduct['category_id']; ?>/<?php echo $latestProduct['id']; ?>">Заказать</a>
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

         <!-- <div class="social-blocks">
            <div class="social-blocks__wrapper">

                <div class="social-blocks__vk" id="vk_groups"></div>

                <iframe class="social-blocks__inst" src='/inwidget/index.php?width=300&inline=2&view=4&toolbar=true&preview=small' scrolling='no' frameborder='no' style='height:500px;overflow:hidden;'></iframe>

            </div>
        </div>

        <script type="text/javascript">
            VK.Widgets.Group("vk_groups", {mode: 2, width: 300, height: 415, wide: 1 }, 112449893);
        </script> -->

        <script src="/template/js/new-goods.js"></script>
        <script src="/template/js/slider.js"></script>
        <script src="/template/js/advantages-slider.js"></script>



<?php include ROOT.'/views/layouts/footer.php' ?>
