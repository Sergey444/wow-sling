<?php include ROOT.'/views/layouts/admin_header.php'; ?>



    <form class="admin__form" action="" method="POST" enctype="multipart/form-data">

        <p>Название товара</p>
        <input class="admin__input" type="text" name="name" placeholder="" value="">

        <p>Описание<p>
        <textarea class="admin__textarea" name="description"></textarea>

        <p>Цена</p>
        <input class="admin__input" type="text" name="price" placeholder="" value="">

        <p>Сколько штук в наличии</p>
        <input class="admin__input" type="text" name="availability" placeholder="" value="">

        <p>Категория товара</p>
        <select class="admin__select" name="category_id">
            <option value="0">Рюкзак</option>
            <option value="1">Май-слинг</option>
        </select>

        <p>Изображение товара</p>
        <input class="admin__input" type="file" name="img">

        <br><br>
        <input class="admin-btn" type="submit" name="submit"  value="Сохранить" >
    </form>



<?php include ROOT.'/views/layouts/admin_footer.php';?>
