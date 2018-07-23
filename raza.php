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
      <li><img src="imagenes/slide/banner_carne01.jpg" alt=""></li>
      <li><img src="imagenes/slide/banner01gde.jpg" alt=""></li>
    </ul>
</div>
<div id="wrappercarne">
   <div class="contenedor_botonera_razas" ng-controller="ToroCtrl as tc">
    <div class="contenedor_nombres_razas">
      <div ng-repeat="r in tc.razas" class="nombre_raza">
        <a href="raza.php?id={{r.id}}" class="linkraza">{{r.name}}</a>
        <div ng-class="tc.razaClass(r.name) ? 'espacio_nombre_raza' : 'espacio_nombre_raza2'" 
            ng-if="tc.showSeparator(r.name)">|</div>
      </div>
    </div>
  </div> <!-- contenedor_botonera_razas -->
  <div class="carne_contenedor_nombreraza"><span ng-if="rc.raza.name" class="carne_nombreraza">{{rc.raza.name}}</span></div>
  
  <div class="carne_raza_contenedor_fotonombre_toro" ng-repeat="toro in rc.toros">
    <div class="carne_raza_contenedor_fototoro">
      <a href="ficha_carne.php?id={{toro.id}}"><img ng-if="toro.image" ng-src="{{toro.image}}" width="190" height="132" alt=""/></a>
    </div>
    <div class="carne_raza_contenedor_nombretoro">{{toro.name}}</div>
  </div>
  
  


  <div class="carne_contenedor_rasgosdeps3"></div>
</div>
<?php require_once("scripts.html"); ?>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {

      // Slideshow 1
      $("#slider1").responsiveSlides({
        maxwidth: 1920,
        speed: 800
      });

      // Slideshow 2
      $("#slider2").responsiveSlides({
        auto: false,
        pager: true,
        speed: 300,
        maxwidth: 540
      });

      // Slideshow 3
      $("#slider3").responsiveSlides({
        manualControls: '#slider3-pager',
        maxwidth: 540
      });

      // Slideshow 4
      $("#slider4").responsiveSlides({
        auto: false,
        pager: false,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });

    });
  </script>
    <?php require_once("footer.php"); ?>
</body>
</html>
