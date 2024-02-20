<template>
  <div v-if="visible" class="modal-background">
    <div class="modal fade show" tabindex="-1" style="display: block;">
      <div class="modal-dialog" style="margin-top: 20px; display: flex; align-items: center;">
        <div class="modal-content" style="width: 150%; margin-bottom: 5%;">
          <div class="modal-header">
            <div
              style="width: 75px; height: 75px; border-radius: 50%; display: flex; align-items: center; justify-content: center; position: absolute; top: -18px; background-color: white; color: #4cae4c; left: 45%;">
              <img :src="logo" style="width:60px; height:60px;">
            </div>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12">
                <MultiSelectInput label="Purchase Request Number" :options="pr_no" v-model="pr_no" />

                <TextInput label="RFQ Number" v-model="rfq_no" :value="rfq_no" :readonly="true" />
                <SelectInput label="Mode of Procurement" v-model="selectedMode">
                  <option value="1" data-id="Small Value Procurement" data-value="1">Small Value Procurement</option>
                  <option value="2" data-id="Shopping" data-value="2">Shopping</option>
                  <option value="4" data-id="NP Lease of Venue" data-value="4">NP Lease of Venue</option>
                  <option value="5" data-id="Direct Contracting" data-value="5">Direct Contracting</option>
                  <option value="6" data-id="Agency to Agency" data-value="6">Agency to Agency</option>
                  <option value="7" data-id="Public Bidding" data-value="7">Public Bidding</option>
                  <option value="8" data-id="Not Applicable N/A" data-value="8">Not Applicable N/A</option>
                </SelectInput>
                <TextInput v-model="rfq_date" label="RFQ Number" type="date" />
                <TextAreaInput v-model="particulars" label="Particulars" />
                <button type="button" class="btn btn-primary" style="float: right;margin-left:5px;"
                  @click="close();">Close</button>
                <button type="button" class="btn btn-success" style="float: right;"
                  @click="post_create_rfq()">Save</button>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
  
<script>
import dilg_logo from "../../../../../assets/logo.png";
import TextInput from "../../../micro/TextInput.vue";
import SelectInput from "../../../micro/SelectInput.vue";
import MultiSelectInput from "../../../micro/MultiSelectInput.vue";
import TextAreaInput from "../../../micro/TextAreaInput.vue";
import { toast } from "vue3-toastify";
// import { toGss } from "../../../../globalMethods.js";

export default {
  props: {
    visible: Boolean,
    rfqNo: String, // Define rfqNo as a prop
    // Other props...
  },
  components: {
    TextInput,
    TextAreaInput,
    SelectInput,
    MultiSelectInput

  },
  data() {
    return {
      showDetailsModal: false, // Add a new property to control the visibility of the item details modal
      logo: dilg_logo,
      rfq_no: null,
      selectedItems: [],
      pr_no: [],
      selectedMode: null,
      rfq_date: null,
      particulars: null

    }
  },
  props: {
    visible: Boolean,
  },

  mounted() {
    this.generateRFQ();
    this.fetchSubmittedPurchaseRequest();
  },

  methods: {
    
    post_create_rfq() {
      // Prepare data to be sent
      const userId = localStorage.getItem('userId');
      const requestData = {
        rfq_no: this.rfq_no,
        pr_id: this.pr_no[0].value,
        mode: this.selectedMode,
        rfq_date: this.rfq_date,
        particulars: this.particulars,
        updated_by: userId

      };

      // Send POST request using Axios
      axios.post('../../api/post_create_rfq', requestData)
        .then(() => {
          this.$updatePurchaseRequestStatus(this.pr_no[0].value,6);          
            toast.success('RFQ successfully created!', {
            autoClose: 100
          });
        }).catch((error) => {

        })
        .catch(error => {
          // Handle error
          console.error('Error creating RFQ:', error);
          // You can also display an error message or perform other error handling actions
        });
    },
    generateRFQ: async function () {
      try {
        const response = await axios.get('../../api/generateRFQNo');
        const currentDate = new Date();
        const year = currentDate.getFullYear();
        const month = String(currentDate.getMonth() + 1).padStart(2, '0'); // Adding 1 because months are zero-indexed
        const purchaseNoFormat = `${year}`;
        const rfq_no = response.data[0].rfq_count;
        const formattedSequence = rfq_no.toString().padStart(4, '0');

        // set the draft pr no of the user

        this.rfq_no = `${purchaseNoFormat}-${formattedSequence}`;

        // localStorage.setItem('prId', response.data.userId);

        //this.fetchCartDetails();
        // this.fetchPurchaseRequestDetails();
      } catch (error) {
        console.error('Error fetching data', error);
      }
    },
    async fetchSubmittedPurchaseRequest() {
      try {
        const response = await axios.get('../../api/fetchSubmittedPurchaseRequest');
        // Assuming response.data is an array of objects with 'label' and 'value' properties
        this.pr_no = response.data.map(item => ({ label: item.pr_no, value: item.id }));
      } catch (error) {
        console.error('Error fetching submitted purchase requests:', error);
      }
    },

    show() {
      this.showDetailsModal = true;
    },


    close() {
      this.$emit('close');
    },
  },
};
</script>
  
  
<style>
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
  