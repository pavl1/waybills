<template>
    <button class="btn btn-default" @click="destroy({item, component})">
        <span class="glyphicon glyphicon-remove text-danger" aria-hidden="true"></span>
    </button>
</template>

<script>

    import { mapActions } from 'vuex'

    export default {
        props: { item: Object, component: String },
        methods: {
            ...mapActions([ 'destroy' ])
        }
    }

</script>
