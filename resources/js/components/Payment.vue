<template>
    <div>
        <h1>Payment</h1>
    </div>
</template>
<script>
export default {
    data() {
        return {
            payments: [],
            form: new Form({
                customer_id: "",
                pay_date: "",
                money: "",
            }),
        };
    },
};
</script>
