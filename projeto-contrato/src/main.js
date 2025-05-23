import { createApp } from 'vue'
import './style.css'
import 'bootstrap/dist/css/bootstrap.min.css'
import 'bootstrap/dist/js/bootstrap.bundle.min.js'

import App from './App.vue'
import VueTheMask from 'vue-the-mask'


const app = createApp(App)

app.use(VueTheMask)

app.mount('#app')

