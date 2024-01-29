<template>
  <div v-if="OpenClose" class="modal-background">
    <div class="modal fade show" tabindex="-1" style="display: block;">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
          </div>
          <div class="modal-body">
            <p>Modal body text goes here.</p>
            <input type="text" class="form-control" value="aaaa" />
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" @click="close()">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <button type="button" class="btn btn-primary" @click="OpenCloseFun()">Open Modal</button>
</template>

<script>
export default {
  name: 'AlertDefault',
  props: {
    visible: Boolean,
    variant: String,
  },
  data() {
    return {
      OpenClose: this.visible
    }
  },
  methods: {
    OpenCloseFun() {
      this.OpenClose = true;
    },
    close() {
      this.OpenClose = false;
    },
  },
  watch: {
    visible: function (newVal, oldVal) { // watch it
      this.OpenClose = newVal;
      console.log('new' + newVal + '==' + oldVal)
    }
  }
}
</script>

<style>
/* Style for dimming the background */
.modal-background {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5); /* Adjust the opacity to make it darker or lighter */
  z-index: 1050; /* Ensure it's above other elements */
}

/* Style for centering the modal */
.modal-dialog {
  margin-top: 10%; /* Adjust as needed */
}

/* You may need additional styles to customize the appearance of the modal */
</style>
