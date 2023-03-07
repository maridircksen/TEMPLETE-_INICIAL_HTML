<?php
// Definir as tags meta em variáveis PHP
$titulo = 'Mariana Dircksen';
$descricao = 'Página Inicial .';
$palavras_chave = 'exemplo de meta tags em PHP';

$html_meta = '<meta charset="UTF-8">'."\n";
$html_meta .= '<meta name="description" content="'.$descricao.'">'."\n";
$html_meta .= '<meta name="keywords" content="'.$palavras_chave.'">'."\n";
$html_meta .= '<meta name="author" content="Mariana Dircksen">'."\n";
//N<title>fazer
//O<?php echo $variavel; 

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php echo $html_meta; ?>
    <title><?php echo $titulo; ?></title>
</head>
<body>
    <h1><?php echo $titulo; ?></h1>
    <p><?php echo $descricao; ?></p>
    <p>Palavras-chave: <?php echo $palavras_chave; ?></p>
</body>
</html>