<?php

require __DIR__ . '/../vendor/autoload.php';

$assetPath = '/assets/css/app.css';

echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Oriengo</title>
    <link rel="stylesheet" href="{$assetPath}">
</head>
<body>
    <h1>🚀 Oriengo Framework</h1>
    <p>Your journey to building fast, elegant PHP apps starts here.</p>
    <div class="tagline">~ Crafted for creators who love control ~</div>
    <blockquote style="margin-top: 20px; font-style: italic; color:  #FFFFFF;">
        “Born in the heart of Kenya, built for the pulse of Africa — Oriengo is where code meets culture.”
    </blockquote>
</body>

</html>
HTML;
