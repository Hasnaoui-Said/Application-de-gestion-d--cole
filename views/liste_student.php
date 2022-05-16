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
    <link rel="stylesheet" href="./app/assets/style/dashboard.css">
    <link rel="stylesheet" href="./app/assets/style/table.css">
</head>
<body>
    <?php require("header.php"); ?>

    <main class="main">
        <div class="Container p-4 ">
            <div class="d-flex justify-content-between border-bottom fw-bold fs-4">
                <p class="">Listes des étudiants</p>
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
                            <input type="text" class="form-control" placeholder="Search...">
                            <button class="btn btn-primary">Search</button>
                        </div>  
                    </div>
                </div>
                <!--  -->

            </div>

            <div class="table-responsive card mt-3 p-2">
                <table style="overflow: overlay;" class="table table-striped">
                    <thead>
                        <tr class="rounded">
                            <th scope="col">Name</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Address</th>
                            <th scope="col">Birthday</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($liste as $key => $value) {?>
                            <tr>
                                <td><?php echo $value->nom; ?></td>
                                <td><?php echo $value->genre; ?></td>
                                <td><?php echo $value->adresse; ?></td>
                                <td><?php echo $value->naissance; ?></td>
                                <td><?php echo $value->email; ?></td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#m<?php echo $value->matricule; ?>">
                                        <img style="max-width: 20px;" src="./app/image/edit.png">
                                    </button>
                                <!-- Modal -->
                                <div class="modal fade" id="m<?php echo $value->matricule; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Update Student</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <form action="<?php echo URL."student/update/".$value->matricule; ?>" method="POST">
                                        <div class="mb-3">
                                            <label for="fullname" class="form-label">Fullname</label>
                                            <input type="text" class="form-control" id="fullname" name="nom" value="<?php echo $value->nom; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="gender" class="form-label">Gender</label>
                                            <select id="gender" class="form-control form-control-lg" name="genre">
                                                <option value="homme" <?php if($value->genre == "homme"){echo "selected";} ?> >homme</option>
                                                <option value="femme" <?php if($value->genre == "femme"){echo "selected";} ?> >femme</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="adresse" class="form-label">Adresse</label>
                                            <input type="text" class="form-control" id="adresse" name="adresse" value="<?php echo $value->adresse; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="naissance" class="form-label">Birthday</label>
                                            <input type="date" class="form-control" id="naissance" name="naissance" value="<?php echo $value->naissance; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="text" class="form-control" id="email" name="email" value="<?php echo $value->email; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="parent" class="form-label">Parent</label>
                                            <select id="parent" class="form-control form-control-lg" name="tuteur">
                                                <?php foreach ($parents as $key => $val){?>
                                                <option value="<?php echo $val->matricule; ?>" <?php if($value->tuteur == $val->matricule){echo "selected";} ?> ><?php echo $val->nom; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <a href="<?php echo URL."student/delete/".$value->matricule; ?>">
                                    <img style="max-width: 20px;" src="./app/image/trash.png">
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add New Student</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo URL."student/add"; ?>" method="POST">
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Fullname</label>
                        <input type="text" class="form-control" id="fullname" name="fullname">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select id="gender" class="form-control form-control-lg" name="gender">
                            <option value="homme">homme</option>
                            <option value="femme">femme</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="adresse" class="form-label">Adresse</label>
                        <input type="text" class="form-control" id="adresse" name="adresse">
                    </div>
                    <div class="mb-3">
                        <label for="naissance" class="form-label">Birthday</label>
                        <input type="date" class="form-control" id="naissance" name="naissance">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="parent" class="form-label">Parent</label>
                        <select id="parent" class="form-control form-control-lg" name="parent">
                            <?php foreach ($parents as $key => $value){?>
                            <option value="<?php echo $value->matricule; ?>"><?php echo $value->nom; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </main>

    <script src="js/main.js"></script>
</body>
</html>