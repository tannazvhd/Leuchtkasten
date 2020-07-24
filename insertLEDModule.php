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

$sql = "SELECT * FROM spiegelfläche WHERE id='1'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while( $row=mysqli_fetch_array($result)){
        $Category=$row['Category'];
        $Color=$row['Color'];
        $Materialstärke=$row['Materialstärke'];

    }
} else {
    echo "0 results";
}

$sql = "SELECT * FROM art WHERE id='1'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while( $row=mysqli_fetch_array($result)){
        $Tiefe=$row['Tiefe'];
        $Breite=$row['Breite'];
        $Höhe=$row['Höhe'];
    }
} else {
    echo "0 results";
}

$sql3 = "SELECT * FROM ledmodule WHERE id='1'";
$result = mysqli_query($con, $sql3);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while( $row=mysqli_fetch_array($result)){
        $Marke=$row['Marke'];$minWatt=$row['minWatt'];$maxWatt=$row['maxWatt'];$minLumen=$row['minLumen'];$maxLumen=$row['maxLumen'];$minPreis=$row['minPreis'];$maxPreis=$row['maxPreis'];
    }
} else {
    echo "0 results";
}




if (isset($_POST['minWatt'])) {
    $minWatt = $_POST["minWatt"];
    $query3 = "UPDATE ledmodule SET minWatt='$minWatt' WHERE id=1";
    $result = mysqli_query($con, $query3);
    if (!$result) {
        echo "there is not any result";
    };
};

if (isset($_POST['maxWatt'])) {
    $maxWatt = $_POST["maxWatt"];
    $query3 = "UPDATE ledmodule SET maxWatt='$maxWatt' WHERE id=1";
    $result = mysqli_query($con, $query3);
    if (!$result) {
        echo "there is not any result";
    };
};
if (isset($_POST['minLumen'])) {
    $minLumen = $_POST["minLumen"];
    $query3 = "UPDATE ledmodule SET minLumen='$minLumen' WHERE id=1";
    $result = mysqli_query($con, $query3);
    if (!$result) {
        echo "there is not any result";
    };
};if (isset($_POST['maxLumen'])) {
    $maxLumen = $_POST["maxLumen"];
    $query3 = "UPDATE ledmodule SET maxLumen='$maxLumen' WHERE id=1";
    $result = mysqli_query($con, $query3);
    if (!$result) {
        echo "there is not any result";
    };
};

if (isset($_POST['minPreis'])) {
    $minPreis = $_POST["minPreis"];
    $query3 = "UPDATE ledmodule SET minPreis='$minPreis' WHERE id=1";
    $result = mysqli_query($con, $query3);
    if (!$result) {
        echo "there is not any result";
    };
};if (isset($_POST['maxPreis'])) {
    $maxPreis = $_POST["maxPreis"];
    $query3 = "UPDATE ledmodule SET maxPreis='$maxPreis' WHERE id=1";
    $result = mysqli_query($con, $query3);
    if (!$result) {
        echo "there is not any result";
    };
};


if (!empty($_POST['übernehmen4'])) {

    if (isset($_POST['Marke'])) {
        $Marke = $_POST["Marke"];
        $query3 = "UPDATE ledmodule SET Marke='$Marke' WHERE id=1";
        $result = mysqli_query($con, $query3);
        if (!$result) {
            echo "there is not any result";
        } else {
//            echo "Werkstoff done";
        };
    };

    if ($Tiefe==75 || $Tiefe==100 || $Tiefe==125 || $Tiefe==175){
        if($Category=='PLEXIGLAS GS' && $Color=='weiss' && $Materialstärke==3){
            $Array=[];
            $sql = "SELECT * FROM ledsproduktvarianten
            WHERE Marke='$Marke'AND Watt>='$minWatt' AND LeuchtkastenTiefe='$Tiefe' AND Watt<='$maxWatt' AND LumenProModul>='$minLumen' AND LumenProModul<='$maxLumen' AND PreisProModul>='$minPreis' AND PreisProModul<='$maxPreis'";
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

        }else{
            echo "Berechnung ist nur möglich für PLEXIGLAS GS in weiß in Stärke 3 mm";
        };

    }else{
        echo "Berechnung mit dieser Tiefe ist unmöglich";
    };
}


if (isset($_POST['ProductId4'])) {

    $ProductId = $_POST["ProductId4"];
    $query3 = "UPDATE ledmodule SET ausgewählteLED='$ProductId' WHERE id=1";
    $result = mysqli_query($con, $query3);
    if ($result) {

            echo "Produkt wurde erfolgreich ausgewählt";
        }else{
        echo "Query funktioniert nicht";
    }

};


if (!empty($_POST['ausgewählteLEDModule'])) {
    $sql = "SELECT ausgewählteLED FROM ledmodule WHERE id='1'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while( $row=mysqli_fetch_array($result)){
            $ausgewählteLED=$row['ausgewählteLED'];
        }
            echo "$ausgewählteLED";

    } else {
        echo "0 results";
    }
}

?>