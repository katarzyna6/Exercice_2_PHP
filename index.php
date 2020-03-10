<?php

date_default_timezone_set("Europe/Paris");
echo date("D-Y-m-d H:i:s");




$indice = isset($_GET['numero'])? $_GET['numero'] : 0 ;
 
$page1 = ["Entrées", "img/entree.jpg", "Ut at mollis lacus, vel porta metus. Donec varius purus nibh, vel varius felis mollis nec. Mauris gravida massa sodales felis molestie venenatis eget sed urna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ligula justo, egestas at pulvinar a, dictum vel nisl. Vivamus faucibus fermentum eros. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>" ];

$page2 = ["Plats", "img/plat.jpg", "<p>Vivamus at lorem a tellus tempor dapibus eu at lorem. Mauris pulvinar mauris porta semper dapibus. Aenean ornare dui vel lectus finibus sagittis. Integer non magna a eros mollis blandit suscipit id erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam malesuada fermentum vehicula. Vestibulum vitae consequat odio. Nulla varius dui at euismod auctor.</p>", "<p>Vivamus at lorem a tellus tempor dapibus eu at lorem. Mauris pulvinar mauris porta semper dapibus. Aenean ornare dui vel lectus finibus sagittis. Integer non magna a eros mollis blandit suscipit id erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam malesuada fermentum vehicula. Vestibulum vitae consequat odio. Nulla varius dui at euismod auctor.</p>" ];

$page3 = ["Desserts", "img/dessert.jpg", "<p>Ut nibh risus, placerat vel lectus a, posuere elementum felis. Fusce a ligula lectus. Donec tincidunt tortor diam, sed egestas leo placerat vitae. Praesent viverra tristique massa eget sodales. Nulla facilisi. Aliquam erat arcu, molestie eu sapien eget, rhoncus egestas risus. Proin vitae feugiat massa. Duis orci nisi, pharetra eu aliquam a, porta eget nunc.</p>" ];

$pages = [$page1, $page2, $page3];
$size = sizeof($pages);
$menu = "";
$titres = ["Entrées", "Plats", "Desserts"];

for($i = 0; $i < $size; $i ++) {
    $menu .="<li><a href='index.php?numero=$i'> $titres[$i] "."</a></li>";
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Premiers pas_PHP_2</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Les recettes</h1>
    <!--- <ul>
        <li><a href="entrees.php">Les entrées</a></li>
        <li><a href="plats.php">Les plats</a></li>
        <li><a href="desserts.php">Les desserts</a></li>
    </ul> -->

<p><?= $menu ?></p>

<nav>
    <div class="titre"><?= $pages[$indice][0] ?></div>
    <div><img src="<?= $pages[$indice][1] ?>" alt=""/></div>
    <div><?= $pages[$indice][2] ?></div>
</nav>

</body>
</html> 