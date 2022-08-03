<template>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="fs-2 fw-bold">Top Cryptocurrencies</h2>

            <a href="#">View All</a>
        </div>

        <div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">MarketCap</th>
                    <th scope="col">24 Hr Change</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="currency in currencies">
                    <th scope="row">
                        <img
                            :src="`https://www.cryptocompare.com/${currency.DISPLAY.USD.IMAGEURL}`"
                            alt=".."
                            class="img-fluid me-2"
                            width="36"
                            height="36"
                        />
                    </th>
                    <td>{{ currency.CoinInfo.FullName }}</td>
                    <td>{{ currency.DISPLAY.USD.PRICE }}</td>
                    <td>{{ currency.DISPLAY.USD.MKTCAP }}</td>
                    <td>
                        <span v-if="currency.DISPLAY.USD.CHANGEPCT24HOUR > 0" class="text-success">
                            {{ currency.DISPLAY.USD.CHANGEPCT24HOUR }}
                        </span>
                        <span v-else class="text-danger">
                            {{ currency.DISPLAY.USD.CHANGEPCT24HOUR }}
                        </span>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>


<script>
export default {
    props: {
        currencies: {

        }
    },
    data(){
        return{}
    },

    mounted() {
        axios.get('cryptoCompareController').then(response => {
            var currencies = response.data
        })
    }

}
</script>
