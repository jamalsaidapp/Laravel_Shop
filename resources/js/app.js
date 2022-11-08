import './bootstrap';

import {createApp} from "vue/dist/vue.esm-bundler.js";
import productAction from './components/productAction.vue'
import miniCart from './components/miniCart.vue'
import checkout from './components/checkout.vue'
import cart from './components/cart.vue'
import singleProduct from './components/singleProduct.vue'
import Toaster from "@meforma/vue-toaster";
import {HasError} from 'vform/src/components/bootstrap5'
import {createPinia} from "pinia";

const pinia = createPinia()


const app = createApp()
app.use(Toaster).provide('toast', app.config.globalProperties.$toast);
app.use(pinia)
app.component('product-action', productAction)
app.component('mini-cart', miniCart)
app.component('cart', cart)
app.component('checkout', checkout)
app.component('single-product', singleProduct)
app.component(HasError.name, HasError)

app.mount('#app')
