<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Subir CV</title>
</head>
<body>
    
    <div class="center">
        <form action="subearchivo.php" method="post" enctype="multipart/form-data">
            <b>Campo de tipo texto:</b> 
            <br><div class="mb-3">
                <label for="nombre" class="form-label"><h5>Nombre:</h5></label>
                <input type="text" class="form-control" id="nombre"name="nombre" value="">
            </div>
            <br><div class="mb-3">
                <label for="apellidos" class="form-label"><h5>Apellidos:</h5></label>
                <input type="text" class="form-control" id="apellidos"name="apellidos" value="">
            </div>
            <br><div class="mb-3">
                <label for="nombre" class="form-label"><h5>DNI:</h5></label>
                <input type="text" class="form-control" id="nombre"name="nombre" value="">
            </div>
            <input type="hidden" name="MAX_FILE_SIZE" value="100000">
            <br>
            <br>
            <b>Enviar un nuevo archivo: </b>
            <br>
            <input name="userfile" type="file">
            <br>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>

