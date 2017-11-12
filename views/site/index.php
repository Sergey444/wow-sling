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
                        <!-- <a class="btn" href="">Свяжитесь с нами</a> -->
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
                                <a class="btn  goods__buttons--is buy"  data-id = "<?php echo $latestProduct['id']; ?>" href="/cart/chooseone/<?php echo $latestProduct['id'];?>/buy">Купить в один клик</a>
                                <a class="btn  goods__buttons--isnt  goods__buttons--availability">Нет в наличии</a>
                                <a class="btn  goods__buttons--isnt  book" href="/catalog/<?php echo $latestProduct['category_id']; ?>/<?php echo $latestProduct['id']; ?>">Заказать</a>
						</div>
					</li>

                                        <?php endforeach;?>
				</ul>
				<button class="goods__btn  goods__prev" value="newItems" type="button">Предыдущий товар</button>
				<button class="goods__btn  goods__next" value="newItems" type="button">Слевующий товар</button>
			</div>
		</section>

		<section class="about-shop">
			<div class="about-shop__wrapper">
				<h4 class="about-shop__title">Интернет магазин для мам</h4>
				<p class="about-shop__content">
                                    WOW Sling! - это удобный шоппинг в интернете для молодых мам. В WOW Sling собраны лучшие товары для комфортного материнства
                                    и яркого декрета: качественные слинги из натуральных тканей для деток с самого рождения, эргорюкзачки для малышей с 4 месяцев,
                                    мягкие коконы для новорожденных, красивые банты для конвертов на выписку из роддома, аксессуары для маленьких принцесс.
				</p>
			</div>
		</section>

                <section class="goods">
			<div class="goods__wrapper  hits__wrapper">
				<h3 class="goods__title">Акция / Эти товары продаются со скидкой</h3>
				<ul class="goods__items  hits__items">
                                        <?php foreach ($hitsProducts as $hitsProduct): ?>
					<li class="goods__item  hits__item">
						<a class="goods__img" data-title="Подробнее" href="/catalog/<?php echo $hitsProduct['category_id']; ?>/<?php echo $hitsProduct['id']; ?>">
							<img src="<?php echo Product::getImage($hitsProduct['id']); ?>" width="200" height="300" alt="Слинг">
							<h4><?php echo $hitsProduct['name']; ?></h4>
						</a>


						<div class="goods__buttons <?php if ($hitsProduct['availability'] > 0) { echo 'goods__buttons--this'; } ?>">
                                <p class="catalog__price"><i><b>Цена: <?php echo $hitsProduct['price'];?> &#8381</b></i></p>
                                <a class="btn  goods__buttons--is baskin" data-id = "<?php echo $hitsProduct['id']; ?>" href="/cart/add/<?php echo $hitsProduct['id'];?>">В корзину</a>
                                <a class="btn  goods__buttons--is  buy" data-id = "<?php echo $hitsProduct['id']; ?>"  href="/cart/chooseone/<?php echo $hitsProduct['id'];?>/buy">Купить в один клик</a>
                                <a class="btn  goods__buttons--isnt  goods__buttons--availability">Нет в наличии</a>
                                <a class="btn  goods__buttons--isnt" href="/catalog/<?php echo $hitsProduct['category_id']; ?>/<?php echo $hitsProduct['id']; ?>">Заказать</a>
						</div>
					</li>

                                        <?php endforeach;?>
				</ul>
				<button class="goods__btn  hits__prev" value="hits" type="button">Предыдущий товар</button>
				<button class="goods__btn  hits__next" value="hits" type="button">Слевующий товар</button>
			</div>
                    <br><br>
		</section>



        <script src="/template/js/new-goods.js"></script>
        <script src="/template/js/hits.js"></script>
        <script src="/template/js/slider.js"></script>
        <script src="/template/js/advantages-slider.js"></script>



<?php include ROOT.'/views/layouts/footer.php' ?>
