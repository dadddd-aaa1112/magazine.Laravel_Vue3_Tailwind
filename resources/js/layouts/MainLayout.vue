<template>
    <div class="content">
        <Navigation></Navigation>
        <router-view></router-view>
    </div>
    <Footer></Footer>
</template>

<script>
import Navigation from "@/components/Navigation.vue";
import Footer from "@/components/Footer.vue";

export default {
    name: "Main",
    components: {Footer, Navigation}
}
</script>

<style scoped>
.content {
    min-height: calc(100vh - 80px);
}
</style>
