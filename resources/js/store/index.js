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
        },
        SET_PRICE(state, val) {
            state.totalPrice = val;
        }
    },
    actions: {
        showBasket({ commit }, show) {
            commit("SET_BASKET_SHOW", show);
        },
        addIngredient({ commit, dispatch }, el) {
            api.addIngredient(el.pizza_id, el.ingredient_id).then(response => {
                dispatch("pizza/updatePizza", response.data);
            });
            console.log(el.ingredient_price);
        },
        deleteIngredient({ commit, dispatch }, el) {
            api.deleteIngredient(el.pizza_id, el.ingredient_id).then(
                response => {
                    dispatch("pizza/updatePizza", response.data);
                }
            );
            console.log(el.ingredient_price);
        },
        setPrice({ commit }, val) {
            commit("SET_PRICE", val);
        }
    },
    modules: {
        pizza
    }
});
