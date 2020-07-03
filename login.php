<?php
    $client = new MongoDB\Client(
        'mongodb+srv://mongoadmin:<password>@cluster0.qeq7i.gcp.mongodb.net/<dbname>?retryWrites=true&w=majority');
        $db = $client->test; 
        echo '<h1>'. $db.'<h1>';
?>