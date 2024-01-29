<?php 
include_once __DIR__ . '/models/category.php';
include_once __DIR__ . '/models/AnimalProduct.php';
include_once __DIR__ . '/models/BedsAndBaskets.php';
include_once __DIR__ . '/models/Food.php';
include_once __DIR__ . '/models/toy.php';

    $toys = [
        new Toy('1', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTG4QYPMEC47YxFQ-fjwT7Yhj4wZvSg7RvECw&usqp=CAU', 'Puppy', '1.50 euro', 'Ferplast', 'Fabric material', 'Fillable'),
        new Toy('2', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSA0VbMsHm_CwMPo4wtL7rDitM853phvlnsXg&usqp=CAU', 'Puppy', '4.50 euro', 'Ferplast','Fabric material', 'Fillable'),
    ];

    $food = [
        new Food ('1', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdH0FuPGRicE4MNkl9sZQQDVJ-HEESvPCQS2rDhH4H8gi8USi8op2SF46lA91SfgDgJLw&usqp=CAU', 'Adult', '5.75 euro', 'Fresh pet', 'Dry food'),
        new Food ('2', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRct3M-ak51ZrP99au3kP1_owwP5GNF8AoR5A&usqp=CAU', 'Adult', '4.25 euro', 'Instinct', 'Wet food')
        ]

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Product</title>
    <link rel="stylesheet" href="style/style.css">
    <!-- Boostrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        <h1 class="text-center p-4 bg-black text-white">Zoolean</h1>
    </header>
    <main class="container">
        <section class="row">
            <?php foreach ($toys as $toys) { ?>
                <div class="col-3 mb-4 mt-4">
                    <div class="card" >
                        <div class="card-body">
                            <img src="<?php echo $toys->imgUrl; ?>" class="card-img-top img-fluid" alt="image of the product">
                            <h6 class="card-subtitle mt-2">
                                <?php echo ($toys->getRangeAnimalCat()); ?>
                            </h6>
                            <p class="card-text mt-2">
                                <?php echo $toys->getPrice(); ?>
                            </p>
                            <p class="card-text">
                                <?php echo $toys->getProductType(); ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </section>
        <section class="row">
            <?php foreach ($food as $food) { ?>
                <div class="col-3 mb-4 mt-4">
                    <div class="card" >
                        <div class="card-body">
                            <img src="<?php echo $food->imgUrl; ?>" class="card-img-top img-fluid" alt="image of the product">
                            <h6 class="card-subtitle  mt-2">
                                <?php echo ($food->getRangeAnimalCat()); ?>
                            </h6>
                            <p class="card-text  mt-2">
                                <?php echo $food->getPrice(); ?>
                            </p>
                            <p class="card-text">
                                <?php echo $food->getType(); ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </section>
    </main>
</body>
</html>