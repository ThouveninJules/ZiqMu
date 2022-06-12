
<!DOCTYPE HTML>

<html>
	<head>
		<title>Inscriptions</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<noscript><link rel="stylesheet" href="./assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
	<?php
	?>
		<!-- Page Wrapper -->
			<div id="page-wrapper">

            <!-- Main -->
					<article id="main">
						<section class="wrapper style5">
							<div class="inner">

								<h3>Liste des inscriptions</h3>
								
                                <?php

                                echo "<br><br><table><tr><th><center>Nom</center></th><th><center>Prénom</center></th><th><center>Cours</center></th><th><center>PDF</center></th><th><center>Supprimer</center></th></tr>";
                                foreach($lesInscr as $uneInscr){

                                    echo "<tr><td><center>".$uneInscr['nom']."</center></td><td><center>".$uneInscr['prenom']."</center></td><td><center>".$uneInscr['id']."</center></td><td><center><a><img class=\"img_pdf\" src=./images/pdf.png></a></center></td><td><center><a><img class=\"img_suppr\" src=./images/suppr.png></a></center></td></tr>";

                                }
                                echo "</table>";

                                ?>
							</div>
						</section>
					</article>



			</div>


	</body>
</html>