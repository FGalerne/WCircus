<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>Wild Circus</title>
		<link rel="stylesheet"  href="css/style.css"/>
		<link rel="stylesheet" media="screen and (max-width : 1280px)" href="css/reso1280.css"/>
		<link rel="stylesheet" media="screen and (max-width : 1024px)" href="css/reso1024.css"/>
		
	</head>

	<body>
		
			<header>
			
				<!-- <h1>WILD CIRCUS</h1> -->
									
			</header>

			<nav>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="Artists.html">Artists</a></li>
					<li><a href="book.html">Guestbook</a></li>
					<li><a href="tickets.html">Buy Tickets</a></li>
				</ul>
			</nav>
				
				


			<div class="page">

				<section class="section">

					<article id="program">
						 
											
						<h3 class="title"> CIRCUS'S PROGRAM FOR 2016 </h3>
						<ul>
							<li class="number">A poetic moment of chinese pole executed by David Gus<a href="chinese_pole.html"><em> More </em> </a></li>
							<li class="number">Mixture of emotion and laugh by Clowns Fratinelli<a href="clowns.html"><em> More </em></a></li>
							<li class="number">Sarah Step offers a show of high level taming with her tigers<a href="taming.html"><em> More </em></a></li>
						</ul>
					
					
					</article>

					<aside>
						<h3 id="title_aside"> Lastest messages on Guestbook</h3>

<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=sql-01.proxgroup.fr:3306; dbname=wcircusn_guestbook; charset=utf8', 'wcirc_empailleur', 'F18N01L11H25g');
}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}

// Lecture des messages
$reponse = $bdd->query('SELECT pseudo, message, date_message FROM guestbook ORDER BY id DESC LIMIT 0, 2');

// Affichage des messages
while ($message = $reponse-> fetch())
{
?>
<p class="bandeau_msg"> <strong> 
<?php 
echo htmlspecialchars ($message['date_message']). ', ' .htmlspecialchars($message['pseudo']). ':';

 ?>
</strong></p>
<p class="contenu"> 
<?php echo htmlspecialchars($message['message']); ?> 
</p>
<?php 
}
$reponse -> closeCursor();
?>
					</aside>
			
				</section>

				<footer>
					
				</footer>
			</div>



	</body>
</html>