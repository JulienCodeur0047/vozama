    <?php $this->load->view('theme/header_dev'); ?>
 
	<form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search" style="margin-left: 18px;"></i></label>
                    <input type="search" class="form-control search-field" id="search-field" name="search" style="width: 350px;margin-left: 9px;background: rgb(255,255,255);border-radius: 1px;font-size: 13px;color: rgb(51,51,51);border-width: 1px;border-color: #cccccc;" placeholder="Recherche" />

                    </div>
                </form><a class="btn btn-light action-button" role="button" href="#apfilterprint" data-toggle="modal" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;"><i class="fa fa-print" style="font-size: 14px;"></i></a>
            </div>
        </div>
    </nav>
	<div class="card" style="border-radius: 0px;margin-bottom: 22px;border-width: 0px;">
        <div class="card-body" style="margin-top: 0px;margin-bottom: 3px;">
            <h1 style="margin-bottom: 18px;height: 16px;font-size: 15px;color: var(--gray);">Autonomisation de poste</h1>
            <h1 style="margin-bottom: 21px;height: 16px;font-size: 13px;color: var(--gray);">
            <a class="btn btn-light action-button" role="button" href="#apfilter" data-toggle="modal" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 4px;"><i class="fa fa-filter" style="font-size: 13px;"></i>  Filtre</a>
			<a class="btn btn-light action-button" role="button" href="<?php echo base_url('dev');?>" style="margin-top: 2px;background: var(--teal);font-size: 12px;border-radius: 4px;"><i class="fa fa-refresh" style="font-size: 13px;"></i></a></h1>
                </h1>
            <div class="table-responsive" style="width: auto;font-size: 12px;">
                <table class="table">
                    <thead>
                        <tr style="color: var(--gray);">
                            <th style="width: 50px;">Nom</th>
                            <th style="width: 105px;height: 44px;">Prénoms</th>
                            <th style="width: 46px;">Age</th>
                            <th style="width: 63px;">Date d&#39;abandon</th>
                            <th style="width: 84px;">Date de retour</th>
                            <th style="width: 97px;">Père</th>
                            <th style="width: 91px;height: -12px;">Mère</th>
                            <th style="width: 91px;height: -12px;">Participation parental</th>
                            <th style="width: 18px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data as $eleve) { ?>
                        <tr>
                            <td><?php echo $eleve->eleve_name; ?></td>
                            <td><?php echo $eleve->eleve_firstname; ?></td>
                            <td><?php echo $eleve->eleve_age; ?></td>
                            <td><?php echo $eleve->eleve_date_abandon; ?></td>
                            <td><?php echo $eleve->eleve_date_retour; ?></td>
                            <td><?php echo $eleve->eleve_mom; ?></td>
                            <td><?php echo $eleve->eleve_dad; ?></td>
                            <td><?php echo $eleve->eleve_participation; ?></td>
                            <td style="font-size: 12px;">
                            <a class="btn btn-light btn-edit" type="button" 
							href="#"
							data-id="<?php echo $eleve->id; ?>"
                            data-eleve_secteur="<?php echo $eleve->eleve_secteur; ?>"
                            data-eleve_matricule="<?php echo $eleve->eleve_matricule; ?>"
                            data-eleve_poste="<?php echo $eleve->eleve_poste; ?>"
                            data-poste_id="<?php echo $eleve->poste_id; ?>"
                            data-eleve_name="<?php echo $eleve->eleve_name; ?>"
                            data-eleve_firstname="<?php echo $eleve->eleve_firstname; ?>"
                            data-eleve_classe="<?php echo $eleve->eleve_classe; ?>"
                            data-eleve_date_entre="<?php echo $eleve->eleve_date_entre; ?>"
                            data-eleve_date_abandon="<?php echo $eleve->eleve_date_abandon; ?>"
                            data-eleve_lieu_naissance="<?php echo $eleve->eleve_lieu_naissance; ?>"
                            data-eleve_religion="<?php echo $eleve->eleve_religion; ?>"
                            data-eleve_copie="<?php echo $eleve->eleve_copie; ?>"
                            data-eleve_dad="<?php echo $eleve->eleve_dad; ?>"
                            data-eleve_mom="<?php echo $eleve->eleve_mom; ?>"
                            data-eleve_abr="<?php echo $eleve->eleve_abr; ?>"
                            data-eleve_num_copie="<?php echo $eleve->eleve_num_copie; ?>"
                            data-eleve_prof_parents="<?php echo $eleve->eleve_prof_parents; ?>"
                            data-eleve_classe_passe="<?php echo $eleve->eleve_classe_passe; ?>"
                            data-eleve_nbr_fs="<?php echo $eleve->eleve_nbr_fs; ?>"
                            data-eleve_adresse="<?php echo $eleve->eleve_adresse; ?>"
                            data-eleve_sexe="<?php echo $eleve->eleve_sexe; ?>"
                            data-eleve_situation="<?php echo $eleve->eleve_situation; ?>"
							style="margin-right: 0px;height: 34px;padding-top: 3px;margin-top: -7px;border-radius: 0px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;background: rgb(234,234,234);"><i class="fa fa-eye" style="font-size: 12px;"></i></a>
                            
                            <a class="btn btn-light" 
							onclick="return confirm('Voulez-vous supprimer élève <?php echo $eleve->eleve_name.' '.$eleve->id; ?> ?');"
							href="<?php echo base_url('devdelap/'.$eleve->id)?>" 
							type="button" style="background: rgb(210,128,136);width: 38px;height: 34px;margin-top: -7px;padding-top: 0px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-trash-o" style="font-size: 12px;width: 12px;padding-bottom: 0px;"></i></a></td>
                        </tr>
					<?php } ?>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('dev/modal_filter_ap'); ?>
