<?php

session_start(); 


function dbconnect()
{
    static $connect = null;
    if ($connect === null) {
        $connect = mysqli_connect('localhost', 'root', '', 'emprunt_exam_s2');
        // $connect = mysqli_connect('localhost', 'ETU004190', '', 'db_s2_ETU004190');
        if (!$connect) {    
            die('Erreur de connexion à la base de données : ' . mysqli_connect_error());
        }
        mysqli_set_charset($connect, 'utf8mb4');
    }
    return $connect;
}

function get_objet()
{
    $bdd = dbconnect();    
    $resultat=mysqli_query($bdd , 'select * from v_emprunt_objet');
    return $resultat;
}

function filtre_cat($cate)
{
    $bdd = dbconnect();
    $cate = mysqli_real_escape_string($bdd, $cate);

    $sql = "SELECT * FROM v_emprunt_objet c
            JOIN emprunt_categorie_objet o ON o.id_categorie = c.id_categorie
            WHERE c.id_categorie = '$cate'";

    $resultat = mysqli_query($bdd, $sql);
    return $resultat;
}
function get_categ()
{
    $bdd = dbconnect();    
    $sql = sprintf("Select * from emprunt_categorie_objet;");

    $resultat=mysqli_query($bdd,$sql);

    return $resultat;

}
function get_membre($mail)
{
    $bdd = dbconnect();
    $sql = sprintf("SELECT * FROM emprunt_membre WHERE email = '%s'", $mail);
    $resultat = mysqli_query($bdd, $sql);
    $ret = mysqli_fetch_assoc($resultat);
    return $ret;
}
?>