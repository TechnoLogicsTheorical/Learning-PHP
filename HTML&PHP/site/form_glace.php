<?php
    require_once 'include/functions_glace.php';
    $parfums = [
        'Fraise' => 4,
        'Chocolat' => 5,
        'Vanille' => 4,
    ];
    $cornets = [
        'Pot' => 2,
        'Cornet' => 3,
    ]; 
    $supplements = [
        'Pepites Choco' => 1,
        'Chantilly' => 0.5,
    ];
    $title = 'Composer votre glace';
    $ingredients = [];
    $total = 0;
    if (isset($_GET['parfums'])) {
        foreach ($_GET['parfums'] as $parfum) {
            if (isset($parfums[$parfum])) {
                $ingredients[] = $parfum;
                $total += $parfums[$parfum];
            }
        }
    }
    if (isset($_GET['supplements'])) {
        foreach ($_GET['supplements'] as $supplement) {
            if (isset($supplements[$supplement])) {
                $ingredients[] = $supplement;
                $total += $supplements[$supplement];
            }
        }
    }
    if (isset($_GET['cornets'])) {
        $cornet = $_GET['cornets'];
        if (isset($cornets[$cornet])) {
            $ingredients[] = $cornet;
            $total += $cornets[$cornet];
        }
    }
    require 'include/header.php';
    
?>

    <h1>Composer votre glace </h1>
    
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Récapitulatif de votre glace :</h5>
                    <ul>
                        <?php foreach($ingredients as $ingredient): ?>
                            <li><?= $ingredient ?></li>
                        <?php endforeach ?>
                        <strong><?= "Total à payer : $total  €" ?></strong>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <form action="/form_glace.php" method="GET">
                <h2>Choissez vos parfums : </h2>
                <?php foreach ($parfums as $parfum => $price): ?>
                    <div class="checkbox">
                        <label>
                            <?= createCheckBox('parfums', $parfum, $_GET); ?>
                            <?= "$parfum - $price €" ?>
                        </label>
                    </div>
                <?php endforeach ?>
                
                <h2>Choissez votre cornet :</h2>
                <?php foreach ($cornets as $cornet => $price): ?>
                    <label>
                            <?= createRadio('cornets', $cornet, $_GET); ?>
                            <?= "$cornet - $price €" ?>
                        </label>
                <?php endforeach ?>

                <h2>Choissez vos suppléments :</h2>
                <?php foreach ($supplements as $supplement => $price): ?>
                    <div class="checkbox">
                        <label>
                            <?= createCheckBox('supplements', $supplement, $_GET); ?>
                            <?= "$supplement - $price €" ?>
                        </label>
                    </div>
                <?php endforeach ?>
                
                <button class="btn btn-primary" type="submit">Composer</button>
            </form>
        </div>
    </div>
    
<?php //require('include/footer.php'); ?>