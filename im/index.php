<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Marwin'S Master | Iniciar sesión</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="assets/pages/css/login-4.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <script src="assets/SpryValidationTextField.js" type="text/javascript"></script>
        <script src="assets/SpryValidationPassword.js" type="text/javascript"></script>
        <link href="assets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
        <link href="assets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="images/mm.png" />
        <script src="js/jquery.min.js"></script>
        <script src="js/app.js"></script>
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        		<script src="js/ipresenter.packed.js"></script>
        		<script>
        			$(document).ready(function(){
        				$('#ipresenter').iPresenter({
        					timerPadding: -1,
        					controlNav: true,
        					controlNavThumbs: true,
        					controlNavNextPrev: false
        				});
        			});
        		</script>
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
						});
					});
		</script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){     
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
                });
            });
        </script>
        <script type="text/javascript">
        // Definimos los campos que se han de verificar, contruimos un array con los id de los mismos
        var campos = ["email", "password"];
        function activar() {
        var c = 0;
        for(var i in campos){
        i = parseInt(i);
        var cadenaL = document.getElementById(campos[i]).value;
        // hacemos un trim previo a la verificación
        cadenaL = cadenaL.replace(/^\s+/g,'').replace(/\s+$/g,'')
        if(cadenaL != ""){
        c++; // incrementamos c por cada campo que no está vacío
        }
        if(c == (i+1)){ // si c es = al total de los campos habilitamos el submit
        document.getElementById('ingresar').disabled = false;
        }else{
        document.getElementById('ingresar').disabled = true;
        }
        }
        }
         
        // agregamos el evento onkeyup dinamicamente a los campos requeridos
        window.onload = function(){
            for(var e in campos){
            var elem = document.getElementById(campos[e])
            if (elem.addEventListener){
            elem.addEventListener("keyup", function(){activar()}, false);
            }else{ // <IE9
                if (elem.attachEvent){
                elem.attachEvent ("onkeyup", function () {activar(elem)});
                }
            }
            }
        }
         
        //]]>
        </script>
</head>
<body class=" login">
		<br><br><br><br><br><br>
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form id="login" method="post">
                <h3 class="form-title">Ingrese a su cuenta</h3>
                <div id="mensajes">
		  		<?php
		  			if(isset($_GET['msg'])){
		  			echo '<div class="alert alert-success" role="alert">'.$_GET['msg'].'</div>';
		  			}
		  		?>
		  	    </div>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Introduzca su nombre de usuario y contraseña. </span>
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Correo electrónico</label>
                    <span id="sprytextfield1">
                    <div class="input-icon">
                        <i class="fa fa-user"></i>
                        <input class="form-control placeholder-no-fix" name="email" id="email" type="email" class="textbox" autocomplete="off" placeholder="Correo electrónico" /> 
                    </div>
                    <span class="textfieldRequiredMsg">Disculpe, ingrese su correo electrónico.</span>
                    <span class="textfieldInvalidFormatMsg">Disculpe, correo electrónico no válido.</span>
                    </span>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Contraseña</label>
                    <span id="sprypassword1">
                    <div class="input-icon">
                        <i class="fa fa-lock"></i>
                        <input class="form-control placeholder-no-fix" name="password" id="password" type="password" class="textbox" autocomplete="off" placeholder="Contraseña" />
                    </div>
                    <span class="passwordRequiredMsg">Disculpe, ingrese su contraseña.</span>
                    </span>
                </div>
                <div class="form-actions">
                    <label class="checkbox">
                        <input type="checkbox" name="remember" value="1" /> Recordarme </label>
                        <input type="hidden" name="login">
                        <input type="submit" id="ingresar" name="ingresar" value="Ingresar" disabled="disabled" class="btn green pull-right" />
                </div>
                <div class="login-options">
                    <h4>O ingresar con</h4>
                    <ul class="social-icons">
                        <li>
                            <a class="facebook" data-original-title="facebook" href="javascript:;"> </a>
                        </li>
                        <li>
                            <a class="twitter" data-original-title="Twitter" href="javascript:;"> </a>
                        </li>
                        <li>
                            <a class="googleplus" data-original-title="Goole Plus" href="javascript:;"> </a>
                        </li>
                        <li>
                            <a class="linkedin" data-original-title="Linkedin" href="javascript:;"> </a>
                        </li>
                    </ul>
                </div>
                <div class="create-account">
                    <p>¿No tiene una cuenta todavía?
                        <a href="registrar.html" id="register-btn"> Crea una cuenta </a>
                    </p>
                </div>
            </form>
            <!-- END LOGIN FORM -->
        </div>
        <!-- END LOGIN -->
        <br>
	    <!-- BEGIN COPYRIGHT -->
        <div class="copyright"> 2016 &copy; Marwin'S Master - todos los derechos reservados. </div>
        <!-- END COPYRIGHT -->
        <!-- BEGIN CORE PLUGINS -->
        <script type="text/javascript">
        var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "email", {validateOn:["blur"], useCharacterMasking:true});
        var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1", {validateOn:["blur"]});
        </script>
        <script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="assets/pages/scripts/login-4.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>
</html>