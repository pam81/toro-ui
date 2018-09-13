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
          <img ng-src="{{hc.novedades.noticia.image}}" width="560" height="400" alt=""/>
        </div>
        <div class="index_contenedor_contenido_slide1_titulo">{{hc.novedades.noticia.title}}</div>
        <div class="index_contenedor_contenido_slide1_texto" >
          <div ng-bind-html="hc.novedades.noticia.text"></div>
        </div>
      </div> <!-- index_contenedor_contenido_slide1 noticias -->
      <div ng-if="hc.section.leche" class="index_contenedor_contenido_slide1" id="leche">
        <div class="index_contenedor_contenido_slide1_foto">
          <img ng-src="{{hc.novedades.leche.image}}" width="560" height="400" alt=""/>
        </div>
        <div class="index_contenedor_contenido_slide1_titulo">{{hc.novedades.leche.title}}</div>
        <div class="index_contenedor_contenido_slide1_texto">
          <div ng-bind-html="hc.novedades.leche.text"></div>
        </div>
      </div> <!-- index_contenedor_contenido_slide1 leche -->
      <div ng-if="hc.section.carne" class="index_contenedor_contenido_slide1" id="carne">
        <div class="index_contenedor_contenido_slide1_foto">
          <img ng-src="{{hc.novedades.carne.image}}" width="560" height="400" alt=""/>
        </div>
        <div class="index_contenedor_contenido_slide1_titulo">{{hc.novedades.carne.title}}</div>
        <div class="index_contenedor_contenido_slide1_texto">
          <div ng-bind-html="hc.novedades.carne.text"></div>
        </div>
      </div> <!-- index_contenedor_contenido_slide1 carne -->
      <div ng-if="hc.section.video" class="index_contenedor_contenido_slide1" id="video">
         <div ng-if="hc.iframe" ng-bind-html="hc.iframe"></div>
        <!--<iframe width="940" height="395" src="https://www.youtube.com/embed/QkAiEIPoG7M" 
          frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>-->
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
