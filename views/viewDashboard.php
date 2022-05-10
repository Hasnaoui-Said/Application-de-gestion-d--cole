<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/dashboard.css">

</head>

<body>
    <?php require("header.php"); ?>
    <main class="main">
        <div class="container my-3">
            <div class="row mx-0 carte">
                <div class="col-12">
                    <h4>Dashboard</h4>
                </div>
                <div class="col-xl-3 col-md-6 justify-content-center align-items-center">
                    <div class="item item-1">
                        <div class="d-flex p-2 ps-3 justify-content-start align-items-center gap-3">
                            <img src="image/svg/student.png" width="35" alt="students">
                            <div class="w-100 stu d-flex flex-column justify-content-ceter align-items-center">
                                <strong class="text-start w-100">Total students</strong>
                                <p class="text-end  w-100">655</p>
                            </div>
                        </div>
                        <a href="#"
                            class="view nav-link ms-0 py-2 px-3 d-flex justify-content-between align-items-center w-100">
                            <div class="">View Details</div>
                            <img src="image/right.svg" width="15" alt="right">
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 justify-content-center align-items-center">
                    <div class="item item-2">
                        <div class="d-flex p-2 ps-3 justify-content-start align-items-center gap-3">
                            <img src="image/svg/family.png" width="35" alt="students">
                            <div class="w-100 stu d-flex flex-column justify-content-ceter align-items-center">
                                <strong class="text-start w-100">Total parents</strong>
                                <p class="text-end  w-100">566</p>
                            </div>
                        </div>
                        <a href="#"
                            class="view nav-link ms-0 py-2 px-3 d-flex justify-content-between align-items-center w-100">
                            <div class="">View Details</div>
                            <img src="image/right.svg" width="15" alt="right">
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 justify-content-center align-items-center">
                    <div class="item item-3">
                        <div class="d-flex p-2 ps-3 justify-content-start align-items-center gap-3">
                            <img src="image/svg/teachers.png" width="35" alt="students">
                            <div class="w-100 stu d-flex flex-column justify-content-ceter align-items-center">
                                <strong class="text-start w-100">Total Teachers</strong>
                                <p class="text-end  w-100">67</p>
                            </div>
                        </div>
                        <a href="#"
                            class="view nav-link ms-0 py-2 px-3 d-flex justify-content-between align-items-center w-100">
                            <div class="">View Details</div>
                            <img src="image/right.svg" width="15" alt="right">
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 justify-content-center align-items-center">
                    <div class="item item-4">
                        <div class="d-flex p-2 ps-3 justify-content-start align-items-center gap-3">
                            <img src="image/svg/class.png" width="35" alt="students">
                            <div class="w-100 stu d-flex flex-column justify-content-ceter align-items-center">
                                <strong class="text-start w-100">Total classes</strong>
                                <p class="text-end  w-100">45</p>
                            </div>
                        </div>
                        <a href="#"
                            class="view nav-link ms-0 py-2 px-3 d-flex justify-content-between align-items-center w-100">
                            <div class="">View Details</div>
                            <img src="image/right.svg" width="15" alt="right">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container my-3">
            <div class="row mx-0 chart">
                <div class="chart-bar col-xl-6 col-md-12">
                    <div class="line">
                        <canvas class="p-4 mb-3 card" id="myChartStudentsBar" width="100%" height="80%"></canvas>
                        <p>Lorem ipsum dolor sit amet.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur quasi quisquam
                            aspernatur
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur quasi quisquam
                            aspernatur
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur quasi quisquam
                            aspernatur
                            harum minus recusandae. Nulla perferendis voluptatum necessitatibus. Illo reprehenderit
                            dicta
                            explicabo odio laborum voluptatibus enim obcaecati magnam repellat?
                        </p>
                    </div>
                </div>
                <div class="chart-pie col-xl-6 col-md-12">
                    <canvas class="p-4 card" id="myChartStudentsPie" width="50%" height="50%"></canvas>
                </div>
                
                <div class="chart-bar col-xl-6 col-md-12">
                    <div class="line">
                        <canvas class="p-4 mb-3 card" id="myChartStudentsLine" width="100%" height="80%"></canvas>
                    </div>
                </div>
                <div class="chart-pie col-xl-6 col-md-12">
                    <p>Lorem ipsum dolor sit amet.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur quasi quisquam
                        aspernatur
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur quasi quisquam
                        aspernatur
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur quasi quisquam
                        aspernatur
                        harum minus recusandae. Nulla perferendis voluptatum necessitatibus. Illo reprehenderit
                        dicta
                        explicabo odio laborum voluptatibus enim obcaecati magnam repellat?
                    </p>
                </div>
            </div>
        </div>
    </main>

    <script src="js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/chart.js"></script>
</body>

</html>