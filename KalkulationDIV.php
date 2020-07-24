<script>


    function Zussamenfassungfunction()
    {
        $.ajax
        ({
            type: "POST",
            url: "insertZusammenfassung.php",
            data: { "Zusammenfassung": "Zusammenfassung" },
            success: function (data) {

                var json_data= JSON.parse(data);
                // alert(json_data);
                $( ".Breite" ).html(""+json_data[0]+"mm");
                $( ".Höhe" ).html(""+json_data[1]+"mm");
                $( ".Tiefe" ).html(""+json_data[2]+"mm");
                $( ".Form" ).html(json_data[3]);
                $( ".Art" ).html(json_data[4]);
                $( ".BenötigteModule" ).html(json_data[6]);

                var BenötigteWatt = Number(json_data[7]).toFixed(2);
                var BenötigteWatt = String(BenötigteWatt).replace('.',',');
                $( ".BenötigteWatt" ).html(BenötigteWatt);

                $( ".LeuchtkastenLumen" ).html(json_data[8]);

                var NetzteileWatt = Number(json_data[9]).toFixed(2);
                var NetzteileWatt = String(NetzteileWatt).replace('.',',');
                $( ".NetzteileWatt" ).html(NetzteileWatt);



                if(json_data[5]=='kein'){
                    $( ".Zusatz" ).html('Ohne Trennwand');
                }else {
                    $( ".Zusatz" ).html('Mit Trennwand');

                }

            }
        });

        $.ajax
        ({
            type: "POST",
            url: "insertZusammenfassung.php",
            data: { "TableEntities": "TableEntities" },
            success: function (data) {
                // alert(data);
                var json_data= JSON.parse(data);

                $("#myTable77").find("tr:gt(0)").remove();



                if (json_data[0]["String"]==undefined){
                    $('#KalkulationDIV').fadeOut();
                    $('#TabSeven').attr('style', 'background-color: #999b96 !important');
                    $('#TabSevenLabel').css("color", "#999b96");
                    Kal=0;

                    $('#Spiegelfläche').slideToggle();
                    $('#TabTwo').attr('style', 'background-color: #FFB400 !important');
                    $('#TabTwoLabel').css("color", "#FFB400");
                    j=1;
                    alert("Bitte wählen Sie ein Produkt in den vorherigen Schritten");


                }else if (json_data[2]["String"]==undefined){
                    $('#KalkulationDIV').fadeOut();
                    $('#TabSeven').attr('style', 'background-color: #999b96 !important');
                    $('#TabSevenLabel').css("color", "#999b96");
                    Kal=0;

                    $('#LEDModule').slideToggle();
                    $('#TabFour').attr('style', 'background-color: #FFB400 !important');
                    $('#TabFourLabel').css("color", "#FFB400");
                    LED=1;
                    alert("Bitte wählen Sie ein Produkt in den vorherigen Schritten");
                }else if (json_data[5]["String1"]==undefined){

                    $('#KalkulationDIV').fadeOut();
                    $('#TabSeven').attr('style', 'background-color: #999b96 !important');
                    $('#TabSevenLabel').css("color", "#999b96");
                    Kal=0;

                    $('#LEDModule').slideToggle();
                    $('#TabFour').attr('style', 'background-color: #FFB400 !important');
                    $('#TabFourLabel').css("color", "#FFB400");
                    LED=1;
                    alert("Bitte wählen Sie ein Produkt in den vorherigen Schritten");
                }else if (json_data[3]["Bezeichnung"]==undefined){

                    $('#KalkulationDIV').fadeOut();
                    $('#TabSeven').attr('style', 'background-color: #999b96 !important');
                    $('#TabSevenLabel').css("color", "#999b96");
                    Kal=0;

                    $('#Lichtwerbeprofile').slideToggle();
                    $('#TabSix').attr('style', 'background-color: #FFB400 !important');
                    $('#TabSixLabel').css("color", "#FFB400");
                    l=1;
                    alert("Bitte wählen Sie ein Produkt in den vorherigen Schritten");

                }else{




                    if (json_data[2]["String"] == undefined){
                        json_data[2]["String"]="kein";
                        json_data[2]["PreisProKette"]="kein"
                    }

                    if (json_data[1]["String"]== undefined){
                        json_data[1]["String"]="kein";
                        json_data[1]["Preis"]='-';
                        var RückwandPreis='-';
                        var RückwandBenötigteMenge='-';
                        var RückwandLiefermenge='-';
                        var RückwandZuschnittsreste='-';
                    }else{
                        var RückwandPreis = Number(json_data[1]["Preis"]).toFixed(2);
                        RückwandPreis = String(RückwandPreis).replace('.',',');
                        var RückwandBenötigteMenge=json_data[7]+' mm x '+json_data[8]+' mm';
                        var RückwandLiefermenge=json_data[1]["Format"];
                        var RückwandZuschnittsreste=json_data[19];

                    }

                    if(json_data[3]["Bezeichnung"]==undefined){
                        json_data[3]["Bezeichnung"]="kein";
                        json_data[3]["Preis"]="kein"
                    }

                    if(json_data[4]["Bezeichnung"]==undefined || json_data[4]["Preis"]==undefined){
                        json_data[4]["Bezeichnung"]="kein";
                        var AbdeckwinkelPreis='-';
                        var AbdeckwinkelZuschnittsreste='-';
                    }else {
                        var AbdeckwinkelPreis = Number(json_data[4]["Preis"]).toFixed(2);
                        AbdeckwinkelPreis = String(AbdeckwinkelPreis).replace('.',',');
                        var AbdeckwinkelZuschnittsreste='Kein Zuschnitt';

                    }


                    if(json_data[6]["Marke"]=='') {
                        var NetzteileBenötigteMenge="";
                        var NetzteileLiefermenge="";

                    }else{
                        var NetzteileBenötigteMenge=1;
                        var NetzteileLiefermenge=1;
                    }

                        if(json_data[5]["Trafo"]==undefined){
                        json_data[5]["Trafo"]=json_data[5]["Preis"]
                    }


                    if ( json_data[11] == 'Einseitig'){
                        var SpiegelflächeBenötigteMenge =json_data[7]+' mm x '+json_data[8]+' mm';
                        var SpiegelflächeLiefermenge=json_data[0]["Menge"];
                        var SpiegelflächeGesamtpreis=json_data[0]["Preis"];

                    }else{
                        var SpiegelflächeBenötigteMenge ='2 x ('+json_data[7]+' mm x '+json_data[8]+' mm)';
                        var SpiegelflächeLiefermenge='2 x ('+json_data[0]["Menge"]+')';
                        var SpiegelflächeGesamtpreis=2*json_data[0]["Preis"];
                    }



                    var LEDLiefermenge=json_data[17]+" Kette(n) á " +json_data[2]["ModuleKette"]+" Module";
                    var LEDGesamtpreis=json_data[17]*json_data[2]["PreisProKette"];

                    if (json_data[13]%6000==0){
                        var LichtwerbeprofilLiefermenge=json_data[13]/6000 + " á 6.000 mm";
                        var LichtwerbeprofilGessamtpreis=json_data[3]["Preis"]*json_data[13]/6000;

                    }else {
                        var LichtwerbeprofilLiefermenge=parseInt(json_data[13]/6000)+1;
                        var LichtwerbeprofilGessamtpreis=json_data[3]["Preis"]*LichtwerbeprofilLiefermenge;

                        LichtwerbeprofilLiefermenge=LichtwerbeprofilLiefermenge+ " á 6.000 mm";

                    }

                    // alert( SpiegelflächeBenötigteMenge );
                    var SpiegelflächePreis = Number(json_data[0]["Preis"]).toFixed(2);
                    SpiegelflächePreis = String(SpiegelflächePreis).replace('.',',');

                    SpiegelflächeGesamtpreis = Number(SpiegelflächeGesamtpreis).toFixed(2);
                    SpiegelflächeGesamtpreis = String(SpiegelflächeGesamtpreis).replace('.',',');



                    var LEDPreis = Number(json_data[2]["PreisProKette"]).toFixed(2);
                    LEDPreis = String(LEDPreis).replace('.',',');

                    LEDGesamtpreis = Number(LEDGesamtpreis).toFixed(2);
                    LEDGesamtpreis= String(LEDGesamtpreis).replace('.',',');

                    var NetzteilePreis = Number(json_data[5]["Trafo"]).toFixed(2);
                    NetzteilePreis = String(NetzteilePreis).replace('.',',');

                    if (json_data[6]["Preis"]==""){
                        var NetzteilePreis2 ='';
                    }else{
                        var NetzteilePreis2 = Number(json_data[6]["Preis"]).toFixed(2);
                        NetzteilePreis2 = String(NetzteilePreis2).replace('.',',');
                    }
                    if( json_data[6]["String2"] ==undefined){
                        var NetzteileString2='';
                    }else{
                        var NetzteileString2=json_data[6]["String2"];

                    }


                    var LichtwerbeprofilPreis = Number(json_data[3]["Preis"]).toFixed(2);
                    LichtwerbeprofilPreis = String(LichtwerbeprofilPreis).replace('.',',');

                    LichtwerbeprofilGessamtpreis = Number(LichtwerbeprofilGessamtpreis).toFixed(2);
                    LichtwerbeprofilGessamtpreis= String(LichtwerbeprofilGessamtpreis).replace('.',',');







                    // alert(json_data);
                    $("#myTable77 > tbody").append(
                        "<tr><th class='font-weight-bold'>Spiegelfläche</th><td class='font-weight-normal' >" + json_data[0]["String"] + "</td><td>" + SpiegelflächePreis + "</td><td style='font-size: 12px'>"+SpiegelflächeBenötigteMenge+"</td><td style='font-size: 12px'>"+SpiegelflächeLiefermenge+"</td><td>" + json_data[18] + "</td><td>"+SpiegelflächeGesamtpreis+"</td></tr>"
                    );
                    $("#myTable77 > tbody").append(
                        "<tr><th class='font-weight-bold'>Rückwand</th><td class='font-weight-normal' >" + json_data[1]["String"] + "</td><td>" + RückwandPreis + "</td><td style='font-size: 12px'>"+RückwandBenötigteMenge+"</td><td style='font-size: 12px'>"+RückwandLiefermenge+"</td><td>" +RückwandZuschnittsreste+ "</td><td>"+RückwandPreis+"</td></tr>"
                    );
                    $("#myTable77 > tbody").append(
                        "<tr><th class='font-weight-bold'>LED-Modul</th><td class='font-weight-normal' >" + json_data[2]["String"] + "</td><td>" + LEDPreis + "</td><td>" +json_data[13]+ "</td><td>"+LEDLiefermenge+"</td><td>Kein Zuschnitt</td><td>"+LEDGesamtpreis+"</td></tr>"
                    );
                    //work on here
                    $("#myTable77 > tbody").append(
                        "<tr><th class='font-weight-bold'>Netzteile</th><td class='font-weight-normal' >" + json_data[5]["String1"] + "<br>" +NetzteileString2 + "</td><td>" + NetzteilePreis + "<br>" +NetzteilePreis2+ "</td><td>1<br>"+NetzteileBenötigteMenge+"</td><td>1<br>"+NetzteileLiefermenge+"</td><td>Kein Zuschnitt</td><td>" + NetzteilePreis + "<br>" +NetzteilePreis2+ "</td></tr>"
                    );

                    $("#myTable77 > tbody").append(
                        "<tr><th class='font-weight-bold'>Lichtwerbeprofil</th><td class='font-weight-normal' >" + json_data[3]["Bezeichnung"] + "</td><td>" + LichtwerbeprofilPreis + "</td><td>" +json_data[13]+ "</td><td>" +LichtwerbeprofilLiefermenge+ "</td><td>Kein Zuschnitt</td><td>"+LichtwerbeprofilGessamtpreis+"</td></tr>"
                    );

                    $("#myTable77 > tbody").append(
                        "<tr><th class='font-weight-bold'>Abdeckwinkel</th><td class='font-weight-normal' >" + json_data[4]["Bezeichnung"] + "</td><td>" +AbdeckwinkelPreis+ "</td><td>-</td><td>-</td><td>"+AbdeckwinkelZuschnittsreste+"</td><td>-</td></tr>"
                    );

                }



            }
        });


    }


