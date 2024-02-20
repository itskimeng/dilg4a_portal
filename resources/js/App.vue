<template>
    <RouterView/>
</template>

<script>
import ExampleComponent from "./components/ExampleComponent.vue";
import LoginComponent from "./components/LoginComponent.vue";
import DashboardComponent from "./components/DashboardComponent.vue";
import Procurement from "./components/procurement/index.vue";
import AnnualProcurementPlan from "./components/procurement/AnnualProcurementPlan.vue";
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
