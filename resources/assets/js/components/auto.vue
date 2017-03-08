<template>
    <div class="panel panel-default">

        <div class="panel-body">

            <div class="pull-right">
                <buttons-control :item="auto" :current="current" component="auto"></buttons-control>
            </div>

            <div v-if="auto.edit" class="col-md-12">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="model">Модель</label>
                        <input type="text" class="form-control" id="model" v-model="current.model">
                    </div>
                    <div class="form-group">
                        <label for="numberplate">Номерной знак</label>
                        <input type="text" class="form-control" id="numberplate" v-model="current.numberplate">
                    </div>
                    <div class="form-group">
                        <label for="type">Тип</label>
                        <select class="form-control" id="type" v-model="current.type_id">
                            <option v-for="t in autotypes" :value="t.id">{{ t.name }}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="driver">Водитель</label>
                        <select class="form-control" id="driver" v-model="current.driver_id">
                            <option v-for="d in getDrivers" :value="d.id">{{ fullName(d) }}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="dispatcher">Диспетчер</label>
                        <select class="form-control" id="dispatcher" v-model="current.dispatcher_id">
                            <option value=""></option>
                            <option v-for="d in getDispatchers" :value="d.id">{{ fullName(d) }}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="mechanic">Механик</label>
                        <select class="form-control" id="mechanic" v-model="current.mechanic_id">
                            <option value=""></option>
                            <option v-for="m in getMechanics" :value="m.id">{{ fullName(m) }}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="refueler">Заправщик</label>
                        <select class="form-control" id="refueler" v-model="current.refueler_id">
                            <option value=""></option>
                            <option v-for="r in getRefuelers" :value="r.id">{{ fullName(r) }}</option>
                        </select>
                    </div>
                </form>
            </div>

            <div v-if="!auto.edit">
                <p class="addition">{{ auto.type.name }}</p>
                <span class="panel-title">{{ auto.model }}</span>
                <span>{{ auto.numberplate }}</span>
                <span v-if="driver">({{ fullName(driver) }})</span>
                <div class="container row">
                    <ul class="col-xs-6">
                        <li v-for="e in employers">{{ e.position.name }} {{ fullName(e) }}</li>
                    </ul>
                    <ul class="col-xs-6">
                        <li v-for="organization in auto.organizations">{{ organization.name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
.addition { font-style: italic; font-weight: 300; margin-bottom: 0; line-height: 0.5 }
</style>


<script>

import { mapActions, mapGetters } from 'vuex'
import { fullName } from './helpers.js'
import buttonsControl from './buttons-control.vue'

export default {
    props: { auto: Object },
    components: { buttonsControl },
    data() { return { current: this.auto } },
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
        fullName: fullName
    },
    computed: {
        ...mapGetters([ 'getDrivers', 'getDispatchers', 'getMechanics', 'getRefuelers', 'getAutoTypes' ]),
        driver() { return this.auto.employers.find( (e) => e.position_id == 1 ) },
        employers() { return this.auto.employers.filter( (e) => e.position_id != 1 ) },
        autotypes() { return _.orderBy(this.getAutoTypes, 'name') },
    }
}
</script>
