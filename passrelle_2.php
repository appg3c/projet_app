<?php /*
$content = file_get_contents("http://projets-tomcat.isep.fr:8080/appService?action=GETLOG&TEAM=0001");
$tableau = str_split($content, 33);
foreach($tableau as $value){
	print $value;?>
	<br>
	<?php
}


*/
/*
$content = file_get_contents("http://projets-tomcat.isep.fr:8080/appService?action=GETLOG&TEAM=0001");
$tableau = str_split($content, 33);
print $tableau;
*/

$content = file_get_contents("http://projets-tomcat.isep.fr:8080/appService?action=GETLOG&TEAM=0001");
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
		print($arr3[0]);?> &nbsp
		<?php print($arr3[1]); $arr3[2]; $arr3[3]; $arr3[4]);?> &nbsp
		<?php print($arr3[5]);?> &nbsp
		<?php print($arr3[6]);?> &nbsp
		<?php print($arr3[7]; $arr3[8]);?> &nbsp
		<?php print($arr3[9]; $arr3[10]; $arr3[11]; $arr3[12]);?> &nbsp
		<?php print($arr3[13]; $arr3[14]; $arr3[15]; $arr3[16]);?> &nbsp
		<?php print($arr3[17]; $arr3[18]);?> &nbsp
		<?php print($arr3[19]; $arr3[20]; $arr3[21]; $arr3[22]; $arr3[23]; $arr3[24]; $arr3[25]; $arr3[26]);?> &nbsp
		
		<?php print($arr3[27]; $arr3[28]; $arr3[29]; $arr3[30]; $arr3[31]; $arr3[32]);
		
		?>





	}
?>
<br>
<?php
$i=$i+1;



}
/*
while ($co == $content)){
	$tra=(int)0;
	$j=(int)1;
	$m=(int)5;
	$n=(int)6;
	$x=(int)7;
	$y=(int)9;
	$z=(int)13;
	$w=(int)17;
	$a=(int)19;
	$b=(int)27;
	

	echo $co[$i];
	$i=+33;
	echo $co[$j;$j+3];
	$j=+33;
	echo $co[$m];
	$m=+33;
	echo $co[$n];
	$n=+33;
	echo $co[$x,$x+1];
	$x=+33;
	echo $co[$y;$y+3];
	$y=+33;
	echo $co[$z;$z+3];
	$z=+33;
	echo $co[$w;w+1];
	$w=+33;
	echo $co[$a,$a+7];
	$a=+33;
	echo $co[$b,$x+6];
	$b=+33;
	?></br>




//$j=count($arr1);



	


?>

