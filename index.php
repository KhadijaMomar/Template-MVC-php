<!DOCTYPE HTML>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Portfolio développeur web et applications">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EDW portfolio - développeur</title>
	<link rel="apple-touch-icon" sizes="180x180" href="public/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="public/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="public/favicon/favicon-16x16.png">
	<link rel="manifest" href="public/favicon/site.webmanifest">
	<link rel="stylesheet" href="public/css/style.css">
</head>
<body>

	<ul>
		<li><a href="index.php?page=1">études</a></li>
		<li><a href="index.php?page=2">formations</a></li>
		<li><a href="index.php?page=3">contact</a></li>
		
	</ul>
	<main>
		<h1><span aria-hidden="true">🧑‍💻</span> EDW portfolio - développeur</h1>
        <?php
            #code d'appel GET
            if(isset($_GET['page'])){
                print "Numero de page : ".$_GET['page'];
            }
            # condition imbriquee
            $views = $_GET['page'];
            if($views == 1){
                include_once __DIR__.'/views/presentation.html';
            }
            if($views == 2){
                include_once __DIR__.'/views/formation.html';
            }
            if($views == 3){
                include_once __DIR__.'/views/contact.html';
            }
            else if($views >=3 || $views <= 0){
                print "<p> La page n'existe pas</p>";
            }
        ?>
	
<!-- 			
<section>
	<h2>🚀 Présentation</h2>
		<p>
			Depuis sa création en 1984, l’EDW a choisi de s’implanter dans des villes créatives et 
			dynamiques. Présente sur 5 campus en France (Paris, Bordeaux, Aix-en-Provence, Nantes, Lille) 
			et 6 à l’étranger (dont 4 campus membres du réseau AD Education*), l’EDW est 
			l’école de référence dans les secteurs du Design, du Digital, de l’Animation et du Jeu vidéo.
		</p>
</section>
<div class="grid-img">
	<h2>Nos compus en France</h2>
	<ul>
		<li><img src="public/asset/ambiance_01.jpg" alt="Paris"></li>
		<li><img src="public/asset/nantes.jpg" alt="Nantes"></li>
		<li><img src="public/asset/bordeaux.jpg" alt="Bordeaux"></li>
	</ul>
</div>

	<div class="grid-icone">
		<h2>Nous suivre</h2>
		<ul>
			<li><img src="public/favicon/icones/logo_facebook_3225194.png" alt="FB"></li>
			<li><img src="public/favicon/icones/logo_twitter_3225183.png" alt="Instagram"></li>
			<li><img src="public/favicon/icones/logo_instagram_3225191.png" alt="Instagram"></li>
			<li><img src="public/favicon/icones/logo_linkedin_3225190.png" alt="Instagram"></li>
		</ul>
	</div> -->

	</main>
<footer>
	<p>&copy; - EDW - 2024<br>
		<img src="public/asset/giusmili-lead-developer.svg" alt="badge">
	</p>
</footer>
	
</body>
</html>