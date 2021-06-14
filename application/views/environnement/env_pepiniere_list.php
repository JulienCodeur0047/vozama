<?php $this->load->view('theme/header_env');?>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search" style="margin-left: 18px;"></i></label><input type="search" class="form-control search-field" id="search-field" name="search" style="width: 309px;margin-left: 9px;background: rgb(255,255,255);border-radius: 1px;font-size: 13px;color: rgb(51,51,51);border-width: 1px;border-color: #cccccc;" placeholder="Recherche" /></div>
                </form><a class="btn btn-light action-button" role="button" href="#newpep" data-toggle="modal" style="margin-top: 2px;background: rgb(86, 198, 198);font-size: 12px;border-radius: 0px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;"><i class="fa fa-plus" style="font-size: 14px;"></i>  Nouveau</a><a class="btn btn-light action-button" role="button" href="#" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-print" style="font-size: 14px;"></i></a>
            </div>
        </div>
    </nav>
    <div class="card" style="border-radius: 0px;margin-bottom: 22px;border-width: 0px;">
        <div class="card-body" style="margin-top: 0px;margin-bottom: 3px;">
            <h1 style="margin-bottom: 10px;height: 16px;font-size: 15px;color: var(--gray);">Pépinière et suivi</h1>
            <div class="table-responsive" style="width: auto;font-size: 12px;">
                <table class="table">
                    <thead>
                        <tr style="color: var(--gray);">
                            <th style="width: 96px;">Type</th>
                            <th style="width: 104px;">Libellé </th>
                            <th style="width: 122px;">Site</th>
                            <th style="width: 122px;">Poste</th>
                            <th style="width: 124px;">Quantité</th>
                            <th style="width: 114px;">Date</th>
                            <th style="width: 137px;">Durée du projet</th>
                            <th style="width: 208px;">Description</th>
                            <th style="width: 170px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php foreach ($data as $pep) { ?>
                        <tr>
						
                            <td><?php echo $pep->pep_type; ?></td>
                            <td><?php echo $pep->pep_libelle; ?></td>
                            <td><?php echo $pep->pep_site; ?></td>
                            <td><?php echo $pep->pep_poste; ?></td>
                            <td><?php echo $pep->pep_qte; ?></td>
                            <td><?php echo $pep->pep_date; ?></td>
                            <td><?php echo $pep->pep_durre_porjet; ?></td>
                            <td><?php echo $pep->pep_description; ?></td>
                            <td style="font-size: 12px;">
							<button class="btn btn-light" type="button" style="margin-right: 0px;height: 34px;padding-top: 3px;margin-top: -7px;border-radius: 0px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;background: rgb(234,234,234);"><i class="fa fa-eye" style="font-size: 12px;"></i></button>
							<a class="btn btn-light btn-edit" href="#"
							data-id="<?= $pep->id;?>"
							data-pep_type="<?= $pep->pep_type;?>"
							data-pep_libelle="<?= $pep->pep_libelle;?>"
							data-site_id="<?= $pep->site_id;?>"
							data-poste_id="<?= $pep->poste_id;?>"
							data-pep_qte="<?= $pep->pep_qte;?>"
							data-pep_durre_porjet="<?= $pep->pep_durre_porjet;?>"
							data-pep_description="<?= $pep->pep_description;?>"
							data-pep_taille="<?= $pep->pep_taille;?>"
							data-pep_surface="<?= $pep->pep_surface;?>"
							data-pep_prix="<?= $pep->pep_prix;?>"
							data-pep_date="<?= $pep->pep_date;?>"
							type="button" style="background: rgb(153,217,168);margin-right: 0px;height: 34px;margin-top: -7px;padding-top: 1px;border-radius: 0px;"><i class="fa fa-pencil-square-o" style="font-size: 12px;padding-top: 0px;"></i></a>
							<button class="btn btn-light" type="button" style="background: rgb(210,128,136);width: 38px;height: 34px;margin-top: -7px;padding-top: 0px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-trash-o" style="font-size: 12px;width: 12px;padding-bottom: 0px;"></i></button></td>
                        
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
<?php $this->load->view('environnement/modal_create_pep');?>
<?php $this->load->view('environnement/modal_update_pep');?>
</div>
<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script>
    $(document).ready(function(){

        // get Edit Product
        $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const pep_type = $(this).data('pep_type');
            const pep_libelle = $(this).data('pep_libelle');
            const pep_site = $(this).data('site_id');
            const pep_poste = $(this).data('poste_id');
            const pep_qte = $(this).data('pep_qte');
            const pep_durre_porjet = $(this).data('pep_durre_porjet');
            const pep_description = $(this).data('pep_description');
            const pep_taille = $(this).data('pep_taille');
            const pep_surface = $(this).data('pep_surface');
            const pep_prix = $(this).data('pep_prix');
            const pep_date = $(this).data('pep_date');

            // Set data to Form Edit
            $('.id').val(id);
            $('.pep_type').val(pep_type);
            $('.pep_libelle').val(pep_libelle);
            $('.pep_site').val(pep_site).trigger('change');
            $('.pep_poste').val(pep_poste).trigger('change');
            $('.pep_qte').val(pep_qte);
            $('.pep_durre_porjet').val(pep_durre_porjet);
            $('.pep_description').val(pep_description);
            $('.pep_taille').val(pep_taille);
            $('.pep_surface').val(pep_surface);
            $('.pep_prix').val(pep_prix);
            $('.pep_date').val(pep_date);
            // Call Modal Edit
            $('#pepedit').modal('show');
        });
        
    });
</script>
