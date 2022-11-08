import {ref} from "vue";
import emitter from 'tiny-emitter/instance'

export default function useCart() {
    const cartCount = ref(0);
    const products = ref([]);

    const addProduct = async (productId) => {
        let response = await axios.post('/api/cart', {
            productId: productId
        });
        cartCount.value = response.data.cartCount;
    }

    const getProducts = async () => {
        let cartContent = await axios.get('/api/cart');
        products.value = cartContent.data.cartContent;
        cartCount.value = cartContent.data.cartCount;
    }

    const decreaseQuantity = async (id) => {
        await axios.put('/api/cart/decrease/' + id);
    }

    const increaseQuantity = async (id) => {
        await axios.put('/api/cart/increase/' + id);
    }

    const deleteProduct = async (id) => {
        await axios.delete('/api/cart/' + id);
    }

    return {
        addProduct,
        cartCount,
        getProducts,
        deleteProduct,
        increaseQuantity,
        decreaseQuantity,
        products
    }
}
