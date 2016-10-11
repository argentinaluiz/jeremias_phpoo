<?php

require_once __DIR__.  "/../vendor/autoload.php";

require_once '../public/html/header.php';
require_once '../public/html/menu.php';

//include_once '../src/JCS/Ola.php';
//JCS\Ola::mundo();
?>

                                     
<div id="conteudo">
	<?php
	 if(!isset($_GET['page']))/*Na 1° versão desse código foi usado o <PHP if(!$_GET['page'])..*/
	require_once("../public/html/home.php");
	else
	require_once($_GET['page'].".php");/*Concatenação usando o (.)Ponto - Ele fala pra navegação.
         * menu caso exista uma página .php sem ser a home.php! Então mostre ela aqui concatenando. */
	?>
</div>
<?php  require_once("../public/html/footer.php");?>


