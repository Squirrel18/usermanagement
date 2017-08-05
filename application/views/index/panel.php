<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css'); ?>">
        <title><?php echo $title ?></title>
    </head>
    <body ng-app="Management">
        <div class="container text-center" ng-controller="loginController">
            <div class="row">
                <div class="col-xs-12 col-md-2">
                    <h1>Menu</h1>
                    <a href="#!users">Usuarios</a>
                </div>
                <div class="col-xs-12 col-md-10" ng-view>
                    <h1>Section</h1>
                </div>
            </div>
        </div>
    </body>
    <script src="<?php echo base_url('js/angular.min.js'); ?>"></script>
    <script src="<?php echo base_url('js/angular-route.min.js'); ?>"></script>
    <script src="<?php echo base_url('js/app.js'); ?>"></script>
    <script src="<?php echo base_url('js/controller/controller.js'); ?>"></script>
</html>