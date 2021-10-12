document.addEventListener('DOMContentLoaded', function () {
    if(document.querySelector('#revenue') !== null){
        var myChart = Highcharts.chart('revenue', {
            chart: {
                type: 'column',
                backgroundColor: '#00000000'
            },
            credits: {
                enabled: false
            },
            title: {
                text: null
            },
            xAxis: {
                gridLineWidth: 0,
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                labels: {
                    style: {
                        color: '#ffffff90',
                        font: '10px "HelveticaNeue Regular", sans-serif'
                    }
                }
            },
            yAxis: {
                gridLineWidth: 0,
                categories: [''],
                title: {
                    text: ''
                },
                labels: {
                    enabled: false
                },
            },
            legend: {
                enabled: false,
            },
            series: [{
                name: '',
                data: [6, 4, 6, 5, 3, 5],
            }],
            plotOptions: {
                series: {
                    pointWidth: 8
                },
                column: {
                    borderColor: '#00000000',
                    color: '#ffffff90',
                    borderRadius: 5,
                    className: 'highcharts_point'
                }
            },
        });
    }
});

document.addEventListener('DOMContentLoaded', function () {
    if(document.querySelector('#sales') !== null){
        var myChart = Highcharts.chart('sales', {
            chart: {
                type: 'column',
                backgroundColor: '#00000000'
            },
            credits: {
                enabled: false
            },
            title: {
                text: null
            },
            xAxis: {
                gridLineWidth: 0,
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                labels: {
                    style: {
                        color: '#ffffff90',
                        font: '10px "HelveticaNeue Regular", sans-serif'
                    }
                }
            },
            yAxis: {
                gridLineWidth: 0,
                categories: [''],
                title: {
                    text: ''
                },
                labels: {
                    enabled: false
                },
            },
            legend: {
                enabled: false,
            },
            series: [{
                name: '',
                data: [6, 4, 6, 5, 3, 5],
            }],
            plotOptions: {
                series: {
                    pointWidth: 8
                },
                column: {
                    borderColor: '#00000000',
                    color: '#ffffff90',
                    borderRadius: 5,
                    className: 'highcharts_point'
                }
            },
        });
    }
});

document.addEventListener('DOMContentLoaded', function () {
    if(document.querySelector('#little_campaign') !== null){
        var myChart = Highcharts.chart('little_campaign', {
            chart: {
                type: 'pie',
                backgroundColor: '#00000000'
            },
            credits: {
                enabled: false
            },
            title: {
                text: null
            },
            legend: {
                enabled: false,
            },
            series: [{
                type: 'pie',
                data: [
                    ['', 264], 
                    ['', 543], 
                    ['', 748]
                ],
                innerSize: '60%',
                colors: [ 
                    "#f52a65",
                    "#f8a200",
                    "#52c2d0"
                ]
            }],
            plotOptions: {
                pie: {
                    dataLabels: {
                        enabled: true,
                        distance: -50,
                        style: {
                            fontWeight: 'bold',
                            color: 'white'
                        }
                    },
                    shadow: false,
                    center: ['50%', '50%'],    
                },
            }
        });
    }
});

document.addEventListener('DOMContentLoaded', function () {
    if(document.querySelector('#campaign') !== null){
        var myChart = Highcharts.chart('campaign', {
            chart: {
                type: 'column',
                backgroundColor: '#00000000'
            },
            credits: {
                enabled: false
            },
            title: {
                text: null
            },
            xAxis: {
                gridLineWidth: 0,
                categories: [''],
                labels: {
                    style: {
                        color: '#00000090',
                        font: '10px "HelveticaNeue Regular", sans-serif'
                    }
                }
            },
            yAxis: {
                gridLineWidth: 0,
                categories: [''],
                title: {
                    text: ''
                },
                labels: {
                    enabled: false
                },
            },
            legend: {
                enabled: true,
            },
            series: [{
                name: '<p class="campaign__legend__description">Success</p>',
                data: [748],
                color: "#52c2d0",
            },{
                name: '<p class="campaign__legend__description">Pending</p>',
                data: [543],
                color: "#f8a200",
            },{
                name: '<p class="campaign__legend__description">Failed</p>',
                data: [264],
                color: "#f52a65",
            }],
            plotOptions: {
                series: {
                    pointWidth: 40
                },
                column: {
                    borderColor: '#00000000',
                    color: '#f52a65',
                }
            },
        });
    }
});

document.addEventListener('DOMContentLoaded', function () {
    if(document.querySelector('#comparison') !== null){
        var myChart = Highcharts.chart('comparison', {
            chart: {
                type: 'column',
                backgroundColor: '#00000000'
            },
            credits: {
                enabled: false
            },
            title: {
                text: null
            },
            xAxis: {
                gridLineWidth: 0,
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec'],
                labels: {
                    style: {
                        color: '#00000090',
                        font: '10px "HelveticaNeue Regular", sans-serif'
                    }
                }
            },
            yAxis: {
                min: 0,
                max: 50000,
                gridLineDashStyle: 'longdash',
                gridLineWidth: 1,
                tickInterval: 10000,
                title: {
                    text: ''
                },
                labels: {
                    enabled: true
                },
            },
            legend: {
                enabled: true,
                align: 'right',
                x: 10,
                verticalAlign: 'top',
                y: -10,
                floating: true,
                shadow: false,
                style:{
                    color: '#00000090',
                    font: '10px "HelveticaNeue Regular", sans-serif'
                }
            },
            series: [{
                name: 'Past Year',
                data: [6000, 6000, 10000, 15000, 11000, 7000, 10500, 10000, 5000, 8000, 9500, 12000],
                color: '#f52a65',
            },{
                name: 'This Year',
                data: [15000, 8000, 7000, 18000, 16000, 16000, 11000, 13000, 5000, 11000, 9000, 15000],
                color: '#52c2d0',
            }],
            plotOptions: {
                series: {
                    pointWidth: 8
                },
                column: {
                    borderColor: '#00000000',
                    stacking: 'normal',
                }
            },
        });
    }
});

