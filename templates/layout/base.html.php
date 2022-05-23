
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="<?= $constantes::WEB_ROOT."bootstrap/dist/css/bootstrap.min.css"?>">
    <title>Document</title>

</head>
<body>
<?php

if($_SERVER["REQUEST_URI"]!=="/login"){
    require_once("navbar.html.php");
}

?>

<?=$content_for_views ?>

<script src="<?= $constantes::WEB_ROOT."bootstrap/dist/js/bootstrap.min.js"?>"></script>

</body>
</html>