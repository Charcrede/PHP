<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mon premier php</title>
    <style>
        body {
            font-size: 1.5rem;
        }
    </style>
</head>

<body>
    <p>Bienvenu !</p>
    <p>en <strong>PHP</strong>, toutes toutes les variables commencent par un <strong>"$"</strong></p>
    <article>
        <h2>la convention de nommage des variables en PHP </h2>
        <p>En PHP, le type d'une variables lui est assighé quand vous lui donnez une valeur. On utilise la fonction
            'var_dump()' pour avoir les informations concernant le type d'une variable</p>
        <ol>
            <li> toutes les variables commencent par un "$" qui se comporte comme un déclarateur</li>
            <li> le nom d'une variables doit être composer uniquement de caractères alpha-numérique et du "underscore"
                (_)</li>
            <li> le nom d'une varible ne doit pas commencer par un chiffre</li>
            <li> la déclaration de variables ainsi que toutes autres variables PHP se termine par un point virgole</li>
            </ul>
    </article>
    <article>
        <h2>Les type de variables en PHP</h2>
        <ol>
            <li> string</li>
            <li> number: regroupe tous les nombres: séparer en deux catégories: int et float</li>
            <li> boolean</li>
            <li> null</li>
            <li> array:
                <code>
                    $fruit = array("banane", "pomme")
                    $fruit2 = ["banane", "pomme"];
                </code>
            </li>
            <li> object:
                <code>
                    <pre>
                        class User{};
                        $u = new User();
                    </pre>
                </code>
            </li>
        </ol>
    </article>
    <section>
        <h2>PHP FIG</h2>
        <p><strong>Déclaration de variable : </strong> est un groupe de travail informel composé de développeurs et de
            projets open source qui travaillent dans l'écosystème PHP.</p>
        <p>L'objectif principal de PHP-FIG est de créer et de promouvoir des normes de codages e de conception communes
            pour les framewords et les bibliothèques PHP, afin de facilite l'interopérabilité entre differents projets
        </p>
        <p>En d'autres termes, PHP-FIG vise à étblir des recommandations et des standards pour que les diffents</p>
    </section>
</body>

</html>
<?php
#pour activer le mode strict de typage on utilise la directive declare(strict_types=1)
// declare(strict_types=1);
// echo ("Hello World!"); // une sorte de console.log();
// print("salut"); // pareil mais lui retourne 1 ou 0 en fonction de s'il reussit a affiché ou pas;
$user;
$firstname = "John";
$lastname = "Doe";
$animaux = ["chien", "chat", "loup"];
// la concaténation:
echo ($firstname . "  " . $lastname);
echo "<pre>";
print_r($animaux);
echo "</pre>";

// LES CONVERSIONS


$float = 3.14;
$int = (int) $float; // renvoie 3 est encore egal a $int = intval($float);
$string = (string) $float; // renvoie "3.14";
// var_dump($float);
// var_dump($int);
// var_dump($string);
$age = 12;
$day = 3;
// function alea($var = null){
//    $
// }
{
    # code...
}
if ($age < 18) {
    echo ("Vous êtes mineur");
} else if ($age > 18) {
    echo ("Vous êtes majeur");
} else {
    echo ("Vous avez 18ans");
}
$user = "la jument de michao";
switch ($day) {
    case '1':
        echo ("Nous sommes lundi");
        break;

    case '2':
        echo ("Nous sommes mardi");
        break;

    case '3':
        echo ("Nous sommes mercredi");
        break;

    case '4':
        echo ("Nous sommes jeudi");
        break;

    case '5':
        echo ("Nous sommes vendredi");
        break;

    case '6':
        echo ("Nous sommes samedi");
        break;

    case '7':
        echo ("Nous sommes dimanche");
        break;

    default:
        echo ("Toi maintenant est ce que nombre tu m'as mis là correspond à un jour de la semaine");
        break;
}

$a = 0;
while ($a < 10) {
    echo ($a . '<br>');
    $a++;
}
$fruit = ["pomme", "raisin", "banane"];
for ($i = 0; $i < count($fruit); $i++) {
    echo ($fruit[$i] . ', ');
}
$notes = ["Erféro" => 20, "Emile" => 17, "Alid" => 20];
foreach ($notes as $student => $note) {
    echo $student . " a une note de <strong>" . $note . "</strong> / 20 <br>";
}
function add(int $x, int $y): int
{
    return $x + $y;
}
echo add(4, 6);
// paramètres nommées
echo add(y: 8, x: 96);
class User
{
// private string $firstname;
// private string $lastname;
// private int $age;
// public function __construct(){
//     private string $firstname,
//     private string $lastname,
//     private int $age,
// }
}
$u = new User('John', 'Doe', 24);
echo "<pre>";
print_r($u);
echo "</pre>";
echo $u->getFirstname() . " " . $u->GetLastname();
?>