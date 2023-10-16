
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
                    <div class="row">
                        <div class="col-md-12 grid-margin mb-4 stretch-card">

                            <div class="col-md-3 col-sm-12 col-xs-12 mb-6 stretch-card transparent">
                                <div class="card card-tale">
                                    <div class="card-body">
                                        <p class="mb-4">APP Item</p>
                                        <p class="fs-30 mb-2">4006</p>
                                        <p>10.00% (30 days)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 col-xs-12 mb-6 stretch-card transparent">
                                <div class="card card-dark-blue">
                                    <div class="card-body">
                                        <p class="mb-4">Procurement Rate</p>
                                        <p class="fs-30 mb-2">61344</p>
                                        <p>22.00% (30 days)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 col-xs-12 mb-6 stretch-card transparent">
                                <div class="card card-light-blue">
                                    <div class="card-body">
                                        <p class="mb-4">Total Item Procure</p>
                                        <p class="fs-30 mb-2">34040</p>
                                        <p>2.00% (30 days)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 col-xs-12 mb-6 stretch-card transparent">
                                <div class="card card-light-danger">
                                    <div class="card-body">
                                        <p class="mb-4">Number of Clients</p>
                                        <p class="fs-30 mb-2">47033</p>
                                        <p>0.22% (30 days)</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12 grid-margin mb-4 stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title">Annual Procurement Plan for F.Y 2023</p>
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
                                                            <table id="app_table"
                                                                class="display expandable-table dataTable no-footer"
                                                                style="width: 100%;" role="grid">
                                                                <thead>
                                                                    <tr role="row">
                                                                        <th class="select-checkbox sorting_disabled"
                                                                            rowspan="1" colspan="1" aria-label="Quote#"
                                                                            style="width: 61px;">
                                                                            Stock #</th>
                                                                        <th class="sorting_desc" tabindex="0"
                                                                            aria-controls="example" rowspan="1" colspan="1"
                                                                            aria-label="Product: activate to sort column ascending"
                                                                            aria-sort="descending" style="width: 67px;">
                                                                            Category</th>
                                                                        <th class="sorting" tabindex="0"
                                                                            aria-controls="example" rowspan="1" colspan="1"
                                                                            aria-label="Business type: activate to sort column ascending"
                                                                            style="width: 113px;">Item</th>
                                                                        <th class="sorting" tabindex="0"
                                                                            aria-controls="example" rowspan="1" colspan="1"
                                                                            aria-label="Policy holder: activate to sort column ascending"
                                                                            style="width: 107px;">Office</th>
                                                                        <th class="sorting" tabindex="0"
                                                                            aria-controls="example" rowspan="1" colspan="1"
                                                                            aria-label="Premium: activate to sort column ascending"
                                                                            style="width: 126px;">Mode of Procurement</th>
                                                                        <th class="sorting" tabindex="0"
                                                                            aria-controls="example" rowspan="1" colspan="1"
                                                                            aria-label="Status: activate to sort column ascending"
                                                                            style="width: 126px;">Source of Funds</th>
                                                                        <th class="sorting" tabindex="0"
                                                                            aria-controls="example" rowspan="1" colspan="1"
                                                                            aria-label="Updated at: activate to sort column ascending"
                                                                            style="width: 93px;">App Price</th>
                                                                        <th class="details-control sorting_disabled"
                                                                            rowspan="1" colspan="1" aria-label=""
                                                                            style="width: 100px;">App Year</th>
                                                                        <th class="details-control sorting_disabled"
                                                                            rowspan="1" colspan="1" aria-label=""
                                                                            style="width: 4px;">Actions</th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>

                                                                </tbody>
                                                            </table>
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
import axios from 'axios';

export default {
    name: 'AnnualProcurementPlan',
    components: {
        Navbar,
        Sidebar,
        FooterVue,
        BreadCrumbs
    },
    mounted() {
        // $('#itemModal').modal('hide');
        this.fetchAppData();

    },
    methods: {
        fetchAppData() {
            let btn = null;
            axios.get('../api/fetchAppData').then((response) => {
                $('#app_table').DataTable({
                    retrieve:true,
                    data: response.data,
                    ordering: false,
                    paging:false,
                    columns: [
                        { data: 'sn' },
                        { data: 'category_id' },
                        { data: 'item_title' },
                        { data: 'pmo_id' },
                        { data: 'mode' },
                        { data: 'source_of_funds_id' },
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