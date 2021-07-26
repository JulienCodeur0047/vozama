<div role="dialog" tabindex="-1" class="modal fade show" style="width: 1217px;height: 754px;" id="newvp">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="width: auto;background: #ffffff;height: 47px;">
                <h4 class="modal-title" style="font-size: 14px;">Compte rendu de visite de poste          </h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" style="width: auto;background: #ffffff;padding: 12px;">
                <h4 class="modal-title" style="font-size: 11px;color: var(--red);margin-bottom: 5px;"> (*) obligatoire</h4>
                <?php echo form_open('savepv') ?>
				<form methode="post">
                    <div class="form-row">
                        <div class="col-xl-5" style="padding-left: 4px;padding-right: 8px;"><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Poste</label><label style="font-size: 12px;margin-bottom: 0px;margin-left: 4px;color: var(--red);">*</label>
						<select class="form-control" style="font-size: 12px;" name="poste_id">
                                <optgroup label="Poste">
                                    <option value selected>Selec. Poste</option>
									<?php foreach ($poste as $poste) { ?>
									<option value="<?php echo $poste->id; ?>"><?php echo $poste->poste_name; ?></option>
									<?php }?>
                                </optgroup>
                            </select>
                            <div>
                                <div class="form-row" style="width: auto;">
                                    <div class="col"><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Date</label><label style="font-size: 12px;margin-bottom: 0px;margin-left: 4px;color: var(--red);">*</label><input class="form-control" type="date" style="font-size: 12px;" name="vp_date" /></div>
                                    <div class="col-xl-5"><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Heure</label><label style="font-size: 12px;margin-bottom: 0px;margin-left: 4px;color: var(--red);">*</label><input class="form-control" type="time" style="font-size: 12px;" name="vp_heure" /></div>
                                </div>
                            </div><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Visiteur A</label><input type="text" class="form-control" style="font-size: 12px;" name="vp_visiteur1" /><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Visiteur B</label><input type="text" class="form-control" style="font-size: 12px;" name="vp_visiteur2" /><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Visiteur C</label><input type="text" class="form-control" style="font-size: 12px;" name="vp_visiteur3" />
                            <div class="form-row">
                                <div class="col"><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Moniteur</label><select class="form-control" style="font-size: 12px;" name="moniteur_id">
                                        <optgroup label="Moniteur">
                                            <option value selected>Selec. Moniteur</option>
											<?php foreach ($moniteur as $moniteur) { ?>
											<option value="<?php echo $moniteur->id; ?>"><?php echo $moniteur->moniteur_name.' '.$moniteur->moniteur_firstname; ?></option>
											<?php }?>
                                        </optgroup>
                                    </select></div>
                                <div class="col-xl-4"><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Evaluation moniteur</label><input type="text" class="form-control" style="font-size: 12px;width: 100px;" placeholder="Evaluation" name="vp_eval_moniteur" /></div>
                            </div>
                            <div class="form-row">
                                <div class="col"><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Annimateur</label><select class="form-control" style="font-size: 12px;" name="inspecteur_id">
                                        <optgroup label="Annimateur">
                                            <option value selected>Selec. Annimateur</option>
											<?php foreach ($inspecteur as $inspecteur) { ?>
											<option value="<?php echo $inspecteur->id; ?>"><?php echo $inspecteur->insp_name.' '.$inspecteur->insp_firstname; ?></option>
											<?php }?>
                                        </optgroup>
                                    </select></div>
                                <div class="col-xl-4"><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Evaluation inspecteur</label><input type="text" class="form-control" style="font-size: 12px;width: 100px;" placeholder="Evaluation" name="vp_eval_inspecteur" /></div>
                            </div>
                        </div>
                        <div class="col" style="padding-left: 14px;">
                            <div class="form-check"><input type="checkbox" class="form-check-input" id="formCheck-1" name="vp_presence_moniteur" value="oui" /><label class="form-check-label" for="formCheck-1" style="font-size: 12px;">Présence moniteur </label></div>
                            <div class="form-row" style="margin-bottom: -1px;">
                                <div class="col-xl-6" style="padding: 2px;"><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Nom du remplacement</label><input type="text" class="form-control" style="font-size: 12px;" name="vp_rempl_nom" /><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Durée du remplacement</label><input type="text" class="form-control" style="font-size: 12px;" name="vp_rempl_duree" />
                                    <div class="form-check"><input type="checkbox" class="form-check-input" id="formCheck-3" name="vp_prep_cours_fait" value="oui" /><label class="form-check-label" for="formCheck-1" style="font-size: 12px;">Préparation cours fait</label></div><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Remarque</label><input type="text" class="form-control" style="font-size: 12px;" name="vp_rem_prepa_cours" />
                                </div>
                                <div class="col-xl-6"><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Raison du remplacement</label><input type="text" class="form-control" style="font-size: 12px;" name="vp_rempl_raison" />
                                    <div class="form-check"><input type="checkbox" class="form-check-input" id="formCheck-2" name="vp_cahier_appel" value="oui" /><label class="form-check-label" for="formCheck-1" style="font-size: 12px;">Cahier d&#39;appel à jour</label></div><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Remarque</label><input type="text" class="form-control" style="font-size: 12px;" name="vp_rem_cahier_appel" />
                                </div>
                            </div>
                            <div class="form-check"><input type="checkbox" class="form-check-input" id="formCheck-1" value="oui" name="vp_appel_fait" /><label class="form-check-label" for="formCheck-1" style="font-size: 12px;">L&#39;appel fait</label></div>
                            <div class="form-row">
                                <div class="col"><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Nbr inscrit sur Liste</label><input type="text" class="form-control" style="font-size: 12px;" placeholder="123" name="vp_nbr_list_off" /></div>
                                <div class="col"><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Nbr sur cahier d&#39;appel</label><input type="text" class="form-control" style="font-size: 12px;" placeholder="123" name="	vp_nbr_eleve_present" /></div>
                                <div class="col"><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Nbr élève / classe   </label><input type="text" class="form-control" style="font-size: 12px;" name="vp_nbr_eleve_classe" placeholder="123" /></div>
                                <div class="col"><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Nbr Absence           </label><input type="text" class="form-control" style="font-size: 12px;" name="vp_nbr_abs" placeholder="123" /></div>
                            </div><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Observation</label><input type="text" class="form-control" style="font-size: 12px;" name="vp_observation" />
                            <div class="form-row">
                                <div class="col"><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Propreté de la salle</label><input type="text" class="form-control" style="font-size: 12px;" name="vp_propr_salle" /></div>
                                <div class="col"><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Etat de la salle</label><input type="text" class="form-control" style="font-size: 12px;" name="vp_etat_salle" /></div>
                            </div><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Remarques</label><input type="text" class="form-control" style="font-size: 12px;" name="vp_remarque" />
                        </div>
                    </div>
                
            </div>
            <div class="modal-footer" style="width: auto;background: #ffffff;height: 52px;padding: 5px;"><button class="btn btn-light" type="button" data-dismiss="modal" style="font-size: 12px;">Annulée</button><button class="btn btn-light" type="submit" style="font-size: 12px;background: var(--blue);">Enregistré</button></div>
			</form>
			<?php echo form_close()?>
		</div>
    </div>
</div>
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
