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
						<section class="wrapper style5">
							<div class="inner">
								
                                <?php

									foreach($lesSeances as $uneSeance){

										$numero = $uneSeance['id'];
										echo "<br><table> <tr><td><center>Cours <b>$numero</b></center></tr></td>";
										echo "<tr><td><center>La date du cours : ".$uneSeance['jourheure']."</center></tr></td>";
										echo "<tr><td><center>L'instrument : ".$uneSeance['instru']."</center></tr></td>";
										echo "<tr><td><center>Le professeur : ".$uneSeance['nom']." ".$uneSeance['prenom']."</center></tr></td>";
										echo "<tr><td><center>Nombre de place : ".$uneSeance['nbplace']."</center></tr></td>";
										echo "<tr><td><center><a href=index.php?action=form&cours=".$numero."&conn=".$conn.">S'inscrire</a></center></tr></td> </table>";

									}	

								?>

							</div>
						</section>
					</article>



			</div>


	</body>
</html>