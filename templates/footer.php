<!DOCTYPE html>
<html lang="pt-br">
	<body>
		<footer>
			<div class="row">
				<div class="container">
					<div class="span4 my-redes-tel">
						<div class="row my-redes">
							<h3>Redes Sociais:</h3>
						</div>
						<div class="row my-telefone">
							<h3>Telefone:</h3>
							<span>+ 55 84 3201-1657</span>
						</div>
					</div>
					
					<div class="span4 my-logo-end">
						<div class="row my-logo">
							<img src="img/Logo.png" alt="Logo - Coliff" />
						</div>
						<div class="row my-endereco">
							<address>
								Av. Bernardo Vieira, 2948<br />
								Lagoa Nova - Natal/RN
							</address>
						</div>
					</div>
					
					<div class="span4 my-contato">
						<div class="row">
							<h3>Newsletter</h3>
							<p>Receba nossas novidades</p>							
							<div class="my-contato-form">
								<form action="#" method="post">
									<label for="nome">Nome: </label>
									<input type="text" name="nome" id="nome" />
									
									<label for="email">E-mail: </label>
									<input type="text" name="email" id="email" />

									<input type="submit" name="enviar" value="Enviar" class="botao" onclick="alert('Dados enviados com sucesso!')" />
								</form>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="back2">
				<img src="img/back2.png" alt="">
			</div>
		</footer>

		<!-- ************ Scripts ********** -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
  		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>  		
  		<script type="text/javascript" src="js/gmaps.js"></script>
  		<script type="text/javascript" src="js/my-functios.js"></script>
  		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script>
	        $('#my-carousel').carousel({interval: 3000})
	    </script>
	</body>
</html>