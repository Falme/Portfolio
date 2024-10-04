
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

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="js/contact_me.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>