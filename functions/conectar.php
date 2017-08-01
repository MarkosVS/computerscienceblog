<?PHP 
    //conexão com o banco de dados é feita por essa página
    try{
        $conexao = new PDO('mysql:host=localhost;dbname=sombia', 'root', ''); //host - nome do banco, nome de usuario, senha
        $conexao -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $erro){
        echo 'ERROR: '.$erro->getMessage();
    }
?>