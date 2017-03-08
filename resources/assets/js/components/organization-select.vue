<template>
    <select class="form-control input-sm" v-bind:value="value" v-on:change="choose">
        <option value=''>Организация</option>
        <option v-for="organization in organizations">{{ organization }}</option>
    </select>

</template>

<script>

export default {
    props: { organizations: Array, value: String },
    methods: {
        choose(event) {
            this.$emit('input', event.target.value)
        }
    }
}
</script>
