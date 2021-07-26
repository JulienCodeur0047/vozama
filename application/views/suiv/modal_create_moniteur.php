<div role="dialog" id="newmoniteur" tabindex="-1" class="modal fade show" style="font-size: 11px;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="font-size: 7px;height: 42px;padding-top: 10px;">
                <h4 class="modal-title" style="font-size: 12px;">Moniteur</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
				<?php echo form_open('suivsavemoniteur');?>
				<form method="POST" >
					<input type="hidden" name="id" class="id"/>
                <div class="row">
                <div class="col">
					<label style="margin-bottom: 5px;margin-top: 7px;">Nom</label>
					<input type="text" class="moniteur_name" style="width: 136px;border-radius: 1px;border-width: 0px;border-color: var(--secondary);border-bottom-width: 1px;" name="moniteur_name" />
					<label style="margin-bottom: 5px;margin-top: 7px;">Prénoms</label>
					<input type="text" class="moniteur_firstname" style="width: 136px;border-radius: 1px;border-width: 0px;border-color: var(--secondary);border-bottom-width: 1px;" name="moniteur_firstname" />
					<label style="margin-bottom: 5px;margin-top: 7px;">Matricule</label>
					<input type="text" class="moniteur_matricule" style="width: 136px;border-radius: 1px;border-width: 0px;border-color: var(--secondary);border-bottom-width: 1px;" name="moniteur_matricule" />
					<label style="margin-bottom: 5px;margin-top: 7px;">Adresse</label>
					<input type="text" class="moniteur_address" style="width: 136px;border-radius: 1px;border-width: 0px;border-color: var(--secondary);border-bottom-width: 1px;" name="moniteur_address" />
                    <label style="margin-bottom: 5px;margin-top: 7px;">Téléphone</label>
					<input type="text" class="moniteur_tel" style="width: 136px;border-radius: 1px;border-width: 0px;border-color: var(--secondary);border-bottom-width: 1px;" name="moniteur_tel" />
					<label style="margin-bottom: 5px;margin-top: 7px;">CIN</label>
					<input type="text" class="moniteur_cin" style="width: 136px;border-radius: 1px;border-width: 0px;border-color: var(--secondary);border-bottom-width: 1px;" name="moniteur_cin" />
					<label style="margin-bottom: 5px;margin-top: 7px;">Date de délivrance CIN</label>
					<input type="date" class="moniteur_date_liv_cin" style="width: 136px;" name="moniteur_date_liv_cin"/>
					<label style="margin-bottom: 5px;margin-top: 7px;">Lieu de délivrance CIN</label>
					<input type="text" class="moniteur_lieu_deliv_cin" style="width: 136px;border-radius: 1px;border-width: 0px;border-color: var(--secondary);border-bottom-width: 1px;" name="moniteur_lieu_deliv_cin" />
				</div>
				<div class="col">
					<label style="margin-bottom: 5px;margin-top: 7px;">Date de naissance</label>
					<input type="date" class="moniteur_date_nais" style="width: 136px;" name="moniteur_date_nais" />
					<label style="margin-bottom: 5px;margin-top: 7px;">Etat matrimonial</label>
					<select class="moniteur_etat" style="width: 136px;" name="moniteur_etat">
                            <optgroup label="This is a group">
                                <option value selected>Select.</option>
                                <option value="Célibataire">Célibataire</option>
                                <option value="Marié(e)">Marié(e)</option>
                            </optgroup>
                        </select><label style="margin-bottom: 5px;margin-top: 7px;">Date entré au vozama</label>
						<input type="date" class="moniteur_date_entre_voz" style="width: 136px;" name="moniteur_date_entre_voz" />
					<label style="margin-bottom: 5px;margin-top: 7px;">Nombre d'enfant</label>
					<input type="number" class="moniteur_nbr_enfant" style="width: 136px;border-radius: 1px;border-width: 0px;border-color: var(--secondary);border-bottom-width: 1px;" name="moniteur_nbr_enfant" />
					<label style="margin-bottom: 5px;margin-top: 7px;">Nombre de charge</label>
					<input type="number" class="moniteur_nbr_charge" style="width: 136px;border-radius: 1px;border-width: 0px;border-color: var(--secondary);border-bottom-width: 1px;" name="moniteur_nbr_charge" />
					<label style="margin-bottom: 5px;margin-top: 7px;">Niveau d'étude</label>
					<input type="text" class="moniteur_nv_etude" style="width: 136px;border-radius: 1px;border-width: 0px;border-color: var(--secondary);border-bottom-width: 1px;" name="moniteur_nv_etude" />
					<label style="margin-bottom: 5px;margin-top: 7px;">Diplome</label>
					<input type="text" class="moniteur_diplome" style="width: 136px;border-radius: 1px;border-width: 0px;border-color: var(--secondary);border-bottom-width: 1px;" name="moniteur_diplome" />
					<label style="margin-bottom: 5px;margin-top: 7px;">Lieu d'étude</label>
					<input type="text" class="moniteur_lieu_etude" style="width: 136px;border-radius: 1px;border-width: 0px;border-color: var(--secondary);border-bottom-width: 1px;" name="moniteur_lieu_etude" />
				</div>
                    <div class="col">
						<label style="margin-bottom: 5px;margin-top: 7px;">Poste</label>
					<select class="poste_id" style="width: 133px;" name="poste_id">
                            <optgroup label="This is a group">
                                <option valueselected>select.</option>
								<?php foreach ($poste as $poste) {?>
                                <option value="<?php echo $poste->id?>"><?php echo $poste->poste_name?></option>
								<?php }?>
                                <option value="14"></option>
                            </optgroup>
                        </select>
						<label style="margin-bottom: 5px;margin-top: 7px;">Religion</label>
						<input type="text" class="moniteur_religion" style="width: 134px;border-radius: 1px;border-width: 0px;border-color: var(--secondary);border-bottom-width: 1px;" name="moniteur_religion" />
						<label style="margin-bottom: 5px;margin-top: 7px;">Profession</label>
						<input type="text" class="moniteur_profession" style="width: 134px;border-radius: 1px;border-width: 0px;border-color: var(--secondary);border-bottom-width: 1px;" name="moniteur_profession" />
						<label style="margin-bottom: 5px;margin-top: 7px;">Ressource</label>
						<input type="text" class="moniteur_resource" style="width: 134px;border-radius: 1px;border-width: 0px;border-color: var(--secondary);border-bottom-width: 1px;" name="moniteur_resource" />
					</div>
                </div>
            </div>
            <div class="modal-footer" style="height: 55px;padding-top: 9px;">
			<button class="btn btn-light" type="button" data-dismiss="modal" style="font-size: 11px;">Annulé</button>
			<button class="btn btn-primary" type="submit" style="font-size: 11px;">Enregistrer</button></div>
			</form>
			<?php echo form_close();?>
		</div>
    </div>
</div>
