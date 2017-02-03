<?session_start();
?>
<div align=center>
    	<fieldset>
    		
    		<legend align=center><h2>Choix du type de consommation</h2></legend>
			<select name="cet" onChange="location = this.options[this.selectedIndex].value;">
    				<option value="a">Consommation annuelle</option>
    				<option value="page_conso_quotidienne.php">Consommation hebdomadaire</option>
    				<option value="page_conso_annuelle.php">Consommation mensuelle</option>
    				<option value="page_conso_appareil_actif.php">Appareils actifs</option>
    			</select>
    	</fieldset>
    		

    <!-- Le corps -->
    
    <div align=left>
    	<fieldset>
    	
    		<legend>
    			<h2>Consommation en eau</h2>
    		</legend>
    			<aside>
                <img src="img/image5.png">
    			</aside>
    	</fieldset>
        		
	</div>
	<div align=right>
		<fieldset>
			<legend>
			<h2> Consommation en éléctricité</h2>
			</legend>
				<aside>
					<img src="img/image4.png">
    			</aside>
		</fieldset>

	</div>
	</br></br>

	<div align=left>
		<fieldset>
			<legend>
			<h2> Consommation en gaz</h2>
			</legend>
				<aside>
			         <img src="img/image9.png">
    			</aside>
		</fieldset>
	</div>