<div class="row justify-content-center my-5 " style="width:80%; margin: 0 auto ; border: solid 1px lightgray;">
    <form method="post" action="" class="pt-4">

        <?php
        include 'insertMaße.php';
        ?>

        <br><br>
        <div class="row" style="width: 100%">
            <div class="col-md-3 " >
                <label for="Lighting">Beleuchtungsart</label>
            </div>
            <div class="col-md-4 " >
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="Lighting" id="Lighting" value="Sidelighting" checked>Sidelighting
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="Lighting" id="Lighting" value="Backlighting">Backlighting
                    </label>
                </div>
            </div>
            <div class="col-md-5 " ></div>

        </div>
        <br><br>


<!--       SidelightingBox-->
        <div class="row SidelightingBox "style="display: block">
            <div class="col-md-1 " >
                <label for="SidelightingLeuchtkastenBreite">Breite</label>
            </div>
            <div class="col-md-2 ">
            <input type="number" class="form-control" id="SidelightingLeuchtkastenBreite" min='0' max='4000' name="SidelightingLeuchtkastenBreite">mm
            </div>

            <div class="col-md-1 "></div>

            <div class="col-md-1 ">
                <label for="SidelightingLeuchtkastenHöhe">Höhe</label>
            </div>
            <div class="col-md-2 ">
            <input type="number" class="form-control" id="SidelightingLeuchtkastenHöhe" min='0' max='4000' name="SidelightingLeuchtkastenHöhe">mm
            </div>

            <div class="col-md-1 "></div>
            <div class="col-md-1 ">
                <label for="SidelightingLeuchtkastenTiefe">Tiefe</label>
            </div>
            <div class="col-md-2 ">
            <input type="number" class="form-control" id="SidelightingLeuchtkastenTiefe" min='0' max='1000' name="SidelightingLeuchtkastenTiefe">mm
            </div>
        </div>
        <div class="col-md-4 text-info SidelightingLimits"></div>
        <br>


<!--        BacklightingBox-->


        <div class="row BacklightingBox" style="width:100% ;display: none">

            <div class="col-md-1 " >
                <label for="BacklightingLeuchtkastenBreite">Breite</label>
            </div>
            <div class="col-md-2 ">
                <input type="number" class="form-control" id="BacklightingLeuchtkastenBreite" min='0' max='4000' name="BacklightingLeuchtkastenBreite">mm
            </div>


            <div class="col-md-1 ">
                <label for="BacklightingLeuchtkastenHöhe">Höhe</label>
            </div>
            <div class="col-md-2  ">
                <input type="number" class="form-control" id="BacklightingLeuchtkastenHöhe" min='0' max='4000' name="BacklightingLeuchtkastenHöhe">mm
            </div>


            <div class="col-md-1 " title="„Hinweis: Nur Produktauswahl, keine Kalkulation der LED-Module“">
                <label for="BacklightingLeuchtkastenTiefe" >Tiefe</label>
            </div>
            <div class="row" title="„Hinweis: Nur Produktauswahl, keine Kalkulation der LED-Module“">
                <div class="form-check-inline" title="„Hinweis: Nur Produktauswahl, keine Kalkulation der LED-Module“">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input BacklightingTiefe" name="BacklightingTiefe" id="BacklightingTiefe" value="75" checked>75
                    </label>
                </div>
                <div class="form-check-inline" title="„Hinweis: Nur Produktauswahl, keine Kalkulation der LED-Module“">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input BacklightingTiefe" name="BacklightingTiefe" id="BacklightingTiefe" value="100">100
                    </label>
                </div>
                <div class="form-check-inline" title="„Hinweis: Nur Produktauswahl, keine Kalkulation der LED-Module“">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input BacklightingTiefe" name="BacklightingTiefe" id="BacklightingTiefe" value="125">125
                    </label>
                </div>
                <div class="form-check-inline" title="„Hinweis: Nur Produktauswahl, keine Kalkulation der LED-Module“">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input BacklightingTiefe" name="BacklightingTiefe" id="BacklightingTiefe" value="175">175
                    </label>
                    <div class="col-md-1"></div>
                </div>
            </div>
            <div class="row" title="„Hinweis: Nur Produktauswahl, keine Kalkulation der LED-Module“">
                <div class="col-md-5 ml-0">
                    <input type="number" class="form-control" id="BacklightingLeuchtkastenTiefe" name="BacklightingLeuchtkastenTiefe">mm
                </div>
                <div class="col-md-7 ml-0 ">
                    <p class="text-info" style="font-weight: bold">Nur Produktauswahl, keine Kalkulation der LED-Module</p>
                </div>
            </div>


        </div>
        <div class="col-md-4 text-info BacklightingLimits"></div>

        <!--        bis hier-->


        <br><br>
        <div class="row">

            <div class="col-md-3 " >
                <label for="Art">Art des Leuchtkastens</label>
            </div>
            <div class="col-md-5 " >
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input Einseitig" name="LeuchtkastenArt" id="LeuchtkastenArt" value="Einseitig" checked>Einseitig
                    </label>
                </div>
