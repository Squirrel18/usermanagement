app.controller('MainController', ['$scope', '$http', function($scope, $http) { 
    $scope.numero = 233;
    $scope.submit = function() {
        var req = {
            method: 'POST',
            url: 'index.php/autho',
            data: { test: 'test' }
        }
        $http(req).then(function(){alert("succeses");}, function(){alert("eroor")});
    };
}]);