<?php
    $docs = $db->query("SELECT * FROM `doc` WHERE docName = 'POAFCC' ORDER BY date DESC");
?>

<div id="2" style="display:none;">
    <h1 style="margin: 0 auto;">POAFCC</h1>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th scope="col">City</th>
                <th scope="col">Last Name</th>
                <th scope="col">First Name</th>
                <th scope="col">Patronymic</th>
                <th scope="col">Last Name 3rd</th>
                <th scope="col">First Name 3rd</th>
                <th scope="col">Patronymic 3rd</th>
                <th scope="col">Company 3rd</th>
            </tr>
        </thead>
        <tbody>


            <?php
            $i = 0;
            foreach ($docs as $doc) {
                $i++
                ?>
                <tr>
                    <th scope="row"><?= $i ?></th>
                    <td><?= $doc['date'] ?></td>
                    <td><?= $doc['city'] ?></td>
                    <td><?= $doc['lastName'] ?></td>
                    <td><?= $doc['firstName'] ?></td>
                    <td><?= $doc['patronymic'] ?></td>
                    <td><?= $doc['lastNameInd'] ?></td>
                    <td><?= $doc['firstNameInd'] ?></td>
                    <td><?= $doc['patronymicInd'] ?></td>
                    <td><?= $doc['companyInd'] ?></td>

                </tr>


            <?php } ?>

        </tbody>
    </table>
</div>