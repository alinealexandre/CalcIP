<!DOCTYPE html>
<html>
<head>
	<title> Calculadora IP </title>
	 <script type="text/javascript" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
 	 <link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">
	 <link rel="stylesheet" type="text/css" href="estilo.css">

	<nav>
		<div class="pusher cor2">

		    <div class="ui container ">
		      <div class="ui large secondary pointing menu ">

		        <a  href="index.php" class="active item blue">Home</a>
		        <a  href="#" class="item">BlaBla</a>
		        
		    </div>
		<div class="barra_menu">
			<img id="menu" src="logo_calculadora.png">
		</div>
	</nav>
</head>
<body>

	<div class="corpo">
		<div class="retangulo">
			<div class="container">

		      <form class="ui form">
		        <br>
		        <div class="field">
				    <label>IP</label>
				    <input type="text" name="ip" placeholder="ex: 192.168.1.0">
				  </div>
				  <div class="field">
				    <label>Máscara</label>
				    <input type="text" name="mascara" placeholder="ex: 24 ou 255.255.255.0">
				  </div>
				  <button class="ui button"  id="botao" type="submit">Calcular</button>
		      </form>

		    </div>
		</div>

</body>
</html>

