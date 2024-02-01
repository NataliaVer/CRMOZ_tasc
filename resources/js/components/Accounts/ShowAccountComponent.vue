<template>
    <template v-if="account">
        <div class="text-center">
            <h3 class="mt-3">{{ account.Account_Name }}</h3>
            <h3 class="mt-3">{{ account.Website }}</h3>
            <h3 class="mt-3">{{ account.Phone }}</h3>
        </div>
    </template>
</template>

<script>
export default {
    name: "ShowAccountComponent",

    data() {
        return {
            account: null,
        }
    },

    mounted() {
        this.getAccount();
    },

    methods: {
        getAccount() {
            const id = this.$route.params.id;
            axios.get(`/api/account/${id}`)
                .then(data => {
                    console.log(data.data);
                    if(Array.isArray(data.data.data) && data.data.data.length > 0) {
                        this.account = data.data.data[0];
                    }
                })
                .catch(error => {
                    // console.log(error.response.data.message);
                    this.$parent.$parent.showIssue(error.response.data.message);
                })
        },
    }
}
</script>