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

$sql2 = "SELECT * FROM art WHERE id='1'";
$result = mysqli_query($con, $sql2);
if (mysqli_num_rows($result) > 0) {
    while( $row=mysqli_fetch_array($result)){
        $Art=$row['Art'];
        $Breite=$row['Breite'];
        $Höhe=$row['Höhe'];
    }
} else {
    echo "0 results";
}

$sql3 = "SELECT * FROM lichtwerbeprofile WHERE id='1'";
$result = mysqli_query($con, $sql3);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while( $row=mysqli_fetch_array($result)){
        $Transparentprofil=$row['Transparentprofil'];$Hohlkammerprofil=$row['Hohlkammerprofil'];$minVal6=$row['minGewicht'];$maxVal6=$row['maxGewicht'];
    }
} else {
    echo "0 results";
}




if (isset($_POST['minVal6'])) {
    $minVal6 = $_POST["minVal6"];
    $query3 = "UPDATE lichtwerbeprofile SET minGewicht='$minVal6' WHERE id=1";
    $result = mysqli_query($con, $query3);
    if (!$result) {
        echo "there is not any result";
    };
};

if (isset($_POST['maxVal6'])) {
    $maxVal6 = $_POST["maxVal6"];
    $query3 = "UPDATE lichtwerbeprofile SET maxGewicht='$maxVal6' WHERE id=1";
    $result = mysqli_query($con, $query3);
    if (!$result) {
        echo "there is not any result";
    };
};

if (isset($_POST['BenötigteMenge'])) {
    $BenötigteMenge=((4*$Höhe)+(4*$Breite))/1000;
    echo "$BenötigteMenge";
};



if (!empty($_POST['übernehmen6'])) {


    if (isset($_POST['Transparentprofil'])) {
        $Transparentprofil = $_POST["Transparentprofil"];
        if ($Transparentprofil=='true'){
            $Transparentprofil="Transparentprofil";
        }elseif ($Transparentprofil=='false'){
            $Transparentprofil="nein";
        }
        $query3 = "UPDATE lichtwerbeprofile SET Transparentprofil='$Transparentprofil' WHERE id=1";
        $result = mysqli_query($con, $query3);
        if (!$result) {
            echo "there is not any result";
        }else{
//            echo "Transparentprofil done";
        };
    };


    if (isset($_POST['Hohlkammerprofil'])) {
        $Hohlkammerprofil = $_POST["Hohlkammerprofil"];
        if ($Hohlkammerprofil=='true'){
            $Hohlkammerprofil="Hohlkammerprofil";
        }elseif ($Hohlkammerprofil=='false'){
            $Hohlkammerprofil="nein";
        }
        $query3 = "UPDATE lichtwerbeprofile SET Hohlkammerprofil='$Hohlkammerprofil' WHERE id=1";
        $result = mysqli_query($con, $query3);
        if (!$result) {
            echo "there is not any result";
        }else{
//            echo "Hohlkammerprofil done";
        };
    };

    if ($Transparentprofil=="Transparentprofil" && $Hohlkammerprofil=="Hohlkammerprofil" ){
        $AndStatement='id>0';
    }elseif ( $Transparentprofil=="Transparentprofil" && $Hohlkammerprofil!="Hohlkammerprofil"){
        $AndStatement= "Typ='Transparentprofil'";
    }elseif ( $Transparentprofil!="Transparentprofil" && $Hohlkammerprofil=="Hohlkammerprofil"){
        $AndStatement= "Typ='Hohlkammerprofil'";
    }else{
        $AndStatement='id>0';
    };

    $Array=[];
    $sql = "SELECT * FROM lichtwerbeprofileproduktvarianten
    WHERE Art='$Art'AND Gewicht6m>'$minVal6' AND Gewicht6m<'$maxVal6' AND $AndStatement";
    $result = mysqli_query($con, $sql);
    if ($result) {


        while( $row=mysqli_fetch_array($result)){
            array_push($Array,  $row);
        }

        if ( $Array==[]){
            echo "Es gibt kein Ergebnis";
        }else{
            array_push($Array,  $Höhe);
            array_push($Array,  $Breite);
            echo json_encode($Array);
        }

    } else {
        echo "Query funktioniert nicht";
    }


}


if (isset($_POST['productId6'])) {

    $ProductId = $_POST["productId6"];
    $query3 = "UPDATE lichtwerbeprofile SET ausgewähltesLichtwerbeprofile='$ProductId' WHERE id=1";
    $result = mysqli_query($con, $query3);
    if ($result) {
        if (isset($_POST['AbstufungVorhanden'])) {
            $Array = [];
            $sql = "SELECT * FROM abdeckwinkelproduktvarianten";
            $result = mysqli_query($con, $sql);
            if ($result) {

                while ($row = mysqli_fetch_array($result)) {
                    array_push($Array, $row);
                }

                array_push($Array, $Höhe);
                array_push($Array, $Breite);
                echo json_encode($Array);


            } else {
                echo "Query funktioniert nicht";
            }
        }
        else {
            echo "Produkt wurde erfolgreich ausgewählt";
        }
    }
}
;


if (isset($_POST['productIdPlus6'])) {
    $ProductId = $_POST["productIdPlus6"];
    $query3 = "UPDATE lichtwerbeprofile SET ausgewählterAbdeckwinkel='$ProductId' WHERE id=1";
    $result = mysqli_query($con, $query3);
    if ($result) {
        echo "Produkt wurde erfolgreich ausgewählt";

    }else{
        echo "Query funktioniert nicht";
    }
}


?>