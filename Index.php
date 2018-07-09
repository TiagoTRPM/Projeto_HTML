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
			<label for="Nome"> Nome </label>
			<input type="text" id="nome" name="nome" />
		</div>
		<div>
			<label for="Endereço"> Endereço </label>
			<input type="text" id="endereço" name="endereço" />
		</div>
		<div>
			<label for="telefone"> Telefone </label>
			<input type="text" id="telefone"  name="telefone" />
		</div>
		<div>
			<label for="Idade"> Idade </label>
			<input type="text" id="idade" name="idade" />
		</div>
		<div>
			
			<label for="Data de nascimento"> Data de nascimento </label>
			<input type="text" id="dat_nasc" name="dat_nasc" />
		</div>
		<!-- Div que contem a caixa de seleção para selecionar o estado civil -->
		<div>
			<label for="Estado civil"> Estado Civil </label> <meta charset="utf-8">
			<select id="est_civil" name="est_civil">  
			<option value=""></option>
			<option value="Solteiro(a)">Solteiro(a)</option>
			<option value="Casado(a)">Casado(a)</option>
			<option value="Divorciado(a)">Divorciado(a)</option>
			<option value="Viúvo(a)">Viúvo(a)</option>	
		</select>
		</div>
		<!--Div que contem uma caixa de seleção para selecionar escolaridade-->
		<div> 
		<label for="Escolaridade"> Escolaridade </label> <meta charset="utf-8">
			<select id="escolaridade" name="escolaridade">
			<option value=""></option>	
			<option value="Ensino Fundamental Incompleto"> Ensino Fundamental Incompleto</option>
			<option value="Ensino Fundamental Completo"> Ensino Fundamental Completo</option>
			<option value="Ensino Médio Incompleto"> Ensino Médio Incompleto</option>
			<option value="Ensino Médio Completo"> Ensino Médio Completo</option>
			<option value="Ensino Superior Incompleto"> Ensino Superior Incompleto</option>
			<option value="Ensino Superior Completo"> Ensino Superior Completo</option>
		</select>
		</div>
		<div class="linha"></div>		
		<div id="div-experiencias">
			<!--Div que contém os campos sobre experiência profissional-->
			<div id="experiencia">
				<label for="Experiencia Profissional"> Experiência Profissional </label>
				<input type="text" id ="experiencia" class="linha"  name="experiencia"  name="experiencias[]" />
			</div>
			</div>
			<button id="btnAddExperiencia">+ Adicionar Experiência </button>
		<script>
			document.getElementById("btnAddExperiencia").addEventListener("click", function (event) { //Adiciona o evento de clique no botão btnAddExperiencia
				event.preventDefault(); 
				var itm = document.getElementById("experiencia"); 
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