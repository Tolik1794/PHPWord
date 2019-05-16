<!-- // доверенность на аренду квартиры-->

<div class="container">
    <div class="col-md-12">
        <form method="post" id="4" class="docform" style="display: none;">
            
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

            <!-- kvaddress-->
            <div class="form-row">
                <div class="col">
                    <label for="inputLastName">Сдать в аренду жилое помещение по аресу</label>
                    <input type="text" class="form-control" placeholder="Полный адрес квартиры" id="inputkvaddress" name="kvaddress" value="<?= $_COOKIE['kvaddress'] ?>">
                </div>
            </div>

            <!-- term -->
            <div class="form-row">
                <div class="col">
                    <label for="inputLastName">Доверенность выдана сроком на</label>
                    <input type="text" class="form-control" placeholder="Срок" id="inputterm" name="term" value="<?= $_COOKIE['term'] ?>">
                </div>
            </div>

            <input class="btn btn-primary"  id='btn' name="doc4" type='submit' value='Submit' style="margin-top:20px; width:200px">

        </form>
    </div>
</div>