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
        <div class="container text-center" ng-controller="MainController">
            <h1>This ais a text</h1>
            <form name="login" id="login">
                <div class="form-group">
                    <h2>Usuario</h2>
                    <input type="text" class="form-control" ng-model="user" required placeholder="Usuario" name="user">
                </div>
                <div class="form-group">
                    <h2 for="password">Contraseña</h2>
                    <input type="password" class="form-control" ng-model="password" required placeholder="Contraseña" name="password">
                </div>
                <button type="submit" class="btn btn-default" ng-click="submit()">Submit</button>
            </form>
            <h1 ng-show="login.user.$invalid">  invalid  </h1>
        </div>
    </body>
    <script src="<?php echo base_url('js/angular.min.js'); ?>"></script>
    <script src="<?php echo base_url('js/app.js'); ?>"></script>
    <script src="<?php echo base_url('js/controller/controller.js'); ?>"></script>
</html>