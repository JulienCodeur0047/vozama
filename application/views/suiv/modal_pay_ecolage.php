<div role="dialog" id="payecolage" tabindex="-1" class="modal fade show">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 37px;font-size: 13px;padding: 7px;">
                <h4 class="modal-title" style="font-size: 13px;">Ecolage</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" style="height: auto;">
			<?php echo form_open('saveeco')?>  
			<form method="POST">
                <div class="row" style="padding-left: 9px;">
                    <div class="col-xl-5" style="padding-left: 1px;"><label style="margin-bottom: -4px;font-size: 11px;">Nom &amp; Prénoms</label>
					<input type="text" style="font-size: 12px;width: 118px;border-width: 0px;" class="el_nom_prenom" readonly /></div>
					<input type="hidden" name="eleve_id" class="id"/>
					<input type="hidden" name="poste_id" class="poste_id"/>
					<input type="hidden" name="eco_el_classe" class="eleve_classe"/>
					<input type="hidden" class="eleve_name" style="font-size: 12px;width: 118px;border-width: 0px;" name="eco_el_nom" readonly />
					<input type="hidden" class="eleve_firstname" style="font-size: 12px;width: 118px;border-width: 0px;" name="eco_el_prenoms" readonly />
                    <div class="col-xl-2" style="padding-left: 0px;"><label style="margin-bottom: -4px;font-size: 11px;">Classe</label>
					<input type="text" class="eleve_classe" style="font-size: 12px;width: 44px;border-width: 0px;padding-left: 0px;padding-right: 0px;" name="eco_el_classe" readonly /></div>
                    <div class="col-xl-4" style="padding-left: 0px;"><label style="margin-bottom: -4px;font-size: 11px;">Poste</label>
					<input type="text" class="eleve_poste" style="font-size: 12px;width: 96px;border-width: 0px;" name="eco_poste" readonly /></div>
                </div>
                <div class="row" style="height: auto;width: auto;">
                    <div class="col" style="height: auto;"><label style="margin-bottom: -4px;font-size: 11px;">Type</label>
					<select name="eco_type" style="font-size: 12px;width: 265px;color: var(--gray);height: 25px;border-radius: 2px;">
                            <optgroup label="Type">
                                <option value selected>Selec.Type</option>
								<option value="Espèces">Espèces</option>
                                <option value="Autre">Autre</option>
                            </optgroup>
                        </select><label style="margin-bottom: -4px;font-size: 11px;">Date</label> 
						<input type="date" style="width: 265px;font-size: 12px;" name="eco_date" />
                        <div class="row">
                            <div class="col"><label style="margin-bottom: -4px;font-size: 11px;">Mois de</label>
							<select name="eco_mois" style="font-size: 12px;width: 113px;color: var(--gray);height: 25px;border-radius: 2px;">
                                    <optgroup label="Poste">
                                        <option value selected>Selec.Mois</option>
                                        <option value="Janvier">Janvier</option>
                                        <option value="Fevrier">Fevrier</option>
                                        <option value="Mars">Mars</option>
                                        <option value="Avril">Avril</option>
                                        <option value="Mai">Mai</option>
                                        <option value="Juin">Juin</option>
                                        <option value="Juillet">Juillet</option>
                                        <option value="Aout">Aout</option>
                                        <option value="Septembre">Septembre</option>
                                        <option value="Octobre">Octobre</option>
                                        <option value="Novembre">Novembre</option>
                                        <option value="Decembre">Decembre</option>
                                    </optgroup>
                                </select></div>
                            <div class="col"><label style="margin-bottom: -4px;font-size: 11px;">Année</label>
							<select name="eco_annee" style="font-size: 12px;width: 113px;color: var(--gray);height: 25px;border-radius: 2px;">
                                    <optgroup label="Poste">
                                        <option value selected>Selec.Annee</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                        <option value="2028">2028</option>
                                        <option value="2029">2029</option>
                                        <option value="2030">2030</option>
                                        <option value="2031">2031</option>
                                        <option value="2032">2032</option>
                                        <option value="2033">2033</option>
                                        <option value="2034">2034</option>
                                        <option value="2035">2035</option>
                                        <option value="2036">2036</option>
                                        <option value="2037">2037</option>
                                        <option value="2038">2038</option>
                                        <option value="2039">2039</option>
                                        <option value="2040">2040</option>
                                        <option value="2041">2041</option>
                                        <option value="2042">2042</option>
                                        <option value="2043">2043</option>
                                        <option value="2044">2044</option>
                                        <option value="2045">2045</option>
                                        <option value="2046">2046</option>
                                        <option value="2047">2047</option>
                                        <option value="2048">2048</option>
                                        <option value="2049">2049</option>
                                        <option value="2050">2050</option>
                                    </optgroup>
                                </select></div>
                        </div><label style="margin-bottom: -4px;font-size: 11px;">Désignation </label>
						<input type="text" style="font-size: 12px;width: 265px;" name="eco_libelle_type" /><label style="margin-bottom: -4px;font-size: 11px;">Montant si espèces<br /></label>
						<input type="number" style="width: 265px;font-size: 12px;" min="1000" max="99999999999" step="500" name="eco_montant" /><label style="margin-bottom: -4px;font-size: 11px;">Observation</label>
						<textarea style="width: 265px;" name="eco_observation"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="height: 39px;padding: 1px;"><button class="btn btn-primary" type="submit" style="font-size: 14px;height: 27px;padding: -3px 12px;margin: 5px;padding-top: 1px;">Effectuer</button></div>
		</form>
		<?php echo form_close();?>
		</div>
    </div>
</div>
