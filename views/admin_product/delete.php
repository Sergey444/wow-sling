

<section>
    <div>
        <ol>
            <li><a href="/admin">Админпанель</a></li>
            <li><a href="/admin/product">Управление товарами</a></li>
            <li>Удалить товар</li>
        </ol>
    </div>
    
    <h4>Удалить товар #<?php echo $id; ?></h4>
    
    <p>Вы действительно хотите удалить этот товар?</p>
    
    <form method="POST">
        <input type="submit" name="submit" value="Удалить">
    </form>
</section>
