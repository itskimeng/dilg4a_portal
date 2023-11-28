<style>
.container .card {
  height: 500px;
  width: 1000px;
  background-color: #fff;
  position: relative;
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
  font-family: "Poppins", sans-serif;
  border-radius: 20px;
}
.container .card .form {
  width: 100%;
  height: 100%;

  display: flex;
}
.container .card .left-side {
  width: 35%;
  background-color: #304767;
  height: 100%;
  border-top-left-radius: 20px;
  border-bottom-left-radius: 20px;
  padding: 20px 30px;
  box-sizing: border-box;
}
/*left-side-start*/
.left-heading {
  color: #fff;
}
.steps-content {
  margin-top: 30px;
  color: #fff;
}
.steps-content p {
  font-size: 12px;
  margin-top: 15px;
}
.progress-barv2 !important {
  list-style: none;
  /*color:#fff;*/
  margin-top: 30px;
  font-size: 13px;
  font-weight: 700;
  text-align: left;
  counter-reset: container 0;
}
.progress-barv2 li {
  position: relative;
  margin-left: 40px;
  margin-top: 50px;
  counter-increment: container 1;
  color: #4f6581;
}
.progress-barv2 li::before {
  content: counter(container);
  line-height: 25px;
  text-align: center;
  position: absolute;
  height: 25px;
  width: 25px;
  border: 1px solid #4f6581;
  border-radius: 50%;
  left: -40px;
  top: -5px;
  z-index: 10;
  background-color: #304767;
}

.progress-barv2 li::after {
  content: "";
  position: absolute;
  height: 90px;
  width: 2px;
  background-color: #4f6581;
  z-index: 1;
  left: -27px;
  top: -70px;
}

.progress-barv2 li.active::after {
  background-color: #fff;
}

.progress-barv2 li:first-child:after {
  display: none;
}

/*.progress-barv2 li:last-child:after{*/
/*  display:none;  */
/*}*/
.progress-barv2 li.active::before {
  color: #fff;
  border: 1px solid #fff;
}
.progress-barv2 li.active {
  color: #fff;
}
.d-none {
  display: none;
}

/*left-side-end*/
.container .card .right-side {
  width: 65%;
  background-color: #fff;
  height: 100%;
  border-radius: 20px;
}
/*right-side-start*/
.main {
  display: none;
}
.active {
  display: block;
}
.main {
  padding: 40px;
}
.main small {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 2px;
  height: 30px;
  width: 30px;
  background-color: #ccc;
  border-radius: 50%;
  color: yellow;
  font-size: 19px;
}
.text {
  margin-top: 20px;
}
.congrats {
  text-align: center;
}
.text p {
  margin-top: 10px;
  font-size: 13px;
  font-weight: 700;
  color: #cbced4;
}
.input-text {
  margin: 30px 0;
  display: flex;
  gap: 20px;
}

.input-text .input-div {
  width: 100%;
  position: relative;
}

input[type="text"] {
  width: 100%;
  height: 40px;
  border: none;
  outline: 0;
  border-radius: 5px;
  border: 1px solid #cbced4;
  gap: 20px;
  box-sizing: border-box;
  padding: 0px 10px;
}
select {
  width: 100%;
  height: 40px;
  border: none;
  outline: 0;
  border-radius: 5px;
  border: 1px solid #cbced4;
  gap: 20px;
  box-sizing: border-box;
  padding: 0px 10px;
}
.input-text .input-div span {
  position: absolute;
  top: 10px;
  left: 10px;
  font-size: 14px;
  transition: all 0.5s;
}
.input-div input:focus ~ span,
.input-div input:valid ~ span {
  top: -15px;
  left: 6px;
  font-size: 10px;
  font-weight: 600;
}

