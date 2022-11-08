<template>
    <table class="table cart-table">
        <thead>
        <tr class="table-head">
            <th scope="col">Image</th>
            <th scope="col">produit</th>
            <th scope="col">Prix</th>
            <th scope="col">qauntité</th>
            <th scope="col">action</th>
            <th scope="col">total</th>
        </tr>
        </thead>
        <tbody v-for="(product, index) in products" :key="index">
        <tr>
            <td>
                <a href="#"><img :src="product.associatedModel.image" alt=""></a>
            </td>
            <td><a :href="'/products/'+product.associatedModel.slug">{{ product.name }}</a>
                <div class="mobile-cart-content row flex-column">
                    <div class="col">
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
                    </div>
                    <div class="col">
                        <h2 class="td-color">{{ priceFormat(product.price) }}</h2>
                    </div>
                    <div class="col">
                        <h2 class="td-color">
                            <a class="icon" href="#" @click.prevent="deleteProduct(product.id)">
                                <i class="ti-close"></i>
                            </a>
                        </h2>
                    </div>
                </div>
            </td>
            <td>
                <h2>{{ priceFormat(product.price) }}</h2>
            </td>
            <td>
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
            </td>
            <td><a class="icon" href="#" @click.prevent="deleteProduct(product.id)"><i class="ti-close"></i></a></td>
            <td>
                <h2 class="td-color">{{ priceFormat(product.price * product.quantity) }}</h2>
            </td>
        </tr>
        </tbody>
    </table>
    <div class="table-responsive-md">
        <table class="table cart-table ">
            <tfoot>
            <tr>
                <td>Prix Total :</td>
                <td>
                    <h2>{{ cartTotal }}</h2>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
</template>

<script setup>
import {onMounted, computed} from "vue";
import useCart from "../composables/cart";
import {priceFormat} from "../helpers";


const {products, getProducts, deleteProduct, increaseQuantity, decreaseQuantity} = useCart();


const cartTotal = computed(() => {
    const price = Object.values(products.value).reduce((acc, product) => acc += (product.quantity * product.price), 0);
    return priceFormat(price);
});

onMounted(() => {
    getProducts();
})
</script>

<style scoped>
.qty-input {
    padding: unset;
    font-size: 15px;
    width: 30px !important;
}

.quantity-right-plus, .quantity-left-minus {
    font-size: 20px !important;
}
</style>
