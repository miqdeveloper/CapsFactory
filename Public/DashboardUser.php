<?php require 'verifica.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="css/DashboardUser_style.css">
    <link rel='stylesheet' href="css/reset.css">
    <link rel='stylesheet' href="css/bulma.css">
    
    <title>Painel</title>
</head>
<header>
<nav class="navbar level" role="navigation" aria-label="main navigation" style="background-color: #ffff;">
    <div class="navbar-brand">
        <a class="navbar-item" href="#">
            <h1 id='nav-title'>Olá, <?php echo $_SESSION['name'] ?><h1>
        </a>
    </div>

    <div class="level-right">
        <p class="level-item"><a class="button move-align is-primary" href='/newrequest.php'>Novo Pedido</a></p>

        <form action='#' method='POST'>
            <p class="level-item"><input type='submit'  name='exi'  class="button move-align is-primary" value='Sair'></input></p>
        </form>
    </div>
  </nav>
  <?php
            function exi(){
                session_destroy();
                echo"<script>location.reload();</script>";            
                
            }
        
            if(isset($_POST['exi'])){
                #echo "<script>location.reaload();</script>";
                exi();
            }
        ?>
 </header>
  
<body>
<?php 
        require 'sql.php';
        $query_p = "SELECT * FROM pedidos WHERE status_pedido = 'Pendente'";       
        $sql_query = mysqli_query($con, $query_p)or die("ERRO NO BANCO DE DADOS -> DASHBOARDUSER.PHP");
        $res = mysqli_num_rows($sql_query);
    ?>
    <div class='box' style=" background-color: rgb(209, 5, 5);">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="50" viewBox="0 0 50 60" style=" fill:#ffffff;">    <path d="M 25 2 C 12.309295 2 2 12.309295 2 25 C 2 37.690705 12.309295 48 25 48 C 37.690705 48 48 37.690705 48 25 C 48 12.309295 37.690705 2 25 2 z M 25 4 C 36.609824 4 46 13.390176 46 25 C 46 36.609824 36.609824 46 25 46 C 13.390176 46 4 36.609824 4 25 C 4 13.390176 13.390176 4 25 4 z M 23.800781 14.300781 C 23.500781 14.300781 23.400391 14.499219 23.400391 14.699219 L 23.400391 28.199219 C 23.400391 28.499219 23.600781 28.599609 23.800781 28.599609 L 26.099609 28.599609 C 26.399609 28.599609 26.5 28.399219 26.5 28.199219 L 26.5 14.699219 C 26.5 14.399219 26.299609 14.300781 26.099609 14.300781 L 23.800781 14.300781 z M 23.800781 32.300781 C 23.500781 32.300781 23.400391 32.499219 23.400391 32.699219 L 23.400391 35.300781 C 23.400391 35.600781 23.600781 35.699219 23.800781 35.699219 L 26.199219 35.699219 C 26.499219 35.699219 26.599609 35.500781 26.599609 35.300781 L 26.599609 32.699219 C 26.599609 32.399219 26.399219 32.300781 26.199219 32.300781 L 23.800781 32.300781 z"></path></svg>
        <h4 id="number"><?php echo $res;?></h4>
        <h6 id="fonts">Pendentes</h6>
    </div>

    <div class='box' style="background-color:  rgb(242, 138, 47);">
    <?php 
        require 'sql.php';
      
        $query_ep = "SELECT * FROM pedidos WHERE status_pedido = 'Produção'";        

        $sql_query = mysqli_query($con, $query_ep)or die("ERRO NO BANCO DE DADOS -> DASHBOARDUSER.PHP");
        $res_ep = mysqli_num_rows($sql_query);
    ?>
        <svg id="Layer_5" height="50" viewBox="0 0 70 70" style=" fill:#ffffff;" width="40" xmlns="http://www.w3.org/2000/svg"><g><path d="m54 22h-2v-2c0-1.105-.895-2-2-2h-2v-8h1c.552 0 1-.448 1-1v-2c0-.552-.448-1-1-1h-12.295c.19.634.295 1.305.295 2s-.105 1.366-.295 2h7.295v8h-2c-1.105 0-2 .895-2 2v2h-2c-4.418 0-8 3.582-8 8v2c0 4.079 3.055 7.438 7 7.931v-3.931c0-.047.012-.091.014-.137-1.73-.441-3.014-1.996-3.014-3.863v-2c0-2.209 1.791-4 4-4h6v2c0 1.105.895 2 2 2s2-.895 2-2v-2h6c2.209 0 4 1.791 4 4v2c0 1.867-1.284 3.422-3.014 3.863.002.046.014.09.014.137v3.931c3.945-.493 7-3.852 7-7.931v-2c0-4.418-3.582-8-8-8z"></path><path d="m49 39v-4h-6v4h2v-2h2v2z"></path><path d="m57 53v-4h-5-1v4h2v-2h2v2z"></path><path d="m35 53h2v-2h2v2h2v-4h-1-5z"></path><path d="m60 49h-1v6h-10v-6h-1c-.552 0-1 .449-1 1v10c0 .551.448 1 1 1h12c.552 0 1-.449 1-1v-10c0-.551-.448-1-1-1z"></path><path d="m44 49h-1v6h-10v-6h-1c-.552 0-1 .449-1 1v10c0 .551.448 1 1 1h12c.552 0 1-.449 1-1v-10c0-.551-.448-1-1-1z"></path><path d="m40 35c-.552 0-1 .449-1 1v10c0 .551.448 1 1 1h4 4 4c.552 0 1-.449 1-1v-10c0-.551-.448-1-1-1h-1v6h-10v-6z"></path><path d="m17 26c0-3.844-3.115-6.971-6.952-6.998l-.035-.001v-.001c-.005.001-.009 0-.013 0-3.859 0-7 3.14-7 7s3.141 7 7 7 7-3.14 7-7zm-11 0c0-2.209 1.791-4 4-4s4 1.791 4 4-1.791 4-4 4-4-1.791-4-4z"></path><path d="m23.333 10.128-10.583 7.305c2.514.809 4.549 2.693 5.558 5.11l7.861-8.692c-1.328-.872-2.343-2.181-2.836-3.723z"></path><path d="m7.124 34.521 3.689 15.19 9.345 1.402-4.924-17.805c-1.477 1.06-3.281 1.692-5.234 1.692-1.006 0-1.971-.173-2.876-.479z"></path><path d="m35 8c0-2.757-2.243-5-5-5s-5 2.243-5 5 2.243 5 5 5 5-2.243 5-5zm-7 0c0-1.105.895-2 2-2s2 .895 2 2-.895 2-2 2-2-.895-2-2z"></path><path d="m22.445 53.478-1.591-.239-.1.028-.012-.045-13.742-2.061v9.839h18v-4.555c0-1.497-1.074-2.745-2.555-2.967z"></path></g></svg>
        <h4 id="number"><?php echo $res_ep; ?></h4>
        <h6 id="fonts">Em produção</h6>
    </div>


    <div class='box' style="background-color:  rgb(2, 180, 56);">

        
        <?php   
            
            require 'sql.php';

            $query_c =  "SELECT * FROM pedidos WHERE status_pedido = 'Concluido'";     

            $sql_query = mysqli_query($con, $query_c)or die("ERRO NO BANCO DE DADOS -> DASHBOARDUSER.PHP");
            $res_c = mysqli_num_rows($sql_query);
        ?>

        <svg id="Capa_1" height="50" viewBox="0 0 512 512"  style=" fill:#ffffff;" width="40" xmlns="http://www.w3.org/2000/svg"><g id="_x3C_Group_x3E__28_"><path d="m376 60v60h-240v-60h-75v452h390v-452zm-225 397.21-40.61-40.6 21.22-21.22 19.39 19.4 49.39-49.4 21.22 21.22zm0-90-40.61-40.6 21.22-21.22 19.39 19.4 49.39-49.4 21.22 21.22zm0-90-40.61-40.6 21.22-21.22 19.39 19.4 49.39-49.4 21.22 21.22zm240 143.79h-150v-30h150zm0-90h-150v-30h150zm0-90h-150v-30h150z"/><path d="m286 30c0-16.569-13.43-30-30-30-16.569 0-30 13.43-30 30-7.259 0-52.693 0-60 0v60h180c0-7.259 0-52.693 0-60-7.259 0-52.693 0-60 0z"/></g></svg>
        <h4 id="number"><?php echo $res_c;?></h4>
        <h6 id="fonts">Concluidos</h6>
    </div>

     <iframe id='iframe_' src='<?php echo $request; ?>'></iframe>
</body>
</html>