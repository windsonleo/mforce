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
                        <h1 class="mt-4">Proprietario</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Novo</li>
                        </ol>

                

                        <div class="card mb-6">
                            <div class="card-header">
                                <i class="fas fa-user me-1"></i>
                                Adicionar Proprietário
                            </div>
                            <div class="card-body">

                                <form class="" action="../dao/adicionar_proprietario.php" method="POST">

                                   <div class="col-8">
                                        <fieldset class="form-label-group">
                                              <label for="id">Id</label>
                                            <input type="text" class="form-control" id="id" value="" readonly="" autofocus="" name="id">
                                          
                                        </fieldset>
                                    </div>

                                       <div class="col-8">
                                        <fieldset class="form-label-group">
                                             <label for="nome">Nome</label>
                                            <input type="text" class="form-control" id="nome" value=""  autofocus="" name="nome">
                                           
                                        </fieldset>
                                    </div>

                                     <div class="col-8">
                                        <fieldset class="form-label-group">
                                             <label for="contacto">Contacto</label>
                                            <input type="text" class="form-control" id="contacto" value="" autofocus="" name="contacto">
                                           
                                        </fieldset>
                                    </div>

                                       <div class="col-8">
                                        <fieldset class="form-label-group">
                                             <label for="nif">NIF</label>
                                            <input type="text" class="form-control" id="nif" value=""  autofocus="" name="nif">
                                           
                                        </fieldset>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">

                                        <button type="submit" class="btn btn-primary">Salvar</button>

                                    </div>
                                     


                                </form>
         
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
