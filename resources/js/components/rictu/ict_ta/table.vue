<template>
    <div>
        <table class="table table-striped table-borderless">
            <thead>
                <tr role="row">
                    <th rowspan="2" class="sorting_asc" tabindex="0" aria-controls="ict_monitoring" colspan="1"
                        aria-sort="ascending" aria-label="NO: activate to sort column descending">NO</th>
                    <th rowspan="2" style="width: 10%;" class="sorting" tabindex="0" aria-controls="ict_monitoring"
                        colspan="1" aria-label="ICT TECHNICAL ASSISTANCE REFERENCE NO.: activate to sort column ascending">
                        ICT TECHNICAL ASSISTANCE REFERENCE NO.</th>
                    <th colspan="2" scope="colgroup" style="text-align: center;" rowspan="1">RECEIVED</th>
                    <th rowspan="2" style="width: 10%;" class="sorting" tabindex="0" aria-controls="ict_monitoring"
                        colspan="1" aria-label="NAME OF THE END-USER: activate to sort column ascending"> NAME OF THE
                        END-USER</th>
                    <th rowspan="2" style="width: 5%;" class="sorting" tabindex="0" aria-controls="ict_monitoring"
                        colspan="1"
                        aria-label="OFFICE/SERVICE/ BUREAU DIVISION/SECTIO N/UNIT: activate to sort column ascending">
                        OFFICE/SERVICE/<br> BUREAU<br> DIVISION/SECTIO<br> N/UNIT</th>
                    <th rowspan="2" style="width: 10%;" class="sorting" tabindex="0" aria-controls="ict_monitoring"
                        colspan="1" aria-label="ISSUE/CONCERN: activate to sort column ascending"> ISSUE/CONCERN</th>
                    <th rowspan="2" style="width: 10%;" class="sorting" tabindex="0" aria-controls="ict_monitoring"
                        colspan="1" aria-label="TECHNICAL PERSONNEL ASSIGNED: activate to sort column ascending"> TECHNICAL
                        PERSONNEL ASSIGNED</th>
                    <th colspan="2" scope="colgroup" rowspan="1">COMPLETED</th>
                    <th rowspan="2" style="width: 5%;" class="sorting" tabindex="0" aria-controls="ict_monitoring"
                        colspan="1" aria-label="TYPE OF REQUEST: activate to sort column ascending">TYPE OF REQUEST</th>
                    <th rowspan="2" style="width:5%!important;" class="sorting" tabindex="0" aria-controls="ict_monitoring"
                        colspan="1" aria-label="STATUS: activate to sort column ascending">STATUS</th>
                    <th rowspan="2" style="width:6%!important;" class="sorting" tabindex="0" aria-controls="ict_monitoring"
                        colspan="1" aria-label="ACTIONS: activate to sort column ascending">ACTIONS</th>
                </tr>
                <tr role="row">
                    <th scope="col" class="sorting" tabindex="0" aria-controls="ict_monitoring" rowspan="1" colspan="1"
                        aria-label="DATE: activate to sort column ascending">DATE</th>
                    <th scope="col" class="sorting" tabindex="0" aria-controls="ict_monitoring" rowspan="1" colspan="1"
                        aria-label="TIME: activate to sort column ascending">TIME</th>
                    <th scope="col" class="sorting" tabindex="0" aria-controls="ict_monitoring" rowspan="1" colspan="1"
                        aria-label="DATE: activate to sort column ascending">DATE</th>
                    <th scope="col" class="sorting" tabindex="0" aria-controls="ict_monitoring" rowspan="1" colspan="1"
                        aria-label="TIME: activate to sort column ascending">TIME</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="ict_data in displayedItems" :key="ict_data.id">
                    <td>{{ ict_data.id }}</td>
                    <td>{{ ict_data.control_no }}</td>
                    <td>~</td>
                    <td>~</td>
                    <td>{{ ict_data.requested_by }}</td>
                    <td>{{ ict_data.office }}</td>
                    <td>{{ict_data.remarks}} </td>
                    <td>{{ ict_data.office }}</td>
                    <td>{{ ict_data.office }}</td>

                    <td>{{ ict_data.office }}</td>

                    <td> <span class="badge badge-success">{{ ict_data.type_of_request }}</span> </td>

                    <td>{{ ict_data.office }}</td>

                    <td>{{ ict_data.office }}</td>



                </tr>
            </tbody>
        </table>
        <Pagination :total="ict_data.length" @pageChange="onPageChange" />

    </div>
</template>
<script>
import Pagination from '../../procurement/Pagination.vue';

export default {
    name: 'ict table',
    components: {
        Pagination
    },
    data() {
        return {
            ict_data: [],
            currentPage: 1,
            itemsPerPage: 10,
        }
    },
    computed: {
        totalPages() {
            return Math.ceil(this.ict_data.length / this.itemsPerPage);
        },
        displayedItems() {
            const start = (this.currentPage - 1) * this.itemsPerPage;
            const end = start + this.itemsPerPage;
            return this.ict_data.slice(start, end);
        },
    },
    mounted() {
        this.load_ict_request()
    },
    methods: {
        load_ict_request() {
            axios.get(`../../api/fetch_ict_request`)
                .then(response => {
                    this.ict_data = response.data.data;
                    console.log(this.ict_data);
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
}
</script>