<?php

$products = [

    'Rose Essence' => [
        'price' => 650,
        'img' => 'p1.png',
        'desc' => 'A beautiful floral fragrance with a soft rose scent.'
    ],

    'Vanilla Dream' => [
        'price' => 700,
        'img' => 'p2.png',
        'desc' => 'A warm and sweet vanilla fragrance.'
    ],

    'Oud Royal' => [
        'price' => 900,
        'img' => 'p3.png',
        'desc' => 'A rich and elegant oud fragrance.'
    ],

    'Musk Noir' => [
        'price' => 750,
        'img' => 'p4.png',
        'desc' => 'A soft and luxurious musk fragrance.'
    ],

    'Jasmine Bloom' => [
        'price' => 680,
        'img' => 'p5.png',
        'desc' => 'A fresh fragrance inspired by jasmine flowers.'
    ],

    'Amber Gold' => [
        'price' => 850,
        'img' => 'p6.png',
        'desc' => 'A warm amber fragrance with a luxurious touch.'
    ]

];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>All Products - Scentora</title>

    <!-- Bootstrap -->
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/all.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <nav class="products_nav">

        <div class="logo">

            <i class="fa-solid fa-spray-can-sparkles"></i>

            Scentora

        </div>

        <!-- Responsive -->

        <input type="checkbox" id="menu">

        <label for="menu">

            <i class="fa-solid fa-bars"></i>

        </label>

        <ul>

            <li>
                <a href="index.php">Home</a>
            </li>

            <li>
                <a href="all_product.php">All Products</a>
            </li>

            <li>
                <a href="form.php">Account</a>
            </li>

        </ul>

    </nav>


    <div class="products_page">

        <h1>Our Perfumes</h1>

        <p class="products_text">
            Discover our beautiful collection of luxury fragrances.
        </p>


        <div class="container">

            <div class="row">

                <?php

                foreach ($products as $product => $values) {

                ?>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">

                        <div class="card" style="width: 18rem;">

                            <img
                                src="img/<?php echo $values['img']; ?>"class="card-img-top"alt="<?php echo $product; ?>">

                            <div class="card-body">

                                <h5 class="card-title">
                                    <?php echo $product; ?>
                                </h5>

                                <p class="card-text">
                                    <?php echo $values['desc']; ?>
                                </p>

                                <p>
                                    <?php echo $values['price']; ?> EGP
                                </p>

                                <a href="#" class="btn btn-primary">Buy Now</a>

                            </div>

                        </div>

                    </div>

                <?php

                }

                ?>

            </div>

        </div>

    </div>

</body>

</html>