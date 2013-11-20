<?php
include("connection2.php");
mysql_select_db("galleriejs",$connectionDB);
$result=mysql_query("select * from image",$connectionDB);

while($data = mysql_fetch_row($result))
{   
    echo "<img id=voiture$data[0] src=$data[3] width=220>";
}

?>