<?php
	include("includes/head.php"); //inclui o head quase completo do site
?>
		<title>Sombia</title> <!-- muda o título do site -->
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
                <div id="posts">
                    <?PHP 
                        $sql = "SELECT * from posts WHERE exibir = 'Sim' ORDER BY id DESC LIMIT 3";
                        try{
                            $resultado = $conexao->prepare($sql);
                            $resultado->execute();
                            $cont = $resultado->rowCount();
                            if($cont > 0){
                                while($mostrar = $resultado->fetch(PDO::FETCH_OBJ)){
                                    ?>
                                    <div class="post">
                                        <h3><?PHP echo $mostrar->titulo ?></h3>
                                        <img alt="<?PHP echo $mostrar->titulo ?>" title="<?PHP echo $mostrar->titulo ?>" src="img/<?PHP echo $mostrar->img ?>">
                                        <p><?PHP echo limitarTexto($mostrar->texto, $limite = 500) ?> </p>

                                        <p>Publicado por <?PHP echo $mostrar->autor ?> em <?PHP echo $mostrar->data ?></p>
                                    </div>
                                    <?PHP
                                }
                            }else{
                                echo '<h2>Bem-vindos ao Blog Sombia :)</h2>';
                            }
                        }catch(PDOException $erro){
                            echo 'ERROR: '.$erro;
                        }
                    ?>
                    
                    
                    
                </div>  
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