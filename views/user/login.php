<?php include ROOT.'/views/layouts/header.php'?> ?>

<section>
    <div class="admin-login" >
        <?php echo $error; ?>
        <h2>Вход</h2>
        <form action="" method="POST" class="admin-form">
            <input type="text" name="login" placeholder="Логин">
            <input type="password" name="password" placeholder="Пароль">
            <input type="submit" name="submit" class="btn">
        </form>
    </div>
</section>

<?php include ROOT.'/views/layouts/footer.php'?>
