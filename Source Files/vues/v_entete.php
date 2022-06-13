<!DOCTYPE HTML>

<html>
	<head>
		<title>Zikmu</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="./assets/css/main.css" />
        <link rel="stylesheet" href="./assets/css/base.css" />
		<link rel="icon" type="image/png" href="../images/LogoH.png"/>
		<noscript><link rel="stylesheet" href="./assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
	<?php
	if(isset($_REQUEST['conn'])){   
		$conn=$_REQUEST['conn'];
		$verif = $monPdoMusic->verifCle($conn); 
	}
	else{
		header('Location: ./vues/v_connexion.php');
	}

	if($conn == '0' || $verif == 0)
	{
		header('Location: ./vues/v_connexion.php');
	}
	?>
		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Menu -->
					<header id="header">
						<?= "<h1><a href=\"index.php?action=accueil&conn=".$conn."\">Zikmu</a></h1>"?>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<?="<li><a href=\"index.php?action=accueil&conn=".$conn."\">Accueil</a></li>
											<li><a href=\"index.php?action=listeInscription&conn=".$conn."\">Voir Inscriptions</a></li>
											<li><a href=\"index.php?action=cours&conn=".$conn."\">Voir Cours</a></li>
											<li><a href=\"./vues/v_connexion.php\">Connexion</a></li>"?>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>



			</div>

            		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>