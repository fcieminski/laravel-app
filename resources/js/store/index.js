import Vuex from "vuex";
import Vue from "vue";
Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        title: "Hellooooo",
        someNumber: 123,
        andArray: [1, 2, 5, 6, 43, 564, 123, 123, 414122312, 323]
    },
    actions: {},
    mutations: {},
    getters: {}
});
