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
            <h1>This ais a text</h1>
        </div>
    </body>
    <script src="<?php echo base_url('js/angular.min.js'); ?>"></script>
    <script src="<?php echo base_url('js/app.js'); ?>"></script>
    <script src="<?php echo base_url('js/controller/controller.js'); ?>"></script>
</html>