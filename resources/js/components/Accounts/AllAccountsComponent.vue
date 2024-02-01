<template>
    <tr :class="this.$parent.isEdit(account.id) ? 'd-none' : ''">
        <td scope="row" class="d-none">{{ account.id }}</td>
        <td>
            <router-link :to="`/account/${account.id}`" class="link-body-emphasis link-offset-2 link-underline link-underline-opacity-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                </svg>
                {{ account.Account_Name }}</router-link>
        </td>
        <td>{{ account.Phone }}</td>
        <td>{{ account.Website }}</td>
        <td>
            <a href="#"
                @click.prevent="changeEditAccountId(account.id, account.Account_Name, account.Phone, account.Website)"
                class="btn btn-outline-secondary mx-2"><i class="bi bi-pencil-fill"></i></a>
            <a href="#" @click.prevent="this.$parent.deleteAlertClick(account.id)" class="btn btn-outline-secondary mx-2"><i
                    class="bi bi-trash3-fill"></i></a>
        </td>
        <!-- <td><a href="#" @click.prevent="deleteAccount(account.id)" class="btn btn-danger">Delete</a></td> -->
    </tr>
</template>

<script>
export default {
    name: "AllAccountsComponent",

    props: [
        'account'
    ],

    data() {
        return {
        }
    },

    mounted() {
    },

    methods: {

        changeEditAccountId(id, Account_Name, Phone, Website) {
            // console.log(id);
            this.$parent.editAccountId = id;
            let editName = `editAccount_${id}`;
            let fullEditName = this.$parent.$refs[editName][0];
            fullEditName.Account_Name = Account_Name;
            fullEditName.Phone = Phone;
            fullEditName.Website = Website;
            this.$parent.errors = null;
            this.$parent.$refs.createAccount.AddId = null;
        },

    },
    components: {

    }
}
</script>

<style scoped></style>
