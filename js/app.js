var app = angular.module('Management', ["ngRoute"]);

app.config(function($routeProvider) {
    $routeProvider
    .when("/users", {
        templateUrl : "../view/users.html"
    });
});