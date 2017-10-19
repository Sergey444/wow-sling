<?php include ROOT.'/views/layouts/header.php'?>

<section class="one-goods">
			<div class="one-goods__wrapper">

				<div class="one-goods__top">
					<a class="one-goods__link" data-title="Подробнее" href="#">
						<h3 class="one-goods__title"><?php echo $viewItem['name'];?></h3>
						<img src="<?php echo '/template/'.$viewItem['img'];?>" width="400" height="500" alt="Слинг">
					</a>
					<div class="one-goods__info">

						<div class="one-goods__buttons">
							<p><?php echo $viewItem['description'];?></p>
							<b>Цена: 3000 рублей</b>
							<div class="goods__buttons">
								<a class="btn  baskin" data-id="<?php echo $viewItem['id']; ?>" href="/cart/add/<?php echo $viewItem['id'];?>"> В корзину</a>
								<a class="btn" href="" >Купить</a>
							</div>
						</div>
						<div class="one-goods__items">
							<a class="one-goods__item-open" href="#"><b>Доставка</b></a>
							<ul class="one-goods__item">
								<li>Курьером по Тюмени(бесплатно от 2500 рублей)</li>
								<li>Отправка почтой по России - от 300 рублей</li>
								<li>Транспортной компанией по России - расчёт
								 индивидуальный, уточняется при подтверждении заказа</li>
	 						</ul>
							<a class="one-goods__item-open"  href="#"><b>Шоу-рум в Тюмени</b></a>
							<ul class="one-goods__item">
								<li>Большинство слингов есть в наличии</li>
								<li>Покупка с оплатой картой и наличными</li>
							</ul>
							<a class="one-goods__item-open"  href="#"><b>Наши преимущества</b></a>
							<ul class="one-goods__item">
								<li>Бесплатная доставка</li>
								<li>Привезём несколько вариантов на выбор</li>
								<li>Возврат и обмен без проблем</li>
								<li>Бесплатная слингоконсультация</li>
							</ul>
						</div>
					</div>
				</div>

                <ul class="one-goods__benefits">
					<li class="">
						<h3 class="">Быстро и качественно доставляем</h3>
						<p>Наша компания производит доставку по всей России</p>
					</li>

					<li class=" ">
						<h3 class="">Гарантия качества</h3>
						<p>Мы предлагаем только те товары в качестве которых мы уверены</p>
					</li>

					<li class=" ">
						<h3 class="">Возврат и обмен товара</h3>
						<p>В соответствии с законом о правах потребителей</p>
					</li>
				</ul>
            </div>
        </section>




<?php include ROOT.'/views/layouts/footer.php'?>
