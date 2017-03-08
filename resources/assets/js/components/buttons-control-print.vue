<template>
    <div class="btn-group-vertical" role="group">
        <button-cancel v-if="item.edit" :item="item" :component="component">Отмена</button-cancel>
        <button-edit v-else :item="item"></button-edit>
        </br >
        <button-print v-if="item.edit" :item="item"></button-print>
    </div>
</template>

<script>

import buttonEdit from './button-edit.vue'
import buttonDone from './button-done.vue'
import buttonCancel from './button-cancel.vue'
import buttonPrint from './button-print.vue'

export default {
    props: { item: Object, component: String },
    components: {
        buttonEdit,
        buttonDone,
        buttonCancel,
        buttonPrint
    }
}
</script>
