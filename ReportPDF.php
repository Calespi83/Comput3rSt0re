<?php
require ('fpdf/fpdf.php');

date_default_timezone_set("America/Bogota");


$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image('imagenUNAD/logo.png',170,5,30,30,'png');
$pdf->SetTextColor(29,50,115);
$pdf->SetFont('Arial','B',16); 
$pdf->Cell(60,10,'fecha generacion pdf');
$pdf->Ln();

$pdf->Cell(90,10,date("H:i:s / Y-m-d"));
$pdf->Ln(30);
$pdf->Cell(60,10,' ',0,0,'L');
$pdf->SetTextColor(29,100,200);

$pdf->SetFont('Arial','BU',20); 
$pdf->Cell(60,10,'Lista de Productos');
$pdf->Ln(20);

//Conexion DB
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbunad7";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Fallo la conexion: " . $conn->connect_error);
}

$sql = "SELECT * FROM tabla7";
$result = $conn->query($sql);


if (mysqli_num_rows($result) > 0) {

    
   
    $pdf->SetFont('Arial','B',12); 
    // titulos de las columnas
    $pdf->SetTextColor(632,485,397);
    $header = array('ITEM','CODIGO', 'NOMBRE', 'MARCA','CANTIDAD', 'PRECIO');
    // Cabecera
    foreach($header as $col)
    $pdf->Cell(32,10,$col,1,0,'C',1);
    $pdf->Ln();
    $pdf->SetTextColor(50,30,47);
    $pdf->SetFont('Arial','B',11); 
    foreach($result as $row)
    {
        foreach($row as $col)
            $pdf->Cell(32,8,$col,1,0,'C');
        $pdf->Ln();
    }
}

$pdf->Output();
mysqli_close($conn);

?>