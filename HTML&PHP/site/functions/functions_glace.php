<?php
    function createCheckBox(string $nameChamp, string $valueChamp, array $data ) :string {
        $attributes = '';
        if (isset($data[$nameChamp]) && in_array($valueChamp, $data[$nameChamp])) {
            $attributes .= ' checked';
        }
        return <<<HTML
            <input type="checkbox" name="{$nameChamp}[]" value="$valueChamp" $attributes>
        HTML;
    }

    function createRadio(string $nameChamp, string $valueChamp, array $data ) :string {
        $attributes = '';
        if (isset($data[$nameChamp]) && $valueChamp == $data[$nameChamp]) {
            $attributes .= ' checked';
        }
        return <<<HTML
            <input type="radio" name="{$nameChamp}" value="$valueChamp" $attributes>
        HTML;
    }
?>