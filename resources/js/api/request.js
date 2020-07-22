import axios from "axios";

const apiClient = axios.create({
    baseURL: "http://pizza.com:8888",
    withCredentials: false,
    headers: {
        Accept: "application/json",
        "Content-Type": "application/json",
    },
});

export default {
    getPizza() {
        return apiClient.get("/api/pizzas");
    },
    getIngredients() {
        return apiClient.get("/api/ingredients");
    },
    addIngredient(pizza_id, ingredient_id) {
        return apiClient.post(
            "/api/pizzas/" + pizza_id + "/ingredients/" + ingredient_id
        );
    },
    deleteIngredient(pizza_id, ingredient_id) {
        return apiClient.delete(
            "/api/pizzas/" + pizza_id + "/ingredients/" + ingredient_id
        );
    },
};