.input-div span {
  top: -15px;
  left: 6px;
  font-size: 10px;
}
.buttons button {
  height: 40px;
  width: 100px;
  border: none;
  border-radius: 5px;
  background-color: #0075ff;
  font-size: 12px;
  color: #fff;
  cursor: pointer;
}
.button_space {
  display: flex;
  gap: 20px;
}
.button_space button:nth-child(1) {
  background-color: #fff;
  color: #000;
  border: 1px solid#000;
}
.user_card {
  margin-top: 20px;
  margin-bottom: 40px;
  height: 200px;
  width: 100%;
  border: 1px solid #c7d3d9;
  border-radius: 10px;
  display: flex;
  overflow: hidden;
  position: relative;
  box-sizing: border-box;
}
.user_card span {
  height: 80px;
  width: 100%;
  background-color: #dfeeff;
}
.circle {
  position: absolute;
  top: 40px;
  left: 60px;
}
.circle span {
  height: 70px;
  width: 70px;
  background-color: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
  border: 2px solid #fff;
  border-radius: 50%;
}
.circle span img {
  width: 100%;
  height: 100%;
  border-radius: 50%;
  object-fit: cover;
}
.social {
  display: flex;
  position: absolute;
  top: 100px;
  right: 10px;
}
.social span {
  height: 30px;
  width: 30px;
  border-radius: 7px;
  background-color: #fff;
  border: 1px solid #cbd6dc;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-left: 10px;
  color: #cbd6dc;
}
.social span i {
  cursor: pointer;
}
.heart {
  color: red !important;
}
.share {
  color: red !important;
}
.user_name {
  position: absolute;
  top: 110px;
  margin: 10px;
  padding: 0 30px;
  display: flex;
  flex-direction: column;
  width: 100%;
}
.user_name h3 {
  color: #4c5b68;
}
.detail {
  /*margin-top:10px;*/
  display: flex;
  justify-content: space-between;
  margin-right: 50px;
}
.detail p {
  font-size: 12px;
  font-weight: 700;
}
.detail p a {
  text-decoration: none;
  color: blue;
}

.checkmark__circle {
  stroke-dasharray: 166;
  stroke-dashoffset: 166;
  stroke-width: 2;
  stroke-miterlimit: 10;
  stroke: #7ac142;
  fill: none;
  animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
}

.checkmark {
  width: 56px;
  height: 56px;
  border-radius: 50%;
  display: block;
  stroke-width: 2;
  stroke: #fff;
  stroke-miterlimit: 10;
  margin: 10% auto;
  box-shadow: inset 0px 0px 0px #7ac142;
  animation: fill 0.4s ease-in-out 0.4s forwards, scale 0.3s ease-in-out 0.9s both;
}

.checkmark__check {
  transform-origin: 50% 50%;
  stroke-dasharray: 48;
  stroke-dashoffset: 48;
  animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
}

@keyframes stroke {
  100% {
    stroke-dashoffset: 0;
  }
}
@keyframes scale {
  0%,
  100% {
    transform: none;
  }
  50% {
    transform: scale3d(1.1, 1.1, 1);
  }
}
@keyframes fill {
  100% {
    box-shadow: inset 0px 0px 0px 30px #7ac142;
  }
}

.warning {
  border: 1px solid red !important;
}

