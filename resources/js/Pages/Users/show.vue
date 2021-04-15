<template>
    <app-layout>
        <Input v-bind="user.name"> </Input>


    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Input from '@/Jetstream/Input'

    export default {
        name: "show",
        components: {
            AppLayout,
            Input
        },
        d

    }
</script>

<style scoped>

</style>
