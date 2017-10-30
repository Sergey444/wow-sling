<?php include ROOT.'/views/layouts/header.php'?>

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

<?php include ROOT.'/views/layouts/footer.php'?>
