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

$sql2 = "SELECT * FROM ledmodule WHERE id='1'";
$result = mysqli_query($con, $sql2);
if (mysqli_num_rows($result) > 0) {
    while( $row=mysqli_fetch_array($result)){
        $Marke=$row['Marke'];
        $ausgewählteLED=$row['ausgewählteLED'];
    }
} else {
    echo "0 results";
}
$ModuleProm2=0;
$ledWatt=0;
$sql2 = "SELECT * FROM ledsproduktvarianten WHERE id='$ausgewählteLED'";
$result = mysqli_query($con, $sql2);
if (mysqli_num_rows($result) > 0) {
    while( $row=mysqli_fetch_array($result)){
        $Marke=$row['Marke'];
        $ModuleProm2=$row['ModuleProm2'];
        $ledWatt=$row['Watt'];
    }
} else {
//    echo "0 results";
}

$sql3 = "SELECT * FROM art WHERE id='1'";
$result = mysqli_query($con, $sql3);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while( $row=mysqli_fetch_array($result)){
        $Tiefe=$row['Tiefe'];
        $Breite=$row['Breite'];
        $Höhe=$row['Höhe'];
    }

    if ($Tiefe==75 || $Tiefe==100 || $Tiefe==125 || $Tiefe==175){
        $Array=['Kalkulation'];
        $msg='Kalkulation';
    }else{
        $Array=['NoKalkulation'];
        $msg='NoKalkulation';

    }


} else {
    echo "0 results";
}



$sql3 = "SELECT * FROM netzteile WHERE id='1'";
$result = mysqli_query($con, $sql3);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while( $row=mysqli_fetch_array($result)){
        $Volt12=$row['Volt12'];
        $Volt24=$row['Volt24'];
        $minWatt=$row['minWatt'];
        $maxWatt=$row['maxWatt'];
        $minGewicht=$row['minGewicht'];
        $maxGewicht=$row['maxGewicht'];
    }
} else {
    echo "0 results";
};

if (isset($_POST['Netzteile'])) {

    echo $msg;
};


$m=($Breite*$Höhe)/1000000;
$BenötigteModule=$m*$ModuleProm2;
$BenötigteModuleInt=intval($BenötigteModule);
if ($BenötigteModule>$BenötigteModuleInt){
    $BenötigteModule=intval($BenötigteModule)+1;
}else {
    $BenötigteModule=intval($BenötigteModule);
}
$LeuchtkastenWatt=$BenötigteModule*$ledWatt;

