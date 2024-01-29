<style></style>
<template>
    <div class="card ">
        
        <div class="card-body" style="height: 320px;text-align: center;">
            <img src="../../../assets/logo.png" class="profile_img">
            <div class="user_info">
                <p>Name:</p>
                <p>{{ this.userData.name }}</p>
            </div>
            <div class="user_info">
                <p>Office:</p>
                <p>{{ this.userData.pmo_title }}</p>
            </div>
            <div class="user_info">
                <p>Position:</p>
                <p>{{ this.userData.position_title }}</p>
            </div>

            <div class="user_info">
                <p>Cancelled PR:</p>
                <p class="badge badge-danger">
                    {{ this.cancelled_pr }}
                </p>
            </div>
            <div class="user_info">
                <p>Total PR's:</p>
                <p class="badge badge-success">
                    {{ this.total_pr }}
                </p>
            </div>
        </div>
    </div>
    <div class="card " style="margin-top: 10px;">
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
</template>

<script>
export default {
    name: 'user_info',
    data() {
        return {
            cancelled_pr: null,
            total_pr: null,
            userData: {
                name: null,
                office: null,
            },
            appItem: {
                app_total: null
            }
        }
    },
    mounted() {
        const userId = localStorage.getItem('userId');
        // Call the global method to fetch user data
        // Call the global method to fetch user data
        this.$fetchUserData(userId)
            .then(userData => {
                this.userData = userData;
            })
            .catch(error => {
                console.error('Error fetching user data:', error);
            });

        // Call the global method to count total items
        this.$countTotalItem(2024)
            .then(appItem => {
                this.appItem.app_total = appItem;
            })
            .catch(error => {
                console.error('Error fetching total item data:', error);
            });

        // Call the global method to count cancelled purchase requests
        this.$countCancelledPR(userId)
            .then(data => {
                this.cancelled_pr = data;
            })
            .catch(error => {
                console.error('Error fetching cancelled purchase request:', error);
            });
        this.$countUserTotalPR(userId)
            .then(data => {
                this.total_pr = data;
            })
            .catch(error => {
                console.error('Error fetching total purchase request:', error);
            });

    },
}
</script>