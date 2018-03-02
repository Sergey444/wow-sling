<?php include ROOT.'/views/layouts/admin_header.php';?>

<section class="admin-content">
    <div class="admin-content__wrapper">

        <div>


            <div>
                <a href="/admin/product/">Все товары</a>
                <a href="/admin/product/0">Рюкзаки</a>
                <a href="/admin/product/1">Май слинги</a>
                <a href="/admin/product/2">Бантики</a>
            </div>

            <h4>Список товаров</h4>
            <? if ($category === false) : ?>
                <h3>Все товары</h3>
            <? else : ?>
                <h3><?php echo Category::getCategoryRus($productsList[0]['category_id']).'и'; ?></h3>
            <? endif; ?>

            <a href="/admin/product/create" class="admin-btn"><i></i> Добавить товар</a> <br><br>

            <table class="admin__table">
                <tr>
                    <!-- <th>Выбрать</th> -->
                    <th>ID товара</th>
                    <th>Фото</th>
                    <th>Название товара</th>
                    <th>Цена</th>
                    <th>Наличие</th>
                    <th>Категория</th>
                    <th>Просмотр</th>
                    <th>Редактировать</th>
                    <th>Удалить</th>
                </tr>

                <?php foreach ($productsList as $product): ?>
                <tr>
                    <!-- <td><input type="checkbox" value="<?= $product['id']; ?>"></td> -->
                    <td><?php echo $product['id']; ?></td>
                    <td><img src="<?php echo Product::getImage($product['id']); ?> " width="70" height="100"></td>
                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo $product['price']; ?></td>
                    <td><?php echo $product['availability']; ?></td>
                    <td><?php echo Category::getCategoryRus($product['category_id']); ?></td>
                    <td><a class="admin-btn__check  admin-btn__check--view" href="/admin/product/view/<?php echo $product['id']; ?>" title="Подробнее">Подробнее</a></td>
                    <td><a class="admin-btn__check  admin-btn__check--update" href="/admin/product/update/<?php echo $product['id']; ?>" title="Редактировать">Редактировать</a></td>
                    <td><a class="admin-btn__check  admin-btn__check--delete" href="/admin/product/delete/<?php echo $product['id']; ?>" title="Удалить">Удалить</a></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>

    </div>
</section>

<?php include ROOT.'/views/layouts/admin_footer.php';?>
