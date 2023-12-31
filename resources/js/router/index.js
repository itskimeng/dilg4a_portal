import { createRouter, createWebHistory } from "vue-router";

import ExampleComponent from "../components/ExampleComponent.vue";
import DashboardComponent from "../components/DashboardComponent.vue";
import LoginComponent from "../components/LoginComponent.vue";
import Procurement from "../components/gss/Procurement.vue";
import AnnualProcurementPlan from "../components/gss/AnnualProcurementPlan.vue";

// FORMS
import AddAppItem from "../components/gss/add_app_item.vue";
import CreatePRItem from "../components/gss/create_pr.vue"
import axios from "axios";

const routes = [
    {
        path: '/',
        name: 'Login',
        component: LoginComponent
    },
    { 
        path: '/dashboard',
        name: 'Dashboard',
        component: DashboardComponent,
        // beforeEnter:(to, form, next) => {
        //     axios.get('api/authenticated').then(()=>{
        //         next()
        //     }).catch(() =>{
        //         return next({ name: 'Login'})
        //     })
        // }
       
    },
    {
        path: '/gss/procurement',
        name: 'Procurement',
        component: Procurement
    },
    {
        path: '/gss/AnnualProcurementPlan',
        name: 'Annual Procurement Plan',
        component: AnnualProcurementPlan,
    },
    {
        path: '/gss/add_app_item',
        name: 'Add Annual Procurement Plan Item',
        component: AddAppItem,
    },
    {
        path: '/gss/create_pr',
        name: 'Create Purchase Request Item',
        component: CreatePRItem,
    },
    {
        path: '/ExampleComponent',
        name: 'ExampleComponent',
        component: ExampleComponent
    },
    
   


];
const router = createRouter({
    mode: 'history',
    history: createWebHistory(process.env.BASE_URL),
    routes,
    router:router
})


export default router