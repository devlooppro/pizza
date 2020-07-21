<template>
    <router-link class="link" :to="{ path: '/pizza/' + pizza.id }">
        <div class="pizza__cart cart">
            <div class="cart__name">{{ pizza.name }}</div>
            <div class="cart__price">{{ pizza.price }}</div>
        </div>
    </router-link>
</template>

<script>
export default {
    props: ["pizza"]
};
</script>

<style lang="scss" scoped>
.link {
    text-decoration: none;
}
.cart {
    max-width: 150px;
    min-width: 150px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #ffffff;
    padding: 15px;
    box-shadow: 0px 0px 10px 1px #a6a6a6;
    margin-bottom: 15px;
    color: #000000;
    .cart__name {
        font-size: 20px;
    }
    .cart__price {
        font-size: 25px;
        color: #d32f2f;
    }
}
</style>
