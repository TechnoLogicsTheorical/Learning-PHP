<?php 
    $numberFind = 150;
    $value = null;
    $error = null;
    $success = null;
    
    if (isset($_POST['value']))
    {
        $value = (int)$_POST['value'];
        if ($value > $numberFind) {
            $error = 'Votre chiffre est trop grand !';
        } elseif ($value < $numberFind) {
            $error = 'Votre chiffre est trop petit !';
        } else {
            $success = "Bravo, vous avez trouvé le bon chiffre ! $numberFind";
        }
    }

    require('include/header.php'); 
?>
<?php if ($error): ?>
    <div class="alert alert-danger">
        <?= $error ?>
    </div>
<?php elseif ($success): ?>
    <div class="alert alert-success">
        <?= $success ?>
    </div>
<?php endif ?>

    <form action="/form_chiffre.php" method="POST">
        <div class="form-group">
            <input class="form-control" type="number" name="value" placeholder="Entrez un chiffre entre 0 et 1000" autofocus value="<?php if(isset($value)):(int)$value; endif?>">
        </div>
        <button class="btn btn-primary" type="submit">Deviner</button>
    </form>
<?php require('include/footer.php'); ?>