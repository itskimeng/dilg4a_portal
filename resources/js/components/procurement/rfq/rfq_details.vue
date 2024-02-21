<style>
textarea.form-control,
textarea.asColorPicker-input,
.select2-container--default textarea.select2-selection--single,
.select2-container--default .select2-selection--single textarea.select2-search__field,
textarea.typeahead,
textarea.tt-query,
textarea.tt-hint {
    height: 396px !important;
}

.card {
    border-radius: 7px !important;
    font-family: "Poppins", sans-serif;
}

.tab-content {
    border-bottom: 1px solid #ddd;
    border-left: 1px solid #ddd;
    border-right: 1px solid #ddd;
    display: block;
    border-radius: 0 0 0.25em 0.25em;
}

.tab-content .tab-pane {
    text-align: left;
    padding: 10px;
}

.tab-content .tab-pane h3 {
    margin: 0;
}

ul li,
ol li,
dl li {
    line-height: 1 !important;

}

.cd-breadcrumb {
    padding: 6px 7px;
    margin: 0;
    background-color: transparent;
    border-radius: 0.25em 0.25em 0 0;
}

.cd-breadcrumb.nav-tabs {
    border-left: 1px solid #ddd;
    border-top: 1px solid #ddd;
    border-right: 1px solid #ddd;
    border-bottom: none;
}

.cd-breadcrumb.nav-tabs>li.active>a,
.cd-breadcrumb.nav-tabs>li.active>a:hover,
.cd-breadcrumb.nav-tabs>li.active>a:focus {
    color: #fff;
    background-color: #304767;
    border: 0px solid #304767;
    cursor: default;
}

.cd-breadcrumb.nav-tabs>li>a {
    margin-right: inherit;
    line-height: inherit;
    height: 48px;
    border: inherit;
    border-radius: inherit;
    border-color: #edeff0;
}

.cd-breadcrumb li {
    display: inline-block;
    float: left;
    margin: 0.5em 0;
}

