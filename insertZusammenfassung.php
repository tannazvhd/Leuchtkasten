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
$ZusammenfassungArray=array();





$sql2 = "SELECT * FROM spiegelfläche WHERE id='1'";
$result = mysqli_query($con, $sql2);
if (mysqli_num_rows($result) > 0) {
    while( $row=mysqli_fetch_array($result)){
        $ausgewählteSpiegelfläche=$row['ausgewähltesProdukt'];
        $MaterialresteSpiegelfläche=$row['Materialreste'];
    }
} else {
    echo "0 results";
};

$sql2 = "SELECT * FROM rückseitetrennwand WHERE id='1'";
$result = mysqli_query($con, $sql2);
if (mysqli_num_rows($result) > 0) {
    while( $row=mysqli_fetch_array($result)){
        $ausgewählteRückseitetrennwand=$row['ausgewähltesProdukt'];
        $MaterialresteRückseitetrennwand=$row['Materialreste'];
    }
} else {
    echo "0 results";
};


$sql2 = "SELECT * FROM ledmodule WHERE id='1'";
$result = mysqli_query($con, $sql2);
if (mysqli_num_rows($result) > 0) {
    while( $row=mysqli_fetch_array($result)){
        $ausgewählteLED=$row['ausgewählteLED'];
    }
} else {
    echo "0 results";
};

$sql2 = "SELECT * FROM netzteile WHERE id='1'";
$result = mysqli_query($con, $sql2);
if (mysqli_num_rows($result) > 0) {
    while( $row=mysqli_fetch_array($result)){
        $AnzahlNetzteil=$row['Anzahl'];
        $ausgewähltesNetzteil=$row['ausgewähltesNetzteil'];
        $ProduktidProduktvariantenNetzteil=$row['ProduktidProduktvarianten'];
        $ProduktidKombinationenNetzteil=$row['ProduktidKombinationen'];
    }
} else {
    echo "0 results";
};

$sql2 = "SELECT * FROM lichtwerbeprofile WHERE id='1'";
$result = mysqli_query($con, $sql2);
if (mysqli_num_rows($result) > 0) {
    while( $row=mysqli_fetch_array($result)){
        $ausgewähltesLichtwerbeprofile=$row['ausgewähltesLichtwerbeprofile'];
        $ausgewählterAbdeckwinkel=$row['ausgewählterAbdeckwinkel'];
    }
} else {
    echo "0 results";
};


$sql3 = "SELECT * FROM art WHERE id='1'";
$result = mysqli_query($con, $sql3);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while( $row=mysqli_fetch_array($result)){
        $Tiefe=$row['Tiefe'];
        $Breite=$row['Breite'];
        $Höhe=$row['Höhe'];
        $Art=$row['Art'];
        $Form=$row['Form'];
        $Trennwand=$row['Trennwand'];
    }
} else {
    echo "0 results";
}

$sql2 = "SELECT * FROM ledmodule WHERE id='1'";
$result = mysqli_query($con, $sql2);
if (mysqli_num_rows($result) > 0) {
    while( $row=mysqli_fetch_array($result)){
        $ausgewählteLED2=$row['ausgewählteLED'];
    }
} else {
    echo "0 results";
}
$ModuleProm2=0;
$ledWatt=0;
$LumenProModul=0;
$ModuleKette=1;
$sql2 = "SELECT * FROM ledsproduktvarianten WHERE id='$ausgewählteLED2'";
$result = mysqli_query($con, $sql2);
if (mysqli_num_rows($result) > 0) {
    while( $row=mysqli_fetch_array($result)){
        $ModuleProm2=$row['ModuleProm2'];
        $ledWatt=$row['Watt'];
        $ModuleKette=$row['ModuleKette'];
        $LumenProModul=$row['LumenProModul'];
    }
} else {
//    echo "0 results";
}


