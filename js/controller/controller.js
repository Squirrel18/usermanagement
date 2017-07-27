app.controller('MainController', ['$scope', '$http', function($scope, $http) { 
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
            localStorage.setItem("autho", response.headers('Authorization'));
            $http.defaults.headers.common.Authorization = localStorage.getItem('autho');
            $http.get('index.php/autho/authorization').then(function(response) {
                window.location.assign('index.php/panel');
            }).catch(function(response) {
                alert("error get");
            });
        }, function(response) {
            alert("eroor")
        });
    };
}]);

app.controller('loginController', ['$scope', '$http', function($scope, $http) { 
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
            localStorage.setItem("autho", response.headers('Authorization'));
            $http.defaults.headers.common.Authorization = localStorage.getItem('autho');
            $http.get('index.php/autho/authorization').then(function(response) {
                window.location.assign('index.php/panel');
            }).catch(function(response) {
                alert("error get");
            });
        }, function(response) {
            alert("eroor")
        });
    };
}]);