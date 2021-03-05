
<h2>Danh sach khach hang</h2>
<a href="main.php?page=add">them moi</a>
<table class="table">
    <thead>
    <tr>
        <th>STT</th>
        <th>Tên khách hàng </th>
        <th>Tên sân </th>
        <th>Giờ bắt đầu </th>
        <th>Giờ kết thúc </th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($sans as $key => $san): ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $san->ten  ?></td>
        <td><?php echo $san ->ma_san  ?></td>
        <td><?php echo $san ->bat_dau  ?></td>
        <td><?php echo $san ->ket_thuc  ?></td>
        <td> <a href="./index.php?page=edit&id=<?php echo $san->id; ?>" class="btn btn-sm">Update</a></td>
        <td> <a href="./index.php?page=delete&id=<?php echo $san->id; ?>" class="btn btn-warning btn-sm">Delete</a></td>
        <?php endforeach; ?>
    </tbody>
</table>

