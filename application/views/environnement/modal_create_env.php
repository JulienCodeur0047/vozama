<div role="dialog" id="newenv" tabindex="-1" class="modal fade show">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 46px;font-size: 13px;">
                <h4 class="modal-title" style="font-size: 15px;">Environnement</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" style="height: auto;">
			<?php echo form_open('saveenv');?>
			<form method="POST">
			<input type="hidden" class="id" name="id" />
                <div class="row" style="height: auto;width: auto;">
                    <div class="col" style="width: 303px;height: auto;"><label style="margin-bottom: -4px;font-size: 11px;">Site<br /></label>
					<select style="font-size: 13px;height: 25px;width: 216px;" name="site_id" class="site_id">
                            <optgroup label="Site">
                                <option value selected>Select. Site</option>
								<?php foreach ($site as $site) {?>
									<option value="<?php echo $site->id;?>" ><?php echo $site->site_name;?></option>
								<?php }?>
                            </optgroup>
                        </select><label style="margin-bottom: -4px;font-size: 11px;">Commune<br /></label>
						<select style="font-size: 13px;height: 25px;width: 216px;" name="commune_id" class="commune_id">
                            <optgroup label="Commune">
                                <option value selected>Select. Commune</option>
								<?php foreach ($commune as $com) {?>
									<option value="<?php echo $com->id;?>" ><?php echo $com->commune_name;?></option>
								<?php }?>
                            </optgroup>
                        </select><label style="margin-bottom: -4px;font-size: 11px;">Année de départ<br /></label><select style="font-size: 13px;height: 25px;width: 216px;" name="env_annee_depart" classe="env_annee_depart">
                            <optgroup label="Site">
                                <option value selected>Select.Année</option>
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
                            </optgroup>
                        </select>
						<label style="margin-bottom: -4px;font-size: 11px;">Nombre des arbres plantés par année<br /></label>
                        <div class="row">
                            <div class="col">
								<input type="number" class="env_nb_arbre_2020" style="width: 87px;height: 25px;font-size: 13px;margin-top: 4px;" placeholder="2020" name="env_nb_arbre_2020" />
								<input type="number" class="env_nb_arbre_2020" style="width: 87px;height: 25px;font-size: 13px;margin-top: 4px;" placeholder="2021" name="env_nb_arbre_2021" /></div>
                            <div class="col">
							<input type="number" class="env_nb_arbre_2022" style="width: 87px;height: 25px;font-size: 13px;margin-top: 4px;" placeholder="2022" name="env_nb_arbre_2022" />
							<input type="number" class="env_nb_arbre_2023" style="width: 87px;height: 25px;font-size: 13px;margin-top: 4px;" placeholder="2023" name="env_nb_arbre_2023" /></div>
                        </div>
						<label style="margin-bottom: -4px;font-size: 11px;">Total estimation arbres sur la zone</label>
						<input type="number" class="env_total_est_zone" style="width: 216px;height: 25px;font-size: 13px;margin-top: 4px;" name="env_total_est_zone" />
                    </div>
                    <div class="col" style="height: auto;">
					<label style="margin-bottom: -4px;font-size: 11px;">Date dernier plantation</label>
					<input type="date" style="width: 216px;font-size: 13px;color: var(--gray);" name="env_date_dern_plant" class="env_date_dern_plant"/>
					<label style="margin-bottom: -4px;font-size: 11px;">Date dernier visite</label>
					<input class="env_date_dern_visit" type="date" style="width: 216px;font-size: 13px;color: var(--gray);" name="env_date_dern_visit" />
					<label style="margin-bottom: -4px;font-size: 11px;">Taux de survie</label>
					<input type="number" class="env_taux_survie" style="width: 216px;height: 25px;font-size: 13px;margin-top: 4px;" name="env_taux_survie" />
					<label style="margin-bottom: -4px;font-size: 11px;">Bailleur</label>
					<input type="text" class="env_bailleur" style="width: 216px;font-size: 13px;height: 25px;" name="env_bailleur" />
					<label style="margin-bottom: -4px;font-size: 11px;">Remarque / notes</label>
					<input type="text" class="env_obs_gal" style="width: 216px;font-size: 13px;height: 56px;" name="env_obs_gal" /></div>
                </div>
            </div>
            <div class="modal-footer" style="height: 53px;padding: 5px;"><button class="btn btn-primary" type="submit" style="font-size: 14px;">Enregistrer</button></div>
			</form>
			<?php echo form_close();?>
		</div>
    </div>
</div>
