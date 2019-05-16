<!-- // доверенность на получение заработной платы-->

<div class="container">
    <div class="col-md-12">
        <form method="post" id="8" class="docform" style="display: none;">

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

           
            <label for="inputLastName">Получить в кассе</label>
            <div class="form-row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Наименование предприятия" id="inputcompany" name="company" value="<?= $_COOKIE['company'] ?>">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Адрес" id="inputcompanyAddress" name="companyAddress" value="<?= $_COOKIE['companyAddress'] ?>">
                </div>
            </div>

            <label for="inputLastName">Указать период</label>
            <div class="form-row">
                <div class="col">
                    <input type="date" class="form-control" placeholder="От" id="inputdateStart" name="dateStart" value="<?= $_COOKIE['dateStart'] ?>">
                </div>
                <div class="col">
                    <input type="date" class="form-control" placeholder="До" id="inputdateFinish" name="dateFinish" value="<?= $_COOKIE['dateFinish'] ?>">
                </div>
            </div>

            <input class="btn btn-primary" id='btn' name="doc8" type='submit' value='Submit' style="margin-top:20px; width:200px">

        </form>
    </div>
</div>