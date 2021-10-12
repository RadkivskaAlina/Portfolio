var ctx = document.getElementById('change_number').getContext('2d');
var chart = new Chart(ctx, {
    type: 'bar',

    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [{
            label: 'Applied',
            backgroundColor: '#6F52ED',
            data: [19, 15, 22, 8, 11, 10, 17, 8, 18, 12, 16, 23],
            barThickness: 1,
        },{
            label: 'Left',
            backgroundColor: '#FF7A00',
            data: [16, 7, 14, 7, 7, 4, 15, 19, 12, 11, 9, 14],
            order: 2
        }]
    },

    options: {
        legend: {
            display: false,
        },
        scales: {
            yAxes: [ {
                ticks: {
                    min: 0,
                    max: 30,
                },
                gridLines:{
                    borderDash: [8, 4],
                    backgroundColor: '#EEF0F7'
                }
            } ],
            xAxes : [ {
                gridLines : {
                    display : false
                },
                barPercentage: 0.3
            } ]
        },
        padding: {
            left: 20,
            top: 20,
            bottom: 20,
            right: 20
        }
    }
});

var ctx = document.getElementById('studing_types').getContext('2d');
var chart = new Chart(ctx, {
    type: 'doughnut',

    data: {
        labels: ['Groups of 20 students', 'Groups of 10 students', 'Groups of 5 students', 'Individual sessions'],
        datasets: [{
            label: 'Students by type of studying',
            backgroundColor: ['#6F52ED', '#FFB800', '#FF4C61', '#33D69F'],
            data: [20, 20, 15, 17],
            borderWidth: 0,
        }]
    },

    options: {
        legend: {
            display: false,
        },
        cutoutPercentage: 80,
    }
});