<?php 

$mas = array('1','2','3','4');
echo "<pre>";
print_r ($mas);
echo "</pre>";
function massiv ($mas1){
 
for ($i=0; $i<count($mas1);$i++)
{  
} 
foreach ($mas1 as $val)
{
 $val=$val*$i;  
echo "<pre>";
print_r($val);
echo "</pre>";  
}
return $val;
}
 massiv($mas);
    
?>

