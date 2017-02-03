<?php $content = file_get_contents("http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=9999");
//echo gettype($content) ;

$arr1 = str_split($content, 33); 
/*$arr3 = str_split($arr[$a], 1);
$a=0;
$b=count($arr1);
while(a<=b){
	if ($arr3[0] != 1){
		unset()($arr1[$a-1]);
	}
	else{
		$a=$a+1;
	}
	}
	*/
// ON A UNE LIGNE POUR CHAQUE DONN2E C4EST A DIRE POUR CHAQUE CAPTEUR
//echo gettype($arr1);
//print_r($arr1);
//echo count($arr1);
//$arr2 = str_split($arr1[0],1);
//print_r $arr2;
//echo gettype($arr1[0]);
/*$i=0;
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
*/
?>
<table>
<th>TRA</th>
<th></th>
<th>OBJ</th>
<th></th>
<th>REQ</th>
<th></th>
<th>TYP</th>
<th></th>
<th>NUM</th>
<th></th>
<th>VAL</th>
<th></th>
<th>TIM</th>
<th></th>
<th>CHK</th>
<th></th>
<th>DAT</th>
<th></th>
<th>HEURE</th>

<?php
$i=0;
$j=count($arr1);
while(i<=j){
	$arr2 = str_split($arr1[$i], 1);


?><tr>
		<td>
		<?php echo $arr2[0];?>
		</td>
		<td>
		</td>
		<td>
		<?php echo $arr2[1];?>
		<?php echo $arr2[2];?>
		<?php echo $arr2[3];?>
		<?php echo $arr2[4];?>
		</td>
		<td>
		</td>
		<td>
		<?php echo $arr2[5];?>
		</td>
		<td>
		</td>
		<td>
		<?php echo $arr2[6];?>
		</td>
		<td>
		</td>
		<td>

		<?php echo $arr2[7];?>
		<?php echo $arr2[8];?>
		</td>
		<td>
		</td>
		<td>
		<?php echo $arr2[9];?>
		<?php echo $arr2[10];?>
		<?php echo $arr2[11];?>
		<?php echo $arr2[12];?>
		</td>
		<td>
		</td>
		<td>
		<?php echo $arr2[13];?>
		<?php echo $arr2[14];?>
		<?php echo $arr2[15];?>
		<?php echo $arr2[16];?>
		</td>
		<td>
		</td>
		<td>
		<?php echo $arr2[17];?>
		<?php echo $arr2[18];?>
		</td>
		<td>
		</td>
		<td>
		<?php echo $arr2[19];?>
		<?php echo $arr2[20];?>
		<?php echo $arr2[21];?>
		<?php echo $arr2[22];?>
		<?php echo $arr2[23];?>
		<?php echo $arr2[24];?>
		<?php echo $arr2[25];?>
		<?php echo $arr2[26];?>
		</td>
		<td>
		</td>
		<td>
		<?php echo $arr2[27];?>
		<?php echo $arr2[28];?>
		<?php echo $arr2[29];?>
		<?php echo $arr2[30];?>
		<?php echo $arr2[31];?>
		<?php echo $arr2[32];?>
		</td>




		</tr>
		
	<?php 
	$i=$i+1;


}
?>
</table>