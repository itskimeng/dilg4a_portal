<!-- DataTable.vue -->

<template>
    <div style="max-height: 700px; overflow-y: auto;">
        <table class="table table-striped table-borderless display expandable-table dataTable no-footer" role="grid" style="table-layout: fixed;">
            <thead>
                <tr>
                    <th v-for="column in columns" :key="column">{{ column }}</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="item in data" :key="item.id">
                    <td v-for="column in columns" :key="column" style="width: calc(100% / {{ columns.length }}); white-space: normal;">{{ item[column] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <button type="button" class="btn btn-success btn-md">Save</button>

</template>

<script>
export default {
    props: {
        data: {
            type: Array,
            required: true,
        },
        columns: {
            type: Array,
            required: true,
        },
    },
};
</script>

<style scoped>
button{
    margin-top:2%;
}
</style>
