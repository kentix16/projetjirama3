<?php
require_once __DIR__ ."/../models/payer.php";

class PayerCrud{
    public static function create(){
        $payerModel = new PayerModel();
        $db = $payerModel->getDatabase();
        $sql = 'INSERT INTO payer(idpaye,codecli,datepaye,montant) VALUES("$_POST[idpaye]","$_POST[codecli]","$_POST[datepaye]","$_POST[montant]")';
        $result = $db->query($sql);

    
    }
    public static function read(){
        $payerModel = new PayerModel();
        $db = $payerModel->getDatabase();
        $sql = 'SELECT * FROM payer';
        $result = $db->query($sql)->fetch_all();
    }
    public static function modify($idpaye)
    {
        $payerModel = new PayerModel();
        /*   $db = $userModel->getDatabase();*/
        return $payerModel->getpaye($idpaye);
    }

    public static function update(){
        $payerModel = new PayerModel();
        $db = $payerModel->getDatabase();
        $sql = 'UPDATE FROM payer SET codecli="$_POST[codecli]",
        datepaie="$_POST[datepaie]",montant="$_POST[montant]"
         WHERE idpaye="$_POST[idpaye]"';
        $result = $db->query($sql);
    }
    public static function delete(){
        $payerModel = new PayerModel();
    $db = $payerModel->getDatabase();
    $sql = 'DELETE FROM payer WHERE idpaye="$_POST[paye]"';
    $result = $db->query($sql);

    }
}