<!DOCTYPE html>
<html ng-app="semexApp">
<head>
<title>SEMEX ARGENTINA</title>
<?php require_once("meta.html"); ?>

</head>
<body  ng-controller="CarneCtrl as cc" >
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
<div id="wrappercarne">
  <div class="contenedor_botonera_razas" ng-controller="ToroCtrl as tc">
    <div class="contenedor_nombres_razas">
      <div ng-repeat="r in tc.razas" class="nombre_raza">
        <a href="raza.php?id={{r.id}}" class="linkraza" ng-bind-html="r.name"></a>
        <div ng-class="tc.razaClass(r.name) ? 'espacio_nombre_raza' : 'espacio_nombre_raza2'" 
            ng-if="tc.showSeparator(r.name)">|</div>
      </div>
    </div>
  </div> <!-- contenedor_botonera_razas -->
  
  <div class="listado_toros" ng-repeat="r in cc.razas">
    <div class="carne_contenedor_nombreraza">
      <span class="carne_nombreraza"> <span ng-bind-html="r.name"></span> .</span> 
      <span class="carne_listadodetorosdisponibles">LISTADO DE TOROS DISPONBILES</span>
    </div> <!-- carne_contenedor_nombreraza -->
  
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
    </div> <!-- carne_contenedor_rasgosdeps -->

    <div class="carne_contenedor_rasgosdeps2" 
          ng-if="r.toros" 
          ng-repeat="toro in r.toros ">
        <div class="carne_contenedor_rasgosdeps_toros2">
          <a href="ficha_carne.php?id={{toro.id}}" class="carnelinktoro" ng-bind-html="toro.name"></a>
        </div>
        <div class="carne_contenedor_rasgosdeps_rasgos2" >{{toro.pruebas.dep_fp}}</div>
        <div class="carne_contenedor_rasgosdeps_rasgos2">{{toro.pruebas.dep_pn}}</div>
        <div class="carne_contenedor_rasgosdeps_rasgos2">{{toro.pruebas.dep_pd}}</div>
        <div class="carne_contenedor_rasgosdeps_rasgos2">{{toro.pruebas.dep_pf}}</div>
        <div class="carne_contenedor_rasgosdeps_rasgos2">{{toro.pruebas.dep_leche}}</div>
        <div class="carne_contenedor_rasgosdeps_rasgos2">{{toro.pruebas.dep_cm}}</div>
        <div class="carne_contenedor_rasgosdeps_rasgos2">{{toro.pruebas.dep_gd}}</div>
        <div class="carne_contenedor_rasgosdeps_rasgos2">{{toro.pruebas.dep_marm}}</div>
        <div class="carne_contenedor_rasgosdeps_rasgos2">{{toro.pruebas.dep_aob}}</div>
        <div class="carne_contenedor_rasgosdeps_rasgos2">{{toro.pruebas.dep_ce}}</div>
        <div class="carne_contenedor_rasgosdeps_rasgos2">{{toro.pruebas.dep_doc}}</div>
    </div> <!-- carne_contenedor_rasgosdeps2 -->
  </div> <!-- listado_toros -->
</div> <!--- wrapercarne -->

<?php require_once("scripts.html"); ?>
<?php require_once("footer.php"); ?>
</body>
</html>
