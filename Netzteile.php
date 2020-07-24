<!--in index file would be checked if it is with calculation or without-->

<div class="container-fluid " id="Netzteile">
    <div class="row justify-content-center my-5" id="NoKalkulation"  style="display: none;width:80%; margin: 0 auto ;padding-left: 18%; border: solid 1px lightgray;">
        <form method="post" action="" id="contactform4" class="pt-4"style="width:70%;">

            <br><br>
            <div class="row">
                <div class="col-md-2 pr-5" >
                    <label  style="font-size: 12pt; font-weight: normal">Volt</label>
                </div>
                <div class="col-md-2" >
                </div>
                <div class="form-check-inline">
                    <input class="form-check-input Volt12" type="checkbox" value="Volt12" id="Volt12" >
                    <label class="form-check-label" for="Volt12">
                        12
                    </label>
                </div>
                <div class="col-md-1" >
                </div>
                <div class="form-check-inline">
                    <input class="form-check-input Volt24" type="checkbox" value="Volt24" id="Volt24" >
                    <label class="form-check-label" for="Volt24">
                        24
                    </label>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-3 " >
                    <label for="ex5" style="font-size: 12pt; font-weight: normal">Watt (Effizienz berücksichtigt)</label>
                </div>
                <div class="col-md-2 " style="margin-right:-50px;font-size: 10pt; font-weight: normal">
                    <b id="minVal5">15</b>
                </div>
                <div class="col-md-5 " >
                    <input id="ex5" type="text" class="span2" value="" data-slider-min="15" data-slider-id="RC" data-slider-max="270" data-slider-step="1" data-slider-value="[15,270]" style="width: 100%" data-slider-tooltip="hide" data-slider-handle="round"/>
                </div>
                <div class="col-md-2" style="font-size: 10pt; font-weight: normal">
                    <b id="maxVal5">270</b>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-3 " >
                    <label for="ex55" style="font-size: 12pt; font-weight: normal">Gewicht (Kg)</label>
                </div>
                <div class="col-md-2 " style="margin-right:-50px;font-size: 10pt; font-weight: normal">
                    <b id="minVal55">0.10</b>
                </div>
                <div class="col-md-5 " >
                    <input id="ex55" type="text" class="span2" value="" data-slider-min="0.10" data-slider-id="RC" data-slider-max="3.50" data-slider-step="0.01" data-slider-value="[0.10,3.50]" style="width: 100%" data-slider-tooltip="hide" data-slider-handle="round"/>
                </div>
                <div class="col-md-2" style="font-size: 10pt; font-weight: normal">
                    <b id="maxVal55">3.50</b>
                </div>
            </div>
            <br><br>

            <br><br><br><br>
            <div class="row justify-content-center">
                <button type="submit" class="btn btn-outline-info" id="übernehmen5" name="übernehmen5" value="übernehmen5">übernehmen</button>
            </div>
            <div class="row justify-content-end w-75">
                <button type="submit" class="btn btn-outline-info" id="Nächst5" name="Nächst5" value="Nächst5">weiter</button>
            </div>


            <br>
        </form>
    </div>


    <div class="row w-75 my-5 " id="Kalkulation" style="font-family: TKTypeRegular;font-size: 15px ;font-weight: normal;margin-left: 18%" >
        <div class="col col-md-12 text-center">
            <div class="table-responsive-md">
                <h4 class="text-left font-weight-bold"  style="color: #00A0F0 ; margin-bottom: 30px">Unsere Empfehlung für 12 Volt :</h4>
                <table class="table" id="myTable55" style="display: block">
                    <tbody>
                        <tr>
                            <th class="text-left" >Variante</td>
                            <td class="font-weight-bold">Marke</td>
                            <td class="font-weight-bold">Typ</td>
                            <td class="font-weight-bold" style="width: 150px">Abmessungen</td>
                            <td class="font-weight-bold">Watt<br>(Effizienz berücksichtigt)</td>
                            <td class="font-weight-bold">Gewicht (Kg)</td>
                            <td class="font-weight-bold">Schutzklasse</td>
                            <td class="font-weight-bold"style="width: 50px">Preis (€)</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="table-responsive-md mb-3">
                <h4 class="text-left font-weight-bold"  style="color: #00A0F0 ;margin-bottom: 30px; margin-top: 25px">Unsere Empfehlung für 24 Volt :</h4>
                <table class="table" id="myTable555" style="display: block">
                    <tbody>
                    <tr>
                        <th class="text-left" >Variante</td>
                        <td class="font-weight-bold" style="width: 50px">Marke</td>
                        <td class="font-weight-bold">Typ</td>
                        <td class="font-weight-bold" style="width: 150px">Abmessungen</td>
                        <td class="font-weight-bold">Watt<br>(Effizienz berücksichtigt)</td>
                        <td class="font-weight-bold">Gewicht (Kg)</td>
                        <td class="font-weight-bold">Schutzklasse</td>
                        <td class="font-weight-bold" style="width: 50px">Preis (€)</td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row justify-content-end w-75">
            <button type="submit" class="btn btn-outline-info" id="Nächst5" name="Nächst5" value="Nächst5">weiter</button>
        </div>
    </div>

    <h6 class="result5" style="color: #0056b3; font-size: 10pt; margin-left: 10%"></h6>

    <div class="row w-75 my-5 " id="myDIV5" style="font-family: TKTypeRegular;font-size: 15px ;font-weight: normal;margin-left: 15%" >
        <div class="col col-md-12 text-center">
            <div class="table-responsive-md">
                <table class="table" id="myTable5" style="display: none;margin-left: 5%">
                <tbody>
                <tr>
                    <th class="text-left" style="color: #00A0F0">Netzteile</th>
                    <td></td>
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
                    <td class="font-weight-bold" style="width: 100px">Typ</td>
                    <td class="font-weight-bold">Abmessungen (Länge x Breite x Höhe)</td>
                    <td class="font-weight-bold">Volt</td>
                    <td class="font-weight-bold">Watt<br>(Effizienz berücksichtigt)</td>
                    <td class="font-weight-bold">Gewicht (Kg)</td>
                    <td class="font-weight-bold">Schutzklasse</td>
                    <td class="font-weight-bold"style="width: 100px">Anzahl</td>
                    <td class="font-weight-bold">Preis pro Netzteil <small>Gesamtpreis<br>(€)</small></td>
                    <td></td>
                    <td></td>
                </tr>

                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



