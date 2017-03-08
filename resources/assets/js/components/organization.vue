<template>
    <div class="panel panel-default">

        <div class="panel-body">

            <div class="pull-right">
                <buttons-control :item="organization" :current="current" component="organization"></buttons-control>
            </div>

            <div v-if="organization.edit" class="col-md-12">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="name">Наименование</label>
                        <input type="text" class="form-control" id="name" v-model="current.name">
                    </div>
                    <div class="form-group">
                        <label for="address">Адрес</label>
                        <input type="text" class="form-control" id="address" v-model="current.address">
                    </div>
                    <div class="form-group">
                        <label for="type">Тип</label>
                        <select class="form-control" id="type" v-model="current.type_id">
                            <option v-for="type in types" :value="type.id">{{ type.name }}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="autos">Автомобили</label>
                        <select class="form-control" id="autos" multiple="true" v-model="current.auto_ids">
                            <option v-for="auto in autos" :value="auto.id">{{ auto.type.name }} {{ auto.model }} {{ auto.numberplate }}</option>
                        </select>
                    </div>
                </form>
            </div>
            <div v-if="!organization.edit">
                <div>
                    <p class="addition">{{ organization.type.name }}</p>
                    <span class="panel-title">{{ organization.name }}</span>
                    <span>{{ organization.address }}</span>
                    <ul>
                        <li v-for="auto in organization.autos"><strong>{{ auto.model }}</strong> {{ auto.numberplate }}</li>
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

import { mapActions } from 'vuex'
import buttonsControl from './buttons-control.vue'

export default {
    props: { organization: Object, types: Array, autos: Array },
    data() {
        return { current: this.organization }
    },
    methods: {
        ...mapActions([ 'edit', 'cancel' ])
    },
    components: {
        buttonsControl
    }
}
</script>
