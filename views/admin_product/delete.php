<?php include ROOT.'/views/layouts/admin_header.php';?>

<section class="admin-content">
    <div class="admin-content__wrapper">


        <h4>Удалить товар #<?php echo $id; ?></h4>

        <p>Вы действительно хотите удалить этот товар?</p>

        <form class="admin__form" method="POST">
            <input class="admin-btn" type="submit" name="submit" value="Удалить">
        </form>

    </div>
</section>


<?php include ROOT.'/views/layouts/admin_footer.php';?>
