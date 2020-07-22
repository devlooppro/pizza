<template>
    <div>
        <NavBar />
        <router-view></router-view>
    </div>
</template>

<script>
import NavBar from "@/js/components/NavBar.vue";
export default {
    components: {
        NavBar
    }
};
</script>

<style lang="scss">
@import url("https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap");

body {
    overflow-x: hidden;
}

body {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Roboto", sans-serif;
    background: #e1e2e1;
}
</style>
