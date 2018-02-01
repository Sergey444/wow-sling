<?php include ROOT.'/views/layouts/header.php' ?>





        <section  class="slider  slider-main" id="slider">
			<div class="slider-main__overlay"></div>
		</section>



        <h1 class="visually-hidden">Слинги</h1>
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

        <section class="form-callback">
            <div class="form-callback__wrapper">
                <h3 class="goods__title">Форма обратной связи</h3>

                <div class="form-callback__errors"></div>

                <form action="send/callBack" method="POST"  class="form-callback__content">

                    <div class="form-callback__left">
                        <img class="form-callback__sent" src="/template/img/sent.png">
                        <label for="" class="form-callback__item"><span class="form-callback__name">Имя:</span>
                            <input class="form-callback__input" type="text" name="name" value="" placeholder="Ваше имя">
                        </label>
                        <label for="" class="form-callback__item"><span class="form-callback__name">Телефон:</span>
                            <input class="form-callback__input" type="tel" name="phone" value="" placeholder="Ваш телефон">
                        </label>
                        <label for="" class="form-callback__item"><span class="form-callback__name">Email:</span>
                            <input class="form-callback__input" type="email" name="email" value="" placeholder="Ваш email">
                        </label>
                        <label for="" class="form-callback__item"><span class="form-callback__name">Сообщение:</span>
                            <textarea class="form-callback__input" name="message" rows="8" cols="25" placeholder="Ваше сообщение"></textarea>
                        </label>
                    </div>

                    <div class="form-callback__right">
                        <div class="form-callback__subtitle">WoW Sling - магазин слингов</div>
                        <div class="form-callback__text">Если у вас возникли какие либо вопросы, оставьте ваши контактные данные и мы свяжемся с вами в ближайшее время. Также вы можете позвонить нам по тел. 89220700090</div>
                        <label class="input  input--check">
                            <input  type="checkbox" name="agree" value="1" checked>
                            <span class="input__checkbox"></span>
                            Я ознакомился с <a class="form-data__policy" href="/content/politics/" target="_blank" >политикой конфиденциальности</a>
                        </label>

                        <button id="callBack" type="submit" name="submit" class="btn form-callback__btn form-callback__btn--first">Отправить</button>
                    </div>

                    <button type="submit" name="submit" class="btn form-callback__btn  form-callback__btn--second">Отправить</button>

                </form>
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


        <!-- <script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>


        <script type="text/javascript">
            var map;

            DG.then(function () {
                map = DG.map('map', {
                    city: 'tyumen',
                    center: [54.98, 44.89],
                    zoom: 13,

                    // dragging : false,
                    // touchZoom: false,
                    // scrollWheelZoom: false,
                    // doubleClickZoom: false,
                    // boxZoom: false,
                    // geoclicker: false,
                    // zoomControl: false,
                    // fullscreenControl: false
                });

                DG.marker([54.98, 82.89]).addTo(map).bindPopup('Вы кликнули по мне!');
            });

        </script>

           <div id="map" style="width: 100%; height:400px"></div> -->

<!-- "borderColor":"#a3a3a3", -->

        <!-- <section class="section-map">
            <div class="section-map__wrapper">

                <a class="dg-widget-link" href="http://2gis.ru/tyumen/firm/70000001025525747/center/65.657066,57.175668/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Тюмени</a><div class="dg-widget-link"><a href="http://2gis.ru/tyumen/firm/70000001025525747/photos/70000001025525747/center/65.657066,57.175668/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=photos">Фотографии компании</a></div><div class="dg-widget-link"><a    href="http://2gis.ru/tyumen/center/65.657066,57.175668/zoom/16/routeTab/rsType/bus/to/65.657066,57.175668╎Тюмень Сити Молл, торгово-развлекательный центр?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Тюмень Сити Молл, торгово-развлекательный центр</a></div><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new  DGWidgetLoader({  "pos":{"lat":57.175668,"lon":65.657066,"zoom":15, "touchZoom": false, "boxZoom": false, "geoclicker": false, "fullscreenControl": true,},"opt":{"city":"tyumen"},"org":[{"id":"70000001025525747"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>

            </div>
        </section> -->


        <script src="/template/js/new-goods.js"></script>
        <script src="/template/js/hits.js"></script>
        <script src="/template/js/slider.js"></script>
        <script src="/template/js/advantages-slider.js"></script>




<?php include ROOT.'/views/layouts/footer.php' ?>
