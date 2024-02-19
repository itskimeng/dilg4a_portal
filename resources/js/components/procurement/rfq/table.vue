<style>
.btn-custom {
    padding: 15% !important;
}

.badge-cancelled {
    color: #fff;
    background-color: #3c3b41
}

.badge-with-rfq {
    color: #fff;
    background-color: #923909
}

.badge-received_gss {
    color: #fff;
    background-color: #0f087a
}

.badge-submitted_gss {
    color: #fff;
    background-color: #890564;
}
</style>
<template>
    <table style="width: 100%;" class="table table-striped display expandable-table dataTable no-footer" role="grid">

        <thead>
            <tr role="row">
                <th class="select-checkbox sorting_disabled" rowspan="1" colspan="1" aria-label="Quote#"
                    style="width: 61px;"> PURCHASE REQUEST #</th>


                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                    aria-label="Policy holder: activate to sort column ascending" style="width: 107px;">TOTAL AMOUNT</th>
                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                    aria-label="Premium: activate to sort column ascending" style="width: 126px;">PURPOSE</th>
                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                    aria-label="Status: activate to sort column ascending" style="width: 126px;">PR DATE</th>
                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                    aria-label="Updated at: activate to sort column ascending" style="width: 93px;">TARGET DATE</th>
                <th class="details-control sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 100px;">
                    STATUS</th>
                <th class="details-control sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 4px;"> TIME
                    ELAPSED</th>
                <th class="details-control sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 4px;">
                    CREATED BY</th>
                <th class="details-control sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 4px;">
                    ACTION</th>
            </tr>
        </thead>

        <tbody>
            <tr v-for="purchaseRequest in displayedItems" :key="purchaseRequest.id">
                <td>
                    <div class="badge badge-default"
                        @click="$router.push({ path: `/procurement/view_pr/${purchaseRequest.id}` })">
                        <b>{{ purchaseRequest.pr_no }}</b><br><i>~{{ purchaseRequest.office }}~</i>
                    </div>
                </td>
                <td>{{ purchaseRequest.app_price }}</td>
                <td>{{ purchaseRequest.particulars }}</td>
                <td>{{ purchaseRequest.pr_date }}</td>
                <td>{{ purchaseRequest.target_date }}</td>
                <td>
                    <div v-if="purchaseRequest.status_id == 1" class="badge badge-success">{{ purchaseRequest.status }}
                    </div>
                    <div v-if="purchaseRequest.status_id == 2" class="badge badge-primary">{{ purchaseRequest.status }}
                    </div>
                    <div v-if="purchaseRequest.status_id == 3" class="badge badge-warning">{{ purchaseRequest.status }}
                    </div>
                    <div v-if="purchaseRequest.status_id == 4" class="badge badge-submitted_gss">{{ purchaseRequest.status
                    }}</div>
                    <div v-if="purchaseRequest.status_id == 5" class="badge badge-received_gss">{{ purchaseRequest.status }}
                    </div>
                    <div v-if="purchaseRequest.status_id == 6" class="badge badge-with-rfq">{{ purchaseRequest.status }}
                    </div>
                    <div v-if="purchaseRequest.status_id == 7" class="badge badge-cancelled">{{ purchaseRequest.status }}
                    </div>
                </td>
                <td>5 minutes ago</td>
                <td>{{ purchaseRequest.created_by }}</td>

                <td>
                    <div v-if="this.userId == 1" class="template-demo d-flex justify-content-between flex-nowrap">
                        <button type="button" class="btn btn-success btn-rounded btn-icon"
                            @click="viewPr(purchaseRequest.id, purchaseRequest.status_id, purchaseRequest.step)">
                            <i class="ti-eye" style="margin-left: -3px;"></i>
                        </button>
                        <button type="button" class="btn btn-primary btn-rounded btn-icon"
                            @click="toGSS(purchaseRequest.id)">
                            <font-awesome-icon :icon="['fas', 'paper-plane']" style="margin-left: -3px;" />
                        </button>

                        <button type="button" class="btn btn-danger btn-rounded btn-icon">
                            <i class="ti-trash" style="margin-left: -3px;"></i>
                        </button>
                        <button class="btn btn-warning btn-rounded btn-icon">
                            <i class="ti-download" @click="exportPurchaseRequest(purchaseRequest.id)"
                                style="margin-left: -3px;"></i>
                        </button>
                    </div>

                    <div v-else-if="purchaseRequest.user_id == this.userId"
                        class="template-demo d-flex justify-content-between flex-nowrap">
                        <button type="button" class="btn btn-success btn-rounded btn-icon"
                            @click="viewPr(purchaseRequest.id, purchaseRequest.status_id, purchaseRequest.step)">
                            <i class="ti-eye" style="margin-left: -3px;"></i>
                        </button>
                        <button type="button" class="btn btn-danger btn-rounded btn-icon">
                            <i class="ti-trash" style="margin-left: -3px;"></i>

                        </button>
                        <button class="btn btn-warning btn-rounded btn-icon">
                            <i class="ti-download" @click="exportPurchaseRequest(purchaseRequest.id)"
                                style="margin-left: -3px;"></i>
                        </button>
                    </div>
                    <div v-else class="template-demo d-flex justify-content-between flex-nowrap">
                        <button type="button" class="btn btn-success btn-rounded btn-icon"
                            @click="viewPr(purchaseRequest.id, purchaseRequest.status_id, purchaseRequest.step)">
                            <i class="ti-eye" style="margin-left: -3px;"></i>
                        </button>

                    </div>
                </td>

            </tr>
        </tbody>
    </table>
    <Pagination :total="purchaseRequests.length" @pageChange="onPageChange" />
