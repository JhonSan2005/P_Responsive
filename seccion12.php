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
<link rel="stylesheet" href="css/repuestos.css">
</head>
<body>
    <header>
        <div class="contenedor">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-4 d-flex justify-content-center d-md-block">
                    <a href="index.html">
                    <img src="img/logol.png" alt="" width="50px" class="me-4" style=" height: 180px; width: 300px; padding-left: 80px; padding-top: -80px;">
                </a>
                </div>
                <div class="col-md-4 col-12 d-flex justify-content-center align-items-center" style="padding-top: 9%;">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Buscar" aria-label="Buscar" aria-describedby="button-addon2" style="height:40px;">
                        <button class="btn btn-warning" type="button" id="button-addon2">Buscar</button>
                    </div>
                </div>
                <div class="col-md-4 col-12 d-flex justify-content-end align-items-center" style="padding-top: 8%; padding-right: 10%;">
                     <div class="d-flex align-items-center">
                       <a href="editar_perfil.html"><img src="img/perfil.png" alt="" width="50px" class="me-3"></a>

    <p id="timer">00:00</p>
    <script>
        // Inicializar variables
        let seconds = 0;
        let minutes = 0;
        let timerInterval;

        // Función para actualizar el cronómetro
        function updateTimer() {
            seconds++;
            if (seconds === 60) {
                seconds = 0;
                minutes++;
            }
            document.getElementById("timer").textContent = `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
        }

        // Iniciar el cronómetro automáticamente cuando se carga la página
        function startTimer() {
            timerInterval = setInterval(updateTimer, 1000);
        }

        // Detener el cronómetro
        function stopTimer() {
            clearInterval(timerInterval);
        }

        // Iniciar el cronómetro cuando se carga la página
        window.onload = startTimer;
    </script>
    <a href="seccion1.php">
        <span class="badge badge-pill badge-dark">Cerrar Sesion</span>
</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
</html>
   <div class="container mt-5">
    <h1 class="mb-4">Productos Disponibles</h1>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <a href="descripcion.html">
                    <img src="img/actevo.png" class="card-img-top" alt="Producto 1">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Aceite Sintetico</h5>
                    <h5 id="precioProducto1" class="card-title"></h5>
                    <h6 id="descuentoProducto1" class="card-subtitle mb-2 text-muted"></h6>
                    <p class="card-text">Aceite Para motos "fz-16-fz-2.0-pulsar ns"</p>
                    <a href="carrrito.html"><button class="btn btn-warning">Agregar Al Carrito</button></a>
                    <a href="seccion11.php"><button type="button" class="btn btn-success">Comprar</button></a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="img/fluchi.png" class="card-img-top" alt="Producto 2">
                <div class="card-body">
                 <h5 id="precioProducto2" class="card-title"></h5>
                   <h6 id="descuentoProducto2" class="card-subtitle mb-2 text-muted"></h6>
                    <p class="card-text">Descripción corta del producto 2.</p>
                    <button type="button" class="btn btn-warning">Agregar</button>
                    <button type="button" class="btn btn-success">Comprar</button>
                </div>
            </div>
        </div>
        <!-- Agrega más columnas con productos aquí -->
    </div>
</div>
<div class="container mt-5">
        <h1 class="mb-4">Nuestros Productos</h1>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/motul.png" class="card-img-top" alt="Producto 1">
                    <div class="card-body">
                         <h5 id="precioProducto3" class="card-title"></h5>
                         <h6 id="descuentoProducto3" class="card-subtitle mb-2 text-muted"></h6>
                        <p class="card-text">Descripción corta del producto 1.</p>
                        <button type="button" class="btn btn-warning">Agregar Al Carrito</button>
                        <button type="button" class="btn btn-success">Comprar</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/xtz.png" class="card-img-top" alt="Producto 2">
                    <div class="card-body">
                          <h5 id="precioProducto4" class="card-title"></h5>
                           <h6 id="descuentoProducto4" class="card-subtitle mb-2 text-muted"></h6>
                        <p class="card-text">Descripción corta del producto 2.</p>
                        <button type="button" class="btn btn-warning">Agregar</button>
                        <button type="button" class="btn btn-success">Comprar</button>
                    </div>
                </div>
            </div>
            <!-- Agrega más columnas con productos aquí -->
        </div>
    </div>

<script>
    // Función para generar un descuento aleatorio entre el 5% y el 30%
    function generarDescuentoAleatorio() {
        return Math.floor(Math.random() * 26) + 5; // Números aleatorios entre 5 y 30
    }

    // Función para calcular el precio con descuento
    function calcularPrecioConDescuento(precioBase, descuento) {
        return precioBase - (precioBase * (descuento / 100));
    }

    // Aplica el descuento aleatorio al producto
    let descuentoProducto1 = generarDescuentoAleatorio();
    let precioBaseProducto1 = 120000; // Precio base del producto
    let precioConDescuentoProducto1 = calcularPrecioConDescuento(precioBaseProducto1, descuentoProducto1);
    document.getElementById("descuentoProducto1").textContent = `${descuentoProducto1}% de descuento`;
    document.getElementById("precioProducto1").textContent = `$${precioConDescuentoProducto1.toLocaleString()}`; // Formatea el precio con comas
</script>


<script>
    // Función para generar un descuento aleatorio entre el 5% y el 30%
    function generarDescuentoAleatorio() {
        return Math.floor(Math.random() * 26) + 5; // Números aleatorios entre 5 y 30
    }

    // Función para calcular el precio con descuento
    function calcularPrecioConDescuento(precioBase, descuento) {
        return precioBase - (precioBase * (descuento / 100));
    }

    // Aplica el descuento aleatorio al producto
    let descuentoProducto2 = generarDescuentoAleatorio();
    let precioBaseProducto2 = 120000; // Precio base del producto
    let precioConDescuentoProducto2 = calcularPrecioConDescuento(precioBaseProducto2, descuentoProducto2);
    document.getElementById("descuentoProducto2").textContent = `${descuentoProducto1}% de descuento`;
    document.getElementById("precioProducto2").textContent = `$${precioConDescuentoProducto2.toLocaleString()}`; // Formatea el precio con comas
</script>
<script>
    // Función para generar un descuento aleatorio entre el 5% y el 30%
    function generarDescuentoAleatorio() {
        return Math.floor(Math.random() * 26) + 5; // Números aleatorios entre 5 y 30
    }

    // Función para calcular el precio con descuento
    function calcularPrecioConDescuento(precioBase, descuento) {
        return precioBase - (precioBase * (descuento / 100));
    }

    // Aplica el descuento aleatorio al producto
    let descuentoProducto3 = generarDescuentoAleatorio();
    let precioBaseProducto3 = 120000; // Precio base del producto
    let precioConDescuentoProducto3 = calcularPrecioConDescuento(precioBaseProducto3, descuentoProducto2);
    document.getElementById("descuentoProducto3").textContent = `${descuentoProducto3}% de descuento`;
    document.getElementById("precioProducto3").textContent = `$${precioConDescuentoProducto3.toLocaleString()}`; // Formatea el precio con comas
</script>

<script>
    // Función para generar un descuento aleatorio entre el 5% y el 30%
    function generarDescuentoAleatorio() {
        return Math.floor(Math.random() * 26) + 5; // Números aleatorios entre 5 y 30
    }

    // Función para calcular el precio con descuento
    function calcularPrecioConDescuento(precioBase, descuento) {
        return precioBase - (precioBase * (descuento / 100));
    }

    // Aplica el descuento aleatorio al producto
    let descuentoProducto4 = generarDescuentoAleatorio();
    let precioBaseProducto4 = 120000; // Precio base del producto
    let precioConDescuentoProducto4 = calcularPrecioConDescuento(precioBaseProducto4, descuentoProducto2);
    document.getElementById("descuentoProducto4").textContent = `${descuentoProducto4}% de descuento`;
    document.getElementById("precioProducto4").textContent = `$${precioConDescuentoProducto4.toLocaleString()}`; // Formatea el precio con comas
</script>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>