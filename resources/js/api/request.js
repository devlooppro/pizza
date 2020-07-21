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
};
