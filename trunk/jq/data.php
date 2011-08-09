<?
require_once 'config.php';
$get_data = mysql_query("SELECT * FROM text order by id");
while($row = mysql_fetch_object($get_data)){
            echo $row->id." - ".$row->tgl." - ".$row->text." <a href='#' class='del'>[del]</a>"."<br>";
        }
?>
