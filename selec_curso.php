<?php
include('funciones.php');
include('funcionesBD.php');
cabecera('Seleccione curso');
echo "<div id=\"contenido\">\n";

$conexion=new mysqli("containers-us-west-52.railway.app","root","VNPJaoKEoIM9vrvrVZFh","railway","6760");
$conexion->set_charset("utf8");
$arrayCursos=obtenerArrayOpciones("alumnos","curso","curso");

echo "<form id=\"form_seleccion\" action=\"meter_faltas.php\" method=\"post\">";
echo "Curso:";
pintarCombo($arrayCursos,"curso");

echo "<input type=submit value='Introducir faltas' name='enviar'></form>";
echo "</div>";
pie();
?>
