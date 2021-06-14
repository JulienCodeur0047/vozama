<section style="background: var(--white); ">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="margin-top: -8px;margin-bottom: 28px;height: 49px;">
        <div class="container"><a class="navbar-brand" href="#" style="margin-top: 9px;font-size: 14px;color: var(--gray);">Alphabétisation</a><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1" style="margin-top: 9px;">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#" style="border-right-width: 2px;border-right-color: rgb(102,102,102);font-size: 13px;width: 235.344px;padding-right: 0px;padding-left: 33px;">Modification de visite de poste </a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li> 
                </ul><label style="font-size: 13px;margin-bottom: 0px;"><?php echo $vp->id;?></label><label style="font-size: 13px;margin-bottom: 0px;margin-left: 4px;margin-right: 3px;">du</label><label style="font-size: 13px;margin-bottom: 0px;margin-left: 0px;margin-right: 16px;"><?php echo $vp->vp_date;?></label>
                <form class="form-inline mr-auto" target="_self">
				
                    <div class="form-group"><label for="search-field"></label></div>
                </form>
				<a class="btn btn-light action-button" role="button" href="<?php echo base_url('vp')?>" style="margin-top: 2px;background: rgb(148,203,176);font-size: 12px;border-radius: 0px;"><i class="fa fa-arrow-left" style="font-size: 14px;"></i></a>
				<a class="btn btn-light action-button" 
				onclick="return confirm('Voulez-vous supprimer le Poste <?php echo $vp->id; ?> ?');"
							href="<?php echo base_url('deleteVp/'.$vp->id);?>"
				role="button" style="margin-top: 2px;background: var(--red);font-size: 12px;margin-left: 0px;color: var(--red);border-radius: 0px;"><i class="fa fa-trash-o" style="font-size: 14px;"></i></a>
            </div>
        </div>
    </nav>
	<?php echo form_open('updatevp/'.$vp->id); ?> 
	<form methode="post">
    <form style="margin: 10px;margin-right: 40px;margin-left: 40px;margin-bottom: 10px;background: var(--white);">
	
        <div class="form-row">
            <div class="col-xl-5" style="padding-left: 4px;padding-right: 8px;"><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Poste</label><label style="font-size: 12px;margin-bottom: 0px;margin-left: 4px;color: var(--red);">*</label><select class="form-control" style="font-size: 12px;" name="poste_id">
                    <optgroup label="Poste">
					<option value="<?php echo $vp->poste_id;?>" selected><?php echo $vp->vp_poste;?></option>
									<?php foreach ($poste as $poste) { ?>
									<option value="<?php echo $poste->id; ?>"><?php echo $poste->poste_name; ?></option>
									<?php }?>
                    </optgroup>
                </select>
                <div>
                    <div class="form-row" style="width: auto;">
                        <div class="col"><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Date</label><label style="font-size: 12px;margin-bottom: 0px;margin-left: 4px;color: var(--red);">*</label><input class="form-control" type="date" style="font-size: 12px;" name="vp_date" value="<?php echo $vp->vp_date?>"/></div>
                        <div class="col-xl-5"><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Heure</label><label style="font-size: 12px;margin-bottom: 0px;margin-left: 4px;color: var(--red);">*</label><input class="form-control" type="time" style="font-size: 12px;" name="vp_heure" value="<?php echo $vp->vp_heure?>"/></div>
                    </div>
                </div><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Visiteur A</label><input type="text" class="form-control" style="font-size: 12px;" name="vp_visiteur1" value="<?php echo $vp->vp_visiteur1?>" /><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Visiteur B</label><input type="text" class="form-control" style="font-size: 12px;" name="vp_visiteur2" value="<?php echo $vp->vp_visiteur2?>"/><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Visiteur C</label><input type="text" class="form-control" style="font-size: 12px;" name="vp_visiteur3" value="<?php echo $vp->vp_visiteur3?>"/>
                <div class="form-row">
                    <div class="col"><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Moniteur</label><select class="form-control" style="font-size: 12px;" name="moniteur_id">
                            <optgroup label="Moniteur">
							<option value="<?php echo $vp->moniteur_id;?>" selected><?php echo $vp->vp_moniteur;?></option>
											<?php foreach ($moniteur as $moniteur) { ?>
											<option value="<?php echo $moniteur->id; ?>"><?php echo $moniteur->moniteur_name.' '.$moniteur->moniteur_firstname; ?></option>
											<?php }?>
                            </optgroup>
                        </select></div>
                    <div class="col-xl-4"><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Evaluation moniteur</label><input type="text" class="form-control" style="font-size: 12px;width: 100px;" placeholder="Evaluation" name="vp_eval_moniteur" value="<?php echo $vp->vp_eval_moniteur?>" /></div>
                </div>
                <div class="form-row">
                    <div class="col"><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Inspecteur</label><select class="form-control" style="font-size: 12px;" name="inspecteur_id">
                            <optgroup label="Inspecteur">
                                <option value="<?php echo $vp->inspecteur_id;?>" selected><?php echo $vp->vp_inspecteur;?></option>
								<?php foreach ($inspecteur as $inspecteur) { ?>
											<option value="<?php echo $inspecteur->id; ?>"><?php echo $inspecteur->insp_name.' '.$inspecteur->insp_firstname; ?></option>
											<?php }?>
                            </optgroup>
                        </select></div>
                    <div class="col-xl-4"><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Evaluation inspecteur</label><input type="text" class="form-control" style="font-size: 12px;width: 100px;" placeholder="Evaluation" name="vp_eval_inspecteur" value="<?php echo $vp->vp_eval_inspecteur?>" /></div>
                </div>
            </div>
            <div class="col" style="padding-left: 14px; margin-bottom: 10px">
                <div class="form-check"><input type="checkbox" class="form-check-input" id="formCheck-1" <?php echo ($vp->vp_presence_moniteur=="oui" ? 'checked' : '');?> value="oui" name="vp_presence_moniteur"/><label class="form-check-label" for="formCheck-1" style="font-size: 12px;">Présence moniteur </label></div>
                <div class="form-row" style="margin-bottom: -1px;">
                    <div class="col-xl-6" style="padding: 2px;"><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Nom du remplacement</label><input type="text" class="form-control" style="font-size: 12px;" name="vp_rempl_nom" value="<?php echo $vp->vp_rempl_nom;?>"/><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Durée du remplacement</label><input type="text" class="form-control" style="font-size: 12px;" name="vp_rempl_duree" value="<?php echo $vp->vp_rempl_duree?>" />
                        <div class="form-check"><input type="checkbox" class="form-check-input" id="formCheck-3" <?php echo ($vp->vp_prep_cours_fait=="oui" ? 'checked' : '');?> value="oui" name="vp_prep_cours_fait"/><label class="form-check-label" for="formCheck-1" style="font-size: 12px;">Préparation cours fait</label></div><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Remarque</label><input type="text" class="form-control" style="font-size: 12px;" name="vp_rem_prepa_cours" value="<?php echo $vp->vp_rem_prepa_cours?>" />
                    </div>
                    <div class="col-xl-6"><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Raison du remplacement</label><input type="text" class="form-control" style="font-size: 12px;" name="vp_rempl_raison" value="<?php echo $vp->vp_rempl_raison;?>" />
                        <div class="form-check"><input type="checkbox" class="form-check-input" id="formCheck-2" <?php echo ($vp->vp_cahier_appel=="oui" ? 'checked' : '');?> value="oui" name="vp_cahier_appel" /><label class="form-check-label" for="formCheck-1" style="font-size: 12px;">Cahier d&#39;appel à jour</label></div><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Remarque</label><input type="text" class="form-control" style="font-size: 12px;" name="vp_rem_cahier_appel" value="<?php echo $vp->vp_rem_cahier_appel?>" />
                    </div>
                </div>
                <div class="form-check"><input type="checkbox" class="form-check-input" id="formCheck-1" <?php echo ($vp->vp_appel_fait=="oui" ? 'checked' : '');?> value="oui" name="vp_appel_fait"/><label class="form-check-label" for="formCheck-1" style="font-size: 12px;">L&#39;appel fait</label></div>
                <div class="form-row">
                    <div class="col"><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Nbr inscrit sur Liste</label><input type="text" class="form-control" style="font-size: 12px;" placeholder="123" name="vp_nbr_list_off" value="<?php echo $vp->vp_nbr_list_off;?>"/></div>
                    <div class="col"><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Nbr sur cahier d&#39;appel</label><input type="text" class="form-control" style="font-size: 12px;" placeholder="123" name="vp_nbr_eleve_present" value="<?php echo $vp->vp_nbr_eleve_present;?>" /></div>
                    <div class="col"><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Nbr élève / classe   </label><input type="text" class="form-control" style="font-size: 12px;" name="vp_nbr_eleve_classe" placeholder="123" value="<?php echo $vp->vp_nbr_eleve_classe;?>" /></div>
                    <div class="col"><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Nbr Absence           </label><input type="text" class="form-control" style="font-size: 12px;" name="vp_nbr_abs" placeholder="123" value="<?php echo $vp->vp_nbr_abs;?>" /></div>
                </div><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Observation</label><input type="text" class="form-control" style="font-size: 12px;" name="vp_observation" value="<?php echo $vp->vp_observation;?>"/>
                <div class="form-row">
                    <div class="col"><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Propreté de la salle</label><input type="text" class="form-control" style="font-size: 12px;" name="vp_propr_salle" value="<?php echo $vp->vp_propr_salle;?>" /></div>
                    <div class="col"><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Etat de la salle</label><input type="text" class="form-control" style="font-size: 12px;" name="vp_etat_salle" value="<?php echo $vp->vp_etat_salle;?>" /></div>
                </div><label style="font-size: 10px;margin-bottom: 0px;margin-left: 4px;">Remarques</label><input type="text" class="form-control" style="font-size: 12px;" name="vp_remarque" value="<?php echo $vp->vp_remarque;?>" />
				<a class="btn btn-light" href="<?php echo base_url('vp')?>" type="button" style="font-size: 12px;">Annulée</a><button class="btn btn-light" type="submit" style="font-size: 12px;background: var(--blue);">Enregistré</button>
            </div>
        </div>
		
    </form>
	</form>
	<?php echo form_close(); ?> 
</section>
