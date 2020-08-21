Recibiendo notificaciones

<?php
    http_response_code(200);


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $myfile = fopen("info1.txt", "w") or die("Unable to open file!");
        /*
        $data = array(
            "id" => $_POST['id'],
            "type" => $_POST['type']
        );
        $txt = json_encode($data);
        */
        $txt = file_get_contents('php://input');
        fwrite($myfile, $txt);
        
        fclose($myfile);
        
        $myfile2 = fopen("info2.txt", "w") or die("Unable to open file!");
        $txt2 = "Entro al POST y paso despues de escribir el primer archivo.";
        fwrite($myfile2, $txt2);
        fclose($myfile2);
    }
    else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $myfile = fopen("info2.txt", "w") or die("Unable to open file!");
        $txt = json_encode($_GET);
        fwrite($myfile, $txt);
        fclose($myfile);
    }

    $myfile = fopen("info.txt", "w") or die("Unable to open file!");
    $txt = json_encode($_REQUEST);
    fwrite($myfile, $txt);
    fclose($myfile);


?>
