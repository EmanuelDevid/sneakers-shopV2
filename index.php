<?php

include_once "./php/conexao.php";

//pegando os dados de todos os tênis
$stmt = $conexao->prepare("SELECT * FROM tenis");
if($stmt->execute()){
    $retorno = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sneakers Shop</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700;900&display=swap" rel="stylesheet"> 
    
    <link rel="stylesheet" href="./styles/global.css">
    <link rel="stylesheet" href="./styles/index.css">
</head>
<body>
    <header>
        <img class="logo" src="./assets/images/sneaker-logo.png" alt="logo da loja">

        <form class="search-form" action="" method="POST">
            <input type="text">
            <button class="submit-btn" type="submit">
                <img src="./assets/icons/magnifying-glass.png" alt="icone do botao de pesquisa">
            </button>
        </form>

        <img class="icon" src="/assets/icons/shopping-cart.png" alt="icone do carrinho">

        <nav class="navigator">
            <a href="#">AIR JORDAN</a>
            <a href="#">NIKE</a>
            <a href="#">YEZZY</a>
        </nav>
    </header>

    <section class="section">
        <div class="products-grid">
            <?php foreach ($retorno as $tupla) {
                $nomeProduto = $tupla['nome'];
                $preco = $tupla['preco'];
            ?>
                <div class="product-card">
                    <img class="product-img" src="./assets/images/boost350.png" alt="imagem do produto">
                    <h3 class="product-name"><?php echo $nomeProduto ?></h3>
                    <span><strong>R$ </strong><?php echo $preco ?></span>
                    <button class="details-btn">VER MAIS</button>
                </div>
            <?php } ?>
        </div>
    </section>
    
</body>
</html>