<style>
.pull-right {
    position: absolute;
    right: 100px;
    top: 10px;
}

.pull-right-cancel {
    position: absolute;
    right: 10px;
    top: 10px;
}
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
                    <form class="form-sample" @submit.prevent="submitAppItem">

                        <div class="row">
                            <div class="col-md-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title"></h4>

                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Stock Number</label>
                                            <input type="text" class="form-control" id="exampleInputUsername1"
                                                placeholder="Stock Number" v-model="formData.stock_number">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Item Code</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                placeholder="Item Code" v-model="formData.item_code">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Item Name</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1"
                                                placeholder="Item Name" v-model="formData.item_title">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputConfirmPassword1">Unit</label>
                                            <select class="form-control form-control-lg" id="exampleFormControlSelect1"
                                                v-model="formData.unit">
                                                <option v-for="option in unitOption" :key="option.value"
                                                    :value="option.value">{{ option.label }}</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Source of Funds</label>
                                            <select class="form-control form-control-lg" id="exampleFormControlSelect1"
                                                v-model="formData.source">
                                                <option v-for="option in fundsOption" :key="option.value"
                                                    :value="option.value">{{ option.label }}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title"></h4>

                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Category</label>
                                            <input type="text" class="form-control" id="exampleInputUsername1"
                                                placeholder="Category" v-model="formData.item_category">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Office</label>

                                            <select class="form-control form-control-lg" id="exampleFormControlSelect1"
                                                v-model="formData.office">
                                                <option v-for="option in officeData" :key="option.value"
                                                    :value="option.value">{{ option.label }}</option>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Quantity</label>
                                            <input type="number" class="form-control" id="exampleInputPassword1"
                                                v-model="formData.quantity">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputConfirmPassword1">APP Price</label>
                                            <input type="number" class="form-control" id="exampleInputConfirmPassword1"
                                                placeholder="Password" v-model="formData.app_price">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Mode of Procurement</label>
                                            <select class="form-control form-control-lg" id="exampleFormControlSelect1"
                                                v-model="formData.mode">
                                                <option v-for="option in modeOption" :key="option.value"
                                                    :value="option.value">{{ option.label }}</option>
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-primary  pull-right-cancel">Submit</button>

                                        <!-- Example button to trigger the toast -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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
import { toast } from 'vue3-toastify';
import 'vue3-toastify/dist/index.css';


export default {
    name: 'Add Annual Procurement Plan Item',
    props: {
        options: {
            type: Array,
            required: true,
        },
    },
    data() {
        return {
            unitOption: [
                { value: '1', label: 'piece' },
                { value: '2', label: 'box' },
                { value: '3', label: 'ream' },
                { value: '4', label: 'lot' },
                { value: '5', label: 'unit' },
                { value: '6', label: 'crtg' },
                { value: '7', label: 'pack' },
                { value: '8', label: 'tube' },
                { value: '9', label: 'roll' },
                { value: '10', label: 'can' },
                { value: '11', label: 'bottle' },
                { value: '12', label: 'set' },
                { value: '13', label: 'jar' },
                { value: '14', label: 'bundle' },
                { value: '15', label: 'pad' },
                { value: '16', label: 'book' },
                { value: '17', label: 'pouch' },
                { value: '18', label: 'dozen' },
                { value: '19', label: 'pair' },
                { value: '20', label: 'gallon' },
                { value: '21', label: 'cart' },
                { value: '22', label: 'pax' },
                { value: '23', label: 'liters' },
                { value: '24', label: 'meters' },
            ],
            fundsOption: [
                { value: '1', label: 'Regular, Local and Trust Fund' },
                { value: '2', label: 'Local Fund' },
                { value: '3', label: 'Regular Fund' }
            ],
            officeData: [
                { value: '1', label: 'ORD' },
                { value: '2', label: 'FAD' },
                { value: '3', label: 'LGMED' },
                { value: '4', label: 'LGCDD' }
            ],
            modeOption: [
                { value: '1', label: 'Small Value Procurement' },
                { value: '2', label: 'Shopping' },
                { value: '4', label: 'NP Lease of Venue' },
                { value: '5', label: 'Direct Contracting' },
                { value: '6', label: 'Agency to Agency' },
                { value: '7', label: 'Public Bidding' },
                { value: '8', label: 'Not Applicable' },

            ],

            formData: {
                stock_number: '',
                item_code: '',
                item_name: '',
                unit: '',
                source: '',
                category: '',
                office: '',
                quantity: '',
                app_price: '',
                mode: '',
            },
            cardTitle: "Please provide the needed information below. Fill out all the required fields (*)."
        }


    },
    components: {
        Navbar,
        Sidebar,
        FooterVue,
        BreadCrumbs,
    },

    mounted() {
        // This works
    },
    methods: {
        showToatWarning() {
            toast.warning('Wow warning!', {
                autoClose: 1000,
            });
        },
        showToatSuccess(message) {
            toast.success(message, {
                autoClose: 1000,
            });
        },
        showToatInfo() {
            toast.info('Wow info!', {
                autoClose: 1000,
            });
        },
        submitAppItem() {
            // Handle form submission here
            // console.log('Form submitted with data:', this.formData);
            // You can send the form data to your server or perform any other action.
            axios.post('/api/post_add_appItem', {
                sn: this.formData.stock_number,
                code: this.formData.item_code,
                item_title: this.formData.item_title,
                unit: this.formData.unit,
                source_of_funds_id: this.formData.source,
                category_id: this.formData.category,
                office: this.formData.office,
                qty: this.formData.quantity,
                app_price: this.formData.app_price,
                mode: this.formData.mode,
            }
            ).then(() => {
                // window.location = "/GeneralSupplyService/create_pr/" + this.pr_no;

                this.showToatSuccess('Successfully added!');


                setTimeout(() => {
                    this.$router.push({ path: '/gss/AnnualProcurementPlan' });
                }, 2000); // Adjust the delay as needed

            }).catch((error) => {

            })

        },
        cancelForm() {
            // Handle form cancellation or reset here
            this.formData = {
                username: '',
                email: '',
                password: '',
                confirmPassword: '',
                rememberMe: false,
            };

        },

    },


}
</script>