</script>



<div class="row w-75 my-5 " style="font-family: TKTypeRegular;font-size: 15px ;font-weight: normal;margin-left: 10%" >
    <div class="col col-md-12 text-left">
        <div class="table-responsive-md">
            <table class="table" id="myTable7" style="display: block;margin-left: 20%"">
            <tbody>
            <tr>
                <th class="text-left" style="color: #00A0F0">Ihr Leuchtkasten</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th class="text-left" >Form</td>
                <td class="Form">-</td>
                <td></td>
                <td class="font-weight-bold">Breite</td>
                <td class="Breite">-</td>
                <td></td>
                <td class="font-weight-bold">Anwendungsbereich</td>
                <td class="Anwendungsbereich">-</td>
            </tr>
            <tr>
                <th class="text-left" >Art</td>
                <td class="Art">-</td>
                <td></td>
                <td class="font-weight-bold">Höhe</td>
                <td class="Höhe">-</td>
                <td></td>
                <td class="font-weight-bold">Leuchtdichte</td>
                <td class="Leuchtdichte">-</td>
            </tr>
            <tr>
                <th class="text-left" >Zusatz</td>
                <td class="Zusatz">-</td>
                <td></td>
                <td class="font-weight-bold">Tiefe</td>
                <td class="Tiefe">-</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <th class="text-left" style="color: #00A0F0">Kalkulationsergebnisse</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th class="text-left" >Benötigte Module</td>
                <td class="BenötigteModule">0</td>
                <td></td>
                <td class="font-weight-bold">Benötigte Watt</td>
                <td class="BenötigteWatt">0</td>
                <td></td>
                <td class="font-weight-bold">Leuchtkasten Lumen</td>
                <td class="LeuchtkastenLumen">-</td>
            </tr>
            <tr>
                <th class="text-left" >Gesamtgewicht</td>
                <td>-</td>
                <td></td>
                <td class="font-weight-bold">Netzteile Watt</td>
                <td class="NetzteileWatt">-</td>
                <td></td>
                <td ></td>
                <td ></td>
            </tr>

            </tbody>
            </table>
        </div>
    </div>
