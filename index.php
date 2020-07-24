<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="icon" type="image/gif/png" href="./images/Thyssenkrupp.png">
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link href="bootstrap-toggle-master/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link href="node_modules/bootstrap-slider/dist/css/bootstrap-slider.min.css" rel="stylesheet">




</head>
<body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="bootstrap-toggle-master/js/bootstrap-toggle.min.js"></script>
<script src="node_modules/bootstrap-slider/dist/bootstrap-slider.min.js"></script>
<script src="bower_components\jquery-table2excel\dist\jquery.table2excel.min.js"></script>






<?php include 'header.php';?>


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

?>



<div class="container-fluid">
    <div class="row justify-content-around my-5" style="width:80%; margin: 0 auto ">

        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-md sticky-top navbar-light  shadow-sm" id="mainNav">

                <div class="collapse navbar-collapse align-middle" id="navCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mt-1">
                            <button type="button" class="LiDiv nav-link btn btn-sm"  id="TabOne" >1</button>
                            <br>
                            <label class="labelNav" id="TabOneLabel">Art, Form und Maße</label>
                        </li>
                        <li><div style="border-bottom: solid 2px darkgray;height: 1px;width: 65px; padding-top: 20px;margin-left: -15px;margin-right: 10px "></div></li>
                        <li class="nav-item mt-1">
                            <button type="button" class=" LiDiv nav-link btn btn-sm" id="TabTwo">2</button>
                            <br>
                            <label class="labelNav" id="TabTwoLabel">Spiegelfläche</label>
                        </li>
                        <li><div style="border-bottom: solid 2px darkgray;height: 1px;width: 65px; padding-top: 20px;margin-left: -15px;margin-right: 10px "></div></li>
                        <li class="nav-item mt-1">
                            <button type="button" class=" LiDiv nav-link btn btn-sm" id="TabThree" >3</button>
                            <br>
                            <label class="labelNav" id="TabThreeLabel">Rückseite Trennwand</label>
                        </li>
                        <li><div style="border-bottom: solid 2px darkgray;height: 1px;width: 65px; padding-top: 20px;margin-left: -15px;margin-right: 10px "></div></li>
                        <li class="nav-item mt-1">
                            <button type="button" class="LiDiv nav-link btn btn-sm" id="TabFour" >4</button>
                            <br>
                            <label class="labelNav" id="TabFourLabel">LED-Module</label>
                        </li>
                        <li><div style="border-bottom: solid 2px darkgray;height: 1px;width: 65px; padding-top: 20px;margin-left: -15px;margin-right: 10px "></div></li>
                        <li class="nav-item mt-1">
                            <button type="button" class=" LiDiv nav-link btn btn-sm" id="TabFive"  >5</button>
                            <br>
                            <label class="labelNav" id="TabFiveLabel">Netzteile</label>
                        </li>
                        <li><div style="border-bottom: solid 2px darkgray;height: 1px;width: 65px; padding-top: 20px;margin-left: -15px;margin-right: 10px "></div></li>
                        <li class="nav-item mt-1">
                            <button type="button" class="LiDiv nav-link btn btn-sm" id="TabSix">6</button>
                            <br>
                            <label class="labelNav" id="TabSixLabel">Lichtwerbeprofile</label>
                        </li>
                        <li><div style="border-bottom: solid 2px darkgray;height: 1px;width: 65px; padding-top: 20px;margin-left: -15px;margin-right: 10px "></div></li>
                        <li class="nav-item mt-1">
                            <button type="button" class="LiDiv nav-link btn btn-sm" id="TabSeven">7</button>
                            <br>
                            <label class="labelNav" id="TabSevenLabel">Zusammenfassung</label>
                        </li>


                    </ul>
                </div>
        </nav>

    </div>
</div>



<br><br>

<div id="Maße">
    <?php
    include 'Maße.php';
    ?>