document.addEventListener('DOMContentLoaded', function () {
    if(document.querySelector('#meetings') !== null){
        var myChart = Highcharts.chart('meetings', {
            chart: {
                type: 'column',
                backgroundColor: '#00000000'
            },
            credits: {
                enabled: false
            },
            title: {
                text: null
            },
            xAxis: {
                gridLineWidth: 0,
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec'],
                labels: {
                    style: {
                        color: '#ffffff90',
                        font: '10px "HelveticaNeue Regular", sans-serif'
                    }
                }
            },
            yAxis: {
                gridLineWidth: 0,
                categories: [''],
                title: {
                    text: ''
                },
                labels: {
                    enabled: false
                },
            },
            legend: {
                enabled: false,
            },
            series: [{
                name: '',
                data: [6, 4, 6, 5, 3, 5, 6, 4, 6, 5, 3, 5],
            }],
            plotOptions: {
                series: {
                    pointWidth: 8
                },
                column: {
                    borderColor: '#00000000',
                    color: '#ffffff90',
                    borderRadius: 5,
                    className: 'highcharts_point'
                }
            },
        });
    }
});

document.addEventListener('DOMContentLoaded', function () {
    if(document.querySelector('#projects') !== null){
        var myChart = Highcharts.chart('projects', {
            chart: {
                type: 'column',
                backgroundColor: '#00000000'
            },
            credits: {
                enabled: false
            },
            title: {
                text: null
            },
            xAxis: {
                gridLineWidth: 0,
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec'],
                labels: {
                    style: {
                        color: '#00000090',
                        font: '10px "HelveticaNeue Regular", sans-serif'
                    }
                }
            },
            yAxis: {
                gridLineWidth: 0,
                categories: [''],
                title: {
                    text: ''
                },
                labels: {
                    enabled: false
                },
            },
            legend: {
                enabled: false,
            },
            series: [{
                name: '',
                data: [6, 4, 6, 5, 3, 5, 6, 4, 6, 5, 3, 5],
            }],
            plotOptions: {
                series: {
                    pointWidth: 8
                },
                column: {
                    borderColor: '#00000000',
                    color: '#00000040',
                    borderRadius: 5,
                    className: 'highcharts_point_b'
                }
            },
        });
    }
});

document.addEventListener('DOMContentLoaded', function () {
    if(document.querySelector('#users') !== null){
        var myChart = Highcharts.chart('users', {
            chart: {
                type: 'column',
                backgroundColor: '#00000000'
            },
            credits: {
                enabled: false
            },
            title: {
                text: null
            },
            xAxis: {
                gridLineWidth: 0,
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec'],
                labels: {
                    style: {
                        color: '#00000090',
                        font: '10px "HelveticaNeue Regular", sans-serif'
                    }
                }
            },
            yAxis: {
                gridLineWidth: 0,
                categories: [''],
                title: {
                    text: ''
                },
                labels: {
                    enabled: false
                },
            },
            legend: {
                enabled: false,
            },
            series: [{
                name: '',
                data: [6, 4, 6, 5, 3, 5, 6, 4, 6, 5, 3, 5],
            }],
            plotOptions: {
                series: {
                    pointWidth: 8
                },
                column: {
                    borderColor: '#00000000',
                    color: '#00000040',
                    borderRadius: 5,
                    className: 'highcharts_point_u'
                }
            },
        });
    }
});


document.addEventListener('DOMContentLoaded', function () {
    if(document.querySelector('#visitors') !== null){
        var myChart = Highcharts.chart('visitors', {
            chart: {
                type: 'column',
                backgroundColor: '#00000000'
            },
            credits: {
                enabled: false
            },
            title: {
                text: null
            },
            xAxis: {
                gridLineWidth: 0,
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec'],
                labels: {
                    style: {
                        color: '#00000090',
                        font: '10px "HelveticaNeue Regular", sans-serif'
                    }
                }
            },
            yAxis: {
                gridLineWidth: 0,
                categories: [''],
                title: {
                    text: ''
                },
                labels: {
                    enabled: false
                },
            },
            legend: {
                enabled: false,
            },
            series: [{
                name: '',
                data: [6, 4, 6, 5, 3, 5, 6, 4, 6, 5, 3, 5],
            }],
            plotOptions: {
                series: {
                    pointWidth: 8
                },
                column: {
                    borderColor: '#00000000',
                    color: '#00000040',
                    borderRadius: 5,
                    className: 'highcharts_point_v'
                }
            },
        });
    }
});