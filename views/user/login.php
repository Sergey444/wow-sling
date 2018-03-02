<?php include ROOT.'/views/layouts/user_header.php';?>

        <section class="admin-login">
            <div class="admin-login__wrapper" >
                <form action="" method="POST" class="admin-form">
                    <?php echo $error; ?>
                    <h2>Вход</h2>
                    <label for="name"></label>Логин:<input class="admin-login__input" type="text" name="login" placeholder=""  autocomplete="off">
                    <label for="password">Пароль:</label> <input class="admin-login__input" type="text"  style="-webkit-text-security: disc;" name="password" placeholder=""  autocomplete="off">
                    <input type="submit" name="submit" class=" admin-login__input" value="Войти" >
                </form>
            </div>
        </section>

    </body>
</html>
