<template>
    artdfsdf
    <!--<pre>-->
    <!--    {{articles}}-->
    <!--    </pre>-->
    <div v-for="article in articles">
        <div class="mb-2">
            <p>title {{ article.title }}</p>
            <p>description {{ article.description }}</p>
            <span v-for="image in article.images">
<!--            <img :src="image.url">-->
              preview   <img :src="image.preview_image">
                </span>
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
