<!DOCTYPE html>
<html lang="fr">
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
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo URL."app/assets/style/dashboard.css"; ?>">
    <link rel="stylesheet" href="<?php echo URL."app/assets/style/table.css" ?>">
</head>
<body>
    <?php require("header.php"); ?>
    <main class="main">
        <div class="Container p-4 ">
            <div class="d-flex justify-content-between border-bottom fw-bold fs-4">
                <p class="">More details from niveau: <?php echo $listeStudents[0]->title; ?></p>
            </div>

            <div class="table-responsive card mt-3 p-2">
                <h2>Students</h2>
                <table style="overflow: overlay;" class="table table-striped">
                    <thead>
                        <tr class="rounded">
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Address</th>
                            <th scope="col">Birthday</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listeStudents as $key => $value) {?>
                        <tr>
                            <th><?php echo $value->matricule; ?></th>
                            <td><?php echo $value->nom; ?></td>
                            <td><?php echo $value->genre; ?></td>
                            <td><?php echo $value->adresse; ?></td>
                            <td><?php echo $value->naissance; ?></td>
                            <td><?php echo $value->email; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="table-responsive card mt-3 p-2">
                <h2>Teachers</h2>
                <table style="overflow: overlay;" class="table table-striped">
                    <thead>
                        <tr class="rounded">
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Matiere</th>
                            <th scope="col">Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listeTeachers as $key => $value) {?>
                        <tr>
                            <th><?php echo $value->matricule; ?></th>
                            <td><?php echo $value->nom; ?></td>
                            <td><?php echo $value->genre; ?></td>
                            <td><?php echo $value->matiere; ?></td>
                            <td><?php echo $value->phone; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <script src="./app\assets\js\main.js"></script>
</body>
</html>