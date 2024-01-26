
<style>
.profile_img {
    width: 100px;
    height: 100px;
    padding: 1px;
    margin-bottom: 15%;
    border-radius: 100%;
    border: 1px solid rgb(18, 15, 76);
}

.user_info {
    display: flex;
    justify-content: space-between;
    margin: 0px;
    vertical-align: middle;
    width: 100%;
}

.rank_banner {
    background-color: rgb(104, 34, 142);
    color: rgb(255, 255, 255);
    font-family: Barlow, sans-serif;
    font-size: 1.25rem;
    font-weight: 400;
    line-height: 1.5;
    margin: 0px;
    text-decoration: none;
}

.rank_banner2 {
    background-color: rgb(128, 22, 22);
    color: rgb(255, 255, 255);
    font-family: Barlow, sans-serif;
    font-size: 1.25rem;
    font-weight: 400;
    line-height: 1.5;
    margin: 0px;
    text-decoration: none;
}

.rank_banner3 {
    background-color: rgb(45, 2, 85);
    color: rgb(255, 255, 255);
    font-family: Barlow, sans-serif;
    font-size: 1.25rem;
    font-weight: 400;
    line-height: 1.5;
    margin: 0px;
    text-decoration: none;
}

.rank_wrapper {
    -webkit-clip-path: polygon(100% 0px, 0px 0px, 100% 100%);
    clip-path: polygon(100% 0px, 0px 0px, 100% 100%);
    height: 4.5rem;
    padding-right: 4px;
    padding-top: 2px;
    position: absolute;
    right: 0px;
    text-align: right;
    top: 0px;
    width: 4.5rem;
}

.card_shadow {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    /* Change box shadow on hover for an interactive effect */

}
</style>
<template>
    <div class="container-scroller">
        <Navbar></Navbar>
        <div class="container-fluid page-body-wrapper">
            <Sidebar />
            <div class="main-panel">
                <div class="content-wrapper">
                    <BreadCrumbs />
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card card_shadow">
                                <div class="card-body" style="height: 320px;text-align: center;">
                                    <img src="../../../assets/logo.png" class="profile_img">
                                    <div class="user_info">
                                        <p>Name:</p>
                                        <p>{{this.userData.name}}</p>
                                    </div>
                                    <div class="user_info">
                                        <p>Office:</p>
                                        <p>{{this.userData.pmo_title}}</p>
                                    </div>
                                    <div class="user_info">
                                        <p>Position:</p>
                                        <p>{{this.userData.position_title}}</p>
                                    </div>
                                   
                                    <div class="user_info">
                                        <p>Cancelled PR:</p>
                                        <p>10</p>
                                    </div>
                                    <div class="user_info">
                                        <p>Total PR's:</p>
                                        <p>10</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card_shadow" style="margin-top: 10px;">
                                <div class="card-body" style="height: 500px;">
                                    <h5>Supplier Rankings</h5><select class="form-control">
                                        <option>This Week</option>
                                        <option>This Month</option>
                                        <option>This Year</option>
                                    </select>
                                    <div class="card" style="margin-top: 10px;">
                                        <div class="card-body" style="height: 90px;">
                                            <div class="media" style="margin-top: -25px;">
                                                <div style="width: 65px; height: 65px;">
                                                    <img src="../../../assets/logo.png" alt="..."
                                                        style="margin-top:10px;border-radius: 5px; width: 100%; object-fit: cover; margin-left: -14px;">
                                                </div>
                                                <div class="media-body">
                                                    <div class="media-content" style="margin-top:5%;">Supplier Title<br>
                                                    </div>
                                                    <div class="media-content">0955136565</div>
                                                    <div class="media-content">Calamba City, Laguna</div>
                                                </div>
                                            </div>
                                            <p class="rank_wrapper rank_banner">1st</p>
                                        </div>
                                    </div>
                                    <div class="card" style="margin-top: 10px;">
                                        <div class="card-body" style="height: 90px;">
                                            <div class="media" style="margin-top: -25px;">
                                                <div style="width: 65px; height: 65px;">
                                                    <img src="../../../assets/logo.png" alt="..."
                                                        style="border-radius: 5px; width: 100%; object-fit: cover; margin-left: -14px;">
                                                </div>
                                                <div class="media-body">
                                                    <div class="media-content"><small>Supplier Title</small><br></div>
                                                    <div class="media-content" style="margin-top:-1%;"></div>
                                                    <div class="media-content" style="margin-top:-2%;"></div>
                                                </div>
                                            </div>
                                            <p class="rank_wrapper rank_banner2">2nd</p>
                                        </div>
                                    </div>
                                    <div class="card" style="margin-top: 10px;">
                                        <div class="card-body" style="height: 90px;">
                                            <div class="media" style="margin-top: -25px;">
                                                <div style="width: 65px; height: 65px;">
                                                    <img src="../../../assets/logo.png" alt="..."
                                                        style="border-radius: 5px; width: 100%; object-fit: cover; margin-left: -14px;">
                                                </div>
                                                <div class="media-body">
                                                    <div class="media-content"><small>Supplier Title</small><br></div>
                                                    <div class="media-content" style="margin-top:-1%;"></div>
                                                    <div class="media-content" style="margin-top:-2%;"></div>
                                                </div>
                                            </div>
                                            <p class="rank_wrapper rank_banner3">3rd</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 grid-margin mb-4 stretch-card">
                            <DetailedReport />
                        </div>
                    </div>
                </div>
                <FooterVue />
            </div>
        </div>
    </div>
</template>
<script>
import Navbar from '../layout/Navbar.vue';
import Sidebar from '../layout/Sidebar.vue';
import FooterVue from '../layout/Footer.vue';
import BreadCrumbs from '../dashboard_tiles/BreadCrumbs.vue';
import DetailedReport from '../dashboard_tiles/DetailedReport.vue';
import axios from 'axios';

export default {
    name: 'Procurement',
    data() {
        return {
            userData: {
                name: null,
                office: null,
                cancelled_pr: null,
                total_pr: null

            },
            appItem: {
                app_total: null
            }
        }
    },
    components: {
        Navbar,
        Sidebar,
        FooterVue,
        BreadCrumbs,
        DetailedReport
    },
    mounted() {
        const userId = localStorage.getItem('userId');
        this.fetchUserData(userId);
    },
    methods: {

        fetchUserData(userId) {
            axios.get(`../api/fetchUser/${userId}`)
            .then((response) => {
                this.userData = response.data;
            }).catch(error => {
                console.error('Error fetching user data:', error);
            });

        },
        countTotalItem(cur_year) {
            axios.get(`../api/countTotalItem/${cur_year}`).then((res) => {
                this.appItem.app_total = res.data[0].item;
            })
        },
    },

}
</script>