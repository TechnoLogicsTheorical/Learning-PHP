<?php
    function dumpInHTML($variable,string $message = "DEBUG") {
        echo '<pre>';
        echo "$message <br>";
        echo var_dump($variable);
        echo '</pre>';
    }