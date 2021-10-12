document.addEventListener('DOMContentLoaded', function () {
    if(document.querySelector('#php') !== null){
        var myChart = Highcharts.chart('php', {
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
                    ['', 40], 
                    ['', 60]
                ],
                innerSize: '80%',
                colors: [ 
                    "#ceaa8f",
                    "#e3e8ec"
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
    if(document.querySelector('#js') !== null){
        var myChart = Highcharts.chart('js', {
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
                    ['', 50], 
                    ['', 50]
                ],
                innerSize: '80%',
                colors: [ 
                    "#6c8770",
                    "#e3e8ec"
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
    if(document.querySelector('#html') !== null){
        var myChart = Highcharts.chart('html', {
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
                    ['', 80], 
                    ['', 20]
                ],
                innerSize: '80%',
                colors: [ 
                    "#ceaa8f",
                    "#e3e8ec"
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
    if(document.querySelector('#design') !== null){
        var myChart = Highcharts.chart('design', {
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
                    ['', 30], 
                    ['', 70]
                ],
                innerSize: '80%',
                colors: [ 
                    "#6c8770",
                    "#e3e8ec"
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