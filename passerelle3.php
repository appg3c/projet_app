<?php $content = file_get_contents("http://projets-tomcat.isep.fr:8080/appService?action=GETLOG&TEAM=0001");
//echo gettype($content) ;

$arr1 = str_split($content, 33);
//echo gettype($arr1);
//print_r($arr1);
//echo count($arr1);
//$arr2 = str_split($arr1[0],1);
//print_r $arr2;
//echo gettype($arr1[0]);
$i=0;
$j=count($arr1);
while(i<=j){
	$arr2 = str_split($arr1[$i], 1);
	foreach ($arr2 as $arr3) {
		
		print($arr3[0]);?>
		
		<?php 





			}
?>
<br>
<?php
$i=$i+1;



}