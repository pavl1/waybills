<template>
    <div class="print">
        <passenger v-if="type == 3":item="item"></passenger>
    </div>
</template>

<script>

import { mapGetters } from 'vuex'
import passenger from '../components/print/passenger.vue'

export default {
    data() {
        return {
            type: '',
            item: {}
        }
    },
    components: { passenger },
    mounted() { Bus.$on('print', (payload) => {
            this.item = Object.assign({}, payload.item)
            this.type = payload.type
            Vue.nextTick( () => window.print())
        }
    )}
}
</script>
