<?php
session_start(); 

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MForce- Avaliação</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
 

//nav
<?php include 'nav.php';?>

        <div id="layoutSidenav">




//layoutsidenav

<?php include 'layoutSideNav.php';?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Movimentação</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Veículo</li>
                        </ol>

                                  <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-car me-1"></i>
                                Veículos
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">

                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Matricula</th>
                                            <th>Marca</th>
                                            <th>Modelo</th>
                                            <th>Proprietário</th>
                                            <th>AÇÕES</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Matricula</th>
                                            <th>Marca</th>
                                            <th>Modelo</th>
                                            <th>Proprietário</th>
                                            <th>AÇÕES</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
    <?php
                include('dao/config.php');
                $connection = new PDO("mysql:dbname=$data_base;host=$host", $user, $password);
                if (!$connection) {
                    die("Connection failed: " . mysqli_connect_error());
                }

               
                $idproprietario;

                $engine = $connection->prepare("SELECT * from veiculo");
             // $engine->bindParam(1, $status, PDO::PARAM_INT);

                $engine->execute();
                
                if ($engine->rowCount() > 0) {

                
                    while ($row = $engine->fetch(PDO::FETCH_ASSOC)) {

                       
                        $idveiculo = $row['id'];


                  ?>

                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['matricula']; ?></td>
                                <td><?php echo $row['marca']; ?></td>
                                <td><?php echo $row['modelo']; ?></td>
                                <td><?php echo $row['proprietario_id']; ?></td>
                                <td>
                                 
                                
                                    <a href="#"><i class="fa-solid fa-user"></i></a>
                                    <a href="excluirveiculo.php?idveiculo=<?php echo $idveiculo; ?>"><i class="fa-solid fa-trash"></i></a>

                                  


                                </td>

                                <?php }
                }


            ?>
                               
                            </tr>
                            
                                    </tbody>
                                </table>
                            </div>
                        </div>
                

                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright 2023</div>
                          
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
