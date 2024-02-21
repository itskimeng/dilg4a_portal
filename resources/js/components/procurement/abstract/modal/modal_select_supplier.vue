<template>
    <div v-if="visible" class="modal-background">
        <div class="modal fade show mt-4" tabindex="-1" style="display: block;">
            <div class="modal-dialog" style="margin-top: 20px; display: flex; align-items: center;">
                <div class="modal-content" style="width: 150%; margin-bottom: 5%;">
                    <div class="modal-header">
                        <div
                            style="width: 75px; height: 75px; border-radius: 50%; display: flex; align-items: center; justify-content: center; position: absolute; top: -18px; background-color: white; color: #4cae4c; left: 45%;">
                            <img :src="logo" style="width:60px; height:60px;">
                        </div>
                    </div>
                    <div class="modal-body">
                        <h5 class="card-title"><font-awesome-icon
                                :icon="['fas', 'circle-info']"></font-awesome-icon>&nbsp;Supplier Infomation List</h5>

                        <div class="table-responsive">
                            <table class="table table-striped table-borderless">
                                <thead>
                                    <tr>
                                        <th>Supplier</th>
                                        <th>PhilGeps Registration No.</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox"> &nbsp;Search Engine Marketing</td>
                                        <td class="font-weight-bold">$362</td>
                                        <td>21 Sep 2018</td>
                                        <td class="font-weight-medium">
                                            <div class="badge badge-success">Completed</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"> &nbsp;Search Engine Marketing</td>
                                        <td class="font-weight-bold">$362</td>
                                        <td>21 Sep 2018</td>
                                        <td class="font-weight-medium">
                                            <div class="badge badge-success">Completed</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"> &nbsp;Search Engine Marketing</td>
                                        <td class="font-weight-bold">$362</td>
                                        <td>21 Sep 2018</td>
                                        <td class="font-weight-medium">
                                            <div class="badge badge-success">Completed</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"> &nbsp;Search Engine Marketing</td>
                                        <td class="font-weight-bold">$362</td>
                                        <td>21 Sep 2018</td>
                                        <td class="font-weight-medium">
                                            <div class="badge badge-success">Completed</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" @click="close()" class="btn btn-primary"
                            style="float: right;margin-left:5px;">Close</button>
                        <button type="button" class="btn btn-success" style="float: right;">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
    
<script>
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { library } from '@fortawesome/fontawesome-svg-core'; // Import the library object
import { faCircleInfo } from '@fortawesome/free-solid-svg-icons';

import dilg_logo from "../../../../../assets/logo.png";
import { toast } from "vue3-toastify";

export default {
    props: {
        visible: Boolean,
        rfqNo: String, // Define rfqNo as a prop
        // Other props...
    },
    components: {
        FontAwesomeIcon
    },
    data() {
        return {
            logo: dilg_logo,
        }
    },
    props: {
        visible: Boolean,
    },

    methods: {
        close() {
            this.$emit('close');
        },
    },


};
</script>
    
    
<style>
/* Style for dimming the background */
.modal-background {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    /* Adjust the opacity to make it darker or lighter */
    z-index: 1050;
    /* Ensure it's above other elements */
}

/* Style for centering the modal */
.modal-dialog {
    margin-top: 10%;
    /* Adjust as needed */
}

.selected img {
    border: 2px solid #007bff;
    /* Change the border color as needed */
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    /* Change the box shadow as needed */
}

/* Style for dimming the background */
.modal-background {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    /* Adjust the opacity to make it darker or lighter */
    z-index: 1050;
    /* Ensure it's above other elements */
}

/* Style for centering the modal */
.modal-dialog {
    margin-top: 10%;
    /* Adjust as needed */
}

/* You may need additional styles to customize the appearance of the modal */
</style>
    