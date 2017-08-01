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
                <form class="form-horizontal" id="form-login" method="post">
                    <h2>Entrar</h2><br>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">E-mail</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="E-mail" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Senha" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Entrar</button>
                        </div>
                    </div>
                </form>
                
                <br>
                <form class="form-horizontal" id="form-login" method="post">
                    <h2>Registrar</h2><br>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Nome" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">E-mail</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="E-mail" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Senha" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Senha" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Registrar</button>
                        </div>
                    </div>
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