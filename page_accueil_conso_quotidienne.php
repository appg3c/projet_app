
<?session_start();
?>
<div align=center>
    	<fieldset>
    		<legend align=center><h2>Choix du type de consommation</h2></legend>
    			<select name="cet" onChange="location = this.options[this.selectedIndex].value;">
                    <option value="b">Consommation hebdomadaire</option>
    				<option value="page_conso_principale.php">Consommation mensuelle</option>
    				<option value="page_conso_annuelle.php">Consommation annuelle</option>
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
                <img src="img/image1.png">
    			</aside>
    	</fieldset>
        		
	</div>
	<div align=right>
		<fieldset>
			<legend>
			<h2> Consommation en éléctricité</h2>
			</legend>
				<aside>
					<img src="img/image8.png">
    			</aside>
		</fieldset>

	</div>

	<div align=left>
		<fieldset>
			<legend>
			<h2> Consommation en gaz</h2>
			</legend>
				<aside>
			         <img src="img/image2.png"
    			</aside>
		</fieldset>
	</div>