<style>
.btn-custom {
    padding: 15% !important;
}
</style>
<template>
    <table id="pr_tbl" style="width: 100%;"
        class="table table-striped table-borderless display expandable-table dataTable no-footer" role="grid">
        <thead>
            <tr role="row">
                <th class="select-checkbox sorting_disabled" rowspan="1" colspan="1" aria-label="Quote#"
                    style="width: 61px;"> PURCHASE REQUEST #</th>

             
                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                    aria-label="Policy holder: activate to sort column ascending" style="width: 107px;">PRICE</th>
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
                    ACTION</th>
            </tr>
        </thead>

        <tbody>
            <tr v-for="purchaseRequest in displayedItems" :key="purchaseRequest.id">
                <td> <div class="badge badge-default" @click="$router.push({ path: `/gss/view_pr/${purchaseRequest.id}` })"> <b>{{ purchaseRequest.pr_no }}</b><br><i>~{{ purchaseRequest.office }}~</i></div>
                </td>
                <td>{{ purchaseRequest.app_price }}</td>
                <td>{{ purchaseRequest.particulars }}</td>
                <td>{{ purchaseRequest.pr_date }}</td>
                <td>{{ purchaseRequest.target_date }}</td>
                <td>
                    <div class="badge badge-danger">{{ purchaseRequest.status }}</div>
                </td>
                <td>5 minutes ago</td>
                <td>
                    <div class="template-demo d-flex justify-content-between flex-nowrap">
                        <button @click="$router.push({ path: `/gss/view_pr/${purchaseRequest.id}` })" type="button" class="btn btn-success btn-rounded btn-icon">
                            <i class="ti-eye" style="margin-left: -2px;"></i>
                        </button>
                        <button type="button" class="btn btn-info btn-rounded btn-icon">
                            <i class="ti-new-window" style="margin-left: -2px;"></i>
                        </button>
                        <button type="button" class="btn btn-danger btn-rounded btn-icon">
                            <i class="ti-trash" style="margin-left: -2px;"></i>
                        </button>
                        <button type="button" class="btn btn-warning btn-rounded btn-icon">
                            <i class="ti-download" style="margin-left: -2px;"></i>
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
import Pagination from './Pagination.vue';

export default {
    data() {
        return {
            purchaseRequests: [],
            currentPage: 1,
            itemsPerPage: 10,
        };
    },
    components: {
        Pagination,
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
    mounted() {
        this.loadData();
    },
    methods: {
        loadData() {
            axios.post(`../api/fetchPurchaseReqData`)
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
    },
};
</script>
