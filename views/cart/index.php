<?php include ROOT.'/views/layouts/header.php';?>

<section class="cart">
    <div class="cart__wrapper">
        <h2 class="cart__title">Корзина</h2>

        <?php if ($productsInCart): ?>
            <p>Вы выбрали такие товары: </p>

            <table class="cart__table">
                <tr class="cart__table-string">
                    <th class="cart__table-cell  cart__table-cell--photo">Фото</th>
                    <th class="cart__table-cell">Название</th>

                    <th class="cart__table-cell  cart__table-cell--count">Количество</th>
                    <th class="cart__table-cell">Стоимость</th>
                    <th class="cart__table-cell">Удалить</th>
                </tr>

                <?php foreach ($products as $product): ?>
                    <tr class="cart__table-string">
                        <td class="cart__table-cell  cart__table-cell--photo"><img src="<?php echo Product::getImage($product['id']); ?>" width="50" height="50"></td>
                        <td class="cart__table-cell"><?php echo $product['name']; ?></td>

                        <td class="cart__table-cell  cart__table-cell--count">
                            <a class="cart__minus"   href="/cart/deleteOne/<?php echo $product['id'];?>">-</a>
                                <span id="<?php echo $product['id']; ?>"> <?php echo $productsInCart[$product['id']] ?></span>
                            <a class="cart__plus" data-id = "<?php echo $product['id']; ?>" href="/cart/add/<?php echo $product['id'];?>">+</a>
                        </td>
                        <td class="cart__table-cell"><?php echo $product['price'];?> </td>
                        <td class="cart__table-cell  cart__table-cell"><a class="cart__del" href="delete/<?php echo $product['id'];?>">Удалить</td>
                    </tr>
                <?php endforeach; ?>

            </table>

            <div class="cart__count">

                <!--<div class="cart__count-items">-->
                <p class="cart__count-item" >Общая стоимость: <?php echo $totalPrice; ?> рублей</p>

                <!--</div>-->


            </div>
            <form  action="checkout" method="POST" class="cart__delivery">
                <p>Укажите каким спосообом вы хотите получить товар</p>
                <label class="input  input--check">
                    <input type="radio" name="delivery" value="1" checked>
                    <span class="input__radio"></span>Доставка по России
                </label>
                <label class="input  input--check">
                    <input type="radio" name="delivery" value="2">
                    <span class="input__radio"></span>Доставка по Тюмени
                </label>
                <label class="input  input--check">
                    <input type="radio" name="delivery" value="3">
                    <span class="input__radio"></span>Самовывоз с улицы Широтная, г.Тюмень
                </label>

                <button type="submit" class="cart__button  btn">Оформить заказ</button>
            </form>

        <?php else: ?>
            <p>Ваша корзина пуста</p>



        <?php endif; ?>
        </div>
    </section>

    </section>

            <section class="goods  goods--nojs">
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
                            <a class="btn  goods__buttons--is " data-id = "<?php echo $hitsProduct['id']; ?>" href="/cart/add/<?php echo $hitsProduct['id'];?>">В корзину</a>
                            <a class="btn  goods__buttons--is"  href="/cart/chooseone/<?php echo $hitsProduct['id'];?>/buy">Купить</a>
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

<script src="/template/js/hits.js"></script>

<?php include ROOT.'/views/layouts/footer.php';?>
