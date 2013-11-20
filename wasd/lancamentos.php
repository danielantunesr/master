<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>

		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>WASD STORE</title>

		<link rel="stylesheet" href="css/defaut.css" type="text/css" />
		<script type="text/javascript" src="js/scroll.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/superfish.js"></script>
		<script type="text/javascript" src="js/hover.js"></script>
		<script type="text/javascript" src="js/innerfade.js"></script>
		<script type="text/javascript" src="js/faded.js"></script>

		<!--<script type="text/javascript">
			$(document).ready(function() {
				$(' .navigation ul  ').superfish({
					delay : 800,
					animation : {
						opacity : 'show',
						height : 'show'
					},
					speed : 'normal',
					autoArrows : false,
					dropShadows : false
				});
			});
		</script>

		<script type="text/javascript">
			$(document).ready(function() {
				$('#news').innerfade({
					animationtype : 'slide',
					speed : 750,
					timeout : 2000,
					type : 'random',
					containerheight : '1em'
				});
			});
		</script>
-->
	</head>
	<body>
		<div id="content">
			<div class="pagewidth">
				<div id="sitename">
					<a href="index.php"> <img src="images/logo.png" width="845" height="111" alt="logotype" /> </a>
				</div>
				<div class="pagewidth2">
					<div id="content-top">
						<div id="topmenu">
							<div class="navigation">

								<ul class="menu">
									<li class="item-435 current active">
										<a href="index.php">Home</a>
									</li>
									<li class="item-294 deeper parent">
										<a href="index.php">Jogos </a>
										<ul>
											<li class="item-290">
												<a href="aventura.php" >Aventura</a>
											</li>
											<li class="item-438">
												<a href="rpg.php" >RPG</a>
											</li>
											<li class="item-439 deeper parent">
												<a href="estrategia.php" >Estrategia</a>
											</li>
											<li class="item-439 deeper parent">
												<a href="esportes.php" >Esportes</a>
											</li><!--
												<ul>
													<li class="item-445">
														<a href="index.php" >globbersthemes</a>
													</li>
													<li class="item-446">
														<a href="index.php" > templates</a>
													</li>
												</ul>
											</li>
											-->
											<li class="item-448">
												<a href="index.php" target="_blank" >Indie</a>
											</li>
										</ul>
									</li>
									<li class="item-233">
										<a href="index.php" >Softwares</a>
									</li>
									<li class="item-238">
										<a href="index.php" >Demonstrações</a>
									</li>
									<li class="item-455">
										<a href="index.php" >Lançamentos</a>
									</li>
									<li class="item-486">
										<a href="index.php" >Linux</a>
									</li>
									
										<input type="text" name="Login" placeholder="Login">
										<button type="submit" class="btn">Conectar</button>
										<input type="password" name="Senha" placeholder="Senha">
										<button type="submit" class="btn">Registrar</button>
									
									
								</ul>

							</div>
						</div>
								<!--</form>-->
								<div id="wrapper"
								<div id="wrapper-box">
								<h1>Lacaçamentos</h1>
								<br>								<br>								<br>
								<input type="text" name"busca" size="75" />
								<button> Buscar </button>
								<br>	<br>	<br>	<br>								<br>
								<br>
								<br>
								<!-- Essa parte do codigo é referente aquela barra de rolagem que vai ter os jogos-->
								<div style="padding: 5px; overflow: auto; height: 500px; background-color: transparent; font-family: verdana;">
<!-- Esse é o codigo que vai mostrar o jogo, ele deve ser chamado quando a pagina abrir e colocar os dados referentes ao banco de dados nele. 
	Ele vai aparecer na pagina aqui, mas deve ser gerado dentro da tag php com os dados ja inseridos, nas outras paginas como: "rpg.php, estrategia.php" ele não esta completo.
	pegue a parte que falta daqui-->
<div class="prodseparado">
	<div class="prods">
		Nome:
	</div>
	<div class="prods">
		Desenvolvedor:<!--lembre se de buscar no BD os dados que vao ficar aqui-->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Ano:
	</div>
	<div class="prods">
		Descrição
	</div>
	</div>
	<br>
																
	</div>
</div>
								
					
						
							
	</body>

</html>