
<?php

$language = 0;

if(isset($_GET['lan']))
{
	if($_GET['lan'] == "en")
	{
		$language = 1;
	}
}

$portTitles = [
	[
		"Desenvolvimento de jogos",
		"Game Development"
	],
	[
		"Desenvolvimento web",
		"Web Development"
	],
	[
		"Outros Projetos",
		"Other Projects"
	],
	[
		"Encontre-me",
		"Find me"
	],


];

$portGamesData = [
	["https://store.steampowered.com/app/1702320/PIGGY_Hunt/", "images/piggy_hunt.jpg", "PIGGY: HUNT", 
		[
			"
			<b>PIGGY: HUNT</b>. é um jogo novo baseado no 
			jogo <i>PIGGY</i> que originalmente é feito no Roblox
			e que tem uma base de jogadores muito forte e fiel.
			<br /><br/>
			Participação em sistema de Gameplay, Sistemas da Beamable e Serviços da Steamworks.NET
			para lançamento na <b>Steam</b>. 
			<br/>
			",
			"
			<b>PIGGY: HUNT</b>. is a game based originally on the 
			Roblox game <i>PIGGY</i>, which has a faithful and strong community.
			<br /><br/>
			I've Participated in <i>Gameplay System</i>, <i>Beamable Service</i>. and <i>Steamworks.NET</i> Services
			for the <b>Steam</b> Release. 
			<br/>
			"
		]
	],
	["https://play.google.com/store/apps/details?id=com.TopHatchGames.BalloonFight", "images/balloon_fight.jpg", "BalloonFight", 
		[
			"
			BalloonFight é um jogo Multiplayer Online para até 4 jogadores
			onde balões estão em um coliseu e somente um sairá vitorioso
			deste duelo.
			<br />
			Auxiliei em todo processo de desenvolvimento com um estagiário,
			desde o conceito, prototipagem, performance e lançamento na loja.
			Lançado nas lojas <a target='_blank' href='https://play.google.com/store/apps/details?id=com.TopHatchGames.BalloonFight'><b>Google Play Store</b></a> e <a target='_blank' href='https://vihh-deogame.itch.io/balloonfight'><b>Itch.io</b></a> 
			<br/>
			",
			"
			BalloonFight is a Multiplayer Online game for 2-4 players
			which the players are balloons in a coliseum and just one is victorious.
			<br />
			I was responsible for a game development process for an intern from conception, prototyping, and performance to the release on 
			<a target='_blank' href='https://play.google.com/store/apps/details?id=com.TopHatchGames.BalloonFight'><b>Google Play Store</b></a> and
			<a target='_blank' href='https://vihh-deogame.itch.io/balloonfight'><b>Itch.io</b></a> Store.
			<br/>
			"
		]
	], //Here to up
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
			GUTS (Gory Ultimate Tournament Show) is a gory, violent fighting
			game filled with exaggerated humour.
			<br />
			I've participated in Porting for 
			<b>Xbox One</b> and <b>PS4.</b> 
			<br/><br />
			Release date : TBA
			"
		]
	],
	//["https://www.flux-games.com/guts", "images/guts.jpg", "I", "I"],
	["https://store.steampowered.com/app/393950/", "images/get-over-here.png", "Get Over Here", 
		[
			"
			Jogo do gênero Arcade Party Game onde em uma arena deve-se ganhar
			a partida de acordo com as regras da partida usando um gancho e puxando
			os adversarios para perto de você e finalizando-o
			<br />
			Fui responsavel por parte do porting para Nintendo Switch
			",
			"
			An Arcade Party Game wherein an arena you must win the match
			by the customized or randomized rules using a hook to bring the adversary
			near you and finishing him.
			<br />
			Participation in Porting for Nintendo Switch.
			"
		]
	],
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
			An educational Game for Android and iOS that teaches about
			recycling in a playful way.
			<br />
			I was responsable for major part of development and procedural maps
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
			Inspired in an episode of the cartoon \"Oswaldo\", it's a arcade
			card game for mobile made by Flux Games and Birdo Studios.
			<br /><br />
			I've participated in analysis and performance tests.
			"
		]
	],
	["https://play.google.com/store/apps/details?id=com.institutoakatu.germkombat", "images/germkombat.png", "Germ Kombat", 
		[
			"
			Combata germes e bactérias, nesse divertido jogo inspirado em Zombies Ate My Neighbours.
			<br /> Feito pela Flux Games para Instituto Akatu. 
			<br /><br />
			Participação na manutenção e atualização de aplicativo na loja.
			",
			"
			Fight germs and bacteria in this fun game inspired by Zombies Ate My Neighbors.
			<br /> Made by Flux Games To Instituto Akatu. 
			<br /><br />
			I've participated in maintainment and app update in the store.
			"
		]
	],
	["https://play.google.com/store/apps/details?id=com.akatu.rangomania", "images/rangomania.png", "RangoMania", 
		[
			"
			Jogo mobile feito para ensinar sobre melhor alimentação de forma divertida.
			<br /> Feito pela Flux Games para Instituto Akatu. 
			<br /><br />
			Participação na manutenção e atualização de aplicativo na loja.
			",
			"
			Mobile game made to teach the players about healthy nutrition in a fun way.
			<br /> Made by Flux Games To Instituto Akatu. 
			<br /><br />
			I've participated in maintainment and app update in the store.
			"
		]
	],
	["https://play.google.com/store/apps/details?id=com.fluxgamestudio.superelektrus&hl=pt_BR", "images/superelektrus.png", "Super Elektrus", 
		[
			"
			Jogo mobile feito para ensinar sobre a economia de energia de forma divertida.
			<br /> Feito pela Flux Games para Instituto Akatu. 
			<br /><br />
			Participação na manutenção e atualização de aplicativo na loja.
			",
			"
			Mobile game made to teach the players about energy saving in a fun way.
			<br /> Made by Flux Games To Instituto Akatu. 
			<br /><br />
			I've participated in maintainment and app update in the store.
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
			Games and digital activities for kids to learn diverse subjects
			about health care and home security. Developed for web using 
			Construct 2 as engine.
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
			Award Winning game at BIG Festival, I was responsable by the 
			maintenance of game server, database and Analytics.
			"
		]
	],
	["./projects.php", "images/VariousGames.png", "Other Projects", 
		[
			"
			Clique na imagem para ter acesso a outros jogos desenvolvidos, 
			Game Jams, protótipos e participações
			",
			"
			Click on the image to have access to other developed games,
			Game Jams, prototypes and participations.
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
			Website developed for Murano Design company. 
			Used HTML5, CSS3, SASS and JQuery for development.
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
			Participation with Murano Design on a module for Online Classes
			in Moodle Platform.<br />
			Made in HTML5.
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
			Participation with Tinpix at the Safira Energia company website 
			development <br />Made in HTML5, Jade/Pug, Compass and coffeescript.
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
			Participation with Giro360 on the Ekko Group company website development.
			<br />Made in PHP and Wordpress.
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
			Total development of Giro 360 company website. <br />
			Made in PHP.
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
			Participation in the O Amarelinho website development.<br />
			Made in HTML5, Jade/Pug, Compass and coffeescript.
			"
		]
	],
	/*["http://falme.com.br/PointsToPixels/", "images/PointsPixels-lg.png", "Points to Pixels", 
		[
			"
			Conversor de valores Pontos para Pixels e vice versa. Pela dificuldade 
			de encontrar essa conversão e como converter, esse site foi desenvolvido 
			como solução.
			",
			"
			Points to Pixels converter, By the difficulty to find this conversion,
			this website was developed as solution.
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
			Script the scalates every webpage, was used for learning applications,
			web activities and websites. Also accepted in Moodle Platform classes.
			"
		]
	],*/
];

