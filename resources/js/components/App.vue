<template>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <div class="container">
        <router-view></router-view>
    </div>
</template>

<script>
export default {
    mounted() {
        // console.log('App component.')
    },

    methods: {
        showSaccess() {
            this.$swal(
                'Edited!',
                'Your data has been edited.',
                'success'
            );
        },

        showSaccessAdd() {
            this.$swal(
                'Added!',
                'Your data has been added.',
                'success'
            );
        },

        showSaccessDel() {
            this.$swal(
                'Deleted!',
                'Your data been deleted.',
                'success'
            )
        },

        showIssue(message) {
            this.$swal({
                icon: 'error',
                title: 'Oops...',
                text: message,
            })
        },
    },

}
</script>

<style scoped></style>
