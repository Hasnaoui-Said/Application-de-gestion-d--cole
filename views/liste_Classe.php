<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./app/assets/style/dashboard.css">
    <link rel="stylesheet" href="./app/assets/style/table.css">
    <link rel="stylesheet" href="./app/assets/style/tableStype.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.2/font/bootstrap-icons.min.css" integrity="sha512-YzwGgFdO1NQw1CZkPoGyRkEnUTxPSbGWXvGiXrWk8IeSqdyci0dEDYdLLjMxq1zCoU0QBa4kHAFiRhUL3z2bow==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .bi {
            color: #F3A003;
            background: #01AB68;
            padding: 1px 3px;
            border-radius: 2px;
        }
    </style>
</head>

<body>
    <?php require("header.php"); ?>

    <main class="main">
        <div class="content p-4 ">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center border-bottom fw-bold fs-4">
                <p class="">Listes des Classes: </p>
                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <img style="width: 20px; height: 20px;" src="./app/image/add.png">
                    <span>Ajouter</span>
                </button>
            </div>
            <div class="d-flex justify-content-between mt-3 fw-bold">
                <div class="d-flex">
                    <p>Afficher</p>
                    <select class="rounded mx-1" name="" id="">
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="75">75</option>
                        <option value="tout">tout</option>
                    </select>
                    <p>entités</p>
                </div>
                <!--  -->
                <div class="">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="search">
                            <i class="fa fa-search"></i>
                            <form method="POST" action='classe'>
                                <input type="text" value="<?= $content ?? '' ?>" name="text" class="text form-control" placeholder="Search...">
                                <button class="btn btn-primary">Search</button>
                            </form>
                        </div>  
                    </div>
                </div>
                <!--  -->

            </div>
            <div class="table-responsive custom-table-responsive card mt-3 p-2">
                <table style="overflow: overlay;" class="table custom-table">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Decription</th>
                            <th scope="col" colspan="2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($liste as $key => $value) { ?>
                            <tr>
                                <td>
                                    <a  href="<?php echo URL."details/". $value->matricule; ?>" type="button" class="btn btn_info_i btn-link p-0">
                                        <i class="bi bi-info-circle"></i>
                                    </a>
                                </td>
                                <th><?php echo $value->matricule; ?></th>
                                <td><?php echo $value->title; ?></td>
                                <td><?php echo $value->description; ?></td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-link p-0" data-bs-toggle="modal" data-bs-target="#m<?php echo $value->matricule; ?>">
                                        <img style="max-width: 20px;" src="./app/image/edit.png">
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="m<?php echo $value->matricule; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Update Teacher</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?php echo URL . "classe/update/" . $value->matricule; ?>" method="POST">
                                                        <div class="mb-3">
                                                            <label for="title" class="form-label">title</label>
                                                            <input type="text" class="form-control" id="title" name="title" value="<?php echo $value->title; ?>">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="description" class="form-label">description</label>
                                                            <input type="text" class="form-control" id="description" name="description" value="<?php echo $value->description; ?>">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal -->
                                </td>
                                <td>
                                    <a href="<?php echo URL . "classe/delete/" . $value->matricule; ?>">
                                        <img style="max-width: 20px;" src="./app/image/trash.png">
                                    </a>
                                </td>
                            </tr>
                            
                            <tr class="spacer">
                                    <td colspan="100"></td>
                                </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Add New Parent</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo URL . "classe/add" ?>" method="POST">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title:</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description:</label>
                                <textarea type="text" class="form-control" id="description" name="description"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>



    <script src="./app\assets\js\main.js"></script>
</body>

</html>