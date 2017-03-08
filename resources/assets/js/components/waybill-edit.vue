<template>
    <div class="flex">
        <div class="flex-grow">

            <div>
                <form class="form-horizontal row">
                    <h3 class="form-control-static col-md-12">Автомобиль</h3>
                    <div class="col-md-6">
                        <div class="form-group" > <label for="model">Модель</label> <input type="text" class="form-control" id="model" disabled :value="current.auto.model"> </div>
                        <div class="form-group"> <label for="numberplate">Номерной знак</label> <input type="text" class="form-control" id="numberplate" disabled :value="current.auto.numberplate"> </div>
                        <div class="form-group"> <label for="type">Тип</label> <input type="text" class="form-control" id="type" disabled :value="current.auto.type"> </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="driver">Водитель</label>
                            <select class="form-control" id="driver" v-model="driver_id">
                                <option v-for="d in getDrivers" :value="d.id">{{ fullName(d) }}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="dispatcher">Диспетчер</label>
                            <select class="form-control" id="dispatcher" v-model="driver_id">
                                <option v-for="d in getDispatchers" :value="d.id">{{ fullName(d) }}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="mechanic">Механик</label>
                            <select class="form-control" id="mechanic" v-model="driver_id">
                                <option v-for="m in getMechanics" :value="m.id">{{ fullName(m) }}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="refueler">Заправщик</label>
                            <select class="form-control" id="refueler" v-model="driver_id">
                                <option v-for="r in getRefuelers" :value="r.id">{{ fullName(r) }}</option>
                            </select>
                        </div>
                    </div>

                    <!-- <h3 class="form-control-static col-md-12">Заказчик</h3>
                    <div class="col-md-4">
                        <div class="form-group"> <label for="name">Наименование</label> <input type="text" class="form-control" id="name" disabled :value="waybill.customer.name"> </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="address_customer">Адрес</label>
                            <input type="text" class="form-control" id="address_customer" v-model="organization_address" />
                        </div>
                    </div> -->

                    <!-- <h3 class="form-control-static col-md-12">Подрядчик</h3>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name_contractor">Наименование</label>
                            <select class="form-control" id="name_contractor" v-model="contractor_id" @change="setContractor">
                                <option v-for="contractor in contractors" :value="contractor.id">{{ contractor.name }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="address_contractor">Адрес</label>
                            <input type="text" class="form-control" id="address_contractor" v-model="contractor_address" />
                        </div>
                    </div> -->

                </form>
            </div>

        </div>

        <div class="btn-group-vertical" role="group">
            <button-cancel :item="waybill" :current="waybill" component="waybill">Отмена</button-cancel>
            <button-print v-for="print in getPrints[waybill.auto.type_id]" :print="print" :item="current"></button-print>
        </div>

    </div>
</template>

<script>

import { mapActions, mapGetters } from 'vuex'
import { fullName, shortName } from './helpers'
import buttonCancel from './button-cancel.vue'
import buttonPrint from './button-print.vue'

export default {
    props: { waybill: Object },
    data() {
        return {
            current: {
                auto: {
                    model: this.waybill.auto.model,
                    numberplate: this.waybill.auto.numberplate,
                    type: this.waybill.auto.type.name,
                    driver: {
                        id: this.waybill.auto.driver
                    }
                },
                customer: {
                    name: this.waybill.customer.name,
                    address: this.waybill.customer.address,
                    phone: this.waybill.customer.phone
                },

            },
            driver_id: this.waybill.auto.driver_id,
            staff_ids: this.waybill.auto.staff_ids,
            contractor_id: '',
            // contractor_address: '',
            organization_address: this.waybill.customer.address,
            organization_phone: this.waybill.customer.phone ? this.waybill.customer.phone : ''

        }
    },
    mounted() {
        // FIXME: изменить hardcode на функцию определения id по имени
        let driver = this.current.employers.find( (e) => e.position_id == 1 )
        let dispatcher = this.current.employers.find( (e) => e.position_id == 2 )
        let mechanic = this.current.employers.find( (e) => e.position_id == 3 )
        let refueler = this.current.employers.find( (e) => e.position_id == 4 )

        this.current.driver_id = driver ? driver.id : ''
        this.current.dispatcher_id = dispatcher ? dispatcher.id : ''
        this.current.mechanic_id = mechanic ? mechanic.id : ''
        this.current.refueler_id = refueler ? refueler.id : ''
    },
    methods: {
        ...mapActions([ 'edit', 'cancel' ]),
        shortName: shortName,
        fullName: fullName,
        // setContractor() {
        //     this.contractor_address = this.contractors.find( waybill => waybill.id === this.contractor_id ).address
        // }
    },
    computed: {
        ...mapGetters([ 'getPrints', 'getOrganizations', 'getDrivers', 'getDispatchers', 'getMechanics', 'getRefuelers' ]),
        // current: function() {
        //     let driver = this.drivers.find( item => item.id === this.driver_id )
        //     return {
        //         organization: { // FIXME: change organization to customer in WaybillController
        //             name: this.waybill.organization.name,
        //             address: this.organization_address,
        //             phone: this.organization_phone //FIXME: Phone to DB
        //         },
        //         auto: {
        //             model: this.waybill.auto.model,
        //             numberplate: this.waybill.auto.numberplate,
        //             type: this.waybill.auto.type.name
        //         },
        //         driver: {
        //             name: {
        //                 // full: driver.name,
        //                 // short: driver.name.split(' ').map( (item, i) => { if (i > 0) { return item[0] + '.' } else return item }).join(' ').replace('. ', '.')
        //             },
        //             license: driver.options.license,
        //
        //         },
        //         // mechanic: this.staff.find( item => _.includes(this.staff_ids, item.id) && item.position_id === 3 ).name
        //     }
        // },
        drivers: function() { return _.orderBy(this.getEmployers.filter( person => person.position_id === 1 ), 'name' ) },
        staff: function() { return _.orderBy(this.getEmployers.filter( person => person.position_id !== 1 ), 'name' ) },
        contractors: function() { return _.orderBy(this.getOrganizations.filter( organization => organization.type_id === 2 ), 'name') },
    },
    components: { buttonCancel, buttonPrint }
}
</script>
