<?php
    function createNavItem(string $link, string $title, string $attributeClass): string {
        $class = 'nav-item';
        if($_SERVER['SCRIPT_NAME'] === $link) {
            $class = $class .= ' active';
        }
        return <<<HTML
        <li class="$class">
            <a class="$attributeClass" href="$link">$title</a>
        </li>
        HTML;
    }

    function createNavMenu(string $attributeClass = ''): string {
        return
            createNavItem('/index.php','Accueil', $attributeClass) .
            createNavItem('/contact.php','Contact', $attributeClass);
    }