.cd-breadcrumb li::after {
    /* this is the separator between items */
    display: inline-block;
    content: '\00bb';
    margin: 0 0.6em;
    color: tint(#304767, 50%);
}

.cd-breadcrumb li:last-of-type::after {
    /* hide separator after the last item */
    display: none;
}

.cd-breadcrumb li>* {
    /* single step */
    display: inline-block;
    font-size: 1rem;
    color: #304767;
}

.cd-breadcrumb li.current>* {
    /* selected step */
    color: #304767;
}

.cd-breadcrumb a:hover {
    /* steps already visited */
    color: #304767;
}

.cd-breadcrumb.custom-separator li::after {
    /* replace the default arrow separator with a custom icon */
    content: '';
    height: 16px;
    width: 16px;
    vertical-align: middle;
}

.cd-breadcrumb li {
    margin: 1.2em 0;
}

.cd-breadcrumb li::after {
    margin: 0 1em;
}

.cd-breadcrumb li>* {
    font-size: 1rem;
}

.cd-breadcrumb.triangle li {
    position: relative;
    padding: 0;
    margin: 0 4px 0 0;
}

.cd-breadcrumb.triangle li:last-of-type {
    margin-right: 0;
}

.cd-breadcrumb.triangle li .octicon {
    margin-right: 10px;
}

.cd-breadcrumb.triangle li>* {
    position: relative;
    padding: 0.8em 0.8em 0.7em 2.5em;
    color: #333;
    line-height: 0;
    /* Adjust the line height as needed */

    background-color: #edeff0;
    /* the border color is used to style its ::after pseudo-element */
    border-color: #edeff0;
}

.cd-breadcrumb.triangle li.active>* {
    /* selected step */
    color: #fff;
    background-color: #304767;
    border-color: #304767;
}

.cd-breadcrumb.triangle li:first-of-type>* {
    padding-left: 1.6em;
    border-radius: 4px 0 0 4px;
}

.cd-breadcrumb.triangle li:last-of-type>* {
    padding-right: 1.6em;
    border-radius: 0 0.25em 0.25em 0;
}

.cd-breadcrumb.triangle a:hover {
    /* steps already visited */
    color: #fff;
    background-color: #304767;
    border-color: #304767;
    text-decoration: none;
}

.cd-breadcrumb.triangle li::after,
.cd-breadcrumb.triangle li>*::after {
    /* li > *::after is the colored triangle after each item li::after is the white separator between two items */
    content: '';
    position: absolute;
    top: 0;
    left: 100%;
    content: '';
    height: 0;
    width: 0;
    /* 48px is the height of the <a> element */
    border: 24px solid transparent;
    border-right-width: 0;
    border-left-width: 20px;
}

.cd-breadcrumb.triangle li::after {
    /* this is the white separator between two items */
    z-index: 1;
    -webkit-transform: translate(4px, 0);
    -ms-transform: translate(4px, 0);
    -o-transform: translate(4px, 0);
    transform: translate(4px, 0);
    border-left-color: #fff;
    /* reset style */
    margin: 0;
}

.cd-breadcrumb.triangle li>*::after {
    /* this is the colored triangle after each element */
    z-index: 2;
    border-left-color: inherit;
}

.cd-breadcrumb.triangle li:last-of-type::after,
.cd-breadcrumb.triangle li:last-of-type>*::after {
    /* hide the triangle after the last step */
    display: none;
}
</style>
<template>
    <div class="container-scroller">
        <Navbar></Navbar>
        <div class="container-fluid page-body-wrapper">
            <Sidebar />
            <div class="main-panel">
                <div class="content-wrapper">
                    <BreadCrumbs />
                    <div class="row">
                        <div class="col-md-12 grid-margin transparent">
                            <div class="row">
                                <div class="col-md-3 mb-4 stretch-card transparent">
                                    <div class="card card-dark-blue stre">
                                        <div class="card-body">
                                            <p class="mb-4">Procurement</p>
                                            <p class="fs-30 mb-2">4006</p>
                                            <p>10.00% (30 days)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4 stretch-card transparent">
                                    <div class="card card-dark-blue">
                                        <div class="card-body">
                                            <p class="mb-4">Disbursement Rate</p>
                                            <p class="fs-30 mb-2">61344</p>
                                            <p>22.00% (30 days)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4 stretch-card transparent">
                                    <div class="card card-dark-blue">
                                        <div class="card-body">
                                            <p class="mb-4">Procurement</p>
                                            <p class="fs-30 mb-2">4006</p>
                                            <p>10.00% (30 days)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4 stretch-card transparent">
                                    <div class="card card-dark-blue">
                                        <div class="card-body">
                                            <p class="mb-4">Procurement</p>
                                            <p class="fs-30 mb-2">4006</p>
                                            <p>10.00% (30 days)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3">
                            <UserInfo />
                        </div>
                        <div class="col-lg-9">
                            <br>
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">

                                        <div class="status-badge">
                                            Status: <div class="badge badge-danger mb-4" style="font-size: 15pt;">{{ status
                                            }}</div>
                                        </div>

                                    </div>

                                    <ul class="cd-breadcrumb triangle nav nav-tabs" role="tablist">
                                        <li v-for="(tab, index) in tabs" :key="index"
                                            :class="{ 'active': activeTab === index }" role="presentation">
                                            <a href="#" @click="changeTab(index)">
                                                <font-awesome-icon :icon="tab.icon" /> {{ tab.name }}
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div v-for="(content, index) in contents" :key="index" role="tabpanel"
                                            class="tab-pane" :class="{ 'active': activeTab === index }">
                                            <div class="form-section" v-if="index === 0">
                                                <div v-if="isLoading" class="loading-icon">
                                                    <font-awesome-icon :icon="['fas', 'spinner']" /> Loading...
                                                </div>
                                                <!-- Display the table when data is loaded -->

                                                <div v-else class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="Office">Office</label>
                                                            <select class="form-control" v-model="purchaseRequestData.pmo">
                                                                <option v-for="option in pmo" :key="option.value"
                                                                    :value="option.value">{{ option.label }}</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="ProcurementType">Procurement Type</label>
                                                            <select class="form-control"
                                                                v-model="purchaseRequestData.pr_type">
                                                                <option v-for="option in procurementType"
                                                                    :key="option.value" :value="option.value">{{
                                                                        option.label }}</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="PurchaseRequestDate">Purchase Request Date</label>
                                                            <input type="date" v-model="purchaseRequestData.pr_date"
                                                                class="form-control" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="TargetDate">Target Date</label>
                                                            <input type="date" v-model="purchaseRequestData.target_date"
                                                                class="form-control" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="Particulars">Particulars</label>
                                                            <textarea v-model="purchaseRequestData.particulars"
                                                                class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="table-section" v-if="index === 1">
                                                <div class="btn-group" style="float:right;margin-top:-50px;">
                                                    <button type="button" class="btn btn-success">Actions</button>
                                                    <button type="button"
                                                        class="btn btn-success dropdown-toggle dropdown-toggle-split"
                                                        id="dropdownMenuSplitButton3" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuSplitButton3"
                                                        style="">
                                                        <h6 class="dropdown-header">Settings</h6>
                                                        <a class="dropdown-item" href="#">Save as Draft</a>
                                                        <a class="dropdown-item" @click="toGSS()">Submit to GSS</a>
                                                        <a class="dropdown-item" @click="exportPurchaseRequest">Export</a>
                                                        <a class="dropdown-item" href="#">Preview</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" @click="show_addItem_modal()">Add Item</a>
                                                    </div>
                                                </div>
                                                <!-- Display loading icon when data is loading -->
                                                <div v-if="isLoading" class="loading-icon">
                                                    <font-awesome-icon :icon="['fas', 'spinner']" /> Loading...
                                                </div>
                                                <!-- Display the table when data is loaded -->
                                                <div v-else class="table-responsive">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { library } from '@fortawesome/fontawesome-svg-core'; // Import the library object
import { faSpinner, faCartShopping, faListCheck, faPesoSign, faSave, faTrophy } from '@fortawesome/free-solid-svg-icons';

import Navbar from "../../layout/Navbar.vue";
import Sidebar from "../../layout/Sidebar.vue";
import FooterVue from "../../layout/Footer.vue";
import BreadCrumbs from "../../dashboard_tiles/BreadCrumbs.vue";
import UserInfo from "../../procurement/user_info.vue";


import axios from "axios";
import { toast } from "vue3-toastify";
library.add(faSpinner, faCartShopping, faListCheck, faPesoSign, faSave, faTrophy);

export default {
    name: "RFQ Details",
    data() {
        return {
            activeTab: 0,
            status: null,
            selected: null,
            contents: ['a', 'b', 'c'],
            options: ['list', 'of', 'options'],
            tabs: [
                { name: 'Purchase Request Details', icon: ['fas', 'cart-shopping'] }, // Example with different icon
                { name: 'RFQ Details', icon: ['fas', 'list-check'] }, // Example with different icon
                { name: 'Abstract of Quotation', icon: ['fas', 'trophy'] }, // Example with different icon
            ],
            purchaseRequestData: {
                pmo: null,
                pr_type: null,
                pr_date: null,
                target_date: null,
                particulars: null
            },
        }
    },
    components: {
        FontAwesomeIcon,
        Navbar,
        Sidebar,
        FooterVue,
        BreadCrumbs,
        UserInfo,
    }
}
</script>
