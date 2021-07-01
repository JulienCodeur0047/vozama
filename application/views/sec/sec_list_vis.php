<?php $this->load->view('theme/header_sec'); ?>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search" style="margin-left: 18px;"></i></label><input type="search" class="form-control search-field" id="search-field" name="search" style="width: 309px;margin-left: 9px;background: rgb(255,255,255);border-radius: 1px;font-size: 13px;color: rgb(51,51,51);border-width: 1px;border-color: #cccccc;" placeholder="Recherche" /></div>
                </form><a class="btn btn-light action-button" role="button" href="#visite" data-toggle="modal" style="margin-top: 2px;background: rgb(86, 198, 198);font-size: 12px;border-radius: 0px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;"><i class="fa fa-plus" style="font-size: 14px;"></i>  Visiteur</a><a class="btn btn-light action-button" role="button" href="#filterprint" data-toggle="modal" style="margin-top: 2px;background: var(--gray);font-size: 12px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-print" style="font-size: 14px;"></i></a>
            </div>
        </div>
    </nav>
    <div class="card" style="border-radius: 0px;margin-bottom: 22px;border-width: 0px;">
        <div class="card-body" style="margin-top: 0px;margin-bottom: 3px;">
            <h1 style="margin-bottom: 18px;height: 16px;font-size: 15px;color: var(--gray);">Entrée/sortie des Visiteurs </h1>
            <div class="table-responsive" style="width: auto;font-size: 12px;">
                <table class="table">
                    <thead>
                        <tr style="color: var(--gray);">
                            <th style="width: 125px;">Nom et Prénoms</th>
                            <th style="width: 80px;">CIN</th>
                            <th style="width: 60px;">Objectif</th>
                            <th style="width: 50px;">Date</th>
                            <th style="width: 50px;">Heure d&#39;entré</th>
                            <th style="width: 50px;">Heure de sorti</th>
                            <th style="width: 41px;">N<strong>° </strong>badge</th>
                            <th style="width: 30px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data as $vis) { ?>
                        <tr>
                            <td><?php echo $vis->vis_name;?> <?php echo $vis->vis_firstname;?></td>
                            <td><?php echo $vis->vis_cin;?></td>
                            <td><?php echo $vis->vis_objectif;?></td>
                            <td><?php echo $vis->vis_date;?></td>
                            <td><?php echo $vis->vis_hr_in;?></td>
                            <td><?php echo $vis->vis_hr_o;?></td>
                            <td><?php echo $vis->vis_num_badge;?></td>
                            <td style="font-size: 12px;width: 30px;">
                            <a class="btn btn-light btn-edit" href="#"
                            data-id="<?php echo $vis->id;?>"
                            data-vis_name="<?php echo $vis->vis_name;?>"
                            data-vis_firstname="<?php echo $vis->vis_firstname;?>"
                             type="button" style="background: var(--green);width: 38px;height: 34px;margin-top: -7px;padding-top: 0px;border-radius: 0px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-angle-double-right" style="font-size: 12px;width: 12px;padding-bottom: 0px;"></i></a>
                            <a class="btn btn-light" 
                            onclick="return confirm('Voulez-vous supprimer le visite du <?php echo $vis->vis_date;?> Visiteur: <?php echo $vis->vis_name;?> <?php echo $vis->vis_firstname;?>?');"
							href="<?php echo base_url('secdelvis/'.$vis->id)?>" 
                            
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
<?php $this->load->view('sec/modal_visite');?>
<?php $this->load->view('sec/modal_hr_sorti_vis');?>
<?php $this->load->view('sec/modal_filter_print_vis');?>
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script>

</script>
<script>
    $(document).ready(function(){

		$('#visite').on('hidden.bs.modal', function (e) {
  		$(this)
    	.find("input,textarea,select")
       	.val('')
       	.end()
		});
        $('#sorti').on('hidden.bs.modal', function (e) {
  		$(this)
    	.find("input,textarea,select")
       	.val('')
       	.end()
		});
        $('#filterprint').on('hidden.bs.modal', function (e) {
  		$(this)
    	.find("input,textarea,select")
       	.val('')
       	.end()
		});
        // get Edit Product
        $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const vis_name = $(this).data('vis_name');
            const vis_firstname = $(this).data('vis_firstname');
            const vis_hr_o = $(this).data('vis_hr_o');
            // Set data to Form Edit
            $('.id').val(id);
            $('.vis_name_firstname').val(vis_name+" "+vis_firstname);
            $('.vis_name').val(vis_name);
            $('.vis_hr_o').val(vis_hr_o);
            // Call Modal Edit
            $('#sorti').modal('show');
        });
		
        
    });

</script>