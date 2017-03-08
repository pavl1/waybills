<template>
    <button class="btn btn-default" @click="add()">
        <span class="glyphicon glyphicon-ok text-success" aria-hidden="true"></span>
        Добавить
    </button>
</template>

<script>
import { mapActions } from 'vuex'

export default {
    props: { item: Object, component: String, error: Boolean },
    data() {
        return {
            payload: {}
        }
    },
    methods: {
        ...mapActions([ 'create' ]),
        add: function() {
            if (!this.error) {
                this.payload.item = this.item
                this.payload.component = this.component
                this.create(this.payload)
            }
        }
    }
}
</script>
