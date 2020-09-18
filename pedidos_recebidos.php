<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="css/pedidos_recebidos.css">
    <script type='text/javascript' lenguage='javascript' src="../JSs/style_table.js"></script>
    <title></title>
</head>
<body>

    <?php 
        require 'links.php';
        require 'sql.php';
        require 'verifica.php';
        
       
        if($_SESSION['category'] == 'Cliente'){

            $name = (string)$_SESSION['name'];
            $query = ("SELECT * FROM pedidos where nome_pedido = '$name'");
            


            
        }if($_SESSION['category'] == 'Fábrica'){

            $query = ("SELECT * FROM pedidos");
                        

        }
        
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
                            <th>PDFs</th>
                            <th>IMGs</th>
                            <th>CorewFiles</th>

                        </tr>";

            while($rest = mysqli_fetch_array($sql_send)){
                $_SESSION['ids_pedidos']  = $rest['Id_pedido'];
                echo "
                        <tr>
                            <td>"
                                
                                .$rest['Id_pedido']."
                            </td>
                            <td>"
                                .$rest['nome_pedido'].
                                "
                            </td> 
                            <td name='status_' value='".$rest['status_pedido']."'>
                                ".$rest['status_pedido']."
                            </td>

                            <td>
                            <a href=".$download."pdf_temp/".$rest['local_files_pedido']."><img src='/Fotos/pdf.png' width='30' height='30'></a>
                            </td>

                            <td>
                            <a href=".$download."file_image/".$rest['local_files_images']."><img src='/Fotos/image.png' width='30' height='30'></a>
                            </td>

                            <td>
                            <a href=".$download."file_corew/".$rest['local_file_corew']."><img src='/Fotos/corel.png' width='30' height='30'></a>
                            </td>
                         </tr>";
                    
                 

            }
            echo "</table>";

        }

    
    ?>

    
</body>
</html>