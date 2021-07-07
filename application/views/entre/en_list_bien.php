<?php $this->load->view('theme/header_entre')?>

                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search" style="margin-left: 18px;"></i></label><input type="search" class="form-control search-field" id="search-field" name="search" style="width: 309px;margin-left: 9px;background: rgb(255,255,255);border-radius: 1px;font-size: 13px;color: rgb(51,51,51);border-width: 1px;border-color: #cccccc;" placeholder="Recherche" /></div>
                </form><a class="btn btn-light action-button" role="button" href="#newbien" data-toggle="modal" style="margin-top: 2px;background: rgb(86, 198, 198);font-size: 12px;border-radius: 0px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;"><i class="fa fa-plus" style="font-size: 14px;"></i>  Nouveau</a><a class="btn btn-light action-button" role="button" href="#filterprintbien" data-toggle="modal" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-print" style="font-size: 14px;"></i></a>
            </div>
        </div>
    </nav>
    <div class="card" style="border-radius: 0px;margin-bottom: 22px;border-width: 0px;">
        <div class="card-body" style="margin-top: 0px;margin-bottom: 3px;">
            <h1 style="margin-bottom: 18px;height: 16px;font-size: 15px;color: var(--gray);">Bien</h1>
			<a class="btn btn-light action-button" role="button" href="#filterbien" data-toggle="modal" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 4px;"><i class="fa fa-filter" style="font-size: 13px;"></i>  Filtre</a>
			<a class="btn btn-light action-button" role="button" href="<?php echo base_url('enbien');?>" style="margin-top: 2px;background: var(--teal);font-size: 12px;border-radius: 4px;"><i class="fa fa-refresh" style="font-size: 13px;"></i></a></h1> 
            <div class="table-responsive" style="width: auto;font-size: 12px;">
                <table class="table">
                    <thead>
                        <tr style="color: var(--gray);">
                            <th style="width: 66px;">Libelle</th>
                            <th style="width: 47px;">Matricule</th>
                            <th style="width: 35px;">Type</th>
                            <th style="width: 51px;">Département</th>
                            <th style="width: 43px;">Date d&#39;arriver</th>
                            <th style="width: 43px;">Date de disfonction</th>
                            <th style="width: 30px;">Responsable</th>
                            <th style="width: 3px;"></th>
                        </tr>
                    </thead>
                    <tbody>
					<?php foreach ($data as $bien) { ?>
                        <tr>
                            <td><?php echo $bien->bien_name;?></td>
                            <td><?php echo $bien->bien_mat;?></td>
                            <td><?php echo $bien->bien_type;?></td>
                            <td><?php echo $bien->bien_dep;?></td>
                            <td><?php echo $bien->bien_date_arrive;?></td>
                            <td><?php echo $bien->bien_date_disf;?></td>
                            <td><?php echo $bien->bien_resp;?></td>
                            <td style="font-size: 12px;width: 30px;">
							<a class="btn btn-light btn-edit" href="#"
							data-id="<?php echo $bien->id;?>"
							data-bien_name="<?php echo $bien->bien_name;?>"
							data-bien_mat="<?php echo $bien->bien_mat;?>"
							data-bien_dep="<?php echo $bien->bien_dep;?>"
							data-bien_date_arrive="<?php echo $bien->bien_date_arrive;?>"
							data-bien_date_disf="<?php echo $bien->bien_date_disf;?>"
							data-bien_resp="<?php echo $bien->bien_resp;?>"
							data-bien_type="<?php echo $bien->bien_type;?>"
							data-dep_id="<?php echo $bien->dep_id;?>"
							 type="button" style="background: rgb(153,217,168);margin-right: 0px;height: 34px;margin-top: -7px;padding-top: 1px;border-radius: 0px;"><i class="fa fa-pencil-square-o" style="font-size: 12px;padding-top: 0px;"></i></a>
							<a class="btn btn-light" 
							onclick="return confirm('Voulez-vous supprimer <?php echo $bien->bien_name;?> <?php echo $bien->bien_type;?> ?');"
							href="<?php echo base_url('endeletebien/'.$bien->id)?>" 
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
<?php $this->load->view('entre/modal_create_bien');?>
<?php $this->load->view('entre/modal_filter_bien');?>
<?php $this->load->view('entre/modal_print_filter_bien');?>
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script>
    $(document).ready(function(){

		$('#newbien').on('hidden.bs.modal', function (e) {
  		$(this)
    	.find("input,textarea,select")
       	.val('')
       	.end()
		});
		$('#filterbien').on('hidden.bs.modal', function (e) {
  		$(this)
    	.find("input,textarea,select")
       	.val('')
       	.end()
		});
		$('#filterprintbien').on('hidden.bs.modal', function (e) {
  		$(this)
    	.find("input,textarea,select")
       	.val('')
       	.end()
		});
        // get Edit Product
        $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const bien_name = $(this).data('bien_name');
            const bien_mat = $(this).data('bien_mat');
            const bien_date_arrive = $(this).data('bien_date_arrive');
            const bien_date_disf = $(this).data('bien_date_disf');
            const bien_resp = $(this).data('bien_resp');
            const bien_type = $(this).data('bien_type');
            const dep_id = $(this).data('dep_id');
            // Set data to Form Edit
            $('.id').val(id);
            $('.bien_name').val(bien_name);
            $('.bien_mat').val(bien_mat);
            $('.bien_date_arrive').val(bien_date_arrive);
            $('.bien_date_disf').val(bien_date_disf);
            $('.bien_resp').val(bien_resp);
            $('.bien_type').val(bien_type);
            $('.dep_id').val(dep_id).trigger('change');
            // Call Modal Edit
            $('#newbien').modal('show');
        });
		
        
    });

</script>
