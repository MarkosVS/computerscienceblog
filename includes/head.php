<?PHP
    ob_start();
    session_start();
    include('functions/conectar.php'); //inclui arquivo que faz conexão
    include('includes/logout.php'); //inclui arquivo que faz logout

    //variáveis de usuário
    if(isset($_SESSION['emailsombia']) && (isset($_SESSION['senhasombia']))){
        $emailLogado = $_SESSION['emailsombia'];
        $senhaLogado = $_SESSION['senhasombia'];
        $selectLogin = "SELECT * from usuarios WHERE email=:emailLogado AND senha=:senhaLogado";
        try{
            $resultLogin = $conexao->prepare($selectLogin);
            $resultLogin->bindParam('emailLogado', $emailLogado, PDO::PARAM_STR);
            $resultLogin->bindParam('senhaLogado', $senhaLogado, PDO::PARAM_STR);
            $resultLogin->execute();
            $contLogin = $resultLogin->rowCount();
            if($contLogin > 0){
                $loop = $resultLogin->fetchAll();
                foreach($loop as $show){
                    $nomeLog    = $show['nome'];
                    $emailLog   = $show['email'];
                    $senhaLog   = $show['senha'];
                    $nivelLog   = $show['nivel'];
                }
            }
        }catch(PDOException $erro){
            echo 'ERROR: '.$erro;
        }
    }

    //variaveis de tempo
    date_default_timezone_set('America/Sao_Paulo');
    $ano = date('Y');
?>
<!-- Website criado por Marcos Vinicius Sombra e Beatriz Vasconcelos para fins de divulgação de marca pessoal -->
<!DOCTYPE html>
<html lang = "pt-br">
	<!-- inicio head -->
	<head>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">  <!-- linka o arquivo da fonte Oswald-->
        
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"> <!-- linka bootstrap -->  
        <link rel="stylesheet" type="text/css" href="css/style.css"> <!-- linka o arquivo style.css -->
        
        <link rel="icon" href="icon.jpg"> <!-- linka o icone icon.jpg-->
		
        <meta charset="utf-8"> <!-- seta charset como utf-8-->
        <meta name="author" content="Marcos Vinicius Sombra, Beatriz Vasconcelos"> <!-- informa os autores do site -->
        <meta name="viewport" content="width=device-width, initial-scale=1">