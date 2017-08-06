app.controller('MainController', ['$scope', '$http', function($scope, $http) { 
    $scope.submit = function() {
        var req = {
            method: 'POST',
            url: 'index.php/autho/login',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            data: 'user=' + $scope.user + '&password=' + $scope.password
        }
        $http(req).then(function(response) {
            localStorage.setItem("autho", response.headers('Authorization'));
            $http.defaults.headers.common.Authorization = localStorage.getItem('autho');
            $http.get('index.php/autho/authorization').then(function(response) {
                window.location.assign('index.php/panel');
            }).catch(function(response) {
                alert("No autho check");
            });
        }, function(response) {
            alert("Bad login")
        });
    };
}]);

app.controller('loginController', ['$scope', '$http', function($scope, $http) { 
    (function() {
        var req = {
            method: 'POST',
            url: 'autho/authorization',
            headers: {
                'Authorization': localStorage.getItem('autho')
            }
        }
        $http(req).then(function(response) {
            $http.defaults.headers.common.Authorization = localStorage.getItem('autho');

        }, function(response) {
            window.location.assign('../');
        });
    })();
}]);

app.controller('usersController', ['$scope', '$http', '$location', '$rootScope', function($scope, $http, $location, $rootScope) { 
    (function() {
        $http.defaults.headers.common.Authorization = localStorage.getItem('autho');
        var req = {
            method: 'POST',
            url: 'users/',
        }
        $http(req).then(function(response) {
            $scope.data = response.data;
        }, function(response) {
            alert("no data");
            return;
        });
    })();

    $scope.edit = function(data) {
        var req = {
            method: 'POST',
            url: 'users/edit/' + data,
        }
        $http(req).then(function(response) {
            $rootScope.user = response.data;
            $location.url('/edit');
        }, function(response) {
            alert("no data");
            return;
        });
    };

    $scope.editSubmit = function() {
        var req = {
            method: 'POST',
            url: 'users/edit/update',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            data: {
                id: $rootScope.user.id,
                user: $scope.usuario,
                password: $scope.contrasena,
                state: $scope.estado
            }
        }
        $http(req).then(function(response) {
            console.log(response);
        }, function(response) {
            alert("no data");
            return;
        });
    };
}]);
