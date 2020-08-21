Recibiendo notificaciones

<?php
    http_response_code(200);

    // SDK de Mercado Pago
    require __DIR__ .  '/vendor/autoload.php';

    // Agrega credenciales
    MercadoPago\SDK::setAccessToken('APP_USR-894658496562814-061920-4c4e8dedca24e63d3e92cda4c1e5df8e-562339626');

    try {
        //code...
        mail(
            "rodriguezpetzjulian@gmail.com",
            "json",
            json_encode($_POST)
        );
    } catch (\Throwable $th) {
        echo("Ocurrio un error");
        var_dump($th);
    }

?>
