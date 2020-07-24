
<div class="container-fluid" id="LEDModule">
    <div class="row justify-content-center my-5 " style="width:80%; margin: 0 auto ; border: solid 1px lightgray;">
        <form method="post" action="" id="contactform4" class="pt-4"style="width:60%;">
            <?php
//            include 'insertSpiegelfläche.php';
            ?>

            <br><br>
            <div class="row">
                <div class="col-md-2 pr-5" >
                    <label  style="font-size: 12pt; font-weight: normal">Marke:  </label>
                </div>
                <div class="col-md-9" >
                    <div class="form-group row justify-content-center">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Marke" id="OSRAM" value="OSRAM" checked>
                            <label class="form-check-label" for="OSRAM" style="font-size: 12pt; font-weight: normal">OSRAM</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Marke" id="SloanLED" value="SloanLED">
                            <label class="form-check-label" for="SloanLED" style="font-size: 12pt; font-weight: normal">SloanLED</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Marke" id="LucoLED" value="LucoLED">
                            <label class="form-check-label" for="LucoLED" style="font-size: 12pt; font-weight: normal">LucoLED</label>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-3 " >
                    <label for="ex4" style="font-size: 12pt; font-weight: normal">Watt pro Modul</label>
                </div>
                <div class="col-md-2 " style="margin-right:-70px;font-size: 10pt; font-weight: normal">
                    <b id="minVal4">0</b>
                </div>
                <div class="col-md-5 " >
                    <input id="ex4" type="text" class="span2" value="" data-slider-min="0" data-slider-id="RC" data-slider-max="2" data-slider-step="0.1" data-slider-value="[0,2]" style="width: 100%" data-slider-tooltip="hide" data-slider-handle="round"/>
                </div>
                <div class="col-md-2" style="font-size: 10pt; font-weight: normal">
                    <b id="maxVal4">2</b>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-3 " >
                    <label for="ex44" style="font-size: 12pt; font-weight: normal">Lumen pro Modul</label>
                </div>
                <div class="col-md-2 " style="margin-right:-70px;font-size: 10pt; font-weight: normal">
                    <b id="minVal44">11</b>
                </div>
                <div class="col-md-5 " >
                    <input id="ex44" type="text" class="span2" value="" data-slider-min="11" data-slider-id="RC" data-slider-max="180" data-slider-step="1" data-slider-value="[11,180]" style="width: 100%" data-slider-tooltip="hide" data-slider-handle="round"/>
                </div>
                <div class="col-md-2" style="font-size: 10pt; font-weight: normal">
                    <b id="maxVal44">180</b>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-3 " >
                    <label for="ex444" style="font-size: 12pt; font-weight: normal">Preis pro Modul (€)</label>
                </div>
                <div class="col-md-2 " style="margin-right:-70px;font-size: 10pt; font-weight: normal">
                    <b id="minVal444">1</b>€
                </div>
                <div class="col-md-5 ">
                    <input id="ex444" type="text" class="span2" value="" data-slider-min="1" data-slider-id="RC" data-slider-max="10" data-slider-step="1" data-slider-value="[1,10]" style="width: 100%" data-slider-tooltip="hide" data-slider-handle="round"/>
                </div>
                <div class="col-md-2" style="font-size: 10pt; font-weight: normal">
                    <b id="maxVal444">10</b>€
                </div>
            </div>


            <br><br><br><br>
            <div class="row justify-content-center">
                <button type="submit" class="btn btn-outline-info" id="übernehmen4" name="übernehmen4" value="übernehmen4">übernehmen</button>
            </div>
            <div class="row justify-content-end">
                <button type="submit" class="btn btn-outline-info" id="Nächst4" name="Nächst4" value="Nächst4">weiter</button>
            </div>


            <br>
        </form>
    </div>
    <h6 class="result4" style="color: #0056b3; font-size: 10pt; margin-left: 10%"></h6>

    <div class="row w-75 my-5 " style="font-family: TKTypeRegular;font-size: 15px ;font-weight: normal;margin-left: 15%" >
        <div class="col col-md-12 text-center">
            <div class="table-responsive-md">
                <table class="table" id="myTable4" style="display: none;margin-left: 5%"">
                    <tbody>
                    <tr>
                        <th class="text-left" style="color: #00A0F0">LEDs</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th class="text-left" >Marke</td>
                        <td class="font-weight-bold" style="width: 100px">Ausführung</td>
                        <td class="font-weight-bold">Module/Kette (VE)</td>
                        <td class="font-weight-bold">Watt/Modul <small>Leuchtkasten Watt</small></td>
                        <td class="font-weight-bold">Lumen/Modul <small>Leuchtkasten Lumen</small></td>
                        <td class="font-weight-bold">Benötigte Module <small>Benötigte Ketten (VE)</small></td>
                        <td class="font-weight-bold">Preis/Modul <small>Leuchtkasten Module Preis (€)</small></td>
                        <td class="font-weight-bold">Preis/Kette <small>Preis Ketten gesamt <br>(€)</small></td>
                        <td></td>
                        <td></td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<script>

    $(document).ready(function () {


        $("#ex4").slider();
        $("#ex44").slider();
        $("#ex444").slider();

        $("#ex4").on("slide", function(slideEvt) {

            $("#minVal4").text(slideEvt.value[0]);
            $("#maxVal4").text(slideEvt.value[1]);
            var minVal4 = slideEvt.value[0];
            var maxVal4 = slideEvt.value[1];

            $.ajax
            ({
                type: "POST",
                url: "insertLEDModule.php",
                data: { "minWatt": minVal4, "maxWatt": maxVal4 },
                success: function (data) {
                }
            });

        });

        $("#ex44").on("slide", function(slideEvt) {

            $("#minVal44").text(slideEvt.value[0]);
            $("#maxVal44").text(slideEvt.value[1]);
            var minVal44 = slideEvt.value[0];
            var maxVal44 = slideEvt.value[1];

            $.ajax
            ({
                type: "POST",
                url: "insertLEDModule.php",
                data: { "minLumen": minVal44, "maxLumen": maxVal44 },
                success: function (data) {
                }
            });

        });

        $("#ex444").on("slide", function(slideEvt) {

            $("#minVal444").text(slideEvt.value[0]);
            $("#maxVal444").text(slideEvt.value[1]);
            var minVal444 = slideEvt.value[0];
            var maxVal444 = slideEvt.value[1];

            $.ajax
            ({
                type: "POST",
                url: "insertLEDModule.php",
                data: { "minPreis": minVal444, "maxPreis": maxVal444 },
                success: function (data) {
                }
            });

        });

        $('#übernehmen4').click(function (e) {

            e.preventDefault();
            var Marke = $("input[name='Marke']:checked").val();

            $.ajax
            ({
                type: "POST",
                url: "insertLEDModule.php",
                data: {
                    "übernehmen4": 'übernehmen4',
                    "Marke": Marke,

                },
                success: function (data) {



                    if (data==="Es gibt kein Ergebnis" || data==="Query funktioniert nicht" || data=="Berechnung ist nur möglich für PLEXIGLAS GS in weiß in Stärke 3 mm" || data=="Berechnung mit dieser Tiefe ist unmöglich"){
                        // alert(data);


                        $("#myTable4").find("tr:gt(1)").remove();



                        $( ".result4" ).html(data);

                        $("#myTable4 > tbody").append(
                            "<tr><th scope='row'>"+data+"</th></tr>"
                        );
                    }else {

                        $("#myTable4").find("tr:gt(1)").remove();




                        $( ".result4" ).html('');

                        $('#myTable4').css('display', 'block');




                        var json_data= JSON.parse(data);
                        var i;
                        // alert(json_data);

                        var Breite = json_data[json_data.length-1];
                        var Höhe = json_data[json_data.length-2];
                        var m=(Breite*Höhe)/1000000;

                        for (i = 0; i < json_data.length-2 ; i++) {

                            var BenötigteModule=m*json_data[i]["ModuleProm2"];
                            var BenötigteModuleInt=parseInt(BenötigteModule);
                            if (BenötigteModule>BenötigteModuleInt){
                                 BenötigteModule=parseInt(BenötigteModule)+1;
                            }else {
                                 BenötigteModule=parseInt(BenötigteModule);
                            }

                            if(BenötigteModule%(json_data[i]["ModuleKette"])==0){
                                var BenötigteKetten=BenötigteModule/json_data[i]["ModuleKette"];
                            }else{
                                var BenötigteKetten=parseInt(BenötigteModule/json_data[i]["ModuleKette"])+1;
                            }

                            var LeuchtkastenWatt=BenötigteModule*json_data[i]["Watt"];
                            var LeuchtkastenWatt = Number(LeuchtkastenWatt).toFixed(2);

                            var LeuchtkastenLumen=BenötigteModule*json_data[i]["LumenProModul"];
                            var LeuchtkastenLumen = Number(LeuchtkastenLumen).toFixed(2);

                            var LeuchtkastenModulePreise=BenötigteModule*json_data[i]["PreisProModul"];
                            var LeuchtkastenModulePreise = Number(LeuchtkastenModulePreise).toFixed(2);

                            var PreisKettengesamt=BenötigteKetten*json_data[i]["PreisProKette"];
                            var PreisKettengesamt = Number(PreisKettengesamt).toFixed(2);


                            var PreisProKette=String(json_data[i]["PreisProKette"]).replace('.',',');
                            var PreisProModul=String(json_data[i]["PreisProModul"]).replace('.',',');
                            var Watt=String(json_data[i]["Watt"]).replace('.',',');
                            var LeuchtkastenWatt = String(LeuchtkastenWatt).replace('.',',');
                            var LeuchtkastenLumen = String(LeuchtkastenLumen).replace('.',',');
                            var LeuchtkastenModulePreise = String(LeuchtkastenModulePreise).replace('.',',');
                            var PreisKettengesamt = String(PreisKettengesamt).replace('.',',');






                            $("#myTable4 > tbody").append(
                                "<tr><th class='font-weight-normal text-left' >"+json_data[i]["Marke"]+"</th><td class='font-weight-normal'>"+json_data[i]["Ausführung"]+"</td><td>"+json_data[i]["ModuleKette"]+"</td><td style='font-weight: bold'>"+Watt+"<br><small>"+LeuchtkastenWatt+"</small></td><td style='font-weight: bold'>"+json_data[i]["LumenProModul"]+"<br><small>"+LeuchtkastenLumen+"</small></td><td style='font-weight: bold'>"+BenötigteModule+"<br><small>"+BenötigteKetten+"</small></td><td style='font-weight: bold'>"+PreisProModul+"<br><small>"+LeuchtkastenModulePreise+"</small></td><td style='font-weight: bold'>"+PreisProKette+"<br><small>"+PreisKettengesamt+"</small></td><td></td><td><button type='submit' class='btn btn-outline-info'id='wählen4' name='wählen4' ProductId4="+json_data[i]["id"]+">wählen</button></td></tr>"
                            )
                        }

                    }

                    $('#wählen4').click(function(event){
                        event.preventDefault();


                        $('#LEDModule').fadeOut();
                        $('#TabFour').attr('style', 'background-color: #999b96 !important');
                        $('#TabFourLabel').css("color", "#999b96");
                        LED=0;

                        $('#Netzteile').slideToggle();

                        $('#TabFive').attr('style', 'background-color: #FFB400 !important');
                        $('#TabFiveLabel').css("color", "#FFB400");
                        n=1;

                        myFunction();


                        var id = $(this).attr('ProductId4');
                        // alert(id);
                        $.ajax
                        ({
                            type: "POST",
                            url: "insertLEDModule.php",
                            data: { "ProductId4": id },
                            success: function (data) {
                                // $('.result').html(data);
                                alert(data);
                            }
                        });





                    });

                }
            })


        });

        $('#Nächst4').click(function (e) {

            e.preventDefault();

            $('#LEDModule').fadeOut();
            $('#TabFour').attr('style', 'background-color: #999b96 !important');
            $('#TabFourLabel').css("color", "#999b96");
            LED=0;

            $('#Netzteile').slideToggle();

            $('#TabFive').attr('style', 'background-color: #FFB400 !important');
            $('#TabFiveLabel').css("color", "#FFB400");
            n=1;

            myFunction();


        });


        function myFunction()
        {
            $.ajax
            ({
                type: "POST",
                url: "insertNetzteile.php",
                data: { "Netzteile": "Netzteile" },
                success: function (data) {
                    var data = data;
                    var data= JSON.parse(data);
                    // alert(data[0]);
                    if (data[0]=="Kalkulation"){
                        $('#NoKalkulation').css('display', 'none');
                        $('#Kalkulation').css('display', 'block');
                        $('#myDIV5').css('display', 'none');

                    }else{
                        $('#Kalkulation').css('display', 'none');
                        $('#NoKalkulation').css('display', 'block');
                    }
                }
            });
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
        };



    });








</script>