<?PHP
    if(!isset($_SESSION['emailsombia']) && (!isset($_SESSION['senhasombia']))){
        header("Location: index.php");
        exit;
    }

    if($nivelLog != 10 && $nivelLog != 9){
        header("Location: index.php");
        exit;
    }

?>