/*right-side-end*/
@media (max-width: 750px) {
  .container {
    height: scroll;
  }
  .container .card {
    max-width: 350px;
    height: auto !important;
    margin: 30px 0;
  }
  .container .card .right-side {
    width: 100%;
  }
  .input-text {
    display: block;
  }

  .input-text .input-div {
    margin-top: 20px;
  }

  .container .card .left-side {
    display: none;
  }
}
</style>
<template>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <Navbar></Navbar>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <Sidebar />
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <BreadCrumbs />

          <div class="container">
            <div class="card">
              <div class="form">
                <div class="left-side">
                  <div class="left-heading">
                    <h3>Create Purchase Request</h3>
                  </div>
                  <div class="steps-content">
                    <h3>
                      Step <span class="step-number">{{ formnumber + 1 }}</span>
                    </h3>
                    <p
                      v-for="(content, index) in stepNumContent"
                      :key="index"
                      :class="{
                        'step-number-content': true,
                        active: index === formnumber,
                        'd-none': index !== formnumber,
                      }"
                    >
                      {{ content }}
                    </p>
                  </div>
                  <ul class="progress-barv2" style="background-color: #30476 !important">
                    <li
                      v-for="(step, index) in steps"
                      :key="index"
                      :class="{ active: index === formnumber }"
                    >
                      {{ step }}
                    </li>
                  </ul>
                </div>
                <div class="right-side">
                  <div
                    v-for="(main, index) in mainForms"
                    :key="index"
                    class="main"
                    :class="{ active: index === formnumber }"
                  >
                    <small><i class="fa fa-smile-o"></i></small>
                    <div class="text">
                      <h2>{{ main }}</h2>
                      <p>{{ stepNumContent[index] }}</p>
                    </div>
                    <!-- Your existing form inputs go here -->
                    <!-- Your form inputs go here -->
                    <div class="input-text">
                      <div class="input-div" v-if="index === 0">
                        <input v-model="formData[index].firstName" type="text" required />
                        <span>Purchase Request No.</span>
                      </div>
                    </div>
                    <div class="input-text">
                      <div class="input-div" v-if="index === 1">
                        <input
                          v-model="formData[index].schoolName"
                          type="text"
                          required
                        />
                        <span>Office</span>
                      </div>
                      <div class="input-div" v-if="index === 1">
                        <input v-model="formData[index].boardName" type="text" required />
                        <span>Type</span>
                      </div>
                    </div>
                    <div class="input-text">
                      <div class="input-div" v-if="index === 1">
                        <input v-model="formData[index].boardName" type="text" required />
                        <span>Purchase Date</span>
                      </div>
                      <div class="input-div" v-if="index === 1">
                        <input v-model="formData[index].boardName" type="text" required />
                        <span>Target Date</span>
                      </div>
                    </div>
                    <div class="input-text">
                      <div class="input-div" v-if="index === 1">
                        <input v-model="formData[index].boardName" type="text" required />
                        <span>Particulars</span>
                      </div>
                    </div>

                    <!-- Add a button to go to the next step -->
                    <div v-if="index < mainForms.length - 1" class="buttons button_space">
                      <button class="back_button" @click="backStep" v-if="index > 0">
                        Back
                      </button>
                      <button class="next_button" @click="nextStep">Next Step</button>
                    </div>

                    <!-- Add a button to submit the form on the last step -->
                    <div
                      v-if="index === mainForms.length - 1"
                      class="buttons button_space"
                    >
                      <button class="back_button" @click="backStep">Back</button>
                      <button class="submit_button" @click="submitForm">Submit</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <FooterVue />
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
</template>

<script>
import Navbar from "../layout/Navbar.vue";
import Sidebar from "../layout/Sidebar.vue";
import FooterVue from "../layout/Footer.vue";
import BreadCrumbs from "../dashboard_tiles/BreadCrumbs.vue";
import axios from "axios";
import { toast } from "vue3-toastify";
import "vue3-toastify/dist/index.css";

export default {
  data() {
    return {
      formnumber: 0,
      formData: Array.from({ length: 4 }, () => ({})),
      steps: [
        "Generate Purchase Request No.",
        "Purchase Request Information",
        "Choose APP Item",
        "Save Data",
      ],
      mainForms: [
        "Generate Purchase Request No.",
        "Purchase Request Information",
        "Education",
        "Work Experiences",
        "User Photo",
        // Add more forms as needed
      ],
      stepNumContent: [
        "Enter your personal information to get closer to companies.",
        "Get to know better by adding your diploma, certificate, and education life.",
        "Help companies get to know you better by telling them about your past experiences.",
        "Add your profile picture and let companies find you fast.",
        // Add more content as needed
      ],
    };
  },
  methods: {
    nextStep() {
      if (!this.validateForm()) {
        return false;
      }

      if (this.formnumber < this.mainForms.length - 1) {
        this.formnumber++;
      }
    },
    backStep() {
      if (this.formnumber > 0) {
        this.formnumber--;
      }
    },
    submitForm() {
      // Handle form submission logic here

      // After submission, you might want to reset the form or show a success message
      this.formnumber++;
    },
    validateForm() {
      // Implement your form validation logic
      return true; // For simplicity, always return true in this example
    },
  },
  components: {
    Navbar,
    Sidebar,
    FooterVue,
    BreadCrumbs,
  },
};
</script>
