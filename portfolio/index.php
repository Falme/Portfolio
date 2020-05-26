
<?php

$language = 0;

if(isset($_GET['lan']))
{
	if($_GET['lan'] == "en")
	{
		$language = 1;
	}
}


$portGamesData = [
	["https://www.flux-games.com/guts", "images/guts.jpg", "GUTS", 
		[
			"
			GUTS (Gory Ultimate Tournament Show) é um jogo 
			de luta da Flux Games totalmente sangrento, 
			violento, com muitos exageros e cheio de humor.
			<br />
			Participação no Porting para 
			<b>Xbox One</b> e <b>PS4.</b> 
			<br/><br />
			Data de Lançamento : TBA
			",
			"
			GUTS (Gory Ultimate Tournament Show) é um jogo 
			de luta da Flux Games totalmente sangrento, 
			violento, com muitos exageros e cheio de humor.
			<br />
			Participação no Porting para 
			<b>Xbox One</b> e <b>PS4.</b> 
			<br/><br />
			Data de Lançamento : TBA
			"
		]
	],
	//["https://www.flux-games.com/guts", "images/guts.jpg", "I", "I"],
	//["https://www.flux-games.com/guts", "images/guts.jpg", "G", "G"],
	["https://www.flux-games.com/eckoblocks", "images/Eckoblocks.png", "Eckoblocks", 
		[
			"
			Jogo educacional para Android e iOS que ensina 
			sobre o tema de reciclagem de uma forma lúdica 
			e divertida.
			<br />
			Fui responsavel pela maioria do desenvolvimento 
			e sistema de mapa procedural
			",
			"
			Jogo educacional para Android e iOS que ensina 
			sobre o tema de reciclagem de uma forma lúdica 
			e divertida.
			<br />
			Fui responsavel pela maioria do desenvolvimento 
			e sistema de mapa procedural
			"
		]
	],
	["https://www.flux-games.com/oswaldo", "images/oswaldo.jpg", "Jogo do Bafo : Oswaldo", 
		[
			"
			Inspirado no episódio do Jogo do Bafo, <br/>
			jogo mobile feito pela Flux Games junto a 
			<br />Birdo Studios.
			<br /><br />
			Participação na análise de performance e testes.
			",
			"
			Inspirado no episódio do Jogo do Bafo, <br/>
			jogo mobile feito pela Flux Games junto a 
			<br />Birdo Studios.
			<br /><br />
			Participação na análise de performance e testes.
			"
		]
	],
	["#", "images/criancas.png", "Hospital do Câncer de Barretos : Crianças Como Parceiras", 
		[
			"
			Jogos e Atividades digitais para crianças aprenderem sobre 
			diversos assuntos voltados a saúde e segurança. Desenvolvido 
			para HTML utilizando Construct 2.
			",
			"
			Jogos e Atividades digitais para crianças aprenderem sobre 
			diversos assuntos voltados a saúde e segurança. Desenvolvido 
			para HTML utilizando Construct 2.
			"
		]
	],
	["https://www.flux-games.com/cidade-em-jogo", "images/CidadeEmJogo.png", "Cidade em Jogo", 
		[
			"
			Jogo Premiado na BIG, fui responsável pela manutenção do servidor, 
			Banco de dados e Analytics.
			",
			"
			Jogo Premiado na BIG, fui responsável pela manutenção do servidor, 
			Banco de dados e Analytics.
			"
		]
	],
	["https://instagram.com/cleaver_game", "images/FrangoAndando.png", "Cleaver", 
		[
			"
			Jogo desenvolvido para trabalho de conclusão de curso de um grupo da 
			faculdade Impacta Tecnologia <br /> Conclusão em : Dezembro de 2018
			",
			"
			Jogo desenvolvido para trabalho de conclusão de curso de um grupo da 
			faculdade Impacta Tecnologia <br /> Conclusão em : Dezembro de 2018
			"
		]
	],
	["#", "images/ni.png", "NI", 
		[
			"
			Jogo desenvolvido para trabalho de conclusão de curso da faculdade Impacta 
			Tecnologia com o tema sustentabilidade <br /> 
			Concluído em : Dezembro de 2017 
			",
			"
			Jogo desenvolvido para trabalho de conclusão de curso da faculdade Impacta 
			Tecnologia com o tema sustentabilidade <br /> 
			Concluído em : Dezembro de 2017 
			"
		]
	],
	["./projects.php", "images/VariousGames.png", "Outros Jogos", 
		[
			"
			Clique na imagem para ter acesso a outros jogos desenvolvidos, 
			Game Jams, protótipos e participações
			",
			"
			Clique na imagem para ter acesso a outros jogos desenvolvidos, 
			Game Jams, protótipos e participações
			"
		]
	],
];

