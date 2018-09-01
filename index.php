<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Appe</title>
    <meta name="description" content="Demo of A Free Coming Soon Bootstrap 4 Template by TemplateFlip.com."/>
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">
  </head>
  <body id="top"><div class="site-wrapper">
  <div class="site-wrapper-inner">
    <div class="cover-container">
      <div class="masthead clearfix">
        <div class="">
          <h3 class="masthead-brand">Desarrollo Web</h3>
        </div>
      </div><br>      <div class="inner cover">
        <h1 class="cover-heading">Ingresar Alumnos</h1>
      <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
      <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

      <!-- Inline CSS based on choices in "Settings" tab -->
      <style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>


      <div class="">
        <div class="">
          <form class="form-horizontal center-block" method="post" action="Bd/grabar.php">
            <div class="form-group">
              <label for="nombre1" class="control-label col-xs-2">Nombre 1</label>
              <div class="col-xs-8">
                <input id="nombre1" name="nombre1" type="text" required="required" placeholder="Ingrese su nombre" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label for="nombre2" class="control-label col-xs-2">Nombre 2</label>
              <div class="col-xs-8">
                <input id="nombre2" name="nombre2" type="text" placeholder="Ingrese su nombre" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label for="apellido1" class="control-label col-xs-2">Apellido 1</label>
              <div class="col-xs-8">
                <input id="apellido1" name="apellido1" type="text"   placeholder="Ingrese su apellido" required="required" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label for="apellido2" class="control-label col-xs-2">Apellido 2</label>
              <div class="col-xs-8">
                <input id="apellido2" name="apellido2" type="text"  placeholder="Ingrese su apellido"  class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label for="nombre1" class="control-label col-xs-2">Correo Electronico</label>
              <div class="col-xs-8">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-fw fa-envelope"></i>
                  </div>
                  <input id="correo1" name="correo1" PLACEHOLDER="Ingrese su correo electrónico" type="email" required="required" class="form-control">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="telefono1" class="control-label col-xs-2">Teléfono</label>
              <div class="col-xs-2">
                <input id="telefono1" name="telefono1" placeholder="Ingrese el número" type="text" required="required" class="form-control">
              </div>
            </div>
            <form class="form-horizontal">
              <div class="form-group">
                <label for="namefacultad" class="control-label col-xs-2">Facultad a inscribirse</label>
                <div class="col-xs-8">
                  <input id="namefacultad" name="namefacultad" placeholder="Ingrese nombre de facultad" type="text" class="form-control" required="required">
                </div>
              </div>

              <div class="form-group">
                <div class="col-xs-offset-2 col-xs-10">
                  <button name="submit" type="submit" class="btn btn-primary">Aceptar</button>
                </div>
              </div>
            </form>
        </div>

  </div>
</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <script src="scripts/main.js"></script>
  </body>
</html>