<div class="container">
    <div class="col-md-12">
        <form method="post" id="14" class="docform" style="display: none;">
            <!-- style="display: none;"  -->
            <!-- action="views/doc1view.php" -->

            <div class="form-row">
                <div class="col">
                    <label for="inputCity">Город</label>
                    <input type="text" class="form-control" placeholder="Город" id="inputCity" name="City" value="<?= $_COOKIE['City'] ?>">
                </div>
            </div>

            <label for="inputLastName">Довереность от</label>
            <div style="border:1px solid grey; padding:20px;">

                <!-- FIO and address -->
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

                <!-- nationality and doc-->
                <div class="form-row" style="margin-top:20px;">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Гражданство" id="inputnationality" name="nationality" value="<?= $_COOKIE['nationality'] ?>">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Документ" id="inputidentityDoc" name="identityDoc" value="<?= $_COOKIE['identityDoc'] ?>">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Реквизиты документа" id="inputparamsIdentity" name="paramsIdentity" value="<?= $_COOKIE['paramsIdentity'] ?>">
                    </div>
                </div>
            </div>

            <label for="inputLastName">Доверенность на</label>
            <div style="border:1px solid grey; padding:20px;">

                <!-- FIO and address Ind -->
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

                <!-- // pasport -->
                <label for="inputLastName">Паспорт</label>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Серия" id="inputpasportIdInd" name="pasportIdInd" value="<?= $_COOKIE['pasportIdInd'] ?>">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="№" id="inputpasportNumInd" name="pasportNumInd" value="<?= $_COOKIE['pasportNumInd'] ?>">
                    </div>
                    <div class="col">
                        <input type="date" class="form-control" placeholder="Выдан" id="inputpasportAddressInd" name="pasportAddressInd" value="<?= $_COOKIE['pasportAddressInd'] ?>">
                    </div>
                </div>
            </div>

            <label for="inputLastName">Транспортное средство</label>
            <div style="border:1px solid grey; padding:20px;">

                <label for="inputLastName">Паспорт транспортного средства, выданного Управлением</label>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="ГИБДД/ГАИ" id="inputGAI" name="GAI" value="<?= $_COOKIE['GAI'] ?>">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Город" id="inputGAICity" name="GAICity" value="<?= $_COOKIE['GAICity'] ?>">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="№" id="inputGAINum" name="GAINum" value="<?= $_COOKIE['GAINum'] ?>">
                    </div>
                    <div class="col">
                        <input type="date" class="form-control" placeholder="От" id="inputGAIDate" name="GAIDate" value="<?= $_COOKIE['GAIDate'] ?>">
                    </div>
                </div>

                <label for="inputLastName">Транспортное средство</label>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Марка" id="inputcar" name="car" value="<?= $_COOKIE['car'] ?>">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Год выпуска" id="inputcarDate" name="carDate" value="<?= $_COOKIE['carDate'] ?>">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Цвет" id="inputcarColor" name="carColor" value="<?= $_COOKIE['carColor'] ?>">
                    </div>
                </div>

                <div class="form-row" style="margin-top:20px;">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="№ двигателя" id="inputcarEngine" name="carEngine" value="<?= $_COOKIE['carEngine'] ?>">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="№ кузова" id="inputcarBody" name="carBody" value="<?= $_COOKIE['carBody'] ?>">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="№ шасси" id="inputcarСhassis" name="carСhassis" value="<?= $_COOKIE['carСhassis'] ?>">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="VIN" id="inputcarVIN" name="carVIN" value="<?= $_COOKIE['carVIN'] ?>">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Гос номер" id="inputcarGosNum" name="carGosNum" value="<?= $_COOKIE['carGosNum'] ?>">
                    </div>
                </div>

                <label for="inputLastName">Свидетельство регистрации транспортного средства</label>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Серия" id="inputcarId" name="carId" value="<?= $_COOKIE['carId'] ?>">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="№" id="inputcarNum" name="carNum" value="<?= $_COOKIE['carNum'] ?>">
                    </div>
                </div>

                <label for="inputLastName">Выдано</label>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="ГИБДД" id="inputGIBDD" name="GIBDD" value="<?= $_COOKIE['GIBDD'] ?>">
                    </div>
                    <div class="col">
                        <input type="date" class="form-control" placeholder="От" id="inputGIBDDDate" name="GIBDDDate" value="<?= $_COOKIE['GIBDDDate'] ?>">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <label for="inputLastName">Действует до</label>
                    <input type="date" class="form-control" placeholder="Действует до" id="inputDateTo" name="DateTo" value="<?= $_COOKIE['DateTo'] ?>">
                </div>
            </div>

            <div>
                <input class="btn btn-primary" id='btn' name="doc14" type='submit' value='Submit' style="margin-top:20px; width:200px">
            </div>
        </form>
    </div>
</div>

<?php

// print_r($_COOKIE);
