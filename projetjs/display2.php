<?php
include("connection2.php");
mysql_select_db("galleriejs",$connectionDB);
$result=mysql_query("select * from image",$connectionDB);

echo "<table border='1' >
<tr>
<td align=center> <b>id</b></td>
<td align=center><b>Gallerie</b></td>
<td align=center><b>nom</b></td>
<td align=center><b>url</b></td>";

while($data = mysql_fetch_row($result))
{   
    echo "<tr>";
    echo "<td align=center>$data[0]</td>";
    echo "<td align=center>$data[1]</td>";
    echo "<td align=center>$data[2]</td>";
    echo "<td align=center>$data[3]</td>";
    echo "</tr>";
}
echo "</table>";
?>