<template>
    <!-- section start -->
    <section class="section-b-space">
        <div class="container">
            <div class="checkout-page">
                <div class="checkout-form">
                    <form>
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 col-xs-12">
                                <div class="checkout-title">
                                    <h3>Informations de facturation</h3>
                                </div>
                                <div class="row check-out">
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Nom Complete <span class="text-danger">*</span></div>
                                        <input v-model="form.full_name" name="full_name" placeholder=""
                                               type="text">
                                        <HasError :form="form" field="full_name"/>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Téléphone <span class="text-danger">*</span></div>
                                        <input v-model="form.phone" name="phone" placeholder="" type="tel">
                                        <HasError :form="form" field="phone"/>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Email <span class="text-danger">*</span></div>
                                        <input v-model="form.email" name="email" placeholder="" type="email">
                                        <HasError :form="form" field="email"/>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Ville <span class="text-danger">*</span></div>
                                        <input v-model="form.city" name="city" placeholder="" type="text">
                                        <HasError :form="form" field="city"/>
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <div class="field-label">Adresse <small
                                            class="text-warning">pour la livraison</small></div>
                                        <input v-model="form.address" name="address" placeholder="" type="text">
                                        <HasError :form="form" field="address"/>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-xs-12">
                                <div class="checkout-details">
                                    <div class="order-box">
                                        <div class="title-box">
                                            <div>Product <span>Total</span></div>
                                        </div>
                                        <ul class="qty">
                                            <li v-for="(product, index) in products" :key="index">
                                                {{ product.name }} x {{ product.quantity }}
                                                <span>{{ priceFormat(product.price) }}</span>
                                            </li>
                                        </ul>
                                        <ul class="total">
                                            <li>Total <span class="count">{{ cartTotal }}</span></li>
                                        </ul>
                                    </div>
                                    <div class="payment-box">
                                        <div class="text-end"><a class="btn-solid btn" href="#"
                                                                 @click.prevent="checkOut()">Passer
                                            la
                                            commande</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->
</template>

<script setup>
import {onMounted, computed, ref, inject} from "vue";
import useCart from "../composables/cart";
import useOrder from "../composables/order";
import {priceFormat} from "../helpers";
import Form from 'vform'

const toaster = inject('toast');

const form = ref(new Form({
    full_name: '',
    phone: '',
    email: '',
    city: ''
}))
const {products, getProducts} = useCart();
const {addOrder} = useOrder()

const cartTotal = computed(() => {
    const price = Object.values(products.value).reduce((acc, product) => acc += (product.quantity * product.price), 0);
    return priceFormat(price);
});

const checkOut = async () => {
    if (!products.length > 0) {
        toaster.errors('Aucun Produit dans le Panier')
        return
    }
    await addOrder(form.value)
    window.location.replace('/success_order')
}

onMounted(() => {
    getProducts();
})
</script>

<style scoped>

</style>
