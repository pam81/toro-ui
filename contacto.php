<!DOCTYPE html>
<html ng-app="semexApp">
<head>
  <title>SEMEX ARGENTINA</title>
  <?php require_once("meta.html"); ?>
  <script>

function validarEmail(valor) {
  
   if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(valor))
   {
    
    return true;
   } 
   else {
    
    return false;
   }

}

function validarContacto()
{
 

  var name=document.getElementById("name");
    if (name.value == '')
    {
      alert('Te has olvidado de ingresar tu nombre!');
      name.focus();
      return false;
    
    }
    
    var tel=document.getElementById("tel");
    if (tel.value == '')
    {
      alert('Te has olvidado de ingresar tu teléfono!');
      tel.focus();
      return false;
    
    }
    
    var email=document.getElementById("mail");
      if( !validarEmail(email.value))
     {
           alert('Ingresa un Email Válido para poder contactarte!');
           email.focus();
           return false;
     }
    
   
     var comentario=document.getElementById("comentario");
    if (comentario.value == '')
    {
      alert('Te has olvidado de completar el comentario!');
      comentario.focus();
      return false;
    
    }
  
  var code=document.getElementById("captcha");
    if (code.value == '')
    {
      alert('Te has olvidado de ingresar el código de seguridad!');
      code.focus();
      return false;
    
    }
  
  
  
  return true;

}

function notValidCode()
{
  alert("El código ingresado no es correcto");

}
</script>
</head>
<body ng-controller="RazaCtrl as rc">
<div id="wrapper">
  <?php require_once("header.php"); ?>
</div>
<div id="wrapperslide">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.2871094611223!2d-58.39086098414873!3d-34.62218416598377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccb231a1dbec9%3A0x3d0a269203352652!2sSemex+ARG!5e0!3m2!1ses-419!2sar!4v1536725502553" width="100%" height="650" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<div id="wrapperleche">
  <div class="contacto_contenedor_formulario">
    <div class="contacto_contenedor_formulario_form">
      <div class="contacto_texto_formulario">Por favor complete el siguiente formulario para poder ponerse en contacto con nosotros. Muchas gracias.<br />
        * Todos los campos son obligatorios. <br />
        <br />
        <?php if(isset($alerta)) echo $alerta;  ?>
        <form action="" accept-charset="utf-8" method="post">
          <input type="hidden" name="csrf" value="<?php echo $_SESSION["token"]; ?>">
          <div class="contacto_campo_form">
            <input name="nombre" type="text" required="required" class="campo_form" placeholder="Nombre completo"/>
          </div>
          <div class="contacto_campo_form">
            <input name="telefono" type="tel" required="required" class="campo_form" placeholder="Telefono de contacto"/>
          </div>
          <div class="contacto_campo_form">
            <input name="correo" type="email" required="required" class="campo_form" placeholder="Correo de contacto"/>
          </div>
          <div class="contacto_campo_form2">
            <textarea name="mensaje" required class="campo_form2" placeholder="Mensaje..."></textarea>
          </div>
          <div class="contacto_campo_form3">
            <?php  echo '<div class="g-recaptcha" data-sitekey="6LeL8G8UAAAAAJEYAKN04W6pautHtaNR6MWoNs-I"></div>';?>
          </div>
          <div class="contacto_campo_form4">
            <input name="submit" type="submit" class="buttonenviar" value="Enviar" />
          </div>
        </form>
        <script src='https://www.google.com/recaptcha/api.js'></script>
       </div>
    </div>
  </div>
</div>
  <?php require_once("scripts.html"); ?>
  <?php require_once("footer.php"); ?>
</body>
</html>
