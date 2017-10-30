<?php include ROOT.'/views/layouts/admin_header.php'?>

<section>
    <div>
       
    </div>
    
    <h4>Удалить заказ #<?php echo $id; ?></h4>
    
    <p>Вы действительно хотите удалить этот заказ?</p>
    
    <form method="POST">
        <input type="submit" name="submit" value="Удалить">
    </form>
</section>

<?php include ROOT.'/views/layouts/admin_footer.php'?>