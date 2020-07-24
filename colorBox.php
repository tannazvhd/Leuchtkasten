
<div class="row mx-auto" style="width: 700px">
    <div class="col col-md-12 text-center">

        <div class="tabs-container" style="font-family: TKTypeRegular;font-size: 10pt;">
            <ul class="nav nav-tabs justify-content-center my-2" id="Farben">Farben</ul>
            <ul class="nav nav-tabs justify-content-around">
                <li class="active"><a data-toggle="tab" href="#plexiglas-gs">Plexiglas GS</a>
                </li>
                <li class=""><a data-toggle="tab" href="#plexiglas-gs-led" >Plexiglas GS LED</a>
                </li>
                <li class=""><a data-toggle="tab" href="#plexiglas-resist" >Plexiglas Resist</a>
                </li>
                <li class=""><a data-toggle="tab" href="#plexiglas-xt" >Plexiglas XT</a>
                </li>
            </ul>
            <div class="tab-content">

                <div id="plexiglas-gs" class="tab-pane active">
                    <div class="panel-body">
                        <div class="table-responsive-md px-auto"  style='background-color:#EEF0F2;border-bottom: solid 2px #00A0F0;'>
                            <table class="table">
                                <tbody><tr>  <?php //       plexiglas-gs  Farben
                                    $query="SELECT * FROM plexiglasgs";
                                    $result=mysqli_query($con,$query);
                                    while( $row=mysqli_fetch_array($result)){
                                        $productColor=$row['color']; $productAddress=$row['address'];$productId=$row['id'];$productCode=$row['code'];
                                        if ($productId==9 || $productId==17 ){ echo "</tr><tr>";}
                                        echo "<td>
                                              <a href='#' address='$productAddress' product='$productCode' name='$productColor' category='PLEXIGLAS GS' >
                                                <img id='color' name=$productColor/$productCode title=$productColor/$productCode style='width:50px;height:50px;opacity:1;border-radius:30px;border: solid 1px #b9bbbe' src=$productAddress alt=$productCode name='color' value=$productAddress ></a>
                                          </td>";};?></tr></tbody></table></div><br><br>
                    </div>
                </div>

                <div id="plexiglas-gs-led" class="tab-pane">
                    <div class="panel-body">
                        <div class="table-responsive-md px-auto"  style='background-color:#EEF0F2;border-bottom: solid 2px #00A0F0;'>
                            <table class="table">
                                <tbody><tr>  <?php //       plexiglas-gs-led  Farben
                                    $query="SELECT * FROM plexiglasgsled";
                                    $result=mysqli_query($con,$query);
                                    while( $row=mysqli_fetch_array($result)){
                                        $productColor=$row['color']; $productAddress=$row['address'];$productId=$row['id'];$productCode=$row['code'];
                                        if ($productId==9 || $productId==17 ){ echo "</tr><tr>";}
                                        echo "<td>
                                              <a href='#' address='$productAddress' product='$productCode' name='$productColor'  category='PLEXIGLAS GS LED'>
                                                <img id='color' name=$productColor/$productCode title=$productColor/$productCode style='width:50px;height:50px;opacity:1;border-radius:30px;border: solid 1px #b9bbbe' src=$productAddress alt=$productCode name='color' value=$productAddress ></a>
                                          </td>";};?></tr></tbody></table></div><br><br>
                    </div>
                </div>

                <div id="plexiglas-resist" class="tab-pane">
                    <div class="panel-body">
                        <div class="table-responsive-md px-auto"  style='background-color:#EEF0F2;border-bottom: solid 2px #00A0F0;'>
                            <table class="table">
                                <tbody><tr>  <?php //       plexiglas-resist  Farben
                                    $query="SELECT * FROM plexiglasresist";
                                    $result=mysqli_query($con,$query);
                                    while( $row=mysqli_fetch_array($result)){
                                        $productColor=$row['color']; $productAddress=$row['address'];$productId=$row['id'];$productCode=$row['code'];
                                        if ($productId==9 || $productId==17 ){ echo "</tr><tr>";}
                                        echo "<td>
                                              <a href='#' address='$productAddress' product='$productCode' name='$productColor' category='PLEXIGLAS XT Resist' >
                                                <img id='color' name=$productColor/$productCode title=$productColor/$productCode style='width:50px;height:50px;opacity:1;border-radius:30px;border: solid 1px #b9bbbe' src=$productAddress alt=$productCode name='color' value=$productAddress ></a>
                                          </td>";};?></tr></tbody></table></div><br><br>
                    </div>
                </div>

                <div id="plexiglas-xt" class="tab-pane">
                    <div class="panel-body">
                        <div class="table-responsive-md px-auto"  style='background-color:#EEF0F2;border-bottom: solid 2px #00A0F0;'>
                            <table class="table">
                                <tbody><tr>  <?php //       plexiglas-xt  Farben
                                    $query="SELECT * FROM plexiglasxt";
                                    $result=mysqli_query($con,$query);
                                    while( $row=mysqli_fetch_array($result)){
                                        $productColor=$row['color']; $productAddress=$row['address'];$productId=$row['id'];$productCode=$row['code'];
                                        if ($productId==9 || $productId==17 ){ echo "</tr><tr>";}
                                        echo "<td>
                                              <a href='#' address='$productAddress' product='$productCode' name='$productColor' category='PLEXIGLAS XT LED'>
                                                <img id='color' name=$productColor/$productCode title=$productColor/$productCode style='width:50px;height:50px;opacity:1;border-radius:30px;border: solid 1px #b9bbbe' src=$productAddress alt=$productCode name='color' value=$productAddress ></a>
                                          </td>";};?></tr></tbody></table></div><br><br>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="resultColor" style="color: #00A0F0 ; font-size:12pt "></div>



<script>
    $(document).ready(function(){

        $(".nav-tabs a").click(function(){
            $("#tabs li.active")
                .next()
                .find("a[data-toggle='tab']")
                .tab('show');
        });



        $('.table a').click(function(event){
            event.preventDefault();

            var color = $(this).attr('name');
            var category = $(this).attr('category');
            // alert(address);
            $.ajax
            ({
                type: "POST",
                url: "insertSpiegelfläche.php",
                data: { "color": color,"category": category },
                success: function (data) {
                    $('.resultColor').html(data);
                }
            });



        });

    });
</script>


