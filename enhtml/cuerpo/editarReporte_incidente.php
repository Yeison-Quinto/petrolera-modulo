<?php
include_once("../plantillas/header.php");
?>


                    <!-- Page Content -->
                    <section class="container">
                        <div class="row">
                            <section class="col-sm-12 col-md-12 hidden-sm-down">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="trsn" title="Go back to Home">Inicio</a></li>
                                    <li class="breadcrumb-item"><span>Mantenimiento Reporte</span></li>
                                </ol>
                            </section>
                        </div>
                    </section>

                    <div class="container">
                        <!-- Page Heading -->
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h1 class="page-header"> Detalles del Reporte de Incidente</h1>
                            </div>
                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-block">
                                        <form action="/customer/registration" accept-charset="UTF-8" method="post" id="details">  
                                        <div id="customer_details">
                                                <h4 class="title">Edite el Reporte</h4>
                                                <div id="customer_contacts">
                                                
                                                <div id="contacts_phone" class="field text-field">
                                                        <label for="customer_phone">Nombre Reportero </label>
                                                        <input type="text" name="nombre_reportero" value="" id="nombre" class="text" />
                                                    </div>

                                                <div id="contacts_phone" class="field text-field">
                                                        <label for="customer_phone">Cédula </label>
                                                        <input type="text" name="cedula_reportero" value="" id="doc" class="text" />
                                                    </div>

                                                    <div id="contacts_phone" class="field text-field">
                                                        <label for="customer_phone">Cargo </label>
                                                        <input type="text" name="rol" value="" id="username" class="text" />
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label>Fecha </label>
                                                        <div class="input-group date">
                                                            <div class="input-group-addon">
                                                                <i class="fa fa-calendar"></i>
                                                            </div>
                                                            <input type="text" class="form-control pull-right" name="fecha" id="datepicker">
                                                        </div>
                                                    </div>
                                                </div>

                                                    <div id="contacts_phone" class="field text-field">
                                                        <label for="customer_phone">Nombre(s) Implicado(s) </label>
                                                        <input type="text" name="nombre_pers_impl" value="" id="nombre" class="text" />
                                                    </div>


                                                    <div id="contacts_phone" class="field text-field">
                                                        <label for="customer_phone">Descripción </label>
                                                        <input type="text" name="descripcion" value="" id="nombre" class="text" />
                                                    </div>
                                                    
                                                    <div id="contacts_phone" class="field text-field">
                                                        <label for="customer_phone">Prueba </label>
                                                        <input type="text" name="prueba_reporte" value="" id="telefono" class="text" />
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label>Tipo Incidente</label>
                                                        <div>
                                                            <select class="form-control" name="tipo_incidente" value="">
                                                                <option>xxxx</option>
                                                                <option>xxxx</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    
                                                    <div id="contacts_phone" class="field text-field">
                                                        <label for="customer_phone">Categoría </label>
                                                        <input type="text" name="catergoria_incidente" value="" id="username" class="text" />
                                                    </div>

                                                    
                                            
                                                <div class="actions">
                                                    <input type="submit" value="Actualizar" class="button" id="registrar" />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>

<?php
include_once("../plantillas/footer.php");
?>
                   

<!--SCRIPS NECESARIOS PARA EL DATE PICKER-->
<!-- InputMask -->
<script src="../plugins/input-mask/jquery.inputmask.js"></script>
<!-- Select2 -->
<script src="../plugins/select2/select2.full.min.js"></script>
<!-- bootstrap datepicker -->
<script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Page script -->
<script>
    $(function () {
        //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        });
    });
</script>