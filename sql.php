<?php
$db=mysql_connect("localhost","cdda-ws15137","e812129988") or die ("die");
$res=mysql_select_db("users",$db);
mysql_query("SET NAMES utf8");
 
 
$result=mysql_query("DELETE * FROM users WHERE user_name='test'");
$myrow=mysql_fetch_array($result);
do {  
 printf ("<p>
 <form> 
<input type='text' id='phones' name='phones' value='%s'>
</form>
             
 </p> ", $myrow["user_name"]);
}
while ($myrow=mysql_fetch_array($result));
 ?>
 