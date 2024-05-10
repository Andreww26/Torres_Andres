<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palmarés Real Madrid CF</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Palmares/csspalmares/style.css">
    <link rel="icon" href="../imgs/IconoRealMadrid.png">
</head>
<body>

    <div class="barra" id="inicio">
        <a href="../inicio/inicio.php">Inicio</a> 
        <a href="../jugadores/jugadores.php">Jugadores</a>
        <a href="../Palmares/palmares.php">Palmarés</a>
        <a href="../santiago bernabeu/bernabeu.php">Santiago Bernabéu</a>
        <a href="../Tienda/tienda.php">Tienda</a>
        <a href="../comunidad/comunidad.php">Comunidad</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
        <a href="../cerrar_sesion.php" class="usuario"><?php
                session_start();
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                    echo "Cerrar la Sesión: " . $_SESSION['username'] ;
                } else {
                    // Si el usuario no ha iniciado sesión, puedes redirigirlo a la página de inicio de sesión o mostrar un mensaje
                    // header("Location: login.php");
                    // exit();
                }
            ?></a>     
    </div> 

    <section class="laliga" >
        <section class="laliga2">

        <div>
            <div class="encabezado">
                <h1 class="textotrofeos">Palmarés</h1>
                <p class="textoinfo">El Real Madrid tiene una gran cantidad de trofeos, <br> encabezados por las Copas de Europa que actualmente es el club con mayor Copas de Europa <br> y el Mundial de Clubes donde también es el club con el mayor número de veces campeón</p>
            </div>

            <div class="imagenportada">
                <img src="./imgpalmares/SupercopaDeEspañaCampeon.jpg" class="imgportada">
            </div>
        </div>

        <?php
        include 'getpalmares.php';
        ?>

        </section>
    </section>


    <section class="final" id="nosotros">
    <ul id="primera">
    <h2>Nosotros</h2>
    <p>Av/ Universidad, S/N, 28691 <br>Villanueva de la Cañada (Madrid)</p>
    </ul>

<section class="final" id="enlaces">
    <ul>
        <h2>Enlaces de interés</h2>
        <p><a href="https://www.realmadrid.com/es-ES/legal/politica-de-privacidad" target="_blank">Política de privacidad</a></p>
        <p><a href="https://www.realmadrid.com/es-ES/legal/politica-de-cookies" target="_blank">Política de cookies</a></p>
        <p><a href="https://shop.realmadrid.com/content/terms-and-conditions" target="_blank">Términos y condiciones</a></p>
        <p><a href="https://www.realmadrid.com/es-ES/legal/aviso-legal" target="_blank">Aviso legal</a></p>
    </ul>
</section>




    <a href="#inicio" class="botoninicio"><img class="centrar" src="../Palmares/imgpalmares/arrow-up.png"></a>
    <script src="../Palmares/js/javascript.js"></script>
    
</body>
</html>