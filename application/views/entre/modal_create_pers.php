<div role="dialog" id="newpers" tabindex="-1" class="modal fade show" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="height: 37px;font-size: 13px;padding: 7px;">
                <h4 class="modal-title" style="font-size: 13px;">Personnel ou Agent</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" style="height: auto;">
			<?php echo form_open('ensavepers');?>
			<form method="POST">
			<input type="hidden" class="id" name="id"/>
                <div class="row" style="height: auto;width: auto;">
                    <div class="col-lg-6"><label style="font-size: 12px;margin-bottom: 0px;">Nom</label>
					<input type="text" class="pers_name" style="font-size: 12px;width: 214px;" name="pers_name" />
					<label style="font-size: 12px;margin-bottom: 0px;">Prénoms</label>
					<input type="text" class="pers_firstname" style="font-size: 12px;width: 214px;" name="pers_firstname" />
					<label style="font-size: 12px;margin-bottom: 0px;">Matricule</label>
					<input type="text" class="pers_matricule" style="font-size: 12px;width: 214px;" name="pers_matricule" />
					<label style="font-size: 12px;margin-bottom: 0px;">Date de naissance</label>
					<input type="date" class="pers_date_birth" style="width: 214px;font-size: 12px;" name="pers_date_birth" /><label style="font-size: 12px;margin-bottom: 0px;">Sexe</label>
					<select style="font-size: 12px;width: 214px;height: 24px;" class="pers_sexe" name="pers_sexe">
                            <optgroup label="This is a group">
                                <option value selected>Select.</option>
                                <option value="M">M</option>
                                <option value="F">F</option>
                            </optgroup>
                        </select><label style="font-size: 12px;margin-bottom: 0px;"><br /></label><label style="font-size: 12px;margin-bottom: 0px;">Situation matrimonial</label>
						<select style="font-size: 12px;width: 214px;height: 24px;" class="pers_sm" name="pers_sm">
                            <optgroup label="This is a group">
                                <option value selected>Select.</option>
                                <option value="Marié(e)">Marié(e)</option>
                                <option value="Célibataire">Célibataire</option>
                            </optgroup>
                        </select><label style="font-size: 12px;margin-bottom: 0px;">CIN</label>
						<input type="text" class="pers_cin" style="font-size: 12px;width: 214px;" name="pers_cin" /><label style="font-size: 12px;margin-bottom: 0px;">Adresse</label>
						<input type="text" class="pers_address" style="font-size: 12px;width: 214px;" name="pers_address" /><label style="font-size: 12px;margin-bottom: 0px;margin-top: 7px;">Cotisation Social</label>
						<input type="text" class="pers_cot_social" style="font-size: 12px;width: 214px;" name="pers_cot_social" /></div>
                    <div class="col-lg-6"><label style="font-size: 12px;margin-bottom: 0px;">Département</label>
					<select style="font-size: 12px;width: 214px;height: 24px;" class="dep_id" name="dep_id">
                            <optgroup label="This is a group">
                                <option value selected>Select.</option>
								<?php foreach ($dep as $dep) { ?>
									<option value="<?php echo $dep->id;?>"><?php echo $dep->dep_name;?></option>
								<?php }?>
                            </optgroup>
                        </select><label style="font-size: 12px;margin-bottom: 0px;">Type de Contrat</label>
						<select style="font-size: 12px;width: 214px;height: 24px;" class="pers_contrat" name="pers_contrat">
                            <optgroup label="This is a group">
                                <option value selected>Selec.</option>
                                <option value="CDI">CDI</option>
                                <option value="CDD">CDD</option>
                                <option value="Freelance">Freelance</option>
                                <option value="Stage">Stage</option>
                            </optgroup>
                        </select><label style="font-size: 12px;margin-bottom: 0px;">Catégorie professionnel</label>
						<select style="font-size: 12px;width: 214px;height: 24px;" class="pers_type" name="pers_type">
                            <optgroup label="This is a group">
                                <option value selected>Select.</option>
								<?php foreach ($typepers as $typepers) { ?>
									<option value="<?php echo $typepers->pers_type_name;?>"><?php echo $typepers->pers_type_name;?></option>
								<?php }?>
                            </optgroup>
                        </select>
						<label style="font-size: 12px;margin-bottom: 0px;">SIte de travail</label>
						<select style="font-size: 12px;width: 214px;height: 24px;" class="pers_site" name="pers_site">
                            <optgroup label="This is a group">
                                <option value selected>Selec.</option>
                                <option value="Ambositra">Ambositra</option>
                                <option value="Fianarantsoa">Fianarantsoa</option>
                            </optgroup>
                        </select>
						<label style="font-size: 12px;margin-bottom: 0px;margin-top: 7px;">Téléphone</label>
						<input type="text" class="pers_phone" style="font-size: 12px;width: 214px;" name="pers_phone" /><label style="font-size: 12px;margin-bottom: 0px;">E-mail</label>
						<input type="text" class="pers_mail" style="font-size: 12px;width: 214px;" name="pers_mail" /><label style="font-size: 12px;margin-bottom: 0px;">Date d&#39;embauche</label>
						<input type="date" class="pers_date_arrived" style="width: 214px;font-size: 12px;" name="pers_date_arrived" />
						<label style="font-size: 12px;margin-bottom: 0px;">Date de fin de contrat</label>
						<input type="date" class="pers_date_gone" style="width: 214px;font-size: 12px;" name="pers_date_gone" />
						<label style="font-size: 12px;margin-bottom: 0px;">Droit de congé / mois</label>
						<input type="number" step="0.5" class="pers_dr_conge" style="font-size: 12px;width: 214px;" name="pers_dr_conge" />
						<label style="font-size: 12px;margin-bottom: 0px;">Nombre de jour de congé</label>
						<input type="number" step="0.5" class="pers_nbr_conge" style="font-size: 12px;width: 214px;" name="pers_nbr_conge" /></div>
                </div>
            </div>
            <div class="modal-footer" style="height: 39px;padding: 1px;"><button class="btn btn-primary" type="submit" style="font-size: 14px;height: 27px;padding: -3px 12px;margin: 5px;padding-top: 1px;">Enregistrer</button></div>
		</form>
		<?php echo form_close();?>
		</div>
    </div>
</div>
