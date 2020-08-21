<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda e-commerce</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div>
            <h2>Pago exitoso!</h2>
        </div>
    
        <div class="container">
            <img src="assets/success.png" alt="">
        </div><br>
        
        <div class="container">
            <label for="">Payment method ID: <?php echo($_GET['payment_type']) ?></label><br>
            <label for="">External Reference: <?php echo($_GET['external_reference'])?></label><br>
            <label for="">Id del pago: <?php echo($_GET['collection_id'])?></label> <br>
        </div>
    </div>
</body>
</html>