<?php
    function createCreneauxHMTL(array $creneaux): string {
        if (empty($creneaux)){
            return 'Fermée';
        }
        $phrases = [];
        foreach($creneaux as $creneau)
        {
            $phrases[] = "de <strong>{$creneau[0]}h</strong> à <strong>{$creneau[1]}h</strong>";
        }
        return 'Ouvert ' . implode(" et ", $phrases);
    }

    function isOpenned(int $heure, array $creneaux) {
        // $heure = 10;
        foreach ($creneaux as $creneau) {
            $start = $creneau[0];
            $end = $creneau[1];
            if ($heure >= $start && $heure < $end) {
                return true;
            }
        }
        return false;
    }