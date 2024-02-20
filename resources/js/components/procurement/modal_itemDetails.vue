<template>
    <div class="modal-background">
        <div class="modal-dialog" style="margin-top: 20px; display: flex; align-items: center;">
            <div class="modal-content" style="width: 150%;height:50% !important; margin-bottom: 10%;">
                <div class="modal-header">

                    <div
                        style="width: 75px; height: 75px; border-radius: 50%; display: flex; align-items: center; justify-content: center; position: absolute; top: -18px; background-color: white; color: #4cae4c; left: 45%;">
                        <img src="../../../assets/logo.png" style="width:60px; height:60px;">

                    </div>

                </div>
                <div class="modal-body">
                    <!-- Add your item details content here -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">

                                <label><b>Item Title:</b> {{ selectedItem.item_title }}</label>
                            </div>
                            <div class="form-group">
                                <label>Unit</label>
                                <input class="form-control" v-model="selectedItem.item_unit_title" readonly />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Quantity</label>
                                <input type="number" class="form-control" v-model="selectedItem.qty" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>ABC</label>
                                <input type="number" class="form-control" readonly v-model="selectedItem.app_price">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea v-model="selectedItem.desc"></textarea> <!-- Print selected item details here -->
                            </div>
                        </div>
                        <div class="col-md-12">

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" @click="UpdateUserCart(selectedItem.id)">Update
                        Item</button>
                    <button type="button" class="btn btn-secondary" @click="$emit('close')">Close</button>
                </div>
            </div>
        </div>
    </div>
</template>
  
<script>
import { toast } from "vue3-toastify";

export default {
    props: {
        selectedItem: Object, // Define prop to accept the selected item object
        sel_app_id: {
            type: Number,
            required: true
        }
    },
    methods: {
        UpdateUserCart() {
            axios.post('/api/post_update_cart', {
                pr_item_id: this.sel_app_id,
                sel_app_id: this.selectedItem.id,
                pr_id: this.$route.query.id,
                qty: this.selectedItem.qty,
                desc: this.selectedItem.desc,
            })
                .then(() => {
                    toast.success('Cart details updated successfully!', {
                        autoClose: 2000,
                    });

                    // Redirect to the specified path after successful update
                    location.reload();

                })
                .catch((error) => {
                    console.error('Error updating cart details:', error);
                    // Handle error if needed
                });
        }

    }
}
</script>
  
<style>
.modal-header {
    padding: 30px 1rem !important;
}

textarea {
    display: block;
    width: 100%;
    height: 6.875rem;
    padding: 0.875rem 1.375rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1;
    color: #495057;
    background-color: #ffffff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 2px;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
</style>
  