<style>
.profile_img {
    width: 100px;
    height: 100px;
    padding: 1px;
    margin-bottom: 15%;
    border-radius: 100%;
    border: 1px solid rgb(18, 15, 76);
}

.user_info {
    display: flex;
    justify-content: space-between;
    margin: 0px;
    vertical-align: middle;
    width: 100%;
}

.rank_banner {
    background-color: rgb(104, 34, 142);
    color: rgb(255, 255, 255);
    font-family: Barlow, sans-serif;
    font-size: 1.25rem;
    font-weight: 400;
    line-height: 1.5;
    margin: 0px;
    text-decoration: none;
}

.rank_banner2 {
    background-color: rgb(128, 22, 22);
    color: rgb(255, 255, 255);
    font-family: Barlow, sans-serif;
    font-size: 1.25rem;
    font-weight: 400;
    line-height: 1.5;
    margin: 0px;
    text-decoration: none;
}

.rank_banner3 {
    background-color: rgb(45, 2, 85);
    color: rgb(255, 255, 255);
    font-family: Barlow, sans-serif;
    font-size: 1.25rem;
    font-weight: 400;
    line-height: 1.5;
    margin: 0px;
    text-decoration: none;
}

.rank_wrapper {
    -webkit-clip-path: polygon(100% 0px, 0px 0px, 100% 100%);
    clip-path: polygon(100% 0px, 0px 0px, 100% 100%);
    height: 4.5rem;
    padding-right: 4px;
    padding-top: 2px;
    position: absolute;
    right: 0px;
    text-align: right;
    top: 0px;
    width: 4.5rem;
}

