<?php include ROOT.'/views/layouts/admin_header.php'?>
<div>


    <br><br><a href="/admin/product/create" class="admin-btn"><i></i> Добавить товар</a>

    <h4>Список товаров</h4>

    <br>

    <table class="admin-table">
        <tr>
            <th>ID товара</th>
            <th>Фото</th>
            <th>Название товара</th>
            <th>Цена</th>
            <th>Наличие</th>
            <th>Категория</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach ($productsList as $product): ?>
        <tr>
            <td><?php echo $product['id']; ?></td>
            <td><img src="<?php echo Product::getImage($product['id']); ?> " width="70" height="100"></td>
            <td><?php echo $product['name']; ?></td>
            <td><?php echo $product['price']; ?></td>
            <td><?php echo $product['availability']; ?></td>
            <td><?php echo $product['category_id']; ?></td>
            <td><a class="admin-btn" href="/admin/product/view/<?php echo $product['id']; ?>" title="Редактировать">Подробнее</a></td>
            <td><a class="admin-btn" href="/admin/product/update/<?php echo $product['id']; ?>" title="Редактировать">Редактировать</a></td>
            <td><a class="admin-btn" href="/admin/product/delete/<?php echo $product['id']; ?>" title="Удалить">Удалить</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
<?php include ROOT.'/views/layouts/admin_footer.php'?>
