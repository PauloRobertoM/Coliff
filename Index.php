<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>C'oliff</title>
	</head>
	<body>
		
		<!-- ********* Chamada do header.PHP ********* -->
		<?php include("templates/header.php"); ?>
				
		<div class="row">
			<div class="container">
				<section class="my-section-index">
					<div class="span3">
						<a href="dicas.php">Dicas</a>
						<img src="img/manequim.png" alt="Manequins - Dicas" />
						<p>Texto texto texto texto texto texto texto texto texto Texto texto texto texto texto texto texto texto texto texto texto texto texto</p>
						<hr />
					</div>

					<div class="span3">
						<a href="promocoes.php">Promoções</a>
						<img src="img/camisa.png" alt="Camisa - Promoções" />
						<p>Texto texto texto texto texto texto texto texto texto Texto texto texto texto texto texto texto texto texto texto texto texto texto</p>
						<hr />
					</div>

					<div class="span3">
						<a href="novidades.php">Novidades</a>
						<img src="img/prateleira.png" alt="Prateleiras - Novidades" />
						<p>Texto texto texto texto texto texto texto texto texto Texto texto texto texto texto texto texto texto texto texto texto texto texto</p>
						<hr />
					</div>

					<div class="span3">
						<a href="comentarios.php">Comentários</a>
						<ul class="commentList">
					        <div class="commentBox">
						        <li>  
						            <div class="commentText">
						                <p>Nome da Pessoa</p>
						                <span class="date sub-text">em 05/03/2014</span>
						                <p class="">Hello this is a test comment. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
						            </div>
						        </li>
					        </div>
					    </ul>
					    <hr class="my-last-hr" />
					</div>
				</section>			
			</div>
		</div>
		
		<!-- ******** Chamada do footer.PHP ******** -->
		<?php include("templates/footer.php"); ?>
		
	</body>
</html>