.card_shadow {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    /* Change box shadow on hover for an interactive effect */

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
                        <div class="col-md-12 grid-margin mb-4 stretch-card">

                            <div class="col-md-3 col-sm-12 col-xs-12 mb-6 stretch-card transparent">
                                <div class="card card-dark-blue">
                                    <div class="card-body">
                                        <p class="mb-4">APP Item Encoded</p>
                                        <p class="fs-30 mb-2">197</p>
                                        <p>10.00% (as of today)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 col-xs-12 mb-6 stretch-card transparent">
                                <div class="card card-dark-blue">
                                    <div class="card-body">
                                        <p class="mb-4">APP Item with same Stock No</p>
                                        <p class="fs-30 mb-2">61344</p>
                                        <p>22.00% (30 days)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 col-xs-12 mb-6 stretch-card transparent">
                                <div class="card card-dark-blue">
                                    <div class="card-body">
                                        <p class="mb-4">Newly Encoded App Item</p>
                                        <p class="fs-30 mb-2">34040</p>
                                        <p>2.00% (30 days)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 card-dark-bluecol-sm-12 col-xs-12 mb-6 stretch-card transparent">
                                <div class="card card-dark-blue">
                                    <div class="card-body">
                                        <p class="mb-4">App Item without Office</p>
                                        <p class="fs-30 mb-2">47033</p>
                                        <p>0.22% (30 days)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">

                            <button type="button" class="btn btn-success btn-sm" @click="openModal()">Create RFQ</button>
                            <button type="button" class="btn btn-success btn-sm" @click="openModal()"
                                style="margin-left:3px;">Create Abstract of Quotation</button>
                            <button type="button" class="btn btn-success btn-sm" @click="openModal()"
                                style="margin-left:3px;">Create Purchase Order</button>
                            <div class="card">
                                <div class="card-body">
                                    <table style="width: 100%;"
                                        class="table table-striped display expandable-table dataTable no-footer"
                                        role="grid">

                                        <thead>
                                            <tr role="row">
                                                <th class="select-checkbox sorting_disabled" rowspan="1" colspan="1"
                                                    aria-label="Select All" style="width: 61px;">
                                                    <input type="checkbox" @change="selectAllRows($event)">
                                                </th>
                                                <th class="select-checkbox sorting_disabled" rowspan="1" colspan="1"
                                                    aria-label="Quote#" style="width: 61px;"> PURCHASE REQUEST #</th>
                                                <th class="select-checkbox sorting_disabled" rowspan="1" colspan="1"
                                                    aria-label="Quote#" style="width: 61px;"> RFQ #.</th>


                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Policy holder: activate to sort column ascending"
                                                    style="width: 107px;">TOTAL AMOUNT</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                    colspan="1" aria-label="Premium: activate to sort column ascending"
                                                    style="width: 126px;">
                                                    PURPOSE</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                    colspan="1" aria-label="Status: activate to sort column ascending"
                                                    style="width: 126px;">PR
                                                    DATE</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                    colspan="1" aria-label="Updated at: activate to sort column ascending"
                                                    style="width: 93px;">
                                                    TARGET DATE</th>
                                                <th class="details-control sorting_disabled" rowspan="1" colspan="1"
                                                    aria-label="" style="width: 100px;">
                                                    STATUS</th>
                                                <th class="details-control sorting_disabled" rowspan="1" colspan="1"
                                                    aria-label="" style="width: 4px;"> TIME
                                                    ELAPSED</th>
                                                <th class="details-control sorting_disabled" rowspan="1" colspan="1"
                                                    aria-label="" style="width: 4px;">
                                                    CREATED BY</th>
                                                <th class="details-control sorting_disabled" rowspan="1" colspan="1"
                                                    aria-label="" style="width: 4px;">
                                                    ACTION</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr v-for="purchaseRequest in displayedItems" :key="purchaseRequest.id">
                                                <td>
                                                    <input type="checkbox" @change="selectRow(purchaseRequest.id)">
                                                </td>
                                                <td>
                                                    <div class="badge badge-default"
                                                        @click="$router.push({ path: `/procurement/view_pr/${purchaseRequest.id}` })">
                                                        <b>{{ purchaseRequest.pr_no }}</b><br><i>~{{ purchaseRequest.office
                                                        }}~</i>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="badge badge-default">
                                                        <b>{{ purchaseRequest.rfq_no }}</b><br><i>~{{
                                                            purchaseRequest.rfq_date }}~</i>
                                                    </div>

                                                </td>


                                                <td>Php. {{ formatAmount(purchaseRequest.app_price) }}</td>
                                                <td>{{ purchaseRequest.particulars }}</td>
                                                <td>{{ purchaseRequest.pr_date }}</td>
                                                <td>{{ purchaseRequest.target_date }}</td>
                                                <td>
                                                    <div v-if="purchaseRequest.status_id == 1" class="badge badge-success">
                                                        {{
                                                            purchaseRequest.status }}
                                                    </div>
                                                    <div v-if="purchaseRequest.status_id == 2" class="badge badge-primary">
                                                        {{
                                                            purchaseRequest.status }}
                                                    </div>
                                                    <div v-if="purchaseRequest.status_id == 3" class="badge badge-warning">
                                                        {{
                                                            purchaseRequest.status }}
                                                    </div>
                                                    <div v-if="purchaseRequest.status_id == 4"
                                                        class="badge badge-submitted_gss">{{
                                                            purchaseRequest.status
                                                        }}</div>
                                                    <div v-if="purchaseRequest.status_id == 5"
                                                        class="badge badge-received_gss">{{
                                                            purchaseRequest.status }}
                                                    </div>
                                                    <div v-if="purchaseRequest.status_id == 6" class="badge badge-with-rfq">
                                                        {{
                                                            purchaseRequest.status }}
                                                    </div>
                                                    <div v-if="purchaseRequest.status_id == 7"
                                                        class="badge badge-cancelled">{{
                                                            purchaseRequest.status }}
                                                    </div>
                                                </td>
                                                <td>5 minutes ago</td>
                                                <td>{{ purchaseRequest.created_by }}</td>

                                                <td>
                                                    <div v-if="this.userId == 1"
                                                        class="template-demo d-flex justify-content-between flex-nowrap">
                                                        <button type="button" class="btn btn-success btn-rounded btn-icon"
                                                            @click="viewPr(purchaseRequest.id, purchaseRequest.status_id, purchaseRequest.step)">
                                                            <i class="ti-eye" style="margin-left: -3px;"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-primary btn-rounded btn-icon"
                                                            @click="toGSS(purchaseRequest.id)">
                                                            <font-awesome-icon :icon="['fas', 'paper-plane']"
                                                                style="margin-left: -3px;" />
                                                        </button>

                                                        <button type="button" class="btn btn-danger btn-rounded btn-icon">
                                                            <i class="ti-trash" style="margin-left: -3px;"></i>
                                                        </button>
                                                        <button class="btn btn-warning btn-rounded btn-icon">
                                                            <i class="ti-download"
                                                                @click="exportPurchaseRequest(purchaseRequest.id)"
                                                                style="margin-left: -3px;"></i>
                                                        </button>
                                                    </div>

                                                    <div v-else-if="purchaseRequest.user_id == this.userId"
                                                        class="template-demo d-flex justify-content-between flex-nowrap">
                                                        <button type="button" class="btn btn-success btn-rounded btn-icon"
                                                            @click="viewPr(purchaseRequest.id, purchaseRequest.status_id, purchaseRequest.step)">
                                                            <i class="ti-eye" style="margin-left: -3px;"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-danger btn-rounded btn-icon">
                                                            <i class="ti-trash" style="margin-left: -3px;"></i>

                                                        </button>
                                                        <button class="btn btn-warning btn-rounded btn-icon">
                                                            <i class="ti-download"
                                                                @click="exportPurchaseRequest(purchaseRequest.id)"
                                                                style="margin-left: -3px;"></i>
                                                        </button>
                                                    </div>
                                                    <div v-else
                                                        class="template-demo d-flex justify-content-between flex-nowrap">
                                                        <button type="button" class="btn btn-success btn-rounded btn-icon"
                                                            title="View PR"
                                                            @click="viewPr(purchaseRequest.id, purchaseRequest.status_id, purchaseRequest.step)">
                                                            <i class="ti-eye" style="margin-left: -3px;"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-info btn-rounded btn-icon"
                                                            title="Submit to Budget">
                                                            <font-awesome-icon :icon="['fas', 'paper-plane']"
                                                                style="margin-left: -3px;" />
                                                        </button>

                                                    </div>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                    <Pagination :total="purchaseRequests.length" @pageChange="onPageChange" />
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <FooterVue />
            </div>
        </div>
        <ModalRFQ :visible="modalVisible" @close="closeModal" />
    </div>
</template>

<script>
import Navbar from '../../layout/Navbar.vue';
import Sidebar from '../../layout/Sidebar.vue';
import FooterVue from '../../layout/Footer.vue';
import BreadCrumbs from '../../dashboard_tiles/BreadCrumbs.vue';
import UserInfo from '../../procurement/user_info.vue';
import Pagination from '../Pagination.vue';
import ModalRFQ from "../rfq/modal/modal_create_rfq.vue";

import axios from 'axios';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { library } from '@fortawesome/fontawesome-svg-core'; // Import the library object
import { faEye, faPaperPlane } from '@fortawesome/free-solid-svg-icons';
import { toast } from "vue3-toastify";
import { formatTotalAmount } from '../../../globalMethods';
library.add(faEye, faPaperPlane);
export default {
    name: 'Request for Quotation',
    props: {

    },
    data() {
        return {
            userId: null,
            purchaseRequests: [],
            selectedRows: [],
            currentPage: 1,
            itemsPerPage: 5,
            modalVisible: false,

        };
    },
    components: {
        Navbar,
        Sidebar,
        FooterVue,
        BreadCrumbs,
        UserInfo,
        Pagination,
        FontAwesomeIcon,
        ModalRFQ
    },
    computed: {
        totalPages() {
            return Math.ceil(this.purchaseRequests.length / this.itemsPerPage);
        },
        displayedItems() {
            const start = (this.currentPage - 1) * this.itemsPerPage;
            const end = start + this.itemsPerPage;
            return this.purchaseRequests.slice(start, end);
        },
    },
    mounted() {
        this.loadData();

    },
    methods: {

        openModal() {
            this.modalVisible = true;
        },
        closeModal() {
            this.modalVisible = false;
        },
        formatAmount(price) {
            return formatTotalAmount(price);
        },
        selectAllRows(event) {
            if (event.target.checked) {
                this.selectedRows = this.displayedItems.map(item => item.id);
            } else {
                this.selectedRows = [];
            }
        },
        selectRow(id) {
            if (this.selectedRows.includes(id)) {
                this.selectedRows = this.selectedRows.filter(rowId => rowId !== id);
            } else {
                this.selectedRows.push(id);
            }
            console.log("Selected PurchaseRequest IDs:", this.selectedRows);

        },
        loadData() {
            axios.post(`../../api/fetchSubmittedtoGSS`)
                .then(response => {
                    this.purchaseRequests = response.data.data;

                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                });
        },
        onPageChange(page) {
            this.currentPage = page;
            // Fetch data for the new page
            this.loadData();
        },
        viewPr(pr_id,) {
                this.$router.push(`/procurement/rfq/`+ pr_id);

        
        },
        exportPurchaseRequest(pr_id) {
            window.location.href = `../../api/export-purchase-request/${pr_id}?export=true`;
        },
        toGSS(id) {
            const STATUS_SUBMITTED_TO_GSS = 4;
            axios.post(`../../api/post_update_status`, {
                pr_id: id,
                status: STATUS_SUBMITTED_TO_GSS,
            }
            ).then(() => {
                toast.success('Successfully submitted to the GSS!', {
                    autoClose: 2000
                });
                location.reload();
            }).catch((error) => {

            })

        }
    },

}
</script>
