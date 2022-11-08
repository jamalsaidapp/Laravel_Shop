export default function useOrder() {
    const addOrder = async (order) => {
        let response = order.post('/api/orders')
        console.log(response)
    }

    return {
        addOrder
    }
}
