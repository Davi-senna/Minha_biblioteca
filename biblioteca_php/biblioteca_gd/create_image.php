<?php

header("Content-Type: image/png"); // Define o tipo de arquivo

$img = imagecreate(500, 500); // cria a imagem passando o tamanho como parâmetros em pixels

$black = imagecolorallocate($img, 0, 0, 0); // criando uma cor
$blue = imagecolorallocate($img, 0, 0, 255);

imagestring($img, 5, 100, 100, "Testando", $blue); // criando um texto

imagepng($img); // renderizando a imagem

imagedestroy($img); // destruindo a variavel de construção para não gastar memória
