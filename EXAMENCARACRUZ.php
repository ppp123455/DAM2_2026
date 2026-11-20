<?php
function esNumero($texto, $permitirDecimales) : bool
{
    $longitud = strlen($texto);
    if ($longitud === 0) return false;
    $inicio = 0;
    if ($texto[0] === "-") $inicio = 1;
    if ($inicio === $longitud) return false;
    $puntos = 0;
    $digitos = 0;
    for ($i = $inicio; $i < $longitud; $i++) {
        $c = $texto[$i];
        if ($c === "." && $permitirDecimales) {
            $puntos++;
            if ($puntos > 1) return false;
        } else if (
            $c === "0" || $c === "1" || $c === "2" ||
            $c === "3" || $c === "4" || $c === "5" ||
            $c === "6" || $c === "7" || $c === "8" || $c === "9"
        ) {
            $digitos++;
        } else {
            return false;
        }
    }
    return $digitos > 0;
}

$saldo = 100;
$mensaje = "";
if (isset($_POST["saldo"]) && esNumero($_POST["saldo"], true)) {
    $saldo = $_POST["saldo"] + 0;
    if ($saldo < 0) $saldo = 100;
}
if (isset($_POST["reiniciar"])) {
    $saldo = 100;
} else if (isset($_POST["retirar"]) || isset($_POST["ingresar"])) {
    if (isset($_POST["cantidad"]) && esNumero($_POST["cantidad"], true)) {
        $cantidad = $_POST["cantidad"] + 0;
        if ($cantidad <= 0) $mensaje = "La cantidad debe ser positiva.";
        else if (isset($_POST["ingresar"])) $saldo += $cantidad;
        else if ($cantidad <= $saldo) $saldo -= $cantidad;
        else $mensaje = "Saldo insuficiente.";
    } else $mensaje = "Cantidad incorrecta.";
}

if (!isset($_SESSION["saldo"])) {

    // Creamos el saldo con 1000 créditos iniciales.

    $_SESSION["saldo"] = 100;

    // Creamos otro array para las cuatro casillas.
    //
    // Antes de jugar mostramos cuatro interrogaciones.

}
if (isset($_POST["reiniciar"])) {

        // Devolvemos el saldo a su cantidad inicial.

        $_SESSION["saldo"] = 100;

        // Limpiamos las cuatro casillas.

        // Cambiamos el mensaje.

        $mensaje = "Has reiniciado la partida";}
 if (isset($_POST["reiniciar"])) {

        // Devolvemos el saldo a su cantidad inicial.

        $_SESSION["saldo"] = 100;

        // Limpiamos las cuatro casillas.

        $_SESSION["resultado"] = ["?", "?", "?", "?"];

        // Cambiamos el mensaje.

        $mensaje = "Has reiniciado la partida";

        // El mensaje tendrá el color normal.

        $tipoMensaje = "normal";

    }


    // -------------------------------------------------
    // 8. COMPROBAR SI SE HA PULSADO "JUGAR"
    // -------------------------------------------------

    // elseif significa "si no, comprobar otra condición".
    //
    // Solo se ejecutará si NO hemos pulsado Reiniciar
    // y SÍ hemos pulsado Jugar.

    elseif (isset($_POST["jugar"])) {


        // ---------------------------------------------
        // 9. COMPROBAR QUE TENEMOS CRÉDITOS
        // ---------------------------------------------

        // El símbolo < significa "menor que".
        //
        // Comprobamos si el saldo es menor
        // que los créditos necesarios para jugar.

        if ($_SESSION["saldo"] < $precioPartida) {

            // Si tenemos menos de 15 créditos,
            // no podemos jugar.

            $mensaje = "No tienes suficientes créditos";

            // Mostramos el mensaje en rojo.

            $tipoMensaje = "pierde";

        } else {


           

            $_SESSION["saldo"] -= $precioPartida;


         

            $resultado = [];


            

            for ($i = 0; $i < 1; $i++) {


                

                $numero = rand(0, 1);


            

            } 
        }
    }
$numero = rand(1,2);
$nombre = match ($numero) {
    1 => "CARA",
    2 => "CRUZ",
    default => "Desconocido"
};


?>




<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>EXAMEN1TRIMESTRE</title>
</head>
<body>
<h1>Cara o Cruz 2.0</h1>
<p>Resultado: <?php echo $nombre; ?></p>

</form>
<h4>Postura</h4>
<form action="EXAMENCARACRUZ.php" method="post">
    <input type="submit" value="APOSTAR">

    <label>Dinero:</label><input type="number" step="any" name="a" required>
    <label><input type="radio" name="seguro" value="si">Cara</label>
    <label><input type="radio" name="seguro" value="si">Cruz</label>
 
</form>
<br>
<br>
<br>

<form action="EXAMENCARACRUZ.php" method="post">
    <label>POT <br>
     <div class="saldo">

            Saldo:

            <?php

            // echo muestra contenido en la página HTML.
            //
            // Mostramos el saldo guardado en la sesión.

            echo $_SESSION["saldo"];

            ?>

            créditos

        </div>
     <button
                type="submit"
                name="reiniciar"
                class="btn-reiniciar"
            >
                Reiniciar
            </button>


    
</form>

<p><?php echo $mensaje; ?></p>
</body>
</html>