<template>
    <div class="flex">
        <div class="flex-grow">
            <p class="addition">{{ waybill.auto.type.name }}</p>
            <p>
                <span class="panel-title">{{ waybill.auto.model }}</span>
                <span>{{ waybill.auto.numberplate }}</span>
            </p>
            <p>
                <span class="panel-title">{{ waybill.customer.name }}</span>
                <span>{{ waybill.customer.address }}</span>
            </p>
        </div>

        <div>
            <button-edit :item="waybill"></button-edit>
        </div>
    </div>
</template>

<script>
import buttonEdit from './button-edit.vue'

export default {
    props: { waybill: Object },
    components: { buttonEdit }
}
</script>
