<!DOCTYPE html>
<html ng-app="semexApp">
<head>
  <title>SEMEX ARGENTINA</title>
  <?php require_once("meta.html"); ?>
</head>
<body ng-controller="RazaCtrl as rc">
<div id="wrapper">
  <?php require_once("header.php"); ?>
</div>
<div id="wrapperslide">
  <!-- Slideshow 1 -->
  <ul class="rslides" id="slider1">
      <li><img src="imagenes/slide/01.jpg" alt=""></li>
      <li><img src="imagenes/slide/02.jpg" alt=""></li>
      <li><img src="imagenes/slide/03.jpg" alt=""></li>
      <li><img src="imagenes/slide/04.jpg" alt=""></li>
      <li><img src="imagenes/slide/05.jpg" alt=""></li>
    </ul>
</div>
<div id="wrapperleche">
  <div class="leche_contenedor_iframe">
    <object data="https://www.semex.com/inc/i?lang=sp&view=list&breed=HO&data=tpi&print=n" style="width:100%; height:100%"></object>
  </div>
</div>
  <?php require_once("scripts.html"); ?>
  <?php require_once("footer.php"); ?>
</body>
</html>
