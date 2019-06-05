<?php

require('fpdf/fpdf.php');

$pdf = new FPDF('p','mm','A4');

$pdf->AddPage();

$pdf->SetFont('Arial','B',14);
$pdf->Cell(80);
$pdf->Cell(30,10,'Chalan',1,1,'C');
$pdf->Cell(189,10,'',0,1);
$pdf->Cell(130,5,'SAKI AUTO PRODUCTS PVT LTD UNIT II',0,0);

session_start();

$i = isset($_SESSION['i']) ? $_SESSION['i'] : 0;

$invoiceid = ++$i; 
// echo $invoiceid;

$_SESSION['i'] = $i;

$pdf->Cell(59,5,'Chalan',0,1);

$pdf->SetFont('Arial','',12);

$pdf->Cell(130,5,'',0,0);
$pdf->Cell(59,5,'',0,1);
$date= date("d/m/Y");
$pdf->Cell(130,5,'PLOT NO. 66, F-II BLOCK, MIDC PIMPRI, PUNE-411018',0,0);
$pdf->Cell(25,5,'Date',0,0);
$pdf->Cell(34,5,"$date",0,1);

$pdf->Cell(130,5,'GSTIN ID :27ALYPB3494L1ZC',0,0);
$pdf->Cell(25,5,'Chalan No',0,0);
$pdf->Cell(34,5,"$invoiceid",0,1);
date_default_timezone_set('Asia/Kolkata');
$time = date('h:i A');

$pdf->Cell(130,5,'',0,0);


$pdf->Cell(25,5,'Time:',0,0);
$pdf->Cell(34,5,"$time",0,1);


$pdf->Cell(189,10,'',0,1);
 include ('../api/conn.php');
                    // $total = 0;
                $product_name=$_GET['id'];
                $sql = "SELECT * FROM pressing where product_name='$product_name'";
                $res1 = mysqli_query($conn, $sql);
                  while($res = mysqli_fetch_array($res1))
                  {
                    $sender_name=$res['sender_name'];
                    $vehicle_number=$res['vehicle_number'];
                    $transportation=$res['transportation'];
                    
                  }

$pdf->Cell(100,5,'Billing Info:',0,1);

$pdf->Cell(10,5,'',0,0);
$pdf->Cell(90,5,"Sender: $sender_name",0,1);

$pdf->Cell(10,5,'',0,0);
$pdf->Cell(90,5,"Vehicle Number: $vehicle_number",0,1);

$pdf->Cell(10,5,'',0,0);
$pdf->Cell(90,5,"Transportation Mode: $transportation",0,1);

$pdf->Cell(10,5,'',0,0);
$pdf->Cell(90,5,"HSN/SAC: 87082900",0,1);

$pdf->Cell(189,10,'',0,1);

$pdf->SetFont('Arial','B',12);

$pdf->Cell(10,10,'ID',1,0);
$pdf->Cell(35,10,'Product Name',1,0);
$pdf->Cell(35,10,'Part Number',1,0);
$pdf->Cell(25,10,'Quantity',1,0);
$pdf->Cell(15,10,'Unit',1,0);
$pdf->Cell(35,10,'Rate Per unit',1,0);
$pdf->Cell(35,10,'Total',1,1);


// $pdf->Cell(25,10,'Price',1,0);
// $pdf->Cell(34,10,'Quantity',1,0);
// $pdf->Cell(34,10,'Total',1,1);

$pdf->SetFont('Arial','',12);
$product_name=$_GET['id'];
$sql = "SELECT * FROM pressing where product_name='$product_name'";
                $res1 = mysqli_query($conn, $sql);
                 $id = 0;
                 $gtotal = 0;
                  while($res = mysqli_fetch_array($res1))
                  {
                   
                    $product_name=$res['product_name'];
                    $part_number=$res['part_number'];
                    $price=$res['price'];
                    $transfer_quantity=$res['transfer_quantity'];
                    // $total=$res['product_quantity'];
                    $id ++;

                    $total = $price*$transfer_quantity;
                     $gtotal += $total;


$pdf->Cell(10,5,"$id",1,0);
$pdf->Cell(35,5,"$product_name",1,0);
$pdf->Cell(35,5,"$part_number",1,0);
$pdf->Cell(25,5,"$transfer_quantity",1,0);
$pdf->Cell(15,5,'NOS',1,0);
$pdf->Cell(35,5,"$price",1,0);
$pdf->Cell(35,5,"$total Rs.",1,'R');

}

// $pdf->Cell(88,5,'Fridge2',1,0);
// $pdf->Cell(25,5,'-',1,0);
// $pdf->Cell(34,5,'-',1,0);
// $pdf->Cell(34,5,'5,250',1,1,'R');

// $pdf->Cell(88,5,'Fridge3',1,0);
// $pdf->Cell(25,5,'-',1,0);
// $pdf->Cell(34,5,'-',1,0);
// $pdf->Cell(34,5,'8,250',1,1,'R');
$pdf->Cell(130,5,'',0,0);
$pdf->Cell(122,5,'',0,0);
$pdf->Cell(25,5,'Subtotal',0,0);
$pdf->Cell(9,5,'INR',1,0);
$pdf->Cell(25,5,"gtotal",1,1,'R');

// $pdf->Cell(122,5,'',0,0);
// $pdf->Cell(25,5,'Delivery Fee',0,0);
// $pdf->Cell(9,5,'INR',1,0);
// $pdf->Cell(25,5,'100',1,1,'R');

// $pdf->Cell(122,5,'',0,0);
// $pdf->Cell(25,5,'Tax Rate',0,0);
// $pdf->Cell(4,5,'$',1,0);
// $pdf->Cell(30,5,'10%',1,1,'R');
//$total = $gtotal+100;
$pdf->Cell(122,5,'',0,0);
$pdf->Cell(33,5,'Total Amount:',0,0);
$pdf->Cell(9,5,'INR',1,0);
$pdf->Cell(26,5,"$total RS",1,1,'L');

$pdf->Cell(189,10,'',0,1);

$pdf->Cell(80);
// $pdf->Cell(30,10,'Thank you for shopping with us..!!!',0,0,'C');

$pdf->Output();
//$pdf->Output('D','filename.pdf');

?>