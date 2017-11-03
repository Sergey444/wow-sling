<?php include ROOT.'/views/layouts/admin_header.php'; ?>

    <table class="admin__table">

            <tr>
                <td>Название товара</td>
                <td><?php echo $product['name']; ?></td>
            </tr>
             <tr>
                <td>Фото</td>
                <td><img src="<?php echo Product::getImage($product['id']); ?> " width="70" height="100"></td>
            </tr>
            <tr>
                <td>Описание</td>
                <td><?php echo $product['description']; ?></td>
            </tr>
            <tr>
                <td>Цена</td>
                <td><?php echo $product['price']; ?></td>
            </tr>
            <tr>
                <td>В наличии</td>
                <td><?php echo $product['availability']; ?> шт</td>
            </tr>
            <tr>
                <td>Категория товара</td>
                <td>
                <?php if ($product['category_id'] == 0) echo 'Рюкзак'; ?>
                <?php if ($product['category_id'] == 1) echo 'Май-слинг'; ?>
                </td>
            </tr>
            <tr>
            <td>Хит</td>
               <td> 
                    <?php if ($product['is_hit'] == 0) echo 'нет'; ?>
                    <?php if ($product['is_hit'] == 1) echo 'да'; ?>
               </td>
            </tr>


    </table>

<?php include ROOT.'/views/layouts/admin_footer.php'; ?>
