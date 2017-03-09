<template>
    <div>
    </div>
</template>

<script>
	export default {
		props: { item: Object },
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
