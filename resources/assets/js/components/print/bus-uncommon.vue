<template>
	<div>
		<div class="waybill-front">
			<table border="0" cellpadding="0" cellspacing="0">
				<tbody>
					<tr>
						<td colspan="60"></td>

						<td colspan="1" rowspan="100"></td>
						<td colspan="1" rowspan="100" class="middle border-right border-left">Л<br />И<br />Н<br />И<br />Я<br /> <br />О<br />Т<br />Р<br />Е<br />З<br />А</td>
						<td colspan="1" rowspan="100"></td>

						<td colspan="18"></td>
					</tr>
					<tr>
						<td colspan="6" class="center small bottom">Место для штампа</td>
						<td colspan="34"></td>
						<td colspan="20" class="small left bottom">Типовая межотраслевая форма №6 (спец)</td>

						<td colspan="18"></td>
					</tr>
					<tr>
						<td colspan="6" class="center small">органнизации</td>

						<td colspan="34" class="big bold">ПУТЕВОЙ ЛИСТ</td>
						<td colspan="20" class="small left">Утверждена Постановлением  Госкомстата России<br /> от 28.11.97 №78</td>
						<td colspan="18" class="bold">ТАЛОН ЗАКАЗЧИКА</td>
					</tr>
					<tr>
						<td colspan="6"></td>
						<td colspan="20" class="big bold right">автобуса необщего пользования</td>
						<td colspan="6" class="big bold border-bottom"></td>
						<td colspan="2" class="big bold">№</td>
						<td colspan="6" class="big bold border-bottom"></td>
						<td colspan="20"></td>

						<td colspan="9" class="bold bottom right">к путевому листу</td>
						<td colspan="3" class="bold bottom border-bottom"></td>
						<td colspan="1" class="bold bottom">№</td>
						<td colspan="5" class="bold bottom border-bottom"></td>

					</tr>
					<tr>
						<td colspan="26"></td>
						<td colspan="6" class="little">(серия)</td>
						<td colspan="21"></td>
						<td colspan="7" class="border">Коды</td>
						<td colspan="9"></td>
						<td colspan="3" class="little">(серия)</td>
						<td colspan="6"></td>
					</tr>
					<tr>
						<td colspan="16"></td>
						<td colspan="1" class="bold bottom">&laquo;</td>
						<td colspan="2" class="bold bottom border-bottom">{{ day }}</td>
						<td colspan="1" class="bold bottom">&raquo;</td>
						<td colspan="5" class="bold bottom border-bottom">{{ month }}</td>
						<td colspan="1"></td>
						<td colspan="3" class="bottom border-bottom">{{ year }}</td>
						<td colspan="1" class="bottom">г.</td>
						<td colspan="16" class="bold"></td>
						<td colspan="7" rowspan="2" class="right middle">Форма по ОКУД</td>
						<td colspan="7" rowspan="2" class="middle border border-bold">0345007</td>

						<td colspan="2" class="bold bottom">от &laquo;</td>
						<td colspan="3" class="bold bottom border-bottom">{{ day }}</td>
						<td colspan="1" class="bold bottom">&raquo;</td>
						<td colspan="6" class="bold bottom border-bottom">{{ month }}</td>
						<td colspan="1"></td>
						<td colspan="3" class="bold bottom border-bottom">{{ year }}</td>
						<td colspan="1" class="bold bottom">г.</td>
						<td colspan="1"></td>
					</tr>
					<tr>
						<td colspan="46" class="min">&nbsp;</td>
						
						<td colspan="18"></td>
					</tr>
					<tr>
						<td colspan="6" class="left">Организация</td>
						<td colspan="40" class="bold border-bottom">{{ company.name }}</td>
						<td colspan="3"></td>
						<td colspan="4"class="right">по ОКПО</td>
						<td colspan="7"class="border-bold"></td>

						<td colspan="5" class="left">Организация</td>
						<td colspan="13" class="bold little bottom border-bottom">{{ company.name }}</td>
					</tr>
					<tr>
						<td colspan="6"></td>
						<td colspan="40" class="little">(наименование, адрес, номер телефона)</td>

						<td colspan="7" class="right">Режим работы</td>
						<td colspan="7" class="border-bold"></td>

						<td colspan="6"></td>
						<td colspan="12" class="small">(наименование)</td>
					</tr>
					<tr>
						<td colspan="6"></td>
						<td colspan="40" class="bold bottom border-bottom">{{ company.requisites.address }}, тел. {{ company.requisites.phone }} </td>
						<td colspan="3"></td>
						<td colspan="4" class="right">Колонна</td>
						<td colspan="7" class="border border-bold"></td>

						<td colspan="18" class="bold little border-bottom">{{ company.requisites.address}}, тел. {{ company.requisites.phone }}</td>
					</tr>
					<tr>
						<td colspan="49"></td>
						<td colspan="4" class="right">Бригада</td>
						<td colspan="7" class="border border-bold"></td>

						<td colspan="18" class="small">(адрес, номер телефона)</td>
					</tr>
					<tr>
						<td colspan="7" class="left">Марка автобуса</td>
						<td colspan="39" class="bold border-bottom">{{ item.auto.model }}</td>
						<td colspan="7"></td>
						<td colspan="7" class="border border-bold"></td>

						<td colspan="3" class="left">Автобус</td>
						<td colspan="15" class="bold border-bottom">{{ item.auto.model }}</td>
					</tr>
					<tr>
						<td colspan="14" class="left">Государственный номерной знак</td>
						<td colspan="31" class="bold border-bottom">{{ item.auto.numberplate }}</td>
						<td colspan="1"></td>
						<td colspan="7">Гаражный номер</td>
						<td colspan="7" class="border border-bold"></td>

						<td colspan="4"></td>
						<td colspan="14" class="little">(тип, марка)</td>
					</tr>
					<tr>
						<td colspan="4" class="left">Водитель</td>
						<td colspan="41" class="bold border-bottom">{{ item.driver.fullName }}</td>
						<td colspan="8">Табельный номер</td>
						<td colspan="7" class="border border-bold"></td>

						<td colspan="7" class="left">Гос. номерной знак</td>
						<td colspan="11" class="bold border-bottom">{{ item.auto.numberplate }}</td>
					</tr>
					<tr>
						<td colspan="4"></td>
						<td colspan="41" class="little">(фамилия, имя, отчество)</td>
						<td colspan="15"></td>

						<td colspan="4" class="left">Заказчик</td>
						<td colspan="14" class="bold little bottom border-bottom">{{ item.customer.name }}</td>
					</tr>
					<tr>
						<td colspan="8" class="left">Удостоверение №</td>
						<td colspan="8" class="border-bottom">{{ item.driver.license }}</td>
						<td colspan="4">Класс</td>
						<td colspan="8" class="border-bottom"></td>
						<td colspan="32"></td>

						<td colspan="4"></td>
						<td colspan="14" class="little">(наименование)</td>
					</tr>
					<tr></tr>
					<tr>
						<td colspan="11" rowspan="2" class="middle left">Лицензионная карточка</td>
						<td colspan="14" class="border-bottom">стандартная/ограниченная</td>
						<td colspan="38" rowspan="2"></td>

						<td colspan="18" rowspan="2" class="bold little center bottom border-bottom">{{ item.customer.address}}</td>
					</tr>
					<tr>
						<td colspan="14" class="little">(ненужное зачеркнуть)</td>
					</tr>
					<tr>
						<td colspan="60"></td>

						<td colspan="18" class="little">(адрес, номер телефона)</td>
					</tr>
					<tr>
						<td colspan="12" class="left">Регистрационный номер №</td>
						<td colspan="10" class="border-bottom"></td>
						<td colspan="4">Серия</td>
						<td colspan="5" class="border-bottom"></td>
						<td colspan="2">№</td>
						<td colspan="8" class="border-bottom"></td>
						<td colspan="19"></td>

						<td colspan="18" class="border-bottom"></td>
					</tr>
					<tr>
						<td colspan="60"></td>

						<td colspan="18" class="little">(фамилия, и., о. ответственного лица)</td>
					</tr>
					<tr></tr>
					<tr>
						<td colspan="29" class="border-top-double border-left-double border-right-double border-bottom">Работа водителя и автобуса</td>
						<td colspan="1"></td>
						<td colspan="30" class="border-top-double border-left-double border-right-double border-bottom">Задание водителю</td>

						<td colspan="18"></td>
					</tr>
					<tr>
						<td colspan="6" rowspan="2" class="little middle border-top border-bottom border-left-double border-right-double">операция</td>
						<td colspan="5" rowspan="2" class="little middle border-top border-right-double border-bottom border-left-double">время по графику, ч.мин.</td>
						<td colspan="6" rowspan="2" class="little middle border-top border-right-double border-bottom border-left-double">нулевой пробег, км.</td>
						<td colspan="5" rowspan="2" class="little middle border-top border-right-double border-bottom border-left-double">показание спидометра</td>
						<td colspan="7" rowspan="2" class="little middle border-top border-right-double border-bottom border-left-double">время фактическое, число, месяц, ч.мин.</td>

						<td colspan="1"></td>

						<td colspan="13" rowspan="2" class="little middle border-top border-right-double border-bottom border-left-double">в чье рапоряжение (наименование и адрес заказчика)</td>
						<td colspan="9" class="little border-top border-right-double border-bottom border-left-double">время, ч.мин.</td>
						<td colspan="8" class="little border-top border-right-double border-bottom border-left-double">количество</td>

						<td colspan="6" rowspan="2" class="little border-top-double border-left-double border-right-double border-bottom">Операция</td>
						<td colspan="6" rowspan="2" class="little border-top-double border-left-double border-right-double border-bottom">Время, ч. мин</td>
						<td colspan="6" rowspan="2" class="little border-top-double border-left-double border-right-double border-bottom">Показание спидометра, км.</td>
					</tr>
					<tr>
						<td colspan="1"></td>
						<td colspan="5" class="little middle border-top border-right border-bottom border-left-double">прибытия</td>
						<td colspan="4" class="little middle border-top border-right-double border-bottom border-left">убытия</td>
						<td colspan="4" class="little middle border-top border-right border-bottom border-left-double">часов</td>
						<td colspan="4" class="little middle border-top border-right-double border-bottom border-left">ездок</td>
					</tr>
					<tr></tr>
					<tr>
						<td colspan="6"class="little middle border-top border-bottom-double border-left-double border-right-double">1</td>
						<td colspan="5"class="little middle border-top border-right-double border-bottom-bold border-left-double">2</td>
						<td colspan="6"class="little middle border-top border-right-double border-bottom-bold border-left-double">3</td>
						<td colspan="5"class="little middle border-top border-right-double border-bottom-bold border-left-double">4</td>
						<td colspan="7"class="little middle border-top border-right-double border-bottom-bold border-left-double">5</td>

						<td colspan="1"></td>

						<td colspan="13" class="little border-top border-right-double border-bottom-double border-left-double">13</td>
						<td colspan="5" class="little  border-top border-right border-bottom-double border-left">14</td>
						<td colspan="4" class="little  border-top border-right-double border-bottom-double border-left">15</td>
						<td colspan="4" class="little  border-top border-right border-bottom-double border-left">16</td>
						<td colspan="4" class="little  border-top border-right-double border-bottom-double border-left">17</td>

						<td colspan="6" class="little border-top border-left-double border-right-double border-bottom-double">18</td>
						<td colspan="6" class="little border-top border-left-double border-right-bold border-bottom-double">19</td>
						<td colspan="6" class="little border-top border-left-double border-right-double border-bottom-double">20</td>
					</tr>
					<tr>
						<td colspan="6" class="little border-top-double border-right-bold border-bottom border-left-double">выезд<br /> из гаража</td>
						<td colspan="5" class="little border-top-bold border-right-double border-bottom border-left-bold"></td>
						<td colspan="6" class="little border-top-bold border-right-double border-bottom border-left-double"></td>
						<td colspan="5" class="little border-top-bold border-right-double border-bottom border-left-double"></td>
						<td colspan="7" class="little border-top-bold border-right-bold border-bottom border-left-double"></td>

						<td colspan="1"></td>

						<td colspan="13" class="little bold left middle border-top border-right-double border-bottom border-left-double">{{ item.customer.name}}</td>
						<td colspan="5" class="little bold left border-top border-right border-bottom border-left-double"></td>
						<td colspan="4" class="little bold left border-top border-right-double border-bottom border-left"></td>
						<td colspan="4" class="little bold left border-top border-right border-bottom border-left-double"></td>
						<td colspan="4" class="little bold left border-top border-right-double border-bottom border-left"></td>

						<td colspan="6" class="little middle border-top-double border-left-double border-right-double border-bottom">прибытие</td>
						<td colspan="6" class="little border-top border-left-double border-right-bold border-bottom"></td>
						<td colspan="6" class="little border-top border-left-double border-right-double border-bottom"></td>
					</tr>
					<tr>
						<td colspan="6" class="little border-top border-right-bold border-bottom-double border-left-double">возвращение<br /> в гараж</td>
						<td colspan="5" class="little border-top border-right-double border-bottom-bold border-left-bold"></td>
						<td colspan="6" class="little border-top border-right-double border-bottom-bold border-left-double"></td>
						<td colspan="5" class="little border-top border-right-double border-bottom-bold border-left-double"></td>
						<td colspan="7" class="little border-top border-right-bold border-bottom-bold border-left-double"></td>

						<td colspan="1"></td>

						<td colspan="13" class="little bold left middle border-top border-right-double border-bottom border-left-double">{{ item.customer.address}}</td>
						<td colspan="5" class="little bold left border-top border-right border-bottom border-left-double"></td>
						<td colspan="4" class="little bold left border-top border-right-double border-bottom border-left"></td>
						<td colspan="4" class="little bold left border-top border-right border-bottom border-left-double"></td>
						<td colspan="4" class="little bold left border-top border-right-double border-bottom border-left"></td>

						<td colspan="6" class="little middle border-top border-left-double border-right-double border-bottom-double">убытие</td>
						<td colspan="6" class="little border-top border-left-double border-right-bold border-bottom-double"></td>
						<td colspan="6" class="little border-top border-left-double border-right-double border-bottom-double"></td>
					</tr>
					<tr>
						<td colspan="29" class="min">&nbsp;</td>
						<td colspan="1"></td>

						<td colspan="13" rowspan="2" class="little bold left middle border-top border-right-double border-bottom border-left-double"></td>
						<td colspan="5" rowspan="2"class="little bold left border-top border-right border-bottom border-left-double"></td>
						<td colspan="4" rowspan="2"class="little bold left border-top border-right-double border-bottom border-left"></td>
						<td colspan="4" rowspan="2"class="little bold left border-top border-right border-bottom border-left-double"></td>
						<td colspan="4" rowspan="2"class="little bold left border-top border-right-double border-bottom border-left"></td>

						<td colspan="18"></td>
					</tr>
					<tr>
						<td colspan="29" class="border-top-double border-right-double border-bottom border-left-double">Движение горючего</td>

						<td colspan="1"></td>

						<td colspan="18"></td>
					</tr>
					<tr>
						<td colspan="6" class="little border-top border-right-double border-bottom border-left-double">горючее</td>
						<td colspan="5" rowspan="3" class="little middle border-top border-right-double border-bottom border-left-double">выдано, л.</td>
						<td colspan="9" class="little border-top border-right-double border-bottom border-left-double">остаток при</td>
						<td colspan="4" rowspan="3" class="little middle border-top border-right-double border-bottom border-left-double">сдано, л.</td>
						<td colspan="5" rowspan="3" class="little border-top border-right-double border-bottom border-left-double">коэффициент изменения нормы</td>

						<td colspan="1"></td>

						<td colspan="13" rowspan="2" class="little bold left middle border-top border-right-double border-bottom border-left-double"></td>
						<td colspan="5" rowspan="2" class="little bold left border-top border-right border-bottom border-left-double"></td>
						<td colspan="4" rowspan="2" class="little bold left border-top border-right-double border-bottom border-left"></td>
						<td colspan="4" rowspan="2" class="little bold left border-top border-right border-bottom border-left-double"></td>
						<td colspan="4" rowspan="2" class="little bold left border-top border-right-double border-bottom border-left"></td>

						<td colspan="4" class="left">Заказчик</td>
						<td colspan="7" class="border-bottom"></td>
						<td colspan="1"></td>
						<td colspan="6" class="border-bottom"></td>
					</tr>
					<tr>
						<td colspan="3" rowspan="2" class="little middle border-top border-right border-bottom border-left-double">марка</td>
						<td colspan="3" rowspan="2" class="little border-top border-right-double border-bottom border-left">код марки</td>
						<td colspan="4" rowspan="2" class="little middle border-top border-right border-bottom border-left-double">выезде, л.</td>
						<td colspan="5" rowspan="2" class="little middle border-top border-right-double border-bottom border-left">выезде, л.</td>

						<td colspan="1"></td>

						<td colspan="4"></td>
						<td colspan="7" class="little">(должность)</td>
						<td colspan="1"></td>
						<td colspan="6" class="little">(подпись)</td>
					</tr>
					<tr>
						<td colspan="1"></td>

						<td colspan="13" rowspan="2" class="little bold left middle border-top border-right-double border-bottom-double border-left-double"></td>
						<td colspan="5" rowspan="2" class="little bold left border-top border-right border-bottom-double border-left-double"></td>
						<td colspan="4" rowspan="2" class="little bold left border-top border-right-double border-bottom-double border-left"></td>
						<td colspan="4" rowspan="2" class="little bold left border-top border-right border-bottom-double border-left-double"></td>
						<td colspan="4" rowspan="2" class="little bold left border-top border-right-double border-bottom-double border-left"></td>

						<td colspan="4" rowspan="3" class="little middle">М.П. или штампа</td>
						<td colspan="6"></td>
						<td colspan="8" class="border-bottom">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" class="little border-top border-right border-bottom-double border-left-double">6</td>
						<td colspan="3" class="little border-top border-right-double border-bottom-bold border-left">7</td>
						<td colspan="5" class="little border-top border-right-double border-bottom-bold border-left-double">8</td>
						<td colspan="4" class="little border-top border-right border-bottom-bold border-left">9</td>
						<td colspan="5" class="little border-top border-right-double border-bottom-bold border">10</td>
						<td colspan="4" class="little border-top border-right border-bottom-bold border-left">11</td>
						<td colspan="5" class="little border-top border-right-double border-bottom-bold border">12</td>

						<td colspan="1"></td>

						<td colspan="6"></td>
						<td colspan="8" class="little">(расшифровка подписи)</td>
					</tr>
					<tr>
						<td colspan="3" class="little border-top border-right-bold border-bottom border-left-double">&nbsp;</td>
						<td colspan="3" class="little border-top border-right-double border-bottom border-left"></td>
						<td colspan="5" class="little border-top border-right-double border-bottom border-left-double"></td>
						<td colspan="4" class="little border-top border-right border-bottom border-left"></td>
						<td colspan="5" class="little border-top border-right-double border-bottom border"></td>
						<td colspan="4" class="little border-top border-right border-bottom border-left"></td>
						<td colspan="5" class="little border-top border-right-bold border-bottom border"></td>

						<td colspan="1"></td>

						<td colspan="7">Особые отметки</td>
						<td colspan="23" class="border-bottom"></td>

						<td colspan="14"></td>
					</tr>
					<tr>
						<td colspan="3" class="little border-top border-right-bold border-bottom-double border-left-double">&nbsp;</td>
						<td colspan="3" class="little border-top border-right-double border-bottom-bold border-left"></td>
						<td colspan="5" class="little border-top border-right-double border-bottom-bold border-left-double"></td>
						<td colspan="4" class="little border-top border-right border-bottom-bold border-left"></td>
						<td colspan="5" class="little border-top border-right-double border-bottom-bold border"></td>
						<td colspan="4" class="little border-top border-right border-bottom-bold border-left"></td>
						<td colspan="5" class="little border-top border-right-bold border-bottom-bold border"></td>

						<td colspan="1"></td>

						<td colspan="30" class="border-bottom"></td>

						<td colspan="18">Заполняется организацией</td>
					</tr>
					<tr>
						<td colspan="6" rowspan="2" class="middle border">ПОДПИСЬ</td>
						<td colspan="5" class="little middle border">заправщика</td>
						<td colspan="4" class="little middle border">механика</td>
						<td colspan="5" class="little middle border">механика</td>
						<td colspan="4" class="little middle border">заправщика</td>
						<td colspan="5" class="little middle border">заправщика</td>

						<td colspan="1"></td>

						<td colspan="30" class="border-bottom">&nbsp;</td>

						<td colspan="5" rowspan="3" class="little middle border-top-double border-right-double border-bottom border-left-double">Расчет стоимости</td>
						<td colspan="5" rowspan="3" class="little middle border-top-double border-right-double border-bottom border-left-double">Время оплачи-ваемое, ч.мин.</td>
						<td colspan="3" rowspan="3" class="little middle border-top-double border-right-double border-bottom border-left-double">Пробег всего, км.</td>
						<td colspan="5" rowspan="3" class="little middle border-top-double border-right-double border-bottom border-left-double">Всего к оплате, руб. коп.</td>
					</tr>
					<tr>
						<td colspan="5" class="border"></td>
						<td colspan="4" class="border"></td>
						<td colspan="5" class="border"></td>
						<td colspan="4" class="border"></td>
						<td colspan="5" class="border"></td>

						<td colspan="31">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="6" rowspan="3" class="little middle border">Серия и номера выданных талонов на горючее</td>
						<td colspan="16" class="border">&nbsp;</td>
						<td colspan="7" rowspan="3" class="little middle border">Выдано по заравочному листу №</td>

						<td colspan="1"></td>
						<td colspan="30" class="left top">Автобус технически исправен.</td>
					</tr>
					<tr>
						<td colspan="16" rowspan="2" class="border"></td>

						<td colspan="4"></td>
						<td colspan="12" class="right bottom">Выезд разрешен. Механик</td>
						<td colspan="1"></td>
						<td colspan="5" class="border-bottom"></td>
						<td colspan="1"></td>
						<td colspan="8" class="border-bottom">{{ item.mechanic }}</td>

						<td colspan="5" class="little middle border-top border-right-double border-bottom-double border-left-double">21</td>
						<td colspan="5" class="little middle border-top border-right-double border-bottom-double border-left-double">22</td>
						<td colspan="3" class="little middle border-top border-right-double border-bottom-double border-left-double">23</td>
						<td colspan="5" class="little middle border-top border-right-double border-bottom-double border-left-double">24</td>
					</tr>
					<tr>
						<td colspan="17"></td>
						<td colspan="5" class="little">(подпись)</td>
						<td colspan="1"></td>
						<td colspan="8" class="little">(расшифровка подписи)</td>

						<td colspan="5" rowspan="3" class="little middle border-top-double border-right-double border-bottom border-left-double">Выполнено</td>
						<td colspan="5" rowspan="3" class="little middle border-top-double border-right-double border-bottom border-left-double"></td>
						<td colspan="3" rowspan="3" class="little middle border-top-double border-right-double border-bottom border-left-double"></td>
						<td colspan="5" rowspan="3" class="little middle border-top-double border-right-double border-bottom border-left-double"></td>
					</tr>
					<tr></tr>
					<tr>
						<td colspan="24" class="left">Водительское удостоверение проверил, задание выдал,</td>
						<td colspan="9"></td>
						<td colspan="12" class="right">Автобус принял. Водитель</td>
						<td colspan="1"></td>
						<td colspan="5" class="border-bottom"></td>
						<td colspan="1"></td>
						<td colspan="8" class="border-bottom">{{ item.driver.shortName }}</td>
					</tr>
					<tr>
						<td colspan="8" class="left">выдать горючего</td>
						<td colspan="16" class="border-bottom"></td>
						<td colspan="5">литров</td>

						<td colspan="17"></td>
						<td colspan="5" class="little">(подпись)</td>
						<td colspan="1"></td>
						<td colspan="8" class="little">(расшифровка подписи)</td>

						<td colspan="5" rowspan="2" class="little middle border-top border-right-double border-bottom border-left-double">Тариф, руб. коп.</td>
						<td colspan="5" rowspan="2" class="little middle border-top border-right-double border-bottom border-left-double"></td>
						<td colspan="3" rowspan="2" class="little middle border-top border-right-double border-bottom border-left-double"></td>
						<td colspan="5" rowspan="2" class="little middle border-top border-right-double border-bottom border-left-double"></td>
					</tr>
					<tr>
						<td colspan="8"></td>
						<td colspan="16" class="little">(прописью)</td>

						<td colspan="12"></td>

						<td colspan="12" rowspan="2" class="middle left">При возвращении автобус</td>
						<td colspan="6" class="little bottom border-bottom">исправен</td>
						<td colspan="6"></td>
					</tr>
					<tr>
						<td colspan="5" class="left">Диспетчер</td>
						<td colspan="1"></td>
						<td colspan="5" class="border-bottom"></td>
						<td colspan="1"></td>
						<td colspan="12" class="border-bottom">{{ item.dispatcher }}</td>

						<td colspan="12"></td>
						<td colspan="6" class="little top border-top">неисправен</td>
						<td colspan="6"></td>

						<td colspan="5" rowspan="2" class="little middle border-top border-right-double border-bottom-double border-left-double">К оплате, руб. коп.</td>
						<td colspan="5" rowspan="2" class="little middle border-top border-right-double border-bottom-double border-left-double"></td>
						<td colspan="3" rowspan="2" class="little middle border-top border-right-double border-bottom-double border-left-double"></td>
						<td colspan="5" rowspan="2" class="little middle border-top border-right-double border-bottom-double border-left-double"></td>
					</tr>
					<tr>
						<td colspan="6"></td>
						<td colspan="5" class="little">(подпись)</td>
						<td colspan="1"></td>
						<td colspan="12" class="little">(расшифровка подписи)</td>

						<td colspan="36"></td>
					</tr>
					<tr>
						<td colspan="12" class="little left bottom">Водитель по состоянию здоровья</td>

						<td colspan="24"></td>

						<td colspan="9" class="left bold">Сдал водитель</td>
						<td colspan="5" class="border-bottom"></td>
						<td colspan="1"></td>
						<td colspan="9" class="border-bottom">{{ item.driver.shortName }}</td>

						<td colspan="18"></td>
					</tr>
					<tr>
						<td colspan="12" class="little left">к управлению автобусом допущен</td>
						<td colspan="6" class="border-bottom"></td>
						<td colspan="1"></td>
						<td colspan="3" class="border-bottom"></td>
						<td colspan="1"></td>
						<td colspan="7" class="border-bottom"></td>

						<td colspan="15"></td>

						<td colspan="5" class="little">(подпись)</td>
						<td colspan="1"></td>
						<td colspan="9" class="little">(расшифровка подписи)</td>

						<td colspan="18"></td>
					</tr>
					<tr>
						<td colspan="12"></td>
						<td colspan="6" class="little">(должность)</td>
						<td colspan="1"></td>
						<td colspan="3" class="little">(подпись)</td>
						<td colspan="1"></td>
						<td colspan="7" class="little">(расшифровка подписи)</td>

						<td colspan="6"></td>
						<td colspan="9" class="bold left">Принял механик</td>
						<td colspan="5" class="border-bottom"></td>
						<td colspan="1"></td>
						<td colspan="9" class="border-bottom">{{ item.mechanic }}</td>

						<td colspan="6" class="left bold">Таксировщик</td>
						<td colspan="4" class="border-bottom"></td>
						<td colspan="1"></td>
						<td colspan="7" class="border-bottom"></td>
					</tr>
					<tr>
						<td colspan="6" class="small">Место для штампа</td>
						<td colspan="39"></td>
						<td colspan="5" class="little">(подпись)</td>
						<td colspan="1"></td>
						<td colspan="9" class="little">(расшифровка подписи)</td>

						<td colspan="6"></td>
						<td colspan="4" class="little">(подпись)</td>
						<td colspan="1"></td>
						<td colspan="7" class="little">(расшифровка подписи)</td>
					</tr>
				</tbody>
			</table>
		</div>
		<br />
		<div class="waybill-cover">
			<table border="0" cellpadding="0" cellspacing="0">
				<tbody>
					<tr>
						<td colspan="18"></td>
						<td colspan="1" rowspan="100"></td>
						<td colspan="1" rowspan="100" class="middle border-right border-left">Л<br />И<br />Н<br />И<br />Я<br /> <br />О<br />Т<br />Р<br />Е<br />З<br />А</td>
						<td colspan="1" rowspan="100"></td>
						<td colspan="57"></td>
					</tr>
					<tr>
						<td colspan="18"></td>

						<td colspan="57" class="right small">Оборотная сторона формы № 6 (спец)</td>
					</tr>
					<tr>
						<td colspan="18">&nbsp;</td>
						
						<td colspan="57"></td>
					</tr>
					<tr></tr>
					<tr>
						<td colspan="18" class="bold">ТАЛОН ЗАКАЗЧИКА</td>
						
						<td colspan="50" class="border-top-double border-right-double border-bottom border-left-double">Маршрут движения (заполняется заказчиком)</td>
					</tr>
					<tr>
						<td colspan="8" class="bold">к путевому листу</td>
						<td colspan="2" class="border-bottom"></td>
						<td colspan="2" class="bold">№</td>
						<td colspan="6" class="border-bottom"></td>

						<td colspan="8" rowspan="3" class="middle border-top border-left-double border-right-double border-bottom">номер ездки</td>
						<td colspan="14" rowspan="3" class="middle border-top border-right-double border-bottom">откуда</td>
						<td colspan="14" rowspan="3" class="middle border-top border-right-double border-bottom">куда</td>
						<td colspan="14" class="border-top border-bottom border-right-double">пробег, км</td>
					</tr>
					<tr>
						<td colspan="8" class="bold"></td>
						<td colspan="2" class="little">(серия)</td>
						<td colspan="8"></td>

						<td colspan="7" rowspan="2" class="middle border-right border-bottom">с пассажирами</td>
						<td colspan="7" rowspan="2" class="middle border-right-double border-bottom">без пассажиров</td>
					</tr>
					<tr>
						<td colspan="1"></td>
						<td colspan="1" class="bold">от</td>
						<td colspan="1" class="bold right">&laquo;</td>
						<td colspan="2" class="bold border-bottom">{{ day }}</td>
						<td colspan="1" class="bold left">&raquo;</td>
						<td colspan="5" class="bold border-bottom">{{ month }}</td>
						<td colspan="1"></td>
						<td colspan="3" class="bold border-bottom">{{ year }}</td>
						<td colspan="1" class="bold left">г.</td>
						<td colspan="2"></td>

					</tr>
					<tr></tr>
					<tr>
						<td colspan="5" class="left bottom">Организация:</td>
						<td colspan="13" class="bottom bold little border-bottom">{{ company.name }}</td>
						
						<td colspan="8" class=" border-right-double border-left-double border-bottom-double">25</td>
						<td colspan="14" class="border-right-double border-bottom-double">26</td>
						<td colspan="14" class="border-right-double border-bottom-double">27</td>
						<td colspan="7" class="border-right border-bottom-double">28</td>
						<td colspan="7" class="border-right-double border-bottom-double">29</td>
					</tr>
					<tr>
						<td colspan="6"></td>
						<td colspan="12" class="little">(наименование)</td>

						<td colspan="8" class=" border-right-double border-left-double border-bottom">&nbsp;</td>
						<td colspan="14" class="border-right-double border-bottom"></td>
						<td colspan="14" class="border-right-double border-bottom"></td>
						<td colspan="7" class="border-right border-bottom"></td>
						<td colspan="7" class="border-right-double border-bottom"></td>
					</tr>
					<tr>
						<td colspan="18" class="bottom bold little border-bottom">{{ company.requisites.address }}</td>

						<td colspan="8" class=" border-right-double border-left-double border-bottom">&nbsp;</td>
						<td colspan="14" class="border-right-double border-bottom"></td>
						<td colspan="14" class="border-right-double border-bottom"></td>
						<td colspan="7" class="border-right border-bottom"></td>
						<td colspan="7" class="border-right-double border-bottom"></td>
					</tr>
					<tr>
						<td colspan="18" class="little">(адрес, номер телефона)</td>

						<td colspan="8" class=" border-right-double border-left-double border-bottom">&nbsp;</td>
						<td colspan="14" class="border-right-double border-bottom"></td>
						<td colspan="14" class="border-right-double border-bottom"></td>
						<td colspan="7" class="border-right border-bottom"></td>
						<td colspan="7" class="border-right-double border-bottom"></td>
					</tr>
					<tr>
						<td colspan="3" class="bottom left">Автобус</td>
						<td colspan="15" class="border-bottom bold">{{ item.auto.model }}</td>

						<td colspan="8" class=" border-right-double border-left-double border-bottom"></td>
						<td colspan="14" class="border-right-double border-bottom"></td>
						<td colspan="14" class="border-right-double border-bottom"></td>
						<td colspan="7" class="border-right border-bottom"></td>
						<td colspan="7" class="border-right-double border-bottom"></td>
					</tr>
					<tr>
						<td colspan="3"></td>
						<td colspan="15" class="little">(тип, марка)</td>

						<td colspan="8" class=" border-right-double border-left-double border-bottom">&nbsp;</td>
						<td colspan="14" class="border-right-double border-bottom"></td>
						<td colspan="14" class="border-right-double border-bottom"></td>
						<td colspan="7" class="border-right border-bottom"></td>
						<td colspan="7" class="border-right-double border-bottom"></td>
					</tr>
					<tr>
						<td colspan="12" class="left">Государственный номерной знак</td>
						<td colspan="6" class="bold border-bottom">{{ item.auto.numberplate }}</td>

						<td colspan="8" class=" border-right-double border-left-double border-bottom-double"></td>
						<td colspan="14" class="border-right-double border-bottom-double"></td>
						<td colspan="14" class="border-right-double border-bottom-double"></td>
						<td colspan="7" class="border-right border-bottom-double"></td>
						<td colspan="7" class="border-right-double border-bottom-double"></td>
					</tr>
					<tr></tr>
					<tr>
						<td colspan="18" class="big">&nbsp;</td>
						
						<td colspan="57"></td>
					</tr>
					<tr>
						<td colspan="4" class="left bottom">Заказчик</td>
						<td colspan="14" class="bold little bottom border-bottom">{{ item.customer.name }}</td>

						<td colspan="6" rowspan="2" class="middle center little">М.П. или<br/>штампа</td>
						<td colspan="3"></td>
						<td colspan="4" class="bold bottom">Заказчик</td>
						<td colspan="6" class="border-bottom"></td>
						<td colspan="1"></td>
						<td colspan="6" class="border-bottom"></td>
						<td colspan="1"></td>
						<td colspan="6" class="border-bottom"></td>
					</tr>
					<tr>
						<td colspan="4"></td>
						<td colspan="14" class="little">(наименование)</td>

						<td colspan="7"></td>
						<td colspan="6" class="little">(должность)</td>
						<td colspan="1"></td>
						<td colspan="6" class="little">(подпись)</td>
						<td colspan="1"></td>
						<td colspan="9" class="left small">(расшифровка подписи)</td>
					</tr>
					<tr>
						<td colspan="18" class="bold little border-bottom">{{ item.customer.address }}</td>

						<td colspan="50" class="middle border-top-double border-right-double border-bottom border-left-double">Простои на линии</td>
						<td colspan="7" rowspan="3" class="middle center border-top-double border-right-double border-left-double">Подпись ответственного работника</td>
					</tr>
					<tr>
						<td colspan="18" class="little">(адрес, номер телефона)</td>

						<td colspan="28" rowspan="2" class="middle border-right-double border-left-double">наименование</td>
						<td colspan="10" rowspan="2" class="middle border-right-double ">код</td>
						<td colspan="12" class="border-right-double border-left-double border-bottom">время, ч. мин.</td>
					</tr>
					<tr>
						<td colspan="18"></td>

						<td colspan="6" class=" border-right border-left-double">начало</td>
						<td colspan="6" class=" border-right-double border-left">окончание</td>
					</tr>
					<tr>
						<td colspan="18" class="border-bottom"></td>

						<td colspan="28" class="border-right-double border-left-double border-bottom"></td>
						<td colspan="10" class="border-right-double border-bottom"></td>
						<td colspan="6" class=" border-right border-left-double border-bottom"></td>
						<td colspan="6" class=" border-right-double border-left border-bottom"></td>
						<td colspan="7" class=" border-right-double border-left-double border-bottom"></td>
					</tr>
					<tr>
						<td colspan="18" class="little">(фамилия, и., о. ответственного лица)</td>

						<td colspan="28" class="border-right-double border-left-double border-bottom">30</td>
						<td colspan="10" class="border-right-double border-bottom">31</td>
						<td colspan="6" class=" border-right border-left-double border-bottom">32</td>
						<td colspan="6" class=" border-right-double border-left border-bottom">33</td>
						<td colspan="7" class=" border-right-double border-left-double border-bottom">34</td>
					</tr>
					<tr>
						<td colspan="6" rowspan="2" class="middle center border-top-double border-left-double border-right-double border-bottom">Операция</td>
						<td colspan="6" rowspan="2" class="middle center border-top-double border-left-double border-right-double border-bottom">Время, ч. мин</td>
						<td colspan="6" rowspan="2" class="middle center border-top-double border-left-double border-right-double">Показание спидометра, км.</td>

						<td colspan="28" class="border-right border-bottom border-left-double  border-top-double"></td>
						<td colspan="10" class="border-right border-left-bold border-top-bold border-bottom"></td>
						<td colspan="6" class="border-right border-top-bold border-bottom"></td>
						<td colspan="6" class="border-right-bold border-top-bold border-bottom"></td>
						<td colspan="7" class=" border-right-double border-top-double border-bottom"></td>
					</tr>
					<tr>

						<td colspan="28" class="border-right border-bottom-double border-left-double"></td>
						<td colspan="10" class="border-right border-left-bold border-bottom-bold"></td>
						<td colspan="6" class="border-right border-bottom-bold"></td>
						<td colspan="6" class="border-right-bold border-bottom-bold"></td>
						<td colspan="7" class=" border-right-double border-bottom-double"></td>
					</tr>
					<tr>
						<td colspan="6" class="little border-top border-left-double border-right-double border-bottom-double">18</td>
						<td colspan="6" class="little border-top border-left-double border-right-bold border-bottom-double">19</td>
						<td colspan="6" class="little border-top border-left-double border-right-double border-bottom-double">20</td>

						<td colspan="57"></td>
					</tr>
					<tr></tr>
					<tr>
						<td colspan="6" class="middle border-top-double border-left-double border-right-double border-bottom">прибытие</td>
						<td colspan="6" class="border-left-double border-right-bold border-bottom"></td>
						<td colspan="6" class="border-left-double border-right-double border-bottom"></td>

						<td colspan="40" class="border-right-double border-left-double border-top-double border-bottom">Результат работы автобуса</td>
						<td colspan="17"></td>
					</tr>
					<tr>
						<td colspan="6" class="middle border-top border-left-double border-right-double border-bottom-double">убытие</td>
						<td colspan="6" class="border-top border-left-double border-right-bold border-bottom-double"></td>
						<td colspan="6" class="border-top border-left-double border-right-double border-bottom-double"></td>

						<td colspan="15" class="border-right-double border-left-double  border-bottom">расход горючего</td>
						<td colspan="15" class="border-right-double border-left-double  border-bottom">время в наряде, ч. мин.</td>
						<td colspan="10" class="border-right-double border-left-double  border-bottom">пробег, км</td>
						<td colspan="17"></td>

					</tr>
					<tr>
						<td colspan="18"></td>

						<td colspan="7" class="middle border-right border-left-double  border-bottom">по норме</td>
						<td colspan="8" class="middle border-right-double  border-bottom">фактически</td>
						<td colspan="7" class="middle border-right border-left-double  border-bottom">всего</td>
						<td colspan="8" class="little middle border-right-double border-bottom">в том числе простои по техническим неисправностям</td>
						<td colspan="5" class="middle border-right border-bottom">всего</td>
						<td colspan="5" class=" middle little border-right-double border-left  border-bottom">в том числе с пассажирами</td>
						<td colspan="17"></td>
					</tr>
					<tr>
						<td colspan="4" class="bottom">Заказчик</td>
						<td colspan="6" class="border-bottom"></td>
						<td colspan="1"></td>
						<td colspan="7" class="border-bottom"></td>

						<td colspan="7" class="border-right border-left-double  border-bottom-bold">35</td>
						<td colspan="8" class="border-right-double border-bottom-bold">36</td>
						<td colspan="7" class="border-right border-left-double  border-bottom-bold">37</td>
						<td colspan="8" class="border-right-double border-bottom-bold">38</td>
						<td colspan="5" class="border-right border-left-double  border-bottom-bold">39</td>
						<td colspan="5" class="border-right-double border-bottom-bold">40</td>
						<td colspan="17"></td>
					</tr>
					<tr>
						<td colspan="4"></td>
						<td colspan="6" class="little">(должность)</td>
						<td colspan="1"></td>
						<td colspan="7" class="little">(подпись)</td>

						<td colspan="7" class="border-right border-left-bold  border-bottom-bold">&nbsp;</td>
						<td colspan="8" class="border-right-double border-bottom-bold"></td>
						<td colspan="7" class="border-right border-left-double  border-bottom-bold"></td>
						<td colspan="8" class="border-right-double border-bottom-bold"></td>
						<td colspan="5" class="border-right border-left-double  border-bottom-bold"></td>
						<td colspan="5" class="border-right-bold border-bottom-bold"></td>
						<td colspan="17"></td>
					</tr>
					<tr>
						<td colspan="6" rowspan="2" class="little">М.П. или<br />штампа</td>
						<td colspan="4"></td>
						<td colspan="8" class="border-bottom">&nbsp;</td>
						
					</tr>
					<tr>
						<td colspan="4"></td>
						<td colspan="8" class="little">(расшифровка подписи)</td>
						
						<td colspan="6">Таксировка:</td>
						<td colspan="36" class="border-bottom"></td>
					</tr>
					<tr>
						<td colspan="18">Заполняется организацией</td>

						<td colspan="42" class="border-bottom"></td>
						<td colspan="1"></td>
						<td colspan="14" class="border-right-double border-left-double border-top-double border-bottom">Зарплата</td>
					</tr>
					<tr>
						<td colspan="5" rowspan="2" class="little middle border-top-double border-right-double border-bottom border-left-double">Расчет стоимости</td>
						<td colspan="5" rowspan="2" class="little middle border-top-double border-right-double border-bottom border-left-double">Время оплачи-ваемое, ч.мин.</td>
						<td colspan="3" rowspan="2" class="little middle border-top-double border-right-double border-bottom border-left-double">Пробег всего, км.</td>
						<td colspan="5" rowspan="2" class="little middle border-top-double border-right-double border-bottom border-left-double">Всего к оплате, руб. коп.</td>

						<td colspan="42" class="border-bottom"></td>
						<td colspan="1"></td>
						<td colspan="7" class="border-right border-left-double border-bottom">Код</td>
						<td colspan="7" class="border-right-double border-left-double border-bottom">сумма, руб. коп.</td>
					</tr>
					<tr>

						<td colspan="42" class="border-bottom"></td>
						<td colspan="1"></td>
						<td colspan="7" class="border-right border-left-double border-bottom">41</td>
						<td colspan="7" class="border-right-double border-left-double border-bottom">42</td>
					</tr>
					<tr>
						<td colspan="5" class="little middle border-top border-right-double border-bottom-double border-left-double">21</td>
						<td colspan="5" class="little middle border-top border-right-double border-bottom-double border-left-double">22</td>
						<td colspan="3" class="little middle border-top border-right-double border-bottom-double border-left-double">23</td>
						<td colspan="5" class="little middle border-top border-right-double border-bottom-double border-left-double">24</td>

						<td colspan="42" class="border-bottom">&nbsp;</td>
						<td colspan="1"></td>
						<td colspan="7" class="border-right border-left-bold border-top-bold border-bottom"></td>
						<td colspan="7" class="border-right-bold bborder-left-bold border-top-bold border-bottom"></td>
					</tr>
					<tr>
						<td colspan="5" class="little middle border-top-double border-right-double border-bottom border-left-double">Выполнено</td>
						<td colspan="5" class="little middle border-top-double border-right-double border-bottom border-left-double"></td>
						<td colspan="3" class="little middle border-top-double border-right-double border-bottom border-left-double"></td>
						<td colspan="5" class="little middle border-top-double border-right-double border-bottom border-left-double"></td>

						<td colspan="42" class="border-bottom"></td>
						<td colspan="1">&nbsp;</td>
						<td colspan="7" class="border-right border-left-bold border-top border-bottom"></td>
						<td colspan="7" class="border-right-bold bborder-left-bold border-top border-bottom"></td>
					</tr>
					<tr>
						<td colspan="5" class="little middle border-top border-right-double border-bottom border-left-double">Тариф, руб. коп.</td>
						<td colspan="5" class="little middle border-top border-right-double border-bottom border-left-double"></td>
						<td colspan="3" class="little middle border-top border-right-double border-bottom border-left-double"></td>
						<td colspan="5" class="little middle border-top border-right-double border-bottom border-left-double"></td>

						<td colspan="42" class="border-bottom"></td>
						<td colspan="1">&nbsp;</td>
						<td colspan="7" class="border-right border-left-bold border-top border-bottom"></td>
						<td colspan="7" class="border-right-bold border-left border-top border-bottom"></td>
					</tr>
					<tr>
						<td colspan="5" class="small middle border-top border-right-double border-bottom-double border-left-double">К оплате, руб. коп.</td>
						<td colspan="5" class="little middle border-top border-right-double border-bottom-double border-left-double"></td>
						<td colspan="3" class="little middle border-top border-right-double border-bottom-double border-left-double"></td>
						<td colspan="5" class="little middle border-top border-right-double border-bottom-double border-left-double"></td>

						<td colspan="42" class="border-bottom"></td>
						<td colspan="1">&nbsp;</td>
						<td colspan="7" class="border-right border-left-bold border-top border-bottom-bold"></td>
						<td colspan="7" class="border-right-bold border-left border-top border-bottom-bold"></td>
					</tr>
					<tr>
						<td colspan="18">&nbsp;</td>
						
						<td colspan="57"></td>
					</tr>
					<tr>
						<td colspan="4" class="bottom">Заказчик</td>
						<td colspan="6" class="border-bottom"></td>
						<td colspan="1"></td>
						<td colspan="6" class="border-bottom"></td>
						<td colspan="1"></td>

						<td colspan="57"></td>

					</tr>
					<tr>
						<td colspan="4"></td>
						<td colspan="6" class="little">(должность)</td>
						<td colspan="1"></td>
						<td colspan="6" class="little">(подпись)</td>
						<td colspan="1"></td>

						<td colspan="57"></td>
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