</div>


<div class="row w-75 my-5 " style="font-family: TKTypeRegular;font-size: 15px ;font-weight: normal;margin-left: 15%" >
    <div class="col col-md-12 text-left">
        <div class="table-responsive-md">
            <h4 class="text-left font-weight-bold"  style="color: #00A0F0 ;margin-bottom: 10px; margin-top: 25px ">Ihre ausgewählten Komponenten</h4>

            <table class="table" id="myTable77" style="display: block">

            <tbody>

            <tr>
                <th class="font-weight-bold text-left" >Komponente</td>
                <td class="font-weight-bold text-left" style=" width: 400px;">Produktbezeichnung</td>
                <td class="font-weight-bold text-left">Einzelpreis</td>
                <td class="font-weight-bold text-left" style=" width: 100px;">Benötigte Menge</td>
                <td class="font-weight-bold text-left" style=" width: 100px;">Liefermenge</td>
                <td class="font-weight-bold text-left">Inkl. Zuschnittsreste</td>
                <td class="font-weight-bold text-left">Gesamtpreis</td>
            </tr>


            </tbody>
            </table>
        </div>
    </div>
</div>

<div class="row w-75 my-5 justify-content-center " style="font-family: TKTypeRegular;font-size: 15px ;font-weight: normal;margin-left: 15% ; margin-bottom: 30px;" >
    <button type="submit" class="btn btn-outline-info" id="Download"  name="Download" value="Download">Download Ergebnistabelle</button>
