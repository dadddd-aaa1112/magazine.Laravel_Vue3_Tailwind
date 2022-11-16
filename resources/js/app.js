import './bootstrap';
import {createApp} from 'vue'
import '../css/app.css'
import App from './App.vue'
import router from './router'
import 'tw-elements';

const app = createApp(App)

app.use(router)
    .mount("#app")
