app.controller('MainController', ['$scope', '$http', function($scope, $http) { 
    $scope.numero = 233;
    $scope.submit = function() {
        var req = {
            method: 'POST',
            url: 'index.php/autho/login',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            data: { user: $scope.user, password: $scope.password }
        }
        $http(req).then(function(response) {
            alert(response.data);
        }, function(response) {
            alert("eroor")
        });
    };
}]);