<?php include ROOT.'/views/layouts/header.php'?>

    <section class="catalog">
            <div class="catalog__wrapper">
                <ul class="catalog__items">

                    <?php foreach ($catalog as $product): ?>

                    <li class="catalog__item">
                            <a class="" data-title="Подробнее" href="<?php echo $product['id']; ?>">
                                    <img src="<?php echo '/template/'.$product['img']; ?>" width="200" height="300" alt="Слинг">
                                    <h4><?php echo $product['name']; ?></h4>
                            </a>
                            <p><?php echo $product['description'];?></p>
                            <div class="goods__buttons">
                                    <button class="btn  baskin" type="button" value="В корзину">Корзина</button>
                                    <button class="btn" type="submit" value="Купить">Купить</button>
                            </div>
                    </li>

                    <?php endforeach; ?>

                </ul>
            </div>
        </section>

<?php include ROOT.'/views/layouts/footer.php'?>
