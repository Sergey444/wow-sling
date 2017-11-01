<?php include ROOT.'/views/layouts/header.php';?>

    <section class="catalog">
            <div class="catalog__wrapper">
                 <?php echo $pagination->get(); ?>

                <ul class="catalog__items">

                    <?php foreach ($catalog as $product): ?>

                    <li class="catalog__item">
                            <a class="goods__img" data-title="Подробнее" href="<?php echo $product['id']; ?>">
                                    <img src="<?php echo /*'/template/'.$product['img'];*/Product::getImage($product['id']); ?>" width="200" height="300" alt="Слинг">
                                    <h4><?php echo $product['name']; ?></h4>
                            </a>


                            <div class="goods__buttons <?php if ($product['availability'] > 0) { echo 'goods__buttons--this'; } ?>">

                                    <p class="catalog__price"><i><b>Цена: <?php echo $product['price'];?> &#8381</b></i></p>
                                    <a class="btn  goods__buttons--is  baskin" data-id = "<?php echo $product['id']; ?>" href="/cart/add/<?php echo $product['id'];?>">В корзину</a>
                                    <a class="btn  goods__buttons--is  buy" data-id = "<?php echo $product['id']; ?>"  href="/cart/chooseone/<?php echo $product['id'];?>/buy">Купить в один клик</a>
                                    <a class="btn  goods__buttons--isnt  goods__buttons--availability">Нет в наличии</a>
                                    <a class="btn  goods__buttons--isnt" href="<?php echo $product['id']; ?>">Заказать</a>
                            </div>
                    </li>

                    <?php endforeach; ?>
                </ul>

                <div class="pagination__items"><?php echo $pagination->get(); ?></div>
            </div>
        </section>

<?php include ROOT.'/views/layouts/footer.php'?>
