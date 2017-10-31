<?php include ROOT.'/views/layouts/admin_header.php';?>
        <h5>Информация о заказе</h5>

        <?php echo Order::getDeliveryText($order['delivery']); ?>
        <table class="admin__table">
            <tr>
                <td>Номер заказа</td>
                <td><?php echo $order['id']; ?></td>
            </tr>
             <tr>
                <td>Имя клиента</td>
                <td><?php echo $order['user_name']; ?></td>
            </tr>
            <tr>
                <td>Телефон клиена</td>
                <td><?php echo $order['user_phone']; ?></td>
            </tr>
            <tr>
                <td>Email клиента</td>
                <td><?php echo $order['user_email']; ?></td>
            </tr>
            <tr>
                <td>Город клиента</td>
                <td><?php echo $order['user_city']; ?></td>
            </tr>
            <tr>
                <td>Почтовый индекс клиента</td>
                <td><?php echo $order['user_post_order']; ?></td>
            </tr>
            <tr>
                <td>Улица клиента</td>
                <td><?php echo $order['user_street']; ?></td>
            </tr>
            <tr>
                <td>Дом клиента</td>
                <td><?php echo $order['user_house']; ?></td>
            </tr>
            <tr>
                <td>Квартира клиента</td>
                <td><?php echo $order['user_flat']; ?></td>
            </tr>
            <tr>
                <td>Коментарий клиента</td>
                <td><?php echo $order['user_info']; ?></td>
            </tr>
            <tr>
                <td>Дата заказа</td>
                <td><?php echo $order['date']; ?></td>
            </tr>
            <tr>

                <td>Статус заказа</td>
                <td><?php echo Order::getStatusText($order['status']); ; ?></td>
            </tr>

        </table>

        <h5>Товары в заказе</h5>

        <table class="admin__table">
            <tr>
                <th>ID Товара</th>
                <th>Фото</th>
                <th>Название</th>
                <th>Цена</th>
                <th>Количество</th>
            </tr>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?php echo $product['id']; ?></td>
                    <td><img src=" <?php echo Product::getImage($product['id']); ?>?>" width="70" height="100"></td>
                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo $product['price']; ?></td>
                    <td><?php echo $productsQuantity[$product['id']]; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <a class="admin-btn" href="/admin/order/">Назад</a>

<?php include ROOT.'/views/layouts/admin_footer.php';?>
