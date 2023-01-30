<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src='https://www.google.com/recaptcha/api.js?render=CLAVE_SITIO_WEB'> 
    </script>
    <script>
      grecaptcha.ready(function() {
      grecaptcha.execute('6LclYDokAAAAAP8pj-hrOAl7jdygJ2IX-9kHdMas', {action: 'formulario'})
      .then(function(token) {
      var recaptchaResponse = document.getElementById('recaptchaResponse');
      recaptchaResponse.value = token;
      });});
    </script>
    <title>Tareas</title>
  </head>
  <body>