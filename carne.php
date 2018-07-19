<!DOCTYPE html>
<html ng-app="semexApp">
<head>
<title>SEMEX ARGENTINA</title>
<?php require_once("meta.html"); ?>

</head>
<body class="carne"  ng-controller="CarneCtrl as cc" >
<div id="wrapperslide">
  <!-- Slideshow 1 -->
  <ul class="rslides" id="slider1">
      <li><img src="imagenes/slide/banner_carne01.jpg" alt=""></li>
      <li><img src="imagenes/slide/banner01gde.jpg" alt=""></li>
    </ul>
</div>
<div id="wrappercarne">
  <div class="contenedor_nombres_razas2"></div>
  
  <div ng-repeat="r in cc.razas">
    <div class="carne_contenedor_nombreraza">
      <span class="carne_nombreraza">{{r.name}} .</span> 
      <span class="carne_listadodetorosdisponibles">LISTADO DE TOROS DISPONBILES</span>
    </div>
  
    <div class="carne_contenedor_rasgosdeps">
      <div class="carne_contenedor_rasgosdeps_toros">TORO</div>
      <div class="carne_contenedor_rasgosdeps_rasgos">
        <div class="carne_contenedor_rasgosdeps_rasgostxt">FP</div>
        <div class="carne_contenedor_rasgosdeps_rasgosflechita"><img src="imagenes/flechita.png" width="5" height="5" alt=""/></div>
      </div>
      <div class="carne_contenedor_rasgosdeps_rasgos">
        <div class="carne_contenedor_rasgosdeps_rasgostxt">PN</div>
        <div class="carne_contenedor_rasgosdeps_rasgosflechita"><img src="imagenes/flechita.png" width="5" height="5" alt=""/></div>
      </div>
      <div class="carne_contenedor_rasgosdeps_rasgos">
        <div class="carne_contenedor_rasgosdeps_rasgostxt">PD</div>
        <div class="carne_contenedor_rasgosdeps_rasgosflechita"><img src="imagenes/flechita.png" width="5" height="5" alt=""/></div>
      </div>
      <div class="carne_contenedor_rasgosdeps_rasgos">
        <div class="carne_contenedor_rasgosdeps_rasgostxt">PF</div>
        <div class="carne_contenedor_rasgosdeps_rasgosflechita"><img src="imagenes/flechita.png" width="5" height="5" alt=""/></div>
      </div>
      <div class="carne_contenedor_rasgosdeps_rasgos">
        <div class="carne_contenedor_rasgosdeps_rasgostxt">L</div>
        <div class="carne_contenedor_rasgosdeps_rasgosflechita"><img src="imagenes/flechita.png" width="5" height="5" alt=""/></div>
      </div>
      <div class="carne_contenedor_rasgosdeps_rasgos">
        <div class="carne_contenedor_rasgosdeps_rasgostxt">CM</div>
        <div class="carne_contenedor_rasgosdeps_rasgosflechita"><img src="imagenes/flechita.png" width="5" height="5" alt=""/></div>
      </div>
      <div class="carne_contenedor_rasgosdeps_rasgos">
        <div class="carne_contenedor_rasgosdeps_rasgostxt">GD</div>
        <div class="carne_contenedor_rasgosdeps_rasgosflechita"><img src="imagenes/flechita.png" width="5" height="5" alt=""/></div>
      </div>
      <div class="carne_contenedor_rasgosdeps_rasgos">
        <div class="carne_contenedor_rasgosdeps_rasgostxt">MAR</div>
        <div class="carne_contenedor_rasgosdeps_rasgosflechita"><img src="imagenes/flechita.png" width="5" height="5" alt=""/></div>
      </div>
      <div class="carne_contenedor_rasgosdeps_rasgos">
        <div class="carne_contenedor_rasgosdeps_rasgostxt">AOB</div>
        <div class="carne_contenedor_rasgosdeps_rasgosflechita"><img src="imagenes/flechita.png" width="5" height="5" alt=""/></div>
      </div>
      <div class="carne_contenedor_rasgosdeps_rasgos">
        <div class="carne_contenedor_rasgosdeps_rasgostxt">CE</div>
        <div class="carne_contenedor_rasgosdeps_rasgosflechita"><img src="imagenes/flechita.png" width="5" height="5" alt=""/></div>
      </div>
      <div class="carne_contenedor_rasgosdeps_rasgos">
        <div class="carne_contenedor_rasgosdeps_rasgostxt">DOC</div>
        <div class="carne_contenedor_rasgosdeps_rasgosflechita"><img src="imagenes/flechita.png" width="5" height="5" alt=""/></div>
      </div>
    </div>

    <div class="carne_contenedor_rasgosdeps2" ng-if="r.toros" ng-repeat="toro in r.toros ">
      <div class="carne_contenedor_rasgosdeps_toros2">
        <a href="ficha_carne.php?id={{toro.id}}" class="carnelinktoro">{{toro.name}}</a>
      </div>
      <div class="carne_contenedor_rasgosdeps_rasgos2" >{{toro.pruebas.dep_fp}}</div>
      <div class="carne_contenedor_rasgosdeps_rasgos2">{{tc.toro.pruebas.dep_pn}}</div>
      <div class="carne_contenedor_rasgosdeps_rasgos2">{{tc.toro.pruebas.dep_pd}}</div>
      <div class="carne_contenedor_rasgosdeps_rasgos2">{{tc.toro.pruebas.dep_pf}}</div>
      <div class="carne_contenedor_rasgosdeps_rasgos2">{{tc.toro.pruebas.dep_leche}}</div>
      <div class="carne_contenedor_rasgosdeps_rasgos2">{{tc.toro.pruebas.dep_cm}}</div>
      <div class="carne_contenedor_rasgosdeps_rasgos2">{{tc.toro.pruebas.dep_gd}}</div>
      <div class="carne_contenedor_rasgosdeps_rasgos2">{{tc.toro.pruebas.dep_marm}}</div>
      <div class="carne_contenedor_rasgosdeps_rasgos2">{{tc.toro.pruebas.dep_aob}}</div>
      <div class="carne_contenedor_rasgosdeps_rasgos2">{{tc.toro.pruebas.dep_ce}}</div>
      <div class="carne_contenedor_rasgosdeps_rasgos2">{{tc.toro.pruebas.dep_doc}}</div>
    </div>
</div>

<?php require_once("scripts.html"); ?>

<script src="slide/responsiveslides.min.js"></script>
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
</body>
</html>