<div class="container">
    <div class="col-md-12">
        <form method="post" id="15" class="docform" style="display: none;">

            <label for="inputLastName">Нотариус</label>
            <div style="border:1px solid grey; padding:20px;">

                <!-- FIO and address Notarius -->
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Фамилия" id="inputlastNameNotarius" name="lastNameNotarius" value="<?= $_COOKIE['lastNameNotarius'] ?>">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Имя" id="inputfirstNameNotarius" name="firstNameNotarius" value="<?= $_COOKIE['firstNameNotarius'] ?>">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Отчество" id="inputpatronymicNotarius" name="patronymicNotarius" value="<?= $_COOKIE['patronymicNotarius'] ?>">
                    </div>
                </div>

                <!-- nationality and doc-->
                <div class="form-row" style="margin-top:20px;">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Город" id="inputcityNotarius" name="cityNotarius" value="<?= $_COOKIE['cityNotarius'] ?>">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Адрес" id="inputaddressNotarius" name="addressNotarius" value="<?= $_COOKIE['addressNotarius'] ?>">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Телефон" id="inputphoneNotarius" name="phoneNotarius" value="<?= $_COOKIE['phoneNotarius'] ?>">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Реквизиты" id="inputrequisiteNotarius" name="requisiteNotarius" value="<?= $_COOKIE['requisiteNotarius'] ?>">
                    </div>
                </div>
            </div>

            <label for="inputLastName">От гражданина РФ</label>
            <div style="border:1px solid grey; padding:20px;">

                <!-- FIO and address-->
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

                <div class="form-row" style="margin-top:20px;">
                    <div class="col">
                        <input type="date" class="form-control" placeholder="Дата рождения" id="inputbirthDate" name="birthDate" value="<?= $_COOKIE['birthDate'] ?>">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Место рождения" id="inputbirthPlace" name="birthPlace" value="<?= $_COOKIE['birthPlace'] ?>">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Адрес регистрации" id="inputAddress" name="Address" value="<?= $_COOKIE['Address'] ?>">
                    </div>
                </div>

                <!-- // pasport -->
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
            </div>

            <label for="inputLastName">Ребенок</label>
            <div style="border:1px solid grey; padding:20px;">

                <!--child-->
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Фамилия" id="inputlastNameCh" name="lastNameCh" value="<?= $_COOKIE['lastNameCh'] ?>">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Имя" id="inputfirstNameCh" name="firstNameCh" value="<?= $_COOKIE['firstNameCh'] ?>">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Отчество" id="inputpatronymicCh" name="patronymicCh" value="<?= $_COOKIE['patronymicCh'] ?>">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Дата рождения" id="inputbirthDateCh" name="birthDateCh" value="<?= $_COOKIE['birthDateCh'] ?>">
                    </div>
                </div>

                <label for="inputLastName">Свидетельство о рождении</label>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Серия №" id="inputbirthCertificateNum" name="birthCertificateNum" value="<?= $_COOKIE['birthCertificateNum'] ?>">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Кем выдано" id="inputbirthCertificatePlace" name="birthCertificatePlace" value="<?= $_COOKIE['birthCertificatePlace'] ?>">
                    </div>
                    <div class="col">
                        <input type="date" class="form-control" placeholder="Дата выдачи" id="inputbirthCertificateDate" name="birthCertificateDate" value="<?= $_COOKIE['birthCertificateDate'] ?>">
                    </div>
                </div>
            </div>

            <!-- mother-->
            <label for="inputLastName">Матерь ребенка</label>
            <div style="border:1px solid grey; padding:20px;">
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Фамилия" id="inputlastNameMr" name="lastNameMr" value="<?= $_COOKIE['lastNameMr'] ?>">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Имя" id="inputfirstNameMr" name="firstNameMr" value="<?= $_COOKIE['firstNameMr'] ?>">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Отчество" id="inputpatronymicMr" name="patronymicMr" value="<?= $_COOKIE['patronymicMr'] ?>">
                    </div>
                </div>

                <div class="form-row" style="margin-top:20px;">
                    <div class="col">
                        <input type="date" class="form-control" placeholder="Дата рождения" id="inputbirthDateMr" name="birthDateMr" value="<?= $_COOKIE['birthDateMr'] ?>">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Место рождения" id="inputbirthPlaceMr" name="birthPlaceMr" value="<?= $_COOKIE['birthPlaceMr'] ?>">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Адрес регистрации" id="inputAddressMr" name="AddressMr" value="<?= $_COOKIE['AddressMr'] ?>">
                    </div>
                </div>

                <!-- // pasport -->
                <label for="inputLastName">Паспорт</label>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Серия" id="inputpasportIdMr" name="pasportIdMr" value="<?= $_COOKIE['pasportIdMr'] ?>">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="№" id="inputpasportNumMr" name="pasportNumMr" value="<?= $_COOKIE['pasportNumMr'] ?>">
                    </div>
                    <div class="col">
                        <input type="date" class="form-control" placeholder="Выдан" id="inputpasportAddressMr" name="pasportAddressMr" value="<?= $_COOKIE['pasportAddressMr'] ?>">
                    </div>
                </div>
            </div>

            <label for="inputLastName">Страна и цель поездки</label>
            <div class="form-row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Страна назначения" id="inputdestination" name="destination" value="<?= $_COOKIE['destination'] ?>">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Цель поездки" id="inputpurpose" name="purpose" value="<?= $_COOKIE['purpose'] ?>">
                </div>
            </div>

            <label for="inputLastName">Период пребывания</label>
            <div class="form-row">
                <div class="col">
                    <input type="date" class="form-control" placeholder="С" id="inputdateStart" name="dateStart" value="<?= $_COOKIE['dateStart'] ?>">
                </div>
                <div class="col">
                    <input type="date" class="form-control" placeholder="По" id="inputdateFinish" name="dateFinish" value="<?= $_COOKIE['dateFinish'] ?>">
                </div>
            </div>

            <div class="form-row" style="margin-top:20px;">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Город" id="inputCity" name="City" value="<?= $_COOKIE['City'] ?>">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Дата оформления согласия прописью" id="inputdateInWord" name="dateInWord" value="<?= $_COOKIE['dateInWord'] ?>">
                </div>
            </div>

            <div class="form-row" style="margin-top:20px;">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Тариф" id="inputtariff" name="tariff" value="<?= $_COOKIE['tariff'] ?>">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Зарегистрировано в реестре за № " id="inputregistryNum" name="registryNum" value="<?= $_COOKIE['registryNum'] ?>">
                </div>
            </div>

            <div>
                <input class="btn btn-primary" id='btn' name="doc15" type='submit' value='Submit' style="margin-top:20px; width:200px">
            </div>
        </form>
    </div>
</div>