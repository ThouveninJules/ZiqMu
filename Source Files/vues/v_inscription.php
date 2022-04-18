<!DOCTYPE HTML>

<html>
	<head>
		<title>Cours</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<noscript><link rel="stylesheet" href="./assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

            <!-- Main -->
					<article id="main">
						<header>
							<h2>Inscription au cours</h2>
							<p>Aliquam ut ex ut interdum donec amet imperdiet eleifend</p>
						</header>
						<section class="wrapper style5">
							<div class="inner">

								<h3>Lorem ipsum dolor</h3>
								
                                <?php

if(!isset($_REQUEST['cours']))
{    
    $number = '0';

}else {   

 $number = $_REQUEST['cours'];
}

    echo "<br>
    <form action='index.php?action=validation' method=\"POST\">
    <input type='hidden' name='numero' value=".$number." required>
    <input type='text' placeholder='Entrez votre nom' name='nom' required><br><br>
    <input type='text' placeholder='Entrez votre prénom' name='prenom' required><br><br>
    <input type='number' placeholder='Entrez votre téléphone' name='tel' required><br><br>
    <input type='text' placeholder='Entrez votre adresse' name='adresse' required><br><br>
    <input type='email' placeholder='Entrez votre mail' name='mail' required><br><br>
    <input type='submit'value='Valider'><br><br>
    </form>";


?>

							</div>
						</section>
					</article>



			</div>


	</body>
</html>