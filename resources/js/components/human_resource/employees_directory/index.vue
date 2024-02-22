
<style>
.table-wrapper {
    overflow-x: auto;
}

.stretch-card0>.card {
    height: 60%;
}

.stretch-card2>.card {
    width: 100%;
    min-width: 100%;
    height: 60%;
}

.stretch-card3>.card {
    width: 100%;
    min-width: 100%;
    height: 60%;
}

.card-body2 {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1.25rem;
}

.card-title2 {
    background-color: #5856d6;
}

.grid-margin2 {
    margin-bottom: -10.5rem;
}
</style>
<template>
    <div class="container-scroller">
        <Navbar></Navbar>
        <div class="container-fluid page-body-wrapper">
            <Sidebar />

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-4 grid-margin2 stretch-card0">
                            <div class="card">
                                <div class="card-body2">
                                    <h4 class="card-title">User Accounts Statistics</h4>
                                </div>
                                <div class="table-wrapper">
                                    <table class="table">
                                        <thead>
                                            <tr class="card-title2">
                                                <th> </th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Region</td>
                                                <td><label class="badge badge-info">113</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Cavite</td>
                                                <td><label class="badge badge-info">71</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Laguna</td>
                                                <td><label class="badge badge-info">67</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Batangas</td>
                                                <td><label class="badge badge-info">77</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Rizal</td>
                                                <td><label class="badge badge-info">38</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Quezon</td>
                                                <td><label class="badge badge-info">90</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Lucena City</td>
                                                <td><label class="badge badge-info">8</label>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 grid-margin2 stretch-card2">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">For Action</h4>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr class="card-title2">
                                                    <th> </th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Primary Accounts with same Employee ID</td>
                                                    <td><label class="badge badge-info">8</label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Accounts with missing Office</td>
                                                    <td><label class="badge badge-info">5</label>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 grid-margin2 stretch-card3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">For Information</h4>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr class="card-title2">
                                                    <th> </th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Block Accounts</td>
                                                    <td><label class="badge badge-info">75</label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Total No. of Female Employee</td>
                                                    <td><label class="badge badge-info">267</label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Total No. of Male Employee</td>
                                                    <td><label class="badge badge-info">5</label>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!--Search Filter-->
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Search Filter</h4>
                            <form class="form-sample">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Office:</label>
                                            <div class="col-sm-8">
                                                <multiselect v-model="selected" :options="options" label="label"
                                                    :multiple="false"></multiselect>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Employee ID No.:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Age Category:</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" v-model="selectedAgeCategory">
                                                    <option disabled selected value="">Select an age category</option>
                                                    <option v-for="(category, index) in ageCategories" :key="index">{{
                                                        category }}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"></label>
                                            <div class="col-sm-8">
                                                <select class="form-control">
                                                    <option>All</option>
                                                    <option>18-24</option>
                                                    <option>25-34</option>
                                                    <option>35-44</option>
                                                    <option>45-54</option>
                                                    <option>65 and Over</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Age Category:</label>
                                            <div class="col-sm-8">
                                                <select class="form-control">
                                                    <option>All</option>
                                                    <option>18-24</option>
                                                    <option>25-34</option>
                                                    <option>35-44</option>
                                                    <option>45-54</option>
                                                    <option>65 and Ove</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"></label>
                                            <div class="col-sm-8">
                                                <select class="form-control">
                                                    <option>All</option>
                                                    <option>18-24</option>
                                                    <option>25-34</option>
                                                    <option>35-44</option>
                                                    <option>45-54</option>
                                                    <option>65 and Ove</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <FooterVue />

            </div>
        </div>
    </div>
</template>
<style src="vue-multiselect/dist/vue-multiselect.css"></style>

<script>
import Multiselect from 'vue-multiselect';

import Navbar from '../../layout/Navbar.vue';
import Sidebar from '../../layout/Sidebar.vue';
import FooterVue from '../../layout/Footer.vue';
import BreadCrumbs from '../../dashboard_tiles/BreadCrumbs.vue';

export default {
    name: 'Employees_Directory',
    data() {
        return {
            selected: null,
            options: [
                { label: 'All', value: 'All' },
                { label: 'Batangas', value: 'Batangas' },
                { label: 'Cavite', value: 'Cavite' },
                { label: 'Laguna', value: 'Laguna' },
                { label: 'Rizal', value: 'Rizal' },
                { label: 'Quezon', value: 'Quezon' },
                { label: 'Lucena City', value: 'Lucena City' }
            ],
            selectedAgeCategory: ' ',
            ageCategories: ['All', '18-24', '25-34', '35-44', '45-54', '65 and Over'],

        };
    },

    components: {
        Navbar,
        Sidebar,
        FooterVue,
        BreadCrumbs,
        Multiselect,
    },

    methods: {

    },


}
</script>

