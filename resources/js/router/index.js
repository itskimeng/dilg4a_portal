import { createRouter, createWebHistory } from "vue-router";

import ExampleComponent from "../components/ExampleComponent.vue";
import DashboardComponent from "../components/DashboardComponent.vue";
import LoginComponent from "../components/LoginComponent.vue";
import Procurement from "../components/gss/Procurement.vue";
import AnnualProcurementPlan from "../components/gss/AnnualProcurementPlan.vue";

// FORMS
import AddAppItem from "../components/gss/add_app_item.vue";
import CreatePRItem from "../components/gss/create_pr.vue"
import ViewPRItem from "../components/gss/view_pr.vue";
import UpdatePRItem from "../components/gss/update_pr.vue";

// Statistics
import procurement_stat from "../components/gss/procurement_stat.vue";
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
        path: '/gss/update_pr',
        name: 'update_pr',
        component: UpdatePRItem,
        props: true, // Automatically bind route parameters as props
        beforeEnter: (to, from, next) => {
          // Your beforeEnter logic if needed
          next();
        },
      },
      
    {
        path: '/gss/create_pr/:id',
        name: 'Create Purchase Request Item with ID',
        component: CreatePRItem,
        beforeEnter: (to, from, next) => {
            // Check if the page is being refreshed (F5 or browser refresh button)
            if (!from.name) {
                // Redirect to "/gss/procurement"
                next({ name: 'Procurement' });
            } else {
                // Continue with the normal navigation
                next();
            }
        },
    },
    {
        path: '/gss/view_pr/:id',
        name: 'View Purchase Request Item',
        component: ViewPRItem,
    },
    {
        path: '/gss/statistic',
        name: 'Procurement Stat',
        component: procurement_stat,
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