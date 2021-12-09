<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <title><?=isset($title) && $title != null ? $title . " - " : ""?>Acceuil</title>
</head>

<body>
<div id="contentForm"></div>
<header id="header-body">
    <h1>Mes SVG</h1>
</header>

<main>
    <?=$content?>
</main>

<footer id="footer-body">
</footer>
</body>

</html>