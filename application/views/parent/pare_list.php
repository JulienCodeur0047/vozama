<?php $this->load->view('theme/header_alph');?>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search" style="margin-left: 18px;"></i></label><input type="search" class="form-control search-field" id="search-field" name="search" style="width: 309px;margin-left: 9px;background: rgb(255,255,255);border-radius: 1px;font-size: 13px;color: rgb(51,51,51);border-width: 1px;border-color: #cccccc;" placeholder="Recherche" /></div>
                </form><a class="btn btn-light action-button" role="button" href="#" style="margin-top: 2px;background: rgb(86, 198, 198);font-size: 12px;border-radius: 0px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;"><i class="fa fa-plus" style="font-size: 14px;"></i>  Nouveau</a><a class="btn btn-light action-button" role="button" href="#" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-print" style="font-size: 14px;"></i></a>
            </div>
        </div>
    </nav>
    <div class="card" style="border-radius: 0px;margin-bottom: 22px;border-width: 0px;">
        <div class="card-body" style="margin-top: 0px;margin-bottom: 3px;">
            <h1 style="margin-bottom: 18px;height: 16px;font-size: 15px;color: var(--gray);">Liste de parents au vozama</h1>
            <div class="table-responsive" style="width: auto;font-size: 12px;">
                <table class="table">
                    <thead>
                        <tr style="color: var(--gray);">
                            <th style="width: 66px;">Mr</th>
                            <th style="width: 60px;">Mme</th>
                            <th style="width: 50px;">Poste</th>
                            <th style="width: 50px;">Activité</th>
                            <th style="width: 41px;">Adresse</th>
                            <th style="width: 44px;"></th>
                        </tr>
                    </thead>
                    <tbody>
					<?php foreach ($data as $pare) {?>
                        <tr>
                            <td><?php echo $pare->parent_pere_name;?></td>
                            <td><?php echo $pare->parent_mere_name;?></td>
                            <td><?php echo $pare->parent_poste;?></td>
                            <td><?php echo $pare->parent_pere_fonction;?></td>
                            <td><?php echo $pare->parent_address;?></td>
                            <td style="font-size: 12px;width: 30px;">
							<a class="btn btn-light" href="#"
							data-id="<?php echo $pare->id;?>"
							data-parent_poste="<?php echo $pare->parent_poste;?>"
							data-poste_id="<?php echo $pare->poste_id;?>"
							data-parent_pere_name="<?php echo $pare->parent_pere_name;?>"
							data-parent_mere_name="<?php echo $pare->parent_mere_name;?>"
							data-parent_pere_fonction="<?php echo $pare->parent_pere_fonction;?>"
							data-parent_address="<?php echo $pare->parent_address;?>"
							data-parent_nbr_enfant="<?php echo $pare->parent_nbr_enfant;?>"
							data-parent_anne_entre_voz="<?php echo $pare->parent_anne_entre_voz;?>"
							data-parent_anne_sorti_voz="<?php echo $pare->parent_anne_sorti_voz;?>"
							 type="button" style="background: rgb(153,217,168);margin-right: 0px;height: 34px;margin-top: -7px;padding-top: 1px;border-radius: 0px;"><i class="fa fa-pencil-square-o" style="font-size: 12px;padding-top: 0px;"></i></a>
							<a class="btn btn-light" type="button" style="background: rgb(210,128,136);width: 38px;height: 34px;margin-top: -7px;padding-top: 0px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-trash-o" style="font-size: 12px;width: 12px;padding-bottom: 0px;"></i></a></td>
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
<script>
    $(document).ready(function(){

		$('#newconge').on('hidden.bs.modal', function (e) {
  		$(this)
    	.find("input,textarea,select")
       	.val('')
       	.end()
		});
        // get Edit Product
        $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const parent_poste = $(this).data('parent_poste');
            const poste_id = $(this).data('poste_id');
            const parent_pere_name = $(this).data('parent_pere_name');
            const parent_mere_name = $(this).data('parent_mere_name');
            const parent_pere_fonction = $(this).data('parent_pere_fonction');
            const parent_address = $(this).data('parent_address');
            const parent_nbr_enfant = $(this).data('parent_nbr_enfant');
            const parent_anne_entre_voz = $(this).data('parent_anne_entre_voz');
            const parent_anne_sorti_voz = $(this).data('parent_anne_sorti_voz');
            // Set data to Form Edit
            $('.id').val(id);
            $('.parent_poste').val(parent_poste);
            $('.poste_id').val(poste_id).trigger('change');
            $('.parent_pere_name').val(parent_pere_name);
            $('.parent_mere_name').val(parent_mere_name);
            $('.parent_pere_fonction').val(parent_pere_fonction);
            $('.parent_address').val(parent_address);
            $('.parent_nbr_enfant').val(parent_nbr_enfant);
            $('.parent_anne_entre_voz').val(parent_anne_entre_voz);
            $('.parent_anne_sorti_voz').val(parent_anne_sorti_voz);
            // Call Modal Edit
            $('#newconge').modal('show');
        });
		
        
    });

</script>