</div>
<div id="Spiegelfläche">
    <?php
    include 'Spiegelfläche.php';
    ?>
</div>
<div id="Rückseite-Trennwand">
    <?php
    include 'RückseiteTrennwand.php';
    ?>
</div>
<div id="LEDModule">
    <?php
    include 'LEDModule.php';
    ?>
</div>
<div id="Netzteile">
    <?php
    include 'Netzteile.php';
    ?>
</div>
<div id="Lichtwerbeprofile">
    <?php
    include 'Lichtwerbeprofile.php';
    ?>
</div>
<div id="KalkulationDIV">
    <?php
    include 'KalkulationDIV.php';
    ?>
</div>

<script>

    $(document).ready(function(){
        $('#Spiegelfläche').fadeOut();
        $('#Rückseite-Trennwand').fadeOut();
        $('#Lichtwerbeprofile').fadeOut();
        $('#LEDModule').fadeOut();
        $('#Netzteile').fadeOut();
        $('#KalkulationDIV').fadeOut();



        $('#TabOne').attr('style', 'background-color: #FFB400 !important');
        $('#TabOneLabel').css("color", "#FFB400");




        var i=1;
        var j=0;
        var k=0;
        var l=0;
        var LED=0;
        var n=0;
        var Kal=0;

        $('#TabOne').click(function() {
            $('#Spiegelfläche').fadeOut();
            $('#TabTwo').attr('style', 'background-color: #999b96 !important');
            $('#TabTwoLabel').css("color", "#999b96");

            $('#Rückseite-Trennwand').fadeOut();
            $('#TabThree').attr('style', 'background-color: #999b96 !important');
            $('#TabThreeLabel').css("color", "#999b96");

            $('#LEDModule').fadeOut();
            $('#TabFour').attr('style', 'background-color: #999b96 !important');
            $('#TabFourLabel').css("color", "#999b96");

            $('#Netzteile').fadeOut();
            $('#TabFive').attr('style', 'background-color: #999b96 !important');
            $('#TabFiveLabel').css("color", "#999b96");

            $('#Lichtwerbeprofile').fadeOut();
            $('#TabSix').attr('style', 'background-color: #999b96 !important');
            $('#TabSixLabel').css("color", "#999b96");

            $('#KalkulationDIV').fadeOut();
            $('#TabSeven').attr('style', 'background-color: #999b96 !important');
            $('#TabSevenLabel').css("color", "#999b96");

            $('#Maße').slideToggle();
            j=0;
            k=0;
            l=0;
            LED=0;
            n=0;
            Kal=0;
            if(i==0){
                $(this).attr('style', 'background-color: #FFB400 !important');
                $('#TabOneLabel').css("color", "#FFB400");

                i=1;
            }
            else{
                $(this).attr('style', 'background-color: #999b96 !important');
                $('#TabOneLabel').css("color", "#999b96");
                i=0;
            }

        });


        $('#TabTwo').click(function() {

            $('#Maße').fadeOut();
            $('#TabOne').attr('style', 'background-color: #999b96 !important');
            $('#TabOneLabel').css("color", "#999b96");

            $('#Rückseite-Trennwand').fadeOut();
            $('#TabThree').attr('style', 'background-color: #999b96 !important');
            $('#TabThreeLabel').css("color", "#999b96");

            $('#LEDModule').fadeOut();
            $('#TabFour').attr('style', 'background-color: #999b96 !important');
            $('#TabFourLabel').css("color", "#999b96");

            $('#Netzteile').fadeOut();
            $('#TabFive').attr('style', 'background-color: #999b96 !important');
            $('#TabFiveLabel').css("color", "#999b96");

            $('#Lichtwerbeprofile').fadeOut();
            $('#TabSix').attr('style', 'background-color: #999b96 !important');
            $('#TabSixLabel').css("color", "#999b96");

            $('#KalkulationDIV').fadeOut();
            $('#TabSeven').attr('style', 'background-color: #999b96 !important');
            $('#TabSevenLabel').css("color", "#999b96");


            $('#Spiegelfläche').slideToggle();
            i=0;
            k=0;
            l=0;
            LED=0;
            n=0;
            Kal=0;

            if(j==0){
                $(this).attr('style', 'background-color: #FFB400 !important');
                $('#TabTwoLabel').css("color", "#FFB400");
                j=1;
            }
            else{
                $(this).attr('style', 'background-color: #999b96 !important');
                $('#TabTwoLabel').css("color", "#999b96");
                j=0;
            }


        });


        $('#TabThree').click(function() {
            $('#Spiegelfläche').fadeOut();
            $('#TabTwo').attr('style', 'background-color: #999b96 !important');
            $('#TabTwoLabel').css("color", "#999b96");

            $('#Maße').fadeOut();
            $('#TabOne').attr('style', 'background-color: #999b96 !important');
            $('#TabOneLabel').css("color", "#999b96");

            $('#LEDModule').fadeOut();
            $('#TabFour').attr('style', 'background-color: #999b96 !important');
            $('#TabFourLabel').css("color", "#999b96");

            $('#Netzteile').fadeOut();
            $('#TabFive').attr('style', 'background-color: #999b96 !important');
            $('#TabFiveLabel').css("color", "#999b96");

            $('#Lichtwerbeprofile').fadeOut();
            $('#TabSix').attr('style', 'background-color: #999b96 !important');
            $('#TabSixLabel').css("color", "#999b96");

            $('#KalkulationDIV').fadeOut();
            $('#TabSeven').attr('style', 'background-color: #999b96 !important');
            $('#TabSevenLabel').css("color", "#999b96");

            $('#Rückseite-Trennwand').slideToggle();

            j=0;
            i=0;
            l=0;
            LED=0;
            n=0;
            Kal=0;
            if(k==0){
                $(this).attr('style', 'background-color: #FFB400 !important');
                $('#TabThreeLabel').css("color", "#FFB400");

                k=1;
            }
            else{
                $(this).attr('style', 'background-color: #999b96 !important');
                $('#TabThreeLabel').css("color", "#999b96");
                k=0;
            }

        });

        $('#TabSix').click(function() {
            $('#Spiegelfläche').fadeOut();
            $('#TabTwo').attr('style', 'background-color: #999b96 !important');
            $('#TabTwoLabel').css("color", "#999b96");

            $('#Maße').fadeOut();
            $('#TabOne').attr('style', 'background-color: #999b96 !important');
            $('#TabOneLabel').css("color", "#999b96");

            $('#Rückseite-Trennwand').fadeOut();
            $('#TabThree').attr('style', 'background-color: #999b96 !important');
            $('#TabThreeLabel').css("color", "#999b96");

            $('#LEDModule').fadeOut();
            $('#TabFour').attr('style', 'background-color: #999b96 !important');
            $('#TabFourLabel').css("color", "#999b96");

            $('#Netzteile').fadeOut();
            $('#TabFive').attr('style', 'background-color: #999b96 !important');
            $('#TabFiveLabel').css("color", "#999b96");

            $('#KalkulationDIV').fadeOut();
            $('#TabSeven').attr('style', 'background-color: #999b96 !important');
            $('#TabSevenLabel').css("color", "#999b96");

            $('#Lichtwerbeprofile').slideToggle();


            j=0;
            i=0;
            k=0;
            LED=0;
            n=0;
            Kal=0;

            if(l==0){
                $(this).attr('style', 'background-color: #FFB400 !important');
                $('#TabSixLabel').css("color", "#FFB400");

                l=1;
            }
            else{
                $(this).attr('style', 'background-color: #999b96 !important');
                $('#TabSixLabel').css("color", "#999b96");
                l=0;
            }

        });



        $('#TabFour').click(function() {
            $('#Spiegelfläche').fadeOut();
            $('#TabTwo').attr('style', 'background-color: #999b96 !important');
            $('#TabTwoLabel').css("color", "#999b96");

            $('#Maße').fadeOut();
            $('#TabOne').attr('style', 'background-color: #999b96 !important');
            $('#TabOneLabel').css("color", "#999b96");

            $('#Rückseite-Trennwand').fadeOut();
            $('#TabThree').attr('style', 'background-color: #999b96 !important');
            $('#TabThreeLabel').css("color", "#999b96");

            $('#Netzteile').fadeOut();
            $('#TabFive').attr('style', 'background-color: #999b96 !important');
            $('#TabFiveLabel').css("color", "#999b96");

            $('#Lichtwerbeprofile').fadeOut();
            $('#TabSix').attr('style', 'background-color: #999b96 !important');
            $('#TabSixLabel').css("color", "#999b96");

            $('#KalkulationDIV').fadeOut();
            $('#TabSeven').attr('style', 'background-color: #999b96 !important');
            $('#TabSevenLabel').css("color", "#999b96");


            $('#LEDModule').slideToggle();


            j=0;
            i=0;
            k=0;
            l=0;
            n=0;
            Kal=0;

            if(LED==0){
                $(this).attr('style', 'background-color: #FFB400 !important');
                $('#TabFourLabel').css("color", "#FFB400");

                LED=1;
            }
            else{
                $(this).attr('style', 'background-color: #999b96 !important');
                $('#TabFourLabel').css("color", "#999b96");
                LED=0;
            }

        });

        $('#TabSeven').click(function() {
            Zussamenfassungfunction();
            $('#Spiegelfläche').fadeOut();
            $('#TabTwo').attr('style', 'background-color: #999b96 !important');
            $('#TabTwoLabel').css("color", "#999b96");

            $('#Maße').fadeOut();
            $('#TabOne').attr('style', 'background-color: #999b96 !important');
            $('#TabOneLabel').css("color", "#999b96");

            $('#Rückseite-Trennwand').fadeOut();
            $('#TabThree').attr('style', 'background-color: #999b96 !important');
            $('#TabThreeLabel').css("color", "#999b96");

            $('#Netzteile').fadeOut();
            $('#TabFive').attr('style', 'background-color: #999b96 !important');
            $('#TabFiveLabel').css("color", "#999b96");

            $('#Lichtwerbeprofile').fadeOut();
            $('#TabSix').attr('style', 'background-color: #999b96 !important');
            $('#TabSixLabel').css("color", "#999b96");

            $('#LEDModule').fadeOut();
            $('#TabFour').attr('style', 'background-color: #999b96 !important');
            $('#TabFourLabel').css("color", "#999b96");


            $('#KalkulationDIV').slideToggle();


            j=0;
            i=0;
            k=0;
            l=0;
            n=0;
            LED=0;

            if(Kal==0){
                $(this).attr('style', 'background-color: #FFB400 !important');
                $('#TabSevenLabel').css("color", "#FFB400");

                Kal=1;
            }
            else{
                $(this).attr('style', 'background-color: #999b96 !important');
                $('#TabSevenLabel').css("color", "#999b96");
                Kal=0;
            }


        });


        $('#TabFive').click(function() {

            $.ajax
            ({
                type: "POST",
                url: "insertLEDModule.php",
                data: {"ausgewählteLEDModule": "ausgewählteLEDModule"},
                success: function (data) {
                    // alert(data);
                    if(data==0){

                        $('#Spiegelfläche').fadeOut();
                        $('#TabTwo').attr('style', 'background-color: #999b96 !important');
                        $('#TabTwoLabel').css("color", "#999b96");

                        $('#Maße').fadeOut();
                        $('#TabOne').attr('style', 'background-color: #999b96 !important');
                        $('#TabOneLabel').css("color", "#999b96");

                        $('#Rückseite-Trennwand').fadeOut();
                        $('#TabThree').attr('style', 'background-color: #999b96 !important');
                        $('#TabThreeLabel').css("color", "#999b96");

                        $('#Lichtwerbeprofile').fadeOut();
                        $('#TabSix').attr('style', 'background-color: #999b96 !important');
                        $('#TabSixLabel').css("color", "#999b96");

                        $('#KalkulationDIV').fadeOut();
                        $('#TabSeven').attr('style', 'background-color: #999b96 !important');
                        $('#TabSevenLabel').css("color", "#999b96");

                        $('#Netzteile').fadeOut();
                        $('#TabFive').attr('style', 'background-color: #999b96 !important');
                        $('#TabFiveLabel').css("color", "#999b96");


                        j=0;
                        i=0;
                        k=0;
                        l=0;
                        n=0;
                        Kal=0;

                        $('#LEDModule').slideToggle();
                        $('#TabFour').attr('style', 'background-color: #FFB400 !important');
                        $('#TabFourLabel').css("color", "#FFB400");
                        LED=1;
                        alert("Bitte wählen Sie ein Produkt in den vorherigen Schritten");
                    }
                }
            });

            $('#Spiegelfläche').fadeOut();
            $('#TabTwo').attr('style', 'background-color: #999b96 !important');
            $('#TabTwoLabel').css("color", "#999b96");

            $('#Maße').fadeOut();
            $('#TabOne').attr('style', 'background-color: #999b96 !important');
            $('#TabOneLabel').css("color", "#999b96");

            $('#Rückseite-Trennwand').fadeOut();
            $('#TabThree').attr('style', 'background-color: #999b96 !important');
            $('#TabThreeLabel').css("color", "#999b96");

            $('#LEDModule').fadeOut();
            $('#TabFour').attr('style', 'background-color: #999b96 !important');
            $('#TabFourLabel').css("color", "#999b96");

            $('#Lichtwerbeprofile').fadeOut();
            $('#TabSix').attr('style', 'background-color: #999b96 !important');
            $('#TabSixLabel').css("color", "#999b96");

            $('#KalkulationDIV').fadeOut();
            $('#TabSeven').attr('style', 'background-color: #999b96 !important');
            $('#TabSevenLabel').css("color", "#999b96");


            $('#Netzteile').slideToggle();


            j=0;
            i=0;
            k=0;
            l=0;
            LED=0;
            Kal=0;

            if(n== 0){
                $(this).attr('style', 'background-color: #FFB400 !important');
                $('#TabFiveLabel').css("color", "#FFB400");

                n=1;
            }
            else{
                $(this).attr('style', 'background-color: #999b96 !important');
                $('#TabFiveLabel').css("color", "#999b96");
                n=0;
            }

            $.ajax
            ({
                type: "POST",
                url: "insertNetzteile.php",
                data: { "Netzteile": "Netzteile" },
                success: function (data) {
                    // alert(data);
                    var data = data;

                    if (data=="Kalkulation"){
                        $('#NoKalkulation').css('display', 'none');
                        $('#Kalkulation').css('display', 'block');
                        $('#myDIV5').css('display', 'none');

                    }else{
                        $('#Kalkulation').css('display', 'none');
                        $('#NoKalkulation').css('display', 'block');

                        // big Function

                        $.ajax
                        ({
                            type: "POST",
                            url: "insertNetzteile.php",
                            data: {"noCalculation": "noCalculation"},
                            success: function (data) {
                                // alert(data);
                                var json_data = JSON.parse(data);
                                $("#myTable55").find("tr:gt(0)").remove();
                                $("#myTable555").find("tr:gt(0)").remove();

                                var Trafo0 = Number(json_data[0]["Trafo"]).toFixed(2);
                                var Preis2 = Number(json_data[2]["Preis"]).toFixed(2);
                                var Trafo1 = Number(json_data[1]["Trafo"]).toFixed(2);
                                var Preis3 = Number(json_data[3]["Preis"]).toFixed(2);




                                Trafo0 = String(Trafo0).replace('.',',');
                                Preis2 = String(Preis2).replace('.',',');
                                Trafo1 = String(Trafo1).replace('.',',');
                                Preis3 = String(Preis3).replace('.',',');

                                var Gewicht0 = String(json_data[0]["Gewicht"]).replace('.',',');
                                var Gewicht2 = String(json_data[2]["Gewicht"]).replace('.',',');
                                var Gewicht1 = String(json_data[1]["Gewicht"]).replace('.',',');
                                var Gewicht3 = String(json_data[3]["Gewicht"]).replace('.',',');


                                $("#myTable55 > tbody").append(
                                    "<tr><th class='font-weight-normal text-left' >Ein Netzteil</th><td class='font-weight-normal' style='font-size: 10pt; width: 100px'>" + json_data[0]["Marke"] + "</td><td>" + json_data[0]["Bezeichnung"] + "</td><td>" + json_data[0]["Abmessungen"] + "</td><td>" + json_data[0]["WattTats"] + "</td><td>" +Gewicht0+ "</td><td>" + json_data[0]["Schutzklasse"] + "</td><td>" +Trafo0+ "</td><td></td><td><button type='submit' class='btn btn-outline-info' productId55first="+json_data[0]["id"]+" id='wählen55first' name='wählen55first' >wählen</button></td></tr>"
                                );
                                $("#myTable55 > tbody").append(
                                    "<tr><th class='font-weight-normal text-left' >Zwei Netzteile</th><td class='font-weight-normal' style='font-size: 10pt; width: 100px'>" + json_data[2]["NTMarke"] + "</td><td>" + json_data[2]["1NTBez"] + "<br>" + json_data[2]["2NTBez"] + "</td><td>" + json_data[2]["1NTAbm"] + "<br>" + json_data[2]["2NTAbm"] + "</td><td>" + json_data[2]["SummeWattTats"] + "</td><td>" + Gewicht2+ "</td><td>" + json_data[2]["1NetzteilIP"] + "<br>" + json_data[2]["2NetzteilIP"] + "</td><td>" +Preis2+ "</td><td></td><td><button type='submit' class='btn btn-outline-info' productId55second="+json_data[2]["id"]+" id='wählen55second' name='wählen55second' >wählen</button></td></tr>"
                                );

                                $("#myTable555 > tbody").append(
                                    "<tr><th class='font-weight-normal text-left' >Ein Netzteil</th><td class='font-weight-normal'style='font-size: 10pt; width: 100px'>" + json_data[1]["Marke"] + "</td><td>" + json_data[1]["Bezeichnung"] + "</td><td>" + json_data[1]["Abmessungen"] + "</td><td>" + json_data[1]["WattTats"] + "</td><td>" +Gewicht1+ "</td><td>" + json_data[1]["Schutzklasse"] + "</td><td>" +Trafo1+ "</td><td></td><td><button type='submit' class='btn btn-outline-info' productId555first="+json_data[1]["id"]+" id='wählen555first' name='wählen555first' >wählen</button></td></tr>"
                                );
                                $("#myTable555 > tbody").append(
                                    "<tr><th class='font-weight-normal text-left' >Zwei Netzteile</th><td class='font-weight-normal' style='font-size: 10pt; width: 100px'>" + json_data[3]["NTMarke"] + "</td><td>" + json_data[3]["1NTBez"] + "<br>" + json_data[3]["2NTBez"] + "</td><td>" + json_data[3]["1NTAbm"] + "<br>" + json_data[3]["2NTAbm"] + "</td><td>" + json_data[3]["SummeWattTats"] + "</td><td>" +Gewicht3+ "</td><td>" + json_data[3]["1NetzteilIP"] + "<br>" + json_data[3]["2NetzteilIP"] + "</td><td>" +Preis3+ "</td><td></td><td><button type='submit' class='btn btn-outline-info' productId555second="+json_data[3]["id"]+" id='wählen555second' name='wählen555second' >wählen</button></td></tr>"
                                );


                                $('#wählen55first').click(function(event){
                                    event.preventDefault();
                                    var id = $(this).attr('productId55first');


                                    $('#Netzteile').fadeOut();
                                    $('#TabFive').attr('style', 'background-color: #999b96 !important');
                                    $('#TabFiveLabel').css("color", "#999b96");
                                    n=0;

                                    $('#Lichtwerbeprofile').slideToggle();

                                    $('#TabSix').attr('style', 'background-color: #FFB400 !important');
                                    $('#TabSixLabel').css("color", "#FFB400");
                                    l=1;


                                    // alert(id);
                                    $.ajax
                                    ({
                                        type: "POST",
                                        url: "insertNetzteile.php",
                                        data: { "ProductId12EinNetzteil": id },
                                        success: function (data) {
                                            // $('.result').html(data);
                                            alert(data);
                                        }
                                    });
                                });

                                $('#wählen555first').click(function(event){
                                    event.preventDefault();
                                    var id = $(this).attr('productId555first');


                                    $('#Netzteile').fadeOut();
                                    $('#TabFive').attr('style', 'background-color: #999b96 !important');
                                    $('#TabFiveLabel').css("color", "#999b96");
                                    n=0;

                                    $('#Lichtwerbeprofile').slideToggle();

                                    $('#TabSix').attr('style', 'background-color: #FFB400 !important');
                                    $('#TabSixLabel').css("color", "#FFB400");
                                    l=1;

                                    // alert(id);
                                    $.ajax
                                    ({
                                        type: "POST",
                                        url: "insertNetzteile.php",
                                        data: { "ProductId24EinNetzteil": id },
                                        success: function (data) {
                                            // $('.result').html(data);
                                            alert(data);
                                        }
                                    });
                                });

                                $('#wählen55second').click(function(event){
                                    event.preventDefault();
                                    var id = $(this).attr('productId55second');


                                    $('#Netzteile').fadeOut();
                                    $('#TabFive').attr('style', 'background-color: #999b96 !important');
                                    $('#TabFiveLabel').css("color", "#999b96");
                                    n=0;

                                    $('#Lichtwerbeprofile').slideToggle();

                                    $('#TabSix').attr('style', 'background-color: #FFB400 !important');
                                    $('#TabSixLabel').css("color", "#FFB400");
                                    l=1;

                                    // alert(id);
                                    $.ajax
                                    ({
                                        type: "POST",
                                        url: "insertNetzteile.php",
                                        data: { "ProductId12ZweiNetzteil": id },
                                        success: function (data) {
                                            // $('.result').html(data);
                                            alert(data);
                                        }
                                    });
                                });

                                $('#wählen555second').click(function(event){
                                    event.preventDefault();
                                    var id = $(this).attr('productId555second');


                                    $('#Netzteile').fadeOut();
                                    $('#TabFive').attr('style', 'background-color: #999b96 !important');
                                    $('#TabFiveLabel').css("color", "#999b96");
                                    n=0;

                                    $('#Lichtwerbeprofile').slideToggle();

                                    $('#TabSix').attr('style', 'background-color: #FFB400 !important');
                                    $('#TabSixLabel').css("color", "#FFB400");
                                    l=1;

                                    // alert(id);
                                    $.ajax
                                    ({
                                        type: "POST",
                                        url: "insertNetzteile.php",
                                        data: { "ProductId24ZweiNetzteil": id },
                                        success: function (data) {
                                            // $('.result').html(data);
                                            alert(data);
                                        }
                                    });
                                });


                            }

                        });


                    }
                }
            });
        });




    });

</script>








<?php include 'footer.php';?>
</body>
</html>