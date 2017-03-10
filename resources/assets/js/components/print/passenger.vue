<template>
    <div>
        <div class="waybill-front">
            <table border="0" cellpadding="0" cellspacing="0">
                <tbody>
                    <tr>
                        <td colspan="60"></td>
                        <td colspan="1" rowspan="100"></td>
                        <td colspan="1" rowspan="100" class="middle border-right border-left">Л<br />И<br />Н<br />И<br />Я<br /> <br />О<br />Т<br />Р<br />Е<br />З<br />А</span></td>
                        <td colspan="1" rowspan="100"></td>
                        <td colspan="21"></td>
                    </tr>
                    <tr>
                        <td colspan="6" class="center small bottom"></td>
                        <td colspan="34"></td>
                        <td colspan="20" class="small right bottom">Типовая межотраслевая форма № 3</td>
                        <td colspan="21"></td>
                    </tr>
                    <tr>
                        <td colspan="6"></td>
                        <td colspan="34"></td>
                        <td colspan="20" class="small right">Утверждена Постановлением Госкомстата России<br />от 28.11.97 №78</td>
                        <td colspan="21" class="bold text-uppercase">ТАЛОН ЗАКАЗЧИКА</td>
                    </tr>
                    <tr>
                        <td colspan="37" class="bold right text-uppercase">ПУТЕВОЙ ЛИСТ ЛЕГКОВОГО АВТОМОБИЛЯ</td>
                        <td colspan="1" class="bold">№</td>
                        <td colspan="6" class=" bold border-bottom"></td>
                        <td colspan="1" class=" bold">&laquo;</td>
                        <td colspan="2" class=" bold border-bottom">{{ day }}</td>
                        <td colspan="1" class=" bold">&raquo;</td>
                        <td colspan="6" class=" bold border-bottom">{{ month }}</td>
                        <td colspan="1"></td>
                        <td colspan="4" class="bold border-bottom">{{ year }} г.</td>
                        <td colspan="1"></td>
                        <td colspan="8" class="bold bottom left">к путевому листу</td>
                        <td colspan="1" class="bold bottom">№</td>
                        <td colspan="12" class="bold bottom border-bottom"></td>
                    </tr>
                    <tr>
                        <td colspan="60"></td>
                        <td colspan="2"> </td>
                        <td colspan="1" class="bold bottom">&laquo;</td>
                        <td colspan="3" class="bold bottom border-bottom">{{ day }}</td>
                        <td colspan="1" class="bold bottom">&raquo;</td>
                        <td colspan="6" class="bold bottom border-bottom">{{ month }}</td>
                        <td colspan="1"></td>
                        <td colspan="5" class="bold bottom border-bottom">{{ year }} г.</td>
                        <td colspan="2"> </td>
                    </tr>
                    <tr>
                        <td colspan="26"></td>
                        <td colspan="6"></td>
                        <td colspan="21"></td>
                        <td colspan="7" class="border">Коды</td>
                        <td colspan="21"></td>
                    </tr>
                    <tr>
                        <td colspan="44"></td>
                        <td colspan="9" class="right">Форма по ОКУД</td>
                        <td colspan="7" class="border border-bold"></td>
                        <td colspan="4" class="bold left">Организация</td>
                        <td colspan="2"></td>
                        <td colspan="15" class="bottom border-bottom">{{ company.name }}</td>
                    </tr>
                    <tr>
                        <td colspan="6" class="left">Организация</td>
                        <td colspan="40" class="bold bottom border-bottom">{{ company.name }}, {{ company.requisites.phone }}, тел. {{ company.requisites.phone }}</td>
                        <td colspan="1"></td>
                        <td colspan="6"class="right">по ОКПО</td>
                        <td colspan="7"class="border-bold"></td>

                        <td colspan="6"></td>
                        <td colspan="15" class="little">(наименование)</td>
                    </tr>
                    <tr>
                        <td colspan="6"></td>
                        <td colspan="40" class="little">(наименование, адрес, номер телефона)</td>
                        <td colspan="14"></td>

                        <td colspan="21" class="little border-bottom">{{ company.requisites.phone }}, тел. {{ company.requisites.phone }}</td>
                    </tr>
                    <tr>
                        <td colspan="8" class="left">Марка автомобиля</td>
                        <td colspan="43" class="bold center border-bottom">{{ item.auto.model }}</td>
                        <td colspan="2"></td>
                        <td colspan="7" class="border border-top-bold border-right-bold border-bottom-double border-left-bold"></td>
                        <td colspan="21" class="little">(адрес, номер телефона)</td>
                    </tr>

                    <tr></tr>

                    <tr>
                        <td colspan="14" class="left">Государственный номерной знак</td>
                        <td colspan="31" class="bold border-bottom text-uppercase">{{ item.auto.numberplate }}</td>
                        <td colspan="8" class="right">Гаражный номер</td>
                        <td colspan="7" class="border border-right-bold border-bottom-bold border-left-bold"></td>

                        <td colspan="5" class="bold left">Автомобиль</td>
                        <td colspan="16" class="border-bottom">{{ item.auto.type }} {{ item.auto.model }}</td>
                    </tr>
                    <tr>
                        <td colspan="4" class="left">Водитель</td>
                        <td colspan="41" class="bold border-bottom">{{ item.driver.fullName }}</td>
                        <td colspan="8" class="right">Табельный номер</td>
                        <td colspan="7" class="border border-bold"></td>
                        <td colspan="5"></td>
                        <td colspan="16" class="little">(тип, марка)</td>
                    </tr>
                    <tr>
                        <td colspan="4"></td>
                        <td colspan="41" class="little">(фамилия, имя, отчество)</td>
                        <td colspan="15"></td>
                        <td colspan="8" class="bold left">Гос. номерной знак</td>
                        <td colspan="13" class="border-bottom text-uppercase">{{ item.auto.numberplate }}</td>
                    </tr>
                    <tr>
                        <td colspan="8" class="left">Удостоверение №</td>
                        <td colspan="40" class="border-bottom">{{ item.driver.license }}</td>
                        <td colspan="1"></td>
                        <td colspan="3">Класс</td>
                        <td colspan="8" class="border-bottom"></td>
                        <td colspan="21"></td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td colspan="11" class="middle left">Лицензионная карточка</td>
                        <td colspan="14" class="border-bottom">стандартная/ограниченная</td>
                        <td colspan="36"></td>
                        <td colspan="4" class="bold right">Заказчик</td>
                        <td colspan="17" class="bottom border-bottom">{{ item.customer.name }}</td>
                    </tr>
                    <tr>
                        <td colspan="11"></td>
                        <td colspan="14" class="little">(ненужное зачеркнуть)</td>
                        <td colspan="36"></td>
                        <td colspan="4"></td>
                        <td colspan="17" class="little">(наименование)</td>
                    </tr>
                    <tr>
                        <td colspan="12" class="left">Регистрационный номер №</td>
                        <td colspan="10" class="border-bottom"></td>
                        <td colspan="4">Серия</td>
                        <td colspan="5" class="border-bottom"></td>
                        <td colspan="2">№</td>
                        <td colspan="8" class="border-bottom"></td>
                        <td colspan="19"></td>
                        <td colspan="21" class="border-bottom">{{ item.customer.address }}</td>
                    </tr>
                    <tr> </tr>
                    <tr>
                        <td colspan="5"></td>
                        <td colspan="10" class="bold">Задание водителю</td>
                        <td colspan="21"></td>
                        <td colspan="16">Автомобиль технически исправен</td>
                        <td colspan="8"></td>
                        <td colspan="21" class="little">(адрес, номер телефона)</td>
                    </tr>
                    <tr>
                        <td colspan="36"></td>
                        <td colspan="16" class="left">Показания спидометра, км</td>
                        <td colspan="8" class="border-bold"></td>
                        <td colspan="21" class="border-bottom bold"></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="left">В распоряжение</td>
                        <td colspan="28" class="bold border-bottom">{{ item.customer.name }}</td>
                        <td colspan="25"></td>
                        <td colspan="21" class="little">(фамилия, и., о. ответственного лица)</td>
                    </tr>
                    <tr>
                        <td colspan="8"></td>
                        <td colspan="27" class="little">(наименование)</td>
                        <td colspan="1"></td>
                        <td colspan="9" class="left"> Въезд разрешен</td>
                        <td colspan="15"></td>
                        <td colspan="7" rowspan="2" class="border middle border-top-bold border-left-bold">Операция</td>
                        <td colspan="7" rowspan="2"  class="border middle border-top-bold">Время, часы</td>
                        <td colspan="7" rowspan="2"  class="border middle border-top-bold border-right-bold">Показание спидометра, км.</td>
                    </tr>
                    <tr>
                        <td colspan="24" class="border-bottom bold"></td>
                        <td colspan="1"></td>
                        <td colspan="10" class="border-bold"></td>
                        <td colspan="1"></td>
                        <td colspan="4" class="bold left bottom">Механик</td>
                        <td colspan="8" class="border-bottom"></td>
                        <td colspan="1"></td>
                        <td colspan="11" class="border-bottom bottom">{{ item.mechanic }}</td>

                    </tr>
                    <tr>
                        <td colspan="24" class="little">(организация)</td>
                        <td colspan="1"></td>
                        <td colspan="10"></td>
                        <td colspan="1"></td>
                        <td colspan="4"></td>
                        <td colspan="8" class="little">(подпись)</td>
                        <td colspan="1"></td>
                        <td colspan="11" class="little">(расшифровка подписи)</td>

                        <td colspan="7" rowspan="2" class="border middle left border-left-bold">Прибытие</td>
                        <td colspan="7" rowspan="2" class="border middle"></td>
                        <td colspan="7" rowspan="2" class="border middle border-right-bold"></td>
                    </tr>
                    <tr>
                        <td colspan="36"></td>
                        <td colspan="16" class="left">Автомобиль в технически</td>
                        <td colspan="8"></td>
                    </tr>

                    <tr>
                        <td colspan="36"></td>
                        <td colspan="16" class="left">исправном состоянии принял</td>
                        <td colspan="8"></td>

                        <td colspan="7" rowspan="2" class="border middle left border-left-bold">Убытие</td>
                        <td colspan="7" rowspan="2" class="border middle"></td>
                        <td colspan="7" rowspan="2" class="border middle border-right-bold"></td>
                    </tr>
                    <tr>
                        <td colspan="6" class="left">Адрес подачи</td>
                        <td colspan="29" class="border-bottom"></td>
                        <td colspan="1"></td>
                        <td colspan="4" class="bold left">Водитель</td>
                        <td colspan="8" class="border-bottom"></td>
                        <td colspan="1"></td>
                        <td colspan="11" class="border-bottom">{{ item.driver.shortName }}</td>

                    </tr>
                    <tr>
                        <td colspan="35" class="border-bottom"></td>
                        <td colspan="1"></td>
                        <td colspan="4"></td>
                        <td colspan="8" class="little">(подпись)</td>
                        <td colspan="1"></td>
                        <td colspan="11" class="little">(расшифровка подписи)</td>

                        <td colspan="14" rowspan="2" class="left middle border border-left-bold border-bottom-bold">Отработано часов:</td>
                        <td colspan="7" rowspan="2" class=" border border-right-bold border-bottom-bold"></td>
                    </tr>
                    <tr>
                        <td colspan="35" class="border-bottom"></td>
                        <td colspan="1"></td>
                        <td colspan="6" class="left">Горючее</td>
                        <td colspan="8" class="border-bottom border-right border-left-double border-top-double">марка</td>
                        <td colspan="10" class="border-right-double border-left border-right-double border-top-double">код</td>

                    </tr>

                    <tr> </tr>

                    <tr>
                        <td colspan="42" class="min">&nbsp;</td>
                        <td colspan="8" rowspan="2" class="border-top border-left-double border-bottom-double border-right-double-double"></td>
                        <td colspan="10" rowspan="2" class="border-left-double border-right-double border-top-double border-bottom-double"></td>
                        <td colspan="21"></td>
                    </tr>
                    <tr>
                        <td colspan="14" class="left">Время выезда и гаража, ч. мин.</td>
                        <td colspan="11"></td>
                        <td colspan="10" class="border-bold"></td>
                        <td colspan="7"></td>

                        <td colspan="4" class="bold">Закзчик</td>
                        <td colspan="10" class="border-bottom"></td>
                        <td colspan="1"></td>
                        <td colspan="6" class="border-bottom"></td>
                    </tr>
                    <tr>
                        <td colspan="36"></td>
                        <td colspan="9" class="bold">Движение горючего</td>
                        <td colspan="15"></td>

                        <td colspan="4"></td>
                        <td colspan="10" class="little">(Должность)</td>
                        <td colspan="1"></td>
                        <td colspan="6" class="little">(Подпись)</td>
                    </tr>
                    <tr>
                        <td colspan="10">Диспетчер-нарядчик</td>
                        <td colspan="4"></td>
                        <td colspan="8" class="border-bottom"></td>
                        <td colspan="1"></td>
                        <td colspan="12" class="border-bottom">{{ item.dispatcher }}</td>
                        <td colspan="25"></td>

                        <td colspan="4">М.П.</td>
                        <td colspan="17" class="border-bottom"></td>
                    </tr>
                    <tr>
                        <td colspan="14"></td>
                        <td colspan="8" class="little">(подпись)</td>
                        <td colspan="1"></td>
                        <td colspan="12" class="little">(расшифровка подписи)</td>
                        <td colspan="15"></td>
                        <td colspan="10" class="border">количество, л.</td>

                        <td colspan="4"></td>
                        <td colspan="17" class="little">(расшифровка подписи)</td>
                    </tr>
                    <tr>
                        <td colspan="36"></td>
                        <td colspan="6" class="left">Выдано:</td>
                        <td colspan="8"></td>
                        <td colspan="10" rowspan="3" class="border-top-bold border-right-bold border-left-bold border-bottom"></td>

                        <td colspan="21" class="border-top-bold border-right-bold border-bottom border-left-bold">Заполняется автопредприятием</td>
                    </tr>
                    <tr>
                        <td colspan="16">Время возвращения в гараж, ч. мин.</td>
                        <td colspan="9"></td>
                        <td colspan="10" class="border-bold"></td>
                        <td colspan="1"></td>
                        <td colspan="8" class="left">по заправочному</td>
                        <td colspan="6"></td>

                        <td colspan="6" rowspan="3" class="middle border-top border-right border-bottom border-left-bold">Расчет стоимости</td>
                        <td colspan="5" rowspan="3"class="middle border-top border-right border-bottom border-left">Время оплачиваи мое, ч.</td>
                        <td colspan="5" rowspan="3"class="middle border-top border-right border-bottom border-left">Пробег, км.</td>
                        <td colspan="5" rowspan="3"class="  middle border-top border-right-bold border-bottom border-left">Всего к оплате, руб. коп.</td>
                    </tr>
                    <tr>
                        <td colspan="10">Диспетчер-нарядчик</td>
                        <td colspan="4"></td>
                        <td colspan="8" class="border-bottom"></td>
                        <td colspan="1"></td>
                        <td colspan="12" class="border-bottom">{{ item.dispatcher }}</td>
                        <td colspan="1"></td>
                        <td colspan="8" class="left">листу №</td>
                        <td colspan="6" class="border-bottom"></td>

                    </tr>

                    <tr>
                        <td colspan="14"></td>
                        <td colspan="8" class="little">(подпись)</td>
                        <td colspan="1"></td>
                        <td colspan="12" class="little">(расшифровка подписи)</td>
                        <td colspan="1"></td>
                        <td colspan="4" class="left">Остаток:</td>
                        <td colspan="10" class="left">при въезде</td>
                        <td colspan="10" class="border-bottom-bold border-left-bold border-right-bold"></td>

                    </tr>

                    <tr>
                        <td colspan="35" class="border-bottom"></td>
                        <td colspan="5"></td>
                        <td colspan="10" class="left">при возвращении</td>
                        <td colspan="10" class="border-bottom-bold border-left-bold border-right-bold"></td>

                        <td colspan="6" rowspan="2" class="left middle border-top border-right border-bottom border-left-bold">Выполнено</td>
                        <td colspan="5" rowspan="2"class="middle border-top border-right border-bottom border-left"></td>
                        <td colspan="5" rowspan="2"class="middle border-top border-right border-bottom border-left"></td>
                        <td colspan="5" rowspan="2"class="middle border-top border-right-bold border-bottom border-left"></td>
                    </tr>
                    <tr>
                        <td colspan="22" class="left">Опоздания, ожидания, простой в пути, заезды в гараж</td>
                        <td colspan="13"></td>
                        <td colspan="1"></td>
                        <td colspan="4" class="left">Расход:</td>
                        <td colspan="10" class="left">по форме</td>
                        <td colspan="10" class="border-bottom-bold border-left-bold border-right-bold"></td>

                    </tr>
                    <tr>
                        <td colspan="8" class="left">и прочие отметки</td>
                        <td colspan="27" class="border-bottom"></td>
                        <td colspan="1"></td>
                        <td colspan="4"></td>
                        <td colspan="10" class="left">фактический</td>
                        <td colspan="10" class="border-bottom-bold border-left-bold border-right-bold"></td>

                        <td colspan="6" rowspan="2" class="left middle border-top border-right border-bottom border-left-bold">Тариф, руб. коп.</td>
                        <td colspan="5" rowspan="2" class="middle border-top border-right border-bottom border-left"></td>
                        <td colspan="5" rowspan="2" class="middle border-top border-right border-bottom border-left"></td>
                        <td colspan="5" rowspan="2" class="middle border-top border-right-bold border-bottom border-left"></td>
                    </tr>
                    <tr>
                        <td colspan="35" class="border-bottom"></td>
                        <td colspan="1"></td>
                        <td colspan="4">Экономия</td>
                        <td colspan="10"></td>
                        <td colspan="10" class="border-bottom-bold border-left-bold border-right-bold"></td>

                    </tr>
                    <tr>
                        <td colspan="35" class="border-bottom"></td>
                        <td colspan="1"></td>
                        <td colspan="5" class="left">Перерасход</td>
                        <td colspan="9"></td>
                        <td colspan="10" class="border-bottom-bold border-left-bold border-right-bold"></td>

                        <td colspan="6" rowspan="2" class="left middle border-top border-right border-bottom-bold border-left-bold">К оплате, руб. коп.</td>
                        <td colspan="5" rowspan="2" class="middle border-top border-right border-bottom-bold border-left"></td>
                        <td colspan="5" rowspan="2" class="middle border-top border-right border-bottom-bold border-left"></td>
                        <td colspan="5" rowspan="2" class="middle border-top border-right-bold border-bottom-bold border-left"></td>
                    </tr>
                    <tr>
                        <td colspan="35" class="border-bottom"></td>
                        <td colspan="1"></td>
                        <td colspan="24" class="left">Автомобиль принял.Показания спидометра</td>
                    </tr>
                    <tr>
                        <td colspan="35" class="border-bottom"></td>
                        <td colspan="1"></td>
                        <td colspan="24" class="left">при возвращении в гараж, км</td>

                        <td colspan="21"> </td>
                    </tr>

                    <tr></tr>

                    <tr>
                        <td colspan="1"></td>
                        <td colspan="12" class="bold left">Автомобиль сдал водитель</td>
                        <td colspan="1"></td>
                        <td colspan="8" class="border-bottom"></td>
                        <td colspan="1"></td>
                        <td colspan="10" class="border-bottom">{{ item.driver.shortName }}</td>
                        <td colspan="1"></td>
                        <td colspan="16"></td>
                        <td colspan="10" class="border-bold"></td>

                        <td colspan="6" class="left bold">Таксировщик</td>
                        <td colspan="15" class="border-bottom"></td>
                    </tr>
                    <tr>
                        <td colspan="14"></td>
                        <td colspan="8" class="little">(подпись)</td>
                        <td colspan="1"></td>
                        <td colspan="10" class="little">(расшифровка подписи)</td>
                        <td colspan="3"></td>
                        <td colspan="4" class="bold">Механик</td>
                        <td colspan="1"></td>
                        <td colspan="8" class="border-bottom"></td>
                        <td colspan="1"></td>
                        <td colspan="10" class="border-bottom">{{ item.mechanic }}</td>

                        <td colspan="6"></td>
                        <td colspan="15" class="little">(подпись)</td>
                    </tr>
                    <tr>
                        <td colspan="1"></td>
                        <td colspan="2">М.П.</td>
                        <td colspan="33"></td>
                        <td colspan="4"></td>
                        <td colspan="8" class="little">(подпись)</td>
                        <td colspan="2"></td>
                        <td colspan="10" class="little">(расшифровка подписи)</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br />
        <div class="waybill-cover">
            <table border="0" cellpadding="0" cellspacing="0">
                <tbody>
                    <tr>
                        <td colspan="24"></td>
                        <td colspan="60" class="right small">Обратная сторона формы №3</td>
                    </tr>
                    <tr>
                        <td colspan="84" class="min">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="27"></td>
                        <td colspan="3" class="border-left-double border-top-double border-right-double">Номер</td>
                        <td colspan="8" class="border-top-double border-right-double">Код заказчика</td>
                        <td colspan="20" class="border-bottom border-top-double border-right-double">Место</td>
                        <td colspan="12" class="border-bottom border-top-double border-right-double">Время</td>
                        <td colspan="6" class="border-top-double border-right-double">Пройдено,</td>
                        <td colspan="8" class="border-top-double border-right-double">Подпись лица,</td>
                    </tr>
                    <tr>
                        <td colspan="27"></td>
                        <td colspan="3" class="border-left-double border-right-double">по по-</td>
                        <td colspan="8" class="border-right-double"></td>
                        <td colspan="10" class="border-right border-left-double">Отправления</td>
                        <td colspan="10" class="border-right-double">Назначения</td>
                        <td colspan="6" class="border-right border-bottom">Выезда</td>
                        <td colspan="6" class="border-right-double border-bottom">Возвращения</td>
                        <td colspan="6" class="border-right-double">км</td>
                        <td colspan="8" class="border-right-double">пользовавшегося</td>
                    </tr>
                    <tr>
                        <td colspan="27"></td>
                        <td colspan="3" class="border-left-double border-right-double">рядку</td>
                        <td colspan="8" class="border-right-double"></td>
                        <td colspan="10" class="border-right border-left-double"></td>
                        <td colspan="10" class="border-right-double"></td>
                        <td colspan="3" class="border-right">ч.</td>
                        <td colspan="3" class="border-right">мин.</td>
                        <td colspan="3" class="border-right">ч.</td>
                        <td colspan="3" class="border-right-double">мин.</td>
                        <td colspan="6" class="border-right-double"></td>
                        <td colspan="8" class="border-right-double">автомобилем</td>
                    </tr>
                    <tr>
                        <td colspan="27"></td>
                        <td colspan="3" class="border-left-double border-right-double border-bottom-double"></td>
                        <td colspan="8" class="border-right-double border-bottom-double"></td>
                        <td colspan="10" class="border-right border-bottom-double border-left-double"></td>
                        <td colspan="10" class="border-right-double border-bottom-double"></td>
                        <td colspan="3" class="border-right border-bottom-double"></td>
                        <td colspan="3" class="border-right border-bottom-double"></td>
                        <td colspan="3" class="border-right border-bottom-double"></td>
                        <td colspan="3" class="border-right-double border-bottom-double"></td>
                        <td colspan="6" class="border-right-double border-bottom-double"></td>
                        <td colspan="8" class="border-right-double border-bottom-double"></td>
                    </tr>
                    <tr>
                        <td colspan="27"></td>
                        <td colspan="3" class="border-left-double border-right-double border-bottom">&nbsp;</td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                        <td colspan="10" class="border-right border-bottom border-left-double"></td>
                        <td colspan="10" class="border-right-double border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right-double border-bottom"></td>
                        <td colspan="6" class="border-right-double border-bottom"></td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                    </tr>
                    <tr>
                        <td colspan="27"></td>
                        <td colspan="3" class="border-left-double border-right-double border-bottom">&nbsp;</td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                        <td colspan="10" class="border-right border-bottom border-left-double"></td>
                        <td colspan="10" class="border-right-double border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right-double border-bottom"></td>
                        <td colspan="6" class="border-right-double border-bottom"></td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                    </tr>
                    <tr>
                        <td colspan="27"></td>
                        <td colspan="3" class="border-left-double border-right-double border-bottom">&nbsp;</td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                        <td colspan="10" class="border-right border-bottom border-left-double"></td>
                        <td colspan="10" class="border-right-double border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right-double border-bottom"></td>
                        <td colspan="6" class="border-right-double border-bottom"></td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                    </tr>
                    <tr>
                        <td colspan="27"></td>
                        <td colspan="3" class="border-left-double border-right-double border-bottom">&nbsp;</td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                        <td colspan="10" class="border-right border-bottom border-left-double"></td>
                        <td colspan="10" class="border-right-double border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right-double border-bottom"></td>
                        <td colspan="6" class="border-right-double border-bottom"></td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                    </tr>
                    <tr>
                        <td colspan="27"></td>
                        <td colspan="3" class="border-left-double border-right-double border-bottom">&nbsp;</td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                        <td colspan="10" class="border-right border-bottom border-left-double"></td>
                        <td colspan="10" class="border-right-double border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right-double border-bottom"></td>
                        <td colspan="6" class="border-right-double border-bottom"></td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                    </tr>
                    <tr>
                        <td colspan="27"></td>
                        <td colspan="3" class="border-left-double border-right-double border-bottom">&nbsp;</td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                        <td colspan="10" class="border-right border-bottom border-left-double"></td>
                        <td colspan="10" class="border-right-double border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right-double border-bottom"></td>
                        <td colspan="6" class="border-right-double border-bottom"></td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                    </tr>
                    <tr>
                        <td colspan="27"></td>
                        <td colspan="3" class="border-left-double border-right-double border-bottom">&nbsp;</td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                        <td colspan="10" class="border-right border-bottom border-left-double"></td>
                        <td colspan="10" class="border-right-double border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right-double border-bottom"></td>
                        <td colspan="6" class="border-right-double border-bottom"></td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                    </tr>
                    <tr>
                        <td colspan="27"></td>
                        <td colspan="3" class="border-left-double border-right-double border-bottom">&nbsp;</td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                        <td colspan="10" class="border-right border-bottom border-left-double"></td>
                        <td colspan="10" class="border-right-double border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right-double border-bottom"></td>
                        <td colspan="6" class="border-right-double border-bottom"></td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                    </tr>
                    <tr>
                        <td colspan="27"></td>
                        <td colspan="3" class="border-left-double border-right-double border-bottom">&nbsp;</td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                        <td colspan="10" class="border-right border-bottom border-left-double"></td>
                        <td colspan="10" class="border-right-double border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right-double border-bottom"></td>
                        <td colspan="6" class="border-right-double border-bottom"></td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                    </tr>
                    <tr>
                        <td colspan="27"></td>
                        <td colspan="3" class="border-left-double border-right-double border-bottom">&nbsp;</td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                        <td colspan="10" class="border-right border-bottom border-left-double"></td>
                        <td colspan="10" class="border-right-double border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right-double border-bottom"></td>
                        <td colspan="6" class="border-right-double border-bottom"></td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                    </tr>
                    <tr>
                        <td colspan="27"></td>
                        <td colspan="3" class="border-left-double border-right-double border-bottom">&nbsp;</td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                        <td colspan="10" class="border-right border-bottom border-left-double"></td>
                        <td colspan="10" class="border-right-double border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right-double border-bottom"></td>
                        <td colspan="6" class="border-right-double border-bottom"></td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                    </tr>
                    <tr>
                        <td colspan="27"></td>
                        <td colspan="3" class="border-left-double border-right-double border-bottom">&nbsp;</td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                        <td colspan="10" class="border-right border-bottom border-left-double"></td>
                        <td colspan="10" class="border-right-double border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right-double border-bottom"></td>
                        <td colspan="6" class="border-right-double border-bottom"></td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                    </tr>
                    <tr>
                        <td colspan="27"></td>
                        <td colspan="3" class="border-left-double border-right-double border-bottom">&nbsp;</td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                        <td colspan="10" class="border-right border-bottom border-left-double"></td>
                        <td colspan="10" class="border-right-double border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right-double border-bottom"></td>
                        <td colspan="6" class="border-right-double border-bottom"></td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                    </tr>
                    <tr>
                        <td colspan="27"></td>
                        <td colspan="3" class="border-left-double border-right-double border-bottom">&nbsp;</td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                        <td colspan="10" class="border-right border-bottom border-left-double"></td>
                        <td colspan="10" class="border-right-double border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right-double border-bottom"></td>
                        <td colspan="6" class="border-right-double border-bottom"></td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                    </tr>
                    <tr>
                        <td colspan="27"></td>
                        <td colspan="3" class="border-left-double border-right-double border-bottom">&nbsp;</td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                        <td colspan="10" class="border-right border-bottom border-left-double"></td>
                        <td colspan="10" class="border-right-double border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right-double border-bottom"></td>
                        <td colspan="6" class="border-right-double border-bottom"></td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                    </tr>
                    <tr>
                        <td colspan="27"></td>
                        <td colspan="3" class="border-left-double border-right-double border-bottom">&nbsp;</td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                        <td colspan="10" class="border-right border-bottom border-left-double"></td>
                        <td colspan="10" class="border-right-double border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right-double border-bottom"></td>
                        <td colspan="6" class="border-right-double border-bottom"></td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                    </tr>
                    <tr>
                        <td colspan="27"></td>
                        <td colspan="3" class="border-left-double border-right-double border-bottom">&nbsp;</td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                        <td colspan="10" class="border-right border-bottom border-left-double"></td>
                        <td colspan="10" class="border-right-double border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right-double border-bottom"></td>
                        <td colspan="6" class="border-right-double border-bottom"></td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                    </tr>
                    <tr>
                        <td colspan="27"></td>
                        <td colspan="3" class="border-left-double border-right-double border-bottom">&nbsp;</td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                        <td colspan="10" class="border-right border-bottom border-left-double"></td>
                        <td colspan="10" class="border-right-double border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right-double border-bottom"></td>
                        <td colspan="6" class="border-right-double border-bottom"></td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                    </tr>
                    <tr>
                        <td colspan="27"></td>
                        <td colspan="3" class="border-left-double border-right-double border-bottom">&nbsp;</td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                        <td colspan="10" class="border-right border-bottom border-left-double"></td>
                        <td colspan="10" class="border-right-double border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right-double border-bottom"></td>
                        <td colspan="6" class="border-right-double border-bottom"></td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                    </tr>
                    <tr>
                        <td colspan="27"></td>
                        <td colspan="3" class="border-left-double border-right-double border-bottom">&nbsp;</td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                        <td colspan="10" class="border-right border-bottom border-left-double"></td>
                        <td colspan="10" class="border-right-double border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right-double border-bottom"></td>
                        <td colspan="6" class="border-right-double border-bottom"></td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                    </tr>
                    <tr>
                        <td colspan="27"></td>
                        <td colspan="3" class="border-left-double border-right-double border-bottom">&nbsp;</td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                        <td colspan="10" class="border-right border-bottom border-left-double"></td>
                        <td colspan="10" class="border-right-double border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right-double border-bottom"></td>
                        <td colspan="6" class="border-right-double border-bottom"></td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                    </tr>
                    <tr>
                        <td colspan="27"></td>
                        <td colspan="3" class="border-left-double border-right-double border-bottom">&nbsp;</td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                        <td colspan="10" class="border-right border-bottom border-left-double"></td>
                        <td colspan="10" class="border-right-double border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right-double border-bottom"></td>
                        <td colspan="6" class="border-right-double border-bottom"></td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                    </tr>
                    <tr>
                        <td colspan="27"></td>
                        <td colspan="3" class="border-left-double border-right-double border-bottom">&nbsp;</td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                        <td colspan="10" class="border-right border-bottom border-left-double"></td>
                        <td colspan="10" class="border-right-double border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right-double border-bottom"></td>
                        <td colspan="6" class="border-right-double border-bottom"></td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                    </tr>
                    <tr>
                        <td colspan="27"></td>
                        <td colspan="3" class="border-left-double border-right-double border-bottom">&nbsp;</td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                        <td colspan="10" class="border-right border-bottom border-left-double"></td>
                        <td colspan="10" class="border-right-double border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right border-bottom"></td>
                        <td colspan="3" class="border-right-double border-bottom"></td>
                        <td colspan="6" class="border-right-double border-bottom"></td>
                        <td colspan="8" class="border-right-double border-bottom"></td>
                    </tr>
                    <tr>
                        <td colspan="27"></td>
                        <td colspan="3" class="border-left-double border-right-double border-bottom-double">&nbsp;</td>
                        <td colspan="8" class="border-right-double border-bottom-double"></td>
                        <td colspan="10" class="border-right border-bottom-double border-left-double"></td>
                        <td colspan="10" class="border-right-double border-bottom-double"></td>
                        <td colspan="3" class="border-right border-bottom-double"></td>
                        <td colspan="3" class="border-right border-bottom-double"></td>
                        <td colspan="3" class="border-right border-bottom-double"></td>
                        <td colspan="3" class="border-right-double border-bottom-double"></td>
                        <td colspan="6" class="border-right-double border-bottom-double"></td>
                        <td colspan="8" class="border-right-double border-bottom-double"></td>
                    </tr>
                    <tr>
                        <td colspan="84">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="27"> </td>
                        <td colspan="26" class="left bold">Результат работы автомобился за смену:</td>
                        <td colspan="9"></td>
                        <td colspan="22" class="left bold">Расчет заработной платы:</td>
                    </tr>
                    <tr>
                        <td colspan="84">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="27"></td>
                        <td colspan="8" class="left">Всего в наряде, ч.</td>
                        <td colspan="5"></td>
                        <td colspan="10" class="border-bold">&nbsp;</td>
                        <td colspan="12"></td>
                        <td colspan="12" class="left">за километраж, руб. коп.</td>
                        <td colspan="10" class="border-bold">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="84">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="27"></td>
                        <td colspan="8" class="left">пройдено, км</td>
                        <td colspan="5"></td>
                        <td colspan="10" class="border-bold"></td>
                        <td colspan="12"></td>
                        <td colspan="12" class="left">за часы, руб. коп.</td>
                        <td colspan="10" class="border-bold">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="62"></td>
                        <td colspan="22" class="border-bottom small">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="84">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="62"></td>
                        <td colspan="12" class="left">Итого, руб. коп.</td>
                        <td colspan="10" class="border-bold">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="84">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="27"></td>
                        <td colspan="8" class="left">Расчет произвел</td>
                        <td colspan="1"></td>
                        <td colspan="14" class="border-bottom"></td>
                        <td colspan="1"></td>
                        <td colspan="12" class="border-bottom"></td>
                        <td colspan="1"></td>
                        <td colspan="20" class="border-bottom"></td>
                    </tr>
                    <tr>
                        <td colspan="35"></td>
                        <td colspan="1"></td>
                        <td colspan="14" class="little">(Должность)</td>
                        <td colspan="1"></td>
                        <td colspan="12" class="little">(Подпись)</td>
                        <td colspan="1"></td>
                        <td colspan="20" class="little">(расшифровка подписи)</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        props: { item: Object, company: Object },
        data() {
            return {
                date: new Date(),
                months: [ 'января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря' ]
            }
        },
        computed: {
            day: function() { return this.date.getDate() },
            month: function() { return this.months[this.date.getMonth() - 1] },
            year: function() { return this.date.getFullYear() }
        }
    }
</script>
