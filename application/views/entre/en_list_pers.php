<?php $this->load->view('theme/header_entre')?>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search" style="margin-left: 18px;"></i></label><input type="search" class="form-control search-field" id="search-field" name="search" style="width: 309px;margin-left: 9px;background: rgb(255,255,255);border-radius: 1px;font-size: 13px;color: rgb(51,51,51);border-width: 1px;border-color: #cccccc;" placeholder="Recherche" /></div>
                </form><a class="btn btn-light action-button" role="button" href="#newpers" data-toggle="modal" style="margin-top: 2px;background: rgb(86, 198, 198);font-size: 12px;border-radius: 0px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;"><i class="fa fa-plus" style="font-size: 14px;"></i>  Nouveau</a><a class="btn btn-light action-button" role="button" href="#filterprintpers" data-toggle="modal" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-print" style="font-size: 14px;"></i></a>
            </div>
        </div>
    </nav>
    <div class="card" style="border-radius: 0px;margin-bottom: 22px;border-width: 0px;">
        <div class="card-body" style="margin-top: 0px;margin-bottom: 3px;">
            <h1 style="margin-bottom: 18px;height: 16px;font-size: 15px;color: var(--gray);">Personnel</h1>
            <a class="btn btn-light action-button" role="button" href="#filterpers" data-toggle="modal" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 4px;"><i class="fa fa-filter" style="font-size: 13px;"></i>  Filtre</a>
			<a class="btn btn-light action-button" role="button" href="<?php echo base_url('enpers');?>" style="margin-top: 2px;background: var(--teal);font-size: 12px;border-radius: 4px;"><i class="fa fa-refresh" style="font-size: 13px;"></i></a></h1>
            <div class="table-responsive" style="width: auto;font-size: 12px;">
                <table class="table">
                    <thead>
                        <tr style="color: var(--gray);">
                            <th style="width: 50px;">Matricule</th>
                            <th style="width: 150px;">Nom &amp; Prénoms</th>
                            <th style="width: 50px;">Departement</th>
                            <th style="width: 20px;">Sexe</th>
                            <th style="width: 30px;">Age</th>
                            <th style="width: 50px;">Catégorie</th>
                            <th style="width: 50px;">Site</th>
                            <th style="width: 50px;">Droit de Congé</th>
                            <th style="width: 50px;">Congé reste</th>
                            <th style="width: 40px;">Type de Contrat</th>
                            <th style="width: 30px;">Cotisation.S</th>
                            <th style="width: 3px;"></th>
                        </tr>
                    </thead>
                    <tbody>
					<?php foreach ($data as $pers) { ?>
                        <tr>
                            <td><?php echo $pers->pers_matricule;?></td>
                            <td><?php echo $pers->pers_name;?> <?php echo $pers->pers_firstname;?></td>
                            <td><?php echo $pers->pers_dep;?></td>
                            <td><?php echo $pers->pers_sexe;?></td>
                            <td><?php echo $pers->pers_age;?> ans</td>
                            <td><?php echo $pers->pers_type;?></td>
                            <td><?php echo $pers->pers_site;?></td>
                            <td><?php echo $pers->pers_dr_conge;?> jours/mois</td>
                            <td><?php echo $pers->pers_nbr_conge;?> jours</td>
                            <td><?php echo $pers->pers_contrat;?></td>
                            <td><?php echo $pers->pers_cot_social;?> Ar</td>
                            <td style="font-size: 12px;width: 30px;">
							
							<a class="btn btn-light btn-edit" href="#" type="button"
							data-id="<?php echo $pers->id?>"
							data-pers_name="<?php echo $pers->pers_name?>"
							data-pers_firstname="<?php echo $pers->pers_firstname?>"
							data-pers_matricule="<?php echo $pers->pers_matricule?>"
							data-pers_site="<?php echo $pers->pers_site?>"
							data-pers_date_birth="<?php echo $pers->pers_date_birth?>"
							data-pers_sexe="<?php echo $pers->pers_sexe?>"
							data-pers_age="<?php echo $pers->pers_age?>"
							data-pers_type="<?php echo $pers->pers_type?>"
							data-pers_contrat="<?php echo $pers->pers_contrat?>"
							data-pers_cot_social="<?php echo $pers->pers_cot_social?>"
							data-pers_cin="<?php echo $pers->pers_cin?>"
							data-pers_address="<?php echo $pers->pers_address?>"
							data-pers_sm="<?php echo $pers->pers_sm?>"
							data-pers_phone="<?php echo $pers->pers_phone?>"
							data-pers_mail="<?php echo $pers->pers_mail?>"
							data-pers_date_arrived="<?php echo $pers->pers_date_arrived?>"
							data-pers_date_gone="<?php echo $pers->pers_date_gone?>"
							data-pers_dep="<?php echo $pers->pers_dep?>"
							data-pers_dr_conge="<?php echo $pers->pers_dr_conge?>"
							data-pers_nbr_conge="<?php echo $pers->pers_nbr_conge?>"
							data-dep_id="<?php echo $pers->dep_id?>"
							  style="background: rgb(153,217,168);margin-right: 0px;height: 34px;margin-top: -7px;padding-top: 1px;border-radius: 0px;"><i class="fa fa-pencil-square-o" style="font-size: 12px;padding-top: 0px;"></i></a>
							
							<a class="btn btn-light"
							onclick="return confirm('Voulez-vous supprimer: <?php echo $pers->pers_name;?> <?php echo $pers->pers_firstname?>?');"
							href="<?php echo base_url('endeletepers/'.$pers->id)?>" 
							
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
<?php $this->load->view('entre/modal_create_pers');?>
<?php $this->load->view('entre/modal_filter_pers');?>
<?php $this->load->view('entre/modal_print_filter_pers');?>
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script>
    $(document).ready(function(){

		$('#newpers').on('hidden.bs.modal', function (e) {
  		$(this)
    	.find("input,textarea,select")
       	.val('')
       	.end()
		});
        // get Edit Product
        $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const pers_name = $(this).data('pers_name');
            const pers_firstname = $(this).data('pers_firstname');
            const pers_matricule = $(this).data('pers_matricule');
            const pers_site = $(this).data('pers_site');
            const pers_date_birth = $(this).data('pers_date_birth');
            const pers_sexe = $(this).data('pers_sexe');
            const pers_age = $(this).data('pers_age');
            const pers_type = $(this).data('pers_type');
            const pers_contrat = $(this).data('pers_contrat');
            const pers_cot_social = $(this).data('pers_cot_social');
            const pers_cin = $(this).data('pers_cin');
            const pers_address = $(this).data('pers_address');
            const pers_sm = $(this).data('pers_sm');
            const pers_phone = $(this).data('pers_phone');
            const pers_mail = $(this).data('pers_mail');
            const pers_date_arrived = $(this).data('pers_date_arrived');
            const pers_date_gone = $(this).data('pers_date_gone');
            const pers_dep = $(this).data('pers_dep');
            const dep_id = $(this).data('dep_id');
            const pers_dr_conge = $(this).data('pers_dr_conge');
            const pers_nbr_conge = $(this).data('pers_nbr_conge');
            // Set data to Form Edit
            $('.id').val(id);
            $('.pers_name').val(pers_name);
            $('.pers_firstname').val(pers_firstname);
            $('.pers_matricule').val(pers_matricule);
            $('.pers_site').val(pers_site);
            $('.pers_date_birth').val(pers_date_birth);
            $('.pers_sexe').val(pers_sexe);
            $('.pers_age').val(pers_age);
            $('.pers_type').val(pers_type);
            $('.pers_contrat').val(pers_contrat);
            $('.pers_cot_social').val(pers_cot_social);
            $('.pers_cin').val(pers_cin);
            $('.pers_address').val(pers_address);
            $('.pers_sm').val(pers_sm);
            $('.pers_phone').val(pers_phone);
            $('.pers_mail').val(pers_mail);
            $('.pers_date_arrived').val(pers_date_arrived);
            $('.pers_date_gone').val(pers_date_gone);
            $('.dep_id').val(dep_id).trigger('change');
            $('.pers_dr_conge').val(pers_dr_conge);
            $('.pers_nbr_conge').val(pers_nbr_conge);
            // Call Modal Edit
            $('#newpers').modal('show');
        });
		
        
    });

</script>

