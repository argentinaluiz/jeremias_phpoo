<?php

chdir(dirname(__DIR__));
require_once "vendor/autoload.php";

require_once 'public/html/header.php';
require_once 'public/html/menu.php';


?>

                                     
<div id="conteudo">
	<?php
	 if(!isset($_GET['page']))/*Na 1° versão desse código foi usado o <PHP if(!$_GET['page'])..*/
	require_once("public/html/home.php");
	else
	require_once("src/JCS/{$_GET['page']}.php");/*Concatenação usando o (.)Ponto - Ele fala pra navegação.
         * menu caso exista uma página .php sem ser a home.php! Então mostre ela aqui concatenando. */
	?>
</div>
<?php  require_once("public/html/footer.php");?>


