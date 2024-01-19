<?php
echo 'Versão Atual do PHP: ' . phpversion();
$conn = mysqli_connect("db", "root", "root", "sys") or die(mysqli_error());
echo "<br>Banco conectado com sucesso!";
$conn->close();

?>