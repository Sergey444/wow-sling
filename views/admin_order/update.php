<?php include ROOT.'/views/layouts/admin_header.php';?>

    <h4>Редактировать заказ #<?php echo $id; ?></h4>
        <form  class="admin__form" action="" method="POST">

            <p>Имя покупателя<p>
            <input  class="admin__input" name="user_name" value="<?php echo $order['user_name']; ?>">

            <p>Телефон покупателя</p>
            <input class="admin__input" type="text" name="user_phone" placeholder="" value="<?php echo $order['user_phone']; ?>">

            <p>Email покупателя</p>
            <input class="admin__input" type="text" name="user_email" placeholder="" value="<?php echo $order['user_email']; ?>">

            <p>Город покупателя</p>
            <input class="admin__input" type="text" name="user_city" placeholder="" value="<?php echo $order['user_city']; ?>">

            <p>Почтовый индекс покупателя</p>
            <input class="admin__input" type="text" name="user_post_order" placeholder="" value="<?php echo $order['user_post_order']; ?>">

            <p>Улица покупателя</p>
            <input class="admin__input" type="text" name="user_street" placeholder="" value="<?php echo $order['user_street']; ?>">

            <p>Дом покупателя</p>
            <input class="admin__input" type="text" name="user_house" placeholder="" value="<?php echo $order['user_house']; ?>">

            <p>Квартира покупателя</p>
            <input class="admin__input" type="text" name="user_flat" placeholder="" value="<?php echo $order['user_flat']; ?>">

            <p>Информация которую оставил покупатель</p>
            <textarea class="admin__textarea" name="user_info" ><?php echo $order['user_info']; ?></textarea>


            <p>Статус заказа</p>
            <select  class="admin__select" name="status">
                <option value="0" <?php if ($order['status'] == 0) { echo 'selected="selected"'; } ?>>В обработке</option>
                <option value="1" <?php if ($order['status'] == 1) { echo 'selected="selected"'; } ?>>Оплачен</option>
                <option value="2" <?php if ($order['status'] == 2) { echo 'selected="selected"'; } ?>>Отправлен</option>
            </select>

            <br><br>
            <input class="admin-btn" type="submit" name="submit"  value="Сохранить">
        </form>

<?php include ROOT.'/views/layouts/admin_footer.php';?>
