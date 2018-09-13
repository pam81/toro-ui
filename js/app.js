'use strict';
//var APIURL = 'http://localhost/personal/semex/semex/index.php';
var APIURL = 'http://www.semex.com.ar/panel/index.php';
angular.module('semexApp', ['ngShadowbox','ngSanitize'])
.controller('ToroCtrl', function (CarneService, $sce, RazaService, OrigenService, $filter) {

        var ctrl = this;

        var init = function () {
        	ctrl.toro = {};
        	ctrl.razas = [];
          ctrl.section ={
            foto : true
          };

          	ctrl.origenes = [];
          	var params={};
	          window.location.search
	            .replace(/[?&]+([^=&]+)=([^&]*)/gi, function(str,key,value) {
	              params[key] = value;
	            }
	          );
	         if (params.id){
	          ctrl.toroid = params.id;
	         }else{
	          ctrl.toroid = 1;
	          console.warn("No ID");
	         }
        	ctrl.getToroData(ctrl.toroid);
        	ctrl.getRazas();
        	ctrl.getOrigenes();
        };

        this.getToroData = function(id){
        	CarneService.getToro(id).then(function(response){
        		
        		ctrl.toro = response.data;
        		ctrl.toro.texto = $sce.trustAsHtml(ctrl.toro.texto);
        		ctrl.getPromedio(ctrl.toro.razaid, ctrl.toro.origenid);
        		ctrl.getPruebas(id);
        		ctrl.getFotos(id);
        		ctrl.getVideos(id);
        	}, function(failured){
        		console.warn("no se pudo obtener datos de Toro");
        	});
        };

        this.razaClass = function(name){
          
          switch(name.toUpperCase()){
            case "ANGUS COLORADO" : 
            case "ANGUS NEGRO":
            case "BRAFORD":
            case "BRAHMAN":
            case "BRANGUS COLORADO":
                      return true;
                      break;
            case "CHAROLAIS" : 
            case "DROUGHMASTER":
            case "FLECKVIEH":
            case "HEREFORD":
            case "LIMOUSIN":
            case "SHORTHORN":
            case "SIMMENTAL":
            case "WAGYU":
                      return false;
                      break;
            default: return true;
          }
        };

        this.showSeparator = function(name){
          if (name.toUpperCase() == 'BRANGUS NEGRO' || name.toUpperCase() == 'WAGYU'){
            return false;
          }else{
            return true;
          }

        };

        this.getRazas = function(){
        	RazaService.getRazas().then(function(response){
        		ctrl.razas = response.data.resultados;
        	
        	}, function(failured){
        		console.warn("no se pudo obtener datos de la raza");
        	});
        };

        this.getPromedio = function(razaid, origenid){
        	RazaService.getPromedio(razaid, origenid).then(function(response){
        		ctrl.toro.promedio = response.data;
        	
        	}, function(failured){
        		console.warn("no se pudo obtener datos de promedio de la  raza");
        	});
        };

        this.getPruebas = function(id){
        	CarneService.getPruebas(id).then(function(response){
        		ctrl.toro.pruebas = response.data;
        		
        	}, function(failured){
        		console.warn("no se pudo obtener datos de promedio de la  raza");
        	});
        };

        this.getFotos = function(id){
        	CarneService.getFotos(id).then(function(response){
        		ctrl.toro.fotos = response.data;
        		
        	}, function(failured){
        		console.warn("no se pudo obtener fotos");
        	});
        };

        this.getVideos = function(id){
        	CarneService.getVideos(id).then(function(response){
        		ctrl.toro.videos = response.data;
        		
        	}, function(failured){
        		console.warn("no se pudo obtener videos");
        	});
        };

        this.getOrigenes = function(){
        	OrigenService.getOrigen().then(function(response){
        		ctrl.origenes = response.data.resultados;
        	
        	}, function(failured){
        		console.warn("no se pudo obtener datos de la raza");
        	});
        };

        this.getFlag = function(origenId){
        	var option = $filter('filter')(ctrl.origenes,{ id: origenId});
        	return 'imagenes/'+option[0].flag;
        };

        init();
})
.controller('CarneCtrl', function (RazaService, CarneService) {
    var ctrl= this;
    var init = function(){
      ctrl.razas = [];
      ctrl.getRazas();
    };

    this.getRazas = function(){
      RazaService.getRazas().then(function(response){
        ctrl.razas = response.data.resultados;
        angular.forEach(ctrl.razas, function(item,i){
          ctrl.getTorosByRaza(item);
        });
      
      }, function(failured){
        console.warn("no se pudo obtener datos de la raza");
      });
    };

    this.getTorosByRaza = function(raza){
      CarneService.getByRaza(raza.id).then(function(response){
        raza.toros = response.data.resultados;
      },function(failured){
        console.log("Error obtener toros");
      });
    };

    this.getPruebas = function(toro){
      CarneService.getPruebas(toro.id).then(function(response){
        toro.pruebas = response.data;
        
      }, function(failured){
        console.warn("no se pudo obtener datos de promedio de la  raza");
      });
    };

    this.isPar = function(valor){
	  	var tipo=(valor%2)? false: true;
	  }

    init();
})
.controller('RazaCtrl', function (RazaService, CarneService) {
    var ctrl= this;
    var init = function(){
      ctrl.toros = [];
      ctrl.raza = {};
      
      var params={};
      window.location.search
        .replace(/[?&]+([^=&]+)=([^&]*)/gi, function(str,key,value) {
          params[key] = value;
        }
      );
     ctrl.razaid = 0;
     if (params.id){
      ctrl.razaid = params.id;
      ctrl.getTorosByRaza();
      ctrl.getRaza();
     }else{
      console.warn("No ID");
     }
      
    };

    this.getRaza = function(){
    	RazaService.getRaza(ctrl.razaid).then(function(response){
    		ctrl.raza = response.data;
    	
    	}, function(failured){
    		console.warn("no se pudo obtener datos de la raza");
    	});
    };
    

    this.getTorosByRaza = function(){
      CarneService.getByRaza(ctrl.razaid).then(function(response){
        ctrl.toros = response.data.resultados;
      },function(failured){
        console.log("Error obtener toros");
      });
    };

    

    init();
})
.controller('HomeCtrl', function (NovedadService,  $sce) {
  var ctrl= this;
  var init = function(){
    ctrl.section = {
      noticias: true,
      leche: false,
      carne: false,
      video: false
    };
    ctrl.iframe='';

    ctrl.novedades = {
    	noticia: {},
    	carne: {},
    	leche: {},
    	video: {}
    }
    ctrl.getNovedades();
   
  };

  this.changeSection = function(option){
    ctrl.section.noticias = false;
    ctrl.section.leche = false;
    ctrl.section.carne = false;
    ctrl.section.video = false;
    ctrl.section[option]= true;
  };

  this.getNovedades = function(){
  	NovedadService.getCarne().then(function(response){
  		ctrl.novedades.carne = response.data[0];
  	});
  	NovedadService.getLeche().then(function(response){
  		ctrl.novedades.leche = response.data[0];
  	});
  	NovedadService.getNoticia().then(function(response){
  		ctrl.novedades.noticia = response.data[0];
  	});
  	NovedadService.getVideo().then(function(response){
  		ctrl.novedades.video = response.data[0];
  		if (ctrl.novedades.video){
  			var title = ctrl.novedades.video.text.replace(/&lt;/g, '<').replace(/&gt;/g, '>').replace(/&quot;/g, '"');
  			ctrl.iframe= $sce.trustAsHtml(title);
  		}
  	});
  }
  init();
})
.service('CarneService',function($http){
	var carneService = {};

	carneService.getToro = function (id) {
        var url = APIURL+'/api/toro/'+id;
        var request = {
          method: 'GET',
          url: url,
        };

        return $http(request);
  	};

  	carneService.getToros = function () {
        var url = APIURL+'/api/toro';
        var request = {
          method: 'GET',
          url: url,
        };

        return $http(request);
    };
    
    carneService.getByRaza = function (id) {
      var url = APIURL+'/api/toro/raza/'+id;
      var request = {
        method: 'GET',
        url: url,
      };

      return $http(request);
  };

  	carneService.getPruebas = function (id) {
        var url = APIURL+'/api/prueba/'+id;
        var request = {
          method: 'GET',
          url: url,
        };

        return $http(request);
  	};

  	carneService.getFotos = function (id) {
        var url = APIURL+'/api/fotos/'+id;
        var request = {
          method: 'GET',
          url: url,
        };

        return $http(request);
  	};

  	carneService.getVideos = function (id) {
        var url = APIURL+'/api/videos/'+id;
        var request = {
          method: 'GET',
          url: url,
        };

        return $http(request);
  	};

  return carneService;

})
.service('RazaService',function($http){
	var razaService = {};

	razaService.getRazas = function () {
        var url = APIURL+'/api/raza';
        var request = {
          method: 'GET',
          url: url,
        };

        return $http(request);
      };

    razaService.getRaza = function (id) {
        var url = APIURL+'/api/raza/'+id;
        var request = {
          method: 'GET',
          url: url,
        };

        return $http(request);
      };

  	razaService.getPromedio = function (raza,origen) {
        var url = APIURL+'/api/promedio/'+raza+'/'+origen;
        var request = {
          method: 'GET',
          url: url,
        };

        return $http(request);
      };

  return razaService;

})
.service('NovedadService',function($http){
	var novedadService = {};

	novedadService.getCarne = function (id) {
        var url = APIURL+'/api/novedadCarne';
        var request = {
          method: 'GET',
          url: url,
        };

        return $http(request);
  	};

 	novedadService.getLeche = function (id) {
        var url = APIURL+'/api/novedadLeche';
        var request = {
          method: 'GET',
          url: url,
        };

        return $http(request);
  	};
  	novedadService.getNoticia = function (id) {
        var url = APIURL+'/api/novedadNoticia';
        var request = {
          method: 'GET',
          url: url,
        };

        return $http(request);
  	};
 	novedadService.getVideo = function (id) {
	    var url = APIURL+'/api/novedadVideo';
	    var request = {
	      method: 'GET',
	      url: url,
	    };

	    return $http(request);
  	};

  return novedadService;

})
.service('OrigenService',function($http){
	var origenService = {};

	origenService.getOrigen = function (id) {
        var url = APIURL+'/api/origen';
        var request = {
          method: 'GET',
          url: url,
        };

        return $http(request);
      };

  return origenService;

});
