<?php $this->load->view('theme/header_com'); ?>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search" style="margin-left: 18px;"></i></label><input type="search" class="form-control search-field" id="search-field" name="search" style="width: 309px;margin-left: 9px;background: rgb(255,255,255);border-radius: 1px;font-size: 13px;color: rgb(51,51,51);border-width: 1px;border-color: #cccccc;" placeholder="Recherche" /></div>
                </form>
				<a class="btn btn-light action-button" role="button" href="#compart" data-toggle="modal" style="margin-top: 2px;background: rgb(86, 198, 198);font-size: 12px;border-radius: 0px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;"><i class="fa fa-plus" style="font-size: 14px;"></i>  Nouveau</a>
				<a class="btn btn-light action-button" role="button" href="<?php echo base_url('printcompart')?>" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-print" style="font-size: 14px;"></i></a>
            </div>
        </div>
    </nav>
    <div class="card" style="border-radius: 0px;margin-bottom: 22px;border-width: 0px;">
        <div class="card-body" style="margin-top: 0px;margin-bottom: 3px;">
            <h1 style="margin-bottom: 18px;height: 16px;font-size: 15px;color: var(--gray);">Partenariat - liste des entités</h1>
            </h1>
            <div class="table-responsive" style="width: auto;font-size: 12px;">
                <table class="table">
                    <thead>
                        <tr style="color: var(--gray);">
                            <th style="width: 59px;">Numéro</th>
                            <th style="width: 178px;">Nom d'entité</th>
                            <th style="width: 104px;">Contrat</th>
                            <th style="width: 105px;height: 44px;">Partenaire</th>
                            <th style="width: 105px;height: 44px;">Date début</th>
                            <th style="width: 105px;height: 44px;">Date fin</th>
                            <th style="width: 73px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data as $ent) { ?>
                        <tr>
                            <td><?php echo $ent->id;?></td>
                            <td><?php echo $ent->ent_nom;?></td>
                            <td><?php echo $ent->ent_contrat;?></td>
                            <td><?php echo $ent->ent_partenaire;?></td>
                            <td><?php echo $ent->ent_date_debut;?></td>
                            <td><?php echo $ent->ent_date_fin;?></td>
                            <td style="font-size: 12px;width: 30px;">
                            <a href="#" 
                            data-id="<?php echo $ent->id?>"
                            data-ent_nom="<?php echo $ent->ent_nom?>"
                            data-ent_contrat="<?php echo $ent->ent_contrat?>"
                            data-ent_partenaire="<?php echo $ent->ent_partenaire?>"
                            data-ent_date_debut="<?php echo $ent->ent_date_debut?>"
                            data-ent_date_fin="<?php echo $ent->ent_date_fin?>"
                            
                            class="btn btn-light btn-edit" type="button" style="background: rgb(153,217,168);margin-right: 0px;height: 34px;margin-top: -7px;padding-top: 1px;border-radius: 0px;font-size: 12px;"><i class="fa fa-pencil-square-o" style="font-size: 12px;padding-top: 0px;"></i></a>
							<a class="btn btn-light"
							onclick="return confirm('Voulez-vous supprimer Etité: <?php echo $ent->ent_nom?> ?');"
							href="<?php echo base_url('comdeleteent/'.$ent->id) ?>" 
							type="button" style="background: rgb(210,128,136);width: 38px;height: 34px;margin-top: -7px;padding-top: 0px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-trash-o" style="font-size: 12px;width: 12px;padding-bottom: 0px;"></i></a>
						</td>
                        </tr>
                    <?php } ?>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('com/modal_part'); ?>
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script>
    $(document).ready(function(){

		$('#compart').on('hidden.bs.modal', function (e) {
  		$(this)
    	.find("input,textarea,select")
       	.val('')
       	.end()
		});
        // get Edit Product
        $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const ent_nom = $(this).data('ent_nom');
            const ent_contrat = $(this).data('ent_contrat');
            const ent_partenaire = $(this).data('ent_partenaire');
            const ent_date_debut = $(this).data('ent_date_debut');
            const ent_date_fin = $(this).data('ent_date_fin');
            // Set data to Form Edit
            $('.id').val(id);
            $('.ent_nom').val(ent_nom);
            $('.ent_contrat').val(ent_contrat);
            $('.ent_partenaire').val(ent_partenaire);
            $('.ent_date_debut').val(ent_date_debut);
            $('.ent_date_fin').val(ent_date_fin);
            //$('.ent_parraine').prop('checked',false);
            // Call Modal Edit
            $('#compart').modal('show');
        });
        
    });
</script>
