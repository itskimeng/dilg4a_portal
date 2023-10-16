<template>
    <RouterView/>
</template>

<script>


import ExampleComponent from "./components/ExampleComponent.vue";
import LoginComponent from "./components/LoginComponent.vue";
import DashboardComponent from "./components/DashboardComponent.vue";
import Procurement from "./components/gss/Procurement.vue";
import AnnualProcurementPlan from "./components/gss/AnnualProcurementPlan.vue";
import Sidebar from "./components/layout/Sidebar.vue";
export default {
    name: "App",
    components: {
        ExampleComponent,
        LoginComponent,
        DashboardComponent,
        Sidebar,
        Procurement,
        AnnualProcurementPlan

    }
}

</script> 
