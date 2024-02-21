<style>
.input-icons {
    width: 100%;
    margin-bottom: 10px;
}

.input-icons i {
    position: absolute;
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
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <button class="btn btn-success" style="float:right;">Award</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 mt-4">
                            <AbstractInfo />
                        </div>
                        <!-- <div class="col-lg-4 col-md-12 col-sm-12 mt-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-borderless">
                                            <thead>
                                                <tr>
                                                    <th>Supplier Name</th>
                                                    <th>PhilGeps Reg. No</th>
                                                    <th>Line of Business</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>ASR</td>
                                                    <td class="font-weight-bold"></td>
                                                    <td class="font-weight-medium">
                                                        <div class="badge badge-danger">SELECT</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>ASR</td>
                                                    <td class="font-weight-bold"></td>
                                                    <td class="font-weight-medium">
                                                        <div class="badge badge-success">Completed</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>ASR</td>
                                                    <td class="font-weight-bold"></td>
                                                    <td class="font-weight-medium">
                                                        <div class="badge badge-success">Completed</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>ASR</td>
                                                    <td class="font-weight-bold"></td>
                                                    <td class="font-weight-medium">
                                                        <div class="badge badge-success">Completed</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>ASR</td>
                                                    <td class="font-weight-bold"></td>
                                                    <td class="font-weight-medium">
                                                        <div class="badge badge-success">Completed</div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-lg-12 col-md-12 col-sm-12 mt-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><font-awesome-icon
                                            :icon="['fas', 'list']"></font-awesome-icon>&nbsp;App Item List
                                    </h5>
                                    <div class="table-responsive">
                                        <button type="button" @click="openModal()" class="btn btn-success"
                                            style="float:right">Add Supplier</button>
                                        <table class="table table-striped table-borderless">
                                            <thead>
                                                <tr>
                                                    <th>App Item</th>
                                                    <th>Description</th>
                                                    <th>Quantity</th>
                                                    <th>App Price</th>
                                                    <th>Total ABC</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>ASR</td>
                                                    <td class="font-weight-bold"></td>
                                                    <td class="font-weight-bold"></td>
                                                    <td class="font-weight-bold"></td>
                                                    <td class="font-weight-medium">
                                                        <div class="badge badge-success">Completed</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>ASR</td>
                                                    <td class="font-weight-bold"></td>
                                                    <td class="font-weight-bold"></td>
                                                    <td class="font-weight-bold"></td>
                                                    <td class="font-weight-medium">
                                                        <div class="badge badge-success">Completed</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>ASR</td>
                                                    <td class="font-weight-bold"></td>
                                                    <td class="font-weight-bold"></td>
                                                    <td class="font-weight-bold"></td>
                                                    <td class="font-weight-medium">
                                                        <div class="badge badge-success">Completed</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>ASR</td>
                                                    <td class="font-weight-bold"></td>
                                                    <td class="font-weight-bold"></td>
                                                    <td class="font-weight-bold"></td>
                                                    <td class="font-weight-medium">
                                                        <div class="badge badge-success">Completed</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>ASR</td>
                                                    <td class="font-weight-bold"></td>
                                                    <td class="font-weight-bold"></td>
                                                    <td class="font-weight-bold"></td>
                                                    <td class="font-weight-medium">
                                                        <div class="badge badge-success">Completed</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>ASR</td>
                                                    <td class="font-weight-bold"></td>
                                                    <td class="font-weight-bold"></td>
                                                    <td class="font-weight-bold"></td>
                                                    <td class="font-weight-medium">
                                                        <div class="badge badge-success">Completed</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>ASR</td>
                                                    <td class="font-weight-bold"></td>
                                                    <td class="font-weight-bold"></td>
                                                    <td class="font-weight-bold"></td>
                                                    <td class="font-weight-medium">
                                                        <div class="badge badge-success">Completed</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>ASR</td>
                                                    <td class="font-weight-bold"></td>
                                                    <td class="font-weight-bold"></td>
                                                    <td class="font-weight-bold"></td>
                                                    <td class="font-weight-medium">
                                                        <div class="badge badge-success">Completed</div>
                                                    </td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <SelectSupplierModal :visible="modalVisible" @close="closeModal" />

    </div>
</template>
<script>
import Navbar from '../../layout/Navbar.vue';
import Sidebar from '../../layout/Sidebar.vue';
import FooterVue from '../../layout/Footer.vue';
import BreadCrumbs from '../../dashboard_tiles/BreadCrumbs.vue';
import UserInfo from '../../procurement/user_info.vue';
import Pagination from '../Pagination.vue';
import SelectSupplierModal from "./modal/modal_select_supplier.vue";
import AbstractInfo from "./panel/abstract_info.vue";

import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { library } from '@fortawesome/fontawesome-svg-core'; // Import the library object
import { faCircleInfo, faList } from '@fortawesome/free-solid-svg-icons';


library.add(faCircleInfo, faList);

export default {
    name: 'Awarding',
    data() {
        return {
            modalVisible: false,
            abstract_no: null,
        }
    },
    components: {
        Navbar,
        Sidebar,
        FooterVue,
        BreadCrumbs,
        UserInfo,
        Pagination,
        FontAwesomeIcon,
        SelectSupplierModal,
        AbstractInfo
    },
    methods: {
        openModal() {
            this.modalVisible = true;
        },
        closeModal() {
            this.modalVisible = false;
        },
    }
}
</script>