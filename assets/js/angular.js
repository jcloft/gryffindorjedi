//var app = angular.module("app", []);
//
//    app.config(function($routeProvider){
//      $routeProvider.when("/",
//        {
//          templateUrl: "landing.html",
//          controller: "homeCtrl",
//          controllerAs: "app"
//        }
//      );
//    });

var app = angular.module('myApp', ['ngRoute']);
    
    app.config(function($routeProvider){
      $routeProvider.when("/home.php",
        {
          templateUrl: "partials/default.html",
          controller: "homeCtrl",
          controllerAs: "app"
        });
    });

app.controller('homeCtrl', function() {
  var self = this;
  self.message = "SLATE";
});