<!--                <div class="form-check-inline">-->
<!--                    <label class="form-check-label">-->
<!--                        <input type="radio" class="form-check-input Doppelseitig" name="LeuchtkastenArt" id="LeuchtkastenArt" value="Zweiseitig">Doppelseitig-->
<!--                    </label>-->
<!--                </div>-->
            </div>
            <div class="col-md-1 " style="border-left: solid 1px darkgray">
            </div>
            <div class="col-md-1 " >
                <label for="Form">Form</label>
            </div>
            <div class="col-md-2" >
<!--                <div class="form-check-inline">-->
<!--                    <label class="form-check-label">-->
<!--                        <input type="radio" class="form-check-input" name="LeuchtkastenForm" id="LeuchtkastenForm" value="Rechteckig" checked>Rechteckig-->
<!--                    </label>-->
<!--                </div>-->
            </div>

        </div>
        <div class="row">
            <div class="col-md-3 " >
            </div>
            <div class="col-md-5 " >
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input Doppelseitig" name="LeuchtkastenArt" id="LeuchtkastenArt" value="Zweiseitig">Doppelseitig
                    </label>
                </div>
                <div class="form-check-inline">
                    <input class="form-check-input Trennwandcheckbox" type="checkbox" value="Trennwand" id="Trennwand" disabled>
                    <label class="form-check-label" for="Trennwand">
                        mit Trennwand
                    </label>
                </div>
            </div>
            <div class="col-md-1 " style="border-left: solid 1px darkgray">
            </div>
            <div class="col-md-3 " >
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="LeuchtkastenForm" id="LeuchtkastenForm" value="Rechteckig" checked>Rechteckig
                    </label>
                </div>
            </div>

        </div>
        <br><br><br><br>


        <div class="row justify-content-center">
            <img src="images/leuchtbild.jpg" style="width: 35%;">
        </div>

        <br><br><br><br>

        <div class="row justify-content-center">
            <button type="submit" class="btn btn-outline-info" id="übernehmen" name="übernehmen" value="übernehmen">übernehmen</button>
        </div>
        <div class="row justify-content-end">
            <button type="submit" class="btn btn-outline-info" id="Nächst1" name="Nächst1" value="Nächst1">weiter</button>
        </div>

        <div class="msg" ></div>



        <br><br><br><br>
    </form>
</div>


