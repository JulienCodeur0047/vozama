<?php $this->load->view('theme/header_entre')?>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search" style="margin-left: 18px;"></i></label><input class="form-control search-field" type="search" id="search-field" name="search" style="width: 309px;margin-left: 9px;background: rgb(255,255,255);border-radius: 1px;font-size: 13px;color: rgb(51,51,51);border-width: 1px;border-color: #cccccc;" placeholder="Recherche" /></div>
                </form><a class="btn btn-light action-button" role="button" href="#newconge" data-toggle="modal" style="margin-top: 2px;background: rgb(86, 198, 198);font-size: 12px;border-radius: 0px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;"><i class="fa fa-plus" style="font-size: 14px;"></i>  Nouveau</a><a class="btn btn-light action-button" role="button" href="#filterprintcong" data-toggle="modal" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-print" style="font-size: 14px;"></i></a>
            </div>
        </div>
    </nav>
    <div class="card" style="border-radius: 0px;margin-bottom: 22px;border-width: 0px;">
        <div class="card-body" style="margin-top: 0px;margin-bottom: 3px;">
            <h1 style="margin-bottom: 18px;height: 16px;font-size: 15px;color: var(--gray);">Congé</h1>
			<a class="btn btn-light action-button" role="button" href="#filtercong" data-toggle="modal" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 4px;"><i class="fa fa-filter" style="font-size: 13px;"></i>  Filtre</a>
			<a class="btn btn-light action-button" role="button" href="<?php echo base_url('encong');?>" style="margin-top: 2px;background: var(--teal);font-size: 12px;border-radius: 4px;"><i class="fa fa-refresh" style="font-size: 13px;"></i></a></h1>
            <div class="table-responsive" style="width: auto;font-size: 12px;">
                <table class="table">
                    <thead>
                        <tr style="color: var(--gray);">
                            <th style="width: 125px;">Nom &amp; Prénoms</th>
                            <th style="width: 60px;">Date début</th>
                            <th style="width: 50px;">Date Fin</th>
                            <th style="width: 50px;">Nbr Jour</th>
							<th style="width: 50px;">Prix</th>
                            <th style="width: 30px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data as $cong) { ?>
                        <tr>
                            <td><?php echo $cong->conge_pers; ?></td>
                            <td><?php echo $cong->conge_date_start; ?></td>
                            <td><?php echo $cong->conge_date_end; ?></td>
                            <td><?php echo $cong->conge_nbr_day; ?></td>
                            <td><?php echo $cong->conge_price; ?> Ar</td>
                            <td style="font-size: 12px;width: 30px;">
                            
                            <a class="btn btn-light btn-edit" href="#"
							data-id="<?php echo $cong->id;?>"
							data-conge_pers="<?php echo $cong->conge_pers;?>"
							data-conge_date_start="<?php echo $cong->conge_date_start;?>"
							data-conge_date_end="<?php echo $cong->conge_date_end;?>"
							data-conge_nbr_day="<?php echo $cong->conge_nbr_day;?>"
							data-pers_id="<?php echo $cong->pers_id;?>"
							data-conge_date_reprise="<?php echo $cong->conge_date_reprise;?>"
							data-conge_droit="<?php echo $cong->conge_droit;?>"
							data-conge_motif="<?php echo $cong->conge_motif;?>"
							type="button" style="background: rgb(153,217,168);margin-right: 0px;height: 34px;margin-top: -7px;padding-top: 1px;border-radius: 0px;"><i class="fa fa-pencil-square-o" style="font-size: 12px;padding-top: 0px;"></i></a>
                            <a class="btn btn-light"
							onclick="return confirm('Voulez-vous supprimer le congé de <?php echo $cong->conge_pers;?> ?');"
							href="<?php echo base_url('endeletecong/'.$cong->id)?>" 
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
<?php $this->load->view('entre/modal_create_conge');?>
<?php $this->load->view('entre/modal_filter_conge');?>
<?php $this->load->view('entre/modal_print_filter_cong');?>
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
            const conge_pers = $(this).data('conge_pers');
            const conge_date_start = $(this).data('conge_date_start');
            const conge_date_end = $(this).data('conge_date_end');
            const conge_nbr_day = $(this).data('conge_nbr_day');
            const pers_id = $(this).data('pers_id');
            const conge_date_reprise = $(this).data('conge_date_reprise');
            const conge_droit = $(this).data('conge_droit');
            const conge_motif = $(this).data('conge_motif');
            // Set data to Form Edit
            $('.id').val(id);
            $('.conge_pers').val(conge_pers);
            $('.conge_date_start').val(conge_date_start);
            $('.conge_date_end').val(conge_date_end);
            $('.conge_nbr_day').val(conge_nbr_day);
            $('.conge_date_reprise').val(conge_date_reprise);
            $('.conge_droit').val(conge_droit);
            $('.conge_motif').val(conge_motif);
            $('.pers_id').val(pers_id).trigger('change');
            // Call Modal Edit
            $('#newconge').modal('show');
        });
		
        
    });

</script>
