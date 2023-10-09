<template>
    <transition name="page" mode="out-in">
        <router-view></router-view>
    </transition>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    }
}
</script>