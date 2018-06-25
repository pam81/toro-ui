'use strict';
//var APIURL = 'http://localhost/personal/semex/semex/index.php';
var APIURL = 'http://semex.com.ar.elserver.com/panel/index.php';
angular.module('semexApp', [])
.controller('ToroCtrl', function (CarneService, $sce, RazaService, OrigenService, $filter) {

        var ctrl = this;

        var init = function () {
        	ctrl.toro = {};
        	ctrl.razas = [];
        	ctrl.origenes = [];
        	ctrl.toroid=1;
        	ctrl.getToroData(ctrl.toroid);
        	ctrl.getRazas();
        	ctrl.getOrigenes();
        };

        this.getToroData = function(id){
        	CarneService.getToro(id).then(function(response){
        		
        		ctrl.toro = response.data;
        		ctrl.toro.texto = $sce.trustAsHtml(ctrl.toro.texto);
        		ctrl.getPromedio(ctrl.toro.razaid);
        		ctrl.getPruebas(id);
        		ctrl.getFotos(id);
        		ctrl.getVideos(id);
        	}, function(failured){
        		console.warn("no se pudo obtener datos de Toro");
        	});
        };

        this.getRazas = function(){
        	RazaService.getRazas().then(function(response){
        		ctrl.razas = response.data.resultados;
        	
        	}, function(failured){
        		console.warn("no se pudo obtener datos de la raza");
        	});
        };

        this.getPromedio = function(razaid){
        	RazaService.getPromedio(razaid).then(function(response){
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

	razaService.getRazas = function (id) {
        var url = APIURL+'/api/raza';
        var request = {
          method: 'GET',
          url: url,
        };

        return $http(request);
      };

  	razaService.getPromedio = function (id) {
        var url = APIURL+'/api/promedio/'+id;
        var request = {
          method: 'GET',
          url: url,
        };

        return $http(request);
      };

  return razaService;

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
