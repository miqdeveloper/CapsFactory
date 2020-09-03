<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="css/pedidos_recebidos.css">
    <title></title>
</head>
<body>

    <?php 
        require 'links.php';
        require 'sql.php';

        $query = ("SELECT * FROM pedidos");
        $sql_send = mysqli_query($con, $query)or die('ERROR --> PEDIDOS_RECEBIDOS.PHP');
        if (mysqli_num_rows($sql_send) < 1) {

            echo "<h1 id='n_pedido'>Nenhum pedido por aqui :)</h1>";
            
        }else {
            echo "";
        }

    
    ?>

    
</body>
</html>