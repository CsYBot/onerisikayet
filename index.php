<?php
//-----------------------------------------------------------------
/*

$sorgu = $db->prepare("SELECT * FROM siparis");
    $sorgu->execute();
    while ($cikti = $sorgu->fetch(PDO::FETCH_ASSOC)) {
echo "test: ".$cikti['iletisim']. "";
$varmi = "var";
    }



//-----------------------------------------------------------------


$verialmakicin = "Beklemede";

    $sorgu = $db->prepare("SELECT * FROM siparis WHERE durum=:duruma Order By tarih DESC");
    $sorgu->execute([

":duruma" => $verialmakicin


    ]);

    while ($cikti = $sorgu->fetch(PDO::FETCH_ASSOC)) {
echo "test: ".$cikti['iletisim']. "";
$varmi = "var";
    }
 */



//------------------------------------------------------
						


/*
$kontrola = $db->prepare("SELECT * FROM test1 WHERE test2=?");

$kontrola->execute(array($test)); 
if($kontrola->rowCount()){  
//---------------------------------------------------------------------------

$sorgu = $db->prepare("insert into linkler (test) values ('$test')");

$sorgu->execute();

//---------------------------------------------------------------------------
session_start();
ob_start();
if(!isset($_SESSION["login"])){

header("Location: login.php"); 

} else {

echo "adminsin";

}

//$_SESSION["login"] = "true";
//$_SESSION["user"] = user;
//session_destroy();
//ob_end_flush();




//---------------------------------------------------------------------------

    $stmt=$db->prepare("DELETE FROM siparis WHERE id=:id");
    $result=$stmt->execute([
        ":id" => $degisken
    ]);
----------------------------------------------------------------------------



$sorgu = $db->prepare("select * from siparis where kod like '%$getir%'");
    $sorgu->execute();

    while ($cikti = $sorgu->fetch(PDO::FETCH_ASSOC)) {
        echo "".$cikti['iletisim']. "";

--------------------------------------------------------------------

$sorguab = $db->prepare("UPDATE bot SET vote = '$sonuc' WHERE botid = '$get'");


--------------------------------------------------------------------

header('Location: https://www.csylist.cf');
?>
*/
