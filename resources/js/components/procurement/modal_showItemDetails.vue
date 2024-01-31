<template>
  <div v-if="visible" class="modal-background">
    <div class="modal fade show" tabindex="-1" style="display: block;">
      <div class="modal-dialog">
        <div class="modal-content" style="width:120%;">
          <div class="modal-header">
            <h5 class="modal-title">Procurement Module: Updating of APP Item</h5>
          </div>
          <div class="modal-body">
            <p>Instructions:</p>
            <div>
              <input type="text" v-model="searchValue" class="form-control" placeholder="Search..." />
              <div class="row" style="height: 350px; overflow-y: auto;">
                <div class="col-lg-4 d-none d-lg-block" v-for="item in filteredItems" :key="item.id">
                  <div :class="{ 'card': true, 'selected': isSelected(item.id) }">
                    <img @click="toggleItemSelection(item.id)" src="../../../assets/proc1.jpg" class="card-img-top"
                      alt="Item Image" />
                    <p style="text-align: center;margin-top:-40px;font-weight: bolder;"> {{ item.sn }}
                      <br>{{ shorten(item.item_title, 11) }}
                    </p>
                    <p style="margin-top: -10px;text-align:center">Php. {{ item.app_price }}</p>
                  </div>
                </div>
              </div>
              <!-- Debugging line -->

            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" @click="close">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      searchValue: '',
      items: [],
      selectedItems: [],
      searchResultsCount: null,
    }
  },
  props: {
    visible: Boolean,
    currentItem: Object,
  },
  computed: {
    isSelected() {
      const selectedSet = new Set(this.selectedItems);
      return function (itemId) {
        return selectedSet.has(itemId);
      };
    },
    filteredItems() {
      const searchValue = this.searchValue.trim().toLowerCase();
      if (!searchValue) {
        this.searchResultsCount = null;
        return this.items;
      }
      const filteredItems = this.items.filter(item =>
        item.item_title.toLowerCase().includes(searchValue) ||
        item.sn.toLowerCase().includes(searchValue)
      );
      this.searchResultsCount = filteredItems.length;
      return filteredItems;
    },
    shouldDisplayInput() {
      return index => (this.formnumber === index ? '' : 'none');
    },
  },
  mounted() {
    this.fetchAppItem();
  },
  methods: {
    fetchAppItem() {
      axios.get('../api/appitems')
        .then(response => {
          this.items = response.data;
        })
        .catch(error => {
          console.error('Error fetching app data:', error);
        });
    },
    toggleItemSelection(itemId) {
      if (this.isSelected(itemId)) {
        // If the clicked item is already selected, deselect it
        this.selectedItems = [];
      } else {
        // Otherwise, select only the clicked item
        this.selectedItems = [itemId];
        console.log('Item clicked:', itemId);

      }
    },

    shorten(string, len) {
      return string.substring(0, len + string.substring(len - 1).indexOf(' '));
    },
    close() {
      this.$emit('close');
    },
  },
};
</script>


<style>
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
