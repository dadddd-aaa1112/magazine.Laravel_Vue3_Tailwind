<template>

<div class="flex flex-row" >

        <Sidebar></Sidebar>
    <div class="flex flex-col w-full" >
        <Nav></Nav>


        <router-view></router-view>
</div>
</div>
</template>

<script>
import Sidebar from "@/components/Admin/Sidebar.vue";
import Nav from "@/components/Admin/Nav.vue";

export default {
    name: "AdminLayout",
    components: {Nav, Sidebar}
}
</script>

<style scoped>

</style>
