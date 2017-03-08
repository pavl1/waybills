<template>
    <div>
        <div v-show="error" class="alert alert-danger" role="alert">
            <strong>Все поля </strong> должны быть заполнены.
        </div>
        <div v-show="!error" class="alert alert-success" role="alert">
            Все необходимые поля заполнены.
        </div>
    </div>
</template>

<script>
export default {
    props: { error: Boolean }
}
</script>