if (isset($_POST['noCalculation'])) {
    $noCalculation=[];
    $Array2=[];
//Volt12 in Tabelle „Netzteile-Produktvarianten“
    $sql = "SELECT * FROM netzteileproduktvarianten
    WHERE Marke='$Marke'AND Volt='12' ";
    $result = mysqli_query($con, $sql);
    while( $row=mysqli_fetch_array($result)){
        array_push($noCalculation,  $row);
    }
    $noCalculationLength=sizeof($noCalculation);
    $dif=1000;
    $RowId=0;
    for($i = 0; $i < $noCalculationLength;$i++){
       $d= $noCalculation[$i]["WattTats"]-$LeuchtkastenWatt;
       if($d>0 && $d<$dif){
           $dif=$d;
           $RowId=$noCalculation[$i]['id'];
       }
    };
    if($RowId!=0){
        $sql = "SELECT * FROM netzteileproduktvarianten WHERE id='$RowId'";
        $result = mysqli_query($con, $sql);
        while( $row=mysqli_fetch_array($result)){
            array_push($Array2,  $row);
        }
    }else{
        $emptyRow=array(
            "Marke" => "Ein Netzteil reicht nicht aus",
            "Bezeichnung" => "",
            "Abmessungen" => "",
            "WattTats" => "",
            "Gewicht" => "",
            "Schutzklasse" => "",
            "Trafo" => ""
        );
        array_push($Array2,  $emptyRow);

    }


//Volt24 in Tabelle „Netzteile-Produktvarianten“
    $noCalculation=[];
    $sql = "SELECT * FROM netzteileproduktvarianten
    WHERE Marke='$Marke'AND Volt='24' ";
    $result = mysqli_query($con, $sql);
    while( $row=mysqli_fetch_array($result)){
        array_push($noCalculation,  $row);
    }
    $noCalculationLength=sizeof($noCalculation);
    $dif=1000;
    $RowId=0;
    for($i = 0; $i < $noCalculationLength;$i++){
        $d= $noCalculation[$i]["WattTats"]-$LeuchtkastenWatt;
        if($d>0 && $d<$dif){
            $dif=$d;
            $RowId=$noCalculation[$i]['id'];
        }
    };
    if($RowId!=0){
        $sql = "SELECT * FROM netzteileproduktvarianten WHERE id='$RowId'";
        $result = mysqli_query($con, $sql);
        while( $row=mysqli_fetch_array($result)){
            array_push($Array2,  $row);
        }
    }else{
        $emptyRow=array(
            "Marke" => "Ein Netzteil reicht nicht aus",
            "Bezeichnung" => "",
            "Abmessungen" => "",
            "WattTats" => "",
            "Gewicht" => "",
            "Schutzklasse" => "",
            "Trafo" => ""
        );
        array_push($Array2,  $emptyRow);

    }

//Volt12 in Tabelle „Kombinationen“
    $noCalculation=[];
    $sql = "SELECT * FROM netzteilekombinationen
    WHERE NTMarke='$Marke'AND Volt='12' ";
    $result = mysqli_query($con, $sql);
    while( $row=mysqli_fetch_array($result)){
        array_push($noCalculation,  $row);
    }
    $noCalculationLength=sizeof($noCalculation);
    $dif=1000;
    for($i = 0; $i < $noCalculationLength;$i++){
        $d= $noCalculation[$i]["SummeWattTats"]-$LeuchtkastenWatt;
        if($d>0 && $d<$dif){
            $dif=$d;
            $RowId=$noCalculation[$i]['id'];
        }
    };
    $sql = "SELECT * FROM netzteilekombinationen WHERE id='$RowId'";
    $result = mysqli_query($con, $sql);
    while( $row=mysqli_fetch_array($result)){
        array_push($Array2,  $row);
    }

//Volt24 in Tabelle „Kombinationen“
    $noCalculation=[];
    $sql = "SELECT * FROM netzteilekombinationen
    WHERE NTMarke='$Marke'AND Volt='24' ";
    $result = mysqli_query($con, $sql);
    while( $row=mysqli_fetch_array($result)){
        array_push($noCalculation,  $row);
    }
    $noCalculationLength=sizeof($noCalculation);
    $dif=1000;
    for($i = 0; $i < $noCalculationLength;$i++){
        $d= $noCalculation[$i]["SummeWattTats"]-$LeuchtkastenWatt;
        if($d>0 && $d<$dif){
            $dif=$d;
            $RowId=$noCalculation[$i]['id'];
        }
    };
    $sql = "SELECT * FROM netzteilekombinationen WHERE id='$RowId'";
    $result = mysqli_query($con, $sql);
    while( $row=mysqli_fetch_array($result)){
        array_push($Array2,  $row);
    }


    echo json_encode( $Array2);


};






if (isset($_POST['minWatt'])) {
    $minWatt = $_POST["minWatt"];
    $query3 = "UPDATE netzteile SET minWatt='$minWatt' WHERE id=1";
    $result = mysqli_query($con, $query3);
    if (!$result) {
        echo "there is not any result";
    };
};

if (isset($_POST['maxWatt'])) {
    $maxWatt = $_POST["maxWatt"];
    $query3 = "UPDATE netzteile SET maxWatt='$maxWatt' WHERE id=1";
    $result = mysqli_query($con, $query3);
    if (!$result) {
        echo "there is not any result";
    };
};

if (isset($_POST['minGewicht'])) {
    $minGewicht = $_POST["minGewicht"];
    $query3 = "UPDATE netzteile SET minGewicht='$minGewicht' WHERE id=1";
    $result = mysqli_query($con, $query3);
    if (!$result) {
        echo "there is not any result";
    };
};

if (isset($_POST['maxGewicht'])) {
    $maxGewicht = $_POST["maxGewicht"];
    $query3 = "UPDATE netzteile SET maxGewicht='$maxGewicht' WHERE id=1";
    $result = mysqli_query($con, $query3);
    if (!$result) {
        echo "there is not any result";
    };
};