$portWebsitesData = [
	["http://muranodesign.com.br/", "images/MuranoSS.png", "Murano Design", 
		[
			"
			Website Desenvolvido para empresa Murano Design. 
			Para o desenvolvimento foi utilizado HTML5, CSS3, SASS e JQuery.
			",
			"
			Website Desenvolvido para empresa Murano Design. 
			Para o desenvolvimento foi utilizado HTML5, CSS3, SASS e JQuery.
			"
		]
	],
	["#", "images/U-i-a-co.jpg", "Instituto Unibanco : Jovem de futuro", 
		[
			"
			Participação com a Murano Design no desenvolvimento de um módulo de 
			aulas de ensino á distância para a plataforma Moodle. <br />
			Feito em HTML5.
			",
			"
			Participação com a Murano Design no desenvolvimento de um módulo de 
			aulas de ensino á distância para a plataforma Moodle. <br />
			Feito em HTML5.
			"
		]
	],
	["http://safiraenergia.com.br/", "images/safira.png", "Safira Energia", 
		[
			"
			Participação com a Tinpix no desenvolvimento do Website do Grupo 
			Safira Energia. <br />Feito em HTML5, Jade/Pug, Compass e coffeescript.
			",
			"
			Participação com a Tinpix no desenvolvimento do Website do Grupo 
			Safira Energia. <br />Feito em HTML5, Jade/Pug, Compass e coffeescript.
			"
		]
	],
	["http://www.ekkogroup.com.br/", "images/Ekko.jpg", "Ekko Group", 
		[	
			"
			Participação com a Giro360 no desenvolvimento do Website da Ekko Group. 
			<br />Feito em PHP e Wordpress.
			",
			"
			Participação com a Giro360 no desenvolvimento do Website da Ekko Group. 
			<br />Feito em PHP e Wordpress.
			"
		]
	],
	["http://agenciagiro360.com.br/", "images/Giro360.png", "Agência Giro360", 
		[
			"
			Total desenvolvimento do website da empresa Agência Giro 360. <br />
			Feito em PHP.
			",
			"
			Total desenvolvimento do website da empresa Agência Giro 360. <br />
			Feito em PHP.
			"
		]
	],
	["https://oamarelinho.com.br/", "images/Amarelinho.jpg", "O Amarelinho", 
		[
			"
			Participação no desenvolvimento do Website de O Amarelinho. <br />
			Feito em HTML5, Jade/Pug, Compass e coffeescript.
			",
			"
			Participação no desenvolvimento do Website de O Amarelinho. <br />
			Feito em HTML5, Jade/Pug, Compass e coffeescript.
			"
		]
	],
	["http://falme.com.br/PointsToPixels/", "images/PointsPixels-lg.png", "Points to Pixels", 
		[
			"
			Conversor de valores Pontos para Pixels e vice versa. Pela dificuldade 
			de encontrar essa conversão e como converter, esse site foi desenvolvido 
			como solução.
			",
			"
			Conversor de valores Pontos para Pixels e vice versa. Pela dificuldade 
			de encontrar essa conversão e como converter, esse site foi desenvolvido 
			como solução.
			"
		]
	],
	["https://github.com/Falme/ScaleScript", "images/ScaleScript.png", "ScaleScript.js", 
		[
			"
			Script que escalona qualquer pagina web, foi utilizado para aplicações 
			de ensino, atividades e paginas web. Também aceito nas aulas da 
			plataforma Moodle.
			",
			"
			Script que escalona qualquer pagina web, foi utilizado para aplicações 
			de ensino, atividades e paginas web. Também aceito nas aulas da 
			plataforma Moodle.
			"
		]
	],
];

