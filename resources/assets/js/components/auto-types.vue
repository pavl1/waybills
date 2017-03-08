<template>
    <div class="btn-group btn-group-sm" role="group">
        <button type="button" class="btn btn-default" v-for="type in getAutoTypes" @click="choose(type.name)">{{ type.name }}</button>
    </div>
</template>

<script>

import { mapActions, mapGetters } from 'vuex'

export default {
    props: { value: String },
    methods: {
        ...mapActions([ 'init', 'set' ]),
        choose(type) {
            this.$emit('input', type)
        }
    },
    mounted() {
        this.init('autotype')
    },
    computed: {
        ...mapGetters([ 'getAutoTypes' ])
    }
}
</script>