$m=($Breite*$Höhe)/1000000;
$BenötigteModule=$m*$ModuleProm2;
$BenötigteModuleInt=intval($BenötigteModule);
if ($BenötigteModule>$BenötigteModuleInt){
    $BenötigteModule=intval($BenötigteModule)+1;
}else {
    $BenötigteModule=intval($BenötigteModule);
}
if($BenötigteModule%$ModuleKette==0){
    $BenötigteKette=$BenötigteModule/$ModuleKette;
}else{
    $BenötigteKette=intval($BenötigteModule/$ModuleKette)+1;
}
$LeuchtkastenWatt=$BenötigteModule*$ledWatt;
$LeuchtkastenLumen=$BenötigteModule*$LumenProModul;





$Result=[];
//Spiegelfläche 0
if ($ausgewählteSpiegelfläche==0){
    $emptyRow=array(
        "Marke" => "",
        "Bezeichnung" => "",
        "Abmessungen" => "",
        "WattTats" => "",
        "Gewicht" => "",
        "Schutzklasse" => "",
        "Trafo" => ""
    );
    array_push($Result,  $emptyRow);

}else{
    $sql = "SELECT * FROM spiegelflächeproduktvarianten WHERE id='$ausgewählteSpiegelfläche'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        while( $row=mysqli_fetch_array($result)){
            array_push($Result,  $row);
        }
    }
}

//trennwand 1

if ($ausgewählteRückseitetrennwand==0){
    $emptyRow=array(
        "Marke" => "",
        "Bezeichnung" => "",
        "Abmessungen" => "",
        "WattTats" => "",
        "Gewicht" => "",
        "Schutzklasse" => "",
        "Trafo" => ""
    );
    array_push($Result,  $emptyRow);

}else {
    $sql = "SELECT * FROM rückwandproduktvarianten WHERE id='$ausgewählteRückseitetrennwand'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($Result, $row);
        }
    }
}

//LED 2

if ($ausgewählteLED==0){
    $emptyRow=array(
        "Marke" => "",
        "Bezeichnung" => "",
        "Abmessungen" => "",
        "WattTats" => "",
        "Gewicht" => "",
        "Schutzklasse" => "",
        "Trafo" => ""
    );
    array_push($Result,  $emptyRow);

}else {
    $sql = "SELECT * FROM ledsproduktvarianten WHERE id='$ausgewählteLED'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($Result, $row);
        }
    }
}
//Lichtwerbeprofile 3

if ($ausgewähltesLichtwerbeprofile==0){
    $emptyRow=array(
        "Marke" => "",
        "Abmessungen" => "",
        "WattTats" => "",
        "Gewicht" => "",
        "Schutzklasse" => "",
        "Trafo" => ""
    );
    array_push($Result,  $emptyRow);

}else {
    $sql = "SELECT * FROM lichtwerbeprofileproduktvarianten WHERE id='$ausgewähltesLichtwerbeprofile'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($Result, $row);
        }
    }
}

//Abdeckwinkel 4

if ($ausgewählterAbdeckwinkel==0){
    $emptyRow=array(
        "Marke" => "",
        "Bezeichnung" => "",
        "Abmessungen" => "",
        "WattTats" => "",
        "Gewicht" => "",
        "Schutzklasse" => "",
        "Trafo" => ""
    );
    array_push($Result,  $emptyRow);

}else {
    $sql = "SELECT * FROM abdeckwinkelproduktvarianten WHERE id='$ausgewählterAbdeckwinkel'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($Result, $row);
        }
    }
}

