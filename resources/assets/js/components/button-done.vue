<template>
    <button class="btn btn-default" @click="update({item, current, component})">
        <span class="glyphicon glyphicon-ok text-success" aria-hidden="true"></span>
    </button>
</template>

<script>

    import { mapActions } from 'vuex'

    export default {
        props: { item: Object, current: Object, component: String },
        methods: {
            ...mapActions([ 'update' ])
        }
    }

</script>
