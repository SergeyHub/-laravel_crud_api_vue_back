import { createRouter, createWebHistory } from "vue-router";

import List from '../components/companies/List'


const routes = [
    {
        path: '/dashboard',
        name: 'companies.list',
        component: List
    },
]

export default createRouter({
    history: createWebHistory(),
    routes
})

