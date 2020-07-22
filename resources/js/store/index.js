import Vue from "vue";
import Vuex from "vuex";

import * as pizza from "@/js/store/modules/pizza.js";

import api from "@/js/api/request.js";

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
        },
        addIngredient({ commit }, el) {
            api.addIngredient(el.pizza_id, el.ingredient_id);
        },
        deleteIngredient({ commit }, el) {
            api.deleteIngredient(el.pizza_id, el.ingredient_id);
        }
    },
    modules: {
        pizza
    }
});
