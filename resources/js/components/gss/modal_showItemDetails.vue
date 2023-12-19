<!-- Modal.vue -->
<template>
    <div class="modal-overlay" v-if="showModal" @click="closeModal">
      <div class="modal-container" @click.stop>
        <div class="modal-header">
          <span class="modal-close" @click="closeModal">&times;</span>
        </div>
        <div class="modal-content">
          <!-- Your modal content goes here -->
          <img src="your-image-url.jpg" alt="Modal Image">
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        showModal: false,
      };
    },
    methods: {
      openModal() {
        this.showModal = true;
      },
      closeModal() {
        this.showModal = false;
      },
    },
  };
  </script>
  
  <style scoped>
  .modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .modal-container {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  }
  
  .modal-header {
    display: flex;
    justify-content: flex-end;
  }
  
  .modal-close {
    cursor: pointer;
    font-size: 20px;
    color: #333;
  }
  
  .modal-content {
    margin-top: 10px;
  }
  </style>
  