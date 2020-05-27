
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
		"Jogos, Jams e Prototipos",
		"Games, Jams and Prototypes"
	],
	[
		"Encontre-me",
		"Find me"
	],


];

$portGamesData = [
	["https://instagram.com/cleaver_game", "images/FrangoAndando.png", "Cleaver", 
		[
			"
			Jogo desenvolvido para trabalho de conclusão de curso de um grupo da 
			faculdade Impacta Tecnologia <br /> Conclusão em : Dezembro de 2018
			",
			"
			Developed game for the undergraduate thesis at \"Faculdade Impacta 
			Tecnologia\" <br /> 
			Date of Conclusion : December 2018
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
			Developed game for the undergraduate thesis at \"Faculdade Impacta 
			Tecnologia\" themed evironmental sustentability <br /> 
			Date of Conclusion : December 2017
			"
		]
	],
	["http://www.newgrounds.com/portal/view/627164", "images/HMW.png", "Hug Me, Wall", 
		[
			"
			Jogo desenvolvido em menos de 24 horas para apresentação de uma 
			palestra na FATEC São Caetano do Sul. desenvovido em ActionScript3.
			",
			"
			Game developed in 24 hours for an presentation in FATEC São Caetano do Sul. 
			developed in ActionScript3.
			"
		]
	],
	["https://falme.itch.io/void", "images/Void-mini.png", "VO.ID", 
		[
			"
			Um jogo sobre a criação, o vazio, onde seu objetivo é sobreviver 
			e evoluir. Este sendo desenvolvido em Lua/Love2D, sem data para 
			finalização.
			",
			"
			A Game about creation, the void, where your objective is to survive
			and evolve. Being developed in Lua/Love2D, with no date to be released.
			"
		]
	],
	["#", "images/matt.png", "Ajude o Matt", 
		[
			"
			Jogo desenvolvido para o 9º Prêmio CET de Educação de Trânsito. 
			Desenvolvido para HTML utilizando Construct 2.
			",
			"
			Game developed for the 9º CET Traffic education Award.
			Developed for HTML using Construct 2.
			"
		]
	],
	["https://falme.itch.io/spikalloon", "images/Spikaloon.png", "Spikalloon", 
		[
			"
			Jogo desenvolvido para a Survive The Game Jam 2, utilizado Unity 
			como desenvolvimento e exportado para Windows.
			",
			"
			Game developed for the Survive The Game Jam 2, used Unity as
			development tool and exported to Windows.
			"
		]
	],
	["https://falme.itch.io/under", "images/Under.png", "Under", 
		[
			"
			Jogo também desenvolvido para a Survive The Game Jam 2, utilizado 
			Unity como desenvolvimento e exportado para Windows.
			",
			"
			Game developed for the Survive The Game Jam 2, used Unity as
			development tool and exported to Windows.
			"
		]
	],
	["https://falme.itch.io/heart-machina", "images/HeartMachina.png", "Heart Machina", 
		[
			"
			Jogo desenvolvido para a ResistJam, utilizado Unity como 
			desenvolvimento e exportado para Windows.
			",
			"
			Game developed for the ResistJam, used Unity as
			development tool and exported to Windows.
			"
		]
	],
	/*["https://drive.google.com/open?id=1vyQNrm4UsPkzYX9ck_aZ-2KcLVrbqB5dr65LTuYdOHw", "images/FeedbackGame.jpeg", "Feedback Board Game", 
		[
			"
			Jogo de tabuleiro feito para demonstrar o conceito de Feedback 
			Positivo e Negativo em Game Design. O jogo tende a demonstrar na 
			prática e de uma forma não complexas as vantagens e problemas em 
			utilizar este conceito em outros jogos, tanto digitais quanto de 
			tabuleiro. Inspirado no livro Regras do Jogo.
			",
			"
			"
		]
	],*/
	["http://globalgamejam.org/2014/games/anamnesis", "images/anamnesis_screenshot.jpg", "Anamnesis", 
		[
			"
			Jogo desenvolvido para Global Game Jam de 2014, tive participação 
			na programação com o grupo Flaming Pigeon. Desenvolvido em Haxe 
			e exportado para HTML5(.html) e Flash(.swf)
			",
			"
			Game developed for the 2014 Global Game Jam, i've participation in
			programming with the Flaming Pigeon group. Developed in Haxe and
			exported for HTML5 and Flash(.swf)
			"
		]
	],
	["https://falme.itch.io/blip-in-red-and-blue", "images/Blip.png", "Blip in Red And Blue", 
		[
			"
			Jogo desenvolvido para a GMTK Jam 2017, com parceria de Diego Garcia. 
			Desenvolvido em C# Unity
			",
			"
			Game developed for the GMTK Jam 2017, with Diego Garcia, used Unity as
			development tool and exported to Windows.
			"
		]
	],
	["#", "images/Potato.png", "The Last Potato", 
		[
			"
			Participação no Level Design do jogo The Last Potato desenvolvido 
			para Trabalho de Conclusão de Curso da faculdade Impacta Tecnologia. 
			<br / > <br / > Desenvolvedores : Alex Arroyo, Yudi Ishikawa, Caio Gaia
			",
			"
			Participation in Level Design of The Last Potato developed for the 
			undergraduate thesis at \"Faculdade Impacta Tecnologia\"
			<br / > <br / > Developers : Alex Arroyo, Yudi Ishikawa, Caio Gaia
			"
		]
	],
	["https://falme.itch.io/g1-quiz", "images/G1Quiz.png", "G1Quiz", 
		[
			"
			Jogo Humoristico que brinca com os comentários feito na pagina de 
			notícias do G1. Desenvolvido em HTML5, CSS3, Bootstrap e JQuery
			",
			"
			Humoristic game that plays with the comments made in the G1 news feed.
			Developed in HTML5, CSS3, Bootstrap and JQuery
			"
		]
	],
	/*["https://falme.itch.io/free-will", "images/FreeWill.png", "Free Will", 
		[
			"
			Jogo Humoristico que brinca com a escolha do jogo querer ser jogado. 
			Desenvolvido em HTML5, CSS3 e JQuery
			",
			"
			"
		]
	],*/
	["https://falme.itch.io/crushed", "images/Crushed.png", "Crushed", 
		[
			"
			Jogo Space Shooter desenvolvido para a materia de Projetos da 
			Faculdade, com alta dificuldade e grande desafio. Desenvolvido 
			em Java
			",
			"
			Space Shooter game developed for the college, with hard difficulty and
			very challenging. Developed in Java.
			"
		]
	],
	["https://falme.itch.io/browserresizegame", "images/PGB.png", "Browse Resize Game", 
		[
			"
			Jogo de Plataforma/Puzzle que brinca com o redimensionamento da 
			janela do Navegador. Desenvolvido em HTML5, CSS3 e Javascript
			",
			"
			Puzzle/Platform game that plays with the resizing of the browser window.
			Developed in HTML5, CSS3 and Javascript
			"
		]
	],
	["https://gamejolt.com/games/nihilist/284402", "images/Nihilist.png", "Nihilist", 
		[
			"
			Jogo desenvolvido para a 365Indies Jam 2017 com o tema de 
			\"A Morte é útil\", Jogo Plataforma/Puzzle onde deve-se morrer para 
			resolver os problemas. Desenvolvido em C# Unity e exportado para 
			Windows
			",
			"
			Game developed for the 365Indies Game Jam 2017 themed as \"Death 
			is useful\", Puzzle game where you need to die to solve problems.
			Developed in Unity3D C# and exported for Windows.
			"
		]
	],
	/*["#", "images/PinCube.jpeg", "PinCube", 
		[
			"
			Protótipo de Jogo Físico, onde a cada certo numero de rodadas, 
			o tabuleiro poderá virar e esmagar os jogadores. Vence quem 
			sobreviver
			",
			"
			"
		]
	],*/
	["https://falme.itch.io/tower", "images/TowerScreen1.jpeg", "Tower", 
		[
			"
			Protótipo de Jogo Multiplayer (2 Players) onde os jogadores devem 
			construir uma torre de acordo com os numeros dos tijolos, com a 
			intenção de travar a ação do outro jogador fazendo-o perder o jogo! 
			<br />
			Feito em HTML5 para Smartphones.
			",
			"
			Prototype of an Multiplayer (2 Players) where the player need to
			construct a tower with the selected numbers, with an intention to
			prevent the other player to keep playing, making it lose.
			<br />
			Made in HTML5 for Smartphones.
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
					<h2><?php echo $portTitles[0][$language] ?></h2>
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



			</div>

		<!-- Footer -->
			<div id="footer">
				<div class="container 75%">

					<header class="major last">
						<h2><?php echo $portTitles[1][$language] ?></h2>
					</header>

					<p></p>

					<ul class="icons">
						<li><a href="https://twitter.com/falme73h" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
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