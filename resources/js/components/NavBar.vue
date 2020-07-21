<template>
    <header class="header">
        <nav class="header__nav nav">
            <router-link to="/" class="nav__link">Test</router-link>
            <button class="nav__basket" @click="openBasket">
                <img src="img/svg/basket.svg" alt="" />
            </button>
        </nav>
        <BasketList />
    </header>
</template>

<script>
import BasketList from "@/js/components/BasketList.vue";
export default {
    components: {
        BasketList
    },
    methods: {
        openBasket() {
            this.$store.dispatch("showBasket", true);
        }
    }
};
</script>

<style lang="scss" scoped>
.header {
    background: #fbc02d;
    position: relative;
}
.nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 50px;
    padding: 15px;
    .nav__link {
        text-decoration: none;
        font-size: 32px;
        color: #000000;
    }
    .nav__basket {
        background: transparent;
        border: 0;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        img {
            width: 30px;
        }
        &:hover {
            background: #fff263;
        }
    }
}
</style>
