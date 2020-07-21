<template>
    <div class="basket__list list" :class="{ 'list--active': show }">
        <div class="list__top">
            <h2 class="title">Your order</h2>
            <button class="close" @click="closeBasket">
                <img src="img/svg/close.svg" alt="" />
            </button>
        </div>
        <div class="list__base">
            <BasketCart />
        </div>
        <div class="list__bottom"></div>
    </div>
</template>

<script>
import { mapState } from "vuex";
import BasketCart from "@/js/components/BasketCart.vue";
export default {
    components: {
        BasketCart
    },
    computed: {
        ...mapState(["show"])
    },
    methods: {
        closeBasket() {
            this.$store.dispatch("showBasket", false);
        }
    }
};
</script>

<style lang="scss" scoped>
.basket__list {
    position: absolute;
    top: 0;
    right: -100%;
    height: 100vh;
    width: 100%;
    max-width: 350px;
}
.list {
    background: #ffffff;
    box-shadow: 0px -10px 10px 1px #a6a6a6;
    transition: 1s;
    .list__top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: #fbc02d;
        padding: 0 15px;
        height: 80px;
        .title {
            margin: 0;
        }
        .close {
            border: 0;
            background: transparent;
            padding: 0;
            border-radius: 50%;
            height: 30px;
            transition: 0.5s transform;
            img {
                width: 30px;
            }
            &:hover {
                background: #fff263;
                transform: rotate(180deg);
            }
        }
    }
    .list__base {
        height: calc(100vh - 80px);
    }
}
.list--active {
    right: 0;
}
</style>
