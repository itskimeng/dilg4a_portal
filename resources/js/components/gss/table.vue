<!-- DataTable.vue -->

<template>
  <div class="table-container">
    <table class="table table-striped display expandable-table dataTable no-footer" role="grid" style="table-layout: fixed;">
      <thead>
        <tr>
          <th v-for="column in columns" :key="column">{{ column }}</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="item in data" :key="item.id">
          <td v-for="column in columns" :key="column"
            style="width: calc(100% / {{ columns.length }}); white-space: normal;">
            <!-- Check if the column is 'ACTION' -->
            <template v-if="column === 'action'">
              <div class="template-demo">
                <button type="button" class="btn btn-success btn-rounded btn-icon mr-2"><i class="ti-new-window"></i></button>
                <button type="button" class="btn btn-danger btn-rounded btn-icon"><i class="ti-trash"></i></button>
              </div>

            </template>
            
            <!-- If not 'ACTION', display the regular item[column] content -->
            <template v-else>
              {{ item[column] }}
            </template>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
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
  methods: {

  },
};
</script>


  
<style scoped>
.expandable-table tr td {
  padding: 7px;
  font-size: 14px;
  text-align: center;
}
.table th{
text-align: center;
}
.table-container {
  max-height: 700px;
  overflow-y: hidden;
  position: relative;
}

.table-container:hover {
  overflow-y: auto;
}

.table-container::-webkit-scrollbar {
  width: 12px;
}

.table-container::-webkit-scrollbar-thumb {
  background-color: #888;
  border-radius: 6px;
}

.table-container::-webkit-scrollbar-track {
  background-color: transparent;
}

table {
  width: 100%;
  border-collapse: collapse;
}

th,
td {
  padding: 12px;
  border: 1px solid #ddd;
  text-align: left;
}

th {
  position: sticky;
  top: 0;
  background-color: #f2f2f2;
}
</style>
  