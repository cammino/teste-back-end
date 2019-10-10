<?php
include_once "Produto.php";

$str = file_get_contents('produtos.json');
$json = json_decode($str, true);

// converter json em objeto
foreach ($json['products'] as $index => $product) {

    $productObj[$index] = new Produto(
        $product['id'], 
        $product['name'], 
        $product['regular_price'],
        $product['special_price'],
        $product['sprecial_price_from'],
        $product['sprecial_price_tro'],
        $product['tier_prices']
    );
}

// "route"
$uri = $_SERVER['REQUEST_URI'];
$uriExp = explode("/",$uri);
$productCode = end($uriExp);


if ($productCode == "products" || $productCode == "" ) {

    // todos os produtos
    echo "Produtos:
    <ul>";
    foreach ($productObj as $product) {
        echo "<li>". $product->getName() . "</li>";
    }
    echo "</ul>";
    //echo '<pre>' . print_r($json, true) . '</pre>';


} else if ($productCode == "price") {

    // pega o id do produto
    $productCode = $uriExp[count($uriExp)-2];

    if ($_POST) {

        foreach ($productObj as $product) {
            if($product->getId() == $productCode) {

                $qty = $_POST['qty'];

                if (!is_numeric($qty)) {
                    http_response_code(412);
                    exit("Os valores informados não são válidos.");
                }

                $currentDate = date("Y-m-d"); 

                // preço regular
                $price = $product->getRegular_price();

                // preço especial dependendo da data
                if ($currentDate >= $product->getSprecial_price_from() && $currentDate <= $product->getSprecial_price_tro()) {
                    $price = $product->getSpecial_price();
                }

                // preço por quantidade
                $maiorQty = 0;
                foreach ($product->getTier_prices() as $tierPrice) {

                    if($tierPrice['qty'] > $maiorQty) {

                        $maiorQty = $tierPrice['qty'];

                        if ($qty >= $tierPrice['qty']) {
                            $price = $tierPrice['price'];

                            // preço especial menor que a qty requisitada
                            if($product->getSpecial_price() < $tierPrice['price']) {
                                $price = $product->getSpecial_price();
                            }
                        }
                    }
                }
        
                echo json_encode($price);

                http_response_code(201);
                exit("   Preço do produto");
                
            }
        }

    } else {
        http_response_code(400);
        exit("envie uma requisição POST - Ocorreu um erro desconhecido");
    }

} else {
    
    // 1 produto

    foreach ($productObj as $product) {
        if($product->getId() == $productCode) {
            echo "Produto:
            <ul>
                <li> Id: " . $product->getId() . "</li>
                <li> Nome: " . $product->getName() . "</li>
                <li> Preço: " . $product->getRegular_price() . "</li>
                <li> Preço especial: " . $product->getSpecial_price() . "</li>
                <li> data inicial do preço especial: " . $product->getSprecial_price_from() . "</li>
                <li> data final do preço especial: " . $product->getSprecial_price_tro() . "</li>
                <li> por quantidade: <ul> "; 
                foreach($product->getTier_prices() as $tierPrice){
                    echo "<li>quantidade: ". $tierPrice['qty'] ." </li>";
                    echo "<li>preço: ".$tierPrice['price']." </li>";
                }
                echo "</ul></li>
            </ul>";

        }
    }
}