<?php
	include("includes/head.php"); //inclui o head quase completo do site
?>
		<title>Entrar - Sombia</title> <!-- muda o título do site -->
	</head>
	<!-- fim head -->

	<!-- inicio body -->
	<body>
		<?php
			include("includes/header.php"); //inclui o cabeçalho do site
		?>

		<!-- inicio nav navMenu -->
		<?php
			include("includes/menu.php"); //inclui o menu do site
		?>
		<!-- fim nav navMenu -->

		<!-- inicio section corpo -->
		<section id="corpo">
			<div id="corpoMain">
                <form class="form-horizontal" id="form-login" method="post" action="#">
                    <h2>Entrar</h2><br>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">E-mail</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="E-mail" name="email" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Senha" name="senha" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default" name="entrar">Entrar</button>
                        </div>
                    </div>
                    
                    <?PHP
                    //realizar login no site
                    if(isset($_POST['entrar'])){
                        $email = trim(strip_tags($_POST['email']));
                        $senha = md5(trim(strip_tags($_POST['senha'])));
                        
                        $select = "SELECT * from usuarios WHERE BINARY email=:email AND BINARY senha=:senha";
                        try{
                            $result = $conexao->prepare($select);
                            $result->bindParam(':email', $email, PDO::PARAM_STR);
                            $result->bindParam(':senha', $senha, PDO::PARAM_STR);
                            $result->execute();
                            $c = $result->rowCount();
                            if($c > 0){
                                $email = $_POST['email'];
								$senha = md5($_POST['senha']);
                                $_SESSION['emailsombia'] = $email;
                                $_SESSION['senhasombia'] = $senha;
                                echo 'Conectado com sucesso.';
                                header("Refresh: 1, index.php");
                            }else{
								echo 'Email ou senha incorretos';
							}
                        }catch(PDOException $erro){
                            echo 'ERROR: '.$erro;
                        }
                    }
                    ?>
                    
                </form>
                
                <br>
                <form class="form-horizontal" id="form-login" method="post" action="#">
                    <h2>Registrar</h2><br>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputNome3" placeholder="Nome" name="nome" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">E-mail</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="E-mail" name="email" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Senha" name="senha" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Senha" name="csenha" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default" name="registrar">Registrar</button>
                        </div>
                    </div>
                    
                    <?PHP
                    //realizar login no site
                    if(isset($_POST['registrar'])){
                        $regNome = trim(strip_tags($_POST['nome']));
                        $regEmail = trim(strip_tags($_POST['email']));
                        $regSenha = md5(trim(strip_tags($_POST['senha'])));
                        $regConf = md5(trim(strip_tags($_POST['csenha'])));
                        $regNivel = 1;
                        
                        if($regSenha == $regConf){
                            $busca = "SELECT * from usuarios WHERE email LIKE '$regEmail'";
                            $result = $conexao->prepare($busca);
                            $result->execute();
                            $cont = $result->rowCount();
                            
                            if($cont > 0){
                                echo "E-mail já cadastrado";
                            }else{
                                $insert = "INSERT into usuarios (nome, email, senha, nivel) VALUES (:regNome, :regEmail, :regSenha, $regNivel)";
                                
                                try{
                                    $resultado = $conexao->prepare($insert);
                                    $resultado->bindParam(':regNome', $regNome, PDO::PARAM_STR);
                                    $resultado->bindParam(':regEmail', $regEmail, PDO::PARAM_STR);
                                    $resultado->bindParam(':regSenha', $regSenha, PDO::PARAM_STR);
                                    $resultado->execute();
                                    
                                    $contar = $resultado->rowCount();
                                    if($contar > 0){
                                        echo 'Usuário cadastrado com sucesso';
                                    }else{
                                        echo 'Não foi possível cadastrar o usuário';
                                    }
                                    
                                }catch(PDOException $erro){
                                    echo 'ERROR: '.$erro;
                                }
                            }
                            
                        }else{
                            echo 'As senhas não correspondem';
                        }
                    }
                    ?>
                    
                </form> 
			</div>
		</section>
		<!-- fim section corpo -->

		<!-- inicio footer -->
		<?php
			include("includes/footer.php"); //inclui o rodapé do site
		?>
		<!-- fim footer -->
	</body>
	<!-- inicio body -->
</html>