</div>
<br><br><br><br><br>


<div class="row mt-1 mb-4" style="width:800px;margin-left:22%;font-family: TKTypeRegular;font-size: 13px ;font-weight: normal" >

    <div class="text-left row mb-2" style=" margin-left:0px;width:800px; height:40px">
        <p style="color: black;font-family: TKTypeRegular;font-size: 18px">Angebot anfordern</p>
    </div>
    <div class="text-left row mb-2" style=" margin-left:0px;width:800px; height:40px;background-color: #00A0F0">
        <p class="py-3 pl-4" style="color: white;font-family: TKTypeRegular;font-size: 16px">Schritt: 1/1</p>
    </div>

    <div class="col col-md-12 text-left mt-2">
        <form>
            <div class="form-group row">
                <label for="Anrede" class="col-sm-4 col-form-label">Anrede</label>
                <div class="col-sm-6">
                    <div class="form-check">
                        <div class="col-sm-2">
                        <input class="form-check-input col-sm-3" type="radio" name="Anrede" id="Anrede"  value="Frau" checked>
                        </div>
                        <label class="form-check-label " style="font-weight: normal " for="Anrede">
                            Frau
                        </label>
                    </div>
                    <div class="form-check">
                        <div class="col-sm-2">
                        <input class="form-check-input col-sm-3 " type="radio" name="Anrede" id="Anrede"  value="Herr">
                        </div>
                            <label class="form-check-label" style="font-weight: normal" for="Anrede">
                            Herr
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="Vorname" class="col-sm-4 col-form-label">Vorname, Name *</label>
                <div class="col-sm-8">
                    <input type="text" style="font-size: 13px" class="form-control" id="Vorname">
                </div>
            </div>

            <div class="form-group row">
                <label for="Firma" class="col-sm-4 col-form-label">Firma *</label>
                <div class="col-sm-8">
                    <input type="text" style="font-size: 13px" class="form-control" id="Firma">
                </div>
            </div>

            <div class="form-group row">
                <label for="Addresse" class="col-sm-4 col-form-label">Straße, Nr. *</label>
                <div class="col-sm-8">
                    <input type="text" style="font-size: 13px" class="form-control" id="Addresse">
                </div>
            </div>

            <div class="form-group row">
                <label for="Addresse2" class="col-sm-4 col-form-label">PLZ, Ort *</label>
                <div class="col-sm-8">
                    <input type="text" style="font-size: 13px" class="form-control" id="Addresse2">
                </div>
            </div>

            <div class="form-group row">
                <label for="Email" class="col-sm-4 col-form-label">E-Mail *</label>
                <div class="col-sm-8">
                    <input type="email" style="font-size: 13px" class="form-control" id="Email">
                </div>
            </div>

            <div class="form-group row">
                <label for="Telefon" class="col-sm-4 col-form-label">Telefon *</label>
                <div class="col-sm-8">
                    <input type="tel" style="font-size: 13px" class="form-control" id="Telefon">
                </div>
            </div>

            <div class="form-group row">
                <label for="Anrede" class="col-sm-4 col-form-label">Rückrufwunsch</label>
                <div class="col-sm-8">
                    <div class="form-check">
                        <div class="col-sm-1">
                            <input class="form-check-input" type="checkbox" name="Rückruf" id="Rückruf"  value="">
                        </div>
                        <div class="col-sm-11">
                            <label class="form-check-label " style="font-weight: normal;font-size: 11px;color: darkgray" for="Rückruf">
                                Ich bitte um Rückruf für ein Gespräch mit Ihrem Kundenberater. Bitte nehmen sie Kontakt mit mir auf.
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="Informationen" class="col-sm-4 col-form-label">Ergänzende Informationen</label>
                <div class="col-sm-8">
                    <textarea class="form-control" style="font-size: 13px" name="Informationen" id="Informationen" rows="3"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="Datenschutz" class="col-sm-4 col-form-label">Datenschutz *</label>
                <div class="col-sm-8">
                    <div class="form-check">
                        <div class="col-sm-1">
                            <input class="form-check-input" type="checkbox" name="Datenschutz" id="Datenschutz"  value="">
                        </div>
                        <div class="col-sm-11">
                            <p style="font-size: 11px ;color: darkgray">
                                Dieses Formular sammelt die persönlichen Daten ein, die yur Erledigung Ihrer Anfrage notwendig sind.
                                Lesen Sie in unserer <a href="#">Datenschutzerklärung</a>, wie wir Ihre Daten verwalten und schützen. Bitte stimmen Sie
                                der Speicherung Ihrer eingegebenen Informationen zu, so dass Ihre Anfrage beantwortet werden kann.
                                <br><br>
                                <small>Ich stimme zu, dass Sie meine übermittelten Informationen speichern, um meine Anfrage zu bearbeiten.</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-sm-10">
                    <h5 style="color: #00A0F0" class="formMsg "></h5>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-outline-info " id="abschicken" name="abschicken" value="abschicken">Nachricht abschicken</button>
                </div>
            </div>

        </form>
    </div>
