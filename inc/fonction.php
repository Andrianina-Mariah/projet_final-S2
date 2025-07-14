<?php

session_start(); 


function dbconnect()
{
    static $connect = null;
    if ($connect === null) {
        $connect = mysqli_connect('localhost', 'root', '', 'emprunt_exam_s2');
        // $connect = mysqli_connect('localhost', 'ETU004190', '', 'emprunt_exam_s2');
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
    $sql = sprintf("Select o.nom_objet, c.nom_categorie from 
    emprun_categorie_objet c join emprunt_objet o on o.id_categorie = c.id_categorie
    where c.nom_categorie = '%s'",$cate);

    $resultat=mysqli_query($bdd,$sql);

    return resultat;
}
?>