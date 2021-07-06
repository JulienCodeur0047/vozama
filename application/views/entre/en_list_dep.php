<?php $this->load->view('theme/header_entre')?>

                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search" style="margin-left: 18px;"></i></label><input type="search" class="form-control search-field" id="search-field" name="search" style="width: 309px;margin-left: 9px;background: rgb(255,255,255);border-radius: 1px;font-size: 13px;color: rgb(51,51,51);border-width: 1px;border-color: #cccccc;" placeholder="Recherche" /></div>
                </form><a class="btn btn-light action-button" role="button" href="#newdep"  data-toggle="modal" style="margin-top: 2px;background: rgb(86, 198, 198);font-size: 12px;border-radius: 0px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;"><i class="fa fa-plus" style="font-size: 14px;"></i>  Nouveau</a><a class="btn btn-light action-button" role="button" href="<?php echo base_url('enprintdep');?>" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-print" style="font-size: 14px;"></i></a>
            </div>
        </div>
    </nav>
    <div class="card" style="border-radius: 0px;margin-bottom: 22px;border-width: 0px;">
        <div class="card-body" style="margin-top: 0px;margin-bottom: 3px;">
            <h1 style="margin-bottom: 18px;height: 16px;font-size: 15px;color: var(--gray);">Département</h1>
            <div class="table-responsive" style="width: auto;font-size: 12px;">
                <table class="table">
                    <thead>
                        <tr style="color: var(--gray);">
                            <th style="width: 125px;">Nom de département</th>
                            <th style="width: 60px;">Numéro</th>
                            <th style="width: 50px;">Type</th>
                            <th style="width: 10px;"></th>
                        </tr>
                    </thead>
                    <tbody>
					<?php foreach ($data as $dep) { ?>
                        <tr>
                            <td><?php echo $dep->dep_name;?></td>
                            <td><?php echo $dep->dep_number;?></td>
                            <td><?php echo $dep->dep_type;?></td>
                            <td style="font-size: 12px;width: 30px;">
                            <a class="btn btn-light btn-edit" href="#"
							data-id="<?php echo $dep->id; ?>"
							data-dep_name="<?php echo $dep->dep_name; ?>"
							data-dep_number="<?php echo $dep->dep_number; ?>"
							data-dep_type="<?php echo $dep->dep_type; ?>"
							 type="button" style="background: rgb(153,217,168);margin-right: 0px;height: 34px;margin-top: -7px;padding-top: 1px;border-radius: 0px;"><i class="fa fa-pencil-square-o" style="font-size: 12px;padding-top: 0px;"></i></a>
							
							<a class="btn btn-light" type="button" 
                            onclick="return confirm('Voulez-vous supprimer le <?php echo $dep->dep_name;?> ?');"
							href="<?php echo base_url('endeletedep/'.$dep->id)?>" 
                            style="background: var(--red);width: 38px;height: 34px;margin-top: -7px;padding-top: 0px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-trash-o" style="font-size: 12px;width: 12px;padding-bottom: 0px;"></i></a></td>
                        </tr>
					<?php }?>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('entre/modal_create_dep');?>
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script>
    $(document).ready(function(){

		$('#newdep').on('hidden.bs.modal', function (e) {
  		$(this)
    	.find("input,textarea,select")
       	.val('')
       	.end()
		});
        // get Edit Product
        $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const dep_name = $(this).data('dep_name');
            const dep_number = $(this).data('dep_number');
            const dep_type = $(this).data('dep_type');
            // Set data to Form Edit
            $('.id').val(id);
            $('.dep_name').val(dep_name);
            $('.dep_number').val(dep_number);
            $('.dep_type').val(dep_type);
            // Call Modal Edit
            $('#newdep').modal('show');
        });
		
        
    });

</script>
