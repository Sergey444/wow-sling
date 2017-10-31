<?php include ROOT.'/views/layouts/admin_header.php';?>




    <h4>Редактировать товар #<?php echo $id; ?></h4>
    <form class="admin__form" action="" method="POST" enctype="multipart/form-data">

        <p>Название товара</p>
        <input class="admin__input" type="text" name="name" placeholder="" value="<?php echo $product['name']; ?>">


        <p>Изображение товара</p>
        <img src="<?php echo Product::getImage($product['id']); ?>" width="200" alt=""><br><br>
        <input class="admin-btn" type="file" name="img">

        <p>Описание<p>
        <textarea class="admin__textarea" name="description"><?php echo $product['description']; ?></textarea>

        <p>Цена</p>
        <input class="admin__input" type="text" name="price" placeholder="" value="<?php echo $product['price']; ?>">

        <p>Сколько штук в наличии</p>
        <input class="admin__input" type="text" name="availability" placeholder="" value="<?php echo $product['availability']; ?>">

        <p>Категория товара</p>
        <select class="admin__select" name="category_id">
            <option value="0" <?php if ($product['category_id'] == 0) echo 'selected="selected"'; ?>>Рюкзак</option>
            <option value="1" <?php if ($product['category_id'] == 1) echo 'selected="selected"'; ?>>Май-слинг</option>
        </select>

        <br><br>
        <input class="admin-btn " type="submit" name="submit"  value="Сохранить">
    </form>



<?php include ROOT.'/views/layouts/admin_footer.php';?>
