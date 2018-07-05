<?php
		$nome =@$_POST{"Nome"};
		$endereço =@$_POST{"Endereço"};
		$telefone =@$_POST{"telefone"};
		$datnasc =@$_POST{"Data de Nascimento"};
		$estCiv =@$_POST{"Estado Civil"};
		$escolaridade =@$_POST{"Escolaridade"};
		$expPro =@$_POST{"Experiência Profissional"};
		
		require_once ('fpdf/fpdf.php');
		$pdf= new fpdf("P","pt","A4");
		$pdf -> AddPage();
		//nome
		$pdf->SetFont('helvetica','B',12);
		$pdf->Cell(70,20,$nome,0,0,'L');
		$pdf->setFont('helvetica','',12);
		//endereço
		$pdf->SetFont('helvetica','B',12);
		$pdf->Cell(70,20,utf8_decode,$Endereço,0,0,'L');
		$pdf->setFont('helvetica','',12);
		//telefone
		$pdf->SetFont('helvetica','B',12);
		$pdf->Cell(70,20,$Telefone,0,0,'L');
		$pdf->setFont('helvetica','',12);
		//data nascimento
		$pdf->SetFont('helvetica','B',12);
		$pdf->Cell(70,20,$datnasc,0,0,'L');
		$pdf->setFont('helvetica','',12);
		//estado civil
		$pdf->SetFont('helvetica','B',12);
		$pdf->Cell(70,20,$estCiv,0,0,'L');
		$pdf->setFont('helvetica','',12);
		//Escolaridade
		$pdf->SetFont('helvetica','B',12);
		$pdf->Cell(70,20,$escolaridade,0,0,'L');
		$pdf->setFont('helvetica','',12);
		//Experiencia profissional
		$pdf->SetFont('helvetica','B',12);
		$pdf->Cell(70,20,$expPro,0,0,'L');
		$pdf->setFont('helvetica','',12);


		if ($nome)$nome;
		if ($endereço) $endereço;
		if ($telefone) $telefone;
		if ($datnasc) $datnasc;
		if ($estCiv) $estCiv;
		if ($escolaridade) $escolaridade;
		if ($expPro) $expPro;
		ob_clean();
		$pdf -> Output("dados.pdf","D"); 		
		?>