</div>
<br><br><br>


<script>
    $(document).ready(function () {



        $('#Download').click(function(e){
            e.preventDefault();
            $("#myTable7").table2excel({
                exclude: ".excludeThisClass",
                name: "Worksheet Name",
                filename: "Leuchtkasten.xls", // do include extension
                // preserveColors: false // set to true if you want background colors and font colors preserved
            });
            $("#myTable77").table2excel({
                exclude: ".excludeThisClass",
                name: "Worksheet Name",
                filename: "Komponenten.xls", // do include extension
                // preserveColors: false // set to true if you want background colors and font colors preserved
            });
        });


        $('#abschicken').click(function (e) {

            e.preventDefault();
            var abschicken = $("#abschicken").val();

            var Anrede = $("input[name='Anrede']:checked").val();
            var Vorname = $("#Vorname").val();
            var Firma = $("#Firma").val();
            var Addresse = $("#Addresse").val();
            var Addresse2 = $("#Addresse2").val();
            var Email = $("#Email").val();
            var Telefon = $("#Telefon").val();
            var Informationen = $("#Informationen").val();
            var Rückruf = "0";
            var Datenschutz = "0";
            if ($('input#Rückruf').prop('checked')) {
                Rückruf = "ja";
            } else {
                Rückruf = "nein";
            }
            if ($('input#Datenschutz').prop('checked')) {
                Datenschutz = "ja";
            } else {
                Datenschutz = "nein";
            }
            if (Vorname=="" || Firma=="" || Addresse=="" || Addresse2=="" || Email=="" || Telefon=="" || Datenschutz== "nein" ){
                $( ".formMsg" ).html('Wir benötigen Angaben in den mit * gekennzeichneten Feldern, um Ihre Anfrage bearbeiten zu können.');

            }else {
                $.ajax
                ({
                    type: "POST",
                    url: "insertZusammenfassung.php",
                    data: {
                        "abschicken": abschicken,
                        "Anrede": Anrede,
                        "Vorname": Vorname,
                        "Firma": Firma,
                        "Addresse": Addresse,
                        "Addresse2": Addresse2,
                        "Email": Email,
                        "Telefon": Telefon,
                        "Informationen": Informationen,
                        "Rückruf": Rückruf,
                        "Datenschutz": Datenschutz
                    },
                    success: function (data) {
                        var data = data;
                        // alert(data);

                        $("#Vorname").val('');
                        $("#Firma").val('');
                        $("#Addresse").val('');
                        $("#Addresse2").val('');
                        $("#Email").val('');
                        $("#Telefon").val('');
                        $("#Informationen").val('');
                        $('input#Rückruf').prop("checked", false);
                        $('input#Datenschutz').prop("checked", false);
                        $( ".formMsg" ).html('Ihre Anfrage wurde erfolgreich eingefügt');

                    }
                });
            }


        });
    })
</script>
