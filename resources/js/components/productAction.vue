<template>
    <div class="cart-info cart-wrap">
        <a href="#" title="Add to cart" @click.prevent="addToCart"><i class="ti-shopping-cart"></i></a>
        <a data-bs-target="#quick-view" data-bs-toggle="modal" href="#" tabindex="0" title="Affichage Rapide">
            <i aria-hidden="true" class="ti-search"></i>
        </a>
    </div>
    <div class="add-button">Commander</div>
</template>

<script setup>
import useCart from '../composables/cart';

const {addProduct, cartCount} = useCart();
const props = defineProps(['productId']);
import {inject} from 'vue';
import emitter from 'tiny-emitter/instance'

const toast = inject('toast');

const addToCart = async () => {
    await addProduct(props.productId);
    toast.success('Produit ajouté au panier!');
    emitter.emit('refreshCartCount', cartCount);
}
</script>

<style scoped>

</style>
