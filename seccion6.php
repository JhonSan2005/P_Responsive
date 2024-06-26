<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="css/stilo2.css">
</head>
<body>
<div class="container-fluid min-vh-100 d-flex flex-column">
        <div class="row justify-content-center">
            <div class="col-12 text-center my-3">
                <img src="img/logol.png" alt="Logo" class="img-fluid" style="max-height: 180px; max-width: 300px;">
            </div>
        </div>
    <!----------------------- Contenedor principal -------------------------->

     <div class="container d-flex justify-content-center align-items-center min-vh-100">

    <!----------------------- Contenedor de registrarse -------------------------->

       <div class="row border rounded-5 p-3 bg-white shadow box-area">

    <!--------------------------- Cuadro izquierdo ----------------------------->

       <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #FF0000;">
           <div class="featured-image mb-3">
          <video controls autoplay class="img-fluid" style="width: auto;">
            <source src="mp3/trailer.mp4" type="video/mp4">
             Tu navegador no admite el elemento de video.
</video>
           </div>
           <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;"></p>
           <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;"></small>
       </div> 

    <!-------------------- ------ Caja derecha ---------------------------->
        
       <div class="col-md-6 right-box">
          <div class="row align-items-center">
                <div class="header-text mb-4">
                     <h2>Actualiza tus Datos</h2>
                     <p>Facil  y  rápido </p>
                </div>
   

<form action="registro.php" method="post">
<input type="hidden" name="action" value="register">
    <div class="input-group mb-3">
        <input type="text" class="form-control form-control-lg bg-light fs-6" name="documento" placeholder="N° Documento">
    </div>
    <div class="input-group mb-3">
        <input type="text" class="form-control form-control-lg bg-light fs-6" name="nombre" placeholder="Nombre">
    </div>
    <div class="input-group mb-3">
        <input type="text" class="form-control form-control-lg bg-light fs-6" name="correo" placeholder="correo">
    </div>
    <div class="input-group mb-1">
        <input type="password" class="form-control form-control-lg bg-light fs-6" name="password" placeholder="password">
    </div>
   
    <!-- Resto del formulario -->
    <button type="submit" class="btn btn-lg btn-danger w-100 fs-6" style="background-color: #FF0000;">Actualizar</button>
</form>
    </div>
</body>
</html>
