import { createRouter, createWebHistory } from "vue-router";

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/accounts', name: 'accounts', component: () => import('./components/Accounts/AccountsComponent.vue')
        },
        {
            path: '/deals', name: 'deals', component: () => import('./components/Deals/DealsComponent.vue')
        },
        {
            path: '/', redirect: {name: 'accounts'}
        },
        {
            path: '/account/:id', name: 'accounts.show', component: () => import('./components/Accounts/ShowAccountComponent.vue')
        },
    ]
})

export default router;