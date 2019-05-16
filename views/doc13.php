<!-- // доверенность от юридического лица -->

<div class="container">
    <div class="col-md-12">
        <form method="post" id="13" class="docform" style="display: none;">
            <!-- style="display: none;"  -->
            <!-- action="views/doc1view.php" -->

            <!-- City -->
            <div class="form-row">
                <div class="col">
                    <label for="inputCity">Город</label>
                    <input type="text" class="form-control" placeholder="Город" id="inputCity" name="City" value="<?= $_COOKIE['City'] ?>">
                </div>
            </div>

            <!-- company -->
            <div class="form-row">
                <div class="col">
                    <label for="inputCity">Наименование юридического лица</label>
                    <input type="text" class="form-control" placeholder="Наименование юридического лица" id="inputcompany" name="company" value="<?= $_COOKIE['company'] ?>">
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <label for="inputCity">ФИО, наименование должности руководителя</label>
                </div>
            </div>

            <!-- FIO and Position -->
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
                    <input type="text" class="form-control" placeholder="Должность" id="inputposition" name="position" value="<?= $_COOKIE['position'] ?>">
                </div>
            </div>

            <!-- FIO and address Ind -->
            <label for="inputLastName">Уполномачивает (ФИО), адрес</label>
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

            <label for="inputLastName">Предсталять интересы</label>
            <div class="form-row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Наименование юридического лица" id="inputcompanyInd" name="companyInd" value="<?= $_COOKIE['companyInd'] ?>">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Перечислить полномочия" id="inputauthority" name="authority" value="<?= $_COOKIE['authority'] ?>">
                </div>
            </div>

            <!-- term -->
            <div class="form-row">
                <div class="col">
                    <label for="inputLastName">Доверенность выдана сроком на</label>
                    <input type="text" class="form-control" placeholder="Срок" id="inputterm" name="term" value="<?= $_COOKIE['term'] ?>">
                </div>
            </div>

            <input class="btn btn-primary"  id='btn' name="doc13" type='submit' value='Submit' style="margin-top:20px; width:200px">

        </form>
    </div>
</div>