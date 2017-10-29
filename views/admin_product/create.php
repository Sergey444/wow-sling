

<section>
    <div>
        <ol>
            <li><a href="/admin">Админпанель</a></li>
            <li><a href="/admin/product">Управление товарами</a></li>
            <li>Добавить товар</li>
        </ol>
    </div>
    
    
    <form action="" method="POST">
        
        <p>Название товара</p>
        <input type="text" name="name" placeholder="" value="">
        
        <p>Картинка</p>
        <input type="text" name="img" placeholder="" value="">
        
        <p>Описание<p>
        <textarea name="description"></textarea>
        
        <p>Цена</p>
        <input type="text" name="price" placeholder="" value="">
        
        <p>Сколько штук в наличии</p>
        <input type="text" name="availability" placeholder="" value="">
        
        <p>Категория товара</p>
        <select name="category_id">
            <option value="0">Рюкзак</option>
            <option value="1">Май-слинг</option>
        </select>
        
        <br><br>
        <input type="submit" name="submit"  value="Сохранить">
    </form>

</section>