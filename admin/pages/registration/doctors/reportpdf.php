<?php 
include('cn.php');
include('../../../../pdf/fpdf.php');


class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    // $this->Image('',10,10,50);
    $this->SetFont('Arial','B',23);
    // Move to the right
    $this->Cell(50);
    // Title
    $this->Cell(80,10,'User Registred Data',1,0,'C');
    // Line break
    $this->Ln(20);
}
 
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
 
$display_heading = array('id'=>'ID', 'fname'=> 'Name', 'lname'=> ' Last Name','phone'=> 'Phone', 'email'=> 'Email','birthdate'=> 'Birthdate','uname'=> 'Uname','pass'=> 'Password','gender'=> 'Gender');
 
$result = mysqli_query($db, "SELECT id, fname, phone, birthdate, uname, pass, gender FROM user") or die("database error:". mysqli_error($db));
$header = mysqli_query($db, "SHOW columns FROM user WHERE field != 'lname' and field != 'email'  ");
 
$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);
foreach($header as $heading) {
$pdf->Cell(25,10,$display_heading[$heading['Field']],1);
}
foreach($result as $row) {
$pdf->SetFont('Arial','',10);
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(25,10,$column,1);
}
$pdf->Output();
 ?>