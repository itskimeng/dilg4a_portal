<style>
.card {
    border-radius: 7px !important;
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
                                    <div class="card card-tale">
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
                                    <div class="card card-tale">
                                        <div class="card-body">
                                            <p class="mb-4">Procurement</p>
                                            <p class="fs-30 mb-2">4006</p>
                                            <p>10.00% (30 days)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4 stretch-card transparent">
                                    <div class="card card-tale">
                                        <div class="card-body">
                                            <p class="mb-4">Procurement</p>
                                            <p class="fs-30 mb-2">4006</p>
                                            <p>10.00% (30 days)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-2">
                            <div class="card ">
                                <div class="card-body" style="height: 320px;text-align: center;">
                                    <img src="../../../assets/logo.png" class="profile_img">
                                    <div class="user_info">
                                        <p>Office:</p>
                                        <p>ORD-RICTU</p>
                                    </div>
                                    <div class="user_info">
                                        <p>Position:</p>
                                        <p>Database Admin</p>
                                    </div>
                                    <div class="user_info">
                                        <p>Cancelled PR:</p>
                                        <p>10</p>
                                    </div>
                                    <div class="user_info">
                                        <p>Total PR's:</p>
                                        <p>10</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card " style="margin-top: 10px;">
                                <div class="card-body" style="height: 500px;">
                                    <h5>Supplier Rankings</h5><select class="form-control">
                                        <option>This Week</option>
                                        <option>This Month</option>
                                        <option>This Year</option>
                                    </select>
                                    <div class="card" style="margin-top: 10px;">
                                        <div class="card-body" style="height: 90px;">
                                            <div class="media" style="margin-top: -25px;">
                                                <div style="width: 65px; height: 65px;">
                                                    <img src="../../../assets/logo.png" alt="..."
                                                        style="margin-top:10px;border-radius: 5px; width: 100%; object-fit: cover; margin-left: -14px;">
                                                </div>
                                                <div class="media-body">
                                                    <div class="media-content" style="margin-top:5%;">Supplier Title<br>
                                                    </div>
                                                    <div class="media-content">0955136565</div>
                                                    <div class="media-content">Calamba City, Laguna</div>
                                                </div>
                                            </div>
                                            <p class="rank_wrapper rank_banner">1st</p>
                                        </div>
                                    </div>
                                    <div class="card" style="margin-top: 10px;">
                                        <div class="card-body" style="height: 90px;">
                                            <div class="media" style="margin-top: -25px;">
                                                <div style="width: 65px; height: 65px;">
                                                    <img src="../../../assets/logo.png" alt="..."
                                                        style="border-radius: 5px; width: 100%; object-fit: cover; margin-left: -14px;">
                                                </div>
                                                <div class="media-body">
                                                    <div class="media-content"><small>Supplier Title</small><br></div>
                                                    <div class="media-content" style="margin-top:-1%;"></div>
                                                    <div class="media-content" style="margin-top:-2%;"></div>
                                                </div>
                                            </div>
                                            <p class="rank_wrapper rank_banner2">2nd</p>
                                        </div>
                                    </div>
                                    <div class="card" style="margin-top: 10px;">
                                        <div class="card-body" style="height: 90px;">
                                            <div class="media" style="margin-top: -25px;">
                                                <div style="width: 65px; height: 65px;">
                                                    <img src="../../../assets/logo.png" alt="..."
                                                        style="border-radius: 5px; width: 100%; object-fit: cover; margin-left: -14px;">
                                                </div>
                                                <div class="media-body">
                                                    <div class="media-content"><small>Supplier Title</small><br></div>
                                                    <div class="media-content" style="margin-top:-1%;"></div>
                                                    <div class="media-content" style="margin-top:-2%;"></div>
                                                </div>
                                            </div>
                                            <p class="rank_wrapper rank_banner3">3rd</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-10 grid-margin mb-4">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="card-title">Purchase Request No: <div class="badge badge-danger"
                                                style="font-size: 15pt;">{{ pr_no }}</div>
                                        </h4>
                                        <h4 class="card-title">Total Amount: Php {{ total_amount }}</h4>
                                    </div>
                                    </div>
                                    </div>

                            <div class="card mb-4" v-if="current_step <= 3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-6">
                                            <div class="form-group">
                                                <label for="Office">Office</label>
                                                <select class="form-control" v-model="purchaseRequestData.pmo">
                                                    <option v-for="option in pmo" :key="option.value" :value="option.value">
                                                        {{ option.label
                                                        }}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Procurement Type</label>
                                                <select class="form-control" v-model="purchaseRequestData.pr_type">
                                                    <option v-for="option in procurementType" :key="option.value"
                                                        :value="option.value">{{
                                                            option.label
                                                        }}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Purchase Request Date</label>
                                                <input type="date" v-model="purchaseRequestData.pr_date"
                                                    class="form-control" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Target Date</label>
                                                <input type="date" v-model="purchaseRequestData.target_date"
                                                    class="form-control" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Particulars</label>
                                                <textarea v-model="purchaseRequestData.particulars"
                                                    class="form-control"> </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add more form fields as needed -->
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-body">
                                

                                    <div class="table-responsive">
                                        <dtable :data="pr_data" :columns="tableColumns" />
                                    </div>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <FooterVue />
            </div>
        </div>
    </div>
</template>
<script>
import Navbar from "../layout/Navbar.vue";
import Sidebar from "../layout/Sidebar.vue";
import FooterVue from "../layout/Footer.vue";
import BreadCrumbs from "../dashboard_tiles/BreadCrumbs.vue";
import axios from "axios";
import { toast } from "vue3-toastify";
import dtable from "../gss/table.vue";
export default {
    name: "ViewPurchaseRequestItem",
    data() {
        return {
            pr_data: [],
            current_step: null,
            pr_no: null,
            total_amount: null,
            disabled: false, // Add this if needed
            tableColumns: ['serial_no', 'procurement', 'unit', 'description', 'app_price', 'action'],
            purchaseRequestData: { pmo: null, pr_type: null, pr_date: null, target_date: null, particulars: null },
            procurementType: [ { value: '1', label: 'Catering Services' }, { value: '2', label: 'Meals, Venue and Accomodation' }, { value: '3', label: 'Repair and Maintenance' }, { value: '4', label: 'Supplies, Materials and Devices' }, { value: '5', label: 'Other Services' }, { value: '6', label: 'Reimbursement and Petty Cash' } ],
            pmo: [ { value: '1', label: 'ORD' }, { value: '2', label: 'FAD' }, { value: '3', label: 'LGMED' }, { value: '4', label: 'LGCDD' }, ]
        };
    },
    mounted() {
        this.fetchPurchaseRequestDetails();
        axios.get(`../../api/viewPurchaseRequest/${this.$route.params.id}`).then((res) => {
                this.pr_data = res.data;
                this.current_step = res.data[0].step;
                this.pr_no = res.data[0].pr_no;
            }).catch((error) => { console.error("Error fetching data:", error); });
        // T O T A L A M O U N T
        const pr_id = this.$route.params.id
        axios.post('../../api/total_amount', {
            id: pr_id,
        }).then((res) => {
            this.total_amount = parseFloat(res.data[0].total_amount).toFixed(2);
        });

    },
    methods: {
        navigateToStep(step) {
            this.current_step = step;
        },
        fetchPurchaseRequestDetails() {
            const pr_id = this.$route.params.id;

            // Make an API call to get purchase request details based on pr_no
            axios.get(`/api/get_purchase_request_details`, { params: { id: pr_id } })
                .then((response) => {
                    // Update purchaseRequestData with the fetched values
                    this.purchaseRequestData.pmo = response.data.pmo;
                    this.purchaseRequestData.pr_type = response.data.type;
                    this.purchaseRequestData.pr_date = response.data.pr_date;
                    this.purchaseRequestData.target_date = response.data.target_date;
                    this.purchaseRequestData.particulars = response.data.purpose;
                })
                .catch((error) => {
                    console.log('Error fetching purchase request details:', error);
                });
        },

        fetch_pr_no: () => {

        },
        fetch_total_amount: () => {

        }
    },
    components: {
        Navbar,
        Sidebar,
        FooterVue,
        BreadCrumbs,
        dtable
    }
};
</script>
  
<style>
/* Add your component styles here */
</style>
  