<?php
 /*
  pegar os dados que 
  vem do formulario 
  via METHOD='GET' */
  // metodos globais

    // $nome =  $_GET['nome'];
    // $cpf =  $_GET['cpf'];
    // $rg =  $_GET['RG'];

    $nome =  $_POST['nome'];
    $cpf =  $_POST['cpf'];
    $rg =  $_POST['RG'];

    // mostra
    echo "nome : " . $nome ;
    echo "<br>";
    echo "cpf : ". $cpf ;
    echo "<br>";
    echo "RG : " . $rg ;
    echo "<br>";
    echo "Email:" . $_POST['ema'];
    

    


?>
