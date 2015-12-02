<?php include('header.php');
?>

<div class="container">
    <br>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <a href="<?php echo BASE_URL . $controlador . '/load_add' ?>" class="btn btn-danger pull-right">
                Nuevo Registro
            </a>
        </div>	
    </div>



    <table class="table table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>descripcion</th>
                <th>categoria</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php for ($x = 0; $x < count($items_games); $x++): ?>
                <tr>
                    <td><?php echo $items_games[$x]->id ?></td>
                    <td><?php echo $items_games[$x]->nombre ?></td>
                    <td><?php echo $items_games[$x]->descripcion ?></td>
                    <td><?php echo $items_games[$x]->categoria?></td>
                    <td>
                         <a href=" <?php echo BASE_URL . $controlador . '/load_delete/' . $items_games[$x]->id ?> " class="btn btn-danger">Eliminar</a>
                        <a href=" <?php echo BASE_URL . $controlador . '/load_update/' . $items_games[$x]->id ?> " class="btn btn-info">Editar</a>	

                    </td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>

</div>
<script src="<?php echo BASE_URL; ?>static/js/master/<?php echo $controlador . '.js' ?>"></script>
<?php include('footer.php'); ?>


