import './bootstrap';
import {createApp} from 'vue'
import '../css/app.css'
import App from './App.vue'
import router from './router'
import 'tw-elements';
import {createPinia} from 'pinia'
import { ref, reactive, computed } from 'vue'

window.ref = ref
window.reactive = reactive
window.computed = computed

const app = createApp(App)

app.use(createPinia())
    .use(router)

    .mount("#app")
