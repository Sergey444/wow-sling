<?php include ROOT.'/views/layouts/admin_header.php'?>

<section>
    <div>
        <ol>
            <li><a href="/admin" class="admin-btn">Админпанель</a></li>
            <li><a href="/admin/product" class="admin-btn">Управление товарами</a></li>
            <li>Удалить товар</li>
        </ol>
    </div>
    
    <h4>Удалить товар #<?php echo $id; ?></h4>
    
    <p>Вы действительно хотите удалить этот товар?</p>
    
    <form method="POST">
        <input type="submit" name="submit" value="Удалить">
    </form>
</section>

<?php include ROOT.'/views/layouts/admin_footer.php'?>