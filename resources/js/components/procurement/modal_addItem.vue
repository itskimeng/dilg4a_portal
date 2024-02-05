<template>
    <div v-if="visible" class="modal-background">
        <div class="modal fade show  bd-example-modal-lg" tabindex="-1" style="display: block;">
            <div class="modal-dialog" style="max-width: 70% !important;max-height:40% !important;">
                <div class="modal-content" style="margin-top: -7%;">
                    <!-- Your modal content goes here -->

                    <div class="modal-header">
                        <div
                            style="width: 75px; height: 75px; border-radius: 50%; display: flex; align-items: center; justify-content: center; position: absolute; top: -18px; background-color: white; color: #4cae4c; left: 45%;">
                            <img src="../../../assets/logo.png" style="width:60px; height:60px;">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="col-md-12">
                                   
                                    <div class="form-group">
                                        <label>Unit</label>
                                        <input class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Quantity</label>
                                        <input type="number" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>ABC</label>
                                        <input type="number" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea></textarea> <!-- Print selected item details here -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" v-model="searchValue" class="form-control" placeholder="Search..." />
                                <div class="row" style="height: 480px; overflow-y: auto;">
                                    <div class="col-lg-3 d-none d-lg-block" v-for="item in filteredItems" :key="item.id">
                                        <div :class="{ 'card': true, 'selected': isSelected(item.id) }">
                                            <img @click="toggleItemSelection(item.id)" src="../../../assets/proc1.jpg"
                                                class="card-img-top" alt="Item Image" />
                                            <p style="text-align: center;margin-top:-40px;font-weight: bolder;"> {{ item.sn
                                            }}
                                                <br>{{ shorten(item.item_title, 11) }}
                                            </p>
                                            <p style="margin-top: -10px;text-align:center">Php. {{ item.app_price }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" @click="$emit('close')">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
import { toast } from "vue3-toastify";

export default {


    data() {
        return {
            showDetailsModal: false, // Add a new property to control the visibility of the item details modal
            selectedItem: null,
            searchValue: '',
            items: [],
            selectedItems: [],
            searchResultsCount: null,
            sel_app_id: null

        }
    },
    props: {
        visible: Boolean,
        currentItem: Object,
        appId: {
            type: Number
        }
    },
    computed: {
        isSelected: function () {
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

        closeItemDetailsModal() {
            this.selectedItem = null;
            this.showDetailsModal = false;
        },
        fetchAppItem() {
            axios.get('../api/appitems')
                .then(response => {
                    this.items = response.data;
                })
                .catch(error => {
                    console.error('Error fetching app data:', error);
                });
        },
        addPrItems(selectedItemIds) {
            // Call fetchPRId to get the ID
            // Make an API call to your server to add the selected items to the database
            axios.post('/api/post_insert_pritem', {
                id: this.$route.query.id,
                pr_no: localStorage.getItem('pr_no'),
                itemIds: selectedItemIds,
                status: 1,
                step: 3
            })
                .then((response) => {
                    // Handle the success response
                    toast.success('Items added to the database:', {
                        autoClose: 100
                    });
                })
                .catch((error) => {
                    // Handle the error
                    console.error('Error adding items to the database:', error);
                });
        },
        toggleItemSelection(item) {
            // Check if the item is already selected
            const index = this.selectedItems.indexOf(item);
            if (index !== -1) {
                // If selected, remove it from the array
                this.selectedItems.splice(index, 1);
            } else {
                // If not selected, add it to the array
                this.selectedItems.push(item);
                // this.addPrItems(item)
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
