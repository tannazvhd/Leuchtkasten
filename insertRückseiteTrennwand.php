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

$sql2 = "SELECT * FROM rückseitetrennwand WHERE id='1'";
$result = mysqli_query($con, $sql2);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while( $row=mysqli_fetch_array($result)){
        $Werkstoff3=$row['Werkstoff']; $Materialstärke3=$row['Materialstärke'];$minPreis3=$row['PreisMin'];$maxPreis3=$row['PreisMax'];$Materialreste3=$row['Materialreste'];
    }
} else {
    echo "0 results";
}


if (isset($_POST['minPreis3'])) {
    $minPreis3 = $_POST["minPreis3"];
    $query3 = "UPDATE rückseitetrennwand SET PreisMin='$minPreis3' WHERE id=1";
    $result = mysqli_query($con, $query3);
    if (!$result) {
        echo "there is not any result";
    };
};

if (isset($_POST['maxPreis3'])) {
    $maxPreis3 = $_POST["maxPreis3"];
    $query3 = "UPDATE rückseitetrennwand SET PreisMax='$maxPreis3' WHERE id=1";
    $result = mysqli_query($con, $query3);
    if (!$result) {
        echo "there is not any result";
    };
};


if (!empty($_POST['übernehmen3'])) {

    if (isset($_POST['Werkstoff3'])) {
        $Werkstoff3 = $_POST["Werkstoff3"];
        $query3 = "UPDATE rückseitetrennwand SET Werkstoff='$Werkstoff3' WHERE id=1";
        $result = mysqli_query($con, $query3);
        if (!$result) {
            echo "there is not any result";
        } else {
//            echo "Werkstoff3 done";
        };
    };

    if (isset($_POST['Materialstärke3'])) {
        $Materialstärke3 = $_POST["Materialstärke3"];
        $query3 = "UPDATE rückseitetrennwand SET Materialstärke='$Materialstärke3' WHERE id=1";
        $result = mysqli_query($con, $query3);
        if (!$result) {
            echo "there is not any result";
        } else {
//            echo "Materialstärke3 done";
        };
    };


    if (isset($_POST['Materialreste3'])) {
        $Materialreste3 = $_POST["Materialreste3"];
        if ($Materialreste3 == 'true') {
            $Materialreste3 = "ja";
        } elseif ($Materialreste3 == 'false') {
            $Materialreste3 = "nein";
        }
        $query3 = "UPDATE rückseitetrennwand SET Materialreste='$Materialreste3' WHERE id=1";
        $result = mysqli_query($con, $query3);
        if (!$result) {
            echo "there is not any result";
        } else {
//            echo "Materialreste3 done";
        };
    };

    $Array=[];
    $sql = "SELECT * FROM rückwandproduktvarianten
    WHERE Werkstoff='$Werkstoff3'AND Materialstärke = '$Materialstärke3' AND Preis>'$minPreis3' AND Preis<'$maxPreis3';
    ";
    $result = mysqli_query($con, $sql);
    if ($result) {


        while( $row=mysqli_fetch_array($result)){
            array_push($Array,  $row);
        }

        if ( $Array==[]){
            echo "Es gibt kein Ergebnis";
        }else{
            echo json_encode ($Array);
        }

    } else {
        echo "Query funktioniert nicht";
    }


};

if (isset($_POST['ProductId3'])) {
    $ProductId3 = $_POST["ProductId3"];
    $query3 = "UPDATE rückseitetrennwand SET ausgewähltesProdukt='$ProductId3' WHERE id=1";
    $result = mysqli_query($con, $query3);
    if ($result) {
        echo "Produkt wurde erfolgreich ausgewählt";
    }
};





?>