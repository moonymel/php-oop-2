<?php

    // DEFINISCO CLASSE PRODOTTO GENITORE
    class Product {
        public $title;
        public $price;

        public function __construct($_title, $_price){
            $this->title = $_title;
            $this->price = $_price;
        }
    }

    // DEFINISCO CLASSE CATEGORIA ANIMALI
    class Animal {
        public $name;
        public $icon;

        public function __construct($_name, $_icon) {
            $this->name = $_name;
            $this->icon = $_icon;
        }
    }


    // DEFINISCO CLASSE ITEM FIGLIA DI PRODUCT
    class Item extends Product {
        public $animal;
        public $type;
        public $image;

        function __construct($_title, $_price, Animal $_animal, $_type, $_image){
            parent::__construct($_title, $_price);
            $this->animal = $_animal;
            $this->type = $_type;
            $this->image = $_image;
        }
    }

    // DEFINISCO LE CATEGORIE DI ANIMALI
    $cani = new Animal('Cani', 'https://cdn-icons-png.flaticon.com/512/194/194279.png');
    $gatti = new Animal('Gatti', 'https://cdn-icons-png.flaticon.com/512/802/802404.png');
    $uccelli = new Animal('Uccelli', 'https://cdn-icons-png.flaticon.com/512/3520/3520480.png');
    $pesci = new Animal('Pesci', 'https://cdn-icons-png.flaticon.com/512/811/811643.png');

    // DEFINISCO GLI ITEM DELL'ECOMMERCE
    $item_1 = new Item('Royal Canin Mini Adult', 12, $cani, 'cibo', 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000');
    $item_2 = new Item('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 15, $cani, 'cibo', 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg');
    $item_3 = new Item('Almo Nature Cat Daily Lattina', 7, $gatti, 'cibo', 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg');
    $item_4 = new Item('Mangime per Pesci Guppy in Fiocchi', 4, $pesci, 'cibo', 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg');
    $item_5 = new Item('Voliera Wilma in Legno', 70, $uccelli, 'gabbie', 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg');
    $item_6 = new Item('Cartucce Filtranti per Filtro EasyCrystal', 10, $pesci, 'accessori', 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg');
    $item_7 = new Item('Kong Classic', 8, $cani, 'giochi', 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg');
    $item_8 = new Item('Topini di peluche Trixie', 4, $gatti, 'giochi', 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg');

    $items = [$item_1, $item_2, $item_3, $item_4, $item_5, $item_6, $item_7, $item_8];

        var_dump($cani);
        var_dump($item_1)

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>

<header>
    <div class="container">
        <div class="row justify-content-between py-3">
            <div class="col-6">
                Zoolean
            </div>
            <div class="col-6">
                questo è un menu bla bla bla
            </div>
        </div>
    </div>
</header>

<main>
    <div class="container">
        <div class="row my-3">

            <?php foreach($items as $item){ ?>
                <div class="col-3 my-3">
                    <div class="my_card">
                        <div class="preview">
                            <?php echo '<img src="'.$item->image.'">' ?>
                        </div>
                        <div class="title d-flex justify-content-between text-center">
                            <?php echo $item->title ?>
                            <div class="icon">
                                <?php foreach($item->animal as $animal) {
                                    echo '<img src="'.$animal->icon.'">';
                                } ?>
                            </div>
                        </div>
                        <div class="info">
                            Categoria: <?php echo $item->type ?><br>
                            Prezzo: <?php echo $item->price ?>€
                        </div>

                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</main>

    
</body>

</html>