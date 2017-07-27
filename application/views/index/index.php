<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css'); ?>">
        <title><?php echo $title ?></title>
    </head>
    <body data-ng-app="">
        <div class="container text-center">
            <h1>This ais a text</h1>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Usuario</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" id="exampleInputFile">
                    <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                    <label>
                    <input type="checkbox"> Check me out
                    </label>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <h1> {{  }} </h1>
        </div>
    </body>
    <script src="<?php echo base_url('js/angular.min.js'); ?>"></script>
</html>