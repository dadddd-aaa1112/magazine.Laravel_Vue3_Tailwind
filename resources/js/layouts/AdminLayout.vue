<template>

    <div class="flex flex-row">

        <Sidebar></Sidebar>
        <div class="flex flex-col w-full">
            <Nav></Nav>

            <div class="w-1/4">
                <router-view></router-view>
            </div>
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
