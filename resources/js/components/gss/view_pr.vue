<template>
    <div class="container-scroller">
        <Navbar></Navbar>
        <div class="container-fluid page-body-wrapper">
            <Sidebar />
            <div class="main-panel">
                <div class="content-wrapper">
                    <BreadCrumbs />
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card card_shadow">
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
                            <div class="card card_shadow" style="margin-top: 10px;">
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
                        <div class="col-md-9 grid-margin mb-4 stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="card-title">Purchase Request No:</h4>
                                        <h4 class="card-title">Total Amount: Php 8,524.25</h4>
                                    </div>

                                    <div class="table-responsive">
                                        <dtable :data="pr_data" :columns="tableColumns" />
                                    </div>
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
            disabled: false, // Add this if needed
            tableColumns: ['serial_no', 'procurement', 'unit', 'description', 'app_price','action'],
        };
    },
    mounted() {
        axios
            .get(`../../api/viewPurchaseRequest/${this.$route.params.id}`)
            .then((res) => {
                this.pr_data = res.data;
            })
            .catch((error) => {
                console.error("Error fetching data:", error);
            });
    },
    methods:{
        fetch_pr_no:() =>{

        },
        fetch_total_amount:() =>{

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
  