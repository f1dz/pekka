<!DOCTYPE html>
<?
require_once 'config.php';
$text = $_POST['text'];
$tgl  = $_POST['tgl'];
if(!empty($_POST['text'])){
$sql    = mysql_query("INSERT INTO text (text,tgl) VALUES('$text','$tgl')");
    echo $_POST['text'];
}

?>
<html>
    <link type="text/css" rel="stylesheet" href="css/ui-lightness/jquery-ui-1.8.2.custom.css">
    <script type="text/javascript" src="development-bundle/jquery-1.4.2.js"></script>
    <script type="text/javascript" src="development-bundle/ui/jquery.effects.core.js"></script>
    <script type="text/javascript" src="development-bundle/ui/jquery.ui.datepicker.js"></script>
    <script type="text/javascript" src="development-bundle/ui/jquery.ui.dialog.js"></script>
    <script type="text/javascript" src="development-bundle/ui/jquery.ui.core.js"></script>
    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.2.custom.min.js"></script>
    <head>
        <script type="text/javascript" language="javascript">
            $(document).ready(function(){
                $("#tgl").datepicker({
                    dateFormat : "yy-mm-dd"
                });
                $("#dialog").dialog({
                    autoOpen:false,
                    modal:true,
                    buttons:{
                        Submit: function(){
                            if("!empty(input[name='text'])"){
                                $.post("date.php", $("#text").serialize(), "json");
                                $(".showdata").show('slow', function(){
                                    $(this).load('date.php .showdata');
                                });
                                $(this).dialog('close');
                                }
                            },
                        Cancel: function(){
                            $(this).dialog('close');
                        }

                        }
                });
                $("#button").click(function(){
                    $("#dialog").dialog('open');
                });
                $(".toggle").click(function(){
                    $(".showdata").slideToggle('slow');
                });
                $("#del").click(function(){
                    $("#delete").open('del.php');
                });
            });
        </script>
    </head>
    <body style="font-size: 85%;">
        <div class="showdata">
            <? require_once 'data.php'; ?>
        </div>
        <div id="button"><a href="#">open</a></div>
        <div class="toggle"><a href="#">show/hide</a></div>
        <div id="dialog" title="Mantabbb">
            <form action="/" method="post" name="text" id="text">
                <table border="0">                    
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" id="text" name="text"/><div id="kirim"></div></td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td><input type="text" id="tgl" name="tgl"></td>
                    </tr>
                </table>
            </form>
        </div>
        
        
    </body>
</html>