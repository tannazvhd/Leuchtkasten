<?php

$con = mysqli_connect('localhost','root','');
if(!$con)
{
    echo "Not Connected To Server";
}

if(!mysqli_select_db($con,'leuchtkasten_konfigurator'))
{
    echo "Database Not Selected";
}


$query = "UPDATE spiegelfläche SET ausgewähltesProdukt=0 WHERE id=1";
$result = mysqli_query($con, $query);
$query = "UPDATE rückseitetrennwand SET ausgewähltesProdukt=0 WHERE id=1";
$result = mysqli_query($con, $query);
$query = "UPDATE ledmodule SET ausgewählteLED=0 WHERE id=1";
$result = mysqli_query($con, $query);
$query = "UPDATE netzteile SET Anzahl=0, ausgewähltesNetzteil=0, ProduktidProduktvarianten=0, ProduktidKombinationen=0 WHERE id=1";
$result = mysqli_query($con, $query);
$query = "UPDATE lichtwerbeprofile SET ausgewähltesLichtwerbeprofile=0, ausgewählterAbdeckwinkel=0 WHERE id=1";
$result = mysqli_query($con, $query);

if (!empty($_POST['übernehmen'])) {

    $Array=[];

    if (isset($_POST['Lighting'])) {
        $Lighting = $_POST["Lighting"];
        $query3 = "UPDATE art SET Lighting='$Lighting' WHERE id=1";
        $result = mysqli_query($con, $query3);
        if (!$result) {
            array_push($Array,  "there is not any result");
        }else{
            array_push($Array,  "Lighting erfolgreich eingefügt");
        };
    };

    if (isset($_POST['LeuchtkastenBreite'])) {
        $LeuchtkastenBreite = $_POST["LeuchtkastenBreite"];
        if ($LeuchtkastenBreite>0 && $LeuchtkastenBreite<=4000){
            $query3 = "UPDATE art SET Breite='$LeuchtkastenBreite' WHERE id=1";
            $result = mysqli_query($con, $query3);
            if (!$result) {
                array_push($Array,  "there is not any result");
            }else{
                array_push($Array,  "Leuchtkastenbreite erfolgreich eingefügt");
            };
        }else{
            array_push($Array,  "Leuchtkastenbreite muss zwischen 1 und 4000 mm sein");
        }
    };
    if (isset($_POST['LeuchtkastenHöhe'])) {
        $LeuchtkastenHöhe = $_POST["LeuchtkastenHöhe"];
        if ($LeuchtkastenHöhe>0 && $LeuchtkastenHöhe<=4000) {
            $query3 = "UPDATE art SET Höhe='$LeuchtkastenHöhe' WHERE id=1";
            $result = mysqli_query($con, $query3);
            if (!$result) {
                array_push($Array,  "there is not any result");
            }else{
                array_push($Array,  "LeuchtkastenHöhe erfolgreich eingefügt");
            };
        }else{
            array_push($Array,  "Leuchtkastenhöhe muss zwischen 1 und 4000 mm sein");
        }

    };
    if (isset($_POST['LeuchtkastenTiefe'])) {
        $LeuchtkastenTiefe = $_POST["LeuchtkastenTiefe"];
        if ($LeuchtkastenTiefe>=75 && $LeuchtkastenTiefe<=400) {
            $query3 = "UPDATE art SET Tiefe='$LeuchtkastenTiefe' WHERE id=1";
            $result = mysqli_query($con, $query3);
            if (!$result) {
                array_push($Array,  "there is not any result");
            }else{
                array_push($Array,  "LeuchtkastenTiefe erfolgreich eingefügt");
            };
        }else{
            array_push($Array,  "Leuchtkastentiefe muss zwischen 75 und 400 mm sein");
        }
    };
    if (isset($_POST['LeuchtkastenArt'])) {
        $LeuchtkastenArt = $_POST["LeuchtkastenArt"];
        $query3 = "UPDATE art SET Art='$LeuchtkastenArt' WHERE id=1";
        $result = mysqli_query($con, $query3);
        if (!$result) {
            array_push($Array,  "there is not any result");
        }else{
            array_push($Array,  "LeuchtkastenArt erfolgreich eingefügt");
        };
    };
    if (isset($_POST['Trennwand'])) {
        $Trennwand = $_POST["Trennwand"];
        $query3 = "UPDATE art SET Trennwand='$Trennwand' WHERE id=1";
        $result = mysqli_query($con, $query3);

    };

    if (isset($_POST['LeuchtkastenForm'])) {
        $LeuchtkastenForm = $_POST["LeuchtkastenForm"];
        $query3 = "UPDATE art SET Form='$LeuchtkastenForm' WHERE id=1";
        $result = mysqli_query($con, $query3);
        if (!$result) {
            array_push($Array,  "there is not any result");
        }else{
            array_push($Array,  "LeuchtkastenForm erfolgreich eingefügt");
        };
        echo json_encode ($Array);
    };



}

?>