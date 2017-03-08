<template>
    <button class="btn btn-default" @click="edit({item, attribute})">
        <span :class="icon" class="glyphicon text-primary" aria-hidden="true"></span>
    </button>
</template>

<script>

    import { mapActions } from 'vuex'

    export default {
        props: {
            item: Object,
            attribute: {
                type: String,
                default: ''
            }
        },
        methods: {
            ...mapActions([ 'edit' ])
        },
        computed: {
            icon() {
                if (this.attribute == 'print') return 'glyphicon-print'
                return 'glyphicon-pencil'
            }
        }
    }

</script>
