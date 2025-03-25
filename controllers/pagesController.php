<?php
require_once "controllers/utilities.php";
require_once __DIR__ . "/../models/user.php";


function homePage()
{

    $datas_page = [
        "description" => "page home",
        "title" => "page d'accueil",
        "view" => "views/homePage.php",
        // "content" => ob_get_clean(),
        "layout" => "views/components/layout.php",

    ];
    drawPage($datas_page);
}

function clientPage($divActive, $plus = "")
{
   $userss =  Crud::read();
    $datas_page = [
        "description" => "page des clients",
        "title" => "page clients",
        "view" => "views/clientsPage.php",
        // "content" => ob_get_clean(),
        "layout" => "views/components/layout.php",
        "divActive" => $divActive,
        "user" => $plus,
        "users" => $userss


    ];
    drawPage($datas_page);
}

function clientsPage()
{
    $divActive = 'div1';
    clientPage($divActive);
}

function modifierClient($cli)
{
    $codecli = crud::modify($cli);
    $divActive = 'div3';
    clientPage($divActive, $codecli);
}

function supprimerClient($cli)
{
    $divActive = 'div4';
    $user = ['codecli' => $cli]; // Passe un tableau associatif
    clientPage($divActive, $user);
}

function clientsPage2()
{
    $divActive = 'div2'; // Récupération du paramètre div
    clientPage($divActive);
}



function compteurRelevePage()
{

    $datas_page = [
        "description" => "page des compteur et relevé",
        "title" => "page de compteur et relevé ",
        "view" => "views/compteurRelevePage.php",
        // "content" => ob_get_clean(),
        "layout" => "views/components/layout.php",

    ];
    drawPage($datas_page);
}

function compteurPage($divActive, $plus = "")
{
    $compteurs =  Crudcompteur::read();
    $datas_page = [
        "description" => "page des compteur",
        "title" => "page Compteur",
        "view" => "views/compteurPage.php",
        // "content" => ob_get_clean(),
        "layout" => "views/components/layout.php",
        "divActive" => $divActive,
        "compteur" => $plus,
        "compteurs" => $compteurs


    ];
    drawPage($datas_page);
}

function compteursPage()
{
    $dicvActive = 'div1';
    compteurPage($dicvActive);
}

function modifierCompteur($compteur)
{
    $codecompteur = crud::modify($compteur);
    $divActive = 'div3';
    compteurPage($divActive, $codecompteur);
}

function supprimerCompteur($compteur)
{
    $divActive = 'div4';
    $compteur = ['codecompteur' => $compteur]; // Passe un tableau associatif
    clientPage($divActive, $compteur);
}
