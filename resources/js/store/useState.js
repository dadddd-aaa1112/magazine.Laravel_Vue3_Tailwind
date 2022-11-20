import { defineStore } from 'pinia'

export const useStateStore = defineStore('stateStore', () => {
    const count = ref()




    return { count }
})
