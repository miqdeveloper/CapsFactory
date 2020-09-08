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
        require 'verifica.php';

        $query = ("SELECT * FROM pedidos");
        $sql_send = mysqli_query($con, $query)or die('ERROR --> PEDIDOS_RECEBIDOS.PHP');
        if (mysqli_num_rows($sql_send) < 1) {

            echo "<h1 id='n_pedido'>Nenhum pedido por aqui :)</h1>";
            
        }else {
                echo "
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Status</th>
                            <th>PDF DO CLIENTE</th>

                        </tr>";

            while($rest = mysqli_fetch_array($sql_send)){
                echo "
                        <tr>
                            <td>"
                                .$rest['Id_pedido']."
                            </td>
                            <td>"
                                .$rest['nome_pedido'].
                                "
                            </td> 
                            <td id='status_' value='".$rest['status_pedido']."'>
                                ".$rest['status_pedido']."
                            </td>

                            <td>
                            <a href='http://127.0.0.1:8080/pdf_temp/'".$rest['local_files_pedido'].">".$rest['local_files_pedido']."</a>

                            </td>

                         </tr>";
                    
                 

            }
            echo "</table>";

        }

    
    ?>

    
</body>
</html>