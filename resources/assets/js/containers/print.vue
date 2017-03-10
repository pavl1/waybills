<template>
    <div class="print">
        <passenger v-if="type == '3'" :item="item" :company="getCompany"></passenger>
        <bus-uncommon v-if="type == '6s'" :item="item" :company="getCompany"></bus-uncommon>
        <cargo-hourly v-if="type == '4s'" :item="item" :company="getCompany"></cargo-hourly>
        <cargo-piecework v-if="type == '4p'" :item="item" :company="getCompany"></cargo-piecework>
        <track-crane v-if="type == 'spec'" :item="item" :company="getCompany"></track-crane>
    </div>
</template>

<script>

import { mapGetters } from 'vuex'
import passenger from '../components/print/passenger.vue'
import busUncommon from '../components/print/bus-uncommon.vue'
import cargoHourly from '../components/print/cargo-hourly.vue'
import cargoPiecework from '../components/print/cargo-piecework.vue'
import trackCrane from '../components/print/track-crane.vue'

export default {
    data() {
        return {
            type: '',
            item: {}
        }
    },
    components: { passenger, busUncommon, cargoHourly, cargoPiecework, trackCrane },
    mounted() { Bus.$on('print', (payload) => {
            this.item = Object.assign({}, payload.item)
            this.type = payload.type
            // FIXME: необходимо для рендеринга значений печатной формы
            Vue.nextTick( () => window.print())
        }
    )},
    computed: {
        ...mapGetters([ 'getCompany' ])
    }
}
</script>
