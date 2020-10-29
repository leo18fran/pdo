<?php
include_once "conexion.php";
?>
<form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
    <input type="text" name="nombres" placeholder="Ingrese Numero"><br>

    <input type="button" name="submit" value="guardar">
</form>

<?php
if (isset($_POST["button"])) {
    $numIng = $_POST["numIng"];

    $numIngresados = new NumIngresados();
    $resultado = $numIngresados->insertar($numIng);

    if ($resultado != 0) {
        header("location: index.php");
    } else {
        echo "Error: No guardado el numero";
    }
}