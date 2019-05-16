<div class="container">
    <div class="col-md-12">
        <form method="post" id="1" class="docform" style="display: none;">
            <!-- style="display: none;"  -->
            <!-- action="views/doc1view.php" -->

            <div class="form-row">
                <div class="col">
                    <label for="inputCity">Город</label>
                    <input type="text" class="form-control" placeholder="Город" id="inputCity" name="City" value="<?= $_COOKIE['City'] ?>">
                </div>
            </div>

                <!-- FIO and address -->
            <label for="inputLastName">Довереность от</label>
            <div class="form-row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Фамилия" id="inputLastName" name="LastName" value="<?= $_COOKIE['LastName'] ?>">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Имя" id="inputFirstName" name="FirstName" value="<?= $_COOKIE['FirstName'] ?>">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Отчество" id="inputPatronumic" name="Patronumic" value="<?= $_COOKIE['Patronumic'] ?>">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Адрес" id="inputAddress" name="Address" value="<?= $_COOKIE['Address'] ?>">
                </div>
            </div>

                <!-- FIO and address Ind -->
            <label for="inputLastName">Доверенность на</label>
            <div class="form-row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Фамилия" id="inputLastNameInd" name="LastNameInd" value="<?= $_COOKIE['FirstNameInd'] ?>">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Имя" id="inputFirstNameInd" name="FirstNameInd" value="<?= $_COOKIE['LastNameInd'] ?>">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Отчество" id="inputPatronumicInd" name="PatronumicInd" value="<?= $_COOKIE['PatronumicInd'] ?>">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Адрес" id="inputaddressInd" name="addressInd" value="<?= $_COOKIE['addressInd'] ?>">
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <label for="inputLastName">Действует до</label>
                    <input type="date" class="form-control" placeholder="Действует до" id="inputDateTo" name="DateTo" value="<?= $_COOKIE['DateTo'] ?>">
                </div>
            </div>
            
            <div>
                <input class="btn btn-primary" id='btn' name="doc1" type='submit' value='Submit' style="margin-top:20px; width:200px">
            </div>
        </form>
    </div>
</div>

<?php

// print_r($_COOKIE);
