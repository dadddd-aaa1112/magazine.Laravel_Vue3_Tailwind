import {defineStore} from "pinia";

export const useAction = defineStore('action', () => {
    const getData = (val, url) =>
    {
        const result =  axios.get(url)
            .then(res => {
                val.value = res.data.data
            })
            .catch(err => {
                console.error(err)
            })

        return result

    }

    return {
        getData,
    }
})
