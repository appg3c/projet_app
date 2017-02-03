<?session_start();
?>
<fieldset>
            <legend align=center><h2>Choix de l'échelle de temps</h2></legend>
                <select name="cet" onChange="location = this.options[this.selectedIndex].value;">
                    <option value="d">Appareils actifs</option>
                    <option value="c">Consommation annuelle</option>
                    <option value="page_conso_principale.php">Consommation mensuelle</option>
                    <option value="page_conso_quotidienne.php">Consommation quotidienne</option>
                    
                </select>
        </fieldset>

    <!-- Le corps -->
    
    <div align=center>
        <fieldset>
        
            <legend>
                <h2>Les capteurs</h2>
            </legend>
                <aside>

                </aside>
        </fieldset>
                
    </div>
    <div align=center>
        <fieldset>
            <legend>
            <h2>Les actionneurs</h2>
            </legend>
                <aside>
                    
                </aside>
        </fieldset>
 










