<template>
    <button class="btn btn-default" @click="cancel({item, current, attribute})">
        <span class="glyphicon glyphicon-ban-circle text-danger" aria-hidden="true"></span>
        <slot></slot>
    </button>
</template>

<script>

    import { mapActions } from 'vuex'

    export default {
        props: {
            item: Object,
            current: Object,
            attribute: {
                type: String,
                default: ''
            }
        },
        methods: {
            ...mapActions([ 'cancel' ])
        }
    }

</script>
