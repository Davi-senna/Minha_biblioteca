<?php

$nome = "container";

if(!is_dir($nome)){

    mkdir($nome);
    echo "O diretório $nome foi criado com sucesso";

}//else{
//     echo "O diretório $nome já existe <br>";
//     rmdir($nome);
//      echo "e agora foi removido";
// }



// $images = scandir("images");

// $data = array();

// foreach ($images as $img) {

//     if (!in_array($img, array(".", ".."))) {

//         $filename = "images" . DIRECTORY_SEPARATOR . $img;

//         $info = pathinfo($filename);

//         $info["size"] = filesize($filename);
//         $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
//         $info["url"] = "http://localhost/DIR/".str_replace("\\", "/", $filename);

//         array_push($data, $info);

//     }

// }

// echo json_encode($data);

$file = fopen("container".DIRECTORY_SEPARATOR."teste.php","a+");

// fwrite($file,"teste");
$ex = fgets($file);
var_dump($ex);
fclose($file);

function delete(){
    unlink("container".DIRECTORY_SEPARATOR."teste.txt");
}
 

?>