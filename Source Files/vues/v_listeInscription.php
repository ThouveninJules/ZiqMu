
<!DOCTYPE HTML>

<html>
	<head>
		<title>Inscriptions</title>
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
							<h2>Liste des inscriptions</h2>
							<p>Aliquam ut ex ut interdum donec amet imperdiet eleifend</p>
						</header>
						<section class="wrapper style5">
							<div class="inner">

								<h3>Lorem ipsum dolor</h3>
								
                                <?php

                                echo "<br><br><table><tr><th><center>Nom</center></th><th><center>Prénom</center></th><th><center>Cours</center></th><th><center>PDF</center></th><th><center>Supprimer</center></th></tr>";
                                foreach($lesInscr as $uneInscr){

                                    echo "<tr><td><center>".$uneInscr['nom']."</center></td><td><center>".$uneInscr['prenom']."</center></td><td><center>".$uneInscr['id']."</center></td><td><center><a><img class=\"img_pdf\" src=./images/pdf.png></a></center></td><td><center><a><img class=\"img_suppr\" src=./images/suppr.png></a></center></td></tr>";

                                }
                                echo "</table>";

                                ?>

								<p>Vestibulum ultrices risus velit, sit amet blandit massa auctor sit amet. Sed eu lectus sem. Phasellus in odio at ipsum porttitor mollis id vel diam. Praesent sit amet posuere risus, eu faucibus lectus. Vivamus ex ligula, tempus pulvinar ipsum in, auctor porta quam. Proin nec dui cursus, posuere dui eget interdum. Fusce lectus magna, sagittis at facilisis vitae, pellentesque at etiam. Quisque posuere leo quis sem commodo, vel scelerisque nisi scelerisque. Suspendisse id quam vel tortor tincidunt suscipit. Nullam auctor orci eu dolor consectetur, interdum ullamcorper ante tincidunt. Mauris felis nec felis elementum varius.</p>

								<hr />

								<h4>Feugiat aliquam</h4>
								<p>Nam sapien ante, varius in pulvinar vitae, rhoncus id massa. Donec varius ex in mauris ornare, eget euismod urna egestas. Etiam lacinia tempor ipsum, sodales porttitor justo. Aliquam dolor quam, semper in tortor eu, volutpat efficitur quam. Fusce nec fermentum nisl. Aenean erat diam, tempus aliquet erat.</p>

								<p>Etiam iaculis nulla ipsum, et pharetra libero rhoncus ut. Phasellus rutrum cursus velit, eget condimentum nunc blandit vel. In at pulvinar lectus. Morbi diam ante, vulputate et imperdiet eget, fermentum non dolor. Ut eleifend sagittis tincidunt. Sed viverra commodo mi, ac rhoncus justo. Duis neque ligula, elementum ut enim vel, posuere finibus justo. Vivamus facilisis maximus nibh quis pulvinar. Quisque hendrerit in ipsum id tellus facilisis fermentum. Proin mauris dui, at vestibulum sit amet, auctor bibendum neque.</p>

							</div>
						</section>
					</article>



			</div>


	</body>
</html>