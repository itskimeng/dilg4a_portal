<template>
    <nav aria-label="Page navigation">
      <ul class="pagination">
        <li class="page-item" :class="{ disabled: currentPage === 1 }">
          <a class="page-link" href="#" @click="changePage(currentPage - 1)">Previous</a>
        </li>
        <li v-for="page in Array.from(Array(totalPages).keys())" :key="page + 1" class="page-item" :class="{ active: page + 1 === currentPage }">
          <a class="page-link" href="#" @click="changePage(page + 1)">{{ page + 1 }}</a>
        </li>
        <li class="page-item" :class="{ disabled: currentPage === totalPages }">
          <a class="page-link" href="#" @click="changePage(currentPage + 1)">Next</a>
        </li>
      </ul>
    </nav>
  </template>
  
  <script>
  export default {
    props: {
      total: {
        type: Number,
        required: true,
      },
    },
    data() {
      return {
        currentPage: 1,
        itemsPerPage: 5,
      };
    },
    computed: {
      totalPages() {
        return Math.ceil(this.total / this.itemsPerPage);
      },
    },
    methods: {
      changePage(page) {
        if (page >= 1 && page <= this.totalPages) {
          this.currentPage = page;
          this.$emit('pageChange', page);
        }
      },
    },
  };
  </script>
  
  <style>
  /* Add your styling for pagination here */
  </style>
  