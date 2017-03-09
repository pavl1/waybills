<template>
    <div>
        <div class="waybill-front">
            <table >
                <tr>
                    <td class="border" width="90px" rowspan="2">Место для штампа</td>
                    <td colspan="16" class="left big bold">
                        РАБОТАТЬ ПОД ЛИНИЕЙ ЭЛЕКТРОПЕРЕДАЧ ЗАПРЕЩАЕТСЯ!
                    </td>

                </tr>
                <tr>
                    <td colspan="16" class="left big bold">РАБОТАТЬ ВБЛИЗИ ЛИНИЙ ЭЛЕКТРОПЕРЕДАЧ (БЛИЖЕ 30 м ОТ КРАЙНЕГО ПРОВОДА) БЕЗ НАРЯДА-ДОПУСКА ЗАПРЕЩАЕТСЯ!</td>
                </tr>
                <tr><td></td></tr>
                <tr>
                    <td colspan="2" class="border-right-double"></td>
                    <td class=" little middle center" >Гаражный №</td>
                    <td class="border-bottom left bottom border-right-double" >001</td>
                    <td colspan="4" class="bold big center middle border-right-double" >Путевой лист № 1</td>
                    <td rowspan="3" colspan="6" class="left big middle border-right-double ">
                        Перед началом работы проверь исправность крана в соответствии с инструкцией
                    </td>
                    <td colspan="3" class="little left" >Автомобиль и крановая установка
                        технически исправны. Показание </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="left little border-right-double" >Организация:</td>
                        <td colspan="2" class="border-right-double" ></td>
                        <td colspan="4" class="bold little center border-right-double" >автомобильного (стрелового самоходного)</td>
                        <td colspan="3" class="border-bottom bold little top center" >спидометра при выезде</td>
                    </tr>
                    <tr>
                        <td rowspan="7" colspan="2" class="left bold big border-right-double border-bottom">{{ organization.name }}, {{ organization.address }}, тел. {{ organization.phone }}</td>
                        <td class="middle right little ">Марка крана</td>
                        <td class="middle bold liitle border-right-double" >КС-45717К-2</td>
                        <td colspan="4" class="little bold center border-right-double" >крана</td>
                        <td class="left bottom" >
                            Выезд разрешаю
                            механик
                        </td>

                        <td colspan="2" class="border-bottom bold" ></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="middle center bottom little border-right-double" >Госавтоинспекция</td>
                        <td colspan="4" class="middle bold little border-right-double" >Срок действия: 26 июня 2014г.</td>
                        <td colspan="6" class="border-right-double" ></td>
                        <td colspan="3" class="left bottom">
                            Автомобиль и крановую установку
                            в технически исправном состоянии
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="border-right-double" ></td>
                        <td colspan="4" class="border-right-double" ></td>
                        <td colspan="6" rowspan="5" class="middle big left border-right-double border-bottom" >
                            Не приступай к работе без
                            разрешения (росписи)
                            ответственного за безопасное
                            производство работ по
                            перемещению грузов
                        </td>
                        <td class="top left " >принял шофер-крановщик</td>
                        <td colspan="2" class="border-bottom little bold bottom" ></td>
                    </tr>
                    <tr>
                        <td class="left bottom little " >Гос. №</td>
                        <td class="little left bottom bold border-right-double" >Х 296 АО 138</td>
                        <td colspan="4" class="bold little left bottom border-right-double" >Шофер-крановщик:</td>
                        <td class= "left bottom" >Выезд из
                            гаража
                        </td>
                        <td colspan="2" class="border-bottom bold" ></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="border-right-double" ></td>
                        <td colspan="4" class="underline bold little left bottom" >Бекетов Руслан Витальевич</td>
                        <td class="left bottom" >Диспетчер</td>
                        <td colspan="2" class="border-bottom left bottom bold" ></td>
                    </tr>
                    <tr>
                        <td class="left bottom little" >Рег. №</td>
                        <td class="border-bottom border-right-double"></td>
                        <td colspan="4" class="little bold left bottom">Удостоверение:</td>
                        <td class="left bottom" >
                            Время
                            возвращения
                        </td>
                        <td colspan="2" class="border-bottom left bottom bold "></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="border-right-double border-bottom" ></td>
                        <td colspan="4" class="left underline little bold border-right-double border-bottom">№4790 от 19 сентября 2007г.</td>
                        <td class="left bottom " >Диспетчер</td>
                        <td colspan="2" class="left bottom bold border-bottom" ></td>
                    </tr>


                    <tr>
                        <td colspan="8" class="border-top border-right center middle" >ЗАДАНИЕ КРАНОВЩИКУ</td>
                        <td colspan="6" class="border-top border-right center middle">Таблица откосов</td>
                        <td colspan="3" class="border-top center middle" >Выдача горючего</td>
                    </tr>

                    <tr>
                        <td colspan="2" rowspan="3" class="middle center border-right border-top border-bottom">В чье распоряжение</td>
                        <td colspan="2" rowspan="3" class="middle center border">Откуда следует</td>
                        <td colspan="2" rowspan="3" class="middle center border">Куда следует</td>
                        <td colspan="2" rowspan="3" class="middle center border">Вид работы</td>
                        <td class="border-top" ></td>
                        <td colspan="5" class="middle center border" >Грунт ненасыпной</td>
                        <td class="bottom center border-right border-top" ></td>
                        <td class="bottom center border-right border-top" ></td>
                        <td class="bottom center border-top" ></td>
                    </tr>
                    <tr>
                        <td class="border-right middle center" >Глубина</td>
                        <td rowspan="3" class="border middle center bold little" >песчаный</td>
                        <td rowspan="3" class="border middle center bold little" >супесчаный</td>
                        <td rowspan="3" class="border middle center bold little" >суглинок</td>
                        <td rowspan="3" class="border middle center bold little" >глинистый</td>
                        <td rowspan="3" class="border middle center bold little" >лесовый</td>
                        <td class="border-right middle center" >Замер</td>
                        <td class="border-right middle center" ></td>
                        <td class= "middle center" ></td>
                    </tr>
                    <tr>
                        <td class="border-right middle center" >канавы</td>
                        <td class="border-right middle center" >остатка</td>
                        <td class="border-right middle center" >кг/л</td>
                        <td class= "middle center" >Роспись</td>
                    </tr>
                    <tr>
                        <td class="border-right border-top border-bottom middle center" colspan="2" >Компания "Шлюмберже Лоджелко, Инк"</td>
                        <td class="border-right middle center" colspan="2" ></td>
                        <td class="border-right middle center" colspan="2" ></td>
                        <td class="border-right middle center" colspan="2" ></td>
                        <td class="border-right middle center" >HM</td>
                        <td class="border-right border-bottom middle center" >при выезде</td>
                        <td class="border-bottom border-right middle center" ></td>
                        <td class="border-bottom middle center" ></td>
                    </tr>

                    <tr>
                        <td class="border-right border-top border-bottom middle center" colspan="2" ></td>
                        <td class="border middle center" colspan="2" ></td>
                        <td class="border middle center" colspan="2" ></td>
                        <td class="border middle center" colspan="2" ></td>
                        <td class="border middle center" colspan="6" >Расстояние от основания</td>
                        <td class="border-bold middle center" ></td>
                        <td class="border-bold middle center" ></td>
                        <td class="border-bold middle center" ></td>
                    </tr>

                    <tr>
                        <td colspan="8" class="border-right border-top border-bottom middle center" ></td>
                        <td class="border middle center" >1</td>
                        <td class="border middle center" >1,5</td>
                        <td class="border middle center" >1,25</td>
                        <td class="border middle center" >1</td>
                        <td class="border middle center" >1</td>
                        <td class="border middle center" >1</td>
                        <td class="border-bold middle center" ></td>
                        <td class="border-bold middle center" >ДТ</td>
                        <td class="border-bold middle center" ></td>
                    </tr>

                    <tr>
                        <td colspan="2" class="border-right border-top border-bottom middle center" ></td>
                        <td colspan="2" class="border-right border-top border-bottom middle center" ></td>
                        <td colspan="2" class="border-right border-top border-bottom middle center" ></td>
                        <td colspan="2" class="border-right border-top border-bottom middle center" ></td>
                        <td class="border middle center" >2</td>
                        <td class="border middle center" >3</td>
                        <td class="border middle center" >2,4</td>
                        <td class="border middle center" >2</td>
                        <td class="border middle center" >1,5</td>
                        <td class="border middle center" >2</td>
                        <td class="border-right middle center little" >Остаток</td>
                        <td class="border-right middle center" ></td>
                        <td class= "middle center" ></td>
                    </tr>

                    <tr>
                        <td colspan="2" class="border-right border-top border-bottom middle center" ></td>
                        <td colspan="2" class="border-right border-top border-bottom middle center" ></td>
                        <td colspan="2" class="border-right border-top border-bottom middle center" ></td>
                        <td colspan="2" class="border-right border-top border-bottom middle center" ></td>
                        <td class="border middle center" >3</td>
                        <td class="border middle center" >4</td>
                        <td class="border middle center" >3,6</td>
                        <td class="border middle center" >3,25</td>
                        <td class="border middle center" >1,75</td>
                        <td class="border middle center" >2,5</td>
                        <td class="border-right middle center little" >по</td>
                        <td class="border-right middle center" ></td>
                        <td class= "middle center" ></td>
                    </tr>

                    <tr>
                        <td colspan="2" class="border-right border-top border-bottom middle center" ></td>
                        <td colspan="2" class="border-right border-top border-bottom middle center" ></td>
                        <td colspan="2" class="border-right border-top border-bottom middle center" ></td>
                        <td colspan="2" class="border-right border-top border-bottom middle center" ></td>
                        <td class="border middle center" >4</td>
                        <td class="border middle center" >5</td>
                        <td class="border middle center" >4,4</td>
                        <td class="border middle center" >4</td>
                        <td class="border middle center" >3</td>
                        <td class="border middle center" >3</td>
                        <td class="border-right middle center little" >вазвращении</td>
                        <td class="border-right middle center" ></td>
                        <td class= "middle center" ></td>
                    </tr>

                    <tr>
                        <td colspan="2" class="border-right border-top border-bottom middle center" ></td>
                        <td colspan="2" class="border-right border-top border-bottom middle center" ></td>
                        <td colspan="2" class="border-right border-top border-bottom middle center" ></td>
                        <td colspan="2" class="border-right border-top border-bottom middle center" ></td>
                        <td class="border middle center" >5</td>
                        <td class="border middle center" >6</td>
                        <td class="border middle center" >5,3</td>
                        <td class="border middle center" >4,75</td>
                        <td class="border middle center" >3,5</td>
                        <td class="border middle center" >3,5</td>
                        <td class="border-right middle center" ></td>
                        <td class="border-right middle center" ></td>
                        <td class= "middle center" ></td>
                    </tr>

                    <tr>
                        <td colspan="2" class="border-right border-top  middle center" ></td>
                        <td colspan="2" class="border-right border-top  middle center" ></td>
                        <td colspan="2" class="border-right border-top  middle center" ></td>
                        <td colspan="2" class="border-top  middle center" ></td>
                        <td class="border-top middle center" ></td>
                        <td class="border-top middle center" ></td>
                        <td class="border-top middle center" ></td>
                        <td class="border-top middle center" ></td>
                        <td class="border-top middle center" ></td>
                        <td class="border-top border-right middle center" ></td>
                        <td class=" middle center" >Кран сдал крановщик</td>
                        <td class="border-bottom-bold middle center" ></td>
                        <td class="border-bottom-bold  middle center" ></td>
                    </tr>

                    <tr>
                        <td colspan="6" class="bottom center">Ответственные за безопасное производство работ кранами</td>
                        <td class="border-top border-left bottom center" >Стропальщики</td>
                        <td class="border-top middle center" ></td>
                        <td class="border-top middle center" ></td>
                        <td class="border-top middle center" ></td>
                        <td class="border-top middle center" ></td>
                        <td class="border-top middle center" ></td>
                        <td class="border-top middle center" ></td>
                        <td class="border-top border-right middle center" ></td>
                        <td colspan="3" ></td>
                    </tr>

                    <tr>
                        <td colspan="2" rowspan="2" class="border-right border-top border-bottom middle left" >№ п/п</td>
                        <td colspan="2" class="border-top border-right middle center" >Номер</td>
                        <td colspan="2" class="border-top border-right middle center" >Дата</td>
                        <td rowspan="2" class="border-right border-top border-bottom middle center" >№ п/п</td>
                        <td class="border-top middle center" ></td>
                        <td class="border-top border-right middle center" ></td>
                        <td colspan="3" class="border-top middle left border-right" >Номер удостоверение</td>
                        <td colspan="2" class="border-top border-right middle left" >Дата проверки</td>
                        <td class="border-top bottom center" >Кран принял</td>
                        <td class="border-top bottom center" >_____час.</td>
                        <td class="border-top bottom center" >_________</td>
                    </tr>

                    <tr>
                        <td  colspan="2" class= "bottom center border-right" >удостоверения</td>
                        <td  colspan="2" class= bottom center" >выдачи</td>
                        <td class= bottom left" ></td>
                        <td class= "middle center border-right" ></td>
                        <td colspan="3" class= "bottom left border-right" >и дата выдачи</td>
                        <td class= "bottom left" >знаний</td>
                        <td class= "middle center border-right" ></td>
                        <td class= "middle center" ></td>
                    </tr>

                    <tr>
                        <td class= "bottom left" >1</td>
                        <td class="border bottom left small bold" >Простакишин О. В.</td>
                        <td colspan="2" class="border bottom center" >7696</td>
                        <td colspan="2" class="border bottom center" >14.04.2014</td>
                        <td class="border bottom left" >1</td>
                        <td colspan="2" class="border bottom left bold" >Абрамов М.С.</td>
                        <td colspan="3" class="border bottom center" >№2326/22.04.2014</td>
                        <td colspan="2" class="border bottom center" ></td>
                        <td class= "middle center" >
                            Показание спидометра по
                            возвращении в гараж, км
                        </td>
                        <td class="border-bottom-bold middle center" ></td>
                        <td class="border-bottom-bold middle center" ></td>
                    </tr>

                    <tr>
                        <td class="border-top border-right bottom left" >2</td>
                        <td class="border bottom left small bold" >Простакишин О. В.</td>
                        <td colspan="2" class="border bottom center" >7696</td>
                        <td colspan="2" class="border bottom center" >14.04.2014</td>
                        <td class="border bottom left" >2</td>
                        <td colspan="2" class="border bottom left bold" >Абрамов М.С.</td>
                        <td colspan="3" class="border bottom center" >№2326/22.04.2014</td>
                        <td colspan="2" class="border bottom center" ></td>
                        <td colspan="3" class="border-bottom middle center" ></td>
                    </tr>

                    <tr>
                        <td class="border-top border-right bottom left" >3</td>
                        <td class="border bottom left bold" ></td>
                        <td colspan="2" class="border bottom center" ></td>
                        <td colspan="2" class="border bottom center" ></td>
                        <td class="border bottom left" >3</td>
                        <td colspan="2" class="border bottom left bold" ></td>
                        <td colspan="3" class="border bottom center" ></td>
                        <td colspan="2" class="border bottom center" ></td>
                        <td colspan="3" class="border-bottom middle center" ></td>
                    </tr>

                    <tr>
                        <td class="border-top border-right bottom left" >4</td>
                        <td class="border bottom left bold" ></td>
                        <td colspan="2" class="border bottom center" ></td>
                        <td colspan="2" class="border bottom center" ></td>
                        <td class="border bottom left" >4</td>
                        <td colspan="2" class="border bottom left bold" ></td>
                        <td colspan="3" class="border bottom center" ></td>
                        <td colspan="2" class="border bottom center" ></td>
                        <td colspan="3" class="border-bottom middle center" ></td>
                    </tr>

                    <tr>
                        <td class="border-top border-right bottom left" >5</td>
                        <td class="border bottom left bold" ></td>
                        <td colspan="2" class="border bottom center" ></td>
                        <td colspan="2" class="border bottom center" ></td>
                        <td class="border bottom left" >5</td>
                        <td colspan="2" class="border bottom left bold" ></td>
                        <td colspan="3" class="border bottom center" ></td>
                        <td colspan="2" class="border bottom center" ></td>
                        <td class= "bottom left" >Механик</td>
                        <td colspan="2" class="border-bottom-bold middle center" ></td>
                    </tr>

                    <tr>
                        <td class="border-top border-right border-bottom bottom left" >6</td>
                        <td class="border bottom left bold" ></td>
                        <td colspan="2" class="border bottom center" ></td>
                        <td colspan="2" class="border bottom center" ></td>
                        <td class="border bottom left" >6</td>
                        <td colspan="2" class="border bottom left bold" ></td>
                        <td colspan="3" class="border bottom center" ></td>
                        <td colspan="2" class="border bottom center" ></td>
                        <td colspan="3" class="border-bottom middle center" ></td>
                    </tr>

                    <tr>
                        <td colspan="17" class="left bold " >
                            Запрещается работа крана без аттестованных стропальщиков, ИТР, ответственных за безопасное  производство работ и с неисправными грузозахватными приспособлениями, стропами и тарой.
                        </td>
                    </tr>
                    <tr>
                        <td colspan="17" class="left bold">
                            Крановая установка технически исправна. Ответственное лицо за исправное состояние крановой установки. Сформировано в программе Респект:Учет путевых листов и ГСМ
                        </td>
                    </tr>
                    <tr><td colspan="17"></td></tr>
                </table>
            </div>
            <br />
            <div class="waybill-cover">
                <table border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr>
                            <td colspan="78">&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="78">ВЫПОЛНЕНИЕ ЗАДАНИЯ</td>
                        </tr>
                        <tr>
                            <td colspan="78" class="border-top-bold border-bottom-bold">Заполняется шофером-крановщиком</td>
                        </tr>
                        <tr>
                            <td colspan="18" class="middle right border-right border-bottom">Выполняемая работа</td>
                            <td colspan="16" class="border-right border-bottom">Стропальщики(фамилия и.о., номер удостоверения, дата последней проверки знаний)</td>
                            <td colspan="14" class="little border-right border-bottom">Производство работ разрешаю: ответственный за безопасное производство кранами(фамилия и., о., подпись)</td>
                            <td colspan="10" class="border-right border-bottom">Время</td>
                            <td colspan="10" class="border-right border-bottom">Количество перемещ. груза т.</td>
                            <td colspan="10" class="border-right border-bottom">Начальник, прораб мастер. участка</td>

                        </tr>
                        <tr>
                            <td colspan="18" class="border">&nbsp;</td>
                            <td colspan="16" class="border"></td>
                            <td colspan="14" class="border"></td>
                            <td colspan="5" class="border"></td>
                            <td colspan="5" class="border"></td>
                            <td colspan="10" class="border"></td>
                            <td colspan="10" class="border"></td>
                        </tr>
                        <tr>
                            <td colspan="18" class="border">&nbsp;</td>
                            <td colspan="16" class="border"></td>
                            <td colspan="14" class="border"></td>
                            <td colspan="5" class="border"></td>
                            <td colspan="5" class="border"></td>
                            <td colspan="10" class="border"></td>
                            <td colspan="10" class="border"></td>
                        </tr>
                        <tr>
                            <td colspan="18" class="border">&nbsp;</td>
                            <td colspan="16" class="border"></td>
                            <td colspan="14" class="border"></td>
                            <td colspan="5" class="border"></td>
                            <td colspan="5" class="border"></td>
                            <td colspan="10" class="border"></td>
                            <td colspan="10" class="border"></td>
                        </tr>
                        <tr>
                            <td colspan="18" class="border">&nbsp;</td>
                            <td colspan="16" class="border"></td>
                            <td colspan="14" class="border"></td>
                            <td colspan="5" class="border"></td>
                            <td colspan="5" class="border"></td>
                            <td colspan="10" class="border"></td>
                            <td colspan="10" class="border"></td>
                        </tr>
                        <tr>
                            <td colspan="18" class="border">&nbsp;</td>
                            <td colspan="16" class="border"></td>
                            <td colspan="14" class="border"></td>
                            <td colspan="5" class="border"></td>
                            <td colspan="5" class="border"></td>
                            <td colspan="10" class="border"></td>
                            <td colspan="10" class="border"></td>
                        </tr>
                        <tr>
                            <td colspan="18" class="border">&nbsp;</td>
                            <td colspan="16" class="border"></td>
                            <td colspan="14" class="border"></td>
                            <td colspan="5" class="border"></td>
                            <td colspan="5" class="border"></td>
                            <td colspan="10" class="border"></td>
                            <td colspan="10" class="border"></td>
                        </tr>
                        <tr>
                            <td colspan="18" class="border">&nbsp;</td>
                            <td colspan="16" class="border"></td>
                            <td colspan="14" class="border"></td>
                            <td colspan="5" class="border"></td>
                            <td colspan="5" class="border"></td>
                            <td colspan="10" class="border"></td>
                            <td colspan="10" class="border"></td>
                        </tr>
                        <tr>
                            <td colspan="18" class="border">&nbsp;</td>
                            <td colspan="16" class="border"></td>
                            <td colspan="14" class="border"></td>
                            <td colspan="5" class="border"></td>
                            <td colspan="5" class="border"></td>
                            <td colspan="10" class="border"></td>
                            <td colspan="10" class="border"></td>
                        </tr>
                        <tr>
                            <td colspan="18" class="border">&nbsp;</td>
                            <td colspan="16" class="border"></td>
                            <td colspan="14" class="border"></td>
                            <td colspan="5" class="border"></td>
                            <td colspan="5" class="border"></td>
                            <td colspan="10" class="border"></td>
                            <td colspan="10" class="border"></td>
                        </tr>
                        <tr>
                            <td colspan="18" class="border">&nbsp;</td>
                            <td colspan="16" class="border"></td>
                            <td colspan="14" class="border"></td>
                            <td colspan="5" class="border"></td>
                            <td colspan="5" class="border"></td>
                            <td colspan="10" class="border"></td>
                            <td colspan="10" class="border"></td>
                        </tr>
                        <tr>
                            <td colspan="18" class="border">&nbsp;</td>
                            <td colspan="16" class="border"></td>
                            <td colspan="14" class="border"></td>
                            <td colspan="5" class="border"></td>
                            <td colspan="5" class="border"></td>
                            <td colspan="10" class="border"></td>
                            <td colspan="10" class="border"></td>
                        </tr>
                        <tr>
                            <td colspan="78">&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="18" class="right">Подпись шофера-крановщика</td>
                            <td colspan="10" class="border-bottom"></td>
                            <td colspan="30" class="right">Запись проверки (диспетчер или другое лицо)</td>
                            <td colspan="10" class="border-bottom"></td>
                        </tr>
                        <tr>
                            <td colspan="78">&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="13"></td>
                            <td colspan="16" class="border">Часы</td>
                            <td colspan="5"></td>

                            <td colspan="14" class="border">Расчет зарплаты</td>
                            <td colspan="5"></td>
                            <td colspan="10" class="border">Виды работ</td>
                            <td colspan="5"></td>
                            <td colspan="10" class="border">Расценки</td>
                        </tr>
                        <tr>
                            <td colspan="5" class="border">В наряде</td>
                            <td colspan="8"></td>

                            <td colspan="8" class="border">по форме</td>
                            <td colspan="8" class="border">фактически</td>

                            <td colspan="5"></td>
                            <td colspan="5" class="border">Табельный номер</td>
                            <td colspan="9" class="border">Вид зарплаты</td>
                            <td colspan="5"></td>
                            <td colspan="10" class="border"></td>
                            <td colspan="5"></td>
                            <td colspan="5" class="little border">Крановщика</td>
                            <td colspan="5" class="little border">Стропальщика</td>

                        </tr>
                        <tr>
                            <td colspan="12" class="border-bottom"></td>
                            <td colspan="1"></td>

                            <td colspan="8" class="border"></td>
                            <td colspan="8" class="border"></td>

                            <td colspan="5"></td>
                            <td colspan="5" class="border">крановщика</td>
                            <td colspan="9" class="border"></td>
                            <td colspan="5"></td>
                            <td colspan="10" class="border"></td>
                            <td colspan="5" class="border"></td>
                            <td colspan="5" class="little border"></td>
                            <td colspan="5" class="little border"></td>

                        </tr>
                        <tr>
                            <td colspan="12" class="border-bottom"></td>
                            <td colspan="1"></td>

                            <td colspan="8" class="border"></td>
                            <td colspan="8" class="border"></td>

                            <td colspan="5"></td>
                            <td colspan="5" class="little border">стропальщика</td>
                            <td colspan="9" class="border"></td>
                            <td colspan="5"></td>
                            <td colspan="10" class="border"></td>
                            <td colspan="5" class="border"></td>
                            <td colspan="5" class="little border"></td>
                            <td colspan="5" class="little border"></td>

                        </tr>
                        <tr>
                            <td colspan="12" class="border-bottom"></td>
                            <td colspan="1"></td>

                            <td colspan="8" class="border"></td>
                            <td colspan="8" class="border"></td>

                            <td colspan="24"></td>
                            <td colspan="10" class="border"></td>
                            <td colspan="5" class="border"></td>
                            <td colspan="5" class="little border">&nbsp;</td>
                            <td colspan="5" class="little border"></td>

                        </tr>
                        <tr>
                            <td colspan="12" class="border-bottom"></td>
                            <td colspan="1"></td>

                            <td colspan="8" class="border"></td>
                            <td colspan="8" class="border"></td>

                            <td colspan="24"></td>
                            <td colspan="10" class="border"></td>
                            <td colspan="5" class="border"></td>
                            <td colspan="5" class="little border">&nbsp;</td>
                            <td colspan="5" class="little border"></td>

                        </tr>
                        <tr>
                            <td colspan="78">&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>

                            <td colspan="8" class="bottom">Пробег за смену</td>
                            <td colspan="12" class="border-bottom"></td>
                            <td colspan="1" class="bottom">км.</td>


                            <td colspan="24"></td>
                            <td colspan="10" class="border">Прочие работы и виды оплаты</td>
                            <td colspan="5" class="border-bottom"></td>
                            <td colspan="5" class="little border">&nbsp;</td>
                            <td colspan="5" class="little border"></td>

                        </tr>
                        <tr>
                            <td colspan="78">&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>

                            <td colspan="8" class="bottom">Таксировщик</td>
                            <td colspan="12" class="border-bottom"></td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </template>

    <script>
    export default {
        // props: { item: Object },
        data() {
            return {
                organization: {
                    name: 'ООО "Таас-Юрях Нефтегаздобыча"',
                    address: 'г. Иркутск, ул. Байкальская, д. 279, оф. 502',
                    phone: '8(3952)000-000'
                },
                date: new Date(),
                months: [ 'января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря' ],

                // FIXME: для разработки - убрать
                // item: {
                // 	auto: {
                // 		model: 'Toyota',
                // 		numberplate: '000000000',
                // 		type: 'автобус'
                // 	},
                // 	customer: {
                // 		name: 'ЗАО ОблТяжСтрой',
                // 		address: '927461, Оренбургская область, город Щёлково, шоссе Гагарина, 56',
                // 		phone: '8(3952) 000-000'
                // 	},
                // 	contractor: {
                // 		name: 'ЗАО АсбоцементЛифтЖелДор',
                // 		address: '664025, Иркутская область, город, шоссе, дом',
                // 		phone: '8(495) 0000-000'
                // 	},
                // 	driver: {
                // 		shortName: 'Иванов И.В.',
                // 		fullName: 'Иванов Иван Васильевич',
                // 		license: '000123456'
                // 	},
                // 	dispatcher: 'Сидоров С.С.',
                // 	mechanic: 'Петров П.П.',
                // 	refueler: 'Зайцев З.З.'
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
