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
		$pdf->Cell(70,20,"Nome:",0,0,'L');
		$pdf->setFont('helvetica','',12);
		//endereço
		$pdf->SetFont('helvetica','B',12);
		$pdf->Cell(70,20,"Endereço:",0,0,'L');
		$pdf->setFont('helvetica','',12);
		//telefone
		$pdf->SetFont('helvetica','B',12);
		$pdf->Cell(70,20,"Telefone:",0,0,'L');
		$pdf->setFont('helvetica','',12);
		//data nascimento
		$pdf->SetFont('helvetica','B',12);
		$pdf->Cell(70,20,"Data de Nascimento:",0,0,'L');
		$pdf->setFont('helvetica','',12);
		//estado civil
		$pdf->SetFont('helvetica','B',12);
		$pdf->Cell(70,20,"Estado Civil:",0,0,'L');
		$pdf->setFont('helvetica','',12);
		//Escolaridade
		$pdf->SetFont('helvetica','B',12);
		$pdf->Cell(70,20,"Escolaridade:",0,0,'L');
		$pdf->setFont('helvetica','',12);
		//Experiencia profissional
		$pdf->SetFont('helvetica','B',12);
		$pdf->Cell(70,20,"Experiencia Profissional:",0,0,'L');
		$pdf->setFont('helvetica','',12);


		if empty($nome)) $nome;
		if empty($endereço)) $endereço;
		if empty($telefone)) $telefone;
		if empty($datnasc)) $datnasc;
		if empty($estCiv)) $estCiv;
		if empty($escolaridade)) $escolaridade;
		if empty($expPro)) $expPro;
		ob_clean();
		$pdf -> Output("dados.pdf","D"); 		
		?>