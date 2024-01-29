// globalMethods.js

import axios from 'axios';

const fetchUserData = function (userId) {
    return axios.get(`../api/fetchUser/${userId}`)
        .then((response) => {
            return response.data;
        }).catch(error => {
            console.error('Error fetching user data:', error);
            return null; // or handle the error appropriately
        });
};


const countTotalItem = function (cur_year) {
    return axios.get(`../api/countTotalItem/${cur_year}`)
        .then((response) => {
            return response.data[0].item;
        }).catch(error => {
            console.error('Error totalItem  data:', error);
            return null; // or handle the error appropriately
        });
};

const countCancelledPR = function (userId) {
    return axios.get(`../api/countCancelledPR/${userId}`)
        .then((response) => {
            return response.data[0].cancelled_pr;
        }).catch(error => {
            console.error('Error fetching cancel purchase data:', error);
            return null; // or handle the error appropriately
        });
}

const countUserTotalPR = function (userId) {
    return axios.get(`../api/countUserTotalPR/${userId}`)
        .then((response) => {
            return response.data[0].total_pr;
        }).catch(error => {
            console.error('Error fetching total purchase data:', error);
            return null; // or handle the error appropriately
        });
}



export { fetchUserData, countTotalItem, countCancelledPR,countUserTotalPR };