if (!empty($_POST['übernehmen5'])) {

    if (isset($_POST['Volt12'])) {
        $Volt12 = $_POST["Volt12"];
        $query3 = "UPDATE netzteile SET Volt12='$Volt12' WHERE id=1";
        $result = mysqli_query($con, $query3);
        if (!$result) {
            echo "there is not any result";
        }else{
//            echo "done";
        };
    };

    if (isset($_POST['Volt24'])) {
        $Volt24 = $_POST["Volt24"];
        $query3 = "UPDATE netzteile SET Volt24='$Volt24' WHERE id=1";
        $result = mysqli_query($con, $query3);
        if (!$result) {
            echo "there is not any result";
        };
    };

    if ($Volt12=="ja" && $Volt24=="ja" ){
        $AndStatement='id>0';
    }elseif ( $Volt12=="ja" && $Volt24=="nein"){
        $AndStatement= "Volt='12'";
    }elseif ( $Volt12=="nein" && $Volt24=="ja"){
        $AndStatement= "Volt='24'";
    }else{
        $AndStatement= "Volt='0'";
    };


    $sql = "SELECT * FROM netzteileproduktvarianten
    WHERE Marke='$Marke'AND WattTats>'$minWatt' AND WattTats<'$maxWatt'AND Gewicht>'$minGewicht' AND Gewicht<'$maxGewicht' AND $AndStatement";
    $result = mysqli_query($con, $sql);
    if ($result) {


        while( $row=mysqli_fetch_array($result)){
            array_push($Array,  $row);
        }

        if ( $Array==['Kalkulation'] || $Array==['NoKalkulation'] ){
            echo "Es gibt kein Ergebnis";
        }else{
            echo json_encode($Array);
        }

    } else {
        echo "Query funktioniert nicht";
    }


};

if (!empty($_POST['wählen5'])) {
    if (isset($_POST['ProductId5'])) {
        $ProductId5 = $_POST["ProductId5"];
        $query3 = "UPDATE netzteile SET ausgewähltesNetzteil='$ProductId5' WHERE id=1";
        $result = mysqli_query($con, $query3);
        if ($result) {
            echo "Produkt wurde erfolgreich ausgewählt";
        }
    };

    if (isset($_POST['Anzahl'])) {
        $Anzahl = $_POST["Anzahl"];
        $query3 = "UPDATE netzteile SET Anzahl='$Anzahl' WHERE id=1";
        $result = mysqli_query($con, $query3);
        if (!$result) {
            echo "Query funktioniert nicht";
        }
    };
};

if (isset($_POST['ProductId12EinNetzteil'])) {
    $ProductId12EinNetzteil = $_POST["ProductId12EinNetzteil"];
    $query3 = "UPDATE netzteile SET ProduktidProduktvarianten='$ProductId12EinNetzteil' WHERE id=1";
    $result = mysqli_query($con, $query3);
    $query4 = "UPDATE netzteile SET ProduktidKombinationen=0 WHERE id=1";
    $result4 = mysqli_query($con, $query4);
    if ($result) {

        echo "Produkt wurde erfolgreich ausgewählt";

    }else{
        echo "Query funktioniert nicht";
    }
};

if (isset($_POST['ProductId24EinNetzteil'])) {
    $ProductId24EinNetzteil = $_POST["ProductId24EinNetzteil"];
    $query3 = "UPDATE netzteile SET ProduktidProduktvarianten='$ProductId24EinNetzteil' WHERE id=1";
    $result = mysqli_query($con, $query3);
    $query4 = "UPDATE netzteile SET ProduktidKombinationen=0 WHERE id=1";
    $result4 = mysqli_query($con, $query4);
    if ($result) {

        echo "Produkt wurde erfolgreich ausgewählt";

    }else{
        echo "Query funktioniert nicht";
    }
};

if (isset($_POST['ProductId12ZweiNetzteil'])) {
    $ProductId12ZweiNetzteil = $_POST["ProductId12ZweiNetzteil"];
    $query3 = "UPDATE netzteile SET ProduktidKombinationen='$ProductId12ZweiNetzteil' WHERE id=1";
    $result = mysqli_query($con, $query3);
    $query4 = "UPDATE netzteile SET ProduktidProduktvarianten=0 WHERE id=1";
    $result4 = mysqli_query($con, $query4);
    if ($result) {

        echo "Produkt wurde erfolgreich ausgewählt";

    }else{
        echo "Query funktioniert nicht";
    }
};

if (isset($_POST['ProductId24ZweiNetzteil'])) {
    $ProductId24ZweiNetzteil = $_POST["ProductId24ZweiNetzteil"];
    $query3 = "UPDATE netzteile SET ProduktidKombinationen='$ProductId24ZweiNetzteil' WHERE id=1";
    $result = mysqli_query($con, $query3);
    $query4 = "UPDATE netzteile SET ProduktidProduktvaNetzteilerianten=0 WHERE id=1";
    $result4 = mysqli_query($con, $query4);
    if ($result) {
        echo "Produkt wurde erfolgreich ausgewählt";
    }else{
        echo "Query funktioniert nicht";
    }
};