</template>

<script>
import axios from 'axios';
import Pagination from '../Pagination.vue';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { library } from '@fortawesome/fontawesome-svg-core'; // Import the library object
import { faEye, faPaperPlane } from '@fortawesome/free-solid-svg-icons';
import { toast } from "vue3-toastify";
library.add(faEye, faPaperPlane);
export default {
    data() {
        return {
            userId: null,
            purchaseRequests: [],
            currentPage: 1,
            itemsPerPage: 5,
        };
    },
    components: {
        Pagination,
        FontAwesomeIcon
    },
    computed: {
        totalPages() {
            return Math.ceil(this.purchaseRequests.length / this.itemsPerPage);
        },
        displayedItems() {
            const start = (this.currentPage - 1) * this.itemsPerPage;
            const end = start + this.itemsPerPage;
            return this.purchaseRequests.slice(start, end);
        },
    },
    created() {
        this.userId = localStorage.getItem('userId');
    },
    mounted() {
        this.loadData();

    },
    methods: {

        loadData() {
            axios.post(`../../api/fetchPurchaseReqData`)
                .then(response => {
                    this.purchaseRequests = response.data.data;

                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                });
        },
        onPageChange(page) {
            this.currentPage = page;
            // Fetch data for the new page
            this.loadData();
        },
        viewPr(pr_id, status, step_no) {
            // Check if the status is DRAFT
            if (step_no === 3) {
                // If DRAFT, use 'procurement/update_pr/' route
                this.$router.push({ path: '/procurement/update_pr', query: { id: pr_id, step: step_no } });
            } else {
                // Otherwise, use the 'procurement/view_pr/' route
                this.$router.push({ path: `/procurement/view_pr/${pr_id}` });
            }
        },
        exportPurchaseRequest(pr_id) {
            window.location.href = `../../api/export-purchase-request/${pr_id}?export=true`;
        },
        toGSS(id) {
            const STATUS_SUBMITTED_TO_GSS = 4;
            axios.post(`../../api/post_update_status`, {
                pr_id: id,
                status: STATUS_SUBMITTED_TO_GSS,
            }
            ).then(() => {
                toast.success('Successfully submitted to the GSS!', {
                    autoClose: 2000
                });
                location.reload();

            }).catch((error) => {

            })

        }
    },
};
</script>
