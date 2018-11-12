<?php
include_once("../plantillas/header.php");
?>


                    <div class="container">
                        <!-- Page Heading -->
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h1 class="page-header" alin="center">Administrar Personas</h1>
                            </div>
                        </div>
                        <!-- /.row -->

                        <div class="actions">
                            <input type="submit" value="Agregar Persona" class="button" id="registrar" />
                        </div> 


                <div class="box-body table-responsive no-padding">
                    <table id="example1" class="table table-bordered table-striped">
                    <!-- encabezado -->
                        <thead>
                            <tr>
                                <th><i class="fa fa-eye"></i></th>
                                <th>Cédulas</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Cargo</th>
                                <th>Correo Eléctronico</th>
                                <th>Fecha de Ingreso</th>
                                <th>Editar</th>
                                <?php
                                    if($_SESSION['rolSelect'] == 'Administrador de Reportes'){
                                    ?>
                                       <th>Eliminar</th>
                                    <?php
                                    }
                                    ?>
                                
                            </tr>
                        </thead>
                        <!-- cuerpo -->
                        <?php foreach($arrayC as $array){?>
                                <tr>
                                <!--$array->item el item hace referencia al nombre del atributo item de la consulta la base de datos-->
                                    <td><a href="#" class="small-box-footer"> <i class="fa fa-eye"></i></a></td>
                                    <td><?php echo $array->placa;?></td>
                                    <td><?php echo $array->serial; ?></td>
                                    <td><?php echo $array->modelo; ?></td>
                                    <td><?php echo $array->descripcion; ?></td>
                                    <td><?php echo $array->descripcion_actual; ?></td>
                                    <td><?php echo $array->fecha_adquisicion; ?></td>                                           
                                    <td><a href="#" class="small-box-footer">Editar <i class="fa fa-pencil"></i></a></td>
                                    <?php
                                    if($_SESSION['rolSelect'] == 'Administrador de Reportes'){
                                    ?>
                                        <td><a href="#" class="small-box-footer" onclick="confirma()">Eliminar <i class="fa fa-remove"></i></a></td>
                                    <?php
                                    }
                                    ?>
                                    
                                </tr>                    
                                <?php } ?>
                        </tbody>
                        <!-- pie -->
                    </table>
                </div>


                    </div>
                    <hr>                    
                   
<?php
include_once("../plantillas/footer.php");
?>


<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>

<!-- page script -->
<script>
    $(function () {
        $("#example1").DataTable({
            //cambiar el lenguaje a español forma 1
            "language": {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Registros",
                "infoEmpty": "Mostrando 0 a 0 de 0 Registros",
                "infoFiltered": "(Filtrado de _MAX_ total Registros)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Registros",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar: ",
                "zeroRecords": "No hay Registros encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            }
        });
    });
</script>

<!--Script que confirma si en realidad se desea eliminar-->
<script>
function confirma(){
    var opcion = confirm("¿Desea eliminar el Elemento?");
    if (opcion == true) {
        document.location.href = "../_controlador/ElementoController.php?accion=eliminar&placa=<?php echo $array->placa; ?>";
	} else {

	}
}
</script>