<?php include ROOT.'/views/layouts/admin_header.php';?>




    <h4>Удалить товар #<?php echo $id; ?></h4>

    <p>Вы действительно хотите удалить этот товар?</p>

    <form class="admin__form" method="POST">
        <input class="admin-btn" type="submit" name="submit" value="Удалить">
    </form>


<?php include ROOT.'/views/layouts/admin_footer.php';?>
