<template>

    <div v-if="article">
        <p>{{article.id}}</p>
        <p> {{article.title}}</p>
        <p>{{article.description}}</p>
        <p>{{article.content}}</p>
    </div>
</template>

<script>
export default {
    name: "Item"
}
</script>
<script setup>
import {useAction} from "@/store/useAction";
import {onMounted} from "vue";
import {useRoute} from "vue-router";


const article = ref()
const action = useAction()

const route = useRoute()
const id = route.params.id

onMounted(() => {
    action.getData(article, `/api/articles/${id}`)

})
</script>

<style scoped>

</style>
