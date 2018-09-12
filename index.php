<!DOCTYPE html>
<html ng-app="semexApp">
<head>
  <title>SEMEX ARGENTINA</title>
  <?php require_once("meta.html"); ?>
  <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</head>
<body ng-controller="HomeCtrl as hc">
<div id="fb-root"></div>
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

<div id="wrapperindex1">
    <div class="index_contenedor_divs">
      <div class="index_contenedor_botones_slide1">
        <div class="index_contenedor_boton_slide1"><a ng-click="hc.changeSection('noticias')" class="linkindexslide1">NOTICIAS</a></div>
        <div class="index_separador_botones_slide1"></div>
        <div class="index_contenedor_boton_slide1"><a ng-click="hc.changeSection('leche')" class="linkindexslide1">LECHE</a></div>
        <div class="index_separador_botones_slide1"></div>
        <div class="index_contenedor_boton_slide1"><a ng-click="hc.changeSection('carne')" class="linkindexslide1">CARNE</a></div>
        <div class="index_separador_botones_slide1"></div>
        <div class="index_contenedor_boton_slide1"><a ng-click="hc.changeSection('video')" class="linkindexslide1">VIDEO</a></div>
      </div>
      <div ng-if="hc.section.noticias" class="index_contenedor_contenido_slide1" id="noticias">
        <div class="index_contenedor_contenido_slide1_foto">
          <img src="imagenes/index_slide1_foto1.jpg" width="560" height="400" alt=""/>
        </div>
        <div class="index_contenedor_contenido_slide1_titulo">CATALOGOS SEMEX BEEF 2018</div>
        <div class="index_contenedor_contenido_slide1_texto">Llegaron los cat&aacute;logos Semex Beef 2018. Pasalos a buscar por nuestro Stand de la Expo Rual 2018!! No te lo pierdas.</div>
      </div> <!-- index_contenedor_contenido_slide1 noticias -->
      <div ng-if="hc.section.leche" class="index_contenedor_contenido_slide1" id="leche">
        <div class="index_contenedor_contenido_slide1_foto">
          <img src="imagenes/index_slide1_foto2.jpg" width="560" height="400" alt=""/>
        </div>
        <div class="index_contenedor_contenido_slide1_titulo">PETER</div>
        <div class="index_contenedor_contenido_slide1_texto">HOARGM264380<br />
          ALTASPRING x SUPERSIRE<br />
          <br />
        . Peter es el toro activo Nº1 por GTPI y $MN produciendo semen en Argentina.<br>
        . Altísimos componentes con desviaciones positivas de grasa y proteína.<br>
        . Elevados índices para Vida Productiva. Fertilidad de las hijas y Eficiencia en la Alimentación.<br>
        . Facilidad de parto, estatura moderada y buen sistema mamario.
        </div>
      </div> <!-- index_contenedor_contenido_slide1 leche -->
      <div ng-if="hc.section.carne" class="index_contenedor_contenido_slide1" id="carne">
        <div class="index_contenedor_contenido_slide1_foto">
          <img src="imagenes/index_slide1_foto3.jpg" width="560" height="400" alt=""/>
        </div>
        <div class="index_contenedor_contenido_slide1_titulo">BENELLI</div>
        <div class="index_contenedor_contenido_slide1_texto">RED LAZY MC BENELLI 102B<br />
          <br />
          . Cabeza de remate de Lazy MC Angus (U$37.500), G. C. Ternero 2014 en Showdown y Rdo. C. Junior en Crossroads Beef Expo.<br />
          <br />
          . Un pedigree más que interesante por la solidez y consistencia de su padre y madre.<br />
          <br />
          . Excelente color, balanceado entre fenotipo y DEPs con frame moderado.
        </div>
      </div> <!-- index_contenedor_contenido_slide1 carne -->
      <div ng-if="hc.section.video" class="index_contenedor_contenido_slide1" id="video">
        <iframe width="940" height="395" src="https://www.youtube.com/embed/QkAiEIPoG7M" 
          frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div> <!-- index_contenedor_contenido_slide1 video -->
    </div> <!-- index_contenedor_divs -->
</div> <!-- wrapperindex1 -->

