
<div class="container-fluid" id="Spiegelfläche">
    <div class="row justify-content-center my-5 " style="width:80%; margin: 0 auto ; border: solid 1px lightgray;">
        <form method="post" action="" id="contactform" class="pt-4">
            <?php
            include 'insertSpiegelfläche.php';
            ?>

            <br><br>
            <div class="row">
                <div class="col-md-2 " >
                    <label style="font-size: 12pt; font-weight: normal">Werkstoff</label>
                </div>
                <div class="col-md-8" >
                    <div class="form-group row justify-content-center">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Werkstoff" id="Acrlyglas" value="Acrlyglas" checked>
                            <label class="form-check-label" for="Acrlyglas" style="font-size: 12pt; font-weight: normal">Acrlyglas</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Werkstoff" id="Polycarbonat" value="Polycarbonat">
                            <label class="form-check-label" for="Polycarbonat" style="font-size: 12pt; font-weight: normal">Polycarbonat</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Werkstoff" id="A-PET" value="A-PET">
                            <label class="form-check-label" for="A-PET" style="font-size: 12pt; font-weight: normal">A-PET</label>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>

            <?php
            include 'colorBox.php';
            ?>



            <br><br>
            <div class="row">
                <div class="col-md-3 " >
                    <label style="font-size: 12pt; font-weight: normal">Materialstärke</label>
                </div>
                <div class="col-md-2">
                    <div style="font-size: 10pt; font-weight: normal">
                        <select id="Materialstärke" class="form-control-md" >
                            <option disabled>wählen</option>
                            <option value="2" >2 mm</option>
                            <option value="3">3 mm</option>
                            <option value="4">4 mm</option>
                            <option value="5">5 mm</option>
                            <option value="6">6 mm</option>
                        </select>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-3 " >
                    <label style="font-size: 12pt; font-weight: normal">Hohe Schlagzähigkeit</label>
                </div>
                <div class="col-md-2 ">
                    <style>
                        .toggle.ios, .toggle-on.ios, .toggle-off.ios { border-radius: 20px; }
                    </style>
                    <input type="checkbox" id="Schlagzähigkeit" name="Schlagzähigkeit" data-toggle="toggle" data-style="ios" data-size="mini" data-on="Ja" data-onstyle="info" data-off="Nein">
                </div>
                <div class="col-md-1 " style="border-left: solid 1px darkgray">
                </div>
                <div class="col-md-1 " >
                    <label for="ex2" style="font-size: 12pt; font-weight: normal">Preis</label>
                </div>
                <div class="col-md-1 " style="font-size: 10pt; font-weight: normal">
                   <b id="minVal">98</b>€
                </div>
                <div class="col-md-3 " >
                    <input id="ex2" type="text" class="span2" value="" data-slider-min="98" data-slider-id="RC" data-slider-max="1174" data-slider-step="1" data-slider-value="[98,1174]" style="width: 100%" data-slider-tooltip="hide" data-slider-handle="round"/>
                </div>
                <div class="col-md-1" style="font-size: 10pt; font-weight: normal">
                    <b id="maxVal">1174</b>€
                </div>
            </div>
            <br><br>

            <div class="row">
                <div class="col-md-3 " >
                    <label style="font-size: 12pt; font-weight: normal">Brandschutzklasse b1</label>
                </div>
                <div class="col-md-2 ">
                    <input type="checkbox" id="Brandschutzklasse" name="Brandschutzklasse" data-toggle="toggle" data-style="ios" data-size="mini" data-on="Ja" data-onstyle="info" data-off="Nein">
                </div>
                <div class="col-md-1 " style="border-left: solid 1px darkgray">
                </div>
                <div class="col-md-5 " >
                    <label for="Materialreste" style="font-size: 12pt; font-weight: normal">Materialreste bitte mitschicken</label>
                </div>
                <div class="col-md-1 ">
                    <input type="checkbox" id="Materialreste" name="Materialreste" data-toggle="toggle" data-style="ios" data-size="mini" data-on="Ja"  data-onstyle="info" data-off="Nein">
                </div>

            </div>
            <br><br>
            <div class="row">

            </div>
            <br><br><br><br>

            <div class="row justify-content-center">
                <button type="submit" class="btn btn-outline-info" id="übernehmen2" name="übernehmen2" value="übernehmen2">übernehmen</button>
            </div>
            <div class="row justify-content-end">
                <button type="submit" class="btn btn-outline-info" id="Nächst2" name="Nächst2" value="Nächst2">weiter</button>
            </div>

            <h6 class="result" style="color: #0056b3; font-size: 10pt"></h6>


            <br><br><br><br>
        </form>

    </div>

    <div class="row w-75 mx-auto " style="font-family: TKTypeRegular;font-size: 15px ;font-weight: normal;margin: 0 auto;" >
        <div class="col col-md-12 text-center">
            <div class="table-responsive-md">
                <table class="table" id="myTable" style="display: none">
                    <tbody>
                    <tr>
                        <th scope="row"></th>
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
                        <th>Produkt</td>
                        <th>Farbe/Farbcode</th>
                        <td class="font-weight-bold">Werkstoff</td>
                        <td class="font-weight-bold">Dicke (mm)</td>
                        <td class="font-weight-bold">Lichtdurchlässigkeit (%)</td>
                        <td class="font-weight-bold">Brandschutzklasse</td>
                        <td class="font-weight-bold">Schlagzähigkeit (KJ/m²)</td>
                        <td class="font-weight-bold">Preis (€)</td>
                        <td class="font-weight-bold"></td>

                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>