//Netzteil 5
$NetzteileWatt='';
if($ausgewähltesNetzteil!=0){
    $sql = "SELECT * FROM netzteileproduktvarianten WHERE id='$ausgewähltesNetzteil'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        while( $row=mysqli_fetch_array($result)){
            array_push($Result,  $row);
            $NetzteileWatt=$row['WattTats'];

        }
    }
    $emptyRow=array(
        "Marke" => "",
        "Bezeichnung" => "",
        "Abmessungen" => "",
        "WattTats" => "",
        "Gewicht" => "",
        "Preis" => ""
    );
    array_push($Result,  $emptyRow);

}elseif ($ProduktidProduktvariantenNetzteil!=0){
    $sql = "SELECT * FROM netzteileproduktvarianten WHERE id='$ProduktidProduktvariantenNetzteil'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        while( $row=mysqli_fetch_array($result)){
            array_push($Result,  $row);
            $NetzteileWatt=$row['WattTats'];

        }
    }
    $emptyRow=array(
        "Marke" => "",
        "Bezeichnung" => "",
        "Abmessungen" => "",
        "WattTats" => "",
        "Gewicht" => "",
        "Preis" => ""
    );
    array_push($Result,  $emptyRow);

}elseif ($ProduktidKombinationenNetzteil!=0){
    $sql = "SELECT * FROM netzteilekombinationen WHERE id='$ProduktidKombinationenNetzteil'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        while( $row=mysqli_fetch_array($result)){
            array_push($Result,  $row);
            $NetzteileWatt=$row['SummeWattTats'];

        }
    }
    $sql = "SELECT * FROM netzteilekombinationen WHERE id='$ProduktidKombinationenNetzteil'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        while( $row=mysqli_fetch_array($result)){
            array_push($Result,  $row);
        }
    }
}else{
    $emptyRow=array(
        "Marke" => "",
        "Bezeichnung" => "",
        "Abmessungen" => "",
        "WattTats" => "",
        "Gewicht" => "",
        "Preis" => ""
    );
    array_push($Result,  $emptyRow);
    array_push($Result,  $emptyRow);
}





if (isset($_POST['Zusammenfassung'])) {

    array_push($ZusammenfassungArray,  $Breite);
    array_push($ZusammenfassungArray,  $Höhe);
    array_push($ZusammenfassungArray,  $Tiefe);
    array_push($ZusammenfassungArray,  $Form);
    array_push($ZusammenfassungArray,  $Art);
    array_push($ZusammenfassungArray,  $Trennwand);
    array_push($ZusammenfassungArray,  $BenötigteModule);
    array_push($ZusammenfassungArray,  $LeuchtkastenWatt);
    array_push($ZusammenfassungArray,  $LeuchtkastenLumen);
    array_push($ZusammenfassungArray,  $NetzteileWatt);





    echo json_encode($ZusammenfassungArray);

}

if (isset($_POST['TableEntities'])) {

    array_push($Result,  $Breite);
    array_push($Result,  $Höhe);
    array_push($Result,  $Tiefe);
    array_push($Result,  $Form);
    array_push($Result,  $Art);
    array_push($Result,  $Trennwand);
    array_push($Result,  $BenötigteModule);
    array_push($Result,  $LeuchtkastenWatt);
    array_push($Result,  $LeuchtkastenLumen);
    array_push($Result,  $NetzteileWatt);
    array_push($Result,  $BenötigteKette);
    array_push($Result,  $MaterialresteSpiegelfläche);
    array_push($Result,  $MaterialresteRückseitetrennwand);



    echo json_encode($Result);

}



if (!empty($_POST['abschicken'])) {

    $Anrede = $_POST["Anrede"];
    $Vorname = $_POST["Vorname"];
    $Firma = $_POST["Firma"];
    $Addresse = $_POST["Addresse"];
    $Addresse2 = $_POST["Addresse2"];
    $Email = $_POST["Email"];
    $Telefon = $_POST["Telefon"];
    $Informationen = $_POST["Informationen"];
    $Rückruf = $_POST["Rückruf"];
    $Datenschutz = $_POST["Datenschutz"];


    $query3 = "INSERT INTO angebotanfordern (Anrede, Vorname, Firma ,Addresse,Addresse2,Email,Telefon,Informationen,Rückruf,Datenschutz) VALUES ('$Anrede', '$Vorname', '$Firma','$Addresse','$Addresse2','$Email','$Telefon','$Informationen','$Rückruf','$Datenschutz')";
    $result = mysqli_query($con, $query3);
    if (!$result) {
        echo "there is not any result";
    } else {
            echo "form done";
    };


}