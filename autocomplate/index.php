<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Auto Complate </title>
        <link rel="stylesheet" href="">
        <!-- <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"> -->
        <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script> -->

        <!-- Latest compiled and minified CSS & JS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- <script src="//code.jquery.com/jquery.js"></script> -->
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> -->


<script type="text/javascript">
    $(document).ready(function(){

        $("#search-box").keyup(function(){
            $.ajax({
            type: "get",
            url: "search.php",
            data:'keyword='+$(this).val(),
            beforeSend: function(){
                $("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
            },
            success: function(data){
                $("#suggesstion-box").show();
                $("#suggesstion-box").html(data);
                $("#search-box").css("background","#FFF");
            }
            });
        });
    });
    //To select country name
    function selectCountry(val) {
        $("#search-box").val(val);
        $("#suggesstion-box").hide();
    }
</script>
<style type="text/css" media="screen">
    .frmSearch {border: 1px solid #a8d4b1;background-color: #c6f7d0;margin: 2px 0px;padding:40px;border-radius:4px;}
    #country-list{float:left;list-style:none;margin-top:-3px;padding:0;width:190px;position: absolute;}
#country-list li{padding: 10px; background: #f0f0f0; border-bottom: #bbb9b9 1px solid;}
#country-list li:hover{background:#ece3d2;cursor: pointer;}
#search-box{padding: 10px;border: #a8d4b1 1px solid;border-radius:4px;}
</style>
    </head>
    <body>
        <div class="contailer col-md-5 col-md-offset-3" style="margin-top: 100px;">
            <div class="frmSearch">
                <input type="text" id="search-box" placeholder="Country Name" />
                <div id="suggesstion-box"></div>
            </div>

        </div>
    </body>
</html>


