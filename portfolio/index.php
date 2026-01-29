
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
	[
		"Para ler meus artigos e estudos, visite meu <a href='https://blog.falme.com.br' target='_blank'>blog</a>",
		"To read my articles and studies, visit my <a href='https://blog.falme.com.br' target='_blank'>blog</a>"
	],

];

$portGamesData = [
	["https://store.steampowered.com/app/3815370/Talaka/", "images/talaka.jpg", "Talaka", 
		[
			"
			<b>Talaka</b> é um jogo de plataforma roguelike baseado no folclore brasileiro e em influências da religião afro-brasileira. O jogo ganhou um prêmio no GDC Pitch. 
			<br /><br/>
			Participei da fase inicial de prototipagem do projeto, criando partes do <i>Sistema de Jogabilidade</i> e do <i>Design de Níveis</i>. 
			<br/>
			",
			"
			<b>Talaka</b>. is a roguelike platform action game based on brazilian folklore and 
			afro-brazilian religion influences. The game won an award at GDC Pitch. 
			<br /><br/>
			I've Participated in the Early prototyping of the project, making parts of <i>Gameplay System</i> and <i>Level Design</i>. 
			<br/>
			"
		]
	],
	["https://github.com/Falme/credits-template-unity", "images/credits_template_logo.png", "Credits Template", 
		[
			"
			<b>Credits Template</b> é um modelo de interface de créditos para o seu jogo (em Unity 6 ou Godot 4.x) com as informações sendo carregadas de um arquivo JSON.
			<br /><br/>
			Atualmente está em desenvolvimento e eu criei quase tudo no projeto, principalmente a <i>Programação</i>. 
			<br/>
			",
			"
			<b>Credits Template</b> is a template of a credits interface for your game (in Unity 6 or Godot 4.x) with the information being loaded from a JSON.
			<br /><br/>
			It's currently in development and I created almost everything from the project, mostly <i>Programming</i>. 
			<br/>
			"
		]
	],
	["https://play.google.com/store/apps/details?id=com.Ficciona.PlaypolisBrincarDeHistoria&hl=en-US", "images/playpolis.jpg", "Playpolis: Brincar de História", 
		[
			"
			<b>Playpolis: Brincar de História</b> é um jogo educativo Point-and-Click desenvolvido para promover a animação 'Playpolis'.
			<br /><br/>
			Fui responsável pela programação do projeto, que foi desenvolvido usando <i>Unity3D</i>, <i>Yarn Spinner</i> e <i>FMOD</i>. 
			<br/>
			",
			"
			<b>Playpolis: Brincar de História</b> is a educational Point-and-Click game designed to promote the animation 'Playpolis'.
			<br /><br/>
			I was responsible for the programming of the project, which was developed using <i>Unity3D</i>, <i>Yarn Spinner</i> and <i>FMOD</i>. 
			<br/>
			"
		]
	],
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
	["#", "images/n-logo.png", "Unannounced Hentai Game", 
		[
			"
			<b>Jogo não anunciado</b>. É um jogo idle game e puzzle não anunciado e sem data de lançamento prevista.
			<br /><br/>
			Participei do <i>Sistema de Gameplay</i>, <i>Conexões de API</i> e outros serviços para seu lançamento. 
			<br/>
			",
			"
			<b>Unannounced Game</b>. Is an Idle and puzzle game Unannounced and
			with no date to be released.
			<br /><br/>
			I've Participated in <i>Gameplay System</i>, <i>API Connections</i>, and other Services
			for Release. 
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
	["https://crie.games/", "images/criegames.png", "Crie.Games", 
		[
			"
			Checkpoint para os criadores de Jogos Digitais Brasileiros. <br />
			Inspirado em Develop.Games, foi utilizado HTML5, CSS3 e PHP.
			",
			"
			Checkpoint for Brazilian Digital Games creators. <br />
			Inspired by Develop.Games, used HTML5, CSS3 and PHP.
			"
		]
	],
	["http://muranodesign.com.br/", "images/Murano.png", "Murano Design", 
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
					<h2> <?php echo $portTitles[4][$language] ?> </h2>
				</header>

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
						<li>
							<a href="https://bsky.app/profile/falme.com.br" target="_blank" rel="noopener noreferrer">
								<span class="label" style="padding:7px;">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M407.8 294.7c-3.3-.4-6.7-.8-10-1.3c3.4 .4 6.7 .9 10 1.3zM288 227.1C261.9 176.4 190.9 81.9 124.9 35.3C61.6-9.4 37.5-1.7 21.6 5.5C3.3 13.8 0 41.9 0 58.4S9.1 194 15 213.9c19.5 65.7 89.1 87.9 153.2 80.7c3.3-.5 6.6-.9 10-1.4c-3.3 .5-6.6 1-10 1.4C74.3 308.6-9.1 342.8 100.3 464.5C220.6 589.1 265.1 437.8 288 361.1c22.9 76.7 49.2 222.5 185.6 103.4c102.4-103.4 28.1-156-65.8-169.9c-3.3-.4-6.7-.8-10-1.3c3.4 .4 6.7 .9 10 1.3c64.1 7.1 133.6-15.1 153.2-80.7C566.9 194 576 75 576 58.4s-3.3-44.7-21.6-52.9c-15.8-7.1-40-14.9-103.2 29.8C385.1 81.9 314.1 176.4 288 227.1z"/></svg>
								</span>
							</a>
						</li>
						<li>
							<a href="https://github.com/falme" target="_blank" rel="noopener noreferrer">
								<span class="label" style="padding:7px;">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg>
								</span>
							</a>
						</li>
						<li>
							<a href="https://br.linkedin.com/in/falme" target="_blank" rel="noopener noreferrer">
								<span class="label" style="padding:10px;">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z"/></svg>
								</span>
							</a>
						</li>
					</ul>

					<ul class="copyright">
						<li>Falme Streamless</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>

				</div>
			</div>
            <img src="https://librecounter.org/counter.svg" referrerPolicy="unsafe-url" width="0" />
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="js/contact_me.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
