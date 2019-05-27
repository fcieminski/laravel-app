import Vue from "vue";
import VueRouter from "vue-router";
import Home from "../js/components/Home";
import About from "../js/components/About";
import Data from "../js/components/Data";
import "../sass/app.scss";

Vue.use(VueRouter);

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

    router: new VueRouter(routes)
});
