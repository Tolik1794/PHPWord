<?php
session_start();

require_once('../../Dbsettings.php');
require_once('../../DB.php');
// require_once('../Session.php');

require_once '../../Session.php';
require_once '../main/header.php';
require_once '../../variables.php';

if (!Session::has('login')) {
    echo 'error 404';
} else {

    $db = new DB($host, $user, $password, $db_name);

    ?>
    <div id="2" style="display:block;">
        <h1 style="margin: 0 auto;">My Document</h1>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Doc Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">City</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Patronymic</th>
                    <th scope="col">Last Name 3rd</th>
                    <th scope="col">First Name 3rd</th>
                    <th scope="col">Patronymic 3rd</th>
                    <th scope="col">Company 3rd</th>
                    <th scope="col">Delete</th>
                    <th scope="col">test</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once('POAGeneration.php');
                include_once('POAFCC.php');
                include_once('POAofTax.php');
                include_once('POAforRealEstate.php');
                include_once('POAsignDocuments.php');
                include_once('POAtoReciveMoney.php');
                include_once('POAtoReciveDocument.php');
                include_once('POAforSalary.php');
                include_once('POAforPension.php');
                include_once('POAtoReciveMail.php');
                include_once('POAtoReciveTMC.php');
                include_once('RepresentationAttorney.php');
                include_once('POAfromLegalEntity.php');
                include_once('POAtoManageTheVehicle.php');
                include_once('POAonLeavingTheChild.php');
                ?>
            </tbody>
        </table>
    </div>

<?php }
require_once '../main/footer.php';
?>