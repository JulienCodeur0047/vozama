<?php $this->load->view('theme/header_alph'); ?>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search" style="margin-left: 18px;"></i></label><input type="search" class="form-control search-field" id="search-field" name="search" style="width: 309px;margin-left: 9px;background: rgb(255,255,255);border-radius: 1px;font-size: 13px;color: rgb(51,51,51);border-width: 1px;border-color: #cccccc;" placeholder="Recherche" /></div>
                </form><a class="btn btn-light action-button" role="button" href="#newmoniteur" data-toggle="modal" style="margin-top: 2px;background: rgb(86, 198, 198);font-size: 12px;border-radius: 0px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;"><i class="fa fa-plus" style="font-size: 14px;"></i>  Nouveau</a><a class="btn btn-light action-button" role="button" href="#" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-print" style="font-size: 14px;"></i></a>
            </div>
        </div>
    </nav>
    <div class="card" style="border-radius: 0px;margin-bottom: 22px;border-width: 0px;">
        <div class="card-body" style="margin-top: 0px;margin-bottom: 3px;">
            <h1 style="margin-bottom: 18px;height: 16px;font-size: 15px;color: var(--gray);">Moniteur</h1>
			<a class="btn btn-light action-button" role="button" href="#filtermn" data-toggle="modal" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 4px;"><i class="fa fa-filter" style="font-size: 13px;"></i>  Filtre</a>
			<a class="btn btn-light action-button" role="button" href="<?php echo base_url('suivmn');?>" style="margin-top: 2px;background: var(--teal);font-size: 12px;border-radius: 4px;"><i class="fa fa-refresh" style="font-size: 13px;"></i></a></h1> 
            <div class="table-responsive" style="width: auto;font-size: 12px;">
                <table class="table">
                    <thead>
                        <tr style="color: var(--gray);">
                            <th style="width: 59px;">Matricule</th>
                            <th style="width: 178px;">Nom & Prénoms</th>
                            <th style="width: 104px;">Poste</th>
                            <th style="width: 104px;">Téléphone</th>
                            <th style="width: 104px;">CIN</th>
                            <th style="width: 104px;">Nbr Enfant</th>
                            <th style="width: 105px;height: 44px;">Date entré</th>
                            <th style="width: 73px;"></th>
                        </tr>
                    </thead>
                    <tbody>
						<?php foreach ($data as $moniteur) {?>
                        <tr>
                            <td><?php echo $moniteur->moniteur_matricule;?></td>
                            <td><?php echo $moniteur->moniteur_name;?> <?php echo $moniteur->moniteur_firstname;?></td>
                            <td><?php echo $moniteur->moniteur_poste;?></td>
                            <td><?php echo $moniteur->moniteur_tel;?></td>
                            <td><?php echo $moniteur->moniteur_cin;?></td>
                            <td><?php echo $moniteur->moniteur_nbr_enfant;?></td>
                            <td><?php echo $moniteur->moniteur_date_entre_voz;?></td>
                            <td style="font-size: 12px;width: 30px;">
							<a class="btn btn-light btn-edit" type="button" 
							data-id="<?php echo $moniteur->id;?>"
							data-moniteur_etat="<?php echo $moniteur->moniteur_etat;?>"
							data-moniteur_name="<?php echo $moniteur->moniteur_name;?>"
							data-moniteur_firstname="<?php echo $moniteur->moniteur_firstname;?>"
							data-moniteur_date_entre_voz="<?php echo $moniteur->moniteur_date_entre_voz;?>"
							data-moniteur_matricule="<?php echo $moniteur->moniteur_matricule;?>"
							data-moniteur_address="<?php echo $moniteur->moniteur_address;?>"
							data-moniteur_date_nais="<?php echo $moniteur->moniteur_date_nais;?>"
							data-moniteur_religion="<?php echo $moniteur->moniteur_religion;?>"
							data-moniteur_profession="<?php echo $moniteur->moniteur_profession;?>"
							data-moniteur_tel="<?php echo $moniteur->moniteur_tel;?>"
							data-moniteur_cin="<?php echo $moniteur->moniteur_cin;?>"
							data-moniteur_nbr_enfant="<?php echo $moniteur->moniteur_nbr_enfant;?>"
							data-poste_id="<?php echo $moniteur->poste_id;?>"
							style="background: rgb(153,217,168);margin-right: 0px;height: 34px;margin-top: -7px;padding-top: 1px;border-radius: 0px;"><i class="fa fa-pencil-square-o" style="font-size: 12px;padding-top: 0px;"></i></a>
							<a class="btn btn-light"
							onclick="return confirm('Voulez-vous supprimer moniteur: MTRICULE: <?php echo $moniteur->moniteur_matricule;?> <?php echo $moniteur->moniteur_name;?> <?php echo $moniteur->moniteur_firstname;?> ?');"
							href="<?php echo base_url('suivdelmn/'.$moniteur->id)?>" 
							type="button" style="background: rgb(210,128,136);width: 38px;height: 34px;margin-top: -7px;padding-top: 0px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-trash-o" style="font-size: 12px;width: 12px;padding-bottom: 0px;"></i></a></td>
                        </tr>
						<?php }?>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<?php $this->load->view('suiv/modal_create_moniteur');?>
<?php $this->load->view('suiv/modal_filter_mn');?>
<script>
    $(document).ready(function(){

		$('#filtermn').on('hidden.bs.modal', function (e) {
  		$(this)
    	.find("input,textarea,select")
       	.val('')
       	.end()
		});
		$('#newmoniteur').on('hidden.bs.modal', function (e) {
  		$(this)
    	.find("input,textarea,select")
       	.val('')
       	.end()
		});
        // get Edit Product
        $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const moniteur_name = $(this).data('moniteur_name');
            const moniteur_firstname = $(this).data('moniteur_firstname');
            const moniteur_date_entre_voz = $(this).data('moniteur_date_entre_voz');
            const moniteur_matricule = $(this).data('moniteur_matricule');
            const moniteur_address = $(this).data('moniteur_address');
            const moniteur_date_nais = $(this).data('moniteur_date_nais');
            const moniteur_religion = $(this).data('moniteur_religion');
            const moniteur_profession = $(this).data('moniteur_profession');
            const poste_id = $(this).data('poste_id');
            const moniteur_etat = $(this).data('moniteur_etat');
            const moniteur_tel = $(this).data('moniteur_tel');
            const moniteur_cin = $(this).data('moniteur_cin');
            const moniteur_nbr_enfant = $(this).data('moniteur_nbr_enfant');
            // Set data to Form Edit
            $('.id').val(id);
            $('.moniteur_name').val(moniteur_name);
            $('.moniteur_firstname').val(moniteur_firstname);
            $('.moniteur_date_entre_voz').val(moniteur_date_entre_voz);
            $('.moniteur_matricule').val(moniteur_matricule);
            $('.moniteur_address').val(moniteur_address);
            $('.moniteur_date_nais').val(moniteur_date_nais);
            $('.moniteur_religion').val(moniteur_religion);
            $('.moniteur_profession').val(moniteur_profession);
            $('.poste_id').val(poste_id).trigger('change');
            $('.moniteur_etat').val(moniteur_etat).trigger('change');
            $('.moniteur_tel').val(moniteur_tel);
            $('.moniteur_cin').val(moniteur_cin);
            $('.moniteur_nbr_enfant').val(moniteur_nbr_enfant);

            // Call Modal Edit
            $('#newmoniteur').modal('show');
        });
        
    });
</script>
