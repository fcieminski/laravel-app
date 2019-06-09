import Vue from "vue";
import VueRouter from "vue-router";
import Home from "../js/components/Home";
import About from "../js/components/About";
import Data from "../js/components/Data";

import Vuex from "vuex";

Vue.use(Vuex);
Vue.use(VueRouter);

const store = new Vuex.Store({
    state: {
        title: "Hellooooo",
        someNumber: 123,
        andArray: [1, 2, 5, 6, 43, 564, 123, 123, 414122312, 323]
    },
    actions: {},
    mutations: {},
    getters: {}
});

const routes = {
    mode: "history",
    routes: [
        {
            path: "/",
            component: Home
        },
        {
            path: "/about",
            component: About
        },
        {
            path: "/data",
            component: Data
        }
    ]
};

const app = new Vue({
    el: "#app",
    store,
    router: new VueRouter(routes)
});
