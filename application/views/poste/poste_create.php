<section style="background: var(--white);margin-bottom: 0px;height: auto;">
    <div style="height: 20px;"></div>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="margin-top: -8px;margin-bottom: 28px;height: 49px;">
        <div class="container"><a class="navbar-brand" href="#" style="margin-top: 9px;font-size: 14px;color: var(--gray);">Alphabétisation</a><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1" style="margin-top: 9px;">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#" style="border-right-width: 2px;border-right-color: rgb(102,102,102);font-size: 13px;">Nouveau poste</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"></label></div>
                </form><a class="btn btn-light action-button" role="button" href="<?php echo base_url('alph')?>" style="margin-top: 2px;background: rgb(86, 198, 198);font-size: 12px;">Retour</a>
            </div>
        </div>
    </nav>
<?php echo form_open('saveposte'); ?> 
<form method="post">
    <div style="border-bottom-width: 1px;border-bottom-color: rgb(113,113,113);"></div>
    <div style="text-align: center;margin-top: 14px;"><input type="text" style="border-radius: 3px;border-width: 0px;border-bottom-width: 1px;border-bottom-color: rgb(164,164,164);font-size: 12px;margin-right: 10px;margin-left: 10px;" placeholder="Nom de poste" name="poste_name" /><input type="text" style="border-radius: 3px;border-width: 0px;border-bottom-width: 1px;border-bottom-color: rgb(164,164,164);font-size: 12px;margin-right: 10px;margin-left: 10px;" placeholder="Numéro de poste" name="poste_num" /><input type="text" style="border-radius: 3px;border-width: 0px;border-bottom-width: 1px;border-bottom-color: rgb(164,164,164);font-size: 12px;margin-right: 10px;margin-left: 10px;" placeholder="Repère topographique" name="poste_repere_topo" /><select style="width: 149px;height: 21px;margin-right: 10px;margin-left: 10px;padding-top: 1px;padding-right: 2px;padding-bottom: 1px;padding-left: 2px;font-size: 12px;border-radius: 3px;border-width: 0px;border-bottom-width: 1px;border-bottom-color: rgb(164,164,164);color: rgb(125,125,125);" name="poste_secteur">
            <optgroup label="Secteur">
                <option value="" selected>Selec. Secteur</option>
				<?php foreach($secteur as $sect){ ?>
                <option value="<?php echo $sect->secteur_name; ?>"><?php echo $sect->secteur_name; ?></option>
                <?php } ?>
            </optgroup>
        </select></div>
    <div style="text-align: center;margin-top: 14px;"><select style="width: 149px;height: 21px;margin-right: 10px;margin-left: 10px;padding-top: 1px;padding-right: 2px;padding-bottom: 1px;padding-left: 2px;font-size: 12px;border-radius: 3px;border-width: 0px;border-bottom-width: 1px;border-bottom-color: rgb(164,164,164);color: rgb(125,125,125);" name="poste_zone">
            <optgroup label="Zone">
                <option value="" selected>Selec. Zone</option>
				<?php foreach($zone as $zone){ ?>
                <option value="<?php echo $zone->zone_name; ?>"><?php echo $zone->zone_name; ?></option>
				<?php } ?>
            </optgroup>
        </select>
        <select style="width: 149px;height: 21px;margin-right: 10px;margin-left: 10px;padding-top: 1px;padding-right: 2px;padding-bottom: 1px;padding-left: 2px;font-size: 12px;border-radius: 3px;border-width: 0px;border-bottom-width: 1px;border-bottom-color: rgb(164,164,164);color: rgb(125,125,125);" name="poste_region">
            <optgroup label="Région">
                <option value="" selected>Selec. Région</option>
				<?php foreach($region as $reg){ ?>
                <option value="<?php echo $reg->region_name; ?>"><?php echo $reg->region_name; ?></option>
				<?php } ?>
            </optgroup>
        </select>
        <select style="width: 149px;height: 21px;margin-right: 10px;margin-left: 10px;padding-top: 1px;padding-right: 2px;padding-bottom: 1px;padding-left: 2px;font-size: 12px;border-radius: 3px;border-width: 0px;border-bottom-width: 1px;border-bottom-color: rgb(164,164,164);color: rgb(125,125,125);" name="poste_cisco">
            <optgroup label="CISCO">
                <option value="" selected>Selec. CISCO</option>
                <?php foreach($cisco as $cisco){ ?>
                <option value="<?php echo $cisco->cisco_name; ?>"><?php echo $cisco->cisco_name; ?></option>
				<?php } ?>
            </optgroup>
        </select>
        <select style="width: 149px;height: 21px;margin-right: 10px;margin-left: 10px;padding-top: 1px;padding-right: 2px;padding-bottom: 1px;padding-left: 2px;font-size: 12px;border-radius: 3px;border-width: 0px;border-bottom-width: 1px;border-bottom-color: rgb(164,164,164);color: rgb(125,125,125);" name="poste_commune">
            <optgroup label="Commune">
                <option value="" selected>Selec. Commune</option>
                <?php foreach($commune as $comm){ ?>
                <option value="<?php echo $comm->commune_name; ?>"><?php echo $comm->commune_name; ?></option>
				<?php } ?>
            </optgroup>
        </select>
    </div>
    <div style="text-align: center;margin-top: 14px;"><select style="width: 149px;height: 21px;margin-right: 10px;margin-left: 10px;padding-top: 1px;padding-right: 2px;padding-bottom: 1px;padding-left: 2px;font-size: 12px;border-radius: 3px;border-width: 0px;border-bottom-width: 1px;border-bottom-color: rgb(164,164,164);color: rgb(125,125,125);" name="poste_niveau">
            <optgroup label="Niveau">
                <option value="" selected>Selec. Niveau</option>
                <?php foreach($niveau as $niveau){ ?>
                <option value="<?php echo $niveau->niveau_name; ?>"><?php echo $niveau->niveau_name; ?></option>
				<?php } ?>
            </optgroup>
        </select>
        <select style="width: 149px;height: 21px;margin-right: 10px;margin-left: 10px;padding-top: 1px;padding-right: 2px;padding-bottom: 1px;padding-left: 2px;font-size: 12px;border-radius: 3px;border-width: 0px;border-bottom-width: 1px;border-bottom-color: rgb(164,164,164);color: rgb(125,125,125);" name="poste_fkt">
            <optgroup label="Fokotany">
                <option value="" selected>Selec. Fokotany</option>
                <?php foreach($fokotany as $fkt){ ?>
                <option value="<?php echo $fkt->fkt_name; ?>"><?php echo $fkt->fkt_name; ?></option>
				<?php } ?>
            </optgroup>
        </select>
        <input type="text" style="border-radius: 3px;border-width: 0px;border-bottom-width: 1px;border-bottom-color: rgb(164,164,164);font-size: 12px;margin-right: 10px;margin-left: 10px;" placeholder="ZAP" name="poste_quartier" /><select style="width: 149px;height: 21px;margin-right: 10px;margin-left: 10px;padding-top: 1px;padding-right: 2px;padding-bottom: 1px;padding-left: 2px;font-size: 12px;border-radius: 3px;border-width: 0px;border-bottom-width: 1px;border-bottom-color: rgb(164,164,164);color: rgb(125,125,125);" name="poste_district">
            <optgroup label="District">
                <option value="" selected>Selec. Disctrict</option>
				<?php foreach($district as $district){ ?>
                <option value="<?php echo $district->district_name; ?>"><?php echo $district->district_name; ?></option>
				<?php } ?>
            </optgroup>
        </select>
    </div>
    <div style="height: 20px;">
        <div style="margin-top: 33px;">
            <h1 style="font-size: 14px;color: rgb(113,113,113);margin-left: 43px;padding-bottom: 10px;margin-bottom: 10px;padding-top: 0px;">Détail</h1>
        </div>
    </div>
    <div role="tablist" id="accordion-1" style="font-size: 12px;padding-top: 10px;margin: 10px;">
        <div class="card">
            <div role="tab" class="card-header" style="height: 33px;padding-top: 0px;">
                <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="true" aria-controls="accordion-1 .item-1" href="#accordion-1 .item-1" style="font-size: 13px;">Détail du poste</a></h5>
            </div>
            <div role="tabpanel" data-parent="#accordion-1" class="collapse show item-1">
                <div class="card-body">
                    <div style="text-align: center;margin-top: 14px;">
                    <select style="width: 149px;height: 21px;margin-right: 5px;margin-left: 10px;padding-top: 1px;padding-right: 2px;padding-bottom: 1px;padding-left: 2px;font-size: 12px;border-radius: 3px;border-width: 0px;border-bottom-width: 1px;border-bottom-color: rgb(164,164,164);color: rgb(125,125,125);" id="poste_eglise" name="poste_eglise">
                            <optgroup label="Eglise">
                                <option value="" selected>Selec. Eglise</option>
								<?php foreach($eglise as $eglise){ ?>
                				<option value="<?php echo $eglise->eglise_name; ?>"><?php echo $eglise->eglise_name; ?></option>
								<?php } ?>
                            </optgroup>
                        </select> 
                        <select style="width: 149px;height: 21px;margin-right: 10px;margin-left: 10px;padding-top: 1px;padding-right: 2px;padding-bottom: 1px;padding-left: 2px;font-size: 12px;border-radius: 3px;border-width: 0px;border-bottom-width: 1px;border-bottom-color: rgb(164,164,164);color: rgb(125,125,125);" name="poste_pere">
                            <optgroup label="Père">
                                <option value="" selected>Selec. Père</option>
                                <?php foreach($pere as $pere){ ?>
                				<option value="<?php echo $pere->pere_name; ?>"><?php echo $pere->pere_name; ?></option>
								<?php } ?>
                            </optgroup>
                        </select>
                    </div>
                    <div style="text-align: center;margin-top: 14px;"><select style="width: 149px;height: 21px;margin-right: 10px;margin-left: 10px;padding-top: 1px;padding-right: 2px;padding-bottom: 1px;padding-left: 2px;font-size: 12px;border-radius: 3px;border-width: 0px;border-bottom-width: 1px;border-bottom-color: rgb(164,164,164);color: rgb(125,125,125);" name="poste_prox_epp">
                            <optgroup label="Proximité EPP">
                                <option value="" selected>Proximité EPP</option>
                                <option value="100m">100m</option>
                                <option value="200m">200m</option>
                                <option value="300m">300m</option>
                                <option value="500m">500m</option>
                                <option value="800m">800m</option>
                                <option value="1km">1km</option>
                                <option value="2km">2km</option>
                                <option value="3km">3km</option>
                                <option value="4km">5km</option>
                                <option value="6km">6km</option>
                                <option value="7km">7km</option>
                                <option value="8km">8km</option>
                                <option value="9km">9km</option>
                                <option value="10km">10km</option>
                            </optgroup>
                        </select><select style="width: 149px;height: 21px;margin-right: 10px;margin-left: 10px;padding-top: 1px;padding-right: 2px;padding-bottom: 1px;padding-left: 2px;font-size: 12px;border-radius: 3px;border-width: 0px;border-bottom-width: 1px;border-bottom-color: rgb(164,164,164);color: rgb(125,125,125);" name="poste_prox_epc">
                            <optgroup label="Proximité EPC">
                                <option value="" selected>Proximité EPC</option>
                                <option value="100m">100m</option>
                                <option value="200m">200m</option>
                                <option value="300m">300m</option>
                                <option value="500m">500m</option>
                                <option value="800m">800m</option>
                                <option value="1km">1km</option>
                                <option value="2km">2km</option>
                                <option value="3km">3km</option>
                                <option value="4km">5km</option>
                                <option value="6km">6km</option>
                                <option value="7km">7km</option>
                                <option value="8km">8km</option>
                                <option value="9km">9km</option>
                                <option value="10km">10km</option>
                            </optgroup>
                        </select><input type="text" style="border-radius: 3px;border-width: 0px;border-bottom-width: 1px;border-bottom-color: rgb(164,164,164);font-size: 12px;margin-right: 10px;margin-left: 10px;" placeholder="Propriétaire de la maison" name="poste_proprietaire_maison" /></div>
                    <div style="text-align: center;margin-top: 14px;"><input type="text" style="border-radius: 3px;border-width: 0px;border-bottom-width: 1px;border-bottom-color: rgb(164,164,164);font-size: 12px;margin-right: 10px;margin-left: 10px;" placeholder="Année d&#39;ouverture" name="poste_annee_ouverture" inputmode="numeric" /><input type="text" style="border-radius: 3px;border-width: 0px;border-bottom-width: 1px;border-bottom-color: rgb(164,164,164);font-size: 12px;margin-right: 10px;margin-left: 10px;" placeholder="Année de fermeture" name="poste_annee_fermeture" inputmode="numeric" /><input type="text" style="border-radius: 3px;border-width: 0px;border-bottom-width: 1px;border-bottom-color: rgb(164,164,164);font-size: 12px;margin-right: 10px;margin-left: 10px;" placeholder="Fermeture" name="poste_fermeture" /></div>
                </div>
            </div>
        </div>
        <div class="card">
            <div role="tab" class="card-header" style="height: 33px;padding-top: 0px;">
                <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-2" href="#accordion-1 .item-2" style="font-size: 13px;">Agent</a></h5>
            </div>
            <div role="tabpanel" data-parent="#accordion-1" class="collapse item-2">
                <div class="card-body">
				<div style="text-align: center;margin-top: 14px;">
				<select style="width: 149px;height: 21px;margin-right: 10px;margin-left: 10px;padding-top: 1px;padding-right: 2px;padding-bottom: 1px;padding-left: 2px;font-size: 12px;border-radius: 3px;border-width: 0px;border-bottom-width: 1px;border-bottom-color: rgb(164,164,164);color: rgb(125,125,125);" name="poste_moniteur_name">
        <optgroup label="Moniteur">
            <option value selected>Selec. Moniteur</option>
			<?php foreach($moniteur as $moniteur){ ?>
            <option value="<?php echo $moniteur->moniteur_name." ".$moniteur->moniteur_firstname; ?>"><?php echo $moniteur->moniteur_matricule."| ".$moniteur->moniteur_name." ".$moniteur->moniteur_firstname; ?></option>
			
        </optgroup>
    </select>
    <input type="text" style="border-radius: 3px;border-width: 0px;border-bottom-width: 1px;border-bottom-color: rgb(164,164,164);font-size: 12px;margin-right: 10px;margin-left: 10px;" placeholder="Changement Moniteur" name="poste_changement_moniteur" /><select style="width: 149px;height: 21px;margin-right: 10px;margin-left: 10px;padding-top: 1px;padding-right: 2px;padding-bottom: 1px;padding-left: 2px;font-size: 12px;border-radius: 3px;border-width: 0px;border-bottom-width: 1px;border-bottom-color: rgb(164,164,164);color: rgb(125,125,125);" name="poste_name_predecesseur">
        <optgroup label="Predecesseur">
            <option value selected>Nom du Predecesseur</option>
			
				<option value="<?php echo $moniteur->moniteur_name." ".$moniteur->moniteur_firstname; ?>"><?php echo $moniteur->moniteur_matricule."| ".$moniteur->moniteur_name." ".$moniteur->moniteur_firstname; ?></option>
			<?php } ?>
        </optgroup>
    </select><select style="width: 149px;height: 21px;margin-right: 10px;margin-left: 10px;padding-top: 1px;padding-right: 2px;padding-bottom: 1px;padding-left: 2px;font-size: 12px;border-radius: 3px;border-width: 0px;border-bottom-width: 1px;border-bottom-color: rgb(164,164,164);color: rgb(125,125,125);" name="poste_inspecteur_name">
        <optgroup label="Annimateur">
            <option value selected>Selec. Annimateur</option>
			<?php foreach($inspecteur as $insp){ ?>
            <option value="<?php echo $insp->insp_name." ".$insp->insp_firstname; ?>"><?php echo $insp->insp_matricule."| ".$insp->insp_name." ".$insp->insp_firstname ?></option>
			<?php } ?>
        </optgroup>
    </select>
    <input type="text" style="border-radius: 3px;border-width: 0px;border-bottom-width: 1px;border-bottom-color: rgb(164,164,164);font-size: 12px;margin-right: 10px;margin-left: 10px;" placeholder="Formateur" name="poste_formateur" /></div>
                </div>
            </div>
        </div>
        <div class="card">
            <div role="tab" class="card-header" style="height: 33px;padding-top: 0px;">
                <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-3" href="#accordion-1 .item-3" style="font-size: 13px;">Matériels<br /></a></h5>
            </div>
            <div role="tabpanel" data-parent="#accordion-1" class="collapse item-3" style="text-align: center;height: auto;">
                <div class="card-body">
                    <div></div>
                    <div style="text-align: right;margin-top: 14px;padding-top: 0px;margin-right: 0px;width: auto;">
                        <div class="table-responsive" style="width: auto;margin: 0px;height: auto;margin-left: 14px;">
                            <table class="table">
                                <thead>
                                    <tr></tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="margin-right: 0px;padding-right: 62px;"><label style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px;">Tableau</label><input type="checkbox" style="margin-left: 5px;height: 12px;margin-top: -1px;padding-top: 0px;padding-right: 0px;margin-right: 15px;" value="oui" name="poste_tableau" /></td>
                                        <td style="margin-right: 0px;padding-right: 62px;"><label style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px;">Abécédaire<br /></label><input type="checkbox" style="margin-left: 5px;height: 12px;margin-top: -1px;padding-top: 0px;padding-right: 0px;margin-right: 15px;" value="oui" name="poste_abec" /></td>
                                        <td style="margin-right: 0px;padding-right: 62px;"><label style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px;">Table Professeur</label><input type="checkbox" style="margin-left: 5px;height: 12px;margin-top: -1px;padding-top: 0px;padding-right: 0px;margin-right: 15px;" value="oui" name="poste_table_prof" /></td>
                                        <td style="margin-right: 0px;padding-right: 62px;"><label style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px;">Chaises</label><input type="checkbox" style="margin-left: 5px;height: 12px;margin-top: -1px;padding-top: 0px;padding-right: 0px;margin-right: 15px;" value="oui" name="poste_chaise" /></td>
                                        <td style="margin-right: 0px;padding-right: 62px;"><label style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px;">Table Enfants</label><input type="checkbox" style="margin-left: 5px;height: 12px;margin-top: -1px;padding-top: 0px;padding-right: 0px;margin-right: 15px;" name="poste_table_enf" value="oui" /></td>
                                    </tr>
                                    <tr>
                                        <td style="margin-right: 0px;padding-right: 62px;"><label style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px;">Bancs Enfants</label><input type="checkbox" style="margin-left: 5px;height: 12px;margin-top: -1px;padding-top: 0px;padding-right: 0px;margin-right: 15px;" name="poste_banc_enf" value="oui" /></td>
                                        <td style="margin-right: 0px;padding-right: 62px;"><label style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px;">Natte<br /></label><input type="checkbox" style="margin-left: 5px;height: 12px;margin-top: -1px;padding-top: 0px;padding-right: 0px;margin-right: 15px;" name="poste_natte" value="oui" /></td>
                                        <td style="margin-right: 0px;padding-right: 62px;"><label style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px;">Ardoises</label><input type="checkbox" style="margin-left: 5px;height: 12px;margin-top: -1px;padding-top: 0px;padding-right: 0px;margin-right: 15px;" value="oui" name="poste_ardoise" /></td>
                                        <td style="margin-right: 0px;padding-right: 62px;"><label style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px;">Livres</label><input type="checkbox" style="margin-left: 5px;height: 12px;margin-top: -1px;padding-top: 0px;padding-right: 0px;margin-right: 15px;" value="oui" name="poste_livre" /></td>
                                        <td style="margin-right: 0px;padding-right: 62px;"><label style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px;">WC</label><input type="checkbox" style="margin-left: 5px;height: 12px;margin-top: -1px;padding-top: 0px;padding-right: 0px;margin-right: 15px;" name="poste_wc" value="oui" /></td>
                                    </tr>
                                    <tr>
                                        <td style="margin-right: 0px;padding-right: 62px;"><label style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px;">Balais</label><input type="checkbox" style="margin-left: 5px;height: 12px;margin-top: -1px;padding-top: 0px;padding-right: 0px;margin-right: 15px;" name="poste_balais" value="oui" /></td>
                                        <td style="margin-right: 0px;padding-right: 62px;"><label style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px;">Savon<br /></label><input type="checkbox" style="margin-left: 5px;height: 12px;margin-top: -1px;padding-top: 0px;padding-right: 0px;margin-right: 15px;" name="poste_savon" value="oui" /></td>
                                        <td style="margin-right: 0px;padding-right: 62px;"><label style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px;">Eponge</label><input type="checkbox" style="margin-left: 5px;height: 12px;margin-top: -1px;padding-top: 0px;padding-right: 0px;margin-right: 15px;" name="poste_eponge" value="oui"/></td>
                                        <td style="margin-right: 0px;padding-right: 62px;"><label style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px;">Sceaux</label><input type="checkbox" style="margin-left: 5px;height: 12px;margin-top: -1px;padding-top: 0px;padding-right: 0px;margin-right: 15px;" name="poste_sceau" value="oui" /></td>
                                        <td style="margin-right: 0px;padding-right: 62px;"><label style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px;">Zinga</label><input type="checkbox" style="margin-left: 5px;height: 12px;margin-top: -1px;padding-top: 0px;padding-right: 0px;margin-right: 15px;" name="poste_calebasse" value="oui" /></td>
                                    </tr>
									<tr>
                                        <td style="margin-right: 0px;padding-right: 62px;"><label style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px;">Règle</label><input type="checkbox" style="margin-left: 5px;height: 12px;margin-top: -1px;padding-top: 0px;padding-right: 0px;margin-right: 15px;" name="poste_regle" value="oui" /></td>
                                        <td style="margin-right: 0px;padding-right: 62px;"><label style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px;">Cahier<br /></label><input type="checkbox" style="margin-left: 5px;height: 12px;margin-top: -1px;padding-top: 0px;padding-right: 0px;margin-right: 15px;" name="poste_cahier" value="oui" /></td>
                                        <td style="margin-right: 0px;padding-right: 62px;"><label style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px;">Téléphone</label><input type="checkbox" style="margin-left: 5px;height: 12px;margin-top: -1px;padding-top: 0px;padding-right: 0px;margin-right: 15px;" name="poste_telephone" value="oui"/></td>
                                        <td style="margin-right: 0px;padding-right: 62px;"><label style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px;">Radio</label><input type="checkbox" style="margin-left: 5px;height: 12px;margin-top: -1px;padding-top: 0px;padding-right: 0px;margin-right: 15px;" name="poste_radio" value="oui" /></td>
                                        <td style="margin-right: 0px;padding-right: 62px;"><label style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px;">Drapeau</label><input type="checkbox" style="margin-left: 5px;height: 12px;margin-top: -1px;padding-top: 0px;padding-right: 0px;margin-right: 15px;" name="poste_drapeau" value="oui" /></td>
                                    </tr>
									<tr>
                                        <td style="margin-right: 0px;padding-right: 62px;"><label style="margin-bottom: 0px;margin-top: 0px;padding-bottom: 0px;padding-top: 0px;">Logo</label><input type="checkbox" style="margin-left: 5px;height: 12px;margin-top: -1px;padding-top: 0px;padding-right: 0px;margin-right: 15px;" name="poste_logo" value="oui" /></td>
                                        <td style="margin-right: 0px;padding-right: 62px;"></td>
                                        <td style="margin-right: 0px;padding-right: 62px;"></td>
                                        <td style="margin-right: 0px;padding-right: 62px;"></td>
                                        <td style="margin-right: 0px;padding-right: 62px;"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div style="text-align: right;margin-right: 0px;padding-right: 38px;margin-top: 20px;margin-bottom: 20px;background: var(--white);height: 47px;"><button class="btn btn-primary" type="submit" style="font-size: 12px;border-radius: 20px;background: var(--green);">Enregistrer</button></div>
</form>
<?php echo form_close()?>
</section>
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<?php $this->load->view('poste/modal_add_detail');?>
