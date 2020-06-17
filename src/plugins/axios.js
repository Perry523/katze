import Vue from 'vue'
import axios from 'axios'

axios.defaults.baseURL = 'http://loja-laravel'

Vue.use({
    install(Vue){
        Vue.prototype.$http = axios
    }
})