<?php include('connectionbase.php') 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=9999");
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$data = curl_exec($ch);
curl_close($ch);
echo "Raw Data:<br />";
echo("$data");
$data_tab = str_split($data,33);
echo "Tabular Data:<br />";
for($i=0, $size=count($data_tab); $i<$size; $i++){
echo "Trame $i: $data_tab[$i]<br />";
$trame = $data_tab[$i];
// décodage avec des substring
$t = substr($trame,0,1);
$o = substr($trame,1,4);

list($t,$o,$r,$c,$n,$v,$a,$x,$year,$month,$day,$hour,$min,$sec) = sscanf($trame, "%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
echo("<br/>$t,$o,$r,$c,$n,$v,$a,$x,$year,$month,$day,$hour,$min,$sec<br/>");
}
?>

  $req=$bdd->prepare('INSERT INTO donnees(type,) VALUES (?,?,?)');
            // on previent notre base de données qu'on va mettre des valeurs dedans                  
            $req->execute(array($pseudo, $mail, $password));
            // la on met les valeurs dedans ( array c'est un tableau donc en fait on les met dans un tableau)
           ?>  