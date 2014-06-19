<?php 
	require_once('includes/authenticated.php');
	include_once('includes/actions.php');
	$title = "Mon administration";
	include_once('includes/header.php');
	
?>
	
	
	<?php echo "<h1>Bonjour " . $_SESSION['user']."</h1>";?>
	
<?php include_once('includes/footer.php');?>