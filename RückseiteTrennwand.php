<div class="container-fluid" id="RückseiteTrennwand">

    <div class="row justify-content-center my-5" style="width:80%; margin: 0 auto ; border: solid 1px lightgray;">
        <form method="post" action="" id="contactform3" class="pt-4" >
            <?php
                    include 'insertRückseiteTrennwand.php';
            ?>
            <br><br>
            <div class="row justify-content-center" style="width: 800px">
                <div class="col-md-2 " >
                    <label style="font-size: 12pt; font-weight: normal">Werkstoff</label>
                </div>
                <div class="col-md-3" >
                    <div class="form-group row justify-content-start">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Werkstoff3" id="Aluminiumverbund" value="Aluminiumverbund" checked>
                            <label class="form-check-label" for="Aluminiumverbund" style="font-size: 12pt; font-weight: normal">Aluminiumverbund</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Werkstoff3" id="PVC-Schaum" value="PVC-Schaum">
                            <label class="form-check-label" for="PVC-Schaum" style="font-size: 12pt; font-weight: normal">PVC-Schaum</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 " style="border-left: solid 1px darkgray;height: 30px">
                </div>
                <div class="col-md-1 " >
                    <label for="ex3" style="font-size: 12pt; font-weight: normal">Preis</label>
                </div>
                <div class="col-md-1 " style="font-size: 10pt; font-weight: normal">
                    <b id="minVal3">50</b> €
                </div>
                <div class="col-md-3 ">
                    <input id="ex3" type="text" class="span2" value="" data-slider-min="50" data-slider-id="RC" data-slider-max="299" data-slider-step="1" data-slider-value="[50,299]" style="width: 100%" data-slider-tooltip="hide" data-slider-handle="round"/>
                </div>
                <div class="col-md-1" style="font-size: 10pt; font-weight: normal">
                    <b id="maxVal3">299</b> €
                </div>
            </div>
            <br><br>
            <div class="row justify-content-center">
                <div class="col-md-2 " >
                    <label style="font-size: 12pt; font-weight: normal">Materialstärke</label>
                </div>
                <div class="col-md-3">
                    <div style="font-size: 10pt; font-weight: normal">
                        <select id="Materialstärke3" class="form-control-md" >
                            <option disabled>wählen</option>
                            <option value="2" >2 mm</option>
                            <option value="3">3 mm</option>
                            <option value="4">4 mm</option>
                            <option value="5">5 mm</option>
                            <option value="6">6 mm</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-1 " style="border-left: solid 1px darkgray">
                </div>
                <div class="col-md-4 " >
                    <label for="Materialreste3" style="font-size: 12pt; font-weight: normal">Materialreste bitte mitschicken</label>
                </div>
                <div class="col-md-2 ">
                    <input type="checkbox" id="Materialreste3" name="Materialreste3" data-toggle="toggle" data-style="ios" data-size="mini" data-on="Ja" data-off="Nein">
                </div>
            </div>

            <br><br><br><br>

            <div class="row justify-content-center">
                <button type="submit" class="btn btn-outline-info" id="übernehmen3" name="übernehmen3" value="übernehmen3">übernehmen</button>
            </div>
            <div class="row justify-content-end">
                <button type="submit" class="btn btn-outline-info" id="Nächst3" name="Nächst3" value="Nächst3">weiter</button>
            </div>
            <h6 class="result3" style="color: #0056b3; font-size: 10pt"></h6>

            <br><br><br><br>
        </form>
    </div>


    <div class="row justify-content-center my-5 " style="font-family: TKTypeRegular;font-size: 15px ;font-weight: normal;width:40%; margin: 0 auto;" >
        <div class="col col-md-12 text-center">
            <div class="table-responsive-md">
                <table class="table" id="myTable3" style="display: none">
                    <tbody>
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td style="width: 100px"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Marke</td>
                        <td class="font-weight-bold">Ausführung</td>
                        <td class="font-weight-bold" style="width: 100px">Werkstoff</td>
                        <td class="font-weight-bold">Dicke (mm)</td>
                        <td class="font-weight-bold">Preis (€)</td>
                        <td class="font-weight-bold"></td>
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

        var radio=$("input[name='Werkstoff3']:checked").val();
        var select=$('#Materialstärke3').val();

        $("#ex3").slider();
        $("#ex3").on("slide", function(slideEvt) {

            $("#minVal3").text(slideEvt.value[0]);
            $("#maxVal3").text(slideEvt.value[1]);
            var minPreis3 = slideEvt.value[0];
            var maxPreis3 = slideEvt.value[1];



            $.ajax
            ({
                type: "POST",
                url: "insertRückseiteTrennwand.php",
                data: { "minPreis3": minPreis3, "maxPreis3": maxPreis3 },
                success: function (data) {
                    $("#Werkstoff3")[radio].prop("checked", true);
                    $("#Materialstärke3")[select].attr('selected','selected');
                    $('#contactform3')[0].reset();
                }
            });

        });




        $('#übernehmen3').click(function (e) {

            e.preventDefault();
            var übernehmen3 = $('#übernehmen3').val();
            var Werkstoff3 = $("input[name='Werkstoff3']:checked").val();
            var Materialstärke3 = $('#Materialstärke3').val();
            var Materialreste3 = $('#Materialreste3').prop('checked');


            $.ajax
            ({
                type: "POST",
                url: "insertRückseiteTrennwand.php",
                data: { "übernehmen3": übernehmen3,"Werkstoff3": Werkstoff3, "Materialstärke3": Materialstärke3, "Materialreste3": Materialreste3 },
                success: function (data) {


                    var data =data;

                    // $( ".result3" ).html(data);

                    if (data==="Es gibt kein Ergebnis" || data==="Query funktioniert nicht" || data==[]){
                        $('#myTable3').css('display', 'none');

                        $("#myTable3").find("tr:gt(1)").remove();

                        $( ".result3" ).html(data);

                        $("#myTable3 > tbody").append(
                            "<tr><th scope='row'>"+data+"</th></tr>"
                        );
                    }else {
                        $('#myTable3').css('display', 'block');

                        $("#myTable3").find("tr:gt(1)").remove();

                        $( ".result3" ).html('');

                        var json_data= JSON.parse(data);
                        var i;


                        for (i = 0; i < json_data.length ; i++) {
                            var GermanFormatPreis = String(json_data[i]["Preis"]).replace('.',',');

                            $("#myTable3 > tbody").append(
                                "<tr><th scope='row'>"+json_data[i]["Marke"]+"</th><td class='font-weight-normal'>"+json_data[i]["Ausführung"]+"</td><td class='font-weight-normal'>"+json_data[i]["Werkstoff"]+"</td><td>"+json_data[i]["Materialstärke"]+"</td><td>"+GermanFormatPreis+"</td><td></td><td><button type='submit' class='btn btn-outline-info' id='wählen3' name='wählen3' value="+json_data[i]["id"]+" >wählen</button></td><td></td></tr>"
                            );
                        }
                    }

                    $('#wählen3').click(function(event){
                        event.preventDefault();

                        $('#Rückseite-Trennwand').fadeOut();
                        $('#TabThree').attr('style', 'background-color: #999b96 !important');
                        $('#TabThreeLabel').css("color", "#999b96");
                        k=0;

                        $('#LEDModule').slideToggle();

                        $('#TabFour').attr('style', 'background-color: #FFB400 !important');
                        $('#TabFourLabel').css("color", "#FFB400");
                        LED=1;

                        var id = $(this).attr('value');
                        // alert(id);
                        $.ajax
                        ({
                            type: "POST",
                            url: "insertRückseiteTrennwand.php",
                            data: { "ProductId3": id },
                            success: function (data) {
                                // $('.result').html(data);
                                alert(data);
                            }
                        });



                    });


                    $("#Werkstoff3")[radio].prop("checked", true);
                    $("#Materialstärke3")[select].attr('selected','selected');
                    $('#RückseiteTrennwand')[0].reset();
                }
            });




        });

        $('#Nächst3').click(function (e) {

            e.preventDefault();

                $('#Rückseite-Trennwand').fadeOut();
                $('#TabThree').attr('style', 'background-color: #999b96 !important');
                $('#TabThreeLabel').css("color", "#999b96");
                k=0;

                $('#LEDModule').slideToggle();

                $('#TabFour').attr('style', 'background-color: #FFB400 !important');
                $('#TabFourLabel').css("color", "#FFB400");
                LED=1;

        });


    });






</script>