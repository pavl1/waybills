<template>
    <div>
    </div>
</template>

<script>

import waybillShow from './waybill-show.vue'

export default {
    props: { item: Object, drivers: Array, staff: Array, contractors: Array },
    components: {
        waybillShow,
        waybillEdit
    }
}
</script>
