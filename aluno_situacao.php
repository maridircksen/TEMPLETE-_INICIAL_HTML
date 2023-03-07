<?php

$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];
$nota3 = $_GET['nota3'];
$nota4 = $_GET['nota4'];

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

 if ($media >= 6){
      echo 'Situação: Aprovado' ;
      
  } else{
      echo 'Situação: Reprovado';
  }

  ?>