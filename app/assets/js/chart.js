console.log('hello')
fetch("./models/Home.php")
.then(response => response.json())
.then(data => {
    // console.log(data)
    dealData(data)
    chart(data);
})
.catch(err => console.log('hello',err))

function dealData(data) {
    let item = document.querySelectorAll('.item p');
    for (let i = 0; i < 4; i++) {
        item[i].innerHTML = data.count[i]
    }
}
function chart(data){
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
                    data: [data.genre.Admin[0], data.genre.Admin[1]],
                },
                {
                    label: 'Students',
                    backgroundColor: '#01AB68',
                    borderColor: 'white',
                    data: [data.genre.Stu[0], data.genre.Stu[1]],
                },
                {
                    label: 'Parents',
                    backgroundColor: '#F3A003',
                    borderColor: 'white',
                    data: [data.genre.Par[0], data.genre.Par[1]],
                },
                {
                    label: 'Teachers',
                    backgroundColor: '#0160F3',
                    borderColor: 'white',
                    data: [data.genre.Teach[0], data.genre.Teach[1]],
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
                    data: [data.genre.Admin[0], data.genre.Admin[1]],
                },
                {
                    label: 'Students',
                    backgroundColor: '#01AB68',
                    borderColor: '#707070',
                    data: [data.genre.Stu[0], data.genre.Stu[1]],
                },
                {
                    label: 'Parents',
                    backgroundColor: '#F3A003', 
                    borderColor: '#707070',
                    data: [data.genre.Par[0], data.genre.Par[1]],
                },
                {
                    label: 'Teachers',
                    backgroundColor: '#0160F3',
                    borderColor: '#707070',
                    data: [data.genre.Teach[0], data.genre.Teach[1]],
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
                    data: [
                        [data.genre.Admin[0] + data.genre.Admin[1]], 
                        [data.genre.Par[0] + data.genre.Par[1]], 
                        [data.genre.Stu[0] + data.genre.Stu[1]], 
                        [data.genre.Teach[0] + data.genre.Teach[1]]
                    ],
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

}
