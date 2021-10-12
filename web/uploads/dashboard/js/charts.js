var ctx = document.getElementById('players').getContext('2d');
var chart = new Chart(ctx, {
    type: 'line',

    data: {
        labels: ['MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT', 'SUN'],
        datasets: [{
            label: 'Active Players',
            backgroundColor: 'rgba(129, 129, 129, 0.176)',
            borderColor: 'rgb(41, 125, 125)',
            data: [40, 25, 31, 50, 30, 28, 40, 20],
            lineTension: 0,
            pointRadius: 7,
            pointBorderWidth: 3,
            pointBorderColor: 'rgb(41, 125, 125)',
            pointBackgroundColor: 'rgb(255, 255, 255)',
            pointHoverBackgroundColor: 'rgb(41, 125, 125)',
            pointHoverRadius: 13
        }]
    },

    options: {
        legend: {
            display: false
        },
        scales: {
            yAxes: [ {
                ticks: {
                    min: 0,
                    max: 60,
                }
            } ]
        }
    }
});

var ctx = document.getElementById('tournaments').getContext('2d');
var chart = new Chart(ctx, {
    type: 'line',

    data: {
        labels: ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL'],
        datasets: [{
            label: 'Active Tournaments',
            backgroundColor: 'rgba(129, 129, 129, 0.176)',
            borderColor: 'rgb(9, 9, 17)',
            data: [450, 750, 600, 900, 450, 600, 700],
            lineTension: 0,
            pointRadius: 7,
            pointBorderWidth: 3,
            pointBorderColor: 'rgb(9, 9, 17)',
            pointBackgroundColor: 'rgb(255, 255, 255)',
            pointHoverBackgroundColor: 'rgb(9, 9, 17)',
            pointHoverRadius: 13
        }]
    },

    options: {
        legend: {
            display: false
        },
        scales: {
            yAxes: [ {
                ticks: {
                    min: 0,
                    max: 1000,
                }
            } ]
        }
    }
});

var ctx = document.getElementById('new').getContext('2d');
var chart = new Chart(ctx, {
    type: 'doughnut',

    data: {
        datasets: [{
            label: '',
            backgroundColor: ['rgb(86, 96, 110)', 'rgb(210, 212, 216)'],
            borderWidth: 0,
            data: [58, 42],
        }]
    },

    options: {
        cutoutPercentage: 80
    }
});

var ctx = document.getElementById('revisited').getContext('2d');
var chart = new Chart(ctx, {
    type: 'doughnut',

    data: {
        datasets: [{
            label: '',
            backgroundColor: ['rgb(145, 196, 107)', 'rgb(210, 212, 216)'],
            borderWidth: 0,
            data: [75, 25],
        }]
    },

    options: {
        cutoutPercentage: 80
    }
});

var ctx = document.getElementById('commented').getContext('2d');
var chart = new Chart(ctx, {
    type: 'doughnut',

    data: {
        datasets: [{
            label: '',
            backgroundColor: ['rgb(86, 96, 110)', 'rgb(210, 212, 216)'],
            borderWidth: 0,
            data: [28, 72],
        }]
    },

    options: {
        cutoutPercentage: 80
    }
});

var ctx = document.getElementById('active').getContext('2d');
var chart = new Chart(ctx, {
    type: 'doughnut',

    data: {
        datasets: [{
            label: '',
            backgroundColor: ['rgb(145, 196, 107)', 'rgb(210, 212, 216)'],
            borderWidth: 0,
            data: [97, 3],
        }]
    },

    options: {
        cutoutPercentage: 80
    }
});