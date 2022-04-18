
<!DOCTYPE HTML>

<html>
	<head>
		<title>Cours</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="../assets/css/main.css" />
        <link rel="stylesheet" href="../assets/css/base.css" />
		<noscript><link rel="stylesheet" href="./assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

            <!-- Menu -->
					<header id="header">
						<h1><a href="index.html">Zikmu</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="../index.php?action=accueil">Accueil</a></li>
											<li><a href="../index.php?action=listeInscription">Voir Inscriptions</a></li>
											<li><a href="../index.php?action=cours">Voir Cours</a></li>
											<li><a href="vues/v_connexion.php">Connexion</a></li>
											<li><a href="#">Log In</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

            <!-- Main -->
					<article id="main">
						<header>
							<h2>Connexion</h2>
							<p>Aliquam ut ex ut interdum donec amet imperdiet eleifend</p>
						</header>
						<section class="wrapper style5">
							<div class="inner">

								<h3>Connexion</h3>
								
                               
                                <form action='./v_validerConn.php' method="POST">
        <br><br>
        <center><input type="text" placeholder="Entrez votre indentifiant :" name="ident"></center>
        <br><br>
        <center><input type="text" placeholder="Entrez votre mot de passe :" name="mdp"></center>
        <br><br>
        <center><input type="submit" value="Valider"></center>
    </form>

							</div>
						</section>
					</article>



			</div>

    <?php
    include 'v_pied.php';
    ?>
    
            		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/browser.min.js"></script>
			<script src="../assets/js/breakpoints.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>
	</body>
</html>