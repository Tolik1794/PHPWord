<?php

// POAforRealEstate
// доверенность на оренду квартиры

$user_login = Session::get('login');
$users_id = $db->query("SELECT `id_users` FROM `users` WHERE login = '$user_login'");
$user_id = $users_id[0]['id_users'];

$POAforRealEstate = $db->query("SELECT * FROM `POAforRealEstate` WHERE user_id = '$user_id'");

$i = 0;
foreach ($POAforRealEstate as $doc) {
    $i++
    ?>
    <tr>
        <th scope="row"><?= $i ?></th>
        <td>POAforRealEstate</td>
        <td><?= $doc['date'] ?></td>
        <td><?= $doc['city'] ?></td>
        <td><?= $doc['lastName'] ?></td>
        <td><?= $doc['firstName'] ?></td>
        <td><?= $doc['patronymic'] ?></td>
        <td><?= $doc['lastNameInd'] ?></td>
        <td><?= $doc['firstNameInd'] ?></td>
        <td><?= $doc['patronymicInd'] ?></td>
        <td><?= $doc['companyInd'] ?></td>
        <td>
            <form action="delete.php" method="post">
                <input type="hidden" name="table" value="POAforRealEstate">
                <input type="hidden" name="id" value="<?= $doc['id'] ?>">
                <input class="btn btn-danger mb-2" type="submit" value="Delete">
            </form>
            <form action="../../POAforRealEstate.php" method="post">
                <input type="hidden" name="id" value="<?= $doc['id'] ?>">
                <input type="hidden" name="download" value="POAFCC">
                <input class="btn btn-primary mb-2" type="submit" value="Download">
            </form>
        </td>
        <td></td>

    </tr>


<?php } ?>