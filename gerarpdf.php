<?php  
		$nome =$_POST["nome"];
		$endereço =$_POST["endereço"];
		$telefone =$_POST["telefone"];
		$idade =$_POST["idade"];
		$dat_nasc =$_POST["dat_nasc"];
		$est_civil =$_POST["est_civil"];
		$escolaridade =$_POST["escolaridade"];
		$experiencia =$_POST["experiencia"];
		$experiencias=$_POST["experiencias[]"];
		
		require_once ('fpdf/fpdf.php');
		$pdf= new fpdf("P","pt","A4");
		$pdf -> AddPage();
		//nome
		$pdf->SetFont('helvetica','B',12);
		$pdf->Cell(40,20,'Nome:',0,0,'L');
		$pdf->setFont('helvetica','',12);
		$pdf->Cell(70,20,$nome,0,1,'L');
		//endereço
		$pdf->SetFont('helvetica','B',12);
		$pdf->Cell(65,20,utf8_decode('Endereço:'),0,0,'L');
		$pdf->setFont('helvetica','',12);
		$pdf->Cell(70,20,utf8_decode($endereço),0,1,'L');
		//telefone
		$pdf->SetFont('helvetica','B',12);
		$pdf->Cell(50,20,'Telefone:',0,0,'L');
		$pdf->setFont('helvetica','',12);
		$pdf->Cell(65,20,$telefone,0,1,'C');
		//idade
		$pdf->SetFont('helvetica','B',12);
		$pdf->Cell(15,20,'Idade:',0,0,'L');
		$pdf->setFont('helvetica','',12);
		$pdf->Cell(70,20,$idade,0,1,'C');
		//data nascimento
		$pdf->SetFont('helvetica','B',12);
		$pdf->Cell(120,20,'Data de nascimento:',0,0,'L');
		$pdf->setFont('helvetica','',12);
		$pdf->Cell(70,20,$dat_nasc,8,1,'C');
		//estado civil
		$pdf->SetFont('helvetica','B',12);
		$pdf->Cell(75,20,'Estado civil:',0,0,'L');
		$pdf->setFont('helvetica','',12);
		$pdf->Cell(90,20,$est_civil,5,1,'L');
		//Escolaridade
		$pdf->SetFont('helvetica','B',12);
		$pdf->Cell(85,20,utf8_decode('Escolaridade:'),0,0,'L');
		$pdf->setFont('helvetica','',12);
		$pdf->Cell(70,20,utf8_decode($escolaridade),4,1,'L');
		//Experiencia profissional
		foreach ($experiencia as $exp) {
		$pdf->SetFont('helvetica','B',12);
		$pdf->Cell(150,20,'Experiência Profissional:',0,0,'L');
		$pdf->setFont('helvetica','',12);
		$pdf->Cell(70,20,$exp,5,1,'L');
		}

		ob_clean();

		$pdf -> Output("dados.pdf","D"); 		
		?>