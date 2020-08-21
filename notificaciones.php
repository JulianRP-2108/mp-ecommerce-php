Recibiendo notificaciones

<?php
    http_response_code(200);


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $myfile = fopen("notificacion.txt", "w+") or die("Unable to open file!");
        
        //$txt = file_get_contents('php://input');
        $json=json_encode($_POST);
        fwrite($myfile, $json);
        
        fclose($myfile);
        
        //$myfile2 = fopen("info2.txt", "w") or die("Unable to open file!");
        //$txt2 = "Entro al POST y paso despues de escribir el primer archivo.";
        //fwrite($myfile2, $txt2);
        //fclose($myfile2);
    }
    else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $myfile = fopen("notificacion.txt", "r") or die("No se puede leer el archivo!");
        //$txt = json_encode($_GET);
        $contenido=fread($myfile,filesize($myfile));
        var_dump($contenido);
        fclose($myfile);
    }

?>
