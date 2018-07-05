<!DOCTYPE html>
<html>

<head>
	<title>Gerador de Curriculum</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/css_form.css">

</head>

<body>
	<form action="gerarpdf.php" method="Post">
		<h1>Bem vindo ao gerador de curriculum.</h1>
		<h2>Insira os dados abaixo.</h2>
		<div>
			<label for="nome"> Nome </label>
			<input type="text" id="nome" name="nome" />
		</div>
		<div>
			<label for="endereço"> Endereço </label>
			<input type="text" id="Endereço" name="endereço" />
		</div>
		<div>
			<label for="telefone"> Telefone </label>
			<input type="text" id="telefone"  name="telefone" />
		</div>
		<div>
			<label for="idade"> Idade </label>
			<input type="text" id="Idade" name="idade" />
		</div>
		<div>
			
			<label for="dat_nasc"> Data de Nascimento </label>
			<input type="text" id="dat_nasc" name="dat_nasc" />
		</div>
		<!-- Div que contem a caixa de seleção para selecionar o estado civil -->
		<div>
			<label for="Est_Civil"> Estado Civil </label>
			<select id="Est_Civil"> 
			<option value=""></option>
			<option value="Solt">Solteiro(a)</option>
			<option value="Cas">Casado(a)</option>
			<option value="Divo">Divorciado(a)</option>
			<option value="Viu">Viuvo(a)</option>	
		</select>
		</div>
		<!--Div que contem uma caixa de seleção para selecionar escolaridade-->
		<div> 
		<label for="Escolaridade"> Escolaridade </label>
			<select id="escolaridade" name="escolaridade">
			<option value=""></option>	
			<option value="EFI"> Ensino Fundamental Incompleto</option>
			<option value="EFC"> Ensino Fundamental Completo</option>
			<option value="EMI"> Ensino Médio Incompleto</option>
			<option value="EMC"> Ensino Médio Completo</option>
			<option value="ESI"> Ensino Superior Incompleto</option>
			<option value="ESC"> Ensino Superior Completo</option>
		</select>
		</div>
		<div class="linha"></div>		
		<div id="div-experiencias">
			<!--Div que contém os campos sobre experiência profissional-->
			<div id="Experiencia">
				<label for="Exp_Pro"> Experiência Profissional </label>
				<input type="text" id ="Experiencia" class="linha" name="Experiencia" />
			</div>
			</div>
			<button id="btnAddExperiencia">+ Adicionar Experiência </button>
		<script>
			document.getElementById("btnAddExperiencia").addEventListener("click", function (event) { //Adiciona o evento de clique no botão btnAddExperiencia
				event.preventDefault(); 
				var itm = document.getElementById("Experiencia"); 
				var cln = itm.cloneNode(true); 
				document.getElementById("div-experiencias").appendChild(cln); 
			});
		</script>
		<div class="button">
			<button type="submit"> Gerar arquivo </button>
			</div>
	</form>
</body>
</html>