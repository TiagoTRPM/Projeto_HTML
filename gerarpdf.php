<?php
		$nome =@$_POST{"nome"};
		$endereço =@$_POST{"endereço"};
		$telefone =@$_POST{"telefone"};
		$idade =@$_POST{"idade"};
		$dat_nasc =@$_POST{"dat_nasc"};
		$est_civil =@$_POST{"est_civil"};
		$escolaridade =@$_POST{"escolaridade"};
		$experiencia =@$_POST{"experiencia"};
		
		require_once ('fpdf/fpdf.php');
		$pdf= new fpdf("P","pt","A4");
		$pdf -> AddPage();
		//nome
		$pdf->SetFont('helvetica','B',12);
		$pdf->Cell(70,20,Nome,0,0,'L');
		$pdf->setFont('helvetica','',12);
		$pdf->Cell(70,20,$nome,0,1,'L');
		//endereço
		$pdf->SetFont('helvetica','B',12);
		$pdf->Cell(70,20,utf8_decode(Endereço),0,0,'L');
		$pdf->setFont('helvetica','',12);
		$pdf->Cell(70,20,utf8_decode($endereço),0,1,'L');
		//telefone
		$pdf->SetFont('helvetica','B',12);
		$pdf->Cell(70,20,Telefone,0,0,'L');
		$pdf->setFont('helvetica','',12);
		$pdf->Cell(70,20,$telefone,0,1,'C');
		//idade
		$pdf->SetFont('helvetica','B',12);
		$pdf->Cell(70,20,Idade,0,0,'L');
		$pdf->setFont('helvetica','',12);
		$pdf->Cell(70,20,$idade,0,1,'C');
		//data nascimento
		$pdf->SetFont('helvetica','B',12);
		$pdf->Cell(70,20,Data_de_nascimento,0,0,'L');
		$pdf->setFont('helvetica','',12);
		$pdf->Cell(70,20,$dat_nasc,0,1,'C');
		//estado civil
		$pdf->SetFont('helvetica','B',12);
		$pdf->Cell(70,20,Estado_civil,0,0,'L');
		$pdf->setFont('helvetica','',12);
		$pdf->Cell(70,20,$est_civil,0,1,'L');
		//Escolaridade
		$pdf->SetFont('helvetica','B',12);
		$pdf->Cell(70,20,Escolaridade,0,0,'L');
		$pdf->setFont('helvetica','',12);
		$pdf->Cell(70,20,$escolaridade,0,1,'L');
		//Experiencia profissional
		$pdf->SetFont('helvetica','B',12);
		$pdf->Cell(70,20,Experiencia_Profissional,0,0,'L');
		$pdf->setFont('helvetica','',12);
		$pdf->Cell(70,20,$experiencia,0,1,'L');


		if ($nome) $nome;
		if ($endereço) $endereço;
		if ($telefone) $telefone;
		if ($idade) $idade;
		if ($dat_nasc) $dat_nasc;
		if ($est_civil) $est_civil;
		if ($escolaridade) $escolaridade;
		if ($experiencia) $experiencia;
		ob_clean();
		$pdf -> Output("dados.pdf","D"); 		
		?>