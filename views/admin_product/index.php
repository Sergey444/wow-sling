<div>
    <ol>
        <li><a href="/admin">Админпанель</a></li>
        <li>Управление товарами</li>
    </ol>
    
    <a href="/admin/product/create" class="btn"><i></i> Добавить товар</a>
    
    <h4>Список товаров</h4>
    
    <br>
    
    <table>
        <tr>
            <th>ID товара</th>
            <th>Название товара</th>
            <th>Цена</th>
            <th>Наличие</th>
            <th>Категория</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach ($productsList as $product): ?>
        <tr>
            <td><?php echo $product['id']; ?></td>
            <td><?php echo $product['name']; ?></td>
            <td><?php echo $product['price']; ?></td>
            <td><?php echo $product['availability']; ?></td>
            <td><?php echo $product['category_id']; ?></td>
            <td><a href="/admin/product/update/<?php echo $product['id']; ?>" title="Редактировать">Ред</a></td>
            <td><a href="/admin/product/delete/<?php echo $product['id']; ?>" title="Удалить">Удал</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
