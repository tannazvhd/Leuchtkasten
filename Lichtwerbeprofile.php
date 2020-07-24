<script>

    $.ajax
    ({
        type: "POST",
        url: "insertLichtwerbeprofile.php",
        data: { "BenötigteMenge": "BenötigteMenge" },
        success: function (data) {
            var data = data;
            $( "#BenötigteMengeCalculation" ).html(data);
        }
    });

</script>

<div class="container-fluid" id="Lichtwerbeprofile">
    <form method="post" action="" id="contactform6" class="pt-4 my-5"  style="width:80%; margin: 0 auto ;border: solid 1px lightgray;">

        <div class="row justify-content-center " >
            <div class="row justify-content-center mb-5 " style="width: 900px ">
                <div class="col-md-3 py-4" style="margin-right: -60px ;border-bottom: solid 1px darkgray" >
                    <h6 id="BenötigteMenge" style="font-size: 12pt; font-weight: normal">Benötigte Menge (m) </h6>
                </div>
                <div class="col-md-2 py-4" >
                    <h6 id="BenötigteMengeCalculation" style="font-size: 12pt; font-weight: normal "></h6>
                </div>
                <div class="col-md-7" >
                </div>
            </div>

            <?php
            include 'insertLichtwerbeprofile.php';
            ?>
            <br><br><br><br>
            <div class="row justify-content-center" style="width: 900px">
                <div class="col-md-4 pt-4" >
                    <label style="font-size: 12pt; font-weight: normal">Profilart</label>
                </div>
                <div class="col-md-1 " style="border-left: solid 1px darkgray">
                </div>
                <div class="col-md-3 pt-4"style="margin-right:-20px;" >
                    <label for="ex6 " style="font-size: 12pt; font-weight: normal">Gesamtgewicht (Kg)</label>
                </div>
                <div class="col-md-1 pt-4 " style="margin-right:-40px;font-size: 10pt; font-weight: normal">
                    <b id="minVal6">1</b>
                </div>
                <div class="col-md-2 pt-4">
                    <input id="ex6" type="text" class="span2" value="" data-slider-min="1" data-slider-id="RC" data-slider-max="14" data-slider-step="1" data-slider-value="[1,14]" style="width: 100%" data-slider-tooltip="hide" data-slider-handle="round"/>
                </div>
                <div class="col-md-1 pt-4" style="font-size: 10pt; font-weight: normal">
                    <b id="maxVal6">14</b>
                </div>
            </div>


            <div class="row justify-content-center " style="width: 900px">
                <div class="col-md-3" style="margin-right: -60px" >
                    <label for="Transparentprofil" style="font-size: 12pt; font-weight: normal">Transparentprofil</label>
                </div>
                <div class="col-md-2 ">
                    <input type="checkbox" id="Transparentprofil" name="Transparentprofil" data-toggle="toggle" data-style="ios" data-size="mini" data-on="Ja" data-off="Nein" data-onstyle="info" checked>
                </div>
                <div class="col-md-7 ">
                </div>
            </div>

            <div class="row justify-content-center" style="width: 900px">
                <div class="col-md-3" style="margin-right: -60px" >
                    <label for="Hohlkammerprofil" style="font-size: 12pt; font-weight: normal">Hohlkammerprofil</label>
                </div>
                <div class="col-md-2 ">
                    <input type="checkbox" id="Hohlkammerprofil" name="Hohlkammerprofil" data-toggle="toggle" data-style="ios" data-size="mini" data-on="Ja" data-off="Nein" data-onstyle="info" checked>
                </div>
                <div class="col-md-7 ">
                </div>
            </div>

        </div>


        <br><br><br><br>
        <div class="row justify-content-center">
            <button type="submit" class="btn btn-outline-info" id="übernehmen6" name="übernehmen6" value="übernehmen6">übernehmen</button>
        </div>
        <div class="row justify-content-end w-75">
            <button type="submit" class="btn btn-outline-info" id="Nächst6" name="Nächst6" value="Nächst6">weiter</button>
        </div>


        <h6 class="result6" style="color: #0056b3; font-size: 10pt"></h6>

        <br>
    </form>

    <div class="row w-75 my-5 " style="font-family: TKTypeRegular;font-size: 15px ;font-weight: normal;margin-left: 15%" >
        <div class="col col-md-12 text-center">
            <div class="table-responsive-md">
                <table class="table" id="myTable6" style="display: none">
                    <tbody>
                    <tr>
                        <th class="text-left" style="color: #00A0F0">Lichtwerbeprofil Produktauswahl</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th class="text-left" >Bezeichnung</td>
                        <td class="font-weight-bold">Typ</td>
                        <td class="font-weight-bold">Abdeckwinkel benötigt</td>
                        <td class="font-weight-bold">Gewicht/6m Länge(Kg)</td>
                        <td class="font-weight-bold">Preis/6m Länge(€)</td>
                        <td class="font-weight-bold">Preis<br>(€)</td>
                        <td></td>
                        <td></td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="row w-75 my-5 " style="font-family: TKTypeRegular;font-size: 15px ;font-weight: normal;margin-left: 15%" >
        <div class="col col-md-12 text-center">
            <div class="table-responsive-md">
                <table class="table" id="myTable6Plus" disabled style="display: none">
                    <tbody>
                    <tr>
                        <th class="text-left" style="color: #00A0F0">Abdeckwinkel Produktauswahl</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th class="text-left">Bezeichnung</td>
                        <td class="font-weight-bold" style="width: 180px">    </td>
                        <td class="font-weight-bold" style="width: 180px">     </td>
                        <td class="font-weight-bold">Gewicht/6m Länge(Kg)</td>
                        <td class="font-weight-bold">Preis/6m Länge(€)</td>
                        <td class="font-weight-bold">Preis (€)</td>
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

        $('#Nächst6').click(function (e) {

            e.preventDefault();

            $('#Lichtwerbeprofile').fadeOut();
            $('#TabSix').attr('style', 'background-color: #999b96 !important');
            $('#TabSixLabel').css("color", "#999b96");
            l=0;

            $('#KalkulationDIV').slideToggle();

            $('#TabSeven').attr('style', 'background-color: #FFB400 !important');
            $('#TabSevenLabel').css("color", "#FFB400");
            Kal=1;


            Zussamenfassungfunction()

        });


        $("#ex6").slider();
        $("#ex6").on("slide", function(slideEvt) {

            $("#minVal6").text(slideEvt.value[0]);
            $("#maxVal6").text(slideEvt.value[1]);
            var minVal6 = slideEvt.value[0];
            var maxVal6 = slideEvt.value[1];

            $.ajax
            ({
                type: "POST",
                url: "insertLichtwerbeprofile.php",
                data: { "minVal6": minVal6, "maxVal6": maxVal6 },
                success: function (data) {
                    $('#contactform6')[0].reset();
                }
            });

        });

        $('#übernehmen6').click(function (e) {

            e.preventDefault();
            var übernehmen6 = $('#übernehmen6').val();

            var Transparentprofil = $('#Transparentprofil').prop('checked');
            var Hohlkammerprofil = $('#Hohlkammerprofil').prop('checked');

            $.ajax
            ({
                type: "POST",
                url: "insertLichtwerbeprofile.php",
                data: { "übernehmen6": übernehmen6,"Transparentprofil": Transparentprofil, "Hohlkammerprofil": Hohlkammerprofil },
                success: function (data) {



                    var data =data;


                    if (data==="Es gibt kein Ergebnis" || data==="Query funktioniert nicht" || data==[]){
                        // alert(data);


                        $("#myTable6").find("tr:gt(1)").remove();
                        $("#myTable6Plus").find("tr:gt(1)").remove();
                        $('#myTable6Plus').css('display', 'none');



                        $( ".result6" ).html(data);

                        $("#myTable6 > tbody").append(
                            "<tr><th scope='row'>"+data+"</th></tr>"
                        );
                    }else {

                        $("#myTable6").find("tr:gt(1)").remove();
                        $("#myTable6Plus").find("tr:gt(1)").remove();
                        $('#myTable6Plus').css('display', 'none');



                        $( ".result6" ).html('');

                        $('#myTable6').css('display', 'block');




                        var json_data= JSON.parse(data);
                        var i;
                        // alert(json_data);

                        var Breite = json_data[json_data.length-1];
                        var Höhe = json_data[json_data.length-2];
                        var BenötigteMenge = ((4*Höhe)+(4*Breite))/1000;
                        // alert(BenötigteMenge);

                        for (i = 0; i < json_data.length-2 ; i++) {
                            var calculatedPrice = BenötigteMenge*json_data[i]["Preis"];
                            var calculatedPrice = Number(calculatedPrice).toFixed(2);
                            var calculatedPrice = String(calculatedPrice).replace('.',',');


                            var GermanFormatGewicht6m= String(json_data[i]["Gewicht6m"]).replace('.',',');
                            var GermanFormat6mPreis = String(json_data[i]["Preis"]).replace('.',',');

                            $("#myTable6 > tbody").append(
                                "<tr class='line' id="+i+" ><th class='font-weight-normal text-left' >"+json_data[i]["Bezeichnung"]+"</th><td class='font-weight-normal'>"+json_data[i]["Typ"]+"</td><td>"+json_data[i]["AbstufungVorhanden"]+"</td><td>"+GermanFormatGewicht6m+"</td><td>"+GermanFormat6mPreis+"</td><td>"+calculatedPrice+"</td><td></td><td><button type='submit' class='btn btn-outline-info' id='wählen6' name='wählen6'  productId="+json_data[i]["id"]+"  rowId="+i+" value="+json_data[i]["AbstufungVorhanden"]+" >wählen</button></td></tr>"
                            )
                        }

                    }

                    $('#wählen6').click(function(event){
                        event.preventDefault();

                        var AbstufungVorhanden = $(this).attr('value');
                        var productId = $(this).attr('productId');
                        var rowId = $(this).attr('rowId');

                        // alert (rowId);
                        $('.line').css('color','black');
                        $('#'+rowId).css('color','#00A0F0');


                        if (AbstufungVorhanden=='ja'){
                           $("#myTable6Plus").find("tr:gt(1)").remove();


                            alert("Bitte wählen Sie 'Abdeckwinkel'");



                            $('#myTable6Plus').css('display', 'block');

                            $.ajax
                            ({
                                type: "POST",
                                url: "insertLichtwerbeprofile.php",
                                data: { "productId6": productId , "AbstufungVorhanden":AbstufungVorhanden },
                                success: function (data) {

                                    var json_data= JSON.parse(data);
                                    var i;

                                    var Breite = json_data[json_data.length-1];
                                    var Höhe = json_data[json_data.length-2];
                                    var BenötigteMenge = ((4*Höhe)+(4*Breite))/1000;

                                    for (i = 0; i < json_data.length-2 ; i++) {
                                        var calculatedPrice = BenötigteMenge*json_data[i]["Preis"];
                                        var calculatedPrice = Number(calculatedPrice).toFixed(2);
                                        var calculatedPrice = String(calculatedPrice).replace('.',',');
                                        var GermanFormatGewicht6m= String(json_data[i]["Gewicht6m"]).replace('.',',');
                                        var GermanFormat6mPreis = String(json_data[i]["Preis"]).replace('.',',');

                                        $("#myTable6Plus > tbody").append(
                                            "<tr class='line' id="+i+" ><th class='font-weight-normal text-left'>"+json_data[i]["Bezeichnung"]+"</th><td></td><td></td><td>"+GermanFormatGewicht6m+"</td><td>"+GermanFormat6mPreis+"</td><td>"+calculatedPrice+"</td><td></td><td><button type='submit' class='btn btn-outline-info' id='wählen6Plus' name='wählen6Plus' rowId="+i+" productIdPlus="+json_data[i]["id"]+" >wählen</button></td></tr>"
                                        )
                                    }

                                    $('#wählen6Plus').click(function(event) {
                                        event.preventDefault();
                                        var productIdPlus = $(this).attr('productIdPlus');



                                        $.ajax
                                        ({
                                            type: "POST",
                                            url: "insertLichtwerbeprofile.php",
                                            data: { "productIdPlus6": productIdPlus },
                                            success: function (data) {
                                                alert(data);
                                            }
                                        });
                                    });

                                }
                            });


                        }else{
                            $("#myTable6Plus").find("tr:gt(1)").remove();
                            $('#myTable6Plus').css('display', 'none');

                            $.ajax
                            ({
                                type: "POST",
                                url: "insertLichtwerbeprofile.php",
                                data: { "productId6": productId },
                                success: function (data) {
                                    alert(data);
                                }
                            });
                        }
                    });

                    $('#Lichtwerbeprofile')[0].reset();
                }
            });




        });


    });








</script>