<!-- // доверенность на получение денег-->

<div class="container">
    <div class="col-md-12">
        <form method="post" id="6" class="docform" style="display: none;">

            <div class="form-row">
                <div class="col">
                    <label for="inputCity">ФИО</label>
                </div>
            </div>

            <!-- FIO -->
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
            </div>

            <!-- pasport-->
            <label for="inputLastName">Паспорт</label>
            <div class="form-row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Серия" id="inputpasportId" name="pasportId" value="<?= $_COOKIE['pasportId'] ?>">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="№" id="inputpasportNum" name="pasportNum" value="<?= $_COOKIE['pasportNum'] ?>">
                </div>
                <div class="col">
                    <input type="date" class="form-control" placeholder="Выдан" id="inputpasportAddress" name="pasportAddress" value="<?= $_COOKIE['pasportAddress'] ?>">
                </div>
            </div>

            <!-- FIO Ind -->
            <label for="inputLastName">Уполномачивает (ФИО)</label>
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
            </div>

            <!-- pasport Ind -->
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

           
            <label for="inputLastName">Указать, где будут получаться деньги</label>
            <div class="form-row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Полное наименование" id="inputmoneyPlace" name="moneyPlace" value="<?= $_COOKIE['moneyPlace'] ?>">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Адрес" id="inputmoneyAddress" name="moneyAddress" value="<?= $_COOKIE['moneyAddress'] ?>">
                </div>
            </div>

            
            <label for="inputLastName">Сумма и основания получения денег</label>
            <div class="form-row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Сумма" id="inputmoneySum" name="moneySum" value="<?= $_COOKIE['moneySum'] ?>">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Основания получения денег" id="inputmoneyTo" name="moneyTo" value="<?= $_COOKIE['moneyTo'] ?>">
                </div>
            </div>

            <input class="btn btn-primary" id='btn' name="doc6" type='submit' value='Submit' style="margin-top:20px; width:200px">

        </form>
    </div>
</div>