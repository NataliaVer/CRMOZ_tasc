<template>
    <template v-if="account">
        <div class="account">
        <div class="wraper">
            <div class="input-box">
                <label class="mt-3 mx-2">Name:</label>
                <input type="text" class="mt-3" v-model="account.Account_Name" :disabled="disabled == 1">
            </div>
            <div class="input-box">
                <label class="mt-3 mx-2">Website:</label>
                <input type="text" class="mt-3" v-model="account.Website" :disabled="disabled == 1">
            </div>
            <div class="input-box">
                <label class="mt-3 mx-2">Phone:</label>
                <input type="text" class="mt-3" v-model="account.Phone" :disabled="disabled == 1">
            </div>
            <button v-on:click="disabled = !disabled" class="button">{{ !disabled ? "Cansel" : "Change"}}</button>
            <button v-if="!disabled" v-on:click="sentData()" class="button my-2">Sent</button>
        </div>
    </div>
    </template>
</template>

<script>
export default {
    name: "ShowAccountComponent",

    data() {
        return {
            account: null,
            disabled: 1,
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
                    // console.log(data.data);
                    if(Array.isArray(data.data.data) && data.data.data.length > 0) {
                        this.account = data.data.data[0];
                    }
                })
                .catch(error => {
                    // console.log(error.response.data.message);
                    this.$parent.$parent.showIssue(error.response.data.message);
                })
        },

        sentData() {
            console.log(this.account);
        }
    }
}
</script>

<style>
.account {
    display: flex;
    justify-content: center;
    /* align-items: center; */
    min-height: 100vh;
    background: url('/img/img-7.jpg') no-repeat;
    background-size: cover;
    background-position: center;
}

.wraper {
    width: 420px;
    background: transparent;
    /* border: 2px solid rgba(255, 255, 255, .2); */
    /* backdrop-filter: blur(20px);
    box-shadow: 0 0 10 px rgba(0, 0, 0, .2); */
    /* color: #fff; */
    /* border-radius: 10px; */
    padding: 30px 40px;
}

.wraper .input-box {
    width: 100%;
    height: 50px;
    margin: 30px 0;
}

.input-box input {
    width: 70%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid rgba(255, 255, 255, .2);
    border-radius: 40px;
    font-size: 16px;
    /* color: #fff; */
    padding: 20px 45px 20px 20px;
}

.wraper .button {
    width: 100%;
    height: 45px;
    /* background: #fff; */
    border: none;
    outline: none;
    border-radius: 40px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 16px;
    color: #333;
    font-weight: 600;
}

input:focus {
  border: 1px solid #333;
}
</style>