<?php include ROOT.'/views/layouts/header.php'?>

<section class="cart">
    <div class="cart__wrapper">
        <h2 class="cart__title">Корзина</h2>

        <?php if ($productsInCart): ?>
            <p>Вы выбрали такие товаары: </p>

            <table class="cart__table">
                <tr class="cart__table-string">
                    <th class="cart__table-cell  cart__table-cell--photo">Фото</th>
                    <th class="cart__table-cell">Название</th>

                    <th class="cart__table-cell">Количество</th>
                    <th class="cart__table-cell">Стоимость</th>
                    <th class="cart__table-cell">Удалить товар</th>
                </tr>

                <?php foreach ($products as $product): ?>
                    <tr class="cart__table-string">
                        <td class="cart__table-cell  cart__table-cell--photo"><img src="/template/<?php echo $product['img']; ?>" width="50" height="50"></td>
                        <td class="cart__table-cell"><?php echo $product['name']; ?></td>

                        <td class="cart__table-cell"><?php echo $productsInCart[$product['id']] ?></td>
                        <td class="cart__table-cell"><?php echo $product['price'];?> </td>
                        <td class="cart__table-cell"><a href="delete/<?php echo $product['id'];?>">Удалить</td>
                    </tr>
                <?php endforeach; ?>

            </table>

            <div class="cart__count">
                <a class="cart__del" href="/cart/checkout/">Оформить заказ</a>
                <!--<div class="cart__count-items">-->
                <p class="cart__count-item" >Общая стоимость: <?php echo $totalPrice; ?> рублей</p>
                   
                <!--</div>-->
            </div>
        <?php else: ?>
            <p>Ваша корзина пуста</p>
        <?php endif; ?>


    </div>
</section>

<?php include ROOT.'/views/layouts/footer.php'?>
