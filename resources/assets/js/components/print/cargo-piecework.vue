<template>
    <div>
        <div class="waybill-front">
            <table border="0" cellpadding="0" cellspacing="0">
                <tbody>
                    <tr>
                        <td colspan="6" class="center small bottom"></td>
                        <td colspan="34"></td>
                        <td colspan="38" class="small right bottom">Типовая межотраслевая форма №4-c</td>
                    </tr>
                    <tr>
                        <td colspan="14"></td>
                        <td colspan="26" class="big bold right">ПУТЕВОЙ ЛИСТ</td>
                        <td colspan="38" class="small right">Утверждена Постановлением  Госкомстата России<br /> от 28.11.97 №78</td>
                    </tr>

                    <tr>
                        <td colspan="14"></td>

                        <td colspan="20" class="big bold right">грузового автомобиля</td>
                        <td colspan="1"></td>
                        <td colspan="6" class="border-bottom"></td>
                        <td colspan="1" class="bold big">№</td>
                        <td colspan="6" class="border-bottom"></td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td colspan="34"></td>
                        <td colspan="6" class="small">(Серия)</td>
                        <td colspan="31"></td>
                        <td colspan="7" class="border">Коды</td>

                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td colspan="46" class="big bold right">Действителен с 12.03.2015г. по 13.03.2015</td>
                        <td colspan="16"></td>
                        <td colspan="7"  class="right middle">Форма по ОКУД</td>
                        <td colspan="7"  class="middle border border-bold"></td>

                    </tr>
                    <tr>
                        <td colspan="6" class="left">Организация</td>
                        <td colspan="60" class="bold border-bottom">{{ company.name }}, {{ company.requisites.address }}, {{ company.requisites.phone }}</td>
                        <td colspan="5"class="right">по ОКПО</td>
                        <td colspan="7"class="border-bold"></td>
                    </tr>
                    <tr>
                        <td colspan="78" class="border-bottom">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="35"></td>
                        <td colspan="7" class="border">Код</td>
                        <td colspan="2"></td>
                        <td colspan="34" class="bold border">Работа водителя и автомобиля</td>
                    </tr>
                    <tr>
                        <td colspan="28"></td>
                        <td colspan="7" class="right">Режим работы</td>
                        <td colspan="7" class="border-bold"></td>
                        <td colspan="2"></td>
                        <td colspan="6" class="little border-left border-right"></td>
                        <td colspan="12" class="little border-left border-right">Время по графику</td>
                        <td colspan="3" class="little border-left border-right">нулевой</td>
                        <td colspan="5" class="little border-left border-right">показание</td>
                        <td colspan="8" class="little border-left border-right"></td>
                    </tr>
                    <tr>
                        <td colspan="28"></td>
                        <td colspan="7" class="right">Колонна</td>
                        <td colspan="7" class="border-bold"></td>
                        <td colspan="2"></td>
                        <td colspan="6"  class="little border-left border-right">операция</td>
                        <td colspan="3" class="little border-top border-left border-right"></td>
                        <td colspan="3" class="little border-top border-left border-right"></td>
                        <td colspan="3" class="little border-top border-left border-right"></td>
                        <td colspan="3" class="little border-top border-left border-right"></td>
                        <td colspan="3"  class="little border-left border-right">пробег,</td>
                        <td colspan="5"  class="little border-left border-right">спидометра,</td>
                        <td colspan="8"  class="little border-left border-right">Время фактическое,</td>
                    </tr>
                    <tr>
                        <td colspan="28"></td>
                        <td colspan="7" class="right">Бригада</td>
                        <td colspan="7" class="border-bold"></td>
                        <td colspan="2"></td>
                        <td colspan="6"class="little border-left  border-bottom border-right"></td>
                        <td colspan="3" class="little border-bottom border-left border-right">число</td>
                        <td colspan="3" class="little border-bottom border-left border-right">месяц</td>
                        <td colspan="3" class="little border-bottom border-left border-right">ч.</td>
                        <td colspan="3" class="little border-bottom border-left border-right">мин.</td>
                        <td colspan="3" class="little border-bottom border-left border-right">км</td>
                        <td colspan="5" class="little border-bottom border-left border-right">км</td>
                        <td colspan="8" class="little border-bottom border-left border-right">число, месяц,ч.мин.</td>
                    </tr>
                    <tr>
                        <td colspan="7" class="left">Марка автомобиля</td>
                        <td colspan="27" class="bold border-bottom">{{ item.auto.model }}</td>
                        <td colspan="1"></td>
                        <td colspan="7" class="border-bold"></td>
                        <td colspan="2"></td>
                        <td colspan="6"class="little border-left  border-bottom border-right">1</td>
                        <td colspan="3" class="little border-bottom border-left border-right">2</td>
                        <td colspan="3" class="little border-bottom border-left border-right">3</td>
                        <td colspan="3" class="little border-bottom border-left border-right">4</td>
                        <td colspan="3" class="little border-bottom border-left border-right">5</td>
                        <td colspan="3" class="little border-bottom border-left border-right">6</td>
                        <td colspan="5" class="little border-bottom border-left border-right">7</td>
                        <td colspan="8" class="little border-bottom border-left border-right">8</td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td colspan="12" class="left">Государственный номерной знак</td>
                        <td colspan="15" class="bold border-bottom">{{ item.auto.numberplate }}</td>
                        <td colspan="8">Гаражный номер</td>
                        <td colspan="7" class="border-bold"></td>
                        <td colspan="2"></td>
                        <td colspan="6"class="little middle border-left border-bottom border-right">выезд из гаража</td>
                        <td colspan="3" class="little border-bottom border-left-bold border-right border-top-bold"></td>
                        <td colspan="3" class="little border-bottom border-left border-right border-top-bold"></td>
                        <td colspan="3" class="little border-bottom border-left border-right border-top-bold"></td>
                        <td colspan="3" class="little border-bottom border-left border-right border-top-bold"></td>
                        <td colspan="3" class="little border-bottom border-left border-right border-top-bold"></td>
                        <td colspan="5" class="little border-bottom border-left border-right border-top-bold"></td>
                        <td colspan="8" class="little border-bottom border-left border-right-bold border-top-bold"></td>
                    </tr>
                    <tr>
                        <td colspan="4" class="left">Водитель</td>
                        <td colspan="23" class="bold border-bottom">{{ item.driver.fullName }}</td>
                        <td colspan="8">Табельный номер</td>
                        <td colspan="7" class="border-bold"></td>
                        <td colspan="2"></td>
                        <td colspan="6" class="little middle border-left border-bottom border-right">возвращение в гараж</td>
                        <td colspan="3" class="little border-bottom-bold border-left-bold border-right border-top"></td>
                        <td colspan="3" class="little border-bottom-bold border-left border-right border-top"></td>
                        <td colspan="3" class="little border-bottom-bold border-left border-right border-top"></td>
                        <td colspan="3" class="little border-bottom-bold border-left border-right border-top"></td>
                        <td colspan="3" class="little border-bottom-bold border-left border-right border-top"></td>
                        <td colspan="5" class="little border-bottom-bold border-left border-right border-top"></td>
                        <td colspan="8" class="little border-bottom-bold border-left border-right-bold border-top"></td>
                    </tr>
                    <tr>
                        <td colspan="8" class="left">Удостоверение №</td>
                        <td colspan="8" class="border-bottom">{{ item.driver.license }}</td>
                    </tr>
                    <tr>
                        <td colspan="11" class="middle left">Лицензионная карточка</td>
                        <td colspan="14" class="border-bottom">стандартная/ограниченная</td>
                        <td colspan="19"></td>
                        <td colspan="27" class="border">Движение горючего</td>
                        <td colspan="7" rowspan="2" class="little middle border-top border-bottom border-right">Время работы,ч.мин.</td>
                    </tr>
                    <tr>
                        <td colspan="11"></td>
                        <td colspan="14" class="small">(ненужное зачеркнуть)</td>
                        <td colspan="19"></td>

                        <td colspan="6" rowspan="1" class="little middle border-left border-right">прочее</td>
                        <td colspan="5" rowspan="2" class="little middle border-right border-bottom">выдано</td>
                        <td colspan="8" rowspan="1" class="little middle border-right">остаток при</td>
                        <td colspan="2" rowspan="2" class="little middle border-right border-bottom">сдано, л</td>
                        <td colspan="6" rowspan="2" class="little middle border-right border-bottom">коэффициент изменения нормы</td>
                    </tr>
                    <tr>
                        <td colspan="12" class="left">Регистрационный номер №</td>
                        <td colspan="8" class="border-bottom"></td>
                        <td colspan="4">Серия</td>
                        <td colspan="4" class="border-bottom"></td>
                        <td colspan="2">№</td>
                        <td colspan="4" class="border-bottom"></td>
                        <td colspan="10"></td>

                        <td colspan="3" class="little middle border">марка</td>
                        <td colspan="3" class="little middle border">код марки</td>
                        <td colspan="4" class="little middle border">выезд,л</td>
                        <td colspan="4" class="little middle border">возвращение, л</td>
                        <td colspan="4" class="little middle border-right border-bottom border-left">спецоборудо-<br>вания</td>
                        <td colspan="3" class="little middle border-right border-bottom border-left">двигателя</td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td colspan="4" class="left bottom">Прицеп 1</td>
                        <td colspan="3" class="border-bottom"></td>
                        <td colspan="12" class="little bottom">Государственный номерной знак</td>
                        <td colspan="8" class="little border-bottom">&nbsp;</td>
                        <td colspan="8" class="right little bottom">Гаражный номер</td>
                        <td colspan="7" class="border-bold"></td>

                        <td colspan="2"></td>

                        <td colspan="3" class="little middle border-left border-right border-bottom">9</td>
                        <td colspan="3" class="little middle border-left border-right border-bottom">10</td>
                        <td colspan="5" class="little middle border-left border-right border-bottom">11</td>
                        <td colspan="4" class="little middle border-left border-right border-bottom">12</td>
                        <td colspan="4" class="little middle border-left border-right border-bottom">13</td>
                        <td colspan="2" class="little middle border-left border-right border-bottom">14</td>
                        <td colspan="6" class="little middle border-left border-right border-bottom">15</td>
                        <td colspan="4" class="little middle border-left border-right border-bottom">16</td>
                        <td colspan="3" class="little middle border-left border-right border-bottom">17</td>
                    </tr>
                    <tr>
                        <td colspan="4" class="left bottom">Прицеп 2</td>
                        <td colspan="3" class="border-bottom"></td>
                        <td colspan="12" class="little bottom">Государственный номерной знак</td>
                        <td colspan="8" class="little border-bottom">&nbsp;</td>
                        <td colspan="8" class="right little bottom">Гаражный номер</td>
                        <td colspan="7"class="border-left-bold border-right-bold border-bottom-bold"></td>

                        <td colspan="2"></td>

                        <td colspan="3" class="little border-left-bold border-bottom"></td>
                        <td colspan="3" class="little border-left border-right border-bottom"></td>
                        <td colspan="5" class="little border-left border-right border-bottom"></td>
                        <td colspan="4" class="little border-left border-right border-bottom"></td>
                        <td colspan="4" class="little border-left border-right border-bottom"></td>
                        <td colspan="2" class="little border-left border-right border-bottom"></td>
                        <td colspan="6" class="little border-left border-right border-bottom"></td>
                        <td colspan="4" class="little border-left border-right border-bottom"></td>
                        <td colspan="3" class="little border-left border-right-bold border-bottom"></td>
                    </tr>
                    <tr>
                        <td colspan="4" class="left bottom">Прицеп 3</td>
                        <td colspan="3" class="border-bottom"></td>
                        <td colspan="12" class="little bottom">Государственный номерной знак</td>
                        <td colspan="8" class="little border-bottom">&nbsp;</td>
                        <td colspan="8" class="right little bottom">Гаражный номер</td>
                        <td colspan="7"class="border-left-bold border-right-bold border-bottom-bold"></td>

                        <td colspan="2"></td>

                        <td colspan="3" class="little middle border-bottom-bold border-left-bold border-bottom"></td>
                        <td colspan="3" class="little middle border-bottom-bold border-left border-right border-bottom"></td>
                        <td colspan="5" class="little middle border-bottom-bold border-right border-bottom"></td>
                        <td colspan="4" class="little middle border-bottom-bold border-left border-right border-bottom"></td>
                        <td colspan="4" class="little middle border-bottom-bold border-left border-right border-bottom"></td>
                        <td colspan="2" class="little middle border-bottom-bold border-right border-bottom"></td>
                        <td colspan="6" class="little middle border-bottom-bold border-right border-bottom"></td>
                        <td colspan="4" class="little middle border-bottom-bold border-right border-bottom border-left"></td>
                        <td colspan="3" class="little middle border-bottom-bold border-right-bold border-bottom border-left"></td>
                    </tr>
                    <tr>
                        <td colspan="4" class="left bottom">Прицеп 4</td>
                        <td colspan="3" class="border-bottom"></td>
                        <td colspan="12" class="little bottom">Государственный номерной знак</td>
                        <td colspan="8" class="little border-bottom">&nbsp;</td>
                        <td colspan="8" class="right little bottom">Гаражный номер</td>
                        <td colspan="7" class="border-left-bold border-right-bold border-bottom-bold"></td>

                        <td colspan="2"></td>

                        <td colspan="34" class="border">Подпись</td>
                    </tr>
                    <tr>
                        <td colspan="4" class="left bottom">Прицеп 5</td>
                        <td colspan="3" class="border-bottom"></td>
                        <td colspan="12" class="little bottom">Государственный номерной знак</td>
                        <td colspan="8" class="little border-bottom">&nbsp;</td>
                        <td colspan="8" class="right little bottom">Гаражный номер</td>
                        <td colspan="7" class="border-left-bold border-right-bold border-bottom-bold"></td>

                        <td colspan="2"></td>

                        <td colspan="7" class="border-right border-left border-bottom">заправщика</td>
                        <td colspan="6" class="border-right border-left border-bottom">механика</td>
                        <td colspan="5" class="border-right border-left border-bottom">механика</td>
                        <td colspan="7" class="border-right border-left border-bottom">заправщика</td>
                        <td colspan="9" class="border-right border-left border-bottom">диспетчера</td>
                    </tr>
                    <tr>
                        <td colspan="9" class="left">Сопровождающие лица:</td>
                        <td colspan="33" class="border-bottom"></td>
                        <td colspan="2"></td>
                        <td colspan="7" rowspan="2" class="border-right border-left border-bottom"></td>
                        <td colspan="6" rowspan="2" class="border-right border-left border-bottom"></td>
                        <td colspan="5" rowspan="2" class="border-right border-left border-bottom"></td>
                        <td colspan="7" rowspan="2" class="border-right border-left border-bottom"></td>
                        <td colspan="9" rowspan="2" class="border-right border-left border-bottom"></td>
                    </tr>
                    <tr>
                        <td colspan="42" class="border-bottom">&nbsp;</td>

                        <td colspan="2"></td>

                    </tr>
                    <tr>
                        <td colspan="78">ЗАДАНИЕ ВОДИТЕЛЮ</td>
                    </tr>
                    <tr>
                        <td colspan="10"class="little border-top border-left border-right">в чье распоряжение(наиме-</td>
                        <td colspan="9" class="little  border-top border-left border-right"></td>
                        <td colspan="30" class=" little border">адрес пункта</td>
                        <td colspan="17" class="little  border-top border-left border-right"></td>
                        <td colspan="4" class="little  border-top border-left border-right"></td>
                        <td colspan="4" class="little border-top border-left border-right"></td>
                        <td colspan="4" class="little border-top border-left border-right">перевезти</td>
                    </tr>
                    <tr>
                        <td colspan="10"class="little border-bottom border-left border-right">нование и адрес заказчика)</td>
                        <td colspan="9" class="little border-bottom border-left border-right">время прибытия,ч.мин.</td>
                        <td colspan="15" class=" little border">погрузки</td>
                        <td colspan="15" class=" little border">разгрузки</td>
                        <td colspan="17" class="little border-bottom border-top border-left border-right">Наименование груза</td>
                        <td colspan="4" class="little border-bottom  border-top border-left border-right">количество ездок</td>
                        <td colspan="4" class="little border-bottom border-top border-left border-right">расстояние, км</td>
                        <td colspan="4" class="little border-bottom border-top border-left border-right">тонн</td>
                    </tr>
                    <tr>
                        <td colspan="10"class="little border">18</td>
                        <td colspan="9" class="little border">19</td>
                        <td colspan="15" class="little border">20</td>
                        <td colspan="15" class="little border">21</td>
                        <td colspan="17" class="little border">22</td>
                        <td colspan="4" class="little border">23</td>
                        <td colspan="4" class="little border">24</td>
                        <td colspan="4" class="little border">25</td>
                    </tr>
                    <tr>
                        <td colspan="10" rowspan="4" class="little border bold">{{ item.customer.name }}, {{ item.customer.address }}</td>
                        <td colspan="9" class="little border bold">&nbsp;</td>
                        <td colspan="15" class="little border bold"></td>
                        <td colspan="15" class="little border  bold"></td>
                        <td colspan="17" class="little border  bold"></td>
                        <td colspan="4" class="little border bold"></td>
                        <td colspan="4" class="little border bold"></td>
                        <td colspan="4" class="little border bold"></td>
                    </tr>
                    <tr>
                        <td colspan="9" class="little border bold">&nbsp;</td>
                        <td colspan="15" class="little border bold"></td>
                        <td colspan="15" class="little border  bold"></td>
                        <td colspan="17" class="little border  bold"></td>
                        <td colspan="4" class="little border bold"></td>
                        <td colspan="4" class="little border bold"></td>
                        <td colspan="4" class="little border bold"></td>
                    </tr>
                    <tr>
                        <td colspan="9" class="little border bold">&nbsp;</td>
                        <td colspan="15" class="little border bold">&nbsp;</td>
                        <td colspan="15" class="little border bold">&nbsp;</td>
                        <td colspan="17" class="little border bold">&nbsp;</td>
                        <td colspan="4" class="little border bold">&nbsp;</td>
                        <td colspan="4" class="little border bold">&nbsp;</td>
                        <td colspan="4" class="little border bold">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="9" class="little border bold">&nbsp;</td>
                        <td colspan="15" class="little border bold">&nbsp;</td>
                        <td colspan="15" class="little border bold">&nbsp;</td>
                        <td colspan="17" class="little border bold">&nbsp;</td>
                        <td colspan="4" class="little border bold">&nbsp;</td>
                        <td colspan="4" class="little border bold">&nbsp;</td>
                        <td colspan="4" class="little border bold">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="18" class="left" >Водительское удостоверение</td>
                        <td colspan="31" ></td>
                        <td colspan="15" class="right">Итого:</td>
                        <td colspan="2"></td>
                        <td colspan="4" class="border-bottom-bold border-left-bold border-top-bold border-right"></td>
                        <td colspan="4"  class="border-bottom-bold border-left  border-top-bold border-right"></td>
                        <td colspan="4"  class="border-bottom-bold border-left border-top-bold border-right-bold"></td>
                    </tr>
                    <tr>
                        <td colspan="18" class="left">проверил, задание выдал,</td>
                        <td colspan="1"></td>
                        <td colspan="16" class="little right">Автомобиль технически исправен</td>
                        <td colspan="18" class="border-bottom"></td>

                    </tr>
                    <tr>
                        <td colspan="8" class="left">выдать горючего</td>
                        <td colspan="8" class="border-bottom"></td>
                        <td colspan="4">литров</td>
                        <td colspan="4"></td>
                        <td colspan="7" class="center">Выезд разрешен.
                        </td>
                        <td colspan="1"></td>
                        <td colspan="4">Механик</td>
                        <td colspan="3" class="border-bottom"></td>
                        <td colspan="1"></td>
                        <td colspan="14" class="bold border-bottom right">{{ item.mechanic }}</td>
                    </tr>
                    <tr>
                        <td colspan="36"></td>
                        <td colspan="3" class="small">(подпись)</td>
                    </td>
                    <td colspan="1"></td>
                    <td colspan="14" class="small">(расшифровка подписи)</td>
                    <td colspan="1"></td>
                    <td colspan="12" class="little">Отметки организации-владельца</td>
                </tr>

                <tr>
                    <td colspan="5">Диспетчер</td>
                    <td colspan="3" class="border-bottom"></td>
                    <td colspan="1"></td>
                    <td colspan="7" class="bold border-bottom">{{ item.dispatcher }}</td>
                    <td colspan="8"></td>
                    <td colspan="7" class="center">Выезд разрешен.
                    </td>
                    <td colspan="1"></td>
                    <td colspan="4">Водитель</td>
                    <td colspan="3" class="border-bottom"></td>
                    <td colspan="1"></td>
                    <td colspan="14" class="border-bottom bold right">{{ item.driver.shortName }}</td>
                    <td colspan="4"></td>
                    <td colspan="6" class="little">автотраспорта</td>
                    <td colspan="14" class="border-bottom"></td>
                </tr>
                <tr>
                    <td colspan="5"></td>
                    <td colspan="3" class="small">(подпись)</td>
                    <td colspan="1"></td>
                    <td colspan="7" class="small">(расшифровка подписи)</td>
                    <td colspan="20"></td>
                    <td colspan="3" class="small">(подпись)</td>
                    <td colspan="1"></td>
                    <td colspan="14" class="small">(расшифровка подписи)</td>
                </tr>
                <tr>
                    <td colspan="10">Водитель по состоянию</td>
                    <td colspan="46"></td>
                    <td colspan="22" class="border-bottom"></td>
                </tr>
                <tr>
                    <td colspan="10">здоровья к управлению</td>
                    <td colspan="46"></td>
                    <td colspan="22" class="border-bottom"></td>
                </tr>
                <tr>
                    <td colspan="5">допущен</td>
                    <td colspan="6" class="border-bottom">Мед. работник</td>
                    <td colspan="1"></td>
                    <td colspan="3" class="border-bottom"></td>
                    <td colspan="1"></td>
                    <td colspan="7" class="border-bottom"></td>
                    <td colspan="1"></td>
                    <td colspan="12" class="little bottolm">При возвращении автомобиль</td>
                    <td colspan="1"></td>
                    <td colspan="4" class="little top border-bottom">исправен</td>
                    <td colspan="15"></td>
                    <td colspan="22" class="border-bottom"></td>
                </tr>
                <tr>
                    <td colspan="5"></td>
                    <td colspan="6" class="small">(должность)</td>
                    <td colspan="1"></td>
                    <td colspan="3" class="small">(подпись)</td>
                    <td colspan="22"></td>
                    <td colspan="4" class="little top">неисправен</td>
                </tr>
                <tr>
                    <td colspan="24"></td>
                    <td colspan="4" class="little bottolm">Сдал</td>
                    <td colspan="1"></td>
                    <td colspan="4" class="">водитель</td>
                    <td colspan="1"></td>
                    <td colspan="3" class="border-bottom"></td>
                    <td colspan="1"></td>
                    <td colspan="14" class="bold border-bottom right">{{ item.driver.shortName }}</td>
                    <td colspan="4"></td>
                    <td colspan="22" class="border-bottom"></td>
                </tr>
                <tr>
                    <td colspan="6">Место для</td>
                    <td colspan="28"></td>
                    <td colspan="3" class="small">(подпись)</td>
                    <td colspan="1"></td>
                    <td colspan="14" class="small">(расшифровка подписи)</td>
                </tr>
                <tr>
                    <td colspan="6">штампа</td>
                    <td colspan="18"></td>
                    <td colspan="4" class="little bottolm">Сдал</td>
                    <td colspan="1"></td>
                    <td colspan="4" class="">механик</td>
                    <td colspan="1"></td>
                    <td colspan="3" class="border-bottom"></td>
                    <td colspan="1"></td>
                    <td colspan="14" class="bold border-bottom right">{{ item.mechanic }}</td>
                    <td colspan="4"></td>
                    <td colspan="22" class="border-bottom"></td>
                </tr>
                <tr>
                    <td colspan="6"></td>
                    <td colspan="28"></td>
                    <td colspan="3" class="small">(подпись)</td>
                    <td colspan="1"></td>
                    <td colspan="14" class="small">(расшифровка подписи)</td>
                </tr>
            </tbody>
        </table>
    </div>
    <br />
    <div class="waybill-cover">
        <table border="0" cellpadding="0" cellspacing="0">
            <tbody>
                <tr>
                    <td colspan="40"></td>
                    <td colspan="38" class="right">Оборотная сторона формы №4-c</td>
                </tr>
                <tr>
                    <td colspan="62" class="middle big border">ПОСЛЕДОВАТЕЛЬНОСТЬ ВЫПОЛНЕНИЯ ЗАДАНИЯ</td>
                    <td colspan="8" class="border-top border-right"></td>
                    <td colspan="8" class="border-top border-right"></td>
                </tr>
                <tr>
                    <td colspan="11" class="border-left border-top border-right"></td>
                    <td colspan="4" class="border-top border-right"></td>
                    <td colspan="12" class="border-top border-right">Прибытие</td>
                    <td colspan="8" class="border-top border-right">Убытие</td>
                    <td colspan="12" class="border-top border-right">Номер прицепа</td>
                    <td colspan="15" class="border-top border-right">номера приложенных</td>
                    <td colspan="8" class="border-right">Наименование</td>
                    <td colspan="8" class="border-right">Подпись и печать</td>
                </tr>
                <tr>
                    <td colspan="11" class="border-left border-top border-right">пункт погрузки,</td>
                    <td colspan="4" class="border-top border-right">Номер</td>
                    <td colspan="4" class="border-top border-right"></td>
                    <td colspan="4" class="border-top border-right"></td>
                    <td colspan="4" class="border-top border-right"></td>
                    <td colspan="4" class="border-top border-right"></td>
                    <td colspan="4" class="border-top border-right"></td>
                    <td colspan="4" class="border-top border-right"></td>
                    <td colspan="4" class="border-top border-right"></td>
                    <td colspan="4" class="border-top border-right">порожний</td>
                    <td colspan="15" class="border-right">товарно-транспортных документов</td>
                    <td colspan="8" class="border-right">грузоотправителя</td>
                    <td colspan="8" class="border-right">грузоотправителя</td>
                </tr>
                <tr>
                    <td colspan="11" class="border-left border-right">разгрузки и перецепки</td>
                    <td colspan="4" class="border-right">ездки</td>
                    <td colspan="4" class="border-right">число</td>
                    <td colspan="4" class="border-right">ч.</td>
                    <td colspan="4" class="border-right">м.</td>
                    <td colspan="4" class="border-right">ч.</td>
                    <td colspan="4" class="border-right">м.</td>
                    <td colspan="4" class="border-right">Прибыв-</td>
                    <td colspan="4" class="border-right">Убывших</td>
                    <td colspan="4" class="border-right">пробег</td>
                    <td colspan="15" class="border-right">(ТТД)</td>
                    <td colspan="8" class="border-right">(грузополучателя)</td>
                    <td colspan="8" class="border-right">(грузополучателя)</td>
                </tr>
                <tr>
                    <td colspan="11" class="border-left border-right">прицепов</td>
                    <td colspan="4" class="border-right"></td>
                    <td colspan="4" class="border-right"></td>
                    <td colspan="4" class="border-right"></td>
                    <td colspan="4" class="border-right"></td>
                    <td colspan="4" class="border-right"></td>
                    <td colspan="4" class="border-right"></td>
                    <td colspan="4" class="border-right"></td>
                    <td colspan="4" class="border-right"></td>
                    <td colspan="4" class="border-right">прицепа</td>
                    <td colspan="15" class="border-right"></td>
                    <td colspan="8" class="border-right"></td>
                    <td colspan="8" class="border-right"></td>
                </tr>
                <tr>
                    <td colspan="11" class="border-bottom border-left border-right">&nbsp;</td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="15" class="border-bottom border-right"></td>
                    <td colspan="8" class="border-bottom border-right"></td>
                    <td colspan="8" class="border-bottom border-right"></td>
                </tr>
                <tr>
                    <td colspan="11" class="border-bottom border-left border-right">26</td>
                    <td colspan="4" class="border-bottom border-right">27</td>
                    <td colspan="4" class="border-bottom border-right">28</td>
                    <td colspan="4" class="border-bottom border-right">29</td>
                    <td colspan="4" class="border-bottom border-right">30</td>
                    <td colspan="4" class="border-bottom border-right">31</td>
                    <td colspan="4" class="border-bottom border-right">32</td>
                    <td colspan="4" class="border-bottom border-right">33</td>
                    <td colspan="4" class="border-bottom border-right">34</td>
                    <td colspan="4" class="border-bottom border-right">35</td>
                    <td colspan="5" class="border-bottom border-right">36</td>
                    <td colspan="5" class="border-bottom border-right">37</td>
                    <td colspan="5" class="border-bottom border-right">38</td>
                    <td colspan="8" class="border-bottom border-right">39</td>
                    <td colspan="8" class="border-bottom border-right">40</td>
                </tr>
                <tr>
                    <td colspan="11" class="border-bottom border-left border-right"></td>
                    <td colspan="4" class="border-bottom border-left-bold border-top-bold border-right">1</td>
                    <td colspan="4" class="border-bottom border-top-bold  border-right"></td>
                    <td colspan="4" class="border-bottom border-top-bold  border-right"></td>
                    <td colspan="4" class="border-bottom border-top-bold  border-right"></td>
                    <td colspan="4" class="border-bottom border-top-bold  border-right"></td>
                    <td colspan="4" class="border-bottom border-top-bold  border-right"></td>
                    <td colspan="4" class="border-bottom border-top-bold  border-right"></td>
                    <td colspan="4" class="border-bottom border-top-bold  border-right"></td>
                    <td colspan="4" class="border-bottom border-top-bold border-right-bold"></td>
                    <td colspan="5" class="border-bottom border-right"></td>
                    <td colspan="5" class="border-bottom border-right"></td>
                    <td colspan="5" class="border-bottom border-right"></td>
                    <td colspan="8" class="border-bottom border-right"></td>
                    <td colspan="8" class="border-bottom border-right"></td>
                </tr>
                <tr>
                    <td colspan="11" class="border-bottom border-left border-right"></td>
                    <td colspan="4" class="border-bottom border-left-bold border-right">2</td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right-bold"></td>
                    <td colspan="5" class="border-bottom border-right"></td>
                    <td colspan="5" class="border-bottom border-right"></td>
                    <td colspan="5" class="border-bottom border-right"></td>
                    <td colspan="8" class="border-bottom border-right"></td>
                    <td colspan="8" class="border-bottom border-right"></td>
                </tr>
                <tr>
                    <td colspan="11" class="border-bottom border-left border-right"></td>
                    <td colspan="4" class="border-bottom  border-left-bold border-right">3</td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right-bold"></td>
                    <td colspan="5" class="border-bottom border-right"></td>
                    <td colspan="5" class="border-bottom border-right"></td>
                    <td colspan="5" class="border-bottom border-right"></td>
                    <td colspan="8" class="border-bottom border-right"></td>
                    <td colspan="8" class="border-bottom border-right"></td>
                </tr>
                <tr>
                    <td colspan="11" class="border-bottom border-left border-right"></td>
                    <td colspan="4" class="border-bottom  border-left-bold  border-right">4</td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right-bold"></td>
                    <td colspan="5" class="border-bottom border-right"></td>
                    <td colspan="5" class="border-bottom border-right"></td>
                    <td colspan="5" class="border-bottom border-right"></td>
                    <td colspan="8" class="border-bottom border-right"></td>
                    <td colspan="8" class="border-bottom border-right"></td>
                </tr>
                <tr>
                    <td colspan="11" class="border-bottom border-left border-right"></td>
                    <td colspan="4" class="border-bottom   border-left-bold border-right">5</td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right-bold"></td>
                    <td colspan="5" class="border-bottom border-right"></td>
                    <td colspan="5" class="border-bottom border-right"></td>
                    <td colspan="5" class="border-bottom border-right"></td>
                    <td colspan="8" class="border-bottom border-right"></td>
                    <td colspan="8" class="border-bottom border-right"></td>
                </tr>
                <tr>
                    <td colspan="11" class="border-bottom border-left border-right"></td>
                    <td colspan="4" class="border-bottom border-left-bold  border-right">6</td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right-bold"></td>
                    <td colspan="5" class="border-bottom border-right"></td>
                    <td colspan="5" class="border-bottom border-right"></td>
                    <td colspan="5" class="border-bottom border-right"></td>
                    <td colspan="8" class="border-bottom border-right"></td>
                    <td colspan="8" class="border-bottom border-right"></td>
                </tr>
                <tr>
                    <td colspan="11" class="border-bottom border-left border-right"></td>
                    <td colspan="4" class="border-bottom border-left-bold  border-right">7</td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right"></td>
                    <td colspan="4" class="border-bottom border-right-bold"></td>
                    <td colspan="5" class="border-bottom border-right"></td>
                    <td colspan="5" class="border-bottom border-right"></td>
                    <td colspan="5" class="border-bottom border-right"></td>
                    <td colspan="8" class="border-bottom border-right"></td>
                    <td colspan="8" class="border-bottom border-right"></td>
                </tr>
                <tr>
                    <td colspan="11" class="border-bottom border-left border-right"></td>
                    <td colspan="4" class="border-bottom border-left-bold border-right">8</td>
                    <td colspan="4" class="border-bottom-bold border-right"></td>
                    <td colspan="4" class="border-bottom-bold border-right"></td>
                    <td colspan="4" class="border-bottom-bold border-right"></td>
                    <td colspan="4" class="border-bottom-bold border-right"></td>
                    <td colspan="4" class="border-bottom-bold border-right"></td>
                    <td colspan="4" class="border-bottom-bold border-right"></td>
                    <td colspan="4" class="border-bottom-bold border-right"></td>
                    <td colspan="4" class="border-bottom-bold border-right-bold"></td>
                    <td colspan="5" class="border-bottom border-right"></td>
                    <td colspan="5" class="border-bottom border-right"></td>
                    <td colspan="5" class="border-bottom border-right"></td>
                    <td colspan="8" class="border-bottom border-right"></td>
                    <td colspan="8" class="border-bottom border-right"></td>
                </tr>
                <tr>
                    <td colspan="11" class="right big">Всего</td>
                    <td colspan="4" class="border-left-bold border-bottom-bold border-right-bold border-top"></td>
                    <td colspan="4" class=""></td>
                    <td colspan="4" class=""></td>
                    <td colspan="4" class=""></td>
                    <td colspan="4" class=""></td>
                    <td colspan="4" class=""></td>
                    <td colspan="4" class=""></td>
                    <td colspan="4" class=""></td>
                    <td colspan="4" class=""></td>
                    <td colspan="10" class="right">ТТД в количестве</td>
                    <td colspan="5" class="border-bold"></td>
                    <td colspan="12" class="border-bottom"></td>
                    <td colspan="4" class="left bottom ">шт.</td>
                </tr>
                <tr>
                    <td colspan="15"></td>
                    <td colspan="8"  class=" big bold right">Таксировка</td>
                    <td colspan="4" class=""></td>
                    <td colspan="4" class=""></td>
                    <td colspan="4" class=""></td>
                    <td colspan="4" class=""></td>
                    <td colspan="4" class=""></td>
                    <td colspan="4" class=""></td>
                    <td colspan="10" class=""></td>
                    <td colspan="5" class=""></td>
                    <td colspan="12" class="small">(прописью)</td>
                </tr>
                <tr>
                    <td colspan="15"></td>
                    <td colspan="8"></td>
                    <td colspan="4" class=""></td>
                    <td colspan="8" class="right">Сдал водитель</td>
                    <td colspan="4" class="border-bottom"></td>
                    <td colspan="1"></td>
                    <td colspan="8" class="border-bottom bold right">{{ item.driver.shortName }}</td>
                    <td colspan="1"></td>
                    <td colspan="8" class="">Приня диспетчер</td>
                    <td colspan="4" class="border-bottom"></td>
                    <td colspan="1"></td>
                    <td colspan="8" class="border-bottom bold right">{{ item.dispatcher }}</td>
                </tr>
                <tr>
                    <td colspan="15"></td>
                    <td colspan="8"></td>
                    <td colspan="4"></td>
                    <td colspan="8"></td>
                    <td colspan="4" class="small">(подпись)</td>
                    <td colspan="1"></td>
                    <td colspan="8" class="small">(расшифровка подписи)</td>
                    <td colspan="1"></td>
                    <td colspan="8"></td>
                    <td colspan="4" class="small">(подпись)</td>
                    <td colspan="1"></td>
                    <td colspan="8" class="small">(расшифровка подписи)</td>
                </tr>
                <tr>
                    <td colspan="8">Особые отметки</td>
                    <td colspan="20" class="border-bottom"></td>
                    <td colspan="1"></td>
                    <td colspan="40" class="border">Простои на линии</td>
                    <td colspan="9" class="border-right border-top">Подпись</td>
                </tr>
                <tr>
                    <td colspan="28" class="border-bottom"></td>
                    <td colspan="1"></td>
                    <td colspan="20" class="border">Причина</td>
                    <td colspan="20" class="border">дата (число, месяц), время, ч. мин.</td>
                    <td colspan="9" class="border-right">ответственного</td>
                </tr>
                <tr>
                    <td colspan="28" class="border-bottom"></td>
                    <td colspan="1"></td>
                    <td colspan="16" class="border">наименование</td>
                    <td colspan="4" class="border">код</td>
                    <td colspan="10" class="border">начало</td>
                    <td colspan="10" class="border">окончание</td>
                    <td colspan="9" class="border-right border-bottom">лица</td>
                </tr>
                <tr>
                    <td colspan="28" class="border-bottom"></td>
                    <td colspan="1"></td>
                    <td colspan="16" class="border">41</td>
                    <td colspan="4" class="border">42</td>
                    <td colspan="10" class="border">43</td>
                    <td colspan="10" class="border">44</td>
                    <td colspan="9" class="border-right border-bottom">45</td>
                </tr>
                <tr>
                    <td colspan="28" class="border-bottom"></td>
                    <td colspan="1">&nbsp;</td>
                    <td colspan="16" class="border"></td>
                    <td colspan="4" class="border-left-bold border-top-bold border-bottom"></td>
                    <td colspan="10" class="border border-top-bold"></td>
                    <td colspan="10" class="border border-top-bold"></td>
                    <td colspan="9" class="border-top-bold border-right-bold border-bottom"></td>
                </tr>
                <tr>
                    <td colspan="28" class="border-bottom"></td>
                    <td colspan="1">&nbsp;</td>
                    <td colspan="16" class="border"></td>
                    <td colspan="4" class="border-left-bold border-top border-bottom"></td>
                    <td colspan="10" class="border"></td>
                    <td colspan="10" class="border"></td>
                    <td colspan="9" class="border-top border-right-bold border-bottom"></td>
                </tr>
                <tr>
                    <td colspan="28" class="border-bottom"></td>
                    <td colspan="1">&nbsp;</td>
                    <td colspan="16" class="border"></td>
                    <td colspan="4" class="border-left-bold border-top border-bottom-bold"></td>
                    <td colspan="10" class="border border-bottom-bold"></td>
                    <td colspan="10" class="border border-bottom-bold"></td>
                    <td colspan="9" class="border-top border-right-bold border-bottom-bold"></td>
                </tr>
                <tr>
                    <td colspan="78">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="78" class="border big">РЕЗУЛЬТАТЫ РАБОТЫ АВТОМОБИЛЯ И ПРИЦЕПОВ</td>
                </tr>
                <tr>
                    <td colspan="8" class="border little">расход горючего, л</td>
                    <td colspan="29" class="border little">время в наряде, ч. мин.</td>
                    <td colspan="6" class="border little">количество</td>
                    <td colspan="12" class="border little">пробег, км</td>
                    <td colspan="7" class="border little">перевезено, т</td>
                    <td colspan="7" class="border little">выполнено, ткм</td>
                    <td colspan="9" class="border little">зарплата</td>
                </tr>
                <tr>
                    <td colspan="4" class="border-left border-top little"></td>
                    <td colspan="4" class="border-left border-top little"></td>

                    <td colspan="6" class="border little">всего</td>
                    <td colspan="23" class="border little">в том числе автомобиля</td>

                    <td colspan="3" class="border-left border-top little"></td>
                    <td colspan="3" class="border-left border-top little"></td>

                    <td colspan="6" class="border-left small">общий</td>

                    <td colspan="6" class="border small">в том числе с грузом</td>
                    <td colspan="3" class="border-left border-top little"></td>
                    <td colspan="4" class="border-left border-top little">в том</td>
                    <td colspan="3" class="border-left border-top little"></td>
                    <td colspan="4" class="border-left border-top little">в том</td>
                    <td colspan="2" class="border little">код</td>
                    <td colspan="7" class="little border">сумма, руб. коп.</td>
                </tr>
                <tr>
                    <td colspan="4" class="border-left little"></td>
                    <td colspan="4" class="border-left little"></td>

                    <td colspan="3" class="border-left border-top little"></td>
                    <td colspan="3" class="border-left border-top little"></td>
                    <td colspan="4" class="border-left border-top little"></td>

                    <td colspan="19" class="border little">в простое</td>

                    <td colspan="3" class="border-left little"></td>
                    <td colspan="3" class="border-left little"></td>

                    <td colspan="3" class="border-left border-top little"></td>
                    <td colspan="3" class="border-left border-top little"></td>

                    <td colspan="3" class="border-left border-top little"></td>
                    <td colspan="3" class="border-left border-top little"></td>

                    <td colspan="3" class="border-left little"></td>
                    <td colspan="4" class="border-left little">числе</td>

                    <td colspan="3" class="border-left little"></td>
                    <td colspan="4" class="border-left little">числе</td>

                    <td colspan="2" class="border border-bottom-bold little">65</td>
                    <td colspan="7" class="little border border-bottom-bold">66</td>
                </tr>
                <tr>
                    <td colspan="4" class="border-left little">по норме</td>
                    <td colspan="4" class="border-left little">фактически</td>

                    <td colspan="3" class="border-left little">автомо-</td>
                    <td colspan="3" class="border-left little">прицепа</td>

                    <td colspan="4" class="border-left border-top little">в движении</td>

                    <td colspan="3" class="border-left little"></td>
                    <td colspan="9" class="border-left little">под погрузкой, разгрузкой</td>
                    <td colspan="7" class="border-left little">по техническим</td>

                    <td colspan="3" class="border-left little">ездок</td>
                    <td colspan="3" class="border-left little">заездов</td>

                    <td colspan="3" class="border-left little">автомо-</td>
                    <td colspan="3" class="border-left little">прицепа</td>

                    <td colspan="3" class="border-left little">автомо-</td>
                    <td colspan="3" class="border-left little">прицепа</td>

                    <td colspan="3" class="border-left little">всего</td>
                    <td colspan="4" class="border-left little">на прице-</td>

                    <td colspan="3" class="border-left little">всего</td>
                    <td colspan="4" class="border-left little">на прице-</td>

                    <td colspan="2" class="border-left-bold border-bottom little"></td>
                    <td colspan="7" class="little border"></td>
                </tr>
                <tr>
                    <td colspan="4" class="border-left little"></td>
                    <td colspan="4" class="border-left little"></td>

                    <td colspan="3" class="border-left little">биля</td>
                    <td colspan="3" class="border-left little"></td>

                    <td colspan="4" class="border-left border-top little"></td>

                    <td colspan="3" class="border-left little">всего</td>
                    <td colspan="4" class="border-left border-top little">всего</td>
                    <td colspan="5" class="border-left border-top little">сверхнормат.</td>
                    <td colspan="7" class="border-left little">неисправностям</td>

                    <td colspan="3" class="border-left little"></td>
                    <td colspan="3" class="border-left little"></td>

                    <td colspan="3" class="border-left little">биля</td>
                    <td colspan="3" class="border-left little"></td>

                    <td colspan="3" class="border-left little">биля</td>
                    <td colspan="3" class="border-left little"></td>

                    <td colspan="3" class="border-left little"></td>
                    <td colspan="4" class="border-left little">пах</td>

                    <td colspan="3" class="border-left little"></td>
                    <td colspan="4" class="border-left little">пах</td>

                    <td colspan="2" class="border-left-bold border-bottom little"></td>
                    <td colspan="7" class="little border"></td>
                </tr>
                <tr>
                    <td colspan="4" class="border-left border-top border-bottom-bold little">46</td>
                    <td colspan="4" class="border-left border-top border-bottom-bold little">47</td>

                    <td colspan="3" class="border-left border-top border-bottom-bold little">48</td>
                    <td colspan="3" class="border-left border-top border-bottom-bold little">49</td>

                    <td colspan="4" class="border-left border-top border-bottom-bold little">50</td>

                    <td colspan="3" class="border-left border-top border-bottom-bold little">51</td>
                    <td colspan="4" class="border-left border-top border-bottom-bold little">52</td>
                    <td colspan="5" class="border-left border-top border-bottom-bold little">53</td>
                    <td colspan="7" class="border-left border-top border-bottom-bold little">54</td>

                    <td colspan="3" class="border-left border-top border-bottom-bold little">55</td>
                    <td colspan="3" class="border-left border-top border-bottom-bold little">56</td>

                    <td colspan="3" class="border-left border-top border-bottom-bold little">57</td>
                    <td colspan="3" class="border-left border-top border-bottom-bold little">58</td>

                    <td colspan="3" class="border-left border-top border-bottom-bold little">59</td>
                    <td colspan="3" class="border-left border-top border-bottom-bold little">60</td>

                    <td colspan="3" class="border-left border-top border-bottom-bold little">61</td>
                    <td colspan="4" class="border-left border-top border-bottom-bold little">62</td>

                    <td colspan="3" class="border-left border-top border-bottom-bold little">63</td>
                    <td colspan="4" class="border-left border-top border-bottom-bold little">64</td>

                    <td colspan="2" class="border-left-bold border-bottom little"></td>
                    <td colspan="7" class="little border"></td>
                </tr>
                <tr>
                    <td colspan="4" class="border little">&nbsp;</td>
                    <td colspan="4" class="border little"></td>

                    <td colspan="3" class="border little"></td>
                    <td colspan="3" class="border little"></td>

                    <td colspan="4" class="border little"></td>

                    <td colspan="3" class="border little"></td>
                    <td colspan="4" class="border little"></td>
                    <td colspan="5" class="border little"></td>
                    <td colspan="7" class="border little"></td>

                    <td colspan="3" class="border little"></td>
                    <td colspan="3" class="border little"></td>

                    <td colspan="3" class="border little"></td>
                    <td colspan="3" class="border little"></td>

                    <td colspan="3" class="border little"></td>
                    <td colspan="3" class="border little"></td>

                    <td colspan="3" class="border little"></td>
                    <td colspan="4" class="border little"></td>

                    <td colspan="3" class="border little"></td>
                    <td colspan="4" class="border little"></td>

                    <td colspan="2" class="border little"></td>
                    <td colspan="7" class="little border"></td>
                </tr>
                <tr>
                    <td colspan="4" class="border little">&nbsp;</td>
                    <td colspan="4" class="border little"></td>

                    <td colspan="3" class="border little"></td>
                    <td colspan="3" class="border little"></td>

                    <td colspan="4" class="border little"></td>

                    <td colspan="3" class="border little"></td>
                    <td colspan="4" class="border little"></td>
                    <td colspan="5" class="border little"></td>
                    <td colspan="7" class="border little"></td>

                    <td colspan="3" class="border little"></td>
                    <td colspan="3" class="border little"></td>

                    <td colspan="3" class="border little"></td>
                    <td colspan="3" class="border little"></td>

                    <td colspan="3" class="border little"></td>
                    <td colspan="3" class="border little"></td>

                    <td colspan="3" class="border little"></td>
                    <td colspan="4" class="border little"></td>

                    <td colspan="3" class="border little"></td>
                    <td colspan="4" class="border little"></td>

                    <td colspan="2" class="border little"></td>
                    <td colspan="7" class="little border"></td>
                </tr>
                <tr>
                    <td colspan="4" class="border little">&nbsp;</td>
                    <td colspan="4" class="border little"></td>

                    <td colspan="3" class="border little"></td>
                    <td colspan="3" class="border little"></td>

                    <td colspan="4" class="border little"></td>

                    <td colspan="3" class="border little"></td>
                    <td colspan="4" class="border little"></td>
                    <td colspan="5" class="border little"></td>
                    <td colspan="7" class="border little"></td>

                    <td colspan="3" class="border little"></td>
                    <td colspan="3" class="border little"></td>

                    <td colspan="3" class="border little"></td>
                    <td colspan="3" class="border little"></td>

                    <td colspan="3" class="border little"></td>
                    <td colspan="3" class="border little"></td>

                    <td colspan="3" class="border little"></td>
                    <td colspan="4" class="border little"></td>

                    <td colspan="3" class="border little"></td>
                    <td colspan="4" class="border little"></td>

                    <td colspan="2" class="border little"></td>
                    <td colspan="7" class="little border"></td>
                </tr>
                <tr>
                    <td colspan="4" class="border border-bottom-bold little">&nbsp;</td>
                    <td colspan="4" class="border border-bottom-bold little"></td>

                    <td colspan="3" class="border border-bottom-bold little"></td>
                    <td colspan="3" class="border border-bottom-bold little"></td>

                    <td colspan="4" class="border border-bottom-bold little"></td>

                    <td colspan="3" class="border border-bottom-bold little"></td>
                    <td colspan="4" class="border border-bottom-bold little"></td>
                    <td colspan="5" class="border border-bottom-bold little"></td>
                    <td colspan="7" class="border border-bottom-bold little"></td>

                    <td colspan="3" class="border border-bottom-bold little"></td>
                    <td colspan="3" class="border border-bottom-bold little"></td>

                    <td colspan="3" class="border border-bottom-bold little"></td>
                    <td colspan="3" class="border border-bottom-bold little"></td>

                    <td colspan="3" class="border border-bottom-bold little"></td>
                    <td colspan="3" class="border border-bottom-bold little"></td>

                    <td colspan="3" class="border border-bottom-bold little"></td>
                    <td colspan="4" class="border border-bottom-bold little"></td>

                    <td colspan="3" class="border border-bottom-bold little"></td>
                    <td colspan="4" class="border border-bottom-bold little"></td>

                    <td colspan="2" class="border border-bottom-bold little"></td>
                    <td colspan="7" class="little border border-bottom-bold"></td>
                </tr>
                <tr>
                    <td colspan="78" class="big">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="8" class="bottom">Коды марок:</td>
                    <td colspan="2"></td>
                    <td colspan="6" class="bottom">Автомобиля</td>
                    <td colspan="8" class="border-bold big bold">&nbsp;</td>
                    <td colspan="1"></td>
                    <td colspan="5" class="bottom">Прицепов</td>
                    <td colspan="6" class="border-bold big bold">&nbsp;</td>
                    <td colspan="6" class="border-bold big bold">&nbsp;</td>
                    <td colspan="6" class="border-bold big bold">&nbsp;</td>
                    <td colspan="1"></td>
                    <td colspan="5" class="bottom">Автомобиль, дни в работе</td>
                    <td colspan="6" class="border-bold big bold">&nbsp;</td>
                    <td colspan="6" class="bottom">Таксировщик</td>
                    <td colspan="4" class="border-bottom"></td>
                    <td colspan="1"></td>
                    <td colspan="6" class="border-bottom bold right"></td>

                </tr>
                <tr>
                    <td colspan="66"></td>
                    <td colspan="4" class="small">(подпись)</td>
                    <td colspan="1"></td>
                    <td colspan="7" class="small">(расшифровка подписи)</td>

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
            months: [ 'января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря' ],

            // FIXME: для разработки - убрать
            // company: {
            //     name: 'ООО "Таас-Юрях Нефтегаздобыча"',
            //     requisites: {
            //         address: 'г. Иркутск, ул. Байкальская, д. 279, оф. 502',
            //         phone: '8(3952)000-000'
            //     }
            // },
            // item: {
            //     auto: {
            //         model: 'Toyota',
            //         numberplate: '000000000',
            //         type: 'автобус'
            //     },
            //     customer: {
            //         name: 'ЗАО ОблТяжСтрой',
            //         address: '927461, Оренбургская область, город Щёлково, шоссе Гагарина, 56',
            //         phone: '8(3952) 000-000'
            //     },
            //     contractor: {
            //         name: 'ЗАО АсбоцементЛифтЖелДор',
            //         address: '664025, Иркутская область, город, шоссе, дом',
            //         phone: '8(495) 0000-000'
            //     },
            //     driver: {
            //         shortName: 'Иванов И.В.',
            //         fullName: 'Иванов Иван Васильевич',
            //         license: '000123456'
            //     },
            //     dispatcher: 'Сидоров С.С.',
            //     mechanic: 'Петров П.П.',
            //     refueler: 'Зайцев З.З.'
            // }
        }
    },
    computed: {
        day: function() { return this.date.getDate() },
        month: function() { return this.months[this.date.getMonth() - 1] },
        year: function() { return this.date.getFullYear() }
    }
}
</script>
