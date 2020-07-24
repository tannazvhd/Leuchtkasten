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

$sql2 = "SELECT * FROM spiegelfläche WHERE id='1'";
$result = mysqli_query($con, $sql2);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while( $row=mysqli_fetch_array($result)){
        $Werkstoff=$row['Werkstoff']; $Materialstärke=$row['Materialstärke'];$color=$row['Color'];$category=$row['Category'];$Schlagzähigkeit=$row['Schlagzähigkeit'];$Brandschutzklasse=$row['Brandschutzklasse'];$minPreis=$row['PreisMin'];$maxPreis=$row['PreisMax'];$Materialreste=$row['Materialreste'];
    }
} else {
    echo "0 results";
}


if (isset($_POST['color'])) {
    $color = $_POST["color"];
    $category = $_POST["category"];
    $query3 = "UPDATE spiegelfläche SET Color='$color',Category='$category' WHERE id=1";
    $result = mysqli_query($con, $query3);
    if (!$result) {
        echo "there is not any result";
    }else{
        echo "Farbe  $category / $color wurde gewählt";
    };
};

if (isset($_POST['minPreis'])) {
    $minPreis = $_POST["minPreis"];
    $query3 = "UPDATE spiegelfläche SET PreisMin='$minPreis' WHERE id=1";
    $result = mysqli_query($con, $query3);
    if (!$result) {
        echo "there is not any result";
    };
};

if (isset($_POST['maxPreis'])) {
    $maxPreis = $_POST["maxPreis"];
    $query3 = "UPDATE spiegelfläche SET PreisMax='$maxPreis' WHERE id=1";
    $result = mysqli_query($con, $query3);
    if (!$result) {
        echo "there is not any result";
    };
};


if (!empty($_POST['übernehmen2'])) {

    if (isset($_POST['Werkstoff'])) {
        $Werkstoff = $_POST["Werkstoff"];
        $query3 = "UPDATE spiegelfläche SET Werkstoff='$Werkstoff' WHERE id=1";
        $result = mysqli_query($con, $query3);
        if (!$result) {
            echo "there is not any result";
        }else{
//            echo "Werkstoff done";
        };
    };

    if (isset($_POST['Materialstärke'])) {
        $Materialstärke = $_POST["Materialstärke"];
        $query3 = "UPDATE spiegelfläche SET Materialstärke='$Materialstärke' WHERE id=1";
        $result = mysqli_query($con, $query3);
        if (!$result) {
            echo "there is not any result";
        }else{
//            echo "Materialstärke done";
        };
    };

    if (isset($_POST['Schlagzähigkeit'])) {
        $Schlagzähigkeit = $_POST["Schlagzähigkeit"];
        if ($Schlagzähigkeit=='true'){
            $Schlagzähigkeit="ohne Bruch";
        }elseif ($Schlagzähigkeit=='false'){
            $Schlagzähigkeit="15";
        }
        $query3 = "UPDATE spiegelfläche SET Schlagzähigkeit='$Schlagzähigkeit' WHERE id=1";
        $result = mysqli_query($con, $query3);
        if (!$result) {
            echo "there is not any result";
        }else{
//            echo "$Schlagzähigkeit done";
        };
    };

    if (isset($_POST['Brandschutzklasse'])) {
        $Brandschutzklasse = $_POST["Brandschutzklasse"];
        if ($Brandschutzklasse=='true'){
            $Brandschutzklasse="B1";
        }elseif ($Brandschutzklasse=='false'){
            $Brandschutzklasse="B2";
        }
        $query3 = "UPDATE spiegelfläche SET Brandschutzklasse='$Brandschutzklasse' WHERE id=1";
        $result = mysqli_query($con, $query3);
        if (!$result) {
            echo "there is not any result";
        }else{
//            echo "$Brandschutzklasse done";
        };
    };

    if (isset($_POST['Materialreste'])) {
        $Materialreste = $_POST["Materialreste"];
        if ($Materialreste=='true'){
            $Materialreste="ja";
        }elseif ($Materialreste=='false'){
            $Materialreste="nein";
        }
        $query3 = "UPDATE spiegelfläche SET Materialreste='$Materialreste' WHERE id=1";
        $result = mysqli_query($con, $query3);
        if (!$result) {
            echo "there is not any result";
        }else{
//            echo "$Materialreste done";
        };
    };

    $Array=[];
    $sql = "SELECT * FROM spiegelflächeproduktvarianten 
    WHERE Werkstoff='$Werkstoff'AND Materialstärke = '$Materialstärke' AND Farbbezeichnung = '$color'AND Schlagzähigkeit = '$Schlagzähigkeit' AND Brandschutz = '$Brandschutzklasse' AND Preis>'$minPreis' AND Preis<'$maxPreis';
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


}


if (isset($_POST['ProductId'])) {
    $ProductId = $_POST["ProductId"];
    $query3 = "UPDATE spiegelfläche SET ausgewähltesProdukt='$ProductId' WHERE id=1";
    $result = mysqli_query($con, $query3);
    if ($result) {
        echo "Produkt wurde erfolgreich ausgewählt";
    }
};


?>