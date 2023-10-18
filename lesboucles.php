<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="style-grid.css">
    <title>Document</title>
</head>

<!--structures de boucles 
les stuctures conditionnnes . 
ternaires--> 
<!---LES STRUCTURES DE CONTROLE EN PHP--> 
<!--permettent d'exécuter des blocs en fonction d'une condition qui doit 
être vérifiée. On distingue les structures conditionnells (ou tests) et les 
if.. 
if, .else et elseif ou switch et les ternaires-->
<body>

<header>
    <nav>
        <a href="#">Presentation</a>
        <a href="#">Contact</a>
        <a href="#">Accueil</a>
    </nav>
</header>
<main>
    <div class="content">
        <h1>Les Boucles</h1>
        <!-- Elles permettes d'exécuter plusieurs fois desblocs de code en fonction de la valeur d'une variable
        On distingue, les boucles while, for, foreach -->
<?php

// La boucle while
//Elle éxecute un bloc de ligne tant que la condition est vraie.
echo "<br>"
;$a=1;
// tant que la variable est inférieur à 10
while($a<=10){
    echo "<p>La valeur est : $a </p><br>";
    //j'incrémente la valeur de a
    $a++;
};
/*Notion d'incrémentation décrémentation*/
echo '<br>';
echo "<h1>Notion d' incrémentation décrémentation</h1>";
echo '<br>';
$x=20;
$y=12;
echo "<p>".$x."<p><br>";
echo $y.'<br>';
$x++;//incrémentation
$y--;//décrémentation
echo "<p>la variable $x est incrémentée et vaut : ".$x."</p>";
echo'<br>';
echo "<p> et $y est décrémentée et vaut maintenant : ".$y."</p>";


echo "<br> <br>";
// Je définis l'environnement en français
echo "<h1>BOUCLE DO WHILE</h1>"."<br>";

setlocale(LC_TIME, ['fr','fra','french']);
//j'initialise une variable
$nombre = 0;
//faire
do{
    //je récupère la date du jour avec un formatage et le nombre du jour
    $d1 = date("d/m/Y",strtotime('+'.$nombre.'days'));
    //j'affiche la date
    echo "<p>" . $d1."</p>";
    //j'incremente la variable
    $nombre++;
}
// tant que la variable est inferieur ou égale à 15
while($nombre <=15);

// La boucle for

// Elle indique de répéter une action un certain nombre de fois en fonction de la valeur d'un pointeur.
// La structure possède trois paramètres:
//Un début, un test et une incrémentation qui s'effectue à la fin de chaque passage dans la boucle.
echo "<h1>BOUCLE FOR</h1><br>";
for($p=0; $p<=5; $p++){
    echo "<p>Je dis bonjour avec la boucle de for : ".$p."<br></p>";
}

// La boucle foreach

echo"<br><br>";
echo"<h1>BOUCLE FOREACH</h1>";
$T["Janvier"]="école";
$T["Septembre"]="vacances";
foreach($T as $mois =>$region){
    echo "<p> $mois ==>".".$region.</p><br>";
}











?>
    </div>
</main>

<footer>
    <div>Text</div>
    <div>&copy;DWWM 2023</div>
</footer>
<script src="script.js"></script>
    <!-- Les Tests PHP -->
   
</body>
</html>