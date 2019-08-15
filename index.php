<!DOCTYPE html>
<html>
<head>

	<style>
		body {
		background: #cef !important;
		}
	</style>
	<title> Calculadora IP </title>
	 <script type="text/javascript" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
 	 <link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">
	 <link rel="stylesheet" type="text/css" href="estilo.css">

	<nav>
		<div class="pusher cor2">


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
				    <h3 id="letra1">Informe o IP e a máscara:</h3>
				    <input  class="input" type="text" name="ip_completo" placeholder="ex: 192.168.0.1"><h4 id="letra2">.</h4>

				  </div>
				  <div class="field">
				    <input type="text" class="input" name="mascara" placeholder="ex: 24">
				  </div>
				  <button class="ui button botao"  id="botao" type="submit">Calcular</button>
		      </form>

		    </div>
		</div>
		
		<div class="retangulo">
			<div class="container" id="isso">
				
			<table class="ui celled table tabela">
			  <thead>
			    <tr><th>IP</th>
			    <th>IPs por rede</th>
			    <th>Sub-redes</th>
			    <th>Classe</th>
			    <th>Público ou Privado</th>
			    <th>Máscara</th>
			    <th>Redes</th>
			  </tr></thead>
			  <tbody>
			    <tr>
			    <td data-label="ip" >122.144.122.100</td>
			      <td data-label="ip_por_rede">64</td>
			      <td data-label="sub_rede">4</td>
			      <td data-label="Classe">A</td>
			      <td data-label="pub_ou_priv">Público</td>
			      <td data-label="mascara">255.255.255.192</td>
			      <td data-label="redes">1</td>
			    </tr>
			   </tbody>
			</table>

			<table class="ui celled table tabela">
			    <thead>
				    <tr><th>sub-rede</th>
				    <th>Endereço de rede</th>
				    <th>Broadcast</th>
				    <th>Primeiro IP</th>
				    <th>último IP</th>
			    </tr></thead>


			    <tr >
			      <td data-label="qual_sub_rede">0</td>
			      <td data-label="end_rede">122.144.122.0</td>
			      <td data-label="broadcast">122.144.122.127</td>
			      <td data-label="primeiro_IP">122.144.122.65</td>
			      <td data-label="ultimo_IP">122.144.122.126</td>
			    </tr>
			    <tr>
			      <td data-label="qual_sub_rede">1</td>
			      <td data-label="end_rede">122.144.122.0</td>
			      <td data-label="broadcast">122.144.122.127</td>
			      <td data-label="primeiro_IP">122.144.122.65</td>
			      <td data-label="ultimo_IP">122.144.122.126</td>
			    </tr>
			    <tr>
			      <td data-label="qual_sub_rede">2</td>
			      <td data-label="end_rede">122.144.122.0</td>
			      <td data-label="broadcast">122.144.122.127</td>
			      <td data-label="primeiro_IP">122.144.122.65</td>
			      <td data-label="ultimo_IP">122.144.122.126</td>
			    </tr>
			    <tr>
			      <td data-label="qual_sub_rede">3</td>
			      <td data-label="end_rede">122.144.122.0</td>
			      <td data-label="broadcast">122.144.122.127</td>
			      <td data-label="primeiro_IP">122.144.122.65</td>
			      <td data-label="ultimo_IP">122.144.122.126</td>
			    </tr>
			  </tbody>
			</table>



			
			</div>
		
		
		
		</div>

</body>
</html>

