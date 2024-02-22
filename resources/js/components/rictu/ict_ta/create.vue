<template>
    <div class="container-scroller">
        <Navbar></Navbar>
        <div class="container-fluid page-body-wrapper">
            <Sidebar />
            <div class="main-panel">
                <div class="content-wrapper">
                    <BreadCrumbs />
                    <div class="row">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { library } from '@fortawesome/fontawesome-svg-core';
import { faList, faSearch } from '@fortawesome/free-solid-svg-icons';

library.add(faSearch, faList);


import Navbar from '../../layout/Navbar.vue';
import Sidebar from '../../layout/Sidebar.vue';
import FooterVue from '../../layout/Footer.vue';
import BreadCrumbs from '../../dashboard_tiles/BreadCrumbs.vue';
export default {
    name: 'Create ',
    components: {
        Navbar,
        Sidebar,
        FooterVue,
        BreadCrumbs,
        FontAwesomeIcon,

    },
}
</script>