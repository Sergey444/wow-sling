<?php include ROOT.'/views/layouts/admin_header.php' ;?>

<section class="admin-content">
    <div class="admin-content__wrapper">
            <table class="admin__table">
                <tr>
                    <th>ID заказа</th>
                    <th>Имя покупателя</th>
                    <th>Email покупателя</th>
                    <th>Дата</th>
                    <th>Статус</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($ordersList as $order): ?>
                <tr>
                    <td><?php echo $order['id']; ?></td>
                    <td><?php echo $order['user_name']; ?></td>
                    <td><?php echo $order['user_email']; ?></td>
                    <td><?php echo $order['date']; ?></td>
                    <td><?php echo Order::getStatusText($order['status']); ?></td>
                    <td><a class="admin-btn__check  admin-btn__check--view" href="/admin/order/view/<?php echo $order['id']; ?>" title="Подробнее">Подробнее</a></td>
                    <td><a class="admin-btn__check  admin-btn__check--update" href="/admin/order/update/<?php echo $order['id']; ?>" title="Редактировать">Редактировать</a></td>
                    <td><a class="admin-btn__check  admin-btn__check--delete" href="/admin/order/delete/<?php echo $order['id']; ?>" title="Удалить">Удалить</a></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </section>


<?php include ROOT.'/views/layouts/admin_footer.php' ;?>
