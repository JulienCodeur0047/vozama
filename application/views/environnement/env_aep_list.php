<?php $this->load->view('theme/header_env');?>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search" style="margin-left: 18px;"></i></label><input type="search" class="form-control search-field" id="search-field" name="search" style="width: 309px;margin-left: 9px;background: rgb(255,255,255);border-radius: 1px;font-size: 13px;color: rgb(51,51,51);border-width: 1px;border-color: #cccccc;" placeholder="Recherche" /></div>
                </form><a class="btn btn-light action-button" role="button" href="#newaep" data-toggle="modal"style="margin-top: 2px;background: rgb(86, 198, 198);font-size: 12px;border-radius: 0px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;"><i class="fa fa-plus" style="font-size: 14px;"></i>  Nouveau</a><a class="btn btn-light action-button" role="button" href="#" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-print" style="font-size: 14px;"></i></a>
            </div>
        </div>
    </nav>
    <div class="card" style="border-radius: 0px;margin-bottom: 22px;border-width: 0px;">
        <div class="card-body" style="margin-top: 0px;margin-bottom: 3px;">
            <h1 style="margin-bottom: 10px;height: 16px;font-size: 15px;color: var(--gray);">Adduction d&#39;eau potable (AEP)</h1>
            <div class="table-responsive" style="width: auto;font-size: 12px;">
                <table class="table">
                    <thead>
                        <tr style="color: var(--gray);">
                            <th style="width: 50px;">AEP Numero</th>
                            <th style="width: 104px;">Type</th>
                            <th style="width: 105px;height: 44px;">Bailleur</th>
                            <th style="width: 122px;">Commune</th>
                            <th style="width: 122px;">Village Ple</th>
                            <th style="width: 122px;">Annee de service</th>
                            <th style="width: 80px;">Date suivi</th>
                            <th style="width: 80px;">Etat Fonct.</th>
                            <th style="width: 80px;">L/Hab/Jr</th>
                            <th style="width: 157px;">Responsable suivi</th>
                            <th style="width: 100px;"></th>
                        </tr>
                    </thead>
                    <tbody>
					<?php foreach($aep as $aep){?>
                        <tr>
                            <td><?php echo $aep->id;?></td>
                            <td><?php echo $aep->aep_type;?></td>
                            <td><?php echo $aep->aep_bailleur;?></td>
                            <td><?php echo $aep->aep_commune;?></td>
                            <td><?php echo $aep->aep_village_pal;?></td>
                            <td><?php echo $aep->aep_annee_srv;?></td>
                            <td><?php echo $aep->aep_date_last_suiv?></td>
                            <td><?php echo $aep->aep_etat_fonct?></td>
                            <td><?php echo $aep->aep_cons_my_lhjr?></td>
                            <td><?php echo $aep->aep_responsable_suiv;?></td>
                            <td style="font-size: 12px;">
							
							<a class="btn btn-light btn-edit" href="#" 
							data-id="<?php echo $aep->id;?>" 
							data-aep_type=  "<?php echo $aep->aep_type?>" 
							data-aep_bailleur=  "<?php echo $aep->aep_bailleur?>" 
							data-aep_commune=  "<?php echo $aep->aep_commune?>" 
							data-commune_id=  "<?php echo $aep->commune_id?>" 
							data-aep_annee_srv=  "<?php echo $aep->aep_annee_srv?>" 
							data-aep_village_pal=  "<?php echo $aep->aep_village_pal?>" 
							data-aep_nbr_foyer=  "<?php echo $aep->aep_nbr_foyer?>" 
							data-aep_nbr_pers=  "<?php echo $aep->aep_nbr_pers?>" 
							data-aep_nbr_born_fontaine=  "<?php echo $aep->aep_nbr_born_fontaine?>" 
							data-aep_nbr_bp=  "<?php echo $aep->aep_nbr_bp?>" 
							data-aep_nbr_lavoir_douche=  "<?php echo $aep->aep_nbr_lavoir_douche?>" 
							data-aep_nbr_latrine=  "<?php echo $aep->aep_nbr_latrine?>" 
							data-aep_cot_mens_fyr=  "<?php echo $aep->aep_cot_mens_fyr?>" 
							data-aep_date_last_suiv=  "<?php echo $aep->aep_date_last_suiv?>" 
							data-aep_responsable_suiv=  "<?php echo $aep->aep_responsable_suiv?>" 
							data-aep_etat_fonct=  "<?php echo $aep->aep_etat_fonct?>" 
							data-aep_etat_entrt=  "<?php echo $aep->aep_etat_entrt?>" 
							data-aep_cons_my_lhjr=  "<?php echo $aep->aep_cons_my_lhjr?>" 
							data-aep_etat_cot=  "<?php echo $aep->aep_etat_cot?>" 
							data-aep_note=  "<?php echo $aep->aep_note?>" 
							type="button" style="background: rgb(153,217,168);margin-right: 0px;height: auto;margin-top: 0px;padding-top: 0px;border-radius: 0px;"><i class="fa fa-pencil-square-o" style="font-size: 12px;padding-top: 0px;"></i></a>
							<a class="btn btn-light" 
							onclick="return confirm('Voulez-vous supprimer aep numero: <?php echo $aep->id;?> ?');"
							href="<?php echo base_url('envdelaep/'.$aep->id)?>"
							type="button" style="background: rgb(210,128,136);width: auto;height: auto;margin-top: 0px;padding-top: 0px;border-radius: 0px;border-top-right-radius: 0px;border-bottom-right-radius: 0px;"><i class="fa fa-trash-o" style="font-size: 12px;width: 12px;padding-bottom: 0px;"></i></a></td>
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
<?php $this->load->view('environnement/modal_create_aeps')?>
</div>
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script>
    $(document).ready(function(){

		
		$('#newaep').on('hidden.bs.modal', function (e) {
  		$(this)
    	.find("input,textarea,select")
       	.val('')
       	.end()
		});
        // get Edit Product
        $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const aep_type=  $(this).data('aep_type'); 
			const aep_bailleur=  $(this).data('aep_bailleur'); 
			const aep_commune=  $(this).data('aep_commune'); 
			const commune_id=  $(this).data('commune_id'); 
			const aep_annee_srv=  $(this).data('aep_annee_srv'); 
			const aep_village_pal=  $(this).data('aep_village_pal'); 
			const aep_nbr_foyer=  $(this).data('aep_nbr_foyer'); 
			const aep_nbr_pers=  $(this).data('aep_nbr_pers'); 
			const aep_nbr_born_fontaine=  $(this).data('aep_nbr_born_fontaine'); 
			const aep_nbr_bp=  $(this).data('aep_nbr_bp'); 
			const aep_nbr_lavoir_douche=  $(this).data('aep_nbr_lavoir_douche'); 
			const aep_nbr_latrine=  $(this).data('aep_nbr_latrine'); 
			const aep_cot_mens_fyr=  $(this).data('aep_cot_mens_fyr'); 
			const aep_date_last_suiv=  $(this).data('aep_date_last_suiv'); 
			const aep_responsable_suiv=  $(this).data('aep_responsable_suiv'); 
			const aep_etat_fonct=  $(this).data('aep_etat_fonct'); 
			const aep_etat_entrt=  $(this).data('aep_etat_entrt'); 
			const aep_cons_my_lhjr=  $(this).data('aep_cons_my_lhjr'); 
			const aep_etat_cot=  $(this).data('aep_etat_cot'); 
			const aep_note=  $(this).data('aep_note'); 
            // Set data to Form Edit
            $('.id').val(id);
            $('.aep_type').val(aep_type); 
			$('.aep_bailleur').val(aep_bailleur); 
			$('.aep_commune').val(aep_commune); 
			$('.commune_id').val(commune_id).trigger('change'); 
			$('.aep_annee_srv').val(aep_annee_srv); 
			$('.aep_village_pal').val(aep_village_pal); 
			$('.aep_nbr_foyer').val(aep_nbr_foyer); 
			$('.aep_nbr_pers').val(aep_nbr_pers); 
			$('.aep_nbr_born_fontaine').val(aep_nbr_born_fontaine); 
			$('.aep_nbr_bp').val(aep_nbr_bp); 
			$('.aep_nbr_lavoir_douche').val(aep_nbr_lavoir_douche); 
			$('.aep_nbr_latrine').val(aep_nbr_latrine); 
			$('.aep_cot_mens_fyr').val(aep_cot_mens_fyr); 
			$('.aep_date_last_suiv').val(aep_date_last_suiv); 
			$('.aep_responsable_suiv').val(aep_responsable_suiv); 
			$('.aep_etat_fonct').val(aep_etat_fonct); 
			$('.aep_etat_entrt').val(aep_etat_entrt); 
			$('.aep_cons_my_lhjr').val(aep_cons_my_lhjr); 
			$('.aep_etat_cot').val(aep_etat_cot); 
			$('.aep_note').val(aep_note); 
            // Call Modal Edit
            $('#newaep').modal('show');
        });
        
    });
</script>
