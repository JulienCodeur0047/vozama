<section style="background-color: rgb(255,255,255);">
    <div style="height: 20px;"></div>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="margin-top: -8px;margin-bottom: 28px;height: 49px;">
        <div class="container"><a class="navbar-brand" href="#" style="margin-top: 9px;font-size: 14px;color: var(--gray);">Alphabétisation</a><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1" style="margin-top: 9px;">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#" style="border-right-width: 2px;border-right-color: rgb(102,102,102);font-size: 13px;">Détail du poste Numéro:</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul><label style="font-size: 13px;margin-bottom: 0px;"><?php echo $poste->poste_num;?></label>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"></label></div>
                </form><a class="btn btn-light action-button" role="button" href="<?php echo base_url('alph')?>" style="margin-top: 2px;background: rgb(148,203,176);font-size: 12px;border-radius: 0px;  border-top-left-radius: 4px; border-bottom-left-radius: 4px;"><i class="fa fa-arrow-left" style="font-size: 14px;"></i></a>
				<a class="btn btn-light action-button" role="button" href="<?php echo base_url('editPoste'.$poste->id)?>" style="margin-top: 2px;background: vert rgb(153,217,168);font-size: 12px;margin-left: 0px;border-radius: 0px;"><i class="fa fa-edit" style="font-size: 14px;"></i></a>
				<a class="btn btn-light action-button" role="button" 
				
				onclick="return confirm('Voulez-vous supprimer le Poste <?php echo $poste->poste_name ?> ?');"
							href="<?php echo base_url('deletePoste/'.$poste->id)?>"
				style="margin-top: 2px;background: rgb(210,128,136);font-size: 12px;margin-left: 0px;color: var(--red);border-radius: 0px;"><i class="fa fa-trash-o" style="font-size: 14px;"></i></a>
				<a class="btn btn-light action-button" role="button" href="#" style="margin-top: 2px;background: var(--gray);font-size: 12px;margin-left: 0px;border-radius: 0px;  border-top-right-radius: 4px; border-bottom-right-radius: 4px;"><i class="fa fa-print" style="font-size: 14px;"></i></a>
				
            </div>
        </div>
    </nav>
    <div class="text-center" style="margin-left: 180px;margin-right: 180px;margin-bottom: 21px;"><strong><?php echo $poste->poste_name;?></strong></div>
    <div class="text-left" style="margin-left: 100px;margin-right: 100px;">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr></tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="width: 261px;padding: 5px;"><strong style="font-size: 12px;margin-right: 10px;">Repère Topographique: </strong></td>
                        <td style="font-size: 12px;width: 703px;text-align: left;"><?php echo $poste->poste_repere_topo;?></td>
                        <td style="font-size: 12px;width: 277px;text-align: left;"><strong style="font-size: 12px;margin-right: 10px;">Secteur: </strong></td>
                        <td style="font-size: 12px;width: 780px;text-align: left;"><?php echo $poste->poste_secteur;?></td>
                    </tr>
                    <tr>
                        <td style="width: 261px;padding: 5px;"><strong style="font-size: 12px;margin-right: 10px;">Zone: </strong></td>
                        <td style="font-size: 12px;width: 703px;text-align: left;"><?php echo $poste->poste_zone;?></td>
                        <td style="font-size: 12px;width: 277px;text-align: left;"><strong style="font-size: 12px;margin-right: 10px;">Région: </strong></td>
                        <td style="font-size: 12px;width: 780px;text-align: left;"><?php echo $poste->poste_region;?></td>
                    </tr>
                    <tr>
                        <td style="width: 261px;padding: 5px;"><strong style="font-size: 12px;margin-right: 10px;">Commune: </strong></td>
                        <td style="font-size: 12px;width: 703px;text-align: left;"><?php echo $poste->poste_commune;?></td>
                        <td style="font-size: 12px;width: 277px;text-align: left;"><strong style="font-size: 12px;margin-right: 10px;">District: </strong></td>
                        <td style="font-size: 12px;width: 780px;text-align: left;"><?php echo $poste->poste_district?></td>
                    </tr>
                    <tr>
                        <td style="width: 261px;padding: 5px;"><strong style="font-size: 12px;margin-right: 10px;">Fokotany: </strong></td>
                        <td style="font-size: 12px;width: 703px;text-align: left;"><?php echo $poste->poste_fkt;?></td>
                        <td style="font-size: 12px;width: 277px;text-align: left;"><strong style="font-size: 12px;margin-right: 10px;">Quartier: </strong></td>
                        <td style="font-size: 12px;width: 780px;text-align: left;"><?php echo $poste->poste_quartier;?></td>
                    </tr>
                    <tr>
                        <td style="width: 261px;padding: 5px;"><strong style="font-size: 12px;margin-right: 10px;">Sous préfecture: </strong></td>
                        <td style="font-size: 12px;width: 703px;text-align: left;"><?php echo $poste->poste_sous_pref;?></td>
                        <td style="font-size: 12px;width: 277px;text-align: left;"><strong style="font-size: 12px;margin-right: 10px;">CISCO: </strong></td>
                        <td style="font-size: 12px;width: 780px;text-align: left;"><?php echo $poste->poste_cisco;?></td>
                    </tr>
                    <tr>
                        <td style="width: 261px;padding: 5px;"><strong style="font-size: 12px;margin-right: 10px;">Moniteur: </strong></td>
                        <td style="font-size: 12px;width: 703px;text-align: left;"><?php echo $poste->poste_moniteur_name;?></td>
                        <td style="font-size: 12px;width: 277px;text-align: left;"><strong style="font-size: 12px;margin-right: 10px;">Inspecteur: </strong></td>
                        <td style="font-size: 12px;width: 780px;text-align: left;"><?php echo $poste->poste_inspecteur_name;?></td>
                    </tr>
                    <tr>
                        <td style="width: 261px;padding: 5px;"><strong style="font-size: 12px;margin-right: 10px;">Changement moniteur: </strong></td>
                        <td style="font-size: 12px;width: 703px;text-align: left;"><?php echo $poste->poste_changement_moniteur;?></td>
                        <td style="font-size: 12px;width: 277px;text-align: left;"><strong style="font-size: 12px;margin-right: 10px;">Nom de prédécesseur: </strong></td>
                        <td style="font-size: 12px;width: 780px;text-align: left;"><?php echo $poste->poste_name_predecesseur; ?></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
	<div>

	<div role="tablist" id="accordion-1" style="margin-bottom: 30px; margin-left: 100px; margin-right: 100px;">
    <div class="card">
        <div role="tab" class="card-header" style="height: 43px;padding-top: 5px;padding-bottom: 5px;padding-left: 15px;">
            <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="true" aria-controls="accordion-1 .item-1" href="#accordion-1 .item-1" style="font-size: 13px;">Détail</a></h5>
        </div>
        <div role="tabpanel" data-parent="#accordion-1" class="collapse hide item-1">
            <div class="card-body">
			
			<table>
			<thead>
                    <tr></tr>
                </thead>
                <tbody>
				<tr>
                        <td style="width: 261px;padding: 5px;"><strong style="font-size: 12px;margin-right: 10px;">Formateur: </strong></td>
                        <td style="font-size: 12px;width: 703px;text-align: left;"><?php echo $poste->poste_formateur; ?></td>
                        <td style="font-size: 12px;width: 277px;text-align: left;"></td>
                        <td style="font-size: 12px;width: 780px;text-align: left;"></td>
                    </tr>
                    <tr>
                        <td style="width: 261px;padding: 5px;"><strong style="font-size: 12px;margin-right: 10px;">Proximité EPP: </strong></td>
                        <td style="font-size: 12px;width: 703px;text-align: left;"><?php echo $poste->poste_prox_epp; ?></td>
                        <td style="font-size: 12px;width: 277px;text-align: left;"><strong style="font-size: 12px;margin-right: 10px;">Proximité EPC: </strong></td>
                        <td style="font-size: 12px;width: 780px;text-align: left;"><?php echo $poste->poste_prox_epc; ?></td>
                    </tr>
                    <tr>
                        <td style="width: 261px;padding: 5px;"><strong style="font-size: 12px;margin-right: 10px;">Année d&#39;ouverture: </strong></td>
                        <td style="font-size: 12px;width: 703px;text-align: left;"><?php echo $poste->poste_annee_ouverture; ?></td>
                        <td style="font-size: 12px;width: 277px;text-align: left;"><strong style="font-size: 12px;margin-right: 10px;">Année de fermeture: </strong></td>
                        <td style="font-size: 12px;width: 780px;text-align: left;"><?php echo $poste->poste_annee_fermeture; ?></td>
                    </tr>
                    <tr>
                        <td style="width: 261px;padding: 5px;"><strong style="font-size: 12px;margin-right: 10px;">Ouverture: </strong></td>
                        <td style="font-size: 12px;width: 703px;text-align: left;"><?php echo $poste->poste_overture; ?></td>
                        <td style="font-size: 12px;width: 277px;text-align: left;"><strong style="font-size: 12px;margin-right: 10px;">Fermeture: </strong></td>
                        <td style="font-size: 12px;width: 780px;text-align: left;"><?php echo $poste->poste_fermeture; ?></td>
                    </tr>
                    <tr>
                        <td style="width: 261px;padding: 5px;"><strong style="font-size: 12px;margin-right: 10px;">Propriétaire de la maison: </strong></td>
                        <td style="font-size: 12px;width: 703px;text-align: left;"><?php echo $poste->poste_proprietaire_maison; ?></td>
                        <td style="font-size: 12px;width: 277px;text-align: left;"><strong style="font-size: 12px;margin-right: 10px;">Loyer: </strong></td>
                        <td style="font-size: 12px;width: 780px;text-align: left;">nan</td>
                    </tr>
                    <tr>
                        <td style="width: 261px;padding: 5px;"><strong style="font-size: 12px;margin-right: 10px;">Nombre d&#39;élèves: </strong></td>
                        <td style="font-size: 12px;width: 703px;text-align: left;"><?php echo $eleveCount ?></td>
                        <td style="font-size: 12px;width: 277px;text-align: left;"></td>
                        <td style="font-size: 12px;width: 780px;text-align: left;"></td>
                    </tr>
                    <tr>
                        <td style="width: 261px;padding: 5px;"><strong style="font-size: 12px;margin-right: 10px;">Tableau: </strong></td>
                        <td style="font-size: 12px;width: 703px;text-align: left;"><?php echo $poste->poste_tableau;?></td>
                        <td style="font-size: 12px;width: 277px;text-align: left;"><strong style="font-size: 12px;margin-right: 10px;">Abécédaire: </strong></td>
                        <td style="font-size: 12px;width: 780px;text-align: left;"><?php echo $poste->poste_abec;?></td>
                    </tr>
                    <tr>
                        <td style="width: 261px;padding: 5px;"><strong style="font-size: 12px;margin-right: 10px;">Table professeur: </strong></td>
                        <td style="font-size: 12px;width: 703px;text-align: left;"><?php echo $poste->poste_table_prof;?></td>
                        <td style="font-size: 12px;width: 277px;text-align: left;"><strong style="font-size: 12px;margin-right: 10px;">Table Enfant: </strong></td>
                        <td style="font-size: 12px;width: 780px;text-align: left;"><?php echo $poste->poste_table_enf;?></td>
                    </tr>
                    <tr>
                        <td style="width: 261px;padding: 5px;"><strong style="font-size: 12px;margin-right: 10px;">Bancs Enfant: </strong></td>
                        <td style="font-size: 12px;width: 703px;text-align: left;"><?php echo $poste->poste_banc_enf;?></td>
                        <td style="font-size: 12px;width: 277px;text-align: left;"><strong style="font-size: 12px;margin-right: 10px;">Chaise: </strong></td>
                        <td style="font-size: 12px;width: 780px;text-align: left;"><?php echo $poste->poste_chaise;?></td>
                    </tr>
                    <tr>
                        <td style="width: 261px;padding: 5px;"><strong style="font-size: 12px;margin-right: 10px;">Natte: </strong></td>
                        <td style="font-size: 12px;width: 703px;text-align: left;"><?php echo $poste->poste_natte;?></td>
                        <td style="font-size: 12px;width: 277px;text-align: left;"><strong style="font-size: 12px;margin-right: 10px;">Ardoise: </strong></td>
                        <td style="font-size: 12px;width: 780px;text-align: left;"><?php echo $poste->poste_ardoise;?></td>
                    </tr>
                    <tr>
                        <td style="width: 261px;padding: 5px;"><strong style="font-size: 12px;margin-right: 10px;">Livre: </strong></td>
                        <td style="font-size: 12px;width: 703px;text-align: left;"><?php echo $poste->poste_livre;?></td>
                        <td style="font-size: 12px;width: 277px;text-align: left;"><strong style="font-size: 12px;margin-right: 10px;">WC: </strong></td>
                        <td style="font-size: 12px;width: 780px;text-align: left;"><?php echo $poste->poste_wc;?></td>
                    </tr>
                    <tr>
                        <td style="width: 261px;padding: 5px;"><strong style="font-size: 12px;margin-right: 10px;">Savon: </strong></td>
                        <td style="font-size: 12px;width: 703px;text-align: left;"><?php echo $poste->poste_savon;?></td>
                        <td style="font-size: 12px;width: 277px;text-align: left;"><strong style="font-size: 12px;margin-right: 10px;">Eponge: </strong></td>
                        <td style="font-size: 12px;width: 780px;text-align: left;"><?php echo $poste->poste_eponge;?></td>
                    </tr>
                    <tr>
                        <td style="width: 261px;padding: 5px;"><strong style="font-size: 12px;margin-right: 10px;">Sceaux: </strong></td>
                        <td style="font-size: 12px;width: 703px;text-align: left;"><?php echo $poste->poste_sceau;?></td>
                        <td style="font-size: 12px;width: 277px;text-align: left;"><strong style="font-size: 12px;margin-right: 10px;">Zinga: </strong></td>
                        <td style="font-size: 12px;width: 780px;text-align: left;"><?php echo $poste->poste_calebasse;?></td>
                    </tr>
                    <tr>
                        <td style="width: 261px;padding: 5px;"><strong style="font-size: 12px;margin-right: 10px;">Balais: </strong></td>
                        <td style="font-size: 12px;width: 703px;text-align: left;"><?php echo $poste->poste_balais;?></td>
                        <td style="font-size: 12px;width: 277px;text-align: left;"></td>
                        <td style="font-size: 12px;width: 780px;text-align: left;"></td>
                    </tr>
                    <tr></tr>
				</tbody>
			</table>

			</div>
        </div>
    </div>
