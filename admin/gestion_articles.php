<?php 

	$title = "Gestion des articles";

	require_once('includes/authenticated.php');
	include_once('includes/actions.php');
	include_once('includes/header.php');
	
	$query = mysql_query('SELECT id_article, title, date FROM articles');
	
?>

<h1>Gestion des articles</h1>

<div class="actions">
	<ul>
		<li><a href="add_article.php">Ajouter un article</a></li>
		<li><a href="#">Modifier un article</a></li>
	</ul>	
</div>

<table class="tableau">
	<thead>
		<th style="width: 40px;">ID</th>
		<th style="width: 200px;">Titre</th>
		<th style="width: 90px;">Date</th>
		<th style="width: 30px;">Actions</th>
	</thead>
	<?php 
		while ($row = mysql_fetch_assoc($query)) {
			echo '
				<tr>
					<td>' . $row['id_article'] . '</td>
					<td>' . $row['title'] . '</td>
					<td>' . $row['date'] . '</td>
					<td></td>
				</tr>
			';
		}
	?>
</table>



	<?php include_once('includes/footer.php');?>