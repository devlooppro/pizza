import Vue from "vue";
import Vuex from "vuex";

import * as pizza from "@/js/store/modules/pizza.js";

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        show: false
    },
    mutations: {
        SET_BASKET_SHOW(state, show) {
            state.show = show;
        }
    },
    actions: {
        showBasket({ commit }, show) {
            commit("SET_BASKET_SHOW", show);
        }
    },
    modules: {
        pizza
    }
});
