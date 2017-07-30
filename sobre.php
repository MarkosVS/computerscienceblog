<?php
	include("includes/head.php"); //inclui o head quase completo do site
?>
		<title>Sobre - Sombia</title> <!-- muda o título do site -->
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
                <h2>Sobre Sombia:</h2>
                <div id="desc-couple">
                    <img src="img/sombia.jpg" title="Sombia" alt="Sombia" class="img-desc" id="img-sombia">
                    <p>Beatriz Vasconcelos e Marcos Vinicius Sombra<br>são um casal de namorados e alunos do 3º semestre do curso de Ciência da Computação da Universidade Estadual do Ceará (UECE). Juntos, criaram este blog (totalmente desenvolvido pelos mesmos) onde contam seu dia a dia como casal e como estudantes de Computação.</p><br>
                </div>
                
                <div class="desc-ind">
                    <img src="img/bia.jpg" title="Bia Vasconcelos" alt="Bia Vasconcelos" class="img-desc img-desc-ind">
                    <p><strong>Bia</strong> atualmente é bolsista do PET-Computação da UECE e já foi monitora da disciplina de Matemática Discreta. Batman nas horas vagas. Ama pizza, moda/maquiagem e solar todo mundo no lol. Também é conhecida como mulher mais linda do mundo.<br><br>
                    Redes sociais:<br>
                    <a class="socialmedia" href="https://www.facebook.com/biavasconceloss" target="_blank">Facebook</a> || <a class="socialmedia" href="https://www.github.com/QueenBia" target="_blank">Github</a></p>
                </div>
                
                <div class="desc-ind">
                    <img src="img/sombra.jpg" title="Marcos Sombra" alt="Marcos Sombra" class="img-desc img-desc-ind">
                    <p><strong>Marcos</strong> atualmente é membro do CAcomp UECE e já foi Trainee na Acens. Amante da mulher mais linda do mundo. Apaixonado por Harry Potter, Java, café e código. Ás vezes, entusiasta de divulgação científica.<br><br>
                    Redes sociais:<br>
                    <a class="socialmedia" href="https://www.facebook.com/maarkinvinicius" target="_blank">Facebook</a> || <a class="socialmedia" href="https://www.github.com/MarkosVS" target="_blank">Github</a></p>
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