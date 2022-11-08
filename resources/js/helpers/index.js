import axios from "axios"

export const priceFormat = (price) => {
    // return new Intl.NumberFormat('fr-FR', {style: 'currency', currency: 'MAD'})
    //     .format(price)
    return price + ' DH'
}

