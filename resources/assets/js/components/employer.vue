<template>
    <div class="panel panel-default">

        <div class="panel-body">

            <div class="pull-right">
                <buttons-control :item="person" :current="current" component="employer"></buttons-control>
            </div>

            <div v-if="person.edit" class="col-md-12">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="name">Работник</label>
                        <input type="text" class="form-control" disabled :value="shortName(current)">
                    </div>
                    <div class="form-group">
                        <label for="name">Фамилия</label>
                        <input type="text" class="form-control" v-model.trim="current.last_name">
                    </div>
                    <div class="form-group">
                        <label for="name">Имя</label>
                        <input type="text" class="form-control" v-model.trim="current.first_name">
                    </div>
                    <div class="form-group">
                        <label for="name">Отчество</label>
                        <input type="text" class="form-control" v-model.trim="current.middle_name">
                    </div>
                    <div class="form-group">
                        <label for="position">Должность</label>
                        <select class="form-control" id="position" v-model="current.position_id">
                            <option v-for="p in getPositions" :value="p.id">{{ p.name }}</option>
                        </select>
                    </div>
                    <div v-if="current.position_id == 1" class="form-group">
                        <label for="license">Водительское удостоверение</label>
                        <input type="text" class="form-control" id="license" v-model="current.options.license">
                    </div>
                </form>
            </div>
            <div v-if="!person.edit">
                <div>
                    <span class="panel-title">{{ fullName(person) }}</span>
                    <span class="position">{{ person.position.name }}</span>
                    <div>
                        <span v-if="person.position_id == 1">Водительское удостоверение {{ person.options.license }}</span>
                        <ul v-if="person.autos.length">
                            <li v-for="auto in person.autos">{{ auto.type.name }} <strong>{{ auto.model }}</strong> {{ auto.numberplate }}</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

</template>

<style>
.position { font-style: italic; font-weight: 300 }
</style>

<script>

import { mapActions, mapGetters } from 'vuex'
import { fullName, shortName } from './helpers'
import buttonsControl from './buttons-control.vue'

export default {
    props: { person: Object },
    components: { buttonsControl },
    data() { return { current: this.person } },
    methods: {
        shortName: shortName,
        fullName: fullName,
        ...mapActions([ 'edit', 'cancel' ]) },
    computed: {
        ...mapGetters([ 'getPositions' ])
    }

}
</script>
