<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Projet la Fleur</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets1/css/main.css" />
		<link rel="stylesheet" href="assets/css/lightbox.min.css">

		<noscript><link rel="stylesheet" href="assets1/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.html">Accueil</a></h1>
						
					</header>

				<!-- Wrapper -->
					<section id="wrapper">
						<header>
							<div class="inner">
								<h2>laFleur</h2>
								<p>Projet scolaire : SPETEMBRE ~ OCTOBRE 2021 </p>
							</div>
						</header>

						<!-- Content -->
							<div class="wrapper">
								<div class="inner">

									<h3 class="major">Présentation du projet</h3>
									<p>Lors de cette 2 eme année, nous avons appris à utiliser le Modele Vue Controleur pour 
                                        les projets php avec  notre professeur de développement Web, à travers le projet La Fleur.
                                        Il nous a demandé diverses améliorations par rapport au projet de base qu'il nous avait fourni, 
                                        pour mieux maitriser cette aspect du MVC. 
                                    </p>
									<p>Ce site permet des interactions tel que lister, modifier, ajouter ou bien supprimer des fleurs ainsi qu'une 
										liste d'utilisateurs avec différents droits. Il y a deux status : Visiteurs ou Administrateurs.</p>

									<p>Notre professeur nous donnait à chacun différentes missions à effectuer.</p>

									
									<h3 class="major">Connexion</h3>
										<p>Lors de la fin du projet, nous nous sommes interessés sur l'aspect
											securité des fonctionalités. Nous avons décidé avec notre professeur 
											de celles qui seront diponibles aux visiteurs et celles disponibles aux 
											adminitrateurs. Pour se faire, nous avons rajouté un bouton de connexion
											 qui une fois faite permettra certaines fonctionalités restreintent pour un 
											 utilisateur comme celle de la recherche de fleur et toutes les fonctionalités  
											 disponibles s'il s'agit d'un administrateur. j'ai également securisé 
											 l'accés à l'url des pages, n'étant pas disponible si le cookie de connexion 
											 n'est pas rempli ou encore empecher l'injection SQL de bas niveau.</p>
									
											 <section class="features">
											 <article>
												<a href="images1/connexionFleur.jpg" class="example-image-link image" data-lightbox="example-1"><img src="images1/connexionFleur.jpg" class="example-image" /></a>
												<h3 class="major">La page de connexion</h3>
												
												
											</article>
										</section>

									<h3 class="major">Utilisateur</h3>
									<p>La partie du projet concernant les utlisateurs, représente divers actions que j'ai 
										dû réaliser. Tout d'abord, pouvoir les lister en distinguant les visiteurs et 
										les administrateurs, ajouter un utilisateur ou bien en modifier un. Toutes ces méthodes 
										ont dû être réalisé à travers un MVC qui redirige les requêtes SQL que j'ai dû créer 
										à la Vue designé pour l'affichage demandé, ou encore verifier si un Utilisateur existe déjà 
										lors de sa création, mais également la possibilité de pouvoir confirmé le mot de passe pour 
										être certain de son entrée.</p>

										<section class="features">

											<article>
												<a href="images1/adminFleur.jpg" class="example-image-link image" data-lightbox="example-1"><img src="images1/adminFleur.jpg" class="example-image" /></a>
												<h3 class="major">Le menu d'un Administrateur</h3>
												
												
											</article>
											<article>
												<a href="images1/clientFleur.jpg" class="example-image-link image" data-lightbox="example-1"><img src="images1/clientFleur.jpg" class="example-image" /></a>
												<h3 class="major">Le menu d'un client</h3>
												
											</article>
										</section>

										<h3 class="major">Les Fleurs</h3>
										<p>L'onglet concernant les fleurs permet quatre utilisations. Nous pouvons lister ou 
											ajouter des fleurs tout comme les clients, mais nous pouvons également en supprimer  
											ou faire une recherche en particulier. Tout cela  en utilisant également le concept 
											MVC ou les requêtes seront gérées vers une page de gestion de données avec les requêtes 
											correspondantes qui permettront l'affichage de la fleur en particulier ou la suppression 
											de celle demandée, tout cela en faisant des verifications d'existence.</p>
									
									<section class="features">
										<article>
											<a href="images1/menuFleur.jpg" class="example-image-link image" data-lightbox="example-1"><img src="images1/menuFleur.jpg" class="example-image" /></a>
											<h3 class="major">Le menu principal</h3>
											
										</article>
										
										
										<article>
											<a href="images1/listerFleur.jpg" class="example-image-link image" data-lightbox="example-1"><img src="images1/listerFleur.jpg" class="example-image" /></a>
											<h3 class="major">Pour lister les fleurs disponible</h3>
											
										</article>
									
									</section>
									

								</div>
							</div>

					</section>

					<!-- Content -->
					<div class="wrapper">
						<div class="inner">

							<h3 class="major">Conclusion</h3>
							<p>Ce projet php nous a permi de prendre la main sur le concept MVC 
								et d'en comprendre son importance, en apprenant à l'utiliser à travers 
								les diverses mises à jour demandées par notre professeur ce qui nous permettra
								 de mieux structurer nos projets php à l'avenir</p>
						</div>
					</div>

			</section>

	
			</div>

		<!-- Scripts -->
			<script src="assets1/js/jquery.min.js"></script>
			<script src="assets1/js/jquery.scrollex.min.js"></script>
			<script src="assets1/js/browser.min.js"></script>
			<script src="assets1/js/breakpoints.min.js"></script>
			<script src="assets1/js/util.js"></script>
			<script src="assets1/js/main.js"></script>
			<script src="assets/js/lightbox-plus-jquery.min.js"></script>

			
	</body>
</html>