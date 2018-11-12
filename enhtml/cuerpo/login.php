<?php
include_once("../plantillas/header.php");
?>
                    <!-- Page Content -->

                    <section class="container">
                        <div class="row">
                            <section class="col-sm-12 col-md-12 hidden-sm-down">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html" class="trsn" title="Go back to Home">Inicio</a></li>
                                    <li class="breadcrumb-item"><span>Login</span></li>
                                </ol>
                            </section>
                        </div>
                    </section>

                    <div class="container">
                        <!-- Page Heading -->
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h1 class="page-header"><small>Ingresa al</small> Módulo de Reporte de Incidentes</h1>
                            </div>
                        </div>
                        <!-- /.row -->
                        
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="card mb-3">
                                    <div class="card-block">
                                        <form action="/customer/create" accept-charset="UTF-8" method="post" id="login">  <div id="credentials">
                                                <div id="credentials_email" class="field">
                                                    <label for="customer_credentials_email">Usuario</label>
                                                    <input type="Username" name="customer[email]" id="customer_email" class="text" />
                                                </div>
                                                <div id="credentials_password" class="field">
                                                    <label for="customer_credentials_password">Contraseña</label>
                                                    <input type="password" name="contraseña" id="customer_password" class="text" />
                                                </div>
                                                <div class="actions">
                                                    <input type="submit" value="Ingresar" class="button" id="submit_login" />
                                                    <p>
                                                        <a href="#" onclick="reset_password();return false;" id="reset_password">Recuperar Mi Contraseña</a>
                                                    </p>
                                                    <a href="#" onclick="resume_login();" id="resume_login" style="display:none">Ingresar</a>
                                                </div>
                                            </div>
                                        </form><script type="text/javascript">

                                            function reset_password() {
                                                var login_form = document.getElementById("login");
                                                login_form.action = '/customer/reset_password';
                                                document.getElementById("submit_login").value = 'Reset Password';
                                                document.getElementById("credentials_password").style.display = 'none'
                                                document.getElementById("reset_password").style.display = 'none'
                                                document.getElementById("resume_login").style.display = ''
                                            }
                                            function resume_login() {
                                                var login_form = document.getElementById("login");
                                                login_form.action = '/customer/create';
                                                document.getElementById("submit_login").value = 'Log In';
                                                document.getElementById("credentials_password").style.display = ''
                                                document.getElementById("resume_login").style.display = 'none'
                                                document.getElementById("reset_password").style.display = ''
                                            }
                                        </script>
                                    </div>
                                </div>
                            </div>

                            <div id="customer-new" class="col-md-6 col-sm-6 col-xs-12">
                                <div class="card">
                                    <div class="card-header"><h2 class="card-title">¿Aún no tienes una Cuenta?</h2></div>
                                    <div class="card-block">
                                        <p>Registrate Gratis y Reporta tus Incidentes.</p>
                                        <a href="#" class="btn btn-secondary btn-block" title="Register as Customer">
                                            Registrarse
                                        </a>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>    
                    
<?php
include_once("../plantillas/footer.php");
?>