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
                                        <p class="card-description">
                                            Basic form layout
                                        </p>
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
                                            <input type="password" class="form-control" id="exampleInputPassword1"
                                                placeholder="Item Name" v-model="formData.item_name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputConfirmPassword1">Unit</label>
                                            <input type="password" class="form-control" id="exampleInputConfirmPassword1"
                                                placeholder="Unit" v-model="formData.item_unit">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Source of Funds</label>
                                            <select class="form-control form-control-lg" id="exampleFormControlSelect1"
                                                v-model="formData.source">
                                                <option value = "1">Regular, Local and Trust Fund</option>
                                                <option value = "2">Local Fund</option>
                                                <option value = "3">Regular Fund</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title"></h4>
                                        <p class="card-description">
                                            Basic form layout
                                        </p>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Category</label>
                                            <input type="text" class="form-control" id="exampleInputUsername1"
                                                placeholder="Category" v-model="formData.item_category">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Office</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                placeholder="Office" v-model="formData.office">
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
                                                <option value = "2">Shopping</option>
                                                <option value = "6">Agency to Agency</option>
                                                <option value = "1">Small Value Procurement</option>
                                                <option value = "4">NP Lease of Venue</option>
                                                <option value = "7">Public Bidding</option>
                                                <option value = "5">Direct Contracting</option>
                                                <option value = "8">Not Applicable</option>
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-primary mr-2 pull-right">Submit</button>
                                        <button class="btn btn-light pull-right-cancel">Cancel</button>
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

export default {
    name: 'Add Annual Procurement Plan Item',
    data() {
        return {
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

    },
    methods: {
        submitAppItem() {
            // Handle form submission here
            // console.log('Form submitted with data:', this.formData);
            // You can send the form data to your server or perform any other action.
            axios.post('/api/post_add_appItem', {
                sn: this.formData.stock_number,
                code: this.formData.item_code,
                item_title: this.formData.item_title,
                unit: this.formData.item_unit,
                source_of_funds_id: this.formData.source,
                category_id: this.formData.category,
                office: this.formData.office,
                qty: this.formData.quantity,
                app_price: this.formData.app_price,
                mode: this.formData.mode,
            }
            ).then(() => {
                window.location = "/GeneralSupplyService/create_pr/" + this.pr_no;
                // router.push({name: 'GeneralSupplyService',params:{id:this.pr_no}})
            }).catch((error) => {
                this.errors = error.response.data.errors;
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
    }

}
</script>