<?PHP
if(isset($_REQUEST['sair'])){
	session_destroy();
	session_unset($_SESSION['emailsombia']);
	session_unset($_SESSION['senhasombia']);
	header("Location: index.php");	
}
?>