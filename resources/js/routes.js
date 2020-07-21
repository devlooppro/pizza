import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import Home from "@/js/view/Home.vue";
import Pizza from "@/js/view/Pizza.vue";

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: Home
        },
        {
            path: "/pizza/:id",
            name: "pizza",
            component: Pizza,
            props: true
        }
    ]
});

export default router;
