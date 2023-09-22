<?php

/* Configuracion de las url en caso de Mac o Windos */
function getFolderProject(){
  if (strpos(__DIR__, '/') !== false) {
      $root = str_replace('/opt/lampp/htdocs/', '/', __DIR__);
    } else {
      $root = str_replace('C:\\xampp\\htdocs\\', '/', __DIR__);
    }
    $root = str_replace('config', '', $root);
    return $root;
}

/* function saveImage($Files)
{
    $files_name = str_replace(' ', '', $files['Image']['name']);
    $files_tmp = $files['image']['tmp_name'];

    move_uploaded_file($files_tmp, $_SERVER['DOCUMENT_ROOT'] . getFolderProject() . '/images/' . $files_name);
    return $files_name;


} */

?>