<script>

    $(document).ready(function () {
        var radio=$("input[name='Werkstoff']:checked").val();
        var select=$('#Materialstärke').val();

        $("#ex2").slider();
        $("#ex2").on("slide", function(slideEvt) {
            $("#minVal").text(slideEvt.value[0]);
            $("#maxVal").text(slideEvt.value[1]);
            var minPreis = slideEvt.value[0];
            var maxPreis = slideEvt.value[1];



            $.ajax
            ({
                type: "POST",
                url: "insertSpiegelfläche.php",
                data: { "minPreis": minPreis, "maxPreis": maxPreis },
                success: function (data) {
                    $("#Werkstoff")[radio].prop("checked", true);
                    $("#Materialstärke")[select].attr('selected','selected');
                    $('#contactform')[0].reset();
                }
            });

        });

        $('#übernehmen2').click(function (e) {

            e.preventDefault();
            var übernehmen2 = $('#übernehmen2').val();
            var Werkstoff = $("input[name='Werkstoff']:checked").val();
            var Materialstärke = $('#Materialstärke').val();
            var Schlagzähigkeit = $('#Schlagzähigkeit').prop('checked');
            var Brandschutzklasse = $('#Brandschutzklasse').prop('checked');
            var Materialreste = $('#Materialreste').prop('checked');


            $.ajax
            ({
                type: "POST",
                url: "insertSpiegelfläche.php",
                data: { "übernehmen2": übernehmen2,"Werkstoff": Werkstoff, "Materialstärke": Materialstärke, "Schlagzähigkeit": Schlagzähigkeit, "Brandschutzklasse": Brandschutzklasse, "Materialreste": Materialreste },
                success: function (data) {


                    var data =data;
                    // $( ".result" ).html(data);

                    if (data==="Es gibt kein Ergebnis" || data==="Query funktioniert nicht" || data==[]){
                        $("#myTable").find("tr:gt(1)").remove();

                        $( ".result" ).html(data);

                        $("#myTable > tbody").append(
                            "<tr><th scope='row'>"+data+"</th></tr>"
                        );
                    }else {
                        $("#myTable").find("tr:gt(1)").remove();

                        $( ".result" ).html('');

                        var json_data= JSON.parse(data);
                        var i;

                        $('#myTable').css('display', 'block');

                        for (i = 0; i < json_data.length ; i++) {
                            var GermanFormatPreis = String(json_data[i]["Preis"]).replace('.',',');

                            $("#myTable > tbody").append(
                                "<tr><th scope='row'>"+json_data[i]["Marke"]+" "+json_data[i]["Ausführung"]+"</th><th class='font-weight-normal'>"+json_data[i]["Farbbezeichnung"]+"/"+json_data[i]["Farbcode"]+"</th><td class='font-weight-normal'>"+json_data[i]["Werkstoff"]+"</td><td>"+json_data[i]["Materialstärke"]+"</td><td>"+json_data[i]["Lichtdurchlässigkeit"]+"</td><td>"+json_data[i]["Brandschutz"]+"</td><td>"+json_data[i]["Schlagzähigkeit"]+"</td><td>"+GermanFormatPreis+"</td><td><button type='submit' class='btn btn-outline-info' id='wählen' name='wählen' value="+json_data[i]["id"]+" >wählen</button></td></tr>"
                            );
                        }
                    }

                    $('#wählen').click(function(event){
                        event.preventDefault();

                        var id = $(this).attr('value');


                        if ($( "#TabThree" ).is('[disabled]')){
                            $('#Spiegelfläche').fadeOut();
                            $('#TabTwo').attr('style', 'background-color: #999b96 !important');
                            $('#TabTwoLabel').css("color", "#999b96");
                            j=0;

                            $('#LEDModule').slideToggle();

                            $('#TabFour').attr('style', 'background-color: #FFB400 !important');
                            $('#TabFourLabel').css("color", "#FFB400");
                            LED=1;
                        }else{


                            $('#Spiegelfläche').fadeOut();
                            $('#TabTwo').attr('style', 'background-color: #999b96 !important');
                            $('#TabTwoLabel').css("color", "#999b96");
                            j=0;

                            $('#Rückseite-Trennwand').slideToggle();

                            $('#TabThree').attr('style', 'background-color: #FFB400 !important');
                            $('#TabThreeLabel').css("color", "#FFB400");
                            k=1;
                        };

                        $.ajax
                        ({
                            type: "POST",
                            url: "insertSpiegelfläche.php",
                            data: { "ProductId": id },
                            success: function (data) {
                                // $('.result').html(data);
                                alert(data);
                            }
                        });



                    });


                    $("#Werkstoff")[radio].prop("checked", true);
                    $("#Materialstärke")[select].attr('selected','selected');
                    $('#Spiegelfläche')[0].reset();
                }
            });
        });


        $('#Nächst2').click(function (e) {

            e.preventDefault();

            if ($( "#TabThree" ).is('[disabled]')){
                $('#Spiegelfläche').fadeOut();
                $('#TabTwo').attr('style', 'background-color: #999b96 !important');
                $('#TabTwoLabel').css("color", "#999b96");
                j=0;

                $('#LEDModule').slideToggle();

                $('#TabFour').attr('style', 'background-color: #FFB400 !important');
                $('#TabFourLabel').css("color", "#FFB400");
                LED=1;
            }else{


                $('#Spiegelfläche').fadeOut();
                $('#TabTwo').attr('style', 'background-color: #999b96 !important');
                $('#TabTwoLabel').css("color", "#999b96");
                j=0;

                $('#Rückseite-Trennwand').slideToggle();

                $('#TabThree').attr('style', 'background-color: #FFB400 !important');
                $('#TabThreeLabel').css("color", "#FFB400");
                k=1;
            }


        });
    });


</script>