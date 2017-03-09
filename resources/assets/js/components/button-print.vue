<template>
    <button class="btn btn-default" @click="print_waybill()">
        <span class="glyphicon glyphicon-print text-success" aria-hidden="true"></span>
        {{ print.label }}
    </button>
</template>

<script>
    export default {
        props: { item: Object, print: Object },
        methods: {
            print_waybill() {
                Bus.$emit('print', {type: this.print.type, item: this.item})
            }
        }
    }
</script>