<script>
    $(document).ready(function () {
        var TrenRück="kein";
        $("input[name='LeuchtkastenArt']").change(function(){
            var LeuchtkastenArtVAl = $( this ).val();
            if ($('input.Trennwandcheckbox').prop('checked')) {
                TrenRück="Trennwand";
            }else {
                TrenRück="kein";
            };


            if (LeuchtkastenArtVAl=='Zweiseitig'){
                $( "input.Trennwandcheckbox").prop( "disabled", false );
                var Trennwand= $("input[name='Trennwand']").val();
                if(Trennwand=='Trennwand'){

                    $( "#TabThree" ).prop( "disabled", false );

                }else {

                    $( "#TabThree" ).prop( "disabled", true );

                }

            }else {

                $( "#TabThree" ).prop( "disabled", false );
                $("input.Trennwandcheckbox").prop('checked', false);
                $( "input.Trennwandcheckbox").prop( "disabled", true );

            }
        });

        $( "input.Trennwandcheckbox").change(function(){
            if ($('input.Trennwandcheckbox').prop('checked')) {
                TrenRück="Trennwand";
            }else {
                TrenRück="kein";
            };
        });


        $("input.Trennwandcheckbox").change(function(){
            var test=$("input.Trennwandcheckbox").prop('checked');

            if (test==true) {
                $("#TabThree").prop("disabled", false);
            }
            if(test==false){
                $( "#TabThree" ).prop( "disabled", true );
            }
        });



            $("input[name='Lighting']").click(function() {
                $(".BacklightingLimits").html('');
                $(".SidelightingLimits").html('');

                var Lighting = $("input[name='Lighting']:checked").val();
            if (Lighting=='Sidelighting'){
                $('.BacklightingBox').css("display", "none");
                $('.SidelightingBox').css("display", "block");
            }else if(Lighting=='Backlighting') {
                $('.SidelightingBox').css("display", "none");
                $('.BacklightingBox').css("display", "block");
            }

        });

        $('#BacklightingLeuchtkastenTiefe').keydown(function () {
            $(".BacklightingTiefe").prop("checked", false);
        });

        $('#BacklightingLeuchtkastenTiefe').change(function () {
            var BacklightingLeuchtkastenTiefe = $("#BacklightingLeuchtkastenTiefe").val();
            $(".SidelightingLimits").html('');
            $(".BacklightingLimits").html('');
            if (100 > BacklightingLeuchtkastenTiefe || BacklightingLeuchtkastenTiefe > 400) {
                $(".BacklightingLimits").html('Tiefe muss zwischen 100 und 400 sein');

            }
        });

        $('#BacklightingLeuchtkastenHöhe').change(function () {
            var BacklightingLeuchtkastenHöhe = $("#BacklightingLeuchtkastenHöhe").val();
            $(".SidelightingLimits").html('');
            $(".BacklightingLimits").html('');
            if ( BacklightingLeuchtkastenHöhe > 4000) {
                $(".BacklightingLimits").html('Höhe muss max 4000 sein');
            }
        });

        $('#BacklightingLeuchtkastenBreite').change(function () {
            $(".SidelightingLimits").html('');
            $(".BacklightingLimits").html('');
            var BacklightingLeuchtkastenBreite = $("#BacklightingLeuchtkastenBreite").val();
            if ( BacklightingLeuchtkastenBreite > 4000) {
                $(".BacklightingLimits").html('Breite muss max 4000 sein');
            }
        });

        $('#SidelightingLeuchtkastenBreite').change(function () {
            var SidelightingLeuchtkastenBreite = $("#SidelightingLeuchtkastenBreite").val();
            $(".SidelightingLimits").html('');
            $(".BacklightingLimits").html('');
            if ( SidelightingLeuchtkastenBreite > 3000) {
                $(".SidelightingLimits").html('Breite muss max 3000 sein');

            }
        });
        $('#SidelightingLeuchtkastenHöhe').change(function () {
            var SidelightingLeuchtkastenHöhe = $("#SidelightingLeuchtkastenHöhe").val();
            $(".SidelightingLimits").html('');
            $(".BacklightingLimits").html('');
            if ( SidelightingLeuchtkastenHöhe > 3000) {
                $(".SidelightingLimits").html('Höhe muss max 3000 sein');

            }
        });
        $('#SidelightingLeuchtkastenTiefe').change(function () {
            var SidelightingLeuchtkastenTiefe = $("#SidelightingLeuchtkastenTiefe").val();
            $(".SidelightingLimits").html('');
            $(".BacklightingLimits").html('');
            if ( SidelightingLeuchtkastenTiefe<100 || SidelightingLeuchtkastenTiefe > 400) {
                $(".SidelightingLimits").html('Tiefe muss zwischen 100 und 400 sein');

            }
        });


        $('.BacklightingTiefe').change(function () {
            $('#BacklightingLeuchtkastenTiefe').val('');
            $(".BacklightingLimits").html('');
            $(".SidelightingLimits").html('');
        });

            $('#übernehmen').click(function (e) {

            e.preventDefault();

            var übernehmen = $('#übernehmen').val();

                var Lighting = $("input[name='Lighting']:checked").val();

                if (Lighting=='Sidelighting'){
                    var LeuchtkastenBreite = $('#SidelightingLeuchtkastenBreite').val();
                    var LeuchtkastenHöhe = $('#SidelightingLeuchtkastenHöhe').val();
                    var LeuchtkastenTiefe = $('#SidelightingLeuchtkastenTiefe').val();
                }else {
                    var LeuchtkastenBreite = $('#BacklightingLeuchtkastenBreite').val();
                    var LeuchtkastenHöhe = $('#BacklightingLeuchtkastenHöhe').val();
                    if ($("#BacklightingLeuchtkastenTiefe").val()!==''){
                        var LeuchtkastenTiefe = $('#BacklightingLeuchtkastenTiefe').val();
                    }else {
                        var LeuchtkastenTiefe=$("input[name='BacklightingTiefe']:checked").val();
                    }
                }



            var LeuchtkastenArt = $("input[name='LeuchtkastenArt']:checked").val();
            var LeuchtkastenForm = $("input[name='LeuchtkastenForm']:checked").val();
            var Lighting = $("input[name='Lighting']:checked").val();


                $.ajax
            ({
                type: "POST",
                url: "insertMaße.php",
                data: { "übernehmen":übernehmen ,"Trennwand": TrenRück ,"LeuchtkastenBreite": LeuchtkastenBreite,"LeuchtkastenHöhe": LeuchtkastenHöhe, "LeuchtkastenTiefe": LeuchtkastenTiefe, "LeuchtkastenArt": LeuchtkastenArt, "LeuchtkastenForm": LeuchtkastenForm,"Lighting": Lighting },
                success: function (data) {
                    var data =data;

                    $(".msg").empty();
                    var json_data= JSON.parse(data);
                    var i;


                    $('.msg').css('display', 'block');

                    for (i = 0; i < json_data.length ; i++) {

                        $(".msg").append(
                            "<h6 style='color: #0056b3; font-size: 10pt'>"+json_data[i]+"</h6><br>"
                        );
                    }
                }
            });




        });


        $('#Nächst1').click(function (e) {

            e.preventDefault();
            $('#Maße').fadeOut();
            $('#TabOne').attr('style', 'background-color: #999b96 !important');
            $('#TabOneLabel').css("color", "#999b96");

            $('#Spiegelfläche').slideToggle();
            $('#TabTwo').attr('style', 'background-color: #FFB400 !important');
            $('#TabTwoLabel').css("color", "#FFB400");
            j=1;

        });


    })
</script>


