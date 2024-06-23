
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>
<body>
<link rel="stylesheet" href="tabla.css">

<table class="table">
<thead>
        <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Fotografía</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Nombre Común</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Nombre Cientifico</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Antropica <br><span class="text-primary text-xxl">99</span></th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Acuicultura <br><span class="text-primary text-xxl">56</span></th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Espc. Menores <br><span class="text-primary text-xxl">149</span></th>
        </tr>
    </thead>
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
                            $correo=$datos['descripcion'];
                            
                        
                    ?>
                    <tr>
                        <td><?= $enumeracion?></td>
                        <td><img style="max-height:50px;" src="data:image/jpg;base64,<?= base64_encode($foto)?>"></td>
                        <td><?= $nombre_comun?></td>
                        <td><?= $nombre_cientifico?></td>
                        <td><?= $correo?></td>
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


<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="tabla.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script>
</body>
</html>