<?php
/*$personne=array($nom,$prenom)

if (isset($_POST['saisie[prenom]'])&& !empty($_POST['saisie[prenom]'])) {
    foreach($_POST as $index=>$valeur){
        echo $index;
    }
}
/*elseif (isset($_POST['nom2'])&& !empty($_POST)) {
    echo $_POST['nom2'];
}*/
// if (isset($_POST['nom'])&& !empty($_POST)) {
    /*foreach($_POST as $index=>$valeur){*/
        // echo $_POST['nom'];
    /*}*/
// }
// else {
//     echo "Nom inconnu";
// } 

//--- Début Exercice
//Affichage Nom
if (isset($_POST['nom'])&& !empty($_POST['nom'])) {
    echo "nom= ".$_POST['nom'];
} else {
    echo "Nom inconnu";
}
echo "<br>";
//Affichage mot de passe

if (isset($_POST['mot_de_passe'])&& !empty($_POST['mot_de_passe'])) {
    echo "mdp= ".$_POST['mot_de_passe'];
} else {
    echo "Mdp inconnu";
}
echo "<br>";
//Affichage sexe
if (isset($_POST['sexe'])&& !empty($_POST['sexe'])) {
    echo "mdp= ".$_POST['sexe'];
} else {
    echo "sexe inconnu";
}
echo "<br>";
//Affichage fichier
if (isset($_POST['photo'])&& !empty($_POST['photo'])) {
    echo "photo= ".$_POST['photo'];
} else {
    echo "photo introuvable";
}
echo "<br>";
//Affichage couleurs
function couleurCafe(){
  foreach ($_POST['couleurs'] as $key => $value) {
        echo $key." = ".$value." ";
    }  
};
if (isset($_POST['couleurs'])&& !empty($_POST['couleurs'])) { 
    echo "couleurs: ";
    echo "<br>";
    couleurCafe();   
} 
else {
    echo "couleur non selectionnée";
}
echo "<br>";
//Affichage couleurs
if (isset($_POST['langue'])&& !empty($_POST['langue'])) { 
    echo "langue= ".$_POST['langue'];   
} 
else {
    echo "couleur non selectionnée";
}
echo "<br>";
//Affichage couleurs
