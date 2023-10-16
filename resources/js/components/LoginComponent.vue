<template>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-12 px-sm-5">
                            <div class="brand-logo">
                                <img :src="dilg_banner" alt="logo">
                            </div>
                            <h4 class="header-align-center">Finance and Administrative System</h4>
                            <h6 class="font-weight-light header-align-center">Sign in to continue.</h6>
                            <form class="pt-3" @submit.prevent="loginUser">
                                <div class="form-group">
                                    <input type="email" v-model="form.email" class="form-control form-control-lg"
                                        id="exampleInputEmail1" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" v-model="form.password" class="form-control form-control-lg"
                                        id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="mt-3">
                                    <button type="submit"
                                        class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN
                                        IN</button>
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input">
                                            Keep me signed in
                                        </label>
                                    </div>
                                    <a href="#" class="auth-link text-black">Forgot password?</a>
                                </div>
                                <div class="mb-2">
                                    <button class="btn btn-block btn-facebook auth-form-btn">
                                        <i class="ti-facebook mr-2"></i>Connect using facebook
                                    </button>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Don't have an account? <a href="register.html" class="text-primary">Create</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
</template>
<style>
.auth .brand-logo img {
    width: 100% !important;

}

.header-align-center {
    text-align: center;
}
</style>
<script>
import dilg_banner from "../../../assets/images/login.png";
import axios from 'axios';
export default {
    name: 'Login',
    data() {
        return {
            dilg_banner: dilg_banner,
            results: {},
            form: {
                email: '',
                password: '',
            },
            errors: []
        }
    },
    methods: {
        loginUser() {
            axios
                .post('http://127.0.0.1:8000/api/login', this.form)
                .then(() => {
                    console.log('You are logged in');
                    this.$router.push({ name: 'Dashboard' });

                })
                .catch((error) => {
                    if (error.response && error.response.data) {
                        // Server returned an error response
                        this.errors = error.response.data.errors;
                    } else {
                        // Error occurred during the request
                        console.log(error);
                    }
                });
        },
    },
    mounted() {

    }
}


</script>