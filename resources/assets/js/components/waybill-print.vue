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
                            <select class="form-control" id="dispatcher" v-model="dispatcher_id">
                                <option v-for="d in getDispatchers" :value="d.id">{{ fullName(d) }}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="mechanic">Механик</label>
                            <select class="form-control" id="mechanic" v-model="mechanic_id">
                                <option v-for="m in getMechanics" :value="m.id">{{ fullName(m) }}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="refueler">Заправщик</label>
                            <select class="form-control" id="refueler" v-model="refueler_id">
                                <option v-for="r in getRefuelers" :value="r.id">{{ fullName(r) }}</option>
                            </select>
                        </div>
                    </div>

                    <h3 class="form-control-static col-md-12">Заказчик</h3>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="customer_name">Наименование</label>
                            <input type="text" class="form-control" id="name" disabled :value="current.customer.name"> </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="customer_address">Адрес</label>
                            <input type="text" class="form-control" id="customer_adress" v-model="customer_address" />
                        </div>
                    </div>

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
            driver_id: '',
            license: '',
            dispatcher_id: '',
            contractor_id: '',
            mechanic_id: '',
            refueler_id: '',
            customer_address: this.waybill.customer.address || '',
            customer_phone: this.waybill.customer.phone || '',
            contractor_address: this.waybill.contractor.address || '',
            contractor_phone: this.waybill.contractor.phone || ''
        }
    },
    mounted() {
        // FIXME: изменить hardcode на функцию определения id по имени
        let driver = this.waybill.auto.employers.find( (e) => e.position_id == 1 )
        let dispatcher = this.waybill.auto.employers.find( (e) => e.position_id == 2 )
        let mechanic = this.waybill.auto.employers.find( (e) => e.position_id == 3 )
        let refueler = this.waybill.auto.employers.find( (e) => e.position_id == 4 )

        this.driver_id = driver ? driver.id : 0
        this.dispatcher_id = dispatcher ? dispatcher.id : 0
        this.mechanic_id = mechanic ? mechanic.id : 0
        this.refueler_id = refueler ? refueler.id : 0
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
        driver() { return this.driver_id ? this.getDrivers.find( (e) => e.id == this.driver_id ) : '' },
        dispatcher() { return this.dispatcher_id ? this.getDispatchers.find( (e) => e.id == this.dispatcher_id ) : '' },
        mechanic() { return this.mechanic_id ? this.getMechanics.find( (e) => e.id == this.mechanic_id ) : '' },
        refueler() { return this.refueler_id ? this.getRefuelers.find( (e) => e.id == this.refueler_id ) : '' },
        current() {
            return {
                auto: {
                    model: this.waybill.auto.model,
                    numberplate: this.waybill.auto.numberplate,
                    type: this.waybill.auto.type.name
                },
                customer: {
                    name: this.waybill.customer.name,
                    address: this.customer_address,
                    phone: this.waybill.customer.phone
                },
                contractor: {
                    name: this.waybill.customer.name,
                    address: this.waybill.contractor.address,
                    phone: this.waybill.contractor.phone
                },
                driver: {
                    name: this.driver_id ? shortName(this.driver) : '',
                    license: this.driver ? this.driver.options.license : ''
                },
                dispatcher: this.dispatcher ? shortName(this.dispatcher) : '',
                mechanic: this.mechanic ? shortName(this.mechanic) : '',
                refueler: this.refueler ? shortName(this.refueler) : ''
            }
        },
        contractors: function() { return _.orderBy(this.getOrganizations.filter( organization => organization.type_id === 2 ), 'name') },
    },
    components: { buttonCancel, buttonPrint }
}
</script>
