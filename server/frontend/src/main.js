/* eslint-disable no-unused-vars */

import { createApp } from 'vue'
import App from './App.vue'
import {createRouter, createWebHistory} from "vue-router"
import Anjayani from "./Anjayani.vue"
import axios from 'axios'
import { createStore } from 'vuex'

axios.defaults.baseURL = "http://localhost:8000/api/"

let store = createStore({
    state() {
            return {
                count: 0,
                arrtest: [
                    {
                        name:"ok"
                    },
                    {
                        name:"asw"
                    },
                ]
            }
    },
    mutations: {
        increments(state) {
            state.count++;
        },
        insert(state, payload) {
            state.arrtest.push({
                name:"agus"
            })
            console.log(payload.target)
        }
    }
})

let router = createRouter({
    history:createWebHistory(),
    routes:[
        {
            name:"Test",
            path:"/wadow",
            component:Anjayani
        }
    ]
})

let app = createApp(App);
app.use(router)
app.use(store)
app.config.globalProperties.$axios = axios
app.mount("#app");
