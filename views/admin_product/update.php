<?php include ROOT.'/views/layouts/admin_header.php'?>

<section>
    <div>
        <ol>
            <li><a class="admin-btn" href="/admin">Админпанель</a></li>
            <li><a class="admin-btn" href="/admin/product">Управление товарами</a></li>
            <li>Добавить товар</li>
        </ol>
    </div>
    
    <h4>Редактировать товар #<?php echo $id; ?></h4>
    <form action="" method="POST" enctype="multipart/form-data">
        
        <p>Название товара</p>
        <input type="text" name="name" placeholder="" value="<?php echo $product['name']; ?>">
        

        <p>Изображение товара</p>
        <img src="<?php echo Product::getImage($product['id']); ?>" width="200" alt="">
        <input type="file" name="img"> 
        
        <p>Описание<p>
        <textarea name="description"><?php echo $product['description']; ?></textarea>
        
        <p>Цена</p>
        <input type="text" name="price" placeholder="" value="<?php echo $product['price']; ?>">
        
        <p>Сколько штук в наличии</p>
        <input type="text" name="availability" placeholder="" value="<?php echo $product['availability']; ?>">
        
        <p>Категория товара</p>
        <select name="category_id">
            <option value="0" <?php if ($product['category_id'] == 0) echo 'selected="selected"'; ?>>Рюкзак</option>
            <option value="1" <?php if ($product['category_id'] == 1) echo 'selected="selected"'; ?>>Май-слинг</option>
        </select>
        
        <br><br>
        <input type="submit" name="submit"  value="Сохранить">
    </form>

</section>

<?php include ROOT.'/views/layouts/admin_footer.php'?>