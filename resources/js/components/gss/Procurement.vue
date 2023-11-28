
<style>

</style>
<template>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <Navbar></Navbar>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">


            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <Sidebar />
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <BreadCrumbs />
                    <DetailedReport/>
                   

                    <div class="row">
                        <div class="col-md-12 grid-margin mb-4 stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title">Annual Procurement Plan for F.Y 2023</p>
                                    <div class="box-tools">
                                        <button @click="toCreatePR()" type="button" class="btn btn-primary btn-icon-text">
                                            <i class="ti-plus btn-icon-prepend"></i>
                                            Create PR
                                        </button>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="table-responsive">
                                                <div id="example_wrapper"
                                                    class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-6"></div>
                                                        <div class="col-sm-12 col-md-6"></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                        <procurement_table/>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-5"></div>
                                                        <div class="col-sm-12 col-md-7"></div>
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
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <FooterVue />
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
</template>
<script>
import Navbar from '../layout/Navbar.vue';
import Sidebar from '../layout/Sidebar.vue';
import FooterVue from '../layout/Footer.vue';
import BreadCrumbs from '../dashboard_tiles/BreadCrumbs.vue';
import procurement_table from './procurement_table.vue';
import DetailedReport from '../dashboard_tiles/DetailedReport.vue';
import axios from 'axios';

export default {
    name: 'Procurement',
    data() {
        return {
            appItem: {
                app_total: null
            }
        }
    },
    components: {
        Navbar,
        Sidebar,
        FooterVue,
        BreadCrumbs,
        procurement_table,
        DetailedReport
        
    },
    mounted() {
       

    },
    methods: {
        toCreatePR() {
            this.$router.push("/gss/create_pr");
        },
        countTotalItem(cur_year) {
            axios.get(`../api/countTotalItem/${cur_year}`).then((res) => {
                this.appItem.app_total = res.data[0].item;
            })
        },
        fetchAppData() {
            let btn = null;
            axios.get('../api/fetchAppData').then((response) => {
                $('#app_table').DataTable({
                    retrieve: true,
                    data: response.data,
                    ordering: false,
                    paging: true,
                    pageLength: 10,

                    columns: [
                        { data: 'sn' },
                        { data: 'item_category_title' },
                        { data: 'item_title' },
                        { data: 'pmo_title' },
                        { data: 'mode_of_proc_title' },
                        { data: 'source_of_funds_title' },
                        { data: 'price' },
                        { data: 'app_year' },
                        {
                            data: null, orderable: false, render: function (data) {
                                return '<label class="badge badge-info" @click="deletePid(' + data.id + ')">View</label>';
                            },
                        },

                    ],

                });
            }).catch((error) => console.log(error));

        },
    },

}
</script>