<?php
if(!empty($_POST['submit']))
{

    $Pid = $_POST['id'];
    $Pdate = $_POST['date'];
    $Pname = $_POST['pname'];
    $Paddress = $_POST['paddress'];

    $Ino = $_POST['ino'];
    $Iname = $_POST['iname'];
    $Iamount = $_POST['iamount'];
    $Itotal = $_POST['total'];
    $Itotalwwords = $_POST['totalwwords'];
    $Signature = $_POST['signature'];

    require("fpdf/fpdf.php");

    $pdf = new FPDF("P","mm","A4");
    $pdf -> AddPage();
    
    $pdf->SetFont('Arial','B',14);
    $pdf->Cell(50,10,"Arogya Health Care",0,1);
    $pdf->SetFont('Arial','',14);
    $pdf->Cell(50,7,"3 De Fonseka Pl,",0,1);
    $pdf->Cell(50,7,"Colombo 00400",0,1);
    $pdf->Cell(50,7,"No : +94761613018",0,1);
      
      //Display INVOICE text
    $pdf->SetY(15);
    $pdf->SetX(-40);
    $pdf->SetFont('Arial','B',18);
    $pdf->Image('logo.png',160,1,50, 45);
    // $pdf->Cell(50,10,"INVOICE",0,1); 
      
      //Display Horizontal line
    $pdf->Line(0,48,210,48);

    $pdf->SetY(55);
    $pdf->SetX(10);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,10,"Bill To: ",0,1);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(50,7,$Pname,0,1);
    $pdf->Cell(50,7,$Paddress,0,1);
    // $pdf->Cell(50,7,$info["city"],0,1);

    $pdf->SetY(55);
    $pdf->SetX(-60);
    $pdf->Cell(50,7,"Invoice No : ".$Pid);

    $pdf->SetY(63);
    $pdf->SetX(-60);
    $pdf->Cell(50,7,"Invoice Date : ".$Pdate);

    $pdf->SetY(95);
    $pdf->SetX(10); 

    // $pdf -> SetFont("Arial", "", 12);
    // $pdf -> Cell(0, 10, "Patient Details", 1, 1, 'C');

    $pdf -> Cell(60, 10, "Item No", 1, 0, 'C');
    $pdf -> Cell(60, 10, "Item Name", 1, 0, 'C');
    $pdf -> Cell(0, 10, "Item Amount", 1, 1, 'C');

    // $pdf -> Cell(60, 10, $Ino, 1, 0);
    // $pdf -> Cell(60, 10, $Iname, 1, 0);
    // $pdf -> Cell(0, 10, $Iamount, 1, 1);

    foreach($Ino as $key=>$no){
      $name = isset($Iname[$key]) ? $Iname[$key] : '';
      $amount = isset($Iamount[$key]) ? $Iamount[$key] : '';
      $pdf->Cell(60,10,$no,1,0,'C');
      $pdf->Cell(60,10,$name,1,0,'C');
      $pdf->Cell(0,10,$amount,1,1,'C');
    }

    // $pdf->Cell(60,10,"",1,0);
    // $pdf->Cell(60,10,"",1,0);
    // $pdf->Cell(0,10,"",1,0);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(60,9,"TOTAL",1,0,"C");
    $pdf->Cell(0,9,"Rs. ".$Itotal.".00",1,1,"R");

    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(60,9,"Amount in Words",1,0,"C");
    $pdf->Cell(0,9,"Rupees ".$Itotalwwords,1,1,"R");

    $pdf->SetY(245);
    $pdf->SetX(10);
    $pdf->SetFont('Arial','',11);
    $pdf->Cell(0,10,$Signature,0,1,"R");
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(0,10,"Authorized Signature",0,1,"R");
    $pdf->SetFont('Arial','',11);
    $pdf->Cell(0,10,"Arogya Health Care",0,1,"C");

    $pdf->Output();

}
?>