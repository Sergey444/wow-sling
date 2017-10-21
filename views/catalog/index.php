<?php include ROOT.'/views/layouts/header.php'?>

    <section class="catalog">
            <div class="catalog__wrapper">
                 <?php echo $pagination->get(); ?>

                <ul class="catalog__items">

                    <?php foreach ($catalog as $product): ?>

                    <li class="catalog__item">
                            <a class="goods__img" data-title="Подробнее" href="<?php echo $product['id']; ?>">
                                    <img src="<?php echo '/template/'.$product['img']; ?>" width="200" height="300" alt="Слинг">
                                    <h4><?php echo $product['name']; ?></h4>
                            </a>
                            <p><?php echo $product['description'];?></p>
                            <div class="goods__buttons <?php if ($product['availability'] > 0) { echo 'goods__buttons--this'; } ?>">
                                    <a class="btn  goods__buttons--is  baskin" data-id = "<?php echo $product['id']; ?>" href="/cart/add/<?php echo $product['id'];?>">Корзина</a>
                                    <a class="btn  goods__buttons--is"  href="#">Купить</a>
                                    <a class="btn  goods__buttons--isnt" href="<?php echo $product['id']; ?>">Заказать</a>
                            </div>
                    </li>

                    <?php endforeach; ?>


                </ul>

            </div>
        </section>

<?php include ROOT.'/views/layouts/footer.php'?>