$portProjectsData = [
	["http://auditudo.wordpress.com/", "images/Auditudo.jpg", "Auditudo", 
		[
			"
			Podcast de Entretenimento voltado para divulgação musical de bandas alternativas, nacionais ou recomendadas. <br /> Parceiros : Clayton \"Hykez\" Biscalchini, Luis \"Ingrion\" Gustavo
			",
			"
			An Entertainment Podcast to promote alternative, national and recommended 
			bands and music. <br /> Partners : 
			Clayton \"Hykez\" Biscalchini, Luis \"Ingrion\" Gustavo
			"
		]
	],
	["http://www.ludokratia.tumblr.com", "images/ludocracia.png", "Ludokratia", 
		[
			"
			Blog de Game Design de um ponto de vista acadêmico e Indie <br /> Parceiros : Diego Garcia
			",
			"
			Game Design blog from an acadêmic and indie point of view. <br /> 
			Partners : Diego Garcia
			"
		]
	],
	["http://www.guaxinimgames.com", "images/guaxa.png", "Guaxinim Games", 
		[
			"
			Co-Fundador da desenvolvedora de jogos digitais Guaxinim Games, focado no Entretenimento <br /> Parceiros : Diego Lopes
			",
			"
			Co-Founder of the Digital Game Company \"Guaxinim Games\", 
			focused on Entertainment. <br /> Partners : Diego Lopes
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
					<h2> <?php echo $portTitles[0][$language] ?> </h2>
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
									<p>'.$portGamesData[$i][3][$language].'</p>
								</div>
							</section>
							';
						}
					?>
					
					
				</div>



				<header class="major container 75%">
					<h2><?php echo $portTitles[1][$language] ?></h2>
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
									<p>'.$portWebsitesData[$i][3][$language].'</p>
								</div>
							</section>
							';
						}
					?>

					
				</div>


				<!--
				<header class="major container 75%">
					<h2><?php echo $portTitles[2][$language] ?></h2>
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
									<p>'.$portProjectsData[$i][3][$language].'</p>
								</div>
							</section>
							';
						}
					?>

					
					
				</div>
				-->

			</div>

		<!-- Footer -->
			<div id="footer">
				<div class="container 75%">

					<header class="major last">
						<h2><?php echo $portTitles[3][$language] ?></h2>
					</header>
					<p></p>
					<ul class="icons">
						<li><a href="https://twitter.com/falmeStreamless" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://github.com/falme" class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="https://br.linkedin.com/in/falme" class="icon fa-linkedin"><span class="label">Linkedin</span></a></li>
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