<div id="wrapperindex2">
    <div class="index_contenedor_divs_flip">
      <div class="index_contenedor_flipslide">
        <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
	        <div class="flipper">
		        <div class="front">
              <!-- front content -->
                <img src="imagenes/tapa_leche2018.jpg" width="230" height="325" alt=""/>
            </div>
		        <div class="back">
			        <!-- back content -->
              <div class="index_contenedor_flipslide_back">
                <div class="index_contenedor_flipside_back_acrobat">
                  <img src="imagenes/acrobat_grande.png" width="103" height="100" alt=""/>
                </div>
                <div class="index_contenedor_flipside_back_contenedorlink">
                  <div class="index_contenedor_flipside_back_link1">
                    <a href="pdf/AnuarioLeche2018.pdf" class="linkindexflip1">DESCARGAR</a>
                  </div>
                </div>
                <div class="index_contenedor_flipside_back_contenedorlink">
                  <div class="index_contenedor_flipside_back_link1">
                    <a href="https://issuu.com/semexarg/docs/semex-anuario-leche-2018" class="linkindexflip1">VER ONLINE</a>
                  </div>
                </div> <!-- index_contenedor_flipside_back_contenedorlink -->
              </div> <!--index_contenedor_flipslide_back-->
		        </div> <!--back-->
	        </div><!--flipper-->
        </div><!--flip-container-->
      </div><!--index_contenedor_flipslide-->
      <div class="index_contenedor_separador_flipslide"></div>
      <div class="index_contenedor_flipslide">
        <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
          <div class="flipper">
            <div class="front">
              <!-- front content -->
              <img src="imagenes/tapa_carne2018.jpg" width="230" height="325" alt=""/></div>
            <div class="back">
              <!-- back content -->
              <div class="index_contenedor_flipslide_back">
                <div class="index_contenedor_flipside_back_acrobat"><img src="imagenes/acrobat_grande.png" width="103" height="100" alt=""/></div>
                <div class="index_contenedor_flipside_back_contenedorlink">
                  <div class="index_contenedor_flipside_back_link1"><a href="pdf/AnuarioBeef2018.pdf" class="linkindexflip1">DESCARGAR</a></div>
                </div>
                <div class="index_contenedor_flipside_back_contenedorlink">
                  <div class="index_contenedor_flipside_back_link1"><a href="https://issuu.com/semexarg/docs/anuario_beef_2018" class="linkindexflip1">VER ONLINE</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="index_contenedor_separador_flipslide"></div>
      <div class="index_contenedor_flipslide">
        <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
          <div class="flipper">
            <div class="front">
              <!-- front content -->
              <img src="imagenes/tapa_solutions2018.jpg" width="230" height="325" alt=""/></div>
            <div class="back">
              <!-- back content -->
              <div class="index_contenedor_flipslide_back">
                <div class="index_contenedor_flipside_back_acrobat"><img src="imagenes/acrobat_grande.png" width="103" height="100" alt=""/></div>
                <div class="index_contenedor_flipside_back_contenedorlink">
                  <div class="index_contenedor_flipside_back_link1"><a href="pdf/SemexSolutionsbrochureSPlr.pdf" class="linkindexflip1">DESCARGAR</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="index_contenedor_separador_flipslide"></div>
      <div class="index_contenedor_flipslide">
        <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
          <div class="flipper">
            <div class="front">
              <!-- front content -->
              <img src="imagenes/tapa_hba.jpg" width="230" height="325" alt=""/></div>
            <div class="back">
              <!-- back content -->
              <div class="index_contenedor_flipslide_back">
                <div class="index_contenedor_flipside_back_acrobat"><img src="imagenes/excel_icon.png" width="103" height="100" alt=""/></div>
                <div class="index_contenedor_flipside_back_contenedorlink">
                  <div class="index_contenedor_flipside_back_link1"><a href="pdf/listado_hba.xls" class="linkindexflip1">DESCARGAR</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!--index_contenedor_divs_flip-->
</div><!--wrapperindex2-->

<div id="wrapperindex3">
  <div class="index_contenedor_divs_redes">
    <div class="index_contenedor_divredes_facebook">
      <div class="fb-page" data-href="https://www.facebook.com/semexarg" 
          data-tabs="timeline" data-width="450" data-height="500" data-small-header="true" 
          data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
            <blockquote cite="https://www.facebook.com/semexarg" class="fb-xfbml-parse-ignore">
            <a href="https://www.facebook.com/semexarg">Semex Argentina</a>
            </blockquote>
      </div> <!--fb-page-->
    </div><!--index_contenedor_divredes_facebook-->
    <div class="index_contenedor_divredes_instagram_img">
      <img src="imagenes/instagram_semex.png" width="265" height="40" alt=""/>
    </div>
    <div class="index_contenedor_divredes_instagram">
      <!-- LightWidget WIDGET -->
      <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>
      <iframe src="//lightwidget.com/widgets/5e2f11f4f8975ab884f51486236b7250.html" 
      scrolling="no" allowtransparency="true" class="lightwidget-widget" 
      style="width:100%;border:0;overflow:hidden;"></iframe>
    </div><!--index_contenedor_divredes_instagram-->
    <div id="wrappercarne">
      <div class="carne_contenedor_rasgosdeps3">
    </div><!--wrappercarne-->
  </div><!--index_contenedor_divs_redes-->
</div><!--wrapperindex3-->
<?php require_once("scripts.html"); ?>
<?php require_once("footer.php"); ?>
</body>
</html>
