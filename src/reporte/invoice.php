<?php
	# Incluyendo librerias necesarias #
	require "./code128.php";
	include "../../reportcon.php";

	$IDpago = $_GET['IDpago']; 

	$sql = "SELECT * FROM pagos WHERE IDpago = $IDpago";
	$resultado1 = mysqli_query($conexion,$sql);
	while($row = mysqli_fetch_array($resultado1)){
        $Nombres = $row['Nombres'];
		$Apellidos = $row['Apellidos'];
		$Disciplina = $row['Disciplina'];
        $Cantidad = $row['Cantidad'];
		$Fecha_pago = $row['Fecha_pago'];
	}	

	$pdf = new PDF_Code128('P','mm','Letter');
	$pdf->SetMargins(17,17,17);
	$pdf->AddPage();

	# Logo de la empresa formato png #
	$pdf->Image('../../IMG/logogym.jpg',160,12,50,35,'jpg');

	# Encabezado y datos de la empresa #
	$pdf->SetFont('Arial','B',16);
	$pdf->SetTextColor(219, 45, 33);
	$pdf->Cell(150,10,utf8_decode(strtoupper("GYM SPARTAN")),0,0,'L');
	
	$pdf->Ln(9);

	$pdf->SetFont('Arial','',10);
	$pdf->SetTextColor(39,39,51);
	$pdf->Cell(150,9,utf8_decode(""),0,0,'L');

	$pdf->Ln(5);

	$pdf->Cell(150,9,utf8_decode("Nombre: ". $Nombres . ' ' . $Apellidos),0,0,'L');

	$pdf->Ln(5);

	

	$pdf->Ln(5);

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(30,7,utf8_decode("Fecha de emisión: ".  $Fecha_pago),0,0);


	$pdf->Ln(7);


	$pdf->Ln(9);

	# Tabla de productos #
	$pdf->SetFont('Arial','',8);
	$pdf->SetFillColor(0,0,0);
	$pdf->SetDrawColor(0,0,0);
	$pdf->SetTextColor(255,255,255);
	$pdf->Cell(90,8,utf8_decode("Descripción"),1,0,'C',true);
	$pdf->Cell(15,8,utf8_decode("Cant."),1,0,'C',true);
	$pdf->Cell(25,8,utf8_decode("Precio"),1,0,'C',true);
	$pdf->Cell(19,8,utf8_decode("Desc."),1,0,'C',true);
	$pdf->Cell(32,8,utf8_decode("Subtotal"),1,0,'C',true);

	$pdf->Ln(8);

	
	$pdf->SetTextColor(39,39,51);



	/*----------  Detalles de la tabla  ----------*/
	$pdf->Cell(90,7,utf8_decode("Mensualidad"),'L',0,'C');
	$pdf->Cell(15,7,utf8_decode("1"),'L',0,'C');
	$pdf->Cell(25,7,utf8_decode("$ ".$Cantidad),'L',0,'C');
	$pdf->Cell(19,7,utf8_decode("$0.00"),'L',0,'C');
	$pdf->Cell(32,7,utf8_decode("$ ".$Cantidad),'LR',0,'C');
	$pdf->Ln(7);
	/*----------  Fin Detalles de la tabla  ----------*/


	
	$pdf->SetFont('Arial','B',9);
	
	# Impuestos & totales #
	$pdf->Cell(100,7,utf8_decode(''),'T',0,'C');
	$pdf->Cell(15,7,utf8_decode(''),'T',0,'C');
	$pdf->Cell(32,7,utf8_decode("SUBTOTAL"),'T',0,'C');
	$pdf->Cell(34,7,utf8_decode("$".$Cantidad),'T',0,'C');

	$pdf->Ln(7);

	$pdf->Cell(100,7,utf8_decode(''),'',0,'C');
	$pdf->Cell(15,7,utf8_decode(''),'',0,'C');
	$pdf->Cell(32,7,utf8_decode("IVA (13%)"),'',0,'C');
	$pdf->Cell(34,7,utf8_decode("+ $0.00 MX"),'',0,'C');

	$pdf->Ln(7);

	$pdf->Cell(100,7,utf8_decode(''),'',0,'C');
	$pdf->Cell(15,7,utf8_decode(''),'',0,'C');


	$pdf->Cell(32,7,utf8_decode("TOTAL A PAGAR"),'T',0,'C');
	$pdf->Cell(34,7,utf8_decode("$ ".$Cantidad . " MX"),'T',0,'C');

	$pdf->Ln(7);


	$pdf->Ln(12);

	$pdf->SetFont('Arial','',9);

	$pdf->SetTextColor(39,39,51);
	$pdf->MultiCell(0,9,utf8_decode("*** Precios de productos incluyen impuestos. Para poder realizar un reclamo o devolución debe de presentar esta factura ***"),0,'C',false);
	
	$pdf->MultiCell(0,9,utf8_decode("Direccion: Av. Jaina, Unidad y Trabajo, 24088 Campeche, Camp."),0,'C',false);
	$pdf->Ln(9);

	# Nombre del archivo PDF #
	$pdf->Output("I","Factura_Nro_1.pdf",true);