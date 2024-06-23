<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/logo-bio.svg">
  <link rel="icon" type="image/png" href="../../assets/img/logo-bio.svg">
  <title>
    Biosofware
  </title>
  <link rel="stylesheet" href="tabla.css">

  <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../../assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />

</head>

<body class="about-us bg-gray-100">
<?php
    include 'includes/nav.php';
    ?>

    <header>
      <div class="page-header min-vh-25" style="background-image: url(&quot;../../assets/img/estrellas.jpg&quot;); background-position-y: 28%">
      <span class="mask bg-dark opacity-4"></span>
      <div class="container">
      <div class="row">
      <div class="col-lg-7 mx-auto text-white text-center"><br><br><br>
      <h1 class="text-white" id="animate-text1">Inventario de las aves del Centro Biotenológico Del Caribe.</h1>
      </div>
      </div>
      </div>
      </div>
      </header>
    <div class="container">
        <div class="row p-2">
            <div class="col-3">
                <form action="acciones/insertar.php" method="POST" enctype="multipart/form-data">
                    <h3 class="text-center">lista de especies.</h3>
                    <label>nombre común</label>
                    <input class='form-control' type="text" name="nombre_comun" >
                    <label>nombre científico</label>
                    <input class='form-control' type="text" name="nombre_cientifico" >
                    <label>descripción</label>
                    <input class='form-control' type="descripcion" name="descripcion" >
                    <label>fotografia</label>
                    <input class='form-control-danger' type="file" name="foto" >
                    <button class="btn btn-primary mt-2" type="submit">Registrar</button>
                </form>
            </div>
            <div class="col-9">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Foto</th>
                            <th>nombre común</th>
                            <th>nombre científico</th>
                            <th>descripción</th>
                            
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            include "config/bd.php";
                            $query=listar();
                            $enumeracion=0;
                            while($datos=mysqli_fetch_assoc($query)){
                                $enumeracion++;
                                $id=$datos['id'];
                                $foto=$datos['foto'];
                                $nombre_comun=$datos['nombre_comun'];
                                $nombre_cientifico=$datos['nombre_cientifico'];
                                
                            
                        ?>
                        <tr>
                            <td><?= $enumeracion?></td>
                            <td><img style="max-height:50px;" src="data:image/jpg;base64,<?= base64_encode($foto)?>"></td>
                            <td><?= $nombre_comun?></td>
                            <td><?= $nombre_cientifico?></td>
                            <td>
                                <a class="btn btn-info" href="ver.php?id=<?=$id?>">Ver</a>
                                <a class="btn btn-warning" href="editar.php?id=<?=$id?>">Actualizar</a>
                                <a class="btn btn-danger" href="acciones/eliminar.php?id=<?=$id?>">Eliminar</a>
                            </td>
                        </tr>

                        <?php 
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>