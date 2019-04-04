<!DOCTYPE html>
<html>
<head>
	<title>Huck Burguer</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>
<body>
	<div id="container">
		
		<form action="gravar.php" method="post">
		<h1>Huck Burguer</h1>
			<h3>Dados do Cliente</h3>
			<br>
			<b>Nome:</b>
			<input type="text" name="nome" class="form-control">
			<br>
			<b>Telefone:</b>
			<input type="tel" name="telefone" class="form-control">
			<br>
			<br>
		 	<h4>Monte seu lanche :</h4>
			<br>
			<b>Ponto da carne</b>
			<br>
			<input class="carne"type="radio" name="ponto_carne" value="Mal Passada"> Mal Passada
			<input class="carne"type="radio" name="ponto_carne" value="Ao Ponto"> Ao Ponto
			<br>
			<br>
			<b>Pão:</b>
			<select class="form-control" name="pao">
				<option disabled selected>Selecione o Pão</option>
				<option>Brioche</option>
				<option>Australiano</option>
				<option>Integral</option>
				<option>Alho e Orégano</option>
				<option>Italiano com Ervas</option>				
			</select>
			<br>
			<b>Queijo:</b>
			<select class="form-control" name="queijo">
				<option disabled selected>Selecione o Queijo</option>
				<option>Cheddar</option>
				<option>Prato</option>
				<option>Suiço</option>
				<option>Muçarela</option>
				<option>Sem Queijo</option>
			</select>
			<br>
			<b>Observações:</b>
			<textarea class="form-control" aria-label="With textarea" name ="observacoes" style="height: 200px;"></textarea>
			<br>
			<input type="submit" value="Enviar" class="butaun">

		</form>
	</div>


</body>
</html>