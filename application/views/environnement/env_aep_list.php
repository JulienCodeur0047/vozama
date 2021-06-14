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
                            <th style="width: 50px;">Numero</th>
                            <th style="width: 104px;">Poste</th>
                            <th style="width: 105px;height: 44px;">Site</th>
                            <th style="width: 122px;">Date de Création</th>
                            <th style="width: 157px;">Parrain Responsable</th>
                            <th style="width: 150px;height: -12px;">Description</th>
                            <th style="width: 100px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php foreach($aep as $aep){?>
                        <tr>
                            <td><?php echo $aep->id;?></td>
                            <td><?php echo $aep->aep_poste;?></td>
                            <td><?php echo $aep->aep_site;?></td>
                            <td><?php echo $aep->aep_date;?></td>
                            <td><?php echo $aep->aep_parrain;?></td>
                            <td><?php echo $aep->aep_description;?></td>
                            <td style="font-size: 12px;">
							<button class="btn btn-light" type="button" style="margin-right: 0px;height: 34px;padding-top: 3px;margin-top: -7px;border-radius: 0px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;background: rgb(234,234,234);"><i class="fa fa-eye" style="font-size: 12px;"></i></button>
							<a class="btn btn-light btn-edit" href="#" 
							data-id="<?= $aep->id;?>" 
							data-aep_description="<?= $aep->aep_description;?>" 
							data-poste_id="<?= $aep->poste_id;?>" 
							data-site_id="<?= $aep->site_id;?>" 
							data-aep_date="<?= $aep->aep_date;?>" 
							data-aep_parrain="<?= $aep->aep_parrain;?>" 
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
<?php $this->load->view('environnement/modal_create_aep')?>
<?php $this->load->view('environnement/modal_update_aep')?>
</div>
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script>
    $(document).ready(function(){

        // get Edit Product
        $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const aep_description = $(this).data('aep_description');
            const aep_poste = $(this).data('poste_id');
            const aep_site = $(this).data('site_id');
            const aep_date = $(this).data('aep_date');
            const aep_parrain = $(this).data('aep_parrain');
            // Set data to Form Edit
            $('.id').val(id);
            $('.aep_description').val(aep_description);
            $('.aep_poste').val(aep_poste).trigger('change');
            $('.aep_site').val(aep_site).trigger('change');
            $('.aep_date').val(aep_date);
            $('.aep_parrain').val(aep_parrain);
            // Call Modal Edit
            $('#aepedit').modal('show');
        });
        
    });
</script>
