<!DOCTYPE html>
<html ng-app="semexApp">
<head>
<title>SEMEX ARGENTINA</title>
  <?php require_once("meta.html"); ?>
</head>
<body   ng-controller="ToroCtrl as tc" >
  
  <div id="wrapper">
  <?php require_once("header.php"); ?>
      <div class="contenedor_botonera_razas">
        <div class="contenedor_nombres_razas">
          <div ng-repeat="r in tc.razas" class="nombre_raza">
            <a href="raza.php?id={{r.id}}" class="linkraza" ng-bind-html="r.name"></a>
            <div ng-class="tc.razaClass(r.name) ? 'espacio_nombre_raza' : 'espacio_nombre_raza2'" 
                ng-if="tc.showSeparator(r.name)">|</div>
          </div>
        </div>
      </div> <!-- contenedor_botonera_razas -->
      <div class="contenedor_nombre_iconos_bandera">
        <div class="toro_apodo" ng-if="tc.toro.name" ng-bind-html="tc.toro.name"></div>
        <div class="contenedor_iconos_bandera">
          <div class="toro_bandera" ng-if="tc.toro.origenid && tc.origenes.length > 0">
            <img ng-src="{{tc.getFlag(tc.toro.origenid)}}" width="70" height="37" alt=""/>
          </div>
          <div class="toro_iconos" ng-if="tc.toro.maternal == 1" >
            <img  src="imagenes/icono_maternal.png" width="37" height="37" alt=""/>
          </div>
          <div class="toro_iconos" ng-if="tc.toro.carcasa == 1">
            <img src="imagenes/icono_carcasa.png" width="41" height="37" alt=""/>
          </div>
          <div class="toro_iconos" ng-if="tc.toro.performance == 1">
            <img src="imagenes/icono_performance.png" width="37" height="37" alt=""/>
          </div>
          <div class="toro_iconos" ng-if="tc.toro.ojo_bife == 1">
            <img src="imagenes/icono_aob.png" width="40" height="37" alt=""/>
          </div>
          <div class="toro_iconos" ng-if="tc.toro.fertilidad == 1">
            <img src="imagenes/icono_fertilidad.png" width="37" height="37" alt=""/>
          </div>
          <div class="toro_iconos" ng-if="tc.toro.eficiencia == 1">
            <img src="imagenes/icono_eficiencia.png" width="35" height="37" alt=""/>
          </div>
          <div class="toro_iconos" ng-if="tc.toro.marmolado == 1">
            <img src="imagenes/icono_marmolado.png" width="42" height="37" alt=""/>
          </div>
          <div class="toro_iconos" ng-if="tc.toro.fparto == 1">
            <img src="imagenes/icono_facdeparto.png" width="37" height="37" alt=""/>
          </div>
        </div>
      </div>
      <div class="contenedor_codigo_nombrecompleto">
        <div class="toro_codigo" ng-if="tc.toro.codigo" ng-bind-html="tc.toro.codigo"></div>
        <div class="toro_nombrecompleto" ng-if="tc.toro.name_all" ng-bind-html="tc.toro.name_all" ></div>
      </div>
      <div class="toro_foto">
        <img ng-if="tc.toro.image" ng-src="{{tc.toro.image}}" width="1000" height="695" alt=""/>
      </div>
      <div class="contenedor_galerias">
        <div class="contenedor_titulo_fotosvideos"><span class="txt_bordo_bold18">FOTOS</span> 
          <span class="txt_gris_normal18">| VIDEOS</span>
        </div>
        <div class="contenedor_thumbs_galeria" ng-if="tc.toro.fotos">
          <div class="thumb_galeria" ng-repeat="foto in tc.toro.fotos">
            <a ng-shadowbox="{{foto.image}}"  title="{{foto.title}}">
              <img ng-src="{{foto.image}}" width="100" height="70" alt=""/>
            </a>
        </div>
        </div>
      </div>
      <div class="contenedor_galerias" ng-if="tc.toro.videos">
        <div class="contenedor_titulo_fotosvideos"><span class="txt_gris_normal18">FOTOS</span> <span class="txt_gris_normal18">| </span><span class="txt_bordo_bold18">VIDEOS</span></div>
        <div class="contenedor_thumbs_galeria">
          <div class="thumb_galeria" ng-repeat="video in tc.toro.videos">
            <a ng-shadowbox="{{video.codigo}}" ng-shadowbox-player="iframe" ng-shadowbox-height="590" ng-shadowbox-width="1000"  title="{{video.title}}">
              <img ng-src="{{video.image}}" width="100" height="70" alt=""/></a>
        </div>
        </div>
      </div>
      <div class="contenedor_pedigri_datos">
        <div class="contenedor_pedigri">
          <div class="linea_pedigri"><img src="imagenes/linea_pedigri.png" width="10" height="75" alt=""/></div>
          <div class="contenedor_padres_pedigri">
            <div class="contenedor_padres_pedigri_linea1">
              <div class="pedigri_abuelos" ng-bind-html="tc.toro.abuelo_p"></div>
              <div class="pedigri_padres" ng-bind-html="tc.toro.padre"></div>
              <div class="pedigri_abuelos" ng-bind-html="tc.toro.abuela_p"></div>
            </div>
            <div class="contenedor_padres_pedigri_linea2">
              <div class="pedigri_abuelos" ng-bind-html="tc.toro.abuelo_m"></div>
              <div class="pedigri_padres" ng-bind-html="tc.toro.madre"></div>
              <div class="pedigri_abuelos" ng-bind-html="tc.toro.abuela_m"></div>
            </div>
          </div>
        </div>
        <div class="contenedor_datospropios">
          <div class="contenedor_datospropios_titulos">
            <div class="datospropios_titulos">HBA</div>
            <div class="datospropios_separadortitulos"></div>
            <div class="datospropios_titulos">NACI&Oacute;</div>
            <div class="datospropios_separadortitulos"></div>
            <div class="datospropios_titulos">PN</div>
            <div class="datospropios_separadortitulos"></div>
            <div class="datospropios_titulos">PD</div>
            <div class="datospropios_separadortitulos"></div>
            <div class="datospropios_titulos">PF</div>
            <div class="datospropios_separadortitulos"></div>
            <div class="datospropios_titulos">FRAME</div>
            <div class="datospropios_separadortitulos"></div>
            <div class="datospropios_titulos">CEcm</div>
          </div>
          <div class="contenedor_datospropios_datos">
            <div class="datospropios_datos_hba">{{tc.toro.hba}}</div>
            <div class="datospropios_separador_datos1"></div>
            <div class="datospropios_datos_hba">{{tc.toro.nacio}}</div>
            <div class="datospropios_separador_datos2"></div>
            <div class="datospropios_datos_hba">{{tc.toro.PN}}</div>
            <div class="datospropios_separador_datos3"></div>
            <div class="datospropios_datos_hba">{{tc.toro.PD}}</div>
            <div class="datospropios_separador_datos4"></div>
            <div class="datospropios_datos_hba">{{tc.toro.PDF}}</div>
            <div class="datospropios_separador_datos5"></div>
            <div class="datospropios_datos_hba">{{tc.toro.FRAME}}</div>
            <div class="datospropios_separador_datos6"></div>
            <div class="datospropios_datos_hba">{{tc.toro.CE}}</div>
          </div>
        </div>
        <div class="contenedor_comentario" ng-bind-html="tc.toro.texto">
          
        </div>
      </div>
      <div class="contenedor_deps" ng-if="tc.toro.promedio && tc.toro.pruebas">
        <div class="contenedor_deps_linea1">
          <div class="deps_fila1">AAA-017</div> <!--que seria ? -->
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas">FP</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas">PN</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas">PD</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas">PF</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas">LECHE</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas">CM</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas">GD</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas">MAR</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas">AOB</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas">CE</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas">DOC</div>
        </div>
        <div class="contenedor_deps_linea2">
          <div class="deps_fila1">DEP</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_destacado">{{tc.toro.pruebas.dep_fp}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.pruebas.dep_pn}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.pruebas.dep_pd}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.pruebas.dep_pf}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.pruebas.dep_leche}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.pruebas.dep_cm}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.pruebas.dep_gd}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.pruebas.dep_marm}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_destacado">{{tc.toro.pruebas.dep_aob}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.pruebas.dep_ce}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.pruebas.dep_doc}}</div>
        </div>
        <div class="contenedor_deps_linea2">
          <div class="deps_fila1">PREC%</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.pruebas.prec_fp}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.pruebas.prec_pn}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.pruebas.prec_pd}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.pruebas.prec_pf}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.pruebas.prec_leche}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.pruebas.prec_cm}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.pruebas.prec_gd}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.pruebas.prec_marm}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.pruebas.prec_aob}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.pruebas.prec_ce}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.pruebas.prec_doc}}</div>
        </div>
        <div class="contenedor_deps_linea2">
          <div class="deps_fila1">RANKING</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_destacado">{{tc.toro.pruebas.rk_fp}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.pruebas.rk_pn}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.pruebas.rk_pd}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.pruebas.rk_pf}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.pruebas.rk_leche}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.pruebas.rk_cm}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.pruebas.rk_gd}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.pruebas.rk_marm}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_destacado">{{tc.toro.pruebas.rk_aob}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.pruebas.rk_ce}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.pruebas.rk_doc}}</div></div>
        <div class="contenedor_deps_linea2">
          <div class="deps_fila1">PROMEDIO</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.promedio.fp}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.promedio.pn}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.promedio.pd}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.promedio.pf}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.promedio.leche}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.promedio.cm}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.promedio.gd}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.promedio.marm}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.promedio.aob}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.promedio.ce}}</div>
          <div class="deps_separador_columnas"></div>
          <div class="deps_columnas2">{{tc.toro.promedio.doc}}</div>
        </div>
      </div>
      <div class="contenedor_volver_descargar">
        <div class="contenedor_volver_flecha"><span class="contenedor_volver"><img src="imagenes/back.png" width="11" height="20" alt=""/></span></div>
        <div class="contenedor_volver">
          <a href="#" class="linkchico">Volver al listado de toros</a>
        </div>
        <div class="contenedor_descargar" ng-if="tc.toro.pdf_file">
          <a ng-href="tc.toro.pdf_file" class="linkchico">Descargar ficha</a>
        </div>
        <div class="contenedor_descargar_icono" ng-if="tc.toro.pdf_file">
          <a ng-href="tc.toro.pdf_file">
            <img src="imagenes/acrobat.png" width="29" height="30" alt=""/>
          </a>
        </div>
      </div>
  </div> <!-- wrapper -->
<?php require_once("footer.php"); ?>
<?php require_once("scripts.html"); ?>

</body>
</html>
