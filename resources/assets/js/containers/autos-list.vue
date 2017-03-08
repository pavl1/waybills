<template>
    <div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Поиск по модели, типу автомобиля и номерному знаку..." v-model="search" :value="search">
        </div>
        <auto v-for="auto in autos" :auto="auto"></auto>

        <auto-new></auto-new>
    </div>
</template>

<script>
import { mapGetters, mapActions } from 'vuex'
import auto from '../components/auto.vue'
import autoNew from '../components/auto-new.vue'

export default {
    data: function() {
        return { search: '' }
    },
    components: { auto, autoNew },
    methods: {
        ...mapActions([ 'init' ])
    },
    mounted() {
        this.init('auto')
        // Для дочерних компонентов
        this.init('employer')
        this.init('autotype')
    },
    computed: {
        ...mapGetters([ 'getAutos' ]),
        autos() {
            return _.orderBy(this.getAutos.filter( (auto) => {
                let model = auto.model.toLowerCase().indexOf(this.search) > -1
                let numberplate = auto.numberplate.toLowerCase().indexOf(this.search) > -1
                let type = auto.type.name.toLowerCase().indexOf(this.search) > -1
                return ( model || numberplate || type )
            }), 'model')
        }
    }
}</script>
