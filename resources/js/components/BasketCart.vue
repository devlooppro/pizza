<template>
    <div class="cart">
        <div class="cart__name">{{ ingredient.name }}</div>
        <div class="cart__price">{{ ingredient.price }}</div>
    </div>
</template>

<script>
export default {
    props: ["ingredient"]
};
</script>

<style lang="scss" scoped>
.cart {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin: 5px 10px;
    border: 1px solid #000000;
    padding: 15px;
    .cart__name {
    }
    .cart__price {
    }
}
</style>