<?php $this->load->view('dev/modal_filter_print_ap'); ?>
<?php $this->load->view('dev/modal_view_elev'); ?>
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script>
    $(document).ready(function(){

		$('#detaileleve').on('hidden.bs.modal', function (e) {
  		$(this)
    	.find("input,textarea,select")
       	.val('')
       	.end()
		});
	
        // get Edit Product
        $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const eleve_secteur = $(this).data('eleve_secteur');
            const eleve_matricule = $(this).data('eleve_matricule');
            const eleve_poste = $(this).data('eleve_poste');
            const eleve_name = $(this).data('eleve_name');
            const eleve_firstname = $(this).data('eleve_firstname');
            const eleve_classe = $(this).data('eleve_classe');
            const eleve_date_entre = $(this).data('eleve_date_entre');
            const eleve_date_abandon = $(this).data('eleve_date_abandon');
            const eleve_lieu_naissance = $(this).data('eleve_lieu_naissance');
            const eleve_religion = $(this).data('eleve_religion');
            const eleve_copie = $(this).data('eleve_copie');
            const eleve_dad = $(this).data('eleve_dad');
            const eleve_mom = $(this).data('eleve_mom');
            const eleve_abr = $(this).data('eleve_abr');
            const eleve_num_copie = $(this).data('eleve_num_copie');
            const eleve_prof_parents = $(this).data('eleve_prof_parents');
            const eleve_classe_passe = $(this).data('eleve_classe_passe');
            const eleve_nbr_fs = $(this).data('eleve_nbr_fs');
            const eleve_adresse = $(this).data('eleve_adresse');
            const eleve_sexe = $(this).data('eleve_sexe');
            const poste_id = $(this).data('poste_id');
            const eleve_situation = $(this).data('eleve_situation');
            // Set data to Form Edit
            $('.id').val(id);
            $('.eleve_secteur').val(eleve_secteur);
            $('.eleve_matricule').val(eleve_matricule);
            $('.eleve_poste').val(eleve_poste);
            $('.eleve_name').val(eleve_name);
            $('.eleve_firstname').val(eleve_firstname);
            $('.eleve_classe').val(eleve_classe);
            $('.eleve_date_entre').val(eleve_date_entre);
            $('.eleve_date_abandon').val(eleve_date_abandon);
            $('.eleve_lieu_naissance').val(eleve_lieu_naissance);
            $('.eleve_religion').val(eleve_religion);
            $('.eleve_copie').val(eleve_copie);
            $('.eleve_dad').val(eleve_dad);
            $('.eleve_mom').val(eleve_mom);
            $('.eleve_abr').val(eleve_abr);
            $('.eleve_num_copie').val(eleve_num_copie);
            $('.eleve_prof_parents').val(eleve_prof_parents);
            $('.eleve_classe_passe').val(eleve_date_entre);
            $('.eleve_nbr_fs').val(eleve_nbr_fs);
            $('.eleve_adresse').val(eleve_adresse);
            $('.eleve_sexe').val(eleve_sexe).trigger('change');
            $('.poste_id').val(poste_id).trigger('change');
            $('.eleve_situation').val(eleve_situation).trigger('change');
            // Call Modal Edit
            $('#detaileleve').modal('show');
        });
		
        
    });

</script>
