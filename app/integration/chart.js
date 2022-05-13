const myChartStudentsBar = new Chart(
    document.getElementById('myChartStudentsBar'),
    {
        type: 'bar',
        data: {
            labels: ['Male', 'Female'],
            datasets: [
                {
                    label: 'Administrators',
                    backgroundColor: '#E81400',
                    borderColor: 'white',
                    data: [2, 1],
                },
                {
                    label: 'Students',
                    backgroundColor: '#01AB68',
                    borderColor: 'white',
                    data: [135, 125],
                },
                {
                    label: 'Parents',
                    backgroundColor: '#F3A003',
                    borderColor: 'white',
                    data: [155, 146],
                },
                {
                    label: 'Teachers',
                    backgroundColor: '#0160F3',
                    borderColor: 'white',
                    data: [10, 13],
                },
            ]
        },
        options: {
            plugins: {
                legend: {
                    display: true,
                    // position: 'right',
                    title: {
                        padding: {
                            bottom: 55
                        },
                    },
                    labels: {
                        color: '#707070'
                        
                    }
                },
                title: {
                    display: true,
                    text: 'Classification By genre',
                    padding: {
                        top: 10,
                        bottom: 30
                    },
                    position: 'bottom'
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    }
);
const myChartStudentsLine = new Chart(
    document.getElementById('myChartStudentsLine'),
    {
        type: 'line',
        data: {
            labels: ['Male', 'Female'],
            datasets: [
                {
                    label: 'Administrators',
                    backgroundColor: '#E81400',
                    borderColor: '#707070',
                    data: [2, 1],
                },
                {
                    label: 'Students',
                    backgroundColor: '#01AB68',
                    borderColor: '#707070',
                    data: [135, 125],
                },
                {
                    label: 'Parents',
                    backgroundColor: '#F3A003', 
                    borderColor: '#707070',
                    data: [155, 146],
                },
                {
                    label: 'Teachers',
                    backgroundColor: '#0160F3',
                    borderColor: '#707070',
                    data: [10, 13],
                },
            ]
        },
        options: {
            plugins: {
                legend: {
                    display: true,
                    // position: 'right',
                    title: {
                        padding: {
                            bottom: 55
                        },
                    },
                    labels: {
                        color: '#707070'
                        
                    }
                },
                title: {
                    display: true,
                    text: 'Classification By genre',
                    padding: {
                        top: 10,
                        bottom: 30
                    },
                    position: 'bottom'
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    }
);
const myChartStudentsPie = new Chart(
    document.getElementById('myChartStudentsPie'),
    {
        type: 'pie',
        data: {
            labels: [
                'Total Of Administrateurs',
                'Total Of Parents',
                'Total Of Students',
                'Total Of Teachers',
            ],
            datasets: [
                {
                    data: [3, 301, 265, 23],
                    backgroundColor: ['#E81400', '#01AB68', '#0160F3', '#F3A003'],
                    borderColor: 'white',
                    // hoverOffset: 4
                },
            ]
          },
        options: {
            plugins: {
                legend: {
                    display: true,
                    position: 'right',
                    labels: {
                        color: '#707070'
                    }
                },
                title: {
                    display: true,
                    text: 'Pourcentage Of Every Category',
                    position: 'bottom',
                    padding: {
                        top: 0,
                        bottom: 0
                    },
                }
            }
        }
    }
);
