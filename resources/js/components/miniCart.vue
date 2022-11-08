<template>
    <li class="onhover-div mobile-cart">
        <div>
            <a href="/cart">
                <img alt="" class="img-fluid blur-up lazyload" src="/frontend/assets/images/icon/cart.png">
                <i class="ti-shopping-cart"></i>
            </a>
        </div>
        <span class="cart_qty_cls">{{ count }}</span>
        <ul class="show-div shopping-cart">
            <li v-for="(product, index) in products" :key="index" class="cart-item">
                <div class="media">
                    <a href="#">
                        <img :src="product.associatedModel.image" alt="" class="me-3">
                    </a>
                    <div class="media-body">
                        <a href="#">
                            <h6>{{ product.name }}</h6>
                        </a>
                        <h4 class="d-flex justify-content-between align-items-center mb-0">
                            <span>{{ product.quantity }} x {{ priceFormat(product.price) }}</span>
                            <div class="qty-box">
                                <div class="input-group">
                                <span class="input-group-prepend">
                                    <button class="btn quantity-left-minus p-1" @click="decreaseQuantity(product.id)">
                                     -
                                    </button>
                                </span>
                                    <input :value="product.quantity" class="form-control input-number qty-input"
                                           type="text">
                                    <span class="input-group-prepend">
                                    <button class="btn quantity-right-plus p-1" @click="increaseQuantity(product.id)">
                                        +
                                    </button>
                                </span>
                                </div>
                            </div>
                        </h4>
                    </div>
                </div>
                <div class="close-circle">
                    <a href="#" @click="deleteProduct(product.id)">
                        <i aria-hidden="true" class="fa fa-times"></i></a>
                </div>
            </li>
            <li class="cart-item">
                <div class="total">
                    <h5>Total : <span>{{ cartTotal }}</span></h5>
                </div>
            </li>
            <li>
                <div class="buttons">
                    <a class="btn btn-solid btn-sm btn-xs view-cart" href="/cart">Afficher la cart</a>
                    <a class="btn btn-solid btn-sm btn-xs checkout" href="/checkout">payer</a>
                </div>
            </li>
        </ul>
    </li>
</template>

<script setup>
import {onMounted, computed, ref} from "vue";
// import useCart from "../composables/cart";
import {useCartStore} from '../stores/cartStore.js'

import emitter from 'tiny-emitter/instance'
import {priceFormat} from "../helpers";

const props = defineProps(['cartContent', 'count'])


const {getProducts, deleteProduct, increaseQuantity, decreaseQuantity, products} = useCartStore();
const cart = useCartStore();

const Count = ref(props.count);
const cartContent = ref(props.cartContent);

emitter.on('refreshCartCount', function (count) {
    // getProducts();
    Count.value = count;
});

const cartTotal = computed(() => {
    const price = Object.values(cartContent.value).reduce((acc, product) => acc += (product.quantity * product.price), 0);
    return priceFormat(price);
});

onMounted(() => {
    // getProducts();
})
</script>


<style scoped>
.cart-item {
    border: 1px solid #ededee;
    margin-bottom: 5px;
    padding: 5px !important;
}

.qty-input {
    padding: unset;
    font-size: 13px;
    width: 30px !important;
}

.total {
    border: unset !important;
    padding: unset !important;
}

.main-menu .menu-right .icon-nav .onhover-div .show-div.shopping-cart li .buttons a {
    color: #fff;
}

.main-menu .menu-right .icon-nav .onhover-div .show-div.shopping-cart li .buttons a:hover {
    color: var(--theme-color);
}


</style>
