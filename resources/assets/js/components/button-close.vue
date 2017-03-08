<template>
    <button class="btn btn-default" data-dismiss="modal" @click="clear({item, component})">
        <span class="glyphicon glyphicon-ban-circle text-danger" aria-hidden="true"></span>
        Закрыть
    </button>
</template>

<script>
import { mapActions } from 'vuex'

export default {
    props: { item: Object, component: String },
    methods: {
        ...mapActions([ 'clear' ])
    }
}
</script>
