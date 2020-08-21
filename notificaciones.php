Recibiendo notificaciones

<?php
   http_response_code(200);


   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       $myfile = fopen("notificacion.txt", "w+") or die("Unable to open file!");
       
       $txt = file_get_contents('php://input');
       fwrite($myfile, $txt);
       
       fclose($myfile);

   }
   else if ($_SERVER['REQUEST_METHOD'] == 'GET') {
       $myfile = fopen("notificacion.txt", "r") or die("No se puede leer el archivo!");

       $contenido=fread($myfile,filesize($myfile));
       var_dump($contenido);
       fclose($myfile);
   }
    
?>
