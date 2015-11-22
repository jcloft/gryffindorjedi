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

/* Main AngularJS Web App */

var app = angular.module('webApp', ['ngRoute']);

/* Configure the Routes */

app.config(['$routeProvider', function($routeProvider) {
    $routeProvider
// Home
        .when("/", {templateUrl: "partials/default.php", controller: "PageCtrl"})
        .when("/home", {templateUrl: "partials/default.php", controller: "PageCtrl"})
        .when("/class", {templateUrl: "partials/class.php", controller: "PageCtrl"});
       
}]);

app.controller('PageCtrl', function($scope, $location, $http) {
  console.log("Page Controller is GO");
});

app.controller('PeopleCtrl', function ($scope, $http) {
  $scope.people = []
  $http.get('content.json')
    .success(function(data) {
        $scope.people = data;
        console.log(data);
    });
});
