<?php

// dependencies
require_once('inc/config.php');
require_once('inc/api_functions.php');
//echo '<pre>';

//$results = api_request('status', 'GET');
//print_r($results);

//$results = api_request('statusx', 'GET');
//print_r($results);



?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./inc/css/style.css">
    <title>Document</title>
</head>
<body>
    
        <h1>Loja</h1>
<div class="box">

Clientes
<?php

$results = api_request('get_all_clients', 'GET');
//print_r($results);


foreach($results['data']['results'] as $client)
{
    echo "Nome:" . $client['name'] . " <br>E-mail:". $client['email']." <br> Telefone:". $client['tel']. " <br> Criação: ". $client['created_at'].'<br><br>';
}

echo '<hr>';
?>
</div>

<?php
echo '<h3> Produtos</h3>';
$results = api_request('get_all_products', 'GET');
//print_r($results);
foreach($results['data']['results'] as $product)
{
    echo "Produto: " . $product['produto'] . " <br>Quantidade: ". $product['quantidade']." <br> Criação: ". $product['created_at'].'<br><br>';
}
?>
    
    
</body>
</html>