$portProjectsData = [
	["http://auditudo.wordpress.com/", "images/Auditudo.jpg", "Auditudo", 
		[
			"
			Podcast de Entretenimento voltado para divulgação musical de bandas alternativas, nacionais ou recomendadas. <br /> Parceiros : Clayton \"Hykez\" Biscalchini, Luis \"Ingrion\" Gustavo
			",
			"
			Podcast de Entretenimento voltado para divulgação musical de bandas alternativas, nacionais ou recomendadas. <br /> Parceiros : Clayton \"Hykez\" Biscalchini, Luis \"Ingrion\" Gustavo
			"
		]
	],
	["http://www.ludokratia.tumblr.com", "images/ludocracia.png", "Ludokratia", 
		[
			"
			Blog de Game Design de um ponto de vista acadêmico e Indie <br /> Parceiros : Diego Garcia
			",
			"
			Blog de Game Design de um ponto de vista acadêmico e Indie <br /> Parceiros : Diego Garcia
			"
		]
	],
	["http://www.guaxinimgames.com", "images/guaxa.png", "Guaxinim Games", 
		[
			"
			Co-Fundador da desenvolvedora de jogos digitais Guaxinim Games, focado no Entretenimento <br /> Parceiros : Diego Lopes
			",
			"
			Co-Fundador da desenvolvedora de jogos digitais Guaxinim Games, focado no Entretenimento <br /> Parceiros : Diego Lopes
			"
		]
	],
];

?>

<!DOCTYPE HTML>
<!--
	Directive by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Falme Streamless</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/stylesheets/style.css" />
	</head>
	<body>

		<!-- Header -->
			<?php include 'header.php' ?>

		<!-- Main -->
			<div id="main">


				<header class="major container 75%">
					<h2>Desenvolvimento de jogos</h2>
				</header>

				<div class="box alt container">

					<?php
						for($i=0; $i<count($portGamesData); $i++)
						{
							echo '
							<section class="feature '.($i % 2 == 0 ? "left":"right").'">
								<a target="_blank" 
									href="'.$portGamesData[$i][0].'" 
									class="image" 
									style="background-image: url('.$portGamesData[$i][1].');">
								</a>
								<div class="content">
									<h3>'.$portGamesData[$i][2].'</h3>
									<p>'.$portGamesData[$i][3][0].'</p>
								</div>
							</section>
							';
						}
					?>
					
					
				</div>



				<header class="major container 75%">
					<h2>Desenvolvimento web</h2>
				</header>

				<div class="box alt container">

					
					<?php
						for($i=0; $i<count($portWebsitesData); $i++)
						{
							echo '
							<section class="feature '.($i % 2 == 0 ? "left":"right").'">
								<a target="_blank" 
									href="'.$portWebsitesData[$i][0].'" 
									class="image" 
									style="background-image: url('.$portWebsitesData[$i][1].');background-position:left top;">
								</a>
								<div class="content">
									<h3>'.$portWebsitesData[$i][2].'</h3>
									<p>'.$portWebsitesData[$i][3][0].'</p>
								</div>
							</section>
							';
						}
					?>

					
				</div>



				<header class="major container 75%">
					<h2>Outros Projetos</h2>
				</header>

				<div class="box alt container">

						
					<?php
						for($i=0; $i<count($portProjectsData); $i++)
						{
							echo '
							<section class="feature '.($i % 2 == 0 ? "left":"right").'">
								<a target="_blank" 
									href="'.$portProjectsData[$i][0].'" 
									class="image" 
									style="background-image: url('.$portProjectsData[$i][1].');">
								</a>
								<div class="content">
									<h3>'.$portProjectsData[$i][2].'</h3>
									<p>'.$portProjectsData[$i][3][0].'</p>
								</div>
							</section>
							';
						}
					?>

					
					
				</div>

			</div>

		<!-- Footer -->
			<div id="footer">
				<div class="container 75%">

					<header class="major last">
						<h2>Encontre-me</h2>
					</header>
					<p></p>
					<ul class="icons">
						<li><a href="https://twitter.com/falmeStreamless" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://www.facebook.com/falme.streamless" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://github.com/falme" class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="https://br.linkedin.com/in/falme" class="icon fa-linkedin"><span class="label">Github</span></a></li>
					</ul>

					<ul class="copyright">
						<li>Falme Streamless</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>

				</div>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="js/contact_me.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>