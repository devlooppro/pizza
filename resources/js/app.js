require("./bootstrap");

import Vue from "vue";

import Routes from "@/js/routes";
import Store from "@/js/store/index.js";

import App from "@/js/view/App.vue";

const app = new Vue({
    el: "#app",
    router: Routes,
    store: Store,
    render: (h) => h(App),
});

export default app;
