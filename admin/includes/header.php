<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8" />
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="style.css" />
	
	<!-- style menu déroulant-->
	<link rel="stylesheet" type="text/css" href="ddsmoothmenu.css" />
	<link rel="stylesheet" type="text/css" href="ddsmoothmenu-v.css" />

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	<script type="text/javascript" src="ddsmoothmenu.js">
	
	</script>
		<script type="text/javascript">

		ddsmoothmenu.init({
			mainmenuid: "menumarie", //menu DIV id
			orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
			classname: 'ddsmoothmenu', //class added to menu's outer DIV
			//customtheme: ["#1c5a80", "#18374a"],
			contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
		})

		ddsmoothmenu.init({
			mainmenuid: "smoothmenu2", //Menu DIV id
			orientation: 'v', //Horizontal or vertical menu: Set to "h" or "v"
			classname: 'ddsmoothmenu-v', //class added to menu's outer DIV
			method: 'toggle', // set to 'hover' (default) or 'toggle'
			arrowswap: true, // enable rollover effect on menu arrow images?
			//customtheme: ["#804000", "#482400"],
			contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
		})
	</script>
</head>

	<body>
	
		<header class="head">
		
				<div class="title">Administration de mon blog
				</div>
				<hr />
					<div id="menumarie" class="ddsmoothmenu">
					<ul>
						<?php if(isset($_SESSION) && isset($_SESSION['user'])) {?>
						<?php } ?>
						<?php
						/* if(isset($_SESSION) && isset($_SESSION['user'])) {
						echo '<li><a href="?action=deconnexion">Déconnexion</a></li>';
						}
						*/
						?>
						<li><a href="index.php">Accueil</a></li>
						<li><a href="gestion_articles.php">Gestion des articles</a>
							<ul>
							  <li><a href="add_article.php">Ajouter un article</a></li>
							  <li><a href="#">Modifier un article</a></li>
							 </ul>
						</li>
						<li><a href="#">Onglet 3</a></li>
						<li><a href="#">Onglet 4</a></li>
						<li class="deconnexion"><a href="?action=deconnexion">Déconnexion</a></li>
					</ul>
						<br style="clear: left" />
					</div>
		
				<ul>
					
				</ul>

			</nav>
<hr />
		</header>