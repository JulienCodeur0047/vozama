<div role="dialog" id="newmoniteur" tabindex="-1" class="modal fade show" style="font-size: 11px;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="font-size: 7px;height: 42px;padding-top: 10px;">
                <h4 class="modal-title" style="font-size: 12px;">Moniteur</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
				<?php echo form_open('suivsavemoniteur');?>
				<form method="POST" >
                <div class="row">
                    <div class="col"><label style="margin-bottom: 5px;margin-top: 7px;">Nom</label><input type="text" style="width: 136px;border-radius: 1px;border-width: 0px;border-color: var(--secondary);border-bottom-width: 1px;" name="moniteur_name" /><label style="margin-bottom: 5px;margin-top: 7px;">Prénoms</label><input type="text" style="width: 136px;border-radius: 1px;border-width: 0px;border-color: var(--secondary);border-bottom-width: 1px;" name="moniteur_firstname" /><label style="margin-bottom: 5px;margin-top: 7px;">Matricule</label><input type="text" style="width: 136px;border-radius: 1px;border-width: 0px;border-color: var(--secondary);border-bottom-width: 1px;" name="moniteur_matricule" /><label style="margin-bottom: 5px;margin-top: 7px;">Adresse</label><input type="text" style="width: 136px;border-radius: 1px;border-width: 0px;border-color: var(--secondary);border-bottom-width: 1px;" name="moniteur_address" /></div>
                    <div class="col"><label style="margin-bottom: 5px;margin-top: 7px;">Date de naissance</label><input type="date" style="width: 136px;" name="moniteur_date_nais" /><label style="margin-bottom: 5px;margin-top: 7px;">Etat matrimonial</label><select style="width: 136px;" name="moniteur_etat">
                            <optgroup label="This is a group">
                                <option value selected>Select.</option>
                                <option value="Célibataire">Célibataire</option>
                                <option value="Marié(e)">Marié(e)</option>
                            </optgroup>
                        </select><label style="margin-bottom: 5px;margin-top: 7px;">Date entré au vozama</label><input type="date" style="width: 136px;" name="moniteur_date_entre_voz" /></div>
                    <div class="col"><label style="margin-bottom: 5px;margin-top: 7px;">Poste</label><select style="width: 133px;" name="poste_id">
                            <optgroup label="This is a group">
                                <option valueselected>select.</option>
								<?php foreach ($poste as $poste) {?>
                                <option value="<?php echo $poste->id?>"><?php echo $poste->poste_name?></option>
								<?php }?>
                                <option value="14"></option>
                            </optgroup>
                        </select><label style="margin-bottom: 5px;margin-top: 7px;">Religion</label><input type="text" style="width: 134px;border-radius: 1px;border-width: 0px;border-color: var(--secondary);border-bottom-width: 1px;" name="moniteur_religion" /><label style="margin-bottom: 5px;margin-top: 7px;">Profession</label><input type="text" style="width: 134px;border-radius: 1px;border-width: 0px;border-color: var(--secondary);border-bottom-width: 1px;" name="moniteur_profession" /></div>
                </div>
            </div>
            <div class="modal-footer" style="height: 55px;padding-top: 9px;"><button class="btn btn-light" type="button" data-dismiss="modal" style="font-size: 11px;">Annulé</button><button class="btn btn-primary" type="submit" style="font-size: 11px;">Enregistrer</button></div>
			</form>
			<?php echo form_close();?>
		</div>
    </div>
</div>
