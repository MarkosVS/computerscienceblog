<nav id="navMenu">
			<ul id="listMenu">
				<li><a href="index.php">Home</a></li>
				<li><a href="projetos.php">Projetos</a></li>
				<li><a href="sobre.php">Sobre</a></li>
                
                <?PHP
                    if(!isset($_SESSION['emailsombia']) && (!isset($_SESSION['senhasombia']))){ // só aparece esse menu se não houver uma session
                ?>
                        <li><a href="login.php">Entrar / Registrar</a></li>
                <?PHP
                    }
                    if(isset($_SESSION['emailsombia']) && (isset($_SESSION['senhasombia']))){ //só aparecem esses menus se houver uma session ativa
                    
                ?>
                        <li><a href="?sair"><?PHP echo $nomeLog;?> (Sair)</a></li>
                <?PHP
                    }
                ?>
			</ul>
		</nav>