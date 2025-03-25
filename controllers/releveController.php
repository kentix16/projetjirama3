<?php
require_once __DIR__ ."/../models/releveEau.php";

class Releve_Eau{
    public static function create(){
        $releve_eauModel = new Eau();
        $db = $releve_eauModel->getDatabase();
        $sql = 'INSERT INTO releve_eau(codeEau,codecompteur,valeur2,date_releve2,date_presentation2,date_limite_paie2) VALUES("$_POST[codeEau]","$_POST[codecompteur]","$_POST[valeur2]","$_POST[date_releve2]","$_POST[date_presentation2]","$_POST[date_limite_paie2]")';
        $result = $db->query($sql);

    
    }
    public static function read(){
        $releve_eauModel = new Eau();
        $db = $releve_eauModel->getDatabase();
        $sql = 'SELECT * FROM releve_eau';
        $result = $db->query($sql)->fetch_all();
    }
    public static function modify($codeEau)
    {
        $eauModel = new Eau();
        /*   $db = $userModel->getDatabase();*/
        return $eauModel->getReleveEau($codeEau); // ✅ Retourne l'utilisateur
    }

    public static function update(){
        $releve_eauModel = new Eau();
        $db = $releve_eauModel->getDatabase();
        $sql = 'UPDATE FROM releve_eau SET codecompteur="$_POST[codecompteur]",
        valeur2="$_POST[valeur2]",date_releve2="$_POST[date_releve2]",
        date_presentation2="$_POST[date_presentation2]",date_limite_paie2="$_POST[date_limite_paie2]"
         WHERE codeEau="$_POST[codeEau]"';
        $result = $db->query($sql);
    }
    public static function delete(){
    $releve_eauModel = new Eau();
    $db = $releve_eauModel->getDatabase();
    $sql = 'DELETE FROM releve_eau WHERE codeEau="$_POST[codeEau]"';
    $result = $db->query($sql);

    }
}

class Releve_Elec{
    public static function create(){
        $releve_elecModel = new Elec();
        $db = $releve_elecModel->getDatabase();
        $sql = 'INSERT INTO releve_elec(codeElec,codecompteur,valeur1,date_releve,
        date_presentation,date_limite_paie) VALUES("$_POST[codeElec]","$_POST[codecompteur]",
        "$_POST[valeur1]","$_POST[date_releve]","$_POST[date_presentation]","$_POST[date_limite_paie]")';
        $result = $db->query($sql);

    
    }
    public static function read(){
        $releve_elecModel = new Elec();
        $result = $releve_elecModel->getReleveElecs(); 
    }
    public static function modify($codeElec)
    {
        $elecModel = new Elec();
        /*   $db = $userModel->getDatabase();*/
        return $elecModel->getReleveElec($codeElec); // ✅ Retourne l'utilisateur
    }

    public static function update(){
        $releve_elecModel = new Elec();
        $db = $releve_elecModel->getDatabase();
        $sql = 'UPDATE FROM releve_elec SET codecompteur="$_POST[codecompteur]",
        valeur2="$_POST[valeur1]",date_releve1="$_POST[date_releve]",
        date_presentation="$_POST[date_presentation]",date_limite_paie="$_POST[date_limite_paie]"
         WHERE codeElec="$_POST[codeElec]"';
        $result = $db->query($sql);
    }
    public static function delete(){
    $releve_elecModel = new Elec();
    $db = $releve_elecModel->getDatabase();
    $sql = 'DELETE FROM releve_elec WHERE codeElec="$_POST[codeElec]"';
    $result = $db->query($sql);

    }
}