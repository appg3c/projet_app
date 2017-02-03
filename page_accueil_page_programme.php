<div align=center>
    	
    	 <?php 
         $date= date("d-m-Y");
         $heure= date("H:i");
         echo $date;
         ?>
    	<form method="post" action="cible_page_programme.php" enctype="multipart/form-data">
    		<legend>
    			<h2>Programmer un mode</h2>
    		</legend>
        <br />
        	
        		

        		<table>
        			<tr>
        				<td>
        					<label for="maison">Choisissez la maison: </label>
        				</td>

        				<td>
        					<select name="choix_maison">
        					<option value="Maison_principale">Maison principale</option>
							<option value="Maison secondaire">Maison secondaire</option>
							<option value="maison vac1">Maison de vacances 1</option>
							<option value="maison vac2">Maison de vacances 2</option>
							<option value="maison vac3">Maison de vacances 3</option>
							</select>
						</td>
					</tr>

					<tr>
						<td>
							<label for="debut_periode">Début du programme: </label>
						</td>


						<td>
							
						
							<select name="cdj">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
							</select>

							&nbsp

							<select name="cdm">
							<option value="janvier">janvier</option>
							<option value="fevrier">fevrier</option>
							<option value="mars">mars</option>
							<option value="avril">avril</option>
							<option value="mai">mai</option>
							<option value="juin">juin</option>
							<option value="juillet">juillet</option>
							<option value="août">août</option>
							<option value="septembre">septembre</option>
							<option value="octobre">octobre</option>
							<option value="novembre">novembre</option>
							<option value="decembre">decembre</option>
							</select>


						

						</td>
					</tr>
					<tr>
						<td>
							<label for="fin_periode">Fin programme:</label>
						</td>

						<td>
							<select name="cfj">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
							</select>

							&nbsp

							<select name="cfm">
							<option value="janvier">janvier</option>
							<option value="fevrier">fevrier</option>
							<option value="mars">mars</option>
							<option value="avril">avril</option>
							<option value="mai">mai</option>
							<option value="juin">juin</option>
							<option value="juillet">juillet</option>
							<option value="août">août</option>
							<option value="septembre">septembre</option>
							<option value="octobre">octobre</option>
							<option value="novembre">novembre</option>
							<option value="decembre">decembre</option>
							</select>
						</td>


					<tr>
						<td>
							<label for="temperature_désirée">Température:</label>
						</td>

						<td>
						<input type="int" placeholder="température en degrés" name="temperature">
						</td>
					</tr>

					<tr>
						<td>
							<input class="bouton_modif" type="submit" name="valider_le_mode" value="Je valide ce mode">
						</td>
					</tr>


			</table>
		</form>
		<fieldset>
      <legend><h2>Vos programmes</h2></legend>
      <form method="post" action="cible_page_programme.php">
      <td align="center">
              <input class="bouton_modif" type="submit" name="effacer" value="Effacer tout vos programme">
      </td>
      <?php include_once('affichage_programme.php'); ?>
      </fieldset>
			
		