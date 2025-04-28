<?php

// dependencies
require_once('inc/config.php');
require_once('inc/api_functions.php');
//echo '<pre>';

//$results = api_request('status', 'GET');
//print_r($results);

//$results = api_request('statusx', 'GET');
//print_r($results);

//<?php

//$results = api_request('get_all_clients', 'GET');
//print_r($results);


//foreach($results['data']['results'] as $client)
//{
    //echo "Nome:" . $client['name'] . " <br>E-mail:". $client['email']." <br> Telefone:". $client['tel']. " <br> Criação: ". $client['created_at'].'<br><br>';
//}

//echo '<hr>';
//
//echo '<h3> Produtos</h3>';
//$results = api_request('get_all_products', 'GET');
//print_r($results);
//foreach($results['data']['results'] as $product)
//{
  //  echo "Produto: " . $product['produto'] . " <br>Quantidade: ". $product['quantidade']." <br> Criação: ". $product['created_at'].'<br><br>';
//}

?>


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./inc/css/style.css">
    <title>Loja</title>
</head>
<body>
<header class="header">    
        <a href="#" class="logo">Loja</a>
        <nav class="navbar">
        <a href="#clientes">Todos os clientes</a>        
        <a href="#produtos">Todos os produtos</a>          
        </nav>          
</header>
<section class="clientes" id="clientes">
    <div class="box">
        <h1 class="heading">Clientes Cadastrados</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Criação</th>
            </tr>
            <?php
            $results = api_request('get_all_clients', 'GET');?>
            <?php foreach($results['data']['results'] as $client) :?>
            <tr>
                <td><?=$client['id_cliente']?></td>
                <td><?=$client['nome']?></td>
                <td><?=$client['email']?></td>
                <td><?=$client['tel']?></td>
                <td><?=$client['created_at']?></td>
            </tr>
            <?php endforeach; ?>

        </table>
    </div>
</section>
<section class="produtos" id="produtos">
    <div class="box">
        <table>
            <tr>
                <th>ID</th>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Criação</th>
            </tr>
        </table>
        <?php
        $results = api_request('get_all_products', 'GET');
        foreach($results['data']['results'] as $product):
        ?>
        <tr>
            <td><?=$product['id_produto']?></td>
            <td><?=$product['produto']?></td>
            <td><?=$product['quantidade']?></td>
            <td><?=$product['created_at']?></td>
        </tr>
        <?php endforeach;?>    
    </div>
</section>   
<footer>
    <a href="https://github.com/RosaCL" target="_blank"><img
    src="./inc/img/costureza.png" alt=""></a>
</footer>
</body>
</html>