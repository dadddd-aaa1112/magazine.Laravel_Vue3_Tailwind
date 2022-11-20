<template>
    artdfsdf
    <div v-for="article in articles">
        <div class="mb-2">
            <p>title {{article.title}}</p>
            <p>description {{article.description}}</p>
            <span @click="$router.push({name: 'article_item', params: {
        id: article.id
    }})">podrobnee...</span>
        </div>
    </div>
    dsf
</template>

<script>
export default {
    name: "List"
}
</script>
<script setup>
import {useAction} from "@/store/useAction";
import {storeToRefs} from 'pinia'
import {onMounted} from "vue";


const articles = ref()
const action = useAction()

onMounted(() => {
    action.getData(articles, '/api/articles')
})

</script>
<style scoped>

</style>
