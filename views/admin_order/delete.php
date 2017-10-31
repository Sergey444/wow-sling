<?php include ROOT.'/views/layouts/admin_header.php' ; ?>


    

    <h4>Удалить заказ # <?php echo $id; ?></h4>

    <p>Вы действительно хотите удалить этот заказ?</p>

    <form method="POST">
        <input class="admin-btn" type="submit" name="submit" value="Удалить">
    </form>


<?php include ROOT.'/views/layouts/admin_footer.php'; ?>
