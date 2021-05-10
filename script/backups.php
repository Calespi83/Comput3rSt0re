</HEAD>
<style>
body{
    background-color: #34D2E1;
}

</style>
<BODY>

<?php

date_default_timezone_set("America/Bogota");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbunad7";

$mysqldump='"C:\xampp\mysql\bin\mysqldump.exe\"';
$backup_file ='"C:\xampp\htdocs\ComputerStore\backups\"'.$dbname ."-" .date("Y-m-d-H-i-s"). ".sql";
system("$mysqldump --no-defaults -u $username -p$password $dbname > $backup_file");

?>

<h2><p align="center">COPIA DE SEGURIDAD REALIZADA SATISFACTORIAMENTE</p></h2>
</BODY>
</HTML>