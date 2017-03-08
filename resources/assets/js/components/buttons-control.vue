<template>
    <div class="btn-group" role="group">
        <button-done v-if="item.edit" :item="item" :current="current" :component="component"></button-done>
        <button-edit v-else :item="item"></button-edit>
        <button-cancel v-if="item.edit" :item="item" :current="current" :component="component"></button-cancel>
        <button-destroy v-else :item="item" :component="component"></button-destroy>
    </div>
</template>

<script>

import buttonEdit from './button-edit.vue'
import buttonDestroy from './button-destroy.vue'
import buttonDone from './button-done.vue'
import buttonCancel from './button-cancel.vue'

export default {
    props: { item: Object, current: Object, component: String },
    components: {
        buttonEdit,
        buttonDestroy,
        buttonDone,
        buttonCancel
    }

}
</script>
