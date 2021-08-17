<?php
session_start();
session_destroy(); //cierra TODAS las sesiones

header("Location:../piscinas-piscina-piletas-pileta-pileteros-piletero.php");
?>