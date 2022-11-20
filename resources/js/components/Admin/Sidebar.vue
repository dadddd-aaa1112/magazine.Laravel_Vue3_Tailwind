<template>

    <div class="w-60 h-full shadow-md bg-white px-1 " id="sidenavExample">


        <router-link :to="{name: 'create_article'}"
                     class="flex items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-gray-900 hover:bg-gray-100 transition duration-300 ease-in-out cursor-pointer"
                     data-mdb-ripple="true" data-mdb-ripple-color="dark">

            <span>create article</span>

        </router-link>
        <router-link :to="{name: 'create_tag'}"
                     class="flex items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-gray-900 hover:bg-gray-100 transition duration-300 ease-in-out cursor-pointer"
                     data-mdb-ripple="true" data-mdb-ripple-color="dark">

            <span>create_tag</span>

        </router-link>
        <router-link :to="{name: 'create_category'}"
                     class="flex items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-gray-900 hover:bg-gray-100 transition duration-300 ease-in-out cursor-pointer"
                     data-mdb-ripple="true" data-mdb-ripple-color="dark">

            <span>create_category</span>

        </router-link>


    </div>

</template>

<script>
import Nav from "@/components/Admin/Nav.vue";

export default {
    name: "Sidebar",
    components: {Nav}
}
</script>

<style scoped>

</style>
