<?php
$aviso = "";
// check form  
if ($_POST['mail'] != "") {
	// email de destino
	$email = "infoenter@enterprisesolutiongt.hol.es";
	
	// asunto del email
	$subject = "Informacion";
	
	// Cuerpo del mensaje
	$mensaje = "---------------------------------- \n";
	$mensaje.= "            Contacto               \n";
	$mensaje.= "---------------------------------- \n";
	$mensaje.= "NOMBRE:   ".$_POST['nombre']."\n";
	$mensaje.= "Asunto:  ".$_POST['asunto']."\n";
	$mensaje.= "EMAIL:    ".$_POST['mail']."\n";
	$mensaje.= "Descripcion:    ".$_POST['mensaje']."\n";
	$mensaje.= "FECHA:    ".date("d/m/Y")."\n";
	$mensaje.= "HORA:     ".date("h:i:s a")."\n";
	$mensaje.= "IP:       ".$_SERVER['REMOTE_ADDR']."\n\n";
	$mensaje.= "---------------------------------- \n\n";
	$mensaje.= $_POST['mensaje']."\n\n";
	$mensaje.= "---------------------------------- \n";
	$mensaje.= "Enviado desde http://blog.unijimpe.net \n";
	
	// headers del email
	$headers = "From: ".$_POST['mail']."\r\n";
	
	// Enviamos el mensaje
	if (mail($email, $subject, $mensaje, $headers)) {
		$aviso = "Su mensaje fue enviado correctamente";
	} else {
		$aviso = "Error de envío";
	}
}
?>

<!doctype html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/style.css">
  <meta charset="UTF-8">
  <title>Enterprise Solution </title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
  <div class="navbar navbar-fixed-top navbar-inverse">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="index.html"><img src="img/titulotrabajo2.png" alt=""></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="index.html">Home</a></li>
              <li><a href="mision.html">Nosotros</a></li>

              <li><a href="servicios.html">Servicios</a></li>
			  <li><a href="soft.html">Software</a></li>
			  <li><a href="loginweb.html">Produccion</a></li>
           
              <li><a href="contactanos.html">Contactanos</a></li>
            </ul>
        
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
      
<section class="padding1 theme landing1">
    <div class="container">
      <div>
      <img src="img/enters5.1.png" alt="">
    </div>
         </div>

        </section>
          <section  >
    <div class="container">
          <div class="row-fluid">
            <div class="span12">
              <div class="text-center">
              <h1>Contactenos</h1>
               <form method="POST">
               
      
      <input class="input-xlarge"  name="nombre" type="text"  placeholder="Asunto" required="required" />
   
   <br>
      
      <input class="input-xlarge" name="asunto" type="text" placeholder="Nombre" required="required"/>
    <br>
    

<input class="input-xlarge"  name="mail" class="span2" id="prependedInput" type="text" placeholder="E-mail" pattern="[^ @]*@[^ @]*">


    
  <br>
     <center> 
 <textarea class="input-xlarge"  name="mensaje" rows="6" cols="130" placeholder="Descripcion" required="required"></textarea>
</center>
   <br>
  
    <input class="btn btn-large btn-primary" type="submit" value="Enviar" />
               </form>
               </div>
            </div>
          </div>
         </div>
       </section>

      
</body>

        <footer class="pie1">
        <div class="container text-center">
        <p> &copy; Enterprise Solution 2015</p>
        </div>
      </footer>

   <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
</html>