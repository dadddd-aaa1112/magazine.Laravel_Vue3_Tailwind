<template>
    <div ref="dropzone" class="p-6 bg-sky-600 text-center rounded-lg ">


    </div>

    <button class="border border-blue-200" @click="store">add</button>
</template>
<script>
export default {
    name: "CreateArticle"
}
</script>
<script setup>
import Dropzone from 'dropzone';
import {onMounted} from "vue";

const dropzone = ref()
const myDropzone = ref()

const store = async () => {
    try {
        const data = new FormData()
        const files = myDropzone.value.getAcceptedFiles()
        files.forEach(file => {
            data.append('images[]', file)
            myDropzone.value.removeFile(file)
        })
        data.append('title', 'title2')
        data.append('description', 'description2')
        data.append('content', 'content2')
        data.append('image_preview', 'image_preview2')

    await axios.post('/api/articles', data
    )
    } catch (err) {
        console.error(err)
    }
    console.log(myDropzone.value.getAcceptedFiles());
}

onMounted(() => {
    myDropzone.value = new Dropzone(dropzone.value, {
        url: "/api/articles",
        autoProcessQueue: false,
        addRemoveLinks: true
    });
})

</script>

<style scoped>

</style>
