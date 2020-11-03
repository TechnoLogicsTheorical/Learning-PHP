<?php
    $title = "Nous contactez";
    require_once 'include/config.php';
    require_once 'functions/basic_functions.php';
    require_once 'functions/functions_contact.php';
    require_once 'include/header.php';

    $opened = isOpenned( (int)date('H'), CRENEAUX[(int)date('N') - 1]);
    $color = $opened ? 'green' : 'red';
?>

<div class="row">
    <div class="col-md-8">
        <h2>Nous contactez</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda ducimus consequuntur eos molestias libero laboriosam sapiente iusto quae illum, dolorem quo quod magni quaerat corporis aperiam nulla incidunt, accusamus deleniti!</p>
        
        
    </div>
    <div class="col-md-4">
        <h2>Horaires d'ouvertures :</h2>
        <!-- <h2>Quand souhaitez vous venir ?</h2> -->
        <form action="" method="GET">
            <div class="form-group">
                <select name="day" class="form-control">
                    <option value="" selected disabled hidden>Choissiez un jour</option>
                    <?php foreach(JOURS as $key => $jour): ?>
                        <option value="<?= $key ?>"><?= $jour ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
            <input class="form-group" type="number" name="hour" placeholder="Entre un chiffre" value="<?= (int)$_POST['hour'] ?>" min="0" max="23">
            </div>
            <button type="submit" class="btn btn-primary">Vérifier</button>
        </form>
        <?php if($opened) :?>
            <div class="alert alert-success">Le magasin est ouvert !</div>
        <?php else:?>
            <div class="alert alert-danger">Le magasin est fermée !</div>
        <?php endif ?>
        <ul>
            <?php foreach(JOURS as $key => $jour) :?>
                <li <?php if((int)date('N') === $key+1 ) : ?> style="color:<?= $color ?>;" <?php endif?>>
                    <?= "<b>$jour</b>: " . createCreneauxHMTL(CRENEAUX[$key]); ?>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>

<?php //require_once 'include/footer.php'; ?>