</div>

	<div>
    <div style="margin-right: 80px;margin-bottom: 20px;margin-left: 80px;">
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="margin-top: -8px;margin-bottom: 28px;height: 49px;">
            <div class="container"><button data-toggle="collapse" data-target="#navcol-2" class="navbar-toggler"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-2" style="margin-top: 9px;border-bottom-width: 3px;border-bottom-color: rgb(119,119,119);">
                    <ul class="navbar-nav">
                        <li class="nav-item"></li>
                        <li class="nav-item"></li>
                        <li class="nav-item"></li>
                        <li class="nav-item"></li>
                        <li class="nav-item"></li>
                    </ul><label style="font-size: 14px;">Liste d&#39;éleves</label><label style="font-size: 14px;margin-left: 37px;">Nombre: </label><label style="font-size: 14px;margin-left: 6px;"><?php echo $eleveCount; ?></label>
                    <form class="form-inline mr-auto" target="_self">
                        <div class="form-group"><label for="search-field"></label></div>
                    </form><a class="btn btn-light action-button" role="button" href="#newstd" data-toggle="modal" style="margin-top: 2px;background: var(--teal);font-size: 12px;margin-left: 0px;border-radius: 4px;"><i class="fa fa-plus" style="font-size: 14px;"></i>  Ajouter</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="table-responsive" style="font-size: 12px;margin-right: 80px;margin-left: 80px;width: auto;margin-bottom: 42px;">
        <table class="table">
            <thead>
                <tr>
                    <th style="width: 111px;">Matricule</th>
                    <th style="width: 222px;">Nom</th>
                    <th style="width: 198px;">Prenoms</th>
                    <th style="width: 132px;">Date de naissance</th>
                    <th style="width: 74px;">Age</th>
                    <th style="width: 79px;">Classe</th>
                    <th style="width: 148px;">Action</th>
                </tr>
            </thead>
            <tbody>
			<?php foreach ($eleve as $eleve) { ?>
                <tr>
                    <td><?php echo $eleve->eleve_matricule; ?></td>
                    <td><?php echo $eleve->eleve_name; ?></td>
                    <td><?php echo $eleve->eleve_firstname; ?></td>
                    <td><?php echo $eleve->eleve_date_birth; ?></td>
                    <td><?php echo $eleve->eleve_age; ?></td>
                    <td><?php echo $eleve->eleve_classe; ?></td>
                    <td>
					<a class="btn btn-primary" 
					onclick="return confirm('Voulez-vous supprimer <?php echo $eleve->eleve_name.' '.$eleve->eleve_firstname ?> ?');"
							href="<?php echo base_url('deleteElevePoste/'.$eleve->id.'/'.$eleve->poste_id);?>"
					 type="button" style="border-radius: 0px;background: var(--red);"><i class="fa fa-trash-o" style="font-size: 14px;"></i></a></td>
                </tr>
			<?php } ?>
                <tr></tr>
            </tbody>
        </table>
    </div>
</div>

</div>
</section>

<div>
 <?php $this->load->view('poste/modal_create_eleve');?>
</div>
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