</div>


<script>

    $(document).ready(function () {


        $("#ex5").slider();
        $("#ex55").slider();
        $("#ex5").on("slide", function (slideEvt) {

            $("#minVal5").text(slideEvt.value[0]);
            $("#maxVal5").text(slideEvt.value[1]);
            var minVal5 = slideEvt.value[0];
            var maxVal5 = slideEvt.value[1];

            $.ajax
            ({
                type: "POST",
                url: "insertNetzteile.php",
                data: {"minWatt": minVal5, "maxWatt": maxVal5},
                success: function (data) {
                }
            });

        });

        $("#ex55").on("slide", function (slideEvt) {

            $("#minVal55").text(slideEvt.value[0]);
            $("#maxVal55").text(slideEvt.value[1]);
            var minVal55 = slideEvt.value[0];
            var maxVal55 = slideEvt.value[1];

            $.ajax
            ({
                type: "POST",
                url: "insertNetzteile.php",
                data: {"minGewicht": minVal55, "maxGewicht": maxVal55},
                success: function (data) {
                }
            });

        });
        var Volt12 ='nein';
        var Volt24='nein';

        $('input.Volt12').change(function(){
            if ($('input.Volt12').prop('checked')) {
               Volt12="ja";
            }else {
                Volt12="nein";
            }
        });

        $('input.Volt24').change(function(){
            if ($('input.Volt24').prop('checked')) {
               Volt24="ja";
            }else {
             Volt24="nein";
            }
        });


        $('#übernehmen5').click(function (e) {

            e.preventDefault();
        // alert(Volt24);
        // alert(Volt12);
            $.ajax
            ({
                type: "POST",
                url: "insertNetzteile.php",
                data: {"übernehmen5":'übernehmen5',"Volt12": Volt12, "Volt24": Volt24},
                success: function (data) {



                    if (data==="Es gibt kein Ergebnis" || data==="Query funktioniert nicht" )  {
                        // alert(data);


                        $("#myTable5").find("tr:gt(1)").remove();



                        $( ".result5" ).html(data);

                        $("#myTable5 > tbody").append(
                            "<tr><th scope='row'>"+data+"</th></tr>"
                        );
                    }else {
                        $('#myDIV5').css('display', 'block');

                        $("#myTable5").find("tr:gt(1)").remove();



                        $( ".result5" ).html('');

                        $('#myTable5').css('display', 'block');




                        var json_data= JSON.parse(data);
                        var i;
                        // alert(json_data);



                        for (i = 1; i < json_data.length ; i++) {
                            var GermanFormatTrafo = String(json_data[i]["Trafo"]).replace('.',',');
                            var GermanFormatGewicht = String(json_data[i]["Gewicht"]).replace('.',',');

                            $("#myTable5 > tbody").append(
                                "<tr><th class='font-weight-normal text-left' >"+json_data[i]["Marke"]+"</th><td class='font-weight-normal'>"+json_data[i]["Bezeichnung"]+"</td><td>"+json_data[i]["Abmessungen"]+"</td><td>"+json_data[i]["Volt"]+"</td><td>"+json_data[i]["WattTats"]+"</td><td>"+GermanFormatGewicht+"</td><td>"+json_data[i]["Schutzklasse"]+"</td><td><input type='number' min='0' max='100' class='form-control Anzahl' id="+i+"></td><td style='font-weight: bold'>"+GermanFormatTrafo+"<br><small class="+i+">0</small></td><td></td><td><button type='submit' RowPreis="+json_data[i]["Trafo"]+" class='btn btn-outline-info' ProductId5="+json_data[i]["id"]+"   name='wählen5' id='wählen5'  Rownumber="+i+" >wählen</button></td></tr>"
                            )
                        }

                    }


                    $('#wählen5').click(function(event){
                        event.preventDefault();

                        var id = $(this).attr('ProductId5');
                        var RowPreis= $(this).attr('RowPreis');
                        var Rownumber = $(this).attr('Rownumber');
                        var Anzahl=$("#"+Rownumber+"").val();


                        var i;
                        for (i = 0; i < json_data.length ; i++) {
                            if (i!=Rownumber){
                                $("#"+i+"").val('');
                            }
                        }



                        var j;
                        for (j = 0; j < json_data.length ; j++) {
                            if (j!=Rownumber){
                                $("."+j+"").html('');
                            }
                        };
                        var Gesamtpreis=RowPreis*Anzahl;
                        var Gesamtpreis = Number(Gesamtpreis).toFixed(2);
                        var Gesamtpreis = String(Gesamtpreis).replace('.',',');
                        $("."+Rownumber+"").html(Gesamtpreis);

                        // alert(Anzahl);
                        $.ajax
                        ({
                            type: "POST",
                            url: "insertNetzteile.php",
                            data: { "wählen5":"wählen5","ProductId5": id , "Anzahl":Anzahl},
                            success: function (data) {
                                // $('.result').html(data);
                                alert(data);
                            }
                        });


                    });

                }
            });
        });
        $('#Nächst5').click(function (e) {

            e.preventDefault();

                $('#Netzteile').fadeOut();
                $('#TabFive').attr('style', 'background-color: #999b96 !important');
                $('#TabFiveLabel').css("color", "#999b96");
                n=0;

                $('#Lichtwerbeprofile').slideToggle();

                $('#TabSix').attr('style', 'background-color: #FFB400 !important');
                $('#TabSixLabel').css("color", "#FFB400");
                l=1;



        });

    });

</script>